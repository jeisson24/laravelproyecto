<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id_curso');
            $table->integer('fk_categoria')->unsigned()->nullable();
            $table->string('nombre_curso',100);
            $table->text('descripcion');
            $table->string('imagen_portada',200);
            //$table->foreign('fk_categoria')->references('id_categoria')->on('categoria');
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
        Schema::dropIfExists('curso');
    }
}
