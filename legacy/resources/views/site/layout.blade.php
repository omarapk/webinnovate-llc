<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('site.brand').' — '.config('site.tagline'))</title>
    <meta name="description" content="@yield('meta_description', config('site.description'))">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('site.brand') }}">
    <meta property="og:title" content="@yield('title', config('site.brand').' — '.config('site.tagline'))">
    <meta property="og:description" content="@yield('meta_description', config('site.description'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('assets/images/brand/webinnovate/icon-transparent.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/brand/webinnovate/icon-transparent.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">

    {{-- Hides scroll-reveal targets before first paint. If the animation bundle
         never loads, the failsafe below un-hides them. --}}
    <script>
        document.documentElement.classList.add('js');
        window.__revealFailsafe = setTimeout(function () {
            document.documentElement.classList.remove('js');
        }, 2500);
    </script>

    @vite(['resources/css/site.css', 'resources/js/site.js'])

    @stack('head')
</head>
<body class="min-h-screen bg-background text-foreground">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-primary focus:px-4 focus:py-2 focus:text-sm focus:text-primary-foreground">
        Skip to content
    </a>

    @include('site.partials.header')

    <main id="main">
        @yield('content')
    </main>

    @include('site.partials.footer')
</body>
</html>
