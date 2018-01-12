<html>
<head>
	<title>
		Complete Nursing Assessment
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form name="completenursingassessment">
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
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-4" for="unit">Unit:</label>
						<div class="col-md-8">
							<input type="text" class="form-control" name="unit" id="unit">
						</div>
						<br><br>
						<label class="control-label col-md-4" for="date">Date:</label>
						<div class="col-md-8">
							<input type="date" class="form-control" name="date" id="date">
						</div>
						<br><br>
						<label class="control-label col-md-4" for="time">Time:</label>
						<div class="col-md-8">
							<input type="time" class="form-control" name="time" id="time">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label col-md-6" for="idband_no">ID Band No.:</label>
						<div class="col-md-6">
							<input type="radio" class="radio-inline" name="idband_no" id="idband_no" value="yes"> Yes
							<input type="radio" class="radio-inline" name="idband_no" id="idband_no" value="no"> No
						</div>
						<br><br>
						<label class="control-label col-md-6" for="call_bell">Call Bell in Reach:</label>
						<div class="col-md-6">
							<input type="radio" class="radio-inline" name="call_bell" id="call_bell" value="yes"> Yes
							<input type="radio" class="radio-inline" name="call_bell" id="call_bell" value="no"> No
						</div>
					</div>
				</div>
				<div class="text-right col-md-4">
					<textarea class="form-control" rows="3" placeholder="Addressograph here"></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-4">
						<label class="control-label col-md-3" for="height">Height:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="height" id="height" placeholder="Height(in cms)">
						</div>
						<br><br>
						<label class="control-label col-md-3" for="weight">Weight:</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="weight" id="weight" placeholder="Weight(in KGs)">
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
							<option>NO</option>
							<option>YES</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="others_allergy" id="others_allergy" class="form-control">
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
							<option>Patient</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="others_informant" id="others_informant" class="form-control">
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
							<option>Ambulatory</option>
							<option>Wheelchair</option>
							<option>Stretcher</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="others_informant" id="other_patient_arrived" class="form-control">
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
							<option>Home</option>
							<option>OPD</option>
							<option>Other Hospital</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>If other:</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="others_informant" id="other_patient_arrived_from" class="form-control">
					</div>
				</div>
			</div>

		<hr>

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
							<option> Oral </option>
							<option> Rectal </option>
							<option> Auxillary </option>
							<option> Tympanic </option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pain:</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pain">
							<option>OPD</option>
							<option>Home</option>
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
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="feeding_admission">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
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
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="bathing_admission">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Toileting</th>
							<td>
								<select class="form-control" name="toileting_usual">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="toileting_admission">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>General Mobility / Gait</th>
							<td>
								<select class="form-control" name="mobility_usual">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="mobility_admission">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Dressing / Grooming</th>
							<td>
								<select class="form-control" name="dressing_usual">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
							<td>
								<select class="form-control" name="dressing_admission">
									<option>Level 0</option>
									<option>Level 1</option>
									<option>Level 2</option>
									<option>Level 3</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="row">
					<h3>Patient Safety:</h3>
				</div>
				<table class="table table-bordered table-responsive" id="patient_safety">
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
				<big>
					<div class="col-md-6">
						If the score > 25, fall prevention to be initiated.
					</div>
					<div class="col-md-6">
						<label class="control-label col-md-8" for="score_here">Total Score:</label>
						<div class="score_here col-md-4"></div>
					</div>
				</big>
				<br>
				<hr>
				<div class="form-group col-md-4">
					<label class="control-label col-md-6" for="relative_name">Relative Name:</label>
					<div class="col-md-6">
						<input type="text" name="relative_name" id="relative_name" class="form-control">
					</div>
					<br><br>
					<label class="control-label col-md-6" for="relation">Relation:</label>
					<div class="col-md-6">
						<input type="text" name="relation" id="relation" class="form-control">
					</div>
					<br><br>
					<label class="control-label col-md-6" for="sign">Sign:</label>
					<div class="col-md-6">
						<input type="text" name="sign" id="sign" class="form-control">
					</div>
				</div>

				<!-- Image left here -->

			</div>
		</form>
		<ul class="pager">
			<li class="previous"><a href="#">Previous</a></li>
			<li class="next"><a href="#second_page">Next</a></li>
		</ul>
	</div>
