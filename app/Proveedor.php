<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre',  'correo', 'contacto'
    ];
    public function articulo()
    {
        return $this->hasMany(Articulo::class);
    }
}
