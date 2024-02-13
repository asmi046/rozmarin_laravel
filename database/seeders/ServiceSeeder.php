<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_element = [
            "Консультация дизайнера" => "consultation.webp",
            "Проектирование и визуализация" => "project-visualization.webp",
            "Благоустройство и озеленение" => "blagoustroistvo.webp",
            "Уход за садом" => "uhod-za-sadom.webp",
            "Вертикальное озеленение" => "vert-ozelinenie.webp",
        ];

        $text_element = [
            "Консультация дизайнера" => "text//services//consultation.html",
            "Проектирование и визуализация" => "text//services//project-visualization.html",
            "Благоустройство и озеленение" => "text//services//blagoustroistvo.html",
            "Уход за садом" => "text//services//uhod-za-sadom.html",
            "Вертикальное озеленение" => "text//services//vert-ozelinenie.html",
        ];



        foreach ($data_element as $key => $item) {

            Storage::disk('public')->put("services/".$item, file_get_contents(public_path('img/services/'.$item)), 'public');
            Storage::disk('public')->put("galery/g1.jpg", file_get_contents(public_path('img/galery/g1.jpg')), 'public');
            Storage::disk('public')->put("galery/g2.jpg", file_get_contents(public_path('img/galery/g2.jpg')), 'public');

            DB::table("services")->insert(
                [
                    'title' => $key,
                    'slug' => Str::slug($key),
                    'img' => $item,
                    'galery' => json_encode(["galery/g2.jpg", "galery/g1.jpg"]),
                    'description' => file_get_contents(public_path($text_element[$key])),
                    'seo_title' => $key,
                    'seo_description' => $key,
                ]
            );
        }


    }
}
