@php($hero = $app['hero'])
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
                        @if ($hero['variant'] === 'world')
                            <div class="title-in-shape d-flex flex-wrap align-items-center gap-2">
                                <div class="profile-share">
                                    @foreach ($hero['avatars'] as $avatar)
                                        <a href="#" class="avatar" data-tooltip="{{ $avatar['tooltip'] }}" tabindex="0">
                                            <img src="{{ asset($avatar['image']) }}" alt="{{ $avatar['tooltip'] }}">
                                        </a>
                                    @endforeach
                                </div>
                                <h1 class="title">{{ $hero['title_line_1'] }} </h1>
                            </div>
                            <h1 class="title">{{ $hero['title_line_2'] }}
                            </h1>
                            <h1 class="title">{{ $hero['title_line_3'] }}
                            </h1><h3> {{ $hero['subtitle'] }}</h3>
                        @else
                            @if (! empty($hero['badge']))
                                <span class="subtitle bg-primary-opacity d-inline-block mb--20">{{ $hero['badge'] }}</span>
                            @endif
                            <h1 class="title">{{ $hero['title'] }}</h1>
                        @endif
                        <p class="description mt--20 mb--40"> {{ $hero['description'] }}</p>
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ $hero['cta']['url'] }}">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">{{ $hero['cta']['label'] }}</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                        @if (! empty($hero['secondary_cta']))
                            <a class="hero-secondary-cta" href="{{ $hero['secondary_cta']['url'] }}">
                                <i class="fa-brands fa-whatsapp"></i> {{ $hero['secondary_cta']['label'] }}
                            </a>
                        @endif
                        @if (! empty($hero['rating_badge']))
                            <div class="mt--30">
                                <span class="app-rating-badge">
                                    <span class="stars" aria-hidden="true">★★★★★</span>
                                    {{ number_format($hero['rating_badge']['rating'], 1) }} ({{ $hero['rating_badge']['count'] }} reviews on the Shopify App Store)
                                </span>
                            </div>
                        @endif
                        @if (! empty($app['languages']))
                            <div class="app-languages-badge" aria-label="Available languages">
                                @foreach ($app['languages'] as $language)
                                    <span class="lang-pill">{{ $language }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-xl-6">
                    @if ($hero['variant'] === 'world')
                        <div class="language-world">
                            <div class="world">
                                <img src="{{ asset('assets/images/shape/world.png') }}" alt="">
                            </div>
                            <div class="flages">
                                @foreach ($hero['flags'] as $flag)
                                    <div class="flag" data-tooltip="{{ $flag['tooltip'] }}" tabindex="0">
                                        <img src="{{ asset($flag['image']) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="video-wrapper version-02 mt--30">
                            <div class="v-shape-1 style-02">
                                <img src="{{ asset('assets/images/shape/video-dot-02.png') }}" alt="Shape">
                            </div>
                            <div class="custom-video-player">
                                <img src="{{ asset($hero['media']['image']) }}" alt="{{ $hero['media']['alt'] }}" loading="eager" fetchpriority="high">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area  -->
