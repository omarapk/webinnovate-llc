@php($pricing = $app['pricing'])
@php($planCount = count($pricing['plans']))
@php($colClass = $planCount >= 4 ? 'col-xl-3 col-lg-3 col-md-6 col-12' : ($planCount === 1 ? 'col-xl-4 col-lg-6 col-md-8 col-12 mx-auto' : 'col-xl-4 col-lg-4 col-md-6 col-12'))
<div class="rbt-pricing-area bg-color-extra2 rbt-section-gap" >
    <div class="container">
        <div class="row g-5 mb--60">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title text-start">
                    <span class="subtitle bg-pink-opacity">{{ $pricing['subtitle'] }}</span>
                    <h2 class="title" id="pricing">{{ $pricing['title'] }}</h2>
                </div>
            </div>
            @if ($pricing['billing_toggle'])
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">
                                    Yearly Plan
                                    <span class="save-badge">SAVE UP TO 17%</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <div class="row g-5 {{ $planCount === 1 ? 'justify-content-center' : '' }}">
            @foreach ($pricing['plans'] as $plan)
                <!-- Start Single Pricing  -->
                <div class="{{ $colClass }}">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title">{{ $plan['title'] }}</h3>
                            <div class="price-wrap">
                                @if (! empty($plan['yearly']))
                                    <div class="yearly-pricing" style="display: none;">
                                        <span class="amount">{{ $plan['yearly']['amount'] }}</span>
                                        <span class="duration">{{ $plan['yearly']['duration'] }}</span>
                                    </div>
                                @endif
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount">{{ $plan['monthly']['amount'] }}</span>
                                    <span class="duration">{{ $plan['monthly']['duration'] }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-btn">
                            <a class="rbt-btn {{ $plan['cta']['style'] }} hover-icon-reverse w-100" href="{{ $plan['cta']['url'] }}">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">{{ $plan['cta']['label'] }}</span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                @foreach ($plan['items'] as $item)
                                    <li><i class="fa-solid fa-check fa-2xs"></i> {{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing  -->
            @endforeach
        </div>
        <div class="row mt--30">
            <div class="col-12">
                <p class="text-center text-muted small">{{ $pricing['note'] }}</p>
            </div>
        </div>
    </div>
</div>
