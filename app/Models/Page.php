<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use Translatable;

    protected $with = ['contexts'];

    protected $fillable = [
        'title',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'seo_image',
        'banner_media',
        'slug'
    ];

    protected array $translatable = [
        'title',
        'seo_title',
        'seo_keywords',
        'seo_description'
    ];

    public function contexts(): HasMany
    {
        return $this->hasMany(Context::class, 'page_id');
    }

    public function getContext(string $slug): ?Context
    {
        return $this->contexts->firstWhere('slug', $slug);
    }

    public function getContextText(string $slug): ?string
    {
        $context = $this->getContext($slug);
        return $context?->text;
    }
}
