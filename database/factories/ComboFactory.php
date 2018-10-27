<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Combo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cost'=> $faker->randomFloat(2, 1000, 3000),
        'discount'=> $faker->randomFloat(2, 10, 100),
    ];
});
