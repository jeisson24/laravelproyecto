<?php

use Illuminate\Database\Seeder;
use App\Pais;
class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pais::truncate();
        $paises=["Argentina","Colombia","Chile","Peru","Venezuela"];
        for($i=0;$i<=4;$i++){     
        Pais::create([
           "pais"=>$paises[$i]
        ]);
    }
        
    }
}
