<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use MoonShine\Pages\Page;

class Dashboard extends Page
{
    public string $title = "Студия ландшафтного Розмарин";

    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Dashboard';
    }

    public function components(): array
	{
		return [];
	}
}
