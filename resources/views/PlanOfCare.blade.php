@extends('layouts.app')

@section('content')
<!-- Changed -->

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Plan of Care</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/48 <br>
					REV. No. 0.2 <br>
					WEF 31-01-2015
				</div>
			</div>
		</div>
	</div>
	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

	<form action="{{ url('/PlanOfCare') }}" method="post">
		{{ csrf_field() }}
		<div class="row form-group">
			<div class="col-md-6">
				<label>Diagnosis</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="diagnosis" value="{{ old('diagnosis') }}" />
				@if($errors->has('diagnosis'))
						<span class="help-block">{{ $errors->first('diagnosis') }}</span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Patient's Needs and Treatment Goals : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="needs_goals" value="{{ old('needs_goals') }}"/>
				@if($errors->has('needs_goals'))
						<span class="help-block">{{ $errors->first('needs_goals') }}</span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Treatment Plan : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="treatment_plan" value="{{ old('treatment_plan') }}"/>
				@if($errors->has('treatment_plan'))
						<span class="help-block">{{ $errors->first('treatment_plan') }}</span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Preventive Aspects : </label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" name="preventive_aspects" value="{{ old('preventive_aspects') }}"></textarea>
				@if($errors->has('preventive_aspects'))
						<span class="help-block">{{ $errors->first('preventive_aspects') }}</span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Progress</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<input class="form-control" type="text" name="progress_00" value="{{ old('progress_00') }}"/>
							@if($errors->has('progress_00'))
								<span class="help-block">{{ $errors->first('progress_00') }}</span>
							@endif
					</td>
						<td><input class="form-control" type="date" name="date_00" value="{{ old('date_00') }}"/>
							@if($errors->has('date_00'))
									<span class="help-block">{{ $errors->first('date_00') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_01" value="{{ old('progress_01') }}"/>
							@if($errors->has('progress_01'))
									<span class="help-block">{{ $errors->first('progress_01') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_01" value="{{ old('date_01') }}"/>
							@if($errors->has('date_01'))
									<span class="help-block">{{ $errors->first('date_01') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_02" value="{{ old('progress_02') }}"/>
							@if($errors->has('progress_02'))
									<span class="help-block">{{ $errors->first('progress_02') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_02" value="{{ old('date_02') }}"/>
							@if($errors->has('date_02'))
									<span class="help-block">{{ $errors->first('date_02') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_03" value="{{ old('progress_03') }}"/>
							@if($errors->has('progress_03'))
									<span class="help-block">{{ $errors->first('progress_03') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_03" value="{{ old('date_03') }}"/>
							@if($errors->has('date_03'))
									<span class="help-block">{{ $errors->first('date_03') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_04" value="{{ old('progress_04') }}"/>
							@if($errors->has('progress_04'))
									<span class="help-block">{{ $errors->first('progress_04') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_04" value="{{ old('date_04') }}"/>
							@if($errors->has('date_04'))
									<span class="help-block">{{ $errors->first('date_04') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_05" value="{{ old('progress_05') }}"/>
							@if($errors->has('progress_05'))
									<span class="help-block">{{ $errors->first('progress_05') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_05" value="{{ old('date_05') }}"/>
							@if($errors->has('date_05'))
									<span class="help-block">{{ $errors->first('date_05') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_06" value="{{ old('progress_06') }}"/>
							@if($errors->has('progress_06'))
									<span class="help-block">{{ $errors->first('progress_06') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_06" value="{{ old('date_06') }}"/>
							@if($errors->has('date_06'))
									<span class="help-block">{{ $errors->first('date_06') }}</span>
							@endif
						</td>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="progress_07" value="{{ old('progress_07') }}"/>
							@if($errors->has('progress_07'))
									<span class="help-block">{{ $errors->first('progress_07') }}</span>
							@endif
						</td>
						<td><input class="form-control" type="date" name="date_07" value="{{ old('date_07') }}"/>
							@if($errors->has('date_07'))
									<span class="help-block">{{ $errors->first('date_07') }}</span>
							@endif
						</td>
					</tr>
				</tbody>
			</table>

			<div class="row form-group">
				<div class="col-md-6">
					<label>Note on Discharge : </label>
				</div>
				<div class="col-md-6">
					<textarea class="form-control" name="note_discharge" value="{{ old('note_discharge') }}"></textarea>
					@if($errors->has('note_discharge'))
							<span class="help-block">{{ $errors->first('note_discharge') }}</span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<button class="form-control btn btn-success" type="submit" >Submit</button>
		</div>
	</form>


</div>




@endsection
