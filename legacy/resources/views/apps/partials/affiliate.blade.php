@if (! empty($app['affiliate']))
@php($affiliate = $app['affiliate'])
<!-- Start Commission Program Section -->
<div id="affiliate" class="rbt-section-gap" style="position: relative; overflow: hidden; background: linear-gradient(135deg,rgb(255, 255, 255) 0%,rgb(255, 255, 255) 100%);">
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
                            <h2  class="title w-600">{{ $affiliate['title'] }}</h2>
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

                        @foreach ($affiliate['benefits'] as $index => $benefit)
                            <div class="benefit-circle benefit-circle-{{ $index + 1 }}">
                                <div class="circle-content">
                                    <span class="benefit-text">{{ $benefit }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Main Headline -->
                <div class="commission-headline mb--30">
                    <h2 class="title w-600">
                        {!! $affiliate['headline_html'] !!}
                    </h2>
                </div>

                <!-- Supporting Text -->
                <div class="supporting-text mb--40">
                    @foreach ($affiliate['description_lines'] as $line)
                        <p class="description">{{ $line }}</p>
                    @endforeach
                </div>

                <!-- Call to Action Buttons -->
                <div class="cta-buttons">
                    <a href="{{ $affiliate['cta']['url'] }}" class="rbt-btn btn-gradient hover-icon-reverse me--20">
                        <span class="icon-reverse-wrapper">
                            <span class="btn-text">{{ $affiliate['cta']['label'] }}</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Commission Program Section -->
@endif
