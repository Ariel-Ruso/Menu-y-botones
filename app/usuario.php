<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
     protected $table = "usuarios";

    protected $fillable = ['id','nombre', 'email', 'password'];

    function visita(){

    	return $this->belongsto('app\visita');
    }
}
