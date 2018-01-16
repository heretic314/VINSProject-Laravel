<html>
<head>
	<title>
		CPR Format
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<form name="bloodtransfusion">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>CPR Format</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. FMT/NUR/37 <br>
						REV. No. 0.1 <br>
						WEF 01-11-2014 <br>
						PAGE NO.
					</div>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-10"></div>
			<div class="text-right col-md-2">
				<label>Addressograph</label>
				<textarea class="form-control" placeholder="Addressograph here"></textarea>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Name:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="patient_name" id="patient_name">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>IPD No.:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="ipd_no" id="ipd_no">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Age:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="age" id="age">
					</div>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Sex:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="sex">
						<option>NA</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Date:</label>
				</div>
				<div class="col-md-6">
					<input type="date" class="form-control" name="date" id="date">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Start Time:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="start_time" id="start_time">
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Bed No.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="bed_no" id="bed_no">
				</div>
			</div>
		</div>

		<hr>

		<table class="table table-bordered">
			<tr>
				<th>Diagnosis</th>
				<td  colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="diagnosis" id="diagnosis">
					</div>
				</td>
			</tr>
			<tr>
				<th>Name of Doctor leading CPR</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="name_doctor" id="name_doctor">
					</div>
				</td>
			</tr>
			<tr>
				<th>CPR Team</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="cpr_team" id="cpr_team">
					</div>
				</td>
			</tr>
			<tr>
				<th>Intubation Time (if done)</th>
				<td colspan="6">
					<div class="text-right">
						<input type="time" class="form-control" name="intubation_time" id="intubation_time">
					</div>
				</td>
			</tr>
			<tr>
				<th rowspan="2">Defribillator (if used how many shocks and joules)</th>
				<th>ECG Rhythm</th>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_00" id="defib_rhythm_00">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_01" id="defib_rhythm_01">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_02" id="defib_rhythm_02">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_03" id="defib_rhythm_03">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_04" id="defib_rhythm_04">
				</td>
			</tr>
			<tr>
				<th>DC Shock</th>
				<td>
					<input type="text" class="form-control" name="defib_dc_00" id="defib_dc_00">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_01" id="defib_dc_01">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_02" id="defib_dc_02">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_03" id="defib_dc_03">
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_04" id="defib_dc_04">
				</td>
			</tr>
			<tr>
				<th rowspan="6">Medication</th>
				<th>Time</th>
				<th colspan="5">Medicines</th>
			</tr>
			<tr>
				<td>
					<input type="text" class="form-control" name="medication_time_0" id="medication_time_0">
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_0" id="medication_name_0">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" class="form-control" name="medication_time_1" id="medication_time_1">
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_1" id="medication_name_1">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" class="form-control" name="medication_time_2" id="medication_time_2">
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_2" id="medication_name_2">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" class="form-control" name="medication_time_3" id="medication_time_3">
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_3" id="medication_name_3">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" class="form-control" name="medication_time_4" id="medication_time_4">
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_4" id="medication_name_4">
				</td>
			</tr>
			<tr>
				<th>Total time of Resuscitation</th>
				<td colspan="6">
					<div class="text-right">
						<input type="time" class="form-control" name="total_time" id="total_time">
					</div>
				</td>
			</tr>
			<tr>
				<th>Outcome</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="outcome" id="outcome">
					</div>
				</td>
			</tr>
			<tr>
				<th>Doctor Name </th>
				<td colspan="6">
					<input type="text" class="form-control" name="doctor_name" id="doctor_name">
				</td>
			</tr>
			<tr>
				<th>Remarks</th>
				<td colspan="6">
					<div class="text-right">
						<textarea class="form-control" rows="3" name="remarks"></textarea>
					</div>
				</td>
			</tr>
		</table>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Consultant Counseled:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="consultant_counseled" id="consultant_counseled">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Relative's Name:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="relative_name" id="relative_name">
				</div>
			</div>
		</div>


		<hr />
		<hr />
		<div class="form-group">
			<table name="vital-chart" class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th>Time</th>
						<th rowspan="2">Pulse</th>
						<th rowspan="2">BP</th>
						<th rowspan="2">SPO<sub>2</sub></th>
						<th rowspan="2">RR</th>
						<th rowspan="2">Chest Compression</th>
						<th rowspan="2">ECG Rhythm</th>
						<th rowspan="2">DC Shock</th>
						<th rowspan="2">Medication</th>
					</tr>
					<tr>
						<th>
							Initial Time <input type="time" class="form-control" name="initial_time" id="initial_time">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>0 minutes</th>
						<td><input type="text" class="form-control" name="00_01" id="00_01"></td>
						<td><input type="text" class="form-control" name="00_02" id="00_02"></td>
						<td><input type="text" class="form-control" name="00_03" id="00_03"></td>
						<td><input type="text" class="form-control" name="00_04" id="00_04"></td>
						<td><input type="text" class="form-control" name="00_05" id="00_05"></td>
						<td><input type="text" class="form-control" name="00_06" id="00_06"></td>
						<td><input type="text" class="form-control" name="00_07" id="00_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="00_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>5 minutes</th>
						<td><input type="text" class="form-control" name="01_01" id="01_01"></td>
						<td><input type="text" class="form-control" name="01_02" id="01_02"></td>
						<td><input type="text" class="form-control" name="01_03" id="01_03"></td>
						<td><input type="text" class="form-control" name="01_04" id="01_04"></td>
						<td><input type="text" class="form-control" name="01_05" id="01_05"></td>
						<td><input type="text" class="form-control" name="01_06" id="01_06"></td>
						<td><input type="text" class="form-control" name="01_07" id="01_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="01_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>10 minutes</th>
						<td><input type="text" class="form-control" name="02_01" id="02_01"></td>
						<td><input type="text" class="form-control" name="02_02" id="02_02"></td>
						<td><input type="text" class="form-control" name="02_03" id="02_03"></td>
						<td><input type="text" class="form-control" name="02_04" id="02_04"></td>
						<td><input type="text" class="form-control" name="02_05" id="02_05"></td>
						<td><input type="text" class="form-control" name="02_06" id="02_06"></td>
						<td><input type="text" class="form-control" name="02_07" id="02_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="02_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>15 minutes</th>
						<td><input type="text" class="form-control" name="03_01" id="03_01"></td>
						<td><input type="text" class="form-control" name="03_02" id="03_02"></td>
						<td><input type="text" class="form-control" name="03_03" id="03_03"></td>
						<td><input type="text" class="form-control" name="03_04" id="03_04"></td>
						<td><input type="text" class="form-control" name="03_05" id="03_05"></td>
						<td><input type="text" class="form-control" name="03_06" id="03_06"></td>
						<td><input type="text" class="form-control" name="03_07" id="03_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="03_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>20 minutes</th>
						<td><input type="text" class="form-control" name="04_01" id="04_01"></td>
						<td><input type="text" class="form-control" name="04_02" id="04_02"></td>
						<td><input type="text" class="form-control" name="04_03" id="04_03"></td>
						<td><input type="text" class="form-control" name="04_04" id="04_04"></td>
						<td><input type="text" class="form-control" name="04_05" id="04_05"></td>
						<td><input type="text" class="form-control" name="04_06" id="04_06"></td>
						<td><input type="text" class="form-control" name="04_07" id="04_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="04_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>25 minutes</th>
						<td><input type="text" class="form-control" name="05_01" id="05_01"></td>
						<td><input type="text" class="form-control" name="05_02" id="05_02"></td>
						<td><input type="text" class="form-control" name="05_03" id="05_03"></td>
						<td><input type="text" class="form-control" name="05_04" id="05_04"></td>
						<td><input type="text" class="form-control" name="05_05" id="05_05"></td>
						<td><input type="text" class="form-control" name="05_06" id="05_06"></td>
						<td><input type="text" class="form-control" name="05_07" id="05_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="05_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

					<tr>
						<th>30 minutes</th>
						<td><input type="text" class="form-control" name="06_01" id="06_01"></td>
						<td><input type="text" class="form-control" name="06_02" id="06_02"></td>
						<td><input type="text" class="form-control" name="06_03" id="06_03"></td>
						<td><input type="text" class="form-control" name="06_04" id="06_04"></td>
						<td><input type="text" class="form-control" name="06_05" id="06_05"></td>
						<td><input type="text" class="form-control" name="06_06" id="06_06"></td>
						<td><input type="text" class="form-control" name="06_07" id="06_07"></td>
						<td>
							<textarea class="form-control" cols="2" name="06_08" placeholder="Medicine"></textarea>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</form>
</div>
</body>
</html>
