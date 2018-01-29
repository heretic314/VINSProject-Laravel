<?php

use Illuminate\Database\Seeder;

class codeblueevaluationformseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\CodeBlueEvaluationForm::class,1)->create();
    }
}
