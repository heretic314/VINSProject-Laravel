<?php

use Illuminate\Database\Seeder;

class doctorsdailynotesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DoctorsDailyNotes::class,1)->create();
    }
}
