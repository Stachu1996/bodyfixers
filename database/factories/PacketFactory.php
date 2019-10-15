<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Packet;
use Faker\Generator as Faker;

$factory->define(Packet::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'short_description' => $faker->text(),
        'description' => $faker->realText(),
        'active' => $faker->boolean(80),
    ];
});
