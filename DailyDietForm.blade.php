<!DOCTYPE html>
<html>
<head>
	<title>
		Daily Diet Form
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<div class="container">
	<form name="dailydietform" class="form-horizontal">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Daily Diet Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/DS/08 <br>
						REV. No. 0.2 <br>
						WEF 26-04-2017
					</div>
				</div>
			</div>
		</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<label>Floor Name : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="floor_name" id="floor_name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Cross Verified By:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="cross_verified_by" id="cross_verified_by">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<textarea class="form-control" name="addressograph" placeholder="Addressograph Here"></textarea>
		</div>
	</div>
	<hr>

	<div class="row form-group form-check">
		<table class="table table-bordered table-condensed small" name="dailydietform" id="dailydietform">
			<thead>

				<tr>
					<th colspan="3" rowspan="2">
						<div class="form-inline text-">
							<label>Date:</label>
							<input type="date" class="form-control" name="date" id="date">
						</div>
					</th>

					<th colspan="10" class="text-center">RTF/Liquid</th>
					<th rowspan="3">Remarks</th>
				</tr>

				<tr>
					<th class="text-center">S-1 (6 AM)</th>
					<th class="text-center">S-2 (8 AM)</th>
					<th class="text-center">S-3 (10 AM)</th>
					<th class="text-center">S-4 (12 PM)</th>
					<th class="text-center">S-5 (2 PM)</th>
					<th class="text-center">S-6 (4 PM)</th>
					<th class="text-center">S-7 (6 PM)</th>
					<th class="text-center">S-8 (8 PM)</th>
					<th class="text-center">S-9 (10 PM)</th>
					<th class="text-center">S-10 (12 AM)</th>
				</tr>

				<tr>
					<th class="text-center">Room. No.</th>
					<th class="text-center">Patient Name & UHID No.</th>
					<th class="text-center">Diet Suggested By (Consultant/RMO)</th>
					<th class="text-center">M.Tea (6.30 AM)</th>
					<th class="text-center">M.B/F (9 AM)</th>
					<th class="text-center">Soup (11.30 AM)</th>
					<th class="text-center">Lunch (12.30 PM)</th>
					<th></th>
					<th class="text-center">E.Snacks (3.30 PM)</th>
					<th class="text-center">Juice (5 PM)</th>
					<th class="text-center">Dinner (7.30 PM)</th>
					<th class="text-center">Milk (9.30 PM)</th>
					<th class="text-center" />
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><input class="form-control" type="text" name="room_no" /></td>
					<td><input class="form-control" type="text" name="patient_name" /></td>
					<td><input class="form-control" type="text" name="diet_suggested_by"/></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_tea" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_breakfast" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="soup" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="lunch" /></td>
					<td></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="e_snacks" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="juice" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="dinner" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="milk" /></td>
					<td></td>
					<td><input class="form-control" type="text" name="remarks" /></td>
				</tr>
			</tbody>
		</table>
		<!--
		<div class="text-center">
			<input type="button" name="addrow" onclick="addRow()" class="btn" value="Add A Row">
		</div>
	-->
	</div>
	</form>
</div>
</html>
