<?php

use Faker\Generator as Faker;

$factory->define(App\NutritionalAssessmentForm::class, function (Faker $faker) {
    return [
      'diagnosis'=> $faker->word,
      'calorie_required'=> $faker->word,
      'protein_required'=> $faker->word,
      'calorie_intake'=> $faker->word,
      'protein_intake'=> $faker->word,
      'diet'=> $faker->word,
      'vomiting'=> $faker->word,
      'diarrhea'=> $faker->word,
      'constipation'=> $faker->word,
      'mouth_ulcer'=> $faker->word,
      'food_intake'=> $faker->word,
      'fluid_intake'=> $faker->word,
      'nutritional_need'=> $faker->word,
      'life_style'=> $faker->word,
      'mode_of_feed'=> $faker->word,
      'height'=> $faker->word,
      'weight'=> $faker->word,
      'bmi'=> $faker->word,
      'diet_recall'=> $faker->word,
      'food_intake_decline'=> $faker->word,
      'food_intake_decline_reason'=> $faker->word,
      'blood_pressure'=> $faker->word,
      'diabetes'=> $faker->word,
      'old_operated_patient'=> $faker->word,
      'cardiac_diseases'=> $faker->word,
      'liver_diseases'=> $faker->word,
      'renal_failure'=> $faker->word,
      'cancer'=> $faker->word,
      'trauma_burn'=> $faker->word,
      'gout'=> $faker->word,
      'any_other'=> $faker->word,
      'risk_type'=> $faker->word,
      'risk_reason'=> $faker->word,
      'diet_suggested'=> $faker->word,

      'remarks'=> $faker->word,
      'date_table'=> $faker->word,
      'diet_table'=> $faker->word,
      'remarks_table'=> $faker->word,
      'name_table'=> $faker->word,

    ];
});
