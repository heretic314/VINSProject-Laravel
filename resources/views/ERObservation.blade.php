@extends('layouts.app')

@section('content')
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

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

	<form action="ERObservation" method="post">
		{{ csrf_field() }}
		<div class="row form-group">
			<div class="col-md-10">
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Date : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="date" name="date" value="{{ old('date') }}" />
							@if($errors->has('date'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Triage Category : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="text" name="triage_category" value="{{ old('triage_category') }}" />
							@if($errors->has('triage_category'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('triage_category') }}</div></span>
							@endif
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-2">
				<textarea class="form-control" name="addressograph" placeholder="Addressograph" value="{{ old('addressograph') }}"></textarea>
				@if($errors->has('addressograph'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('addressograph') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Diagnosis : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="diagnosis" value="{{ old('diagnosis') }}"/>
					@if($errors->has('diagnosis'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>Investigations : </label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" type="text" name="investigation" value="{{ old('investigation') }}" />
					@if($errors->has('investigation'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('investigation') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Time</th>
						<th><input class="form-control" type="time" name="time_01" value="{{ old('time_01') }}" />
							@if($errors->has('time_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_01') }}</div></span>
							@endif
						</th>
						<th><input class="form-control" type="time" name="time_02" value="{{ old('time_02') }}" />
							@if($errors->has('time_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
							@endif
						</th>
						<th><input class="form-control" type="time" name="time_03" value="{{ old('time_03') }}" />
							@if($errors->has('time_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_03') }}</div></span>
							@endif
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Pulse </th>
						<td><input class="form-control" type="text" name="pulse_01" value="{{ old('pulse_01') }}" />
							@if($errors->has('pulse_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="pulse_02" value="{{ old('pulse_02') }}" />
							@if($errors->has('pulse_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="pulse_03" value="{{ old('pulse_03') }}" />
							@if($errors->has('pulse_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_03') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<th>BP </th>
						<td><input class="form-control" type="text" name="bp_01" value="{{ old('bp_01') }}" />
							@if($errors->has('bp_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('bp_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="bp_02" value="{{ old('bp_02') }}" />
							@if($errors->has('bp_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('bp_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="bp_03" value="{{ old('bp_03') }}" />
							@if($errors->has('bp_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('bp_03') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<th>SPO2 </th>
						<td><input class="form-control" type="text" name="spo2_01" value="{{ old('spo2_01') }}" />
							@if($errors->has('spo2_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="spo2_02" value="{{ old('spo2_02') }}" />
							@if($errors->has('spo2_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="spo2_03" value="{{ old('spo2_03') }}" />
							@if($errors->has('spo2_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_03') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<th>RR </th>
						<td><input class="form-control" type="text" name="rr_01" value="{{ old('rr_01') }}" />
							@if($errors->has('rr_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('rr_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="rr_02" value="{{ old('rr_02') }}" />
							@if($errors->has('rr_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('rr_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="rr_03" value="{{ old('rr_03') }}" />
							@if($errors->has('rr_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('rr_03') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<th>GCS </th>
						<td><input class="form-control" type="text" name="gcs_01" value="{{ old('gcs_01') }}" />
							@if($errors->has('gcs_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="gcs_02" value="{{ old('gcs_02') }}" />
							@if($errors->has('gcs_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="gcs_03" value="{{ old('gcs_03') }}" />
							@if($errors->has('gcs_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('gcs_03') }}</div></span>
							@endif
						</td>
					</tr>
					<tr>
						<th>Temprature </th>
						<td><input class="form-control" type="text" name="temp_01" value="{{ old('temp_01') }}" />
							@if($errors->has('temp_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('temp_01') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="temp_02" value="{{ old('temp_02') }}" />
							@if($errors->has('temp_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('temp_02') }}</div></span>
							@endif
						</td>
						<td><input class="form-control" type="text" name="temp_03" value="{{ old('temp_03') }}" />
							@if($errors->has('temp_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('temp_03') }}</div></span>
							@endif
						</td>
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
						<th> QTY</TH>
						<th> Start Time</th>
						<th> End Time</th>
						<th> Remarks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="iv_infusion_01" class="form-control" value="{{ old('iv_infusion_01') }}">
							@if($errors->has('iv_infusion_01'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('iv_infusion_01') }}</div></span>
						@endif
					 </td>
						<td><input type="text" name="qty_01" class="form-control" value="{{ old('qty_01') }}">
							@if($errors->has('qty_01'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('qty_01') }}</div></span>
						@endif
					 </td>
						<td><input type="time" name="time_start_01"  class="form-control" value="{{ old('time_start_01') }}">
							@if($errors->has('time_start_01'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_start_01') }}</div></span>
						@endif
					</td>
						<td><input type="time" name="time_end_01"  class="form-control" value="{{ old('time_end_01') }}">
							@if($errors->has('time_end_01'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_end_01') }}</div></span>
						@endif
					</td>
						<td><input type="text" name="remarks_01" class="form-control" value="{{ old('remarks_01') }}">
							@if($errors->has('remarks_01'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks_01') }}</div></span>
						@endif
					 </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_02" class="form-control" value="{{ old('iv_infusion_02') }}">
							@if($errors->has('iv_infusion_02'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('iv_infusion_02') }}</div></span>
						@endif
					 </td>
						<td><input type="text" name="qty_02" class="form-control" value="{{ old('qty_02') }}">
							@if($errors->has('qty_02'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('qty_02') }}</div></span>
						@endif
					 </td>
						<td><input type="time" name="time_start_02"  class="form-control" value="{{ old('time_start_02') }}">
							@if($errors->has('time_start_02'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_start_02') }}</div></span>
						@endif
					</td>
						<td><input type="time" name="time_end_02"  class="form-control" value="{{ old('time_end_02') }}">
							@if($errors->has('time_end_02'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_end_02') }}</div></span>
						@endif
					</td>
						<td><input type="text" name="remarks_02" class="form-control" value="{{ old('remarks_02') }}"
							>@if($errors->has('remarks_02'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks_02') }}</div></span>
						@endif
					 </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_03" class="form-control" value="{{ old('iv_infusion_03') }}">
							@if($errors->has('iv_infusion_03'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('iv_infusion_03') }}</div></span>
						@endif
					 </td>
						<td><input type="text" name="qty_03" class="form-control" value="{{ old('qty_03') }}">
							@if($errors->has('qty_03'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('qty_03') }}</div></span>
						@endif
					 </td>
						<td><input type="time" name="time_start_03"  class="form-control" value="{{ old('time_start_03') }}">
							@if($errors->has('time_start_03'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_start_03') }}</div></span>
						@endif
					</td>
						<td><input type="time" name="time_end_03"  class="form-control" value="{{ old('time_end_03') }}">
							@if($errors->has('time_end_03'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_end_03') }}</div></span>
						@endif
					</td>
						<td><input type="text" name="remarks_03" class="form-control" value="{{ old('remarks_03') }}">
							@if($errors->has('remarks_03'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks_03') }}</div></span>
						@endif
					 </td>
					</tr>
					<tr>
						<td><input type="text" name="iv_infusion_04" class="form-control" value="{{ old('iv_infusion_04') }}">
							@if($errors->has('iv_infusion_04'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('iv_infusion_04') }}</div></span>
						@endif
					 </td>
						<td><input type="text" name="qty_04" class="form-control" value="{{ old('qty_04') }}">
							@if($errors->has('qty_04'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('qty_04') }}</div></span>
						@endif
					 </td>
						<td><input type="time" name="time_start_04"  class="form-control" value="{{ old('time_start_04') }}">
							@if($errors->has('time_start_04'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_start_04') }}</div></span>
						@endif
					</td>
						<td><input type="time" name="time_end_04"  class="form-control" value="{{ old('time_end_04') }}">
							@if($errors->has('time_end_04'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_end_04') }}</div></span>
						@endif
					</td>
						<td><input type="text" name="remarks_04" class="form-control" value="{{ old('remarks_04') }}">
							@if($errors->has('remarks_04'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks_04') }}</div></span>
						@endif
					 </td>
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
						<td><input type="text" name="name_drug_01" class="form-control" value="{{ old('name_drug_01') }}">
							@if($errors->has('name_drug_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_drug_01') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="dosage_01" class="form-control" value="{{ old('dosage_01') }}">
							@if($errors->has('dosage_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('dosage_01') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="routine_01" class="form-control" value="{{ old('routine_01') }}">
							@if($errors->has('routine_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('routine_01') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="administration_by_01"  class="form-control" value="{{ old('administration_by_01') }}">
							@if($errors->has('administration_by_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('administration_by_01') }}</div></span>
							@endif
						 </td>
						<td><input type="time" name="time_01" class="form-control" value="{{ old('time_01') }}">
							@if($errors->has('time_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_01') }}</div></span>
							@endif
						 </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_02" class="form-control" value="{{ old('name_drug_02') }}">
							@if($errors->has('name_drug_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_drug_02') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="dosage_02" class="form-control" value="{{ old('dosage_02') }}">
							@if($errors->has('dosage_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('dosage_02') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="routine_02" class="form-control" value="{{ old('routine_02') }}">
							@if($errors->has('routine_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('routine_02') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="administration_by_02"  class="form-control" value="{{ old('administration_by_02') }}">
							@if($errors->has('administration_by_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('administration_by_02') }}</div></span>
							@endif
						 </td>
						<td><input type="time" name="time_02" class="form-control" value="{{ old('time_02') }}">
							@if($errors->has('time_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
							@endif
						 </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_03" class="form-control" value="{{ old('name_drug_03') }}">
							@if($errors->has('name_drug_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_drug_03') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="dosage_03" class="form-control" value="{{ old('dosage_03') }}">
							@if($errors->has('dosage_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('dosage_03') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="routine_03" class="form-control" value="{{ old('routine_03') }}">
							@if($errors->has('routine_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('routine_03') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="administration_by_03"  class="form-control" value="{{ old('administration_by_03') }}">
							@if($errors->has('administration_by_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('administration_by_03') }}</div></span>
							@endif
						 </td>
						<td><input type="time" name="time_03" class="form-control" value="{{ old('time_03') }}">
							@if($errors->has('time_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_03') }}</div></span>
							@endif
						 </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_04" class="form-control" value="{{ old('name_drug_04') }}">
							@if($errors->has('name_drug_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_drug_04') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="dosage_04" class="form-control" value="{{ old('dosage_04') }}">
							@if($errors->has('dosage_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('dosage_04') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="routine_04" class="form-control" value="{{ old('routine_04') }}">
							@if($errors->has('routine_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('routine_04') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="administration_by_04"  class="form-control" value="{{ old('administration_by_04') }}">
							@if($errors->has('administration_by_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('administration_by_04') }}</div></span>
							@endif
						 </td>
						<td><input type="time" name="time_04" class="form-control" value="{{ old('time_04') }}">
							@if($errors->has('time_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_04') }}</div></span>
							@endif
						 </td>
				  </tr>
					<tr>
						<td><input type="text" name="name_drug_05" class="form-control" value="{{ old('name_drug_05') }}">
							@if($errors->has('name_drug_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('name_drug_05') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="dosage_05" class="form-control" value="{{ old('dosage_05') }}">
							@if($errors->has('dosage_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('dosage_05') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="routine_05" class="form-control" value="{{ old('routine_05') }}">
							@if($errors->has('routine_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('routine_05') }}</div></span>
							@endif
						 </td>
						<td><input type="text" name="administration_by_05"  class="form-control" value="{{ old('administration_by_05') }}">
							@if($errors->has('administration_by_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('administration_by_05') }}</div></span>
							@endif
						 </td>
						<td><input type="time" name="time_05" class="form-control" value="{{ old('time_05') }}">
							@if($errors->has('time_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_05') }}</div></span>
							@endif
						 </td>
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
		      <input class="form-control" name="patient_shifted_to"  value="{{ old('patient_shifted_to') }}" />
					@if($errors->has('patient_shifted_to'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('patient_shifted_to') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
		      <label>ER nurse :</label>
				</div>
				<div class="col-md-6">
		      <input class="form-control" name="er_nurse"  value="{{ old('er_nurse') }}" />
					@if($errors->has('er_nurse'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('er_nurse') }}</div></span>
					@endif
				</div>
			</div>
		</div>
		<div class="form-group text-center">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
</body>
@endsection
