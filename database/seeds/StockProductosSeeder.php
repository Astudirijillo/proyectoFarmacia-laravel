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

            ];
        }
    }
}
