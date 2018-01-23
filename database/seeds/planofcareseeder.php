<?php

use Illuminate\Database\Seeder;

class planofcareseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PlanOfCare::class,4)->create();
    }
}
