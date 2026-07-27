@extends('public.layouts.docs')

@section('title', 'Search — Help Center')
@section('meta_description', 'Search LeadForm help articles.')

@section('content')
    <div class="container py-5" style="max-width: 1040px;">
        <h1 class="docs-section-title h2 mb-4">Search results</h1>
        <p class="text-muted mb-3">Query: <strong>{{ e($query) }}</strong></p>
        @include('public.docs.partials.search-results', ['results' => $results, 'query' => $query])
        <p class="mt-4 mb-0">
            <a href="{{ route('docs.index') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to Help Center'])</a>
        </p>
    </div>
@endsection
