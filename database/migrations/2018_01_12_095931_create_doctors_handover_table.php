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
            $table->string('day_night');
            $table->string('surgical')->nullable();
            $table->date('tentative_date_of_surgery')->nullable();
            $table->date('date_of_surgery')->nullable();
            $table->string('physician_reference')->nullable();
            $table->string('other_physician_reference')->nullable();
            $table->string('pathological_investigation_done')->nullable();
            $table->string('pathological_investigation_collected')->nullable();
            $table->string('radiological_investigation_collected')->nullable();
            $table->string('other_investigation_done')->nullable();
            $table->string('other_investigation_collected')->nullable();
            $table->string('echo')->nullable();
            $table->string('physiotherapy')->nullable();
            $table->string('specific_instruction')->nullable();
            $table->string('verified_by_assistant')->nullable();
            $table->string('name_given')->nullable();
            $table->date('date_given')->nullable();
            $table->time('time_given')->nullable();
            $table->string('name_taken')->nullable();
            $table->date('date_taken')->nullable();
            $table->time('time_taken')->nullable();


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
