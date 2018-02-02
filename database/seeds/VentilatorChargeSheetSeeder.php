<?php

use Illuminate\Database\Seeder;

class VentilatorChargeSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         factory(App\VentilatorChargeSheet::class,7)->create();
             }
}
