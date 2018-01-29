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
        Schema::create('TransferChecklistForNurses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('transfer_to');

            $table->text('transfer_from');
            $table->text('no01');
            $table->text('ch01');
            $table->text('no02');
            $table->text('ch02');
            $table->text('no03');
            $table->text('ch03');
            $table->text('no04');
            $table->text('ch04');
            $table->text('no05');
            $table->text('ch05');
            $table->text('no06');
            $table->text('ch06');
            $table->text('no07');
            $table->text('ch07');
            $table->text('no08');
            $table->text('ch08');
            $table->text('no09');
            $table->text('ch09');
            $table->text('no10');
            $table->text('ch10');

            $table->text('no11');
            $table->text('ch11');
            $table->text('no12');
            $table->text('ch12');
            $table->text('no13');
            $table->text('ch13');
            $table->text('no14');
            $table->text('ch14');
            $table->text('no15');
            $table->text('ch15');
            $table->text('no16');
            $table->text('ch16');
            $table->text('no17');
            $table->text('ch17');
            $table->text('no18');
            $table->text('ch18');
            $table->text('no19');
            $table->text('ch19');
            $table->text('no20');
            $table->text('ch20');

            $table->text('no21');
            $table->text('ch21');
            $table->text('no22');
            $table->text('ch22');
            $table->text('no23');
            $table->text('ch23');
            $table->text('no24');
            $table->text('ch24');
            $table->text('no25');
            $table->text('ch25');
            $table->text('no26');
            $table->text('ch26');
            $table->text('no27');
            $table->text('ch27');
            $table->text('no28');
            $table->text('ch28');
            $table->text('no29');
            $table->text('ch29');
            $table->text('no30');
            $table->text('ch30');



            $table->text('ch31');
            $table->text('no32');
            $table->text('ch32');
            $table->text('no33');
            $table->text('ch33');
            $table->text('no34');
            $table->text('ch34');
            $table->text('no35');
            $table->text('ch35');
            $table->text('no36');
            $table->text('ch36');
            $table->text('no37');
            $table->text('ch37');
            $table->text('no38');
            $table->text('ch38');
            $table->text('no39');
            $table->text('ch39');
            $table->text('no40');
            $table->text('ch40');


            $table->text('no41');
            $table->text('ch41');
            $table->text('no42');
            $table->text('ch42');

            $table->text('pod01');
            $table->text('pod02');
            $table->text('pod03');
            $table->text('pod04');
            $table->text('pod05');
            $table->text('pod06');
            $table->text('pod07');
            $table->text('pod08');
            $table->text('pod09');
            $table->text('pod010');
            $table->text('pod011');
            $table->text('pod012');
            $table->text('pod013');
            $table->text('tn01');
            $table->date('tn02');
            $table->time('tn03');
            $table->text('rn01');
            $table->date('rn02');
            $table->time('rn03');








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
