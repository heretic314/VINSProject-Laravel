<?php

use Illuminate\Database\Seeder;

class DailyDietFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DailyDietForm::class,4)->create();
    }
}
