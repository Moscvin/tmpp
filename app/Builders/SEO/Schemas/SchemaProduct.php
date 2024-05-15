<?php

namespace App\Builders\SEO\Schemas;

class SchemaProduct implements SchemaInterface
{
    public static function get($model = null): string
    {
        $image = url('storage/' . $model->image);

        return "
            {
              \"@context\": \"https://schema.org/\",
              \"@type\": \"Product\",
              \"name\": \"$model->title\",
              \"image\": \"$image\",
              \"description\": \"$model->description\",
              \"brand\": {
                    \"@type\": \"Brand\",
                    \"name\": \"Bercut.MD\"
              }
            }
        ";
    }
}
