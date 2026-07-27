/**
 * The WEBI product suite.
 *
 * Only the fields the corporate site needs are modelled here. The full
 * per-app landing content still lives in `config/apps/*.php` and will move
 * over when the app landings are rebuilt.
 */

export type AppSlug = 'leadform' | 'landing-page-builder' | 'ordersheet';

export type App = {
  slug: AppSlug;
  name: string;
  displayName: string;
  tag: string;
  portfolioTagline: string;
  icon: string;
  appStoreUrl: string;
  accent: { from: string; to: string };
  listing: { rating: string; reviews: number; price: string };
  highlights: string[];
};

export const apps: App[] = [
  {
    slug: 'leadform',
    name: 'WEBI LeadForm',
    displayName: 'LeadForm',
    tag: 'COD Order Form',
    portfolioTagline:
      'Fully customized COD order form with 10+ apps in one — upsells, pixels, Google Sheets, WhatsApp & more.',
    icon: '/assets/images/apps/leadform-icon.png',
    appStoreUrl: 'https://apps.shopify.com/leadform-cod',
    accent: { from: '#A21CAF', to: '#E11D8F' },
    listing: { rating: '4.8', reviews: 93, price: 'Free plan available' },
    highlights: ['One-page COD checkout', 'Upsells & quantity offers', 'Pixels, Sheets & WhatsApp'],
  },
  {
    slug: 'landing-page-builder',
    name: 'WEBI AI Landing Page Builder',
    displayName: 'AI Landing Page Builder',
    tag: 'AI Page Builder',
    portfolioTagline:
      'Turn product photos or supplier URLs into high-converting, mobile-first landing pages with AI — in seconds.',
    icon: '/assets/images/apps/lpb-icon.png',
    appStoreUrl: 'https://apps.shopify.com/webi-landing-page-builder-cod',
    accent: { from: '#DB2777', to: '#7C3AED' },
    listing: { rating: '3.8', reviews: 4, price: 'From $1/month' },
    highlights: ['AI pages from a photo or URL', 'A/B test generated variants', 'Drag-and-drop refinements'],
  },
  {
    slug: 'ordersheet',
    name: 'WEBI OrderSheet',
    displayName: 'OrderSheet',
    tag: 'Google Sheets Sync',
    portfolioTagline:
      'Automatically send every new Shopify order to Google Sheets — organized, in real time.',
    icon: '/assets/images/apps/ordersheet-icon.png',
    appStoreUrl: 'https://apps.shopify.com/ordersheet-auto-order-sync',
    accent: { from: '#15803D', to: '#22C55E' },
    listing: { rating: '4.5', reviews: 14, price: '$9.99/month' },
    highlights: ['Real-time order sync', 'Filter what gets exported', 'One sheet per supplier'],
  },
];
