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
            $table->time('time');
            $table->string('doctors_name');
            $table->string('given_by');
            $table->string('received_by');
            $table->string('ihc');

            $table->string('cytology');
            $table->string('others');
            $table->string('histopathology');

            $table->string('cytology_01');

            $table->string('type_of_biopsy');
            $table->string('specimen_info');
            $table->string('imaging_details');
            $table->string('clinical_details');
            $table->string('send_to');
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
