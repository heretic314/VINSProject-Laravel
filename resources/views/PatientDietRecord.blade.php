@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Patient Diet Record</h1>
				</div>
				<div>
					<div class="text-right">
						DOC NO. FMT/HIC/09 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<form action="/PatientDietRecord" method="post">
				{{ csrf_field() }}

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Dietician / Nurses Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type = "text" name = "dietician_name" value="{{ old('history') }}">

						@if($errors->has('dietician_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('dietician_name') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Date : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type = "date" name = "date" value="{{ old('history') }}" />

						@if($errors->has('date'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Time : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="time" name="time" value="{{ old('history') }}" />

						@if($errors->has('time'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Bed No : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="bed_no" value="{{ old('history') }}"/>

						@if($errors->has('bed_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('bed_no') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>UHID No : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="uhid_no" value="{{ old('history') }}"/>

						@if($errors->has('uhid_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('uhid_no') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Patient Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="patient_name" value="{{ old('history') }}"/>

						@if($errors->has('patient_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Diagnosis : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="diagnosis" value="{{ old('history') }}" />

						@if($errors->has('diagnosis'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Consultant's Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="consultants_name" value="{{ old('history') }}" />

						@if($errors->has('consultants_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('consultants_name') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Diet to be Given : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="diet_to_be_given" value="{{ old('history') }}" />

						@if($errors->has('date'))
								<span class="help-block"><div class="diet_to_be_given-danger">{{ $errors->first('diet_to_be_given') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Remarks : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="remarks" value="{{ old('history') }}"/>

						@if($errors->has('remarks'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks') }}</div></span>
						@endif

					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<input class="btn btn-success" type="submit" />
					</div>
				</div>
			</div>
		</form>
	</div>
