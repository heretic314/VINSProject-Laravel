@extends('layouts.app')

@section('content')
<div class="container">
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

	@if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors
      </div>
  @endif
	<form action="{{ url('/BloodTransfusionForm') }}" method="post">
			{{ csrf_field() }}
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Name:</label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text"  name="patient_name" id="patient_name" value="{{ old('patient_name') }}" >
					@if($errors->has('patient_name'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>IPD No.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="ipd_no" id="ipd_no" value="{{ old('ipd_no') }}" >
					@if($errors->has('ipd_no'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
					@endif
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Age:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}" >
					@if($errors->has('age'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Sex:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="sex">
						<option value="NA">NA</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
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
					<input type="date" class="form-control" name="date" id="date" value="{{ old('date') }}" >
					@if($errors->has('date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Time:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="time" id="time" value="{{ old('time') }}" >
					@if($errors->has('time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
					@endif
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
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>History of previous BT :</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="history_bt">
						<option value="NA">NA</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
			</div>
		</div>


		<div class="row form-group">
			<div class="col-md-6">
				<label>If adverse reaction during previous transfusion and it's nature :</label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="adv" id="adv" value="{{ old('adv') }}" >
				@if($errors->has('adv'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('adv') }}</div></span>
				@endif
			</div>
		</div>

		<hr>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Blood Bag No.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="blood_bag_no" id="blood_bag_no" value="{{ old('blood_bag_no') }}" >
					@if($errors->has('blood_bag_no'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('blood_bag_no') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Blood Group:</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="blood_bag_group">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
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
					<select class="form-control" id="prod_name" name="prod_name">
							<option value="whole_blood"> Whole Blood </option>
							<option value="PCV"> PCV </option>
							<option value="PRC"> PRC </option>
							<option value="FFP"> FFP </option>
							<option value="SDP"> SDP </option>
							<option value="Cryoprecipitate"> Cryoprecipitate </option>
							<option value="OtherOther"> Other </option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Name of Blood Bank:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="name_blood_bank" id="name_blood_bank1" value="{{ old('name_blood_bank') }}" >
					@if($errors->has('name_blood_bank'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('name_blood_bank') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Date of Expiry:</label>
				</div>
				<div class="col-md-6">
					<input type="date" class="form-control" name="expiry_date" id="expiry_date" value="{{ old('expiry_date') }}" >
					@if($errors->has('expiry_date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('expiry_date') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Checked by Dr.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="checked_by" id="checked_by" value="{{ old('checked_by') }}" >
					@if($errors->has('checked_by'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('checked_by') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Unit Nurse:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="unit_nurse" id="unit_nurse" value="{{ old('unit_nurse') }}" >
					@if($errors->has('unit_nurse'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('unit_nurse') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>BT Started at:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="start_time" id="start_time" value="{{ old('start_time') }}" >
					@if($errors->has('start_time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('start_time') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Stopped at:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="end_time" id="end_time" value="{{ old('end_time') }}" >
					@if($errors->has('end_time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('end_time') }}</div></span>
					@endif
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
						<td><input type="time" class="form-control" name="01_01" id="01_01"></td value="{{ old('01_01') }}" >
						<td><input type="text" class="form-control" name="01_02" id="01_02"></td value="{{ old('01_02') }}" >
						<td><input type="text" class="form-control" name="01_03" id="01_03"></td value="{{ old('01_03') }}" >
						<td><input type="text" class="form-control" name="01_04" id="01_04"></td value="{{ old('01_04') }}" >
						<td><input type="time" class="form-control" name="01_05" id="01_05"></td value="{{ old('01_05') }}" >
						<td><input type="text" class="form-control" name="01_06" id="01_06"></td value="{{ old('01_06') }}" >
						<td><input type="text" class="form-control" name="01_07" id="01_07"></td value="{{ old('01_07') }}" >
						<td><input type="text" class="form-control" name="01_08" id="01_08"></td value="{{ old('01_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="02_01" id="02_01"></td value="{{ old('02_01') }}" >
						<td><input type="text" class="form-control" name="02_02" id="02_02"></td value="{{ old('02_02') }}" >
						<td><input type="text" class="form-control" name="02_03" id="02_03"></td value="{{ old('02_03') }}" >
						<td><input type="text" class="form-control" name="02_04" id="02_04"></td value="{{ old('02_04') }}" >
						<td><input type="time" class="form-control" name="02_05" id="02_05"></td value="{{ old('02_05') }}" >
						<td><input type="text" class="form-control" name="02_06" id="02_06"></td value="{{ old('02_06') }}" >
						<td><input type="text" class="form-control" name="02_07" id="02_07"></td value="{{ old('02_07') }}" >
						<td><input type="text" class="form-control" name="02_08" id="02_08"></td value="{{ old('02_08') }}" >
					</tr>
					<tr>
						<td>During Transfusion</td>
						<td><input type="time" class="form-control" name="03_01" id="03_01"></td value="{{ old('03_01') }}" >
						<td><input type="text" class="form-control" name="03_02" id="03_02"></td value="{{ old('03_02') }}" >
						<td><input type="text" class="form-control" name="03_03" id="03_03"></td value="{{ old('03_03') }}" >
						<td><input type="text" class="form-control" name="03_04" id="03_04"></td value="{{ old('03_04') }}" >
						<td><input type="time" class="form-control" name="03_05" id="03_05"></td value="{{ old('03_05') }}" >
						<td><input type="text" class="form-control" name="03_06" id="03_06"></td value="{{ old('03_06') }}" >
						<td><input type="text" class="form-control" name="03_07" id="03_07"></td value="{{ old('03_07') }}" >
						<td><input type="text" class="form-control" name="03_08" id="03_08"></td value="{{ old('03_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="04_01" id="04_01"></td value="{{ old('04_01') }}" >
						<td><input type="text" class="form-control" name="04_02" id="04_02"></td value="{{ old('04_02') }}" >
						<td><input type="text" class="form-control" name="04_03" id="04_03"></td value="{{ old('04_03') }}" >
						<td><input type="text" class="form-control" name="04_04" id="04_04"></td value="{{ old('04_04') }}" >
						<td><input type="time" class="form-control" name="04_05" id="04_05"></td value="{{ old('04_05') }}" >
						<td><input type="text" class="form-control" name="04_06" id="04_06"></td value="{{ old('04_06') }}" >
						<td><input type="text" class="form-control" name="04_07" id="04_07"></td value="{{ old('04_07') }}" >
						<td><input type="text" class="form-control" name="04_08" id="04_08"></td value="{{ old('04_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="05_01" id="05_01"></td value="{{ old('05_01') }}" >
						<td><input type="text" class="form-control" name="05_02" id="05_02"></td value="{{ old('05_02') }}" >
						<td><input type="text" class="form-control" name="05_03" id="05_03"></td value="{{ old('05_03') }}" >
						<td><input type="text" class="form-control" name="05_04" id="05_04"></td value="{{ old('05_04') }}" >
						<td><input type="time" class="form-control" name="05_05" id="05_05"></td value="{{ old('05_05') }}" >
						<td><input type="text" class="form-control" name="05_06" id="05_06"></td value="{{ old('05_06') }}" >
						<td><input type="text" class="form-control" name="05_07" id="05_07"></td value="{{ old('05_07') }}" >
						<td><input type="text" class="form-control" name="05_08" id="05_08"></td value="{{ old('05_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="06_01" id="06_01"></td value="{{ old('06_01') }}" >
						<td><input type="text" class="form-control" name="06_02" id="06_02"></td value="{{ old('06_02') }}" >
						<td><input type="text" class="form-control" name="06_03" id="06_03"></td value="{{ old('06_03') }}" >
						<td><input type="text" class="form-control" name="06_04" id="06_04"></td value="{{ old('06_04') }}" >
						<td><input type="time" class="form-control" name="06_05" id="06_05"></td value="{{ old('06_05') }}" >
						<td><input type="text" class="form-control" name="06_06" id="06_06"></td value="{{ old('06_06') }}" >
						<td><input type="text" class="form-control" name="06_07" id="06_07"></td value="{{ old('06_07') }}" >
						<td><input type="text" class="form-control" name="06_08" id="06_08"></td value="{{ old('06_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="07_01" id="07_01"></td value="{{ old('07_01') }}" >
						<td><input type="text" class="form-control" name="07_02" id="07_02"></td value="{{ old('07_02') }}" >
						<td><input type="text" class="form-control" name="07_03" id="07_03"></td value="{{ old('07_03') }}" >
						<td><input type="text" class="form-control" name="07_04" id="07_04"></td value="{{ old('07_04') }}" >
						<td><input type="time" class="form-control" name="07_05" id="07_05"></td value="{{ old('07_05') }}" >
						<td><input type="text" class="form-control" name="07_06" id="07_06"></td value="{{ old('07_06') }}" >
						<td><input type="text" class="form-control" name="07_07" id="07_07"></td value="{{ old('07_07') }}" >
						<td><input type="text" class="form-control" name="07_08" id="07_08"></td value="{{ old('07_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="08_01" id="08_01"></td value="{{ old('08_01') }}" >
						<td><input type="text" class="form-control" name="08_02" id="08_02"></td value="{{ old('08_02') }}" >
						<td><input type="text" class="form-control" name="08_03" id="08_03"></td value="{{ old('08_03') }}" >
						<td><input type="text" class="form-control" name="08_04" id="08_04"></td value="{{ old('08_04') }}" >
						<td><input type="time" class="form-control" name="08_05" id="08_05"></td value="{{ old('08_05') }}" >
						<td><input type="text" class="form-control" name="08_06" id="08_06"></td value="{{ old('08_06') }}" >
						<td><input type="text" class="form-control" name="08_07" id="08_07"></td value="{{ old('08_07') }}" >
						<td><input type="text" class="form-control" name="08_08" id="08_08"></td value="{{ old('08_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="09_01" id="09_01"></td value="{{ old('09_01') }}" >
						<td><input type="text" class="form-control" name="09_02" id="09_02"></td value="{{ old('09_02') }}" >
						<td><input type="text" class="form-control" name="09_03" id="09_03"></td value="{{ old('09_03') }}" >
						<td><input type="text" class="form-control" name="09_04" id="09_04"></td value="{{ old('09_04') }}" >
						<td><input type="time" class="form-control" name="09_05" id="09_05"></td value="{{ old('09_05') }}" >
						<td><input type="text" class="form-control" name="09_06" id="09_06"></td value="{{ old('09_06') }}" >
						<td><input type="text" class="form-control" name="09_07" id="09_07"></td value="{{ old('09_07') }}" >
						<td><input type="text" class="form-control" name="09_08" id="09_08"></td value="{{ old('09_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="10_01" id="10_01"></td value="{{ old('10_01') }}" >
						<td><input type="text" class="form-control" name="10_02" id="10_02"></td value="{{ old('10_02') }}" >
						<td><input type="text" class="form-control" name="10_03" id="10_03"></td value="{{ old('10_03') }}" >
						<td><input type="text" class="form-control" name="10_04" id="10_04"></td value="{{ old('10_04') }}" >
						<td><input type="time" class="form-control" name="10_05" id="10_05"></td value="{{ old('10_05') }}" >
						<td><input type="text" class="form-control" name="10_06" id="10_06"></td value="{{ old('10_06') }}" >
						<td><input type="text" class="form-control" name="10_07" id="10_07"></td value="{{ old('10_07') }}" >
						<td><input type="text" class="form-control" name="10_08" id="10_08"></td value="{{ old('10_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="11_01" id="11_01"></td value="{{ old('11_01') }}" >
						<td><input type="text" class="form-control" name="11_02" id="11_02"></td value="{{ old('11_02') }}" >
						<td><input type="text" class="form-control" name="11_03" id="11_03"></td value="{{ old('11_03') }}" >
						<td><input type="text" class="form-control" name="11_04" id="11_04"></td value="{{ old('11_04') }}" >
						<td><input type="time" class="form-control" name="11_05" id="11_05"></td value="{{ old('11_05') }}" >
						<td><input type="text" class="form-control" name="11_06" id="11_06"></td value="{{ old('11_06') }}" >
						<td><input type="text" class="form-control" name="11_07" id="11_07"></td value="{{ old('11_07') }}" >
						<td><input type="text" class="form-control" name="11_08" id="11_08"></td value="{{ old('11_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="12_01" id="12_01"></td value="{{ old('12_01') }}" >
						<td><input type="text" class="form-control" name="12_02" id="12_02"></td value="{{ old('12_02') }}" >
						<td><input type="text" class="form-control" name="12_03" id="12_03"></td value="{{ old('12_03') }}" >
						<td><input type="text" class="form-control" name="12_04" id="12_04"></td value="{{ old('12_04') }}" >
						<td><input type="time" class="form-control" name="12_05" id="12_05"></td value="{{ old('12_05') }}" >
						<td><input type="text" class="form-control" name="12_06" id="12_06"></td value="{{ old('12_06') }}" >
						<td><input type="text" class="form-control" name="12_07" id="12_07"></td value="{{ old('12_07') }}" >
						<td><input type="text" class="form-control" name="12_08" id="12_08"></td value="{{ old('12_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="13_01" id="13_01"></td value="{{ old('13_01') }}" >
						<td><input type="text" class="form-control" name="13_02" id="13_02"></td value="{{ old('13_02') }}" >
						<td><input type="text" class="form-control" name="13_03" id="13_03"></td value="{{ old('13_03') }}" >
						<td><input type="text" class="form-control" name="13_04" id="13_04"></td value="{{ old('13_04') }}" >
						<td><input type="time" class="form-control" name="13_05" id="13_05"></td value="{{ old('13_05') }}" >
						<td><input type="text" class="form-control" name="13_06" id="13_06"></td value="{{ old('13_06') }}" >
						<td><input type="text" class="form-control" name="13_07" id="13_07"></td value="{{ old('13_07') }}" >
						<td><input type="text" class="form-control" name="13_08" id="13_08"></td value="{{ old('13_08') }}" >
					</tr>
					<tr>
						<td>After Transfusion</td>
						<td><input type="time" class="form-control" name="14_01" id="14_01"></td value="{{ old('14_01') }}" >
						<td><input type="text" class="form-control" name="14_02" id="14_02"></td value="{{ old('14_02') }}" >
						<td><input type="text" class="form-control" name="14_03" id="14_03"></td value="{{ old('14_03') }}" >
						<td><input type="text" class="form-control" name="14_04" id="14_04"></td value="{{ old('14_04') }}" >
						<td><input type="time" class="form-control" name="14_05" id="14_05"></td value="{{ old('14_05') }}" >
						<td><input type="text" class="form-control" name="14_06" id="14_06"></td value="{{ old('14_06') }}" >
						<td><input type="text" class="form-control" name="14_07" id="14_07"></td value="{{ old('14_07') }}" >
						<td><input type="text" class="form-control" name="14_08" id="14_08"></td value="{{ old('14_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="15_01" id="15_01"></td value="{{ old('15_01') }}" >
						<td><input type="text" class="form-control" name="15_02" id="15_02"></td value="{{ old('15_02') }}" >
						<td><input type="text" class="form-control" name="15_03" id="15_03"></td value="{{ old('15_03') }}" >
						<td><input type="text" class="form-control" name="15_04" id="15_04"></td value="{{ old('15_04') }}" >
						<td><input type="time" class="form-control" name="15_05" id="15_05"></td value="{{ old('15_05') }}" >
						<td><input type="text" class="form-control" name="15_06" id="15_06"></td value="{{ old('15_06') }}" >
						<td><input type="text" class="form-control" name="15_07" id="15_07"></td value="{{ old('15_07') }}" >
						<td><input type="text" class="form-control" name="15_08" id="15_08"></td value="{{ old('15_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="16_01" id="16_01"></td value="{{ old('16_01') }}" >
						<td><input type="text" class="form-control" name="16_02" id="16_02"></td value="{{ old('16_02') }}" >
						<td><input type="text" class="form-control" name="16_03" id="16_03"></td value="{{ old('16_03') }}" >
						<td><input type="text" class="form-control" name="16_04" id="16_04"></td value="{{ old('16_04') }}" >
						<td><input type="time" class="form-control" name="16_05" id="16_05"></td value="{{ old('16_05') }}" >
						<td><input type="text" class="form-control" name="16_06" id="16_06"></td value="{{ old('16_06') }}" >
						<td><input type="text" class="form-control" name="16_07" id="16_07"></td value="{{ old('16_07') }}" >
						<td><input type="text" class="form-control" name="16_08" id="16_08"></td value="{{ old('16_08') }}" >
					</tr>
					<tr>
						<td></td>
						<td><input type="time" class="form-control" name="17_01" id="17_01"></td value="{{ old('17_01') }}" >
						<td><input type="text" class="form-control" name="17_02" id="17_02"></td value="{{ old('17_02') }}" >
						<td><input type="text" class="form-control" name="17_03" id="17_03"></td value="{{ old('17_03') }}" >
						<td><input type="text" class="form-control" name="17_04" id="17_04"></td value="{{ old('17_04') }}" >
						<td><input type="time" class="form-control" name="17_05" id="17_05"></td value="{{ old('17_05') }}" >
						<td><input type="text" class="form-control" name="17_06" id="17_06"></td value="{{ old('17_06') }}" >
						<td><input type="text" class="form-control" name="17_07" id="17_07"></td value="{{ old('17_07') }}" >
						<td><input type="text" class="form-control" name="17_08" id="17_08"></td value="{{ old('17_08') }}" >
					</tr>
				</tbody>
			</table>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Minor Reaction : </label>
					</div>
					<div class="col-md-6">
						<select class="form-group" name="minor_reaction">
							<option value="skin_rash">Skin Rash</option>
							<option value="urticaria">Urticaria</option>
							<option value="body_ache">Body Ache</option>
							<option value="nausea">Nausea</option>
							<option value="abdominal_pain">Abdominal Pain</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Moderate : </label>
					</div>
					<div class="col-md-6">
						<select class="form-group" name="moderate">
							<option value="fever">Fever</option>
							<option value="vomiting">Vomiting</option>
							<option value="shivering">Shivering</option>
							<option value="drowsieness">Drowsieness</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Major Reaction : </label>
					</div>
					<div class="col-md-6">
						<select class="form-group" name="major_reactions">
							<option value="chest_pain">Chest Pain</option>
							<option value="breathlessness">Breathlessness</option>
							<option value="decreased_urine_output">Decreased Urine Output</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Time of onset of Adverse Reactions : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time_adverse" value="{{ old('time_adverse') }}"/>
					</div>
				</div>
			</div>


		</div>
		<div class="row form-group">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
