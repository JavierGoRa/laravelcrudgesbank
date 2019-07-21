<?php

use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'account_id' => $faker->foreignerIdNumber,
        'fechaHora' => $faker->date . " " . $faker->time,
        'tipo' => $faker->regexify(I|R),
        'cantidad' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
        'concepto' => $faker->text($maxNbChars = 50),
        'numMovimiento' => $faker->numberBetween($min = 1, $max = 9000),
        'saldo' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000)
    ];
});
