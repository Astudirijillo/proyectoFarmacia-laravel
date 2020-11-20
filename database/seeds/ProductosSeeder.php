<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $products = [];

        foreach (range(1,20) as $index){
            $products[] = [
                'name' => "Product $index",
                'price' => $faker->randomDigit(0)*100,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('products')->insert($products);
    }
}
