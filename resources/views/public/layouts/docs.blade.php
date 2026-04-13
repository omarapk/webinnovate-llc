<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ e(\Illuminate\Support\Str::limit(trim($__env->yieldContent('meta_description')) ?: 'LeadForm Help Center — Shopify COD order form documentation', 320)) }}">
    <title>@yield('title', 'Help Center — LeadForm')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    @include('public.layouts.partials.landing-navbar-head')
    <style>
        :root {
            --docs-bg: #ffffff;
            --docs-text: #1a1a1a;
            --docs-muted: #6b7280;
            --docs-border: #e5e7eb;
            --docs-accent: #111827;
            --docs-hover: #f9fafb;
        }
        body.docs-help-body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            color: var(--docs-text);
            background: var(--docs-bg);
            font-size: 0.9375rem;
            line-height: 1.6;
        }
        @include('public.layouts.partials.leadform-cta-button-css')
        .docs-search-hero {
            padding: clamp(3rem, 8vw, 5.5rem) 1.25rem clamp(2.5rem, 6vw, 4rem);
            text-align: center;
            border-bottom: 1px solid var(--docs-border);
            background: #fff;
        }
        .docs-search-hero-inner {
            max-width: 52rem;
            margin-left: auto;
            margin-right: auto;
        }
        .docs-search-hero h1 {
            font-size: clamp(2rem, 5.5vw, 3.25rem);
            font-weight: 700;
            letter-spacing: -0.035em;
            line-height: 1.15;
            margin-bottom: 0;
            color: var(--docs-accent);
        }
        .docs-search-input {
            max-width: 100%;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .docs-search-input .form-control {
            border: 1px solid var(--docs-border);
            border-radius: 0.875rem;
            padding: 1.05rem 1.35rem 1.05rem 3.5rem;
            font-size: clamp(1.0625rem, 2vw, 1.25rem);
            min-height: 3.75rem;
            line-height: 1.4;
            box-shadow: 0 2px 8px rgba(0,0,0,.06);
        }
        .docs-search-input .form-control:focus {
            border-color: #9ca3af;
            box-shadow: 0 0 0 4px rgba(17,24,39,.08), 0 4px 14px rgba(0,0,0,.08);
        }
        .docs-search-input .search-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--docs-muted);
            pointer-events: none;
            font-size: 1.35rem;
        }
        .docs-section-title {
            font-size: clamp(1.4rem, 3.5vw, 2rem);
            font-weight: 700;
            letter-spacing: -0.03em;
            line-height: 1.2;
            color: var(--docs-accent);
            margin-bottom: 1.125rem;
        }
        .docs-section-empty {
            font-size: clamp(1.0625rem, 2.2vw, 1.1875rem);
            color: #64748b;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .docs-index-block {
            margin-bottom: clamp(2.25rem, 5vw, 3.5rem);
        }
        .docs-index-block:last-child {
            margin-bottom: 0;
        }
        .docs-card-cat {
            border: 1px solid var(--docs-border);
            border-radius: 0.5rem;
            padding: 1.25rem 1.35rem;
            height: 100%;
            text-decoration: none;
            color: inherit;
            display: block;
            transition: border-color .15s ease, box-shadow .15s ease, background .15s ease;
            background: #fff;
        }
        .docs-card-cat:hover {
            border-color: #d1d5db;
            box-shadow: 0 4px 14px rgba(0,0,0,.06);
            background: var(--docs-hover);
            color: inherit;
        }
        .docs-card-cat-icon {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.5rem;
            background: #f3f4f6;
            color: #374151;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            margin-bottom: 0.875rem;
        }
        .docs-card-cat h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.35rem;
            color: var(--docs-accent);
        }
        .docs-card-cat p {
            font-size: 0.875rem;
            color: var(--docs-muted);
            margin-bottom: 0.5rem;
            line-height: 1.5;
        }
        .docs-card-cat .count {
            font-size: 0.8125rem;
            color: var(--docs-muted);
        }
        .docs-article-row {
            border-bottom: 1px solid var(--docs-border);
            padding: 1rem 0;
        }
        .docs-article-row:last-child { border-bottom: 0; }
        .docs-article-row a.title {
            font-weight: 500;
            color: var(--docs-accent);
            text-decoration: none;
        }
        .docs-article-row a.title:hover { text-decoration: underline; }
        .docs-sidebar {
            border-right: 1px solid var(--docs-border);
            background: #fafafa;
            min-height: calc(100vh - 73px);
        }
        .docs-sidebar-link {
            display: block;
            padding: 0.45rem 0.75rem;
            font-size: 0.875rem;
            color: var(--docs-muted);
            text-decoration: none;
            border-radius: 0.375rem;
            margin-bottom: 0.125rem;
        }
        .docs-sidebar-link:hover { background: #fff; color: var(--docs-accent); }
        .docs-sidebar-link.active {
            background: #fff;
            color: var(--docs-accent);
            font-weight: 600;
            box-shadow: 0 0 0 1px var(--docs-border);
        }
        .docs-sidebar-section {
            font-size: 0.6875rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #9ca3af;
            font-weight: 600;
            margin: 1.25rem 0 0.5rem 0.5rem;
        }
        .docs-sidebar-section:first-child { margin-top: 0; }
        .docs-breadcrumb {
            font-size: 0.8125rem;
            color: var(--docs-muted);
        }
        .docs-breadcrumb a { color: var(--docs-muted); text-decoration: none; }
        .docs-breadcrumb a:hover { color: var(--docs-accent); text-decoration: underline; }
        .docs-breadcrumb .sep { margin: 0 0.35rem; color: #d1d5db; }
        .docs-content {
            font-size: 1rem;
            line-height: 1.75;
            color: #374151;
        }
        .docs-content h1, .docs-content h2, .docs-content h3 { margin-top: 1.5rem; margin-bottom: 0.75rem; font-weight: 600; color: #111; }
        .docs-content p { margin-bottom: 1rem; }
        .docs-content ul, .docs-content ol { margin-bottom: 1rem; padding-left: 1.25rem; }
        .docs-content img { max-width: 100%; height: auto; border-radius: 0.375rem; }
        .docs-content pre, .docs-content code { font-size: 0.875rem; }
        .docs-help-footer {
            border-top: 1px solid var(--docs-border);
            padding: 2rem 1.25rem;
            text-align: center;
            background: #fafafa;
            color: var(--docs-muted);
            font-size: 0.875rem;
        }
        .docs-help-footer a.lf-cta-btn { margin: 0 0.25rem; }
    </style>
    @stack('styles')
    @stack('head')
</head>
<body class="docs-help-body rbt-header-sticky d-flex flex-column min-vh-100">
    @include('public.layouts.partials.landing-navbar')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="docs-help-footer mt-auto">
        <p class="mb-0">
            Can’t find what you need?
            <a href="{{ url('/leadform') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'Chat with us'])</a>
            or
            <a href="mailto:{{ config('mail.from.address', 'support@example.com') }}" class="lf-cta-btn lf-cta-btn-sm lf-cta-switch">@include('public.layouts.partials.lf-cta-switch-label', ['label' => 'send an email'])</a>.
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('public.layouts.partials.landing-navbar-scripts')
    @stack('scripts')
</body>
</html>
