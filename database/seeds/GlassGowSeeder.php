<?php

use Illuminate\Database\Seeder;

class GlassGowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\GlassGow::class,5)->create();
    }
}
