<?php

use App\Turtle;
use App\TurtleSensorsData;
use Faker\Generator as Faker;

$factory->define(TurtleSensorsData::class, function (Faker $faker) {
    return [
        'turtle_key'=> 801372,
        'ph' => $faker->randomNumber(2),
        'water_temp' => $faker->randomFloat(2, -100, 200),
        'water_orp' => $faker->randomFloat(2, -100, 200),
        'air_temp' => $faker->randomFloat(2, -100, 200),
        'air_humadity' => $faker->randomFloat(2, -100, 200),
        'ntu' => $faker->randomFloat(2, -100, 200),
 /*       'latitude' => $faker->randomFloat(7, 4, 100),
        'longitude' => $faker->randomFloat(7, 4, 100),*/
        'latitude' => 40.9963272,
        'longitude' => 28.8014007
    ];
});
