<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Blog;
use App\MoonShine\Components\SeoTabBlock;
use App\MoonShine\Components\SlugOrText;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Date;
use MoonShine\Resources\ModelResource;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Blog>
 */
class BlogResource extends ModelResource
{
    protected string $model = Blog::class;

    protected string $title = 'Blogs';

    public function fields(): array
    {
        return [
            Tabs::make([
                Tab::make(trans('moonshine::general.general'), [
                    Block::make([
                        ID::make()->sortable(),
                        Translatable::make(trans('moonshine::general.title'), 'title')
                            ->languages(array_keys(config('languages.array')))
                            ->priorityLanguages([config('languages.priority')])
                            ->removable(),
                        SlugOrText::make(model: $this, from: 'title')
                            ->hideOnIndex(),
                        Date::make(trans('moonshine::general.date'), 'created_at')
                            ->required(),
                        Image::make(trans('moonshine::general.image'), 'image')
                            ->dir('blogs')
                            ->hideOnIndex()
                            ->disk('public'),
                        Switcher::make(trans('moonshine::general.is_active'), 'is_active'),
                    ]),
                ]),
                Tab::make(trans('moonshine::general.content'), [
                    Block::make([
                        Translatable::make(trans('moonshine::general.short_description'), 'short_description')
                            ->languages(array_keys(config('languages.array')))
                            ->textarea()
                            ->hideOnIndex()
                            ->required()
                            ->priorityLanguages([config('languages.priority')])
                            ->removable(),
                        Translatable::make(trans('moonshine::general.text'), 'text')
                            ->languages(array_keys(config('languages.array')))
                            ->tinyMce()
                            ->hideOnIndex()
                            ->required()
                            ->priorityLanguages([config('languages.priority')])
                            ->removable(),
                        Image::make(trans('moonshine::general.media'), 'images')
                            ->dir('blogs')
                            ->multiple()
                            ->hideOnIndex()
                            ->disk('public'),
                    ])
                ]),
                SeoTabBlock::make()
            ])
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return [
            'title',
            'slug',
            'short_description',
        ];
    }
}
