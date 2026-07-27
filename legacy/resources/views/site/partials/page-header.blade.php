{{-- Shared hero band for the secondary corporate pages. --}}
<section class="relative overflow-hidden border-b border-border">
    <div class="bg-grid mask-fade-bottom pointer-events-none absolute inset-0" aria-hidden="true"></div>

    <div data-reveal-group class="relative mx-auto max-w-6xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
        <div class="max-w-3xl">
            @if (! empty($eyebrow))
                <p class="reveal text-sm font-medium uppercase tracking-widest text-muted-foreground">{{ $eyebrow }}</p>
            @endif
            <h1 class="reveal mt-4 text-4xl font-semibold tracking-tight text-balance sm:text-5xl">{{ $heading }}</h1>
            @if (! empty($lead))
                <p class="reveal mt-5 max-w-2xl text-lg leading-relaxed text-muted-foreground text-pretty">{{ $lead }}</p>
            @endif
        </div>
    </div>
</section>
