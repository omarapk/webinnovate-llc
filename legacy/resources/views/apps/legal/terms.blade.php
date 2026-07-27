@extends('apps.legal.layout')

@section('title', 'Terms of Service — '.$app['name'])
@section('meta_description', 'Terms of Service for '.$app['name'].' by WebInnovate LLC. The rules that govern your use of the app and our website.')
@section('breadcrumb', 'Terms of Service')
@section('heading', 'Terms of Service')
@section('lead', $app['name'].' Terms of Use')

@section('content')
    <h1>Terms of Use – {{ $app['name'] }}</h1>
    <p><strong>Last Updated: {{ '21/07/2026' }}</strong></p>

    <p>These Terms of Use constitute a legally binding agreement between you (whether personally or on behalf of a company, "you") and {{ config('site.company') }}, doing business as {{ $app['name'] }} ("we", "us", or "our"), concerning your access to and use of the {{ $app['name'] }} app (the "App") and this website, as well as any related media channels, mobile websites, or applications (collectively, the "Site").</p>

    <p>By installing the App or accessing the Site, you confirm that you have read, understood, and agreed to be bound by these Terms of Use. <strong>If you do not agree with these Terms, you must discontinue use immediately.</strong></p>

    <div class="table-of-contents">
        <h2 style="border-bottom: none; margin-top: 0;">Table of Contents</h2>
        <ul>
            <li><a href="#supplemental">1. Supplemental Terms</a></li>
            <li><a href="#eligibility">2. Eligibility</a></li>
            <li><a href="#intellectual-property">3. Intellectual Property Rights</a></li>
            <li><a href="#user-responsibilities">4. User Responsibilities</a></li>
            <li><a href="#prohibited-activities">5. Prohibited Activities</a></li>
            <li><a href="#subscriptions">6. Subscriptions & Billing</a></li>
            <li><a href="#submissions">7. Submissions</a></li>
            <li><a href="#third-party">8. Third-Party Websites and Content</a></li>
            <li><a href="#termination">9. Term & Termination</a></li>
            <li><a href="#modifications">10. Modifications and Interruptions</a></li>
            <li><a href="#disclaimer">11. Disclaimer</a></li>
            <li><a href="#limitation">12. Limitation of Liability</a></li>
            <li><a href="#indemnification">13. Indemnification</a></li>
            <li><a href="#miscellaneous">14. Miscellaneous</a></li>
            <li><a href="#contact">15. Contact Us</a></li>
        </ul>
    </div>

    <div id="supplemental">
        <h2>1. Supplemental Terms</h2>
        <p>We may update or modify these Terms of Use at any time. Changes will be reflected by the "Last Updated" date. It is your responsibility to check this page periodically. Continued use of the App after changes means you accept the updated Terms.</p>
    </div>

    <div id="eligibility">
        <h2>2. Eligibility</h2>
        <p>The App and Site are intended for users at least 18 years old who operate a Shopify store or act on behalf of a business. By using the App, you confirm you meet this requirement.</p>
    </div>

    <div id="intellectual-property">
        <h2>3. Intellectual Property Rights</h2>
        <p>Unless otherwise indicated, the App, the Site and all content (code, databases, software, designs, text, photos, graphics, video, and audio) as well as trademarks and logos are the property of {{ config('site.company') }} or licensed to us.</p>
        <p>You are granted a limited, non-transferable license to use the App for the operation of your own store. Any other use (copying, reproducing, distributing, or exploiting the App or its content) requires prior written permission.</p>
    </div>

    <div id="user-responsibilities">
        <h2>4. User Responsibilities</h2>
        <p>By using the App, you represent and agree that:</p>
        <ul>
            <li>You have the legal capacity to accept these Terms.</li>
            <li>You are not a minor in your jurisdiction.</li>
            <li>You will not access the Site using automated tools (bots, scripts, scrapers).</li>
            <li>You will not use the App for unlawful purposes.</li>
            <li>You only use the App with products and content you are legally authorized to sell.</li>
            <li>Your use complies with all applicable laws and regulations, and with Shopify's terms and policies.</li>
        </ul>
        <p>If any information you provide is false, outdated, or incomplete, we reserve the right to suspend or terminate your account.</p>
    </div>

    <div id="prohibited-activities">
        <h2>5. Prohibited Activities</h2>
        <p>You agree not to:</p>
        <ul>
            <li>Collect data from the Site or App without permission.</li>
            <li>Send spam or create accounts under false pretenses.</li>
            <li>Circumvent or disable security features.</li>
            <li>Reverse engineer or copy the App's software.</li>
            <li>Upload viruses, malware, or harmful content.</li>
            <li>Harass, defraud, or impersonate others.</li>
            <li>Use the App to infringe the intellectual property rights of others.</li>
            <li>Use the App to compete with us or for unauthorized commercial purposes.</li>
        </ul>
        <p>Violating these restrictions may result in suspension or termination of your access.</p>
    </div>

    <div id="subscriptions">
        <h2>6. Subscriptions & Billing</h2>
        <p>Paid plans are billed through the Shopify billing system in USD and recur every 30 days unless cancelled. Where offered, free trials convert automatically to a paid subscription at the end of the trial period unless you cancel or uninstall the App first. You can change or cancel your plan at any time from your Shopify admin.</p>
    </div>

    <div id="submissions">
        <h2>7. Submissions</h2>
        <p>Any feedback, suggestions, or ideas you provide to us ("Submissions") become the property of {{ config('site.company') }}. We may use them freely without compensation to you.</p>
    </div>

    <div id="third-party">
        <h2>8. Third-Party Websites and Content</h2>
        <p>The App and Site may contain links to or integrations with third-party websites or services (including Shopify and Google). We are not responsible for their content, practices, or policies. Accessing third-party services is at your own risk.</p>
    </div>

    <div id="termination">
        <h2>9. Term & Termination</h2>
        <p>These Terms remain in effect while you use the App. We reserve the right to deny access to and use of the App to any person for any reason, including breach of these Terms, without notice. You may terminate at any time by uninstalling the App from your Shopify store.</p>
    </div>

    <div id="modifications">
        <h2>10. Modifications and Interruptions</h2>
        <p>We reserve the right to change, modify, or remove features of the App at any time. We cannot guarantee the App will be available at all times; occasional interruptions may occur due to maintenance or issues beyond our control.</p>
    </div>

    <div id="disclaimer">
        <h2>11. Disclaimer</h2>
        <p>THE APP AND SITE ARE PROVIDED ON AN "AS-IS" AND "AS-AVAILABLE" BASIS. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT.</p>
    </div>

    <div id="limitation">
        <h2>12. Limitation of Liability</h2>
        <p>IN NO EVENT WILL {{ strtoupper(config('site.company')) }} OR ITS DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE FOR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT OR LOST DATA, ARISING FROM YOUR USE OF THE APP OR SITE. OUR AGGREGATE LIABILITY WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID BY YOU TO US DURING THE THREE (3) MONTHS PRIOR TO ANY CAUSE OF ACTION ARISING.</p>
    </div>

    <div id="indemnification">
        <h2>13. Indemnification</h2>
        <p>You agree to defend, indemnify, and hold us harmless from and against any loss, damage, liability, claim, or demand made by any third party due to or arising out of your use of the App, breach of these Terms, or violation of the rights of a third party.</p>
    </div>

    <div id="miscellaneous">
        <h2>14. Miscellaneous</h2>
        <p>These Terms are governed by the laws of the Commonwealth of Kentucky, USA, without regard to conflict-of-law principles. If any provision of these Terms is found unlawful or unenforceable, the remainder stays in full force. These Terms, together with the <a href="{{ url('/'.$app['slug'].'/privacy-policy') }}">Privacy Policy</a> and <a href="{{ url('/'.$app['slug'].'/refund-policy') }}">Refund Policy</a>, constitute the entire agreement between you and us.</p>
    </div>

    <div id="contact">
        <h2>15. Contact Us</h2>
        <p>To resolve a complaint or receive more information about the App, contact us at:</p>
        <p>📧 <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
        <p>📍 {{ config('site.company') }}, {{ config('site.address.full') }}</p>
    </div>
@endsection
