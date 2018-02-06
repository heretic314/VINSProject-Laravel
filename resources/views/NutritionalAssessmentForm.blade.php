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
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Diagnosis : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control " type="textbox" name="diagnosis" placeholder="Diagnosis" value="{{ old('diagnosis') }}">
					@if($errors->has('diagnosis'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
					@endif
				</div>
			</div>
	  </div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Calorie Required : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="calorie_required" value="{{ old('calorie_required') }}"/>
					@if($errors->has('calorie_required'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('calorie_required') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Protein Required : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="protein_required" value="{{ old('protein_required') }}"/>
					@if($errors->has('protein_required'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('protein_required') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Calorie Intake : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="calorie_intake" value="{{ old('calorie_intake') }}"/>
					@if($errors->has('calorie_intake'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('calorie_intake') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Protein Intake : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="protein_intake" value="{{ old('protein_intake') }}"/>
					@if($errors->has('protein_intake'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('protein_intake') }}</div></span>
					@endif
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
					<input class="form-control" type="text" name="height" value="{{ old('height') }}"/>
					@if($errors->has('height'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('height') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Weight : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="weight" value="{{ old('weight') }}"/>
					@if($errors->has('weight'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('weight') }}</div></span>
					@endif
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
						<input class="form-check-input" type="checkbox" name="blood_pressure" value="{{ old('blood_pressure') }}"/>
						@if($errors->has('blood_pressure'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('blood_pressure') }}</div></span>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Diabetes Mellitus</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="diabetes" value="{{ old('diabetes') }}"/>
						@if($errors->has('diabetes'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('diabetes') }}</div></span>
						@endif
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Old operated patient</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="old_operated_patient" value="{{ old('old_operated_patient') }}"/>
						@if($errors->has('old_operated_patient'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('old_operated_patient') }}</div></span>
						@endif
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
						<input class="form-check-input" type="checkbox" name="cardiac_diseases" value="{{ old('cardiac_diseases') }}"/>
						@if($errors->has('cardiac_diseases'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('cardiac_diseases') }}</div></span>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Liver Diseases</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="liver_diseases" value="{{ old('liver_diseases') }}"/>
						@if($errors->has('liver_diseases'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('liver_diseases') }}</div></span>
						@endif
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Renal Failure</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="renal_failure" value="{{ old('renal_failure') }}"/>
						@if($errors->has('renal_failure'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('renal_failure') }}</div></span>
						@endif
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
						<input class="form-check-input" type="checkbox" name="cancer" value="{{ old('cancer') }}"/>
						@if($errors->has('cancer'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('cancer') }}</div></span>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
		      <label>Trauma or Burn</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="trauma_burn" value="{{ old('trauma_burn') }}"/>
						@if($errors->has('trauma_burn'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('trauma_burn') }}</div></span>
						@endif
					</div>
				</div>
			</div>
		  <div class="col-md-4">
				<div class="col-md-6">
		      <label>Gout</label>
				</div>
				<div class="col-md-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="gout" value="{{ old('gout') }}"/>
						@if($errors->has('gout'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('gout') }}</div></span>
						@endif
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
						<input class="form-check-input" type="checkbox" name="cancer" value="{{ old('cancer') }}"/>
						@if($errors->has('cancer'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('cancer') }}</div></span>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<input class="form-control" type="text" name="any_other" placeholder="If any other" value="{{ old('any_other') }}"/>
				@if($errors->has('any_other'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('any_other') }}</div></span>
				@endif
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
		      <input class="form-control" type="text" name="risk_reason" placeholder="In case of Medium-High risk" value="{{ old('risk_reason') }}"/>
					@if($errors->has('risk_reason'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('risk_reason') }}</div></span>
					@endif
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
					<input class="form-control" type="text" name="remarks" placeholder="Remarks" value="{{ old('remarks') }}"/>
					@if($errors->has('remarks'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('remarks') }}</div></span>
					@endif
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
						<td><input class="form-control" type="date" name="date_table" value="{{ old('date_table') }}"/>
							@if($errors->has('date_table'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_table') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="diet_table" value="{{ old('diet_table') }}"/>
							@if($errors->has('diet_table'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('diet_table') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="remarks_table" value="{{ old('remarks_table') }}"/>
							@if($errors->has('remarks_table'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('remarks_table') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="name_table" value="{{ old('name_table') }}"/>
							@if($errors->has('name_table'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_table') }}</div></span>
							@endif
						</td>
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
