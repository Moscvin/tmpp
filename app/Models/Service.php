<?php

namespace App\Models;

use App\Traits\Active;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Tappable;

class Service extends Model
{
    use Translatable;
    use HasFactory;
    use Active;
    use Tappable;

    protected array $translatable = [
        'title',
        'description',
        'text',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $fillable = [
        'title',
        'description',
        'text',
        'image',
        'is_active',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];
}
