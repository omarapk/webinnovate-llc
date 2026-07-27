@php
    $onLeadform = (bool) ($onLeadform ?? false);
    $navHash = fn (string $id) => $onLeadform ? '#'.$id : url('/leadform#'.$id);
@endphp

<header class="rbt-header rbt-header-default">
    <div class="rbt-sticky-placeholder"></div>

    <div class="rbt-header-wrapper shadow-none">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="https://apps.shopify.com/leadform-cod">
                            <img src="{{ asset('assets/images/logo/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="https://apps.shopify.com/leadform-cod">
                            <img src="{{ asset('assets/images/dark/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm">
                        </a>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ $navHash('features') }}">Features</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item">
                                <a href="{{ $navHash('faq') }}">Faq</a>
                            </li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="{{ $navHash('pricing') }}">Pricing</a>
                            </li>
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ $navHash('affiliate') }}">Become An Affiliate</a>
                            </li>
                            <li class="has-dropdown has-menu-child-item">
                                <a href="{{ route('docs.index') }}">Help Center</a>
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

<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-dark">
                        <a href="https://apps.shopify.com/leadform-cod">
                            <img src="{{ asset('assets/images/logo/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm Logo">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="https://apps.shopify.com/leadform-cod">
                            <img src="{{ asset('assets/images/dark/1.svg') }}" style="width: 200px; height: auto;" alt="LeadForm Logo">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button type="button" class="close-button rbt-round-btn" aria-label="Close menu"><i class="feather-x"></i></button>
                </div>
            </div>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li><a href="{{ $navHash('features') }}">Features</a></li>
                <li><a href="{{ $navHash('faq') }}">FAQ</a></li>
                <li><a href="{{ $navHash('pricing') }}">Pricing</a></li>
                <li><a href="{{ $navHash('affiliate') }}">Become An Affiliate</a></li>
                <li><a href="{{ route('docs.index') }}">Help Center</a></li>
            </ul>
        </nav>
    </div>
</div>
