<?php

use Illuminate\Database\Seeder;

class provisionaldischargesummaryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\ProvisionDischargeSummary::class,2)->create();
    }
}
