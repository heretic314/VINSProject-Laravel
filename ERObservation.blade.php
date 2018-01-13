<html>
<head>
	<title>
		ER Observation
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>ER Observation</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
					WEF 10-10-2015
				</div>
			</div>
		</div>
	</div>
	<form id="er_observation">
		<div class="row form-group">
			<div class="col-md-10">
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Date : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="date" name="date" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Triage Category : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="triage_category" />
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-2">
				<textarea class="form-control" name="addressograph" placeholder="Addressograph"></textarea>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Diagnosis : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="diagnosis" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Investigations : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="investigation" />
				</div>
			</div>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Time</th>
						<th><input class="form-control" type="time" name="time_01" /></th>
						<th><input class="form-control" type="time" name="time_02" /></th>
						<th><input class="form-control" type="time" name="time_03" /></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Pulse </th>
						<td><input class="form-control" type="text" name="pulse_01" /></td>
						<td><input class="form-control" type="text" name="pulse_02" /></td>
						<td><input class="form-control" type="text" name="pulse_03" /></td>
					</tr>
					<tr>
						<th>BP </th>
						<td><input class="form-control" type="text" name="bp_01" /></td>
						<td><input class="form-control" type="text" name="bp_02" /></td>
						<td><input class="form-control" type="text" name="bp_03" /></td>
					</tr>
					<tr>
						<th>SPO2 </th>
						<td><input class="form-control" type="text" name="spo2_01" /></td>
						<td><input class="form-control" type="text" name="spo2_02" /></td>
						<td><input class="form-control" type="text" name="spo2_03" /></td>
					</tr>
					<tr>
						<th>RR </th>
						<td><input class="form-control" type="text" name="rr_01" /></td>
						<td><input class="form-control" type="text" name="rr_02" /></td>
						<td><input class="form-control" type="text" name="rr_03" /></td>
					</tr>
					<tr>
						<th>GCS </th>
						<td><input class="form-control" type="text" name="gcs_01" /></td>
						<td><input class="form-control" type="text" name="gcs_02" /></td>
						<td><input class="form-control" type="text" name="gcs_03" /></td>
					</tr>
					<tr>
						<th>Temprature </th>
						<td><input class="form-control" type="text" name="temp_01" /></td>
						<td><input class="form-control" type="text" name="temp_02" /></td>
						<td><input class="form-control" type="text" name="temp_03" /></td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr />

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th> IV Infusion</th>
						<th>QTY</TH>
						<th> Start Time</th>
						<th>End Time</th>
						<th> Remarks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="iv_infusion_01" class="form-control"> </td>
						<td><input type="text" name="qty_01" class="form-control"> </td>
						<td><input type="time" name="time_start_01" id="time" class="form-control"></td>
						<td><input type="time" name="time_end_01" id="time" class="form-control"></td>
						<td><input type="text" name="remarks_01" class="form-control"> </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_02" class="form-control"> </td>
						<td><input type="text" name="qty_02" class="form-control"> </td>
						<td><input type="time" name="time_start_02" id="time" class="form-control"></td>
						<td><input type="time" name="time_end_02" id="time" class="form-control"></td>
						<td><input type="text" name="remarks_02" class="form-control"> </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_03" class="form-control"> </td>
						<td><input type="text" name="qty_03" class="form-control"> </td>
						<td><input type="time" name="time_start_03" id="time" class="form-control"></td>
						<td><input type="time" name="time_end_03" id="time" class="form-control"></td>
						<td><input type="text" name="remarks_03" class="form-control"> </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_04" class="form-control"> </td>
						<td><input type="text" name="qty_04" class="form-control"> </td>
						<td><input type="time" name="time_start_04" id="time" class="form-control"></td>
						<td><input type="time" name="time_end_04" id="time" class="form-control"></td>
						<td><input type="text" name="remarks_04" class="form-control"> </td>
					</tr>
				</tbody>
			</table>
		</div>

		<hr />
		<div class="row">
			<h3>Medication Administration</h3>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name of the Drug</th>
						<th>Dosage</TH>
						<th>Routine</th>
						<th>Administration By</th>
						<th>Time</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="name_drug_01" class="form-control"> </td>
						<td><input type="text" name="dosage_01" class="form-control"> </td>
						<td><input type="text" name="routine_01" class="form-control"></td>
						<td><input type="text" name="administration_by_01"  class="form-control"></td>
						<td><input type="time" name="time_01" class="form-control"> </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_02" class="form-control"> </td>
						<td><input type="text" name="dosage_02" class="form-control"> </td>
						<td><input type="text" name="routine_02" class="form-control"></td>
						<td><input type="text" name="administration_by_02"  class="form-control"></td>
						<td><input type="time" name="time_02" class="form-control"> </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_03" class="form-control"> </td>
						<td><input type="text" name="dosage_03" class="form-control"> </td>
						<td><input type="text" name="routine_03" class="form-control"></td>
						<td><input type="text" name="administration_by_03"  class="form-control"></td>
						<td><input type="time" name="time_03" class="form-control"> </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_04" class="form-control"> </td>
						<td><input type="text" name="dosage_04" class="form-control"> </td>
						<td><input type="text" name="routine_04" class="form-control"></td>
						<td><input type="text" name="administration_by_04"  class="form-control"></td>
						<td><input type="time" name="time_04" class="form-control"> </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_05" class="form-control"> </td>
						<td><input type="text" name="dosage_05" class="form-control"> </td>
						<td><input type="text" name="routine_05" class="form-control"></td>
						<td><input type="text" name="administration_by_05"  class="form-control"></td>
						<td><input type="time" name="time_05" class="form-control"> </td>
				  </tr>
				</tbody>
			</table>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Patient shifted to :</label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" name="patient_shifted_to"  />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>ER nurse :</label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" name="er_nurse"  />
				</div>
			</div>
		</div>
	</form>
</div>
</html>
