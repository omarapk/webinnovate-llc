@extends('site.layout')

@section('title', 'WebInnovate — Custom SaaS Solutions Built by Experts')
@section('meta_description', 'WebInnovate LLC designs, builds and operates custom SaaS products. Development, security, SEO, support and maintenance — so your software drives real revenue. Request a quote.')

@php
    $services = [
        [
            'title' => 'Development',
            'description' => 'Product architecture, clean codebases and integrations that ship to production — not prototypes that die in a deck.',
            'points' => ['Custom SaaS & platforms', 'APIs & third-party integrations', 'Modern stacks built to scale'],
            'icon' => 'code',
        ],
        [
            'title' => 'Security',
            'description' => 'Hardened auth, encryption and least-privilege access so your customers’ data — and your business — stay protected.',
            'points' => ['Secure auth & permissions', 'Encryption in transit & at rest', 'Review-ready delivery'],
            'icon' => 'shield',
        ],
        [
            'title' => 'SEO & performance',
            'description' => 'Technical SEO, Core Web Vitals and crawl-ready structure so the product you ship can actually be found and convert.',
            'points' => ['Technical SEO foundations', 'Speed & Core Web Vitals', 'Schema & indexability'],
            'icon' => 'search',
        ],
        [
            'title' => 'Support & maintenance',
            'description' => 'Monitoring, fixes and continuous shipping after launch — an expert team that stays with the product, not a one-off delivery.',
            'points' => ['Priority support', 'Monitoring & incident response', 'Ongoing product evolution'],
            'icon' => 'support',
        ],
    ];

    $process = [
        [
            'index' => '01',
            'title' => 'Discover',
            'description' => 'We map the business goal, users and constraints — what must generate revenue, what can wait.',
            'timing' => 'Week 1',
            'deliverables' => ['Scope & goals', 'Success metrics'],
            'accent' => '#A21CAF',
            'icon' => 'M11 4a7 7 0 1 0 0 14 7 7 0 0 0 0-14ZM20 20l-4-4',
        ],
        [
            'index' => '02',
            'title' => 'Architect',
            'description' => 'Stack, security model, SEO baseline and delivery plan locked before a single feature is rushed.',
            'timing' => 'Week 2',
            'deliverables' => ['Tech & security plan', 'SEO baseline'],
            'accent' => '#DB2777',
            'icon' => 'm12 3 9 5-9 5-9-5 9-5ZM3 13l9 5 9-5',
        ],
        [
            'index' => '03',
            'title' => 'Build',
            'description' => 'Iterative product delivery with demos you can click — not status reports you have to trust blindly.',
            'timing' => 'Weeks 3+',
            'deliverables' => ['Sprint demos', 'QA & reviews'],
            'accent' => '#9333EA',
            'icon' => 'm8 6-5 6 5 6M16 6l5 6-5 6',
        ],
        [
            'index' => '04',
            'title' => 'Launch & operate',
            'description' => 'Go-live, monitoring, support and maintenance so the product keeps earning after day one.',
            'timing' => 'Ongoing',
            'deliverables' => ['Go-live & monitoring', 'Support & evolution'],
            'accent' => '#7C3AED',
            'icon' => 'M12 3c3.5 2.5 5.5 6 5.5 10L12 19l-5.5-6C6.5 9 8.5 5.5 12 3ZM9.5 19.5 8 22M14.5 19.5 16 22',
        ],
    ];

    $pillars = [
        [
            'title' => 'Revenue-first product design',
            'description' => 'Every flow is built around conversion, retention and monetization — software that is meant to make money, not just look finished.',
        ],
        [
            'title' => 'An expert team end to end',
            'description' => 'Development, security, SEO, support and maintenance under one roof. One partner accountable for the whole product.',
        ],
        [
            'title' => 'Production, not prototypes',
            'description' => 'We ship systems merchants and teams already depend on daily — battle-tested delivery, not slideware.',
        ],
    ];
@endphp

