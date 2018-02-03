<?php

use Illuminate\Database\Seeder;

class wardprocedurerecordseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\WardProcedureRecord::class,2)->create();
    }
}
