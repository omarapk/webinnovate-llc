{{--
    Shared legal page shell for WEBI apps (same styling as the original
    LeadForm legal pages). Expects: $app, plus sections title/lead/content.
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ config('site.brand') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(135deg, #c20c81 0%, #930c81 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .content-section {
            background: white;
            padding: 60px 0;
        }
        .legal-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .legal-content h1 {
            color: #c20c81;
            margin-bottom: 30px;
        }
        .legal-content h2 {
            font-size: 1.5rem;
            color: #333;
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #c20c81;
            padding-bottom: 10px;
        }
        .legal-content h3 {
            font-size: 1.15rem;
            color: #555;
            margin-top: 25px;
            margin-bottom: 10px;
        }
        .legal-content ul {
            margin-bottom: 20px;
        }
        .legal-content li {
            margin-bottom: 8px;
        }
        .legal-content a {
            color: #c20c81;
            text-decoration: none;
        }
        .legal-content a:hover {
            text-decoration: underline;
        }
        .table-of-contents {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
        }
        .table-of-contents ul {
            list-style: none;
            padding-left: 0;
        }
        .table-of-contents li {
            margin-bottom: 8px;
        }
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
        }
        .breadcrumb-item a {
            color: white;
        }
        .breadcrumb-item.active {
            color: rgba(255,255,255,0.8);
        }
        .company-box {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/'.$app['slug']) }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                </ol>
            </nav>
            <h1 class="display-4 fw-bold">@yield('heading')</h1>
            <p class="lead">@yield('lead')</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="legal-content">
                @yield('content')

                <div class="company-box">
                    <h2 style="border-bottom: none;">{{ $app['name'] }}</h2>
                    <p><strong>Developed by {{ config('site.company') }}</strong></p>
                    <p>📍 {{ config('site.address.full') }}<br>
                    ✉️ <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a><br>
                    🌐 <a href="{{ url('/'.$app['slug']) }}">{{ url('/'.$app['slug']) }}</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
