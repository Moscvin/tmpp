<?php

namespace App\MoonShine\Components;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Fields\Image;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class SeoTabBlock
{
    public static function make()
    {
        return Tab::make(trans('moonshine::general.seo'), [
            Block::make([
                Translatable::make(trans('moonshine::general.seo_title'), 'seo_title')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable()
                    ->hideOnIndex(),
                Translatable::make(trans('moonshine::general.seo_keywords'), 'seo_keywords')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable()
                    ->hideOnIndex(),
                Translatable::make(trans('moonshine::general.seo_description'), 'seo_description')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable()
                    ->textarea()
                    ->hideOnIndex(),
            ]),
        ]);
    }
}
