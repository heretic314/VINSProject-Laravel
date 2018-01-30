<?php

use Illuminate\Database\Seeder;

class completenursingassessmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\CompleteNursingAssessment::class,2)->create();
    }
}
