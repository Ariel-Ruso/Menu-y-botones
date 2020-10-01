<?php

namespace App;
use App\Usuario;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function usuario()
    {
        return $this->hasMany(Usuario::class);
    }
}
