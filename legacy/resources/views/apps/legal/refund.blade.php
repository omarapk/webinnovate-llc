@extends('apps.legal.layout')

@section('title', 'Refund Policy — '.$app['name'])
@section('meta_description', 'Refund Policy for '.$app['name'].' by WebInnovate LLC. How subscriptions, free trials and refund requests are handled.')
@section('breadcrumb', 'Refund Policy')
@section('heading', 'Refund Policy')
@section('lead', $app['name'].' Refund Policy')

@section('content')
    <h1>Refund Policy – {{ $app['name'] }}</h1>
    <p><strong>Last Updated: {{ '21/07/2026' }}</strong></p>

    <p>This Refund Policy explains how billing and refunds work for {{ $app['name'] }}, developed by {{ config('site.company') }}. The App is billed through the Shopify billing system.</p>

    <div id="free-trial">
        <h2>1. Free Trial</h2>
        <p>{{ $app['name'] }} offers a 7-day free trial. You can evaluate all plan features during the trial and cancel or uninstall at any time before it ends without being charged. If you do not cancel before the trial ends, your subscription starts automatically and the plan charge applies.</p>
    </div>

    <div id="subscriptions">
        <h2>2. Subscriptions & Billing</h2>
        <p>All charges are billed in USD through Shopify. Recurring and usage-based charges are billed every 30 days. Subscription charges appear on your regular Shopify invoice.</p>
    </div>

    <div id="cancellation">
        <h2>3. Cancellation</h2>
        <p>You can cancel your subscription at any time by changing your plan inside the App or by uninstalling the App from your Shopify admin. Cancellation stops future charges; it does not automatically trigger a refund for the current billing period, but you keep access until the end of the period already paid.</p>
    </div>

    <div id="refunds">
        <h2>4. Refund Requests</h2>
        <p>We want you to be happy with the App. If you believe you were charged in error — for example, you were billed after uninstalling, charged twice, or experienced a technical problem that prevented you from using the App — contact us within 30 days of the charge and we will review your request.</p>
        <ul>
            <li>Refunds for erroneous or duplicate charges are issued in full once verified.</li>
            <li>Refunds for partial billing periods are handled case by case, in good faith.</li>
            <li>Because charges are processed by Shopify, approved refunds are returned through Shopify billing and may take several business days to appear.</li>
        </ul>
    </div>

    <div id="how-to">
        <h2>5. How to Request a Refund</h2>
        <p>Email <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a> from the email address associated with your store, and include:</p>
        <ul>
            <li>Your store URL (myshopify.com domain)</li>
            <li>The date and amount of the charge</li>
            <li>A short description of the issue</li>
        </ul>
        <p>We typically respond within 1–2 business days.</p>
    </div>

    <div id="contact">
        <h2>6. Contact</h2>
        <p>📧 <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></p>
        <p>💬 WhatsApp: <a href="{{ config('site.whatsapp.url') }}">{{ config('site.whatsapp.display') }}</a></p>
    </div>
@endsection
