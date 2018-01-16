<html>
<head>
	<title>
		Nutritional Assessment Form
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

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

	<form name="nutritionalAssessmentForm">

		<div class="row form-group">
			<div class="col-md-10">
				<label>Diagnosis : </label>
				<input class="form-control " type="textbox" id="diagnosis" placeholder="Diagnosis">
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
		      <select class="form-control" name="diet">
						<option>Vegetarian</option>
						<option>Non-Vegetarian</option>
						<option>Ovatarian</option>
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
		      <select class="form-control" name="vomiting">
						<option>Absent</option>
						<option>Present</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Diarrhea : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="diarrhea">
						<option>Absent</option>
						<option>Present</option>
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
		      <select class="form-control" name="constipation">
						<option>Absent</option>
						<option>Present</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Mouth Ulcer : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="mouth_ulcer">
						<option>Absent</option>
						<option>Present</option>
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
		      <select class="form-control" name="food_intake">
						<option>Adequate</option>
						<option>Inadequate</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Fluid Intake : </label>
				</div>
				<div class="col-md-6">
		      <select class="form-control" name="fluid_intake">
						<option>Adequate</option>
						<option>Inadequate</option>
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
					<select class="form-control" name="nutritional_intake">
						<option>Low</option>
						<option>Medium</option>
						<option>High</option>
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
					<select class="form-control" name="life_style">
						<option>Sedentary</option>
						<option>Moderate</option>
						<option>Heavy</option>
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
					<select class="form-control" name="life_style">
						<option>Self Feed</option>
						<option>With Assisstance</option>
						<option>Tube Feed</option>
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
					<select class="form-control" name="bmi">
						<option> > 30</option>
						<option> > 24</option>
						<option>18.5 - 24</option>
						<option> < 18.5</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Diet Recall : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="diet_recall">
						<option>Adequate Nutritional Intake</option>
						<option>Less Nutritional Intake</option>
						<option>No Nutritional Intake for > 5 days</option>
						<option>Unknown</option>
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
					<select class="form-control" name="food_intake_decline">
						<option>Yes</option>
						<option>No</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>If yes, reason thereof : </label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="food_intake_decline_reason">
						<option>Loff of apetite</option>
						<option>Digestive Problem</option>
						<option>Chewing or Swallowing</option>
						<option>Any other</option>
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
		      <select class="form-control" name="risk_type">
						<option>Low Risk</option>
						<option>Medium Risk</option>
						<option>High Risk</option>
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
		      <select class="form-control" name="diet_suggested">
						<option>FD</option>
						<option>ADD</option>
						<option>SRD</option>
						<option>Semi solid Diet</option>
						<option>Soft Diet</option>
						<option>Liquid Diet</option>
						<option>Peg Feed</option>
						<option>RT Feed</option>
						<option>HPD Gout Diet</option>
						<option>Hepatic Diet</option>
						<option>Without Chilly</option>
						<option>Any Other</option>
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



	</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
