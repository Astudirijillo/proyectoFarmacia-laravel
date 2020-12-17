<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoSimbolosAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_simbolos_asociados', function (Blueprint $table) {
            $table->unsignedInteger('idProducto')->constrained('producto');
            $table->unsignedInteger('idSimbolo')->constrained('simbolos_asociados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_simbolos_asociados');
    }
}
