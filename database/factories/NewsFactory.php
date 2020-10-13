<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'name' =>  $faker->name,
        'description' => $faker->text,
        'date' => $faker->date
    ];
});
