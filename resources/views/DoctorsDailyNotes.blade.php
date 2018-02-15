@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6">
					<h2>Doctor's Daily Notes</h2>
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
		          Please fix the following errors.
		      </div>
		  @endif


			<form action="{{ url('/DoctorsDailyNotes') }}" method="post">
				{{csrf_field()}}
				<div class="row form-group">
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Patient's name: </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
							@if($errors->has('name'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('name') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label>IPD No : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="ipd_no" type="text" name="ipd_no" value="{{ old('ipd_no') }}">
							@if($errors->has('ipd_no'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('ipd_no') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-4">
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
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Attending consultant: </label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" id="attending_consultant" name="attending_consultant" value="{{ old('attending_consultant') }}">
							@if($errors->has('attending_consultant'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('attending_consultant') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label> Age : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="ipd_no" type="text" name="age" value="{{ old('age') }}">
							@if($errors->has('age'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('age') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Date : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="date" name="date" value="{{ old('date') }}">
							@if($errors->has('date'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
							@endif
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<h3>7 AM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_07" value="{{ old('c_o_07') }}"/>
							@if($errors->has('c_o_07'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('c_o_07') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_07" value="{{ old('oe_pulse_07') }}"/>
							@if($errors->has('oe_pulse_07'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('oe_pulse_07') }}</div></span>
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
							<input class="form-control" type="text" name="bp_07" value="{{ old('bp_07') }}"/>
							@if($errors->has('bp_07'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('bp_07') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_07" value="{{ old('temp_07') }}"/>
							@if($errors->has('temp_07'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('temp_07') }}</div></span>
							@endif
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_07" value="{{ old('resp_spo2_07') }}"/>
							@if($errors->has('resp_spo2_07'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('resp_spo2_07') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_07">
								<option value="1" {{ old('pain_07')=='1'? "selected":"" }}>1</option>
								<option value="2" {{ old('pain_07')=='2'? "selected":"" }}>2</option>
								<option value="3" {{ old('pain_07')=='3'? "selected":"" }}>3</option>
								<option value="4" {{ old('pain_07')=='4'? "selected":"" }}>4</option>
								<option value="5" {{ old('pain_07')=='5'? "selected":"" }}>5</option>
								<option value="6" {{ old('pain_07')=='6'? "selected":"" }}>6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>9 AM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_09" value="{{ old('c_o_09') }}" />
							@if($errors->has('c_o_09'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('c_o_09') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_09" value="{{ old('oe_pulse_09') }}" />
							@if($errors->has('oe_pulse_09'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('oe_pulse_09') }}</div></span>
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
							<input class="form-control" type="text" name="bp_09" value="{{ old('bp_09') }}" />
							@if($errors->has('bp_09'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('bp_09') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_09" value="{{ old('temp_09') }}" />
							@if($errors->has('temp_09'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('temp_09') }}</div></span>
							@endif
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_09" value="{{ old('resp_spo2_09') }}" />
							@if($errors->has('resp_spo2_09'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('resp_spo2_09') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_09">
								<option value="1" {{ old('pain_09')=='1'? "selected":"" }}>1</option>
								<option value="2" {{ old('pain_09')=='2'? "selected":"" }}>2</option>
								<option value="3" {{ old('pain_09')=='3'? "selected":"" }}>3</option>
								<option value="4" {{ old('pain_09')=='4'? "selected":"" }}>4</option>
								<option value="5" {{ old('pain_09')=='5'? "selected":"" }}>5</option>
								<option value="6" {{ old('pain_09')=='6'? "selected":"" }}>6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>3 PM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_15" value="{{ old('c_o_15') }}"  />
							@if($errors->has('c_o_15'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('c_o_15') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_15" value="{{ old('oe_pulse_15') }}"  />
							@if($errors->has('oe_pulse_15'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('oe_pulse_15') }}</div></span>
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
							<input class="form-control" type="text" name="bp_15" value="{{ old('bp_15') }}"  />
							@if($errors->has('bp_15'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('bp_15') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_15" value="{{ old('temp_15') }}"  />
							@if($errors->has('temp_15'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('temp_15') }}</div></span>
							@endif
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_15" value="{{ old('resp_spo2_15') }}"  />
							@if($errors->has('resp_spo2_15'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('resp_spo2_15') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_15">
								<option value="1" {{ old('pain_15')=='1'? "selected":"" }}>1</option>
								<option value="2" {{ old('pain_15')=='2'? "selected":"" }}>2</option>
								<option value="3" {{ old('pain_15')=='3'? "selected":"" }}>3</option>
								<option value="4" {{ old('pain_15')=='4'? "selected":"" }}>4</option>
								<option value="5" {{ old('pain_15')=='5'? "selected":"" }}>5</option>
								<option value="6" {{ old('pain_15')=='6'? "selected":"" }}>6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>9 PM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_21" value="{{ old('c_o_21') }}"/>
							@if($errors->has('c_o_21'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('c_o_21') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_21" value="{{ old('oe_pulse_21') }}"/>
							@if($errors->has('oe_pulse_21'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('oe_pulse_21') }}</div></span>
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
							<input class="form-control" type="text" name="bp_21" value="{{ old('bp_21') }}"/>
							@if($errors->has('bp_21'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('bp_21') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_21" value="{{ old('temp_21') }}"/>
							@if($errors->has('temp_21'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('temp_21') }}</div></span>
							@endif
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_21" value="{{ old('resp_spo2_21') }}"/>
							@if($errors->has('resp_spo2_21'))
							 <span class="help-block"><div class="text-danger">{{ $errors->first('resp_spo2_21') }}</div></span>
							@endif
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_21">
								<option value="1" {{ old('pain_21')=='1'? "selected":"" }}>1</option>
								<option value="2" {{ old('pain_21')=='2'? "selected":"" }}>2</option>
								<option value="3" {{ old('pain_21')=='3'? "selected":"" }}>3</option>
								<option value="4" {{ old('pain_21')=='4'? "selected":"" }}>4</option>
								<option value="5" {{ old('pain_21')=='5'? "selected":"" }}>5</option>
								<option value="6" {{ old('pain_21')=='6'? "selected":"" }}>6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="text-center form-group">
					<button class="btn btn-success" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</body>
</html>
@endsection
