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

			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Patient History</label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" name="patient_history" value="{{ old('patient_history') }}"></textarea>

			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Past History</label>
			</div>
			<div class="col-md-6">
				<textarea class="form-control" name="past_history" value="{{ old('past_history') }}"></textarea>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Allergic History</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="allergic_history" value="{{ old('allergic_history') }}" />
			</div>
		</div>

		<hr />

		<div class="row form-group">
			<div class="col-md-6">
				<label>In Case of Road Traffic Accident : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" name="road_accident" value="{{ old('road_accident') }}"/>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<label>Alleged History of Road Traffic Accident at : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="alleged_roadtrafficaccident" value="{{ old('alleged_roadtrafficaccident') }}" />
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-4">
				<div class="col-md-6">
					<label>Place : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="place" value="{{ old('place') }}" />
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label>At : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="time" name="time" value="{{ old('time') }}" />
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6">
					<label>Date : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="date" name="date" value="{{ old('date') }}" />
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
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>BP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="bp" value="{{ old('bp') }}" />
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
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>RESP : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="resp" value="{{ old('resp') }}" />
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
            <td><input class="form-control" type="text" name="right_biceps" value="{{ old('right_biceps') }}" /></td>
            <td><input class="form-control" type="text" name="right_triceps" value="{{ old('right_triceps') }}" /></td>
            <td><input class="form-control" type="text" name="right_supinator" value="{{ old('right_supinator') }}" /></td>
            <td><input class="form-control" type="text" name="right_knee" value="{{ old('right_knee') }}" /></td>
            <td><input class="form-control" type="text" name="right_ankle" value="{{ old('right_ankle') }}" /></td>
            <td><input class="form-control" type="text" name="right_hoffmann" value="{{ old('right_hoffmann') }}" /></td>
            <td><input class="form-control" type="text" name="right_ff" value="{{ old('right_ff') }}" /></td>
          </tr>
          <tr>
            <th>Left</th>
            <td><input class="form-control" type="text" name="left_biceps" value="{{ old('left_biceps') }}" /></td>
            <td><input class="form-control" type="text" name="left_triceps" value="{{ old('left_triceps') }}" /></td>
            <td><input class="form-control" type="text" name="left_supinator" value="{{ old('left_supinator') }}" /></td>
            <td><input class="form-control" type="text" name="left_knee" value="{{ old('left_knee') }}" /></td>
            <td><input class="form-control" type="text" name="left_ankle" value="{{ old('left_ankle') }}" /></td>
            <td><input class="form-control" type="text" name="left_hoffmann" value="{{ old('left_hoffmann') }}" /></td>
            <td><input class="form-control" type="text" name="left_ff" value="{{ old('left_ff') }}" /></td>
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
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Romberg's : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="romberg" value="{{ old('romberg') }}" />
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
        </div>
      </div>
    </div>

		<div class="row form-group">
			<button class="form-control btn btn-success" type="submit">Submit</button>
		</div>

	</form>

</div>

@endsection
