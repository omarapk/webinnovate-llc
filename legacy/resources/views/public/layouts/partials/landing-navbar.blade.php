@php
    // $app is Laravel's container when no app was passed to the view; only trust arrays.
    $navApp = (isset($app) && is_array($app)) ? $app : \App\Support\AppCatalog::find('leadform');
    $landingUrl = url('/'.$navApp['slug']);
    $onLeadformHome = request()->path() === $navApp['slug'];
    $navTo = fn (string $id) => $onLeadformHome ? '#'.$id : $landingUrl.'#'.$id;
    $onBlogPost = request()->routeIs('blog.show') || request()->routeIs('apps.blog.show');
    $navItems = collect($navApp['nav'])->map(fn ($item) => [
        'label' => $item['label'],
        'href' => str_starts_with($item['href'], '#') ? $navTo(ltrim($item['href'], '#')) : $item['href'],
        'active' => $onBlogPost && strtolower($item['label']) === 'blog',
    ]);
@endphp
<!-- Start Header Area (same as landing /leadform) -->
<header class="rbt-header rbt-header-default">
    <div class="rbt-sticky-placeholder"></div>

    <div class="rbt-header-wrapper shadow-none">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset($navApp['logo']['header_light']) }}" style="width: 200px; height: auto;" alt="{{ $navApp['name'] }}">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset($navApp['logo']['header_dark']) }}" style="width: 200px; height: auto;" alt="{{ $navApp['name'] }}">
                        </a>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            @foreach ($navItems as $item)
                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ $item['href'] }}"@if ($item['active']) class="active"@endif>{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="{{ $navApp['header_cta']['url'] }}">
                            <span data-text="{{ $navApp['header_cta']['label'] }}">{{ $navApp['header_cta']['label'] }}</span>
                        </a>
                    </div>

                    <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                        <div class="hamberger">
                            <button type="button" class="hamberger-button" aria-label="Open menu">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="popup-mobile-menu" id="landingPopupMobileMenu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-dark">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset($navApp['logo']['header_light']) }}" style="width: 200px; height: auto;" alt="{{ $navApp['name'] }} Logo">
                        </a>
                    </div>
                    <div class="logo d-none logo-light">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset($navApp['logo']['header_dark']) }}" style="width: 200px; height: auto;" alt="{{ $navApp['name'] }} Logo">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button type="button" class="close-button rbt-round-btn" aria-label="Close menu"><i data-feather="x"></i></button>
                </div>
            </div>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                @foreach ($navItems as $item)
                    <li><a href="{{ $item['href'] }}"@if ($item['active']) class="active"@endif>{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div class="rbt-btn-wrapper mt--30 mb--20">
            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none w-100 justify-content-center text-center" href="{{ $navApp['header_cta']['url'] }}">
                <span data-text="{{ $navApp['header_cta']['label'] }}">{{ $navApp['header_cta']['label'] }}</span>
            </a>
        </div>
    </div>
</div>
