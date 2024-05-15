<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Context extends Model
{
    use Translatable;

    protected array $translatable = [
        'text'
    ];

    protected $fillable = [
        'text',
        'media',
        'page_id'
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function isMediaTypeVideo(): bool
    {
        return !in_array(['jpg', 'jpeg', 'gif', 'png'], explode('.', $this->media));
    }
}
