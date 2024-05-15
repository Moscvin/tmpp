<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Counter;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Flex;
use MoonShine\Enums\PageType;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Counter>
 */
class CounterResource extends ModelResource
{
    protected string $model = Counter::class;

    protected string $title = 'Counters';

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public function title(): string
    {
        return trans('moonshine::general.counters');
    }

    public function fields(): array
    {
        $order = Counter::max('order');
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make(trans('moonshine::general.text'), 'name')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->required()
                    ->removable(),
                Flex::make([
                    Text::make(trans('moonshine::general.value'), 'value')
                        ->required(),
                    Text::make(trans('moonshine::general.unit'), 'unit')
                        ->hideOnIndex(),
                ]),
                Number::make(trans('moonshine::general.order'), 'order')
                    ->default($order + 1),
                Switcher::make(trans('moonshine::general.with_plus'), 'with_plus'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required',
            'value' => 'required',
            'order' => 'required',
        ];
    }
    public function search(): array
    {
        return [
            'name',
            'value',
            'unit',
        ];
    }
}
