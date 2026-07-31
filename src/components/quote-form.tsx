'use client';

import { useActionState } from 'react';
import { useFormStatus } from 'react-dom';

import { submitQuote } from '@/lib/quote-action';
import { budgetOptions, timelineOptions, type QuoteState } from '@/lib/quote-options';

const initialState: QuoteState = { status: 'idle' };

const fieldClass =
  'h-11 w-full rounded-lg border border-border bg-background px-3.5 text-sm outline-none transition-colors placeholder:text-muted-foreground focus:border-foreground/30 focus:ring-4 focus:ring-foreground/5';

const labelClass = 'block text-sm font-medium';

function SubmitButton() {
  const { pending } = useFormStatus();

  return (
    <button
      type="submit"
      disabled={pending}
      className="inline-flex h-11 items-center justify-center gap-2 rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 disabled:opacity-60"
    >
      {pending ? 'Sending…' : 'Send my request'}
      {!pending && (
        <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
          <path d="M5 12h14M13 6l6 6-6 6" />
        </svg>
      )}
    </button>
  );
}

function FieldError({ message }: { message?: string }) {
  if (!message) return null;

  return <p className="mt-1.5 text-xs text-destructive">{message}</p>;
}

export function QuoteForm() {
  const [state, formAction] = useActionState(submitQuote, initialState);

  if (state.status === 'success') {
    return (
      <div className="rounded-2xl border border-border bg-card p-10 text-center">
        <span className="mx-auto flex size-12 items-center justify-center rounded-full bg-emerald-500/10 text-emerald-600">
          <svg className="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
            <path d="m5 12 5 5L20 7" />
          </svg>
        </span>
        <h3 className="mt-5 text-xl font-medium tracking-tight">Request received</h3>
        <p className="mx-auto mt-2 max-w-sm text-sm leading-relaxed text-muted-foreground">{state.message}</p>
      </div>
    );
  }

  return (
    <form action={formAction} className="rounded-2xl border border-border bg-card p-6 sm:p-8">
      <div className="grid gap-5 sm:grid-cols-2">
        <div>
          <label className={labelClass} htmlFor="name">
            Your name <span className="text-destructive">*</span>
          </label>
          <input id="name" name="name" required autoComplete="name" placeholder="Jane Doe" className={`mt-2 ${fieldClass}`} />
          <FieldError message={state.errors?.name} />
        </div>

        <div>
          <label className={labelClass} htmlFor="email">
            Work email <span className="text-destructive">*</span>
          </label>
          <input id="email" name="email" type="email" required autoComplete="email" placeholder="jane@company.com" className={`mt-2 ${fieldClass}`} />
          <FieldError message={state.errors?.email} />
        </div>

        <div>
          <label className={labelClass} htmlFor="company">
            Company
          </label>
          <input id="company" name="company" autoComplete="organization" placeholder="Company name" className={`mt-2 ${fieldClass}`} />
        </div>

        <div>
          <label className={labelClass} htmlFor="budget">
            Budget range
          </label>
          <select id="budget" name="budget" defaultValue="" className={`mt-2 ${fieldClass}`}>
            <option value="">Select a range</option>
            {budgetOptions.map((option) => (
              <option key={option} value={option}>
                {option}
              </option>
            ))}
          </select>
        </div>

        <div className="sm:col-span-2">
          <label className={labelClass} htmlFor="timeline">
            Timeline
          </label>
          <div className="mt-2 flex flex-wrap gap-2">
            {timelineOptions.map((option, index) => (
              <label
                key={option}
                className="cursor-pointer rounded-lg border border-border px-3.5 py-2 text-sm transition-colors has-[:checked]:border-foreground has-[:checked]:bg-foreground has-[:checked]:text-background hover:bg-secondary has-[:checked]:hover:bg-foreground"
              >
                <input
                  type="radio"
                  name="timeline"
                  value={option}
                  defaultChecked={index === 1}
                  className="sr-only"
                  id={index === 0 ? 'timeline' : undefined}
                />
                {option}
              </label>
            ))}
          </div>
        </div>

        <div className="sm:col-span-2">
          <label className={labelClass} htmlFor="project">
            What are you building? <span className="text-destructive">*</span>
          </label>
          <textarea
            id="project"
            name="project"
            required
            rows={5}
            placeholder="Goals, who it is for, what exists today, and anything that must be true for it to succeed."
            className="mt-2 w-full rounded-lg border border-border bg-background px-3.5 py-3 text-sm leading-relaxed outline-none transition-colors placeholder:text-muted-foreground focus:border-foreground/30 focus:ring-4 focus:ring-foreground/5"
          />
          <FieldError message={state.errors?.project} />
        </div>
      </div>

      {/* Honeypot — hidden from people, tempting to bots. */}
      <div aria-hidden="true" className="absolute left-[-9999px]">
        <label htmlFor="company_website">Leave this empty</label>
        <input id="company_website" name="company_website" tabIndex={-1} autoComplete="off" />
      </div>

      {state.status === 'error' && state.message && (
        <p className="mt-5 rounded-lg border border-destructive/30 bg-destructive/5 px-4 py-3 text-sm text-destructive">
          {state.message}
        </p>
      )}

      <div className="mt-7 flex flex-col items-start gap-4 border-t border-border pt-6 sm:flex-row sm:items-center sm:justify-between">
        <p className="text-xs leading-relaxed text-muted-foreground">
          We reply within one business day. No newsletter, no sales sequence.
        </p>
        <SubmitButton />
      </div>
    </form>
  );
}
