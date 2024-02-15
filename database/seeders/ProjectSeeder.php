<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class ProjectSeeder extends Seeder
{

    public function get_all_jpg($dir, $resolution) {
        $fname = [];

        foreach (glob($dir . '//*'.$resolution) as $fileName) {
            $fname[basename($fileName)] = $dir. "//" . basename($fileName);
        }

        return $fname;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_element = [
            "Хвойный сад на склоне" => 2021,

            "Комфортный отдых" => 2022,
            "Классика сада" => 2022,
            "Позитивный настрой" => 2022,
            "Солнечный сад" => 2022,

            "В Гармонии с природой" => 2023,
            "Гармония" => 2023,
            "На краю облака" => 2023,
            "Релакс" => 2023,

            "На крыльях фантазии" => 2024,
        ];

        $data_obl = [
            "Хвойный сад на склоне" => "Хвойный сад на склоне.webp",

            "Классика сада" => "Классика сада.webp",
            "Комфортный отдых" => "Комфортный отдых.webp",
            "Позитивный настрой" => "Позитивный настрой.webp",
            "Солнечный сад" => "Солнечный сад.webp",

            "В Гармонии с природой" => "В Гармонии с природой.webp",
            "Гармония" => "Гармония.webp",
            "На краю облака" => "На краю облака.webp",
            "Релакс" => "Релакс.webp",

            "На крыльях фантазии" => "На крыльях фантазии.webp",
        ];

        $data_text = [
            "Хвойный сад на склоне" => 'Проект сада "Хвойный сад на склоне" выполнен в 2021г.',

            "Классика сада" => 'Проект сада "Классика сада" выполнен и реализован в 2022г.',
            "Комфортный отдых" => 'Проект сада "Комфортный отдых" выполнен в 2022г.',
            "Позитивный настрой" => 'Дендроплан для сада "Позитивный настрой" разработан в 2022г.',
            "Солнечный сад" => 'Проект сада "Солнечный сад" выполнен в 2022г.',

            "В Гармонии с природой" => 'Проект сада "В гармонии с природой" выполнен в 2023г.',
            "Гармония" => 'Эскиз сада "Гармония" выполнен в 2023г.',
            "На краю облака" => 'Концепция сада "На краю облака" выполнена в 2023г.',
            "Релакс" => 'Проект сада "Релакс" выполнен в 2023г.',

            "На крыльях фантазии" => 'Концепция сада "На крыльях фантазии" находится в разработке',
        ];

        foreach ($data_element as $key => $item) {

            $photo = $this->get_all_jpg(public_path("project/".$item."/".$key), ".jpg");
            $pdf = $this->get_all_jpg(public_path("project/".$item."/".$key), ".pdf");

            $oblozgka = "oblozgka/.$data_obl[$key]";

            Storage::disk('public')->put($oblozgka, file_get_contents(public_path("project/obl/".$data_obl[$key])), 'public');

            $galery = [];
            $i = 0;
            foreach ($photo as $key_inner => $item_inner) {
                Storage::disk('public')->put("project/".$key_inner, file_get_contents($item_inner), 'public');
                $galery[] = "project/".$key_inner;
            }

            $files = [];
            foreach ($pdf as $key_inner => $item_inner) {
                Storage::disk('public')->put("project/".$key_inner, file_get_contents($item_inner), 'public');
                $files[] = "project/".$key_inner;
            }

            DB::table("projects")->insert(
                [
                    'title' => $key,
                    'year' => (int)$item,
                    'slug' => Str::slug($key),
                    'img' => $oblozgka,
                    'galery' => json_encode($galery),
                    'file' => json_encode($files),
                    'description' => $data_text[$key],
                    'seo_title' => $key." - проект ландшафтного дизайна",
                    'seo_description' => "Проект благоустройства ".$key." выполнен в ".$item."г.",
                ]
            );
        }
    }
}
