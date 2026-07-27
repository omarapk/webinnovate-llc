@extends('site.layout')

@section('title', 'About WebInnovate — Custom SaaS Studio')
@section('meta_description', 'WebInnovate LLC is a software studio that designs, builds and operates custom SaaS products — development, security, SEO, support and maintenance.')

@php
    $values = [
        [
            'title' => 'Revenue growth & conversion optimization',
            'description' => 'Conversion-optimized design, lead capture forms and A/B testing that help merchants drive higher sales conversions and maximize revenue growth.',
        ],
        [
            'title' => 'Operational efficiency & cost savings',
            'description' => 'Automating order processing, data entry and customer communications reduces manual workloads so merchants can invest their time in growth.',
        ],
        [
            'title' => 'Scalable automation',
            'description' => 'Our apps simplify complex workflows and scale with the business — more orders and more customers without more staff or more hours.',
        ],
    ];
@endphp

@section('content')

    @include('site.partials.page-header', [
        'eyebrow' => 'About us',
        'heading' => 'A studio that ships SaaS built to earn',
        'lead' => 'Development, security, SEO, support and maintenance — one expert team accountable for the full product lifecycle.',
    ])

    {{-- Story --}}
    <section class="border-b border-border">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="grid gap-12 lg:grid-cols-[1fr_1.4fr] lg:gap-20">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">Our story</p>

                <div class="reveal space-y-6 text-lg leading-relaxed text-muted-foreground text-pretty">
                    <p>
                        {{ config('site.company') }} designs and ships custom SaaS for founders and teams
                        who need software that converts — not slideware. We own the full stack of delivery:
                        product development, security, SEO &amp; performance, then support and maintenance after launch.
                    </p>
                    <p>
                        Alongside client work, we also build and operate our own products under the
                        {{ config('site.suite') }} suite —
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/leadform') }}">LeadForm</a>,
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/landing-page-builder') }}">AI Landing Page Builder</a>
                        and
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/ordersheet') }}">OrderSheet</a> —
                        used by merchants in 20+ countries. Those live products are our references.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="border-b border-border bg-muted/40">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="max-w-2xl">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">Our values</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    What drives every app we ship
                </h2>
            </div>

            <div data-reveal-group class="mt-14 grid gap-6 lg:grid-cols-3">
                @foreach ($values as $index => $value)
                    <div class="reveal rounded-xl border border-border bg-card p-8">
                        <span class="font-mono text-sm text-muted-foreground">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3 class="mt-6 text-xl font-medium tracking-tight text-balance">{{ $value['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted-foreground">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Apps --}}
    <section class="border-b border-border">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="max-w-2xl">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">References</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Products we ship</h2>
            </div>

            <div data-reveal-group class="mt-14 grid gap-6 lg:grid-cols-3">
                @foreach ($apps as $aboutApp)
                    <a href="{{ url('/'.$aboutApp['slug']) }}"
                       class="reveal group flex flex-col rounded-xl border border-border bg-card p-6 transition-all hover:border-foreground/20 hover:shadow-sm">
                        <img src="{{ asset($aboutApp['icon']) }}" alt="" aria-hidden="true"
                             class="size-11 rounded-lg border border-border object-cover" loading="lazy">
                        <h3 class="mt-5 text-lg font-medium tracking-tight">{{ $aboutApp['name'] }}</h3>
                        <p class="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">{{ $aboutApp['portfolio_tagline'] }}</p>
                        <span class="mt-6 inline-flex items-center gap-1.5 text-sm font-medium">
                            Learn more
                            <svg class="size-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Company details --}}
    <section class="py-24">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div data-reveal-group>
                <div class="reveal grid gap-px overflow-hidden rounded-xl border border-border bg-border sm:grid-cols-2 lg:grid-cols-4">
                    <div class="bg-card p-7">
                        <h2 class="text-sm font-medium">Legal entity</h2>
                        <p class="mt-2 text-sm text-muted-foreground">{{ config('site.company') }}</p>
                    </div>
                    <div class="bg-card p-7">
                        <h2 class="text-sm font-medium">Registered office</h2>
                        <p class="mt-2 text-sm leading-relaxed text-muted-foreground">
                            {{ config('site.address.street') }}<br>
                            {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
                        </p>
                    </div>
                    <div class="bg-card p-7">
                        <h2 class="text-sm font-medium">Email</h2>
                        <a class="mt-2 block text-sm text-muted-foreground underline-offset-4 hover:text-foreground hover:underline"
                           href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                    </div>
                    <div class="bg-card p-7">
                        <h2 class="text-sm font-medium">WhatsApp</h2>
                        <a class="mt-2 block text-sm text-muted-foreground underline-offset-4 hover:text-foreground hover:underline"
                           href="{{ config('site.whatsapp.url') }}" rel="noopener">{{ config('site.whatsapp.display') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
