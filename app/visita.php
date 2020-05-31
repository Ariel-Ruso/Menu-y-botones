<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class visita extends Model implements SluggableInterface
{
    use SluggableTrait;
    protected $sluggable = [
        'build_from' =>  'title',
        'save_to'    =>  'slug'
    ];

	protected $table = "Visita";

    protected $fillable = ["fecha"];

    public function pacientes()
    {
    	return $this->hasmany('app\paciente');
    }

    public function medico()
    {
    	return $this->belongsto('app\medico');

    }
    
}
