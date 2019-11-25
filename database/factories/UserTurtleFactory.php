<?php

use App\Turtle;
use App\User;
use App\UserTurtle;
use Faker\Generator as Faker;

$factory->define(UserTurtle::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'turtle_id' => Turtle::all()->unique()->random()->id,
    ];
});
