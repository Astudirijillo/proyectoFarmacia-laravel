<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $usuario = [];

        foreach (range(1, 20) as $index) {
            $usuario[] = [
                'primerNombre' => $faker -> name,
                'apellidos' => $faker -> lastName,
                'nroDocumento' => "11.11$index.11$index-1",
                'correoElectronico' => $faker -> unique()-> safeEmail,
                'contraseña' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'nroTelefonico' => $faker -> unique() -> phoneNumber,
                'adminOpc' => $faker -> boolea,

            ];
        }
    }
}
