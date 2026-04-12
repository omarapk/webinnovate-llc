@extends('public.layouts.docs')

@section('title', $article->title.' — Help Center')
@section('meta_description', trim(\Illuminate\Support\Str::limit(strip_tags((string) ($article->excerpt ?? $article->title)), 160)))

@section('content')
    <div class="container-fluid px-0">
        <div class="row g-0">
            <aside class="col-lg-3 col-xl-2 docs-sidebar d-none d-lg-block py-4 px-3">
                <a href="{{ route('docs.category', $article->category->slug) }}" class="docs-sidebar-link text-dark fw-semibold mb-3 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i> {{ $article->category->name }}
                </a>
                <div class="docs-sidebar-section small">Articles in this category</div>
                @foreach ($siblingArticles as $art)
                    <a href="{{ route('docs.show', $art->slug) }}" class="docs-sidebar-link {{ $art->slug === $article->slug ? 'active' : '' }}">
                        {{ \Illuminate\Support\Str::limit($art->title, 56) }}
                    </a>
                @endforeach
            </aside>

            <div class="col-lg-9 col-xl-10 bg-white">
                <div class="d-lg-none border-bottom p-3">
                    <button class="lf-cta-btn lf-cta-btn-sm lf-cta-switch w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#docsArticleNav">
                        <i class="bi bi-list me-1"></i>
                        @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Articles in category'])
                    </button>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="docsArticleNav" aria-labelledby="docsArticleNavLabel">
                    <div class="offcanvas-header border-bottom">
                        <h2 class="offcanvas-title h6" id="docsArticleNavLabel">{{ $article->category->name }}</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <a href="{{ route('docs.category', $article->category->slug) }}" class="docs-sidebar-link text-dark fw-semibold mb-2">← Back to category</a>
                        @foreach ($siblingArticles as $art)
                            <a href="{{ route('docs.show', $art->slug) }}" class="docs-sidebar-link {{ $art->slug === $article->slug ? 'active' : '' }}">{{ $art->title }}</a>
                        @endforeach
                    </div>
                </div>

                <article class="px-3 px-lg-5 py-4 py-lg-5 mx-auto" style="max-width: 720px;">
                    <nav class="docs-breadcrumb mb-3" aria-label="Breadcrumb">
                        <a href="{{ route('docs.index') }}">Home</a>
                        <span class="sep">›</span>
                        <a href="{{ route('docs.category', $article->category->slug) }}">{{ $article->category->name }}</a>
                        <span class="sep">›</span>
                        <span class="text-dark">{{ \Illuminate\Support\Str::limit($article->title, 48) }}</span>
                    </nav>

                    <a href="{{ route('docs.category', $article->category->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch d-inline-flex align-items-center gap-1 mb-4">
                        <i class="bi bi-arrow-left"></i>
                        @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to '.$article->category->name])
                    </a>

                    <header class="mb-4">
                        <h1 class="h2 fw-semibold mb-3" style="letter-spacing: -0.03em;">{{ $article->title }}</h1>
                        @if ($article->author || $article->published_at)
                            <div class="text-muted small">
                                @if ($article->author)
                                    <span class="me-3">{{ $article->author->name }}</span>
                                @endif
                                @if ($article->published_at)
                                    <time datetime="{{ $article->published_at->toIso8601String() }}">{{ $article->published_at->format('F j, Y') }}</time>
                                @endif
                            </div>
                        @endif
                    </header>

                    @if ($article->featured_image)
                        <figure class="mb-4 rounded-3 overflow-hidden border">
                            <img src="{{ asset('storage/'.$article->featured_image) }}" class="img-fluid w-100" alt="">
                        </figure>
                    @endif

                    <div class="docs-content mb-5">
                        {!! $article->content !!}
                    </div>

                    <div class="d-flex flex-wrap justify-content-between gap-3 pt-4 border-top">
                        <div>
                            @if ($prev)
                                @php
                                    $prevLabel = \Illuminate\Support\Str::limit($prev->title, 32);
                                @endphp
                                <a href="{{ route('docs.show', $prev->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch"><i class="bi bi-arrow-left me-1"></i>@include('public.layouts.partials.lf-cta-switch-label', ['label' => $prevLabel])</a>
                            @endif
                        </div>
                        <div>
                            @if ($next)
                                @php
                                    $nextLabel = \Illuminate\Support\Str::limit($next->title, 32);
                                @endphp
                                <a href="{{ route('docs.show', $next->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => $nextLabel])<i class="bi bi-arrow-right ms-1"></i></a>
                            @endif
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
