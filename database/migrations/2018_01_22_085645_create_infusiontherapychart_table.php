<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfusiontherapychartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infusiontherapychart', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('patient_name');
            $table->string('ipd_no');
            $table->string('age');
            $table->string('sex');
            $table->string('attending_consultant');
            $table->date('date_01')->nullable();
            $table->string('name_str_01')->nullable();
            $table->string('volume_01')->nullable();
            $table->string('additions_01')->nullable();
            $table->string('rate_01')->nullable();
            $table->time('timestart_01')->nullable();
            $table->time('timeend_01')->nullable();
            $table->date('date_02')->nullable();
            $table->string('name_str_02')->nullable();
            $table->string('volume_02')->nullable();
            $table->string('additions_02')->nullable();
            $table->string('rate_02')->nullable();
            $table->time('timestart_02')->nullable();
            $table->time('timeend_02')->nullable();
            $table->date('date_03')->nullable();
            $table->string('name_str_03')->nullable();
            $table->string('volume_03')->nullable();
            $table->string('additions_03')->nullable();
            $table->string('rate_03')->nullable();
            $table->time('timestart_03')->nullable();
            $table->time('timeend_03')->nullable();
            $table->date('date_04')->nullable();
            $table->string('name_str_04')->nullable();
            $table->string('volume_04')->nullable();
            $table->string('additions_04')->nullable();
            $table->string('rate_04')->nullable();
            $table->time('timestart_04')->nullable();
            $table->time('timeend_04')->nullable();
            $table->date('date_05')->nullable();
            $table->string('name_str_05')->nullable();
            $table->string('volume_05')->nullable();
            $table->string('additions_05')->nullable();
            $table->string('rate_05')->nullable();
            $table->time('timestart_05')->nullable();
            $table->time('timeend_05')->nullable();
            $table->date('date_06')->nullable();
            $table->string('name_str_06')->nullable();
            $table->string('volume_06')->nullable();
            $table->string('additions_06')->nullable();
            $table->string('rate_06')->nullable();
            $table->time('timestart_06')->nullable();
            $table->time('timeend_06')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infusiontherapychart');
    }
}
