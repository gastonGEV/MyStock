<?php

use Faker\Generator as Faker;

$factory->define(MyStock\ProCombo::class, function (Faker $faker) {
    return [
        'combo_id' => function () {
            return factory(MyStock\Combo::class)->create()->id;
        },
        'product_id' => function () {
            return factory(MyStock\Product::class)->create()->id;
        },
        'cant_product' => $faker->numberBetween(5,50)
    ];
});
