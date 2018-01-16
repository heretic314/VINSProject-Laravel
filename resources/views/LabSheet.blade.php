@extends('layouts.app')

@section('content')
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
	@if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif


	<form action="/labsheet" method="post">
		{{ csrf_field() }}

		<div class="row form-group">
			<div class="col-md-10"><nav class="navbar navbar-default navbar-fixed-top">
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
				<li><a href="#">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">List of Forms <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Form1</a></li>
						<li><a href="#">Form2</a></li>
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
		<div class="row form-group">
			<input class="btn btn-default" type="submit">
		</div>
	</form>
</div>
@endsection
