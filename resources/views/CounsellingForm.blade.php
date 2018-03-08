@extends('layouts.app')

@section('content')

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Counselling Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/63 <br>
					REV. No. 0.1 <br>
					WEF 10-04-2017
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-10">

	</div>
	<div class="row">
		<div class="col-md-2 text-right">
			<textarea class="text-right form-control" name="" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
		</div>
	</div>
	<hr>
	<form>
		<div class="row">
			<table class="table table-bordered table-responsive" name="counselling_form" id="counselling_form">
				<thead>
					<tr>
						<th class="text-center">Sr. No.</th>
						<th class="text-center">Date</th>
						<th class="text-center">Time</th>
						<th class="text-center">Counsellor</th>
						<th class="text-center">Name of Relatives</th>
						<th class="text-center">Remarks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>01</td>
						<td><input class="form-control" type="text" name="date_00" /></td>
						<td><input class="form-control" type="text" name="time_00" /></td>
						<td><input class="form-control" type="text" name="counsellor_00" /></td>
						<td><input class="form-control" type="text" name="relatives_name_00" /></td>
						<td><input class="form-control" type="text" name="remarks_00" /></td>
					</tr>
					<tr>
						<td>02</td>
						<td><input class="form-control" type="text" name="date_01" /></td>
						<td><input class="form-control" type="text" name="time_01" /></td>
						<td><input class="form-control" type="text" name="counsellor_01" /></td>
						<td><input class="form-control" type="text" name="relatives_name_01" /></td>
						<td><input class="form-control" type="text" name="remarks_01" /></td>
					</tr>
					<tr>
						<td>03</td>
						<td><input class="form-control" type="text" name="date_02" /></td>
						<td><input class="form-control" type="text" name="time_02" /></td>
						<td><input class="form-control" type="text" name="counsellor_02" /></td>
						<td><input class="form-control" type="text" name="relatives_name_02" /></td>
						<td><input class="form-control" type="text" name="remarks_02" /></td>
					</tr>
					<tr>
						<td>04</td>
						<td><input class="form-control" type="text" name="date_03" /></td>
						<td><input class="form-control" type="text" name="time_03" /></td>
						<td><input class="form-control" type="text" name="counsellor_03" /></td>
						<td><input class="form-control" type="text" name="relatives_name_03" /></td>
						<td><input class="form-control" type="text" name="remarks_03" /></td>
					</tr>
					<tr>
						<td>05</td>
						<td><input class="form-control" type="text" name="date_04" /></td>
						<td><input class="form-control" type="text" name="time_04" /></td>
						<td><input class="form-control" type="text" name="counsellor_04" /></td>
						<td><input class="form-control" type="text" name="relatives_name_04" /></td>
						<td><input class="form-control" type="text" name="remarks_04" /></td>
					</tr>
					<tr>
						<td>06</td>
						<td><input class="form-control" type="text" name="date_05" /></td>
						<td><input class="form-control" type="text" name="time_05" /></td>
						<td><input class="form-control" type="text" name="counsellor_05" /></td>
						<td><input class="form-control" type="text" name="relatives_name_05" /></td>
						<td><input class="form-control" type="text" name="remarks_05" /></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
</div>
</html>
@endsection
