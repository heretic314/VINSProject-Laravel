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

Route::get('/BloodTransfusionForm', function(){
    return view('BloodTransfusionForm');
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
Route::get('/DoctorsHandover', function(){
    return view('DoctorsHandover');
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


/*
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

*/
