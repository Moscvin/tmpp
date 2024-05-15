<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Vars;
use App\MoonShine\Components\SlugOrText;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Vars>
 */
class VarsResource extends ModelResource
{
    protected string $model = Vars::class;

    protected string $title = 'Vars';
    protected bool $createInModal = true;
    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(trans('moonshine::general.value'), 'value'),
                SlugOrText::make(
                    model: $this,
                    from: 'value',
                    separator: "_",
                )
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return [
            'value',
            'slug'
        ];
    }
}
