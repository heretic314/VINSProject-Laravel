<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCulturebiopsyformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culturebiopsyform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date');
            $table->datetime('time');
            $table->string('doctors_name');
            $table->string('given_by');
            $table->string('received_by');
            $table->string('ihc');
            $table->string('cytology_000')->nullable();
            $table->string('cytology_001')->nullable();
            $table->string('others');
            $table->string('histopathology_00')->nullable();
            $table->string('histopathology_01')->nullable();
            $table->string('cytology_00')->nullable();
            $table->string('cytology_01')->nullable();
            $table->string('cytology_02')->nullable();
            $table->string('type_of_biopsy_01')->nullable();
            $table->string('type_of_biopsy_02')->nullable();
            $table->string('type_of_biopsy_03')->nullable();
            $table->string('type_of_biopsy_04')->nullable();
            $table->string('type_of_biopsy_05')->nullable();
            $table->string('specimen_info');
            $table->string('imaging_details');
            $table->string('clinical_details');
            $table->string('send_to_00')->nullable();
            $table->string('send_to_01')->nullable();
            $table->string('consultant_sign');
            $table->string('consultant_name');
            $table->date('date_for_sign');
            $table->time('time_for_sign');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('culturebiopsyform');
    }
}
