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
		<div class="col-md-10">
			<div class="col-md-6">
				<div class="row">
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
				<div class="row">
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
		</div>
		<div class="col-md-2">
			<textarea class="form-control" name="addressograph" placeholder="Addressograph Here"></textarea>
		</div>
	</div>
	<hr>

	<div class="row form-group form-check">
		<table class="table table-bordered table-condensed small" >
			<thead>

				<tr>
					<th colspan="3" rowspan="2">
						<div class="form-inline text-">
							<label>Date:</label>
							<input type="date" class="form-control" name="date" id="date" value="{{ old('date') }}">
							@if($errors->has('date'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
							@endif
						</div>
					</th>

					<th colspan="10" class="text-center">RTF/Liquid</th>
					<th rowspan="3">Remarks</th>
				</tr>

				<tr>
					<th class="text-center">S-1 (6 AM)</th>
					<th class="text-center">S-2 (8 AM)</th>
					<th class="text-center">S-3 (10 AM)</th>
					<th class="text-center">S-4 (12 PM)</th>
					<th class="text-center">S-5 (2 PM)</th>
					<th class="text-center">S-6 (4 PM)</th>
					<th class="text-center">S-7 (6 PM)</th>
					<th class="text-center">S-8 (8 PM)</th>
					<th class="text-center">S-9 (10 PM)</th>
					<th class="text-center">S-10 (12 AM)</th>
				</tr>

				<tr>
					<th class="text-center">Room. No.</th>
					<th class="text-center">Patient Name & UHID No.</th>
					<th class="text-center">Diet Suggested By (Consultant/RMO)</th>
					<th class="text-center">M.Tea (6.30 AM)</th>
					<th class="text-center">M.B/F (9 AM)</th>
					<th class="text-center">Soup (11.30 AM)</th>
					<th class="text-center">Lunch (12.30 PM)</th>
					<th></th>
					<th class="text-center">E.Snacks (3.30 PM)</th>
					<th class="text-center">Juice (5 PM)</th>
					<th class="text-center">Dinner (7.30 PM)</th>
					<th class="text-center">Milk (9.30 PM)</th>
					<th class="text-center" />
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><input class="form-control" type="text" name="room_no" value="{{ old('room_no') }}"/>
						@if($errors->has('room_no'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('room_no') }}</div></span>
						@endif


					</td>


					<td><input class="form-control" type="text" name="patient_name" value="{{ old('patient_name') }}" />
						@if($errors->has('patient_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
						@endif

					</td>


					<td><input class="form-control" type="text" name="diet_suggested_by" value="{{ old('diet_suggested_by') }}"/>
						@if($errors->has('diet_suggested_by'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('diet_suggested_by') }}</div></span>
						@endif
					</td>



					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_tea" value="{{ old('m_tea') }}" /></td>
					@if($errors->has('m_tea'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('m_tea') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_breakfast" value="{{ old('m_breakfast') }}"/></td>
					@if($errors->has('m_breakfast'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('m_breakfast') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="soup" value="{{ old('soup') }}"/></td>
					@if($errors->has('soup'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('soup') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="lunch" value="{{ old('lunch') }}" /></td>
					@if($errors->has('lunch'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('lunch') }}</div></span>
					@endif
					<td></td>


					<td class="text-center"><input class="form-check-input" type="checkbox" name="e_snacks" value="{{ old('e_snacks') }}"/></td>
					@if($errors->has('e_snacks'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('e_snacks') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="juice" value="{{ old('juice') }}"/></td>
					@if($errors->has('juice'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('juice') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="dinner" value="{{ old('dinner') }}"/></td>
					@if($errors->has('dinner'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('dinner') }}</div></span>
					@endif


					<td class="text-center"><input class="form-check-input" type="checkbox" name="milk" value="{{ old('milk') }}"/></td>
					@if($errors->has('milk'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('milk') }}</div></span>
					@endif
					<td></td>


					<td><input class="form-control" type="text" name="remarks" value="{{ old('remarks') }}"/></td>
					@if($errors->has('remarks'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('remarks') }}</div></span>
					@endif
				</tr>




			</tbody>
		</table>
		<!--
		<div class="text-center">
			<input type="button" name="addrow" onclick="addRow()" class="btn" value="Add A Row">
		</div>
	-->
	<div class="row form-group">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>

	</div>
	</form>
</div>
</html>
@endsection
