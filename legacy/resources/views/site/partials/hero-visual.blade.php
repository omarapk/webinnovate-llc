{{--
| Hero studio illustration
|--------------------------------------------------------------------------
| A composed “product stack” mockup: architecture → shipping → revenue.
| No product logos in the first viewport — this sells the studio, not the
| WEBI apps (those live in #references).
--}}

<div class="relative mx-auto max-w-4xl">
    <div class="pointer-events-none absolute -inset-x-24 -top-24 -bottom-16 -z-10 overflow-hidden" aria-hidden="true">
        <div class="glow absolute left-[6%] top-[8%] size-[380px] rounded-full" style="--glow: oklch(0.62 0.24 340 / 0.18);"></div>
        <div class="glow absolute right-[4%] top-[20%] size-[400px] rounded-full" style="--glow: oklch(0.55 0.22 290 / 0.14);"></div>
        <div class="glow absolute left-[40%] -bottom-[8%] size-[440px] rounded-full" style="--glow: oklch(0.68 0.19 150 / 0.12);"></div>
    </div>

    <div class="mockup">
        <div class="mockup-bar">
            <span class="mockup-dot"></span>
            <span class="mockup-dot"></span>
            <span class="mockup-dot"></span>
            <div class="ml-3 flex flex-1 items-center gap-2 rounded-md bg-background px-2.5 py-1 text-[11px] text-muted-foreground">
                <svg class="size-3 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M4 7h16M4 12h10M4 17h14"/>
                </svg>
                webinnovate.dev / delivery board
            </div>
        </div>

        <div class="grid sm:grid-cols-[1.1fr_1fr]">
            {{-- Left: what we ship --}}
            <div class="border-b border-border p-5 sm:border-b-0 sm:border-r">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-semibold uppercase tracking-wider text-muted-foreground">Engagement</span>
                    <span class="inline-flex items-center gap-1.5 text-[11px] text-muted-foreground">
                        <span class="relative flex size-1.5">
                            <span class="animate-ping-soft absolute inline-flex size-full rounded-full bg-emerald-500"></span>
                            <span class="relative inline-flex size-1.5 rounded-full bg-emerald-500"></span>
                        </span>
                        Expert team online
                    </span>
                </div>

                <p class="mt-4 text-sm font-medium tracking-tight">Custom SaaS build</p>
                <p class="mt-1 text-[11px] text-muted-foreground">From brief to production — owned end to end</p>

                <div class="mt-5 space-y-2">
                    @foreach ([
                        ['Development', 'Architecture, product UI, APIs & integrations', true],
                        ['Security', 'Auth, encryption, reviews & least privilege', true],
                        ['SEO & performance', 'Core Web Vitals, schema, crawl readiness', true],
                        ['Support & maintenance', 'Monitoring, fixes and continuous shipping', false],
                    ] as [$title, $desc, $done])
                        <div class="flex items-start gap-3 rounded-lg border border-border px-3 py-2.5">
                            <span @class([
                                'mt-0.5 flex size-4 shrink-0 items-center justify-center rounded-full',
                                'bg-foreground text-background' => $done,
                                'border border-border' => ! $done,
                            ])>
                                @if ($done)
                                    <svg class="size-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="m5 12 5 5L20 7"/>
                                    </svg>
                                @endif
                            </span>
                            <div class="min-w-0">
                                <p class="text-xs font-medium">{{ $title }}</p>
                                <p class="mt-0.5 text-[11px] text-muted-foreground">{{ $desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: outcome signals --}}
            <div class="flex flex-col p-5">
                <span class="text-[11px] font-semibold uppercase tracking-wider text-muted-foreground">Business outcome</span>

                <div class="mt-4 rounded-xl border border-border bg-muted/40 p-4">
                    <p class="text-[11px] text-muted-foreground">Projected revenue impact</p>
                    <p class="mt-1 text-3xl font-semibold tracking-tight tabular-nums">
                        $2.4M<span class="text-muted-foreground">+</span>
                    </p>
                    <p class="mt-1 text-[11px] text-muted-foreground">Year-one target for a conversion SaaS we ship</p>
                </div>

                <div class="mt-3 grid grid-cols-2 gap-2">
                    <div class="rounded-lg border border-border px-3 py-2.5">
                        <p class="text-[10px] uppercase tracking-wide text-muted-foreground">Uptime</p>
                        <p class="mt-0.5 text-sm font-semibold tabular-nums">99.9%</p>
                    </div>
                    <div class="rounded-lg border border-border px-3 py-2.5">
                        <p class="text-[10px] uppercase tracking-wide text-muted-foreground">Support</p>
                        <p class="mt-0.5 text-sm font-semibold">&lt; 1h</p>
                    </div>
                </div>

                <div class="mt-auto space-y-1.5 pt-4">
                    @foreach ([
                        ['Architecture locked', 'ok'],
                        ['Security review passed', 'ok'],
                        ['SEO baseline green', 'ok'],
                        ['Launch window booked', 'next'],
                    ] as [$label, $state])
                        <div class="flex items-center justify-between rounded-lg border border-border px-3 py-2 text-[11px]">
                            <span>{{ $label }}</span>
                            @if ($state === 'ok')
                                <span class="font-medium text-emerald-600">Done</span>
                            @else
                                <span class="text-muted-foreground">Next</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="chip animate-float absolute right-full top-28 -mr-4 hidden whitespace-nowrap xl:flex" style="animation-delay: -1s;">
        <span class="flex size-6 items-center justify-center rounded-md bg-foreground text-[10px] font-bold text-background">$</span>
        <span>Built to monetize<span class="block text-[11px] font-normal text-muted-foreground">Products that convert, not demos</span></span>
    </div>

    <div class="chip animate-float absolute bottom-24 left-full -ml-4 hidden whitespace-nowrap xl:flex" style="animation-delay: -3.5s;">
        <span class="flex size-6 items-center justify-center rounded-md bg-emerald-500/10 text-emerald-600">
            <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m5 12 5 5L20 7"/>
            </svg>
        </span>
        <span>Trusted expert team<span class="block text-[11px] font-normal text-muted-foreground">Dev · Security · SEO · Support</span></span>
    </div>
</div>
