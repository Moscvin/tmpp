<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Partner>
 */
class PartnerResource extends ModelResource
{
    protected string $model = Partner::class;

    protected string $title = 'Partners';

    public function title(): string
    {
        return trans('moonshine::general.partners');
    }

    public function fields(): array
    {
        $order = Partner::max('order');
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(trans('moonshine::general.name'), 'name')
                    ->required(),
                Image::make(trans('moonshine::general.media'), 'image')
                    ->hideOnIndex()
                    ->dir('pages')
                    ->disk('public'),
                Number::make(trans('moonshine::general.order'), 'order')
                    ->default($order + 1),
                Switcher::make(trans('moonshine::general.is_active'), 'is_active')
                    ->default(false),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required',
        ];
    }
    public function search(): array
    {
        return [
            'name',
            'order',
        ];
    }
}
