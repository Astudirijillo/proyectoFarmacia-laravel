<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class ProveedorSeeder extends Seeder
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

        foreach (range(1, 20) as $index) {
            $entradaStock[] = [
                'razonSocial' => $faker->name,
                'rut' => "11.11$index.11$index-1",
                'correoElectronico' => $faker->unique()->safeEmail,
                'direccion' => $faker->name,
                'nroTelefonico' => $faker->randomElement(['Calle falsa 123', 'Zacarias Cuetes S/N', 'Av. Bernardo OHiggins 652']),
                'idUsuario' => $faker->usuario::inRandomOrder()->value('id') ?: factory(Professional::class),
                'fechaCreacion' => now(),
                'fechaModificacion' => $faker -> date('d-m-Y', '31-12-2030'),
            ];
        }
    }
}
