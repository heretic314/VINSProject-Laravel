@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Post Anaesthesia Evaluation</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/IPD/69 <br>
						REV. No. 0.0 <br>
						WEF 04-07-2017
					</div>
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/PostAnaesthesiaEvaluation') }}" method="post" >
			{{ csrf_field() }}
			<div class="row form-group">
				<div class="col-md-6">
          <h3>During Shifting from OT</h3>
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<label class="control-label" for="addressograph">Addressograph:</label>
					</div>
					<div class="col-md-8">
            <textarea name="addressograph" rows="3" class="form-control">{{ old('addressograph') }}</textarea>
						@if($errors->has('addressograph'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('addressograph') }}</div></span>
						@endif
					</div>
				</div>
			</div>

      <hr>

      <div class="row form-group">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th class="text-center">S.No.</th>
              <th class="text-center">Parameters</th>
              <th class="text-center">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="text-center" style="vertical-align:middle">1</th>
              <td>
                <h4>Level of Consciousness</h4>
                <ul>
                  <li>Awake and Oriented</li>
                  <li>Arousal with Minimal stimulation</li>
                  <li>Responsive only to tactile stimulation</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="level_of_consciousness">
                  <option value="2" {{ old('level_of_consciousness')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('level_of_consciousness')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('level_of_consciousness')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">2</th>
              <td>
                <h4>Physical Activity</h4>
                <ul>
                  <li>Able to move all extremities on command</li>
                  <li>Some weakness in movement of extremities</li>
                  <li>Unable to voluntarily move extremities</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="physical_activity">
                  <option value="2" {{ old('physical_activity')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('physical_activity')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('physical_activity')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">3</th>
              <td>
                <h4>Hemodynamic Stability</h4>
                <ul>
                  <li>Blood Pressure, 15% of baseline MAP value</li>
                  <li>Blood Pressure, 15-30% of baseline MAP value</li>
                  <li>Blood Pressure, 30% below baseline MAP value</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="hemodynamic_stability">
                  <option value="2" {{ old('hemodynamic_stability')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('hemodynamic_stability')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('hemodynamic_stability')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">4</th>
              <td>
                <h4>Respiratory Stability</h4>
                <ul>
                  <li>Able to breathe deeply</li>
                  <li>Tachypnoea with good cough</li>
                  <li>Dyspneic with weak cough</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="respiratory_stability">
                  <option value="2" {{ old('respiratory_stability')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('respiratory_stability')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('respiratory_stability')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">5</th>
              <td>
                <h4>Oxygen Saturation Status</h4>
                <ul>
                  <li>Maintains value more than 90% on room air</li>
                  <li>Requires supplemental oxygen (nasal prong)</li>
                  <li>Saturation less than 90% with supplemental oxygen</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="oxygen_saturation_status">
                  <option value="2" {{ old('oxygen_saturation_status')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('oxygen_saturation_status')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('oxygen_saturation_status')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">6</th>
              <td>
                <h4>Post-operative Pain Assessment</h4>
                <ul>
                  <li>None or mild discomfort</li>
                  <li>Moderate to severe pain controlled with IV analgesics</li>
                  <li>Persistent severe pain</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="post_operative_pain_assessment">
                  <option value="2" {{ old('post_operative_pain_assessment')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('post_operative_pain_assessment')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('post_operative_pain_assessment')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="text-center" style="vertical-align:middle">7</th>
              <td>
                <h4>Post-operative Emetic Symptoms</h4>
                <ul>
                  <li>None or mild nausea with no active vomiting</li>
                  <li>Transient vomiting or retching</li>
                  <li>Persistent moderate to severe nausea and vomiting</li>
                </ul>
              </td>
              <td>
                <select class="form-control" name="post_operative_emetic_symptoms">
                  <option value="2" {{ old('post_operative_emetic_symptoms')=='2'?"selected":"" }}>2</option>
                  <option value="1" {{ old('post_operative_emetic_symptoms')=='1'?"selected":"" }}>1</option>
                  <option value="0" {{ old('post_operative_emetic_symptoms')=='0'?"selected":"" }}>0</option>
                </select>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>Total Score</td>
              <td></td><input type="text" name="total_score" class="form_control" value="" onfocus="calc_total_score()" disabled>
            </tr>
          </tbody>
        </table>
      </div>

			<div class="row form-group">
				<div class="col-md-6">
					<h4>If score is</h4>
          <ul>
            <li>Less than 7: Patient not to be shifted</li>
            <li>7-12: Shift with Consultant's order</li>
            <li>More than 12: Shift the patient</li>
          </ul>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label col-md-6" for="name_of_anaesthetist">Name of Anaesthetist:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name_of_anaesthetist" id="name_of_anaesthetist" value="{{ old('name_of_anaesthetist') }}" />
						@if($errors->has('name_of_anaesthetist'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('name_of_anaesthetist') }}</div></span>
						@endif
					</div>
				</div>
			</div>

			<div class="text-center form-group">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>

@endsection
