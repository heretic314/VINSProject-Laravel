<<<<<<< current
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
            $table->time('intubation_time')->nullable();
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
            $table->time('medication_time_10')->nullable();
            $table->string('medication_name_11')->nullable();
            $table->time('medication_time_20')->nullable();
            $table->string('medication_name_21')->nullable();
            $table->time('medication_time_30')->nullable();
            $table->string('medication_name_31')->nullable();
            $table->time('medication_time_40')->nullable();
            $table->string('medication_name_41')->nullable();
            $table->time('total_time');
            $table->string('outcome');
            $table->string('doctor_name');
            $table->string('remarks');
            $table->string('consultant_counseled');
            $table->string('relative_name');
            $table->string('_00_01');
            $table->string('_00_02');
            $table->string('_00_03');
            $table->string('_00_04');
            $table->string('_00_05');
            $table->string('_00_06');
            $table->string('_00_07');
            $table->text('_00_08');
            $table->string('_01_01');
            $table->string('_01_02');
            $table->string('_01_03');
            $table->string('_01_04');
            $table->string('_01_05');
            $table->string('_01_06');
            $table->string('_01_07');
            $table->text('_01_08');
            $table->string('_02_01');
            $table->string('_02_02');
            $table->string('_02_03');
            $table->string('_02_04');
            $table->string('_02_05');
            $table->string('_02_06');
            $table->string('_02_07');
            $table->text('_02_08');
            $table->string('_03_01');
            $table->string('_03_02');
            $table->string('_03_03');
            $table->string('_03_04');
            $table->string('_03_05');
            $table->string('_03_06');
            $table->string('_03_07');
            $table->text('_03_08');
            $table->string('_04_01');
            $table->string('_04_02');
            $table->string('_04_03');
            $table->string('_04_04');
            $table->string('_04_05');
            $table->string('_04_06');
            $table->string('_04_07');
            $table->text('_04_08');
            $table->string('_05_01');
            $table->string('_05_02');
            $table->string('_05_03');
            $table->string('_05_04');
            $table->string('_05_05');
            $table->string('_05_06');
            $table->string('_05_07');
            $table->text('_05_08');
            $table->string('_06_01');
            $table->string('_06_02');
            $table->string('_06_03');
            $table->string('_06_04');
            $table->string('_06_05');
            $table->string('_06_06');
            $table->string('_06_07');
            $table->text('_06_08');
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

  
