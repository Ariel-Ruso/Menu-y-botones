<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido'=>"Pepe",
        'correo' => $faker->email,
        'direccion' => $faker->address,
        'rols_id'=>rand(4, 1),
    ];
});
