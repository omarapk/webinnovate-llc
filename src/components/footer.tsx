import Image from 'next/image';
import Link from 'next/link';

import { Logo } from '@/components/logo';
import { apps } from '@/data/apps';
import { site } from '@/data/site';

export function Footer() {
  return (
    <footer className="border-t border-border">
      <div className="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <div className="grid gap-12 md:grid-cols-[1.5fr_1fr_1fr_1fr]">
          <div>
            <Logo />
            <p className="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground">
              {site.company} designs, builds and operates custom SaaS — development, security, SEO,
              support and maintenance.
            </p>
          </div>

          <div>
            <h2 className="text-sm font-medium">References</h2>
            <ul className="mt-4 space-y-3 text-sm text-muted-foreground">
              {apps.map((app) => (
                <li key={app.slug}>
                  <Link
                    href={`/${app.slug}`}
                    className="group inline-flex items-center gap-2.5 transition-colors hover:text-foreground"
                  >
                    <Image
                      src={app.icon}
                      alt=""
                      aria-hidden="true"
                      width={20}
                      height={20}
                      className="size-5 rounded border border-border opacity-70 transition-opacity group-hover:opacity-100"
                    />
                    {app.displayName}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h2 className="text-sm font-medium">Company</h2>
            <ul className="mt-4 space-y-3 text-sm text-muted-foreground">
              <li>
                <Link className="transition-colors hover:text-foreground" href="/about">
                  About
                </Link>
              </li>
              <li>
                <Link className="transition-colors hover:text-foreground" href="/contact">
                  Contact
                </Link>
              </li>
              <li>
                <Link className="transition-colors hover:text-foreground" href="/leadform/blog">
                  Blog
                </Link>
              </li>
            </ul>
          </div>

          <div>
            <h2 className="text-sm font-medium">Legal</h2>
            <ul className="mt-4 space-y-3 text-sm text-muted-foreground">
              <li>
                <Link className="transition-colors hover:text-foreground" href="/privacy-policy">
                  Privacy Policy
                </Link>
              </li>
              <li>
                <Link className="transition-colors hover:text-foreground" href="/terms-of-use">
                  Terms &amp; Conditions
                </Link>
              </li>
            </ul>
          </div>
        </div>

        <div className="mt-14 flex flex-col gap-4 border-t border-border pt-8 text-sm text-muted-foreground sm:flex-row sm:items-start sm:justify-between">
          <div className="space-y-1">
            <p>
              © {new Date().getFullYear()} {site.company}. All rights reserved.
            </p>
            <address className="not-italic">{site.address.full}</address>
          </div>
          <div className="flex flex-col gap-1 sm:items-end">
            <a className="transition-colors hover:text-foreground" href={`mailto:${site.email}`}>
              {site.email}
            </a>
            <a className="transition-colors hover:text-foreground" href={site.phone.url}>
              Tel {site.phone.display}
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
}
