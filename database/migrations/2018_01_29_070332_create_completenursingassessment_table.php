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
            $table->string('unit')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('idbandno');
            $table->string('call_bell');
            $table->string('height');
            $table->string('weight');
            $table->string('allergies')->nullable();
            $table->string('allergies_other')->nullable();
            $table->string('history_informant')->nullable();
            $table->string('history_informant_other')->nullable();
            $table->string('patient_arrived')->nullable();
            $table->string('patient_arrived_other')->nullable();
            $table->string('patient_arrived_from')->nullable();
            $table->string('patient_arrived_from_other')->nullable();
            $table->string('temperature')->nullable();
            $table->string('temperature_type')->nullable();
            $table->string('pulse');
            $table->string('rr');
            $table->string('pain');
            $table->string('blood_pressure');
            $table->string('spo2');
            $table->string('feeding_usual')->nullable();
            $table->string('feeding_admission')->nullable();
            $table->string('bathing_usual')->nullable();
            $table->string('bathing_admission')->nullable();
            $table->string('toileting_usual')->nullable();
            $table->string('toileting_admission')->nullable();
            $table->string('mobility_usual')->nullable();
            $table->string('mobility_admission')->nullable();
            $table->string('dressing_usual')->nullable();
            $table->string('dressing_admission')->nullable();
            $table->string('hallucinating')->nullable();
            $table->string('post_op_condition')->nullable();
            $table->string('narcotics')->nullable();
            $table->string('weakness')->nullable();
            $table->string('drug_or_alcohol_withdrawal')->nullable();
            $table->string('bowel_bladder')->nullable();
            $table->string('seizures')->nullable();
            $table->string('walker')->nullable();
            $table->string('age_60')->nullable();
            $table->string('recent_hx_falls')->nullable();
            $table->string('postural_hypo_tension')->nullable();
            $table->string('uncooperative')->nullable();
            $table->string('age_12')->nullable();
            $table->string('poor_eyesight')->nullable();
            $table->string('language_barrier')->nullable();
            $table->string('paralysis_stroke')->nullable();
            $table->string('new_medications')->nullable();
            $table->string('poor_hearing')->nullable();
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
