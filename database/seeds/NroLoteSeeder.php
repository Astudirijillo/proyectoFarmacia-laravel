<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class NroLoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $nroLote = [];

        foreach (range(1,20) as $index) {
            $nroLote[] = [
                'idEntradaStock' => $faker -> randomDigit(0)*20,
                'nroLote' => "000$index",
                'idUsuario' => $index,
                'fechaCreacion' => now(),
                'fechaVencimiento' => $faker -> date('d-m-Y', '31-12-2030'),
            ];
        }
    }
}
