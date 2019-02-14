<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellidos' => $faker->lastname,
        'telefono' => $faker->regexify('\d{9}'),
        'ciudad' => $faker->city,
        'dni' => $faker->regexify('\d{8}[a-z]'),
        'email' => $faker->safeEmail,
    ];
});
