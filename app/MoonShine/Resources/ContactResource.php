<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Contact>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Contacts';

    public function title(): string
    {
        return trans('moonshine::general.messages');
    }

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(trans('moonshine::general.name'), 'name'),
                Email::make(trans('moonshine::ui.resource.email'), 'email'),
                Textarea::make(trans('moonshine::general.message'), 'message')->hideOnIndex(),
                Switcher::make(trans('moonshine::general.is_read'), 'is_read')
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function search(): array
    {
        return [
            'name',
            'email',
            'message',
        ];
    }
}
