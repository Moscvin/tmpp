<?php

namespace App\MoonShine\Components;

use App\Models\User;
use MoonShine\Fields\Field;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

class SlugOrText
{
    public static function make(ModelResource $model, string $from, string|null $separator = '-', bool $unique = true): Field
    {
        $field = null;

        if (!$model->getItem() || $model->getItem()->slug === null) {
            $field = Slug::make(trans('moonshine::general.slug'), 'slug')
                ->separator($separator)
                ->from($from);

            if ($unique) {
                $field->unique();
            }

        } else {
            $field = Text::make(trans('moonshine::general.slug'), 'slug');
        }

        return $field->disabled(fn() => auth()->user()->id !== User::SUPER_ADMIN_ROLE_ID);
    }
}
