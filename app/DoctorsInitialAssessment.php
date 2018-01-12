<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsInitialAssessment extends Model
{
    //
    protected $table='doctorsinitialassessment';

    protected $fillable = [
      'history',
      'past_history',
      'allergic_history',
      'name_informant',
      'brought_by',
      'place_of_accident',
      'current_time',
      'current_date',
      'mlc',
      'loc',
      'ent_bleeding',
      'seizures',
      'vomiting',
      'pulse',
      'temp',
      'bp',
      'spo2',
      'rbs',
      'pain',
      'gcs_e',
      'gcs_m',
      'gcs_v',
      'systematic_examination',
      'any_other',
      'treated_on_admission',
      'shifted_to'
    ];
}
