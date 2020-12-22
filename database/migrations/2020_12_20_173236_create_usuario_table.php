<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('primerNombre', 50);
            $table->string('apellidos',100);
            $table->Integer('idTipoDoc')->constrained('parametros')->nullable();
            $table->char('nroDocumento',15);
            $table->string('correoElectronico', 100);
            $table->char('contraseña', 16);
            $table->char('nroTelefonico', 12);
            $table->boolean('adminOpc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
