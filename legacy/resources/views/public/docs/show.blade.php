@extends('public.layouts.docs')

@section('title', $article->title.' — Help Center')
@section('meta_description', trim(\Illuminate\Support\Str::limit(strip_tags((string) ($article->excerpt ?? $article->title)), 160)))

@section('og_type', 'article')
@section('og_title', $article->title)
@if ($article->featured_image_url)
    @section('og_image', $article->featured_image_url)
@endif

@push('head')
    @php
        $docSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'TechArticle',
            'headline' => $article->title,
            'description' => \Illuminate\Support\Str::limit(strip_tags((string) ($article->excerpt ?? $article->content)), 200),
            'datePublished' => $article->published_at?->toIso8601String(),
            'dateModified' => $article->updated_at->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => 'LeadForm Team',
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'LeadForm',
                'url' => url('/leadform'),
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => url()->current(),
            ],
        ];
        if (filled($article->featured_image_url)) {
            $docSchema['image'] = $article->featured_image_url;
        }
    @endphp
    <script type="application/ld+json">{!! json_encode($docSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@endpush

@section('content')
    <div style="display:flex; min-height: calc(100vh - 73px);">

        {{-- LEFT SIDEBAR --}}
        <aside style="width:220px; flex-shrink:0; border-right:1px solid var(--docs-border); padding:1.5rem 1rem; position:sticky; top:73px; height:calc(100vh - 73px); overflow-y:auto; background:#fafafa;" class="d-none d-lg-block">

            <a href="{{ route('docs.category', $article->category->slug) }}"
               style="display:flex; align-items:center; gap:0.4rem; font-size:0.8rem; color:#6b7280; text-decoration:none; margin-bottom:1.25rem; font-weight:500;">
                <i class="bi bi-arrow-left"></i>
                {{ \Illuminate\Support\Str::limit($article->category->name, 18) }}
            </a>

            <div style="font-size:0.7rem; text-transform:uppercase; letter-spacing:0.08em; color:#9ca3af; font-weight:600; margin-bottom:0.5rem;">
                Related articles
            </div>

            @foreach ($siblingArticles as $art)
                <a href="{{ route('docs.show', $art->slug) }}"
                   style="display:block; font-size:0.8125rem; color:{{ $art->slug === $article->slug ? '#1972F5' : '#374151' }}; text-decoration:none; padding:0.35rem 0.5rem; border-radius:4px; margin-bottom:0.15rem; line-height:1.45; font-weight:{{ $art->slug === $article->slug ? '600' : '400' }}; background:{{ $art->slug === $article->slug ? '#f0f4ff' : 'transparent' }};">
                    {{ \Illuminate\Support\Str::limit($art->title, 45) }}
                </a>
            @endforeach
        </aside>

        {{-- MAIN CONTENT --}}
        <div style="flex:1; min-width:0; padding:2rem 3rem; max-width:760px;">

            <div style="font-size:0.8rem; color:#9ca3af; margin-bottom:1.5rem;">
                Articles on
                <a href="{{ route('docs.category', $article->category->slug) }}" style="color:#9ca3af; text-decoration:none;">{{ $article->category->name }}</a>
            </div>

            <h1 style="font-size:1.75rem; font-weight:700; color:#111; letter-spacing:-0.02em; line-height:1.3; margin-bottom:1.5rem;">
                {{ $article->title }}
            </h1>

            @if ($article->featured_image_url ?? null)
                <img src="{{ $article->featured_image_url }}" class="img-fluid rounded mb-4" alt="{{ $article->title }}">
            @endif

            <div class="docs-content">
                {!! $article->content !!}
            </div>

            <div style="font-size:0.8rem; color:#9ca3af; text-align:center; margin:2rem 0 1.5rem; padding-top:1.5rem; border-top:1px solid var(--docs-border);">
                Updated on {{ $article->updated_at->format('d/m/Y') }}
            </div>

            <div class="helpful-section" style="text-align:center; padding:1.5rem; background:#f9fafb; border-radius:8px;">
                <p style="font-size:0.9rem; color:#374151; margin-bottom:1rem; font-weight:500;">Was this article helpful?</p>
                <div style="display:flex; justify-content:center; gap:0.75rem;">
                    <button type="button" onclick="this.closest('.helpful-section').innerHTML='<p style=\'color:#10b981;font-weight:600\'>👍 Thanks for your feedback!</p>'"
                        style="padding:0.4rem 1.25rem; border:1px solid #10b981; color:#10b981; border-radius:20px; background:transparent; font-size:0.875rem; cursor:pointer;">
                        Yes
                    </button>
                    <button type="button" onclick="this.closest('.helpful-section').innerHTML='<p style=\'color:#6b7280\'>Thanks for letting us know.</p>'"
                        style="padding:0.4rem 1.25rem; border:1px solid #ef4444; color:#ef4444; border-radius:20px; background:transparent; font-size:0.875rem; cursor:pointer;">
                        No
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
