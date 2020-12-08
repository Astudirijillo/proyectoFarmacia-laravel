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
            $table->id()->autoIncrement();
            $table->char('codProducto',18);
            $table->char('undStock');
            $table->char('rutProveedor',20);
            $table->date('fechaVencimiento');
            $table->unsignedInteger('idUsuario')->constrained('usuario');
            $table->date('fechaCreacion');
            $table->date('fechaModificacion');

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
