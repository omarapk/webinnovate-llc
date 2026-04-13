@extends('public.layouts.app')

@section('title', filled($post->seo_title) ? $post->seo_title : $post->title.' — Blog')
@section('meta_description', filled($post->meta_description)
    ? \Illuminate\Support\Str::limit(strip_tags($post->meta_description), 160)
    : trim(\Illuminate\Support\Str::limit(strip_tags((string) ($post->excerpt ?? $post->title)), 160)))

@push('head')
    <meta property="og:title" content="{{ e(filled($post->seo_title) ? $post->seo_title : $post->title) }}">
    <meta property="og:description" content="{{ e(\Illuminate\Support\Str::limit(strip_tags((string) (filled($post->meta_description) ? $post->meta_description : ($post->excerpt ?? $post->title))), 160)) }}">
    @if (is_array($post->tags) && count($post->tags))
        <meta name="keywords" content="{{ e(implode(', ', $post->tags)) }}">
    @endif
@endpush

@section('content')
    @if ($post->featured_image)
        <div class="container-fluid px-0 mb-0">
            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ filled($post->alt_text) ? $post->alt_text : $post->title }}" class="w-100 object-fit-cover" style="max-height: 420px;">
        </div>
    @endif

    <div class="container py-4 py-lg-5">
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
                        <a href="{{ url('/leadform#blog') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch"><i class="bi bi-arrow-left me-1"></i>@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to LeadForm'])</a>
                    </div>
                </article>
            </div>

            <aside class="col-lg-4">
                <div class="pub-card p-4 mb-4">
                    <h2 class="h6 text-uppercase text-muted fw-semibold mb-3" style="letter-spacing: .06em;">Recent posts</h2>
                    <ul class="list-unstyled mb-0">
                        @foreach ($recentPosts as $r)
                            <li class="mb-3 pb-3 border-bottom border-light-subtle">
                                <a href="{{ route('blog.show', $r->slug) }}" class="text-decoration-none fw-medium text-dark">{{ \Illuminate\Support\Str::limit($r->title, 64) }}</a>
                                <div class="small text-muted mt-1">{{ $r->published_at?->format('M j, Y') }}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
