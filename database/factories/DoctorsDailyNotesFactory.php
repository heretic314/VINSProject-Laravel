<?php

use Faker\Generator as Faker;

$factory->define(App\DoctorsDailyNotes::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'ipd_no' => $faker->randomNumber,
      'sex' => $faker->randomElement($array = array ('NA','Male','Female')),
      'attending_consultant' => $faker->word,
      'age' => $faker->numberBetween($min='1',$max='80'),
      'date' => $faker->date,
      'c_o_07' => $faker->word,
      'oe_pulse_07' => $faker->word,
      'bp_07' => $faker->word,
      'temp_07' => $faker->word,
      'resp_spo2_07' => $faker->word,
      'pain_07' => $faker->word,
      'c_o_09' => $faker->word,
      'oe_pulse_09' => $faker->word,
      'bp_09' => $faker->word,
      'temp_09' => $faker->word,
      'resp_spo2_09' => $faker->word,
      'pain_09' => $faker->word,
      'c_o_15' => $faker->word,
      'oe_pulse_15' => $faker->word,
      'bp_15' => $faker->word,
      'temp_15' => $faker->word,
      'resp_spo2_15' => $faker->word,
      'pain_15' => $faker->word,
      'c_o_21' => $faker->word,
      'oe_pulse_21' => $faker->word,
      'bp_21' => $faker->word,
      'temp_21' => $faker->word,
      'resp_spo2_21' => $faker->word,
      'pain_21' => $faker->word,
    ];
});
