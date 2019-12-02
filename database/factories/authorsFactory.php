<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;
use App\Book;
use App\Nationality;
$factory->define(Author::class, function (Faker $faker) {
    return [
        'name'=>$faker->name(),
        'surname'=>$faker->lastName(),
        'birth_date'=>$faker->date(),
        'book_id'=>$faker->numberBetween(1,App\Book::count()),
        'nationality_id'=>$faker->numberBetween(1,App\Nationality::count())

    ];
});
