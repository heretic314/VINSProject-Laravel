<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfusionTherapyChart extends Model
{
    //
    protected $table='infusiontherapychart';

    protected $fillable=[
      'patient_name',
      'ipd_no',
      'age',
      'sex',
      'attending_consultant',
      'date_01',
      'name_str_01',
      'volume_01',
      'additions_01',
      'rate_01',
      'timestart_01',
      'timeend_01',
      'date_02',
      'name_str_02',
      'volume_02',
      'additions_02',
      'rate_02',
      'timestart_02',
      'timeend_02',
      'date_03',
      'name_str_03',
      'volume_03',
      'additions_03',
      'rate_03',
      'timestart_03',
      'timeend_03',
      'date_04',
      'name_str_04',
      'volume_04',
      'additions_04',
      'rate_04',
      'timestart_04',
      'timeend_04',
      'date_05',
      'name_str_05',
      'volume_05',
      'additions_05',
      'rate_05',
      'timestart_05',
      'timeend_05',
      'date_06',
      'name_str_06',
      'volume_06',
      'additions_06',
      'rate_06',
      'timestart_06',
      'timeend_06'
    ];
}
