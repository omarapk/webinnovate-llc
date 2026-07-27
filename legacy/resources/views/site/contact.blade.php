@extends('site.layout')

@section('title', 'Contact WebInnovate — Request a Quote or Discuss Your Project')
@section('meta_description', 'Contact WebInnovate LLC to request a quote or discuss a custom SaaS project. Email contact@webinnovate.dev or chat on WhatsApp.')

@section('content')

    @include('site.partials.page-header', [
        'eyebrow' => 'Contact',
        'heading' => 'Tell us about your project',
        'lead' => 'Request a quote or jump on WhatsApp — we will tell you honestly whether we are the right fit, and what a build would look like.',
    ])

    <section class="border-b border-border">
        <div class="mx-auto max-w-6xl px-4 py-24 sm:px-6 lg:px-8">
            <div data-reveal-group class="grid gap-6 lg:grid-cols-2">
                <a href="mailto:{{ config('site.email') }}"
                   class="reveal group flex flex-col rounded-xl border border-border bg-card p-8 transition-all hover:border-foreground/20 hover:shadow-sm">
                    <span class="inline-flex size-10 items-center justify-center rounded-lg border border-border">
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="m3 7 9 6 9-6"/>
                        </svg>
                    </span>
                    <h2 class="mt-6 text-lg font-medium tracking-tight">Email — request a quote</h2>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">
                        Share your goals, timeline and constraints. We typically reply within one business day.
                    </p>
                    <span class="mt-6 text-sm font-medium">{{ config('site.email') }}</span>
                </a>

                <a href="{{ config('site.whatsapp.url') }}" rel="noopener"
                   class="reveal group flex flex-col rounded-xl border border-border bg-card p-8 transition-all hover:border-foreground/20 hover:shadow-sm">
                    <span class="inline-flex size-10 items-center justify-center rounded-lg border border-border">
                        @include('site.partials.social-icon', ['label' => 'WhatsApp'])
                    </span>
                    <h2 class="mt-6 text-lg font-medium tracking-tight">WhatsApp — discuss a project</h2>
                    <p class="mt-2 flex-1 text-sm leading-relaxed text-muted-foreground">
                        The fastest way to reach the team — including screen sharing when you need it.
                    </p>
                    <span class="mt-6 text-sm font-medium">{{ config('site.whatsapp.display') }}</span>
                </a>
            </div>

            <div data-reveal-group class="mt-6">
                <div class="reveal flex flex-col gap-6 rounded-xl border border-border bg-card p-8 sm:flex-row sm:items-start">
                    <span class="inline-flex size-10 shrink-0 items-center justify-center rounded-lg border border-border">
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                    </span>
                    <div>
                        <h2 class="text-lg font-medium tracking-tight">Registered office</h2>
                        <p class="mt-2 text-sm leading-relaxed text-muted-foreground">
                            {{ config('site.company') }}<br>
                            {{ config('site.address.street') }}<br>
                            {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}, {{ config('site.address.country') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div data-reveal-group class="mx-auto max-w-2xl text-center">
                <h2 class="reveal text-3xl font-semibold tracking-tight text-balance sm:text-4xl">Looking for a product reference?</h2>
                <p class="reveal mt-4 text-lg leading-relaxed text-muted-foreground text-pretty">
                    See live SaaS products we designed and operate, or browse the Help Center for an existing {{ config('site.suite') }} app.
                </p>
                <div class="reveal mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ url('/') }}#references"
                       class="inline-flex h-11 w-full items-center justify-center rounded-lg bg-primary px-6 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90 sm:w-auto">
                        View references
                    </a>
                    <a href="https://webinnovate-leadform.crisp.help/en/" rel="noopener"
                       class="inline-flex h-11 w-full items-center justify-center rounded-lg border border-border bg-card px-6 text-sm font-medium transition-colors hover:bg-secondary sm:w-auto">
                        Help Center
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
