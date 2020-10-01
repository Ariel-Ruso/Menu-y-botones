<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'correo', 'apellido', 'rol'
    ];

    public function rol(){
        //usuario pertenece a una Rol
        return $this->belongsTo (Rol::class); 
    }

   public function scopeNombre($query, $nombre){

        if($nombre){
            
            return $query->where('nombre', 'like', "%$nombre%");
            dd($query);
        }
    }

    public function scopeApellido($query, $apellido){

        if($apellido){
            return $query->where('apellido', 'like', "%$apellido%");
        }
    }
    /* 
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    } */


}
