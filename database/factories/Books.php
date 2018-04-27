<?php

use Faker\Generator as Faker;

//factory(App\Books::class,30)->create();

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Books::class, function (Faker $faker) {
  return [
    'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    'year' => $faker->year,
    'author'=> $faker->name,
    'publisher'  => $faker->name,
    'price' => $faker->randomNumber(2),
    'review' => $faker->text
    ];
});

