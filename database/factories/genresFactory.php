<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Genre;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'type'=>$faker->firstName()
    ];
});
