<?php

namespace App\Builders\SEO;

use App\Builders\SEO\Meta\SEOBuilder;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;

class SEOHelper
{

    /**
     * @param Model $model
     * @return void
     * @throws Exception
     */
    public static function getSEO(Model $model): void
    {
        $seo = new SEOBuilder();

        switch (true) {
            case $model instanceof Page:
            case $model instanceof Service:
            case $model instanceof Blog:

                $seo->setTitle(self::isNotNull($model->seo_title) ? $model->seo_title : ($model->name ?? $model->title))
                    ->setDescription(self::isNotNull($model->seo_description) ? $model->seo_description : null)
                    ->setKeywords(self::isNotNull($model->seo_keywords) ? $model->seo_keywords : null)
                    ->setImage(self::getImage($model));

                break;
            default:
                $seo->setTitle(null)
                    ->setDescription(null)
                    ->setKeywords(null)
                    ->setImage(null);
                break;
        }

        $seoSchema = new SEOSchema();

        switch (true) {
            case $model instanceof Blog:
            case $model instanceof Service:
                $seoSchema->setModel($model);
                break;
        }

        $seo->setSchema($seoSchema);

        View::share('seo', $seo->getSEO());
    }

    private static function getImage($model): string|null
    {
        return self::isNotNull($model->seo_image)
            ? url('storage/' . $model->seo_image)
            : (self::isNotNull($model->image) ? url('storage/' . $model->image) : null);
    }

    private static function isNotNull($value): bool
    {
        return $value !== null && $value !== '';
    }
}
