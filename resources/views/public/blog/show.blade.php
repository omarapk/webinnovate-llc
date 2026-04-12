@extends('public.layouts.app')

@section('title', $post->title.' — Blog')
@section('meta_description', trim(\Illuminate\Support\Str::limit(strip_tags((string) ($post->excerpt ?? $post->title)), 160)))

@section('content')
    @if ($post->featured_image)
        <div class="container-fluid px-0 mb-0">
            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="" class="w-100 object-fit-cover" style="max-height: 420px;">
        </div>
    @endif

    <div class="container py-4 py-lg-5">
        <div class="row g-4">
            <div class="col-lg-8">
                <article class="pub-card p-4 p-lg-5">
                    <header class="mb-4">
                        @if ($post->category)
                            <a href="{{ url('/leadform?category='.$post->category->slug.'#blog') }}" class="badge bg-primary-subtle text-primary-emphasis text-decoration-none mb-2">{{ $post->category->name }}</a>
                        @endif
                        <h1 class="display-6 fw-bold mt-2">{{ $post->title }}</h1>
                        <div class="text-muted small d-flex flex-wrap gap-3 mt-2">
                            @if ($post->author)
                                <span><i class="bi bi-person me-1"></i>{{ $post->author->name }}</span>
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
                <div class="pub-card p-4 sticky-lg-top" style="top: 5.5rem;">
                    <h2 class="h6 text-uppercase text-muted fw-semibold mb-3" style="letter-spacing: .06em;">Categories</h2>
                    <ul class="list-unstyled mb-0">
                        @foreach ($categories as $cat)
                            <li class="mb-2">
                                <a href="{{ url('/leadform?category='.$cat->slug.'#blog') }}" class="d-flex justify-content-between text-decoration-none text-body">
                                    <span>{{ $cat->name }}</span>
                                    <span class="badge bg-light text-secondary border">{{ $cat->posts_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
