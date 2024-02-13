<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Project;
use MoonShine\Fields\ID;

use MoonShine\Fields\File;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class ProjectResource extends ModelResource
{
    protected string $model = Project::class;

    protected string $title = 'Проекты';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->hideOnIndex(),
                Text::make( 'Заголовок', 'title'),
                Number::make('Год', 'year')->sortable(),

                Slug::make( 'Slug', 'slug')
                    ->from('title')
                    ->unique()
                    ->hideOnIndex(),

                Image::make("Обложка", "img")
                    ->removable()
                    ->disk('public')
                    ->dir('project'),

                Image::make("Галерея", "galery")
                    ->multiple()
                    ->removable()
                    ->disk('public')
                    ->hideOnIndex()
                    ->dir('project'),

                File::make("Файл с примером", "file")
                    ->multiple()
                    ->removable()
                    ->disk('public')
                    ->hideOnIndex()
                    ->dir('project'),

                TinyMce::make( 'Описание', 'description', fn($item) => mb_strimwidth($item->description, 0, 60, "..." )),


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
