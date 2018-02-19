@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Information Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/27 <br>
					REV. No. 0.0 <br>
					WEF 01-08-2013
				</div>
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
	<form action="{{ url('/CodeBlueEvaluationForm') }}" method="post">
		{{ csrf_field() }}
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="date">Date:</label>
        </div>
        <div class="col-md-6">
          <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
          @if($errors->has('date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
					@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="time">Time:</label>
        </div>
        <div class="col-md-6">
          <input type="time" name="time" id="time" class="form-control" value="{{ old('time') }}">
          @if($errors->has('time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
					@endif
        </div>
      </div>
    </div>
    <div class="row form-group">
			<div class="col-md-6"></div>
			<div class="col-md-6">
        <div class="col-md-6">
          <label for="addressograph">Addressograph</label>
        </div>
        <div class="col-md-6">
          <textarea class="form-control" name="addressograph" id="addressograph" placeholder="Addressograph here">{{ old('addressograph') }}</textarea>
          @if($errors->has('addressograph'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('addressograph') }}</div></span>
					@endif
        </div>
			</div>
		</div>
    <hr>
		<div class="row form-group">
			<h3>Patient information given by Patient himself / Relative of Patient</h3>
		</div>

	  <table class="table table-bordered table-responsive">
	    <thead>
			  <tr>
  				<th>Sr. No.</th>
  				<th>Contents</th>
  				<th>Response</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Do you get pain in chest of breathlessness on walking or after exertion?
						@if($errors->has('_00'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('_00') }}</div></span>
						@endif
					</td>
					<td>
						<div class="form-group">
							<select class="form-control" name="_00">
								<option value="Yes" {{ old('_00')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_00')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>

			  </tr>

			  <tr>
		    <td>2</td>
				<td>Have you suffered in past from high blood pressure, heart disease or angina?
					@if($errors->has('_01'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_01') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_01" >
								<option value="Yes" {{ old('_01')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_01')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				</div>
			 </tr>

			  <tr>
			    <td>3</td>
  				<td>
  					Have you been treated in past or at present for any major illness?
            <div class="">
              If yes, please specify:
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <input type="text" class="form-control" name="major_illness" value="{{ old('major_illness') }}">
              </div>
            </div>
  					@if($errors->has('_02'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_02') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_02" >
  								<option value="Yes" {{ old('_02')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_02')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

			  <tr>
			    <td>4</td>
  				<td>Have you ever suffered from any previous nervous disorders convulsions or paralysis before?
  					@if($errors->has('_03'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_03') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_03" >
  								<option value="Yes" {{ old('_03')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_03')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

			  <tr>
			    <td>5</td>
  				<td>Do you have a disorder of bleeding or clotting of blood?
  					@if($errors->has('_04'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_04') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_04" >
  								<option value="Yes" {{ old('_04')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_04')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

			  <tr>
			    <td>6</td>
  				<td>
  					Have you been treated for diabetes?
  					@if($errors->has('_05'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_05') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_05" >
  								<option value="Yes" {{ old('_05')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_05')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

			  <tr>
			    <td>7</td>
  				<td>
  					Do you have a history of Peptic Ulcer or hyper acidity?
  					@if($errors->has('_06'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_06') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_06" >
  								<option value="Yes" {{ old('_06')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_06')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

			  <tr>
			    <td>8</td>
  				<td>
  					Do you suffer from any allergy or drug hypersensitivity?
  					@if($errors->has('_07'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_07') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_07" >
  								<option value="Yes" {{ old('_07')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_07')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>

  				</div>
			  </tr>

			  <tr>
			    <td>9</td>
  				<td>
  					Do you suffer from Asthama / breathing difficulty?
  					@if($errors->has('_08'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_08') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_08" >
  								<option value="Yes" {{ old('_08')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_08')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>

  				</div>
			  </tr>

			  <tr>
			    <td>10</td>
  				<td>Have you had difficulty in passing urine in the past?
  					@if($errors->has('_09'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_09') }}</div></span>
  					@endif
  				</td>
  				<div class="form-group">
  					<td>
  						<div class="form-group">
  							<select class="form-control" name="_09" >
  								<option value="Yes" {{ old('_09')=="Yes"?"selected":"" }}>Yes</option>
  								<option value="No" {{ old('_09')=="No"?"selected":"" }}>No</option>
  							</select>
  						</div>
  					</td>
  				</div>
			  </tr>

        <tr>
			    <td>11</td>
  				<td>Have you been operated in the past?
            <div class="">
              If yes, please specify:
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <input type="text" class="form-control" name="operated_in_past" value="{{ old('operated_in_past') }}">
              </div>
            </div>
  					@if($errors->has('_10'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_10') }}</div></span>
  					@endif
            <ul>
              <li>Did you have any anesthetic or surgical complication?</li>
              <li>Did you receive any blood transfusion?</li>
            </ul>
  				</td>
					<td>
						<div class="form-group">
							<select class="form-control" name="_10" >
								<option value="Yes" {{ old('_10')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_10')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
            <div class="form-group">
							<select class="form-control" name="_10a" >
								<option value="Yes" {{ old('_10a')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_10a')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
            <div class="form-group">
							<select class="form-control" name="_10b" >
								<option value="Yes" {{ old('_10b')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_10b')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
			  </tr>

        <tr>
			    <td>12</td>
  				<td>
            Are you taking any drugs at present?
            <div class="">
              If yes, give details:
            </div>
            <div class="row form-group">
              <div class="col-md-6">
                <input type="text" class="form-control" name="taking_drugs_at_present" value="{{ old('taking_drugs_at_present') }}">
              </div>
            </div>
  					@if($errors->has('_11'))
  							<span class="help-block"><div class="text-danger">{{ $errors->first('_11') }}</div></span>
  					@endif
  				</td>
					<td>
						<div class="form-group">
							<select class="form-control" name="_11" >
								<option value="Yes" {{ old('_11')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_11')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
			  </tr>
			</tbody>
	  </table>

    <div class="row form-group">
      <div class="row form-group">
        <div class="col-md-6">
          <label for="">Name of Patient:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_of_patient" class="form-control" value="{{ old('name_of_patient') }}">
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label for="">Name of Relative:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_of_relative" class="form-control" value="{{ old('name_of_relative') }}">
        </div>
      </div>
    </div>

		<div class="row form-group text-center">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
