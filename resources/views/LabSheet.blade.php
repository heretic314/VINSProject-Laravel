@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
			<h1>Lab Sheet</h1>
			</div>
			<div class="col-md-4">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
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
	<form action="{{ url('/LabSheet') }}" method="post">
		{{ csrf_field() }}

		<div class="row form-group">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Date : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="date" name="date" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Room No : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="room_no" />
						</div>
					</div>
				</div>
			</div>

		</div>

		<hr />

		<div class="row">
		  <table class="table table-bordered table-condensed">
		    <thead>
				  <tr>
						<th class="text-center">Sr No.</th>
						<th class="text-center">Investigation</th>
						<th class="text-center">Date</th>
						<th class="text-center">Name</th>
						<th class="text-center">REMARK</th>
					</tr>
			 </thead>
				<tbody>
				  <tr>
						<td>1</td>
						<td><input class="form-control" type = "text" name="investigation_01"></td>
						<td><input class="form-control" type = "date" name="date_01"></td>
						<td><input class="form-control" type = "text" name="name_01"></td>
						<td><input class="form-control" type = "text" name="remark_01"></td>
				  </tr>
					<tr>
						<td>2</td>
						<td><input class="form-control" type = "text" name="investigation_02"></td>
						<td><input class="form-control" type = "date" name="date_02"></td>
						<td><input class="form-control" type = "text" name="name_02"></td>
						<td><input class="form-control" type = "text" name="remark_02"></td>
				  </tr>
					<tr>
						<td>3</td>
						<td><input class="form-control" type = "text" name="investigation_03"></td>
						<td><input class="form-control" type = "date" name="date_03"></td>
						<td><input class="form-control" type = "text" name="name_03"></td>
						<td><input class="form-control" type = "text" name="remark_03"></td>
				  </tr>
					<tr>
						<td>4</td>
						<td><input class="form-control" type = "text" name="investigation_04"></td>
						<td><input class="form-control" type = "date" name="date_04"></td>
						<td><input class="form-control" type = "text" name="name_04"></td>
						<td><input class="form-control" type = "text" name="remark_04"></td>
				  </tr>
					<tr>
						<td>5</td>
						<td><input class="form-control" type = "text" name="investigation_05"></td>
						<td><input class="form-control" type = "date" name="date_05"></td>
						<td><input class="form-control" type = "text" name="name_05"></td>
						<td><input class="form-control" type = "text" name="remark_05"></td>
				  </tr>
					<tr>
						<td>6</td>
						<td><input class="form-control" type = "text" name="investigation_06"></td>
						<td><input class="form-control" type = "date" name="date_06"></td>
						<td><input class="form-control" type = "text" name="name_06"></td>
						<td><input class="form-control" type = "text" name="remark_06"></td>
				  </tr>
					<tr>
						<td>7</td>
						<td><input class="form-control" type = "text" name="investigation_07"></td>
						<td><input class="form-control" type = "date" name="date_07"></td>
						<td><input class="form-control" type = "text" name="name_07"></td>
						<td><input class="form-control" type = "text" name="remark_07"></td>
				  </tr>
			  </tbody>
		  </table>
		</div>
		<div class="row form-group">
			<button class="btn btn-default" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
