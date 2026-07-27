import type { Metadata } from 'next';
import Image from 'next/image';
import Link from 'next/link';

import { AppIllustration } from '@/components/app-illustration';
import { Counter } from '@/components/counter';
import { HeroVisual } from '@/components/hero-visual';
import { Reveal, RevealGroup, RevealLink } from '@/components/reveal';
import { ServiceIcon } from '@/components/service-icon';
import { apps } from '@/data/apps';
import { pillars, process, services } from '@/data/home';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'WebInnovate — Custom SaaS Solutions Built by Experts',
  description:
    'WebInnovate LLC designs, builds and operates custom SaaS products. Development, security, SEO, support and maintenance — so your software drives real revenue. Request a quote.',
  alternates: { canonical: '/' },
};

const organizationSchema = {
  '@context': 'https://schema.org',
  '@type': 'Organization',
  name: site.company,
  alternateName: site.brand,
  url: site.url,
  email: site.email,
  telephone: site.phone.display,
  description: site.description,
  contactPoint: {
    '@type': 'ContactPoint',
    contactType: 'customer support',
    telephone: site.phone.display,
    email: site.email,
    areaServed: 'Worldwide',
    availableLanguage: ['English', 'French'],
  },
  address: {
    '@type': 'PostalAddress',
    streetAddress: site.address.street,
    addressLocality: site.address.city,
    addressRegion: site.address.state,
    postalCode: site.address.zip,
    addressCountry: 'US',
  },
  sameAs: site.socials.map((social) => social.url),
  makesOffer: {
    '@type': 'Offer',
    itemOffered: {
      '@type': 'Service',
      name: 'Custom SaaS development',
      description:
        'End-to-end design, development, security, SEO, support and maintenance of custom SaaS products.',
    },
  },
};

/** Chevrons sit on the process rail, between each pair of nodes. */
const railChevrons = ['31.25%', '50%', '68.75%'];

