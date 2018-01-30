<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentilatorChargeSheet extends Model
{
  protected $table = 'ventilatorchargesheet';

  protected $fillable = [
    'name',
    'age',
    'sex',
    'bed_no',
    'time',
    'date',
    'time_slot01',
    'time_slot02',
    'time_slot03',
    'time_slot04',
    'mode',
    'tidal_volume',
    'freq_controlled',
    'freq-simv',
    'pressure_control',
    'pressure_support',
    'peep_cpap',
    'flo2',
    'triggering',
    'inp_tv',
    'exp_tv',
    'exp_mv',
    'measured_freq',
    'peak_pressure',
    'mean_pressure',
    'end_exp',
    'pressure_low',
    'volume_high_mv',
    'volume_low_mv',
    'gas_supply',
    'power_failure',
    'position',
    'et_tstomy',
    'oral',
    'chest_physio',
    'abg',
    'x-xray_chest',
    'catheter_mount',
    'filter',
    'ventilator_circuit',
    'et_tube',
  ];
}
