<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment'=>$faker->realText(100),
        'user_id'=>$faker->numberBetween(1,App\User::count()),
        'post_id'=>$faker->numberBetween(1,App\Post::count()),

    ];
});
