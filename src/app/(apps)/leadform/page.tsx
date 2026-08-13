import type { Metadata } from 'next';
import Image from 'next/image';

import { BrandMark } from '@/components/brand-mark';
import { Counter } from '@/components/counter';
import { MOCKS, OrderFormMock } from '@/components/leadform/mocks';
import { Pricing } from '@/components/leadform/pricing';
import { Reveal, RevealGroup } from '@/components/reveal';
import { leadform } from '@/data/leadform';
import { site } from '@/data/site';

const ACCENT = `linear-gradient(135deg, ${leadform.accent.from}, ${leadform.accent.to})`;

export const metadata: Metadata = {
  title: leadform.seo.title,
  description: leadform.seo.description,
  alternates: { canonical: `/${leadform.slug}` },
  openGraph: {
    type: 'website',
    title: leadform.seo.title,
    description: leadform.seo.description,
    url: `/${leadform.slug}`,
  },
};

function Check({ className = '' }: { className?: string }) {
  return (
    <svg
      className={`size-4 shrink-0 ${className}`}
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      strokeWidth="2.6"
      strokeLinecap="round"
      strokeLinejoin="round"
      aria-hidden="true"
    >
      <path d="m5 13 4 4L19 7" />
    </svg>
  );
}

function Stars({ className = '' }: { className?: string }) {
  return (
    <span className={`flex gap-0.5 ${className}`} aria-hidden="true">
      {Array.from({ length: 5 }, (_, index) => (
        <svg key={index} className="size-3.5 fill-amber-400" viewBox="0 0 24 24">
          <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2Z" />
        </svg>
      ))}
    </span>
  );
}

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'SoftwareApplication',
  name: `${leadform.name} — ${leadform.tag}`,
  description: leadform.seo.description,
  applicationCategory: 'BusinessApplication',
  operatingSystem: 'Shopify',
  url: `${site.url}/${leadform.slug}`,
  offers: { '@type': 'Offer', price: '0', priceCurrency: 'USD' },
  aggregateRating: {
    '@type': 'AggregateRating',
    ratingValue: leadform.listing.rating,
    reviewCount: leadform.listing.reviews,
  },
  publisher: { '@type': 'Organization', name: site.company, url: site.url },
};

