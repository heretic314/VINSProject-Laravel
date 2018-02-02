<?php

use Illuminate\Database\Seeder;

class erobservationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ERObservation::class,4)->create();
    }
}
