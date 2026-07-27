/**
 * Site-wide company data.
 *
 * Shared by the corporate pages, legal pages and JSON-LD structured data.
 * Ported from the previous `config/site.php`.
 */

export const site = {
  company: 'WebInnovate LLC',
  brand: 'WebInnovate',
  suite: 'WEBI',
  tagline: 'Custom SaaS solutions built by experts',
  description:
    'WebInnovate LLC is a software studio that designs, builds and operates custom SaaS products — development, security, SEO, support and maintenance — for founders and teams who want software that drives revenue.',
  url: 'https://webinnovate.dev',
  email: 'contact@webinnovate.dev',
  address: {
    street: '271 W. Short St Ste 410',
    city: 'Lexington',
    state: 'KY',
    zip: '40507',
    country: 'USA',
    full: '271 W. Short St Ste 410, Lexington, KY 40507, USA',
  },
  phone: {
    display: '+1 (270) 290-4825',
    url: 'tel:+12702904825',
  },
  whatsapp: {
    display: '+1 (819) 807-0658',
    url: 'https://wa.me/18198070658',
  },
  socials: [
    { label: 'Facebook', url: 'https://www.facebook.com/leadform.cod' },
    { label: 'WhatsApp', url: 'https://wa.me/18198070658' },
    { label: 'Instagram', url: 'https://www.instagram.com/leadform.cod' },
    { label: 'YouTube', url: 'https://www.youtube.com/@Lead-Form-COD/videos' },
  ],
  /** Proof points shown on the corporate homepage. */
  trustStats: [
    { count: 10, suffix: 'k', label: 'Merchants using our products' },
    { count: 20, suffix: '', label: 'Countries reached' },
    { count: 10, suffix: 'M', label: 'Orders processed' },
    { count: 5, suffix: '', label: 'Years shipping SaaS' },
  ],
} as const;

export type SocialLabel = (typeof site.socials)[number]['label'];
