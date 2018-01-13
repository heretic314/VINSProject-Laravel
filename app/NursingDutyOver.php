<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NursingDutyOver extends Model
{
    protected $table = 'nursingdutyover';

    protected $fillable = [
      'addressograph',
      'specific_instruction',
      'M_nurse_name',
      'E_nurse_name',
      'N_nurse_name',
      'M_incharge_name',
      'E_incharge_name',
      'N_incharge_name',
      'M_eyecare',
      'E_eyecare',
      'N_eyecare',
      'M_mouthcare',
      'E_mouthcare',
      'N_mouthcare',
      'M_skincare',
      'E_skincare',
      'N_skincare',
      'M_bedding',
      'E_bedding',
      'N_bedding',
      'M_cathetercare',
      'E_cathetercare',
      'N_cathetercare',
      'M_physiotherapy',
      'E_physiotherapy',
      'N_physiotherapy',
      'M_spongebath',
      'E_spongebath',
      'N_spongebath',
      'M_other',
      'E_other',
      'N_other',
      'M_investigations',
      'E_investigations',
      'N_investigations',
      'M_pendingreport',
      'E_pendingreport',
      'N_pendingreport',
      'M_replacementdrug',
      'E_replacementdrug',
      'N_replacementdrug',
      'balance_drugs_00',
      'balance_drugs_01',
      'balance_drugs_02',
      'balance_drugs_03',
      'balance_drugs_04',
      'balance_drugs_05',
      'M_time_00',
      'M_time_01',
      'M_time_02',
      'M_time_03',
      'M_time_04',
      'M_time_05',
      'M_balance_00',
      'M_balance_01',
      'M_balance_02',
      'M_balance_03',
      'M_balance_04',
      'M_balance_05',
      'E_time_00',
      'E_time_01',
      'E_time_02',
      'E_time_03',
      'E_time_04',
      'E_time_05',
      'E_balance_00',
      'E_balance_01',
      'E_balance_02',
      'E_balance_03',
      'E_balance_04',
      'E_balance_05',
      'N_time_00',
      'N_time_01',
      'N_time_02',
      'N_time_03',
      'N_time_04',
      'N_time_05',
      'N_balance_00',
      'N_balance_01',
      'N_balance_02',
      'N_balance_03',
      'N_balance_04',
      'N_balance_05',
      'm_nurse_name',
      'e_nurse_name',
      'n_nurse_name',
      'm_date',
      'e_date',
      'n_date',
      'm_time',
      'e_time',
      'n_time',
    ];
}
