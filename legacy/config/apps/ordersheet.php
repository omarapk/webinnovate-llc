<?php

/*
|--------------------------------------------------------------------------
| WEBI OrderSheet — app landing data
|--------------------------------------------------------------------------
| Rendered by resources/views/apps/landing.blade.php.
| Rating badge 4.5 (14 reviews) is OK to display for this app.
*/

return [
    'slug' => 'ordersheet',
    'name' => 'WEBI OrderSheet',
    'display_name' => 'OrderSheet',
    'tag' => 'Google Sheets Sync',
    'portfolio_tagline' => 'Automatically send every new Shopify order to Google Sheets — organized, in real time.',
    'icon' => 'assets/images/apps/ordersheet-icon.png',
    'app_store_url' => 'https://apps.shopify.com/ordersheet-auto-order-sync',

    'accent' => ['from' => '#15803D', 'to' => '#22C55E'],
    'listing' => [
        'rating' => '4.5',
        'reviews' => 14,
        'price' => '$9.99/month',
    ],
    'highlights' => [
        'Real-time order sync',
        'Filter what gets exported',
        'One sheet per supplier',
    ],

    'logo' => [
        'icon' => 'assets/images/apps/ordersheet-icon.png',
        'header_light' => 'assets/images/logo/1.svg',
        'header_dark' => 'assets/images/dark/1.svg',
        'footer_light' => 'assets/images/logo/3.svg',
        'footer_dark' => 'assets/images/dark/logo/3.svg',
        'link' => 'https://apps.shopify.com/ordersheet-auto-order-sync',
    ],

    'seo' => [
        'title' => 'WEBI OrderSheet — Automatically Send Shopify Orders to Google Sheets',
        'description' => 'OrderSheet exports every new Shopify order to Google Sheets automatically — organized, in real time. Custom filters, one spreadsheet per supplier, product-options app integrations. $9.99/month, 7-day free trial.',
        'og_image' => 'assets/images/apps/ordersheet-screenshot-1.jpeg',
    ],

    'jsonld' => [
        'name' => 'WEBI OrderSheet — Orders To Google Sheets',
        'description' => 'Automatically export new Shopify orders to Google Sheets in real time, with custom filters, multiple spreadsheets per supplier or product, and product-options app integrations.',
        'category' => 'BusinessApplication',
        'price' => '9.99',
        'currency' => 'USD',
        'rating' => ['value' => 4.5, 'count' => 14],
    ],

    'nav' => [
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Blog', 'href' => '#blog'],
        ['label' => 'Faq', 'href' => '#faq'],
        ['label' => 'Pricing', 'href' => '#pricing'],
    ],

    'header_cta' => ['label' => 'Install on Shopify', 'url' => 'https://apps.shopify.com/ordersheet-auto-order-sync'],

    'hero' => [
        'variant' => 'media',
        'badge' => 'WEBI · Google Sheets Sync',
        'title' => 'Automatically send your Shopify orders to Google Sheets — organized, in real time',
        'description' => 'Say goodbye to manual data entry. OrderSheet exports every new order to Google Sheets automatically, so you can focus on growing your business.',
        'cta' => ['label' => 'Install on Shopify', 'url' => 'https://apps.shopify.com/ordersheet-auto-order-sync'],
        'secondary_cta' => ['label' => 'Talk to us on WhatsApp', 'url' => 'https://wa.me/18198070658'],
        'media' => ['image' => 'assets/images/apps/ordersheet-screenshot-1.jpeg', 'alt' => 'WEBI OrderSheet syncing Shopify orders to a Google Sheets spreadsheet'],
        'rating_badge' => ['rating' => 4.5, 'count' => 14],
    ],

    'trust_logos' => null,

    'demo' => [
        'type' => 'image',
        'image' => ['src' => 'assets/images/apps/ordersheet-screenshot-2.jpeg', 'alt' => 'WEBI OrderSheet export settings with custom filters and field selection'],
        'subtitle_html' => '<span class="theme-gradient">OrderSheet</span>',
        'title' => 'Your Orders, Organized Without Lifting a Finger',
        'value_props' => [
            [
                'icon' => 'assets/images/icons/1.png',
                'icon_bg' => 'bg-pink-opacity',
                'icon_alt' => 'Rocket Icon',
                'title' => 'Real-Time, Hands-Free Export',
                'description' => 'Every new order lands in your Google Sheet automatically — even on high-volume days.',
            ],
            [
                'icon' => 'assets/images/icons/2.png',
                'icon_bg' => 'bg-primary-opacity',
                'icon_alt' => 'Toolbox Icon',
                'title' => 'Only the Fields You Need',
                'description' => 'Choose exactly which order information goes to your spreadsheet — no clutter, no noise.',
            ],
            [
                'icon' => 'assets/images/icons/3.png',
                'icon_bg' => 'bg-secondary-opacity',
                'icon_alt' => 'Chart Icon',
                'title' => 'One Sheet per Supplier',
                'description' => 'Route orders to separate spreadsheets per supplier or product to streamline fulfilment.',
            ],
        ],
    ],

    'stats' => [
        'title_html' => 'Trusted to Keep <br> Order Data Flowing',
        'description' => "Merchants rely on OrderSheet to remove manual data entry from their day.\nPart of the WEBI suite by WebInnovate.",
        'items' => [
            ['count' => 10, 'suffix' => 'k', 'label' => 'Merchants using WEBI apps'],
            ['count' => 20, 'suffix' => '', 'label' => 'Countries supported'],
            ['count' => 4, 'suffix' => '', 'label' => 'Languages available'],
            ['count' => 7, 'suffix' => '', 'label' => 'Day free trial'],
        ],
    ],

    'features' => [
        'subtitle' => 'The Features',
        'title_html' => 'Everything You Need to Automate <br> Your Order Exports',
        'items' => [
            ['icon' => 'assets/images/icons/arrow.png', 'icon_bg' => 'bg-color-pink', 'title' => 'Automatic or Manual Export', 'description' => 'Let orders sync in real time, or export exactly when you want with one click.'],
            ['icon' => 'assets/images/icons/form.png', 'icon_bg' => 'bg-color-primary', 'title' => 'Only Relevant Fields', 'description' => 'Send only the order fields you care about to your spreadsheet.'],
            ['icon' => 'assets/images/icons/antibot.png', 'icon_bg' => 'bg-color-secondary', 'title' => 'Export by Filter / Option', 'description' => 'Filter which orders get exported by product, option or custom rules.'],
            ['icon' => 'assets/images/icons/google sheet.png', 'icon_bg' => 'bg-color-warning', 'title' => 'One Spreadsheet per Supplier', 'description' => 'Streamline supplier management with a separate sheet per supplier or product.'],
            ['icon' => 'assets/images/icons/earning.png', 'icon_bg' => 'bg-color-success', 'title' => 'Product Additional Options', 'description' => 'Export product additional options alongside every order line.'],
            ['icon' => 'assets/images/icons/recoverd.png', 'icon_bg' => 'bg-color-info', 'title' => 'Product-Options App Integrations', 'description' => 'Works with Bold, Globo, Hulk, Infinite Options and King Product Options.'],
        ],
    ],

    'testimonials' => [
        'subtitle' => 'Merchants Trust OrderSheet with Their Order Data',
        'title_html' => 'Rated 4.5 on the Shopify App Store — <br /> here is what merchants say about OrderSheet.',
        'rating_badge' => ['rating' => 4.5, 'count' => 14],
        'avatar' => 'assets/images/testimonial/shopify_glyph_black.png',
        'rows' => [
            [
                ['name' => "Molly's Bakehouse", 'country' => 'United Kingdom', 'text' => 'AutoSheets has been really helpful integrating KingProduct variables into our order system in google sheets. They devoted alot of time with us to make sure this was completed before our deadlines. I was also informed about the work they are doing behind the scenes to integrate more apps to the service which is really useful. Highly recommend', 'duration' => '4 days using the app'],
                ['name' => 'Bianca Jeswant', 'country' => 'India', 'text' => 'Very good. Syncs flawlessly and regularly. Had event asked for an integration with another Shopify app. That too, was done promptly and with absolutely no hassle. Would highly recommend!', 'duration' => 'About 2 months using the app'],
                ['name' => '5-hour Energy', 'country' => 'United States', 'text' => 'Delighted with this application! The developer collaborated with us to incorporate a new field containing discounts codes for each transaction, which was helpful for our monthly ROI analysis. This adjustment was swiftly executed mere hours after we submitted the feature request. Exceptional customer support.', 'duration' => '12 days using the app'],
            ],
        ],
    ],

    'faq' => [
        'title' => 'FAQ',
        'columns' => [
            [
                ['q' => 'How does OrderSheet send my orders to Google Sheets?', 'a' => 'Connect your Google account, pick a spreadsheet, and every new Shopify order is exported automatically in real time. You can also export manually whenever you want.'],
                ['q' => 'Can I choose which order fields are exported?', 'a' => 'Yes. You select exactly which fields go to your spreadsheet — customer info, line items, totals, discounts, product options and more.'],
                ['q' => 'Can I send different orders to different spreadsheets?', 'a' => 'Yes. You can export orders by filter or option and route them to a separate spreadsheet per supplier or per product.'],
            ],
            [
                ['q' => 'Does it work with product-options apps?', 'a' => 'Yes. OrderSheet integrates with Bold Product Options, Globo Product Options, Hulk Product Options, Infinite Options and King Product Options.'],
                ['q' => 'What languages does the app support?', 'a' => 'OrderSheet is available in English, Spanish, French and Arabic.'],
                ['q' => 'How does pricing work?', 'a' => 'One simple plan: $9.99/month for unlimited orders, with a 7-day free trial. Cancel anytime from your Shopify admin.'],
            ],
        ],
    ],

    'pricing' => [
        'subtitle' => 'ORDERSHEET PRICING',
        'title' => 'One Simple Plan',
        'billing_toggle' => false,
        'note' => 'All charges are billed in USD. Recurring charges are billed every 30 days. 7-day free trial.',
        'plans' => [
            [
                'title' => 'Unlimited',
                'monthly' => ['amount' => '$9.99', 'duration' => '/month'],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/ordersheet-auto-order-sync', 'style' => ''],
                'items' => ['Unlimited orders', 'Auto or Manual Orders Export', 'Export orders by custom filters', 'Multiple sheets per product(s)', 'Integrate With Product Options Apps', '7-day free trial'],
            ],
        ],
    ],

    'affiliate' => null,

    'blog' => [
        'subtitle' => 'FROM THE BLOG',
        'title' => 'Order Management Tips',
        'description' => 'Practical guides to automate order handling, work with suppliers, and run your Shopify back office on Google Sheets.',
    ],

    'languages' => ['English', 'Spanish', 'French', 'Arabic'],

    'footer' => [
        'description' => "Automatic Shopify order export to Google Sheets — organized, in real time.\nSay goodbye to manual data entry.",
        'useful_links' => [
            ['label' => 'Features', 'href' => '#features'],
            ['label' => 'Pricing', 'href' => '#pricing'],
            ['label' => 'FAQ', 'href' => '#faq'],
            ['label' => 'Privacy Policy', 'href' => '/ordersheet/privacy-policy'],
            ['label' => 'Terms of Service', 'href' => '/ordersheet/terms-of-service'],
            ['label' => 'Refund Policy', 'href' => '/ordersheet/refund-policy'],
        ],
        'support_links' => [
            ['label' => 'Contact Us', 'href' => 'https://wa.me/18198070658'],
            ['label' => 'Blog', 'href' => '/ordersheet/blog'],
            ['label' => 'About WebInnovate', 'href' => '/about'],
        ],
        'live_chat' => null,
        'copyright' => '© 2026 WebInnovate LLC. All Rights Reserved. | Built for Shopify',
    ],
];
