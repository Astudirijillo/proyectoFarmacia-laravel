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
            $table->increments('id')->primary();
            $table->string('primerNombre', 50);
            $table->string('apellidos',50);
            $table->integer('idTipoDoc')->unsigned();
            $table->char('nroDoc',15);
            $table->string('correoElectronico', 100);
            $table->char('contraseña', 16);
            $table->char('nroTelefonico', 12);
            $table->boolean('adminOpc');
            $table->timestamps();
            $table->foreign('idTipoDoc')->references('id')->on('parametros');
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
