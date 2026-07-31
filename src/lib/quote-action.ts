'use server';

import type { QuoteState } from '@/lib/quote-options';
import { site } from '@/data/site';

type QuotePayload = {
  name: string;
  email: string;
  company: string;
  budget: string;
  timeline: string;
  project: string;
};

function text(formData: FormData, field: string) {
  return String(formData.get(field) ?? '').trim();
}

export async function submitQuote(_previous: QuoteState, formData: FormData): Promise<QuoteState> {
  // Bots fill hidden fields; humans leave them empty.
  if (text(formData, 'company_website')) {
    return { status: 'success' };
  }

  const payload: QuotePayload = {
    name: text(formData, 'name'),
    email: text(formData, 'email'),
    company: text(formData, 'company'),
    budget: text(formData, 'budget'),
    timeline: text(formData, 'timeline'),
    project: text(formData, 'project'),
  };

  const errors: Record<string, string> = {};

  if (payload.name.length < 2) errors.name = 'Please tell us your name.';
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(payload.email)) errors.email = 'A valid email is required.';
  if (payload.project.length < 20) errors.project = 'A couple of sentences helps us scope it properly.';

  if (Object.keys(errors).length) {
    return { status: 'error', message: 'Please check the highlighted fields.', errors };
  }

  if (!(await deliver(payload))) {
    return {
      status: 'error',
      message: `Something went wrong on our side. Please email us directly at ${site.email}.`,
    };
  }

  return {
    status: 'success',
    message: 'Thanks — your request is in. We reply within one business day.',
  };
}

/**
 * Send the request to the team.
 *
 * Uses Resend when `RESEND_API_KEY` is configured. Without it — local dev, or
 * before the key is provisioned — the request is logged so nothing is silently
 * dropped while the integration is pending.
 */
async function deliver(payload: QuotePayload): Promise<boolean> {
  const apiKey = process.env.RESEND_API_KEY;

  const body = [
    `Name: ${payload.name}`,
    `Email: ${payload.email}`,
    `Company: ${payload.company || '—'}`,
    `Budget: ${payload.budget || '—'}`,
    `Timeline: ${payload.timeline || '—'}`,
    '',
    payload.project,
  ].join('\n');

  if (!apiKey) {
    console.info('[quote request]\n%s', body);
    return true;
  }

  try {
    const response = await fetch('https://api.resend.com/emails', {
      method: 'POST',
      headers: {
        Authorization: `Bearer ${apiKey}`,
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        from: process.env.QUOTE_FROM_EMAIL ?? 'WebInnovate <onboarding@resend.dev>',
        to: [site.email],
        reply_to: payload.email,
        subject: `Quote request — ${payload.name}${payload.company ? ` (${payload.company})` : ''}`,
        text: body,
      }),
    });

    return response.ok;
  } catch (error) {
    console.error('[quote request] delivery failed', error);
    return false;
  }
}
