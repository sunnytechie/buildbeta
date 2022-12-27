<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed the products table
        // \App\Models\Product::factory(100)->create();

        $faker = Faker::create();
        foreach(range(1, 2) as $index) {
            DB::table('products')->insert([
                'user_id' => 1,
                'title' => 'Sunny Building',
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 1, 1000),
                'image' => $faker->imageUrl(640, 480, 'building', true, 'Faker', true),
                'thumbnail' => $faker->imageUrl(150, 150, 'building', true, 'Faker', true),
                'thumbnail1' => $faker->imageUrl(150, 150, 'building', true, 'Faker', true),
                'thumbnail2' => $faker->imageUrl(150, 150, 'building', true, 'Faker', true),
                'thumbnail3' => 'https://via.placeholder.com/150',
                'thumbnail4' => 'https://via.placeholder.com/150',
                'thumbnail5' => 'https://via.placeholder.com/150',
                'category_id' => $faker->numberBetween(1, 5),
                'category_title' => $faker->word,
                'subcategory_id' => $faker->numberBetween(1, 5),
                'subcategory_title' => $faker->word,
                'provider_id' => $faker->numberBetween(1, 3),
                'publish' => 1,
            ]);
        }

    }
}
