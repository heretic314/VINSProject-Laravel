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
        $this->call(patientsdetailformseeder::class);
        $this->call(codeblueevaluationformseeder::class);
        $this->call(infusiontherapychartseeder::class);
        $this->call(planofcareseeder::class);
        $this->call(historyformseeder::class);
        $this->call(operativedetailsheetseeder::class);
        $this->call(radiologyrequisitionseeder::class);
        $this->call(completenursingassessmentseeder::class);
        $this->call(patientdietrecordseeder::class);
        $this->call(TransferChecklistForNursesSeeder::class);
        $this->call(completenursingassessmentseeder::class);
        $this->call(DailyDietFormSeeder::class);
        $this->call(VentilatorChargeSheetSeeder::class);
        $this->call(erobservationseeder::class);
        $this->call(wardprocedurerecordseeder::class);
        $this->call(CultureBiopsyFormSeeder::class);
        $this->call(PreAngiographyAngioplastyChecklistSeeder::class);
        $this->call(appointmentbookseeder::class);
        $this->call(NurseProgressNotesSeeder::class);

=======
        $this->call(provisionaldischargesummaryseeder::class);
>>>>>>> 2f87fa5a1b634ad3b9cdf404b88bbf619f7d8007
    }
}
