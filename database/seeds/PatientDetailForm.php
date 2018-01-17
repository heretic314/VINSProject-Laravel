<?php

use Illuminate\Database\Seeder;

class PatientDetailForm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PatientDetailForm::class,4)->create();
    }
}
