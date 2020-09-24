<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        //'nombre', 'correo', 'apellido', 'rol'
    ];

    public function categoria(){
        //producto pertenece a una categoria
        return $this->belongsTo (Categoria::class); 
    }

}
