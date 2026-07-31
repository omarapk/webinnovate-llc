import type { NextConfig } from 'next';

const nextConfig: NextConfig = {
  poweredByHeader: false,
  // A stray lockfile in the home directory makes Next guess the wrong root.
  turbopack: { root: import.meta.dirname },
  images: {
    formats: ['image/avif', 'image/webp'],
  },

  /**
   * URLs the Laravel site served that this one does not. They are indexed, so
   * they get a permanent redirect to the closest equivalent rather than a 404.
   * Drop an entry once its real page exists here.
   */
  async redirects() {
    return [
      // The blog and its posts were LeadForm material; /blog already 301'd to
      // /leadform on the old site.
      { source: '/blog', destination: '/leadform', permanent: true },
      { source: '/blog/:slug', destination: '/leadform', permanent: true },
      { source: '/leadform/blog', destination: '/leadform', permanent: true },
      { source: '/leadform/blog/:slug', destination: '/leadform', permanent: true },

      // The docs section was LeadForm's help center, which now lives on Crisp.
      {
        source: '/docs',
        destination: 'https://webinnovate-leadform.crisp.help/en/',
        permanent: true,
      },
      {
        source: '/docs/:path*',
        destination: 'https://webinnovate-leadform.crisp.help/en/',
        permanent: true,
      },

      { source: '/leadform/about-us', destination: '/about', permanent: true },
      { source: '/leadform/feature-request', destination: '/contact', permanent: true },
      {
        source: '/leadform/cart-upsell-privacy-policy',
        destination: '/leadform/privacy-policy',
        permanent: true,
      },

      { source: '/affiliate/apply', destination: '/contact', permanent: true },
    ];
  },
};

export default nextConfig;
