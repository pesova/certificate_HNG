<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Certificate;
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

$factory->define(Certificate::class, function (Faker $faker) {
    return [
        'hngi_id' => Str::random(6),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'track' => Str::random(10),
        'total_downloads' => 2,
        'downloadable' => 1,
    ];
});
