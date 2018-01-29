<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadiologyRequisition extends Model
{
    //
    protected $table="radiologyrequisition";

    protected $fillable =[
      'provisional_diagnosis',
      'brain_plain',
      'ct_pmns',
      'brain_plain_contrast',
      'ct_head_face',
      'ct_face_plain',
      'ct_3d',
      'ct_cv_junction_flex',
      'ct_cv_junction_ext',
      'ct_chest_plain',
      'ct_dorsal_spine',
      'ct_cervical_spine',
      'ct_abdomen_plain',
      'ct_lumbar_spine',
      'other',
      'anyother',
      'xray_fixed',
      'xray_portable',
      'other_xray',
      'xray_other',
      'date',
      'time',

    ];
}
