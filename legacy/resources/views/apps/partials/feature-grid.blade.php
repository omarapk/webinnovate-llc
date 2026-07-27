@php($features = $app['features'])
<div class="rbt-feature-area bg-color-extra2 rbt-section-gap">
    <div class="container">
        <div class="row" id='features'>
            <div class="col-lg-12" >
                <div class="section-title text-center">
                    <span class="subtitle bg-primary-opacity">{{ $features['subtitle'] }}</span>
                    <h2 class="title w-600">{!! $features['title_html'] !!}</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--60 rbt-index-upper">
            @foreach ($features['items'] as $feature)
                <!-- single card -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="rbt-feature-card">
                        <div class="d-flex align-items-center gap-4">
                            <span class="icon {{ $feature['icon_bg'] }}">
                                <img src="{{ asset($feature['icon']) }}" alt="{{ $feature['title'] }} icon" loading="lazy">
                            </span>
                            <h6 class="card-title">{{ $feature['title'] }}</h6>
                        </div>
                        <p class="description">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
