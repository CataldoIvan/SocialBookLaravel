<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'review'=>$faker->realText(100),
        'user_id'=>$faker->numberBetween(1,App\User::count()),
        'book_id'=>$faker->numberBetween(1,App\Book::count()),
        'comment_id'=>$faker->numberBetween(1,App\Comment::count()),
        'title'=>$faker->realText(30)
        
    ];
});
