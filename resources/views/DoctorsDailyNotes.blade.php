<html>
	<head>
		<title>
			Doctor's Daily Notes
		</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6">
					<h2>Doctor's Daily Notes</h2>
					</div>
					<div class="col-md-6">
						<div class="text-right">
							DOC NO. FMT/HIC/09 </br>
							REV. No. 0.1 </br>
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
									<li><a href="/DoctorsInitialAssessment">Doctor's Initial Assessment</a></li>
									<li><a href="/DoctorsHandover">Doctor's Handover</a></li>
									<li><a href="/DrugRequisition">Drug Requisition</a></li>
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
			<form action="/DoctorsDailyNotes" method="post">
				{{csrf_field()}}
				<div class="row form-group">
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Patient's name: </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label>IPD No : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="ipd_no" type="text" name="ipd_no" value="{{ old('ipd_no') }}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Sex : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="sex" value="{{ old('sex') }}">
								<option value="na">NA</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Attending consultant: </label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" id="attending_consultant" name="attending_consultant" value="{{ old('attending_consultant') }}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label> Age : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" id="ipd_no" type="text" name="age" value="{{ old('age') }}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="col-md-6">
							<label>Date : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="date" name="date" value="{{ old('date') }}">
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<h3>7 AM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_07" value="{{ old('c_o_07') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_07" value="{{ old('oe_pulse_07') }}"/>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>BP : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp_07" value="{{ old('bp_07') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_07" value="{{ old('temp_07') }}"/>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_07" value="{{ old('resp_spo2_07') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_07" value="{{ old('pain_07') }}">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>9 AM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_09" value="{{ old('c_o_09') }}" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_09" value="{{ old('oe_pulse_09') }}" />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>BP : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp_09" value="{{ old('bp_09') }}" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_09" value="{{ old('temp_09') }}" />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_09" value="{{ old('resp_spo2_09') }}" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_09" value="{{ old('pain_09') }}">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>3 PM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_15" value="{{ old('c_o_15') }}"  />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_15" value="{{ old('oe_pulse_15') }}"  />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>BP : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp_15" value="{{ old('bp_15') }}"  />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_15" value="{{ old('temp_15') }}"  />
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_15" value="{{ old('resp_spo2_15') }}"  />
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_15" value="{{ old('pain_15') }}" >
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<h3>9 PM S/B</h3>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>C/O : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="c_o_21" value="{{ old('c_o_21') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>O/E Pulse : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="oe_pulse_21" value="{{ old('oe_pulse_21') }}"/>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>BP : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp_21" value="{{ old('bp_21') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Temprature : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp_21" value="{{ old('temp_21') }}"/>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Resp / SPO2 : </label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp_spo2_21" value="{{ old('resp_spo2_21') }}"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
							<label>Pain : </label>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="pain_21" value="{{ old('pain_21') }}">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-default" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</body>
</html>
