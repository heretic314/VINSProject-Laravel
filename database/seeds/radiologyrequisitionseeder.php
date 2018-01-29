<?php

use Illuminate\Database\Seeder;

class radiologyrequisitionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RadiologyRequisition::class,4)->create();
    }
}
