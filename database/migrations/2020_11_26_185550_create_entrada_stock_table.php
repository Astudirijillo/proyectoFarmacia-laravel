<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_stock', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('codProducto', 18);
            $table->char('rutProveedor', 20);
            $table->integer('cantRecibida');
            $table->date('fechaRecepcion');
            $table->date('fechaVencimiento');
            $table->unsignedInteger('idUsuario')->constrained('usuario');
            $table->dateTime('fechaCreacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_stock');
    }
}
