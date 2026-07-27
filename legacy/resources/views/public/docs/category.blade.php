@extends('public.layouts.docs')

@section('title', $category->name.' — Help Center')
@section('meta_description', trim(\Illuminate\Support\Str::limit(strip_tags((string) ($category->description ?? $category->name)), 160)))

@section('content')
    <div class="container-fluid px-0">
        <div class="row g-0">
            <aside class="col-lg-3 col-xl-2 docs-sidebar d-none d-lg-block py-4 px-3">
                <a href="{{ route('docs.index') }}" class="docs-sidebar-link text-dark fw-semibold mb-3 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-arrow-left"></i> All categories
                </a>
                @foreach ($navCategories as $cat)
                    <a href="{{ route('docs.category', $cat->slug) }}" class="docs-sidebar-link {{ $cat->id === $category->id ? 'active' : '' }}">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </aside>

            <div class="col-lg-9 col-xl-10 bg-white">
                <div class="d-lg-none border-bottom p-3">
                    <button class="lf-cta-btn lf-cta-btn-sm lf-cta-switch w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#docsCatNav">
                        <i class="bi bi-list me-1"></i>
                        @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Categories'])
                    </button>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="docsCatNav" aria-labelledby="docsCatNavLabel">
                    <div class="offcanvas-header border-bottom">
                        <h2 class="offcanvas-title h6" id="docsCatNavLabel">Categories</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <a href="{{ route('docs.index') }}" class="docs-sidebar-link text-dark fw-semibold mb-2">← All categories</a>
                        @foreach ($navCategories as $cat)
                            <a href="{{ route('docs.category', $cat->slug) }}" class="docs-sidebar-link {{ $cat->id === $category->id ? 'active' : '' }}">{{ $cat->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="px-3 px-lg-5 py-4 py-lg-5 mx-auto" style="max-width: 780px;">
                    <a href="{{ route('docs.index') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch d-inline-flex align-items-center gap-1 mb-3">
                        <i class="bi bi-arrow-left"></i>
                        @include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to Help Center'])
                    </a>

                    <header class="mb-4 pb-4 border-bottom">
                        <h1 class="h3 fw-semibold mb-2" style="letter-spacing: -0.02em;">{{ $category->name }}</h1>
                        @if ($category->description)
                            <p class="text-muted mb-0 lead fs-6">{{ $category->description }}</p>
                        @endif
                    </header>

                    @forelse ($articles as $art)
                        <article class="docs-article-row py-4">
                            <a href="{{ route('docs.show', $art->slug) }}" class="title h6 mb-2 d-block">{{ $art->title }}</a>
                            @if ($art->excerpt)
                                <p class="text-muted small mb-2">{{ \Illuminate\Support\Str::limit(strip_tags($art->excerpt), 200) }}</p>
                            @endif
                            <a href="{{ route('docs.show', $art->slug) }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Read more →'])</a>
                        </article>
                    @empty
                        <p class="text-muted">No published articles in this category yet.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
