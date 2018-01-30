<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientDietRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientdietrecord', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('dietician_name');
            $table->date('date');
            $table->time('time');
            $table->string('bed_no');
            $table->string('uhid_no');
            $table->string('patient_name');
            $table->string('diagnosis');
            $table->string('consultants_name');
            $table->string('diet_to_be_given');
            $table->string('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PatientDietRecord');
    }
}
