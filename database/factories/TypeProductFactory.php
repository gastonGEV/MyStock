<?php

use Faker\Generator as Faker;

$factory->define(MyStock\TypeProduct::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word
    ];
});
