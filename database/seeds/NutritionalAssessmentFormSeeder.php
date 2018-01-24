<?php

use Illuminate\Database\Seeder;

class NutritionalAssessmentFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      public function run()
      {
          //
          factory(App\NutritionalAssessmentForm::class,6)->create();
      }
    }
}
