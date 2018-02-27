@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Transfusion Reaction Form</h1>
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
	<form action="{{ url('/TransfusionReactionForm') }}" method="post">
			{{ csrf_field() }}

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Heap No:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="heap_no" id="heap_no" value="{{ old('heap_no') }}" >
            @if($errors->has('heap_no'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('heap_no') }}</div></span>
            @endif
          </div></div>


       <div class="col-md-6">
          <div class="col-md-6">
                <label>S No:</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text"  name="s_no" id="s_no" value="{{ old('s_no') }}" >
                @if($errors->has('s_no'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('s_no') }}</div></span>
                @endif
              </div></div></div>

      Transfusion must be started whithin 60 minutes of issue of blood and the blood transfusion set must have a filter incorporated.
      <hr>
      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Blood Bage NO:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="blood_bage_no" id="blood_bage_no" value="{{ old('blood_bage_no') }}" >
            @if($errors->has('blood_bage_no'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('blood_bage_no') }}</div></span>
            @endif
          </div></div>


       <div class="col-md-6">
          <div class="col-md-6">
                <label> Quantity:</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text"  name="quantity" id="quantity" value="{{ old('quantity') }}" >
                @if($errors->has('quantity'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('quantity') }}</div></span>
                @endif
              </div></div></div>

              <div class="row form-group">
                <div class="col-md-6">
                  <div class="col-md-6">
                    <label>Group:</label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text"  name="group" id="group" value="{{ old('group') }}" >
                    @if($errors->has('group'))
                        <span class="help-block"><div class="text-danger">{{ $errors->first('group') }}</div></span>
                    @endif
                  </div></div>


               <div class="col-md-6">
                  <div class="col-md-6">
                        <label>Expiry Date:</label>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="date"  name="date" id="date" value="{{ old('date') }}" >
                        @if($errors->has('date'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
                        @endif
                      </div></div></div>
                      <div class="row form-group">
                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Date Of Issue:</label>
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" type="date"  name="date_issue" id="date_issue" value="{{ old('date_issue') }}" >
                            @if($errors->has('date_issue'))
                                <span class="help-block"><div class="text-danger">{{ $errors->first('date_issue') }}</div></span>
                            @endif
                          </div></div>


                       <div class="col-md-6">
                          <div class="col-md-6">
                                <label>Time Of Issue:</label>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="time"  name="time_issue" id="time_issue" value="{{ old('time_issue') }}" >
                                @if($errors->has('time_issue'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('time_issue') }}</div></span>
                                @endif
                              </div></div></div>

                              <div class="row form-group">
                                <div class="col-md-6">
                                  <div class="col-md-6">
                                    <label>Matched By:</label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" type="text"  name="matched_by" id="matched_by" value="{{ old('matched_by') }}" >
                                    @if($errors->has('matched_by'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('matched_by') }}</div></span>
                                    @endif
                                  </div></div>


                               <div class="col-md-6">
                                  <div class="col-md-6">
                                        <label>Compatible For Name:</label>
                                      </div>
                                      <div class="col-md-6">
                                        <input class="form-control" type="text"  name="com_name" id="com_name" value="{{ old('com_name') }}" >
                                        @if($errors->has('com_name'))
                                            <span class="help-block"><div class="text-danger">{{ $errors->first('com_name') }}</div></span>
                                        @endif
                                      </div></div></div>

                                      <div class="row form-group">
                                        <div class="col-md-6">
                                          <div class="col-md-6">
                                            <label>Age:</label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-control" type="text"  name="age" id="age" value="{{ old('age') }}" >
                                            @if($errors->has('age'))
                                                <span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
                                            @endif
                                          </div></div>


                                          <div class="col-md-6">
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
                                            <div class="row form-group">
                                              <div class="col-md-6">
                                                <div class="col-md-6">
                                                  <label>Ward and Bed No:</label>
                                                </div>
                                                <div class="col-md-6">
                                                  <input class="form-control" type="text"  name="ward_no" id="ward_no" value="{{ old('ward_no') }}" >
                                                  @if($errors->has('ward_no'))
                                                      <span class="help-block"><div class="text-danger">{{ $errors->first('ward_no') }}</div></span>
                                                  @endif
                                                </div></div>


                                             <div class="col-md-6">
                                                <div class="col-md-6">
                                                      <label>Medical Officer I/C Blood Bank:</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                      <input class="form-control" type="text"  name="med_officer" id="med_officer" value="{{ old('med_officer') }}" >
                                                      @if($errors->has('med_officer'))
                                                          <span class="help-block"><div class="text-danger">{{ $errors->first('med_officer') }}</div></span>
                                                      @endif
                                                    </div></div></div>

  To be completed and returned to the blood bank whithin 2 hours of completion of transfusion of blood bag. <hr>

  <div class="row form-group">
  <div class="col-md-4">
    <div class="col-md-6">
      <label> No:</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text"  name="_no" id="_no" value="{{ old('_no') }}" >
      @if($errors->has('_no'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('_no') }}</div></span>
      @endif
    </div></div>


      <div class="col-md-4">
        <div class="col-md-6">
          <label>Name of The Patient:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text"  name="name_00" id="name_00" value="{{ old('name_00') }}" >
          @if($errors->has('name_00'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('name_00') }}</div></span>
          @endif
        </div></div>
        <div class="col-md-4">
          <div class="col-md-6">
            <label>Medical Officer in Charge of the Case:</label>
          </div>
          <div class="col-md-6">

            <input class="form-control" type="text"  name="med_officer_00" id="med_officer_00" value="{{ old('med_officer_00') }}" >
            @if($errors->has('med_officer_00'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('med_officer_00') }}</div></span>
            @endif
          </div></div></div>

          <div class="row form-group">
            <div class="col-md-6">
              <div class="col-md-6">
                <label>Time at which Transfusion Started:</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="time"  name="time_00" id="time_00" value="{{ old('time_00') }}" >
                @if($errors->has('time_00'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('time_00') }}</div></span>
                @endif
              </div></div>


                <div class="col-md-6">
                  <div class="col-md-6">
                    <label>Chill Temperature:</label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text"  name="chill_temp" id="chill_temp" value="{{ old('chill_temp') }}" >
                    @if($errors->has('chill_temp'))
                        <span class="help-block"><div class="text-danger">{{ $errors->first('chill_temp') }}</div></span>
                    @endif
                  </div></div></div>

                  <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label>Time at which finished :</label>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="time"  name="finish_time" id="finish_time" value="{{ old('finish_time') }}" >
                        @if($errors->has('finish_time'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('finish_time') }}</div></span>
                        @endif
                      </div></div>


                        <div class="col-md-6">
                          <div class="col-md-6">
                            <label>Fall in Bp:</label>
                          </div>
                          <div class="col-md-6">
                            <input class="form-control" type="text"  name="bp_fall" id="bp_fall" value="{{ old('bp_fall') }}" >
                            @if($errors->has('bp_fall'))
                                <span class="help-block"><div class="text-danger">{{ $errors->first('bp_fall') }}</div></span>
                            @endif
                          </div></div></div>

                          <div class="row form-group">
                            <div class="col-md-6">
                              <div class="col-md-6">
                                <label>Drop Rate at which Transfusion Given:
                                Reaction(if any)</label>
                              </div>
                              <div class="col-md-6">
                                <input class="form-control" type="text"  name="drop_rate" id="drop_rate" value="{{ old('drop_rate') }}" >
                                @if($errors->has('drop_rate'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('drop_rate') }}</div></span>
                                @endif
                              </div></div>


                                <div class="col-md-6">
                                  <div class="col-md-6">
                                    <label>Urticaria:</label>
                                  </div>
                                  <div class="col-md-6">
                                    <input class="form-control" type="text"  name="urticaria" id="urticaria" value="{{ old('urticaria') }}" >
                                    @if($errors->has('urticaria'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('urticaria') }}</div></span>
                                    @endif
                                  </div></div></div>

                                  <div class="row form-group">
                                    <div class="col-md-6">
                                      <div class="col-md-6">
                                        <label>When did you notice them:</label>
                                      </div>
                                      <div class="col-md-6">
                                        <input class="form-control" type="text"  name="notice" id="notice" value="{{ old('notice') }}" >
                                        @if($errors->has('notice'))
                                            <span class="help-block"><div class="text-danger">{{ $errors->first('notice') }}</div></span>
                                        @endif
                                      </div></div>


                                        <div class="col-md-6">
                                          <div class="col-md-6">
                                            <label>Chest Pain:</label>
                                          </div>
                                          <div class="col-md-6">
                                            <input class="form-control" type="text"  name="chest_pain" id="chest_pain" value="{{ old('chest_pain') }}" >
                                            @if($errors->has('chest_pain'))
                                                <span class="help-block"><div class="text-danger">{{ $errors->first('chest_pain') }}</div></span>
                                            @endif
                                          </div></div></div>

                                          <div class="row form-group">
                                            <div class="col-md-6">
                                              <div class="col-md-6">
                                                <label>What measures were taken:
                                                To Counteract them</label>
                                              </div>
                                              <div class="col-md-6">
                                                <input class="form-control" type="text"  name="measures" id="measures" value="{{ old('measures') }}" >
                                                @if($errors->has('measures'))
                                                    <span class="help-block"><div class="text-danger">{{ $errors->first('measures') }}</div></span>
                                                @endif
                                              </div></div>


                                                <div class="col-md-6">
                                                  <div class="col-md-6">
                                                    <label>Dsypnoea Shock:</label>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <input class="form-control" type="text"  name="dyspnoea_shock" id="dyspnoea_shock" value="{{ old('dyspnoea_shock') }}" >
                                                    @if($errors->has('dyspnoea_shock'))
                                                        <span class="help-block"><div class="text-danger">{{ $errors->first('dyspnoea_shock') }}</div></span>
                                                    @endif
                                                  </div></div></div>

                                                  <div class="row form-group">
                                                    <div class="col-md-6">
                                                      <div class="col-md-6">
                                                        <label>Anphytaxix Oliguria/Anuria:</label>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <input class="form-control" type="text"  name="anphytaxix" id="anphytaxix" value="{{ old('anphytaxix') }}" >
                                                        @if($errors->has('anphytaxix'))
                                                            <span class="help-block"><div class="text-danger">{{ $errors->first('anphytaxix') }}</div></span>
                                                        @endif
                                                      </div></div>


                                                        <div class="col-md-6">
                                                          <div class="col-md-6">
                                                            <label>Any Other Relevant Comments:</label>
                                                          </div>
                                                          <div class="col-md-6">
                                                          <textarea class="form-control" type="text"  name="rel_cmnt" id="rel_cmnt" value="{{ old('rel_cmnt') }}" ></textarea>
                                                            @if($errors->has('rel_cmnt'))
                                                                <span class="help-block"><div class="text-danger">{{ $errors->first('rel_cmnt') }}</div></span>
                                                            @endif
                                                          </div></div></div>

                                                          <div class="row form-group">
                                                            <div class="col-md-6">
                                                              <div class="col-md-6">
                                                                <label>Sign of the Medical Officer:</label>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <input class="form-control" type="text"  name="sign_00" id="sign_00" value="{{ old('sign_00') }}" >
                                                                @if($errors->has('sign_00'))
                                                                    <span class="help-block"><div class="text-danger">{{ $errors->first('sign_00') }}</div></span>
                                                                @endif
                                                              </div></div></div>


                                                          <div class="row form-group">
                                                            <button class="form-group btn btn-success" type="submit">Submit</button>
                                                          </div>
                                                        </form>
                                                      </div>
                                                      @endsection
