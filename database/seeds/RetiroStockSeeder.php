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
                'codProducto' => $faker -> randomDigit(111111111111111111)*999999999999999999,
                'cantRetirada' => $faker -> randomDigit(1)*150,
                'fechaRetiro' => now(),
                'motivoRetiro' => $faker -> text(200),
                'idUsuario' => $faker -> usuario::inRandomOrder()-> value('id') ?: usuario::class,
                'fechaCreacion' => now,
                'fechaModificacion' => $faker -> date('d-m-Y', '31-12-2030'),
            ];
        }
    }
}
