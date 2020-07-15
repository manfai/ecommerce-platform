<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    
    return [
        'country'       => 'Hong Kong',
        'province'      => 'Hong Kong',
        'city'          => $faker->village,
        'district'      => $faker->town,
        'address'       => $faker->village. ' '.$faker->estate,
        'zip'           => $faker->postcode,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->mobileNumber,
    ];
});

