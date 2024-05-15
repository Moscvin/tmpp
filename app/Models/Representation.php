<?php

namespace App\Models;


use App\Traits\Active;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    use Active;
    use Translatable;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'order',
        'is_active',
    ];

    protected array $translatable = [
        'name',
        'address',
    ];
}
