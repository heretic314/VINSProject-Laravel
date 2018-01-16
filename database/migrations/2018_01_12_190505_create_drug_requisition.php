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
          $table->string('received_by_01')->nullable();
          $table->string('name_of_drug_02')->nullable();
          $table->string('quantity_02')->nullable();
          $table->string('batch_no_02')->nullable();
          $table->date('expiry_date_02')->nullable();
          $table->string('issued_by_02')->nullable();
          $table->string('received_by_02')->nullable();
          $table->string('name_of_drug_03')->nullable();
          $table->string('quantity_03')->nullable();
          $table->string('batch_no_03')->nullable();
          $table->date('expiry_date_03')->nullable();
          $table->string('issued_by_03')->nullable();
          $table->string('received_by_03')->nullable();
          $table->string('name_of_drug_04')->nullable();
          $table->string('quantity_04')->nullable();
          $table->string('batch_no_04')->nullable();
          $table->date('expiry_date_04')->nullable();
          $table->string('issued_by_04')->nullable();
          $table->string('received_by_04')->nullable();
          $table->string('name_of_drug_05')->nullable();
          $table->string('quantity_05')->nullable();
          $table->string('batch_no_05')->nullable();
          $table->date('expiry_date_05')->nullable();
          $table->string('issued_by_05')->nullable();
          $table->string('received_by_05')->nullable();
          $table->string('name_of_drug_06')->nullable();
          $table->string('quantity_06')->nullable();
          $table->string('batch_no_06')->nullable();
          $table->date('expiry_date_06')->nullable();
          $table->string('issued_by_06')->nullable();
          $table->string('received_by_06')->nullable();
          $table->string('name_of_drug_07')->nullable();
          $table->string('quantity_07')->nullable();
          $table->string('batch_no_07')->nullable();
          $table->date('expiry_date_07')->nullable();
          $table->string('issued_by_07')->nullable();
          $table->string('received_by_07')->nullable();
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
