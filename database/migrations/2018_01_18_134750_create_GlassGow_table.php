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
            $table->string('r1c1')->nullable();
            $table->string('r1c2')->nullable();
            $table->string('r1c3')->nullable();
            $table->string('r1c4')->nullable();
            $table->string('r1c5')->nullable();
            $table->string('r1c6')->nullable();
            $table->string('r1c7')->nullable();
            $table->string('r1c8')->nullable();
            $table->string('r1c9')->nullable();
            $table->string('r1c10')->nullable();
            $table->string('r1c11')->nullable();
            $table->string('r1c12')->nullable();

            $table->string('r2c1')->nullable();
            $table->string('r2c2')->nullable();
            $table->string('r2c3')->nullable();
            $table->string('r2c4')->nullable();
            $table->string('r2c5')->nullable();
            $table->string('r2c6')->nullable();
            $table->string('r2c7')->nullable();
            $table->string('r2c8')->nullable();
            $table->string('r2c9')->nullable();
            $table->string('r2c10')->nullable();
            $table->string('r2c11')->nullable();
            $table->string('r2c12')->nullable();

            $table->string('r3c1')->nullable();
            $table->string('r3c2')->nullable();
            $table->string('r3c3')->nullable();
            $table->string('r3c4')->nullable();
            $table->string('r3c5')->nullable();
            $table->string('r3c6')->nullable();
            $table->string('r3c7')->nullable();
            $table->string('r3c8')->nullable();
            $table->string('r3c9')->nullable();
            $table->string('r3c10')->nullable();
            $table->string('r3c11')->nullable();
            $table->string('r3c12')->nullable();

            $table->string('r4c1')->nullable();
            $table->string('r4c2')->nullable();
            $table->string('r4c3')->nullable();
            $table->string('r4c4')->nullable();
            $table->string('r4c5')->nullable();
            $table->string('r4c6')->nullable();
            $table->string('r4c7')->nullable();
            $table->string('r4c8')->nullable();
            $table->string('r4c9')->nullable();
            $table->string('r4c10')->nullable();
            $table->string('r4c11')->nullable();
            $table->string('r4c12')->nullable();

            $table->string('r5c1')->nullable();
            $table->string('r5c2')->nullable();
            $table->string('r5c3')->nullable();
            $table->string('r5c4')->nullable();
            $table->string('r5c5')->nullable();
            $table->string('r5c6')->nullable();
            $table->string('r5c7')->nullable();
            $table->string('r5c8')->nullable();
            $table->string('r5c9')->nullable();
            $table->string('r5c10')->nullable();
            $table->string('r5c11')->nullable();
            $table->string('r5c12')->nullable();

            $table->string('r6c1')->nullable();
            $table->string('r6c2')->nullable();
            $table->string('r6c3')->nullable();
            $table->string('r6c4')->nullable();
            $table->string('r6c5')->nullable();
            $table->string('r6c6')->nullable();
            $table->string('r6c7')->nullable();
            $table->string('r6c8')->nullable();
            $table->string('r6c9')->nullable();
            $table->string('r6c10')->nullable();
            $table->string('r6c11')->nullable();
            $table->string('r6c12')->nullable();

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
