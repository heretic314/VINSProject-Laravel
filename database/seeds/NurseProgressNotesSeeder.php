<?php

use Illuminate\Database\Seeder;

class NurseProgressNotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\NurseProgressNotesSeeder::class,10)->create();
    }
}
