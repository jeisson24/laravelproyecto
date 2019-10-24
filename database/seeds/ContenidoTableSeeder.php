<?php

use Illuminate\Database\Seeder;
use App\Contenido;
class ContenidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cantenido::truncate();
        Contenido::create([
          "fk_curso"=>1,
          "nombre_contenido"=>"Presentacion del curso Laravel"
        ]);
        Contenido::create([
            "fk_curso"=>1,
            "nombre_contenido"=>"Instalacion de laravel"
        ]);
        Contenido::create([
            "fk_curso"=>2,
            "nombre_contenido"=>"Presentacion del curso Laravel"
          ]);
          Contenido::create([
              "fk_curso"=>1,
              "nombre_contenido"=>"Instalacion de HTML"
          ]);
          
        
          
    }
}
