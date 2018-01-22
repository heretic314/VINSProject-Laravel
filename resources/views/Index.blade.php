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

	<div class="row">
		<h3>Emergency Patient</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsInitialAssessment') }}">Doctors Initial Assessment</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/ERObservation') }}">ER Observation</a>
		</div>
		<div class="col-md-4 top-buffer">

		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Pre-Admission Forms</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PatientsDetailForm') }}">Patients Details Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Information Form~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Patient Valuables Form~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#"> ~~~Admission Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~+ Medical Reconciliation Form~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<!--   -->
		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Within 24 Hours</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CounsellingForm') }}">Counselling Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CompleteNursingAssessment') }}">Complete Nursing Assessment</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/NutritionalAssessmentForm') }}">Nutritional Assessment Form</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsDailyNotes') }}">Doctor's Daily Notes</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~planofcare~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~historyform~~~ </a>
		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Operation / Surgery</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/LabSheet') }}">Lab Sheet</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/BloodTransfusionForm') }}">Blood Transfusion Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CPRFormat') }}">CPR Format</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CodeBlueEvaluationForm') }}">Code Blue Evaluation Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/VentilatorChargeSheet') }}">Ventilator Charge Sheet</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Investigation Sheet~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Investigation Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~HIV Detail Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Brief Operative Note~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Surgical Safety Checklist~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Pre-Anesthesia Form~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Pre-OT Checklist~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Operative Detail Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Post Anesthesia Evaluation~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Intra Operative Event & Management~~~ </a>
		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Daily Ward / General Forms</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/MARFlowSheet') }}">MAR Flow Sheet</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/InfusionTherapyChart') }}">Infusion Therapy Chart</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DailyDietForm') }}">Daily Diet Form</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/DoctorsDailyNotes') }}">Doctor's Daily Notes</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/TransferChecklistForNurses') }}">Transfer Checklist For Nurses</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/WardProcedureRecord') }}">Ward Procedure Record</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/NursingDutyOver') }}">Nursing Duty Over</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/Glassgow') }}">Glassgow Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/VentilatorChargeSheet') }}">Ventilator Charge Sheet</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/BloodTransfusionForm') }}">Blood Transfusion Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Daily Billing Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Visiting Charge Sheet~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Referral Forms~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Adverse Drug Reaction~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Blood-Sugar Monitoring Chart~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~+ Restraint Administration~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Monitoring for Moderate Sedation~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Poor Prognosis Sheet~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Physiotherapy Charge Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Transfusion Reaction~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">

		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Discharge</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" >~~~Transfer Checklist~~~</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Physiotherapy Reassessment~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Discharge/Death Summary~~~ </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Death Certificate~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Discharge Sheet~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">

		</div>
	</div>

	<hr />

	<div class="row">
		<h3>Other / Unassigned</h3>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/CultureBiopsyForm') }}">Culture Biopsy Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/RadiologyRequisition') }}">Radiology Requisition Form</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PeripheralLineBundleChecklist') }}">Peripheral Line Bundle Checklist</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/AppointmentBook') }}">Appointment Book</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/Checklist') }}">Checklist</a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="{{ url('/PreAngiographyAngioplastyChecklist') }}">Pre-Angiography Angioplasty Checklist</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Folley's Cathether Checklist~~~ </a>
		</div>
		<div class="col-md-4 top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~Central Line Audit Checklist~~~ </a>
		</div>
		<div class="col-md-4 top-buffer top-buffer">
			<a class="btn btn-default btn-block text-center" style="white-space: normal;" href="#" > ~~~WAP Audit Checklist~~~ </a>
		</div>
	</div>

	<hr />




</div>
@endsection
