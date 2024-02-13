<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Fields\ID;

use MoonShine\Fields\File;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Color;
use MoonShine\Fields\Image;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Textarea;
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
                Image::make("Обложка", "img")
                    ->disk('public')
                    ->removable()
                    ->dir('services'),

                Image::make("Галерея", "galery")
                    ->multiple()
                    ->removable()
                    ->disk('public')
                    ->hideOnIndex()
                    ->dir('galery'),

                Text::make( 'Заголовок', 'title'),

                Slug::make( 'Slug', 'slug')
                    ->from('title')
                    ->unique()
                    ->hideOnIndex(),

                TinyMce::make( 'Цитата', 'description', fn($item) => mb_strimwidth($item->description, 0, 60, "..." )),
            ]),

            Block::make([
                Text::make( 'Seo заголовок', 'seo_title')->hideOnIndex(),
                Textarea::make( 'Seo описание', 'seo_description')->hideOnIndex(),
            ])
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
