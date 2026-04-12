<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class DocSection extends Model
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

        static::creating(function (DocSection $section) {
            $base = Str::slug($section->name) ?: 'section';
            $section->slug = static::makeUniqueSlug($base);
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
     * @return HasMany<DocCategory, $this>
     */
    public function categories(): HasMany
    {
        return $this->hasMany(DocCategory::class, 'section_id')->orderBy('sort_order');
    }
}
