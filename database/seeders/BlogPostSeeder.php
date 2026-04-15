<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Minimal markdown → basic HTML converter.
     * Supports: headings (#/##/###), paragraphs, unordered lists (- ...), and **bold**.
     */
    private function mdToHtml(string $md): string
    {
        $lines = preg_split('/\\R/u', trim($md)) ?: [];

        $html = [];
        $inList = false;
        $paragraph = [];

        $flushParagraph = function () use (&$html, &$paragraph) {
            if ($paragraph === []) {
                return;
            }

            $text = trim(implode(' ', $paragraph));
            $text = preg_replace('/\\*\\*(.+?)\\*\\*/u', '<strong>$1</strong>', $text) ?? $text;
            $html[] = '<p>'.$text.'</p>';
            $paragraph = [];
        };

        $closeList = function () use (&$html, &$inList) {
            if (! $inList) {
                return;
            }

            $html[] = '</ul>';
            $inList = false;
        };

        foreach ($lines as $raw) {
            $line = trim($raw);

            if ($line === '' || $line === '---') {
                $flushParagraph();
                $closeList();

                continue;
            }

            if (str_starts_with($line, '### ')) {
                $flushParagraph();
                $closeList();
                $title = trim(substr($line, 4));
                $title = preg_replace('/\\*\\*(.+?)\\*\\*/u', '<strong>$1</strong>', $title) ?? $title;
                $html[] = '<h3>'.$title.'</h3>';

                continue;
            }

            if (str_starts_with($line, '## ') || str_starts_with($line, '# ')) {
                $flushParagraph();
                $closeList();
                $title = str_starts_with($line, '## ') ? trim(substr($line, 3)) : trim(substr($line, 2));
                $title = preg_replace('/\\*\\*(.+?)\\*\\*/u', '<strong>$1</strong>', $title) ?? $title;
                $html[] = '<h2>'.$title.'</h2>';

                continue;
            }

            if (str_starts_with($line, '- ')) {
                $flushParagraph();
                if (! $inList) {
                    $html[] = '<ul>';
                    $inList = true;
                }
                $item = trim(substr($line, 2));
                $item = preg_replace('/\\*\\*(.+?)\\*\\*|\\*(.+?)\\*/u', '<strong>$1$2</strong>', $item) ?? $item;
                $html[] = '<li>'.$item.'</li>';

                continue;
            }

            // Strip surrounding emphasis markers if present, but keep as plain paragraph.
            if (str_starts_with($line, '*') && str_ends_with($line, '*') && strlen($line) > 2) {
                $line = trim($line, '*');
            }

            $paragraph[] = $line;
        }

        $flushParagraph();
        $closeList();

        return implode("\n", $html);
    }

    private function parseArticle(string $seedFile, int $articleNumber): array
    {
        $path = database_path('seeders/'.$seedFile);
        $raw = @file_get_contents($path);
        if ($raw === false || $raw === '') {
            throw new \RuntimeException('Missing or unreadable: '.$path);
        }

        $raw = str_replace("\r\n", "\n", $raw);

        $headerPattern = '/^##\\s+ARTICLE\\s+'.preg_quote((string) $articleNumber, '/').'\\b.*$/m';
        if (! preg_match($headerPattern, $raw, $m, PREG_OFFSET_CAPTURE)) {
            throw new \RuntimeException('Article header not found: ARTICLE '.$articleNumber.' in '.$seedFile);
        }

        $start = $m[0][1];
        $afterHeader = $start + strlen($m[0][0]);

        $nextPattern = '/^##\\s+ARTICLE\\s+'.preg_quote((string) ($articleNumber + 1), '/').'\\b.*$/m';
        $next = null;
        if (preg_match($nextPattern, $raw, $m2, PREG_OFFSET_CAPTURE, $afterHeader)) {
            $next = $m2[0][1];
        }

        $section = $next === null ? substr($raw, $start) : substr($raw, $start, $next - $start);
        $section = trim($section);

        $getFieldBlock = function (string $label) use ($section): string {
            // Supports either inline fields ("**Label:** value") or block fields ("**Label:**\nvalue").
            $inline = '/\\*\\*'.preg_quote($label, '/').'\\*\\*\\s*(.+)\\n/u';
            if (preg_match($inline, $section, $mm)) {
                return trim($mm[1]);
            }

            $block = '/\\*\\*'.preg_quote($label, '/').'\\*\\*\\s*\\n(.+?)(?:\\n\\n|$)/su';
            if (preg_match($block, $section, $mm)) {
                return trim($mm[1]);
            }

            return '';
        };

        $title = $getFieldBlock('Title:');
        $excerpt = $getFieldBlock('Excerpt:');
        $publishedAt = $getFieldBlock('Publish date:');

        $kwPos = strpos($section, '**Secondary keywords:**');
        if ($kwPos === false) {
            throw new \RuntimeException('**Secondary keywords:** not found in ARTICLE '.$articleNumber.' ('.$seedFile.')');
        }

        $rest = substr($section, $kwPos);
        $startDelim = strpos($rest, "\n\n---\n\n");
        if ($startDelim === false) {
            throw new \RuntimeException('Body start delimiter not found after secondary keywords in ARTICLE '.$articleNumber.' ('.$seedFile.')');
        }

        $bodyFrom = $startDelim + strlen("\n\n---\n\n");
        $lf = strpos($rest, '*LeadForm', $bodyFrom);
        if ($lf === false) {
            throw new \RuntimeException('*LeadForm block not found after article body in ARTICLE '.$articleNumber.' ('.$seedFile.')');
        }

        $bodyMd = trim(substr($rest, $bodyFrom, $lf - $bodyFrom));

        $altText = '';
        if (preg_match('/\\*\\*Featured image alt text:\\*\\*\\s*(.+)\\n/u', $section, $mm)) {
            $altText = trim($mm[1]);
        }

        $seoTitle = '';
        if (preg_match('/\\*\\*SEO Title:\\*\\*\\s*(.+)\\n/u', $section, $mm)) {
            $seoTitle = trim($mm[1]);
        }

        $metaDescription = '';
        if (preg_match('/\\*\\*Meta Description:\\*\\*\\s*(.+)\\n/u', $section, $mm)) {
            $metaDescription = trim($mm[1]);
        }

        $slug = '';
        if (preg_match('/\\*\\*URL Slug:\\*\\*\\s*(.+)\\n/u', $section, $mm)) {
            $slug = trim($mm[1]);
        } elseif (preg_match('/\\*\\*URL Slug:\\*\\*\\s*\\n([^\\n]+)\\n/u', $section, $mm)) {
            $slug = trim($mm[1]);
        }

        $tagsRaw = '';
        if (preg_match('/\\*\\*Tags:\\*\\*\\s*\\n([^\\n]+)\\n/u', $section, $mm)) {
            $tagsRaw = trim($mm[1]);
        } elseif (preg_match('/\\*\\*Tags:\\*\\*\\s*(.+)\\n/u', $section, $mm)) {
            $tagsRaw = trim($mm[1]);
        }
        $tags = array_values(array_filter(array_map(static fn ($t) => trim($t), preg_split('/\\s*,\\s*/u', $tagsRaw) ?: [])));

        if ($title === '' || $excerpt === '' || $slug === '' || $seoTitle === '' || $metaDescription === '' || $publishedAt === '') {
            throw new \RuntimeException('Missing required fields while parsing ARTICLE '.$articleNumber.' ('.$seedFile.').');
        }

        return [
            'title' => $title,
            'excerpt' => $excerpt,
            'published_at' => $publishedAt,
            'slug' => $slug,
            'alt_text' => $altText,
            'seo_title' => $seoTitle,
            'meta_description' => $metaDescription,
            'tags' => $tags,
            'body_md' => $bodyMd,
        ];
    }

    private function upsertFromSeed(string $seedFile, int $articleNumber): void
    {
        $a = $this->parseArticle($seedFile, $articleNumber);

        BlogPost::updateOrCreate(['slug' => $a['slug']], [
            'title' => $a['title'],
            'author_name' => 'LeadForm Team',
            'status' => 'published',
            'published_at' => $a['published_at'],
            'excerpt' => $a['excerpt'],
            'content' => $this->mdToHtml($a['body_md']),
            'alt_text' => $a['alt_text'],
            'seo_title' => $a['seo_title'],
            'meta_description' => $a['meta_description'],
            'tags' => $a['tags'],
            'featured_image' => null,
        ]);
    }

    private function assertAllSlugsPresent(array $expectedSlugs): void
    {
        foreach ($expectedSlugs as $slug) {
            if (! BlogPost::where('slug', $slug)->exists()) {
                throw new \RuntimeException('Missing expected blog post after seeding: '.$slug);
            }
        }
    }

    public function run(): void
    {
        // Articles 1–2: v2 (UNCHANGED)
        $this->upsertFromSeed('leadform_cursor_seed_v2.md', 1);
        $this->upsertFromSeed('leadform_cursor_seed_v2.md', 2);

        // Articles 3–5: v1
        $this->upsertFromSeed('leadform_cursor_seed.md', 3);
        $this->upsertFromSeed('leadform_cursor_seed.md', 4);
        $this->upsertFromSeed('leadform_cursor_seed.md', 5);

        // Articles 6–8: v2 (NEW) are numbered 3–5 in the v2 file.
        $this->upsertFromSeed('leadform_cursor_seed_v2.md', 3);
        $this->upsertFromSeed('leadform_cursor_seed_v2.md', 4);
        $this->upsertFromSeed('leadform_cursor_seed_v2.md', 5);

        $this->assertAllSlugsPresent([
            'reduce-fake-cod-orders-shopify',
            'shopify-default-checkout-cod-conversion-rate',
            'cash-on-delivery-mena-africa-shopify-guide',
            'cod-order-form-best-practices',
            'convert-cod-customers-prepaid-shopify',
            'recover-abandoned-cod-orders-shopify',
            'quantity-offers-cod-shopify-aov',
            'cod-order-confirmation-process-shopify',
        ]);
    }
}
