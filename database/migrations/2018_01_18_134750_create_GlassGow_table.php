<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlassGowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GlassGow', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('r1c1');
            $table->string('r1c2');
            $table->string('r1c3');
            $table->string('r1c4');
            $table->string('r1c5');
            $table->string('r1c6');
            $table->string('r1c7');
            $table->string('r1c8');
            $table->string('r1c9');
            $table->string('r1c10');
            $table->string('r1c11');
            $table->string('r1c12');

            $table->string('r2c1');
            $table->string('r2c2');
            $table->string('r2c3');
            $table->string('r2c4');
            $table->string('r2c5');
            $table->string('r2c6');
            $table->string('r2c7');
            $table->string('r2c8');
            $table->string('r2c9');
            $table->string('r2c10');
            $table->string('r2c11');
            $table->string('r2c12');

            $table->string('r3c1');
            $table->string('r3c2');
            $table->string('r3c3');
            $table->string('r3c4');
            $table->string('r3c5');
            $table->string('r3c6');
            $table->string('r3c7');
            $table->string('r3c8');
            $table->string('r3c9');
            $table->string('r3c10');
            $table->string('r3c11');
            $table->string('r3c12');

            $table->string('r4c1');
            $table->string('r4c2');
            $table->string('r4c3');
            $table->string('r4c4');
            $table->string('r4c5');
            $table->string('r4c6');
            $table->string('r4c7');
            $table->string('r4c8');
            $table->string('r4c9');
            $table->string('r4c10');
            $table->string('r4c11');
            $table->string('r4c12');

            $table->string('r5c1');
            $table->string('r5c2');
            $table->string('r5c3');
            $table->string('r5c4');
            $table->string('r5c5');
            $table->string('r5c6');
            $table->string('r5c7');
            $table->string('r5c8');
            $table->string('r5c9');
            $table->string('r5c10');
            $table->string('r5c11');
            $table->string('r5c12');

            $table->string('r6c1');
            $table->string('r6c2');
            $table->string('r6c3');
            $table->string('r6c4');
            $table->string('r6c5');
            $table->string('r6c6');
            $table->string('r6c7');
            $table->string('r6c8');
            $table->string('r6c9');
            $table->string('r6c10');
            $table->string('r6c11');
            $table->string('r6c12');

              $table->date('date1');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GlassGow');
    }
}
