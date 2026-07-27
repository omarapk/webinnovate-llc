import type { ReactNode } from 'react';

import { PageHeader } from '@/components/page-header';
import { Reveal, RevealGroup } from '@/components/reveal';

export type LegalSection = {
  /** Must match the `id` of the corresponding heading in the body. */
  id: string;
  label: string;
};

/**
 * Shell for the policy pages: page header, sticky table of contents and a
 * prose column. The body is passed as children and styled by `.legal-prose`.
 */
export function LegalPage({
  heading,
  lead,
  sections,
  lastUpdated,
  children,
}: {
  heading: string;
  lead: string;
  sections: LegalSection[];
  lastUpdated: string;
  children: ReactNode;
}) {
  return (
    <>
      <PageHeader eyebrow="Legal" heading={heading} lead={lead} />

      <section>
        <div className="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8">
          <div className="grid gap-12 lg:grid-cols-[240px_1fr] lg:gap-16">
            <aside className="lg:sticky lg:top-24 lg:self-start">
              <p className="text-xs font-semibold uppercase tracking-widest text-muted-foreground">
                On this page
              </p>
              <nav className="mt-4 space-y-1" aria-label="Table of contents">
                {sections.map((section) => (
                  <a
                    key={section.id}
                    href={`#${section.id}`}
                    className="block rounded-md px-2.5 py-1.5 text-sm text-muted-foreground transition-colors hover:bg-secondary hover:text-foreground"
                  >
                    {section.label}
                  </a>
                ))}
              </nav>
              <p className="mt-6 border-t border-border pt-5 text-xs text-muted-foreground">
                Last updated {lastUpdated}
              </p>
            </aside>

            <RevealGroup>
              <Reveal className="legal-prose max-w-3xl">{children}</Reveal>
            </RevealGroup>
          </div>
        </div>
      </section>
    </>
  );
}
