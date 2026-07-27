<!-- Start Header Area -->
<header class="rbt-header rbt-header-default">
    <div class="rbt-sticky-placeholder"></div>

    <div class="rbt-header-wrapper  shadow-none">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    @if (! empty($app['logo']['icon']))
                        <div class="logo">
                            <a href="{{ $app['logo']['link'] }}" class="app-logo-lockup">
                                <img src="{{ asset($app['logo']['icon']) }}" alt="{{ $app['name'] }} icon">
                                <span>WEBI <strong>{{ $app['display_name'] }}</strong></span>
                            </a>
                        </div>
                    @else
                        <div class="logo logo-dark">
                            <a href="{{ $app['logo']['link'] }}">
                                <img src="{{ asset($app['logo']['header_light']) }}" style="width: 200px; height: auto;" alt="{{ $app['name'] }} Logo">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="{{ $app['logo']['link'] }}">
                                <img src="{{ asset($app['logo']['header_dark']) }}" style="width: 200px; height: auto;" alt="{{ $app['name'] }} Logo">
                            </a>
                        </div>
                    @endif
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            @foreach ($app['nav'] as $item)
                                <li class="with-megamenu has-menu-child-item">
                                    <a href="{{ $item['href'] }}">{{ $item['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="{{ $app['header_cta']['url'] }}">
                            <span data-text="{{ $app['header_cta']['label'] }}">{{ $app['header_cta']['label'] }}</span>
                        </a>
                    </div>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Mobile Menu Section -->

<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    @if (! empty($app['logo']['icon']))
                        <a href="{{ $app['logo']['link'] }}" class="app-logo-lockup">
                            <img src="{{ asset($app['logo']['icon']) }}" alt="{{ $app['name'] }} icon">
                            <span>WEBI <strong>{{ $app['display_name'] }}</strong></span>
                        </a>
                    @else
                        <div class="logo logo-dark">
                            <a href="{{ $app['logo']['link'] }}">
                                <img src="{{ asset($app['logo']['header_light']) }}" style="width: 200px; height: auto;" alt="{{ $app['name'] }} Logo">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="{{ $app['logo']['link'] }}">
                                <img src="{{ asset($app['logo']['header_dark']) }}" style="width: 200px; height: auto;" alt="{{ $app['name'] }} Logo">
                            </a>
                        </div>
                    @endif
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                @foreach ($app['nav'] as $item)
                    <li><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>

    </div>
</div>
