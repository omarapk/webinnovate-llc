/**
 * WEBI LeadForm — app landing content.
 *
 * Ported from the previous `config/apps/leadform.php`. Copy is kept as it was
 * written; only the structure changed, reorganised into the feature-per-section
 * rhythm the new page uses.
 */

export const leadform = {
  slug: 'leadform',
  name: 'WEBI LeadForm',
  displayName: 'LeadForm',
  tag: 'COD Order Form',
  icon: '/assets/images/apps/leadform-icon.png',
  appStoreUrl: 'https://apps.shopify.com/leadform-cod',
  helpCenterUrl: 'https://webinnovate-leadform.crisp.help/en/',
  affiliateUrl: 'https://platform.shoffi.app/signup/affiliate?app=Gl_aqvi4vT4',
  whatsappUrl: 'https://wa.me/18198070658',
  supportEmail: 'support@webinnovate.dev',
  supportPhone: {
    display: '+1 (819) 807-0658',
    url: 'tel:+18198070658',
  },

  accent: { from: '#A21CAF', to: '#E11D8F' },

  listing: {
    rating: '4.8',
    reviews: 93,
    price: 'Free plan available',
  },

  seo: {
    title: 'LeadForm — Shopify COD Order Form with 10+ Apps in One',
    description:
      'LeadForm is the all-in-one Shopify COD order form: one-click checkout, upsells & bundles, Google Sheets sync, WhatsApp recovery, multi-pixel tracking and fraud protection. Start your free trial.',
  },

  nav: [
    { label: 'Features', href: '#features' },
    { label: 'Pricing', href: '#pricing' },
    { label: 'Reviews', href: '#reviews' },
    { label: 'FAQ', href: '#faq' },
    { label: 'Affiliate', href: '#affiliate' },
  ],

  hero: {
    badge: 'All-in-one COD order form for Shopify',
    headline: 'Turn more visitors into COD orders',
    headlineAccent: '10+ apps in one form',
    description:
      'Easily create a cash-on-delivery form that generates leads in a few clicks and lifts your conversion rate — upsells, pixels, Google Sheets and WhatsApp included.',
    primaryCta: 'Start free trial',
    secondaryCta: 'See how it works',
    reassurance: 'Setup in minutes · No coding required',
  },

  stats: [
    { count: 10, suffix: 'k', label: 'Stores using LeadForm' },
    { count: 20, suffix: '', label: 'Countries supported' },
    { count: 30, suffix: '%', label: 'Higher conversion rate' },
    { count: 10, suffix: 'M', label: 'COD orders processed' },
  ],

  /**
   * Merchants already selling with LeadForm, shown as a logo row.
   * Assets come from `scripts/prepare-merchant-logos.py` — several originals
   * are screenshots on white and vanish against the strip.
   */
  merchants: [
    { image: '/assets/images/brand/merchants/maison-ayla.png', url: 'https://www.maisonayla.ma', name: 'Maison Ayla' },
    { image: '/assets/images/brand/merchants/emelle.png', url: 'https://emelle.ma/', name: 'Emelle' },
    { image: '/assets/images/brand/merchants/auconfort.png', url: 'https://auconfort.shop/', name: 'Auconfort' },
    { image: '/assets/images/brand/merchants/siv.png', url: 'https://www.siv.army/', name: 'SIV' },
    { image: '/assets/images/brand/merchants/parlons-tendance.png', url: 'https://parlons-tendance.shop/', name: 'Parlons Tendance' },
  ],

  /**
   * Feature sections. Each one gets a full band with copy on one side and a
   * mockup on the other, alternating sides down the page. `mock` selects which
   * illustration component renders.
   */
  features: [
    {
      id: 'order-form',
      eyebrow: 'One-page checkout',
      title: 'A COD form customers actually finish',
      description:
        'Designed for one-click checkout, LeadForm makes ordering fast and effortless — no Shopify checkout detour, no drop-offs.',
      points: [
        'Mobile-first form that loads instantly',
        'Fully customizable fields and design',
        'Works on product pages and landing pages',
      ],
      result: 'Up to 30% higher conversions',
      mock: 'form',
    },
    {
      id: 'upsells',
      eyebrow: 'Upsells & bundles',
      title: 'Make every order worth more',
      description:
        'Quantity offers, bundles and add-ons sit right inside the form, so customers upgrade themselves before they ever hit confirm.',
      points: [
        'Volume discounts applied instantly',
        'Bundle any products into one pack',
        'Pre and post-purchase offers',
      ],
      result: 'Higher average order value, same traffic',
      mock: 'upsell',
    },
    {
      id: 'sheets',
      eyebrow: 'Google Sheets sync',
      title: 'Every order in your sheet, in real time',
      description:
        'Orders and abandoned orders land in Google Sheets the moment they happen, ready for your call centre and your delivery partner.',
      points: [
        'Live two-way sync, no manual export',
        'Abandoned orders synced too',
        'One sheet per store or per market',
      ],
      result: 'No copy-paste, no lost orders',
      mock: 'sheets',
    },
    {
      id: 'pixels',
      eyebrow: 'Multi-pixel tracking',
      title: 'Track every order, on every platform',
      description:
        'Fire accurate conversion events to Facebook, TikTok and Snapchat straight from the form — without installing three more apps.',
      points: [
        'Facebook, TikTok & Snapchat pixels',
        'Server-side events for accuracy',
        'Per-market pixel configuration',
      ],
      result: 'Ad platforms that finally optimise correctly',
      mock: 'pixels',
    },
    {
      id: 'recovery',
      eyebrow: 'WhatsApp recovery',
      title: 'Bring abandoned orders back',
      description:
        'Recover lost leads with WhatsApp reminders and smart follow-ups, triggered automatically the moment a form is abandoned.',
      points: [
        'Automatic WhatsApp reminders',
        'Templates you control per market',
        'Follow-up sequences that stop on order',
      ],
      result: 'Revenue you were already leaving behind',
      mock: 'recovery',
    },
    {
      id: 'fraud',
      eyebrow: 'Fraud prevention',
      title: 'Stop fake orders before they ship',
      description:
        'Block fake orders and protect your margin with advanced filters — the difference between a profitable COD store and a pile of returns.',
      points: [
        'Block by phone, IP or order limit',
        'Flag repeat offenders automatically',
        'Anti-spam rules per market',
      ],
      result: 'Fewer failed deliveries, protected margin',
      mock: 'fraud',
    },
  ],

  testimonials: [
    {
      name: 'Auconfort',
      country: 'Algeria',
      duration: 'Almost 2 years using the app',
      metric: 'Flawless for 2 years',
      text: "I've been using LeadForm since I launched my Shopify store, and it's been flawless — fast, stable, and extremely useful. What truly sets it apart is the support. A huge thank you to Samy, who helped me every step of the way, even during his vacation.",
    },
    {
      name: 'Wi Oui',
      country: 'United Kingdom',
      duration: 'Over 2 years using the app',
      metric: 'Fake orders under control',
      text: "Support team always active and attentive to customer expectations. The IP block option to counter fake orders is available now, it's really great — you have nothing to fear against fake commands.",
    },
    {
      name: 'Urban Avenue',
      country: 'Algeria',
      duration: 'About 1 year using the app',
      metric: 'Used across several stores',
      text: "La meilleure application LEADFORM COD, que j'utilise pour de nombreuses boutiques. Le support est très réactif : j'ai eu un problème technique avec le code de mon site, l'intervention du support a réglé, modifié et suggéré un nouveau et meilleur thème, gratuitement en plus !",
    },
    {
      name: 'MSMODA',
      country: 'Algeria',
      duration: 'About 1 year using the app',
      metric: 'Scaled from day one',
      text: "I've been using this app since I started my Shopify store two years ago — amazing app with an amazing support team, it helped me a lot to grow my business. The features are exactly what we needed to scale our operations efficiently.",
    },
    {
      name: 'BASTA TOOLS',
      country: 'Algeria',
      duration: '12 months using the app',
      metric: 'Set up without a blocker',
      text: 'Application très pratique et fluide. Nous utilisons LeadForm en Algérie pour notre boutique en COD, et cela nous a beaucoup facilité la gestion des commandes et la qualification des clients. Grâce à eux, nous avons pu configurer rapidement sans aucun blocage.',
    },
    {
      name: 'Delivery Uganda',
      country: 'China',
      duration: 'Almost 4 years using the app',
      metric: '4 years on the app',
      text: 'It works well, good service and quick actions. The app has been reliable and the support team responds quickly to any issues we encounter.',
    },
  ],

  faq: [
    {
      q: 'What is LeadForm and how does it work?',
      a: 'LeadForm is a Shopify app designed for COD stores. It replaces the standard checkout with a high-converting order form that includes upsells, bundles, pixel tracking, and more.',
    },
    {
      q: 'Do I need coding skills to set it up?',
      a: 'No coding required. LeadForm installs in one click and is fully customizable directly inside your Shopify admin.',
    },
    {
      q: 'Can I integrate LeadForm with other tools?',
      a: 'Yes. It integrates with Google Sheets, WhatsApp, and supports multi-pixel tracking (Facebook, TikTok, Snapchat, etc.).',
    },
    {
      q: 'Will LeadForm really help me increase sales?',
      a: 'Yes. Merchants using LeadForm report up to 30% higher conversions and a significant boost in average order value thanks to upsells and abandoned order recovery.',
    },
    {
      q: 'Does LeadForm work on mobile?',
      a: 'Absolutely. The form is fully optimized for mobile users, ensuring a smooth experience and higher conversions.',
    },
    {
      q: 'How does pricing work?',
      a: 'We offer flexible pricing plans for every stage of growth. Start with a free trial, then upgrade as your store scales.',
    },
    {
      q: 'Can I cancel anytime?',
      a: 'Yes. There are no long-term commitments — you can cancel or change your plan at any time.',
    },
    {
      q: 'Do you provide customer support?',
      a: "Of course. Our support team is available via live chat and email. We're here to listen to your needs and help you get the best results from LeadForm.",
    },
    {
      q: 'Will installing LeadForm change my Shopify checkout or theme?',
      a: "No. LeadForm adds a one-page order form on your product and landing pages instead of sending customers through Shopify's default checkout, and your theme stays untouched. Every field and the design are customizable from your Shopify admin.",
    },
  ],

  pricing: {
    note: 'All charges are billed in USD. Recurring and usage-based charges are billed every 30 days.',
    /** Shared by every plan, so the cards only list what differs. */
    commonFeatures: [
      'Google Sheets synchronisation',
      'Upsells & bundles',
      'WhatsApp abandoned checkouts',
      'Shipping rates',
      'Multi-pixels',
      'Anti-spam fake order protection',
      '24/7 support',
    ],
    plans: [
      {
        name: 'Free',
        monthly: 'Free',
        yearly: 'Free',
        yearlyNote: '',
        headline: '60 orders / month',
        cta: 'Start free',
        featured: false,
      },
      {
        name: 'Starter',
        monthly: '$9.99',
        yearly: '$99',
        yearlyNote: 'save 17%',
        headline: '440 orders / month',
        cta: 'Start now',
        featured: false,
      },
      {
        name: 'Unlimited',
        monthly: '$24.99',
        yearly: '$249',
        yearlyNote: 'save 17%',
        headline: 'Unlimited orders',
        cta: 'Start now',
        featured: true,
      },
      {
        name: 'Market',
        monthly: '$99.99',
        yearly: '$999.99',
        yearlyNote: 'save 17%',
        headline: 'Multiple markets',
        cta: 'Start now',
        featured: false,
      },
    ],
  },

  affiliate: {
    eyebrow: 'Become a partner',
    title: 'Join our 30% lifetime commission program',
    description:
      'Every COD store you refer means recurring monthly income. Turn your network into a predictable revenue stream with LeadForm.',
    benefits: ['Full transparency', 'Passive income', 'Lifetime commission', '30-day attribution'],
    cta: 'Join now',
  },

  footer: {
    description:
      'The all-in-one COD order form trusted by thousands of Shopify merchants. Simplify checkout, boost conversions, and scale your business.',
    product: [
      { label: 'Features', href: '/leadform#features' },
      { label: 'Pricing', href: '/leadform#pricing' },
      { label: 'FAQ', href: '/leadform#faq' },
      { label: 'Become an affiliate', href: '/leadform#affiliate' },
    ],
    legal: [
      { label: 'Privacy Policy', href: '/leadform/privacy-policy' },
      { label: 'Terms of Service', href: '/leadform/terms-of-service' },
      { label: 'Refund Policy', href: '/leadform/refund-policy' },
    ],
  },
} as const;

export type LeadformFeature = (typeof leadform.features)[number];