@push('head')
    @php
        $orgSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('site.company'),
            'alternateName' => config('site.brand'),
            'url' => url('/'),
            'email' => config('site.email'),
            'description' => config('site.description'),
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => config('site.address.street'),
                'addressLocality' => config('site.address.city'),
                'addressRegion' => config('site.address.state'),
                'postalCode' => config('site.address.zip'),
                'addressCountry' => 'US',
            ],
            'sameAs' => array_column(config('site.socials'), 'url'),
            'makesOffer' => [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Custom SaaS development',
                    'description' => 'End-to-end design, development, security, SEO, support and maintenance of custom SaaS products.',
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($orgSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
@endpush

@section('content')

    {{-- Hero — studio positioning, no product apps --}}
    <section class="relative overflow-hidden border-b border-border">
        <div class="bg-grid mask-fade-bottom pointer-events-none absolute inset-0" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-6xl px-4 pb-28 pt-20 sm:px-6 sm:pb-32 sm:pt-24 lg:px-8">
            <div data-reveal-group class="mx-auto max-w-3xl text-center">
                <p class="reveal inline-flex items-center gap-2 rounded-full border border-border bg-card/80 px-3 py-1 text-sm text-muted-foreground shadow-sm backdrop-blur">
                    <span class="size-1.5 rounded-full bg-emerald-500" aria-hidden="true"></span>
                    {{ config('site.company') }} · Custom SaaS studio
                </p>

                <h1 class="reveal mt-8 text-4xl font-semibold leading-[1.05] tracking-tight text-balance sm:text-6xl lg:text-[4.1rem]">
                    Custom SaaS built to
                    <span class="relative whitespace-nowrap">
                        make you millions
                        <svg class="absolute -bottom-2 left-0 h-[0.28em] w-full" viewBox="0 0 360 12" fill="none" preserveAspectRatio="none" aria-hidden="true">
                            <defs>
                                <linearGradient id="hero-underline" x1="0" x2="1" y1="0" y2="0">
                                    <stop offset="0%" stop-color="#A21CAF"/>
                                    <stop offset="55%" stop-color="#DB2777"/>
                                    <stop offset="100%" stop-color="#7C3AED"/>
                                </linearGradient>
                            </defs>
                            <path d="M4 8.5C72 3 148 2 220 4.5c48 1.6 96 3.6 136 2" stroke="url(#hero-underline)" stroke-width="6" stroke-linecap="round"/>
                        </svg>
                    </span>
                </h1>

                <p class="reveal mx-auto mt-7 max-w-2xl text-lg leading-relaxed text-muted-foreground text-pretty">
                    Trust an expert team for the full product lifecycle —
                    <span class="text-foreground">development</span>,
                    <span class="text-foreground">security</span>,
                    <span class="text-foreground">SEO</span>,
                    <span class="text-foreground">support</span>
                    and
                    <span class="text-foreground">maintenance</span>.
                    We design and ship SaaS that converts visitors into revenue.
                </p>

                <div class="reveal mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ url('/contact') }}"
                       class="group inline-flex h-11 w-full items-center justify-center gap-2 rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto">
                        Request a quote
                        <svg class="size-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14M13 6l6 6-6 6"/>
                        </svg>
                    </a>
                    <a href="{{ config('site.whatsapp.url') }}" rel="noopener"
                       class="inline-flex h-11 w-full items-center justify-center rounded-lg border border-border bg-card px-6 text-sm font-medium shadow-sm transition-colors hover:bg-secondary sm:w-auto">
                        Discuss your project
                    </a>
                </div>

                <p class="reveal mt-8 text-sm text-muted-foreground">
                    End-to-end delivery · Production-grade security · SEO baked in · Long-term support
                </p>
            </div>

            <div data-reveal-group class="mt-20">
                <div class="reveal">
                    @include('site.partials.hero-visual')
                </div>
            </div>
        </div>
    </section>

    {{-- Trust stats --}}
    <section class="border-b border-border">
        <div data-reveal-group class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="reveal grid grid-cols-2 gap-px overflow-hidden bg-border lg:grid-cols-4">
                @foreach (config('site.trust_stats') as $stat)
                    <div class="bg-background px-6 py-10 text-center">
                        <div class="text-4xl font-semibold tracking-tight tabular-nums">
                            <span data-counter="{{ $stat['count'] }}">0</span>{{ $stat['suffix'] }}<span class="text-muted-foreground">+</span>
                        </div>
                        <p class="mt-2 text-sm text-muted-foreground">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Solutions / services --}}
    <section id="solutions" class="section-dark relative scroll-mt-20 overflow-hidden border-b border-border">
        <div class="bg-grid mask-fade-b-soft pointer-events-none absolute inset-0" aria-hidden="true"></div>
        <div class="glow pointer-events-none absolute left-1/4 top-0 size-[560px] -translate-x-1/2 -translate-y-1/3 rounded-full"
             style="--glow: oklch(0.55 0.22 290 / 0.26);" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="max-w-2xl">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">What we deliver</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    Everything a serious SaaS needs — under one team
                </h2>
                <p class="reveal mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                    You do not juggle five vendors. We own development, security, SEO, support and maintenance
                    so the product ships, ranks, stays secure and keeps growing.
                </p>
            </div>

            <div data-reveal-group class="mt-14 grid gap-5 sm:grid-cols-2">
                @foreach ($services as $service)
                    <div class="reveal group flex flex-col rounded-2xl border border-border bg-card p-8 transition-all hover:border-foreground/15 hover:shadow-lg">
                        <span class="flex size-10 items-center justify-center rounded-lg border border-border bg-muted" aria-hidden="true">
                            @switch ($service['icon'])
                                @case ('code')
                                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m8 6-5 6 5 6M16 6l5 6-5 6"/>
                                    </svg>
                                    @break
                                @case ('shield')
                                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 3 4.5 6v6c0 4.4 3.1 8.3 7.5 9.4 4.4-1.1 7.5-5 7.5-9.4V6L12 3Z"/>
                                        <path d="m9 12.5 2 2 4-4"/>
                                    </svg>
                                    @break
                                @case ('search')
                                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/>
                                    </svg>
                                    @break
                                @case ('support')
                                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4L3 21l1.1-4.6A8.4 8.4 0 1 1 21 11.5Z"/>
                                    </svg>
                                    @break
                            @endswitch
                        </span>

                        <h3 class="mt-6 text-xl font-medium tracking-tight">{{ $service['title'] }}</h3>
                        <p class="mt-3 flex-1 text-sm leading-relaxed text-muted-foreground">{{ $service['description'] }}</p>

                        <ul class="mt-6 space-y-2.5 border-t border-border pt-6">
                            @foreach ($service['points'] as $point)
                                <li class="flex items-start gap-2.5 text-sm">
                                    <svg class="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7"/>
                                    </svg>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section id="process" class="scroll-mt-20 border-b border-border bg-muted/40">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="max-w-2xl">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">How we work</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    From brief to revenue — a clear path
                </h2>
                <p class="reveal mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                    Four stages, no black box. You always know what is being built, why, and what lands next.
                </p>
            </div>

            {{-- Step path: a gradient rail across the nodes on desktop, running
                 down the left edge on smaller screens. --}}
            <div data-reveal-group class="relative mt-16">
                {{-- Rail: vertical on phones, horizontal between the nodes from lg up. --}}
                <div class="pointer-events-none absolute inset-y-0 left-5 w-px sm:hidden"
                     style="background: linear-gradient(to bottom, #A21CAF, #DB2777 40%, #9333EA 70%, #7C3AED);"
                     aria-hidden="true"></div>
                <div class="pointer-events-none absolute left-[12.5%] right-[12.5%] top-5 hidden h-px lg:block"
                     style="background: linear-gradient(to right, #A21CAF, #DB2777 40%, #9333EA 70%, #7C3AED);"
                     aria-hidden="true"></div>
                {{-- Direction markers sitting on the rail, between each pair of nodes. --}}
                @foreach (['31.25%', '50%', '68.75%'] as $chevronOffset)
                    <svg class="pointer-events-none absolute top-5 hidden size-3.5 -translate-x-1/2 -translate-y-1/2 text-muted-foreground/70 lg:block"
                         style="left: {{ $chevronOffset }};"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m9 6 6 6-6 6"/>
                    </svg>
                @endforeach

                <ol class="grid gap-y-10 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-5">
                    @foreach ($process as $step)
                        <li class="reveal group relative flex flex-col pl-16 sm:pl-0">
                            <div class="absolute left-0 top-0 sm:relative sm:mx-auto sm:mb-8 sm:flex sm:justify-center">
                                <span class="flex size-10 items-center justify-center rounded-full border-2 bg-background shadow-sm transition-transform duration-300 group-hover:scale-110"
                                      style="border-color: {{ $step['accent'] }}; color: {{ $step['accent'] }}; box-shadow: 0 0 0 5px color-mix(in oklab, {{ $step['accent'] }} 8%, transparent);">
                                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="{{ $step['icon'] }}"/>
                                    </svg>
                                </span>
                                {{-- Stem tying the node down to its card. --}}
                                <span class="absolute left-1/2 top-10 hidden h-8 w-px -translate-x-1/2 sm:block"
                                      style="background: linear-gradient(to bottom, {{ $step['accent'] }}, transparent);"
                                      aria-hidden="true"></span>
                            </div>

                            <div class="flex flex-1 flex-col rounded-2xl border border-border bg-card p-6 transition-all duration-300 group-hover:-translate-y-1 group-hover:shadow-lg group-hover:[border-color:var(--step-accent)]"
                                 style="--step-accent: color-mix(in oklab, {{ $step['accent'] }} 45%, transparent);">
                                <div class="flex items-center justify-between gap-3">
                                    <span class="font-mono text-xs text-muted-foreground">{{ $step['index'] }}</span>
                                    <span class="rounded-full border border-border px-2.5 py-1 text-[11px] font-medium text-muted-foreground">
                                        {{ $step['timing'] }}
                                    </span>
                                </div>

                                <h3 class="mt-4 text-lg font-medium tracking-tight">{{ $step['title'] }}</h3>
                                <p class="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">{{ $step['description'] }}</p>

                                <ul class="mt-5 space-y-2 border-t border-border pt-4">
                                    @foreach ($step['deliverables'] as $deliverable)
                                        <li class="flex items-start gap-2 text-xs text-muted-foreground">
                                            <svg class="mt-[3px] size-3 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                                 style="color: {{ $step['accent'] }};" aria-hidden="true">
                                                <path d="m5 12 5 5L20 7"/>
                                            </svg>
                                            {{ $deliverable }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div data-reveal-group class="mt-14 flex flex-col items-start gap-4 rounded-2xl border border-border bg-card p-6 sm:flex-row sm:items-center sm:justify-between">
                <p class="reveal text-sm text-muted-foreground">
                    Most engagements go from first call to a scoped quote within
                    <span class="font-medium text-foreground">48 hours</span>.
                </p>
                <a href="{{ url('/contact') }}"
                   class="reveal inline-flex h-10 shrink-0 items-center gap-2 rounded-lg bg-primary px-5 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90">
                    Start with a quote
                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Why WebInnovate --}}
    <section class="section-dark relative overflow-hidden border-b border-border">
        <div class="bg-grid mask-fade-b-soft pointer-events-none absolute inset-0" aria-hidden="true"></div>
        <div class="glow pointer-events-none absolute left-1/2 top-0 size-[640px] -translate-x-1/2 -translate-y-1/2 rounded-full"
             style="--glow: oklch(0.62 0.24 340 / 0.28);" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="mx-auto max-w-2xl text-center">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">Why {{ config('site.brand') }}</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    Trust a team that ships products people pay for
                </h2>
                <p class="reveal mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                    We are not a body shop. We are a product studio — the same discipline behind software
                    used by thousands of merchants, applied to your custom SaaS.
                </p>
            </div>

            <div data-reveal-group class="mt-14 grid gap-5 lg:grid-cols-3">
                @foreach ($pillars as $pillar)
                    <div class="reveal rounded-2xl border border-border bg-card p-8">
                        <h3 class="text-lg font-medium tracking-tight">{{ $pillar['title'] }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-muted-foreground">{{ $pillar['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- References — WEBI apps as proof of work --}}
    <section id="references" class="scroll-mt-20 border-b border-border">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="max-w-2xl">
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">References</p>
                <h2 class="reveal mt-4 text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    Products we designed, built and operate
                </h2>
                <p class="reveal mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                    Selected SaaS products from our portfolio — live on the Shopify App Store,
                    used by merchants in 20+ countries. Proof that we ship for real revenue.
                </p>
            </div>

            <div data-reveal-group class="mt-14 grid gap-6 lg:grid-cols-3">
                @foreach ($apps as $catalogApp)
                    <a href="{{ url('/'.$catalogApp['slug']) }}"
                       class="reveal group relative flex flex-col overflow-hidden rounded-2xl border border-border bg-card p-5 transition-all duration-300 hover:-translate-y-1 hover:border-foreground/15 hover:shadow-xl"
                       style="--accent-from: {{ $catalogApp['accent']['from'] }}; --accent-to: {{ $catalogApp['accent']['to'] }};">

                        <span class="accent-rule absolute inset-x-0 top-0 h-px opacity-0 transition-opacity duration-300 group-hover:opacity-100" aria-hidden="true"></span>

                        @include('site.partials.app-illustration', ['app' => $catalogApp])

                        <div class="mt-5 flex items-start gap-3">
                            <img src="{{ asset($catalogApp['icon']) }}" alt="" aria-hidden="true"
                                 class="size-10 shrink-0 rounded-lg border border-border" loading="lazy">
                            <div class="min-w-0 flex-1">
                                <h3 class="text-base font-medium tracking-tight">{{ $catalogApp['name'] }}</h3>
                                <p class="mt-1 flex items-center gap-1.5 text-xs text-muted-foreground">
                                    <svg class="size-3 text-amber-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="m12 2 2.9 6.26 6.85.72-5.1 4.6 1.42 6.72L12 16.9l-6.07 3.4 1.42-6.72-5.1-4.6 6.85-.72L12 2Z"/>
                                    </svg>
                                    {{ $catalogApp['listing']['rating'] }}
                                    <span>({{ $catalogApp['listing']['reviews'] }})</span>
                                    <span aria-hidden="true">·</span>
                                    Live product
                                </p>
                            </div>
                        </div>

                        <p class="mt-4 flex-1 text-sm leading-relaxed text-muted-foreground">
                            {{ $catalogApp['portfolio_tagline'] }}
                        </p>

                        <span class="mt-7 inline-flex items-center gap-1.5 border-t border-border pt-5 text-sm font-medium">
                            View reference
                            <svg class="size-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6"/>
                            </svg>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="px-4 py-24 sm:px-6 lg:px-8">
        <div class="section-dark relative mx-auto max-w-6xl overflow-hidden rounded-3xl">
            <div class="bg-dots pointer-events-none absolute inset-0 opacity-60" aria-hidden="true"></div>
            <div class="glow pointer-events-none absolute -bottom-40 left-1/2 size-[560px] -translate-x-1/2 rounded-full"
                 style="--glow: oklch(0.62 0.24 340 / 0.35);" aria-hidden="true"></div>
            <div class="glow pointer-events-none absolute -top-32 right-0 size-[420px] rounded-full"
                 style="--glow: oklch(0.55 0.22 290 / 0.22);" aria-hidden="true"></div>

            <div data-reveal-group class="relative px-6 py-20 text-center sm:px-16">
                <h2 class="reveal text-3xl font-semibold tracking-tight text-balance sm:text-4xl">
                    Ready to build a SaaS that earns?
                </h2>
                <p class="reveal mx-auto mt-4 max-w-xl text-lg leading-relaxed text-muted-foreground text-pretty">
                    Tell us about your product. We will come back with a clear scope, timeline and quote —
                    or an honest no if we are not the right fit.
                </p>

                <div class="reveal mt-10 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ url('/contact') }}"
                       class="inline-flex h-11 w-full items-center justify-center rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto">
                        Request a quote
                    </a>
                    <a href="{{ config('site.whatsapp.url') }}" rel="noopener"
                       class="inline-flex h-11 w-full items-center justify-center gap-2 rounded-lg border border-border px-6 text-sm font-medium transition-colors hover:bg-secondary sm:w-auto">
                        <svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.9 4.44-9.9 9.9 0 1.75.46 3.45 1.32 4.95L2 22l5.3-1.39a9.86 9.86 0 0 0 4.74 1.21h.01c5.46 0 9.9-4.44 9.9-9.9 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2Zm0 18.14h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.11.82.83-3.03-.2-.31a8.19 8.19 0 0 1-1.26-4.39c0-4.54 3.7-8.23 8.24-8.23 2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.82c0 4.54-3.7 8.23-8.24 8.23Zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.97-.15.16-.29.18-.53.06-.25-.13-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.01-.38.11-.5.11-.11.25-.29.37-.44.13-.15.17-.25.25-.41.09-.17.04-.31-.02-.44-.06-.12-.56-1.35-.76-1.84-.2-.48-.4-.42-.56-.43h-.47c-.16 0-.43.06-.65.31-.23.25-.86.84-.86 2.05s.88 2.38 1 2.54c.13.17 1.74 2.66 4.22 3.73.59.25 1.05.4 1.4.52.59.19 1.13.16 1.55.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.16-.48-.28Z"/>
                        </svg>
                        Discuss on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
