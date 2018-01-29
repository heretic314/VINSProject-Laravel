<?php

use Illuminate\Database\Seeder;

class CPRFormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CPRFormat::class,2)->create();
    }
}
