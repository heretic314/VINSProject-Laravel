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
            $table->word('name');
            $table->word('age');
            $table->word('sex');
            $table->word('bed_no');
            $table->time('time');
            $table->date('date');
            $table->word('time_slot01');
            $table->word('time_slot02');
            $table->word('time_slot03');
            $table->word('time_slot04');
            $table->word('mode');
            $table->word('tidal_volume');
            $table->word('freq_controlled');
            $table->word('freq-simv');
            $table->word('pressure_control');
            $table->word('pressure_support');
            $table->word('peep_cpap');
            $table->word('flo2');
            $table->word('triggering');
            $table->word('inp_tv');
            $table->word('exp_tv');
            $table->word('exp_mv');
            $table->word('measured_freq');
            $table->word('peak_pressure');
            $table->word('end_exp');
            $table->word('pressure_low');
            $table->word('volume_high_mv');
            $table->word('volume_low_mv');
            $table->word('gas_supply');
            $table->word('power_failure');
            $table->word('position');
            $table->word('et_tstomy');
            $table->word('oral');
            $table->word('chest_physio');
            $table->word('abg');
            $table->word('x-xray_chest');
            $table->word('catheter_mount');
            $table->word('filter');
            $table->word('ventilator_circuit');
            $table->word('et_tube');




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
