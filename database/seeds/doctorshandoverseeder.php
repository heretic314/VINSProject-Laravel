<?php

use Illuminate\Database\Seeder;

class doctorshandoverseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\DoctorsHandover::class,2)->create();
    }
}
