<?php

namespace App\Support;

use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Storage;
use Throwable;

final class FeaturedImage
{
    /**
     * Extensions we treat as Cloudinary image assets.
     *
     * @var array<int, string>
     */
    private const IMAGE_EXTS = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif', 'svg'];

    /**
     * Disk used for admin uploads (blog / docs featured images).
     */
    public static function disk(): string
    {
        return (string) config('filesystems.featured_image_disk', 'public');
    }

    /**
     * Public URL for a stored path, or null. Supports legacy local paths, full URLs, and Cloudinary paths.
     */
    public static function url(?string $path): ?string
    {
        if ($path === null || $path === '') {
            return null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (self::disk() === 'cloudinary') {
            // The Flysystem Cloudinary adapter stores images using public_id WITHOUT extension.
            // For this project we want the delivered URL to match dashboard URLs (no version segment, keep extension).
            [$publicId, $ext] = self::cloudinaryPublicIdAndExtensionFromStoredPath($path);

            $asset = app(Cloudinary::class)->image($publicId);
            $baseUrl = (string) $asset->toUrl(); // usually includes /v1/ and no extension

            // Strip the version segment (/v123/ or /v1/) if present.
            $baseUrl = preg_replace('#/v\\d+/#', '/', $baseUrl) ?: $baseUrl;
            // Drop any query string Cloudinary SDK adds.
            $baseUrl = strtok($baseUrl, '?') ?: $baseUrl;

            // Ensure URL ends with the extension from the stored path.
            if ($ext !== null && $ext !== '' && ! str_ends_with(strtolower($baseUrl), '.'.strtolower($ext))) {
                $baseUrl .= '.'.$ext;
            }

            return $baseUrl;
        }

        return asset('storage/'.ltrim($path, '/'));
    }

    /**
     * Match Cloudinary Flysystem adapter public_id rules (folder + basename without extension).
     *
     * Returns [publicId, extensionFromOriginalPath|null].
     */
    public static function cloudinaryPublicIdAndExtensionFromStoredPath(string $path): array
    {
        $path = str_replace('\\', '/', $path);
        $info = pathinfo($path);
        $dirname = str_replace('\\', '/', $info['dirname'] ?? '');
        $filename = $info['filename'] ?? '';
        $id = ($dirname !== '' && $dirname !== '.') ? $dirname.'/'.$filename : $filename;

        $ext = strtolower((string) ($info['extension'] ?? ''));
        $ext = in_array($ext, self::IMAGE_EXTS, true) ? $ext : null;

        // IMPORTANT: Do NOT apply cloudinary disk "prefix" here.
        // The Cloudinary Flysystem adapter used by this project does not apply the prefix for image/video resources.
        // Applying it here causes URLs like ".../leadform/blog/..." while the assets live under ".../blog/...".
        return [$id, $ext];
    }

    /**
     * Remove a stored path from the active disk and, when using Cloudinary, also try the public disk (legacy uploads).
     */
    public static function deleteStored(?string $path): void
    {
        if ($path === null || $path === '' || str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return;
        }

        try {
            Storage::disk(self::disk())->delete($path);
        } catch (Throwable) {
            // Cloudinary / Flysystem may throw if the asset is missing
        }

        if (self::disk() === 'cloudinary') {
            try {
                Storage::disk('public')->delete($path);
            } catch (Throwable) {
                //
            }
        }
    }
}
