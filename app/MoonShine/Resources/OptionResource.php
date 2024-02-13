<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Option;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

class OptionResource extends ModelResource
{
    protected string $model = Option::class;
    protected string $title = 'Опции сайта';
    public string $column = 'title';


    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make("Название", "title"),
                Text::make("Ключ", "name"),
                TinyMce::make("Значение", "value", fn($item) => mb_strimwidth($item->value, 0, 60, "..." ))
            ]),
        ];
    }


    public function formFields(): array
    {
        $item = $this->getItem();
        $element = Textarea::make("Значение", "value", fn($item) => mb_strimwidth($item->value, 0, 60, "..." ));
        if ($item->type === "rich")
            $element = TinyMce::make("Значение", "value", fn($item) => mb_strimwidth($item->value, 0, 60, "..." ));
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make("Название", "title"),
                Text::make("Ключ", "name"),
                $element
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    protected function onBoot(): void
    {

    }
}
