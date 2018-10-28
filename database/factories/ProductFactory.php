<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Product::class, function (Faker $faker) {
    return [
        'barcode' => $faker->unique()->ean13,
        'name' => $faker->unique()->word,
        'cantMin' => $faker->unique()->numberBetween(50,150),
        'cost'=> $faker->unique()->randomFloat(2, 10, 100),
        'stock_id' => function () {
            return factory(MyStock\Stock::class)->create()->id;
        }
    ];
});
