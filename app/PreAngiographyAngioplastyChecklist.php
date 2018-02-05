<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreAngiographyAngioplastyChecklist extends Model
{
  protected $table="preangiographyangioplastychecklist";

  protected $fillable =[
  'time_arrival',
  'time_prep_complete',
  'time_shifting',
  'consultant_name',
  'angiography_consent',
  'angioplasty_consent',
  'pacemaker',
  'allergies',
  'allergies_list',
  'pulse',
  'bp',
  'resp',
  'temp',
  'part_prep',
  'pre_med',
  'ecosprin',
  'clopidogrel',
  'blood_arranged',
  'ivcannula_puton',
  'height',
  'weight',
  'id_band',
  'jewellery_removed',
  'dentures',
  'cbc',
  'blood_urea',
  'blood_group',
  'hbsag',
  'serum_creatinine',
  'hep_c',
  'random_blood_sugar',
  'hiv',
  'pt',
  'chest_xray',
  'serum_electrolytes',
  'ecg',
  'lft'
];
}
