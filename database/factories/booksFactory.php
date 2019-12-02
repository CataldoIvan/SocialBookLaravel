<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use App\Author;
use App\Genre;
use App\Languaje;
use App\Editorial;


$factory->define(Book::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstname(),
        'description'=>$faker->realText(100),
        'photo'=>$faker->imageUrl(640,480),
        'genre_id'=>$faker->numberBetween(1,App\Genre::count()),
        'Author_id'=>$faker->numberBetween(1,App\Author::count()),
        'genre_id'=>$faker->numberBetween(1,App\Genre::count()),
        'languaje_id'=>$faker->numberBetween(1,App\Languaje::count()),
        'editorial_id'=>$faker->numberBetween(1,App\Editorial::count())
       

    ];
});
