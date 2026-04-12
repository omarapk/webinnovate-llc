@extends('public.layouts.docs')

@section('title', 'Help Center — LeadForm')
@section('meta_description', 'LeadForm documentation: guides and help articles for the Shopify COD order form app.')

@php
    $catIcons = ['bi-sliders', 'bi-ui-checks-grid', 'bi-chat-dots', 'bi-question-circle', 'bi-arrow-up-right-circle', 'bi-table', 'bi-plug', 'bi-gear'];
@endphp

@section('content')
    <div class="docs-search-hero">
        <h1 class="mb-0">How can we help you?</h1>
        <form class="docs-search-input position-relative mt-4" action="{{ route('docs.index') }}" method="get" role="search">
            <i class="bi bi-search search-icon"></i>
            <input type="search" name="q" value="{{ $query }}" class="form-control" placeholder="How can we help you?" autocomplete="off" aria-label="Search help articles">
        </form>
    </div>

    <div class="container py-5" style="max-width: 960px;">
        @if ($query !== '')
            <div class="mb-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                    <h2 class="docs-section-title mb-0">Search results</h2>
                    <a href="{{ route('docs.index') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Clear search'])</a>
                </div>
                @if ($searchResults->isEmpty())
                    <p class="text-muted mb-0">No articles matched &ldquo;{{ $query }}&rdquo;. Try different keywords or browse categories below.</p>
                @else
                    <div class="border rounded-3 bg-white px-3 px-md-4">
                        @foreach ($searchResults as $art)
                            <div class="docs-article-row">
                                <div class="d-flex flex-wrap align-items-start justify-content-between gap-2">
                                    <a href="{{ route('docs.show', $art->slug) }}" class="title d-block mb-0">{{ $art->title }}</a>
                                    <a href="{{ route('docs.show', $art->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch flex-shrink-0">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Read more'])</a>
                                </div>
                                @if ($art->excerpt)
                                    <p class="small text-muted mb-0 mt-1">{{ \Illuminate\Support\Str::limit(strip_tags($art->excerpt), 140) }}</p>
                                @endif
                                @if ($art->category)
                                    <span class="small text-muted">{{ $art->category->name }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif

        <section class="mb-5 pb-2">
            <h2 class="docs-section-title">Most read articles</h2>
            @if ($mostReadArticles->isEmpty())
                <p class="text-muted small mb-0">No published articles yet.</p>
            @else
                <div class="border rounded-3 bg-white px-3 px-md-4">
                    @foreach ($mostReadArticles as $art)
                        <div class="docs-article-row">
                            <div class="d-flex flex-wrap align-items-start justify-content-between gap-2">
                                <a href="{{ route('docs.show', $art->slug) }}" class="title mb-0">{{ $art->title }}</a>
                                <a href="{{ route('docs.show', $art->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch flex-shrink-0">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Read more'])</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <section>
            <h2 class="docs-section-title">All categories</h2>
            @if ($categories->isEmpty())
                <p class="text-muted small mb-0">No categories yet.</p>
            @else
                <div class="row g-3 g-md-4">
                    @foreach ($categories as $i => $cat)
                        <div class="col-md-6 col-lg-4">
                            <a href="{{ route('docs.category', $cat->slug) }}" class="docs-card-cat">
                                <div class="docs-card-cat-icon">
                                    <i class="bi {{ $catIcons[$i % count($catIcons)] }}"></i>
                                </div>
                                <h3>{{ $cat->name }}</h3>
                                <p class="mb-0">{{ $cat->description ? \Illuminate\Support\Str::limit($cat->description, 120) : 'Browse articles in this category.' }}</p>
                                <span class="count d-inline-block mt-2">{{ $cat->articles_count }} {{ \Illuminate\Support\Str::plural('article', $cat->articles_count) }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
@endsection
