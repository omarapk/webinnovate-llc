@extends('public.layouts.docs')

@section('title', 'Help Center — LeadForm')
@section('meta_description', 'LeadForm documentation: guides and help articles for the Shopify COD order form app.')

@php
    $catIcons = ['bi-sliders', 'bi-ui-checks-grid', 'bi-chat-dots', 'bi-question-circle', 'bi-arrow-up-right-circle', 'bi-table', 'bi-plug', 'bi-gear'];
@endphp

@push('styles')
    <style>
        .docs-search-input--hero .form-control {
            background: var(--docs-bg);
            border: 1px solid var(--docs-border);
            border-radius: 0.75rem;
            padding: 0.7rem 1rem 0.7rem 2.7rem;
            font-size: clamp(0.875rem, 1.4vw, 1rem);
            min-height: 2.75rem;
            line-height: 1.4;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
        }
        .docs-search-input--hero .form-control:focus {
            border-color: #9ca3af;
            box-shadow: 0 0 0 3px rgba(17, 24, 39, 0.06), 0 4px 16px rgba(0, 0, 0, 0.08);
        }
        .docs-search-input--hero .search-icon {
            left: 0.9rem;
            font-size: 1.1rem;
            color: var(--docs-muted);
        }
        .docs-index-article-grid {
            background: transparent;
        }
        .docs-index-article-grid > .row:not(:last-child) {
            margin-bottom: 0.75rem;
        }
        .docs-index-article-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1.2rem 1.25rem;
            min-height: 4rem;
            text-decoration: none;
            color: inherit;
            border: 1px solid var(--docs-border);
            border-radius: 0.5rem;
            background: var(--docs-bg);
            transition: background 0.15s ease, border-color 0.15s ease, box-shadow 0.15s ease;
        }
        .docs-index-article-link:hover {
            background: var(--docs-hover);
            border-color: #d1d5db;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .docs-index-article-link .docs-index-article-title {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--docs-accent);
            line-height: 1.35;
            text-decoration: none;
        }
        .docs-index-article-link .docs-index-chevron {
            flex-shrink: 0;
            font-size: 1.5rem;
            font-weight: 400;
            line-height: 1;
            color: var(--docs-muted);
        }
        .docs-index-cat-card {
            border: 1px solid var(--docs-border);
            border-radius: 0.75rem;
            background: var(--docs-bg);
            padding: 1.35rem 1.4rem;
            height: 100%;
            transition: border-color 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
        }
        .docs-index-cat-card:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
            background: var(--docs-hover);
        }
        .docs-index-cat-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            background: var(--docs-hover);
            color: #374151;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.45rem;
            border: 1px solid var(--docs-border);
        }
        .docs-index-cat-badge {
            display: inline-block;
            max-width: 100%;
            padding: 0.3rem 0.85rem;
            border-radius: 999px;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: -0.01em;
            color: var(--docs-accent);
            background: var(--docs-hover);
            border: 1px solid var(--docs-border);
        }
        .docs-index-cat-desc {
            font-size: 1.0625rem;
            line-height: 1.55;
        }
        .docs-index-cat-meta {
            font-size: 1rem;
        }
    </style>
@endpush

@section('content')
    <div class="docs-search-hero">
        <div class="docs-search-hero-inner px-3 px-md-4">
            <h1 class="mb-0">How can we help you?</h1>
            <form class="docs-search-input docs-search-input--hero position-relative mt-4 mt-md-5 mx-auto" style="max-width: 28rem;" action="{{ route('docs.index') }}" method="get" role="search">
                <i class="bi bi-search search-icon" aria-hidden="true"></i>
                <input type="search" name="q" value="{{ $query }}" class="form-control w-100" placeholder="Search help articles…" autocomplete="off" aria-label="Search help articles">
            </form>
        </div>
    </div>

    <div class="container py-5" style="max-width: 1040px;">
        @if ($query !== '')
            <div class="mb-5 docs-index-block">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                    <h2 class="docs-section-title mb-0">Search results</h2>
                    <a href="{{ route('docs.index') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Clear search'])</a>
                </div>
                @if ($searchResults->isEmpty())
                    <p class="text-muted mb-0">No articles matched &ldquo;{{ $query }}&rdquo;. Try different keywords or browse categories below.</p>
                @else
                    <div class="docs-index-article-grid">
                        @foreach ($searchResults->chunk(2) as $row)
                            <div class="row g-3">
                                @foreach ($row as $art)
                                    <div class="col-md-6 docs-index-article-cell">
                                        <a href="{{ route('docs.show', $art->slug) }}" class="docs-index-article-link w-100 h-100">
                                            <span class="docs-index-article-title">{{ $art->title }}</span>
                                            <span class="docs-index-chevron" aria-hidden="true">›</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif

        <section class="docs-index-block pb-2">
            <h2 class="docs-section-title">Frequently read articles</h2>
            @if ($mostReadArticles->isEmpty())
                <p class="docs-section-empty">No published articles yet.</p>
            @else
                <div class="docs-index-article-grid">
                    @foreach ($mostReadArticles->chunk(2) as $row)
                        <div class="row g-3">
                            @foreach ($row as $art)
                                <div class="col-md-6 docs-index-article-cell">
                                    <a href="{{ route('docs.show', $art->slug) }}" class="docs-index-article-link w-100 h-100">
                                        <span class="docs-index-article-title">{{ $art->title }}</span>
                                        <span class="docs-index-chevron" aria-hidden="true">›</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <section class="docs-index-block">
            <h2 class="docs-section-title">Browse all categories</h2>
            @if ($categories->isEmpty())
                <p class="docs-section-empty">No categories yet.</p>
            @else
                <div class="row g-3 g-md-4">
                    @foreach ($categories as $i => $cat)
                        <div class="col-md-6">
                            <a href="{{ route('docs.category', $cat->slug) }}" class="docs-index-cat-card d-flex gap-3 text-decoration-none text-reset h-100">
                                <div class="docs-index-cat-icon flex-shrink-0">
                                    <i class="bi {{ $catIcons[$i % count($catIcons)] }}"></i>
                                </div>
                                <div class="min-w-0 flex-grow-1">
                                    <span class="docs-index-cat-badge">{{ $cat->name }}</span>
                                    <p class="docs-index-cat-desc text-muted mb-0 mt-2">{{ $cat->description ? \Illuminate\Support\Str::limit($cat->description, 140) : 'Browse articles in this category.' }}</p>
                                    <span class="docs-index-cat-meta text-muted d-inline-block mt-2">{{ $cat->articles_count }} {{ \Illuminate\Support\Str::plural('article', $cat->articles_count) }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>
    </div>
@endsection
