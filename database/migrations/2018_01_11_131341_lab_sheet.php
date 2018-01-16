<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LabSheet extends Migration
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
            $table->date('date_01');
            $table->date('date_02');
            $table->date('date_03');
            $table->date('date_04');
            $table->date('date_05');
            $table->date('date_06');
            $table->date('date_07');

              $table->string('investigation_01');
                  $table->string('investigation_02');
                      $table->string('investigation_03');
                          $table->string('investigation_04');
                              $table->string('investigation_05');
                                  $table->string('investigation_06');
                                    $table->string('investigation_07');

              $table->string('name_01');
                $table->string('name_02');
                  $table->string('name_03');
                    $table->string('name_04');
                      $table->string('name_05');
                        $table->string('name_06');
                          $table->string('name_07');
              $table->string('remark_01');
                $table->string('remark_02');
                $table->string('remark_03');
                  $table->string('remark_04');
                  $table->string('remark_05');
                  $table->string('remark_06');
                    $table->string('remark_07');
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
