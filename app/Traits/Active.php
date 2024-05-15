<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * @method static Builder active()
 * @method static Builder activeAndOrderBy(string $field)
 */
trait Active
{
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeActiveAndOrderBy(Builder $query, string $field)
    {
        return $query->active()->orderBy($field);
    }
}
