<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;

class Categoria extends Model
{
    //protected $table='categorias'; //significa que vamos a trabajar con la tabla de categorias
    //protected $primaryKey = 'id';
    protected $fillable =['nombre','descripcion','condicion']; 

    public function articulos(){
        return $this->hasMany('App\Articulo');
    }
}
