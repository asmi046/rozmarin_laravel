<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Project;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Slug;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;;
use MoonShine\Laravel\Resources\ModelResource;

class ProjectResource extends ModelResource
{
    protected string $model = Project::class;

    protected string $title = 'Проекты';


    public function indexFields(): array
    {
        return [
                ID::make()->sortable(),
                Text::make( 'Заголовок', 'title'),
                Number::make('Год', 'year')->sortable(),
                Image::make("Обложка", "img")
                    ->removable()
                    ->disk('public')
                    ->dir('oblozgka'),
        ];
    }

    public function formFields(): array
    {
        return [
            Box::make([
                ID::make(),
                Text::make( 'Заголовок', 'title'),
                Number::make('Год', 'year')->sortable(),

                Slug::make( 'Slug', 'slug')
                    ->from('title')
                    ->unique()
                    ,

                Image::make("Обложка", "img")
                    ->removable()
                    ->disk('public')
                    ->dir('oblozgka'),



                Image::make("Галерея", "galery")
                    ->removable()
                    ->multiple()
                    ->disk('public')
                    ->dir('project'),

                File::make("Файл с примером", "file")
                    ->multiple()
                    ->removable()
                    ->disk('public')

                    ->dir('project'),

                TinyMce::make( 'Описание', 'description', fn($item) => ($item->description)?mb_strimwidth($item->description, 0, 60, "..." ):""),


            ]),

            Box::make([
                Text::make( 'Seo заголовок', 'seo_title'),
                Textarea::make( 'Seo описание', 'seo_description'),
            ])
        ];
    }

    public function rules($item): array
    {
        return [
            'title' => ['required'],
            'img' => ($item->img === null)?['required']:[],
            'year' => ['required'],

        ];
    }
}
