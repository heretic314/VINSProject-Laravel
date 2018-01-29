<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNutritionalassessmenttableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NutritionalAssessmentForm', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('diagnosis');
            $table->string('calorie_required');
            $table->string('protein_required');
            $table->string('calorie_intake');
            $table->string('protein_intake');
            $table->string('diet');
            $table->string('vomiting');
            $table->string('diarrhea');
            $table->string('constipation');
            $table->string('mouth_ulcer');
            $table->string('food_intake');
            $table->string('fluid_intake');
            $table->string('nutritional_need');
            $table->string('life_style');
            $table->string('mode_of_feed');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('diet_recall');
            $table->string('food_intake_decline');
            $table->string('food_intake_decline_reason');
            $table->string('blood_pressure')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('old_operated_patient')->nullable();
            $table->string('cardiac_diseases')->nullable();
            $table->string('liver_diseases')->nullable();
            $table->string('renal_failure')->nullable();
            $table->string('cancer')->nullable();
            $table->string('trauma_burn')->nullable();
            $table->string('gout')->nullable();
            $table->string('any_other')->nullable();
            $table->string('risk_type')->nullable();
            $table->string('risk_reason')->nullable();
            $table->string('diet_suggested')->nullable();

            $table->string('remarks');
            $table->string('date_table');
            $table->string('diet_table');
            $table->string('remarks_table');
            $table->string('name_table');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NutritionalAssessmentForm');
    }
}
