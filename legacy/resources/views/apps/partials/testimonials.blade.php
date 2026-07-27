@php($testimonials = $app['testimonials'])
<div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">{{ $testimonials['subtitle'] }}</span>
                        <h4 class="title">{!! $testimonials['title_html'] !!}</h4>
                        @if (! empty($testimonials['rating_badge']))
                            <div class="mt--20">
                                <span class="app-rating-badge">
                                    <span class="stars" aria-hidden="true">★★★★★</span>
                                    {{ number_format($testimonials['rating_badge']['rating'], 1) }} ({{ $testimonials['rating_badge']['count'] }} reviews on the Shopify App Store)
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($testimonials['rows'] as $rowIndex => $row)
        <div class="scroll-animation-wrapper {{ $rowIndex === 0 ? 'mt--50' : 'mt--30' }}">
            <div class="scroll-animation {{ $rowIndex % 2 === 0 ? 'scroll-right-left' : 'scroll-left-right' }}">
                @foreach ($row as $testimonial)
                    <!-- Start Single Testimonial  -->
                    <div class="single-column-20">
                        <div class="rbt-testimonial-box">
                            <div class="inner">
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="{{ asset($testimonials['avatar']) }}" alt="Clint Images" loading="lazy">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">{{ $testimonial['name'] }}</h5>
                                        <span>{{ $testimonial['country'] }}</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p class="subtitle-3 testimonial-text">{!! nl2br(e($testimonial['text'])) !!}</p>
                                    <button class="read-more-btn" onclick="toggleReadMore(this)">Read more</button>
                                    <a class="rbt-btn-link" href="#">{{ $testimonial['duration'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Testimonial  -->
                @endforeach
            </div>
        </div>
    @endforeach
</div>
