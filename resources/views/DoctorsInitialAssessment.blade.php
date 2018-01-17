@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Doctor's Initial Assessment</h1>
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

<form action="/DoctorsInitialAssessment" method="post">
	{{ csrf_field() }}

	<div class="row form-group">
		<div class="col-md-10">
			<div class="col-md-4">
				<label>History : </label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="history" value="{{ old('history') }}" />
				@if($errors->has('history'))
						<span class="help-block">{{ $errors->first('history') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="col-md-4">
				<label>Past History : </label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="past_history" value="{{ old('past_history') }}"/>
				@if($errors->has('past_history'))
						<span class="help-block">{{ $errors->first('past_history') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="col-md-4">
				<label>Allergic History : </label>
			</div>
			<div class="col-md-8">
				<input class="form-control" type="text" name="allergic_history" value="{{ old('allergic_history') }}"/>
				@if($errors->has('allergic_history'))
						<span class="help-block">{{ $errors->first('allergic_history') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row">
		<h3>In case of Road Accident : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Name of Informant : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="name_informant" value="{{ old('name_informant') }}"/>
				@if($errors->has('name_informant'))
						<span class="help-block">{{ $errors->first('name_informant') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Brought By : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="brought_by" value="{{ old('brought_by') }}"/>
				@if($errors->has('brought_by'))
						<span class="help-block">{{ $errors->first('brought_by') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Place of Accident : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="place_of_accident" value="{{ old('place_of_accident') }}" />
				@if($errors->has('place_of_accident'))
						<span class="help-block">{{ $errors->first('place_of_accident') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Time : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="time" name="current_time" value="{{ old('current_time') }}"/>
				@if($errors->has('current_time'))
						<span class="help-block">{{ $errors->first('current_time') }}</span>
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
	      <input class="form-control" type="date" name="current_date" value="{{ old('current_date') }}"/>
				@if($errors->has('current_date'))
						<span class="help-block">{{ $errors->first('current_date') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>MLC Done outside or not : </label>
			</div>
			<div class="col-md-6">
	      <select class="form-control" name="mlc" value="{{ old('mlc') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('mlc'))
						<span class="help-block">{{ $errors->first('mlc') }}</span>
				@endif
			</div>
		</div>
	</div>

	<hr />
	<div class="row">
		<h3>History Of : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>LOC : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="loc" value="{{ old('loc') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('loc'))
						<span class="help-block">{{ $errors->first('loc') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>ENT Bleeding : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="ent_bleeding" value="{{ old('ent_bleeding') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('ent_bleeding'))
						<span class="help-block">{{ $errors->first('ent_bleeding') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Seizures : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="seizures" value="{{ old('seizures') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('seizures'))
						<span class="help-block">{{ $errors->first('seizures') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Vomiting : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="vomiting" value="{{ old('vomiting') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('vomiting'))
						<span class="help-block">{{ $errors->first('vomiting') }}</span>
				@endif
			</div>
		</div>
	</div>
	<hr />

	<div class="row">
		<h3>Vitals : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pulse : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="pulse" value="{{ old('pulse') }}"/>
				@if($errors->has('pulse'))
						<span class="help-block">{{ $errors->first('pulse') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Temprature : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="temp" value="{{ old('temp') }}" />
				@if($errors->has('temp'))
						<span class="help-block">{{ $errors->first('temp') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>BP : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="bp" value="{{ old('bp') }}"/>
				@if($errors->has('bp'))
						<span class="help-block">{{ $errors->first('bp') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>SPO2 : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="spo2" value="{{ old('spo2') }}"/>
				@if($errors->has('spo2'))
						<span class="help-block">{{ $errors->first('spo2') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>RBS : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="rbs" value="{{ old('rbs') }}"/>
				@if($errors->has('rbs'))
						<span class="help-block">{{ $errors->first('rbs') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pain : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="pain" value="{{ old('pain') }}">
					<option value="no">No</option>
					<option value="yes">Yes</option>
				</select>
				@if($errors->has('pain'))
						<span class="help-block">{{ $errors->first('pain') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>GCS : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_e" value="{{ old('gcs_e') }}"/>
				@if($errors->has('gcs_e'))
						<span class="help-block">{{ $errors->first('gcs_e') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_m" value="{{ old('gcs_m') }}"/>
				@if($errors->has('gcs_m'))
						<span class="help-block">{{ $errors->first('gcs_m') }}</span>
				@endif
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_v" value="{{ old('gcs_v') }}"/>
				@if($errors->has('gcs_v'))
						<span class="help-block">{{ $errors->first('gcs_v') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Systematic Examination : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="systematic_examination" value="{{ old('systematic_examination') }}"/>
				@if($errors->has('systematic_examination'))
						<span class="help-block">{{ $errors->first('systematic_examination') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Any other Findings or Injuries : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="any_other" value="{{ old('any_other') }}"/>
				@if($errors->has('any_other'))
						<span class="help-block">{{ $errors->first('any_other') }}</span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Treated on Admission : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="treated_on_admission" value="{{ old('treated_on_admission') }}"/>
				@if($errors->has('treated_on_admission'))
						<span class="help-block">{{ $errors->first('treated_on_admission') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Shifted To : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="shifted_to" value="{{ old('shifted_to') }}"/>
				@if($errors->has('shifted_to'))
						<span class="help-block">{{ $errors->first('shifted_to') }}</span>
				@endif
			</div>
		</div>
	</div>
	<div class="row form-group">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>


</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>

@endsection
