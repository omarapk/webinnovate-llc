@extends('site.layout')

@section('title', 'Privacy Policy — WebInnovate LLC')
@section('meta_description', 'Privacy Policy for WebInnovate LLC. How we collect, use and protect information when you visit webinnovate.dev or work with our studio.')

@section('content')

    @include('site.partials.page-header', [
        'eyebrow' => 'Legal',
        'heading' => 'Privacy Policy',
        'lead' => 'Last updated: July 27, 2026',
    ])

    <section class="border-b border-border">
        <div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="prose-site space-y-10 text-base leading-relaxed text-muted-foreground">
                <div>
                    <p>
                        {{ config('site.company') }} (“we”, “us”, or “our”) operates
                        <a class="font-medium text-foreground underline-offset-4 hover:underline" href="{{ url('/') }}">webinnovate.dev</a>
                        and provides custom SaaS design, development, security, SEO, support and maintenance services.
                        This Privacy Policy explains what information we collect, how we use it, and the choices you have.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">1. Information we collect</h2>
                    <ul class="mt-3 list-disc space-y-2 pl-5">
                        <li><span class="font-medium text-foreground">Contact details</span> you send us (name, email, phone, company) when you request a quote, discuss a project, or email us.</li>
                        <li><span class="font-medium text-foreground">Project information</span> you choose to share about your product, goals and requirements.</li>
                        <li><span class="font-medium text-foreground">Usage data</span> such as pages visited, device/browser type and approximate location, collected via standard web logs and analytics tools.</li>
                        <li><span class="font-medium text-foreground">Communications</span> we exchange with you by email, WhatsApp or other channels you initiate.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">2. How we use information</h2>
                    <ul class="mt-3 list-disc space-y-2 pl-5">
                        <li>Respond to quote requests and project discussions</li>
                        <li>Deliver, support and improve our services</li>
                        <li>Send operational messages related to an engagement you started</li>
                        <li>Secure our website and prevent abuse</li>
                        <li>Comply with legal obligations</li>
                    </ul>
                    <p class="mt-3">We do not sell your personal information.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">3. Sharing</h2>
                    <p class="mt-3">
                        We may share information with service providers who help us operate (hosting, email, analytics),
                        only as needed to perform their work and under appropriate confidentiality obligations.
                        We may also disclose information if required by law or to protect our rights and users.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">4. Retention &amp; security</h2>
                    <p class="mt-3">
                        We keep information only as long as needed for the purposes above, then delete or anonymize it.
                        We use reasonable technical and organizational measures to protect data, but no method of
                        transmission or storage is 100% secure.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">5. Your rights</h2>
                    <p class="mt-3">
                        Depending on where you live, you may have the right to access, correct, delete or restrict
                        processing of your personal data, or to object to certain uses. Contact us to exercise these rights.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">6. Third-party products</h2>
                    <p class="mt-3">
                        Individual Shopify apps we publish (for example under the WEBI suite) may have their own
                        privacy policies that apply when you install or use those apps. This policy covers the
                        corporate website and studio services of {{ config('site.company') }}.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">7. Changes</h2>
                    <p class="mt-3">
                        We may update this Privacy Policy from time to time. The “Last updated” date at the top
                        reflects the latest version. Continued use of the site after changes means you accept the updated policy.
                    </p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold tracking-tight text-foreground">8. Contact</h2>
                    <p class="mt-3">
                        Questions about privacy:
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
