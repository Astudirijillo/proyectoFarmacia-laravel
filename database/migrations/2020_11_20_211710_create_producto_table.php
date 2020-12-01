<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codProducto');
            $table->string('marcaComercial', 50);
            $table->string('nombreCientifico', 50);
            $table->integer('idTipoProducto');
            $table->boolean('bioequivOpc');
            $table->integer('idFormaFarmaceutica');
            $table->integer('simbolosAsociados');
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
        Schema::dropIfExists('producto');
    }
}
