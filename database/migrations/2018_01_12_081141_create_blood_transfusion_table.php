<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodTransfusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodtransfusionform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('patient_name');
            $table->string('ipd_no');
            $table->string('age');
            $table->string('sex');
            $table->date('date');
            $table->time('time');
            $table->string('blood_group');
            $table->string('history_bt');
            $table->string('adv');
            $table->string('blood_bag_no');
            $table->string('blood_bag_group');
            $table->string('prod_name');
            $table->string('name_blood_bank');
            $table->date('expiry_date');
            $table->string('checked_by');
            $table->string('unit_nurse');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('minor_reaction')->nullable();
            $table->string('moderate')->nullable();
            $table->string('major_reactions')->nullable();
            $table->string('time_adverse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_transfusion');
    }
}
