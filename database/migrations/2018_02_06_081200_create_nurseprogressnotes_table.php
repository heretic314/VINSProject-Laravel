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
