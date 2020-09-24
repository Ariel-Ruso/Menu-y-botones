<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'correo', 'apellido', 'rol'
    ];

    public function categoria(){
        //usuario pertenece a una categoria
        return $this->belongsTo (Categoria::class); 
    }
}
