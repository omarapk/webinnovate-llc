import type { Metadata } from 'next';
import Link from 'next/link';

import { DirectContact } from '@/components/direct-contact';
import { PageHeader } from '@/components/page-header';
import { QuoteForm } from '@/components/quote-form';
import { Reveal, RevealGroup } from '@/components/reveal';
import { SocialIcon } from '@/components/social-icon';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'Contact WebInnovate — Request a Quote or Discuss Your Project',
  description:
    'Contact WebInnovate LLC to request a quote or discuss a custom SaaS project. Email contact@webinnovate.dev or chat on WhatsApp.',
  alternates: { canonical: '/contact' },
};

export default function ContactPage() {
  // No mail provider means a submission would go nowhere, so the page offers
  // the inbox directly instead of a form that cannot deliver.
  const canDeliverQuotes = Boolean(process.env.RESEND_API_KEY);

  return (
    <>
      <PageHeader
        eyebrow="Contact"
        heading="Tell us about your project"
        lead="Request a quote or jump on WhatsApp — we will tell you honestly whether we are the right fit, and what a build would look like."
      />

      {/* Quote form — the destination of every "Request a quote" CTA. */}
      <section id="quote" className="scroll-mt-20 border-b border-border bg-muted/40">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <div className="grid gap-12 lg:grid-cols-[0.85fr_1.15fr] lg:gap-16">
            <RevealGroup>
              <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
                Request a quote
              </Reveal>
              <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                Tell us what you want to build
              </Reveal>
              <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                {canDeliverQuotes ? 'Fill this in' : 'Get in touch'} and you get back a scoped proposal
                — what we would build, in what order, how long it takes and what it costs.
              </Reveal>

              <Reveal as="ul" className="mt-8 space-y-3">
                {[
                  'A written scope, not a vague estimate',
                  'A realistic timeline with milestones',
                  'An honest no if we are not the right fit',
                ].map((point) => (
                  <li key={point} className="flex items-start gap-2.5 text-sm text-muted-foreground">
                    <svg className="mt-0.5 size-4 shrink-0 text-foreground" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                      <path d="m5 12 5 5L20 7" />
                    </svg>
                    {point}
                  </li>
                ))}
              </Reveal>

              {canDeliverQuotes ? (
                <Reveal className="mt-8 rounded-xl border border-border bg-card p-5">
                  <p className="text-sm font-medium">Prefer to talk first?</p>
                  <p className="mt-1.5 text-sm leading-relaxed text-muted-foreground">
                    Message us on WhatsApp at{' '}
                    <a className="font-medium text-foreground underline-offset-4 hover:underline" href={site.whatsapp.url} rel="noopener">
                      {site.whatsapp.display}
                    </a>
                    .
                  </p>
                </Reveal>
              ) : null}
            </RevealGroup>

            <RevealGroup>
              <Reveal>{canDeliverQuotes ? <QuoteForm /> : <DirectContact />}</Reveal>
            </RevealGroup>
          </div>
        </div>
      </section>

      <section className="border-b border-border">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="grid gap-6 lg:grid-cols-2">
            <Reveal
              as="a"
              href={`mailto:${site.email}`}
              className="group flex flex-col rounded-xl border border-border bg-card p-8 transition-all hover:border-foreground/20 hover:shadow-sm"
            >
              <span className="inline-flex size-10 items-center justify-center rounded-lg border border-border">
                <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                  <rect x="2.5" y="5" width="19" height="14" rx="2" />
                  <path d="m3 7 9 6 9-6" />
                </svg>
              </span>
              <h2 className="mt-6 text-lg font-medium tracking-tight">Email — request a quote</h2>
              <p className="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">
                Share your goals, timeline and constraints. We typically reply within one business day.
              </p>
              <span className="mt-6 text-sm font-medium">{site.email}</span>
            </Reveal>

            <Reveal
              as="a"
              href={site.whatsapp.url}
              rel="noopener"
              className="group flex flex-col rounded-xl border border-border bg-card p-8 transition-all hover:border-foreground/20 hover:shadow-sm"
            >
              <span className="inline-flex size-10 items-center justify-center rounded-lg border border-border">
                <SocialIcon label="WhatsApp" />
              </span>
              <h2 className="mt-6 text-lg font-medium tracking-tight">WhatsApp — discuss a project</h2>
              <p className="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">
                The fastest way to reach the team — including screen sharing when you need it.
              </p>
              <span className="mt-6 text-sm font-medium">{site.whatsapp.display}</span>
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-6">
            <Reveal className="flex flex-col gap-6 rounded-xl border border-border bg-card p-8 sm:flex-row sm:items-start">
              <span className="inline-flex size-10 shrink-0 items-center justify-center rounded-lg border border-border">
                <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
              </span>
              <div>
                <h2 className="text-lg font-medium tracking-tight">Registered office</h2>
                <p className="mt-2 text-sm leading-relaxed text-muted-foreground">
                  {site.company}
                  <br />
                  {site.address.street}
                  <br />
                  {site.address.city}, {site.address.state} {site.address.zip}, {site.address.country}
                </p>
                <p className="mt-3 text-sm text-muted-foreground">
                  Tel{' '}
                  <a className="font-medium text-foreground transition-colors hover:underline" href={site.phone.url}>
                    {site.phone.display}
                  </a>
                </p>
              </div>
            </Reveal>
          </RevealGroup>
        </div>
      </section>

      <section className="py-24">
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <RevealGroup className="mx-auto max-w-2xl text-center">
            <Reveal as="h2" className="text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              Looking for a product reference?
            </Reveal>
            <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
              See live SaaS products we designed and operate, or browse the Help Center for an existing{' '}
              {site.suite} app.
            </Reveal>
            <Reveal className="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
              <Link
                href="/#references"
                className="inline-flex h-11 w-full items-center justify-center rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto"
              >
                View references
              </Link>
              <a
                href="https://webinnovate-leadform.crisp.help/en/"
                rel="noopener"
                className="inline-flex h-11 w-full items-center justify-center rounded-lg border border-border bg-card px-6 text-sm font-medium transition-colors hover:bg-secondary sm:w-auto"
              >
                Help Center
              </a>
            </Reveal>
          </RevealGroup>
        </div>
      </section>
    </>
  );
}
