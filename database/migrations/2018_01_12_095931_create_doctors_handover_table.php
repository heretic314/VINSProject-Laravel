<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsHandoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorshandover', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('surgical_day');
            $table->string('surgical_night');
            $table->date('tentative_date_of_surgery_day');
            $table->date('tentative_date_of_surgery_night');
            $table->date('date_of_surgery_day');
            $table->date('date_of_surgery_night');
            $table->string('physician_reference_day');
            $table->string('physician_reference_night');
            $table->string('other_physician_reference_day');
            $table->string('other_physician_reference_night');
            $table->string('pathological_investigation_done_day');
            $table->string('pathological_investigation_done_night');
            $table->string('pathological_investigation_collected_day');
            $table->string('pathological_investigation_collected_night');
            $table->string('radiological_investigation_collected_day');
            $table->string('radiological_investigation_collected_night');
            $table->string('other_investigation_done_day');
            $table->string('other_investigation_done_night');
            $table->string('other_investigation_collected_day');
            $table->string('other_investigation_collected_night');
            $table->string('echo_day');
            $table->string('echo_night');
            $table->string('physiotherapy_day');
            $table->string('physiotherapy_night');
            $table->string('specific_instruction_day');
            $table->string('specific_instruction_night');
            $table->string('verified_by_assistant_day');
            $table->string('verified_by_assistant_night');
            $table->string('name_given_day');
            $table->string('name_given_night');
            $table->date('date_given_day');
            $table->date('date_given_night');
            $table->time('time_given_day');
            $table->time('time_given_night');
            $table->string('name_taken_day');
            $table->string('name_taken_night');
            $table->date('date_taken_day');
            $table->date('date_taken_night');
            $table->time('time_taken_day');
            $table->time('time_taken_night');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctorshandover');
    }
}
