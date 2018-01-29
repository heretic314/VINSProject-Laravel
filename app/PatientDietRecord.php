<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDietRecord extends Model
{
    //
    protected $table='PatientDietRecord';

    protected $fillable = [
    'dietician_name',
    'date',
    'time',
    'bed_no',
    'uhid_no',
    'patient_name',
    'diagnosis',
    'consultants_name',
    'diet_to_be_given',
    'remarks',
  ];

}
