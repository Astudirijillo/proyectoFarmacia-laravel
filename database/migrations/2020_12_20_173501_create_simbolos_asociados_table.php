<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimbolosAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simbolos_asociados', function (Blueprint $table) {
            $table->id();
            $table->char('codigo',5);
            $table->char('tipo',50);
            $table->char('descripcion',5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simbolos_asociados');
    }
}
