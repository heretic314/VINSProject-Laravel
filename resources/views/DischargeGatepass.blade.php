@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Discharge Gatepass</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/62 <br>
					REV. No. 0.0 <br>
					WEF 25-02-2017
				</div>
			</div>
		</div>
	</div>

	<form action="" method="post">
		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's Name : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type-"text" name="patients_name" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Room Detail : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" name="room_details" />
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Dr. Name : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="dr_name"/>
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Address : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="address" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Patient's File : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="patients_file" />
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Contact Name : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="contact_name" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Contact NO : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="contact_no" />
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Bill NO : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="bill_no" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label> D.O.A : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="doa" />
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Discharge Sheet : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="discharge_sheet" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-6">
					<label>D.O.D : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="dod" />
				</div>
			</div>
		</div>

		<div class="row form-control">
			<div class="col-md-6">
				<div class="col-md-6">
					<label>Remarks : </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="remarks" />
				</div>
			</div>
		</div>

		<div class="row">
			<button class="submit">Submit</button>
		</div>
	</form>
</div>

@endsection
