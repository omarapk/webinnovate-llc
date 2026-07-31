import Image from 'next/image';
import Link from 'next/link';

import { leadform } from '@/data/leadform';
import { site } from '@/data/site';

/**
 * LeadForm's footer.
 *
 * Wrapped in `.section-dark`, which flips the theme tokens for everything
 * inside — so this uses the ordinary `foreground` / `muted-foreground` /
 * `border` classes. Reaching for `text-background` here would ask for black
 * on black.
 */

function LinkList({
  title,
  links,
}: {
  title: string;
  links: readonly { readonly label: string; readonly href: string }[];
}) {
  return (
    <div>
      <h2 className="text-sm font-medium">{title}</h2>
      <ul className="mt-4 space-y-3 text-sm text-muted-foreground">
        {links.map((link) => (
          <li key={link.label}>
            <Link className="transition-colors hover:text-foreground" href={link.href}>
              {link.label}
            </Link>
          </li>
        ))}
      </ul>
    </div>
  );
}

function MailIcon() {
  return (
    <svg className="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
      <rect x="2.5" y="5" width="19" height="14" rx="2" />
      <path d="m3 7 9 6 9-6" />
    </svg>
  );
}

function PhoneIcon() {
  return (
    <svg className="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
      <path d="M6.5 3.5 9 3l1.8 4.4-2.1 1.2a12.5 12.5 0 0 0 5.7 5.7l1.2-2.1L20 14.5l-.5 2.5A2.5 2.5 0 0 1 17 19.5 14.5 14.5 0 0 1 4.5 7a2.5 2.5 0 0 1 2-3.5Z" />
    </svg>
  );
}

function ChatIcon() {
  return (
    <svg className="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true">
      <path d="M4 6.5A3.5 3.5 0 0 1 7.5 3h9A3.5 3.5 0 0 1 20 6.5v6A3.5 3.5 0 0 1 16.5 16H12l-4.5 4v-4H7.5A3.5 3.5 0 0 1 4 12.5v-6Z" />
    </svg>
  );
}

export function AppFooter() {
  return (
    <footer className="section-dark">
      <div className="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <div className="grid gap-12 md:grid-cols-[1.4fr_1fr_1fr_1.3fr]">
          <div>
            <Link href={`/${leadform.slug}`} className="flex items-center gap-2.5">
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
            <p className="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground">
              {leadform.footer.description}
            </p>
          </div>

          <LinkList title="Product" links={leadform.footer.product} />
          <LinkList title="Legal" links={leadform.footer.legal} />

          <div>
            <h2 className="text-sm font-medium">Get in Touch</h2>
            <ul className="mt-4 space-y-3.5 text-sm text-muted-foreground">
              <li className="flex items-start gap-2.5">
                <MailIcon />
                <span>
                  Email:{' '}
                  <a
                    className="transition-colors hover:text-foreground"
                    href={`mailto:${leadform.supportEmail}`}
                  >
                    {leadform.supportEmail}
                  </a>
                </span>
              </li>
              <li className="flex items-start gap-2.5">
                <PhoneIcon />
                <span>
                  Phone:{' '}
                  <a
                    className="transition-colors hover:text-foreground"
                    href={leadform.supportPhone.url}
                  >
                    {leadform.supportPhone.display}
                  </a>
                </span>
              </li>
              <li className="flex items-start gap-2.5">
                <ChatIcon />
                <span>Live Chat: Available inside the app</span>
              </li>
            </ul>
          </div>
        </div>

        <div className="mt-14 flex flex-col gap-3 border-t border-border pt-8 text-sm text-muted-foreground sm:flex-row sm:items-center sm:justify-between">
          <p>
            © {new Date().getFullYear()} {leadform.name} — built by{' '}
            <Link className="transition-colors hover:text-foreground" href="/">
              {site.company}
            </Link>
            .
          </p>
          <a
            className="transition-colors hover:text-foreground"
            href={leadform.helpCenterUrl}
            rel="noopener"
          >
            Help Center
          </a>
        </div>
      </div>
    </footer>
  );
}
