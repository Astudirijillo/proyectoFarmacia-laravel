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
        Schema::create('productos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('codProducto');
            $table->string('marcaComercial', 50);
            $table->string('nombreCientifico', 50);
            $table->unsignedInteger('idTipoProducto')->constrained('parametros');
            $table->boolean('bioequivOpc');
            $table->unsignedInteger('idFormaFarmaceutica')->constrained('parametros');
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
        Schema::dropIfExists('producto');
    }
}
