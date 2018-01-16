<?php

use Faker\Generator as Faker;

$factory->define(App\LabSheet::class, function (Faker $faker) {
  return [
        'room_no'=>$faker->word,
        'date' => $faker->date,
        'date_01' => $faker->date,
        'date_02' => $faker->date,
        'date_03' => $faker->date,
        'date_04' => $faker->date,
        'date_05' => $faker->date,
        'date_06' => $faker->date,
        'date_07' => $faker->date,
        'name_01' => $faker->word,
        'name_02' => $faker->word,
        'name_03' => $faker->word,
        'name_04' => $faker->word,
        'name_05' => $faker->word,
        'name_06' => $faker->word,
        'name_07' => $faker->word,
        'investigation_01' => $faker->word,
        'investigation_02' => $faker->word,
        'investigation_03' => $faker->word,
        'investigation_04' => $faker->word,
        'investigation_05' => $faker->word,
        'investigation_06' => $faker->word,
        'investigation_07' => $faker->word,
        'remark_01' => $faker->word,
        'remark_02' => $faker->word,
        'remark_03' => $faker->word,
        'remark_04' => $faker->word,
        'remark_05' => $faker->word,
        'remark_06' => $faker->word,
        'remark_07' => $faker->word
      ];
  });
