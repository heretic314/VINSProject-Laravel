<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(doctorsinitialassessmentseeder::class);
        $this->call(bloodtransfusionformseeder::class);
        $this->call(doctorshandoverseeder::class);
        $this->call(drugrequisitionseeder::class);
        $this->call(doctorsdailynotesseeder::class);
        $this->call(nursingdutyoverseeder::class);
        $this->call(labsheetseeder::class);
        $this->call(PatientDetailForm::class);

    }
}
