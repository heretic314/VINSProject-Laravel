<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNursingDutyOver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('nursingdutyover',function (Blueprint $table){
        $table->increments('id');
        $table->timestamps();
        $table->string('addressograph')->nullable();
        $table->string('specific_instruction')->nullable();
        $table->text('M_nurse_name');
        $table->text('E_nurse_name');
        $table->text('N_nurse_name');
        $table->text('M_incharge_name');
        $table->text('E_incharge_name');
        $table->text('N_incharge_name');
        $table->text('M_eyecare')->nullable();
        $table->text('E_eyecare')->nullable();
        $table->text('N_eyecare')->nullable();
        $table->text('M_mouthcare')->nullable();
        $table->text('E_mouthcare')->nullable();
        $table->text('N_mouthcare')->nullable();
        $table->text('M_skincare')->nullable();
        $table->text('E_skincare')->nullable();
        $table->text('N_skincare')->nullable();
        $table->text('M_bedding')->nullable();
        $table->text('E_bedding')->nullable();
        $table->text('N_bedding')->nullable();
        $table->text('M_cathetercare')->nullable();
        $table->text('E_cathetercare')->nullable();
        $table->text('N_cathetercare')->nullable();
        $table->text('M_physiotherapy')->nullable();
        $table->text('E_physiotherapy')->nullable();
        $table->text('N_physiotherapy')->nullable();
        $table->text('M_spongebath')->nullable();
        $table->text('E_spongebath')->nullable();
        $table->text('N_spongebath')->nullable();
        $table->text('M_other')->nullable();
        $table->text('E_other')->nullable();
        $table->text('N_other')->nullable();
        $table->string('M_investigations')->nullable();
        $table->string('E_investigations')->nullable();
        $table->string('N_investigations')->nullable();
        $table->string('M_pendingreport')->nullable();
        $table->string('E_pendingreport')->nullable();
        $table->string('N_pendingreport')->nullable();
        $table->string('M_replacementdrug')->nullable();
        $table->string('E_replacementdrug')->nullable();
        $table->string('N_replacementdrug')->nullable();
        $table->string('balance_drugs_00')->nullable();
        $table->string('balance_drugs_01')->nullable();
        $table->string('balance_drugs_02')->nullable();
        $table->string('balance_drugs_03')->nullable();
        $table->string('balance_drugs_04')->nullable();
        $table->string('balance_drugs_05')->nullable();
        $table->string('M_time_00')->nullable();
        $table->string('M_time_01')->nullable();
        $table->string('M_time_02')->nullable();
        $table->string('M_time_03')->nullable();
        $table->string('M_time_04')->nullable();
        $table->string('M_time_05')->nullable();
        $table->string('M_balance_00')->nullable();
        $table->string('M_balance_01')->nullable();
        $table->string('M_balance_02')->nullable();
        $table->string('M_balance_03')->nullable();
        $table->string('M_balance_04')->nullable();
        $table->string('M_balance_05')->nullable();
        $table->string('E_time_00')->nullable();
        $table->string('E_time_01')->nullable();
        $table->string('E_time_02')->nullable();
        $table->string('E_time_03')->nullable();
        $table->string('E_time_04')->nullable();
        $table->string('E_time_05')->nullable();
        $table->string('E_balance_00')->nullable();
        $table->string('E_balance_01')->nullable();
        $table->string('E_balance_02')->nullable();
        $table->string('E_balance_03')->nullable();
        $table->string('E_balance_04')->nullable();
        $table->string('E_balance_05')->nullable();
        $table->string('N_time_00')->nullable();
        $table->string('N_time_01')->nullable();
        $table->string('N_time_02')->nullable();
        $table->string('N_time_03')->nullable();
        $table->string('N_time_04')->nullable();
        $table->string('N_time_05')->nullable();
        $table->string('N_balance_00')->nullable();
        $table->string('N_balance_01')->nullable();
        $table->string('N_balance_02')->nullable();
        $table->string('N_balance_03')->nullable();
        $table->string('N_balance_04')->nullable();
        $table->string('N_balance_05')->nullable();
        $table->string('event_m_nurse_name')->nullable();
        $table->string('event_e_nurse_name')->nullable();
        $table->string('event_n_nurse_name')->nullable();
        $table->date('m_date')->nullable();
        $table->date('e_date')->nullable();
        $table->date('n_date')->nullable();
        $table->time('m_time')->nullable();
        $table->time('e_time')->nullable();
        $table->time('n_time')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
