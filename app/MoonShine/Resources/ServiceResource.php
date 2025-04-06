<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\File;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\Color;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Laravel\Resources\ModelResource;


class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';
    public string $column = 'title';

    public function indexFields(): array
    {
        return [
            Image::make("Обложка", "img")
            ->disk('public')
            ->removable()
            ->dir('services'),

            Text::make( 'Заголовок', 'title'),
            TinyMce::make( 'Цитата', 'description', fn($item) => strip_tags(mb_strimwidth($item->description, 0, 60, "..." ))),
        ];
    }

    public function formFields(): array
    {
        return [
            Box::make([
                ID::make()->sortable(),
                Image::make("Обложка", "img")
                    ->disk('public')
                    ->removable()
                    ->dir('services'),

                Image::make("Галерея", "galery")
                    ->multiple()
                    ->removable()
                    ->disk('public')
                    ->dir('galery'),

                Text::make( 'Заголовок', 'title'),

                Slug::make( 'Slug', 'slug')
                    ->from('title')
                    ->unique(),

                TinyMce::make( 'Цитата', 'description', fn($item) => mb_strimwidth($item->description, 0, 60, "..." )),
            ]),

            Box::make([
                Text::make( 'Seo заголовок', 'seo_title'),
                Textarea::make( 'Seo описание', 'seo_description'),
            ])
        ];
    }

    public function rules($item): array
    {
        return [];
    }
}
