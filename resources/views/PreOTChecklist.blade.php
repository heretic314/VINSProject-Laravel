@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Pre-OT Checklist</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/OTR/01 <br>
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
	<form action="{{ url('/PreOTChecklist') }}" method="post">
		{{ csrf_field() }}
    <div class="row form-group">
      <div class="col-md-8">
        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">OT Planning Time:</label>
            </div>
            <div class="col-md-6">
              <input type="time" name="ot_planning_time" class="form-control" value="{{ old('ot_planning_time') }}">
							@if($errors->has('ot_planning_time'))
			            <span class="help-block"><div class="text-danger">{{ $errors->first('ot_planning_time') }}</div></span>
			        @endif
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">OT Procedure Time:</label>
            </div>
            <div class="col-md-6">
              <input type="time" name="ot_procedure_time" class="form-control" value="{{ old('ot_procedure_time') }}">
							@if($errors->has('ot_procedure_time'))
			            <span class="help-block"><div class="text-danger">{{ $errors->first('ot_procedure_time') }}</div></span>
			        @endif
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <label for="">Date:</label>
          </div>
          <div class="col-md-6">
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
						@if($errors->has('date'))
		            <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
		        @endif
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <textarea name="addressograph" class="form-control" rows="3" placeholder="Addressograph here"> {{ old('addressograph') }}</textarea>
        @if($errors->has('addressograph'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('addressograph') }}</div></span>
        @endif
      </div>
    </div>

    <hr>

		<div class="row form-group">
		  <table class="table table-bordered table-responsive">
		    <thead>
  			  <tr>
  				<th>Sr. No.</th>
  				<th>Contents</th>
  				<th>Response</th>
  				<th>Remarks</th>
  			  </tr>
  			</thead>
  			<tbody>
  			  <tr>
  			    <td class="text-center">1</td>
  					<td>Room No.</td>
  					<td>
  						<div class="form-group">
                <input type="text" name="room_no" value="{{ old('room_no') }}" class="form-control">
                @if($errors->has('room_no'))
    								<span class="help-block"><div class="text-danger">{{ $errors->first('room_no') }}</div></span>
    						@endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="remark_00" value="{{ old('remark_00') }}"></td>
  			  </tr>

  			  <tr>
  			    <td class="text-center">2</td>
    				<td>Case paper completed to date?</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="case_paper_completed" >
    								<option value="Yes" {{ old('case_paper_completed')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('case_paper_completed')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('case_paper_completed'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('case_paper_completed') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_01" value="{{ old('remark_01') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">3</td>
    				<td>NBM Status Since</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
                  <input type="text" name="nbm_status" class="form-control" value="{{ old('nbm_status') }}">
                  @if($errors->has('nbm_status'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('nbm_status') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_02" value="{{ old('remark_02') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">4</td>
    				<td>Consent for Surgery / Anaesthesia</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="consent_for_surgery" >
    								<option value="Yes" {{ old('consent_for_surgery')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('consent_for_surgery')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('consent_for_surgery'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('consent_for_surgery') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_03" value="{{ old('remark_03') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">5</td>
    				<td>Investigations:</td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              1. Pre OT Package
              <ul>
    						<li>
    							Blood Investigations
    						</li>
    						<li>
    							HIV/ HBsAg/ HCV
    						</li>
    					</ul>
            </td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pre_ot_package_a" >
    								<option value="Yes" {{ old('pre_ot_package_a')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('pre_ot_package_a')=="No"?"selected":"" }}>No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_pre_ot_package_a" value="{{ old('remark_pre_ot_package_a') }}">/td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              <ul>
    						<li>
    							MRI/CT/X-Rays/Doppler/Angiography
    						</li>
    						<li>
    							ECG/X-Rays Chest PA
    						</li>
    					</ul>
            </td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pre_ot_package_b" >
    								<option value="Yes" {{ old('pre_ot_package_b')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('pre_ot_package_b')=="No"?"selected":"" }}>No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_pre_ot_package_b" value="{{ old('remark_pre_ot_package_b') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>2.
              <ul>
    						<li>
    							DSE
    						</li>
    					</ul>
            </td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="dse" >
    								<option value="Yes" {{ old('dse')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('dse')=="No"?"selected":"" }}>No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_dse" value="{{ old('remark_dse') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>
              <ul>
    						<li>
    							ECHO
    						</li>
    					</ul>
            </td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="echo" >
    								<option value="Yes" {{ old('echo')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('echo')=="No"?"selected":"" }}>No</option>
    							</select>
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_echo" value="{{ old('remark_echo') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">6</td>
    				<td>PAC Date</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="pac_date" >
    								<option value="Yes" {{ old('pac_date')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('pac_date')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('pac_date'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('pac_date') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="remark_05" value="{{ old('remark_05') }}"></div></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">7</td>
    				<td>OT Dress Changed</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="ot_dress_changed" >
    								<option value="Yes" {{ old('ot_dress_changed')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('ot_dress_changed')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('ot_dress_changed'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('ot_dress_changed') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><div class=""><input class="form-control" type="text" name="remark_06" value="{{ old('remark_06') }}"></div></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">8</td>
    				<td>Pre Operative Medicines</td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td class="text-center"></td>
            <td>1. Anti Diabetic</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anti_diabetic" >
    								<option value="Yes" {{ old('anti_diabetic')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('anti_diabetic')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('anti_diabetic'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('anti_diabetic') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anti_diabetic" value="{{ old('remark_anti_diabetic') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>2. Anti HT</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anti_ht" >
    								<option value="Yes" {{ old('anti_ht')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('anti_ht')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('anti_ht'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('anti_ht') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anti_ht" value="{{ old('remark_anti_ht') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>3. Anticonvulsant</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="anticonvulsant" >
    								<option value="Yes" {{ old('anticonvulsant')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('anticonvulsant')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('anticonvulsant'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('anticonvulsant') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_anticonvulsant" value="{{ old('remark_anticonvulsant') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>No of Blood Product BT PCV-FFP-PRP</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="no_of_blood_product" >
    								<option value="Yes" {{ old('no_of_blood_product')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('no_of_blood_product')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('no_of_blood_product'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('no_of_blood_product') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_number_of_blood_product" value="{{ old('remark_number_of_blood_product') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>Antibiotics (1 hr. before)</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="antibiotics" >
    								<option value="Yes" {{ old('antibiotics')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('antibiotics')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('antibiotics'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('antibiotics') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_antibiotics" value="{{ old('remark_antibiotics') }}"></td>
    				</div>
  			  </tr>

          <tr>
            <td class="text-center"></td>
            <td>Other</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="other" >
    								<option value="Yes" {{ old('other')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('other')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('other'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('other') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_other" value="{{ old('remark_other') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">9</td>
    				<td>Transfusion Cross Matching Done</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="transfusion_cross_matchin" >
    								<option value="Yes" {{ old('transfusion_cross_matchin')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('transfusion_cross_matchin')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('transfusion_cross_matchin'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('transfusion_cross_matchin') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_08" value="{{ old('remark_08') }}"></td>
    				</div>
  			  </tr>

  			  <tr>
  			    <td class="text-center">10</td>
    				<td>Relative's presence - Ornaments (Earring/Chain/Ring/Bangle/Other) / Dentures / Implants removed and handed to relatives</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="ornaments_handed_to_relatives" >
    								<option value="Yes" {{ old('ornaments_handed_to_relatives')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('ornaments_handed_to_relatives')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('ornaments_handed_to_relatives'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('ornaments_handed_to_relatives') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_09" value="{{ old('remark_09') }}"></td>
    				</div>
  			  </tr>

          <tr>
  			    <td class="text-center">11</td>
    				<td>I.V. Access</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="iv_access" >
    								<option value="Yes" {{ old('iv_access')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('iv_access')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('iv_access'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('iv_access') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_10" value="{{ old('remark_10') }}"></td>
    				</div>
  			  </tr>

          <tr>
  			    <td class="text-center">12</td>
    				<td>Skin Preparation / Shaving</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="skin_preparation" >
    								<option value="Yes" {{ old('skin_preparation')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('skin_preparation')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('skin_preparation'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('skin_preparation') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_11" value="{{ old('remark_11') }}"></td>
    				</div>
  			  </tr>

          <tr>
  			    <td class="text-center">13</td>
    				<td>Known Allergies</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="known_allergies" >
    								<option value="Yes" {{ old('known_allergies')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('known_allergies')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('known_allergies'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('known_allergies') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_12" value="{{ old('remark_12') }}"></td>
    				</div>
  			  </tr>

          <tr>
  			    <td class="text-center">14</td>
    				<td>Any special instructions</td>
    				<div class="form-group">
    					<td>
    						<div class="form-group">
    							<select class="form-control" name="special_instructions" >
    								<option value="Yes" {{ old('special_instructions')=="Yes"?"selected":"" }}>Yes</option>
    								<option value="No" {{ old('special_instructions')=="No"?"selected":"" }}>No</option>
    							</select>
                  @if($errors->has('special_instructions'))
        							<span class="help-block"><div class="text-danger">{{ $errors->first('special_instructions') }}</div></span>
        					@endif
    						</div>
    					</td>
    				  <td><input class="form-control" type="text" name="remark_13" value="{{ old('remark_13') }}"></td>
    				</div>
  			  </tr>
  			</tbody>
		  </table>
		</div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Name of In-charge: </label>
      </div>
      <div class="col-md-6">
        <input type="text" name="name_of_incharge" value="{{ old('name_of_incharge') }}" class="form-control">
				@if($errors->has('name_of_incharge'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('name_of_incharge') }}</div></span>
				@endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Name of Staff: </label>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Over given by:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="over_given_by" value="{{ old('over_given_by') }}" class="form-control">
					@if($errors->has('over_given_by'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('over_given_by') }}</div></span>
					@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Over given to:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="over_given_to" value="{{ old('over_given_to') }}" class="form-control">
					@if($errors->has('over_given_to'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('over_given_to') }}</div></span>
					@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Ward:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="ward" value="{{ old('ward') }}" class="form-control">
					@if($errors->has('ward'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('ward') }}</div></span>
					@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Name of OT Staff:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_ot_staff" value="{{ old('name_ot_staff') }}" class="form-control">
					@if($errors->has('name_ot_staff'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('name_ot_staff') }}</div></span>
					@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Ornaments / Dentures / Implants removed and handed over to:</label>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Name of Relative:</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="name_of_relative" value="{{ old('name_of_relative') }}" class="form-control">
					@if($errors->has('name_of_relative'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('name_of_relative') }}</div></span>
					@endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">I.V. Access:</label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="iv_access_location">
            <option value="right_arm" {{ old('iv_access_location')=="right_arm"?"selected":"" }}>Right Arm</option>
            <option value="right_forearm" {{ old('iv_access_location')=="right_forearm"?"selected":"" }}>Right Forearm</option>
            <option value="left_arm" {{ old('iv_access_location')=="left_arm"?"selected":"" }}>Left Arm</option>
            <option value="left_forearm" {{ old('iv_access_location')=="left_forearm"?"selected":"" }}>Left Forearm</option>
          </select>
          @if($errors->has('iv_access_location'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('iv_access_location') }}</div></span>
          @endif
        </div>
      </div>
    </div>

		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
