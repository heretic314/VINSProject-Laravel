<?php

use Faker\Generator as Faker;

$factory->define(App\RadiologyRequisition::class, function (Faker $faker) {
    return [
        //
        'provisional_diagnosis' => $faker->word,
        'brain_plain' => $faker->word,
        'ct_pmns' => $faker->word,
        'brain_plain_contrast' => $faker->word,
        'ct_head_face' => $faker->word,
        'ct_face_plain' => $faker->word,
        'ct_3d' => $faker->word,
        'ct_cv_junction_flex' => $faker->word,
        'ct_cv_junction_ext' => $faker->word,
        'ct_chest_plain' => $faker->word,
        'ct_dorsal_spine' => $faker->word,
        'ct_cervical_spine' => $faker->word,
        'ct_abdomen_plain' => $faker->word,
        'ct_lumbar_spine' => $faker->word,
        'other' => $faker->word,
        'anyother' => $faker->word,
        'xray_fixed' => $faker->word,
        'xray_portable' => $faker->word,
        'other_xray' => $faker->word,
        'xray_other' => $faker->word,
        'date' => $faker->date,
        'time' => $faker->time,
    ];
});
