<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class EntradaStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $entradaStock = [];

        foreach (range(1,20) as $index) {
            $entradaStock[] = [
                'codProducto'=> $faker -> randomDigit(111111111111111111)*999999999999999999,
                'rutProveedor' => "11.11$index.11$index-1",
                'cantRecibida' => $faker -> randomDigit(1)*150,
                'fechaRecepcion' => now(),
                'fechaVencimiento' => $faker -> date('d-m-Y', '31-12-2030'),
                'idUsuario' => "$index",
                'fechaCreacion' => now(),
            ];
        }
    }
}
