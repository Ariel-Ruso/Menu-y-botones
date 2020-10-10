<?php

use Illuminate\Database\Seeder;
use App\Articulo;

class ArticuloSeeder extends Seeder
{
    
    public function run()
    {
        factory(Articulo::class, 20)->create();
        
    }
}
