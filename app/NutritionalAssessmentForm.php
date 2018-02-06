<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NutritionalAssessmentForm extends Model
{
  protected $table = 'nutritionalassessmentform';

  protected $fillable = [

    'diagnosis',
    'calorie_required',
    'protein_required',
    'calorie_intake',
    'protein_intake',
    'diet',
    'vomiting',
    'diarrhea',
    'constipation',
    'mouth_ulcer',
    'food_intake',
    'fluid_intake',
    'nutritional_need',
    'life_style',
    'mode_of_feed',
    'height',
    'weight',
    'bmi',
    'diet_recall',
    'food_intake_decline',
    'food_intake_decline_reason',
    'blood_pressure',
    'diabetes',
    'old_operated_patient',
    'cardiac_diseases',
    'liver_diseases',
    'renal_failure',
    'cancer',
    'trauma_burn',
    'gout',
    'any_other',
    'risk_type',
    'risk_reason',
    'diet_suggested',
    'remarks',
    'date_table',
    'diet_table',
    'remarks_table',
    'name_table',

  ];
}
