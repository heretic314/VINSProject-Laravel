<?php

use Illuminate\Database\Seeder;

class TransferChecklistForNursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TransferChecklistForNurses::class,7)->create();
            }
}
