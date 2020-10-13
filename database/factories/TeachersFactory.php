<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teachers;
use Faker\Generator as Faker;

$factory->define(Teachers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'position' => $faker->word,
        'text' => $faker->text,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber ,
        'accounting' => $faker->randomNumber(2),
        'reading'  => $faker->randomNumber(2),
        'writing' => $faker->randomNumber(2),
        'speaking' => $faker->randomNumber(2),
    ];
});
