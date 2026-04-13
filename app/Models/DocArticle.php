<?php

namespace App\Models;

use App\Support\FeaturedImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class DocArticle extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'excerpt',
        'featured_image',
        'status',
        'published_at',
        'sort_order',
        'author_id',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (DocArticle $article) {
            $fromTitle = Str::slug($article->title) ?: 'article';
            $base = blank($article->slug) ? $fromTitle : (Str::slug($article->slug) ?: $fromTitle);
            $article->slug = static::makeUniqueSlug($base);
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
        ];
    }

    /**
     * @return Attribute<string|null, never>
     */
    protected function featuredImageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => FeaturedImage::url($this->featured_image),
        );
    }

    /**
     * @param  Builder<static>  $query
     * @return Builder<static>
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')
            ->where(function (Builder $q) {
                $q->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            });
    }

    /**
     * @return BelongsTo<DocCategory, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(DocCategory::class, 'category_id');
    }

    /**
     * @return BelongsTo<User, $this>
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
