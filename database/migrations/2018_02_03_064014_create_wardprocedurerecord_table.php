<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardprocedurerecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wardprocedurerecord', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('time');
            $table->string('multipara_monitoring_less6');
            $table->string('multipara_monitoring_more6');
            $table->string('oxygen_upto12');
            $table->string('oxygen_more12');
            $table->string('pulse_intermittent');
            $table->string('pulse_continuous');
            $table->string('ventilator_bipap');
            $table->string('nebulization');
            $table->string('blood_transfusion');
            $table->string('rbs');
            $table->string('ecg');
            $table->string('bed_charges');
            $table->string('traction');
            $table->string('dressing');
            $table->string('spcl_dressing');
            $table->string('tube_insertion');
            $table->string('catheterisation');
            $table->string('suture_removal');
            $table->string('clw_suturing');
            $table->string('diet_consultation');
            $table->string('enema');
            $table->string('syringe_pump');
            $table->string('echo');
            $table->string('urine_sugar');
            $table->string('peripheral_line');
            $table->string('central_line');
            $table->string('lumbar_puncture');
            $table->string('csf_manometry');
            $table->string('intubation');
            $table->string('code_blue');
            $table->string('resuscitation');
            $table->string('ambulance_charges');
            $table->string('escort_ventilator');
            $table->string('escort_without');
            $table->string('mlc_inside_city');
            $table->string('mlc_outside_city');
            $table->string('defibrillator_charges');
            $table->string('physiotherapy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wardprocedurerecord');
    }
}
