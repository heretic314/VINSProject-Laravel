@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Appointment Book</h1>
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
				@foreach ($errors->keys() as $error)
							 <li>{{ $error }}</li>
					 @endforeach
		@endif

		<form action="{{ url('/AppointmentBook') }}" method="post">
			{{ csrf_field() }}
			<div class="col-md-6">

			</div>
			<div class="form-group col-md-6">
				<div class="col-md-6 text-right">
					<h4>Date:</h4>
				</div>
				<div class="col-md-6">
					<input type="date" class="form-control" name="date" value="{{ old('date') }}">
					@if($errors->has('date'))
					<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
					@endif
				</div>
			</div>
			<div class="row form-group">
				<table class="table table-bordered table-responsive" name="appointmentbook">
					<thead>
						<tr>
							<th class="text-center" width="40%">Name of Patient</th>
							<th class="text-center" width="20%">Contact No.</th>
							<th class="text-center">Appointment Time</th>
							<th class="text-center" width="30%">Consultant Name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" name="name_of_patient" class="form-control" value="{{ old('name_of_patient') }}">
								@if($errors->has('name_of_patient'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('name_of_patient') }}</div></span>
								@endif
							</td>
							<td>
								<input type="text" name="contact_no" class="form-control" value="{{ old('contact_no') }}">
								@if($errors->has('contact_no'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('contact_no') }}</div></span>
								@endif
							</td>
							<td>
								<input type="time" name="appointment_time" class="form-control" value="{{ old('appointment_time') }}">
								@if($errors->has('appointment_time'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('appointment_time') }}</div></span>
								@endif
							</td>
							<td>
								<input type="text" name="consultant_name" class="form-control" value="{{ old('consultant_name') }}">
								@if($errors->has('consultant_name'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('consultant_name') }}</div></span>
								@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="form-group text-center">
			  <button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>
@endsection
