<html>
<head>
	<title>
		Plan Of Care
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>

<body>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Plan of Care</h1>
			</div>	
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/48 <br>
					REV. No. 0.2 <br>
					WEF 31-01-2015
				</div>	
			</div>
		</div>
	</div>
	
	<!-- ignore this. 
	<div class="jumbotrom">
		<a href="" class="btn btn-default btn-lg">asd</a>
		<a href="" class="btn btn-success btn-lg">asd</a>
		<a href="" class="btn btn-link btn-lg">asd</a>
		<a href="" class="btn btn-default btn-lg">asd</a>
		<a href="" class="btn btn-default btn-lg">asd</a>
	</div>
	-->
</div>

<form id="planofcare" method="post" action="">
<div class="container">	
	<div class="text-right">
	 <p class="text-right">Addressograph :</p>
	 <textarea class=" text-right" id="Addressograph" rows="2" placeholder="Addressograph Here" ></textarea>
	</div>
	
	<div class="form-group">
	 <label>Diagnosis :</label>
	 <textarea class="form-control" id="diagnosis" rows="3" placeholder="Diagnosis of the Patient" ></textarea>
	</div>
	
	<div class="form-group">
	 <label>Patient's Needs and Treatment Goal :</label>
	 <textarea class="form-control" id="need_treatment_goal" rows="3" placeholder="To be filled by consultant"></textarea>
	</div>
	
	<div class="form-group">
	 <label>Treatment Plan :</label>
	 <textarea class="form-control" id="treatment_plan" rows="2" placeholder="To be filled by consultant" ></textarea>
	</div>
	
	<div class="form-group">
	 <label>Preventive Aspects :</label>
	 <textarea class="form-control" id="preventive_aspects" rows="4" placeholder="To be filled by consultant"></textarea>
	</div>	
	<div>
	<button class="btn btn-success btn-bg" type="submit" form="planofcare" value="submit">Submit</button>
	</div>
</div>
</form>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>