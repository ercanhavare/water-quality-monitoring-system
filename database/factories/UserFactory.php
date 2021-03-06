<?php

use App\Country;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('Alagadi@2019'), // password
        'mobile_phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'type'=>$faker->randomElement(['admin','member']),
        'status'=>$faker->boolean,
        'remember_token' => Str::random(10),
    ];
});
