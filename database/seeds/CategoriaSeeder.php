<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate= new Categoria();
        $cate->nombre= "Electronica";
        $cate->save();

        $cate= new Categoria();
        $cate->nombre= "Casa y Jardin";
        $cate->save();

        $cate= new Categoria();
        $cate->nombre= "Ropa y Calzado";
        $cate->save();

        $cate= new Categoria();
        $cate->nombre= "Salud y Belleza";
        $cate->save();
    }
}
