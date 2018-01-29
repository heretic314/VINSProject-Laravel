<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryForm extends Model
{
    //
    protected $table='historyform';

    protected $fillable=[
        'chief_complaints',
        'patient_history',
        'past_history',
        'allergic_history',
        'road_accident',
        'alleged_roadtrafficaccident',
        'place',
        'time',
        'date',
        'ho_loc',
        'ho_entbleeding',
        'ho_seizures',
        'ho_vomiting',
        'pulse',
        'bp',
        'temp',
        'resp',
        'pain',
        'right_biceps',
        'right_triceps',
        'right_supinator',
        'right_knee',
        'right_ankle',
        'right_hoffmann',
        'right_ff',
        'left_biceps',
        'left_triceps',
        'left_supinator',
        'left_knee',
        'left_ankle',
        'left_hoffmann',
        'left_ff',
        'plantars',
        'romberg',
        'gait',
        'cerebellar',
        'neck_stiffness',
        'diagnosis',

    ];
}
