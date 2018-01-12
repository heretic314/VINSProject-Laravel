<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsHandover extends Model
{
    //
    protected $table="doctorshandover";

    protected $fillable = [
      'surgical_day',
      'surgical_night',
      'tentative_date_of_surgery_day',
      'tentative_date_of_surgery_night',
      'date_of_surgery_day',
      'date_of_surgery_night',
      'physician_reference_day',
      'physician_reference_night',
      'other_physician_reference_day',
      'other_physician_reference_night',
      'pathological_investigation_done_day',
      'pathological_investigation_done_night',
      'pathological_investigation_collected_day',
      'pathological_investigation_collected_night',
      'radiological_investigation_collected_day',
      'radiological_investigation_collected_night',
      'other_investigation_done_day',
      'other_investigation_done_night',
      'other_investigation_collected_day',
      'other_investigation_collected_night',
      'echo_day',
      'echo_night',
      'physiotherapy_day',
      'physiotherapy_night',
      'specific_instruction_day',
      'specific_instruction_night',
      'verified_by_assistant_day',
      'verified_by_assistant_night',
      'name_given_day',
      'name_given_night',
      'date_given_day',
      'date_given_night',
      'time_given_day',
      'time_given_night',
      'name_taken_day',
      'name_taken_night',
      'date_taken_day',
      'date_taken_night',
      'time_taken_day',
      'time_taken_night'

    ];
}
