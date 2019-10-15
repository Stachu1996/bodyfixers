<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'email' => $faker->email(),
        'name' => $faker->firstName(),
        'surname' => $faker->lastName(),
        'phone' => $faker->phoneNumber(),
        'city' => $faker->city(),
        'postcode' => $faker->postcode(),
        'street' => $faker->streetName(),
        'building_nr' => $faker->buildingNumber(),
        'room_nr' => $faker->numberBetween(0,100),
        'stair_case' => $faker->numberBetween(0, 100),
        'floor' => $faker->numberBetween(0,10),
        'stair_case_code' => $faker->locale().$faker->numerify(),

        'note' => $faker->text(),

        'marketing_allowed' => $faker->boolean(),
    ];
});
