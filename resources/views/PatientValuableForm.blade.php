@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Patient Valuable Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						F/IPD/41
					</div>
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif


		<form action="{{ url('/PatientValuableForm') }}" method = "post">
			{{ csrf_field() }}

      <div class="row form-group">
        <div class="col-md-4">
          <div class="col-md-6">
            <label>Date:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date"  name="date" id="date" value="{{ old('date') }}" >
            @if($errors->has('date'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
            @endif
          </div></div>


      			<div class="col-md-4">
      				<div class="col-md-6">
      					<label> Time:</label>
      				</div>
      				<div class="col-md-6">
      					<input class="form-control" type="time"  name="time" id="time" value="{{ old('time') }}" >
      					@if($errors->has('time'))
      							<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
      					@endif
      				</div></div>
              <div class="col-md-4">
        				<div class="col-md-6">
        					<label> Unit:</label>
        				</div>
        				<div class="col-md-6">
        					<input class="form-control" type="text"  name="unit" id="unit" value="{{ old('unit') }}" >
        					@if($errors->has('unit'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('unit') }}</div></span>
        					@endif
        				</div></div>
              </div>

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
              					<label>IP No:</label>
              				</div>
              				<div class="col-md-6">
              					<input class="form-control" type="text"  name="ip_no" id="ip_no" value="{{ old('ip_no') }}" >
              					@if($errors->has('ip_no'))
              							<span class="help-block"><div class="text-danger">{{ $errors->first('ip_no') }}</div></span>
              					@endif
              				</div></div></div>

                      <div class="row form-group">
                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Items Collected By:</label>
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" type="text"  name="items_by" id="items_by" value="{{ old('items_by') }}" >
                            @if($errors->has('items_by'))
                                <span class="help-block"><div class="text-danger">{{ $errors->first('items_by') }}</div></span>
                            @endif
                          </div></div>


                            <div class="col-md-6">
                              <div class="col-md-6">
                                <label>Details Of Personal Items Collected:</label>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text"  name="details" id="details" value="{{ old('details') }}" >
                                @if($errors->has('details'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('details') }}</div></span>
                                @endif
                              </div></div></div>

                              <div class="row form-group"><hr>
                                <table class="table table-bordered">
                                  <thead>
                                  <tr>
                                  <th>Sr. No.</th>
                                  <th>Description</th>
                                  <th>Handed to Relative</th>
                                  <th>Kept in Locker</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_00" value="{{ old('sr_no_00') }}"/>
                                      @if($errors->has('sr_no_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_00" value="{{ old('description_00') }}"/>
                                      @if($errors->has('description_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_00" value="{{ old('relative_00') }}"/>
                                      @if($errors->has('relative_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('relative_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="locker_00" value="{{ old('locker_00') }}"/>
                                      @if($errors->has('locker_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_00') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_01" value="{{ old('sr_no_01') }}"/>
                                      @if($errors->has('sr_no_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_01" value="{{ old('description_01') }}"/>
                                      @if($errors->has('description_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_01" value="{{ old('relative_01') }}"/>
                                      @if($errors->has('relative_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('relative_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="locker_01" value="{{ old('locker_01') }}"/>
                                      @if($errors->has('locker_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_01') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_02" value="{{ old('sr_no_02') }}"/>
                                      @if($errors->has('sr_no_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_02" value="{{ old('description_02') }}"/>
                                      @if($errors->has('description_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_02" value="{{ old('relative_02') }}"/>
                                      @if($errors->has('relative_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('relative_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="locker_02" value="{{ old('locker_02') }}"/>
                                      @if($errors->has('locker_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_02') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_03" value="{{ old('sr_no_03') }}"/>
                                      @if($errors->has('sr_no_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_03" value="{{ old('description_03') }}"/>
                                      @if($errors->has('description_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_03" value="{{ old('relative_03') }}"/>
                                      @if($errors->has('relative_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('relative_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="locker_03" value="{{ old('locker_03') }}"/>
                                      @if($errors->has('locker_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_00') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_04" value="{{ old('sr_no_04') }}"/>
                                      @if($errors->has('sr_no_04'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_04') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_04" value="{{ old('description_04') }}"/>
                                      @if($errors->has('description_04'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_04') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_04" value="{{ old('relative_04') }}"/>
                                      @if($errors->has('relative_04'))
                                            <span class="help-block"><div class="text-danger">{{ $errors->first('relative_04') }}</div></span>
                                        @endif
                                      </td>
                                      <td><input class="form-control" type="text" name="locker_04" value="{{ old('locker_04') }}"/>
                                        @if($errors->has('locker_04'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_04') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><input class="form-control" type="text" name="sr_no_05" value="{{ old('sr_no_05') }}"/>
                                      @if($errors->has('sr_no_05'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('sr_no_05') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="description_05" value="{{ old('description_05') }}"/>
                                      @if($errors->has('description_05'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('description_05') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="relative_05" value="{{ old('relative_05') }}"/>
                                      @if($errors->has('relative_05'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('relative_05') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="locker_05" value="{{ old('locker_05') }}"/>
                                      @if($errors->has('locker_05'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('locker_05') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>

                                </tbody>
                              </table>
                              <div class="row form-group"><hr>
                                <div class="col-md-4">
                                  <div class="col-md-6">
                                    <label>Sign Of Unit Nurse:</label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" type="text"  name="sign_nurse" id="sign_nurse" value="{{ old('sign_nurse') }}" >
                                    @if($errors->has('sign_nurse'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('sign_nurse') }}</div></span>
                                    @endif
                                  </div></div>


                              			<div class="col-md-4">
                              				<div class="col-md-6">
                              					<label> Sign Of Security:</label>
                              				</div>
                              				<div class="col-md-6">
                              					<input class="form-control" type="text"  name="sign_security" id="sign_security" value="{{ old('sign_security') }}" >
                              					@if($errors->has('sign_security'))
                              							<span class="help-block"><div class="text-danger">{{ $errors->first('sign_security') }}</div></span>
                              					@endif
                              				</div></div>
                                      <div class="col-md-4">
                                				<div class="col-md-6">
                                					<label> Sign Of Sister In Charge:</label>
                                				</div>
                                				<div class="col-md-6">
                                					<input class="form-control" type="text"  name="sign_sister" id="sign_sister" value="{{ old('sign_sister') }}" >
                                					@if($errors->has('sign_sister'))
                                							<span class="help-block"><div class="text-danger">{{ $errors->first('sign_sister') }}</div></span>
                                					@endif
                                				</div></div>
                                      </div>
              To be filled by when the items are handed over to the patient's relatives:
              <div class="row form-group"><hr>
                <table class="table table-bordered">
                  <thead>
                  <tr>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Released by: (Name and Sign)</th>
                  <th>Name and Address of the Relative</th>
                  <th>Relationship with the Patient's</th>
                  <th>Name and Sign of the Relative</th>
                  </tr>
                </thead>
                <tbody>
                  <tbody>
                    <tr>

                      <td>
                        <input class="form-control" type="date" name="date" value="{{ old('date') }}"/>
                        @if($errors->has('date'))
                          <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
                        @endif
                    </td>
                      <td><input class="form-control" type="time" name="time" value="{{ old('time') }}"/>
                        @if($errors->has('time'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
                        @endif
                      </td>
                      <td><input class="form-control" type="text" name="released_by" value="{{ old('released_by') }}"/>
                        @if($errors->has('released_by'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('released_by') }}</div></span>
                        @endif
                      </td>
                      <td><input class="form-control" type="text" name="name_address" value="{{ old('name_address') }}"/>
                        @if($errors->has('name_address'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('name_address') }}</div></span>
                        @endif
                      </td>
                      <td><input class="form-control" type="text" name="relationship" value="{{ old('relationship') }}"/>
                        @if($errors->has('relationship'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('relationship') }}</div></span>
                        @endif
                      </td>
                      <td><input class="form-control" type="text" name="name_sign" value="{{ old('name_sign') }}"/>
                        @if($errors->has('name_sign'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign') }}</div></span>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
                I have recieved the above mentioned items from the  hospital management in good condition.
                The hospital is not responsible for the loss of any other items and i'm not entitled to claim any other items.<hr>

                Its the policy of the hospital that on admission, all the valuables and belongings of the patient be sent home with patient's relatives.
                The above items are deposited in the understanding that in the event of loss, the hospital shall not be held liable beyond the exercise of ordinary care and deligence.

                The Patient authorizes the hospital to dispose of the property without liability.<hr>
                <div class="row form-group">
                  <button class="form-group btn btn-success" type="submit">Submit</button>
                </div>
              </form>
            </div>
            @endsection
