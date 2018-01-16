<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabSheet extends Model
{
    //
    protected $table="labsheet";

    protected $fillable = [
        'room_no',
        'date',
        'date_01',
        'date_02',
        'date_03',
        'date_04',
        'date_05',
        'date_06',
        'date_07',
        'name_01',
        'name_02',
        'name_03',
        'name_04',
        'name_05',
        'name_06',
        'name_07',
        'investigation_01',
        'investigation_02',
        'investigation_03',
        'investigation_04',
        'investigation_05',
        'investigation_06',
        'investigation_07',
        'remark_01',
        'remark_02',
        'remark_03',
        'remark_04',
        'remark_05',
        'remark_06',
        'remark_07',
    ];


}
