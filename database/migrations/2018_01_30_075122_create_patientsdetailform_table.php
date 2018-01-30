<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsdetailformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientsdetailform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('date');
            $table->time('time');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('address');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('reference_dr');
            $table->string('consulting_dr');
            $table->string('case');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patientsdetailform');
    }
}
