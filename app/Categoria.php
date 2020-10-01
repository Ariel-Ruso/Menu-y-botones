<?php

namespace App;
use App\Articulo;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function articulo()
    {
        return $this->hasMany(Articulo::class);
    }
}
