import type { Metadata } from 'next';
import Image from 'next/image';
import Link from 'next/link';

import { PageHeader } from '@/components/page-header';
import { Reveal, RevealGroup, RevealLink } from '@/components/reveal';
import { apps } from '@/data/apps';
import { site } from '@/data/site';

export const metadata: Metadata = {
  title: 'About WebInnovate — Custom SaaS Studio',
  description:
    'WebInnovate LLC is a software studio that designs, builds and operates custom SaaS products — development, security, SEO, support and maintenance.',
  alternates: { canonical: '/about' },
};

const values = [
  {
    title: 'Revenue growth & conversion optimization',
    description:
      'Conversion-optimized design, lead capture forms and A/B testing that help merchants drive higher sales conversions and maximize revenue growth.',
  },
  {
    title: 'Operational efficiency & cost savings',
    description:
      'Automating order processing, data entry and customer communications reduces manual workloads so merchants can invest their time in growth.',
  },
  {
    title: 'Scalable automation',
    description:
      'Our apps simplify complex workflows and scale with the business — more orders and more customers without more staff or more hours.',
  },
];

export default function AboutPage() {
  return (
    <>
      <PageHeader
        eyebrow="About us"
        heading="A studio that ships SaaS built to earn"
        lead="Development, security, SEO, support and maintenance — one expert team accountable for the full product lifecycle."
      />

      {/* Story */}
      <section className="border-b border-border">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="grid gap-12 lg:grid-cols-[1fr_1.4fr] lg:gap-20">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              Our story
            </Reveal>

            <Reveal className="space-y-6 text-lg leading-relaxed text-muted-foreground text-pretty">
              <p>
                {site.company} designs and ships custom SaaS for founders and teams who need software that
                converts — not slideware. We own the full stack of delivery: product development, security,
                SEO &amp; performance, then support and maintenance after launch.
              </p>
              <p>
                Alongside client work, we also build and operate our own products under the {site.suite}{' '}
                suite —{' '}
                <Link className="font-medium text-foreground underline-offset-4 hover:underline" href="/leadform">
                  LeadForm
                </Link>
                ,{' '}
                <Link className="font-medium text-foreground underline-offset-4 hover:underline" href="/landing-page-builder">
                  AI Landing Page Builder
                </Link>{' '}
                and{' '}
                <Link className="font-medium text-foreground underline-offset-4 hover:underline" href="/ordersheet">
                  OrderSheet
                </Link>{' '}
                — used by merchants in 20+ countries. Those live products are our references.
              </p>
            </Reveal>
          </RevealGroup>
        </div>
      </section>

      {/* Values */}
      <section className="border-b border-border bg-muted/40">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              Our values
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
              What drives every app we ship
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-6 lg:grid-cols-3">
            {values.map((value, index) => (
              <Reveal key={value.title} className="rounded-xl border border-border bg-card p-8">
                <span className="font-mono text-sm text-muted-foreground">
                  {String(index + 1).padStart(2, '0')}
                </span>
                <h3 className="mt-6 text-xl font-medium tracking-tight text-balance">{value.title}</h3>
                <p className="mt-3 text-sm leading-relaxed text-muted-foreground">{value.description}</p>
              </Reveal>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/* References */}
      <section className="border-b border-border">
        <div className="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
          <RevealGroup className="max-w-2xl">
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              References
            </Reveal>
            <Reveal as="h2" className="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
              Products we ship
            </Reveal>
          </RevealGroup>

          <RevealGroup className="mt-14 grid gap-6 lg:grid-cols-3">
            {apps.map((app) => (
              <RevealLink
                key={app.slug}
                href={`/${app.slug}`}
                className="group flex flex-col rounded-xl border border-border bg-card p-6 transition-all hover:border-foreground/20 hover:shadow-sm"
              >
                <Image
                  src={app.icon}
                  alt=""
                  aria-hidden="true"
                  width={44}
                  height={44}
                  className="size-11 rounded-lg border border-border object-cover"
                />
                <h3 className="mt-5 text-lg font-medium tracking-tight">{app.name}</h3>
                <p className="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">
                  {app.portfolioTagline}
                </p>
                <span className="mt-6 inline-flex items-center gap-1.5 text-sm font-medium">
                  Learn more
                  <svg className="size-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                  </svg>
                </span>
              </RevealLink>
            ))}
          </RevealGroup>
        </div>
      </section>

      {/* Company details */}
      <section className="py-24">
        <div className="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
          <RevealGroup>
            <Reveal className="grid gap-px overflow-hidden rounded-xl border border-border bg-border sm:grid-cols-2 lg:grid-cols-4">
              <div className="bg-card p-7">
                <h2 className="text-sm font-medium">Legal entity</h2>
                <p className="mt-2 text-sm text-muted-foreground">{site.company}</p>
              </div>
              <div className="bg-card p-7">
                <h2 className="text-sm font-medium">Registered office</h2>
                <p className="mt-2 text-sm leading-relaxed text-muted-foreground">
                  {site.address.street}
                  <br />
                  {site.address.city}, {site.address.state} {site.address.zip}
                </p>
              </div>
              <div className="bg-card p-7">
                <h2 className="text-sm font-medium">Email</h2>
                <a
                  className="mt-2 block text-sm text-muted-foreground underline-offset-4 hover:text-foreground hover:underline"
                  href={`mailto:${site.email}`}
                >
                  {site.email}
                </a>
              </div>
              <div className="bg-card p-7">
                <h2 className="text-sm font-medium">WhatsApp</h2>
                <a
                  className="mt-2 block text-sm text-muted-foreground underline-offset-4 hover:text-foreground hover:underline"
                  href={site.whatsapp.url}
                  rel="noopener"
                >
                  {site.whatsapp.display}
                </a>
              </div>
            </Reveal>
          </RevealGroup>
        </div>
      </section>
    </>
  );
}
