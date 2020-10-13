<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Courses;
use Faker\Generator as Faker;

$factory->define(Courses::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'content' => $faker->text,
        'reviews' => $faker->randomDigit,
        'time' => $faker->randomDigit,
        'secondName' => $faker->name,
        'secondContent' => $faker->text,
        'price' => $faker->randomNumber(3),
        'seats' => $faker->randomNumber(3),
        'length' => $faker->randomNumber(1),
        'category' => $faker->name,
        'lesson' => $faker->name,
        'level' => $faker->name
    ];
});
