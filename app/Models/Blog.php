<?php

namespace App\Models;

use App\Traits\Active;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Translatable;
    use Active;

    protected array $translatable = ['title', 'seo_title', 'seo_description', 'seo_keywords', 'text', 'short_description',];

    protected function casts(): array
    {
        return [
            'images' => 'collection'
        ];
    }
}
