<html>
<head>
	<title>
		Patient Diet Record
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Patient Diet Record</h1>
				</div>
				<div>
					<div class="text-right">
						DOC NO. FMT/HIC/09 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<form action="patientdietrecord.php" method="post">

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Dietician / Nurses Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type = "text" name = "dietician_name">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Date : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type = "date" name = "date" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Time : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="time" name="time" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Bed No : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="bed_no" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>UHID No : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="uhid_no" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Patient Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="patient_name" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Diagnosis : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="diagnosis" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Consultant's Name : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="consultants_name" />
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Diet to be Given : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="diet_to_be_given" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label>Remarks : </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" name="remarks" />
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<input class="btn btn-success" type="submit" />
					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>
