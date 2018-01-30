<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyDietForm extends Model
{
    //
    protected $table='dailydietform';

    protected $fillable = [
      'floor_name',
      'cross_verified_by',
      'date',
      'room_no',
      'patient_name',
      'diet_suggested_by',
      'm_tea',
      'm_breakfast',
      'soup',
      'lunch',
      'e_snacks',
      'juice',
      'dinner',
      'milk',
      'remarks'
    ];
}
