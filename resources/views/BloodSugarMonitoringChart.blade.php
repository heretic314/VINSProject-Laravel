@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Blood Sugar Monitoring Chart Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/36 <br>
					REV. No. 0.1 <br>
					WEF 01-10-2014 <br>
					PAGE NO. 01 OF 02
				</div>
			</div>
		</div>
	</div>

	@if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors
      </div>
  @endif
	<form action="{{ url('/BloodSugarMonitoringChart') }}" method="post">
			{{ csrf_field() }}

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Patient's Name:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="patient_name" id="patient_name" value="{{ old('patient_name') }}" >
            @if($errors->has('patient_name'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('patient_name') }}</div></span>
            @endif
          </div></div>


      			<div class="col-md-6">
      				<div class="col-md-6">
      					<label>Bed No:</label>
      				</div>
      				<div class="col-md-6">
      					<input class="form-control" type="text"  name="bed_no" id="bed_no" value="{{ old('bed_no') }}" >
      					@if($errors->has('bed_no'))
      							<span class="help-block"><div class="text-danger">{{ $errors->first('bed_no') }}</div></span>
      					@endif
      				</div></div></div>

                <div class="row form-group">
          			<div class="col-md-4">
          				<div class="col-md-6">
          					<label>IPD No:</label>
          				</div>
          				<div class="col-md-6">
          					<input class="form-control" type="text"  name="ipd_no" id="ipd_no" value="{{ old('ipd_no') }}" >
          					@if($errors->has('ipd_no'))
          							<span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
          					@endif
          				</div></div>


              			<div class="col-md-4">
              				<div class="col-md-6">
              					<label>Age:</label>
              				</div>
              				<div class="col-md-6">
              					<input class="form-control" type="text"  name="age" id="age" value="{{ old('age') }}" >
              					@if($errors->has('age'))
              							<span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
              					@endif
              				</div></div>
                      <div class="col-md-4">
                        <div class="col-md-6">
                					<label>Sex:</label>
                				</div>
                				<div class="col-md-6">
                					<select class="form-control" name="sex" value="{{ old('sex') }}">
                						<option value="NA" @if(old('sex') == 'NA')  selected = 'selected' @endif>NA</option>
                						<option value="Male" @if(old('sex') == 'Male')  selected = 'selected' @endif>Male</option>
                						<option value="Female" @if(old('sex') == 'Female')  selected = 'selected' @endif>Female</option>
                					</select>
                					@if($errors->has('sex'))
                							<span class="help-block"><div class="text-danger">{{ $errors->first('sex') }}</div></span>
                					@endif
                				</div></div></div>

                        <div class="row form-group"><hr>
                    		  <table class="table table-bordered">
                    		    <thead>
                    			  <tr>
                    				<th>Date</th>
                    				<th>Time</th>
                    				<th>Blood Sugar Level</th>
                    				<th>Insulin(Unit)</th>
                            <th>Name & Sign</th>
                    			  </tr>
                    			</thead>
                    			<tbody>
                            <tbody>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_00" value="{{ old('date_00') }}"/>
                                  @if($errors->has('date_00'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_00') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_00" value="{{ old('time_00') }}"/>
                                  @if($errors->has('time_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_00') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_00" value="{{ old('bloodsugar_level_00') }}"/>
                                  @if($errors->has('bloodsugar_level_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_00') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_00" value="{{ old('insulin_00') }}"/>
                                  @if($errors->has('insulin_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_00') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_00" value="{{ old('name_sign_00') }}"/>
                                  @if($errors->has('name_sign_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_00') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_01" value="{{ old('date_01') }}"/>
                                  @if($errors->has('date_01'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_01') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_01" value="{{ old('time_01') }}"/>
                                  @if($errors->has('time_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_01') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_01" value="{{ old('bloodsugar_level_01') }}"/>
                                  @if($errors->has('bloodsugar_level_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_01') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_01" value="{{ old('insulin_01') }}"/>
                                  @if($errors->has('insulin_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_01') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_01" value="{{ old('name_sign_01') }}"/>
                                  @if($errors->has('name_sign_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_01') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_02" value="{{ old('date_02') }}"/>
                                  @if($errors->has('date_02'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_02') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_02" value="{{ old('time_02') }}"/>
                                  @if($errors->has('time_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_02" value="{{ old('bloodsugar_level_02') }}"/>
                                  @if($errors->has('bloodsugar_level_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_02') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_02" value="{{ old('insulin_02') }}"/>
                                  @if($errors->has('insulin_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_02') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_02" value="{{ old('name_sign_02') }}"/>
                                  @if($errors->has('name_sign_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_02') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_03" value="{{ old('date_03') }}"/>
                                  @if($errors->has('date_03'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_03') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_03" value="{{ old('time_03') }}"/>
                                  @if($errors->has('time_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_03') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_03" value="{{ old('bloodsugar_level_03') }}"/>
                                  @if($errors->has('bloodsugar_level_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_03') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_03" value="{{ old('insulin_03') }}"/>
                                  @if($errors->has('insulin_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_03') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_03" value="{{ old('name_sign_03') }}"/>
                                  @if($errors->has('name_sign_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_03') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_04" value="{{ old('date_04') }}"/>
                                  @if($errors->has('date_04'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_04') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_04" value="{{ old('time_04') }}"/>
                                  @if($errors->has('time_04'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_04') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_04" value="{{ old('bloodsugar_level_04') }}"/>
                                  @if($errors->has('bloodsugar_level_04'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_04') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_04" value="{{ old('insulin_04') }}"/>
                                  @if($errors->has('insulin_04'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_04') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_04" value="{{ old('name_sign_04') }}"/>
                                  @if($errors->has('name_sign_04'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_04') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_05" value="{{ old('date_05') }}"/>
                                  @if($errors->has('date_05'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_05') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_05" value="{{ old('time_05') }}"/>
                                  @if($errors->has('time_05'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_05') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_05" value="{{ old('bloodsugar_level_05') }}"/>
                                  @if($errors->has('bloodsugar_level_05'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_05') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_05" value="{{ old('insulin_05') }}"/>
                                  @if($errors->has('insulin_05'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_05') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_05" value="{{ old('name_sign_05') }}"/>
                                  @if($errors->has('name_sign_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_00') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_06" value="{{ old('date_06') }}"/>
                                  @if($errors->has('date_06'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_06') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_06" value="{{ old('time_06') }}"/>
                                  @if($errors->has('time_06'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_06') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_06" value="{{ old('bloodsugar_level_06') }}"/>
                                  @if($errors->has('bloodsugar_level_06'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_06') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_06" value="{{ old('insulin_06') }}"/>
                                  @if($errors->has('insulin_06'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_06') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_06" value="{{ old('name_sign_06') }}"/>
                                  @if($errors->has('name_sign_06'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_06') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_07" value="{{ old('date_07') }}"/>
                                  @if($errors->has('date_07'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_07') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_07" value="{{ old('time_07') }}"/>
                                  @if($errors->has('time_07'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_07') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_07" value="{{ old('bloodsugar_level_07') }}"/>
                                  @if($errors->has('bloodsugar_level_07'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_07') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_07" value="{{ old('insulin_07') }}"/>
                                  @if($errors->has('insulin_07'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_07') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_07" value="{{ old('name_sign_07') }}"/>
                                  @if($errors->has('name_sign_07'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_07') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_08" value="{{ old('date_08') }}"/>
                                  @if($errors->has('date_08'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_08') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_08" value="{{ old('time_08') }}"/>
                                  @if($errors->has('time_08'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_08') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_08" value="{{ old('bloodsugar_level_08') }}"/>
                                  @if($errors->has('bloodsugar_level_08'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_08') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_08" value="{{ old('insulin_08') }}"/>
                                  @if($errors->has('insulin_08'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_08') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_08" value="{{ old('name_sign_08') }}"/>
                                  @if($errors->has('name_sign_08'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_08') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>

                                <td>
                                  <input class="form-control" type="date" name="date_09" value="{{ old('date_09') }}"/>
                                  @if($errors->has('date_09'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_09') }}</div></span>
                                  @endif
                              </td>
                                <td><input class="form-control" type="time" name="time_09" value="{{ old('time_09') }}"/>
                                  @if($errors->has('time_09'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_09') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="bloodsugar_level_09" value="{{ old('bloodsugar_level_09') }}"/>
                                  @if($errors->has('bloodsugar_level_09'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('bloodsugar_level_09') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="insulin_09" value="{{ old('insulin_09') }}"/>
                                  @if($errors->has('insulin_09'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('insulin_09') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="name_sign_09" value="{{ old('name_sign_09') }}"/>
                                  @if($errors->has('name_sign_09'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_09') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                            </tbody></table>
                          </div>
                          <div class="row form-group text-center">
                            <button class="form-group btn btn-success" type="submit">Submit</button>
                          </div>
                        </form>
                      </div>
                      @endsection
