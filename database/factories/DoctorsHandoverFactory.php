<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorsHandover::class, function (Faker $faker) {
    return [
        //
        'diagnosis' => $faker->word,
        'day_night' => $faker->word,
        'surgical' => $faker->word,
        'tentative_date_of_surgery' => $faker->date,
        'date_of_surgery' => $faker->date,
        'physician_reference' => $faker->word,
        'other_physician_reference' => $faker->word,
        'pathological_investigation_done' => $faker->word,
        'pathological_investigation_collected' => $faker->word,
        'radiological_investigation_collected' => $faker->word,
        'other_investigation_done' => $faker->word,
        'other_investigation_collected' => $faker->word,
        'echo' => $faker->word,
        'physiotherapy' => $faker->word,
        'specific_instruction' => $faker->word,
        'verified_by_assistant' => $faker->word,
        'name_given' => $faker->word,
        'date_given' => $faker->date,
        'time_given' => $faker->time,
        'name_taken' => $faker->word,
        'date_taken' => $faker->date,
        'time_taken' => $faker->time,

    ];
});
