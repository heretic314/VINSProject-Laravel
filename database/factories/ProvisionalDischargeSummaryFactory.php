<?php

use Faker\Generator as Faker;

$factory->define(App\ProvisionDischargeSummary::class, function (Faker $faker) {
    return [
      'address' => $faker->word,
      'date_of_discharge' => $faker->date,
      'addressograph' => $faker->word,
      'ref_by' => $faker->word,
      'room_no' => $faker->word,
      'diagnosis' => $faker->word,
      'condition_on_discharge' => $faker->word,
      'advice_on_discharge' => $faker->word,
      'followup' => $faker->word,
      'collect_discharge_summary_on' => $faker->date,
      'collect_discharge_summary_at' => $faker->word,
      'collect_discharge_summary_from' => $faker->word,
    ];
});
