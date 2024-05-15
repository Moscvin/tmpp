<?php

namespace App\Builders\SEO\Schemas;

interface SchemaInterface
{
    public static function get($model = null): string;
}
