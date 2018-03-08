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

  Route::get('/TestFile', function(){
      return view('testfile');
  });

  Route::get('/index', function(){
      return view('Index');
  });

  Route::get('DailyDietForm','DailyDietFormController@create');
  Route::post('DailyDietForm','DailyDietFormController@store');

  Route::get('AdverseDrugReactionForm','AdverseDrugReactionFormController@create');
  Route::post('AdverseDrugReactionForm','AdverseDrugReactionFormController@store');



  Route::get('MonitoringModerateSedation','MonitoringModerateSedationController@create');
  Route::post('MonitoringModerateSedation','MonitoringModerateSedationController@store');


  Route::get('/AppointmentBook','AppointmentBookController@create');
  Route::post('/AppointmentBook','AppointmentBookController@store');

  Route::get('TransfusionReactionForm','TransfusionReactionFormController@create');
  Route::post('TransfusionReactionForm','TransfusionReactionFormController@store');

  Route::get('PatientValuableForm','PatientValuableFormController@create');
  Route::post('PatientValuableForm','PatientValuableFormController@store');


  Route::get('BloodSugarMonitoringChart','BloodSugarMonitoringChartController@create');
  Route::post('BloodSugarMonitoringChart','BloodSugarMonitoringChartController@store');

  Route::get('BriefOperativeNote', function(){
    return view('BriefOperativeNote');
  });

  Route::get('DischargeGatepass',function(){
    return view('DischargeGatepass');
  });


  Route::get('PatientAdmissionSheet','PatientAdmissionSheetController@create');
  Route::post('PatientAdmissionSheet','PatientAdmissionSheetController@store');




  Route::get('/Checklist', function(){
      return view('Checklist');
  });

  Route::get('/CodeBlueEvaluationForm', 'CodeBlueEvaluationFormController@create');
  Route::post('/CodeBlueEvaluationForm', 'CodeBlueEvaluationFormController@store');

  Route::get('/CompleteNursingAssessment','CompleteNursingAssessmentController@create');
  Route::post('/CompleteNursingAssessment', 'CompleteNursingAssessmentController@store');



  Route::get('/CounsellingForm', function(){
      return view('CounsellingForm');
  });

  Route::get('/CPRFormat', function(){
      return view('CPRFormat');
  });

  Route::post('/CPRFormat', function(Request $request){
    $data = $request->validate([
      'patient_name' => 'max:255|required',
      'ipd_no' => 'max:255|required',
      'age' => 'max:255|required',
      'sex' => 'max:255|required',
      'date' => 'max:255|required',
      'start_time' => 'max:255|required',
      'bed_no' => 'max:255|required',
      'diagnosis' => 'max:255|required',
      'name_doctor' => 'max:255|required',
      'cpr_team' => 'max:255|required',
      'intubation_time' => 'max:255|required',
      'defib_rhythm_00' => 'max:255|required',
      'defib_rhythm_01' => 'max:255|required',
      'defib_rhythm_02' => 'max:255|required',
      'defib_rhythm_03' => 'max:255|required',
      'defib_rhythm_04' => 'max:255|required',
      'defib_dc_00' => 'max:255|required',
      'defib_dc_01' => 'max:255|required',
      'defib_dc_02' => 'max:255|required',
      'defib_dc_03' => 'max:255|required',
      'defib_dc_04' => 'max:255|required',
      'medication_time_00' => 'max:255',
      'medication_name_01' => 'max255',
      'medication_time_10' => 'max:255',
      'medication_name_11' => 'max:255',
      'medication_time_20' => 'max:255',
      'medication_name_21' => 'max:255',
      'medication_time_30' => 'max:255',
      'medication_name_31' => 'max:255',
      'medication_time_40' => 'max:255',
      'medication_name_41' => 'max:255',
      'total_time' => 'max:255|required',
      'outcome' => 'max:255|required',
      'doctor_name' => 'max:255|required',
      'remarks' => 'max:255|required',
      'consultant_counseled' => 'max:255|required',
      'relative_name' => 'max:255|required',
      '00_01' => 'max:255|required',
      '00_02' => 'max:255|required',
      '00_03' => 'max:255|required',
      '00_04' => 'max:255|required',
      '00_05' => 'max:255|required',
      '00_06' => 'max:255|required',
      '00_07' => 'max:255|required',
      '00_08' => 'max:255|required',
      '01_01' => 'max:255|required',
      '01_02' => 'max:255|required',
      '01_03' => 'max:255|required',
      '01_04' => 'max:255|required',
      '01_05' => 'max:255|required',
      '01_06' => 'max:255|required',
      '01_07' => 'max:255|required',
      '01_08' => 'max:255|required',
      '02_01' => 'max:255|required',
      '02_02' => 'max:255|required',
      '02_03' => 'max:255|required',
      '02_04' => 'max:255|required',
      '02_05' => 'max:255|required',
      '02_06' => 'max:255|required',
      '02_07' => 'max:255|required',
      '02_08' => 'max:255|required',
      '03_01' => 'max:255|required',
      '03_02' => 'max:255|required',
      '03_03' => 'max:255|required',
      '03_04' => 'max:255|required',
      '03_05' => 'max:255|required',
      '03_06' => 'max:255|required',
      '03_07' => 'max:255|required',
      '03_08' => 'max:255|required',
      '04_01' => 'max:255|required',
      '04_02' => 'max:255|required',
      '04_03' => 'max:255|required',
      '04_04' => 'max:255|required',
      '04_05' => 'max:255|required',
      '04_06' => 'max:255|required',
      '04_07' => 'max:255|required',
      '04_08' => 'max:255|required',
      '05_01' => 'max:255|required',
      '05_02' => 'max:255|required',
      '05_03' => 'max:255|required',
      '05_04' => 'max:255|required',
      '05_05' => 'max:255|required',
      '05_06' => 'max:255|required',
      '05_07' => 'max:255|required',
      '05_08' => 'max:255|required',
      '06_01' => 'max:255|required',
      '06_02' => 'max:255|required',
      '06_03' => 'max:255|required',
      '06_04' => 'max:255|required',
      '06_05' => 'max:255|required',
      '06_06' => 'max:255|required',
      '06_07' => 'max:255|required',
      '06_08' => 'max:255|required',
      'initial_time '=> 'max:255|required',

    ]);

    $link = tap(new App\CPRFormat($data))->save();

    return view('Index');
  });


  Route::get('/CultureBiopsyForm', 'CultureBiopsyFormController@create');
  Route::post('/CultureBiopsyForm', 'CultureBiopsyFormController@store');


  Route::get('/DischarheGatepass', function(){
      return view('DischargeGatepass');
  });
  Route::post('/CultureBiopsyForm',function(Request $request){
    $data = $request->validate([

      'date'=> 'required|max:255',
      'time'=> 'required|max:255',
      'doctors_name'=> 'required|max:255',
      'given_by'=> 'required|max:255',
      'received_by'=> 'required|max:255',
      'ihc'=> 'required|max:255',
      'cytology'=> 'max:255',
      'others'=> 'required|max:255',
      'histopathology'=>'max:255',
      'cytology_01'=> 'max:255',
      'type_of_biopsy'=> 'max:255',
      'specimen_info'=> 'required|max:255',
      'imaging_details'=> 'required|max:255',
      'clinical_details'=> 'required|max:255',
      'send_to'=> 'max:255',
      'consultant_sign'=> 'required|max:255',
      'consultant_name'=> 'required|max:255',
      'date_for_sign'=> 'required|max:255',
      'time_for_sign'=> 'required|max:255',

    ]);

    $link = tap(new App\CultureBiopsyForm($data))->save();

    return view('Index');
  });


  Route::get('/DischarheGatepass', function(){
      return view('DischargeGatepass');
  });

  Route::get('/DoctorsDailyNotes', 'DoctorsDailyNotesController@create');
  Route::post('/DoctorsDailyNotes','DoctorsDailyNotesController@store');

  Route::get('/DrugRequisition', 'DrugRequisitionController@create');
  Route::post('/DrugRequisition', 'DrugRequisitionController@store');

  Route::get('/ERObservation', 'ERObservationController@create');
  Route::post('/ERObservation', 'ERObservationController@store');

  Route::get('/Gatepass', function(){
      return view('Gatepass');
  });

  Route::get('/Glassgow', function(){
      return view('Glassgow');
  });

  Route::post('/GlassGow',function(Request $request){
    $data = $request->validate([

      'date1' => 'required|max:255',
      'r1c1' => 'required|max:255',
      'r1c2' => 'required|max:255',
      'r1c3' => 'required|max:255',
      'r1c4' => 'required|max:255',
      'r1c5' => 'required|max:255',
      'r1c6' => 'required|max:255',
      'r1c7' => 'required|max:255',
      'r1c8' => 'required|max:255',
      'r1c9' => 'required|max:255',
      'r1c10' => 'required|max:255',
      'r1c11' => 'required|max:255',
      'r1c12' => 'required|max:255',

      'r2c1' => 'required|max:255',
      'r2c2' => 'required|max:255',
      'r2c3' => 'required|max:255',
      'r2c4' => 'required|max:255',
      'r2c5' => 'required|max:255',
      'r2c6' => 'required|max:255',
      'r2c7' => 'required|max:255',
      'r2c8' => 'required|max:255',
      'r2c9' => 'required|max:255',
      'r2c10' => 'required|max:255',
      'r2c11' => 'required|max:255',
      'r2c12' => 'required|max:255',

      'r3c1' => 'required|max:255',
      'r3c2' => 'required|max:255',
      'r3c3' => 'required|max:255',
      'r3c4' => 'required|max:255',
      'r3c5' => 'required|max:255',
      'r3c6' => 'required|max:255',
      'r3c7' => 'required|max:255',
      'r3c8' => 'required|max:255',
      'r3c9' => 'required|max:255',
      'r3c10' => 'required|max:255',
      'r3c11' => 'required|max:255',
      'r3c12' => 'required|max:255',

      'r4c1' => 'required|max:255',
      'r4c2' => 'required|max:255',
      'r4c3' => 'required|max:255',
      'r4c4' => 'required|max:255',
      'r4c5' => 'required|max:255',
      'r4c6' => 'required|max:255',
      'r4c7' => 'required|max:255',
      'r4c8' => 'required|max:255',
      'r4c9' => 'required|max:255',
      'r4c10' => 'required|max:255',
      'r4c11' => 'required|max:255',
      'r4c12' => 'required|max:255',

      'r5c1' => 'required|max:255',
      'r5c2' => 'required|max:255',
      'r5c3' => 'required|max:255',
      'r5c4' => 'required|max:255',
      'r5c5' => 'required|max:255',
      'r5c6' => 'required|max:255',
      'r5c7' => 'required|max:255',
      'r5c8' => 'required|max:255',
      'r5c9' => 'required|max:255',
      'r5c10' => 'required|max:255',
      'r5c11' => 'required|max:255',
      'r5c12' => 'required|max:255',

      'r6c1' => 'required|max:255',
      'r6c2' => 'required|max:255',
      'r6c3' => 'required|max:255',
      'r6c4' => 'required|max:255',
      'r6c5' => 'required|max:255',
      'r6c6' => 'required|max:255',
      'r6c7' => 'required|max:255',
      'r6c8' => 'required|max:255',
      'r6c9' => 'required|max:255',
      'r6c10' => 'required|max:255',
      'r6c11' => 'required|max:255',
      'r6c12' => 'required|max:255',

    ]);

    $link = tap(new App\GlassGow($data))->save();

    return view('Index');
  });

  Route::get('/HistoryForm', 'HistoryFormController@create');
  Route::post('/HistoryForm', 'HistoryFormController@store');

  Route::get('/InformationForm', function(){
      return view('InformationForm');
  });

  Route::get('/InvestigationSheet', function(){
      return view('InvestigationSheet');
  });

  Route::get('/InvestigationSheet2', function(){
      return view('InvestigationSheet2');
  });

  Route::get('/InfusionTherapyChart', 'InfusionTherapyChartController@create');
  Route::post('/InfusionTherapyChart', 'InfusionTherapyChartController@store');


  Route::get('/LabSheet','LabSheetController@create');
  Route::post('/LabSheet','LabSheetController@store');

  Route::get('/MARFlowSheet', function(){
      return view('MARFlowSheet');
  });

  Route::get('/NursingDutyOver', function(){
      return view('NursingDutyOver');
  });

  Route::post('/NursingDutyOver',function(Request $request){
    $data = $request->validate([
      'addressograph' => 'max:255',
      'specific_instruction' => 'max:255',
      'M_nurse_name' => 'required|max:255',
      'E_nurse_name' => 'required|max:255',
      'N_nurse_name' => 'required|max:255',
      'M_incharge_name' => 'required|max:255',
      'E_incharge_name' => 'required|max:255',
      'N_incharge_name' => 'required|max:255',
      'M_eyecare' => 'max:255',
      'E_eyecare' => 'max:255',
      'N_eyecare' => 'max:255',
      'M_mouthcare' => 'max:255',
      'E_mouthcare' => 'max:255',
      'N_mouthcare' => 'max:255',
      'M_skincare' => 'max:255',
      'E_skincare' => 'max:255',
      'N_skincare' => 'max:255',
      'M_bedding' => 'max:255',
      'E_bedding' => 'max:255',
      'N_bedding' => 'max:255',
      'M_cathetercare' => 'max:255',
      'E_cathetercare' => 'max:255',
      'N_cathetercare' => 'max:255',
      'M_physiotherapy' => 'max:255',
      'E_physiotherapy' => 'max:255',
      'N_physiotherapy' => 'max:255',
      'M_spongebath' => 'max:255',
      'E_spongebath' => 'max:255',
      'N_spongebath' => 'max:255',
      'M_other' => 'max:255',
      'E_other' => 'max:255',
      'N_other' => 'max:255',
      'M_investigations' => 'max:255',
      'E_investigations' => 'max:255',
      'N_investigations' => 'max:255',
      'M_pendingreport' => 'max:255',
      'E_pendingreport' => 'max:255',
      'N_pendingreport' => 'max:255',
      'M_replacementdrug' => 'max:255',
      'E_replacementdrug' => 'max:255',
      'N_replacementdrug' => 'max:255',
      'balance_drugs_00' => 'max:255',
      'balance_drugs_01' => 'max:255',
      'balance_drugs_02' => 'max:255',
      'balance_drugs_03' => 'max:255',
      'balance_drugs_04' => 'max:255',
      'balance_drugs_05' => 'max:255',
      'M_time_00' => 'max:255',
      'M_time_01' => 'max:255',
      'M_time_02' => 'max:255',
      'M_time_03' => 'max:255',
      'M_time_04' => 'max:255',
      'M_time_05' => 'max:255',
      'M_balance_00' => 'max:255',
      'M_balance_01' => 'max:255',
      'M_balance_02' => 'max:255',
      'M_balance_03' => 'max:255',
      'M_balance_04' => 'max:255',
      'M_balance_05' => 'max:255',
      'E_time_00' => 'max:255',
      'E_time_01' => 'max:255',
      'E_time_02' => 'max:255',
      'E_time_03' => 'max:255',
      'E_time_04' => 'max:255',
      'E_time_05' => 'max:255',
      'E_balance_00' => 'max:255',
      'E_balance_01' => 'max:255',
      'E_balance_02' => 'max:255',
      'E_balance_03' => 'max:255',
      'E_balance_04' => 'max:255',
      'E_balance_05' => 'max:255',
      'N_time_00' => 'max:255',
      'N_time_01' => 'max:255',
      'N_time_02' => 'max:255',
      'N_time_03' => 'max:255',
      'N_time_04' => 'max:255',
      'N_time_05' => 'max:255',
      'N_balance_00' => 'max:255',
      'N_balance_01' => 'max:255',
      'N_balance_02' => 'max:255',
      'N_balance_03' => 'max:255',
      'N_balance_04' => 'max:255',
      'N_balance_05' => 'max:255',
      'event_m_nurse_name' => 'max:255',
      'event_e_nurse_name' => 'max:255',
      'event_n_nurse_name' => 'max:255',
      'm_date' => 'max:255',
      'e_date' => 'max:255',
      'n_date' => 'max:255',
      'm_time' => 'max:255',
      'e_time' => 'max:255',
      'n_time' => 'max:255',
    ]);

    $link = tap(new App\NursingDutyOver($data))->save();

    return view('/index');
  });

  Route::get('/NutritionalAssessmentForm', function(){
      return view('NutritionalAssessmentForm');
  });

  Route::post('/NutritionalAssessmentForm', function(Request $request){
    $data = $request->validate([
      'diagnosis' => 'max:255|required',
      'calorie_required' => 'max:255|required',
      'protein_required' => 'max:255|required',
      'calorie_intake' => 'max:255|required',
      'protein_intake' => 'max:255|required',
      'diet' => 'max:255|required',
      'vomiting' => 'max:255|required',
      'diarrhea' => 'max:255|required',
      'constipation' => 'max:255|required',
      'mouth_ulcer' => 'max:255|required',
      'food_intake' => 'max:255|required',
      'fluid_intake' => 'max:255|required',
      'nutritional_need' => 'max:255|required',
      'life_style' => 'max:255|required',
      'mode_of_feed' => 'max:255|required',
      'height' => 'max:255|required',
      'weight' => 'max:255|required',
      'bmi' => 'max:255|required',
      'diet_recall' => 'max:255|required',
      'food_intake_decline' => 'max:255|required',
      'food_intake_decline_reason' => 'max:255|required',
      'blood_pressure' => 'max:255',
      'diabetes' => 'max:255',
      'old_operated_patient' => 'max:255',
      'cardiac_diseases' => 'max:255',
      'liver_diseases' => 'max:255',
      'renal_failure' => 'max:255',
      'cancer' => 'max:255',
      'trauma_burn' => 'max:255',
      'gout' => 'max:255',
      'any_other' => 'max:255',
      'risk_type' => 'max:255',
      'risk_reason' => 'max:255',
      'diet_suggested' => 'max:255',
      'remarks' => 'max:255',
      'date_table' => 'max:255|required',
      'diet_table' => 'max:255|required',
      'remarks_table' => 'max:255|required',
      'name_table' => 'max:255|required',

    ]);

    $link = tap(new App\NutritionalAssessmentForm($data))->save();

    return view('Index');
  });

  Route::get('/OperativeDetailSheet', 'OperativeDetailSheetController@create');
  Route::post('/OperativeDetailSheet', 'OperativeDetailSheetController@store');


  Route::get('/PatientDietRecord', 'PatientDietRecordController@create');
  Route::post('/PatientDietRecord', 'PatientDietRecordController@store');


  Route::get('/PatientsDetailForm', 'PatientsDetailFormController@create');
  Route::post('/PatientsDetailForm', 'PatientsDetailFormController@store');


  Route::get('/PeripheralLineBundleChecklist', function(){
      return view('PeripheralLineBundleChecklist');
  });

  Route::get('/PlanOfCare', function(){
      return view('PlanOfCare');
  });

  Route::post('/PlanOfCare', function(Request $request){
    $data = $request->validate([
      'diagnosis' => 'max:255|required',
      'needs_goals' => 'max:255|required',
      'treatment_plan' => 'max:255|required',
      'preventive_aspects' => 'max:255|required',
      'progress_00' => 'max:255',
      'date_00' => 'max:255',
      'progress_01' => 'max:255',
      'date_01' => 'max:255',
      'progress_02' => 'max:255',
      'date_02' => 'max:255',
      'progress_03' => 'max:255',
      'date_03' => 'max:255',
      'progress_04' => 'max:255',
      'date_04' => 'max:255',
      'progress_05' => 'max:255',
      'date_05' => 'max:255',
      'progress_06' => 'max:255',
      'date_06' => 'max:255',
      'progress_07' => 'max:255',
      'date_07' => 'max:255',
      'note_discharge' => 'max:255|required',
    ]);

    $link = tap(new App\PlanOfCare($data))->save();

    return view('Index');
  });

  Route::get('/PostAnaesthesiaEvaluation', function(){
    return view('PostAnaesthesiaEvaluation');
  });

  Route::get('/PreAnaesthesiaCheckupForm', function(){
    return view('PreAnaesthesiaCheckupForm');
  });

  Route::get('/RadiologyRequisition', 'RadiologyRequisitionController@create');
  Route::post('/RadiologyRequisition', 'RadiologyRequisitionController@store');


  Route::get('/PreAngiographyAngioplastyChecklist', function(){
      return view('PreAngiographyAngioplastyChecklist');
  });
  Route::post('/PreAngiographyAngioplastyChecklist', function(Request $request){
    $data = $request->validate([

      'time_arrival'=> 'max:255|required',
      'time_prep_complete'=> 'max:255|required',
      'time_shifting'=> 'max:255|required',
      'consultant_name'=> 'max:255|required',
      'angiography_consent'=> 'max:255|required',
      'angioplasty_consent'=> 'max:255|required',
      'pacemaker'=> 'max:255|required',
      'allergies'=> 'max:255|required',
      'allergies_list'=> 'max:255',
      'pulse'=> 'max:255|required',
      'bp'=> 'max:255|required',
      'resp'=> 'max:255|required',
      'temp'=> 'max:255|required',
      'part_prep'=> 'max:255|required',
      'pre_med'=> 'max:255|required',
      'ecosprin'=> 'max:255|required',
      'clopidogrel'=> 'max:255|required',
      'blood_arranged'=> 'max:255|required',
      'ivcannula_puton'=> 'max:255|required',
      'height'=> 'max:255|required',
      'weight'=> 'max:255|required',
      'id_band'=> 'max:255|required',
      'jewellery_removed'=> 'max:255|required',
      'dentures'=> 'max:255|required',
      'cbc'=> 'max:255|required',
      'blood_urea'=> 'max:255|required',
      'blood_group'=> 'max:255|required',
      'hbsag'=> 'max:255|required',
      'serum_creatinine'=> 'max:255|required',
      'hep_c'=> 'max:255|required',
      'random_blood_sugar'=> 'max:255|required',
      'hiv'=> 'max:255|required',
      'pt'=> 'max:255|required',
      'chest_xray'=> 'max:255|required',
      'serum_electrolytes'=> 'max:255|required',
      'ecg'=> 'max:255|required',
      'lft' =>'max:255|required'

    ]);

    $link = tap(new App\PreAngiographyAngioplastyChecklist($data))->save();

    return view('Index');
  });


  Route::get('/TransferChecklistForNurses', 'TransferChecklistForNusrsesController@create');
  Route::post('/TransferChecklistForNurses', 'TransferChecklistForNusrsesController@store');


  Route::get('/VentilatorChargeSheet', 'VentilatorChargeSheetController@create');
  Route::post('/VentilatorChargeSheet', 'VentilatorChargeSheetController@store');


  Route::get('/WardProcedureRecord', function(){
      return view('WardProcedureRecord');
  });

  Route::post('/WardProcedureRecord',function(Request $request){
    $data = $request->validate([
      'time' => 'required|max:255',
      'multipara_monitoring_less6' => 'required|max:255',
      'multipara_monitoring_more6' => 'required|max:255',
      'oxygen_upto12' => 'required|max:255',
      'oxygen_more12' => 'required|max:255',
      'pulse_intermittent' => 'required|max:255',
      'pulse_continuous' => 'required|max:255',
      'ventilator_bipap' => 'required|max:255',
      'nebulization' => 'required|max:255',
      'blood_transfusion' => 'required|max:255',
      'rbs' => 'required|max:255',
      'ecg' => 'required|max:255',
      'bed_charges' => 'required|max:255',
      'traction' => 'required|max:255',
      'dressing' => 'required|max:255',
      'spcl_dressing' => 'required|max:255',
      'tube_insertion' => 'required|max:255',
      'catheterisation' => 'required|max:255',
      'suture_removal' => 'required|max:255',
      'clw_suturing' => 'required|max:255',
      'diet_consultation' => 'required|max:255',
      'enema' => 'required|max:255',
      'syringe_pump' => 'required|max:255',
      'echo' => 'required|max:255',
      'urine_sugar' => 'required|max:255',
      'peripheral_line' => 'required|max:255',
      'central_line' => 'required|max:255',
      'lumbar_puncture' => 'required|max:255',
      'csf_manometry' => 'required|max:255',
      'intubation' => 'required|max:255',
      'code_blue' => 'required|max:255',
      'resuscitation' => 'required|max:255',
      'ambulance_charges' => 'required|max:255',
      'escort_ventilator' => 'required|max:255',
      'escort_without' => 'required|max:255',
      'mlc_inside_city' => 'required|max:255',
      'mlc_outside_city' => 'required|max:255',
      'defibrillator_charges' => 'required|max:255',
      'physiotherapy' => 'required|max:255',

    ]);

    $link = tap(new App\WardProcedureRecord($data))->save();

    return view('Index');
  });

  Route::get('/ProvisionalDischargeSummary', 'ProvisionalDischargeSummaryController@create');
  Route::post('/ProvisionalDischargeSummary', 'ProvisionalDischargeSummaryController@store');

  Route::get('/DoctorsInitialAssessment', 'DoctorsInitialAssessmentController@create');

  Route::post('/DoctorsInitialAssessment', 'DoctorsInitialAssessmentController@store');

  //
  //

  Route::get('/BloodTransfusionForm', 'BloodTransfusionFormController@create');

  Route::post('/BloodTransfusionForm','BloodTransfusionFormController@store');

  //Route::resource('DoctorsHandover', 'DoctorsHandoverController');

  Route::get('DoctorsHandover','DoctorsHandoverController@create');

  Route::post('DoctorsHandover','DoctorsHandoverController@store');


  Route::get('/NurseProgressNotes', function(){
      return view('NurseProgressNotes');
  });
  Route::post('/NurseProgressNotes', function(Request $request){
    $data = $request->validate([
      'date_00' => 'max:255',
      'time_00' => 'max:255',
      'progress_00' => 'max:255',
      'staff_name_00' => 'max:255',
      'sign_00' => 'max:255',
      'date_01' => 'max:255',
      'time_01' => 'max:255',
      'progress_01' => 'max:255',
      'staff_name_01' => 'max:255',
      'sign_01' => 'max:255',
      'date_02' => 'max:255',
      'time_02' => 'max:255',
      'progress_02' => 'max:255',
      'staff_name_02' => 'max:255',
      'sign_02' => 'max:255',
      'date_03' => 'max:255',
      'time_03' => 'max:255',
      'progress_03' => 'max:255',
      'staff_name_03' => 'max:255',
      'sign_03' => 'max:255',
      'date_04' => 'max:255',
      'time_04' => 'max:255',
      'progress_04' => 'max:255',
      'staff_name_04' => 'max:255',
      'sign_04' => 'max:255',
      'date_05' => 'max:255',
      'time_05' => 'max:255',
      'progress_05' => 'max:255',
      'staff_name_05' => 'max:255',
      'sign_05' => 'max:255',
      'date_06' => 'max:255',
      'time_06' => 'max:255',
      'progress_06' => 'max:255',
      'staff_name_06' => 'max:255',
      'sign_06' => 'max:255',
      'date_07' => 'max:255',
      'time_07' => 'max:255',
      'progress_07' => 'max:255',
      'staff_name_07' => 'max:255',
      'sign_07' => 'max:255',
      'date_08' => 'max:255',
      'time_08' => 'max:255',
      'progress_08' => 'max:255',
      'staff_name_08' => 'max:255',
      'sign_08' => 'max:255',
      'date_09' => 'max:255',
      'time_09' => 'max:255',
      'progress_09' => 'max:255',
      'staff_name_09' => 'max:255',
      'sign_09' => 'max:255',
      'date_10' => 'max:255',
      'time_10' => 'max:255',
      'progress_10' => 'max:255',
      'staff_name_10' => 'max:255',
      'sign_10' => 'max:255',

    ]);
    $link3 = tap(new App\NurseProgressNotes($data))->save();

    return view('Index');
  });

});

Route::get('/PhysiotherapyAssessment', function(){
    return view('PhysiotherapyAssessment');
});

Route::get('/PreOTChecklist', function(){
    return view('PreOTChecklist');
});
/*
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

*/
