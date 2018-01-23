<?php

use Illuminate\Database\Seeder;

class infusiontherapychartseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\InfusionTherapyChart::class,4)->create();
    }
}
