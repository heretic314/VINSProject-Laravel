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
            $table->string('m_tea')->nullable();
            $table->string('m_breakfast')->nullable();
            $table->string('soup')->nullable();
            $table->string('lunch')->nullable();
            $table->string('e_snacks')->nullable();
            $table->string('juice')->nullable();
            $table->string('dinner')->nullable();
            $table->string('milk')->nullable();
            $table->string('remarks')->nullable();


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
