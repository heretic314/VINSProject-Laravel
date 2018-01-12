<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/DailyDietForm', function(){
    return view('DailyDietForm');
});

Route::get('/index', function(){
    return view('Index');
});

Route::get('/AppointmentBook', function(){
    return view('AppointmentBook');
});

Route::get('/Checklist', function(){
    return view('Checklist');
});

Route::get('/CodeBlueEvaluationForm', function(){
    return view('CodeBlueEvaluationForm');
});

Route::get('/CompleteNursingAssessment', function(){
    return view('CompleteNursingAssessment');
});

Route::get('/CounsellingForm', function(){
    return view('CounsellingForm');
});

Route::get('/CPRFormat', function(){
    return view('CPRFormat');
});

Route::get('/CultureBiopsyForm', function(){
    return view('CultureBiopsyForm');
});

Route::get('/DischarheGatepass', function(){
    return view('DischargeGatepass');
});

Route::get('/DoctorsDailyNotes', function(){
    return view('DoctorsDailyNotes');
});

Route::get('/DrugRequisition', function(){
    return view('DrugRequisition');
});

Route::get('/ERObservation', function(){
    return view('ERObservation');
});

Route::get('/Gatepass', function(){
    return view('Gatepass');
});

Route::get('/Glassgow', function(){
    return view('Glassgow');
});

Route::get('/HistoryForm', function(){
    return view('HistoryForm');
});

Route::get('/InvestigationSheet1', function(){
    return view('InvestigationSheet1');
});

Route::get('/InvestigationSheet2', function(){
    return view('InvestigationSheet2');
});

Route::get('/LabSheet', function(){
    return view('LabSheet');
});

Route::get('/MARFlowSheet', function(){
    return view('MARFlowSheet');
});

Route::get('/NursingDutyOver', function(){
    return view('NursingDutyOver');
});

Route::get('/NutritionalAssessmentForm', function(){
    return view('NutritionalAssessmentForm');
});

Route::get('/PatientDietRecord', function(){
    return view('PatientDietRecord');
});

Route::get('/PatientDetailForm', function(){
    return view('PatientsDetailForm');
});

Route::get('/PeripheralLineBundleChecklist', function(){
    return view('PeripheralLineBundleChecklist');
});

Route::get('/PlanOfCare', function(){
    return view('PlanOfCare');
});

Route::get('/PreAngiographyAngioplastyChecklist', function(){
    return view('PreAngiographyAngioplastyChecklist');
});

Route::get('/TransferChecklistForNurses', function(){
    return view('TransferChecklistForNurses');
});

Route::get('/VentilatorChargeSheet', function(){
    return view('VentilatorChargeSheet');
});

Route::get('/WardProcedureRecord', function(){
    return view('WardProcedureRecord');
});

Route::get('/submit_doctors_handover', function(){
  return redirect('/index');
} ) ;

Route::get('/DoctorsInitialAssessment', function(){
    return view('DoctorsInitialAssessment');
});

Route::post('/DoctorsInitialAssessment', function(Request $request){
  $data = $request->validate([
      'history' => 'required|max:255',
      'past_history' => 'required|max:255',
      'allergic_history' => 'required|max:255',
      'name_informant' => 'required|max:255',
      'brought_by' => 'required|max:255',
      'place_of_accident' => 'required|max:255',
      'current_time' => 'required|max:255',
      'current_date' => 'required|max:255',
      'mlc' => 'required|max:255',
      'loc' => 'required|max:255',
      'ent_bleeding' => 'required|max:255',
      'seizures' => 'required|max:255',
      'vomiting' => 'required|max:255',
      'pulse' => 'required|max:255',
      'temp' => 'required|max:255',
      'bp' => 'required|max:255',
      'spo2' => 'required|max:255',
      'rbs' => 'required|max:255',
      'pain' => 'required|max:255',
      'gcs_e' => 'required|max:255',
      'gcs_m' => 'required|max:255',
      'gcs_v' => 'required|max:255',
      'systematic_examination' => 'required|max:255',
      'any_other' => 'required|max:255',
      'treated_on_admission' => 'required|max:255',
      'shifted_to' => 'required|max:255',
  ]);

  $link = tap(new App\DoctorsInitialAssessment($data))->save();

  return view('Index');
});

