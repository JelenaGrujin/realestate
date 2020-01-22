<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Owner::class, function (Faker $faker) {
    return [
        'first_last_name'=>$faker->name,
        'nickname'=>$faker->word(),
        'email'=>$faker->email,
        'phone'=>$faker->word,
        'phone2'=>$faker->word(1),
        'source'=>$faker->sentence(1),
        'birthday'=>$faker->date(),
        'UMCN'=>$faker->randomNumber(),
        'ID_NUMBER'=>$faker->randomNumber(3),
        'company_name'=>$faker->name,
        'company_address'=>$faker->sentence(1),
        'responsible_person'=>$faker->name,
        'TIN'=>$faker->randomNumber(),
        'company_number'=>$faker->randomNumber(3),
        'activity_code'=>$faker->randomNumber(3),
        'user_id'=>function(){return factory(App\User::class)->create()->id;},
    ];
});
