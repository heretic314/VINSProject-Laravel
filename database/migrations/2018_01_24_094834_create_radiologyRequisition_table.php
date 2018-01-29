<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadiologyRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiologyrequisition', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('provisional_diagnosis');
            $table->string('brain_plain')->nullable();
            $table->string('ct_pmns')->nullable();
            $table->string('brain_plain_contrast')->nullable();
            $table->string('ct_head_face')->nullable();
            $table->string('ct_face_plain')->nullable();
            $table->string('ct_3d')->nullable();
            $table->string('ct_cv_junction_flex')->nullable();
            $table->string('ct_cv_junction_ext')->nullable();
            $table->string('ct_chest_plain')->nullable();
            $table->string('ct_dorsal_spine')->nullable();
            $table->string('ct_cervical_spine')->nullable();
            $table->string('ct_abdomen_plain')->nullable();
            $table->string('ct_lumbar_spine')->nullable();
            $table->string('other')->nullable();
            $table->string('anyother')->nullable();
            $table->string('xray_fixed')->nullable();
            $table->string('xray_portable')->nullable();
            $table->string('other_xray')->nullable();
            $table->string('xray_other')->nullable();
            $table->date('date');
            $table->time('time');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radiologyrequisition');
    }
}
