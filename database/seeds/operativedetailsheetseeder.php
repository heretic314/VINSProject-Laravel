<?php

use Illuminate\Database\Seeder;

class operativedetailsheetseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\OperativeDetailSheet::class,4)->create();
    }
}
