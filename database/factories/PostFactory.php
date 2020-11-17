<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence();
    $slug = str_slug($title);

    return [
        'title' => $title,
        'slug' => $slug,
        'description' => $faker->text,
        'category_id' => $faker->numberBetween(1,5),
        'user_id' => $faker->numberBetween(1,10),
    ];
});
