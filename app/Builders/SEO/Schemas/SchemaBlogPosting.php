<?php

namespace App\Builders\SEO\Schemas;

class SchemaBlogPosting implements SchemaInterface
{
    public static function get($model = null): string
    {
        $image = url('storage/' . $model->image);
        $websiteURL = url('/');
        $logo = asset('assets/img/logo.png');
        $createdAt = $model->created_at->format('Y-m-d');
        $updatedAt = $model->updated_at->format('Y-m-d');

        return "
            {
              \"@context\": \"https://schema.org\",
              \"@type\": \"BlogPosting\",
              \"headline\": \"$model->title\",
              \"image\": \"$image\",
              \"author\": {
                    \"@type\": \"Organization\",
                    \"name\": \"Bercut.MD\",
                    \"url\": \"$websiteURL\"
              },
              \"publisher\": {
                    \"@type\": \"Organization\",
                    \"name\": \",
                    \"logo\": {
                      \"@type\": \"ImageObject\",
                      \"url\": \"$logo\"
                    }
              },
              \"datePublished\": \"$createdAt\",
               \"dateModified\": \"$updatedAt\"
            }
        ";
    }
}
