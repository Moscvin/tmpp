<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use Sweet1s\MoonshineRBAC\Traits\WithRolePermissions;

class SettingResource extends ModelResource
{
    use WithRolePermissions;

    protected string $model = Setting::class;

    protected string $title = 'Settings';

    protected bool $editInModal = true;
    protected bool $createInModal = true;

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(trans('moonshine::general.key'), 'key')
                    ->badge('primary')
                    ->required(),
                Text::make(trans('moonshine::general.value'), 'value'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'key' => 'required|unique:settings,key,' . $item->id
        ];
    }

    public function search(): array
    {
        return [
            'key',
            'value'
        ];
    }
}
