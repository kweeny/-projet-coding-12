<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    $cate = [
        'sports', 'nature', 'fashion', 'technics', 'animals', 'city',];
    return [
        'name'=> $faker->name(),
        'title'=> $faker->name(),
        'description'=> $faker->text(),
        'img_work'=> $faker->imageUrl(450, 300, $faker->randomElement($cate)),
    ];
});
