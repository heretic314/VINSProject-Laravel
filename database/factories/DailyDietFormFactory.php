<?php

use Faker\Generator as Faker;

$factory->define(App\DailyDietForm::class, function (Faker $faker) {
    return [
        //
        'floor_name' => $faker->word,
        'cross_verified_by' => $faker->word,
        'date' => $faker->date,
        'room_no' => $faker->word,
        'patient_name' => $faker->word,
        'diet_suggested_by' => $faker->word,
        'm_tea' => $faker->word,
        'm_breakfast' => $faker->word,
        'soup' => $faker->word,
        'lunch' => $faker->word,
        'e_snacks' => $faker->word,
        'juice' => $faker->word,
        'dinner' => $faker->word,
        'milk' => $faker->word,
        
    ];
});
