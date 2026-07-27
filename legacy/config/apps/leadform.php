<?php

/*
|--------------------------------------------------------------------------
| WEBI LeadForm — app landing data
|--------------------------------------------------------------------------
| Content extracted verbatim from the original /leadform page.
| The landing template (resources/views/apps/landing.blade.php) renders
| every WEBI app from a file like this one.
*/

return [
    'slug' => 'leadform',
    'name' => 'WEBI LeadForm',
    'display_name' => 'LeadForm',
    'tag' => 'COD Order Form',
    'portfolio_tagline' => 'Fully customized COD order form with 10+ apps in one — upsells, pixels, Google Sheets, WhatsApp & more.',
    'icon' => 'assets/images/apps/leadform-icon.png',
    'app_store_url' => 'https://apps.shopify.com/leadform-cod',

    // Brand accent used by the corporate site to colour this app's card and
    // illustration. Kept close to the App Store icon's gradient.
    'accent' => ['from' => '#A21CAF', 'to' => '#E11D8F'],
    // Shopify App Store listing figures, shown as social proof on the homepage.
    'listing' => [
        'rating' => '4.8',
        'reviews' => 93,
        'price' => 'Free plan available',
    ],
    'highlights' => [
        'One-page COD checkout',
        'Upsells & quantity offers',
        'Pixels, Sheets & WhatsApp',
    ],

    'logo' => [
        'header_light' => 'assets/images/logo/1.svg',
        'header_dark' => 'assets/images/dark/1.svg',
        'footer_light' => 'assets/images/logo/3.svg',
        'footer_dark' => 'assets/images/dark/logo/3.svg',
        'link' => 'https://apps.shopify.com/leadform-cod',
    ],

    'seo' => [
        'title' => 'WEBI ‑ LeadForm Order Form COD Fully customized COD Form with 10+ Apps in One',
        'description' => 'LeadForm is the all-in-one Shopify COD order form: one-click checkout, upsells & bundles, Google Sheets sync, WhatsApp recovery, multi-pixel tracking and fraud protection. Start your free trial.',
    ],

    'jsonld' => [
        'name' => 'WEBI LeadForm — COD Order Form',
        'description' => 'Fully customized cash-on-delivery order form for Shopify with upsells, Google Sheets sync, WhatsApp abandoned checkout recovery, multi-pixel tracking and fraud protection.',
        'category' => 'BusinessApplication',
        'price' => '0',
        'currency' => 'USD',
    ],

    'nav' => [
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Blog', 'href' => '#blog'],
        ['label' => 'Faq', 'href' => '#faq'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Become An Affiliate', 'href' => '#affiliate'],
    ],

    'header_cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/leadform-cod'],

    'hero' => [
        'variant' => 'world',
        'avatars' => [
            ['image' => 'assets/images/shape/PNGLOGO-PINK-BG copy 3.png', 'tooltip' => 'LeadForm'],
            ['image' => 'assets/images/shape/shopify_glyph_black.png', 'tooltip' => 'Shopify'],
        ],
        'title_line_1' => 'Fully customized',
        'title_line_2' => 'COD Form With',
        'title_line_3' => '10+ Apps in One:',
        'subtitle' => 'Form, Upsells, Pixels, G.sheets, Whatsapp & mores',
        'description' => 'easily create a cash on delivery form that will allow you to generate leads easily and in a few clicks that will allow you to increase your conversion rate.',
        'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/leadform-cod'],
        'secondary_cta' => null,
        'flags' => [
            ['image' => 'assets/images/shape/italy.png', 'tooltip' => 'Italy'],
            ['image' => 'assets/images/shape/morocco.png', 'tooltip' => 'Maroc'],
            ['image' => 'assets/images/shape/spain.png', 'tooltip' => 'Espagne'],
            ['image' => 'assets/images/shape/algeria.png', 'tooltip' => 'Algerie'],
            ['image' => 'assets/images/shape/colombia.png', 'tooltip' => 'Colombie'],
            ['image' => 'assets/images/shape/saudi-arabia.png', 'tooltip' => 'Saudia'],
            ['image' => 'assets/images/shape/flag.png', 'tooltip' => "Cote d'ivoire"],
            ['image' => 'assets/images/shape/tunisia.png', 'tooltip' => 'Tunisie '],
            ['image' => 'assets/images/shape/philippines.png', 'tooltip' => 'Philippines'],
            ['image' => 'assets/images/shape/peru.png', 'tooltip' => 'Peru'],
            ['image' => 'assets/images/shape/romania.png', 'tooltip' => 'Roumanie'],
        ],
    ],

    'trust_logos' => [
        'heading_html' => '<span class="theme-gradient">Join</span> Successful <span class="theme-gradient">Merchants</span> like',
        'items' => [
            ['image' => 'assets/images/brand/LOGO_MAISON_AYLA_AVEC_PICTO_2.png', 'url' => 'https://www.maisonayla.ma'],
            ['image' => 'assets/images/brand/Design sans titre(1).png', 'url' => 'https://emelle.ma/'],
            ['image' => 'assets/images/brand/Auconfort_Logo.png', 'url' => 'https://auconfort.shop/'],
            ['image' => 'assets/images/brand/grasse_1.avif', 'url' => 'https://grasseparfumerie.fr/'],
            ['image' => 'assets/images/brand/58307711-0e53-4f88-88dc-283b02783a0b-logo-siv.png', 'url' => 'https://www.siv.army/'],
            ['image' => 'assets/images/brand/Capture_d_ecran_2024-11-21_a_17.46.13.png', 'url' => 'https://parlons-tendance.shop/'],
        ],
    ],

    'demo' => [
        'type' => 'video',
        'video_sources' => [
            ['src' => 'assets/videos/leadform-demo1.mp4', 'type' => 'video/mp4'],
            ['src' => 'assets/videos/leadform-demo.webm', 'type' => 'video/webm'],
            ['src' => 'assets/videos/leadform-demo.ogg', 'type' => 'video/ogg'],
        ],
        'subtitle_html' => '<span class="theme-gradient">LeadForm</span>',
        'title' => 'Increase Your COD Business',
        'value_props' => [
            [
                'icon' => 'assets/images/icons/1.png',
                'icon_bg' => 'bg-pink-opacity',
                'icon_alt' => 'Rocket Icon',
                'title' => ' Smooth Experience, Higher Conversions',
                'description' => 'Designed for one-click checkout, LeadForm makes ordering fast and effortless.',
            ],
            [
                'icon' => 'assets/images/icons/2.png',
                'icon_bg' => 'bg-primary-opacity',
                'icon_alt' => 'Toolbox Icon',
                'title' => 'All Your Tools in One',
                'description' => 'From Google Sheets to WhatsApp and multi-pixel tracking, manage everything without installing many different apps.',
            ],
            [
                'icon' => 'assets/images/icons/3.png',
                'icon_bg' => 'bg-secondary-opacity',
                'icon_alt' => 'Chart Icon',
                'title' => 'Maximize Every Order',
                'description' => 'Upsells, bundles, and abandoned order recovery help you squeeze the most revenue out of every single lead.',
            ],
        ],
    ],

    'stats' => [
        'title_html' => 'We Hear Your Needs <br> We Help You Sell More',
        'description' => "Thousands of merchants trust LeadForm to scale their cash-on-delivery business.\nOur numbers speak louder than words.",
        'items' => [
            ['count' => 10, 'suffix' => 'k', 'label' => 'Stores using LeadForm'],
            ['count' => 20, 'suffix' => '', 'label' => 'Countries supported'],
            ['count' => 30, 'suffix' => '%', 'label' => 'conversion rate'],
            ['count' => 10, 'suffix' => 'M', 'label' => 'COD orders processed'],
        ],
    ],

    'features' => [
        'subtitle' => 'The Practice',
        'title_html' => 'All-in-One Features to Scale <br> Your COD Business',
        'items' => [
            ['icon' => 'assets/images/icons/form.png', 'icon_bg' => 'bg-color-pink', 'title' => 'One-Click COD Form', 'description' => 'A fast, mobile-optimized checkout built for higher conversions.'],
            ['icon' => 'assets/images/icons/google sheet.png', 'icon_bg' => 'bg-color-primary', 'title' => 'Google Sheets Sync', 'description' => 'Automatically send all orders to Google Sheets in real time.'],
            ['icon' => 'assets/images/icons/pixel.png', 'icon_bg' => 'bg-color-secondary', 'title' => 'Multi-Pixel Tracking', 'description' => 'Track every order on Facebook, TikTok & Snapchat without extra apps.'],
            ['icon' => 'assets/images/icons/earning.png', 'icon_bg' => 'bg-color-warning', 'title' => 'Upsells & Bundles', 'description' => 'Boost your average order value with quantity offers and add-ons.'],
            ['icon' => 'assets/images/icons/recoverd.png', 'icon_bg' => 'bg-color-success', 'title' => 'Abandoned Order Recovery', 'description' => 'Recover lost leads with WhatsApp reminders & smart follow-ups.'],
            ['icon' => 'assets/images/icons/antibot.png', 'icon_bg' => 'bg-color-info', 'title' => 'Fraud Prevention', 'description' => 'Block fake orders and protect your business with advanced filters.'],
        ],
    ],

    'testimonials' => [
        'subtitle' => 'Merchants Trust LeadForm to Power Their COD Sales',
        'title_html' => ' From small shops to high-volume stores, <br /> thousands of e-commerce merchants rely on LeadForm to simplify COD and maximize results!',
        'rating_badge' => null,
        'avatar' => 'assets/images/testimonial/shopify_glyph_black.png',
        'rows' => [
            [
                ['name' => 'Auconfort', 'country' => 'Algeria', 'text' => "Outstanding App & Support—Special Thanks to Samy\n\nI've been using LeadForm since I launched my Shopify store, and it's been flawless—fast, stable, and extremely useful.\n\nWhat truly sets it apart is the support. A huge thank you to Samy, who helped me every step of the way—even during his vacation. That kind of dedication is rare and deeply appreciated.\n\nI recommend this app to anyone doing COD. It's truly exceptional and has transformed our business operations completely.", 'duration' => 'Almost 2 years using the app'],
                ['name' => 'Green Vibe Market ', 'country' => 'United States', 'text' => "We're an eco-friendly shop on Shopify, and LeadForm COD has become essential for managing our Cash on Delivery orders. The lead form system is intuitive, seamless, and captures all the necessary info no hassle, no confusion. The integration with our existing workflow has been seamless, and the customer support team has been incredibly helpful throughout our journey.", 'duration' => '3 months using the app'],
                ['name' => 'Urban Avenue ', 'country' => 'Algeria', 'text' => "La meilleure application LEADFORM COD, que j'utilise pour ne nombreuses boutiques.\nLe support est très réactif et plus même, j'ai eu un problème technique avec le code de mon site (en pensant que c'était à cause de l'application en vrai, pas du tout), l'intervention du support a réglé, modifier et suggérer un nouveau et meilleure thème, qu'on utilise jusqu'à ce jour-ci et gratuitement en plus !\nDZ♥MA", 'duration' => 'About 1 year using the app'],
                ['name' => ' DriZenlab ', 'country' => 'France', 'text' => "Good app and Amazing support! I had a technical issue integrating the form with my theme, and Abdellahe from the support team went above and beyond to help me fix it. He was fast, professional, and very kind. Now everything works perfectly, and I'm really impressed with the service. Highly recommend this app for anyone doing COD in their store!", 'duration' => '4 days using the app'],
                ['name' => 'petooboutique ', 'country' => 'Algeria', 'text' => "i've been using leadform cod since 2 years it wroks very well and they have a great support team and a good manager, it helped me a lot with my buissnes. The app has been instrumental in streamlining our operations and improving customer satisfaction.", 'duration' => 'Over 1 year using the app'],
                ['name' => 'Steelious', 'country' => 'Algeria', 'text' => "Great App and Great people Working on it especially Sami , Great guy , He helped me alot to understand this app more , one of the best customer support i've worked with , A great team !!", 'duration' => '7 months using the app'],
                ['name' => 'OLIVIE', 'country' => 'Algeria', 'text' => "J'utilise cette application depuis un moment et je la trouve vraiment bien conçue. L'interface est fluide, intuitive, et les fonctionnalités sont à la hauteur de mes attentes. Elle m'aide au quotidien et répond parfaitement à mes besoins.\n\nUn grand bravo également au service d'assistance à distance : ils sont très réactifs, professionnels et toujours prêts à aider rapidement. Un vrai plus qui fait vraiment la différence dans notre quotidien.", 'duration' => 'About 2 months using the app'],
                ['name' => ' Truc dz ', 'country' => 'Algeria', 'text' => "I sincerely want to thank the support agent Sami for his exceptional help. I had been looking for assistance, and when he came, he was incredibly patient and polite. He spent over an hour with me on a WhatsApp call, using Apple video sharing to guide me step by step until all my issues were resolved. I'm truly grateful for his professionalism and support. Thank you so much!", 'duration' => '11 months using the app'],
                ['name' => ' BASTA TOOLS ', 'country' => 'Algeria', 'text' => "Application très pratique et fluide.\nNous utilisons Lead Form en Algérie pour notre boutique en ligne en paiement à la livraison (COD), et cela nous a beaucoup facilité la gestion des commandes et la qualification des clients.\n\nLe support technique est très réactif — un grand merci à SAMI pour son accompagnement étape par étape, et à toute l'équipe pour leur professionnalisme. Grâce à eux, nous avons pu configurer l'application rapidement sans aucun blocage.\n\nJe recommande fortement cette application à tous les e-commerçants qui travaillent en COD.\nContinuez comme ça", 'duration' => '12 months using the app'],
            ],
            [
                ['name' => 'Ramartista', 'country' => 'Algeria', 'text' => "J'utilise LeadForm COD depuis presque une année. j'aime bien l'application et elle est trop utile pour mon store.\nAprès la dernière MAJ, j'ai eu un soucis à connecter mon Sheet. J'ai contacté le support, et ils ont résolu mon problème de suite. Je tiens à féliciter Sami en particulier pour son professionnalisme.\nBravo!", 'duration' => '10 months using the app'],
                ['name' => ' living simple ', 'country' => 'Morocco', 'text' => "après l'utilisation d'un an et plus je suis très satisfait\nMerci LeadForm Order COD Form. L'application a vraiment transformé notre façon de gérer les commandes et amélioré significativement notre taux de conversion.", 'duration' => '12 months using the app'],
                ['name' => 'MSMODA', 'country' => 'Algeria', 'text' => "i've been using this app since i started my shopify store ( 2 years ago ) , amazing app with amazing support team , it helped me alot to grow my business. The features are exactly what we needed to scale our operations efficiently.", 'duration' => 'About 1 year using the app'],
                ['name' => ' Wi Oui ', 'country' => 'United Kingdom', 'text' => "support team always active and attentive to customer expectations, plus they have a lot of development in the near future in their application.\nthe ip block option to counter fake orders is available now, it's really great, you have nothing to fear against fake commands. The continuous improvements and new features keep making the app even better.", 'duration' => 'Over 2 years using the app'],
                ['name' => ' Delivery Uganda ', 'country' => 'China', 'text' => "It works well, good service and quick actions. The app has been reliable and the support team responds quickly to any issues we encounter.", 'duration' => 'Almost 4 years using the app'],
                ['name' => ' My Store 02 ', 'country' => 'Algeria', 'text' => "application top du top et un trés bon service client ;le support est tout active abdellahe prend le temps de bien m'expliquer a chaque fois et de régler mes problème vraiment top. Je recommande vivement cette application à tous les e-commerçants.", 'duration' => '7 months using the app'],
                ['name' => 'Nutrirare', 'country' => 'Algeria', 'text' => "Une application au top, offrant des commandes rapides et sans souci, avec un support exceptionnel toujours disponible pour répondre à toutes les questions. Vous êtes les meilleurs ! L'interface est intuitive et les fonctionnalités répondent parfaitement à nos besoins.", 'duration' => 'About 1 month using the app'],
                ['name' => 'OnlineDz', 'country' => 'Algeria', 'text' => "Hello,\nThis app is incredibly intuitive and simple to navigate, making it a breeze to accomplish tasks efficiently. I would definitely recommend it, particularly for its excellent customer service. Also the support service is helpful so much. The integration with our existing systems has been seamless.", 'duration' => 'Over 2 years using the app'],
                ['name' => 'AHTmarket', 'country' => 'Algeria', 'text' => "Application très utile avec un support a l'écoute surtout omar qui m'a beaucoup aidé tout au long de l'utilisation de l'application avec des conseils en or et des vidéos explicative meme a des heures tardive , je recommande vivement , merci omar. L'application a vraiment transformé notre business.", 'duration' => 'About 2 years using the app'],
            ],
        ],
    ],

    'faq' => [
        'title' => 'FAQ',
        'columns' => [
            [
                ['q' => 'What is LeadForm and how does it work?', 'a' => 'LeadForm is a Shopify app designed for COD stores. It replaces the standard checkout with a high-converting order form that includes upsells, bundles, pixel tracking, and more.'],
                ['q' => 'Do I need coding skills to set it up?', 'a' => 'No coding required. LeadForm installs in one click and is fully customizable directly inside your Shopify admin.'],
                ['q' => 'Can I integrate LeadForm with other tools?', 'a' => 'Yes! It integrates with Google Sheets, WhatsApp, and supports multi-pixel tracking (Facebook, TikTok, Snapchat, etc.).'],
                ['q' => 'Will LeadForm really help me increase sales?', 'a' => 'Yes. Merchants using LeadForm report up to 30% higher conversions and a significant boost in average order value thanks to upsells and abandoned order recovery.'],
            ],
            [
                ['q' => 'Does LeadForm work on mobile?', 'a' => 'Absolutely. The form is fully optimized for mobile users, ensuring a smooth experience and higher conversions.'],
                ['q' => 'How does pricing work?', 'a' => 'We offer flexible pricing plans for every stage of growth. Start with a free trial, then upgrade as your store scales.'],
                ['q' => 'Can I cancel anytime?', 'a' => 'Yes. There are no long-term commitments — you can cancel or change your plan at any time.'],
                ['q' => 'Do you provide customer support?', 'a' => "Of course! Our support team is available via live chat and email. We're here to listen to your needs and help you get the best results from LeadForm."],
            ],
        ],
    ],

    'pricing' => [
        'subtitle' => 'LEADFORM PRICING',
        'title' => 'Choose Your Plan',
        'billing_toggle' => true,
        'note' => 'All charges are billed in USD. Recurring and usage-based charges are billed every 30 days.',
        'plans' => [
            [
                'title' => 'Free',
                'monthly' => ['amount' => 'Free', 'duration' => ''],
                'yearly' => ['amount' => 'Free', 'duration' => ''],
                'cta' => ['label' => 'Start Free Trial', 'url' => 'https://apps.shopify.com/leadform-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['60 Orders/mo', 'Google Sheets Synchronisation', 'Upsells & Bundles', 'Whatsapp abandoned checkouts', 'Shipping rates', 'Multi-Pixels', 'Anti-Spam Fake Order Protection', '24/7 support'],
            ],
            [
                'title' => 'Unlimited',
                'monthly' => ['amount' => '$9.99', 'duration' => '/month'],
                'yearly' => ['amount' => '$99', 'duration' => '/year and save 17%'],
                'cta' => ['label' => 'Start Now', 'url' => 'https://apps.shopify.com/leadform-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['440 Orders/mo', 'Google Sheets Synchronisation', 'Upsells & Bundles', 'Whatsapp abandoned checkouts', 'Shipping rates', 'Multi-Pixels', 'Anti-Spam Fake Order Protection', '24/7 support'],
            ],
            [
                'title' => 'Unlimited',
                'monthly' => ['amount' => '$24.99', 'duration' => '/month'],
                'yearly' => ['amount' => '$249', 'duration' => '/year and save 17%'],
                'cta' => ['label' => 'Start Now', 'url' => 'https://apps.shopify.com/leadform-cod', 'style' => ''],
                'items' => ['Unlimited orders', 'Google Sheets Synchronisation', 'Upsells & Bundles', 'Whatsapp abandoned checkouts', 'Shipping rates', 'Multi-Pixels', 'Anti-Spam Fake Order Protection', '24/7 support'],
            ],
            [
                'title' => 'Market',
                'monthly' => ['amount' => '$99.99', 'duration' => '/month'],
                'yearly' => ['amount' => '$999.99', 'duration' => '/year and save 17%'],
                'cta' => ['label' => 'Start Now', 'url' => 'https://apps.shopify.com/leadform-cod', 'style' => 'bg-primary-opacity'],
                'items' => ['Multiple Markets', 'G.Sheets Sync (Order & abandoned order)', 'Upsells & bundles', 'Whatsapp abandoned checkouts', 'Shipping rates', 'Multi-Pixels', 'Anti-Spam Fake Order Protection', '24/7 support'],
            ],
        ],
    ],

    'affiliate' => [
        'title' => 'Become a partner',
        'headline_html' => 'Join our <span class="highlight-yellow">30%</span> <span class="highlight-orange">lifetime</span><br> commission program',
        'benefits' => ['Full Transparency', 'Passive income', 'Lifetime commission', '30-day attribution'],
        'description_lines' => [
            'Every COD store you refer means recurring monthly income.',
            'Turn your network into a predictable revenue stream with Leadform.',
        ],
        'cta' => ['label' => 'Join now', 'url' => 'https://platform.shoffi.app/signup/affiliate?app=Gl_aqvi4vT4'],
    ],

    'blog' => [
        'subtitle' => 'FROM THE BLOG',
        'title' => 'COD Tips & Best Practices',
        'description' => 'Proven strategies to increase conversions, optimize your order form, and grow your COD store on Shopify.',
    ],

    'languages' => null,

    'footer' => [
        'description' => "The all-in-one COD order form trusted by thousands of Shopify merchants.\nSimplify checkout, boost conversions, and scale your business.",
        'useful_links' => [
            ['label' => 'Features', 'href' => '#features'],
            ['label' => 'Pricing', 'href' => '#pricing'],
            ['label' => 'FAQ', 'href' => '#faq'],
            ['label' => 'Privacy Policy', 'href' => '/leadform/privacy-policy'],
            ['label' => 'Terms of Service', 'href' => '/leadform/terms-of-service'],
            ['label' => 'Refund Policy', 'href' => '/leadform/refund-policy'],
        ],
        'support_links' => [
            ['label' => 'Contact Us', 'href' => 'https://wa.me/18198070658'],
            ['label' => 'Help Center', 'href' => 'https://webinnovate-leadform.crisp.help/en/'],
            ['label' => 'Request a Feature', 'href' => '/leadform/feature-request'],
            ['label' => 'Become an Affiliate', 'href' => '#affiliate'],
            ['label' => 'About LeadForm', 'href' => '/leadform/about-us'],
        ],
        'live_chat' => ['label' => 'Available inside the app (Crisp)', 'url' => 'https://leadform.crisp.help/en/'],
        'copyright' => '© 2025 LeadForm. All Rights Reserved. | Built for Shopify',
    ],
];
