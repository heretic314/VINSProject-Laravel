<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeblueevalformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codeblueevaluationform', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('drill');
            $table->string('actual_code_blue');
            $table->string('00');
            $table->string('comm_00')->nullable();
            $table->string('01');
            $table->string('comm_01')->nullable();
            $table->string('02');
            $table->string('comm_02')->nullable();
            $table->string('03');
            $table->string('comm_03')->nullable();
            $table->string('04');
            $table->string('comm_04')->nullable();
            $table->string('05');
            $table->string('comm_05')->nullable();
            $table->string('06');
            $table->string('comm_06')->nullable();
            $table->string('07');
            $table->string('comm_07')->nullable();
            $table->string('08');
            $table->string('comm_08')->nullable();
            $table->string('09');
            $table->string('comm_09')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codeblueevaluationform');
    }
}
