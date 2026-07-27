<?php

/*
|--------------------------------------------------------------------------
| WebInnovate — site-wide company data
|--------------------------------------------------------------------------
| Shared by the corporate pages (/, /about, /contact), app landings,
| legal pages and JSON-LD structured data.
*/

return [
    'company' => 'WebInnovate LLC',
    'brand' => 'WebInnovate',
    'suite' => 'WEBI',
    'tagline' => 'Custom SaaS solutions built by experts',
    'description' => 'WebInnovate LLC is a software studio that designs, builds and operates custom SaaS products — development, security, SEO, support and maintenance — for founders and teams who want software that drives revenue.',
    'address' => [
        'street' => '271 W. Short St Ste 410',
        'city' => 'Lexington',
        'state' => 'KY',
        'zip' => '40507',
        'country' => 'USA',
        'full' => '271 W. Short St Ste 410, Lexington, KY 40507, USA',
    ],
    'email' => 'contact@webinnovate.dev',
    'whatsapp' => [
        'display' => '+1 (819) 807-0658',
        'url' => 'https://wa.me/18198070658',
    ],
    'socials' => [
        ['icon' => 'fa-brands fa-facebook', 'url' => 'https://www.facebook.com/leadform.cod', 'label' => 'Facebook'],
        ['icon' => 'fa-brands fa-whatsapp', 'url' => 'https://wa.me/18198070658', 'label' => 'WhatsApp'],
        ['icon' => 'fa-brands fa-instagram', 'url' => 'https://www.instagram.com/leadform.cod', 'label' => 'Instagram'],
        ['icon' => 'fa-brands fa-youtube', 'url' => 'https://www.youtube.com/@Lead-Form-COD/videos', 'label' => 'YouTube'],
    ],
    // Proof points shown on the corporate homepage.
    'trust_stats' => [
        ['count' => 10, 'suffix' => 'k', 'label' => 'Merchants using our products'],
        ['count' => 20, 'suffix' => '', 'label' => 'Countries reached'],
        ['count' => 10, 'suffix' => 'M', 'label' => 'Orders processed'],
        ['count' => 5, 'suffix' => '', 'label' => 'Years shipping SaaS'],
    ],
    // Order in which apps appear in reference grids, footers and the sitemap.
    'app_order' => ['leadform', 'landing-page-builder', 'ordersheet'],
];
