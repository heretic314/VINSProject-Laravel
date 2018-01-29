@extends('layouts.app')

@section('content')


<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>History Form</h1>
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
	<form action="{{ url('/HistoryForm') }}" method="post">
    {{ csrf_field() }}
		<div class="row form-group">
			<div class="col-md-6">
				<label>Chief Complaints : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="chief_complaints" value="{{ old('chief_complaints')}}"/>
				@if($errors->has('chief_complaints'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('chief_complaints') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Patient History</label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" name="patient_history" value="{{ old('patient_history') }}"></textarea>
				@if($errors->has('patient_history'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('patient_history') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Past History</label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" name="past_history" value="{{ old('past_history') }}"></textarea>
				@if($errors->has('past_history'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('past_history') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Allergic History</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="allergic_history" value="{{ old('allergic_history') }}" />
				@if($errors->has('allergic_history'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('allergic_history') }}</div></span>
				@endif
			</div>
		</div>

		<hr />

		<div class="row form-group">
			<div class="col-md-6">
				<label>In Case of Road Traffic Accident : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" name="road_accident" value="{{ old('road_accident') }}"/>
				@if($errors->has('road_accident'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('road_accident') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Alleged History of Road Traffic Accident at : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="alleged_roadtrafficaccident" value="{{ old('alleged_roadtrafficaccident') }}" />
				@if($errors->has('alleged_roadtrafficaccident'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('alleged_roadtrafficaccident') }}</div></span>
				@endif
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
					<label>Place : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="place" value="{{ old('place') }}" />
					@if($errors->has('place'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('place') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label>At : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="time" name="time" value="{{ old('time') }}" />
					@if($errors->has('time'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label>Date : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="date" name="date" value="{{ old('date') }}" />
					@if($errors->has('date'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>H/O LOC</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="ho_loc">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>H/O ENT Bleeding</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="ho_entbleeding">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>H/O Seizures</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="ho_seizures">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>H/O Vomiting</label>
				</div>
				<div class="col-md-6">
					<select class="form-control" name="ho_vomiting">
						<option value="no">No</option>
						<option value="yes">Yes</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Pulse : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="pulse" value="{{ old('pulse') }}" />
					@if($errors->has('pulse'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('pulse') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>BP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="bp" value="{{ old('bp') }}" />
					@if($errors->has('bp'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('bp') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Temp : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="temp" value="{{ old('temp') }}" />
					@if($errors->has('temp'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('temp') }}</div></span>
					@endif
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>RESP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="resp" value="{{ old('resp') }}" />
					@if($errors->has('resp'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('resp') }}</div></span>
					@endif
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Pain Assessment : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="pain">
					<option value="0">0 - No Pain</option>
					<option value="2">2 - Pain Little Bit</option>
					<option value="4">4 - Pain Little More</option>
					<option value="6">6 - Pain Even More</option>
					<option value="8">8 - Pain Wholelot</option>
					<option value="10">10 - Pain Worst</option>
				</select>
			</div>
		</div>

    <div class="row form-group">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Biceps</th>
            <th>Triceps</th>
            <th>Supinator</th>
            <th>Knee</th>
            <th>Ankle</th>
            <th>Hoffmann</th>
            <th>FF</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Right</th>
            <td><input class="form-control" type="text" name="right_biceps" value="{{ old('right_biceps') }}" />
							@if($errors->has('right_biceps'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_biceps') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_triceps" value="{{ old('right_triceps') }}" />
							@if($errors->has('right_triceps'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_triceps') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_supinator" value="{{ old('right_supinator') }}" />
							@if($errors->has('right_supinator'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_supinator') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_knee" value="{{ old('right_knee') }}" />
							@if($errors->has('right_knee'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_knee') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_ankle" value="{{ old('right_ankle') }}" />
							@if($errors->has('right_ankle'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_ankle') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_hoffmann" value="{{ old('right_hoffmann') }}" />
							@if($errors->has('right_hoffmann'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_hoffmann') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="right_ff" value="{{ old('right_ff') }}" />
							@if($errors->has('right_ff'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('right_ff') }}</div></span>
							@endif
						</td>
          </tr>

					<tr>
            <th>left</th>
            <td><input class="form-control" type="text" name="left_biceps" value="{{ old('left_biceps') }}" />
							@if($errors->has('left_biceps'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_biceps') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_triceps" value="{{ old('left_triceps') }}" />
							@if($errors->has('left_triceps'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_triceps') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_supinator" value="{{ old('left_supinator') }}" />
							@if($errors->has('left_supinator'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_supinator') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_knee" value="{{ old('left_knee') }}" />
							@if($errors->has('left_knee'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_knee') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_ankle" value="{{ old('left_ankle') }}" />
							@if($errors->has('left_ankle'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_ankle') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_hoffmann" value="{{ old('left_hoffmann') }}" />
							@if($errors->has('left_hoffmann'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_hoffmann') }}</div></span>
							@endif
						</td>
            <td><input class="form-control" type="text" name="left_ff" value="{{ old('left_ff') }}" />
							@if($errors->has('left_ff'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('left_ff') }}</div></span>
							@endif
						</td>
          </tr>

        </tbody>
      </table>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Plantars : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="plantars" value="{{ old('plantars') }}"/>
					@if($errors->has('plantars'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('plantars') }}</div></span>
					@endif

        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Romberg's : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="romberg" value="{{ old('romberg') }}" />
					@if($errors->has('romberg'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('romberg') }}</div></span>
					@endif

        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Gait</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="gait" value="{{ old('gait') }}" />
					@if($errors->has('gait'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('gait') }}</div></span>
					@endif

        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Cerebellar Signs : </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="cerebellar">
            <option value="truncal">Truncal</option>
            <option value="appendicular">Appendicular</option>
            <option value="tandemwalking">Tandem Walking</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Neck Stiffness</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="neck_stiffness" value="{{ old('neck_stiffness') }}"/>
					@if($errors->has('neck_stiffness'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('neck_stiffness') }}</div></span>
					@endif

        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Diagnosis</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="diagnosis" value="{{ old('diagnosis') }}"/>
					@if($errors->has('diagnosis'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
					@endif

        </div>
      </div>
    </div>

		<div class="row">
		    <div id="sketch1">
		      <canvas id="paint1" style="background: url('https://i.imgur.com/1bvTivk.png');"></canvas>

		</div>


		<script type="text/javascript">
		    document.addEventListener("DOMContentLoaded", function(){

		      var canvas = document.getElementById('paint1');
		      var ctx = canvas.getContext('2d');

		      var sketch1 = document.getElementById('sketch1');
		      var sketch1_style = getComputedStyle(sketch1);
		      canvas.width = 600;
		      canvas.height = 475;

		      var mouse = {x: 0, y: 0};

		      /* Mouse Capturing Work */
		      canvas.addEventListener('mousemove', function(e) {
		      mouse.x = e.pageX - this.offsetLeft;
		      mouse.y = e.pageY - this.offsetTop;
		      }, false);

		      /* Drawing on paint1 App */
		      ctx.lineJoin = 'round';
		      ctx.lineCap = 'round';

		      ctx.strokeStyle = "red";
		      function getColor(colour){ctx.strokeStyle = colour;}

		      function getSize(size){ctx.lineWidth = size;}


		      //ctx.strokeStyle =
		      //ctx.strokeStyle = document.settings.colour[1].value;

		      canvas.addEventListener('mousedown', function(e) {
		        ctx.beginPath();
		        ctx.moveTo(mouse.x, mouse.y);

		        canvas.addEventListener('mousemove', onpaint1, false);
		      }, false);

		      canvas.addEventListener('mouseup', function() {
		        canvas.removeEventListener('mousemove', onpaint1, false);
		      }, false);

		      var onpaint1 = function() {
		        ctx.lineTo(mouse.x, mouse.y);
		        ctx.stroke();
		      };
		    });
		</script>



		<div class="row form-group">
			<button class="form-control btn btn-success" type="submit">Submit</button>
		</div>

	</form>

</div>

@endsection
