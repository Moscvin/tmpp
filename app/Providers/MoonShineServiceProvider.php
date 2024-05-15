<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\BlogResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\ContextResource;
use App\MoonShine\Resources\CounterResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\PartnerResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\RepresentationResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\SettingResource;
use App\MoonShine\Resources\ValueResource;
use App\MoonShine\Resources\VarsResource;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use Sweet1s\MoonshineRBAC\Components\MenuRBAC;
use Sweet1s\MoonshineRBAC\Resource\RoleResource;
use Sweet1s\MoonshineRBAC\Resource\UserResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [
            new ContextResource()
        ];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return MenuRBAC::menu(
            MenuGroup::make('System', [
                MenuItem::make('Admins', new UserResource(), 'heroicons.outline.users'),
                MenuItem::make('Roles', new RoleResource(), 'heroicons.outline.shield-exclamation'),
            ], 'heroicons.outline.user-group'),

            MenuGroup::make('Content', [
                MenuItem::make(trans('moonshine::general.pages'), new PageResource(), 'heroicons.outline.document'),
                MenuItem::make(trans('moonshine::general.counters'), new CounterResource(), 'heroicons.outline.chart-bar'),
                MenuItem::make(trans('moonshine::general.services'), new ServiceResource(), 'heroicons.outline.wrench'),
                MenuItem::make(trans('moonshine::general.partners'), new PartnerResource(), 'heroicons.outline.users'),
                MenuItem::make(trans('moonshine::general.questions'), new QuestionResource(), 'heroicons.outline.question-mark-circle'),
                MenuItem::make(trans('moonshine::general.representations'), new RepresentationResource(), 'heroicons.outline.building-library'),
                MenuItem::make(trans('moonshine::general.messages'), new ContactResource(), 'heroicons.outline.paper-airplane'),
                MenuItem::make(trans('moonshine::general.blog'), new BlogResource(), 'heroicons.outline.newspaper'),
            ])->icon('heroicons.outline.computer-desktop'),

            MenuGroup::make('Website', [
                MenuItem::make('Vars', new VarsResource(), 'heroicons.outline.tag'),
                MenuItem::make(trans('moonshine::general.settings'), new SettingResource(), 'heroicons.outline.cog-8-tooth')
            ])->icon('heroicons.outline.command-line')
        );
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
