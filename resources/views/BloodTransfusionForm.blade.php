<html>
<head>
	<title>
		Blood Transfusion Form
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>

<div class="container">
	<form name="bloodtransfusion">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Blood Transfusion Form</h1>
				</div>	
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. FMT/IPD/36 <br>
						REV. No. 0.1 <br>
						WEF 01-10-2014 <br>
						PAGE NO. 01 OF 02
					</div>	
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10"></div>
			<div class="text-right col-md-2">
				<label>Addressograph : </label>
				<textarea class="form-control" name="addressograph" placeholder="Addressograph here"></textarea>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Name:</label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text"  name="patient_name" id="patient_name">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>IPD No.:</label>
				</div>
				<div class="col-md-6">
					<input type="number" class="form-control" name="ipd_no" id="ipd_no">
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Age:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="age" id="age">
				</div>
			</div>
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
					<label>Time:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="time" id="time">
				</div>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Blood Group:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="blood_group">
						<option>A+</option>
						<option>A-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>History of previous BT :</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="history_bt">
						<option>NA</option>
						<option>Yes</option>
						<option>No</option>
					</select>
				</div>
			</div>
		</div>
		
		
		<div class="row form-group">
			<div class="col-md-6">
				<label>If adverse reaction during previous transfusion and it's nature :</label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="bill-amt" id="adv">
			</div>
		</div>
		
		<hr>
		
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Blood Bag No.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="blood_bag_no1" id="blood_bag_no">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Blood Group:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="blood_bag_group">
						<option>A+</option>
						<option>A-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
					</select>
				</div>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Product's Name:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" id="prod_name1" name="prod_name">
							<option> Whole Blood </option>
							<option> PCV </option>
							<option> PRC </option>
							<option> FFP </option>
							<option> SDP </option>
							<option> Cryoprecipitate </option>
							<option> Other </option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Name of Blood Bank:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="name_blood_bank" id="name_blood_bank1">
				</div>
			</div>
		</div>
	
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Date of Expiry:</label>
				</div>
				<div class="col-md-6">
					<input type="date" class="form-control" name="expiry_date" id="expiry_date">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Checked by Dr.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="checked_by" id="checked_by">
				</div>
			</div>
		</div>
	
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Unit Nurse:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="unit_nurse" id="unit_nurse">
				</div>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>BT Started at:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="start_time" id="start_time">
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Stopped at:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="end_time" id="end_time">
				</div>
			</div>
		</div>
		
		<div class="row form-group">
			<h3>Vital Chart:</h3>
			Vitals must be taken every 15 mins during transfusion and post transfusion upto 60 minutes.
		</div>
		<div class="row form-group">
			<table name="vital-chart" class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th></th>
						<th colspan="4" class="text-center">I</th>
						<th colspan="4" class="text-center">II</th>
					</tr>
					<tr>
						<th></th>	
						<th>Time</th>
						<th>Temp</th>
						<th>Resp</th>
						<th>BP</th>
						<th>Time</th>
						<th>Temp</th>
						<th>Resp</th>
						<th>BP</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pre - Transfusion</td>
						<td><input type="time" class="form-control" name="01_01" id="01_01"></td>
						<td><input type="text" class="form-control" name="01_02" id="01_02"></td>
						<td><input type="text" class="form-control" name="01_03" id="01_03"></td>
						<td><input type="text" class="form-control" name="01_04" id="01_04"></td>
						<td><input type="time" class="form-control" name="01_05" id="01_05"></td>
						<td><input type="text" class="form-control" name="01_06" id="01_06"></td>
						<td><input type="text" class="form-control" name="01_07" id="01_07"></td>
						<td><input type="text" class="form-control" name="01_08" id="01_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="02_01" id="02_01"></td>
						<td><input type="text" class="form-control" name="02_02" id="02_02"></td>
						<td><input type="text" class="form-control" name="02_03" id="02_03"></td>
						<td><input type="text" class="form-control" name="02_04" id="02_04"></td>
						<td><input type="time" class="form-control" name="02_05" id="02_05"></td>
						<td><input type="text" class="form-control" name="02_06" id="02_06"></td>
						<td><input type="text" class="form-control" name="02_07" id="02_07"></td>
						<td><input type="text" class="form-control" name="02_08" id="02_08"></td>
					</tr>
					<tr>
						<td>During Transfusion</td>
						<td><input type="time" class="form-control" name="03_01" id="03_01"></td>
						<td><input type="text" class="form-control" name="03_02" id="03_02"></td>
						<td><input type="text" class="form-control" name="03_03" id="03_03"></td>
						<td><input type="text" class="form-control" name="03_04" id="03_04"></td>
						<td><input type="time" class="form-control" name="03_05" id="03_05"></td>
						<td><input type="text" class="form-control" name="03_06" id="03_06"></td>
						<td><input type="text" class="form-control" name="03_07" id="03_07"></td>
						<td><input type="text" class="form-control" name="03_08" id="03_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="04_01" id="04_01"></td>
						<td><input type="text" class="form-control" name="04_02" id="04_02"></td>
						<td><input type="text" class="form-control" name="04_03" id="04_03"></td>
						<td><input type="text" class="form-control" name="04_04" id="04_04"></td>
						<td><input type="time" class="form-control" name="04_05" id="04_05"></td>
						<td><input type="text" class="form-control" name="04_06" id="04_06"></td>
						<td><input type="text" class="form-control" name="04_07" id="04_07"></td>
						<td><input type="text" class="form-control" name="04_08" id="04_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="05_01" id="05_01"></td>
						<td><input type="text" class="form-control" name="05_02" id="05_02"></td>
						<td><input type="text" class="form-control" name="05_03" id="05_03"></td>
						<td><input type="text" class="form-control" name="05_04" id="05_04"></td>
						<td><input type="time" class="form-control" name="05_05" id="05_05"></td>
						<td><input type="text" class="form-control" name="05_06" id="05_06"></td>
						<td><input type="text" class="form-control" name="05_07" id="05_07"></td>
						<td><input type="text" class="form-control" name="05_08" id="05_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="06_01" id="06_01"></td>
						<td><input type="text" class="form-control" name="06_02" id="06_02"></td>
						<td><input type="text" class="form-control" name="06_03" id="06_03"></td>
						<td><input type="text" class="form-control" name="06_04" id="06_04"></td>
						<td><input type="time" class="form-control" name="06_05" id="06_05"></td>
						<td><input type="text" class="form-control" name="06_06" id="06_06"></td>
						<td><input type="text" class="form-control" name="06_07" id="06_07"></td>
						<td><input type="text" class="form-control" name="06_08" id="06_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="07_01" id="07_01"></td>
						<td><input type="text" class="form-control" name="07_02" id="07_02"></td>
						<td><input type="text" class="form-control" name="07_03" id="07_03"></td>
						<td><input type="text" class="form-control" name="07_04" id="07_04"></td>
						<td><input type="time" class="form-control" name="07_05" id="07_05"></td>
						<td><input type="text" class="form-control" name="07_06" id="07_06"></td>
						<td><input type="text" class="form-control" name="07_07" id="07_07"></td>
						<td><input type="text" class="form-control" name="07_08" id="07_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="08_01" id="08_01"></td>
						<td><input type="text" class="form-control" name="08_02" id="08_02"></td>
						<td><input type="text" class="form-control" name="08_03" id="08_03"></td>
						<td><input type="text" class="form-control" name="08_04" id="08_04"></td>
						<td><input type="time" class="form-control" name="08_05" id="08_05"></td>
						<td><input type="text" class="form-control" name="08_06" id="08_06"></td>
						<td><input type="text" class="form-control" name="08_07" id="08_07"></td>
						<td><input type="text" class="form-control" name="08_08" id="08_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="09_01" id="09_01"></td>
						<td><input type="text" class="form-control" name="09_02" id="09_02"></td>
						<td><input type="text" class="form-control" name="09_03" id="09_03"></td>
						<td><input type="text" class="form-control" name="09_04" id="09_04"></td>
						<td><input type="time" class="form-control" name="09_05" id="09_05"></td>
						<td><input type="text" class="form-control" name="09_06" id="09_06"></td>
						<td><input type="text" class="form-control" name="09_07" id="09_07"></td>
						<td><input type="text" class="form-control" name="09_08" id="09_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="10_01" id="10_01"></td>
						<td><input type="text" class="form-control" name="10_02" id="10_02"></td>
						<td><input type="text" class="form-control" name="10_03" id="10_03"></td>
						<td><input type="text" class="form-control" name="10_04" id="10_04"></td>
						<td><input type="time" class="form-control" name="10_05" id="10_05"></td>
						<td><input type="text" class="form-control" name="10_06" id="10_06"></td>
						<td><input type="text" class="form-control" name="10_07" id="10_07"></td>
						<td><input type="text" class="form-control" name="10_08" id="10_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="11_01" id="11_01"></td>
						<td><input type="text" class="form-control" name="11_02" id="11_02"></td>
						<td><input type="text" class="form-control" name="11_03" id="11_03"></td>
						<td><input type="text" class="form-control" name="11_04" id="11_04"></td>
						<td><input type="time" class="form-control" name="11_05" id="11_05"></td>
						<td><input type="text" class="form-control" name="11_06" id="11_06"></td>
						<td><input type="text" class="form-control" name="11_07" id="11_07"></td>
						<td><input type="text" class="form-control" name="11_08" id="11_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="12_01" id="12_01"></td>
						<td><input type="text" class="form-control" name="12_02" id="12_02"></td>
						<td><input type="text" class="form-control" name="12_03" id="12_03"></td>
						<td><input type="text" class="form-control" name="12_04" id="12_04"></td>
						<td><input type="time" class="form-control" name="12_05" id="12_05"></td>
						<td><input type="text" class="form-control" name="12_06" id="12_06"></td>
						<td><input type="text" class="form-control" name="12_07" id="12_07"></td>
						<td><input type="text" class="form-control" name="12_08" id="12_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="13_01" id="13_01"></td>
						<td><input type="text" class="form-control" name="13_02" id="13_02"></td>
						<td><input type="text" class="form-control" name="13_03" id="13_03"></td>
						<td><input type="text" class="form-control" name="13_04" id="13_04"></td>
						<td><input type="time" class="form-control" name="13_05" id="13_05"></td>
						<td><input type="text" class="form-control" name="13_06" id="13_06"></td>
						<td><input type="text" class="form-control" name="13_07" id="13_07"></td>
						<td><input type="text" class="form-control" name="13_08" id="13_08"></td>
					</tr>
					<tr>
						<td>After Transfusion</td>
						<td><input type="time" class="form-control" name="14_01" id="14_01"></td>
						<td><input type="text" class="form-control" name="14_02" id="14_02"></td>
						<td><input type="text" class="form-control" name="14_03" id="14_03"></td>
						<td><input type="text" class="form-control" name="14_04" id="14_04"></td>
						<td><input type="time" class="form-control" name="14_05" id="14_05"></td>
						<td><input type="text" class="form-control" name="14_06" id="14_06"></td>
						<td><input type="text" class="form-control" name="14_07" id="14_07"></td>
						<td><input type="text" class="form-control" name="14_08" id="14_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="15_01" id="15_01"></td>
						<td><input type="text" class="form-control" name="15_02" id="15_02"></td>
						<td><input type="text" class="form-control" name="15_03" id="15_03"></td>
						<td><input type="text" class="form-control" name="15_04" id="15_04"></td>
						<td><input type="time" class="form-control" name="15_05" id="15_05"></td>
						<td><input type="text" class="form-control" name="15_06" id="15_06"></td>
						<td><input type="text" class="form-control" name="15_07" id="15_07"></td>
						<td><input type="text" class="form-control" name="15_08" id="15_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="16_01" id="16_01"></td>
						<td><input type="text" class="form-control" name="16_02" id="16_02"></td>
						<td><input type="text" class="form-control" name="16_03" id="16_03"></td>
						<td><input type="text" class="form-control" name="16_04" id="16_04"></td>
						<td><input type="time" class="form-control" name="16_05" id="16_05"></td>
						<td><input type="text" class="form-control" name="16_06" id="16_06"></td>
						<td><input type="text" class="form-control" name="16_07" id="16_07"></td>
						<td><input type="text" class="form-control" name="16_08" id="16_08"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="17_01" id="17_01"></td>
						<td><input type="text" class="form-control" name="17_02" id="17_02"></td>
						<td><input type="text" class="form-control" name="17_03" id="17_03"></td>
						<td><input type="text" class="form-control" name="17_04" id="17_04"></td>
						<td><input type="time" class="form-control" name="17_05" id="17_05"></td>
						<td><input type="text" class="form-control" name="17_06" id="17_06"></td>
						<td><input type="text" class="form-control" name="17_07" id="17_07"></td>
						<td><input type="text" class="form-control" name="17_08" id="17_08"></td>
					</tr>
				</tbody>
			</table>
		</div>
</div>
</html>	