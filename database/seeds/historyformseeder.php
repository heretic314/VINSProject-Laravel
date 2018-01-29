<?php

use Illuminate\Database\Seeder;

class historyformseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\HistoryForm::class,4)->create();
    }
}
