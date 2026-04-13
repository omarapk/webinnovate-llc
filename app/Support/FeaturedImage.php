<?php

namespace App\Support;

use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Storage;
use Throwable;

final class FeaturedImage
{
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
            $publicId = self::cloudinaryPublicIdFromStoredPath($path);

            return (string) app(Cloudinary::class)->image($publicId)->toUrl();
        }

        return asset('storage/'.ltrim($path, '/'));
    }

    /**
     * Match Cloudinary Flysystem adapter public_id rules (folder + basename without extension + optional prefix).
     */
    public static function cloudinaryPublicIdFromStoredPath(string $path): string
    {
        $path = str_replace('\\', '/', $path);
        $info = pathinfo($path);
        $dirname = str_replace('\\', '/', $info['dirname'] ?? '');
        $filename = $info['filename'] ?? '';
        $id = ($dirname !== '' && $dirname !== '.') ? $dirname.'/'.$filename : $filename;

        $prefix = trim(str_replace('\\', '/', (string) (config('filesystems.disks.cloudinary.prefix') ?? '')), '/');
        if ($prefix !== '') {
            $normalizedId = ltrim($id, './\\/');
            $id = $normalizedId !== '' ? $prefix.'/'.$normalizedId : $prefix;
        }

        return $id;
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
