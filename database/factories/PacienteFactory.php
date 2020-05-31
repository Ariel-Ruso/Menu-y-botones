<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        //'apellido' => $faker->surname,
        'ciudad' => $faker->city,
        'direccion' => $faker->address,
    ];
});
