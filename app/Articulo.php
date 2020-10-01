<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function categoria(){
        //articulo pertenece a una Categoria
        return $this->belongsTo (Categoria::class); 
    }
}
