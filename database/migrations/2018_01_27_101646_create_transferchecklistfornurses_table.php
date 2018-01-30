<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferchecklistfornursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferchecklistfornurses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('transfer_to');
            $table->text('transfer_from');
            $table->text('no01')->nullable();
            $table->text('ch01')->nullable();
            $table->text('no02')->nullable();
            $table->text('ch02')->nullable();
            $table->text('no03')->nullable();
            $table->text('ch03')->nullable();
            $table->text('no04')->nullable();
            $table->text('ch04')->nullable();
            $table->text('no05')->nullable();
            $table->text('ch05')->nullable();
            $table->text('no06')->nullable();
            $table->text('ch06')->nullable();
            $table->text('no07')->nullable();
            $table->text('ch07')->nullable();
            $table->text('no08')->nullable();
            $table->text('ch08')->nullable();
            $table->text('no09')->nullable();
            $table->text('ch09')->nullable();
            $table->text('no10')->nullable();
            $table->text('ch10')->nullable();
            $table->text('no11')->nullable();
            $table->text('ch11')->nullable();
            $table->text('no12')->nullable();
            $table->text('ch12')->nullable();
            $table->text('no13')->nullable();
            $table->text('ch13')->nullable();
            $table->text('no14')->nullable();
            $table->text('ch14')->nullable();
            $table->text('no15')->nullable();
            $table->text('ch15')->nullable();
            $table->text('no16')->nullable();
            $table->text('ch16')->nullable();
            $table->text('no17')->nullable();
            $table->text('ch17')->nullable();
            $table->text('no18')->nullable();
            $table->text('ch18')->nullable();
            $table->text('no19')->nullable();
            $table->text('ch19')->nullable();
            $table->text('no20')->nullable();
            $table->text('ch20')->nullable();
            $table->text('no21')->nullable();
            $table->text('ch21')->nullable();
            $table->text('no22')->nullable();
            $table->text('ch22')->nullable();
            $table->text('no23')->nullable();
            $table->text('ch23')->nullable();
            $table->text('no24')->nullable();
            $table->text('ch24')->nullable();
            $table->text('no25')->nullable();
            $table->text('ch25')->nullable();
            $table->text('no26')->nullable();
            $table->text('ch26')->nullable();
            $table->text('no27')->nullable();
            $table->text('ch27')->nullable();
            $table->text('no28')->nullable();
            $table->text('ch28')->nullable();
            $table->text('no29')->nullable();
            $table->text('ch29')->nullable();
            $table->text('no30')->nullable();
            $table->text('ch30')->nullable();
            $table->text('ch31')->nullable();
            $table->text('no32')->nullable();
            $table->text('ch32')->nullable();
            $table->text('no33')->nullable();
            $table->text('ch33')->nullable();
            $table->text('no34')->nullable();
            $table->text('ch34')->nullable();
            $table->text('no35')->nullable();
            $table->text('ch35')->nullable();
            $table->text('no36')->nullable();
            $table->text('ch36')->nullable();
            $table->text('no37')->nullable();
            $table->text('ch37')->nullable();
            $table->text('no38')->nullable();
            $table->text('ch38')->nullable();
            $table->text('no39')->nullable();
            $table->text('ch39')->nullable();
            $table->text('no40')->nullable();
            $table->text('ch40')->nullable();
            $table->text('no41')->nullable();
            $table->text('ch41')->nullable();
            $table->text('no42')->nullable();
            $table->text('ch42')->nullable();
            $table->text('pod01')->nullable();
            $table->text('pod02')->nullable();
            $table->text('pod03')->nullable();
            $table->text('pod04')->nullable();
            $table->text('pod05')->nullable();
            $table->text('pod06')->nullable();
            $table->text('pod07')->nullable();
            $table->text('pod08')->nullable();
            $table->text('pod09')->nullable();
            $table->text('pod010')->nullable();
            $table->text('pod011')->nullable();
            $table->text('pod012')->nullable();
            $table->text('pod013')->nullable();
            $table->text('tn01')->nullable();
            $table->date('tn02')->nullable();
            $table->time('tn03')->nullable();
            $table->text('rn01')->nullable();
            $table->date('rn02')->nullable();
            $table->time('rn03')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TransferChecklistForNurses');
    }
}
