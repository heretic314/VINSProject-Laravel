<?php

use Faker\Generator as Faker;

$factory->define(App\CodeBlueEvaluationForm::class, function (Faker $faker) {
    return [
        //
        'drill' => $faker->word,
        'actual_code_blue' => $faker->word,
        '00' => $faker->word,
        'comm_00' => $faker->word,
        '01' => $faker->word,
        'comm_01' => $faker->word,
        '02' => $faker->word,
        'comm_02' => $faker->word,
        '03' => $faker->word,
        'comm_03' => $faker->word,
        '04' => $faker->word,
        'comm_04' => $faker->word,
        '05' => $faker->word,
        'comm_05' => $faker->word,
        '06' => $faker->word,
        'comm_06' => $faker->word,
        '07' => $faker->word,
        'comm_07' => $faker->word,
        '08' => $faker->word,
        'comm_08' => $faker->word,
        '09' => $faker->word,
        'comm_09' => $faker->word
    ];
});
