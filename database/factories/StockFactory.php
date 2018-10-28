<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Stock::class, function (Faker $faker) {
    return [
        'cant' => $faker->unique()->numberBetween(0,1000)
    ];
});
