<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class RetiroStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $retiroStock = [];

        foreach (range(1,20) as $index){
            $retiroStock[] = [

            ];
        }
    }
}
