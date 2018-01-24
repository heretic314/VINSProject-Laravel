<?php

use Faker\Generator as Faker;

$factory->define(App\OperativeDetailSheet::class, function (Faker $faker) {
    return [
        //
        'ot_no' => $faker->word,
        'date' => $faker->date,
        'wheel_in' => $faker->time,
        'wheel_out' => $faker->time,
        'anesthesa_induction_time' => $faker->time,
        'reversal_time' => $faker->time,
        'antibiotic1' => $faker->word,
        'antibiotic1_time' => $faker->time,
        'antibiotic2' => $faker->word,
        'antibiotic2_time' => $faker->time,
        'surgical_time_from' => $faker->time,
        'surgical_time_to' => $faker->time,
        'surgery_type' => $faker->word,
        'surgeon1' => $faker->word,
        'surgeon2' => $faker->word,
        'surgeon3' => $faker->word,
        'anesthetist1' => $faker->word,
        'anesthetist2' => $faker->word,
        'anesthetist3' => $faker->word,
        'iitv' => $faker->word,
        'fentanyl' => $faker->word,
        'drill' => $faker->word,
        'sevoflurane_desflurane' => $faker->word,
        'microscope' => $faker->word,
        'endoscope' => $faker->word,
        'cussa' => $faker->word,
        'implants' => $faker->word,
        'vendor' => $faker->word,
        'diagnosis' => $faker->word,
        'operation_performed' => $faker->word,
        'mediclaim' => $faker->word,
        'name_tpa' => $faker->word,
        'company_thirdparty' => $faker->word,
        'name_party' => $faker->word,
        'amount' => $faker->word,
        'surgery_only' => $faker->word,
        'package_surgical' => $faker->word,
        'package_total' => $faker->word

    ];
});
