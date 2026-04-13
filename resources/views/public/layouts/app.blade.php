<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ e(\Illuminate\Support\Str::limit(trim($__env->yieldContent('meta_description')) ?: 'LeadForm COD — Shopify COD Order Form App', 320)) }}">
    <title>@yield('title', config('app.name'))</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body.public-site { font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif; color: #0f172a; background: #f1f5f9; }
        @include('public.layouts.partials.pub-navbar-css')
        @include('public.layouts.partials.leadform-cta-button-css')
        .pub-footer { background: #0f172a; color: rgba(255,255,255,.75); }
        .pub-footer a { color: rgba(255,255,255,.9); text-decoration: none; }
        .pub-footer a:hover { text-decoration: underline; }
        .pub-card { border: 1px solid #e2e8f0; border-radius: 0.75rem; background: #fff; box-shadow: 0 1px 2px rgba(15,23,42,.04); }
    </style>
    @stack('styles')
    @stack('head')
</head>
<body class="public-site d-flex flex-column min-vh-100">
    @include('public.layouts.partials.main-navbar')

    <main class="flex-grow-1 py-4 py-lg-5">
        @yield('content')
    </main>

    <footer class="pub-footer mt-auto py-4">
        <div class="container">
            <div class="row g-3 small">
                <div class="col-md-6">
                    <span class="text-white-50">© {{ date('Y') }} LeadForm</span>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ url('/leadform') }}">Product</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stack('scripts')
</body>
</html>
