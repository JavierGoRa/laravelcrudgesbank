<?php

use Faker\Generator as Faker;

$factory->define(App\Account::class, function (Faker $faker) {
    return [
        'numCuenta' => $faker->name,
        'account_id' => $faker->foreignerIdNumber,
        'fechaAlta' => $faker->date,
        'Saldo'=> $faker->randomNumber,
        'fechaUMov'=> $faker->randomNumber

    ];
});
