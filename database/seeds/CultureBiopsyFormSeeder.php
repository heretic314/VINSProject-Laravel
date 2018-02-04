<?php

use Illuminate\Database\Seeder;

class CultureBiopsyFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CultureBiopsyForm::class,4)->create();
    }
}
