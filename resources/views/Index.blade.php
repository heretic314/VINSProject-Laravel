@extends('layouts.app')

@section('content')
<style>
		.btn {
		white-space: normal;
		}
</style>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h1>List Of Forms</h1>
			</div>
		</div>
	</div>

  <div class="row form-group">
  	<div class="col-md-6">
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/AppointmentBook') }}">Appointment Book</a>
  		</div>
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/BloodTransfusionForm') }}">Blood Transfusion Form</a>
  		</div>
  	</div>
  	<div class="col-md-6">
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/Checklist') }}">Checklist</a>
  		</div>
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CodeBlueEvaluationForm') }}">Code Blue Evaluation Form</a>
  		</div>
  	</div>
  </div>

  <div class="row form-group">
  	<div class="col-md-6">
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CompleteNursingAssessment') }}">Complete Nursing Assessment</a>
  		</div>
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CounsellingForm') }}">Counselling Form</a>
  		</div>
  	</div>
  	<div class="col-md-6">
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CPRFormat') }}">CPR Format</a>
  		</div>
  		<div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CultureBiopsyForm') }}">Culture Biopsy Form</a>
  		</div>
  	</div>
  </div>
  <div class="row form-group">
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DailyDietForm') }}">Daily Diet Form</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsDailyNotes') }}">Doctor's Daily Notes</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsHandover') }}">Doctors Handover</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/WardProcedureRecord') }}">Ward Procedure Record</a>
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DrugRequisition') }}">Drug Requisition Form</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/Glassgow') }}">Glassgow Form</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/LabSheet') }}">Lab Sheet</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/MARFlowSheet') }}">MAR Flow Sheet</a>
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/NursingDutyOver') }}">Nursing Duty Over</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/NutritionalAssessmentForm') }}">Nutritional Assessment Form</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PatientsDetailForm') }}">Patients Details Form</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PatientDietRecord') }}">Patient Diet Record Sheet</a>
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PeripheralLineBundleChecklist') }}">Peripheral Line Bundle Checklist</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PreAngiographyAngioplastyChecklist') }}">Pre-Angiography Angioplasty Checklist</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/RadiologyRequisition') }}">Radiology Requisition Form</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/TransferChecklistForNurses') }}">Transfer Checklist For Nurses</a>
      </div>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/VentilatorChargeSheet') }}">Ventilator Charge Sheet</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsInitialAssessment') }}">Doctors Initial Assessment</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/ERObservation') }}">ER Observation</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/#') }}">#</a>
      </div>
    </div>
  </div>
</div>
@endsection
