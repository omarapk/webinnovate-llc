@extends('site.layout')

@section('title', 'Terms of Use — WebInnovate LLC')
@section('meta_description', 'Terms of Use for WebInnovate LLC. Rules for using webinnovate.dev and engaging our studio for custom SaaS services.')

@section('content')

    @include('site.partials.page-header', [
        'eyebrow' => 'Legal',
        'heading' => 'Terms of Use',
        'lead' => 'Last updated: July 27, 2026',
    ])

    <section class="border-b border-border">
        <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="prose-site space-y-10 text-base leading-relaxed text-muted-foreground">
                <div>
                    <p>
                        These Terms of Use (“Terms”) govern your access to
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/') }}">webinnovate.dev</a>
                        and any inquiry or engagement with {{ config('site.company') }} (“we”, “us”, or “our”)
                        for custom SaaS development, security, SEO, support and maintenance.
                        By using this website, you agree to these Terms.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">1. Who we are</h2>
                    <p class="mt-3">
                        {{ config('site.company') }} is a software studio that designs, builds and operates custom SaaS products.
                        Product-specific terms for Shopify apps we publish are provided separately with each app listing.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">2. Website use</h2>
                    <ul class="mt-3 list-disc space-y-2 pl-5">
                        <li>You may browse the site for lawful purposes only.</li>
                        <li>You must not attempt to disrupt, scrape abusively, or gain unauthorized access to the site or related systems.</li>
                        <li>Content on this site (copy, design, branding) is owned by us or our licensors and may not be reused without permission, except for fair personal use.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">3. Quotes &amp; project discussions</h2>
                    <p class="mt-3">
                        Requesting a quote or discussing a project does not create a binding contract.
                        Any paid engagement is governed by a separate written agreement (proposal, statement of work or contract)
                        that we and you both accept. Until then, estimates and timelines are indicative only.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">4. No warranties on the website</h2>
                    <p class="mt-3">
                        The website is provided “as is.” We do not warrant that it will be uninterrupted, error-free,
                        or that all content is complete or current. Portfolio examples and references illustrate past work
                        and do not guarantee specific results for your project.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">5. Limitation of liability</h2>
                    <p class="mt-3">
                        To the maximum extent permitted by law, {{ config('site.company') }} is not liable for any
                        indirect, incidental, special, consequential or punitive damages arising from your use of the website.
                        Liability related to a paid engagement is defined in that engagement’s contract.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">6. Privacy</h2>
                    <p class="mt-3">
                        How we handle personal information is described in our
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/privacy-policy') }}">Privacy Policy</a>.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">7. Changes</h2>
                    <p class="mt-3">
                        We may update these Terms from time to time. The “Last updated” date reflects the latest version.
                        Continued use of the site after changes means you accept the updated Terms.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">8. Contact</h2>
                    <p class="mt-3">
                        Questions about these Terms:
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                    </p>
                    <p class="mt-3">
                        {{ config('site.company') }}<br>
                        {{ config('site.address.street') }}<br>
                        {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}, {{ config('site.address.country') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
