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
                'codProducto'=> $faker -> randomDigit(111111111111111111)*999999999999999999,
                'marcaComercial' => $faker -> name,
                'nombreCientifico' => $faker -> name,
                'biequivOpc' => $faker -> boolean,

            ];
        }
        DB::table('products')->insert($products);
    }
}
