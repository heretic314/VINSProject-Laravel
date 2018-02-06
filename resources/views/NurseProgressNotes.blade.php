@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
			<h1>Nurse'sProgressNotes</h1>
			</div>
			<div class="col-md-4">
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
	<form action="{{ url('/NurseProgressNotes') }}" method="post">
		{{ csrf_field() }}

    <div class="row">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th class="text-center">DATE</th>
            <th class="text-center">TIME</th>
            <th class="text-center">PROGRESS</th>
            <th class="text-center">STAFF NAME</th>
            <th class="text-center">SIGN</th>
          </tr>
       </thead>
        <tbody>

          <tr>
            <td><input class="form-control" type="date" name="date_oo" value="{{ old('date_oo') }}" >
							@if($errors->has('date_oo'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_oo') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_00" value="{{ old('time_00') }}">
							@if($errors->has('time_00'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_00') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_00" value="{{ old('progress_00') }}">
							@if($errors->has('progress_00'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_00') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_00" value="{{ old('staff_name_00') }}">
							@if($errors->has('staff_name_00'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_00') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_00" value="{{ old('sign_00') }}">
							@if($errors->has('sign_00'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_00') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_01" value="{{ old('date_01') }}">
							@if($errors->has('date_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_01') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_01" value="{{ old('time_01') }}">
							@if($errors->has('time_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_01') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_01" value="{{ old('progress_01') }}">
							@if($errors->has('progress_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_01') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_01" value="{{ old('staff_name_01') }}">
							@if($errors->has('staff_name_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_01') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_01" value="{{ old('sign_01') }}">
							@if($errors->has('sign_01'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_01') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_02" value="{{ old('date_02') }}">
							@if($errors->has('date_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_02') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_02" value="{{ old('time_02') }}">
							@if($errors->has('time_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_02" value="{{ old('progress_02') }}">
							@if($errors->has('progress_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_02') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_02" value="{{ old('staff_name_02') }}">
							@if($errors->has('staff_name_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_02') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_02" value="{{ old('sign_02') }}">
							@if($errors->has('sign_02'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_02') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_03" value="{{ old('date_03') }}">
							@if($errors->has('date_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_03') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_03" value="{{ old('time_03') }}">
							@if($errors->has('time_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_03') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_03" value="{{ old('progress_03') }}">
							@if($errors->has('progress_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_03') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_03" value="{{ old('staff_name_03') }}">
							@if($errors->has('staff_name_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_03') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_03" value="{{ old('sign_03') }}">
							@if($errors->has('sign_03'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_03') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_04" value="{{ old('date_04') }}">
							@if($errors->has('date_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_04') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_04" value="{{ old('time_04') }}">
							@if($errors->has('time_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_04') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_04" value="{{ old('progress_04') }}">
							@if($errors->has('progress_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_04') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_04" value="{{ old('staff_name_04') }}">
							@if($errors->has('staff_name_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_04') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_04" value="{{ old('sign_04') }}">
							@if($errors->has('sign_04'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_04') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_05" value="{{ old('date_05') }}">
							@if($errors->has('date_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_05') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_05" value="{{ old('time_05') }}">
							@if($errors->has('time_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_05') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_05" value="{{ old('progress_05') }}">
							@if($errors->has('progress_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_05') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_05" value="{{ old('staff_name_05') }}">
							@if($errors->has('staff_name_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_05') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_05" value="{{ old('sign_05') }}">
							@if($errors->has('sign_05'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_05') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_06" value="{{ old('date_06') }}">
							@if($errors->has('date_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_06') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_06" value="{{ old('time_06') }}">
							@if($errors->has('time_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_06') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_06" value="{{ old('progress_06') }}">
							@if($errors->has('progress_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_06') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_06" value="{{ old('staff_name_06') }}">
							@if($errors->has('staff_name_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_06') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_06" value="{{ old('sign_06') }}">
							@if($errors->has('sign_06'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_06') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_07" value="{{ old('date_07') }}">
							@if($errors->has('date_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_07') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_07" value="{{ old('time_07') }}">
							@if($errors->has('time_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_07') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_07" value="{{ old('progress_07') }}">
							@if($errors->has('progress_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_07') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_07" value="{{ old('staff_name_07') }}">
							@if($errors->has('staff_name_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_07') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_07" value="{{ old('sign_07') }}">
							@if($errors->has('sign_07'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_07') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_08" value="{{ old('date_08') }}">
							@if($errors->has('date_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_08') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_08" value="{{ old('time_08') }}">
							@if($errors->has('time_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_08') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_08" value="{{ old('progress_08') }}">
							@if($errors->has('progress_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_08') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_08" value="{{ old('staff_name_08') }}">
							@if($errors->has('staff_name_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_08') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_08" value="{{ old('sign_08') }}">
							@if($errors->has('sign_08'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_08') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_09" value="{{ old('date_09') }}">
							@if($errors->has('date_09'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_09') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_09" value="{{ old('time_09') }}">
							@if($errors->has('time_09'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_09') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_09" value="{{ old('progress_09') }}">
							@if($errors->has('progress_09'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_09') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_09" value="{{ old('staff_name_09') }}">
							@if($errors->has('staff_name_09'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_09') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_09" value="{{ old('sign_09') }}">
							@if($errors->has('sign_09'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_09') }}</div></span>
							@endif
						</td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_10" value="{{ old('date_10') }}">
							@if($errors->has('date_10'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('date_10') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "time" name="time_10" value="{{ old('time_10') }}">
							@if($errors->has('time_10'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_10') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="progress_10" value="{{ old('progress_10') }}">
							@if($errors->has('progress_10'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('progress_10') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="staff_name_10" value="{{ old('staff_name_10') }}">
							@if($errors->has('staff_name_10'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('staff_name_10') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type = "text" name="sign_10" value="{{ old('sign_10') }}">
							@if($errors->has('sign_10'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('sign_10') }}</div></span>
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
@endsection
