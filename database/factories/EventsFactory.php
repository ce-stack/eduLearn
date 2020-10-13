<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Events;
use Faker\Generator as Faker;

$factory->define(Events::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'date' => $faker->date,
        'place' => $faker->address,
        'time' => $faker->time,
        'description' =>$faker->text,
        'secondDesc' =>$faker->text
    ];
});
