<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProvisionalDischargeSummary extends Model
{
  protected $table="provisionaldischargesummary";

  protected $fillable = [
    'address',
    'date_of_discharge',
    'addressograph',
    'ref_by',
    'room_no',
    'diagnosis',
    'condition_on_discharge',
    'advice_on_discharge',
    'followup',
    'collect_discharge_summary_on',
    'collect_discharge_summary_at',
    'collect_discharge_summary_from',

  ];
}
