<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorsHandover::class, function (Faker $faker) {
    return [
        //

        'surgical_day' => $faker->word,
        'surgical_night' => $faker->word,
        'tentative_date_of_surgery_day' => $faker->date,
        'tentative_date_of_surgery_night' => $faker->date,
        'date_of_surgery_day' => $faker->date,
        'date_of_surgery_night' => $faker->date,
        'physician_reference_day' => $faker->word,
        'physician_reference_night' => $faker->word,
        'other_physician_reference_day' => $faker->word,
        'other_physician_reference_night' => $faker->word,
        'pathological_investigation_done_day' => $faker->word,
        'pathological_investigation_done_night' => $faker->word,
        'pathological_investigation_collected_day' => $faker->word,
        'pathological_investigation_collected_night' => $faker->word,
        'radiological_investigation_collected_day' => $faker->word,
        'radiological_investigation_collected_night' => $faker->word,
        'other_investigation_done_day' => $faker->word,
        'other_investigation_done_night' => $faker->word,
        'other_investigation_collected_day' => $faker->word,
        'other_investigation_collected_night' => $faker->word,
        'echo_day' => $faker->word,
        'echo_night' => $faker->word,
        'physiotherapy_day' => $faker->word,
        'physiotherapy_night' => $faker->word,
        'specific_instruction_day' => $faker->word,
        'specific_instruction_night' => $faker->word,
        'verified_by_assistant_day' => $faker->word,
        'verified_by_assistant_night' => $faker->word,
        'name_given_day' => $faker->word,
        'name_given_night' => $faker->word,
        'date_given_day' => $faker->date,
        'date_given_night' => $faker->date,
        'time_given_day' => $faker->time,
        'time_given_night' => $faker->time,
        'name_taken_day' => $faker->word,
        'name_taken_night' => $faker->word,
        'date_taken_day' => $faker->date,
        'date_taken_night' => $faker->date,
        'time_taken_day' => $faker->time,
        'time_taken_night' => $faker->time,
    ];
});
