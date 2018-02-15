<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvisionaldischargesummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provisionaldischargesummary', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('address');
            $table->date('date_of_discharge');
            $table->string('addressograph')->nullable();
            $table->string('ref_by');
            $table->string('room_no');
            $table->string('diagnosis');
            $table->string('condition_on_discharge');
            $table->string('advice_on_discharge');
            $table->string('followup');
            $table->date('collect_discharge_summary_on');
            $table->string('collect_discharge_summary_at');
            $table->string('collect_discharge_summary_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provisionaldischargesummary');
    }
}
