<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CultureBiopsyForm extends Model
{
  class DailyDietForm extends Model
  {
      //
      protected $table='culturebiopsyform';

      protected $fillable = [
        'date',
        'time',
        'doctors_name',
        'given_by',
        'received_by',
        'ihc',
        'cytology_000',
        'cytology_001',
        'others',
        'histopathology_00',
        'histopathology_01',
        'cytology_00',
        'cytology_01',
        'cytology_02',
        'type_of_biopsy_01',
        'type_of_biopsy_02',
        'type_of_biopsy_03',
        'type_of_biopsy_04',
        'type_of_biopsy_05',
        'specimen_info',
        'imaging_details',
        'clinical_details',
        'send_to_00',
        'send_to_01',
        'consultant_sign',
        'consultant_name',
        'date_for_sign',
        'time_for_sign',

      ];
  }
