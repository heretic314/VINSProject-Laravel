<?php

use Illuminate\Database\Seeder;

class bloodtransfusionformseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BloodTransfusionForm::class,4)->create();
    }
}
