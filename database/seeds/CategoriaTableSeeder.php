<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate();
        Categoria::create([
            "categoria"=>"DESARROLLO WEB",
        ]);
        Categoria::create([
            "categoria"=>"DISEÑO WEB",
        ]);
    }
}
