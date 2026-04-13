<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'seo_title',
        'meta_description',
        'tags',
        'alt_text',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'published_at',
        'author_id',
        'author_name',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (BlogPost $post) {
            $fromTitle = Str::slug($post->title) ?: 'post';
            $base = blank($post->slug) ? $fromTitle : (Str::slug($post->slug) ?: $fromTitle);
            $post->slug = static::makeUniqueSlug($base);
        });
    }

    protected static function makeUniqueSlug(string $baseSlug): string
    {
        $slug = $baseSlug;
        $counter = 2;

        while (static::query()->where('slug', $slug)->exists()) {
            $slug = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $slug;
    }

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'status' => 'string',
            'tags' => 'array',
        ];
    }

    /**
     * Posts that are marked published in the admin.
     * `published_at` is used for ordering and on-page dates only, not to hide future-dated posts.
     *
     * @param  Builder<static>  $query
     * @return Builder<static>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }

    /**
     * @return BelongsTo<User, $this>
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
