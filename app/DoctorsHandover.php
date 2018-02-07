<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsHandover extends Model
{
    //
    protected $table="doctorshandover";

    protected $fillable = [
      'diagnosis',
      'day_night',
      'surgical',
      'tentative_date_of_surgery',
      'date_of_surgery',
      'physician_reference',
      'other_physician_reference',
      'pathological_investigation_done',
      'pathological_investigation_collected',
      'radiological_investigation_collected',
      'other_investigation_done',
      'other_investigation_collected',
      'echo',
      'physiotherapy',
      'specific_instruction',
      'verified_by_assistant',
      'name_given',
      'date_given',
      'time_given',
      'name_taken',
      'date_taken',
      'time_taken',

    ];
}
