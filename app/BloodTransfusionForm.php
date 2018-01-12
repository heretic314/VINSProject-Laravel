<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodTransfusionForm extends Model
{
    //

    protected $table='bloodtransfusionform';

    protected $fillable = [
      'patient_name',
      'ipd_no',
      'age',
      'sex',
      'date',
      'time',
      'blood_group',
      'history_bt',
      'adv',
      'blood_bag_no',
      'blood_bag_group',
      'prod_name',
      'name_blood_bank',
      'expiry_date',
      'checked_by',
      'unit_nurse',
      'start_time',
      'end_time'
    ];
}
