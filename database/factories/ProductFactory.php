<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_id' => $faker->unique()->numberBetween(2, 500),
        'name' => $faker->unique()->firstNameMale,
        'brand' => $faker->company,
        'category_id' => $faker->numberBetween(0, 4),
        'price' => $faker->randomFloat(2, 0, 9999),
        'active' => $faker->numberBetween(0, 1),
        'by_weight' => $faker->numberBetween(0, 1)
    ];
});
