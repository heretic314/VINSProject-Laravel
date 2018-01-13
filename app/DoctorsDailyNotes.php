<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsDailyNotes extends Model
{
    protected $table = 'doctorsdailynotes';

    protected $fillable = [
      'name',
      'ipd_no',
      'sex',
      'attending_consultant',
      'age',
      'date',
      'c_o_07',
      'oe_pulse_07',
      'bp_07',
      'temp_07',
      'resp_spo2_07',
      'pain_07',
      'c_o_09',
      'oe_pulse_09',
      'bp_09',
      'temp_09',
      'resp_spo2_09',
      'pain_09',
      'c_o_15',
      'oe_pulse_15',
      'bp_15',
      'temp_15',
      'resp_spo2_15',
      'pain_15',
      'c_o_21',
      'oe_pulse_21',
      'bp_21',
      'temp_21',
      'resp_spo2_21',
      'pain_21',
    ];
}
