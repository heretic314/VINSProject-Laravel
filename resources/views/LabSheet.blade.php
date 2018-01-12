<html>
<head>
	<title>
		Lab Sheet
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

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
	<form name="labsheet">
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
			<div class="col-md-2">
				<textarea class="form-control" name="addressograph" placeholder="Addressograph"></textarea>
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
						<td><input class="form-control" type = "text" id = "investigation_01"></td>
						<td><input class="form-control" type = "date" id = "date_01"></td>
						<td><input class="form-control" type = "text" id = "name_01"></td>
						<td><input class="form-control" type = "text" id = "remark_01"></td>
				  </tr>
					<tr>
						<td>2</td>
						<td><input class="form-control" type = "text" id = "investigation_02"></td>
						<td><input class="form-control" type = "date" id = "date_02"></td>
						<td><input class="form-control" type = "text" id = "name_02"></td>
						<td><input class="form-control" type = "text" id = "remark_02"></td>
				  </tr>
					<tr>
						<td>3</td>
						<td><input class="form-control" type = "text" id = "investigation_03"></td>
						<td><input class="form-control" type = "date" id = "date_03"></td>
						<td><input class="form-control" type = "text" id = "name_03"></td>
						<td><input class="form-control" type = "text" id = "remark_03"></td>
				  </tr>
					<tr>
						<td>4</td>
						<td><input class="form-control" type = "text" id = "investigation_04"></td>
						<td><input class="form-control" type = "date" id = "date_04"></td>
						<td><input class="form-control" type = "text" id = "name_04"></td>
						<td><input class="form-control" type = "text" id = "remark_04"></td>
				  </tr>
					<tr>
						<td>6</td>
						<td><input class="form-control" type = "text" id = "investigation_06"></td>
						<td><input class="form-control" type = "date" id = "date_06"></td>
						<td><input class="form-control" type = "text" id = "name_06"></td>
						<td><input class="form-control" type = "text" id = "remark_06"></td>
				  </tr>
					<tr>
						<td>7</td>
						<td><input class="form-control" type = "text" id = "investigation_07"></td>
						<td><input class="form-control" type = "date" id = "date_07"></td>
						<td><input class="form-control" type = "text" id = "name_07"></td>
						<td><input class="form-control" type = "text" id = "remark_07"></td>
				  </tr>
			  </tbody>
		  </table>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
