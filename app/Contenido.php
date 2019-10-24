<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table="contenido";
    protected $primaryKey ="id_contenido";
    protected $fillable = ['fk_curso','nombre_contenido'];
}
