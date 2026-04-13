@php
    $landingUrl = url('/leadform');
    $onLeadformHome = request()->path() === 'leadform';
    $navTo = fn (string $id) => $onLeadformHome ? '#'.$id : $landingUrl.'#'.$id;
    $onBlogPost = request()->routeIs('blog.show');
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
                            <img src="{{ asset('assets/images/logo/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset('assets/images/dark/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm">
                        </a>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ $navTo('features') }}">Features</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item">
                                <a href="{{ $navTo('blog') }}"@if ($onBlogPost) class="active"@endif>Blog</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item">
                                <a href="{{ $navTo('faq') }}">Faq</a>
                            </li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="{{ $navTo('pricing') }}">Pricing</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ $navTo('affiliate') }}">Become An Affiliate</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="https://apps.shopify.com/leadform-cod">
                            <span data-text="Start Free Trial">Start Free Trial</span>
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
                            <img src="{{ asset('assets/images/logo/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm Logo">
                        </a>
                    </div>
                    <div class="logo d-none logo-light">
                        <a href="{{ $landingUrl }}">
                            <img src="{{ asset('assets/images/dark/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm Logo">
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
                <li><a href="{{ $navTo('features') }}">Features</a></li>
                <li><a href="{{ $navTo('blog') }}"@if ($onBlogPost) class="active"@endif>Blog</a></li>
                <li><a href="{{ $navTo('faq') }}">FAQ</a></li>
                <li><a href="{{ $navTo('pricing') }}">Pricing</a></li>
                <li><a href="{{ $navTo('affiliate') }}">Become An Affiliate</a></li>
            </ul>
        </nav>

        <div class="rbt-btn-wrapper mt--30 mb--20">
            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none w-100 justify-content-center text-center" href="https://apps.shopify.com/leadform-cod">
                <span data-text="Start Free Trial">Start Free Trial</span>
            </a>
        </div>
    </div>
</div>