//
//

Route::get('/BloodTransfusionForm', function(){
    return view('BloodTransfusionForm');
});

Route::post('/BloodTransfusionForm', function(Request $request){
  $data = $request->validate([
    'patient_name'  => 'required|max:255',
    'ipd_no'  => 'required|max:255',
    'age'  => 'required|max:255',
    'sex'  => 'required|max:255',
    'date'  => 'required|max:255',
    'time'  => 'required|max:255',
    'blood_group'  => 'required|max:255',
    'history_bt'  => 'required|max:255',
    'adv'  => 'required|max:255',
    'blood_bag_no'  => 'required|max:255',
    'blood_bag_group'  => 'required|max:255',
    'prod_name'  => 'required|max:255',
    'name_blood_bank'  => 'required|max:255',
    'expiry_date'  => 'required|max:255',
    'checked_by'  => 'required|max:255',
    'unit_nurse'  => 'required|max:255',
    'start_time'  => 'required|max:255',
    'end_time'  => 'required|max:255'
  ]);

  $link2 = tap(new App\BloodTransfusionForm($data))->save();

  return view('Index');
});

Route::get('/DoctorsHandover', function(){
    return view('DoctorsHandover');
});
Route::post('/DoctorsHandover', function(Request $request){
  $data = $request->validate([
    'surgical_day'  => 'required|max:255',
    'surgical_night'  => 'required|max:255',
    'tentative_date_of_surgery_day'  => 'required|max:255',
    'tentative_date_of_surgery_night'  => 'required|max:255',
    'date_of_surgery_day'  => 'required|max:255',
    'date_of_surgery_night'  => 'required|max:255',
    'physician_reference_day'  => 'required|max:255',
    'physician_reference_night'  => 'required|max:255',
    'other_physician_reference_day'  => 'required|max:255',
    'other_physician_reference_night'  => 'required|max:255',
    'pathological_investigation_done_day'  => 'required|max:255',
    'pathological_investigation_done_night'  => 'required|max:255',
    'pathological_investigation_collected_day'  => 'required|max:255',
    'pathological_investigation_collected_night'  => 'required|max:255',
    'radiological_investigation_collected_day'  => 'required|max:255',
    'radiological_investigation_collected_night'  => 'required|max:255',
    'other_investigation_done_day'  => 'required|max:255',
    'other_investigation_done_night'  => 'required|max:255',
    'other_investigation_collected_day'  => 'required|max:255',
    'other_investigation_collected_night'  => 'required|max:255',
    'echo_day'  => 'required|max:255',
    'echo_night'  => 'required|max:255',
    'physiotherapy_day'  => 'required|max:255',
    'physiotherapy_night'  => 'required|max:255',
    'specific_instruction_day'  => 'required|max:255',
    'specific_instruction_night'  => 'required|max:255',
    'verified_by_assistant_day'  => 'required|max:255',
    'verified_by_assistant_night'  => 'required|max:255',
    'name_given_day'  => 'required|max:255',
    'name_given_night'  => 'required|max:255',
    'date_given_day'  => 'required|max:255',
    'date_given_night'  => 'required|max:255',
    'time_given_day'  => 'required|max:255',
    'time_given_night'  => 'required|max:255',
    'name_taken_day'  => 'required|max:255',
    'name_taken_night'  => 'required|max:255',
    'date_taken_day'  => 'required|max:255',
    'date_taken_night'  => 'required|max:255',
    'time_taken_day'  => 'required|max:255',
    'time_taken_night'  => 'required|max:255'
  ]);
  $link3 = tap(new App\DoctorsHandover($data))->save();

  return view('Index');
});



/*
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

*/
