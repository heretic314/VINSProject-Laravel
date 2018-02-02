@extends('layouts.app')

@section('content')
<div class="container">
	<form  action="{{ url('/DailyDietForm') }}" method = "post">
		{{ csrf_field() }}
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Daily Diet Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/DS/08 <br>
					REV. No. 0.2 <br>
					WEF 26-04-2017
				</div>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Floor Name : </label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="floor_name" id="floor_name" value="{{ old('floor_name') }}">
				@if($errors->has('floor_name'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('floor_name') }}</div></span>
				@endif

			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Cross Verified By:</label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="cross_verified_by" id="cross_verified_by" value="{{ old('cross_verified_by') }}">
				@if($errors->has('cross_verified_by'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('cross_verified_by') }}</div></span>
				@endif

			</div>
		</div>
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
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Patient Name : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="patient_name" value="{{ old('patient_name') }}" />
					@if($errors->has('patient_name'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
					@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Room No : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="room_no" value="{{ old('room_no') }}"/>
					@if($errors->has('room_no'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('room_no') }}</div></span>
					@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Diet Suggested By (Consultant/RMO) : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="diet_suggested_by" value="{{ old('diet_suggested_by') }}"/>
					@if($errors->has('diet_suggested_by'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('diet_suggested_by') }}</div></span>
					@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<table class="table table-bordered" style="table-layout:fixed;">
			<thead>
				<tr>
					<th class="text-center" colspan="11">RTF / Liquid</th>
				</tr>
				<tr>
					<th>S-1 (6 AM)	</th>
					<th>S-2 (8 AM)	</th>
					<th>S-3 (10 AM)	</th>
					<th>S-4 (12 PM)	</th>
					<th>S-5 (2 PM)	</th>
					<th>S-6 (4 PM)	</th>
					<th>S-7 (6 PM)	</th>
					<th>S-8 (8 PM)	</th>
					<th>S-9 (10 PM)	</th>
					<th>S-10 (12 AM)</th>
					<th></th>
				</tr>
				<tr>
					<th>M.Tea (6.30 AM)</th>
					<th>M.B/F (9 AM)</th>
					<th>Soup (11.30 AM)</th>
					<th>Lunch (12.30 PM)</th>
					<th></th>
					<th>E.Snacks (3.30 PM)</th>
					<th>Juice (5 PM)</th>
					<th>Dinner (7.30 PM)</th>
					<th>Milk (9.30 PM)</th>
					<th />
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input class="form-check-input" type="checkbox" name="m_tea" value="yes" />
						@if($errors->has('m_tea'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('m_tea') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="m_breakfast" value="yes"/>
						@if($errors->has('m_breakfast'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('m_breakfast') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="soup" value="yes"/>
						@if($errors->has('soup'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('soup') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="lunch" value="yes" />
						@if($errors->has('lunch'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('lunch') }}</div></span>
						@endif
					</td>
					<td></td>
					<td>
						<input class="form-check-input" type="checkbox" name="e_snacks" value="yes"/>
						@if($errors->has('e_snacks'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('e_snacks') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="juice" value="yes"/>
						@if($errors->has('juice'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('juice') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="dinner" value="yes"/>
						@if($errors->has('dinner'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('dinner') }}</div></span>
						@endif
					</td>
					<td>
						<input class="form-check-input" type="checkbox" name="milk" value="yes"/>
						@if($errors->has('milk'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('milk') }}</div></span>
						@endif
					</td>
					<td></td>
					<td>
						<input class="form-control" type="text" name="remarks" value="{{ old('remakrs') }}"/>
						@if($errors->has('remarks'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('remarks') }}</div></span>
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
</html>
@endsection
