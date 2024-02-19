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

            Storage::disk('public')->put("galery/01.webp", file_get_contents(public_path('img/galery/proj_viz/01.webp')), 'public');
            Storage::disk('public')->put("galery/1.webp", file_get_contents(public_path('img/galery/proj_viz/1.webp')), 'public');
            Storage::disk('public')->put("galery/2.webp", file_get_contents(public_path('img/galery/proj_viz/2.webp')), 'public');
            Storage::disk('public')->put("galery/3.webp", file_get_contents(public_path('img/galery/proj_viz/3.webp')), 'public');
            Storage::disk('public')->put("galery/4.webp", file_get_contents(public_path('img/galery/proj_viz/4.webp')), 'public');
            Storage::disk('public')->put("galery/5.webp", file_get_contents(public_path('img/galery/proj_viz/5.webp')), 'public');
            Storage::disk('public')->put("galery/6.webp", file_get_contents(public_path('img/galery/proj_viz/6.webp')), 'public');
            Storage::disk('public')->put("galery/7.webp", file_get_contents(public_path('img/galery/proj_viz/7.webp')), 'public');
            Storage::disk('public')->put("galery/8.webp", file_get_contents(public_path('img/galery/proj_viz/8.webp')), 'public');
            Storage::disk('public')->put("galery/9.webp", file_get_contents(public_path('img/galery/proj_viz/9.webp')), 'public');
            Storage::disk('public')->put("galery/10.webp", file_get_contents(public_path('img/galery/proj_viz/10.webp')), 'public');
            Storage::disk('public')->put("galery/11.webp", file_get_contents(public_path('img/galery/proj_viz/11.webp')), 'public');
            Storage::disk('public')->put("galery/12.webp", file_get_contents(public_path('img/galery/proj_viz/12.webp')), 'public');
            Storage::disk('public')->put("galery/13.webp", file_get_contents(public_path('img/galery/proj_viz/13.webp')), 'public');

            Storage::disk('public')->put("galery/0-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/0-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/1-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/1-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/2-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/2-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/3-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/3-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/4-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/4-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/5-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/5-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/6-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/6-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/7-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/7-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/8-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/8-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/10-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/10-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/11-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/11-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/13-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/13-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/14-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/14-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/15-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/15-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/16-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/16-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/17-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/17-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/18-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/18-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/19-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/19-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/20-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/20-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/21-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/21-voz.jpg')), 'public');
            Storage::disk('public')->put("galery/22-voz.jpg", file_get_contents(public_path('img/galery/ver_oz/22-voz.jpg')), 'public');


            $galery = json_encode([
            ]);

            if ($key === "Вертикальное озеленение")
                $galery = json_encode([
                    "galery/0-voz.jpg",
                    "galery/1-voz.jpg",
                    "galery/2-voz.jpg",
                    "galery/3-voz.jpg",
                    "galery/4-voz.jpg",
                    "galery/5-voz.jpg",
                    "galery/6-voz.jpg",
                    "galery/7-voz.jpg",
                    "galery/8-voz.jpg",
                    "galery/10-voz.jpg",
                    "galery/11-voz.jpg",
                    "galery/13-voz.jpg",
                    "galery/14-voz.jpg",
                    "galery/15-voz.jpg",
                    "galery/16-voz.jpg",
                    "galery/17-voz.jpg",
                    "galery/18-voz.jpg",
                    "galery/19-voz.jpg",
                    "galery/20-voz.jpg",
                    "galery/21-voz.jpg",
                    "galery/22-voz.jpg"
                ]);

            if ($key === "Проектирование и визуализация")
                $galery = json_encode([
                    "galery/01.webp",
                    "galery/1.webp",
                    "galery/2.webp",
                    "galery/3.webp",
                    "galery/4.webp",
                    "galery/5.webp",
                    "galery/6.webp",
                    "galery/7.webp",
                    "galery/8.webp",
                    "galery/9.webp",
                    "galery/10.webp",
                    "galery/11.webp",
                    "galery/12.webp",
                    "galery/13.webp"
                ]);

            DB::table("services")->insert(
                [
                    'title' => $key,
                    'slug' => Str::slug($key),
                    'img' => "services/".$item,
                    'galery' => $galery,
                    'description' => file_get_contents(public_path($text_element[$key])),
                    'seo_title' => $key,
                    'seo_description' => $key,
                ]
            );
        }


    }
}
