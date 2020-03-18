<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'client_id' => $faker->unique()->numberBetween(0, 1000),
        'business_name' => $faker->unique()->company,
        'direction' => $faker->unique()->address,
        'business_type_id' => $faker->numberBetween(0, 5),
        'client_name' => $faker->name,
        'client_phone' => $faker->phoneNumber,
        'client_balance' => $faker->randomFloat(2, -5000, 10000),
        'active' => 1
    ];
});
