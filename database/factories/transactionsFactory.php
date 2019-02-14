<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'account_id' => $faker->foreignerIdNumber,
        'fechaHora' => $faker->date . " " . $faker->time,
        'tipo' => $faker->regexify(I|R),
        'cantidad' => $faker->randomNumber
    ];
});
