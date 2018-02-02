<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErobservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erobservation', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date');
            $table->string('triage_category');
            $table->string('addressograph')->nullable();
            $table->string('diagnosis');
            $table->string('investigation');
            $table->time('time_01');
            $table->time('time_02');
            $table->time('time_03');
            $table->string('pulse_01');
            $table->string('pulse_02');
            $table->string('pulse_03');
            $table->string('bp_01');
            $table->string('bp_02');
            $table->string('bp_03');
            $table->string('spo2_01');
            $table->string('spo2_02');
            $table->string('spo2_03');
            $table->string('rr_01');
            $table->string('rr_02');
            $table->string('rr_03');
            $table->string('gcs_01');
            $table->string('gcs_02');
            $table->string('gcs_03');
            $table->string('temp_01');
            $table->string('temp_02');
            $table->string('temp_03');
            $table->string('iv_infusion_01');
            $table->string('qty_01');
            $table->time('time_start_01');
            $table->time('time_end_01');
            $table->string('remarks_01');
            $table->string('iv_infusion_02')->nullable();
            $table->string('qty_02')->nullable();
            $table->time('time_start_02')->nullable();
            $table->time('time_end_02')->nullable();
            $table->string('remarks_02')->nullable();
            $table->string('iv_infusion_03')->nullable();
            $table->string('qty_03')->nullable();
            $table->time('time_start_03')->nullable();
            $table->time('time_end_03')->nullable();
            $table->string('remarks_03')->nullable();
            $table->string('iv_infusion_04')->nullable();
            $table->string('qty_04')->nullable();
            $table->time('time_start_04')->nullable();
            $table->time('time_end_04')->nullable();
            $table->string('remarks_04')->nullable();
            $table->string('name_drug_01');
            $table->string('dosage_01');
            $table->string('routine_01');
            $table->string('administration_by_01');
            $table->time('medication_time_01');
            $table->string('name_drug_02')->nullable();
            $table->string('dosage_02')->nullable();
            $table->string('routine_02')->nullable();
            $table->string('administration_by_02')->nullable();
            $table->time('medication_time_02')->nullable();
            $table->string('name_drug_03')->nullable();
            $table->string('dosage_03')->nullable();
            $table->string('routine_03')->nullable();
            $table->string('administration_by_03')->nullable();
            $table->time('medication_time_03')->nullable();
            $table->string('name_drug_04')->nullable();
            $table->string('dosage_04')->nullable();
            $table->string('routine_04')->nullable();
            $table->string('administration_by_04')->nullable();
            $table->time('medication_time_04')->nullable();
            $table->string('name_drug_05')->nullable();
            $table->string('dosage_05')->nullable();
            $table->string('routine_05')->nullable();
            $table->string('administration_by_05')->nullable();
            $table->time('medication_time_05')->nullable();
            $table->string('patient_shifted_to');
            $table->string('er_nurse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erobservation');
    }
}
