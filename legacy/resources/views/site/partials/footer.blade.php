@php($footerApps = \App\Support\AppCatalog::all())

<footer class="border-t border-border">
    <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-12 md:grid-cols-[1.5fr_1fr_1fr_1fr]">
            <div>
                @include('site.partials.logo')
                <p class="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground">
                    {{ config('site.company') }} designs, builds and operates custom SaaS —
                    development, security, SEO, support and maintenance.
                </p>
                <div class="mt-6 flex items-center gap-2">
                    @foreach (config('site.socials') as $social)
                        <a href="{{ $social['url'] }}" aria-label="{{ $social['label'] }}" rel="noopener"
                           class="inline-flex size-9 items-center justify-center rounded-lg border border-border text-muted-foreground transition-colors hover:bg-secondary hover:text-foreground">
                            @include('site.partials.social-icon', ['label' => $social['label']])
                        </a>
                    @endforeach
                </div>
            </div>

            <div>
                <h2 class="text-sm font-medium">References</h2>
                <ul class="mt-4 space-y-3 text-sm text-muted-foreground">
                    @foreach ($footerApps as $footerApp)
                        <li>
                            <a class="group inline-flex items-center gap-2.5 transition-colors hover:text-foreground"
                               href="{{ url('/'.$footerApp['slug']) }}">
                                <img src="{{ asset($footerApp['icon']) }}" alt="" aria-hidden="true"
                                     class="size-5 rounded border border-border opacity-70 transition-opacity group-hover:opacity-100"
                                     loading="lazy">
                                {{ $footerApp['display_name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-medium">Company</h2>
                <ul class="mt-4 space-y-3 text-sm text-muted-foreground">
                    <li><a class="transition-colors hover:text-foreground" href="{{ url('/about') }}">About</a></li>
                    <li><a class="transition-colors hover:text-foreground" href="{{ url('/contact') }}">Contact</a></li>
                    <li><a class="transition-colors hover:text-foreground" href="{{ route('apps.blog.index', ['app' => 'leadform']) }}">Blog</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-medium">Legal</h2>
                <ul class="mt-4 space-y-3 text-sm text-muted-foreground">
                    <li>
                        <a class="transition-colors hover:text-foreground" href="{{ url('/privacy-policy') }}">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a class="transition-colors hover:text-foreground" href="{{ url('/terms-of-use') }}">
                            Terms of Use
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-14 flex flex-col gap-4 border-t border-border pt-8 text-sm text-muted-foreground sm:flex-row sm:items-start sm:justify-between">
            <div class="space-y-1">
                <p>© {{ date('Y') }} {{ config('site.company') }}. All rights reserved.</p>
                <address class="not-italic">{{ config('site.address.full') }}</address>
            </div>
            <a class="transition-colors hover:text-foreground" href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
        </div>
    </div>
</footer>
