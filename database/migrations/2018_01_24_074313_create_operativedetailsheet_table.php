<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperativedetailsheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativedetailsheet', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ot_no');
            $table->date('date');
            $table->time('wheel_in');
            $table->time('wheel_out');
            $table->time('anesthesa_induction_time');
            $table->time('reversal_time');
            $table->string('antibiotic1');
            $table->time('antibiotic1_time');
            $table->string('antibiotic2')->nullable();
            $table->time('antibiotic2_time')->nullable();
            $table->time('surgical_time_from');
            $table->time('surgical_time_to');
            $table->string('surgery_type');
            $table->string('surgeon1');
            $table->string('surgeon2')->nullable();
            $table->string('surgeon3')->nullable();
            $table->string('anesthetist1');
            $table->string('anesthetist2')->nullable();
            $table->string('anesthetist3')->nullable();
            $table->string('iitv')->nullable();
            $table->string('fentanyl')->nullable();
            $table->string('drill')->nullable();
            $table->string('sevoflurane_desflurane')->nullable();
            $table->string('microscope')->nullable();
            $table->string('endoscope')->nullable();
            $table->string('cussa')->nullable();
            $table->string('implants')->nullable();
            $table->string('vendor')->nullable();
            $table->string('diagnosis');
            $table->string('operation_performed');
            $table->string('mediclaim');
            $table->string('name_tpa');
            $table->string('company_thirdparty');
            $table->string('name_party');
            $table->string('amount');
            $table->string('surgery_only');
            $table->string('package_surgical');
            $table->string('package_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operativedetailsheet');
    }
}
