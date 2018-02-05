<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreangiographyangioplastychecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PreAngiographyAngioplastyChecklist', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->time('time_arrival');
            $table->time('time_prep_complete');
            $table->time('time_shifting');
            $table->string('consultant_name');
            $table->string('angiography_consent');
            $table->string('angioplasty_consent');
            $table->string('pacemaker');
            $table->string('allergies');
            $table->string('allergies_list')->nullable();
            $table->string('pulse');
            $table->string('bp');
            $table->string('resp');
            $table->string('temp');
            $table->string('part_prep');
            $table->string('pre_med');
            $table->string('ecosprin');
            $table->string('clopidogrel');
            $table->string('blood_arranged');
            $table->string('ivcannula_puton');
            $table->string('height');
            $table->string('weight');
            $table->string('id_band');
            $table->string('jewellery_removed');
            $table->string('dentures');
            $table->string('cbc');
            $table->string('blood_urea');
            $table->string('blood_group');
            $table->string('hbsag');
            $table->string('serum_creatinine');
            $table->string('hep_c');
            $table->string('random_blood_sugar');
            $table->string('hiv');
            $table->string('pt');
            $table->string('chest_xray');
            $table->string('serum_electrolytes');
            $table->string('ecg');
            $table->string('lft');

                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PreAngiographyAngioplastyChecklist');
    }
}
