<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mission' => $faker->text,
        'history' => $faker->text,
        'vision' => $faker->text
    ];
});
