<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCprformatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cprformat', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('patient_name');
            $table->string('ipd_no');
            $table->string('age');
            $table->string('sex');
            $table->date('date');
            $table->time('start_time');
            $table->string('bed_no');
            $table->string('diagnosis');
            $table->string('name_doctor');
            $table->string('cpr_team');
            $table->time('intubation_time');
            $table->string('defib_rhythm_00');
            $table->string('defib_rhythm_01');
            $table->string('defib_rhythm_02');
            $table->string('defib_rhythm_03');
            $table->string('defib_rhythm_04');
            $table->string('defib_dc_00');
            $table->string('defib_dc_01');
            $table->string('defib_dc_02');
            $table->string('defib_dc_03');
            $table->string('defib_dc_04');
            $table->time('medication_time_00')->nullable();
            $table->string('medication_name_01')->nullable();
            $table->string('medication_time_10')->nullable();
            $table->string('medication_name_11')->nullable();
            $table->string('medication_time_20')->nullable();
            $table->string('medication_name_21')->nullable();
            $table->string('medication_time_30')->nullable();
            $table->string('medication_name_31')->nullable();
            $table->string('medication_time_40')->nullable();
            $table->string('medication_name_41')->nullable();
            $table->time('total_time');
            $table->string('outcome');
            $table->string('doctor_name');
            $table->string('remarks');
            $table->string('consultant_counseled');
            $table->string('relative_name');
            $table->string('00_01');
            $table->string('00_02');
            $table->string('00_03');
            $table->string('00_04');
            $table->string('00_05');
            $table->string('00_06');
            $table->string('00_07');
            $table->text('00_08');
            $table->string('01_01');
            $table->string('01_02');
            $table->string('01_03');
            $table->string('01_04');
            $table->string('01_05');
            $table->string('01_06');
            $table->string('01_07');
            $table->text('01_08');
            $table->string('02_01');
            $table->string('02_02');
            $table->string('02_03');
            $table->string('02_04');
            $table->string('02_05');
            $table->string('02_06');
            $table->string('02_07');
            $table->text('02_08');
            $table->string('03_01');
            $table->string('03_02');
            $table->string('03_03');
            $table->string('03_04');
            $table->string('03_05');
            $table->string('03_06');
            $table->string('03_07');
            $table->text('03_08');
            $table->string('04_01');
            $table->string('04_02');
            $table->string('04_03');
            $table->string('04_04');
            $table->string('04_05');
            $table->string('04_06');
            $table->string('04_07');
            $table->text('04_08');
            $table->string('05_01');
            $table->string('05_02');
            $table->string('05_03');
            $table->string('05_04');
            $table->string('05_05');
            $table->string('05_06');
            $table->string('05_07');
            $table->text('05_08');
            $table->string('06_01');
            $table->string('06_02');
            $table->string('06_03');
            $table->string('06_04');
            $table->string('06_05');
            $table->string('06_06');
            $table->string('06_07');
            $table->text('06_08');
            $table->time('initial_time');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CPRFormat');
    }
}
