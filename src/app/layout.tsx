import type { Metadata } from 'next';
import { Geist, Geist_Mono } from 'next/font/google';

import { Footer } from '@/components/footer';
import { Header } from '@/components/header';
import { site } from '@/data/site';

import './globals.css';

const geistSans = Geist({
  variable: '--font-geist-sans',
  subsets: ['latin'],
  display: 'swap',
});

const geistMono = Geist_Mono({
  variable: '--font-geist-mono',
  subsets: ['latin'],
  display: 'swap',
});

export const metadata: Metadata = {
  metadataBase: new URL(site.url),
  title: {
    default: `${site.brand} — ${site.tagline}`,
    template: `%s | ${site.brand}`,
  },
  description: site.description,
  robots: { index: true, follow: true },
  alternates: { canonical: '/' },
  icons: {
    icon: '/assets/images/brand/webinnovate/icon-clean.png',
    apple: '/assets/images/brand/webinnovate/icon-clean.png',
  },
  openGraph: {
    type: 'website',
    siteName: site.brand,
    title: `${site.brand} — ${site.tagline}`,
    description: site.description,
    url: '/',
  },
  twitter: { card: 'summary_large_image' },
};

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="en" className={`scroll-smooth ${geistSans.variable} ${geistMono.variable}`}>
      <body className="min-h-screen bg-background text-foreground">
        <a
          href="#main"
          className="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-primary focus:px-4 focus:py-2 focus:text-sm focus:text-primary-foreground"
        >
          Skip to content
        </a>

        <Header />

        <main id="main">{children}</main>

        <Footer />
      </body>
    </html>
  );
}
