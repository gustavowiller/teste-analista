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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Customer::class, function ($faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'title' => $faker->title,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'observation' => $faker->sentence
    ];
});

$factory->define(App\Address::class, function ($faker){
    return [
        'main' => $faker->boolean,
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'complement' => $faker->secondaryAddress,
        'neighborhood' => $faker->city,
        'cep'   => $faker->postcode,
        'city_id' => $faker->numberBetween(1,5570),
        'customer_id' => function () {
            return factory('App\Customer')->create()->id;
        }
    ];
});

$factory->define(App\Movie::class, function ($faker){
    return [
        'title' => $faker->words(2,true),
        'release_year' => $faker->year,
        'director' => $faker->name,
        'rating' => $faker->randomFloat(1,0,10),
        'synopsis' => $faker->sentences(3,true),
        'customer_id' => function () {
            return factory('App\Customer')->create()->id;
        }
    ];
});


