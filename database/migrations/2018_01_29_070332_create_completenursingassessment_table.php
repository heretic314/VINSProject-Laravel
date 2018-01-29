<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompletenursingassessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completenursingassessment', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('unit');
            $table->date('date');
            $table->time('time');
            $table->string('idbandno');
            $table->string('call_bell');
            $table->string('height');
            $table->string('weight');
            $table->string('allergies');
            $table->string('allergies_other');
            $table->string('history_informant');
            $table->string('history_informant_other');
            $table->string('patient_arrived');
            $table->string('patient_arrived_other');
            $table->string('patient_arrived_from');
            $table->string('patient_arrived_from_other');
            $table->string('temperature');
            $table->string('temperature_type');
            $table->string('pulse');
            $table->string('rr');
            $table->string('blood_pressure');
            $table->string('spo2');
            $table->string('feeding_usual');
            $table->string('feeding_admission');
            $table->string('bathing_usual');
            $table->string('bathing_admission');
            $table->string('toileting_usual');
            $table->string('toileting_admission');
            $table->string('mobility_usual');
            $table->string('mobility_admission');
            $table->string('dressing_usual');
            $table->string('dressing_admission');
            $table->string('hallucinating');
            $table->string('post_op_condition');
            $table->string('narcotics');
            $table->string('weakness');
            $table->string('drug_or_alcohol_withdrawal');
            $table->string('bowel_bladder');
            $table->string('seizures');
            $table->string('walker');
            $table->string('age_60');
            $table->string('recent_hx_falls');
            $table->string('postural_hypo_tension');
            $table->string('uncooperative');
            $table->string('age_12');
            $table->string('poor_eyesight');
            $table->string('language_barrier');
            $table->string('paralysis_stroke');
            $table->string('new_medications');
            $table->string('poor_hearing');
            $table->string('relative_name');
            $table->string('relation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('completenursingassessment');
    }
}
