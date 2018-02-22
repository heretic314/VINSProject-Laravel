@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
      <h1>Physiotherapy Assessment</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. F/PHY/02 <br>
          REV. No. 0.1 <br>
          WEF 27-02-2015
        </div>
      </div>
    </div>
  </div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/PhysiotherapyAssessment') }}" method="post">
			{{ csrf_field() }}
			<div class="row form-group">
			  <div class="col-md-8">
				</div>
			  <div class="col-md-4 text-right">
					<textarea name="addressograph"  rows="3" class="form-control" placeholder="Addressograph Here"></textarea>
				</div>
			</div>
			<hr>
			<div class="row form-group">
        <div class="col-md-6">
          <label for="">Chief Complaints:</label>
        </div>
        <div class="col-md-6">
          <textarea name="chief_complaints" class="form-control" rows="4">{{ old('chief_complaints') }}</textarea>
          @if($errors->has('chief_complaints'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('chief_complaints') }}</div></span>
          @endif
        </div>
			</div>
      <div class="row form-group">
        <div class="col-md-6">
          <label for="">History:</label>
        </div>
        <div class="col-md-6">
          <textarea name="history" class="form-control" rows="4">{{ old('history') }}</textarea>
          @if($errors->has('history'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('history') }}</div></span>
          @endif
        </div>
			</div>
      <div class="row form-group">
        <div class="col-md-6">
          <label for="">Surgical History:</label>
        </div>
        <div class="col-md-6">
          <textarea name="surgical_history" class="form-control" rows="4">{{ old('surgical_history') }}</textarea>
          @if($errors->has('surgical_history'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('surgical_history') }}</div></span>
          @endif
        </div>
			</div>

      <hr>

      <div class="row form-group">
        <h3>Observation:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="gait">Gait :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="gait"   class="form-control" value="{{ old('gait') }}">
          @if($errors->has('gait'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('gait') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="posture">Posture :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="posture"   class="form-control" value="{{ old('posture') }}">
          @if($errors->has('posture'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('posture') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="attitude_of_limbs">Attitude of limbs :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="attitude_of_limbs"  rows="4" class="form-control" value="{{ old('attitude_of_limbs') }}">
          @if($errors->has('attitude_of_limbs'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('attitude_of_limbs') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="external_aids">External aids :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="external_aids"  rows="2" class="form-control" value="{{ old('external_aids') }}">
          @if($errors->has('external_aids'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('external_aids') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="observation_others">Others :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="observation_others"  rows="2" class="form-control" value="{{ old('observation_others') }}">
          @if($errors->has('observation_others'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('observation_others') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Palpation:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="tenderness">Tenderness :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="tenderness"   class="form-control" value="{{ old('tenderness') }}">
          @if($errors->has('tenderness'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('tenderness') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="muscle_spasm">Muscle Spasm :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="muscle_spasm"   class="form-control" value="{{ old('muscle_spasm') }}">
          @if($errors->has('muscle_spasm'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('muscle_spasm') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="palpation_others">Others :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="palpation_others"  rows="4" class="form-control" value="{{ old('palpation_others') }}">
          @if($errors->has('palpation_others'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('palpation_others') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Examination:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="higher_mental_function">Higher Mental Function :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="higher_mental_function"   class="form-control" value="{{ old('higher_mental_function') }}">
          @if($errors->has('higher_mental_function'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('higher_mental_function') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="consciousness">Consciousness :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="consciousness"   class="form-control" value="{{ old('consciousness') }}">
          @if($errors->has('consciousness'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('consciousness') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="memory">Memory :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="memory"  rows="4" class="form-control" value="{{ old('memory') }}">
          @if($errors->has('memory'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('memory') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="communication">Communication :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="communication"  rows="4" class="form-control" value="{{ old('communication') }}">
          @if($errors->has('communication'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('communication') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Pain:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="higher_mental_function">Pain :</label>
        </div>
        <div class="col-md-8">
          <select class="form-control" name="pain">
            <option value="1" {{ old('pain')=='1'?"selected":"" }}>1</option>
            <option value="2" {{ old('pain')=='2'?"selected":"" }}>2</option>
            <option value="3" {{ old('pain')=='3'?"selected":"" }}>3</option>
            <option value="4" {{ old('pain')=='4'?"selected":"" }}>4</option>
            <option value="5" {{ old('pain')=='5'?"selected":"" }}>5</option>
            <option value="6" {{ old('pain')=='6'?"selected":"" }}>6</option>
            <option value="7" {{ old('pain')=='7'?"selected":"" }}>7</option>
            <option value="8" {{ old('pain')=='8'?"selected":"" }}>8</option>
            <option value="9" {{ old('pain')=='9'?"selected":"" }}>9</option>
            <option value="10" {{ old('pain')=='10'?"selected":"" }}>10</option>
          </select>
          @if($errors->has('pain'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('pain') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="pain_others">Others :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="pain_others"   class="form-control" value="{{ old('pain_others') }}">
          @if($errors->has('pain_others'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('pain_others') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Sensory Assessment:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="sensory_superficial">Superficial :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="sensory_superficial"   class="form-control" value="{{ old('sensory_superficial') }}">
          @if($errors->has('sensory_superficial'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('sensory_superficial') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="deep">Deep :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="deep"   class="form-control" value="{{ old('deep') }}">
          @if($errors->has('deep'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('deep') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Motor Assessment:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="tone">Tone :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="tone"   class="form-control" value="{{ old('tone') }}">
          @if($errors->has('tone'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('tone') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Muscle Power:</h3>
      </div>
      <div class="row form-group">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th></th>
              <th class="text-center">Rt</th>
              <th class="text-center">Lt</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th class="text-center">Upper Limb</th>
              <td>
                <input type="text" class="form-control" name="rt_upperlimb" value="{{ old('rt_upperlimb') }}">
                @if($errors->has('rt_upperlimb'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('rt_upperlimb') }}</div></span>
                @endif
              </td>
              <td>
                <input type="text" class="form-control" name="lt_upperlimb" value="{{ old('lt_upperlimb') }}">
                @if($errors->has('lt_upperlimb'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('lt_upperlimb') }}</div></span>
                @endif
              </td>
            </tr>
            <tr>
              <th class="text-center">Lower Limb</th>
              <td>
                <input type="text" class="form-control" name="rt_lowerlimb" value="{{ old('rt_lowerlimb') }}">
                @if($errors->has('rt_lowerlimb'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('rt_lowerlimb') }}</div></span>
                @endif
              </td>
              <td>
                <input type="text" class="form-control" name="lt_lowerlimb" value="{{ old('lt_lowerlimb') }}">
                @if($errors->has('lt_lowerlimb'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('lt_lowerlimb') }}</div></span>
                @endif
              </td>
            </tr>
          </tbody>
        </table>

        <div class="row form-group">
          <div class="col-md-4">
            <label class="control-label" for="range_of_motion">Range of Motion :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="range_of_motion"   class="form-control" value="{{ old('range_of_motion') }}">
            @if($errors->has('range_of_motion'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('range_of_motion') }}</div></span>
            @endif
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-4">
            <label class="control-label" for="muscle_power_others">Others :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="muscle_power_others"   class="form-control" value="{{ old('muscle_power_others') }}">
            @if($errors->has('muscle_power_others'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('muscle_power_others') }}</div></span>
            @endif
          </div>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <h3>Reflexes:</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="reflexes_superficial">Superficial :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="reflexes_superficial"   class="form-control" value="{{ old('reflexes_superficial') }}">
          @if($errors->has('reflexes_superficial'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('reflexes_superficial') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="abdominal">Abdominal :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="abdominal"   class="form-control" value="{{ old('abdominal') }}">
          @if($errors->has('abdominal'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('abdominal') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="plantar">Plantar :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="plantar"   class="form-control" value="{{ old('plantar') }}">
          @if($errors->has('plantar'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('plantar') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="reflexes_superficial">Deep :</label>
        </div>
        <div class="col-md-8">
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <th class="text-center">Jerk</th>
                <th class="text-center">Biceps</th>
                <th class="text-center">Triceps</th>
                <th class="text-center">Brachioradialis</th>
                <th class="text-center">Knee</th>
                <th class="text-center">Ankle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center">Right</th>
                <td>
                  <input type="text" class="form-control" name="right_biceps" value="{{ old('right_biceps') }}">
                  @if($errors->has('right_biceps'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_biceps') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_triceps" value="{{ old('right_triceps') }}">
                  @if($errors->has('right_triceps'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_triceps') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_brachioradialis" value="{{ old('right_brachioradialis') }}">
                  @if($errors->has('right_brachioradialis'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_brachioradialis') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_knee" value="{{ old('right_knee') }}">
                  @if($errors->has('right_knee'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_knee') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_ankle" value="{{ old('right_ankle') }}">
                  @if($errors->has('right_ankle'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_ankle') }}</div></span>
                  @endif
                </td>
              </tr>
              <tr>
                <th class="text-center">Left</th>
                <td>
                  <input type="text" class="form-control" name="right_biceps" value="{{ old('right_biceps') }}">
                  @if($errors->has('right_biceps'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_biceps') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_triceps" value="{{ old('right_triceps') }}">
                  @if($errors->has('right_triceps'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_triceps') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_brachioradialis" value="{{ old('right_brachioradialis') }}">
                  @if($errors->has('right_brachioradialis'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_brachioradialis') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_knee" value="{{ old('right_knee') }}">
                  @if($errors->has('right_knee'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_knee') }}</div></span>
                  @endif
                </td>
                <td>
                  <input type="text" class="form-control" name="right_ankle" value="{{ old('right_ankle') }}">
                  @if($errors->has('right_ankle'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('right_ankle') }}</div></span>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="balance_coordination">Balance/Coordination :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="balance_coordination" class="form-control" value="{{ old('balance_coordination') }}">
          @if($errors->has('balance_coordination'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('balance_coordination') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="bladder_bowel">Bladder and Bowel :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="bladder_bowel" class="form-control" value="{{ old('bladder_bowel') }}">
          @if($errors->has('bladder_bowel'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('bladder_bowel') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="diagnosis">Diagnosis :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="diagnosis" class="form-control" value="{{ old('diagnosis') }}">
          @if($errors->has('diagnosis'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="treatment_plan">Treatment Plan :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="treatment_plan" class="form-control" value="{{ old('treatment_plan') }}">
          @if($errors->has('treatment_plan'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('treatment_plan') }}</div></span>
          @endif
        </div>
      </div>

      <hr>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="name_of_physiotherapist">Name of Physiotherapist :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="name_of_physiotherapist" class="form-control" value="{{ old('name_of_physiotherapist') }}">
          @if($errors->has('name_of_physiotherapist'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('name_of_physiotherapist') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-4">
            <label class="control-label" for="date">Date :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="date" class="form-control" value="{{ old('date') }}">
            @if($errors->has('date'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-4">
            <label class="control-label" for="time">Time :</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="time" class="form-control" value="{{ old('time') }}">
            @if($errors->has('time'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
            @endif
          </div>
        </div>
      </div>


			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>
@endsection
