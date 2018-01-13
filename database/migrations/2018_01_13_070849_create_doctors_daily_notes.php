<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsDailyNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('doctorsdailynotes',function (Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->string('name');
        $table->string('ipd_no');
        $table->string('sex');
        $table->string('attending_consultant');
        $table->string('age');
        $table->date('date');
        $table->string('c_o_07');
        $table->string('c_o_09');
        $table->string('c_o_15');
        $table->string('c_o_21');
        $table->string('oe_pulse_07');
        $table->string('oe_pulse_09');
        $table->string('oe_pulse_15');
        $table->string('oe_pulse_21');
        $table->string('bp_07');
        $table->string('bp_09');
        $table->string('bp_15');
        $table->string('bp_21');
        $table->string('temp_07');
        $table->string('temp_09');
        $table->string('temp_15');
        $table->string('temp_21');
        $table->string('resp_spo2_07');
        $table->string('resp_spo2_09');
        $table->string('resp_spo2_15');
        $table->string('resp_spo2_21');
        $table->string('pain_07');
        $table->string('pain_09');
        $table->string('pain_15');
        $table->string('pain_21');

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
