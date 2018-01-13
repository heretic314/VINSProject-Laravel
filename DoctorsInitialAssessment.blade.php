<html>
<head>
	<title>
		Doctor's Initial Assessment
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
.body{
  padding-top: 25px;
}
</style>
<body class="body">
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Doctor's Initial Assessment</h1>
			</div>
			<div class="col-md-6">
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
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">VinsLogo</a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed_menu" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="collapsed_menu">
			<ul class="nav navbar-nav">
				<li><a href="/index">Index</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">List of Forms <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/DoctorsInitialAssessment">DoctorsInitialAssessment</a></li>
						<li><a href="/DoctorsHandover">DoctorsHandover</a></li>
						<li><a href="#">Form3</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Form4</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Form5</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Link</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->

	</div><!-- /.container-fluid -->
	</nav>
<form action="/DoctorsInitialAssessment" method="post">
	{{ csrf_field() }}
	<div class="row form-group">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					<label>History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="history" value="{{ old('history') }}" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Past History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="past_history" value="{{ old('past_history') }}"/>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<textarea class="form-control" name="addressograph" value="Addressograph"></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-4">
					<label>Allergic History : </label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="allergic_history" value="{{ old('allergic_history') }}"/>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<h3>In case of Road Accident : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Name of Informant : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="name_informant" value="{{ old('name_informant') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Brought By : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="brought_by" value="{{ old('brought_by') }}"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Place of Accident : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="place_of_accident" value="{{ old('place_of_accident') }}" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Time : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="time" name="current_time" value="{{ old('current_time') }}"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Date : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="date" name="current_date" value="{{ old('current_date') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>MLC Done outside or not : </label>
			</div>
			<div class="col-md-6">
	      <select class="form-control" name="mlc" value="{{ old('mlc') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<hr />
	<div class="row">
		<h3>History Of : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>LOC : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="loc" value="{{ old('loc') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>ENT Bleeding : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="ent_bleeding" value="{{ old('ent_bleeding') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Seizures : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="seizures" value="{{ old('seizures') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Vomiting : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="vomiting" value="{{ old('vomiting') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>
	<hr />

	<div class="row">
		<h3>Vitals : </h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pulse : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="pulse" value="{{ old('pulse') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Temprature : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="temp" value="{{ old('temp') }}" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>BP : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="bp" value="{{ old('bp') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>SPO2 : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="spo2" value="{{ old('spo2') }}"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>RBS : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="rbs" value="{{ old('rbs') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>Pain : </label>
			</div>
			<div class="col-md-6">
				<select class="form-control" name="pain" value="{{ old('pain') }}">
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
	      <label>GCS : </label>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_e" value="{{ old('gcs_e') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_m" value="{{ old('gcs_m') }}"/>
			</div>
			<div class="col-md-6">
	      <input class="form-control" type="text" name="gcs_v" value="{{ old('gcs_v') }}"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Systematic Examination : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="systematic_examination" value="{{ old('systematic_examination') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Any other Findings or Injuries : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="any_other" value="{{ old('any_other') }}"/>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Treated on Admission : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="treated_on_admission" value="{{ old('treated_on_admission') }}"/>
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Shifted To : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="shifted_to" value="{{ old('shifted_to') }}"/>
			</div>
		</div>
	</div>
	<div class="row form-group">
		<button class="btn btn-default" type="submit">Submit </button>
	</div>


</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
