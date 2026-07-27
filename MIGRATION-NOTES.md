# Migration Notes — Multi-App Marketing Site

The site now serves the whole WebInnovate / WEBI portfolio from one domain
(`webinnovate.dev`). Things to do **after deploying** this branch.

## 1. Run the database migration

The deploy already runs `php artisan migrate --force` (see the Docker
entrypoints). The new migration `2026_07_21_120000_add_app_slug_to_blog_posts_table`
adds `blog_posts.app_slug` with default `leadform`, so **all existing posts stay
attached to LeadForm** and no data backfill is needed.

## 2. Update Shopify App Store listing URLs

Each app's Shopify Partner listing has "Privacy policy URL", "App website" and
support links. Point them at the new namespaced pages:

| App | Listing | New URLs |
| --- | --- | --- |
| WEBI LeadForm | apps.shopify.com/leadform-cod | unchanged — `https://webinnovate.dev/leadform`, `/leadform/privacy-policy`, `/leadform/terms-of-service`, `/leadform/refund-policy` |
| WEBI AI Landing Page Builder | apps.shopify.com/webi-landing-page-builder-cod | `https://webinnovate.dev/landing-page-builder`, `/landing-page-builder/privacy-policy`, `/landing-page-builder/terms-of-service`, `/landing-page-builder/refund-policy` |
| WEBI OrderSheet | apps.shopify.com/ordersheet-auto-order-sync | `https://webinnovate.dev/ordersheet`, `/ordersheet/privacy-policy`, `/ordersheet/terms-of-service`, `/ordersheet/refund-policy` |

## 3. Old blog URLs

`/blog/{slug}` now 301-redirects to `/leadform/blog/{slug}` (and `/blog` to
`/leadform/blog`). No action needed, but expect Search Console to re-crawl.

## 4. Search Console / SEO

- `/leadform` is no longer `noindex` — request indexing in Search Console.
- Submit `https://webinnovate.dev/sitemap.xml` (robots.txt now references it).
- The old Wix corporate site (`webinnovatedev.wixsite.com/home`) should ideally
  redirect to `https://webinnovate.dev/` or be taken down to avoid duplicate
  branding.

## 5. Admin

The blog post form has a new required **App** selector (LeadForm / AI Landing
Page Builder / OrderSheet) that controls which `/{app}/blog` namespace the
article appears in.

## Adding a 4th app later

1. Create `config/apps/{slug}.php` (copy `config/apps/ordersheet.php`).
2. Add the slug to `app_order` in `config/site.php`.
3. Add the two legal-route slugs in `routes/web.php` (`where('app', ...)`).
4. Drop the app icon/screenshots in `public/assets/images/apps/`.
