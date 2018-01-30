<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompleteNursingAssessment extends Model
{
    //
    protected $table='completenursingassessment';

    protected $fillable=[
      'unit',
      'date',
      'time',
      'idbandno',
      'call_bell',
      'height',
      'weight',
      'allergies',
      'allergies_other',
      'history_informant',
      'history_informant_other',
      'patient_arrived',
      'patient_arrived_other',
      'patient_arrived_from',
      'patient_arrived_from_other',
      'temperature',
      'temperature_type',
      'pulse',
      'rr',
      'blood_pressure',
      'spo2',
      'pain',
      'feeding_usual',
      'feeding_admission',
      'bathing_usual',
      'bathing_admission',
      'toileting_usual',
      'toileting_admission',
      'mobility_usual',
      'mobility_admission',
      'dressing_usual',
      'dressing_admission',
      'hallucinating',
      'post_op_condition',
      'narcotics',
      'weakness',
      'drug_or_alcohol_withdrawal',
      'bowel_bladder',
      'seizures',
      'walker',
      'age_60',
      'recent_hx_falls',
      'postural_hypo_tension',
      'uncooperative',
      'age_12',
      'poor_eyesight',
      'language_barrier',
      'paralysis_stroke',
      'new_medications',
      'poor_hearing',
      'relative_name',
      'relation',
    ];
}
