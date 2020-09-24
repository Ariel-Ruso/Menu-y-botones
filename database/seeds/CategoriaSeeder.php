<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::truncate(); //no duplica datos
        $categoria= new Categoria();
        $categoria->nombre= "Cate 1";
        $categoria->detalle= "1 categoria ";
        $categoria-> save();
    }
}
