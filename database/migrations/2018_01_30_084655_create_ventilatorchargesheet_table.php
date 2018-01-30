<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentilatorchargesheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventilatorchargesheet', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('age');
            $table->string('sex');
            $table->string('bed_no');
            $table->time('time');
            $table->date('date');
            $table->string('mean_pressure');
            $table->string('time_slot01');
            $table->string('time_slot02');
            $table->string('time_slot03');
            $table->string('time_slot04');
            $table->string('mode');
            $table->string('tidal_volume');
            $table->string('freq_controlled');
            $table->string('freq-simv');
            $table->string('pressure_control');
            $table->string('pressure_support');
            $table->string('peep_cpap');
            $table->string('flo2');
            $table->string('triggering');
            $table->string('inp_tv');
            $table->string('exp_tv');
            $table->string('exp_mv');
            $table->string('measured_freq');
            $table->string('peak_pressure');
            $table->string('end_exp');
            $table->string('pressure_low');
            $table->string('volume_high_mv');
            $table->string('volume_low_mv');
            $table->string('gas_supply');
            $table->string('power_failure');
            $table->string('position');
            $table->string('et_tstomy');
            $table->string('oral');
            $table->string('chest_physio');
            $table->string('abg');
            $table->string('x-xray_chest');
            $table->string('catheter_mount');
            $table->string('filter');
            $table->string('ventilator_circuit');
            $table->string('et_tube');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventilatorchargesheet');
    }
}
