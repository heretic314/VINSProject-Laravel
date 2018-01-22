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
	<form action="{{ url('/CodeBlueEvaluationForm') }}" method="post">
		{{ csrf_field() }}
		<div class="row form-group">
		  <div class="col-md-6">
				<div class="col-md-6">
					<label>Drill : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="drill">
					@if($errors->has('drill'))
							<span class="help-block">{{ $errors->first('drill') }}</span>
					@endif
				</div>
		  </div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Actual Code Blue : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="actual_code_blue">
					@if($errors->has('actual_code_blue'))
							<span class="help-block">{{ $errors->first('actual_code_blue') }}</span>
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
						@if($errors->has('00'))
								<span class="help-block alert alert-warning">{{ $errors->first('00') }}</span>
						@endif
					</td>
					<td>
						<div class="form-group">
							<select required class="form-control" name="00">
								<option selected disabled hidden> --- </option>
								<option value="Na" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
					</td>
					<td><input class="form-control" type="text" name="comm_00"></td>
			  </tr>

			  <tr>
			    <td>2</td>
				<td>Did CPR begin when the cardiac arrest was indentified?
					@if($errors->has('01'))
							<span class="help-block alert alert-warning">{{ $errors->first('01') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="01" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
					@if($errors->has('02'))
							<span class="help-block alert alert-warning">{{ $errors->first('02') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="02" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_02"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>4</td>
				<td>Did nurse lead the resuscitation effort until the code blue team arrived?
					@if($errors->has('03'))
							<span class="help-block alert alert-warning">{{ $errors->first('03') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="03" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_03"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>5</td>
				<td>Was chest compression perfomed uninterruptedly until code blue team arrived?
					@if($errors->has('04'))
							<span class="help-block alert alert-warning">{{ $errors->first('04') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="04" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
					@if($errors->has('05'))
							<span class="help-block alert alert-warning">{{ $errors->first('05') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="05" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
					@if($errors->has('06'))
							<span class="help-block alert alert-warning">{{ $errors->first('06') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="06" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
					@if($errors->has('07'))
							<span class="help-block alert alert-warning">{{ $errors->first('07') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="07" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
					@if($errors->has('08'))
							<span class="help-block alert alert-warning">{{ $errors->first('08') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="08" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
							</select>
						</div>
					</td>
				  <td><div class=""><input class="form-control" type="text" name="comm_08"></div></td>
				</div>
			  </tr>

			  <tr>
			    <td>10</td>
				<td>Was documentation complete?
					@if($errors->has('09'))
							<span class="help-block alert alert-warning">{{ $errors->first('09') }}</span>
					@endif
				</td>
				<div class="form-group">
					<td>
						<div class="form-group">
							<select class="form-control" name="09" >
								<option selected disabled hidden> --- </option>
								<option value="NA" >NA</option>
								<option value="Yes" >Yes</option>
								<option value="No" >No</option>
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
