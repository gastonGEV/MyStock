<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Product::class, function (Faker $faker) {
    return [
        'barcode' => $faker->ean13,
        'name' => $faker->word,
        'cantMin' => $faker->numberBetween(10,500),
        'cost'=> $faker->randomFloat(2, 10, 100),
    ];
});
