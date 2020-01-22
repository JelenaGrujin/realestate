<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Realestate::class, function (Faker $faker) {
    return [
        'realestate_type_id'=> '1',
        'status_id'=>'1',
        'street_number'=> $faker->buildingNumber,
        'realestate_number' =>$faker->buildingNumber,
        'price'=>$faker->randomNumber(3),
        'minimal_price'=>$faker->randomNumber(2),
        'deposit'=>$faker->randomNumber(2),
        'commission'=>$faker->randomNumber(2),
        'payment_option_id'=>'1',
        'construct_year'=>$faker->year,
        'floors'=>$faker->randomNumber(2),
        'of_floors'=>$faker->randomNumber(2),
        'level'=>$faker->randomNumber(1),
        'salon'=>$faker->randomNumber(2),
        'surface_area'=>$faker->randomNumber(2),
        'structure_id'=>'1',
        'celling_height'=>$faker->randomNumber(2),
        'number_of_rooms'=>$faker->randomNumber(1),
        'number_of_bath'=>$faker->randomNumber(1),
        'number_of_terrace'=>$faker->randomNumber(1),
        'number_of_elevator'=>$faker->randomNumber(1),
        'number_of_air_conditions'=>$faker->randomNumber(1),
        'number_of_garage'=>$faker->randomNumber(1),
        'info'=>$faker->randomNumber(2),
        'electric'=>$faker->randomNumber(2),
        'network'=>$faker->randomNumber(2),
        'maintenance'=>$faker->randomNumber(2),
        'description'=>$faker->sentence,
        'note'=>$faker->sentence(1),
        'owner_id'=>function () {return factory(App\Owner::class)->create()->id;},
        'active'=>$faker->boolean,
        'active_from_date'=>$faker->date(),
    ];
});
