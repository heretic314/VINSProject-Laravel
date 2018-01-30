@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/CompleteNursingAssessment') }}" method="post" >
			{{ csrf_field() }}
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

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="unit">Unit:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="unit" id="unit">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="date">Date:</label>
					</div>
					<div class="col-md-6">
						<input type="date" class="form-control" name="date" id="date">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-4" for="time">Time:</label>
					</div>
					<div class="col-md-6">
						<input type="time" class="form-control" name="time" id="time">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-6" for="idband_no">ID Band No.:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="idband_no" id="idband_no" value="{{ old('idband_no') }}" />
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
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-4">
						<label class="control-label col-md-3" for="height">Height:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="height" id="height" placeholder="Height(in cms)" value="{{ old('height') }}">
						</div>
						<br><br>
						<label class="control-label col-md-3" for="weight">Weight:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="weight" id="weight" placeholder="Weight(in KGs)" value="{{ old('weight') }}">
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
						<select class="form-control" name="allergies">
							<option selected default value="no">NO</option>
							<option value="yes">YES</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="allergies_other" id="allergies_other" class="form-control">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>History Informant:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="history_informant">
							<option value="patient">Patient</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="history_informant_other" id="history_informant_other" class="form-control">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Patient Arrived:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="patient_arrived">
							<option value="ambulatory">Ambulatory</option>
							<option value="wheelchair">Wheelchair</option>
							<option value="stretcher">Stretcher</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="patient_arrived_other" id="patient_arrived_other" class="form-control">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Patient Arrived From:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="patient_arrived_from">
							<option value="home">Home</option>
							<option value="opd">OPD</option>
							<option value="other_hospital">Other Hospital</option>
							<option value="other">Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="patient_arrived_from_other" id="patient_arrived_from_other" class="form-control">
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
						<input type="text" name="temperature" id="temperature" class="form-control">
					</div>
					<div class="col-md-4">
						<select class="form-control" id="temperature_type" name="temperature_type">
							<option value="oral"> Oral </option>
							<option value="rectal"> Rectal </option>
							<option value="auxillary"> Auxillary </option>
							<option value="tympanic"> Tympanic </option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pain:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pain">
							<option value="opd">OPD</option>
							<option value="home">Home</option>
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
						<input type="text" class="form-control" name="pulse" id="pulse" placeholder="(per minute)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>RR : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="rr" id="rr" placeholder="(per minute)">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Blood Pressure:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="blood_pressure" id="blood_pressure" placeholder="(in mm Hg)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>SpO<sub>2</sub> :</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="spo2" id="spo2">
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
								<select class="form-control" name="feeding_usual">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="feeding_admission">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
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
								<select class="form-control" name="bathing_usual">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="bathing_admission">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Toileting</th>
							<td>
								<select class="form-control" name="toileting_usual">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="toileting_admission">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>General Mobility / Gait</th>
							<td>
								<select class="form-control" name="mobility_usual">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="mobility_admission">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Dressing / Grooming</th>
							<td>
								<select class="form-control" name="dressing_usual">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="dressing_admission">
									<option value="0">Level 0</option>
									<option value="1">Level 1</option>
									<option value="2">Level 2</option>
									<option value="3">Level 3</option>
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
							<td><input type="checkbox" name="hallucinating" id="hallucinating" class="form-control" value="20"></td>
							<th>Post-op Condition - Sedated</th>
							<td><input type="checkbox" name="post_op_condition" id="post_op_condition" class="form-control" value="10"></td>
							<th>Narcotics / Diuretics</th>
							<td><input type="checkbox" name="narcotics" id="narcotics" class="form-control" value="10"></td>
						</tr>
						<tr>
							<th>Unstable Gait / Weakness</th>
							<td><input type="checkbox" name="weakness" id="weakness" class="form-control" value="20"></td>
							<th>Drug or Alcohol Withdrawal</th>
							<td><input type="checkbox" name="drug_or_alcohol_withdrawal" id="drug_or_alcohol_withdrawal" class="form-control" value="10"></td>
							<th>Bowel, bladder urgency, incontinence</th>
							<td><input type="checkbox" name="bowel_bladder" id="bowel_bladder" class="form-control" value="10"></td>
						</tr>
						<tr>
							<th>History of Syncope or Seizures</th>
							<td><input type="checkbox" name="seizures" id="seizures" class="form-control" value="15"></td>
							<th>Use of Walker, Cane Crutches etc</th>
							<td><input type="checkbox" name="walker" id="walker" class="form-control" value="15"></td>
							<th>Age 60 more</th>
							<td><input type="checkbox" name="age_60" id="age_60" class="form-control" value="5"></td>
						</tr>
						<tr>
							<th>Recent Hx of falls</th>
							<td><input type="checkbox" name="recent_hx_falls" id="recent_hx_falls" class="form-control" value="15"></td>
							<th>Postural hypo tension</th>
							<td><input type="checkbox" name="postural_hypo_tension" id="postural_hypo_tension" class="form-control" value="10"></td>
							<th>Uncooperative, impaired judgement</th>
							<td><input type="checkbox" name="uncooperative" id="uncooperative" class="form-control" value="5"></td>
						</tr>
						<tr>
							<th>Age 12 or younger</th>
							<td><input type="checkbox" name="age_12" id="age_12" class="form-control" value="15"></td>
							<th>Poor eyesight</th>
							<td><input type="checkbox" name="poor_eyesight" id="poor_eyesight" class="form-control" value="10"></td>
							<th>Language barrier</th>
							<td><input type="checkbox" name="language_barrier" id="language_barrier" class="form-control" value="5"></td>
						</tr>
						<tr>
							<th>Paralysis, hemiplegia, Stroke</th>
							<td><input type="checkbox" name="paralysis_stroke" id="paralysis_stroke" class="form-control" value="15"></td>
							<th>New medications (i.e Sedative antihypertensive)</th>
							<td><input type="checkbox" name="new_medications" id="new_medications" class="form-control" value="15"></td>
							<th>Poor Hearing</th>
							<td><input type="checkbox" name="poor_hearing" id="poor_hearing" class="form-control" value="5"></td>
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
							<input type="text" name="relative_name" id="relative_name" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label class="control-label col-md-6" for="relation">Relation:</label>
						</div>
						<div class="col-md-6">
							<input type="text" name="relation" id="relation" class="form-control">
						</div>
					</div>
				</div>

				<div class="row form-group">
					<button class="form-control btn btn-success" type="submit">Submit</button>
				</div>
		</form>
	</div>
</body>

@endsection
