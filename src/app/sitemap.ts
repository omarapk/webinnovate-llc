import type { MetadataRoute } from 'next';

import { site } from '@/data/site';

/**
 * Every page is static and hand-written, so the sitemap is an explicit list.
 * Add a route here when you add a page — nothing generates it automatically.
 */

const routes = [
  { path: '/', priority: 1, changeFrequency: 'weekly' },
  { path: '/leadform', priority: 0.9, changeFrequency: 'weekly' },
  { path: '/about', priority: 0.7, changeFrequency: 'monthly' },
  { path: '/contact', priority: 0.7, changeFrequency: 'monthly' },
  { path: '/privacy-policy', priority: 0.3, changeFrequency: 'yearly' },
  { path: '/terms-of-use', priority: 0.3, changeFrequency: 'yearly' },
  { path: '/leadform/privacy-policy', priority: 0.3, changeFrequency: 'yearly' },
  { path: '/leadform/terms-of-service', priority: 0.3, changeFrequency: 'yearly' },
  { path: '/leadform/refund-policy', priority: 0.3, changeFrequency: 'yearly' },
] as const satisfies readonly {
  path: string;
  priority: number;
  changeFrequency: NonNullable<MetadataRoute.Sitemap[number]['changeFrequency']>;
}[];

export default function sitemap(): MetadataRoute.Sitemap {
  const lastModified = new Date();

  return routes.map(({ path, priority, changeFrequency }) => ({
    url: new URL(path, site.url).toString(),
    lastModified,
    changeFrequency,
    priority,
  }));
}
