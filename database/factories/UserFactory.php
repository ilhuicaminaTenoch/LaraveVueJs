<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\CodigosPostales::class, function (Faker $faker) {

    return [
        'id_estado' => $faker->randomDigitNotNull,
        'estado' => $faker->state,
        'id_municipio' => $faker->randomDigitNotNull,
        'municipio' => $faker->country,
        'ciudad' => $faker->city,
        'zona' => $faker->city,
        'codigo_postal' => $faker->postcode,
        'asentamiento' => $faker->streetAddress,
        'tipo' => $faker->citySuffix
    ];
});
