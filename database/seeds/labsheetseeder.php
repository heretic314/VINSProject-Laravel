<?php

use Illuminate\Database\Seeder;

class labsheetseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\labsheet::class,4)->create();
    }
}
