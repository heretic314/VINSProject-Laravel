@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
				<h1>Nutritional Assessment Form</h1>
			</div>
			<div class="col-md-4 text-right">
				DOC NO. F/IPD/18 <br>
				REV. No. 0.2 <br>
				WEF 10-12-2016
			</div>
		</div>
	</div>
	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

	<form action="{{ url('/NutritionalAssessmentForm') }}" method="post">
		{{ csrf_field() }}


		<div class="row form-group">
			<div class="col-md-10">
				<label>Diagnosis : </label>
				<input class="form-control " type="textbox" name="diagnosis" placeholder="Diagnosis">
			</div>
			<div class="col-md-2 text-right">
				<textarea class="form-control text-right" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
			</div>
	  </div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Calorie Required : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="calorie_required" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Protein Required : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="protein_required" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Calorie Intake : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="calorie_intake" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Protein Intake : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="protein_intake" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Diet : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="diet" value="{{ old('diet') }}">
						<option value="Vegetarian">Vegetarian</option>
						<option value="Non-Vegetarian">Non-Vegetarian</option>
						<option value="Ovatarian">Ovatarian</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<h3>Assessment : </h3>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Vomiting : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="vomiting" value="{{ old('vomiting') }}">
						<option value="Absent">Absent</option>
						<option value="Present">Present</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Diarrhea : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="diarrhea" value="{{ old('diarrhea') }}">
						<option value="Absent">Absent</option>
						<option value="Present">Present</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Constipation : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="constipation" value="{{ old('constipation') }}">
						<option value="Absent">Absent</option>
						<option value="Present">Present</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Mouth Ulcer : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="mouth_ulcer" value="{{ old('mouth_ulcer') }}">
						<option value="Absent">Absent</option>
						<option value="Present">Present</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Food Intake : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="food_intake" value="{{ old('food_intake') }}">
						<option value="Adequate">Adequate</option>
						<option value="Inadequate">Inadequate</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Fluid Intake : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="fluid_intake" value="{{ old('fluid_intake') }}">
						<option value="Adequate">Adequate</option>
						<option value="Inadequate">Inadequate</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Nutritional Need : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="nutritional_need" value="{{ old('nutritional_need') }}">
						<option value="Low">Low</option>
						<option value="Medium">Medium</option>
						<option value="High">High</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Life Style : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="life_style" value="{{ old('life_style') }}">
						<option value="Sedentary">Sedentary</option>
						<option value="Moderate">Moderate</option>
						<option value="Heavy">Heavy</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Mode of feed : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="mode_of_feed" value="{{ old('mode_of_feed') }}">
						<option value="Self Feed">Self Feed</option>
						<option value="With Assisstance">With Assisstance</option>
						<option value="Tube Feed">Tube Feed</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Height : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="height" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Weight : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="weight" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>BMI : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="bmi" value="{{ old('bmi') }}">
						<option value="30">  30</option>
						<option value="24">  24</option>
						<option value="18.5-24">18.5 - 24</option>
						<option value="18.5">  18.5</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Diet Recall : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="diet_recall" value="{{ old('diet_recall') }}">
						<option value="Adequate Nutrional Intake">Adequate Nutritional Intake</option>
						<option value="Less Nutrional Intake">Less Nutritional Intake</option>
						<option value="No Nutrional Intake for >5 days">No Nutritional Intake for > 5 days</option>
						<option value="Unknown">Unknown</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Has food intake declined in the last 3-6 months : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="food_intake_decline" value="{{ old('food_intake_decline') }}">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>If yes, reason thereof : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="food_intake_decline_reason" value="{{ old('food_intake_decline_reason') }}">
						<option value="Loss of apetite">Loss of apetite</option>
						<option value="Digestive Problem">Digestive Problem</option>
						<option value="Chewing or Swallowing">Chewing or Swallowing</option>
						<option value="Any Other">Any other</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<h3>Clinical History</h3>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Blood Pressure Problem</label>
				</div>
				<div class="col-md-6">
		      <div class="form-check">
						<input class="form-check-input" type="checkbox" name="blood_pressure" />
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Diabetes Mellitus</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="diabetes" />
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Old operated patient</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="old_operated_patient" />
					</div>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Cardiac Diseases</label>
				</div>
				<div class="col-md-6">
		      <div class="form-check">
						<input class="form-check-input" type="checkbox" name="cardiac_diseases" />
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Liver Diseases</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="liver_diseases" />
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Renal Failure</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="renal_failure" />
					</div>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Cancer</label>
				</div>
				<div class="col-md-6">
		      <div class="form-check">
						<input class="form-check-input" type="checkbox" name="cancer" />
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Trauma or Burn</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="trauma_burn" />
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Gout</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="gout" />
					</div>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Any Other</label>
				</div>
				<div class="col-md-6">
		      <div class="form-check">
						<input class="form-check-input" type="checkbox" name="cancer" />
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<input class="form-control" type="text" name="any_other" placeholder="If any other" />
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Risk to patient : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="risk_type" value="{{ old('risk_type') }}">
						<option value="Low risk">Low Risk</option>
						<option value="	Medium Risk">Medium Risk</option>
						<option value="High Risk">High Risk</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Reason for risk : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="risk_reason" placeholder="In case of Medium-High risk" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		    	<label>Diet Suggested to patient : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="diet_suggested" value="{{ old('diet_suggested') }}">
						<option value="FD">FD</option>
						<option value="ADD">ADD</option>
						<option value="SRD">SRD</option>
						<option value="Semi solid Diet">Semi solid Diet</option>
						<option value="Soft Diet">Soft Diet</option>
						<option value="Liquid Diet">Liquid Diet</option>
						<option value="Peg Feed">Peg Feed</option>
						<option value="RT Feed">RT Feed</option>
						<option value="HPD Gout Diet">HPD Gout Diet</option>
						<option value="Hepatic Diet">Hepatic Diet</option>
						<option value="Without Chilly">Without Chilly</option>
						<option value="Any Other">Any Other</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Remarks : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="remarks" placeholder="Remarks"/>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Date</th>
						<th>Diet</th>
						<th>Remarks</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input class="form-control" type="date" name="date_table" /></td>
						<td><input class="form-control" type="text" name="diet_table" /></td>
						<td><input class="form-control" type="text" name="remarks_table" /></td>
						<td><input class="form-control" type="text" name="name_table" /></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div></br>
		 <button class="btn btn-success " type="submit" >Submit</button>
		</div>

	</form>

</div>
@endsection
