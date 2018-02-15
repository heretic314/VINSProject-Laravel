@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
        <h1>Patient Admission Sheet</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. FMT/HIC/09 </br>
          REV. No. 0.1 </br>
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

  <form action="{{ url('/PatientAdmissionSheet') }}" method="post">
    {{ csrf_field() }}

    <div class="row form-group">
        			<div class="col-md-6">
        				<div class="col-md-6">
        		      <label>HUID NO : </label>
        				</div>
        				<div class="col-md-6">
        		      <input class="form-control" type="text" name="huid_no" value="{{ old('huid_no') }}">
        					@if($errors->has('huid_no'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('huid_no') }}</div></span>
        					@endif
        				</div>
        			</div>
        			<div class="col-md-6">
        				<div class="col-md-6">
        		      <label> IPD NO : </label>
        				</div>
        				<div class="col-md-6">
        		      <input class="form-control" type="text" name="ipd_no" value="{{ old('ipd_no') }}">
        					@if($errors->has('ipd_no'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
        					@endif
        				</div>
        			</div>
      </div>
      <div class="row form-group">
          			<div class="col-md-6">
          				<div class="col-md-6">
          		      <label>Name : </label>
          				</div>
          				<div class="col-md-6">
          		      <input class="form-control" type="text" name="name" value="{{ old('name') }}">
          					@if($errors->has('name'))
          							<span class="help-block"><div class="text-danger">{{ $errors->first('name') }}</div></span>
          					@endif
          				</div>
          			</div>


            			<div class="col-md-6">
            				<div class="col-md-6">
            		      <label>Address : </label>
            				</div>
            				<div class="col-md-6">
            		       <input class="form-control" type="text" name="address" value="{{ old('address') }}">
            					@if($errors->has('address'))
            							<span class="help-block"><div class="text-danger">{{ $errors->first('address') }}</div></span>
            					@endif
            				</div>
            			</div>
          </div>
          <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label>City : </label>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="city" value="{{ old('city') }}">
                        @if($errors->has('city'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('city') }}</div></span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label> Admission Date : </label>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="date" name="admission_date" value="{{ old('admission_date') }}">
                        @if($errors->has('admission_date'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('admission_date') }}</div></span>
                        @endif
                      </div>
                    </div>
            </div>
            <div class="row form-group">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <label>Admission Time : </label>
                        </div>
                        <div class="col-md-6">
                          <input class="form-control" type="time" name="admission_time" value="{{ old('admission_time') }}">
                          @if($errors->has('admission_time'))
                              <span class="help-block"><div class="text-danger">{{ $errors->first('admission_time') }}</div></span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <label> Phone No : </label>
                        </div>
                        <div class="col-md-6">
                          <input class="form-control" type="text" name="phone_no" value="{{ old('phone_no') }}">
                          @if($errors->has('phone_no'))
                              <span class="help-block"><div class="text-danger">{{ $errors->first('phone_no') }}</div></span>
                          @endif
                        </div>
                      </div>
              </div>

              <div class="row form-group">
                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Patient Type : </label>
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" type="text" name="patient_type" value="{{ old('patient_type') }}">
                            @if($errors->has('patient_type'))
                                <span class="help-block"><div class="text-danger">{{ $errors->first('patient_type') }}</div></span>
                            @endif
                          </div>
                        </div>

                          <div class="col-md-6">
                						<div class="col-md-6">
                							<label>Sex : </label>
                						</div>
                						<div class="col-md-6">
                							<select class="form-control" name="sex">
                								<option value="na" {{ old('sex')=='na'? "selected":"" }}>NA</option>
                								<option value="male" {{ old('sex')=='male'? "selected":"" }}>Male</option>
                								<option value="female" {{ old('sex')=='female'? "selected":"" }}>Female</option>
                							</select>
                						</div>
                					</div>
                				</div>

                <div class="row form-group">
                          <div class="col-md-6">
                            <div class="col-md-6">
                              <label>Age : </label>
                            </div>
                            <div class="col-md-6">
                              <input class="form-control" type="text" name="age" value="{{ old('age') }}">
                              @if($errors->has('age'))
                                  <span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
                              @endif
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="col-md-6">
                              <label> MLC : </label>
                            </div>
                            <div class="col-md-6">
                              <input  type="radio" name="mlc_y">Yes

                              <input  type="radio" name="mlc_n">No
                            </div>
                          </div>
                  </div>
                  <div class="row form-group">
                            <div class="col-md-6">
                              <div class="col-md-6">
                                <label>Consultant Name : </label>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" name="consultant_name" value="{{ old('consultant_name') }}">
                                @if($errors->has('consultant_name'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('consultant_name') }}</div></span>
                                @endif
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="col-md-6">
                                <label> Referred By : </label>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text" name="ref_by" value="{{ old('ref_by') }}">
                                @if($errors->has('ref_by'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('ref_by') }}</div></span>
                                @endif
                              </div>
                            </div>
                    </div>
                    <div class="row form-group">
                              <div class="col-md-6">
                                <div class="col-md-6">
                                  <label>Category : </label>
                                </div>
                                <div class="col-md-6">
                                  <input class="form-control" type="text" name="category" value="{{ old('category') }}">
                                  @if($errors->has('category'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('category') }}</div></span>
                                  @endif
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="col-md-6">
                                  <label> Class : </label>
                                </div>
                                <div class="col-md-6">
                                  <input class="form-control" type="text" name="class" value="{{ old('class') }}">
                                  @if($errors->has('class'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('class') }}</div></span>
                                  @endif
                                </div>
                              </div>
                      </div>

                      <div class="row form-group">
                                <div class="col-md-6">
                                  <div class="col-md-6">
                                    <label>Room no /Bed no : </label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" type="text" name="room_bed_no" value="{{ old('room_bed_no') }}">
                                    @if($errors->has('room_bed_no'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('room_bed_no') }}</div></span>
                                    @endif
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="col-md-6">
                                    <label> ICD CODE : </label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" type="text" name="icd_code" value="{{ old('icd_code') }}">
                                    @if($errors->has('icd_code'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('icd_code') }}</div></span>
                                    @endif
                                  </div>
                                </div>
                        </div>

                        <div class="row form-group"><hr>
                    			<div class="col-md-12">
                    				<div class="col-md-4">
                    					<label>Provisional Diagnosis : </label>
                    				</div>
                    				<div class="col-md-8">
                    					<textarea class="form-control" type="text" name="provisional_diagnosis" value="{{ old('provisional_diagnosis') }}" /></textarea>
                    					@if($errors->has('provisional_diagnosis'))
                    							<span class="help-block"><div class="text-danger">{{ $errors->first('provisional_diagnosis') }}</div></span>
                    					@endif
                    				</div>
                    			</div>
                    		</div>
                        <div class="row form-group">
                    			<div class="col-md-12">
                    				<div class="col-md-4">
                    					<label>Final Diagnosis : </label>
                    				</div>
                    				<div class="col-md-8">
                    					<textarea class="form-control" type="text" name="final_diagnosis" value="{{ old('final_diagnosis') }}" /></textarea>
                    					@if($errors->has('final_diagnosis'))
                    							<span class="help-block"><div class="text-danger">{{ $errors->first('final_diagnosis') }}</div></span>
                    					@endif
                    				</div>
                    			</div>
                    		</div>
                        <div class="col-md-12"><hr>
                          <label>Operative Details : </label>
                        </div>

                        <div class="row form-group">
                          <div class="col-md-12">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Sr no.</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Procedure</th>
                                <th>Surgeon</th>
                                <th>Anesthesia</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> 1.</td>
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
                                <td><input class="form-control" type="text" name="procedure_00" value="{{ old('procedure_00') }}"/>
                                  @if($errors->has('procedure_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('procedure_00') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="surgeon_00" value="{{ old('surgeon_00') }}"/>
                                  @if($errors->has('surgeon_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('surgeon_00') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="anesthesia_00" value="{{ old('anesthesia_00') }}"/>
                                  @if($errors->has('anesthesia_00'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('anesthesia_00') }}</div></span>
                                  @endif
                                </td>
                              </tr>

                              <tr>
                                <td> 2.</td>
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
                                <td><input class="form-control" type="text" name="procedure_01" value="{{ old('procedure_01') }}"/>
                                  @if($errors->has('procedure_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('procedure_01') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="surgeon_01" value="{{ old('surgeon_01') }}"/>
                                  @if($errors->has('surgeon_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('surgeon_01') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="anesthesia_01" value="{{ old('anesthesia_01') }}"/>
                                  @if($errors->has('anesthesia_01'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('anesthesia_01') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td> 3.</td>
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
                                <td><input class="form-control" type="text" name="procedure_02" value="{{ old('procedure_02') }}"/>
                                  @if($errors->has('procedure_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('procedure_02') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="surgeon_02" value="{{ old('surgeon_02') }}"/>
                                  @if($errors->has('surgeon_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('surgeon_02') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="anesthesia_02" value="{{ old('anesthesia_02') }}"/>
                                  @if($errors->has('anesthesia_02'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('anesthesia_02') }}</div></span>
                                  @endif
                                </td>
                              </tr>
                              <tr>
                                <td> 2.</td>
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
                                <td><input class="form-control" type="text" name="procedure_03" value="{{ old('procedure_03') }}"/>
                                  @if($errors->has('procedure_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('procedure_03') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="surgeon_03" value="{{ old('surgeon_03') }}"/>
                                  @if($errors->has('surgeon_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('surgeon_03') }}</div></span>
                                  @endif
                                </td>
                                <td><input class="form-control" type="text" name="anesthesia_03" value="{{ old('anesthesia_03') }}"/>
                                  @if($errors->has('anesthesia_03'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('anesthesia_03') }}</div></span>
                                  @endif
                                </td>
                              </tr></tbody>
                            </table></div></div>

                            <div class="col-md-12"><hr>
                              <label>Patient Transfer Details : </label>
                            </div>

                            <div class="row form-group">
                              <div class="col-md-12">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Sr no.</th>
                                    <th>Ward Name</th>
                                    <th>Transfer date</th>
                                    <th>Transfer time</th>
                                    <th>Transfer Ward</th>
                                    <th>Nurse's Name</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td> 1.</td>
                                    <td>
                                      <input class="form-control" type="text" name="ward_name_00" value="{{ old('ward_name_00') }}"/>
                                      @if($errors->has('ward_name_00'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('ward_name_00') }}</div></span>
                                      @endif
                                  </td>
                                    <td><input class="form-control" type="date" name="t_date_00" value="{{ old('t_date_00') }}"/>
                                      @if($errors->has('t_date_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_date_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="time" name="t_time_00" value="{{ old('t_time_00') }}"/>
                                      @if($errors->has('t_time_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_time_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="t_ward_00" value="{{ old('t_ward_00') }}"/>
                                      @if($errors->has('t_ward_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_ward_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="nurse_name_00" value="{{ old('nurse_name_00') }}"/>
                                      @if($errors->has('nurse_name_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('nurse_name_00') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>

                                  <tr>
                                    <td> 2.</td>
                                    <td>
                                      <input class="form-control" type="text" name="ward_name_01" value="{{ old('ward_name_01') }}"/>
                                      @if($errors->has('ward_name_01'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('ward_name_01') }}</div></span>
                                      @endif
                                  </td>
                                    <td><input class="form-control" type="date" name="t_date_01" value="{{ old('t_date_01') }}"/>
                                      @if($errors->has('t_date_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_date_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="time" name="t_time_01" value="{{ old('t_time_01') }}"/>
                                      @if($errors->has('t_time_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_time_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="t_ward_01" value="{{ old('t_ward_01') }}"/>
                                      @if($errors->has('t_ward_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_ward_01') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="nurse_name_01" value="{{ old('nurse_name_01') }}"/>
                                      @if($errors->has('nurse_name_01'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('nurse_name_01') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>

                                  <tr>
                                    <td> 3.</td>
                                    <td>
                                      <input class="form-control" type="text" name="ward_name_02" value="{{ old('ward_name_02') }}"/>
                                      @if($errors->has('ward_name_02'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('ward_name_02') }}</div></span>
                                      @endif
                                  </td>
                                    <td><input class="form-control" type="date" name="t_date_02" value="{{ old('t_date_02') }}"/>
                                      @if($errors->has('t_date_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_date_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="time" name="t_time_02" value="{{ old('t_time_02') }}"/>
                                      @if($errors->has('t_time_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_time_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="t_ward_02" value="{{ old('t_ward_02') }}"/>
                                      @if($errors->has('t_ward_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_ward_02') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="nurse_name_02" value="{{ old('nurse_name_02') }}"/>
                                      @if($errors->has('nurse_name_02'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('nurse_name_02') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>

                                  <tr>
                                    <td> 4.</td>
                                    <td>
                                      <input class="form-control" type="text" name="ward_name_03" value="{{ old('ward_name_03') }}"/>
                                      @if($errors->has('ward_name_03'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('ward_name_03') }}</div></span>
                                      @endif
                                  </td>
                                    <td><input class="form-control" type="date" name="t_date_03" value="{{ old('t_date_03') }}"/>
                                      @if($errors->has('t_date_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_date_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="time" name="t_time_03" value="{{ old('t_time_03') }}"/>
                                      @if($errors->has('t_time_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_time_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="t_ward_03" value="{{ old('t_ward_03') }}"/>
                                      @if($errors->has('t_ward_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_ward_03') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="nurse_name_03" value="{{ old('nurse_name_03') }}"/>
                                      @if($errors->has('nurse_name_03'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('nurse_name_03') }}</div></span>
                                      @endif
                                    </td>
                                  </tr>

                                  <tr>
                                    <td> 1.</td>
                                    <td>
                                      <input class="form-control" type="text" name="ward_name_00" value="{{ old('ward_name_00') }}"/>
                                      @if($errors->has('ward_name_00'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('ward_name_00') }}</div></span>
                                      @endif
                                  </td>
                                    <td><input class="form-control" type="date" name="t_date_00" value="{{ old('t_date_00') }}"/>
                                      @if($errors->has('t_date_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_date_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="time" name="t_time_00" value="{{ old('t_time_00') }}"/>
                                      @if($errors->has('t_time_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_time_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="t_ward_00" value="{{ old('t_ward_00') }}"/>
                                      @if($errors->has('t_ward_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('t_ward_00') }}</div></span>
                                      @endif
                                    </td>
                                    <td><input class="form-control" type="text" name="nurse_name_00" value="{{ old('nurse_name_00') }}"/>
                                      @if($errors->has('nurse_name_00'))
                                          <span class="help-block"><div class="text-danger">{{ $errors->first('nurse_name_00') }}</div></span>
                                      @endif
                                    </td>
                                  </tr></tbody>
                                </table></div></div>
                                

                                <div class="row form-group"><hr>
                                          <div class="col-md-6">
                                            <div class="col-md-6">
                                              <label>Checked By : </label>
                                            </div>
                                            <div class="col-md-6">
                                              <input class="form-control" type="text" name="checked_by" value="{{ old('checked_by') }}">
                                              @if($errors->has('checked_by'))
                                                  <span class="help-block"><div class="text-danger">{{ $errors->first('checked_by') }}</div></span>
                                              @endif
                                            </div>
                                          </div>

                                          <div class="row form-group">
                                                    <div class="col-md-6">
                                                      <div class="col-md-6">
                                                        <label>Sign : </label>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input class="form-control" type="text" name="sign" value="{{ old('sign') }}">
                                                        @if($errors->has('sign'))
                                                            <span class="help-block"><div class="text-danger">{{ $errors->first('sign') }}</div></span>
                                                        @endif
                                                      </div>
                                                    </div>
                                </div>
                                <div class="form-group text-center">
                          				<button class="btn btn-success" type="submit">Submit</button>
                          			</div>

                          		</form>
                          	</div>
