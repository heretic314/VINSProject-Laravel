@extends('layouts.app')

@section('content')
<div class="container">

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
		<form action="{{ url('/CPRFormat') }}" method="post">
			{{ csrf_field() }}
			@if ($errors->any())
					<div class="alert alert-danger" role="alert">
							Please fix the following errors
					</div>
					@foreach($errors->keys() as $error)
					<li>{{$error}}</li>
					@endforeach

			@endif



		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Name:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="patient_name" id="patient_name" value="{{ old('patient_name') }}">

					@if($errors->has('patient_name'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
					@endif

				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>IPD No.:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="ipd_no" id="ipd_no" value="{{ old('ipd_no') }}">

						@if($errors->has('ipd_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Age:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="age" id="age" value="{{ old('age') }}">

						@if($errors->has('age'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
						@endif

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
					<select class="form-control" name="sex" value="{{ old('sex') }}">
						<option value="NA" @if(old('sex') == 'NA')  selected = 'selected' @endif>NA</option>
						<option value="Male" @if(old('sex') == 'Male')  selected = 'selected' @endif>Male</option>
						<option value="Female" @if(old('sex') == 'Female')  selected = 'selected' @endif>Female</option>
					</select>
					@if($errors->has('sex'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('sex') }}</div></span>
					@endif
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
					<input type="date" class="form-control" name="date" id="date" value="{{ old('date') }}">
					@if($errors->has('date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
					@endif

				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Start Time:</label>
				</div>
				<div class="col-md-6">
					<input type="time" class="form-control" name="start_time" id="start_time" value="{{ old('start_time') }}">
					@if($errors->has('start_time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('start_time') }}</div></span>
					@endif

				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Bed No.:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="bed_no" id="bed_no" value="{{ old('bed_no') }}">
					@if($errors->has('bed_no'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('bed_no') }}</div></span>
					@endif

				</div>
			</div>
		</div>

		<hr>

		<table class="table table-bordered">
			<tr>
				<th>Diagnosis</th>
				<td  colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="diagnosis" id="diagnosis" value="{{ old('diagnosis') }}">
						@if($errors->has('diagnosis'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th>Name of Doctor leading CPR</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="name_doctor" id="name_doctor" value="{{ old('name_doctor') }}">
						@if($errors->has('name_doctor'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('name_doctor') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th>CPR Team</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="cpr_team" id="cpr_team" value="{{ old('cpr_team') }}">
						@if($errors->has('cpr_team'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('cpr_team') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th>Intubation Time (if done)</th>
				<td colspan="6">
					<div class="text-right">
						<input type="time" class="form-control" name="intubation_time" id="intubation_time" value="{{ old('intubation_time') }}">
						@if($errors->has('intubation_time'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('intubation_time') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th rowspan="2">Defribillator (if used how many shocks and joules)</th>
				<th>ECG Rhythm</th>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_00" id="defib_rhythm_00" value="{{ old('defib_rhythm_00') }}">
					@if($errors->has('defib_rhythm_00'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_rhythm_00') }}</div></span>
					@endif

				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_01" id="defib_rhythm_01" value="{{ old('defib_rhythm_01') }}">
					@if($errors->has('defib_rhythm_01'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_rhythm_01') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_02" id="defib_rhythm_02" value="{{ old('defib_rhythm_02') }}">
					@if($errors->has('defib_rhythm_02'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_rhythm_02') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_03" id="defib_rhythm_03" value="{{ old('defib_rhythm_03') }}">
					@if($errors->has('defib_rhythm_03'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_rhythm_03') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_rhythm_04" id="defib_rhythm_04" value="{{ old('defib_rhythm_04') }}">
					@if($errors->has('defib_rhythm_04'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_rhythm_04') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<th>DC Shock</th>
				<td>
					<input type="text" class="form-control" name="defib_dc_00" id="defib_dc_00" value="{{ old('defib_dc_00') }}">
					@if($errors->has('defib_dc_00'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_dc_00') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_01" id="defib_dc_01" value="{{ old('defib_dc_01') }}">
					@if($errors->has('defib_dc_01'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_dc_01') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_02" id="defib_dc_02" value="{{ old('defib_dc_02') }}">
					@if($errors->has('defib_dc_02'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_dc_02') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_03" id="defib_dc_03" value="{{ old('defib_dc_03') }}">
					@if($errors->has('defib_dc_03'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_dc_03') }}</div></span>
					@endif
				</td>
				<td>
					<input type="text" class="form-control" name="defib_dc_04" id="defib_dc_04" value="{{ old('defib_dc_04') }}">
					@if($errors->has('defib_dc_04'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('defib_dc_04') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<th rowspan="6">Medication</th>
				<th>Time</th>
				<th colspan="5">Medicines</th>
			</tr>
			<tr>
				<td>
					<input type="time" class="form-control" name="medication_time_00" id="medication_time_00" value="{{ old('medication_time_00') }}">
					@if($errors->has('medication_time_00'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_time_00') }}</div></span>
					@endif
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_01" id="medication_name_01" value="{{ old('medication_time_01') }}">
					@if($errors->has('medication_name_01'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_name_01') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<input type="time" class="form-control" name="medication_time_10" id="medication_time_10" value="{{ old('medication_time_10') }}">
					@if($errors->has('medication_time_10'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_time_10') }}</div></span>
					@endif
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_11" id="medication_name_11" value="{{ old('medication_time_11') }}">
					@if($errors->has('medication_name_11'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_name_11') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<input type="time" class="form-control" name="medication_time_20" id="medication_time_20" value="{{ old('medication_time_20') }}">
					@if($errors->has('medication_time_20'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_time_20') }}</div></span>
					@endif
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_21" id="medication_name_21" value="{{ old('medication_time_21') }}">
					@if($errors->has('medication_name_21'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_name_21') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<input type="time" class="form-control" name="medication_time_30" id="medication_time_30"  value="{{ old('medication_time_30') }}">
					@if($errors->has('medication_time_30'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_time_30') }}</div></span>
					@endif
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_31" id="medication_name_31" value="{{ old('medication_time_31') }}">
					@if($errors->has('medication_name_31'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_name_31') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<td>
					<input type="time" class="form-control" name="medication_time_40" id="medication_time_40" value="{{ old('medication_time_40') }}">
					@if($errors->has('medication_time_40'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_time_40') }}</div></span>
					@endif
				</td>
				<td colspan="5">
					<input type="text" class="form-control" name="medication_name_41" id="medication_name_41" value="{{ old('medication_time_41') }}">
					@if($errors->has('medication_name_41'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('medication_name_41') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<th>Total time of Resuscitation</th>
				<td colspan="6">
					<div class="text-right">
						<input type="time" class="form-control" name="total_time" id="total_time"  value="{{ old('total_time') }}">
						@if($errors->has('total_time'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('total_time') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th>Outcome</th>
				<td colspan="6">
					<div class="text-right">
						<input type="text" class="form-control" name="outcome" id="outcome" value="{{ old('outcome') }}">
						@if($errors->has('outcome'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('outcome') }}</div></span>
						@endif
					</div>
				</td>
			</tr>
			<tr>
				<th>Doctor Name </th>
				<td colspan="6">
					<input type="text" class="form-control" name="doctor_name" id="doctor_name" value="{{ old('doctor_name') }}">
					@if($errors->has('doctor_name'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('doctor_name') }}</div></span>
					@endif
				</td>
			</tr>
			<tr>
				<th>Remarks</th>
				<td colspan="6">
					<div class="text-right">
						<textarea class="form-control" rows="3" name="remarks">
							{{ old('remarks') }}
						@if($errors->has('remarks'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks') }}</div></span>
						@endif
						</textarea>
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
					<input type="text" class="form-control" name="consultant_counseled" id="consultant_counseled" value="{{ old('consultant_counseled') }}">
					@if($errors->has('consultant_counseled'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('consultant_counseled') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Relative's Name:</label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="relative_name" id="relative_name" value="{{ old('relative_name') }}">
					@if($errors->has('relative_name'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('relative_name') }}</div></span>
					@endif
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
							@if($errors->has('initial_time'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('initial_time') }}</div></span>
							@endif
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>0 minutes</th>
						<td>
							<input type="text" class="form-control" name="_00_01" id="_00_01" value="{{ old('_00_01') }}">
							@if($errors->has('_00_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_02" id="_00_02" value="{{ old('_00_02') }}">
							@if($errors->has('_00_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_03" id="_00_03" value="{{ old('_00_03') }}">
							@if($errors->has('_00_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_04" id="_00_04" value="{{ old('_00_04') }}">
							@if($errors->has('_00_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_05" id="_00_05" value="{{ old('_00_05') }}">
							@if($errors->has('_00_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_06" id="_00_06" value="{{ old('_00_06') }}">
							@if($errors->has('_00_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_00_07" id="_00_07" value="{{ old('_00_07') }}">
							@if($errors->has('_00_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_00_08" placeholder="Medicine">
								{{old('_00_08')}}

							</textarea>@if($errors->has('_00_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_00_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>5 minutes</th>
						<td>
							<input type="text" class="form-control" name="_01_01" id="_01_01" value="{{ old('_01_01') }}">
							@if($errors->has('_01_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_02" id="_01_02" value="{{ old('_01_02') }}">
							@if($errors->has('_01_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_03" id="_01_03" value="{{ old('_01_03') }}">
							@if($errors->has('_01_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_04" id="_01_04" value="{{ old('_01_04') }}">
							@if($errors->has('_01_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_05" id="_01_05" value="{{ old('_01_05') }}">
							@if($errors->has('_01_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_06" id="_01_06" value="{{ old('_01_06') }}">
							@if($errors->has('_01_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_01_07" id="_01_07" value="{{ old('_01_07') }}">
							@if($errors->has('_01_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_01_08" placeholder="Medicine">
								{{old('_01_08')}}

							</textarea>@if($errors->has('_01_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_01_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>10 minutes</th>
						<td>
							<input type="text" class="form-control" name="_02_01" id="_02_01" value="{{ old('_02_01') }}">
							@if($errors->has('_02_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_02" id="_02_02" value="{{ old('_02_02') }}">
							@if($errors->has('_02_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_03" id="_02_03" value="{{ old('_02_03') }}">
							@if($errors->has('_02_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_04" id="_02_04" value="{{ old('_02_04') }}">
							@if($errors->has('_02_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_05" id="_02_05" value="{{ old('_02_05') }}">
							@if($errors->has('_02_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_06" id="_02_06" value="{{ old('_02_06') }}">
							@if($errors->has('_02_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_02_07" id="_02_07" value="{{ old('_02_07') }}">
							@if($errors->has('_02_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_02_08" placeholder="Medicine">
								{{ old('_02_08') }}

							</textarea>@if($errors->has('_02_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_02_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>15 minutes</th>
						<td>
							<input type="text" class="form-control" name="_03_01" id="_03_01" value="{{ old('_03_01') }}">
							@if($errors->has('_03_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_02" id="_03_02" value="{{ old('_03_02') }}">
							@if($errors->has('_03_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_03" id="_03_03" value="{{ old('_03_03') }}">
							@if($errors->has('_03_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_04" id="_03_04" value="{{ old('_03_04') }}">
							@if($errors->has('_03_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_05" id="_03_05" value="{{ old('_03_05') }}">
							@if($errors->has('_03_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_06" id="_03_06" value="{{ old('_03_06') }}">
							@if($errors->has('_03_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_03_07" id="_03_07" value="{{ old('_03_07') }}">>
							@if($errors->has('_03_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_03_08" placeholder="Medicine">
								{{ old('_03_08') }}

							</textarea>@if($errors->has('_03_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_03_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>20 minutes</th>
						<td>
							<input type="text" class="form-control" name="_04_01" id="_04_01" value="{{ old('_04_01') }}">
							@if($errors->has('_04_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_02" id="_04_02" value="{{ old('_04_02') }}">
							@if($errors->has('_04_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_03" id="_04_03" value="{{ old('_04_03') }}">
							@if($errors->has('_04_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_04" id="_04_04" value="{{ old('_04_04') }}">
							@if($errors->has('_04_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_05" id="_04_05" value="{{ old('_04_05') }}">
							@if($errors->has('_04_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_06" id="_04_06" value="{{ old('_04_06') }}">
							@if($errors->has('_04_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_04_07" id="_04_07" value="{{ old('_04_07') }}">
							@if($errors->has('_04_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_04_08" placeholder="Medicine">
								{{ old('_04_08') }}

							</textarea>@if($errors->has('_04_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_04_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>25 minutes</th>
						<td>
							<input type="text" class="form-control" name="_05_01" id="_05_01" value="{{ old('_05_01') }}">
							@if($errors->has('_05_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_02" id="_05_02" value="{{ old('_05_02') }}">
							@if($errors->has('_05_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_03" id="_05_03" value="{{ old('_05_03') }}">
							@if($errors->has('_05_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_04" id="_05_04" value="{{ old('_05_04') }}">
							@if($errors->has('_05_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_05" id="_05_05" value="{{ old('_05_05') }}">
							@if($errors->has('_05_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_06" id="_05_06" value="{{ old('_05_06') }}">
							@if($errors->has('_05_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_05_07" id="_05_07" value="{{ old('_05_07') }}">
							@if($errors->has('_05_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_05_08" placeholder="Medicine" >
								{{ old('_05_08') }}

							</textarea>@if($errors->has('_05_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_05_08') }}</div></span>
							@endif
						</td>
					</tr>

					<tr>
						<th>30 minutes</th>
						<td>
							<input type="text" class="form-control" name="_06_01" id="_06_01"  value="{{ old('_06_01') }}">
							@if($errors->has('_06_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_01') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_02" id="_06_02"  value="{{ old('_06_02') }}">
							@if($errors->has('_06_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_02') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_03" id="_06_03"  value="{{ old('_06_03') }}">
							@if($errors->has('_06_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_03') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_04" id="_06_04"  value="{{ old('_06_04') }}">
							@if($errors->has('_06_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_04') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_05" id="_06_05"  value="{{ old('_06_05') }}">
							@if($errors->has('_06_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_05') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_06" id="_06_06"  value="{{ old('_06_06') }}">
							@if($errors->has('_06_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_06') }}</div></span>
							@endif
						</td>
						<td>
							<input type="text" class="form-control" name="_06_07" id="_06_07"  value="{{ old('_06_07') }}">
							@if($errors->has('_06_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_07') }}</div></span>
							@endif
						</td>
						<td>
							<textarea class="form-control" cols="2" name="_06_08" placeholder="Medicine">
								 {{ old('_06_08') }}

							</textarea>@if($errors->has('_06_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('_06_08') }}</div></span>
							@endif
						</td>
					</tr>

				</tbody>
			</table>
		</div>

		<div class="row form-group">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
</body>
</html>
@endsection
