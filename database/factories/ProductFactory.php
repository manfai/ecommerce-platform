<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_2.jpg",
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_1.jpg",
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_5.jpg",
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_7.jpg",
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_4.jpg",
        "https://static.dezeen.com/uploads/2019/03/minimal-sex-toys-design_dezeen_2364_col_6-1233x1232.jpg",
    ]);

    return [
        'code'        => $faker->ean8,
        'title'        => $faker->word,
        'description'  => $faker->sentence,
        'image'        => $image,
        'on_sale'      => true,
        'rating'       => $faker->numberBetween(0, 5),
        'sold_count'   => 0,
        'review_count' => 0,
        'price'        => 0,
    ];

});
