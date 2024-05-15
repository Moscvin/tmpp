<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Representation;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Phone;
use MoonShine\Fields\Switcher;
use MoonShine\Resources\ModelResource;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Representation>
 */
class RepresentationResource extends ModelResource
{
    protected string $model = Representation::class;

    protected string $title = 'Representations';

    public function title(): string
    {
        return trans('moonshine::general.representations');
    }

    public function fields(): array
    {
        $order = Representation::max('order');

        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make(trans('moonshine::general.name'), 'name')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable(),
                Translatable::make(trans('moonshine::general.address'), 'address')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable(),
                Flex::make([
                    Phone::make(trans('moonshine::general.phone'), 'phone')
                        ->mask('+373 (99) 999-999'),
                    Number::make(trans('moonshine::general.order'), 'order')
                        ->default($order + 1)
                        ->min(0)
                        ->sortable(),
                ]),
                Switcher::make(trans('moonshine::general.is_active'), 'is_active')
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
    }

    public function search(): array
    {
        return ['name', 'address', 'phone'];
    }
}
