<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

class CounterObserver
{
    public function saved(Model $model): void
    {
        cache()->forget('counters');
    }

    public function deleted(Model $model): void
    {
        cache()->forget('counters');
    }

    public function restored(Model $model): void
    {
        cache()->forget('counters');
    }

    public function forceDeleted(Model $model): void
    {
        cache()->forget('counters');
    }
}
