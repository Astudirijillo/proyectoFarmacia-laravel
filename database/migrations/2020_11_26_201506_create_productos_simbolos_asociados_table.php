<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosSimbolosAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_productos_simbolos_asociados', function (Blueprint $table) {
            $table->char('idProducto')->primary();
            $table->char('idSimbolo')->primary();
            $table->foreign('idProducto')->references('id')->on('Producto');
            $table->foreign('idSimbolo')->references('id')->on('simbolo_asociado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_productos_simbolos_asociados');
    }
}
