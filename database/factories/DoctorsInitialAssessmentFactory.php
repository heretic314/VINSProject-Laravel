<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorsInitialAssessment::class, function (Faker $faker) {
    return [
      'history' => $faker->word,
      'past_history' => $faker->word,
      'allergic_history' => $faker->word,
      'name_informant' => $faker->word,
      'brought_by' => $faker->word,
      'place_of_accident' => $faker->word,
      'current_time' => $faker->time,
      'current_date' => $faker->date,
      'mlc' => $faker->word,
      'loc' => $faker->word,
      'ent_bleeding' => $faker->word,
      'seizures' => $faker->word,
      'vomiting' => $faker->word,
      'pulse' => $faker->word,
      'temp' => $faker->word,
      'bp' => $faker->word,
      'spo2' => $faker->word,
      'rbs' => $faker->word,
      'pain' => $faker->word,
      'gcs_e' => $faker->word,
      'gcs_m' => $faker->word,
      'gcs_v' => $faker->word,
      'systematic_examination' => $faker->word,
      'any_other' => $faker->word,
      'treated_on_admission' => $faker->word,
      'shifted_to' => $faker->word,
    ];
});
