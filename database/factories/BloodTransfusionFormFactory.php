<?php

use Faker\Generator as Faker;

$factory->define(App\BloodTransfusionForm::class, function (Faker $faker) {
    return [
      'patient_name' => $faker->word,
      'ipd_no' => $faker->word,
      'age' => $faker->word,
      'sex' => $faker->word,
      'date' => $faker->date,
      'time' => $faker->time,
      'blood_group' => $faker->word,
      'history_bt' => $faker->word,
      'adv' => $faker->word,
      'blood_bag_no' => $faker->word,
      'blood_bag_group' => $faker->word,
      'prod_name' => $faker->word,
      'name_blood_bank' => $faker->word,
      'expiry_date' => $faker->date,
      'checked_by' => $faker->word,
      'unit_nurse' => $faker->word,
      'start_time' => $faker->time,
      'end_time' => $faker->time,
      'minor_reaction' => $faker->word,
      'moderate' => $faker->word,
      'major_reactions' => $faker->word,
      'time_adverse' => $faker->word,
    ];
});
