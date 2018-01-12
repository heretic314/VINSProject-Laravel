<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsInitialAssessment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorsinitialassessment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('history');
            $table->string('past_history');
            $table->string('allergic_history');
            $table->string('name_informant');
            $table->string('brought_by');
            $table->string('place_of_accident');
            $table->time('current_time');
            $table->date('current_date');
            $table->string('mlc');
            $table->string('loc');
            $table->string('ent_bleeding');
            $table->string('seizures');
            $table->string('vomiting');
            $table->string('pulse');
            $table->string('temp');
            $table->string('bp');
            $table->string('spo2');
            $table->string('rbs');
            $table->string('pain');
            $table->string('gcs_e');
            $table->string('gcs_m');
            $table->string('gcs_v');
            $table->string('systematic_examination');
            $table->string('any_other');
            $table->string('treated_on_admission');
            $table->string('shifted_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctorsinitialassessment');
    }
}
