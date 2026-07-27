@php($stats = $app['stats'])
<!-- Start Counter Area -->
<div class="rbt-counterup-area counterup-section-02 rbt-section-gapBottom">
    <div class="shape-1">
        <img src="{{ asset('assets/images/shape/o-line-arrow.png') }}" alt="Shape">
    </div>
    <div class="container">
        <div class="row align-items-center mb--50">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title w-600">{!! $stats['title_html'] !!}</h2>
                    <p class="description has-medium-font-size mt--20 mb--0">{!! nl2br(e($stats['description'])) !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="conter-style-2">
        <div class="container">
            <div class="row g-5">
                @foreach ($stats['items'] as $stat)
                    <!-- Start Single Counter  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-counter">
                        <div class="rbt-counterup style-2">
                            <div class="inner">
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="{{ $stat['count'] }}">00</span>{{ $stat['suffix'] }}
                                    </h3>
                                    <span class="subtitle">{{ $stat['label'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Counter  -->
                @endforeach
            </div>
        </div>
    </div>
</div>
