<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('labsheet', function (Blueprint $table) {
           $table->increments('id');
           $table->timestamps();
           $table->string('room_no');
           $table->date('date');
           $table->date('date_01')->nullable();
           $table->date('date_02')->nullable();
           $table->date('date_03')->nullable();
           $table->date('date_04')->nullable();
           $table->date('date_05')->nullable();
           $table->date('date_06')->nullable();
           $table->date('date_07')->nullable();
           $table->string('investigation_01')->nullable();
           $table->string('investigation_02')->nullable();
           $table->string('investigation_03')->nullable();
           $table->string('investigation_04')->nullable();
           $table->string('investigation_05')->nullable();
           $table->string('investigation_06')->nullable();
           $table->string('investigation_07')->nullable();
           $table->string('name_01')->nullable();
           $table->string('name_02')->nullable();
           $table->string('name_03')->nullable();
           $table->string('name_04')->nullable();
           $table->string('name_05')->nullable();
           $table->string('name_06')->nullable();
           $table->string('name_07')->nullable();
           $table->string('remark_01')->nullable();
           $table->string('remark_02')->nullable();
           $table->string('remark_03')->nullable();
           $table->string('remark_04')->nullable();
           $table->string('remark_05')->nullable();
           $table->string('remark_06')->nullable();
           $table->string('remark_07')->nullable();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labsheet');
    }
}
