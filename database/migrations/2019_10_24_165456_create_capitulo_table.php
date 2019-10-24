<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitulo', function (Blueprint $table) {
            $table->increments('id_capitulo');
            $table->integer('fk_contenido')->unsigned();
            $table->string('nombre',75);
            $table->text('descripcion');
            $table->string('url_video',200);
            $table->foreign('fk_contenido')->references('id_contenido')->on('contenido');
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
        Schema::dropIfExists('capitulo');
    }
}
