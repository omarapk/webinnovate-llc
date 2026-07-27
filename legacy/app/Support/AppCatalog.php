<?php

namespace App\Support;

/**
 * Registry of the WEBI apps defined in config/apps/{slug}.php.
 * Adding a 4th app = adding one config file + its slug in config/site.php app_order.
 */
class AppCatalog
{
    /**
     * @return array<int, string>
     */
    public static function slugs(): array
    {
        return config('site.app_order', []);
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        if (! in_array($slug, static::slugs(), true)) {
            return null;
        }

        return config('apps.'.$slug);
    }

    /**
     * All apps in display order.
     *
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        return array_values(array_filter(array_map(
            fn (string $slug) => static::find($slug),
            static::slugs(),
        )));
    }
}
