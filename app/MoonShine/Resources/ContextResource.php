<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Context;
use App\MoonShine\Components\SlugOrText;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Traits\Resource\ResourceWithParent;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Context>
 */
class ContextResource extends ModelResource
{
    use ResourceWithParent;

    protected string $model = Context::class;

    protected string $title = 'Contexts';
    protected bool $detailInModal = true;


    public function title(): string
    {
        return trans('moonshine::general.context');
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Hidden::make('page_id', 'page_id')
                    ->canSee(fn() => false)
                    ->hideOnIndex()
                    ->default($this->getParentId()),
                Text::make(trans('moonshine::general.hint'), 'hint'),
                SlugOrText::make($this, from: 'hint', separator: '_', unique: false),
                Translatable::make(trans('moonshine::general.text'), 'text')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->tinyMce()
                    ->hideOnIndex()
                    ->removable(),
                Image::make(trans('moonshine::general.media'), 'media')
                    ->hideOnIndex()
                    ->removable()
                    ->dir('contexts')
                    ->disk('public'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    protected function getParentResourceClassName(): string
    {
        return PageResource::class;
    }

    protected function getParentRelationName(): string
    {
        return 'page';
    }

    public function search(): array
    {
        return [
            'hint',
            'text',
        ];
    }
}
