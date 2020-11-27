<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_productos', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->char('codProducto',18);
            $table->char('undStock');
            $table->char('rutProveedor',20);
            $table->char('nroLoteIngreso');
            $table->date('fechaVencimiento');
            $table->integer('idUsuario');
            $table->date('fechaCreacion');
            $table->foreign('idUsuario')->references('id')->on('usuario');
            $table->date('fechaModificacion');
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
        Schema::dropIfExists('stock_productos');
    }
}
