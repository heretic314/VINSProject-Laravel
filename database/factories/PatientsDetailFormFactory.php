<?php

use Faker\Generator as Faker;

$factory->define(App\PatientsDetailForm::class, function (Faker $faker) {
    return [
        //
        'date' => $faker->date,
        'time' => $faker->time,
        'first_name' => $faker->word,
        'middle_name' => $faker->word,
        'last_name' => $faker->word,
        'date_of_birth' => $faker->date,
        'sex' => $faker->word,
        'address' => $faker->word,
        'phone_no' => $faker->word,
        'mobile_no' => $faker->word,
        'reference_dr' => $faker->word,
        'consulting_dr' => $faker->word,
        'case' => $faker->word,
    ];
});
