<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyDietForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailydietform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('floor_name');
            $table->string('cross_verified_by');
            $table->date('date');
            $table->string('room_no');
            $table->string('patient_name');
            $table->string('diet_suggested_by');
            $table->string('m_tea');
            $table->string('m_breakfast');
            $table->string('soup');
            $table->string('lunch');
            $table->string('e_snacks');
            $table->string('juice');
            $table->string('dinner');
            $table->string('milk');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dailydietform');
    }
}
