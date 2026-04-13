<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class DocCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sort_order',
        'is_visible',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (DocCategory $category) {
            $base = Str::slug($category->name) ?: 'category';
            $category->slug = static::makeUniqueSlug($base);
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
            'is_visible' => 'boolean',
        ];
    }

    /**
     * @return HasMany<DocArticle, $this>
     */
    public function articles(): HasMany
    {
        return $this->hasMany(DocArticle::class, 'category_id')->orderBy('sort_order');
    }
}
