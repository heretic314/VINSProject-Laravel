<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlanOfCareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planofcares', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('diagnosis');
            $table->string('need_treatment_goal');
            $table->string('treatment_plan');
            $table->string('preventive_aspects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planofcares');
    }
}
