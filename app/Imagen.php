<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Imagen extends Model
{
    protected $fillable= ['path'];

    public function getUrlPathAttribute(){
        
        return ('\Storage::url($this->path)');
    }
}
