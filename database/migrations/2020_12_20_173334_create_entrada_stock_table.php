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
            $table->id();
            $table->char('rutProveedor', 20);
            $table->integer('codProducto');
            $table->integer('undRecibidas');
            $table->date('fechaRecepcion');
            $table->date('fechaVencimiento');
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
        Schema::dropIfExists('entrada_stock');
    }
}
