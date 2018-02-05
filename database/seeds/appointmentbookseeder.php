<?php

use Illuminate\Database\Seeder;

class appointmentbookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AppointmentBook::class,4)->create();
    }
}