export default function HomePage() {
  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(organizationSchema) }}
      />

      {/* Hero — studio positioning, no product apps */}
      <section id="top" className="relative overflow-hidden border-b border-border">
        <div className="bg-grid mask-fade-bottom pointer-events-none absolute inset-0" aria-hidden="true" />

        <div className="relative mx-auto max-w-6xl px-4 pb-28 pt-20 sm:px-6 sm:pb-32 sm:pt-24 lg:px-8">
          <RevealGroup className="mx-auto max-w-3xl text-center">
            <Reveal
              as="p"
              className="inline-flex items-center gap-2 rounded-full border border-border bg-card/80 px-3 py-1 text-sm text-muted-foreground shadow-sm backdrop-blur"
            >
              <span className="size-1.5 rounded-full bg-emerald-500" aria-hidden="true" />
              {site.company} · Custom SaaS studio
            </Reveal>

            <Reveal
              as="h1"
              className="mt-8 text-4xl font-semibold leading-[1.05] tracking-tight text-balance sm:text-6xl lg:text-[4.1rem]"
            >
              Custom SaaS built to{' '}
              <span className="relative whitespace-nowrap">
                make you millions
                <svg
                  className="absolute -bottom-2 left-0 h-[0.28em] w-full"
                  viewBox="0 0 360 12"
                  fill="none"
                  preserveAspectRatio="none"
                  aria-hidden="true"
                >
                  <defs>
                    <linearGradient id="hero-underline" x1="0" x2="1" y1="0" y2="0">
                      <stop offset="0%" stopColor="#A21CAF" />
                      <stop offset="55%" stopColor="#DB2777" />
                      <stop offset="100%" stopColor="#7C3AED" />
                    </linearGradient>
                  </defs>
                  <path
                    d="M4 8.5C72 3 148 2 220 4.5c48 1.6 96 3.6 136 2"
                    stroke="url(#hero-underline)"
                    strokeWidth="6"
                    strokeLinecap="round"
                  />
                </svg>
              </span>
            </Reveal>

            <Reveal as="p" className="mx-auto mt-7 max-w-2xl text-lg leading-relaxed text-muted-foreground text-pretty">
              Trust an expert team for the full product lifecycle —{' '}
              <span className="text-foreground">development</span>,{' '}
              <span className="text-foreground">security</span>, <span className="text-foreground">SEO</span>,{' '}
              <span className="text-foreground">support</span> and{' '}
              <span className="text-foreground">maintenance</span>. We design and ship SaaS that converts
              visitors into revenue.
            </Reveal>

            <Reveal className="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
              <Link
                href="/contact#quote"
                className="group inline-flex h-11 w-full items-center justify-center gap-2 rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto"
              >
                Request a quote
                <svg className="size-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                  <path d="M5 12h14M13 6l6 6-6 6" />
                </svg>
              </Link>
              <a
                href={site.whatsapp.url}
                rel="noopener"
                className="inline-flex h-11 w-full items-center justify-center rounded-lg border border-border bg-card px-6 text-sm font-medium shadow-sm transition-colors hover:bg-secondary sm:w-auto"
              >
                Discuss your project
              </a>
            </Reveal>

            <Reveal as="p" className="mt-8 text-sm text-muted-foreground">
              End-to-end delivery · Production-grade security · SEO baked in · Long-term support
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-20">
            <Reveal>
              <HeroVisual />
            </Reveal>
          </RevealGroup>
        </div>
      </section>

      {/* Trust stats */}
      <section className="border-b border-border">
        <RevealGroup className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <Reveal className="grid grid-cols-2 gap-px overflow-hidden bg-border lg:grid-cols-4">
            {site.trustStats.map((stat) => (
              <div key={stat.label} className="bg-background px-6 py-10 text-center">
                <div className="text-4xl font-semibold tracking-tight tabular-nums">
                  <Counter to={stat.count} />
                  {stat.suffix}
                  <span className="text-muted-foreground">+</span>
                </div>
                <p className="mt-2 text-sm text-muted-foreground">{stat.label}</p>
              </div>
            ))}
          </Reveal>
        </RevealGroup>
      </section>

      {/* Solutions / services */}
      <section id="solutions" className="section-dark relative scroll-mt-20 overflow-hidden border-b border-border">
        <div className="bg-grid mask-fade-b-soft pointer-events-none absolute inset-0" aria-hidden="true" />
        <div
          className="glow pointer-events-none absolute left-1/4 top-0 size-[560px] -translate-x-1/2 -translate-y-1/3 rounded-full"
          style={{ '--glow': 'oklch(0.55 0.22 290 / 0.26)' } as React.CSSProperties}
          aria-hidden="true"
        />

        <div className="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              What we deliver
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              Everything a serious SaaS needs — under one team
            </Reveal>
            <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
              You do not juggle five vendors. We own development, security, SEO, support and maintenance so
              the product ships, ranks, stays secure and keeps growing.
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-5 sm:grid-cols-2">
            {services.map((service) => (
              <Reveal
                key={service.title}
                className="group flex flex-col rounded-2xl border border-border bg-card p-8 transition-all hover:border-foreground/15 hover:shadow-lg"
              >
                <span className="flex size-10 items-center justify-center rounded-lg border border-border bg-muted" aria-hidden="true">
                  <ServiceIcon name={service.icon} />
                </span>

                <h3 className="mt-6 text-xl font-medium tracking-tight">{service.title}</h3>
                <p className="mt-3 flex-1 text-sm leading-relaxed text-muted-foreground">{service.description}</p>

                <ul className="mt-6 space-y-2.5 border-t border-border pt-6">
                  {service.points.map((point) => (
                    <li key={point} className="flex items-start gap-2.5 text-sm">
                      <svg className="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                        <path d="m5 12 5 5L20 7" />
                      </svg>
                      {point}
                    </li>
                  ))}
                </ul>
              </Reveal>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/* Process */}
      <section id="process" className="scroll-mt-20 border-b border-border bg-muted/40">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              How we work
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              From brief to revenue — a clear path
            </Reveal>
            <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
              Four stages, no black box. You always know what is being built, why, and what lands next.
            </Reveal>
          </RevealGroup>

          {/* Step path: a gradient rail across the nodes on desktop, running
              down the left edge on smaller screens. */}
          <RevealGroup className="relative mt-16">
            <div
              className="pointer-events-none absolute inset-y-0 left-5 w-px sm:hidden"
              style={{ background: 'linear-gradient(to bottom, #A21CAF, #DB2777 40%, #9333EA 70%, #7C3AED)' }}
              aria-hidden="true"
            />
            <div
              className="pointer-events-none absolute left-[12.5%] right-[12.5%] top-5 hidden h-px lg:block"
              style={{ background: 'linear-gradient(to right, #A21CAF, #DB2777 40%, #9333EA 70%, #7C3AED)' }}
              aria-hidden="true"
            />
            {railChevrons.map((offset) => (
              <svg
                key={offset}
                className="pointer-events-none absolute top-5 hidden size-3.5 -translate-x-1/2 -translate-y-1/2 text-muted-foreground/70 lg:block"
                style={{ left: offset }}
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                strokeWidth="2.5"
                strokeLinecap="round"
                strokeLinejoin="round"
                aria-hidden="true"
              >
                <path d="m9 6 6 6-6 6" />
              </svg>
            ))}

            <ol className="grid gap-y-10 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-5">
              {process.map((step) => (
                <Reveal key={step.index} as="li" className="group relative flex flex-col pl-16 sm:pl-0">
                  <div className="absolute left-0 top-0 sm:relative sm:mx-auto sm:mb-8 sm:flex sm:justify-center">
                    <span
                      className="flex size-10 items-center justify-center rounded-full border-2 bg-background shadow-sm transition-transform duration-300 group-hover:scale-110"
                      style={{
                        borderColor: step.accent,
                        color: step.accent,
                        boxShadow: `0 0 0 5px color-mix(in oklab, ${step.accent} 8%, transparent)`,
                      }}
                    >
                      <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                        <path d={step.icon} />
                      </svg>
                    </span>
                    {/* Stem tying the node down to its card. */}
                    <span
                      className="absolute left-1/2 top-10 hidden h-8 w-px -translate-x-1/2 sm:block"
                      style={{ background: `linear-gradient(to bottom, ${step.accent}, transparent)` }}
                      aria-hidden="true"
                    />
                  </div>

                  <div
                    className="flex flex-1 flex-col rounded-2xl border border-border bg-card p-6 transition-all duration-300 group-hover:-translate-y-1 group-hover:shadow-lg group-hover:[border-color:var(--step-accent)]"
                    style={{ '--step-accent': `color-mix(in oklab, ${step.accent} 45%, transparent)` } as React.CSSProperties}
                  >
                    <div className="flex items-center justify-between gap-3">
                      <span className="font-mono text-xs text-muted-foreground">{step.index}</span>
                      <span className="rounded-full border border-border px-2.5 py-1 text-[11px] font-medium text-muted-foreground">
                        {step.timing}
                      </span>
                    </div>

                    <h3 className="mt-4 text-lg font-medium tracking-tight">{step.title}</h3>
                    <p className="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">{step.description}</p>

                    <ul className="mt-5 space-y-2 border-t border-border pt-4">
                      {step.deliverables.map((deliverable) => (
                        <li key={deliverable} className="flex items-start gap-2 text-xs text-muted-foreground">
                          <svg
                            className="mt-[3px] size-3 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            strokeWidth="3"
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            style={{ color: step.accent }}
                            aria-hidden="true"
                          >
                            <path d="m5 12 5 5L20 7" />
                          </svg>
                          {deliverable}
                        </li>
                      ))}
                    </ul>
                  </div>
                </Reveal>
              ))}
            </ol>
          </RevealGroup>

          <RevealGroup className="mt-14 flex flex-col items-start gap-4 rounded-2xl border border-border bg-card p-6 sm:flex-row sm:items-center sm:justify-between">
            <Reveal as="p" className="text-sm text-muted-foreground">
              Most engagements go from first call to a scoped quote within{' '}
              <span className="font-medium text-foreground">48 hours</span>.
            </Reveal>
            <RevealLink
              href="/contact#quote"
              className="inline-flex h-10 shrink-0 items-center gap-2 rounded-lg bg-primary px-5 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90"
            >
              Start with a quote
              <svg className="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                <path d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </RevealLink>
          </RevealGroup>
        </div>
      </section>

      {/* Why WebInnovate */}
      <section
        id="about-us"
        className="section-dark relative scroll-mt-20 overflow-hidden border-b border-border"
      >
        <div className="bg-grid mask-fade-b-soft pointer-events-none absolute inset-0" aria-hidden="true" />
        <div
          className="glow pointer-events-none absolute left-1/2 top-0 size-[640px] -translate-x-1/2 -translate-y-1/2 rounded-full"
          style={{ '--glow': 'oklch(0.62 0.24 340 / 0.28)' } as React.CSSProperties}
          aria-hidden="true"
        />

        <div className="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="mx-auto max-w-2xl text-center">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              Why {site.brand}
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              Trust a team that ships products people pay for
            </Reveal>
            <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
              We are not a body shop. We are a product studio — the same discipline behind software used by
              thousands of merchants, applied to your custom SaaS.
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-5 lg:grid-cols-3">
            {pillars.map((pillar) => (
              <Reveal key={pillar.title} className="rounded-2xl border border-border bg-card p-8">
                <h3 className="text-lg font-medium tracking-tight">{pillar.title}</h3>
                <p className="mt-3 text-sm leading-relaxed text-muted-foreground">{pillar.description}</p>
              </Reveal>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/* References — WEBI apps as proof of work */}
      <section id="references" className="scroll-mt-20 border-b border-border">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              References
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              Products we designed, built and operate
            </Reveal>
            <Reveal as="p" className="mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
              Selected SaaS products from our portfolio — live on the Shopify App Store, used by merchants in
              20+ countries. Proof that we ship for real revenue.
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-6 lg:grid-cols-3">
            {apps.map((app) => (
              <RevealLink
                key={app.slug}
                href={`/${app.slug}`}
                className="group relative flex flex-col overflow-hidden rounded-2xl border border-border bg-card p-5 transition-all duration-300 hover:-translate-y-1 hover:border-foreground/15 hover:shadow-xl"
                style={{ '--accent-from': app.accent.from, '--accent-to': app.accent.to } as React.CSSProperties}
              >
                <span
                  className="accent-rule absolute inset-x-0 top-0 h-px opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                  aria-hidden="true"
                />

                <AppIllustration app={app} />

                <div className="mt-5 flex items-start gap-3">
                  <Image
                    src={app.icon}
                    alt=""
                    aria-hidden="true"
                    width={40}
                    height={40}
                    className="size-10 shrink-0 rounded-lg border border-border"
                  />
                  <div className="min-w-0 flex-1">
                    <h3 className="text-base font-medium tracking-tight">{app.name}</h3>
                    <p className="mt-1 flex items-center gap-1.5 text-xs text-muted-foreground">
                      <svg className="size-3 text-amber-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="m12 2 2.9 6.26 6.85.72-5.1 4.6 1.42 6.72L12 16.9l-6.07 3.4 1.42-6.72-5.1-4.6 6.85-.72L12 2Z" />
                      </svg>
                      {app.listing.rating}
                      <span>({app.listing.reviews})</span>
                      <span aria-hidden="true">·</span>
                      Live product
                    </p>
                  </div>
                </div>

                <p className="mt-4 flex-1 text-sm leading-relaxed text-muted-foreground">
                  {app.portfolioTagline}
                </p>

                <span className="mt-7 inline-flex items-center gap-1.5 border-t border-border pt-5 text-sm font-medium">
                  View reference
                  <svg className="size-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                  </svg>
                </span>
              </RevealLink>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/* Final CTA */}
      <section id="contact" className="scroll-mt-20 px-4 py-24 sm:px-6 lg:px-8">
        <div className="section-dark relative mx-auto max-w-6xl overflow-hidden rounded-3xl">
          <div className="bg-dots pointer-events-none absolute inset-0 opacity-60" aria-hidden="true" />
          <div
            className="glow pointer-events-none absolute -bottom-40 left-1/2 size-[560px] -translate-x-1/2 rounded-full"
            style={{ '--glow': 'oklch(0.62 0.24 340 / 0.35)' } as React.CSSProperties}
            aria-hidden="true"
          />
          <div
            className="glow pointer-events-none absolute -top-32 right-0 size-[420px] rounded-full"
            style={{ '--glow': 'oklch(0.55 0.22 290 / 0.22)' } as React.CSSProperties}
            aria-hidden="true"
          />

          <RevealGroup className="relative px-6 py-20 text-center sm:px-16">
            <Reveal as="h2" className="text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              Ready to build a SaaS that earns?
            </Reveal>
            <Reveal as="p" className="mx-auto mt-4 max-w-xl text-lg leading-relaxed text-muted-foreground text-pretty">
              Tell us about your product. We will come back with a clear scope, timeline and quote — or an
              honest no if we are not the right fit.
            </Reveal>

            <Reveal className="mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
              <Link
                href="/contact#quote"
                className="inline-flex h-11 w-full items-center justify-center rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto"
              >
                Request a quote
              </Link>
              <a
                href={site.whatsapp.url}
                rel="noopener"
                className="inline-flex h-11 w-full items-center justify-center gap-2 rounded-lg border border-border px-6 text-sm font-medium transition-colors hover:bg-secondary sm:w-auto"
              >
                <svg className="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M12.04 2c-5.46 0-9.9 4.44-9.9 9.9 0 1.75.46 3.45 1.32 4.95L2 22l5.3-1.39a9.86 9.86 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.44 9.9-9.9 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2Zm0 18.14h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.11.82.83-3.03-.2-.31a8.19 8.19 0 0 1-1.26-4.39c0-4.54 3.7-8.23 8.24-8.23 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.7 8.23-8.24 8.23Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.97-.15.16-.29.18-.53.06-.25-.13-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.13-.15.17-.25.25-.41.09-.17.04-.31-.02-.44-.06-.12-.56-1.35-.76-1.84-.2-.48-.4-.42-.56-.43h-.47c-.16 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.13.17 1.74 2.66 4.22 3.73.59.25 1.05.4 1.4.52.59.19 1.13.16 1.55.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.16-.48-.28Z" />
                </svg>
                Discuss on WhatsApp
              </a>
            </Reveal>
          </RevealGroup>
        </div>
      </section>
    </>
  );
}
