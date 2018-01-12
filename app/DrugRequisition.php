<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugRequisition extends Model
{
    //
    protected $table = 'drugrequisition';

    protected $fillable = [
      'name_of_drug_01',
      'quantity_01',
      'batch_no_01',
      'expiry_date_01',
      'issued_by_01',
      'received_by_01',
      'name_of_drug_02',
      'quantity_02',
      'batch_no_02',
      'expiry_date_02',
      'issued_by_02',
      'received_by_02',
      'name_of_drug_03',
      'quantity_03',
      'batch_no_03',
      'expiry_date_03',
      'issued_by_03',
      'received_by_03',
      'name_of_drug_04',
      'quantity_04',
      'batch_no_04',
      'expiry_date_04',
      'issued_by_04',
      'received_by_04',
      'name_of_drug_05',
      'quantity_05',
      'batch_no_05',
      'expiry_date_05',
      'issued_by_05',
      'received_by_05',
      'name_of_drug_06',
      'quantity_06',
      'batch_no_06',
      'expiry_date_06',
      'issued_by_06',
      'received_by_06',
      'name_of_drug_07',
      'quantity_07',
      'batch_no_07',
      'expiry_date_07',
      'issued_by_07',
      'received_by_07',
      'name',
      'date',
      'time',
    ];
}
