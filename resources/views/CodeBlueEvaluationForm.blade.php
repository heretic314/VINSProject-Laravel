@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Code Blue Evaluation Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/27 <br>
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
	<form action="{{ url('/CodeBlueEvaluationForm') }}" method="post">
		{{ csrf_field() }}
		<div class="row form-group">
		  <div class="col-md-6">
				<div class="col-md-6">
					<label>Drill : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="drill" value="{{ old('drill') }}">
					@if($errors->has('drill'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('drill') }}</div></span>
					@endif
				</div>
		  </div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Actual Code Blue : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="actual_code_blue" value="{{ old('actual_code_blue') }}">
					@if($errors->has('actual_code_blue'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('actual_code_blue') }}</div></span>
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="text-center">
				Code blue / drills are designed to prepare staff in responding to medical emergencies as a part of the staff Competency Curriculum.
			</div>
		</div>

		<div class="row form-group">
		  <table class="table table-bordered">
		    <thead>
			  <tr>
				<th>Sr. No.</th>
				<th>Contents</th>
				<th>Response</th>
				<th>Comments</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Was staff able to identify cardiac arrest?
						@if($errors->has('_00'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('_00') }}</div></span>
						@endif
					</td>
					<td>
						<div class="form-group">
							<select class="form-control" name="_00">

								<option value="NA" {{ old('_00')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_00')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_00')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
					<td><input class="form-control" type="text" name="comm_00"></td>
			  </tr>

			  <tr>
			    <td>2</td>
				<td>Did CPR begin when the cardiac arrest was indentified?
					@if($errors->has('_01'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_01') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_01" >

								<option value="NA" {{ old('_01')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_01')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_01')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><input class="form-control" type="text" name="comm_01"></td>
				</div>
			  </tr>

			  <tr>
			    <td>3</td>
				<td>
					Was Code Blue properly announced?
					<ul>
						<li>
							Correct location announced
						</li>
						<li>
							Correct Extension dialed
						</li>
						<li>
							Exchange System is OK
						</li>
						<li>
							Appropriate People called
						</li>
					</ul>
					@if($errors->has('_02'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_02') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_02" >

								<option value="NA" {{ old('_02')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_02')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_02')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_02"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>4</td>
				<td>Did nurse lead the resuscitation effort until the code blue team arrived?
					@if($errors->has('_03'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_03') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_03" >

								<option value="NA" {{ old('_03')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_03')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_03')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_03"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>5</td>
				<td>Was chest compression perfomed uninterruptedly until code blue team arrived?
					@if($errors->has('_04'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_04') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_04" >

								<option value="NA" {{ old('_04')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_04')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_04')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_04"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>6</td>
				<td>
					Was an airway established and ventilation maintained until code blue team arrived?
					<ul>
						<li>
							Rebreathing mask
						</li>
						<li>
							Ambu bag
						</li>
						<li>
							Aspiration
						</li>
						<li>
							Multiple attempts
						</li>
						<li>
							Misplaced
						</li>
					</ul>
					@if($errors->has('_05'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_05') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_05" >

								<option value="NA" {{ old('_05')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_05')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_05')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_05"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>7</td>
				<td>
					Did code Blue team arrive in reasonable time?
					<div class="">1 min - Appropriate</div>
					<div class="">2 min - Acceptable</div>
					<div class="">>3 min - Unacceptable</div>
					@if($errors->has('_06'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_06') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_06" >

								<option value="NA" {{ old('_06')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_06')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_06')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_06"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>8</td>
				<td>
					Was Chest Compression given in the following ways?
					<ul>
						<li>
							Uninterrupted
						</li>
						<li>
							Correct breathing and Compression ratio
						</li>
						<li>
							Correct head position
						</li>
						<li>
							Correct hand position
						</li>
						<li>
							Chest compression in time
						</li>
					</ul>
					@if($errors->has('_07'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_07') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_07" >

								<option value="NA" {{ old('_07')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_07')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_07')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_07"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>9</td>
				<td>
					Was staff able to locate / operate the following ?
					<ul>
						<li>
							ECG Machine
						</li>
						<li>
							Oxygen Cylinder
						</li>
						<li>
							Ambu bag
						</li>
						<li>
							Emergency cart
						</li>
						<li>
							Suction machine
						</li>
						<li>
							Drugs
						</li>
					</ul>
					@if($errors->has('_08'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_08') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_08" >

								<option value="NA" {{ old('_08')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_08')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_08')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_08"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>10</td>
				<td>Was documentation complete?
					@if($errors->has('_09'))
							<span class="help-block"><div class="text-danger">{{ $errors->first('_09') }}</div></span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="_09" >

								<option value="NA" {{ old('_09')=="NA"?"selected":"" }}>NA</option>
								<option value="Yes" {{ old('_09')=="Yes"?"selected":"" }}>Yes</option>
								<option value="No" {{ old('_09')=="No"?"selected":"" }}>No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_09"></div></td>
				</div>
			  </tr>
			</tbody>
		  </table>
		</div>
		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
