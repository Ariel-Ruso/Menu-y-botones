<?php

use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RolSeeder::class);
        //$this->call(CategoriaSeeder::class);
        //$this->call(ProveedorSeeder::class);
        $this->call(ArticuloSeeder::class);
        //$this->call(UsuarioSeeder::class);
    }
}
