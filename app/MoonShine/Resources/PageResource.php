<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Page;
use App\MoonShine\Components\SeoTabBlock;
use App\MoonShine\Components\SlugOrText;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Tab;
use MoonShine\Decorations\Tabs;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Resources\ModelResource;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Pages';

    public function title(): string
    {
        return trans('moonshine::general.pages');
    }

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Tabs::make([
                Tab::make(trans('moonshine::general.general'), [
                    Block::make([
                        Translatable::make(trans('moonshine::general.title'), 'title')
                            ->languages(array_keys(config('languages.array')))
                            ->priorityLanguages([config('languages.priority')])
                            ->removable(),
                        SlugOrText::make(model: $this, from: 'title')
                            ->hideOnIndex(),
                        File::make(trans('moonshine::general.media'), 'banner_media')
                            ->hideOnIndex()
                            ->removable()
                            ->dir('pages')
                            ->disk('public'),
                    ]),
                    HasMany::make(trans('moonshine::general.context'), 'contexts', resource: new ContextResource())
                        ->hideOnIndex()
                        ->creatable()
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
        ];
    }
}
