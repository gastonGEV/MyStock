<?php

use Faker\Generator as Faker;

$factory->define(MyStock\Product::class, function (Faker $faker) {
    return [
        'barcode' => $faker->ean13,
        'name' => $faker->word,
        'cantMin' => $faker->numberBetween(50,150),
        'cost'=> $faker->randomFloat(2, 10, 100),
        'stock_id' => function () {
            return factory(MyStock\Stock::class)->create()->id;
        }
    ];
});
