'use client';

import Image from 'next/image';
import Link from 'next/link';
import { useEffect, useState } from 'react';

import { ScrollProgress } from '@/components/scroll-progress';
import { leadform } from '@/data/leadform';

/** LeadForm's own header: section nav plus the App Store install CTA. */
export function AppHeader() {
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const update = () => setScrolled(window.scrollY > 8);
    update();
    window.addEventListener('scroll', update, { passive: true });
    return () => window.removeEventListener('scroll', update);
  }, []);

  return (
    <header
      className={`sticky top-0 z-40 border-b backdrop-blur-xl transition-colors duration-200 ${
        scrolled ? 'border-border bg-background shadow-sm' : 'border-transparent bg-background/80'
      }`}
    >
      <ScrollProgress className="bg-gradient-to-r from-[#A21CAF] to-[#E11D8F]" />
      <div className="mx-auto flex h-16 max-w-6xl items-center gap-3 px-4 sm:gap-6 sm:px-6 lg:px-8">
        <Link href={`/${leadform.slug}`} className="flex shrink-0 items-center gap-2.5">
          <Image
            src={leadform.icon}
            alt=""
            aria-hidden="true"
            width={32}
            height={32}
            className="size-8 rounded-lg"
          />
          <span className="text-base font-semibold tracking-tight">{leadform.displayName}</span>
        </Link>

        <nav
          className="no-scrollbar -mx-1 flex flex-1 items-center justify-start gap-1 overflow-x-auto px-1 lg:justify-center"
          aria-label="Sections"
        >
          {leadform.nav.map((item) => (
            <a
              key={item.label}
              href={item.href}
              className="shrink-0 rounded-md px-3 py-2 text-sm text-muted-foreground transition-colors hover:text-foreground"
            >
              {item.label}
            </a>
          ))}
        </nav>

        <a
          href={leadform.appStoreUrl}
          rel="noopener"
          className="inline-flex h-9 shrink-0 items-center rounded-lg px-4 text-sm font-medium text-white shadow-sm transition-opacity hover:opacity-90"
          style={{
            backgroundImage: `linear-gradient(135deg, ${leadform.accent.from}, ${leadform.accent.to})`,
          }}
        >
          Start free trial
        </a>
      </div>
    </header>
  );
}
