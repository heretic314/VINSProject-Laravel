<?php

use Illuminate\Database\Seeder;

class drugrequisitionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DrugRequisition::class,4)->create();
    }
}
