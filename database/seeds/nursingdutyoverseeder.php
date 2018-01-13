<?php

use Illuminate\Database\Seeder;

class nursingdutyoverseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NursingDutyOver::class,1)->create();
    }
}
