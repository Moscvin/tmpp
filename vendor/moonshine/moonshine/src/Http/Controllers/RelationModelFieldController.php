<?php

declare(strict_types=1);

namespace MoonShine\Http\Controllers;

use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Components\TableBuilder;
use MoonShine\Contracts\Fields\Relationships\HasAsyncSearch;
use MoonShine\Fields\Relationships\MorphTo;
use MoonShine\Http\Requests\Relations\RelationModelFieldRequest;
use MoonShine\Support\DBOperators;
use MoonShine\Support\TableRowRenderer;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class RelationModelFieldController extends MoonShineController
{
    /**
     * @throws Throwable
     */
    public function search(RelationModelFieldRequest $request): Response
    {
        $field = $request->getPageField();

        if (! $field instanceof HasAsyncSearch) {
            return response()->json();
        }

        /* @var \MoonShine\Resources\ModelResource $resource */
        $resource = $field->getResource();

        $model = $resource->getModel();

        $searchColumn = $field->asyncSearchColumn() ?? $resource->column();

        if ($field instanceof MorphTo) {
            $field->resolveFill([], $model);

            $morphClass = $field->getWrapName()
                ? data_get($request->get($field->getWrapName(), []), $field->getMorphType())
                : $request->get($field->getMorphType());

            $model = new $morphClass();
            $searchColumn = $field->getSearchColumn($morphClass);
        }

        $query = $model->newModelQuery();

        if (is_closure($field->asyncSearchQuery())) {
            $query = value(
                $field->asyncSearchQuery(),
                $query,
                $request,
                $field
            );
        }

        $term = $request->get('query');
        $values = $request->get($field->column(), '') ?? '';

        $except = is_array($values)
            ? array_keys($values)
            : array_filter(explode(',', (string) $values));

        $offset = $request->get('offset', 0);

        $query->when(
            $term,
            fn (Builder $q) => $q->where(
                $searchColumn,
                DBOperators::byModel($q->getModel())->like(),
                "%$term%"
            )
        )
            ->whereNotIn($model->getKeyName(), $except)
            ->offset($offset)
            ->limit($field->asyncSearchCount());

        return response()->json(
            $query->get()->map(
                fn ($model): array => $field->asyncResponseData($model, $searchColumn)
            )->toArray()
        );
    }

    /**
     * @throws Throwable
     */
    public function searchRelations(RelationModelFieldRequest $request): mixed
    {
        /* @var \MoonShine\Resources\ModelResource $parentResource */
        $parentResource = $request->getResource();

        $parentItem = $parentResource->getItemOrInstance();

        $field = $request->getField();

        $field?->resolveFill(
            $parentItem->toArray(),
            $parentItem
        );

        $value = $field?->value();

        if ($value instanceof TableBuilder && $request->filled('_key')) {
            return TableRowRenderer::make(
                $value,
                $request->get('_key'),
                $request->integer('_index'),
            )->render();
        }

        return $value;
    }
}
