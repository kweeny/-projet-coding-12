<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'title'=> $faker->name(),
        'description' => $faker->text(),
    ];
});
