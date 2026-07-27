@php($demo = $app['demo'])
<!-- Start Video Area  -->
<div class="rbt-video-area bg-color-white rbt-section-gap overflow-hidden">
    <div class="container">
        <div class="row row--35 align-items-center mt_dec--50">
            <div class="col-xl-6 col-12 mt--50">
                <div class="video-wrapper version-02">
                    <div class="v-shape-1 style-02">
                        <img src="{{ asset('assets/images/shape/video-dot-02.png') }}" alt="Shape">
                    </div>
                    <div class="custom-video-player">
                        @if ($demo['type'] === 'video')
                            <video class="w-100 rbt-radius" controls preload="metadata">
                                @foreach ($demo['video_sources'] as $source)
                                    <source src="{{ asset($source['src']) }}" type="{{ $source['type'] }}">
                                @endforeach
                                Your browser does not support the video tag.
                            </video>
                        @else
                            <img class="w-100 rbt-radius" src="{{ asset($demo['image']['src']) }}" alt="{{ $demo['image']['alt'] }}" loading="lazy">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-12 mt--50">
                <div class="inner">
                    <div class="section-title text-start">
                        <h6 class="b2 mb--15">{!! $demo['subtitle_html'] !!}</h6>
                        <h2 class="title w-600">{{ $demo['title'] }}</h2>
                    </div>

                    <div class="rbt-feature-wrapper mt--30 ml_dec_20">
                        @foreach ($demo['value_props'] as $prop)
                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon {{ $prop['icon_bg'] }}">
                                    <img src="{{ asset($prop['icon']) }}" alt="{{ $prop['icon_alt'] }}" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">{{ $prop['title'] }}</h6>
                                    <p class="feature-description">{{ $prop['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Video Area  -->
