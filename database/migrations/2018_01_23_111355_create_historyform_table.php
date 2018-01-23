<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historyform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('chief_complaints');
            $table->string('patient_history');
            $table->string('past_history');
            $table->string('allergic_history');
            $table->string('road_accident');
            $table->string('alleged_roadtrafficaccident');
            $table->string('place');
            $table->time('time');
            $table->date('date');
            $table->string('ho_loc');
            $table->string('ho_entbleeding');
            $table->string('ho_seizures');
            $table->string('ho_vomiting');
            $table->string('pulse');
            $table->string('bp');
            $table->string('temp');
            $table->string('resp');
            $table->string('pain');
            $table->string('right_biceps');
            $table->string('right_triceps');
            $table->string('right_supinator');
            $table->string('right_knee');
            $table->string('right_ankle');
            $table->string('right_hoffmann');
            $table->string('right_ff');
            $table->string('left_biceps');
            $table->string('left_triceps');
            $table->string('left_supinator');
            $table->string('left_knee');
            $table->string('left_ankle');
            $table->string('left_hoffmann');
            $table->string('left_ff');
            $table->string('plantars');
            $table->string('romberg');
            $table->string('gait');
            $table->string('cerebellar');
            $table->string('neck_stiffness');
            $table->string('diagnosis');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historyform');
    }
}
