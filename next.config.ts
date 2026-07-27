import type { NextConfig } from 'next';

const nextConfig: NextConfig = {
  poweredByHeader: false,
  // A stray lockfile in the home directory makes Next guess the wrong root.
  turbopack: { root: import.meta.dirname },
  images: {
    formats: ['image/avif', 'image/webp'],
  },
};

export default nextConfig;
