<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CultureBiopsyForm extends Model
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
        'cytology',
        'others',
        'histopathology',

        'cytology_01',

        'type_of_biopsy',
        'specimen_info',
        'imaging_details',
        'clinical_details',
        'send_to',
        'consultant_sign',
        'consultant_name',
        'date_for_sign',
        'time_for_sign',

      ];
  }
