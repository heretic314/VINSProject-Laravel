<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperativeDetailSheet extends Model
{
    //
    protected $table="operativedetailsheet";

    protected $fillable = [
      'ot_no',
      'date',
      'wheel_in',
      'wheel_out',
      'anesthesa_induction_time',
      'reversal_time',
      'antibiotic1',
      'antibiotic1_time',
      'antibiotic2',
      'antibiotic2_time',
      'surgical_time_from',
      'surgical_time_to',
      'surgery_type',
      'surgeon1',
      'surgeon2',
      'surgeon3',
      'anesthetist1',
      'anesthetist2',
      'anesthetist3',
      'iitv',
      'fentanyl',
      'drill',
      'sevoflurane_desflurane',
      'microscope',
      'endoscope',
      'cussa',
      'implants',
      'vendor',
      'diagnosis',
      'operation_performed',
      'mediclaim',
      'name_tpa',
      'company_thirdparty',
      'name_party',
      'amount',
      'surgery_only',
      'package_surgical',
      'package_total',

    ];
}