export default function LeadformPage() {
  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />

      {/*
      | Hero
      |----------------------------------------------------------------------
      */}
      <section id="top" className="relative overflow-hidden">
        <div className="bg-grid pointer-events-none absolute inset-0 -z-10 mask-fade-bottom" aria-hidden="true" />
        <div className="pointer-events-none absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
          <div
            className="glow absolute -top-40 left-1/2 size-[720px] -translate-x-1/2 rounded-full"
            style={{ '--glow': 'oklch(0.62 0.24 340 / 0.16)' } as React.CSSProperties}
          />
        </div>

        <div className="mx-auto max-w-6xl px-4 pb-16 pt-14 sm:px-6 sm:pb-20 sm:pt-20 lg:px-8">
          <RevealGroup className="grid items-center gap-12 lg:grid-cols-[1fr_420px] lg:gap-16">
            <div>
              <Reveal className="inline-flex items-center gap-2 rounded-full border border-border bg-card px-3 py-1.5 text-xs font-medium">
                <span
                  className="size-1.5 rounded-full"
                  style={{ backgroundImage: ACCENT }}
                  aria-hidden="true"
                />
                {leadform.hero.badge}
              </Reveal>

              <Reveal
                as="h1"
                className="mt-6 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-5xl lg:text-6xl"
              >
                {leadform.hero.headline}
                <span
                  className="animate-gradient-pan mt-1 block bg-clip-text text-transparent"
                  style={{
                    backgroundImage: `linear-gradient(90deg, ${leadform.accent.from}, ${leadform.accent.to}, ${leadform.accent.from})`,
                  }}
                >
                  {leadform.hero.headlineAccent}
                </span>
              </Reveal>

              <Reveal
                as="p"
                className="mt-6 max-w-xl text-base leading-relaxed text-muted-foreground sm:text-lg"
              >
                {leadform.hero.description}
              </Reveal>

              <Reveal className="mt-8 flex flex-wrap items-center gap-3">
                <a
                  href={leadform.appStoreUrl}
                  rel="noopener"
                  className="inline-flex h-11 items-center rounded-lg px-6 text-sm font-medium text-white shadow-sm transition-opacity hover:opacity-90"
                  style={{ backgroundImage: ACCENT }}
                >
                  {leadform.hero.primaryCta}
                </a>
                <a
                  href="#features"
                  className="inline-flex h-11 items-center rounded-lg border border-border bg-background px-6 text-sm font-medium transition-colors hover:bg-secondary"
                >
                  {leadform.hero.secondaryCta}
                </a>
              </Reveal>

              <Reveal as="p" className="mt-4 text-xs text-muted-foreground">
                {leadform.hero.reassurance}
              </Reveal>

              {/* Separators travel with the phrase that follows them, otherwise
                  they end up orphaned on their own line when the row wraps. */}
              <Reveal className="mt-8 flex flex-wrap items-center gap-x-2 gap-y-1 border-t border-border pt-6 text-sm text-muted-foreground">
                <span className="flex items-center gap-2">
                  <Stars />
                  <span className="font-medium text-foreground">{leadform.listing.rating}</span>
                </span>
                <span>· {leadform.listing.reviews} reviews on the Shopify App Store</span>
                <span>· {leadform.listing.price}</span>
              </Reveal>
            </div>

            <Reveal className="relative">
              <OrderFormMock />

              {/* Hung off the corners. Anything closer to the middle covers the
                  quantity offers or the total, which are the point of the mock. */}
              <div className="chip animate-float absolute -bottom-7 -left-10 hidden lg:flex">
                <span className="flex size-7 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-600">
                  <Check className="size-3.5" />
                </span>
                <span className="whitespace-nowrap">
                  +30% conversions
                  <span className="block text-[11px] font-normal text-muted-foreground">
                    vs. default checkout
                  </span>
                </span>
              </div>

              <div
                className="chip animate-float absolute -right-10 -top-7 hidden lg:flex"
                style={{ animationDelay: '-3s' }}
              >
                <span
                  className="flex size-7 shrink-0 items-center justify-center rounded-lg text-white"
                  style={{ backgroundImage: ACCENT }}
                >
                  <svg
                    className="size-3.5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2.4"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    aria-hidden="true"
                  >
                    <path d="M3 17l6-6 4 4 7-7" />
                    <path d="M14 8h6v6" />
                  </svg>
                </span>
                <span className="whitespace-nowrap">
                  10+ apps in one
                  <span className="block text-[11px] font-normal text-muted-foreground">
                    one subscription
                  </span>
                </span>
              </div>
            </Reveal>
          </RevealGroup>
        </div>
      </section>

      {/*
      | Merchants already selling with it
      |----------------------------------------------------------------------
      */}
      <section className="border-y border-border bg-muted/30">
        <div className="mx-auto max-w-6xl px-4 py-10 sm:px-6 lg:px-8">
          <p className="text-center text-xs font-medium uppercase tracking-widest text-muted-foreground">
            Join successful merchants like
          </p>
          {/* Infinite strip; pauses on hover so the links stay clickable. The
              list renders twice for a seamless loop — the clone is decorative. */}
          <div
            className="marquee-paused mask-fade-edges mt-7 overflow-hidden"
            style={{ '--marquee-duration': '28s', '--marquee-gap': '3.5rem' } as React.CSSProperties}
          >
            <div className="animate-marquee flex w-max items-center gap-x-14">
              {[false, true].map((clone) =>
                leadform.merchants.map((merchant) => (
                  <a
                    key={`${merchant.name}${clone ? '-clone' : ''}`}
                    href={merchant.url}
                    rel="noopener nofollow"
                    aria-hidden={clone || undefined}
                    tabIndex={clone ? -1 : undefined}
                    className="opacity-80 grayscale transition hover:opacity-100 hover:grayscale-0"
                  >
                    <Image
                      src={merchant.image}
                      alt={clone ? '' : merchant.name}
                      width={160}
                      height={48}
                      className="h-10 w-auto object-contain"
                    />
                  </a>
                )),
              )}
            </div>
          </div>
        </div>
      </section>

      {/*
      | Features — copy and mockup, alternating sides
      |----------------------------------------------------------------------
      */}
      <section id="features" className="scroll-mt-20">
        <div className="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal
              as="p"
              className="text-xs font-semibold uppercase tracking-widest"
              style={{ color: leadform.accent.to }}
            >
              Everything in one app
            </Reveal>
            <Reveal
              as="h2"
              className="mt-3 text-3xl font-semibold tracking-tight sm:text-4xl"
            >
              All-in-one features to scale your COD business
            </Reveal>
            <Reveal as="p" className="mt-4 text-base leading-relaxed text-muted-foreground">
              Stop paying for — and debugging — five different apps. LeadForm covers the whole
              cash-on-delivery flow, from the first tap to the delivered parcel.
            </Reveal>
          </RevealGroup>

          <div className="mt-16 space-y-20 sm:mt-20 sm:space-y-28">
            {leadform.features.map((feature, index) => {
              const Mock = MOCKS[feature.mock];
              const flipped = index % 2 === 1;

              return (
                <RevealGroup
                  key={feature.id}
                  id={feature.id}
                  className="grid scroll-mt-24 items-center gap-10 lg:grid-cols-2 lg:gap-16"
                >
                  <Reveal className={flipped ? 'lg:order-2' : undefined}>
                    <p
                      className="text-xs font-semibold uppercase tracking-widest"
                      style={{ color: leadform.accent.to }}
                    >
                      {feature.eyebrow}
                    </p>
                    <h3 className="mt-3 text-2xl font-semibold tracking-tight sm:text-3xl">
                      {feature.title}
                    </h3>
                    <p className="mt-4 text-base leading-relaxed text-muted-foreground">
                      {feature.description}
                    </p>

                    <ul className="mt-6 space-y-3">
                      {feature.points.map((point) => (
                        <li key={point} className="flex items-start gap-3 text-sm">
                          <Check className="mt-0.5 text-emerald-600" />
                          <span>{point}</span>
                        </li>
                      ))}
                    </ul>

                    <p className="mt-7 inline-flex items-center gap-2 rounded-full border border-border bg-card px-3.5 py-1.5 text-xs font-medium">
                      <span
                        className="size-1.5 rounded-full"
                        style={{ backgroundImage: ACCENT }}
                        aria-hidden="true"
                      />
                      {feature.result}
                    </p>
                  </Reveal>

                  <Reveal className={`relative ${flipped ? 'lg:order-1' : ''}`}>
                    <div
                      className="pointer-events-none absolute inset-0 -z-10 overflow-hidden"
                      aria-hidden="true"
                    >
                      <div
                        className="glow absolute left-1/2 top-1/2 size-[420px] -translate-x-1/2 -translate-y-1/2 rounded-full"
                        style={{ '--glow': 'oklch(0.62 0.24 340 / 0.10)' } as React.CSSProperties}
                      />
                    </div>
                    <div className="mx-auto max-w-md lg:max-w-none">
                      <Mock />
                    </div>
                  </Reveal>
                </RevealGroup>
              );
            })}
          </div>
        </div>
      </section>

      {/*
      | Numbers
      |----------------------------------------------------------------------
      */}
      <section className="section-dark">
        <div className="relative overflow-hidden">
          <div className="bg-dots pointer-events-none absolute inset-0 opacity-40" aria-hidden="true" />

          <div className="mx-auto max-w-6xl px-4 py-20 sm:px-6 lg:px-8">
            <RevealGroup className="mx-auto max-w-2xl text-center">
              <Reveal as="h2" className="text-3xl font-semibold tracking-tight sm:text-4xl">
                We hear your needs. We help you sell more.
              </Reveal>
              <Reveal as="p" className="mt-4 text-base leading-relaxed opacity-70">
                Thousands of merchants trust LeadForm to scale their cash-on-delivery business.
                Our numbers speak louder than words.
              </Reveal>
            </RevealGroup>

            <RevealGroup className="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
              {leadform.stats.map((stat) => (
                <Reveal key={stat.label} className="text-center">
                  <p className="text-4xl font-semibold tracking-tight sm:text-5xl">
                    <Counter to={stat.count} />
                    {stat.suffix}
                    {stat.suffix !== '%' && '+'}
                  </p>
                  <p className="mt-2 text-sm opacity-70">{stat.label}</p>
                </Reveal>
              ))}
            </RevealGroup>
          </div>
        </div>
      </section>

      {/*
      | Reviews
      |----------------------------------------------------------------------
      */}
      <section id="reviews" className="scroll-mt-20">
        <div className="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
          <RevealGroup className="mx-auto max-w-2xl text-center">
            <Reveal className="flex items-center justify-center gap-2">
              <Stars />
              <span className="text-sm font-medium">
                {leadform.listing.rating} out of 5 · {leadform.listing.reviews} reviews
              </span>
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
              Merchants trust LeadForm to power their COD sales
            </Reveal>
            <Reveal as="p" className="mt-4 text-base leading-relaxed text-muted-foreground">
              From small shops to high-volume stores, thousands of e-commerce merchants rely on
              LeadForm to simplify COD and maximise results.
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            {leadform.testimonials.map((testimonial) => (
              <Reveal
                key={testimonial.name}
                as="figure"
                className="flex flex-col rounded-2xl border border-border bg-card p-6"
              >
                <Stars />
                <blockquote className="mt-4 flex-1 text-sm leading-relaxed text-muted-foreground">
                  {testimonial.text}
                </blockquote>
                <figcaption className="mt-6 border-t border-border pt-4">
                  <p className="text-sm font-medium">{testimonial.name}</p>
                  <p className="mt-0.5 text-xs text-muted-foreground">
                    {testimonial.country} · {testimonial.duration}
                  </p>
                </figcaption>
              </Reveal>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/*
      | Pricing
      |----------------------------------------------------------------------
      */}
      <section id="pricing" className="scroll-mt-20 border-y border-border bg-muted/30">
        <div className="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
          <div className="mx-auto max-w-2xl text-center">
            <p
              className="text-xs font-semibold uppercase tracking-widest"
              style={{ color: leadform.accent.to }}
            >
              Pricing
            </p>
            <h2 className="mt-3 text-3xl font-semibold tracking-tight sm:text-4xl">
              Choose your plan
            </h2>
            <p className="mt-4 text-base leading-relaxed text-muted-foreground">
              Every plan includes every feature. You only pay for the volume you process.
            </p>
          </div>

          <Pricing />
        </div>
      </section>

      {/*
      | FAQ
      |----------------------------------------------------------------------
      */}
      <section id="faq" className="scroll-mt-20">
        <div className="mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
          <div className="grid gap-12 lg:grid-cols-[320px_1fr] lg:gap-16">
            <div>
              <h2 className="text-3xl font-semibold tracking-tight sm:text-4xl">
                Frequently asked questions
              </h2>
              <p className="mt-4 text-base leading-relaxed text-muted-foreground">
                Still unsure about something? Our team answers in minutes on{' '}
                <a
                  href={leadform.whatsappUrl}
                  rel="noopener"
                  className="font-medium text-foreground underline decoration-border underline-offset-4 transition-colors hover:decoration-foreground"
                >
                  WhatsApp
                </a>
                .
              </p>
            </div>

            <RevealGroup className="divide-y divide-border border-y border-border">
              {leadform.faq.map((entry) => (
                <Reveal key={entry.q} as="details" className="group py-5">
                  <summary className="flex cursor-pointer list-none items-start justify-between gap-6 text-sm font-medium marker:content-none">
                    {entry.q}
                    <svg
                      className="mt-0.5 size-4 shrink-0 text-muted-foreground transition-transform duration-200 group-open:rotate-45"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      strokeWidth="2"
                      strokeLinecap="round"
                      aria-hidden="true"
                    >
                      <path d="M12 5v14M5 12h14" />
                    </svg>
                  </summary>
                  <p className="mt-3 max-w-2xl text-sm leading-relaxed text-muted-foreground">
                    {entry.a}
                  </p>
                </Reveal>
              ))}
            </RevealGroup>
          </div>
        </div>
      </section>

      {/*
      | Affiliate
      |----------------------------------------------------------------------
      */}
      <section id="affiliate" className="scroll-mt-20">
        <div className="mx-auto max-w-6xl px-4 pb-20 sm:px-6 sm:pb-24 lg:px-8">
          <RevealGroup
            className="relative overflow-hidden rounded-3xl px-6 py-14 text-white sm:px-12"
            style={{ backgroundImage: ACCENT }}
          >
            <div
              className="bg-dots pointer-events-none absolute inset-0 opacity-20"
              aria-hidden="true"
            />

            <div className="relative grid items-center gap-10 lg:grid-cols-[1.2fr_1fr]">
              <div>
                <Reveal
                  as="p"
                  className="text-xs font-semibold uppercase tracking-widest opacity-80"
                >
                  {leadform.affiliate.eyebrow}
                </Reveal>
                <Reveal as="h2" className="mt-3 text-3xl font-semibold tracking-tight sm:text-4xl">
                  {leadform.affiliate.title}
                </Reveal>
                <Reveal as="p" className="mt-4 max-w-lg text-base leading-relaxed opacity-90">
                  {leadform.affiliate.description}
                </Reveal>
                <Reveal className="mt-8">
                  <a
                    href={leadform.affiliateUrl}
                    rel="noopener"
                    className="inline-flex h-11 items-center rounded-lg bg-white px-6 text-sm font-medium text-foreground transition-opacity hover:opacity-90"
                  >
                    {leadform.affiliate.cta}
                  </a>
                </Reveal>
              </div>

              <Reveal className="grid gap-3 sm:grid-cols-2">
                {leadform.affiliate.benefits.map((benefit) => (
                  <div
                    key={benefit}
                    className="flex items-center gap-2.5 rounded-xl bg-white/15 px-4 py-3 text-sm font-medium"
                  >
                    <Check className="size-3.5" />
                    {benefit}
                  </div>
                ))}
              </Reveal>
            </div>
          </RevealGroup>
        </div>
      </section>

      {/*
      | Install
      |----------------------------------------------------------------------
      */}
      <section className="border-t border-border">
        <div className="relative overflow-hidden">
          <div className="bg-grid pointer-events-none absolute inset-0 mask-fade-b-soft" aria-hidden="true" />

          <RevealGroup className="relative mx-auto max-w-3xl px-4 py-24 text-center sm:px-6 lg:px-8">
            <Reveal as="h2" className="text-3xl font-semibold tracking-tight sm:text-4xl">
              Start getting more COD orders today
            </Reveal>
            <Reveal as="p" className="mt-4 text-base leading-relaxed text-muted-foreground">
              Install LeadForm on your Shopify store and boost your conversions in minutes. Free
              plan available — no card required.
            </Reveal>
            <Reveal className="mt-8 flex flex-wrap justify-center gap-3">
              <a
                href={leadform.appStoreUrl}
                rel="noopener"
                className="inline-flex h-11 items-center gap-2 rounded-lg px-6 text-sm font-medium text-white shadow-sm transition-opacity hover:opacity-90"
                style={{ backgroundImage: ACCENT }}
              >
                <BrandMark name="shopify" size={18} className="size-4 brightness-0 invert" />
                Find it on the Shopify App Store
              </a>
              <a
                href={leadform.helpCenterUrl}
                rel="noopener"
                className="inline-flex h-11 items-center rounded-lg border border-border bg-background px-6 text-sm font-medium transition-colors hover:bg-secondary"
              >
                Browse the help center
              </a>
            </Reveal>
            <Reveal as="p" className="mt-5 text-xs text-muted-foreground">
              Free plan available · Setup in minutes · No coding required
            </Reveal>
          </RevealGroup>
        </div>
      </section>
    </>
  );
}
