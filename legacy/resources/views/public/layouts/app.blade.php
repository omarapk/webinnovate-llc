{{-- $app is Laravel's container in views rendered without an explicit app (404, docs), so only trust it when it's an app data array. --}}
@php($layoutApp = (isset($app) && is_array($app)) ? $app : \App\Support\AppCatalog::find('leadform'))
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ e(\Illuminate\Support\Str::limit(trim($__env->yieldContent('meta_description')) ?: $layoutApp['seo']['description'], 320)) }}">
    <title>@yield('title', config('app.name'))</title>
    {{-- Open Graph --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', config('app.name'))">
    <meta property="og:description" content="{{ e(\Illuminate\Support\Str::limit(trim($__env->yieldContent('meta_description')) ?: $layoutApp['seo']['description'], 200)) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @endif
    <meta property="og:site_name" content="{{ $layoutApp['name'] }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    @include('public.layouts.partials.landing-navbar-head')
    <style>
        body.public-site { font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif; color: #0f172a; background: #f1f5f9; }
        .pub-footer { background: #0f172a; color: rgba(255,255,255,.75); }
        .pub-footer a { color: rgba(255,255,255,.9); text-decoration: none; }
        .pub-footer a:hover { text-decoration: underline; }
        .pub-card { border: 1px solid #e2e8f0; border-radius: 0.75rem; background: #fff; box-shadow: 0 1px 2px rgba(15,23,42,.04); }
    </style>
    @stack('styles')
    @stack('head')
</head>
<body class="rbt-header-sticky public-site d-flex flex-column min-vh-100">
    @include('public.layouts.partials.landing-navbar')

    <main class="flex-grow-1 py-4 py-lg-5">
        @yield('content')
    </main>

    <footer class="pub-footer mt-auto py-4">
        <div class="container">
            <div class="row g-3 small">
                <div class="col-md-6">
                    <span class="text-white-50">© {{ date('Y') }} {{ config('site.company') }} — {{ $layoutApp['name'] }}</span>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ url('/'.$layoutApp['slug']) }}">Product</a>
                    <span class="text-white-50 mx-2">·</span>
                    <a href="{{ url('/') }}">WebInnovate</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @include('public.layouts.partials.landing-navbar-scripts')
    @stack('scripts')
</body>
</html>
