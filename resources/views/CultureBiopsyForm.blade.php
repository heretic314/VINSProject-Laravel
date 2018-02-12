@extends('layouts.app')

@section('content')
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

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

	<form name="{{ url('/CultureBiopsyForm') }}" method="post">
		{{ csrf_field() }}
		<div class="row form-group">
			<div class="col-md-4">
				<div class="row form-group">
					<div class="col-md-6">
						<label>Date:</label>
					</div>
					<div class="col-md-6">
						<input type="date" class="form-control" name="date" id="date">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<label>Time :</label>
					</div>
					<div class="col-md-6">
						<input type="time" class="form-control" name="time" id="time">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row form-group">
					<div class="col-md-6">
						<label>Doctor's Name : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="doctors_name" id="doctors_name">
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row form-group">
					<div class="col-md-6">
						<label>Given By : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="given_by" id="given_by">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-6">
						<label>Recieved By : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="received_by" id="received_by">
					</div>
				</div>
			</div>
		</div>


		<hr>

		<table class="table table-bordered table-responsive">
		    <thead>
				  <tr>
					<th>Histopathology</th>
					<th>Cytology</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td>
							<div class="col-md-6">
								<label class="control-label" for="ihc">IHC:</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ihc" id="ihc">
							</div>
				    </td>
						<td>
							<div class="">
								<select class="form-control" name="cytology"  value="{{ old('cytology') }}">
									<option value="culture">Culture</option>
									<option value="sensitivity">Sensitivity</option>
								</select>
							</div>
						</td>
				  </tr>
				  <tr>
				    <td>
							<div class="col-md-6">
								<label class="control-label" for="others">Others:</label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" name="others" id="others">
							</div>
							<div class="">
								<select class="form-control" name="histopathology"  value="{{ old('histopathology') }}">
									<option value="gram stain">Gram Stain</option>
									<option value="zn stain">ZN Stain</option>
								</select>
							</div>
				    </td>
						<td>
							<div class="">
								<select class="form-control" name="cytology_01"  value="{{ old('cytology_01') }}">
									<option value="myco tb">Myco TB</option>
									<option value="aerobic">Aerobic</option>
									<option value="anaerobic">Anaerobic</option>
								</select>
							</div>
						</td>
				  </tr>
				</tbody>
		  </table>

		  <table class="table table-bordered table-responsive">
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
							<select class="form-control" name="type_of_biopsy"  value="{{ old('type_of_biopsy') }}">
								<option value="complete">Complete</option>
								<option value="partial">Partial</option>
								<option value="punch">Punch</option>
								<option value="needle">Needle</option>
								<option value="endoscopic">Endoscopic</option>
							</select>
						</div>
			    </td>
				<td>
					<div class="">
						<textarea class="form-control" rows="6" name="specimen_info" placeholder="Specimen info here"></textarea>
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
							<select class="form-control" name="send_to"   value="{{ old('send_to') }}">
								<option value="toprani lab">Toprani Lab</option>
								<option value="kadakiya lab">Kadakiya Lab</option>
							</select>
						</div>
		  		</div>
		  		<div class="col-md-4">
		  			<label class="control-label" for="consultant_sign">Consultant's Sign:</label>
						<div class="">
							<input type="text" class="form-control" name="consultant_sign" id="consultant_sign">
						</div>
						<label class="control-label" for="consultant_name">Consultant's Name:</label>
						<div class="">
							<input type="text" class="form-control" name="consultant_name" id="consultant_name">
						</div>
					</div>
					<div class="col-md-4">
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
			<div class="text-center form-group">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
	</form>
</div>
@endsection
