@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Complete Nursing Assessment</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/IPD/22 <br>
						REV. No. 0.1 <br>
						WEF 05-01-2015
					</div>
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/CompleteNursingAssessment') }}" method="post" >
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="unit">Unit:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="unit" value="{{ old('unit') }}">
						@if($errors->has('unit'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('unit') }}</div></span>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="date">Date:</label>
					</div>
					<div class="col-md-6">
						<input type="date" class="form-control" name="date" value="{{ old('date') }}">
						@if($errors->has('date'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="time">Time:</label>
					</div>
					<div class="col-md-6">
						<input type="time" class="form-control" name="time" value="{{ old('time') }}">
						@if($errors->has('time'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-6" for="idbandno">ID Band No.:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="idbandno" id="idbandno" value="{{ old('idbandno') }}" />
						@if($errors->has('idbandno'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('idbandno') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6" >
					<div class="col-md-6">
						<label class="control-label col-md-6" for="call_bell">Call Bell in Reach:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="call_bell" value="{{ old('call_bell') }}" />
						@if($errors->has('call_bell'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('call_bell') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-4">
						<label class="control-label col-md-3" for="height">Height:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="height" id="height" placeholder="Height(in cms)" value="{{ old('height') }}">
							@if($errors->has('height'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('height') }}</div></span>
							@endif
						</div>
						<br><br>
						<label class="control-label col-md-3" for="weight">Weight:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="weight" id="weight" placeholder="Weight(in KGs)" value="{{ old('weight') }}">
							@if($errors->has('weight'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('weight') }}</div></span>
							@endif
						</div>
				</div>
			</div>

		<hr>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Allergies:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="allergies" >
							<option value="no" {{ old('allergies')=='no'?"selected":"" }}>NO</option>
							<option value="yes" {{ old('allergies')=='yes'?"selected":"" }}>YES</option>
							<option value="other" {{ old('allergies')=='other'?"selected":"" }}>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="allergies_other" id="allergies_other" class="form-control" value="{{ old('allergies_other') }}">
						@if($errors->has('allergies_other'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('allergies_other') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>History Informant:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="history_informant" >
							<option value="patient" {{ old('history_informant')=='patient'?"selected":"" }}>Patient</option>
							<option value="other" {{ old('history_informant')=='other'?"selected":"" }}>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="history_informant_other" id="history_informant_other" class="form-control">
						@if($errors->has('history_informant_other'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('history_informant_other') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Patient Arrived:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="patient_arrived" >
							<option value="ambulatory" {{ old('patient_arrived')=='ambulatory'?"selected":"" }}>Ambulatory</option>
							<option value="wheelchair" {{ old('patient_arrived')=='wheelchair'?"selected":"" }}>Wheelchair</option>
							<option value="stretcher" {{ old('patient_arrived')=='stretcher'?"selected":"" }}>Stretcher</option>
							<option value="other" {{ old('patient_arrived')=='other'?"selected":"" }}>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="patient_arrived_other" id="patient_arrived_other" class="form-control">
						@if($errors->has('patient_arrived_other'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('patient_arrived_other') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Patient Arrived From:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="patient_arrived_from" >
							<option value="home" {{ old('patient_arrived_from')=='home'?"selected":"" }}>Home</option>
							<option value="opd" {{ old('patient_arrived_from')=='opd'?"selected":"" }}>OPD</option>
							<option value="other_hospital" {{ old('patient_arrived_from')=='other_hospital'?"selected":"" }}>Other Hospital</option>
							<option value="other" {{ old('patient_arrived_from')=='other'?"selected":"" }}>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="patient_arrived_from_other" id="patient_arrived_from_other" class="form-control">
						@if($errors->has('patient_arrived_from_other'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('patient_arrived_from_other') }}</div></span>
						@endif
					</div>
				</div>
			</div>

		<hr />

			<div class="row">
					<h3>Vital Signs:</h3>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-4">
						<label>Temperature:</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="temperature" value="{{ old('temprature') }}" class="form-control">
						@if($errors->has('temperature'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('temperature') }}</div></span>
						@endif
					</div>
					<div class="col-md-4">
						<select class="form-control" id="temperature_type" name="temperature_type" >
							<option value="oral" {{ old('temperature_type')=='oral'?"selected":"" }}> Oral </option>
							<option value="rectal" {{ old('temperature_type')=='rectal'?"selected":"" }}> Rectal </option>
							<option value="auxillary" {{ old('temperature_type')=='auxillary'?"selected":"" }}> Auxillary </option>
							<option value="tympanic" {{ old('temperature_type')=='tympanic'?"selected":"" }}> Tympanic </option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pain:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pain" >
							<option value="opd" {{ old('pain')=='opd'?"selected":"" }}>OPD</option>
							<option value="home" {{ old('pain')=='home'?"selected":"" }}>Home</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pulse:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="pulse" placeholder="(per minute)" value="{{ old('pulse') }}">
						@if($errors->has('pulse'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('pulse') }}</div></span>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>RR : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="rr" value="{{ old('rr') }}" placeholder="(per minute)">
						@if($errors->has('rr'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('rr') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Blood Pressure:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="blood_pressure" value="{{ old('blood_pressure') }}" placeholder="(in mm Hg)">
						@if($errors->has('blood_pressure'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('blood_pressure') }}</div></span>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>SpO<sub>2</sub> :</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="spo2" value="{{ old('spo2') }}">
						@if($errors->has('spo2'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('spo2') }}</div></span>
						@endif
					</div>
				</div>
			</div>

				<hr>
				<div class="row">
					<h3>Activities of Daily Living:</h3>
				</div>
				<table class="table table-bordered table-responsive" id="daily_living">
					<thead>
						<tr>
							<th></th>
							<th>Usual Level</th>
							<th>Level on Admission</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Feeding</th>
							<td>
								<select class="form-control" name="feeding_usual" >
									<option value="0" {{ old('feeding_usual')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('feeding_usual')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('feeding_usual')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('feeding_usual')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="feeding_admission" >
									<option value="0" {{ old('feeding_admission')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('feeding_admission')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('feeding_admission')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('feeding_admission')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td rowspan="5">
								Level 0 - Independent, requires no Supervision, Assistance or teaching <br><br><br>
								Level 1 - Requires supervision and / or teaching <br><br><br>
								Level 2 - Requires at least minimum assistance from another person <br><br><br>
								Level 3 - Is dependent and does not participate
							</td>
						</tr>
						<tr>
							<th>Bathing</th>
							<td>
								<select class="form-control" name="bathing_usual" >
									<option value="0" {{ old('bathing_usual')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('bathing_usual')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('bathing_usual')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('bathing_usual')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="bathing_admission" >
									<option value="0" {{ old('bathing_admission')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('bathing_admission')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('bathing_admission')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('bathing_admission')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Toileting</th>
							<td>
								<select class="form-control" name="toileting_usual" >
									<option value="0" {{ old('toileting_usual')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('toileting_usual')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('toileting_usual')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('toileting_usual')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="toileting_admission" >
									<option value="0" {{ old('toileting_admission')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('toileting_admission')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('toileting_admission')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('toileting_admission')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>General Mobility / Gait</th>
							<td>
								<select class="form-control" name="mobility_usual" >
									<option value="0" {{ old('mobility_usual')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('mobility_usual')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('mobility_usual')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('mobility_usual')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="mobility_admission" >
									<option value="0" {{ old('mobility_admission')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('mobility_admission')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('mobility_admission')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('mobility_admission')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Dressing / Grooming</th>
							<td>
								<select class="form-control" name="dressing_usual"  >
									<option value="0" {{ old('dressing_usual')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('dressing_usual')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('dressing_usual')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('dressing_usual')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="dressing_admission" >
									<option value="0" {{ old('dressing_admission')=='0'?"selected":"" }}>Level 0</option>
									<option value="1" {{ old('dressing_admission')=='1'?"selected":"" }}>Level 1</option>
									<option value="2" {{ old('dressing_admission')=='2'?"selected":"" }}>Level 2</option>
									<option value="3" {{ old('dressing_admission')=='3'?"selected":"" }}>Level 3</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<h3>Patient Safety:</h3>
				</div>
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th colspan="6" class="text-center">Fall Risk Assessment Scale</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th>Confused-disoriented / Hallucinating</th>
							<td><input type="checkbox" name="hallucinating" id="hallucinating"  value="20"></td>
							<th>Post-op Condition - Sedated</th>
							<td><input type="checkbox" name="post_op_condition" id="post_op_condition"  value="10"></td>
							<th>Narcotics / Diuretics</th>
							<td><input type="checkbox" name="narcotics" id="narcotics"  value="10"></td>
						</tr>
						<tr>
							<th>Unstable Gait / Weakness</th>
							<td><input type="checkbox" name="weakness" id="weakness"  value="20"></td>
							<th>Drug or Alcohol Withdrawal</th>
							<td><input type="checkbox" name="drug_or_alcohol_withdrawal" id="drug_or_alcohol_withdrawal"  value="10"></td>
							<th>Bowel, bladder urgency, incontinence</th>
							<td><input type="checkbox" name="bowel_bladder" id="bowel_bladder"  value="10"></td>
						</tr>
						<tr>
							<th>History of Syncope or Seizures</th>
							<td><input type="checkbox" name="seizures" id="seizures"  value="15"></td>
							<th>Use of Walker, Cane Crutches etc</th>
							<td><input type="checkbox" name="walker" id="walker"  value="15"></td>
							<th>Age 60 more</th>
							<td><input type="checkbox" name="age_60" id="age_60"  value="5"></td>
						</tr>
						<tr>
							<th>Recent Hx of falls</th>
							<td><input type="checkbox" name="recent_hx_falls" id="recent_hx_falls"  value="15"></td>
							<th>Postural hypo tension</th>
							<td><input type="checkbox" name="postural_hypo_tension" id="postural_hypo_tension"  value="10"></td>
							<th>Uncooperative, impaired judgement</th>
							<td><input type="checkbox" name="uncooperative" id="uncooperative"  value="5"></td>
						</tr>
						<tr>
							<th>Age 12 or younger</th>
							<td><input type="checkbox" name="age_12" id="age_12"  value="15"></td>
							<th>Poor eyesight</th>
							<td><input type="checkbox" name="poor_eyesight" id="poor_eyesight"  value="10"></td>
							<th>Language barrier</th>
							<td><input type="checkbox" name="language_barrier" id="language_barrier"  value="5"></td>
						</tr>
						<tr>
							<th>Paralysis, hemiplegia, Stroke</th>
							<td><input type="checkbox" name="paralysis_stroke" id="paralysis_stroke"  value="15"></td>
							<th>New medications (i.e Sedative antihypertensive)</th>
							<td><input type="checkbox" name="new_medications" id="new_medications"  value="15"></td>
							<th>Poor Hearing</th>
							<td><input type="checkbox" name="poor_hearing" id="poor_hearing"  value="5"></td>
						</tr>
					</tbody>
				</table>

				<div class="row form-group">
					<div class="col-md-6">
						If the score > 25, fall prevention to be initiated.
					</div>
					<div class="col-md-6">
						<label class="control-label col-md-8" for="score_here">Total Score:</label>
						<div class="score_here col-md-4"></div>
					</div>
				</div >

				<hr />

				<div class="form-group row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label class="control-label col-md-6" for="relative_name">Relative Name:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="relative_name" value="{{ old('relative_name') }}" class="form-control" >
							@if($errors->has('relative_name'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('relative_name') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label class="control-label col-md-6" for="relation">Relation:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="relation" value="{{ old('relation') }}" class="form-control">
							@if($errors->has('relation'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('relation') }}</div></span>
							@endif
						</div>
					</div>
				</div>

				<div class="text-center form-group">
					<button class="btn btn-success" type="submit">Submit</button>
				</div>
		</form>
	</div>
</body>

@endsection
