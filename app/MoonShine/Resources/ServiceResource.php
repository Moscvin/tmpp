<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use App\MoonShine\Components\SeoTabBlock;
use App\MoonShine\Components\SlugOrText;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Switcher;
use MoonShine\Resources\ModelResource;

use VI\MoonShineSpatieTranslatable\Fields\Translatable;


/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Services';

    public function title(): string
    {
        return trans('moonshine::general.services');
    }

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
                            ->required()
                            ->removable(),
                        SlugOrText::make(model: $this, from: 'title')
                            ->hideOnIndex(),
                        Translatable::make(trans('moonshine::general.description'), 'description')
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
                        Image::make(trans('moonshine::general.media'), 'image')
                            ->dir('service')
                            ->disk('public'),
                        Switcher::make(trans('moonshine::general.is_active'), 'is_active'),
                        Switcher::make(trans('moonshine::general.special'), 'special'),
                    ]),
                ]),
                SeoTabBlock::make()
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'text' => ['required'],
        ];
    }

    public function search(): array
    {
        return [
            'title',
            'slug'
        ];
    }
}
