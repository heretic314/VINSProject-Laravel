<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeBlueEvaluationForm extends Model
{
    //
    protected $table='codeblueevaluationform';

    protected $fillable=[
      'drill',
      'actual_code_blue',
      '00',
      'comm_00',
      '01',
      'comm_01',
      '02',
      'comm_02',
      '03',
      'comm_03',
      '04',
      'comm_04',
      '05',
      'comm_05',
      '06',
      'comm_06',
      '07',
      'comm_07',
      '08',
      'comm_08',
      '09',
      'comm_09'

    ];
}
