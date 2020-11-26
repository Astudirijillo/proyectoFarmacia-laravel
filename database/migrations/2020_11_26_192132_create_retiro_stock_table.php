<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetiroStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiro_stock', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->char('codProducto', 20);
            $table->integer('cantRetirada');
            $table->date('fechaRetiro');
            $table->longText('motivoRetiro');
            $table->integer('idUsuario');
            $table->dateTime('fechacreacion');
            $table->foreign('idUsuario')->references('id')->on('usuario');
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
        Schema::dropIfExists('retiro_stock');
    }
}
