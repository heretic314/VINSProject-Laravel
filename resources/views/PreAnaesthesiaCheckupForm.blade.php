@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Pre Anaesthesia Checkup Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/23 <br>
					REV. No. 0.2 <br>
					WEF 09-12-2017
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
	<form action="{{ url('/PreAnaesthesiaCheckupForm') }}" method="post">
		{{ csrf_field() }}
    <div class="row form-group">
      <div class="col-md-8">
        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">Weight:</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="weight" class="form-control" value="{{ old('weight') }}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-6">
              <label for="">Height:</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="height" class="form-control" value="{{ old('height') }}">
            </div>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-md-6">
            <label for="">Surgeon Name:</label>
          </div>
          <div class="col-md-6">
            <input type="text" name="surgeon_name" class="form-control" value="{{ old('surgeon_name') }}">
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
      <h3>Diagnosis:</h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Operative Procedure: </label>
      </div>
      <div class="col-md-6">
        <input type="text" name="operative_procedure" value="{{ old('operative_procedure') }}" class="form-control">
        @if($errors->has('operative_procedure'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('operative_procedure') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">History</label>
      </div>
      <div class="col-md-6">
        <input type="text" name="history" value="{{ old('history') }}" class="form-control">
        @if($errors->has('history'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('history') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Surgery</label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="surgery">
            <option value="emergency" {{ old('surgery')=="emergency"?"selected":"" }}>Emergency</option>
            <option value="elective" {{ old('surgery')=="elective"?"selected":"" }}>Elective</option>
          </select>
          @if($errors->has('surgery'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('surgery') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Systematic Examination</label>
        </div>
        <div class="col-md-6">
          <input type="text" name="systematic_examination" value="{{ old('systematic_examination') }}" class="form-control">
          @if($errors->has('systematic_examination'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('systematic_examination') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Relevant medical history and treatment: </label>
      </div>
      <div class="col-md-6">
        <input type="text" name="relevant_medical_history_treatment" value="{{ old('relevant_medical_history_treatment') }}" class="form-control">
        @if($errors->has('relevant_medical_history_treatment'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('relevant_medical_history_treatment') }}</div></span>
        @endif
      </div>
    </div>

		<div class="row form-group">
		  <table class="table table-bordered table-responsive">
		    <thead>
  			  <tr>
            <th style="vertical-align:middle" class="text-center"></th>
    				<th style="vertical-align:middle" class="text-center">Contents</th>
    				<th style="vertical-align:middle" class="text-center">Response</th>
    				<th style="vertical-align:middle" class="text-center">Duration</th>
  			  </tr>
  			</thead>
  			<tbody>
  			  <tr>
            <th style="vertical-align:middle" rowspan="5" class="text-center">Present Complaints</th>
  					<th style="vertical-align:middle" class="text-center">Cough Fever</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="cough_fever" >
                  <option value="No" {{ old('cough_fever')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('cough_fever')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('cough_fever'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('cough_fever') }}</div></span>
                @endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="duration_cough_fever" value="{{ old('duration_cough_fever') }}"></td>
  			  </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Chest Pain</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="chest_pain" >
                  <option value="No" {{ old('cough_fever')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('chest_pain')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('chest_pain'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('chest_pain') }}</div></span>
                @endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="duration_chest_pain" value="{{ old('duration_chest_pain') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Breathlessness</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="breathlessness" >
                  <option value="No" {{ old('breathlessness')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('breathlessness')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('breathlessness'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('breathlessness') }}</div></span>
                @endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="duration_breathlessness" value="{{ old('duration_breathlessness') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Bleeding Disorder</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="bleeding_disorder" >
                  <option value="No" {{ old('bleeding_disorder')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('bleeding_disorder')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('bleeding_disorder'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('bleeding_disorder') }}</div></span>
                @endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="duration_bleeding_disorder" value="{{ old('duration_bleeding_disorder') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Other
              <div class="form-group">
                <input type="text" class="form-control" name="other" value="{{ old('other') }}">
              </div>
             </th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="present_complaint_other" >
                  <option value="No" {{ old('present_complaint_other')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('present_complaint_other')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('present_complaint_other'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('present_complaint_other') }}</div></span>
                @endif
  						</div>
  					</td>
  					<td><input class="form-control" type="text" name="duration_other" value="{{ old('duration_other') }}"></td>
          </tr>

          <tr>
            <th style="vertical-align:middle" rowspan="6" class="text-center">Family History</th>
            <th style="vertical-align:middle" class="text-center">HT</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_ht" >
                  <option value="No" {{ old('family_history_ht')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_ht')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_ht'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_ht') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">DM</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_dm" >
                  <option value="No" {{ old('family_history_dm')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_dm')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_dm'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_dm') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">IHD</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_ihd" >
                  <option value="No" {{ old('family_history_ihd')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_ihd')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_ihd'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_ihd') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Asthma</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_asthma" >
                  <option value="No" {{ old('family_history_asthma')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_asthma')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_asthma'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_asthma') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Allergies</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_allergies" >
                  <option value="No" {{ old('family_history_allergies')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_allergies')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_allergies'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_allergies') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">H/o Anaesthesia</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="family_history_anaesthesia" >
                  <option value="No" {{ old('family_history_anaesthesia')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('family_history_anaesthesia')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('family_history_anaesthesia'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('family_history_anaesthesia') }}</div></span>
                @endif
  						</div>
  					</td>
            <td></td>
          </tr>

          <tr>
            <th style="vertical-align:middle" rowspan="8" class="text-center">Past History</th>
            <th style="vertical-align:middle" class="text-center">HT</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_ht" >
                  <option value="No" {{ old('past_history_ht')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_ht')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_ht'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_ht') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_ht" value="{{ old('duration_ht') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">DM</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_dm" >
                  <option value="No" {{ old('past_history_dm')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_dm')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_dm'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_dm') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_dm" value="{{ old('duration_dm') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Asthma</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_asthma" >
                  <option value="No" {{ old('past_history_asthma')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_asthma')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_asthma'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_asthma') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_asthma" value="{{ old('duration_asthma') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Allergies</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_allergies" >
                  <option value="No" {{ old('past_history_allergies')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_allergies')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_allergies'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_allergies') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_allergies" value="{{ old('duration_allergies') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">H/o Anaesthesia</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_anaesthesia" >
                  <option value="No" {{ old('past_history_anaesthesia')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_anaesthesia')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_anaesthesia'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_anaesthesia') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_anaesthesia" value="{{ old('duration_anaesthesia') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Major Surgeries</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_major_surgeries" >
                  <option value="No" {{ old('past_history_major_surgeries')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_major_surgeries')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_major_surgeries'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_major_surgeries') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_major_surgeries" value="{{ old('duration_major_surgeries') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Jaundice</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_history_jaundice" >
                  <option value="No" {{ old('past_history_jaundice')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_history_jaundice')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_history_jaundice'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_history_jaundice') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_major_jaundice" value="{{ old('duration_major_jaundice') }}"></td>
          </tr>
          <tr>
            <th style="vertical-align:middle" class="text-center">Koch's</th>
  					<td>
  						<div class="form-group">
                <select class="form-control" name="past_hisotry_kochs" >
                  <option value="No" {{ old('past_hisotry_kochs')=="No"?"selected":"" }}>No</option>
                  <option value="Yes" {{ old('past_hisotry_kochs')=="Yes"?"selected":"" }}>Yes</option>
                </select>
                @if($errors->has('past_hisotry_kochs'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('past_hisotry_kochs') }}</div></span>
                @endif
  						</div>
  					</td>
            <td><input class="form-control" type="text" name="duration_major_kochs" value="{{ old('duration_major_kochs') }}"></td>
          </tr>
  			</tbody>
		  </table>
		</div>

    <hr>

    <div class="row form-group">
      <h3>Treatment History</h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Anti HT: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="anti_ht" value="{{ old('anti_ht') }}" class="form-control">
          @if($errors->has('anti_ht'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('anti_ht') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Anti DM: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="anti_dm" value="{{ old('anti_dm') }}" class="form-control">
          @if($errors->has('anti_dm'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('anti_dm') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Other: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="treatment_history_other" value="{{ old('treatment_history_other') }}" class="form-control">
          @if($errors->has('treatment_history_other'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('treatment_history_other') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Steroids: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="steroids" value="{{ old('steroids') }}" class="form-control">
          @if($errors->has('steroids'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('steroids') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Anti Depressant: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="anti_depressant" value="{{ old('anti_depressant') }}" class="form-control">
          @if($errors->has('anti_depressant'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('anti_depressant') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <hr>

    <div class="row form-group">
      <h3>General Examination</h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Built And Nourish: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="built_and_nourish" value="{{ old('built_and_nourish') }}" class="form-control">
          @if($errors->has('built_and_nourish'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('built_and_nourish') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Pallor: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="pallor" value="{{ old('pallor') }}" class="form-control">
          @if($errors->has('pallor'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('pallor') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Odema: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="odema" value="{{ old('odema') }}" class="form-control">
          @if($errors->has('odema'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('odema') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Icturus: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="icturus" value="{{ old('icturus') }}" class="form-control">
          @if($errors->has('icturus'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('icturus') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Airway : Teeth: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="airway_teeth" value="{{ old('airway_teeth') }}" class="form-control">
          @if($errors->has('airway_teeth'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('airway_teeth') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Mouth Opening: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="mouth_opening" value="{{ old('mouth_opening') }}" class="form-control">
          @if($errors->has('mouth_opening'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('mouth_opening') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Neck Extention: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="neck_extension" value="{{ old('neck_extension') }}" class="form-control">
          @if($errors->has('neck_extension'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('neck_extension') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">CM Distance: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="cm_distance" value="{{ old('cm_distance') }}" class="form-control">
          @if($errors->has('cm_distance'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('cm_distance') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Temperature: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="temperature" value="{{ old('temperature') }}" class="form-control">
          @if($errors->has('temperature'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('temperature') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Pulse: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="pulse" value="{{ old('pulse') }}" class="form-control">
          @if($errors->has('pulse'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('pulse') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">BP: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="bp" value="{{ old('bp') }}" class="form-control">
          @if($errors->has('bp'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('bp') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Other Findings: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="other_findings" value="{{ old('other_findings') }}" class="form-control">
          @if($errors->has('other_findings'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('other_findings') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">SpO<sub>2</sub>: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="spo2" value="{{ old('spo2') }}" class="form-control">
          @if($errors->has('spo2'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('spo2') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Breath Holding Time: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="breath_holding_time" value="{{ old('breath_holding_time') }}" class="form-control">
          @if($errors->has('breath_holding_time'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('breath_holding_time') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <hr>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">RS: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="rs" value="{{ old('rs') }}" class="form-control">
          @if($errors->has('rs'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('rs') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">CVS: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="cvs" value="{{ old('cvs') }}" class="form-control">
          @if($errors->has('cvs'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('cvs') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">CNS: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="cns" value="{{ old('cns') }}" class="form-control">
          @if($errors->has('cns'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('cns') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Abdomen: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="abdomen" value="{{ old('abdomen') }}" class="form-control">
          @if($errors->has('abdomen'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('abdomen') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <hr>

    <div class="row form-group">
      <h3>Investigation</h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Hb \ CBC: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="hb_cbc" value="{{ old('hb_cbc') }}" class="form-control">
          @if($errors->has('hb_cbc'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('hb_cbc') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">S.Creatine \ Urea: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="s_creatine_urea" value="{{ old('s_creatine_urea') }}" class="form-control">
          @if($errors->has('s_creatine_urea'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('s_creatine_urea') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">RBS: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="rbs" value="{{ old('rbs') }}" class="form-control">
          @if($errors->has('rbs'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('rbs') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">ECG: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="ecg" value="{{ old('ecg') }}" class="form-control">
          @if($errors->has('ecg'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('ecg') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">S. Electrolyte: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="s_electrolyte" value="{{ old('s_electrolyte') }}" class="form-control">
          @if($errors->has('s_electrolyte'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('s_electrolyte') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">X Ray Chest: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="x_ray_chest" value="{{ old('x_ray_chest') }}" class="form-control">
          @if($errors->has('x_ray_chest'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('x_ray_chest') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Other: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="investigation_other" value="{{ old('investigation_other') }}" class="form-control">
          @if($errors->has('investigation_other'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('investigation_other') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Echo \ DSE: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="echo_dse" value="{{ old('echo_dse') }}" class="form-control">
          @if($errors->has('echo_dse'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('echo_dse') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <hr>

    <div class="row form-group">
      <h3>Advice</h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">NBM: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="nbm" value="{{ old('nbm') }}" class="form-control">
          @if($errors->has('nbm'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('nbm') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Preparation of Blood: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="preparation_of_blood" value="{{ old('preparation_of_blood') }}" class="form-control">
          @if($errors->has('preparation_of_blood'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('preparation_of_blood') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">IV Fluids: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="iv_fluids" value="{{ old('iv_fluids') }}" class="form-control">
          @if($errors->has('iv_fluids'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('iv_fluids') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Other Instruction: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="other_instructions" value="{{ old('other_instructions') }}" class="form-control">
          @if($errors->has('other_instructions'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('other_instructions') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">ASA: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="asa" value="{{ old('asa') }}" class="form-control">
          @if($errors->has('asa'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('asa') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Airway Management: </label>
        </div>
        <div class="col-md-6">
          <input type="text" name="airway_management" value="{{ old('airway_management') }}" class="form-control">
          @if($errors->has('airway_management'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('airway_management') }}</div></span>
          @endif
        </div>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-4">
        <label for="">Drugs: </label>
      </div>
      <div class="col-md-8">
        <input type="text" name="drugs" value="{{ old('drugs') }}" class="form-control">
        @if($errors->has('drugs'))
        <span class="help-block"><div class="text-danger">{{ $errors->first('drugs') }}</div></span>
        @endif
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Post Surgery Ventilation Required: </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="post_op_ventilation_required">
            <option value="No" {{ old('post_op_ventilation_required')=="No"?"selected":"" }}>No</option>
            <option value="Yes" {{ old('post_op_ventilation_required')=="Yes"?"selected":"" }}>Yes</option>
          </select>
          @if($errors->has('post_op_ventilation_required'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('post_op_ventilation_required') }}</div></span>
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label for="">Type of Anaesthesia Planned: </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="type_of_anaesthesia_planned">
            <option value="Standby" {{ old('type_of_anaesthesia_planned')=="Standby"?"selected":"" }}>Standby</option>
            <option value="Sedation" {{ old('type_of_anaesthesia_planned')=="Sedation"?"selected":"" }}>Sedation</option>
            <option value="Regional" {{ old('type_of_anaesthesia_planned')=="Regional"?"selected":"" }}>Regional</option>
            <option value="General" {{ old('type_of_anaesthesia_planned')=="General"?"selected":"" }}>General</option>
          </select>
          @if($errors->has('type_of_anaesthesia_planned'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('type_of_anaesthesia_planned') }}</div></span>
          @endif
        </div>
      </div>
    </div>

    <hr>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">Name of Doctor: </label>
      </div>
      <div class="col-md-6">
        <input type="text" name="name_of_doctor" value="{{ old('name_of_doctor') }}" class="form-control">
        @if($errors->has('name_of_doctor'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('name_of_doctor') }}</div></span>
        @endif
      </div>
    </div>

		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
