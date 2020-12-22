<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class StockProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $stockProducts = [];

        foreach (range(1,20) as $index){
            $stockProducts[] = [
                'codProducto' => $faker -> randomDigit(111111111111111111)*999999999999999999,
                'undStock' => $faker -> randomDigit(1)*150,
                'rutProveedor' => $faker -> randomDigit(111111111)*999999999,
                'fechaVencimiento' => $faker -> $faker -> date('d-m-Y', '31-12-2030'),
            ];
        }
    }
}
