@extends('apps.legal.layout')

@section('title', 'Privacy Policy — '.$app['name'])
@section('meta_description', 'Privacy Policy for '.$app['name'].' by WebInnovate LLC. Learn what data we collect, how we use it, and your privacy rights.')
@section('breadcrumb', 'Privacy Policy')
@section('heading', 'Privacy Policy')
@section('lead', $app['name'].' Privacy Policy')

@section('content')
    <h1>Privacy Policy – {{ $app['name'] }}</h1>

    <p><strong>Last Updated: {{ '21/07/2026' }}</strong></p>

    <p>Thank you for choosing {{ $app['name'] }}. {{ config('site.company') }} ("we", "us", or "our") is committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this notice, or our practices regarding your personal data, please contact us at <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>

    <p>When you visit our website ({{ request()->getHost() }}) or use {{ $app['name'] }} (the "App"), you trust us with your personal information. This Privacy Notice explains in clear terms what data we collect, how we use it, and what rights you have. If you do not agree with this policy, you should discontinue using our Services.</p>

    <p>This Privacy Notice applies to all information collected through the App, our website and any related services, sales, marketing, or events (collectively, the "Services").</p>

    <div class="table-of-contents">
        <h2 style="border-bottom: none; margin-top: 0;">Table of Contents</h2>
        <ul>
            <li><a href="#collect-info">1. What Information Do We Collect?</a></li>
            <li><a href="#use-info">2. How Do We Use Your Information?</a></li>
            <li><a href="#share-info">3. Will Your Information Be Shared With Anyone?</a></li>
            <li><a href="#keep-info">4. How Long Do We Keep Your Information?</a></li>
            <li><a href="#safe-info">5. How Do We Keep Your Information Safe?</a></li>
            <li><a href="#minors">6. Do We Collect Information From Minors?</a></li>
            <li><a href="#privacy-rights">7. What Are Your Privacy Rights?</a></li>
            <li><a href="#do-not-track">8. Controls for Do-Not-Track Features</a></li>
            <li><a href="#updates">9. Do We Make Updates to This Policy?</a></li>
            <li><a href="#contact">10. How Can You Contact Us About This Policy?</a></li>
        </ul>
    </div>

    <div id="collect-info">
        <h2>1. What Information Do We Collect?</h2>

        <h3>Information collected through Shopify</h3>
        <p>When you install the App on your Shopify store, we receive information from Shopify needed to operate the App, which may include your store name and domain, store owner name and email address, and the store data required for the App's features (such as products and orders).</p>

        <h3>Automatically Collected Information</h3>
        <p>When you use our Services, we automatically collect technical information such as:</p>
        <ul>
            <li>IP address</li>
            <li>Browser and device characteristics</li>
            <li>Operating system and language</li>
            <li>Referring URLs and pages visited</li>
            <li>Device type and geolocation</li>
            <li>Usage data (how and when you interact with our Services)</li>
        </ul>
        <p>This data does not directly identify you but is necessary for maintaining the security, functionality, and analytics of our Services. Like many companies, we also use cookies and similar technologies.</p>
    </div>

    <div id="use-info">
        <h2>2. How Do We Use Your Information?</h2>
        <p>We use information collected through our Services for the following purposes:</p>
        <ul>
            <li><strong>Providing the App:</strong> to operate the App's features on your store and keep your data in sync.</li>
            <li><strong>Account setup and support:</strong> to help you configure the App and respond to support requests.</li>
            <li><strong>Marketing and communication:</strong> to send product updates and offers (if you've opted in). You can unsubscribe at any time.</li>
            <li><strong>Service improvement:</strong> for analytics, troubleshooting, and optimization of features.</li>
            <li><strong>Legal compliance:</strong> to comply with laws, regulations, or court orders.</li>
        </ul>
        <p>We process your information based on legitimate business interests, contract performance, your consent, and legal obligations.</p>
    </div>

    @if ($app['slug'] === 'landing-page-builder')
        <div id="authorized-use">
            <h2>Authorized Use of Product Content</h2>
            <p>{{ $app['name'] }} helps you create landing pages and order forms for products you are legally authorized to sell — your own products, officially licensed products, or supplier/dropshipping products you have the right to resell.</p>
            <p>You must not use the App to copy products, images, descriptions, or other content from any website, store, or marketplace (including AliExpress) without explicit permission from the rights holder. You are solely responsible for ensuring you hold the necessary rights to any content you upload or import into the App.</p>
            <p>Misuse may infringe copyright and violates these Terms and Shopify's policies, and may result in account suspension.</p>
        </div>
    @endif

    <div id="share-info">
        <h2>3. Will Your Information Be Shared With Anyone?</h2>
        <p>We only share data when necessary and under strict conditions:</p>
        <ul>
            <li><strong>With your consent</strong> – for specific purposes you agree to.</li>
            <li><strong>Vendors & service providers</strong> – including hosting, payment processors, analytics, email delivery, and customer support.</li>
            <li><strong>Business transfers</strong> – during mergers, acquisitions, or company restructuring.</li>
            <li><strong>Legal requirements</strong> – to comply with law, national security, or law enforcement.</li>
            <li><strong>Protection of rights</strong> – in cases of fraud, abuse, or security risks.</li>
        </ul>
        <p>We do not sell or rent your personal information to third parties for marketing purposes.</p>
    </div>

    <div id="keep-info">
        <h2>4. How Long Do We Keep Your Information?</h2>
        <p>We retain your information only as long as necessary to provide our Services and fulfill the purposes outlined in this Privacy Notice, unless a longer period is required by law. Once your data is no longer needed, we either delete it or anonymize it.</p>
    </div>

    <div id="safe-info">
        <h2>5. How Do We Keep Your Information Safe?</h2>
        <p>We use appropriate technical and organizational security measures to protect your personal information. However, no online service can be 100% secure. Transmission of personal information is at your own risk, so we recommend accessing our Services only in secure environments.</p>
    </div>

    <div id="minors">
        <h2>6. Do We Collect Information From Minors?</h2>
        <p>No. We do not knowingly collect or market to children under 18 years old. If we discover we have collected data from a minor, we will promptly delete it. If you are a parent or guardian and believe your child has shared personal data with us, please contact us at <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>
    </div>

    <div id="privacy-rights">
        <h2>7. What Are Your Privacy Rights?</h2>
        <p>Depending on your location (e.g., the European Economic Area), you may have the right to:</p>
        <ul>
            <li>Access and obtain a copy of your data</li>
            <li>Request correction or deletion</li>
            <li>Restrict processing of your data</li>
            <li>Data portability (where applicable)</li>
            <li>Withdraw consent at any time</li>
        </ul>
        <p>You may also file a complaint with your local data protection authority if you believe we are unlawfully processing your data.</p>

        <h3>Account Information</h3>
        <p>You can uninstall the App at any time from your Shopify admin. Upon uninstallation, your account data will be removed from active databases in line with Shopify's mandatory data-deletion webhooks, though we may retain certain data to comply with legal obligations or prevent fraud.</p>

        <h3>Cookies</h3>
        <p>You can configure your browser to reject cookies. Note: disabling cookies may affect certain features of our Services.</p>

        <h3>Email marketing</h3>
        <p>You may unsubscribe at any time using the link provided in our emails. Service-related emails (important updates, billing notices) cannot be opted out of.</p>
    </div>

    <div id="do-not-track">
        <h2>8. Controls for Do-Not-Track (DNT) Features</h2>
        <p>Currently, no uniform standard exists for recognizing DNT signals. Therefore, we do not respond to DNT browser settings. If a standard is adopted in the future, we will update this policy accordingly.</p>
    </div>

    <div id="updates">
        <h2>9. Do We Make Updates to This Policy?</h2>
        <p>Yes. We may update this Privacy Notice to stay compliant with laws and best practices. Updates will be reflected by the "Last Updated" date. For material changes, we may notify you via email or by posting a notice on our website.</p>
    </div>

    <div id="contact">
        <h2>10. How Can You Contact Us About This Policy?</h2>
        <p>If you have questions or comments about this Privacy Notice, you may contact us at:</p>
        <p>📧 <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
        <p>🌐 <a href="{{ url('/') }}">{{ url('/') }}</a></p>
    </div>
@endsection
