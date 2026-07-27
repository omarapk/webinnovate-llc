<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $app['seo']['title'] }}</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="{{ $app['seo']['description'] }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ url('/'.$app['slug']) }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $app['seo']['title'] }}">
    <meta property="og:description" content="{{ $app['seo']['description'] }}">
    <meta property="og:url" content="{{ url('/'.$app['slug']) }}">
    <meta property="og:site_name" content="{{ config('site.brand') }}">
    <meta property="og:image" content="{{ asset($app['seo']['og_image'] ?? $app['icon']) }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- SoftwareApplication structured data --}}
    @php
        $jsonld = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => $app['jsonld']['name'],
            'description' => $app['jsonld']['description'],
            'applicationCategory' => $app['jsonld']['category'],
            'operatingSystem' => 'Web (Shopify)',
            'url' => url('/'.$app['slug']),
            'installUrl' => $app['app_store_url'],
            'offers' => [
                '@type' => 'Offer',
                'price' => $app['jsonld']['price'],
                'priceCurrency' => $app['jsonld']['currency'],
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('site.company'),
                'url' => url('/'),
            ],
        ];
        if (! empty($app['jsonld']['rating'])) {
            $jsonld['aggregateRating'] = [
                '@type' => 'AggregateRating',
                'ratingValue' => $app['jsonld']['rating']['value'],
                'reviewCount' => $app['jsonld']['rating']['count'],
            ];
        }
    @endphp
    <script type="application/ld+json">{!! json_encode($jsonld, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jodit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- Shared app-landing styles (extracted from the original /leadform page) -->
    <link rel="stylesheet" href="{{ asset('assets/css/app-landing.css') }}">
</head>
