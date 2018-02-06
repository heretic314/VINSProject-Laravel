<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNurseprogressnotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurseprogressnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date_00')->nullable();
            $table->time('time_00')->nullable();
            $table->string('progress_00')->nullable();
            $table->string('staff_name_00')->nullable();
            $table->string('sign_00')->nullable();
            $table->date('date_01')->nullable();
            $table->time('time_01')->nullable();
            $table->string('progress_01')->nullable();
            $table->string('staff_name_01')->nullable();
            $table->string('sign_01')->nullable();
            $table->date('date_02')->nullable();
            $table->time('time_02')->nullable();
            $table->string('progress_02')->nullable();
            $table->string('staff_name_02')->nullable();
            $table->string('sign_02')->nullable();
            $table->date('date_03')->nullable();
            $table->time('time_03')->nullable();
            $table->string('progress_03')->nullable();
            $table->string('staff_name_03')->nullable();
            $table->string('sign_03')->nullable();
            $table->date('date_04')->nullable();
            $table->time('time_04')->nullable();
            $table->string('progress_04')->nullable();
            $table->string('staff_name_04')->nullable();
            $table->string('sign_04')->nullable();
            $table->date('date_05')->nullable();
            $table->time('time_05')->nullable();
            $table->string('progress_05')->nullable();
            $table->string('staff_name_05')->nullable();
            $table->string('sign_05')->nullable();
            $table->date('date_06')->nullable();
            $table->time('time_06')->nullable();
            $table->string('progress_06')->nullable();
            $table->string('staff_name_06')->nullable();
            $table->string('sign_06')->nullable();
            $table->date('date_07')->nullable();
            $table->time('time_07')->nullable();
            $table->string('progress_07')->nullable();
            $table->string('staff_name_07')->nullable();
            $table->string('sign_07')->nullable();
            $table->date('date_08')->nullable();
            $table->time('time_08')->nullable();
            $table->string('progress_08')->nullable();
            $table->string('staff_name_08')->nullable();
            $table->string('sign_08')->nullable();
            $table->date('date_09')->nullable();
            $table->time('time_09')->nullable();
            $table->string('progress_09')->nullable();
            $table->string('staff_name_09')->nullable();
            $table->string('sign_09')->nullable();
            $table->date('date_10')->nullable();
            $table->time('time_10')->nullable();
            $table->string('progress_10')->nullable();
            $table->string('staff_name_10')->nullable();
            $table->string('sign_10')->nullable();
            $table->date('date_11')->nullable();
            $table->time('time_11')->nullable();
            $table->string('progress_11')->nullable();
            $table->string('staff_name_11')->nullable();
            $table->string('sign_11')->nullable();
            $table->date('date_12')->nullable();
            $table->time('time_12')->nullable();
            $table->string('progress_12')->nullable();
            $table->string('staff_name_12')->nullable();
            $table->string('sign_12')->nullable();
            $table->date('date_13')->nullable();
            $table->time('time_13')->nullable();
            $table->string('progress_13')->nullable();
            $table->string('staff_name_13')->nullable();
            $table->string('sign_13')->nullable();
            $table->date('date_14')->nullable();
            $table->time('time_14')->nullable();
            $table->string('progress_14')->nullable();
            $table->string('staff_name_14')->nullable();
            $table->string('sign_14')->nullable();
            $table->date('date_15')->nullable();
            $table->time('time_15')->nullable();
            $table->string('progress_15')->nullable();
            $table->string('staff_name_15')->nullable();
            $table->string('sign_15')->nullable();
            $table->date('date_16')->nullable();
            $table->time('time_16')->nullable();
            $table->string('progress_16')->nullable();
            $table->string('staff_name_16')->nullable();
            $table->string('sign_16')->nullable();
            $table->date('date_17')->nullable();
            $table->time('time_17')->nullable();
            $table->string('progress_17')->nullable();
            $table->string('staff_name_17')->nullable();
            $table->string('sign_17')->nullable();
            $table->date('date_18')->nullable();
            $table->time('time_18')->nullable();
            $table->string('progress_18')->nullable();
            $table->string('staff_name_18')->nullable();
            $table->string('sign_18')->nullable();
            $table->date('date_19')->nullable();
            $table->time('time_19')->nullable();
            $table->string('progress_19')->nullable();
            $table->string('staff_name_19')->nullable();
            $table->string('sign_19')->nullable();
            $table->date('date_20')->nullable();
            $table->time('time_20')->nullable();
            $table->string('progress_20')->nullable();
            $table->string('staff_name_20')->nullable();
            $table->string('sign_20')->nullable();
            $table->date('date_21')->nullable();
            $table->time('time_21')->nullable();
            $table->string('progress_21')->nullable();
            $table->string('staff_name_21')->nullable();
            $table->string('sign_21')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurseprogressnotes');
    }
}
