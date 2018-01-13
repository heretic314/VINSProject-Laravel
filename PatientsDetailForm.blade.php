<html>
<head>
	<title>
		Patient Detail Form
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Patient Details Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						F/OPD/01
					</div>
				</div>
			</div>
		</div>

		<form id="patientdetailform" name="patientdetailform">
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="date">Date : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type = "date" id = "date" name="date">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="time">Time : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time" id="time"/>
					</div>
				</div>
			</div>
			<hr />
			<div class="row form-group">
				<div class="col-md-4">
						<div class="col-md-6">
							<label for="first_name" class="control-label">First Name : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type = "text" id = "first_name" name="first_name"/>
						</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="middle_name" class="control-label">Middle Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="middle_name" name="middle_name" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="col-md-6">
						<label for="last_name" class="control-label">Last Name: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" id="last_name" name="last_name"/>
					</div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label for="date_of_birth">Date of Birth: </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" id="date_of_birth" name="date_of_birth"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label class="control-label" for="sex">Sex: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" id="sex" name="sex">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label for="address">Address: </label>
					</div>
					<div class="col-md-6">
			      <textarea class="form-control" type="text" id="address" name="address"/> </textarea>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="phone_no">Phone no.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="phone_no" name="phone_no"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="mobile_no">Mobile no.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="mobile_no" name="mobile_no"/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="reference_dr">Reference Dr.: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="reference_dr" name="reference_dr"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="consulting_dr">Consulting Dr..: </label>
					</div>
					<div class="col-md-6">
			      <input class="form-control" type="text" id="consulting_dr" name="consulting_dr"/>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
			      <label class="control-label" for="case">Case: </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" id="case" name="case">
							<option value="new">New</option>
							<option value="old">Old</option>
						</select>
					</div>
				</div>
			</div>

		</form>
	</div>
</body>
