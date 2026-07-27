<?php

/*
|--------------------------------------------------------------------------
| WEBI AI Landing Page Builder — app landing data
|--------------------------------------------------------------------------
| Rendered by resources/views/apps/landing.blade.php.
| NOTE: the rating badge (3.8 / 4 reviews) is intentionally NOT displayed —
| the review count is too low to help conversion. Testimonials lead instead.
*/

return [
    'slug' => 'landing-page-builder',
    'name' => 'WEBI AI Landing Page Builder',
    'display_name' => 'AI Landing Page Builder',
    'tag' => 'AI Page Builder',
    'portfolio_tagline' => 'Turn product photos or supplier URLs into high-converting, mobile-first landing pages with AI — in seconds.',
    'icon' => 'assets/images/apps/lpb-icon.png',
    'app_store_url' => 'https://apps.shopify.com/webi-landing-page-builder-cod',

    'accent' => ['from' => '#DB2777', 'to' => '#7C3AED'],
    'listing' => [
        'rating' => '3.8',
        'reviews' => 4,
        'price' => 'From $1/month',
    ],
    'highlights' => [
        'AI pages from a photo or URL',
        'A/B test generated variants',
        'Drag-and-drop refinements',
    ],

    'logo' => [
        'icon' => 'assets/images/apps/lpb-icon.png',
        'header_light' => 'assets/images/logo/1.svg',
        'header_dark' => 'assets/images/dark/1.svg',
        'footer_light' => 'assets/images/logo/3.svg',
        'footer_dark' => 'assets/images/dark/logo/3.svg',
        'link' => 'https://apps.shopify.com/webi-landing-page-builder-cod',
    ],

    'seo' => [
        'title' => 'WEBI AI Landing Page Builder — AI Landing Pages from Product Photos or Supplier URLs',
        'description' => 'Upload a product photo or paste a supplier URL — WEBI AI instantly generates a complete, mobile-first Shopify landing page with a built-in COD order form, A/B testing and one-click checkout. From $1/month, 7-day free trial.',
        'og_image' => 'assets/images/apps/lpb-screenshot-1.png',
    ],

    'jsonld' => [
        'name' => 'WEBI AI Landing Page Builder',
        'description' => 'AI landing page builder for Shopify: generate complete, mobile-first landing pages from product photos or supplier URLs, with built-in COD order form, A/B testing and one-click checkout.',
        'category' => 'BusinessApplication',
        'price' => '1',
        'currency' => 'USD',
    ],

    'nav' => [
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Blog', 'href' => '#blog'],
        ['label' => 'Faq', 'href' => '#faq'],
        ['label' => 'Pricing', 'href' => '#pricing'],
    ],

    'header_cta' => ['label' => 'Install on Shopify', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod'],

    'hero' => [
        'variant' => 'media',
        'badge' => 'WEBI · AI Page Builder',
        'title' => 'Turn product photos or supplier URLs into high-converting landing pages with AI',
        'description' => "Upload a product photo or paste a product URL you're authorized to sell — our AI instantly generates a complete, mobile-first landing page. In seconds.",
        'cta' => ['label' => 'Install on Shopify', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod'],
        'secondary_cta' => ['label' => 'Talk to us on WhatsApp', 'url' => 'https://wa.me/18198070658'],
        'media' => ['image' => 'assets/images/apps/lpb-screenshot-1.png', 'alt' => 'WEBI AI Landing Page Builder generating a landing page from a product photo'],
    ],

    'trust_logos' => null,

    'demo' => [
        'type' => 'image',
        'image' => ['src' => 'assets/images/apps/lpb-screenshot-2.png', 'alt' => 'WEBI AI Landing Page Builder editor with drag-and-drop image builder'],
        'subtitle_html' => '<span class="theme-gradient">AI Landing Page Builder</span>',
        'title' => 'From Product Photo to Published Page in Seconds',
        'value_props' => [
            [
                'icon' => 'assets/images/icons/1.png',
                'icon_bg' => 'bg-pink-opacity',
                'icon_alt' => 'Rocket Icon',
                'title' => 'AI Does the Heavy Lifting',
                'description' => 'Upload a photo or paste a supplier URL — the AI writes, designs and structures a complete landing page for you.',
            ],
            [
                'icon' => 'assets/images/icons/2.png',
                'icon_bg' => 'bg-primary-opacity',
                'icon_alt' => 'Toolbox Icon',
                'title' => 'Built-In COD Order Form',
                'description' => 'Capture orders directly on the page with the integrated WEBI LeadForm COD form — no extra apps needed.',
            ],
            [
                'icon' => 'assets/images/icons/3.png',
                'icon_bg' => 'bg-secondary-opacity',
                'icon_alt' => 'Chart Icon',
                'title' => 'Test, Learn, Convert More',
                'description' => 'Run A/B tests across multiple AI-generated versions and keep the page that converts best.',
            ],
        ],
    ],

    'stats' => [
        'title_html' => 'Built by the Team Behind <br> the WEBI COD Suite',
        'description' => "The same studio trusted by thousands of COD merchants with LeadForm.\nOur numbers speak louder than words.",
        'items' => [
            ['count' => 10, 'suffix' => 'k', 'label' => 'Merchants using WEBI apps'],
            ['count' => 20, 'suffix' => '', 'label' => 'Countries supported'],
            ['count' => 10, 'suffix' => 'M', 'label' => 'COD orders processed'],
            ['count' => 7, 'suffix' => '', 'label' => 'Day free trial'],
        ],
    ],

    'features' => [
        'subtitle' => 'The Features',
        'title_html' => 'Everything You Need to Launch <br> Pages That Convert',
        'items' => [
            ['icon' => 'assets/images/icons/001-bulb.png', 'icon_bg' => 'bg-color-pink', 'title' => 'AI Pages from Product Photos', 'description' => 'Upload a product photo and get a complete, ready-to-publish landing page generated by AI.'],
            ['icon' => 'assets/images/icons/arrow.png', 'icon_bg' => 'bg-color-primary', 'title' => 'Pages from Supplier URLs', 'description' => 'Paste a supplier or AliExpress URL you are authorized to sell and turn it into a full landing page in seconds.'],
            ['icon' => 'assets/images/icons/form.png', 'icon_bg' => 'bg-color-secondary', 'title' => 'Built-In COD Order Form', 'description' => 'Capture cash-on-delivery orders with the integrated form powered by WEBI LeadForm.'],
            ['icon' => 'assets/images/icons/pixel.png', 'icon_bg' => 'bg-color-warning', 'title' => 'A/B Testing', 'description' => 'Generate multiple AI versions of your page and split-test them to find the winner.'],
            ['icon' => 'assets/images/icons/002-hat.png', 'icon_bg' => 'bg-color-success', 'title' => 'Drag-and-Drop Image Builder', 'description' => 'Refine any AI-generated design with a simple drag-and-drop builder — no coding required.'],
            ['icon' => 'assets/images/icons/earning.png', 'icon_bg' => 'bg-color-info', 'title' => 'One-Click Shopify Checkout', 'description' => 'Send shoppers straight to a one-click Shopify checkout, or take COD orders on the page.'],
            ['icon' => 'assets/images/icons/3.png', 'icon_bg' => 'bg-color-pink', 'title' => 'Mobile-Optimized & SEO-Ready', 'description' => 'Every page is mobile-first, fast, and SEO-ready out of the box for higher conversions.'],
        ],
    ],

    'testimonials' => [
        'subtitle' => 'Merchants Are Already Converting More with AI Pages',
        'title_html' => 'Real stores, real results — <br /> from AliExpress URL to a full landing page in seconds.',
        'rating_badge' => null,
        'avatar' => 'assets/images/testimonial/shopify_glyph_black.png',
        'rows' => [
            [
                ['name' => 'dontpanic', 'country' => 'United States', 'text' => "Wallah hadi khir app l landing pages li jarrabt l COD. Ki kont navant nkhalas designer 30-50\$ 3la kol page w nestena 2-3 yyam. Daba ndir copy-paste l URL ta3 AliExpress w l'IA t9ad la page kamla f thanya. Conversion ta3i 7tal men 1.4% l plus de 3% 3la l akhir winning product.", 'duration' => '4 months using the app'],
                ['name' => 'Protect Pro', 'country' => 'Algeria', 'text' => 'got great support from aya (the marocain support team) appreciated, was very helpful and kind', 'duration' => '3 days using the app'],
            ],
        ],
    ],

    'faq' => [
        'title' => 'FAQ',
        'columns' => [
            [
                ['q' => 'How does the AI generate a landing page?', 'a' => "Upload a product photo or paste a product URL you're authorized to sell. The AI analyzes it and instantly builds a complete, mobile-first landing page — copy, layout and images included."],
                ['q' => 'Can I edit the pages the AI creates?', 'a' => 'Yes. Every AI-generated page can be refined with the drag-and-drop image builder — change images, sections and text without any coding.'],
                ['q' => 'How do customers order from my landing page?', 'a' => 'You choose: capture cash-on-delivery orders with the built-in COD form (powered by WEBI LeadForm), or send shoppers to a one-click Shopify checkout.'],
                ['q' => 'Can I import products from AliExpress?', 'a' => 'Yes. All plans include AliExpress imports — paste a supplier URL for a product you are authorized to sell and the AI turns it into a full landing page.'],
            ],
            [
                ['q' => 'How does pricing work?', 'a' => 'Plans start at $1/month for 1 landing page, up to $19.99/month for unlimited pages. Every plan comes with a 7-day free trial. AI generation is pay-as-you-go via credit top-ups.'],
                ['q' => 'What are AI credits?', 'a' => 'AI landing page generation is pay-as-you-go: you buy credit top-ups separately and spend them each time the AI generates a page, so you only pay for what you use.'],
                ['q' => 'Does A/B testing come with every plan?', 'a' => 'Yes. All plans include A/B testing for AI-generated pages, plus advanced analytics and export.'],
                ['q' => 'Can I cancel anytime?', 'a' => 'Yes. There are no long-term commitments — you can cancel or change your plan at any time from your Shopify admin.'],
            ],
        ],
    ],

    'pricing' => [
        'subtitle' => 'AI LANDING PAGE BUILDER PRICING',
        'title' => 'Choose Your Plan',
        'billing_toggle' => false,
        'note' => 'All plans include AliExpress imports, advanced analytics & export, and A/B testing. AI generation is pay-as-you-go via credit top-ups. All charges are billed in USD every 30 days. 7-day free trial.',
        'plans' => [
            [
                'title' => 'Starter',
                'monthly' => ['amount' => '$1', 'duration' => '/month'],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['1 landing page', 'AliExpress imports', 'Advanced analytics & export', 'A/B testing for AI-generated pages', '7-day free trial'],
            ],
            [
                'title' => 'Basic',
                'monthly' => ['amount' => '$4.99', 'duration' => '/month'],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['Up to 10 landing pages', 'AliExpress imports', 'Advanced analytics & export', 'A/B testing for AI-generated pages', '7-day free trial'],
            ],
            [
                'title' => 'Growth',
                'monthly' => ['amount' => '$9.99', 'duration' => '/month'],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod', 'style' => ''],
                'items' => ['Up to 25 landing pages', 'AliExpress imports', 'Advanced analytics & export', 'A/B testing for AI-generated pages', '7-day free trial'],
            ],
            [
                'title' => 'Enterprise',
                'monthly' => ['amount' => '$19.99', 'duration' => '/month'],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/webi-landing-page-builder-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['Unlimited published landing pages', 'Priority chat', 'AliExpress imports', 'Advanced analytics & export', 'A/B testing for AI-generated pages'],
            ],
        ],
    ],

    'affiliate' => null,

    'blog' => [
        'subtitle' => 'FROM THE BLOG',
        'title' => 'Landing Page & CRO Tips',
        'description' => 'Strategies to build pages that convert, test faster with AI, and grow your e-commerce store on Shopify.',
    ],

    'languages' => null,

    'footer' => [
        'description' => "AI-generated, mobile-first landing pages for Shopify — with a built-in COD order form.\nFrom product photo to published page in seconds.",
        'useful_links' => [
            ['label' => 'Features', 'href' => '#features'],
            ['label' => 'Pricing', 'href' => '#pricing'],
            ['label' => 'FAQ', 'href' => '#faq'],
            ['label' => 'Privacy Policy', 'href' => '/landing-page-builder/privacy-policy'],
            ['label' => 'Terms of Service', 'href' => '/landing-page-builder/terms-of-service'],
            ['label' => 'Refund Policy', 'href' => '/landing-page-builder/refund-policy'],
        ],
        'support_links' => [
            ['label' => 'Contact Us', 'href' => 'https://wa.me/18198070658'],
            ['label' => 'Blog', 'href' => '/landing-page-builder/blog'],
            ['label' => 'About WebInnovate', 'href' => '/about'],
        ],
        'live_chat' => null,
        'copyright' => '© 2026 WebInnovate LLC. All Rights Reserved. | Built for Shopify',
    ],
];
