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

            "Классика сада" => 2022,
            "Комфортный отдых" => 2022,
            "Позитивный настрой" => 2022,
            "Солнечный сад" => 2022,

            "В Гармонии с природой" => 2023,
            "Гармония" => 2023,
            "На краю облака" => 2023,
            "Релакс" => 2023,

            "На крыльях фантазии" => 2024,
        ];

        foreach ($data_element as $key => $item) {

            $photo = $this->get_all_jpg(public_path("project/".$item."/".$key), ".jpg");
            $pdf = $this->get_all_jpg(public_path("project/".$item."/".$key), ".pdf");

            $oblozgka = "";
            $galery = [];
            $i = 0;
            foreach ($photo as $key_inner => $item_inner) {
                Storage::disk('public')->put("project/".$key_inner, file_get_contents($item_inner), 'public');

                $galery[] = "project/".$key_inner;

                if ($i == 0)
                    $oblozgka = "project/".$key_inner;

                $i++;
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
                    'description' => "Проект «".$key."» выполнен в ".$item."г.",
                    'seo_title' => $key." - проект ландшафтного дизайна",
                    'seo_description' => "Проект благоустройства ".$key." выполнен в ".$item."г.",
                ]
            );
        }
    }
}
