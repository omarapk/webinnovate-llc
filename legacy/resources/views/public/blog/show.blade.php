@extends('public.layouts.app')

@section('title', filled($post->seo_title) ? $post->seo_title : $post->title.' — Blog')
@section('meta_description', filled($post->meta_description)
    ? \Illuminate\Support\Str::limit(strip_tags($post->meta_description), 160)
    : trim(\Illuminate\Support\Str::limit(strip_tags((string) ($post->excerpt ?? $post->title)), 160)))

@section('og_type', 'article')
@section('og_title', $post->seo_title ?? $post->title)
@if ($post->featured_image_url ?? null)
    @section('og_image', $post->featured_image_url)
@endif

@push('head')
    @if (is_array($post->tags) && count($post->tags))
        <meta name="keywords" content="{{ e(implode(', ', $post->tags)) }}">
    @endif
    @php
        $blogSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $post->title,
            'description' => \Illuminate\Support\Str::limit(strip_tags((string) ($post->excerpt ?? $post->content)), 200),
            'datePublished' => $post->published_at?->toIso8601String(),
            'dateModified' => $post->updated_at->toIso8601String(),
            'author' => [
                '@type' => 'Person',
                'name' => $post->author_name ?? $app['name'].' Team',
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('site.company'),
                'url' => url('/'.$app['slug']),
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => url()->current(),
            ],
        ];
        if (filled($post->featured_image_url ?? null)) {
            $blogSchema['image'] = $post->featured_image_url;
        }
    @endphp
    <script type="application/ld+json">{!! json_encode($blogSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@endpush

@push('styles')
    <style>
        /* Match header: same .container as landing-navbar — no separate max-width wrapper */
        .blog-show-page .blog-content { overflow-wrap: anywhere; word-break: break-word; }
        .blog-show-page .blog-content img,
        .blog-show-page .blog-content video,
        .blog-show-page .blog-content iframe { max-width: 100%; height: auto; }
    </style>
@endpush

@section('content')
    <div class="blog-show-page">
        <div class="container py-4 py-lg-5">
            @if ($post->featured_image)
                <div class="blog-show-hero mb-3 mb-lg-4">
                    <img src="{{ $post->featured_image_url }}" alt="{{ filled($post->alt_text) ? $post->alt_text : $post->title }}" class="w-100 rounded-3 object-fit-cover" style="max-height: 420px;">
                </div>
            @endif

            <div class="row g-4">
                <div class="col-lg-8">
                    <article class="pub-card p-4 p-lg-5">
                        <header class="mb-4">
                            <h1 class="display-6 fw-bold mt-2">{{ $post->title }}</h1>
                            <div class="text-muted small d-flex flex-wrap gap-3 mt-2">
                                @if ($post->author_name)
                                    <span>By {{ $post->author_name }}</span>
                                @endif
                                <time datetime="{{ $post->published_at?->toIso8601String() }}"><i class="bi bi-calendar3 me-1"></i>{{ $post->published_at?->format('F j, Y') ?? $post->created_at->format('F j, Y') }}</time>
                            </div>
                        </header>
                        <div class="blog-content lh-lg text-body">
                            {!! $post->content !!}
                        </div>
                        <div class="mt-5 pt-4 border-top">
                            <a href="{{ url('/'.$app['slug'].'#blog') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch"><i class="bi bi-arrow-left me-1"></i>@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to '.$app['display_name']])</a>
                        </div>
                    </article>
                </div>

                <aside class="col-lg-4">
                    <div class="pub-card p-4 mb-4">
                        <h2 class="h6 text-uppercase text-muted fw-semibold mb-3" style="letter-spacing: .06em;">Recent posts</h2>
                        <ul class="list-unstyled mb-0">
                            @foreach ($recentPosts as $r)
                                <li class="mb-3 pb-3 border-bottom border-light-subtle">
                                    <a href="{{ route('apps.blog.show', ['app' => $app['slug'], 'slug' => $r->slug]) }}" class="text-decoration-none fw-medium text-dark">{{ \Illuminate\Support\Str::limit($r->title, 64) }}</a>
                                    <div class="small text-muted mt-1">{{ $r->published_at?->format('M j, Y') }}</div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
