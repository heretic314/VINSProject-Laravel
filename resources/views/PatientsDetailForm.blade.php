@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Patient Details Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						F/OPD/01
					</div>
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif


		<form action="{{ url('/PatientsDetailForm') }}" method = "post">
			{{ csrf_field() }}

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="date">Date : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type = "date" id = "date" name="date" value="{{ old('date') }}">

						@if($errors->has('date'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="time">Time : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time" id="time" value="{{ old('time') }}"/>

						@if($errors->has('time'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
						@endif

					</div>
				</div>
			</div>
			<hr />
			<div class="row form-group">
				<div class="col-md-4">
						<div class="col-md-6">
							<label for="first_name" class="control-label">First Name : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type = "text" id = "first_name" name="first_name" value="{{ old('first_name') }}"/>

							@if($errors->has('first_name'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('first_name') }}</div></span>
							@endif

						</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="middle_name" class="control-label">Middle Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="middle_name" name="middle_name" value="{{ old('middle_name') }}"/>

						@if($errors->has('middle_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('middle_name') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"/>

						@if($errors->has('last_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('last_name') }}</div></span>
						@endif

					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="date_of_birth">Date of Birth: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"/>

						@if($errors->has('date_of_birth'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('date_of_birth') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="sex">Sex: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" id="sex" name="sex" >
							<option value="male" @if(old('sex') == 'male')  selected = 'selected' @endif>Male</option>
							<option value="female" @if(old('sex')  == 'female')  selected = 'selected' @endif>Female</option>
						</select>

						@if($errors->has('sex'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('sex') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label for="address">Address: </label>
					</div>
					<div class="col-md-6">
						@if($errors->has('address'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('address') }}</div></span>
						@endif
			      <input class="form-control" type="text" id="address" name="address" value="{{ old('address') }}" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="phone_no">Phone no.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="phone_no" name="phone_no" value="{{ old('phone_no') }}"/>

						@if($errors->has('phone_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('phone_no') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="mobile_no">Mobile no.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') }}"/>

						@if($errors->has('mobile_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('mobile_no') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="reference_dr">Reference Dr.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="reference_dr" name="reference_dr" value="{{ old('reference_dr') }}"/>

						@if($errors->has('reference_dr'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('reference_dr') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="consulting_dr" name="consulting_dr" value="{{ old('consulting_dr') }}"/>

						@if($errors->has('consulting_dr'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('consulting_dr') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="case">Case: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" id="case" name="case" value="{{ old('case') }}">
							<option value="new" @if(old('case') == 'new')  selected = 'selected' @endif>New</option>
							<option value="old"  @if(old('case') == 'old')  selected = 'selected' @endif>Old</option>
						</select>

						@if($errors->has('case'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('case') }}</div></span>
						@endif


					</div>
				</div>
			</div>

			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>

		</form>
	</div>
