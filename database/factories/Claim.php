<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Claims::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'phone'=>$faker->randomNumber(3),
        'email'=>$faker->email,
        'price'=>$faker->randomNumber(),
        'surface_area'=>$faker->randomNumber(),
    ];
});
