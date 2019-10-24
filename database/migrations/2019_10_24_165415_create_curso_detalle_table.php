<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_detalle', function (Blueprint $table) {
            $table->increments('id_curso_detalle');
            $table->integer('fk_curso')->unsigned();
            $table->text('requisitos');
            $table->foreign('fk_curso')->references('id_curso')->on('curso');
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
        Schema::dropIfExists('curso_detalle');
    }
}
