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
      'cytology'=> $faker->word,
      'others'=> $faker->word,
      'histopathology'=> $faker->word,

      'cytology_01'=> $faker->word,

      'type_of_biopsy'=> $faker->word,
      'specimen_info'=> $faker->word,
      'imaging_details'=> $faker->word,
      'clinical_details'=> $faker->word,
      'send_to'=> $faker->word,
      'consultant_sign'=> $faker->word,
      'consultant_name'=> $faker->word,
      'date_for_sign'=> $faker->date,
      'time_for_sign'=> $faker->time
    ];

});
