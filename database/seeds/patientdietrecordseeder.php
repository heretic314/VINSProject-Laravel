<?php

use Illuminate\Database\Seeder;

class patientdietrecordseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PatientDietRecord::class,4)->create();
    }
}
