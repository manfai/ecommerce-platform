<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductSku;
use Faker\Generator as Faker;

$factory->define(ProductSku::class, function (Faker $faker) {
    return [
        'code'        => $faker->ean8,
        'title'       => $faker->word,
        'description' => $faker->sentence,
        'image'       => NULL,
        'meta'        => NULL,
        'price'       => $faker->randomNumber(4),
        'stock'       => $faker->randomNumber(5),
    ];
});
