<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

use MoonShine\Fields\Number;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

/**
 * @extends ModelResource<Question>
 */
class QuestionResource extends ModelResource
{
    protected string $model = Question::class;

    protected string $title = 'Questions';

    public function fields(): array
    {
        $order = Question::max('order');
        return [
            Block::make([
                ID::make()->sortable(),
                Translatable::make(trans('moonshine::general.question'), 'question')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->removable(),
                Translatable::make(trans('moonshine::general.answer'), 'answer')
                    ->languages(array_keys(config('languages.array')))
                    ->priorityLanguages([config('languages.priority')])
                    ->textarea()
                    ->removable(),
                Number::make(trans('moonshine::general.order'), 'order')
                    ->default($order + 1),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'question' => 'required',
            'answer' => 'required'
        ];
    }
    public function search(): array
    {
        return [
            'question',
            'answer'
        ];
    }
}
