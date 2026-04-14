<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Database\Seeders\Concerns\ConvertsLeadformBlogMarkdown;
use Illuminate\Database\Seeder;

/**
 * Seeds blog posts 3–5 from database/seeders/leadform_cursor_seed_v2.md.
 * Run after {@see BlogPostSeeder} so articles 1–2 exist first.
 */
class LeadformCursorSeedV2Seeder extends Seeder
{
    use ConvertsLeadformBlogMarkdown;

    public function run(): void
    {
        BlogPost::updateOrCreate(['slug' => 'recover-abandoned-cod-orders-shopify'], [
            'title' => 'How to Recover Abandoned COD Orders on Shopify (And Turn Lost Sales Into Revenue)',
            'author_name' => 'LeadForm Team',
            'status' => 'published',
            'published_at' => '2025-04-28',
            'excerpt' => 'Every COD customer who fills in their phone number but doesn\'t complete the order is a warm lead you\'re leaving behind. Here\'s how LeadForm\'s automatic WhatsApp recovery turns abandoned orders into revenue — without manual follow-up.',
            'content' => $this->mdToHtml($this->blogBodyFromLeadformCursorSeedV2(3)),
            'alt_text' => 'How to recover abandoned COD orders on Shopify with WhatsApp automation',
            'seo_title' => 'How to Recover Abandoned COD Orders on Shopify (2025)',
            'meta_description' => 'Every COD order abandoned after the phone number field is money left on the table. Here\'s how to recover it automatically with WhatsApp — and the exact scripts that work.',
            'tags' => ['COD', 'abandoned orders', 'WhatsApp recovery', 'Shopify', 'lost sales', 'cart abandonment'],
            'featured_image' => null,
        ]);

        BlogPost::updateOrCreate(['slug' => 'quantity-offers-cod-shopify-aov'], [
            'title' => 'How Quantity Offers Increase Your COD Revenue Without Increasing Your Ad Spend',
            'author_name' => 'LeadForm Team',
            'status' => 'published',
            'published_at' => '2025-05-05',
            'excerpt' => 'Quantity discounts at checkout are one of the highest-ROI levers in COD ecommerce. Here\'s how to use them inside your order form to increase average order value — from the same traffic and the same ad spend.',
            'content' => $this->mdToHtml($this->blogBodyFromLeadformCursorSeedV2(4)),
            'alt_text' => 'Quantity discount offers in COD order form — increase average order value Shopify',
            'seo_title' => 'Quantity Offers for COD: Increase AOV Without More Ad Spend',
            'meta_description' => 'Quantity discounts are one of the highest-ROI features in COD ecommerce. Here\'s how to use them at checkout to increase average order value — without spending more on ads.',
            'tags' => ['COD', 'quantity discount', 'AOV', 'average order value', 'Shopify', 'bundles', 'upsell'],
            'featured_image' => null,
        ]);

        BlogPost::updateOrCreate(['slug' => 'cod-order-confirmation-process-shopify'], [
            'title' => 'Why Order Confirmation Is the Most Underrated Step in COD — And How to Do It Right',
            'author_name' => 'LeadForm Team',
            'status' => 'published',
            'published_at' => '2025-05-12',
            'excerpt' => 'Most COD merchants skip proper order confirmation and pay for it in returns. Here\'s why combining an automated WhatsApp summary with a human confirmation call is the system that reduces RTO and builds customer trust.',
            'content' => $this->mdToHtml($this->blogBodyFromLeadformCursorSeedV2(5)),
            'alt_text' => 'COD order confirmation process — WhatsApp summary and confirmation call script',
            'seo_title' => 'COD Order Confirmation: The System That Reduces Returns',
            'meta_description' => 'Most COD merchants skip proper order confirmation and pay for it in returns. Here\'s why a confirmation call + automated WhatsApp summary is the system that actually works.',
            'tags' => ['COD', 'order confirmation', 'RTO', 'WhatsApp', 'confirmation call', 'reduce returns', 'Shopify'],
            'featured_image' => null,
        ]);
    }
}
