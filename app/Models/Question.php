<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use Translatable;

    protected array $translatable = ['question', 'answer'];

    protected $fillable = ['question', 'answer'];
}
