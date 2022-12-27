<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 3) as $index) {
            DB::table('sliders')->insert([
                'title' => $faker->sentence(3),
                'tagline' => $faker->sentence(3),
                'promo_price' => $faker->numberBetween(100, 1000),
                'image' => $faker->imageUrl(833, 445, 'cats', true, 'Faker'),
                'button_text' => $faker->sentence(3),
                'button_link' => $faker->url,
                'button_color' => $faker->hexcolor,
                'button_text_color' => $faker->hexcolor,
                'button_hover_color' => $faker->hexcolor,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
