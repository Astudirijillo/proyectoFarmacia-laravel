<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class SimbolosAsociadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $simbolosAsociados = [];

        foreach (range(1,20) as $index){
            $simbolosAsociados[] = [

            ];
        }
    }
}
