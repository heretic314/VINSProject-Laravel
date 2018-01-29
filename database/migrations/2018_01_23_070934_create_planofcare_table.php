<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanofcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planofcare', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('diagnosis');
            $table->string('needs_goals');
            $table->string('treatment_plan');
            $table->string('preventive_aspects');
            $table->string('progress_00')->nullable();
            $table->date('date_00')->nullable();
            $table->string('progress_01')->nullable();
            $table->date('date_01')->nullable();
            $table->string('progress_02')->nullable();
            $table->date('date_02')->nullable();
            $table->string('progress_03')->nullable();
            $table->date('date_03')->nullable();
            $table->string('progress_04')->nullable();
            $table->date('date_04')->nullable();
            $table->string('progress_05')->nullable();
            $table->date('date_05')->nullable();
            $table->string('progress_06')->nullable();
            $table->date('date_06')->nullable();
            $table->string('progress_07')->nullable();
            $table->date('date_07')->nullable();
            $table->string('note_discharge');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planofcare');
    }
}
