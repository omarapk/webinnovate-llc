@extends('public.layouts.app')

@section('title', 'Page not found — LeadForm')
@section('meta_description', 'The page you were looking for could not be found.')

@section('content')
    <div class="container py-5 py-lg-6 text-center" style="max-width: 36rem;">
        <p class="text-muted small text-uppercase fw-semibold mb-2" style="letter-spacing: .12em;">Error 404</p>
        <h1 class="display-5 fw-bold mb-3">Page not found</h1>
        <p class="text-muted lead mb-4">
            The link may be broken or the page may have been removed. Try one of the sections below.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <a href="{{ url('/leadform') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Back to LeadForm'])</a>
            <a href="{{ url('/leadform#blog') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Blog'])</a>
            <a href="{{ route('docs.index') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Documentation'])</a>
        </div>
        <p class="small text-muted mb-0">
            Need help? Visit the <a href="{{ route('docs.index') }}">docs</a> or <a href="{{ url('/leadform') }}#faq">FAQ</a> on our homepage.
        </p>
    </div>
@endsection
