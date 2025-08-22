<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WEBI ‑ LeadForm Order Form COD Fully customized COD Form with 10+ Apps in One</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Font Awesome (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Custom CSS -->
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
    
    <!-- Custom CSS for Instagram Posts -->
    <style>
        .instagram-posts-section {
            padding: 80px 0;
        }
        .instagram-post-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .instagram-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .instagram-post-image {
            height: 250px;
            object-fit: cover;
            width: 100%;
            border-radius: 8px 8px 0 0;
        }
        .instagram-post-caption {
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 10px;
            color: #666;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .instagram-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #888;
        }
        .instagram-meta-item {
            display: flex;
            align-items: center;
            gap: 4px;
        }
        .instagram-meta-item i {
            font-size: 14px;
        }

        /* Dark Mode Styles */
        .dark-mode {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
        }

        .dark-mode .rbt-header {
            background-color: #2d2d2d !important;
            border-bottom: 1px solid #404040;
        }

        .dark-mode .rbt-header-wrapper {
            background-color: #2d2d2d !important;
        }

        .dark-mode .mainmenu > li > a {
            color: #ffffff !important;
        }

        .dark-mode .mainmenu > li > a:hover {
            color: #c20c81 !important;
        }

        .dark-mode .rbt-card {
            background-color: #2d2d2d !important;
            border: 1px solid #404040;
        }

        .dark-mode .rbt-card-body {
            background-color: #2d2d2d !important;
        }

        .dark-mode .pricing-table {
            background-color: #2d2d2d !important;
            border: 1px solid #404040;
        }

        .dark-mode .pricing-header {
            background-color: #2d2d2d !important;
        }

        .dark-mode .pricing-body {
            background-color: #2d2d2d !important;
        }

        .dark-mode .section-title .title {
            color: #ffffff !important;
        }

        .dark-mode .section-title .subtitle {
            color: #cccccc !important;
        }

        .dark-mode .rbt-btn {
            background-color: #c20c81 !important;
            color: #ffffff !important;
        }

        .dark-mode .rbt-btn:hover {
            background-color: #930c81 !important;
        }

        .dark-mode .bg-color-white {
            background-color: #1a1a1a !important;
        }

        .dark-mode .bg-color-extra2 {
            background-color: #2d2d2d !important;
        }

        .dark-mode .list-item li {
            color: #cccccc !important;
        }

        .dark-mode .rbt-badge {
            background-color: #404040 !important;
            color: #ffffff !important;
        }

        .dark-mode .amount {
            color: #ffffff !important;
        }

        .dark-mode .duration {
            color: #cccccc !important;
        }

        /* Dark Mode Toggle Button */
        .dark-mode-toggle {
            background: none;
            border: none;
            color: #333;
            font-size: 20px;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
            margin-right: 15px;
        }

        .dark-mode-toggle:hover {
            background-color: rgba(194, 12, 129, 0.1);
            color: #c20c81;
        }

        .dark-mode .dark-mode-toggle {
            color: #ffffff;
        }

        .dark-mode .dark-mode-toggle:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #c20c81;
        }

        /* Smooth transitions for dark mode */
        body, .rbt-header, .rbt-card, .pricing-table, .section-title, .rbt-btn {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        /* Fix pricing button text overflow */
        .pricing-btn .rbt-btn {
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            line-height: 1.2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pricing-btn .rbt-btn .icon-reverse-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            gap: 8px;
        }

        .pricing-btn .rbt-btn .btn-text {
            font-size: 14px;
            font-weight: 600;
            white-space: nowrap;
        }

        .pricing-btn .rbt-btn .btn-icon {
            flex-shrink: 0;
        }

        /* Ensure button fits properly on smaller screens */
        @media (max-width: 768px) {
            .pricing-btn .rbt-btn {
                min-height: 45px;
                padding: 10px 15px;
            }
            
            .pricing-btn .rbt-btn .btn-text {
                font-size: 13px;
            }
        }

        /* Fix checkmark positioning in pricing lists */
        .pricing-body .list-item li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 8px;
            line-height: 1.4;
            position: relative;
        }

        .pricing-body .list-item li i.feather-check {
            color: #28a745;
            font-size: 16px;
            margin-top: 0;
            flex-shrink: 0;
            min-width: 16px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .pricing-body .list-item li i.feather-x {
            color: #dc3545;
            font-size: 16px;
            margin-top: 0;
            flex-shrink: 0;
            min-width: 16px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .pricing-body .list-item li {
            padding-left: 26px;
            position: relative;
        }

        .pricing-body .list-item li.off {
            opacity: 0.6;
        }

        /* Make brand logos smaller with more margin */
        .brand-list.brand-style-3 {
            display: flex;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            overflow-x: auto;
            padding: 20px 40px;
            margin: 0 60px;
        }

        .brand-list.brand-style-3 li {
            flex-shrink: 0;
            margin: 0;
        }

        .brand-list.brand-style-3 li img {
            max-height: 70px;
            width: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }
        
        /* Make grasse_1.avif image bigger */
        .brand-list.brand-style-3 li img[src*="grasse_1.avif"] {
            max-height: 120px;
            transform: scale(1.2);
        }

        .brand-list.brand-style-3 li:hover img {
            transform: scale(1.1);
        }

        /* Responsive adjustments for brand logos */
        @media (max-width: 768px) {
            .brand-list.brand-style-3 {
                margin: 0 30px;
                padding: 20px 20px;
            }
            .brand-list.brand-style-3 li img {
                max-height: 50px;
            }
        }

        @media (max-width: 480px) {
            .brand-list.brand-style-3 {
                margin: 0 15px;
                padding: 15px 10px;
            }
            .brand-list.brand-style-3 li img {
                max-height: 40px;
            }
        }

        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Offset for fixed header when scrolling to sections */
        #features,
        #faq,
        #pricing,
        #affiliate {
            scroll-margin-top: 100px;
        }

        /* FAQs title margin */
        .faqs-title {
            margin-top: 50px;
        }

        /* Commission Program Section Styles */
        .benefits-circles {
            position: relative;
            margin-bottom: 60px;
        }

        .benefits-grid {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 0 auto;
        }

        .benefit-circle {
            position: absolute;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: 600;
            font-size: 11px;
            color: #333;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            opacity: 0.8;
        }

        .benefit-circle-1 {
            top: 55px;
            left: 10%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #87CEEB, #5F9EA0);
        }

        .benefit-circle-2 {
            bottom: 15px;
            left: -40px;
            background: linear-gradient(135deg, #FFA500, #FF8C00);
        }

        .benefit-circle-3 {
            top: 50%;
            right: -40px;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #FFD700, #FFA500);
        }

        .benefit-circle-4 {
            top: 100%;
            left: 270px;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #9370DB, #8A2BE2);
        }

        .circle-content {
            padding: 10px;
        }

        .benefit-text {
            font-size: 9px;
            font-weight: 600;
            line-height: 1.2;
        }

        /* SVG demi-circles positioning */
        .benefits-svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            display: none; /* Hide SVG arcs to see only circles */
        }

        /* Main headline styles */
        .commission-headline .title {
            font-size: 6rem;
            line-height: 1.1;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .highlight-yellow {
            color: #c20c81;
            font-weight: 700;
        }

        .highlight-orange {
            color: #c20c81;
            font-weight: 700;
        }

        /* Supporting text styles */
        .supporting-text .description {
            font-size: 1.8rem;
            color: #666;
            margin-bottom: 10px;
        }

        /* CTA buttons spacing */
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .benefits-grid {
                width: 250px;
                height: 250px;
            }

            .benefit-circle {
                width: 90px;
                height: 35px;
                font-size: 8px;
            }

            .commission-headline .title {
                font-size: 3rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-buttons .rbt-btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .benefits-grid {
                width: 200px;
                height: 200px;
            }

            .benefit-circle {
                width: 80px;
                height: 30px;
                font-size: 7px;
            }

            .commission-headline .title {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body class="rbt-header-sticky">

    <!-- Content starts here -->

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-default">
        <div class="rbt-sticky-placeholder"></div>

        <div class="rbt-header-wrapper  shadow-none">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/Design_sans_titre_30.png') }}" alt="Education Logo Images">
                                                                </a>
                                                            </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/Design_sans_titre_30.png') }}" alt="Education Logo Images">
                                                                </a>
                                                            </div>
                                                        </div>

                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu">
                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#features">Features</a>
                                    <!-- Start Mega Menu  -->

                                    <!-- End Mega Menu  -->
                                </li>

                                <li class="with-megamenu has-menu-child-item">
                                    <a href="#faq">Faq  </a>
                                </li>

                                <li class="has-dropdown has-menu-child-item">
                                    <a href="#pricing">Pricing 
                                        
                                    </a>
                                </li>

                                <li class="with-megamenu has-menu-child-item position-static">
                                    <a href="#affiliate">Become An Affiliate </a>
                                </li>

                                

                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <!-- Dark Mode Toggle -->
                        <!-- <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
                            <i class="fas fa-moon" id="darkModeIcon"></i>
                        </button> -->

                        <!-- Navbar Icons -->
                        <!-- <ul class="quick-access">
                            <li class="access-icon">
                                <a class="search-trigger-active rbt-round-btn" href="#">
                                    <i class="feather-search"></i>
                                </a>
                            </li>
                        </ul> -->

                        <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                            <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="https://apps.shopify.com/leadform-cod">
                                <span data-text="Start Free Trial">Start Free Trial</span>
                            </a>
                        </div>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->
                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <div class="rbt-search-dropdown">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="#">
                                <input type="text" placeholder="What are you looking for?">
                                <div class="submit-btn">
                                    <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="rbt-separator-mid">
                        <hr class="rbt-separator m-0">
                    </div>

                    <div class="row g-4 pt--30 pb--60">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h5 class="rbt-title-style-2">Our Top Course</h5>
                            </div>
                        </div>

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/course/course-online-01.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="#">React Js</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$15</span>
                                            <span class="off-price">$25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/course/course-online-02.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="#">Java Program</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/course/course-online-03.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="#">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$10</span>
                                            <span class="off-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/course/course-online-04.jpg') }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h5 class="rbt-card-title"><a href="#">Web Design</a>
                                    </h5>
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count"> (15 Reviews)</span>
                                    </div>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price">
                                            <span class="current-price">$20</span>
                                            <span class="off-price">$40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>

                </div>
            </div>
            <!-- End Search Dropdown  -->
        </div>

    </header>
    <!-- Mobile Menu Section -->
     
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Education Logo Images">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="{{ asset('assets/images/dark/logo/logo-light.png') }}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                <p class="description">Histudy is a education website template. You can customize all.</p>
                <ul class="navbar-top-left rbt-information-list justify-content-start">
                    <li>
                        <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                    </li>
                    <li>
                        <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                    </li>
                </ul>
            </div>

            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <main class="rbt-main-wrapper">
        <!-- Start Banner Area  -->
        <div class="rbt-banner-area rbt-banner-20 position-relative">
            <div class="wrapper">
                <div class="circle-sd-wrapper">
                    <div class="circle-shadow-1">
                        <img src="{{ asset('assets/images/shape/shadow-1.png') }}" alt="Bannder Shadow">
                    </div>
                    <div class="circle-shadow-2">
                        <img src="{{ asset('assets/images/shape/shadow-2.png') }}" alt="Bannder Shadow">
                    </div>
                    <div class="circle-shadow-3">
                        <img src="{{ asset('assets/images/shape/shadow-3.png') }}" alt="Bannder Shadow">
                    </div>
                </div>
                <div class="shapes-wrapper">
                    <div class="curve-line-1">
                        <img src="{{ asset('assets/images/shape/curve-line-1.png') }}" alt="Banner Line">
                    </div>
                    <div class="curve-line-2">
                        <img src="{{ asset('assets/images/shape/curve-line-2.png') }}" alt="Banner Line">
                    </div>
                    <div class="curve-line-3">
                        <img src="{{ asset('assets/images/shape/curve-line-3.png') }}" alt="Banner Line">
                    </div>
                    <div class="curve-line-4">
                        <img src="{{ asset('assets/images/shape/curve-line-4.png') }}" alt="Banner Line">
                    </div>
                    <div class="shape-hand scene">
                        <span data-depth="2">
                            <img src="{{ asset('assets/images/shape/hand-cap.png') }}" alt="Banner hand">
                        </span>
                    </div>
                    <div class="dot-bg">
                        <img src="{{ asset('assets/images/shape/dot-bg.png') }}" alt="Banner Dot">
                    </div>
                    <div class="dot-element scene">
                        <span data-depth="2">
                            <img src="{{ asset('assets/images/shape/dot-element.png') }}" alt="Banner Dot">
                        </span>
                    </div>
                </div>

                <div class="container">
                    <div class="row col-wrap">
                        <div class="col-xl-6">
                            <div class="inner position-relative">
                                <div class="shape-1 scene">
                                    <span data-depth="3">
                                        <!-- <img src="{{ asset('assets/images/shape/translate.png') }}" alt=""> -->
                                    </span>
                                </div>
                                <div class="title-in-shape d-flex flex-wrap align-items-center gap-2">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="LeadForm" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/PNGLOGO-PINK-BG copy 3.png') }}" alt="education">
                                        </a>
                                        <a href="#" class="avatar" data-tooltip="Shopify" tabindex="0">
                                            <img src="{{ asset('assets/images/shape/shopify_glyph_black.png') }}" alt="education">
                                        </a>
                                    </div>
                                    <h1 class="title">Fully customized </h1>
                                </div>
                                <h1 class="title">COD <span>
                                    <img src="ee" alt="">
                                    </span>Form With
                                </h1>
                                <h1 class="title">10+ Apps in One:
                                    <span>
                                        <!-- <img src="{{ asset('assets/images/shape/award-in-text.png') }}" alt=""> -->
                                    </span>
                                    
                                </h1><h3> Form, Upsells, Pixels, G.sheets, Whatsapp & mores</h3>
                                <p class="description mt--20 mb--40"> easily create a cash on delivery form that will allow you to generate leads easily and in a few clicks that will allow you to increase your conversion rate.</p>
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="https://apps.shopify.com/leadform-cod">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Start Free Trial</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="language-world">
                                <div class="world">
                                    <img src="{{ asset('assets/images/shape/world.png') }}" alt="">
                                </div>
                                <div class="flages">
                                    <div class="flag" data-tooltip="Italy" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/italy.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Maroc" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/morocco.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Espagne" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/spain.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Algerie" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/algeria.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Colombie" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/colombia.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Saudia" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/saudi-arabia.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Cote d'ivoire" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/flag.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Tunisie " tabindex="0">
                                        <img src="{{ asset('assets/images/shape/tunisia.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Philippines" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/philippines.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Peru" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/peru.png') }}" alt="">
                                    </div>
                                    <div class="flag" data-tooltip="Roumanie" tabindex="0">
                                        <img src="{{ asset('assets/images/shape/romania.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area  -->
        <!-- Start Brand -->
                <div class="mt--80">
                    <div class="rbt-brand-title-wrap">
                        <h5 class="rbt-brand-title w-600 text-center mb-0"><span class="theme-gradient">Join</span> Successful <span class="theme-gradient">Merchants</span> like</h5>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between mt--30">
                        <li><a href="https://www.maisonayla.ma"><img src="{{ asset('assets/images/brand/LOGO_MAISON_AYLA_AVEC_PICTO_2.png') }}" alt="Brand Image"></a></li>
                        <li><a href="https://emelle.ma/"><img src="{{ asset('assets/images/brand/Design sans titre(1).png') }}"  height='300px' alt="Brand Image"></a></li>
                        <li><a href="https://auconfort.shop/"><img src="{{ asset('assets/images/brand/Auconfort_Logo.png') }}" alt="Brand Image"></a></li>
                        <li><a href="https://steelious.com/"><img src="{{ asset('assets/images/brand/grasse_1.avif') }}" alt="Brand Image"></a></li>
                        <li><a href="https://www.siv.army/"><img src="{{ asset('assets/images/brand/58307711-0e53-4f88-88dc-283b02783a0b-logo-siv.png') }}" alt="Brand Image"></a></li>
                        <li><a href="https://parlons-tendance.shop/"><img src="{{ asset('assets/images/brand/Capture_d_ecran_2024-11-21_a_17.46.13.png') }}" alt="Brand Image"></a></li>
                    </ul>
                </div>
        <!-- Start Brand -->
         <!-- Start Video Area  -->
        <div class="rbt-video-area bg-color-white rbt-section-gap overflow-hidden">
            <div class="container">
                <div class="row row--35 align-items-center mt_dec--50">
                    <div class="col-xl-6 col-12 mt--50">
                        <div class="video-popup-wrapper version-02">
                            <div class="v-shape-1 style-02">
                                <img src="{{ asset('assets/images/shape/video-dot-02.png') }}" alt="Shape">
                            </div>
                            <img class="w-100 rbt-radius position-relative" src="{{ asset('assets/images/others/video-11.png') }}" alt="Video Images">
                            <a class="rbt-btn btn-white rounded-player-2 popup-video position-to-top bounced-btn" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 mt--50">
                        <div class="inner">
                            <div class="section-title text-start">
                                <h6 class="b2 mb--15"><span class="theme-gradient">LeadForm</span></h6>
                                <h2 class="title w-600">Increase Your COD Business</h2>
                            </div>

                            <!-- Start Feature List  -->

                            <div class="rbt-feature-wrapper mt--30 ml_dec_20">
                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title"> Smooth Experience, Higher Conversions</h6>
                                        <p class="feature-description">Designed for one-click checkout, LeadForm makes ordering fast and effortless.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-primary-opacity">
                                        <i class="feather-book"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">All Your Tools in One</h6>
                                        <p class="feature-description">From Google Sheets to WhatsApp and multi-pixel tracking, manage everything without installing many different apps.</p>
                                    </div>
                                </div>

                                <div class="rbt-feature feature-style-2 rbt-radius">
                                    <div class="icon bg-secondary-opacity">
                                        <i class="feather-award"></i>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-title">Maximize Every Order</h6>
                                        <p class="feature-description">Upsells, bundles, and abandoned order recovery help you squeeze the most revenue out of every single lead.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- End Feature List  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->
                 <!-- Start Counter Area -->
        <div class="rbt-counterup-area counterup-section-02 rbt-section-gapBottom">
            <div class="shape-1">
                <img src="{{ asset('assets/images/shape/o-line-arrow.png') }}" alt="Shape">
            </div>
            <div class="container">
                <div class="row align-items-center mb--50">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title w-600">We Hear Your Needs <br> We Help You Sell More</h2>
                            <p class="description has-medium-font-size mt--20 mb--0">Thousands of merchants trust LeadForm to scale their cash-on-delivery business.
Our numbers speak louder than words.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conter-style-2">
                <div class="container">
                    <div class="row g-5">
                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="10">00</span>k
                                        </h3>
                                        <span class="subtitle">Stores using LeadForm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="20">00</span>
                                        </h3>
                                        <span class="subtitle">Countries supported</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="30">00</span>%
                                        </h3>
                                        <span class="subtitle">conversion rate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                            <div class="rbt-counterup style-2">
                                <div class="inner">
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="10">00</span>M
                                        </h3>
                                        <span class="subtitle">COD orders processed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->
                    </div>
                </div>
            </div>
        </div>
<div class="rbt-feature-area bg-color-extra2 rbt-section-gap">
            <div class="container">
                <div class="row" id='features'>
                    <div class="col-lg-12" >
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">The Practice</span>
                            <h2 class="title w-600">All-in-One Features to Scale <br> Your COD Busines</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--60 rbt-index-upper">
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-pink">
                                    <img src="{{ asset('assets/images/icons/f-icon-01.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">One-Click COD Form</h6>
                            </div>
                            <p class="description">A fast, mobile-optimized checkout built for higher conversions.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-primary">
                                    <img src="{{ asset('assets/images/icons/f-icon-02.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Google Sheets Sync</h6>
                            </div>
                            <p class="description">Automatically send all orders to Google Sheets in real time.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-secondary">
                                    <img src="{{ asset('assets/images/icons/f-icon-03.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Multi-Pixel Tracking</h6>
                            </div>
                            <p class="description">Track every order on Facebook, TikTok & Snapchat without extra apps.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-warning">
                                    <img src="{{ asset('assets/images/icons/f-icon-04.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Upsells & Bundles</h6>
                            </div>
                            <p class="description">Boost your average order value with quantity offers and add-ons.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-success">
                                    <img src="{{ asset('assets/images/icons/f-icon-05.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Abandoned Order Recovery</h6>
                            </div>
                            <p class="description">Recover lost leads with WhatsApp reminders & smart follow-ups.</p>
                        </div>
                    </div>
                    <!-- single card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="rbt-feature-card">
                            <div class="d-flex align-items-center gap-4">
                                <span class="icon bg-color-info">
                                    <img src="{{ asset('assets/images/icons/f-icon-06.png') }}" alt="Banner Icon">
                                </span>
                                <h6 class="card-title">Fraud Prevention</h6>
                            </div>
                            <p class="description">Block fake orders and protect your business with advanced filters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">Merchants Trust LeadForm to Power Their COD Sales</span>
                            <h4 class="title"> From small shops to high-volume stores, <br /> thousands of e-commerce merchants rely on LeadForm to simplify COD and maximize results!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-animation-wrapper mt--50">
            <div class="scroll-animation scroll-right-left">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Auconfort</h5>
                                    <span>Algeria<i></i></span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                    Outstanding App & Support—Special Thanks to Samy

                                    I’ve been using LeadForm since I launched my Shopify store, and it’s been flawless—fast, stable, and extremely useful.

                                    What truly sets it apart is the support. A huge thank you to Samy, who helped me every step of the way—even during his vacation. That kind of dedication is rare and deeply appreciated.

                                    I recommend this app to anyone doing COD. It’s ...</p>
                                <a class="rbt-btn-link" href="#">Almost 2 years using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Green Vibe Market </h5>
                                    <span>United States</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">We're an eco-friendly shop on Shopify, and LeadForm COD has become essential for managing our Cash on Delivery orders. The lead form system is intuitive, seamless, and captures all the necessary info no hassle, no confusion.</p>
                                <a class="rbt-btn-link" href="#">3 months using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Urban Avenue </h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">La meilleure application LEADFORM COD, que j'utilise pour ne nombreuses boutiques.
                                Le support est très réactif et plus même, j'ai eu un problème technique avec le code de mon site (en pensant que c'était à cause de l'application en vrai, pas du tout), l'intervention du support a réglé, modifier et suggérer un nouveau et meilleure thème, qu'on utilise jusqu'à ce jour-ci et gratuitement en plus !
                                DZ♥MA</p>
                                <a class="rbt-btn-link" href="#">About 1 year using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> DriZenlab </h5>
                                    <span>France</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Good app and Amazing support! I had a technical issue integrating the form with my theme, and Abdellahe from the support team went above and beyond to help me fix it. He was fast, professional, and very kind. Now everything works perfectly, and I’m really impressed with the service. Highly recommend this app for anyone doing COD in their store!</p>
                                <a class="rbt-btn-link" href="#">4 days using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">petooboutique </h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">i've been using leadform cod since 2 years it wroks very well and they have a great support team and a good manager, it helped me a lot with my buissnes</p>
                                <a class="rbt-btn-link" href="#">Over 1 year using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Steelious</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Great App and Great people Working on it especially Sami , Great guy , He helped me alot to understand this app more , one of the best customer support i've worked with , A great team !!</p>
                                <a class="rbt-btn-link" href="#">7 months using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">OLIVIE</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">

J’utilise cette application depuis un moment et je la trouve vraiment bien conçue. L’interface est fluide, intuitive, et les fonctionnalités sont à la hauteur de mes attentes. Elle m’aide au quotidien et répond parfaitement à mes besoins.

Un grand bravo également au service d’assistance à distance : ils sont très réactifs, professionnels et toujours prêts à aider rapidement. Un vrai plus qui fait ....</p>
                                <a class="rbt-btn-link" href="#">About 2 months using the app</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> Truc dz </h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">I sincerely want to thank the support agent Sami for his exceptional help. I had been looking for assistance, and when he came, he was incredibly patient and polite. He spent over an hour with me on a WhatsApp call, using Apple video sharing to guide me step by step until all my issues were resolved. I’m truly grateful for his professionalism and support. Thank you so much!</p>
                                <a class="rbt-btn-link" href="#">11 months using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> BASTA TOOLS </h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                        Application très pratique et fluide.
                                        Nous utilisons Lead Form en Algérie pour notre boutique en ligne en paiement à la livraison (COD), et cela nous a beaucoup facilité la gestion des commandes et la qualification des clients.

                                        Le support technique est très réactif — un grand merci à SAMI pour son accompagnement étape par étape, et à toute l’équipe pour leur professionnalisme. Grâce à eux, nous avons pu configurer l’application rapidement sans aucun blocage.

                                        Je recommande fortement cette application à tous les e-commerçants qui travaillent en COD.
                                        Continuez comme ça
                                        </p>
                                <a class="rbt-btn-link" href="#">12 months using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>

        <div class="scroll-animation-wrapper mt--30">
            <div class="scroll-animation scroll-left-right">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Ramartista</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">J'utilise LeadForm COD depuis presque une année. j'aime bien l'application et elle est trop utile pour mon store.
                                Après la dernière MAJ, j'ai eu un soucis à connecter mon Sheet. J'ai contacté le support, et ils ont résolu mon problème de suite. Je tiens à féliciter Sami en particulier pour son professionnalisme.
                                Bravo!</p>
                                <a class="rbt-btn-link" href="#">10 months using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> living simple </h5>
                                    <span>Morocco</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">après l'utilisation d'un an et plus je suis très satisfait
Merci LeadForm Order COD Form</p>
                                <a class="rbt-btn-link" href="#">12 months using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">MSMODA</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                    i've been using this app since i started my shopify store ( 2 years ago ) , amazing app with amazing support team , it helped me alot to grow my business
                                    </p>
                                <a class="rbt-btn-link" href="#">About 1 year using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> Wi Oui </h5>
                                    <span>United Kingdom</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">support team always active and attentive to customer expectations, plus they have a lot of development in the near future in their application.
                                the ip block option to counter fake orders is available now, it's really great, you have nothing to fear against fake commands</p>
                                <a class="rbt-btn-link" href="#">Over 2 years using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> Delivery Uganda </h5>
                                    <span>China</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                It works well, good service and quick actions.
                                </p>
                                <a class="rbt-btn-link" href="#">Almost 4 years using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title"> My Store 02 </h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                application top du top et un trés bon service client ;le support est tout active abdellahe prend le temps de bien m'expliquer a chaque fois et de régler mes problème vraiment top
                                </p>
                                <a class="rbt-btn-link" href="#">7 months using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">Nutrirare</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">
                                Une application au top, offrant des commandes rapides et sans souci, avec un support exceptionnel toujours disponible pour répondre à toutes les questions. Vous êtes les meilleurs !
                                </p>
                                <a class="rbt-btn-link" href="#">About 1 month using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">OnlineDz</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Hello,
                                This app is incredibly intuitive and simple to navigate, making it a breeze to accomplish tasks efficiently. I would definitely recommend it, particularly for its excellent customer service. Also the support service is helpful so much.</p>
                                <a class="rbt-btn-link" href="#">Over 2 years using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20">
                    <div class="rbt-testimonial-box">
                        <div class="inner">
                            <div class="clint-info-wrapper">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/testimonial/shopify_glyph_black.png') }}" alt="Clint Images">
                                </div>
                                <div class="client-info">
                                    <h5 class="title">AHTmarket</h5>
                                    <span>Algeria</span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="subtitle-3">

                                Application très utile avec un support a l’écoute surtout omar qui m’a beaucoup aidé tout au long de l’utilisation de l’application avec des conseils en or et des vidéos explicative meme a des heures tardive , je recommande vivement , merci omar
                                </p>
                                <a class="rbt-btn-link" href="#">About 2 years using the app<i
                                class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>
    </div>
        <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
    </div>
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title faqs-title" id="faq">Faqs</h2>

                    </div>
                </div>
            </div>
        </div>
<div class="rbt-accordion-area accordion-style-1 bg-color-white rbt-section-gap" >
    
        <div class="container">
            
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="rbt-accordion-style accordion">

                        <div class="rbt-accordion-style rbt-accordion-04 accordion">
                            <div class="accordion" id="accordionExamplec3">
                                <div class="accordion-item card" >
                                    <h2 class="accordion-header card-header" id="headingThree1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="true" aria-controls="collapseThree1">
                                            What is LeadForm and how does it work?
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse show" aria-labelledby="headingThree1" data-bs-parent="#accordionExamplec3">
                                        <div class="accordion-body card-body">
                                        LeadForm is a Shopify app designed for COD stores. It replaces the standard checkout with a high-converting order form that includes upsells, bundles, pixel tracking, and more.                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                            Do I need coding skills to set it up?
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            No coding required. LeadForm installs in one click and is fully customizable directly inside your Shopify admin.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingThree3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                            Can I integrate LeadForm with other tools?
                                        </button>
                                    </h2>
                                    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            Yes! It integrates with Google Sheets, WhatsApp, and supports multi-pixel tracking (Facebook, TikTok, Snapchat, etc.).

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingThree4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                            Will LeadForm really help me increase sales?
                                        </button>
                                    </h2>
                                    <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            Yes. Merchants using LeadForm report up to 30% higher conversions and a significant boost in average order value thanks to upsells and abandoned order recovery.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-accordion-style accordion">
                        <div class="rbt-accordion-style rbt-accordion-04 accordion">
                            <div class="accordion" id="faqs-accordionExamplec3">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="faqs-headingThree1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-collapseThree1" aria-expanded="true" aria-controls="faqs-collapseThree1">
                                            Does LeadForm work on mobile?
                                        </button>
                                    </h2>

                                    <div id="faqs-collapseThree1" class="accordion-collapse collapse show" aria-labelledby="faqs-headingThree1" data-bs-parent="#faqs-accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            Absolutely. The form is fully optimized for mobile users, ensuring a smooth experience and higher conversions.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="faqs-headingThree2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-collapseThree2" aria-expanded="false" aria-controls="faqs-collapseThree2">
                                            How does pricing work?
                                        </button>
                                    </h2>
                                    <div id="faqs-collapseThree2" class="accordion-collapse collapse" aria-labelledby="faqs-headingThree2" data-bs-parent="#faqs-accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            We offer flexible pricing plans for every stage of growth. Start with a free trial, then upgrade as your store scales.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="faqs-headingThree3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-collapseThree3" aria-expanded="false" aria-controls="faqs-collapseThree3">
                                            Can I cancel anytime?
                                        </button>
                                    </h2>
                                    <div id="faqs-collapseThree3" class="accordion-collapse collapse" aria-labelledby="faqs-headingThree3" data-bs-parent="#faqs-accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            Yes. There are no long-term commitments — you can cancel or change your plan at any time.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="faqs-headingThree4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqs-collapseThree4" aria-expanded="false" aria-controls="faqs-collapseThree4">
                                            Do you provide customer support?
                                        </button>
                                    </h2>
                                    <div id="faqs-collapseThree4" class="accordion-collapse collapse" aria-labelledby="faqs-headingThree4" data-bs-parent="#faqs-accordionExamplec3">
                                        <div class="accordion-body card-body">
                                            Of course! Our support team is available via live chat and email. We’re here to listen to your needs and help you get the best results from LeadForm.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-pricing-area bg-color-extra2 rbt-section-gap" >
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-pink-opacity">LEADFORM PRICING</span>
                        <h2 class="title" id="pricing">Choose Your Plan</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Pricing  -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title">Starter </h3>
                            <span class="rbt-badge mb--35">14-day free trial</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$9.99</span>
                                    <span class="duration">/year and save 16%</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$0.99</span>
                                    <span class="duration">/month</span>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-btn">
                            <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="https://apps.shopify.com/leadform-cod">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Start Free Trial</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> 100 Orders/mo</li>
                                <li><i class="feather-check"></i> Google Sheets Synchronisation</li>
                                <li><i class="feather-check"></i> Upsells & Bundles</li>
                                <li><i class="feather-check"></i> Abandoned checkouts</li>
                                <li><i class="feather-check"></i> Shipping rates</li>
                                <li><i class="feather-check"></i> Multi-Pixels</li>
                                <li><i class="feather-check"></i> Anti-Spam Fake Order Protection</li>
                                <li><i class="feather-check"></i> 24/7 support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing  -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title">Basic </h3>
                            <span class="rbt-badge mb--35">14-day free trial</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$99</span>
                                    <span class="duration">/year and save 17%</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$9.99</span>
                                    <span class="duration">/month</span>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-btn">
                            <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="https://apps.shopify.com/leadform-cod">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Start Free Trial</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> 400 Orders/mo</li>
                                <li><i class="feather-check"></i> Google Sheets Synchronisation</li>
                                <li><i class="feather-check"></i> Upsells & Bundles</li>
                                <li><i class="feather-check"></i> Abandoned checkouts</li>
                                <li><i class="feather-check"></i> Shipping rates</li>
                                <li><i class="feather-check"></i> Multiple Pixels</li>
                                <li><i class="feather-check"></i> Anti-Spam - Fake Order Protection</li>
                                <li><i class="feather-check"></i> 24/7 support</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Start Single Pricing  -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="pricing-table style-2 active">
                        <div class="pricing-header">
                            <div class="pricing-badge"><span>Popular</span></div>
                            <h3 class="title">Premium </h3>
                            <span class="rbt-badge mb--35">Most Popular</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$249</span>
                                    <span class="duration">/year and save 17%</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$24.99</span>
                                    <span class="duration">/month</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn hover-icon-reverse w-100" href="https://apps.shopify.com/leadform-cod">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Start Free Trial</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> Unlimited orders</li>
                                <li><i class="feather-check"></i> Google Sheets Synchronisation</li>
                                <li><i class="feather-check"></i> Upsells & Bundles</li>
                                <li><i class="feather-check"></i> Abandoned checkouts</li>
                                <li><i class="feather-check"></i> Shipping rates</li>
                                <li><i class="feather-check"></i> Multi-Pixels</li>
                                <li><i class="feather-check"></i> Anti-Spam Fake Order Protection</li>
                                <li><i class="feather-check"></i> 24/7 support</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Single Pricing  -->

                <!-- Start Single Pricing  -->
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title">Market Pro </h3>
                            <span class="rbt-badge mb--35">14-day free trial</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount">$399</span>
                                    <span class="duration">/year and save 33%</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">$49.99</span>
                                    <span class="duration">/month</span>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-btn">
                            <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="https://apps.shopify.com/leadform-cod">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Start Free Trial</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> Multiple Markets</li>
                                <li><i class="feather-check"></i> Google Sheets Synchronisation</li>
                                <li><i class="feather-check"></i> Upsells & bundles</li>
                                <li><i class="feather-check"></i> Abandoned checkouts</li>
                                <li><i class="feather-check"></i> Shipping rates</li>
                                <li><i class="feather-check"></i> Multi-Pixels</li>
                                <li><i class="feather-check"></i> Anti-Spam Fake Order Protec</li>
                                <li><i class="feather-check"></i> 24/7 support</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Single Pricing  -->
            </div>
            <div class="row mt--30">
                <div class="col-12">
                    <p class="text-center text-muted small">All charges are billed in USD. Recurring and usage-based charges are billed every 30 days.</p>
                </div>
            </div>
        </div>
    </div>

        <!-- <div class="rbt-instagram-area bg-color-white rbt-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--60">
                        <div class="section-title text-center">
                            <h6 class="b2 mb--15"><span class="theme-gradient">Instagram</span></h6>
                            <h2 class="title w-600">Follow Leadform On <span class="theme-gradient">Instagram</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-07.png') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@hello</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-08.jpg') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-09.jpg') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-10.jpg') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-11.jpg') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="instagram-grid">
                            <a href="#">
                                <img src="{{ asset('assets/images/instagram/instagram-12.jpg') }}" alt="instagram">
                                <span class="user-info">
                                    <span class="icon"><i class="icon-instagram"></i></span>
                                <span class="user-name">@Histudy</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- <div class="rbt-section-gap bg-color-white instagram-posts-section">
        <div class="container-fluid">
            @if(!empty($instagramPosts))
                @if(count($instagramPosts) > 0 && isset($instagramPosts[0]['pictureUrl']) && (strpos($instagramPosts[0]['pictureUrl'], 'placeholder.com') !== false || strpos($instagramPosts[0]['pictureUrl'], 'via.placeholder.com') !== false))
                    <div class="row mb--20">
                        <div class="col-lg-12 text-center">
                            <div class="alert alert-warning" style="background-color: #fff3cd; border-color: #ffeaa7; color: #856404;">
                                <i class="feather-info"></i> 
                                <strong>Demo Mode:</strong> Showing sample Instagram posts. The actual API integration is working, but the Save Insta API may require authentication or the account may be private.
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row g-3">
                    @foreach(array_slice($instagramPosts, 0, 6) as $post)
                            <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                <div class="instagram-grid">
                                    <a href="https://www.instagram.com/leadform.cod/">
                                        @php
                                        $imageUrl = $post['pictureUrl'] ?? $post['display_url'] ?? $post['url'] ?? $post['media_url'] ?? $post['download_url'] ?? null;
                                        $permalink = 'https://www.instagram.com/p/' . ($post['meta']['shortcode'] ?? '') . '/';
                                        @endphp
                                        @if($imageUrl)
                                        <img src="{{ $imageUrl }}" alt="instagram">
                                        @endif
                                        <span class="user-info">
                                            <span class="icon"><i class="icon-instagram"></i></span>
                                        <span class="user-name">@leadform.cod</span>
                                        </span>
                                    </a>
                                </div>
                                
                                <div class="rbt-card-body">
                                    @php
                                        $likeCount = $post['meta']['likeCount'] ?? $post['like_count'] ?? $post['likes'] ?? 0;
                                        $commentCount = $post['meta']['commentCount'] ?? $post['comment_count'] ?? $post['comments'] ?? 0;
                                        $timestamp = $post['meta']['takenAt'] ?? $post['taken_at_timestamp'] ?? $post['timestamp'] ?? time();
                                    @endphp
                                    <div class="rbt-card-bottom">
                                        <div class="instagram-meta">
                                            <span class="rbt-meta-left">
                                                @if($likeCount > 0)
                                                    <span class="instagram-meta-item">
                                                        <i class="feather-heart"></i> {{ number_format($likeCount) }}
                                                    </span>
                                                @endif
                                                @if($commentCount > 0)
                                                    <span class="instagram-meta-item">
                                                        <i class="feather-message-circle"></i> {{ number_format($commentCount) }}
                                                    </span>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="row mt--40">
                    <div class="col-lg-12 text-center">
                        <a href="https://www.instagram.com/leadform.cod/" target="_blank" class="rbt-btn btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">View All Posts</span>
                                <span class="btn-icon"><i class="feather-instagram"></i></span>
                                <span class="btn-icon"><i class="feather-instagram"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="rbt-card variation-01">
                            <div class="rbt-card-body">
                                <div class="mb--20">
                                    <i class="feather-instagram" style="font-size: 48px; color: #e4405f;"></i>
                                </div>
                                <h5 class="mb--15">Follow Us on Instagram</h5>
                                <p class="text-muted mb--20">Unable to load Instagram posts at the moment. Please check back later!</p>
                                <a href="https://www.instagram.com/leadform.cod/" target="_blank" class="rbt-btn btn-gradient btn-sm">
                                    <span class="btn-text">Visit Instagram</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div> -->

    <!-- Start Commission Program Section -->
    <div class="rbt-section-gap" style="position: relative; overflow: hidden; background: linear-gradient(135deg,rgb(255, 255, 255) 0%,rgb(255, 255, 255) 100%);">
        <!-- Background SVG -->
        <div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); z-index: 0; opacity: 0.3;">
            <svg width="600" height="400" xmlns="http://www.w3.org/2000/svg">
                <!-- Largest arc -->
                <path d="M 50 300 A 250 250 0 0 1 550 300" 
                      fill="none" 
                      stroke="#6c757d" 
                      stroke-width="3" 
                      stroke-opacity="0.4" />

                <!-- Middle arc -->
                <path d="M 100 300 A 200 200 0 0 1 500 300" 
                      fill="none" 
                      stroke="#6c757d" 
                      stroke-width="3" 
                      stroke-opacity="0.4" />

                <!-- Smallest arc -->
                <path d="M 150 300 A 150 150 0 0 1 450 300" 
                      fill="none" 
                      stroke="#6c757d" 
                      stroke-width="3" 
                      stroke-opacity="0.4" />
            </svg>
        </div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <!-- Section Title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center mb--50" >
                                <h2 id='affiliate' class="title w-600">Become a partner</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits Circles -->
                    <div class="benefits-circles mb--50">
                        <div class="benefits-grid">
                            <!-- SVG Demi-circles Background -->
                            <svg class="benefits-svg" width="300" height="300" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 25 150 A 125 125 0 0 1 275 150" 
                                      fill="none" 
                                      stroke="lightgray" 
                                      stroke-width="2" 
                                      stroke-opacity="0.3" />
                                <path d="M 50 150 A 100 100 0 0 1 250 150" 
                                      fill="none" 
                                      stroke="lightgray" 
                                      stroke-width="2" 
                                      stroke-opacity="0.3" />
                                <path d="M 75 150 A 75 75 0 0 1 225 150" 
                                      fill="none" 
                                      stroke="lightgray" 
                                      stroke-width="2" 
                                      stroke-opacity="0.3" />
                            </svg>
                            
                            <div class="benefit-circle benefit-circle-1">
                                <div class="circle-content">
                                    <span class="benefit-text">Built for Shopify</span>
                                </div>
                            </div>
                            <div class="benefit-circle benefit-circle-2">
                                <div class="circle-content">
                                    <span class="benefit-text">Passive income</span>
                                </div>
                            </div>
                            <div class="benefit-circle benefit-circle-3">
                                <div class="circle-content">
                                    <span class="benefit-text">Lifetime commission</span>
                                </div>
                            </div>
                            <div class="benefit-circle benefit-circle-4">
                                <div class="circle-content">
                                    <span class="benefit-text">30-day attribution</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Headline -->
                    <div class="commission-headline mb--30">
                        <h1 class="title w-600">
                            Join our <span class="highlight-yellow">30%</span> <span class="highlight-orange">lifetime</span><br> commission program
                        </h1>
                    </div>

                    <!-- Supporting Text -->
                    <div class="supporting-text mb--40">
                        <p class="description">Vitals top creators earn over $30k every month.</p>
                        <p class="description">With 2,700+ 5 star reviews, Vitals basically sells itself.</p>
                    </div>

                    <!-- Call to Action Buttons -->
                    <div class="cta-buttons">
                        <a href="{{ route('affiliate.application') }}" class="rbt-btn btn-gradient hover-icon-reverse me--20">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Join now</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <!-- <a href="#" class="rbt-btn btn-border-gradient radius-round">
                            <span class="btn-text">Login</span>
                        </a> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Commission Program Section -->

    <footer class="rbt-footer footer-style-1 bg-color-darker overflow-hidden rbt-section-box box-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <div class="logo logo-dark">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/logo/Design_sans_titre_30.png') }}" alt="Edu-cause">
                                    </a>
                                </div>
                                <div class="logo d-none logo-light">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/dark/logo/Design_sans_titre_30.png') }}" alt="Edu-cause">
                                    </a>
                                </div>

                                <p class="description mt--20">The all-in-one COD order form trusted by thousands of Shopify merchants.
Simplify checkout, boost conversions, and scale your business.
                                </p>

                                <ul class="social-icon social-default justify-content-start">
                                    <li><a href="https://www.facebook.com/leadform.cod">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://wa.me/18198070658">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/leadform.cod">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.youtube.com/@Lead-Form-COD/videos">
                                            <i class="feather-youtube"></i>
                                        </a>
                                    </li>
                                </ul>

                                <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Contact With Us</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Useful Links</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="#features">Features</a>
                                    </li>
                                    <li>
                                        <a href="#pricing">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#faq">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="#affiliate">Become an Affiliate</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of Service</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Support & Company</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#">Help Center</a>
                                    </li>
                                    <li>
                                        <a href="#">Request a Feature</a>
                                    </li>
                                    <li>
                                        <a href="#">About LeadForm</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get in Touch</h5>
                                <ul class="ft-link">
                                    <li><span><i class="fa-solid fa-envelope"></i>  Email:</span> <a href="mailto:webinnovate.dev@gmail.com">webinnovate.dev@gmail.com</a></li>
                                    <li><span><i class="fa-solid fa-phone"></i> Phone:</span> <a href="https://wa.me/18198070658">+1 (819) 807-0658</a></li>
                                    <li><span><i class="fa-solid fa-comment"></i> Live Chat:</span> <a href="#">Available inside the app (Crisp)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbt-separator-mid">
                <div class="container">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
            <!-- Start Copyright Area  -->
            <div class="copyright-area copyright-style-1 ptb--20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p class="rbt-link-hover text-center">© 2025 LeadForm. All Rights Reserved. | Built for Shopify 🚀</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area  -->
        </footer>
    
    </main>

    <!-- jQuery JS (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Modernizer JS -->
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- sal.js -->
    <script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
    <!-- Dark Mode Switcher -->
    <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/backtotop.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotop.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnify-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/paralax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/paralax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/plyr.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jodit.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/Sortable.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Dark Mode JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const darkModeIcon = document.getElementById('darkModeIcon');
            const body = document.body;
            
            // Check for saved dark mode preference or default to light mode
            const darkMode = localStorage.getItem('darkMode') === 'true';
            
            // Apply dark mode on page load if it was previously enabled
            if (darkMode) {
                body.classList.add('dark-mode');
                darkModeIcon.classList.remove('fa-moon');
                darkModeIcon.classList.add('fa-sun');
            }
            
            // Toggle dark mode
            darkModeToggle.addEventListener('click', function() {
                body.classList.toggle('dark-mode');
                
                // Update icon
                if (body.classList.contains('dark-mode')) {
                    darkModeIcon.classList.remove('fa-moon');
                    darkModeIcon.classList.add('fa-sun');
                    localStorage.setItem('darkMode', 'true');
                } else {
                    darkModeIcon.classList.remove('fa-sun');
                    darkModeIcon.classList.add('fa-moon');
                    localStorage.setItem('darkMode', 'false');
                }
            });
            
            // Add smooth transition when page loads
            setTimeout(() => {
                body.style.transition = 'background-color 0.3s ease, color 0.3s ease';
            }, 100);
        });
    </script>

    <!-- Enhanced Smooth Scrolling JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced smooth scrolling for all anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            
            anchorLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    // Skip if it's just a hash
                    if (href === '#') return;
                    
                    const targetElement = document.querySelector(href);
                    
                    if (targetElement) {
                        e.preventDefault();
                        
                        // Get the target position with offset
                        const targetPosition = targetElement.offsetTop - 100; // 100px offset for header
                        
                        // Smooth scroll to target
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                        
                        // Update URL without page jump
                        history.pushState(null, null, href);
                    }
                });
            });
            
            // Add active state to navigation links on scroll
            const sections = document.querySelectorAll('#features, #faq, #pricing, #affiliate');
            const navLinks = document.querySelectorAll('.mainmenu a[href^="#"]');
            
            window.addEventListener('scroll', function() {
                let current = '';
                const scrollPosition = window.scrollY + 150; // Offset for better detection
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });
        });
    </script>

</body>
</html>