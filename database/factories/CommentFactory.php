<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'post_id'=> $faker->numberBetween(1,10),
        'user_id'=> $faker->numberBetween(1,10),
    ];
});
