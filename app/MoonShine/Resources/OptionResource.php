<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Option;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Laravel\Resources\ModelResource;

class OptionResource extends ModelResource
{
    protected string $model = Option::class;
    protected string $title = 'Опции сайта';
    public string $column = 'title';


    public function indexFields(): array
    {
        return [
                ID::make()->sortable(),
                Text::make("Название", "title"),
                Text::make("Ключ", "name"),
                TinyMce::make("Значение", "value", fn($item) => strip_tags(mb_strimwidth($item->value, 0, 60, "..." )))
        ];
    }


    public function formFields(): array
    {
        $item = $this->getItem();
        $element = Textarea::make("Значение", "value", fn($item) => mb_strimwidth($item->value, 0, 60, "..." ));
        if ($item->type === "rich")
            $element = TinyMce::make("Значение", "value", fn($item) => mb_strimwidth($item->value, 0, 60, "..." ));
        return [
            Box::make([
                ID::make()->sortable(),
                Text::make("Название", "title"),
                Text::make("Ключ", "name"),
                $element
            ]),
        ];
    }

    public function rules($item): array
    {
        return [];
    }

    protected function onBoot(): void
    {

    }
}
