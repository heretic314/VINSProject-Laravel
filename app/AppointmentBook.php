<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentBook extends Model
{
  protected $table="appointmentbook";

  protected $fillable = [
    'date',
    'name_of_patient',
    'contact_no',
    'appointment_time',
    'consultant_name',

  ];
}
