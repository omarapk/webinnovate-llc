import { Reveal, RevealGroup } from '@/components/reveal';

/** Shared hero band for the secondary corporate pages. */
export function PageHeader({
  eyebrow,
  heading,
  lead,
}: {
  eyebrow?: string;
  heading: string;
  lead?: string;
}) {
  return (
    <section className="relative overflow-hidden border-b border-border">
      <div className="bg-grid mask-fade-bottom pointer-events-none absolute inset-0" aria-hidden="true" />

      <RevealGroup className="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
        <div className="max-w-3xl">
          {eyebrow && (
            <Reveal as="p" className="text-sm font-medium uppercase tracking-widest text-muted-foreground">
              {eyebrow}
            </Reveal>
          )}
          <Reveal as="h1" className="mt-4 text-4xl font-semibold tracking-tight text-balance sm:text-5xl">
            {heading}
          </Reveal>
          {lead && (
            <Reveal as="p" className="mt-5 max-w-2xl text-lg leading-relaxed text-muted-foreground text-pretty">
              {lead}
            </Reveal>
          )}
        </div>
      </RevealGroup>
    </section>
  );
}
