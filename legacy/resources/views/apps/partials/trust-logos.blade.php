@if (! empty($app['trust_logos']))
<!-- Start Brand -->
<div class="mt--80">
    <div class="rbt-brand-title-wrap">
        <h5 class="rbt-brand-title w-600 text-center mb-0">{!! $app['trust_logos']['heading_html'] !!}</h5>
    </div>
    <ul class="brand-list brand-style-3 justify-content-start justify-content-lg-between mt--30">
        @foreach ($app['trust_logos']['items'] as $brand)
            <li><a href="{{ $brand['url'] }}"><img src="{{ asset($brand['image']) }}" alt="Brand Image" loading="lazy"></a></li>
        @endforeach
    </ul>
</div>
<!-- Start Brand -->
@endif
