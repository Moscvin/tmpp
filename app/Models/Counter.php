<?php

namespace App\Models;

use App\Observers\CounterObserver;
use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(CounterObserver::class)]
class Counter extends Model
{
    use Translatable;

    protected $fillable = ['name', 'value', 'order'];

    protected array $translatable = ['name'];
}
