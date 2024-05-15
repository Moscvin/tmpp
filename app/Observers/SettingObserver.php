<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

class SettingObserver
{
    public function saved(Model $model): void
    {
        cache()->forget('settings.cache_key');
    }

    public function deleted(Model $model): void
    {
        cache()->forget('settings.cache_key');
    }

    public function restored(Model $model): void
    {
        cache()->forget('settings.cache_key');
    }

    public function forceDeleted(Model $model): void
    {
        cache()->forget('settings.cache_key');
    }
}
