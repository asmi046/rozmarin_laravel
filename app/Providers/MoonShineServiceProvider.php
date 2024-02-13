<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Enums\PageType;
use MoonShine\Menu\MenuGroup;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\ProjectResource;
use App\MoonShine\Resources\ServiceResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),

            MenuItem::make(
                "Услуги",
                new ServiceResource(),
                "heroicons.fire"
            ),


            MenuItem::make(
                "Проекты",
                new ProjectResource(),
                "heroicons.map"
            ),

            MenuItem::make(
                "Опции сайта",
                new OptionResource(),
                "heroicons.cursor-arrow-rays"
            ),



        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
