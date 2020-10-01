<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->name,
        'categorias_id'=>rand(1, 5),
        'cantidad'=>rand(2, 500),
        'precio'=> rand(3,5000),
        'created_at'=> now(),
        
    ];
});
