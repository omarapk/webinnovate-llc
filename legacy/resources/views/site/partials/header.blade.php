@php
    $navItems = [
        ['label' => 'Solutions', 'href' => url('/').'#solutions'],
        ['label' => 'Process', 'href' => url('/').'#process'],
        ['label' => 'References', 'href' => url('/').'#references'],
        ['label' => 'About', 'href' => url('/about')],
        ['label' => 'Contact', 'href' => url('/contact')],
    ];
@endphp

<header data-sticky-header class="sticky top-0 z-40 border-b border-transparent bg-background/80 backdrop-blur-xl transition-colors duration-200">
    <div class="mx-auto flex h-16 max-w-6xl items-center justify-between gap-6 px-4 sm:px-6 lg:px-8">
        @include('site.partials.logo')

        <nav class="hidden items-center gap-1 md:flex" aria-label="Main">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}"
                   class="rounded-md px-3 py-2 text-sm text-muted-foreground transition-colors hover:text-foreground">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-2">
            <a href="{{ config('site.whatsapp.url') }}" rel="noopener"
               class="hidden rounded-lg px-3 py-2 text-sm font-medium text-muted-foreground transition-colors hover:text-foreground sm:inline-flex">
                Discuss a project
            </a>
            <a href="{{ url('/contact') }}"
               class="inline-flex h-9 items-center rounded-lg bg-primary px-4 text-sm font-medium text-primary-foreground transition-opacity hover:opacity-90">
                Request a quote
            </a>

            <button type="button" data-mobile-menu-open
                    class="inline-flex size-9 items-center justify-center rounded-lg border border-border text-foreground md:hidden"
                    aria-label="Open menu">
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<div data-mobile-menu hidden class="fixed inset-0 z-50 bg-background md:hidden">
    <div class="flex h-16 items-center justify-between px-4 sm:px-6">
        @include('site.partials.logo')
        <button type="button" data-mobile-menu-close
                class="inline-flex size-9 items-center justify-center rounded-lg border border-border"
                aria-label="Close menu">
            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                <path d="M18 6 6 18M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <nav class="flex flex-col gap-1 px-4 pt-4 sm:px-6" aria-label="Mobile">
        @foreach ($navItems as $item)
            <a href="{{ $item['href'] }}" class="rounded-lg px-3 py-3 text-base font-medium hover:bg-secondary">
                {{ $item['label'] }}
            </a>
        @endforeach
        <a href="{{ url('/contact') }}"
           class="mt-4 inline-flex h-11 items-center justify-center rounded-lg bg-primary px-4 text-sm font-medium text-primary-foreground">
            Request a quote
        </a>
        <a href="{{ config('site.whatsapp.url') }}" rel="noopener"
           class="mt-2 inline-flex h-11 items-center justify-center rounded-lg border border-border px-4 text-sm font-medium">
            Discuss a project
        </a>
    </nav>
</div>
