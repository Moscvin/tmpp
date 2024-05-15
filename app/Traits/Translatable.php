<?php

namespace App\Traits;

use Spatie\Translatable\HasTranslations;

trait Translatable
{
    use HasTranslations;

    protected function asJson($value): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
