<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("options")->insert(
            [
                [
                    "name" => "phone",
                    "type" => "plan",
                    'title' => 'Телефон',
                    "value" => "+7 960 690 59 51",
                ],
                [
                    "name" => "phone2",
                    "type" => "plan",
                    'title' => 'Телефон дополнительный',
                    "value" => "+7 919 170 75 07",
                ],

                [
                    "name" => "email",
                    "type" => "plan",
                    'title' => 'email',
                    "value" => "landshaft.rosmarin@gmail.com",
                ],

                [
                    "name" => "tg_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Telegram',
                    "value" => "https://t.me/MarinaShabanovaa",
                ],

                [
                    "name" => "vk_lnk",
                    "type" => "plan",
                    'title' => 'Ссылка на Vk',
                    "value" => "https://vk.com/club211378898",
                ],

                [
                    "name" => "policy",
                    "type" => "rich",
                    'title' => 'Политика конфиденциальности',
                    "value" => file_get_contents(public_path('text//policy.html')),
                ],

            ]);
    }
}
