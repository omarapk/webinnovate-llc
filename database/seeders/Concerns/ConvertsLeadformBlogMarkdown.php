<?php

namespace Database\Seeders\Concerns;

trait ConvertsLeadformBlogMarkdown
{
    /**
     * Minimal markdown → basic HTML converter.
     * Supports: headings (#/##/###), paragraphs, unordered lists (- ...), and **bold**.
     */
    protected function mdToHtml(string $md): string
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

            if (str_starts_with($line, '*') && str_ends_with($line, '*') && strlen($line) > 2) {
                $line = trim($line, '*');
            }

            $paragraph[] = $line;
        }

        $flushParagraph();
        $closeList();

        return implode("\n", $html);
    }

    /**
     * Markdown body for articles 3–5 from leadform_cursor_seed_v2.md (database/seeders).
     */
    protected function blogBodyFromLeadformCursorSeedV2(int $articleNumber): string
    {
        if ($articleNumber < 3 || $articleNumber > 5) {
            throw new \InvalidArgumentException('Only articles 3–5 are defined in v2.');
        }

        $path = database_path('seeders/leadform_cursor_seed_v2.md');
        $raw = @file_get_contents($path);
        if ($raw === false || $raw === '') {
            throw new \RuntimeException('Missing or unreadable: '.$path);
        }

        $raw = str_replace("\r\n", "\n", $raw);

        $header = '## ARTICLE '.$articleNumber.' (NEW)';
        $start = strpos($raw, $header);
        if ($start === false) {
            throw new \RuntimeException('Marker not found: '.$header);
        }

        $nextHeader = '## ARTICLE '.($articleNumber + 1).' (NEW)';
        $next = strpos($raw, $nextHeader, $start + strlen($header));
        $section = $next === false ? substr($raw, $start) : substr($raw, $start, $next - $start);

        $kw = strpos($section, '**Secondary keywords:**');
        if ($kw === false) {
            throw new \RuntimeException('**Secondary keywords:** not found in '.$header);
        }

        $rest = substr($section, $kw);
        $startDelim = strpos($rest, "\n\n---\n\n");
        if ($startDelim === false) {
            throw new \RuntimeException('Body start delimiter not found after secondary keywords.');
        }

        $bodyFrom = $startDelim + strlen("\n\n---\n\n");
        $lf = strpos($rest, '*LeadForm', $bodyFrom);
        if ($lf === false) {
            throw new \RuntimeException('*LeadForm block not found after article body.');
        }

        $body = substr($rest, $bodyFrom, $lf - $bodyFrom);
        $body = rtrim($body, " \t\n");
        $body = preg_replace('/\n+---\s*$/', '', $body) ?? $body;

        return trim($body);
    }
}
