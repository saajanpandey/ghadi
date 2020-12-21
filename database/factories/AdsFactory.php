<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ads;
use Faker\Generator as Faker;

// Factory is used to add multiple original data/real life type data in database for checking purpose
// $faker is a function that can generate various real-life data for user to add in database

// factory(App\ads::class, 'write your limit, eg:20' )->create();
// factory(App\ads::class, 20 )->create(); to find $faker name go search on google.

// php artisan tinker -> it is CUI xampp where you write database query in command-based interface

$factory->define(ads::class, function (Faker $faker) {
    return [
        'product_name'=>$faker->unique()->word,
        'product_price'=>$faker->randomDigit,
        'product_brand'=>$faker->unique()->word,
    ];
});
