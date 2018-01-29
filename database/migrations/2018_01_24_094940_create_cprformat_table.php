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
        Schema::create('CPRFormat', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('patient_name')->nullable();
            $table->string('ipd_no')->nullable();

            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->date('date')->nullable();
            $table->time('start_time')->nullable();
            $table->string('bed_no')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('name_doctor')->nullable();
            $table->string('cpr_team')->nullable();
            $table->time('intubation_time')->nullable();
            $table->string('defib_rhythm_00')->nullable();
            $table->string('defib_rhythm_01')->nullable();
            $table->string('defib_rhythm_02')->nullable();
            $table->string('defib_rhythm_03')->nullable();
            $table->string('defib_rhythm_04')->nullable();

            $table->string('defib_dc_00')->nullable();
            $table->string('defib_dc_01')->nullable();
            $table->string('defib_dc_02')->nullable();
            $table->string('defib_dc_03')->nullable();
            $table->string('defib_dc_04')->nullable();

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

            $table->time('total_time')->nullable();
            $table->string('outcome')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('remarks')->nullable();

            $table->string('consultant_counseled')->nullable();
            $table->string('relative_name')->nullable();

            $table->string('00_01')->nullable();
            $table->string('00_02')->nullable();
            $table->string('00_03')->nullable();
            $table->string('00_04')->nullable();
            $table->string('00_05')->nullable();
            $table->string('00_06')->nullable();
            $table->string('00_07')->nullable();
            $table->text('00_08')->nullable();

            $table->string('01_01')->nullable();
            $table->string('01_02')->nullable();
            $table->string('01_03')->nullable();
            $table->string('01_04')->nullable();
            $table->string('01_05')->nullable();
            $table->string('01_06')->nullable();
            $table->string('01_07')->nullable();
            $table->text('01_08')->nullable();

            $table->string('02_01')->nullable();
            $table->string('02_02')->nullable();
            $table->string('02_03')->nullable();
            $table->string('02_04')->nullable();
            $table->string('02_05')->nullable();
            $table->string('02_06')->nullable();
            $table->string('02_07')->nullable();
            $table->text('02_08')->nullable();

            $table->string('03_01')->nullable();
            $table->string('03_02')->nullable();
            $table->string('03_03')->nullable();
            $table->string('03_04')->nullable();
            $table->string('03_05')->nullable();
            $table->string('03_06')->nullable();
            $table->string('03_07')->nullable();
            $table->text('03_08')->nullable();

            $table->string('04_01')->nullable();
            $table->string('04_02')->nullable();
            $table->string('04_03')->nullable();
            $table->string('04_04')->nullable();
            $table->string('04_05')->nullable();
            $table->string('04_06')->nullable();
            $table->string('04_07')->nullable();
            $table->text('04_08')->nullable();

            $table->string('05_01')->nullable();
            $table->string('05_02')->nullable();
            $table->string('05_03')->nullable();
            $table->string('05_04')->nullable();
            $table->string('05_05')->nullable();
            $table->string('05_06')->nullable();
            $table->string('05_07')->nullable();
            $table->text('05_08')->nullable();

            $table->string('06_01')->nullable();
            $table->string('06_02')->nullable();
            $table->string('06_03')->nullable();
            $table->string('06_04')->nullable();
            $table->string('06_05')->nullable();
            $table->string('06_06')->nullable();
            $table->string('06_07')->nullable();
            $table->text('06_08')->nullable();
            $table->time('initial_time')->nullable();


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
