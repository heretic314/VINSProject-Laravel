<?php

use Illuminate\Database\Seeder;

class patientsdetailformseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PatientsDetailForm::class,6)->create();
    }
}
