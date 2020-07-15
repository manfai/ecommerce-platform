<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Adoption;
use Faker\Generator as Faker;
use App\Models\User;

$factory->define(Adoption::class, function (Faker $faker) {

    $image = $faker->randomElement([
        'https://www.mkvetgroup.co.uk/wp-content/uploads/2017/03/Angus-300x300.jpg',
        'https://www.boulderhumane.org/wp-content/uploads/2018/07/cat-square-300x300.jpg',
        'https://www.israelhayom.com/wp-content/uploads/2020/04/why-cats-are-best-pets-worshipped-animals-1559234295-300x300.jpg',
        'https://i.pinimg.com/474x/18/4b/8f/184b8f2c10e30326f6ee92b3652408ac.jpg',
        'https://s3.amazonaws.com/petcentral.com/wp-content/uploads/2019/10/24161639/abyssinian-cat-card.jpg'
    ]);
    $int= mt_rand(1262055681,1262055681);
    return [
        'user_id' => User::inRandomOrder()->limit(1)->first()->id,
        'title' => $faker->words(3,true),
        'description' => $faker->sentence,
        'name' => $faker->word,
        'image' => $image,
        'gender' => $faker->randomElement(['male','female']),
        'dob' => $faker->date("Y-m-d H:i:s",$int),
        'breed' => $faker->randomElement(['british-shorthair','american-shorthair','american-curl','abyssinian']),
    ];
});
