<?php

use App\Turtle;
use Faker\Generator as Faker;

$factory->define(Turtle::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'turtle_key'=>801372,
        'status' => $faker->boolean(),
    ];
});
