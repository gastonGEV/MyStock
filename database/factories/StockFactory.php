<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Stock::class, function (Faker $faker) {
    return [
        //'id' => $faker->numberBetween(1,5),
        'cant' => $faker->numberBetween(0,500),
        'id' => function () {
            return factory(MyStock\Product::class)->create()->id;
        }
    ];
});
