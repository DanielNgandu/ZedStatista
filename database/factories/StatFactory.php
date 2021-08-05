<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stat;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Stat::class, function (Faker $faker) {
    return [
        'indicator_name' => Str::random(5),
        'x_value' => $faker->randomFloat(2, 0, 10000),
        'y_value' => $faker->randomFloat(2, 0, 10000)
    ];
});
