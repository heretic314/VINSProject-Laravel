<?php

use Faker\Generator as Faker;

$factory->define(App\HistoryForm::class, function (Faker $faker) {
    return [
        //
        'chief_complaints' => $faker->word,
        'patient_history' => $faker->word,
        'past_history' => $faker->word,
        'allergic_history' => $faker->word,
        'road_accident' => $faker->word,
        'alleged_roadtrafficaccident' => $faker->word,
        'place' => $faker->word,
        'time' => $faker->time,
        'date' => $faker->date,
        'ho_loc' => $faker->word,
        'ho_entbleeding' => $faker->word,
        'ho_seizures' => $faker->word,
        'ho_vomiting' => $faker->word,
        'pulse' => $faker->word,
        'bp' => $faker->word,
        'temp' => $faker->word,
        'resp' => $faker->word,
        'pain' => $faker->word,
        'right_biceps' => $faker->word,
        'right_triceps' => $faker->word,
        'right_supinator' => $faker->word,
        'right_knee' => $faker->word,
        'right_ankle' => $faker->word,
        'right_hoffmann' => $faker->word,
        'right_ff' => $faker->word,
        'left_biceps' => $faker->word,
        'left_triceps' => $faker->word,
        'left_supinator' => $faker->word,
        'left_knee' => $faker->word,
        'left_ankle' => $faker->word,
        'left_hoffmann' => $faker->word,
        'left_ff' => $faker->word,
        'plantars' => $faker->word,
        'romberg' => $faker->word,
        'gait' => $faker->word,
        'cerebellar' => $faker->word,
        'neck_stiffness' => $faker->word,
        'diagnosis' => $faker->word,
    ];
});
