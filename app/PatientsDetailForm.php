<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientsDetailForm extends Model
{
    //
    protected $table = 'patientsdetailform';

    protected $fillable=[
      'date',
      'time',
      'first_name',
      'middle_name',
      'last_name',
      'date_of_birth',
      'sex',
      'address',
      'phone_no',
      'mobile_no',
      'reference_dr',
      'consulting_dr',
      'case',
    ];
}
