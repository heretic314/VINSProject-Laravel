<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WardProcedureRecord extends Model
{
  protected $table="wardprocedurerecord";

  protected $fillable = [
    'time',
    'multipara_monitoring_less6',
    'multipara_monitoring_more6',
    'oxygen_upto12',
    'oxygen_more12',
    'pulse_intermittent',
    'pulse_continuous',
    'ventilator_bipap',
    'nebulization',
    'blood_transfusion',
    'rbs',
    'ecg',
    'bed_charges',
    'traction',
    'dressing',
    'spcl_dressing',
    'tube_insertion',
    'catheterisation',
    'suture_removal',
    'clw_suturing',
    'diet_consultation',
    'enema',
    'syringe_pump',
    'echo',
    'urine_sugar',
    'peripheral_line',
    'central_line',
    'lumbar_puncture',
    'csf_manometry',
    'intubation',
    'code_blue',
    'resuscitation',
    'ambulance_charges',
    'escort_ventilator',
    'escort_without',
    'mlc_inside_city',
    'mlc_outside_city',
    'defibrillator_charges',
    'physiotherapy',

  ];
}
