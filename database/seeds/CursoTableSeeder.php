<?php

use Illuminate\Database\Seeder;
use App\Curso;
class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::truncate();
        Curso::create([
            "fk_categoria"=>"1",
            "nombre_curso"=>"Desarrollo de sistemas de informacion con Laravel 6",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra pretium tellus sed pellentesque. Etiam nec dolor risus. In malesuada ut massa ac semper. Nulla facilisi. Ut vel tincidunt elit, vitae tincidunt mauris. Quisque consequat arcu urna, ac bibendum felis volutpat volutpat. Vestibulum non leo porta, lacinia erat non, ultrices elit.",
            "imagen_portada"=>"https://bit4learn.com/es/wp-content/uploads/2019/07/Dise%C3%B1o-sin-t%C3%ADtulo-7_89cd94e2af9a0c8717b4e52fa0579291.png"
        ]);
        Curso::create([
            "fk_categoria"=>"2",
            "nombre_curso"=>"Diseño de sitios web con HTML 5 y CSS3",
            "descripcion"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra pretium tellus sed pellentesque. Etiam nec dolor risus. In malesuada ut massa ac semper. Nulla facilisi. Ut vel tincidunt elit, vitae tincidunt mauris. Quisque consequat arcu urna, ac bibendum felis volutpat volutpat. Vestibulum non leo porta, lacinia erat non, ultrices elit.",
            "imagen_portada"=>"https://bit4learn.com/es/wp-content/uploads/2019/07/Dise%C3%B1o-sin-t%C3%ADtulo-7_89cd94e2af9a0c8717b4e52fa0579291.png"
        ]);
    }
}
