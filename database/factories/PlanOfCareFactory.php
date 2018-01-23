<?php

use Faker\Generator as Faker;

$factory->define(App\PlanOfCare::class, function (Faker $faker) {
    return [
        //
        'diagnosis' => faker->word,
        'needs_goals' => faker->word,
        'treatment_plan' => faker->word,
        'preventive_aspects' => faker->word,
        'progress_00' => faker->word,
        'date_00' => faker->date,
        'progress_01' => faker->word,
        'date_01' => faker->date,
        'progress_02' => faker->word,
        'date_02' => faker->date,
        'progress_03' => faker->word,
        'date_03' => faker->date,
        'progress_04' => faker->word,
        'date_04' => faker->date,
        'progress_05' => faker->word,
        'date_05' => faker->date,
        'progress_06' => faker->word,
        'date_06' => faker->date,
        'progress_07' => faker->word,
        'date_07' => faker->date,
        'note_discharge' => faker->word,
    ];
});
