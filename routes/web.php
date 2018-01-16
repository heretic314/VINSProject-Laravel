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

Route::group(['middleware' => ['auth']], function() {

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

  Route::post('/DoctorsDailyNotes',function(Request $request){
    $data = $request->validate([
      'name' => 'required|max:255',
      'ipd_no' => 'unique|numeric|required|max:255',
      'sex' => 'required|max:255',
      'attending_consultant' => 'required|max:255',
      'age' => 'required|digits_between:1,100|max:255',
      'date' => 'required|max:255',
      'c_o_07' => 'required|max:255',
      'oe_pulse_07' => 'required|max:255',
      'bp_07' => 'required|max:255',
      'temp_07' => 'required|max:255',
      'resp_spo2_07' => 'required|max:255',
      'pain_07' => 'required|max:255',
      'c_o_09' => 'required|max:255',
      'oe_pulse_09' => 'required|max:255',
      'bp_09' => 'required|max:255',
      'temp_09' => 'required|max:255',
      'resp_spo2_09' => 'required|max:255',
      'pain_09' => 'required|max:255',
      'c_o_15' => 'required|max:255',
      'oe_pulse_15' => 'required|max:255',
      'bp_15' => 'required|max:255',
      'temp_15' => 'required|max:255',
      'resp_spo2_15' => 'required|max:255',
      'pain_15' => 'required|max:255',
      'c_o_21' => 'required|max:255',
      'oe_pulse_21' => 'required|max:255',
      'bp_21' => 'required|max:255',
      'temp_21' => 'required|max:255',
      'resp_spo2_21' => 'required|max:255',
      'pain_21' => 'required|max:255',
    ]);

    $link = tap(new App\DoctorsDailyNotes($data))->save();

    return view('Index');
  });

  Route::get('/DrugRequisition', function(){
      return view('DrugRequisition');
  });

  Route::post('/DrugRequisition', function(Request $request){
    $data = $request->validate([
      'name_of_drug_01' => 'nullable|max:255',
      'quantity_01' => 'nullable|max:255',
      'batch_no_01' => 'nullable|max:255',
      'expiry_date_01' => 'nullable|max:255',
      'issued_by_01' => 'nullable|max:255',
      'received_by_01' => 'nullable|max:255',
      'name_of_drug_02' => 'nullable|max:255',
      'quantity_02' => 'nullable|max:255',
      'batch_no_02' => 'nullable|max:255',
      'expiry_date_02' => 'nullable|max:255',
      'issued_by_02' => 'nullable|max:255',
      'received_by_02' => 'nullable|max:255',
      'name_of_drug_03' => 'nullable|max:255',
      'quantity_03' => 'nullable|max:255',
      'batch_no_03' => 'nullable|max:255',
      'expiry_date_03' => 'nullable|max:255',
      'issued_by_03' => 'nullable|max:255',
      'received_by_03' => 'nullable|max:255',
      'name_of_drug_04' => 'nullable|max:255',
      'quantity_04' => 'nullable|max:255',
      'batch_no_04' => 'nullable|max:255',
      'expiry_date_04' => 'nullable|max:255',
      'issued_by_04' => 'nullable|max:255',
      'received_by_04' => 'nullable|max:255',
      'name_of_drug_05' => 'nullable|max:255',
      'quantity_05' => 'nullable|max:255',
      'batch_no_05' => 'nullable|max:255',
      'expiry_date_05' => 'nullable|max:255',
      'issued_by_05' => 'nullable|max:255',
      'received_by_05' => 'nullable|max:255',
      'name_of_drug_06' => 'nullable|max:255',
      'quantity_06' => 'nullable|max:255',
      'batch_no_06' => 'nullable|max:255',
      'expiry_date_06' => 'nullable|max:255',
      'issued_by_06' => 'nullable|max:255',
      'received_by_06' => 'nullable|max:255',
      'name_of_drug_07' => 'nullable|max:255',
      'quantity_07' => 'nullable|max:255',
      'batch_no_07' => 'nullable|max:255',
      'expiry_date_07' => 'nullable|max:255',
      'issued_by_07' => 'nullable|max:255',
      'received_by_07' => 'nullable|max:255',
      'name' => 'required|max:255',
      'date' => 'required|max:255',
      'time' => 'required|max:255',

    ]);

    $link = tap(new App\DrugRequisition($data))->save();

    return view('Index');
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
  Route::post('/labsheet', function(Request $request){
    $data = $request->validate([
        'room_no' => 'required|max:255',
        'date' => 'required|max:255',
        'date-01' => 'required|max:255',
        'date-02' => 'required|max:255',
        'date-03' => 'required|max:255',
        'date-04' => 'required|max:255',
        'date-05' => 'required|max:255',
        'date-06' => 'required|max:255',
        'date-07' => 'required|max:255',
        'name-01' => 'required|max:255',
        'name-02' => 'required|max:255',
        'name-03' => 'required|max:255',
        'name-04' => 'required|max:255',
        'name-05' => 'required|max:255',
        'name-06' => 'required|max:255',
        'name-07' => 'required|max:255',
        'investigation_01' => 'required|max:255',
        'investigation_02' => 'required|max:255',
        'investigation_03' => 'required|max:255',
        'investigation_04' => 'required|max:255',
        'investigation_05' => 'required|max:255',
        'investigation_06' => 'required|max:255',
        'investigation_07' => 'required|max:255',
        'remark_01' => 'required|max:255',
        'remark_02' => 'required|max:255',
        'remark_03' => 'required|max:255',
        'remark_04' => 'required|max:255',
        'remark_05' => 'required|max:255',
        'remark_06' => 'required|max:255',
        'remark_07' => 'required|max:255',


    ]);

    $link = tap(new App\labsheet($data))->save();

    return view('Index');
  });

  Route::get('/MARFlowSheet', function(){
      return view('MARFlowSheet');
  });

  Route::get('/NursingDutyOver', function(){
      return view('NursingDutyOver');
  });

  Route::post('/NursingDutyOver',function(Request $request){
    $data = $request->validate([
      'addressograph' => 'nullable|max:255',
      'specific_instruction' => 'nullable|max:255',
      'M_nurse_name' => 'required|max:255',
      'E_nurse_name' => 'required|max:255',
      'N_nurse_name' => 'required|max:255',
      'M_incharge_name' => 'required|max:255',
      'E_incharge_name' => 'required|max:255',
      'N_incharge_name' => 'required|max:255',
      'M_eyecare' => 'nullable|max:255',
      'E_eyecare' => 'nullable|max:255',
      'N_eyecare' => 'nullable|max:255',
      'M_mouthcare' => 'nullable|max:255',
      'E_mouthcare' => 'nullable|max:255',
      'N_mouthcare' => 'nullable|max:255',
      'M_skincare' => 'nullable|max:255',
      'E_skincare' => 'nullable|max:255',
      'N_skincare' => 'nullable|max:255',
      'M_bedding' => 'nullable|max:255',
      'E_bedding' => 'nullable|max:255',
      'N_bedding' => 'nullable|max:255',
      'M_cathetercare' => 'nullable|max:255',
      'E_cathetercare' => 'nullable|max:255',
      'N_cathetercare' => 'nullable|max:255',
      'M_physiotherapy' => 'nullable|max:255',
      'E_physiotherapy' => 'nullable|max:255',
      'N_physiotherapy' => 'nullable|max:255',
      'M_spongebath' => 'nullable|max:255',
      'E_spongebath' => 'nullable|max:255',
      'N_spongebath' => 'nullable|max:255',
      'M_other' => 'nullable|max:255',
      'E_other' => 'nullable|max:255',
      'N_other' => 'nullable|max:255',
      'M_investigations' => 'nullable|max:255',
      'E_investigations' => 'nullable|max:255',
      'N_investigations' => 'nullable|max:255',
      'M_pendingreport' => 'nullable|max:255',
      'E_pendingreport' => 'nullable|max:255',
      'N_pendingreport' => 'nullable|max:255',
      'M_replacementdrug' => 'nullable|max:255',
      'E_replacementdrug' => 'nullable|max:255',
      'N_replacementdrug' => 'nullable|max:255',
      'balance_drugs_00' => 'nullable|max:255',
      'balance_drugs_01' => 'nullable|max:255',
      'balance_drugs_02' => 'nullable|max:255',
      'balance_drugs_03' => 'nullable|max:255',
      'balance_drugs_04' => 'nullable|max:255',
      'balance_drugs_05' => 'nullable|max:255',
      'M_time_00' => 'nullable|max:255',
      'M_time_01' => 'nullable|max:255',
      'M_time_02' => 'nullable|max:255',
      'M_time_03' => 'nullable|max:255',
      'M_time_04' => 'nullable|max:255',
      'M_time_05' => 'nullable|max:255',
      'M_balance_00' => 'nullable|max:255',
      'M_balance_01' => 'nullable|max:255',
      'M_balance_02' => 'nullable|max:255',
      'M_balance_03' => 'nullable|max:255',
      'M_balance_04' => 'nullable|max:255',
      'M_balance_05' => 'nullable|max:255',
      'E_time_00' => 'nullable|max:255',
      'E_time_01' => 'nullable|max:255',
      'E_time_02' => 'nullable|max:255',
      'E_time_03' => 'nullable|max:255',
      'E_time_04' => 'nullable|max:255',
      'E_time_05' => 'nullable|max:255',
      'E_balance_00' => 'nullable|max:255',
      'E_balance_01' => 'nullable|max:255',
      'E_balance_02' => 'nullable|max:255',
      'E_balance_03' => 'nullable|max:255',
      'E_balance_04' => 'nullable|max:255',
      'E_balance_05' => 'nullable|max:255',
      'N_time_00' => 'nullable|max:255',
      'N_time_01' => 'nullable|max:255',
      'N_time_02' => 'nullable|max:255',
      'N_time_03' => 'nullable|max:255',
      'N_time_04' => 'nullable|max:255',
      'N_time_05' => 'nullable|max:255',
      'N_balance_00' => 'nullable|max:255',
      'N_balance_01' => 'nullable|max:255',
      'N_balance_02' => 'nullable|max:255',
      'N_balance_03' => 'nullable|max:255',
      'N_balance_04' => 'nullable|max:255',
      'N_balance_05' => 'nullable|max:255',
      'event_m_nurse_name' => 'nullable|max:255',
      'event_e_nurse_name' => 'nullable|max:255',
      'event_n_nurse_name' => 'nullable|max:255',
      'm_date' => 'nullable|max:255',
      'e_date' => 'nullable|max:255',
      'n_date' => 'nullable|max:255',
      'm_time' => 'nullable|max:255',
      'e_time' => 'nullable|max:255',
      'n_time' => 'nullable|max:255',
    ]);

    $link = tap(new App\NursingDutyOver($data))->save();

    return view('Index');
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

});

/*
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

*/
