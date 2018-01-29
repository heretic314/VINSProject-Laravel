<?php

use Illuminate\Database\Seeder;

class doctorsinitialassessmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DoctorsInitialAssessment::class,4)->create();
    }
}
