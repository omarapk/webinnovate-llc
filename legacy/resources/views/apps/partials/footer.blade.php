@php($footer = $app['footer'])
<footer class="rbt-footer footer-style-1 bg-color-darker overflow-hidden rbt-section-box box-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        @if (! empty($app['logo']['icon']))
                            <a href="{{ $app['logo']['link'] }}" class="app-logo-lockup app-logo-lockup-light">
                                <img src="{{ asset($app['logo']['icon']) }}" alt="{{ $app['name'] }} icon">
                                <span>WEBI <strong>{{ $app['display_name'] }}</strong></span>
                            </a>
                        @else
                            <div class="logo logo-dark">
                                <a href="{{ $app['logo']['link'] }}">
                                    <img src="{{ asset($app['logo']['footer_light']) }}" alt="{{ $app['name'] }}" style="width: 250px; height: auto;">
                                </a>
                            </div>
                            <div class="logo d-none logo-light">
                                <a href="{{ $app['logo']['link'] }}">
                                    <img src="{{ asset($app['logo']['footer_dark']) }}" alt="{{ $app['name'] }}" style="width: 250px; height: auto;">
                                </a>
                            </div>
                        @endif

                        <p class="description mt--20">{!! nl2br(e($footer['description'])) !!}</p>

                        <ul class="social-icon social-default justify-content-start">
                            @foreach (config('site.socials') as $social)
                                <li><a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}">
                                        <i class="{{ $social['icon'] }}"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="contact-btn mt--30">
                            <a href="{{ $app['app_store_url'] }}">
                                <img src="{{ asset('assets/images/icons/badge-shopify-app-store-light.png') }}" alt="Find {{ $app['name'] }} on the Shopify App Store" style="height: 60px; width: auto;" loading="lazy">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Useful Links</h5>
                        <ul class="ft-link">
                            @foreach ($footer['useful_links'] as $link)
                                <li>
                                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Support & Company</h5>
                        <ul class="ft-link">
                            @foreach ($footer['support_links'] as $link)
                                <li>
                                    <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ url('/') }}">WebInnovate — All Apps</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Get in Touch</h5>
                        <ul class="ft-link">
                            <li><span><i class="fa-solid fa-envelope"></i>  Email:</span> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></li>
                            <li><span><i class="fa-solid fa-phone"></i> Phone:</span> <a href="{{ config('site.whatsapp.url') }}">{{ config('site.whatsapp.display') }}</a></li>
                            @if (! empty($footer['live_chat']))
                                <li><span><i class="fa-solid fa-comment"></i> Live Chat:</span> <a href="{{ $footer['live_chat']['url'] }}">{{ $footer['live_chat']['label'] }}</a></li>
                            @endif
                            <li><span><i class="fa-solid fa-location-dot"></i> Address:</span> {{ config('site.company') }}, {{ config('site.address.full') }}</li>
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
                    <p class="rbt-link-hover text-center">{{ $footer['copyright'] }} <i class="fa-solid fa-rocket"></i></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
