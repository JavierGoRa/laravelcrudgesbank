<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'numCuenta' => $faker->name,
        'client_id' => $faker->randomNumber,
        'fechaAlta' => $faker->date,
        'saldo'=> $faker->randomNumber,
        'fechaUMov'=> $faker->date,
        'numMvtos' => $faker->randomNumber

    ];
});
