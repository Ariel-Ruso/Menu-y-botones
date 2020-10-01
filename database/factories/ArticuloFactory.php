<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence(5),
        'categorias_id'=>rand(4, 1),
        'cantidad'=>rand(2, 500),
        'precio'=> rand(3,5000),
        'created_at'=> now(),
        
    ];
});
