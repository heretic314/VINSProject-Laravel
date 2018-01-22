@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6">
					<h1 >Drug Requisition Form</h1>
					</div>
					<div class="col-md-6">
						<div class="text-right">
							DOC NO. F/IPD/56 <br>
							REV. No. 0.0 <br>
							WEF 24-04-2016
						</div>
					</div>
				</div>
			</div>

			@if ($errors->any())
		      <div class="alert alert-danger" role="alert">
		          Please enter atleast one entry.
		      </div>
		  @endif



			<form action="/DrugRequisition" method="post">
				{{csrf_field()}}
				<div class="row form-group">
				  <table class="table table-bordered">
				    <thead>
						  <tr>
								<th class="text-center">Sr. No.</th>
								<th class="text-center">Name of the Drug</th>
								<th class="text-center">Qty.</th>
								<th class="text-center">Batch No.</th>
								<th class="text-center">Expiry Date</th>
								<th class="text-center">Issued by</th>
								<th class="text-center">Received by </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
						    <td class="text-center">1</td>
								<td><input type="text" name="name_of_drug_01" id="name_of_drug_01" class="form-control" value="{{ old('name_of_drug_01') }}"/>
									@if($errors->has('name_of_drug_01'))
											<span class="help-block">{{ $errors->first('name_of_drug_01') }}</span>
									@endif
								</td>
								<td><input type="text" name="quantity_01" id="quantity_01" class="form-control" value="{{ old('quantity_01') }}"/>
									@if($errors->has('quantity_01'))
											<span class="help-block">{{ $errors->first('quantity_01') }}</span>
									@endif
								</td>
								<td><input type="text" name="batch_no_01" id="batch_no_01" class="form-control" value="{{ old('batch_no_01') }}"/>
									@if($errors->has('batch_no_01'))
											<span class="help-block">{{ $errors->first('batch_no_01') }}</span>
									@endif
								</td>
								<td><input type="date" name="expiry_date_01" id="expiry_date_01" class="form-control" value="{{ old('expiry_date_01') }}"/>
									@if($errors->has('expiry_date'))
											<span class="help-block">{{ $errors->first('expiry_date') }}</span>
									@endif
								</td>
								<td><input type="text" name="issued_by_01" id="issued_by_01" class="form-control" value="{{ old('issued_by_01') }}"/>
									@if($errors->has('issued_by_01'))
											<span class="help-block">{{ $errors->first('issued_by_01') }}</span>
									@endif
								</td>
								<td><input type="text" name="received_by_01" id="received_by_01" class="form-control" value="{{ old('received_by_01') }}"/>
									@if($errors->has('received_by_01'))
											<span class="help-block">{{ $errors->first('received_by_01') }}</span>
									@endif
								</td>
							</tr>
							<tr>
						    <td class="text-center">2</td>
								<td><input type="text" name="name_of_drug_02" id="name_of_drug_02" class="form-control"  value="{{ old('name_of_drug_02') }}"/></td>
								<td><input type="text" name="quantity_02" id="quantity_02" class="form-control" value="{{ old('quantity_02') }}"/></td>
								<td><input type="text" name="batch_no_02" id="batch_no_02" class="form-control" value="{{ old('batch_no_02') }}"/></td>
								<td><input type="date" name="expiry_date_02" id="expiry_date_02" class="form-control" value="{{ old('expiry_date_02') }}"/></td>
								<td><input type="text" name="issued_by_02" id="issued_by_02" class="form-control" value="{{ old('issued_by_02') }}"/></td>
								<td><input type="text" name="received_by_02" id="received_by_02" class="form-control" value="{{ old('received_by_02') }}"/></td>
							</tr>
							<tr>
						    <td class="text-center">3</td>
								<td><input type="text" name="name_of_drug_03" id="name_of_drug_03" class="form-control"  value="{{ old('name_of_drug_03') }}"/></td>
								<td><input type="text" name="quantity_03" id="quantity_03" class="form-control" value="{{ old('quantity_03') }}"/></td>
								<td><input type="text" name="batch_no_03" id="batch_no_03" class="form-control" value="{{ old('batch_no_03') }}"/></td>
								<td><input type="date" name="expiry_date_03" id="expiry_date_03" class="form-control" value="{{ old('expiry_date_03') }}"/></td>
								<td><input type="text" name="issued_by_03" id="issued_by_03" class="form-control" value="{{ old('issued_by_03') }}"/></td>
								<td><input type="text" name="received_by_03" id="received_by_03" class="form-control" value="{{ old('received_by_03') }}"/></td>
							</tr>
							<tr>
						    <td class="text-center">4</td>
								<td><input type="text" name="name_of_drug_04" id="name_of_drug_04" class="form-control"  value="{{ old('name_of_drug_04') }}"/></td>
								<td><input type="text" name="quantity_04" id="quantity_04" class="form-control" value="{{ old('quantity_04') }}"/></td>
								<td><input type="text" name="batch_no_04" id="batch_no_04" class="form-control" value="{{ old('batch_no_04') }}"/></td>
								<td><input type="date" name="expiry_date_04" id="expiry_date_04" class="form-control" value="{{ old('expiry_date_04') }}"/></td>
								<td><input type="text" name="issued_by_04" id="issued_by_04" class="form-control" value="{{ old('issued_by_04') }}"/></td>
								<td><input type="text" name="received_by_04" id="received_by_04" class="form-control" value="{{ old('received_by_04') }}"/></td>
							</tr>
							<tr>
						    <td class="text-center">5</td>
								<td><input type="text" name="name_of_drug_05" id="name_of_drug_05" class="form-control"  value="{{ old('name_of_drug_05') }}"/></td>
								<td><input type="text" name="quantity_05" id="quantity_05" class="form-control" value="{{ old('quantity_05') }}"/></td>
								<td><input type="text" name="batch_no_05" id="batch_no_05" class="form-control" value="{{ old('batch_no_05') }}"/></td>
								<td><input type="date" name="expiry_date_05" id="expiry_date_05" class="form-control" value="{{ old('expiry_date_05') }}"/></td>
								<td><input type="text" name="issued_by_05" id="issued_by_05" class="form-control" value="{{ old('issued_by_05') }}"/></td>
								<td><input type="text" name="received_by_05" id="received_by_05" class="form-control" value="{{ old('received_by_05') }}"/></td>
							</tr>
							<tr>
						    <td class="text-center">6</td>
								<td><input type="text" name="name_of_drug_06" id="name_of_drug_06" class="form-control"  value="{{ old('name_of_drug_06') }}"/></td>
								<td><input type="text" name="quantity_06" id="quantity_06" class="form-control" value="{{ old('quantity_06') }}"/></td>
								<td><input type="text" name="batch_no_06" id="batch_no_06" class="form-control" value="{{ old('batch_no_06') }}"/></td>
								<td><input type="date" name="expiry_date_06" id="expiry_date_06" class="form-control" value="{{ old('expiry_date_06') }}"/></td>
								<td><input type="text" name="issued_by_06" id="issued_by_06" class="form-control" value="{{ old('issued_by_06') }}"/></td>
								<td><input type="text" name="received_by_06" id="received_by_06" class="form-control" value="{{ old('received_by_06') }}"/></td>
							</tr>
							<tr>
						    <td class="text-center">7</td>
								<td><input type="text" name="name_of_drug_07" id="name_of_drug_07" class="form-control"  value="{{ old('name_of_drug_07') }}"/></td>
								<td><input type="text" name="quantity_07" id="quantity_07" class="form-control" value="{{ old('quantity_07') }}"/></td>
								<td><input type="text" name="batch_no_07" id="batch_no_07" class="form-control" value="{{ old('batch_no_07') }}"/></td>
								<td><input type="date" name="expiry_date_07" id="expiry_date_07" class="form-control" value="{{ old('expiry_date_07') }}"/></td>
								<td><input type="text" name="issued_by_07" id="issued_by_07" class="form-control" value="{{ old('issued_by_07') }}"/></td>
								<td><input type="text" name="received_by_07" id="received_by_07" class="form-control" value="{{ old('received_by_07') }}"/></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<div class="col-md-5">
							<label class="control-label" for="name">Name and Signature :</label>
						</div>
						<div class="col-md-7">
							<input type="text" class="form-control" name="name" id="name"  value="{{ old('name') }}">
						</div>
					</div>
					<div class="form-group col-md-3">
						<div class="col-md-4">
							<label class="control-label" for="date">Date :</label>
						</div>
						<div class="col-md-8">
							<input type="date" class="form-control" id="date" name="date"  value="{{ old('date') }}">
						</div>
					</div>
					<div class="form-group col-md-3">
						<div class="col-md-4">
							<label class="control-label" for="time">Time :</label>
						</div>
						<div class="col-md-8">
							<input type="time" class="form-control" id="time" name="time"  value="{{ old('time') }}">
						</div>
					</div>
				</div>
				<div class="row form-group text-center">
					<button class="btn btn-default" type="submit">Submit </button>
				</div>
			</form>
		</div>
	</body>
</html>
@endsection