</body>
	<hr>

	<!-- Next Page Here -->
<div class="container">
	<div class="page-header" id="second_page">
			<div class="row">
				<div class="col-md-6">
					<h1>Nutritional Screening</h1>
				</div>
			</div>
		</div>
	<form class="form" name="nutritional_screening">
		<div class="form-group">
			<div class="col-md-6">
				<label class="control-label col-md-3" for="type_of_diet">Type of Diet:</label>
				<div class="col-md-9">
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="veg"> Veg
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="jain"> Jain
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="non_veg"> Non-Veg
				</div>
			</div>
			<div class="text-right col-md-6">
				<label class="control-label col-md-4" for="date_of_screening">Date of Screening:</label>
				<div class="col-md-8">
					<input type="date" class="form-control" name="date_of_screening" id="date_of_screening">
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="form-group">
			<table name="nutritional_screening" class="table table-bordered">
				<tbody>
					<tr>
						<th rowspan="5">1</th>
						<th colspan="2">Has there been any unintentional weight loss in the last three months?</th>
					</tr>
					<tr>
						<td>>6 Kgs</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="3"></td>
					</tr>
					<tr>
						<td>3-6 Kgs</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="2"></td>
					</tr>
					<tr>
						<td>0-3 Kgs (Don't Know)</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="1"></td>
					</tr>
					<tr>
						<td>No Weight loss</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="0"></td>
					</tr>
					<tr>
						<th rowspan="3">2</th>
						<th colspan="2">Does the patient appear emaciated?</th>
					</tr>
					<tr>
						<td>Yes</td>
						<td><input type="radio" class="form-control radio-inline" name="emaciated" value="2"></td>
					</tr>
					<tr>
						<td>No</td>
						<td><input type="radio" class="form-control radio-inline" name="emaciated" value="1"></td>
					</tr>
					<tr>
						<th rowspan="3">3</th>
						<th colspan="2">Is the patient mentally well oriented?</th>
					</tr>
					<tr>
						<td>Yes</td>
						<td><input type="radio" class="form-control radio-inline" name="mental_orientation" value="0"></td>
					</tr>
					<tr>
						<td>No</td>
						<td><input type="radio" class="form-control radio-inline" name="mental_orientation" value="2"></td>
					</tr>
					<tr>
						<th rowspan="5">4</th>
						<th colspan="2">Patient mode of feeding :</th>
					</tr>
					<tr>
						<td>Parental Nutritional / NBM</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="3"></td>
					</tr>
					<tr>
						<td>External Tube Feeding</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="3"></td>
					</tr>
					<tr>
						<td>Oral Feeding - Liquids</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="2"></td>
					</tr>
					<tr>
						<td>Diet</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="1"></td>
					</tr>
					<tr>
						<th rowspan="2">5</th>
						<th colspan="2">Foods to be avoided :</th>
					</tr>
					<tr>
						<td>Sour / Spicy / Milk / Others</td>
						<td><input type="text" class="form-control radio-inline" name="food_to_be_avoided"></td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="2">Score</th>
						<th ></th>
					</tr>
				</tbody>
			</table>
		<div class="form-group">
			<label class="control-label" for="nursing_care_plan">Nursing Care Plan:</label><br>
			<div class="">
				<textarea class="form-control" name="nursing_care_plan" id="nursing_care_plan" rows="3"></textarea>
			</div>
			<hr>
			<div class="col-md-6">
				<label class="control-label col-md-4" for="signature">Signature:</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="signature" id="signature">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="date_nursing">Date:</label>
				<div class="col-md-8">
					<input type="date" class="form-control" name="date_nursing" id="date_nursing">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="time_nursing">Time:</label>
				<div class="col-md-8">
					<input type="time" class="form-control" name="time_nursing" id="time_nursing">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="assessment_done_by">Assessment done by:</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="assessment_done_by" id="assessment_done_by">
				</div>
			</div>
		</div>
		</div>
		</div>
	</form>
</body>
</html>
