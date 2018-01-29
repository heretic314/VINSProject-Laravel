@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Infusion Therapy Chart</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/6 <br>
					REV. No. 0.0 <br>
					WEF 01-08-2014
				</div>
			</div>
		</div>
	</div>
  @if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors
      </div>
  @endif
	<form action="{{ url('/InfusionTherapyChart') }}" method="post">
		{{ csrf_field() }}
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Patient Name : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" name="patient_name" value="{{ old('patient_name') }}"/>
          @if($errors->has('patient_name'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>IPD No : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" name="ipd_no" value="{{old('ipd_no')}}" />
          @if($errors->has('ipd_no'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Age : </label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text" name="age" value="{{old('age')}}" />
            @if($errors->has('age'))
    						<span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
    				@endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Sex : </label>
          </div>
          <div class="col-md-6">
            <select required class="form-control" name="sex">
              <option disabled selected hidden value="">---</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Attending Consultant : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="attending_consultant" value="{{ old('attending_consultant') }}" />
          @if($errors->has('attending_consultant'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('attending_consultant') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Date</th>
            <th>Name & Strength</th>
            <th>Volume</th>
            <th>Additions to Infusion</th>
            <th>Rate of infusion</th>
            <th>Time Started</th>
            <th>Time Over</th>
          </tr>
        </thead>
        <tbody>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_01" value="{{ old('date_01') }}" />
              @if($errors->has('date_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_01" value="{{ old('name_str_01') }}"/>
              @if($errors->has('name_str_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_01" value="{{ old('volume_01') }}"/>
              @if($errors->has('volume_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_01" value="{{ old('additions_01') }}"/>
              @if($errors->has('additions_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_01" value="{{ old('rate_01') }}"/>
              @if($errors->has('rate_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_01" value="{{ old('timestart_01') }}"/>
              @if($errors->has('timestart_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_01') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_01" value="{{ old('timeend_01') }}"/>
              @if($errors->has('timeend_01'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_01') }}</div></span>
      				@endif
            </td>
          </tr>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_02" value="{{ old('date_02') }}" />
              @if($errors->has('date_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_02" value="{{ old('name_str_02') }}"/>
              @if($errors->has('name_str_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_02" value="{{ old('volume_02') }}"/>
              @if($errors->has('volume_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_02" value="{{ old('additions_02') }}"/>
              @if($errors->has('additions_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_02" value="{{ old('rate_02') }}"/>
              @if($errors->has('rate_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_02" value="{{ old('timestart_02') }}"/>
              @if($errors->has('timestart_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_02') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_02" value="{{ old('timeend_02') }}"/>
              @if($errors->has('timeend_02'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_02') }}</div></span>
      				@endif
            </td>
          </tr>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_03" value="{{ old('date_03') }}" />
              @if($errors->has('date_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_03" value="{{ old('name_str_03') }}"/>
              @if($errors->has('name_str_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_03" value="{{ old('volume_03') }}"/>
              @if($errors->has('volume_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_03" value="{{ old('additions_03') }}"/>
              @if($errors->has('additions_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_03" value="{{ old('rate_03') }}"/>
              @if($errors->has('rate_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_03" value="{{ old('timestart_03') }}"/>
              @if($errors->has('timestart_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_03') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_03" value="{{ old('timeend_03') }}"/>
              @if($errors->has('timeend_03'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_03') }}</div></span>
      				@endif
            </td>
          </tr>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_04" value="{{ old('date_04') }}" />
              @if($errors->has('date_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_04" value="{{ old('name_str_04') }}"/>
              @if($errors->has('name_str_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_04" value="{{ old('volume_04') }}"/>
              @if($errors->has('volume_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_04" value="{{ old('additions_04') }}"/>
              @if($errors->has('additions_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_04" value="{{ old('rate_04') }}"/>
              @if($errors->has('rate_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_04" value="{{ old('timestart_04') }}"/>
              @if($errors->has('timestart_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_04') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_04" value="{{ old('timeend_04') }}"/>
              @if($errors->has('timeend_04'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_04') }}</div></span>
      				@endif
            </td>
          </tr>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_05" value="{{ old('date_05') }}" />
              @if($errors->has('date_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_05" value="{{ old('name_str_05') }}"/>
              @if($errors->has('name_str_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_05" value="{{ old('volume_05') }}"/>
              @if($errors->has('volume_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_05" value="{{ old('additions_05') }}"/>
              @if($errors->has('additions_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_05" value="{{ old('rate_05') }}"/>
              @if($errors->has('rate_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_05" value="{{ old('timestart_05') }}"/>
              @if($errors->has('timestart_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_05') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_05" value="{{ old('timeend_05') }}"/>
              @if($errors->has('timeend_05'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_05') }}</div></span>
      				@endif
            </td>
          </tr>
          <tr class="form-group">
            <td>
              <input class="form-control" type="date" name="date_06" value="{{ old('date_06') }}" />
              @if($errors->has('date_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('date_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="name_str_06" value="{{ old('name_str_06') }}"/>
              @if($errors->has('name_str_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('name_str_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="volume_06" value="{{ old('volume_06') }}"/>
              @if($errors->has('volume_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('volume_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="additions_06" value="{{ old('additions_06') }}"/>
              @if($errors->has('additions_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('additions_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="text" name="rate_06" value="{{ old('rate_06') }}"/>
              @if($errors->has('rate_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('rate_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timestart_06" value="{{ old('timestart_06') }}"/>
              @if($errors->has('timestart_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timestart_06') }}</div></span>
      				@endif
            </td>
            <td>
              <input class="form-control" type="time" name="timeend_06" value="{{ old('timeend_06') }}"/>
              @if($errors->has('timeend_06'))
      						<span class="help-block"><div class="text-danger">{{ $errors->first('timeend_06') }}</div></span>
      				@endif
            </td>
          </tr>
        </tbody>
      </table>
    </div>
		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
