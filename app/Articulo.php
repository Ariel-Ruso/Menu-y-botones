<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function categoria(){
        //articulo pertenece a una Categoria
        return $this->belongsTo (Categoria::class); 
    }

  /*  public function scopeNombre($query, $nombre){

    if($nombre){
        return $query->where('nombre', 'like', "%$nombre%");
        
    }
   } */

    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    } 
/* 
    public function scopeBuscarpor($query, $cates, $tipo, $buscar) {
        dd($cates);
    	if( ($cates) ) {

    		return $query->where($cates->id,'like',"%$buscar%");
        }
        elseif( ($tipo) && ($buscar) ){
            return $query->where($tipo,'like',"%$buscar%");
        }
    } 
 */

}
