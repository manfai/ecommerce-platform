<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserAddress;
use Faker\Generator as Faker;

$factory->define(UserAddress::class, function (Faker $faker) {
    
    $addresses = [
        ["中國", "北京市", "市轄區", "東城區"],
        ["中國", "河北省", "石家莊市", "長安區"],
        ["中國", "江蘇省", "南京市", "浦口區"],
        ["中國", "江蘇省", "蘇州市", "相城區"],
        ["中國", "廣東省", "深圳市", "福田區"],
    ];
    $address   = $faker->randomElement($addresses);

    return [
        'country'       => $address[0],
        'province'      => $address[1],
        'city'          => $address[2],
        'district'      => $address[3],
        'address'       => sprintf('第%d街道第%d號', $faker->randomNumber(2), $faker->randomNumber(3)),
        'zip'           => $faker->postcode,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->e164PhoneNumber,
    ];
});

