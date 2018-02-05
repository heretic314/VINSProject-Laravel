<?php

use Illuminate\Database\Seeder;

class PreAngiographyAngioplastyChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         factory(App\PreAngiographyAngioplastyChecklist::class,8)->create();
     }
 }
