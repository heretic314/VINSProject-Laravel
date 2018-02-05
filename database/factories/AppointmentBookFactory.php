<?php

use Faker\Generator as Faker;

$factory->define(App\AppointmentBook::class, function (Faker $faker) {
    return [
      'date' => $faker->date,
      'name_of_patient' => $faker->word,
      'contact_no' => $faker->word,
      'appointment_time' => $faker->time,
      'consultant_name' => $faker->word,
    ];
});
