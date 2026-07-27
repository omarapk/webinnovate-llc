<nav class="navbar navbar-expand-lg pub-navbar py-3 sticky-top">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="{{ $navBrandHref ?? url('/leadform') }}">{{ $navBrand ?? 'LeadForm' }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pubNav" aria-controls="pubNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="pubNav">
            <ul class="navbar-nav ms-auto gap-lg-2">
                <li class="nav-item {{ ! empty($navPrimaryIsCta) ? 'd-flex align-items-center ms-lg-2' : '' }}">
                    <a class="{{ ! empty($navPrimaryIsCta) ? 'lf-cta-btn lf-cta-btn-nav lf-cta-switch' : 'nav-link' }}" href="{{ $navPrimaryHref ?? url('/leadform') }}"@if (! empty($navPrimaryNewTab)) target="_blank" rel="noopener noreferrer"@endif>
                        @if (! empty($navPrimaryIsCta))
                            @include('public.layouts.partials.lf-cta-switch-label', ['label' => $navPrimaryLabel ?? 'Home'])
                        @else
                            {{ $navPrimaryLabel ?? 'Home' }}
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
