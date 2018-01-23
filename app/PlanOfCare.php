<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanOfCare extends Model
{
    //
    protected $table="planofcare";

    protected $fillable = [
      'diagnosis',
      'needs_goals',
      'treatment_plan',
      'preventive_aspects',
      'progress_00',
      'date_00',
      'progress_01',
      'date_01',
      'progress_02',
      'date_02',
      'progress_03',
      'date_03',
      'progress_04',
      'date_04',
      'progress_05',
      'date_05',
      'progress_06',
      'date_06',
      'progress_07',
      'date_07',
      'note_discharge',
    ];
}
