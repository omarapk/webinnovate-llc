<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Corporate pages --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ url('/about') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc>{{ url('/terms-of-use') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>

    {{-- App landings + per-app namespaces --}}
    @foreach ($apps as $app)
    <url>
        <loc>{{ url('/'.$app['slug']) }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('apps.blog.index', ['app' => $app['slug']]) }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    <url>
        <loc>{{ url('/'.$app['slug'].'/privacy-policy') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc>{{ url('/'.$app['slug'].'/terms-of-service') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    <url>
        <loc>{{ url('/'.$app['slug'].'/refund-policy') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>
    @endforeach

    {{-- Docs --}}
    <url>
        <loc>{{ route('docs.index') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    {{-- Blog posts (namespaced per app) --}}
    @foreach ($blogPosts as $post)
    <url>
        <loc>{{ route('apps.blog.show', ['app' => $post->app_slug ?? 'leadform', 'slug' => $post->slug]) }}</loc>
        <lastmod>{{ $post->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

    {{-- Doc categories --}}
    @foreach ($docCategories as $cat)
    <url>
        <loc>{{ route('docs.category', $cat->slug) }}</loc>
        <lastmod>{{ $cat->updated_at->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach

    {{-- Doc articles --}}
    @foreach ($docArticles as $art)
    <url>
        <loc>{{ route('docs.show', $art->slug) }}</loc>
        <lastmod>{{ $art->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
</urlset>
