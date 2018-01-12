<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugRequisition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('drugrequisition',function (Blueprint $table){
          $table->increments('id');
          $table->timestamps();
          $table->string('name_of_drug_01');
          $table->string('quantity_01');
          $table->string('batch_no_01');
          $table->date('expiry_date_01');
          $table->string('issued_by_01');
          $table->string('received_by_01');
          $table->string('name_of_drug_02');
          $table->string('quantity_02');
          $table->string('batch_no_02');
          $table->date('expiry_date_02');
          $table->string('issued_by_02');
          $table->string('received_by_02');
          $table->string('name_of_drug_03');
          $table->string('quantity_03');
          $table->string('batch_no_03');
          $table->date('expiry_date_03');
          $table->string('issued_by_03');
          $table->string('received_by_03');
          $table->string('name_of_drug_04');
          $table->string('quantity_04');
          $table->string('batch_no_04');
          $table->date('expiry_date_04');
          $table->string('issued_by_04');
          $table->string('received_by_04');
          $table->string('name_of_drug_05');
          $table->string('quantity_05');
          $table->string('batch_no_05');
          $table->date('expiry_date_05');
          $table->string('issued_by_05');
          $table->string('received_by_05');
          $table->string('name_of_drug_06');
          $table->string('quantity_06');
          $table->string('batch_no_06');
          $table->date('expiry_date_06');
          $table->string('issued_by_06');
          $table->string('received_by_06');
          $table->string('name_of_drug_07');
          $table->string('quantity_07');
          $table->string('batch_no_07');
          $table->date('expiry_date_07');
          $table->string('issued_by_07');
          $table->string('received_by_07');
          $table->string('name');
          $table->date('date');
          $table->time('time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
