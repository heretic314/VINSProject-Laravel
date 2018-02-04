<?php

use Faker\Generator as Faker;

$factory->define(App\CultureBiopsyForm::class, function (Faker $faker) {
    return [

      'date'=> $faker->date,
      'time'=> $faker->time,
      'doctors_name'=> $faker->word,
      'given_by'=> $faker->word,
      'received_by'=> $faker->word,
      'ihc'=> $faker->word,
      'cytology_000'=> $faker->word,
      'cytology_001'=> $faker->word,
      'others'=> $faker->word,
      'histopathology_00'=> $faker->word,
      'histopathology_01'=> $faker->word,
      'cytology_00'=> $faker->word,
      'cytology_01'=> $faker->word,
      'cytology_02'=> $faker->word,
      'type_of_biopsy_01'=> $faker->word,
      'type_of_biopsy_02'=> $faker->word,
      'type_of_biopsy_03'=> $faker->word,
      'type_of_biopsy_04'=> $faker->word,
      'type_of_biopsy_05'=> $faker->word,
      'specimen_info'=> $faker->word,
      'imaging_details'=> $faker->word,
      'clinical_details'=> $faker->word,
      'send_to_00'=> $faker->word,
      'send_to_01'=> $faker->word,
      'consultant_sign'=> $faker->word,
      'consultant_name'=> $faker->word,
      'date_for_sign'=> $faker->date,
      'time_for_sign'=> $faker->time,
    ];

});
