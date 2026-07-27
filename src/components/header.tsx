'use client';

import Link from 'next/link';
import { usePathname } from 'next/navigation';
import { useEffect, useState } from 'react';

import { Logo } from '@/components/logo';

/**
 * Section menu. Every entry points at a band of the homepage, so the header
 * doubles as the page's table of contents. Always rendered — on narrow screens
 * the row scrolls sideways rather than collapsing into a burger, so the menu
 * is never empty.
 */
const navItems = [
  { label: 'Home', href: '/#top', section: 'top' },
  { label: 'Solutions', href: '/#solutions', section: 'solutions' },
  { label: 'How we work', href: '/#process', section: 'process' },
  { label: 'About us', href: '/#about-us', section: 'about-us' },
  { label: 'References', href: '/#references', section: 'references' },
  { label: 'Contact', href: '/#contact', section: 'contact' },
];

/** Distance below the header at which a section counts as "current". */
const ACTIVE_OFFSET = 96;

export function Header() {
  const [scrolled, setScrolled] = useState(false);
  const [activeSection, setActiveSection] = useState<string | null>(null);
  const pathname = usePathname();

  useEffect(() => {
    const onHome = pathname === '/';

    const update = () => {
      setScrolled(window.scrollY > 8);

      if (!onHome) {
        setActiveSection(null);
        return;
      }

      const line = window.scrollY + ACTIVE_OFFSET;
      let current: string | null = null;

      for (const { section } of navItems) {
        const element = document.getElementById(section);
        if (element && element.getBoundingClientRect().top + window.scrollY <= line) {
          current = section;
        }
      }

      setActiveSection(current);
    };

    update();
    window.addEventListener('scroll', update, { passive: true });
    return () => window.removeEventListener('scroll', update);
  }, [pathname]);

  return (
    /* Opaque once scrolled: at 80% the header washes out to grey over the dark
       sections and the nav drops to a 5:1 contrast ratio. */
    <header
      className={`sticky top-0 z-40 border-b backdrop-blur-xl transition-colors duration-200 ${
        scrolled ? 'border-border bg-background shadow-sm' : 'border-transparent bg-background/80'
      }`}
    >
      <div className="mx-auto flex h-16 max-w-6xl items-center gap-3 px-4 sm:gap-6 sm:px-6 lg:px-8">
        <Logo className="shrink-0" />

        {/* Centred on desktop; left-aligned once it overflows, otherwise a
            centred scroll container clips its own first item. */}
        <nav
          className="no-scrollbar -mx-1 flex flex-1 items-center justify-start gap-1 overflow-x-auto px-1 lg:justify-center"
          aria-label="Sections"
        >
          {navItems.map((item) => {
            const active = item.section === activeSection;

            return (
              <Link
                key={item.label}
                href={item.href}
                aria-current={active ? 'true' : undefined}
                className={`shrink-0 rounded-md px-3 py-2 text-sm transition-colors ${
                  active
                    ? 'bg-secondary font-medium text-foreground'
                    : 'text-muted-foreground hover:text-foreground'
                }`}
              >
                {item.label}
              </Link>
            );
          })}
        </nav>

        <Link
          href="/contact#quote"
          className="inline-flex h-9 shrink-0 items-center rounded-lg bg-primary px-4 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90"
        >
          Request a quote
        </Link>
      </div>
    </header>
  );
}
