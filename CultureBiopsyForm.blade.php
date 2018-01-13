<html>
<head>
	<title>
		Culture Biopsy Form
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Culture / Biopsy Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/11 <br>
					REV. No. 0.0 <br>
					WEF 25-09-2016
				</div>
			</div>
		</div>
	</div>

	<form id="culturebiopsyform">
		<div class="row form-group">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Date:</label>
						</div>
						<div class="col-md-6">
							<input type="date" class="form-control" name="date" id="date">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Time :</label>
						</div>
						<div class="col-md-6">
							<input type="date" class="form-control" name="date" id="date">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<textarea class="form-control" placeholder="Addressograph here"></textarea>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Doctor's Name : </label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="doctors_name" id="doctors_name">
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Given By : </label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="given_by" id="given_by">
				</div>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Recieved By : </label>
				</div>
				<div class="col-md-6">
					<input type="text" class="form-control" name="received_by" id="received_by">
				</div>
			</div>
		</div>

		<hr>
		
		<table class="table table-bordered">
		    <thead>
			  <tr>
				<th>Histopathology</th>
				<th>Cytology</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>
			    	<label class="control-label" for="ihc">IHC:</label>
					<div class="">
						<input type="text" class="form-control" name="ihc" id="ihc">
					</div>
			    </td>
				<td>
					<div class="">
						<input type="radio" class="radio-inline" name="cytology_00" id="cytology_00" value="Culture"> Culture <br>
						<input type="radio" class="radio-inline" name="cytology_00" id="cytology_00" value="Sensitivity"> Sensitivity
					</div>
				</td>
			  </tr>

			  <tr>
			    <td>
			    	<label class="control-label" for="others">Others:</label>
					<div class="">
						<input type="text" class="form-control" name="others" id="others">
					</div>
					<br>
					<div class="">
						<input type="radio" class="radio-inline" name="histopathology_01" id="histopathology_01" value="gram_stain"> Gram Stain <br>
						<input type="radio" class="radio-inline" name="histopathology_01" id="histopathology_01" value="zn_stain"> ZN Stain
					</div>
			    </td>
				<td>
					<div class="">
						<input type="radio" class="radio-inline" name="cytology_01" id="cytology_01" value="myco_tb"> Myco TB <br>
						<input type="radio" class="radio-inline" name="cytology_01" id="cytology_01" value="aerobic"> Aerobic <br>
						<input type="radio" class="radio-inline" name="cytology_01" id="cytology_01" value="anaerobic"> Anaerobic
					</div>
				</td>
			  </tr>
			</tbody>
		  </table>

		  <table class="table table-bordered">
		    <thead>
			  <tr>
				<th>Type of Biopsy</th>
				<th>Specimen</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>
			    	<label class="control-label" for="type_of_biopsy">Surgical Excision:</label>
					<div class="">
						<input type="radio" class="radio-inline" name="type_of_biopsy" id="type_of_biopsy" value="Culture"> Complete <br>
						<input type="radio" class="radio-inline" name="type_of_biopsy" id="type_of_biopsy" value="Sensitivity"> Partial <br>
						<input type="radio" class="radio-inline" name="type_of_biopsy" id="type_of_biopsy" value="Culture"> Punch <br>
						<input type="radio" class="radio-inline" name="type_of_biopsy" id="type_of_biopsy" value="Sensitivity"> Needle <br>
						<input type="radio" class="radio-inline" name="type_of_biopsy" id="type_of_biopsy" value="Culture"> Endoscopic
					</div>
			    </td>
				<td>
					<div class="">
						<textarea class="form-control" rows="6" placeholder="Specimen info here"></textarea>
					</div>
				</td>
			  </tr>
			</tbody>
		  </table>
		  <hr>
		  <div class="">
		  		<label class="control-label" for="clinical_details"><h4>Patient's Clinical Details:</h4></label>
				<div class="">
					<textarea class="form-control" rows="6" name="clinical_details" id="clinical_details" placeholder="Enter the patient's clinical details"></textarea>
				</div>
		  </div>
		  <hr>
		  <div class="">
		  		<label class="control-label" for="imaging_details"><h4>Imaging Details:</h4></label>
				<div class="">
					<textarea class="form-control" rows="6" name="imaging_details" id="imaging_details" placeholder="Graph?"></textarea>
				</div>
		  </div>
		  <hr>
		  <div class="form-group">
		  		<div class="col-md-4">
		  			<label class="control-label" for="send_to"><h3>Send to:</h3></label>
					<div class="">
						<input type="radio" class="radio-inline" name="send_to" id="send_to" value="toprani_lab"> Toprani Lab <br>
						<input type="radio" class="radio-inline" name="send_to" id="send_to" value="kadakiya_lab"> Kadakiya Lab
					</div>
		  		</div>
		  		<div class="col-md-8">
		  			<label class="control-label" for="consultant_sign">Consultant's Sign:</label>
					<div class="">
						<input type="text" class="form-control" name="consultant_sign" id="consultant_sign">
					</div>
					<label class="control-label" for="consultant_name">Consultant's Name:</label>
					<div class="">
						<input type="text" class="form-control" name="consultant_name" id="consultant_name">
					</div>
					<label class="control-label" for="date_for_sign">Date:</label>
					<div class="">
						<input type="date" class="form-control" name="date_for_sign" id="date_for_sign">
					</div>
					<label class="control-label" for="time_for_sign">Time:</label>
					<div class="">
						<input type="time" class="form-control" name="time_for_sign" id="time_for_sign">
					</div>
		  		</div>
		  </div>
	</form>
</div>
</body>
