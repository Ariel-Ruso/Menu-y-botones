<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    public function run(){
        Rol::truncate();
        
        $rol= new Rol();
        $rol->nombre= "Admin";
        $rol->save();

        $rol= new Rol();
        $rol->nombre= "Vendedor";
        $rol->save();
    }
}
