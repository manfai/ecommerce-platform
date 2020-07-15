<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AdoptionUpload;
use Faker\Generator as Faker;

$factory->define(AdoptionUpload::class, function (Faker $faker) {
    $image = $faker->randomElement([
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTuG7RGbkDMnlzgAq9RUBVOFi_Vxbc8TKq3Hdh4zp6SA4vstpMxIKFgaBKdEQ&usqp=CAc",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSekvFcw_j3r-J3oHn8ygXrhCyTnrXWoBJLEgW1T5YaftyME5WDCZ8lf4i9wXQFIobjdfZHkmw&usqp=CAc",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTPIkjE-QYPfxOL7V7xax8hPu3tiA9Aaj0lqq3Ai97bl2_b3WGKBIMOQNaAOCA&usqp=CAc",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTOfVCZQf2wMjfVIYK6tLHeDSpCBQZ3om_ZBNOMICfnd_2mjcjDYx7hnf3lDw&usqp=CAc",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTaC04_lxP01sMIv4SqxsBylQgGjU4z8uXjCGLPmyqMj0C8TozIB3bg8sTvNg&usqp=CAc",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgLQqb2D-89Iovsnpuxlo5Gz3L6fRJFQjVisuLGWfKsiyWu-Led4PNdOwQuA&usqp=CAc",
    ]);

    return [
        'uuid'  => $faker->uuid,
        'size'  => '00',
        'type'  => 'image',
        'filetype'  => 'png',
        'filename'  => $image,
    ];
});
