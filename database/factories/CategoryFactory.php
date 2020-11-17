<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'category'=> $faker->word,
        'user_id'=> $faker->numberBetween(1,10),
    ];
});
