<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CPRFormat extends Model
{
  protected $table="cprformat";

  protected $fillable = [

    'patient_name',
    'ipd_no',

    'age',
    'sex',
    'date',
  'start_time',
    'bed_no',
    'diagnosis',
    'name_doctor',
    'cpr_team',
  'intubation_time',
    'defib_rhythm_00',
    'defib_rhythm_01',
    'defib_rhythm_02',
    'defib_rhythm_03',
    'defib_rhythm_04',

    'defib_dc_00',
    'defib_dc_01',
    'defib_dc_02',
    'defib_dc_03',
    'defib_dc_04',

  'medication_time_00',
    'medication_name_01',
    'medication_time_10',
    'medication_name_11',
    'medication_time_20',
    'medication_name_21',
    'medication_time_30',
    'medication_name_31',
    'medication_time_40',
    'medication_name_41',

  'total_time',
    'outcome',
    'doctor_name',
    'remarks',

    'consultant_counseled',
    'relative_name',

    '00_01',
    '00_02',
    '00_03',
    '00_04',
    '00_05',
    '00_06',
    '00_07',
    '00_08',

    '01_01',
    '01_02',
    '01_03',
    '01_04',
    '01_05',
    '01_06',
    '01_07',
    '01_08',

    '02_01',
    '02_02',
    '02_03',
    '02_04',
    '02_05',
    '02_06',
    '02_07',
    '02_08',

    '03_01',
    '03_02',
    '03_03',
    '03_04',
    '03_05',
    '03_06',
    '03_07',
    '03_08',

    '04_01',
    '04_02',
    '04_03',
    '04_04',
    '04_05',
    '04_06',
    '04_07',
    '04_08',

    '05_01',
    '05_02',
    '05_03',
    '05_04',
    '05_05',
    '05_06',
    '05_07',
    '05_08',

    '06_01',
    '06_02',
    '06_03',
    '06_04',
    '06_05',
    '06_06',
    '06_07',
    '06_08',
  'initial_time'
];
}
