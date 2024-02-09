<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Color;
use MoonShine\Fields\TinyMce;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;


class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';
    public string $column = 'title';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make( 'Заголовок', 'title'),
                Text::make( 'Slug', 'slug'),
                TinyMce::make( 'Цитата', 'description', fn($item) => mb_strimwidth($item->description, 0, 60, "..." )),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
