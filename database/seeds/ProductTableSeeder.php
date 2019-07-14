<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'url' => $faker->slug,
                'image' => $faker->word,
                'content' => $faker->text,
                'price' => 12.2,
                'cat_id' => $faker->randomDigit,
                'stock' => 1,
                'active' => 1
            ]);
        }
    }
}
