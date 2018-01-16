@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6">
						<h1>Nursing Duty Over</h1>
					</div>
					<div class="col-md-6">
						<div class="text-right">
							DOC NO. F/IPD/38 <br>
							REV. No. 0.0 <br>
							WEF 01-01-2014
						</div>
					</div>
				</div>
			</div>

			@if ($errors->any())
		      <div class="alert alert-danger" role="alert">
		          Please fix the following errors
		      </div>
		  @endif



			<form name="nursingdutyover" action="/NursingDutyOver" method="post">
				{{csrf_field()}}
				<div class ="row form-group">
					<div class="col-md-4">
						<textarea class="form-control" name="addressograph" rows="3" placeholder="Addressograph Here" value="{{ old('addressograph') }}"></textarea>
					</div>
					<div class="col-md-8">
						<textarea class="form-control" name="specific_instruction" rows="3" placeholder="Specific Instructions If Any" value="{{ old('specific_instruction') }}"></textarea>
					</div>
				</div>
				<hr />
				<div class="row form-group">
				  <table class="table table-bordered table-responsive">
				  	<thead>
					  	<tr>
								<th></th>
								<th colspan="2" class="text-center">Morning</th>
								<th colspan="2" class="text-center">Evening</th>
								<th colspan="2" class="text-center">Night</th>
						 </tr>
						</thead>
						<tbody>
							<tr>
								<td>Unit Nurse Name</td>
								<div class="form-group">
									<td colspan="2"><input type = "text" class = "form-control" name="M_nurse_name" value="{{ old('M_nurse_name') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" name="E_nurse_name" value="{{ old('E_nurse_name') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" name="N_nurse_name" value="{{ old('N_nurse_name') }}"/></td>
								</div>
						  </tr>

							<tr>
								<td>In Charge on Duty</td>
								<div class="form-check-input">
								  <td colspan="2"><input type = "text" class = "form-control" name="M_incharge_name" value="{{ old('M_incharge_name') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" name="E_incharge_name" value="{{ old('E_incharge_name') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" name="N_incharge_name" value="{{ old('N_incharge_name') }}"/></td>
								</div>
							</tr>

						  <tr>
								<td>1. Eye Care </td>
								<div class="form-check-input">
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="M_eyecare"  value="yes" /></td>
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="E_eyecare"  value="yes" /></td>
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="N_eyecare"  value="yes" /></td>
								</div>
						  </tr>

						  <tr>
								<td>2. Mouth Care</td>
								<div class="form-check-input">
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="M_mouthcare"  value="yes" @if(old('M_mouthcare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="E_mouthcare"  value="yes" @if(old('E_mouthcare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" class="form-check" name="N_mouthcare"  value="yes" @if(old('N_mouthcare')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>3. Skin Care/ Back Care </td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_skincare"  value="yes" @if(old('M_skincare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_skincare"  value="yes" @if(old('E_skincare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_skincare"  value="yes" @if(old('N_skincare')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>4. Bedding</td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_bedding"  value="yes" @if(old('M_bedding')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_bedding"  value="yes" @if(old('E_bedding')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_bedding"  value="yes" @if(old('N_bedding')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>5. Catheter Care</td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_cathetercare"  value="yes" @if(old('M_cathetercare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_cathetercare"  value="yes" @if(old('E_cathetercare')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_cathetercare"  value="yes" @if(old('N_cathetercare')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>6. Physiotherapy</td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_physiotherapy"  value="yes" @if(old('M_physiotherapy')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_physiotherapy"  value="yes" @if(old('E_physiotherapy')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_physiotherapy"  value="yes" @if(old('N_physiotherapy')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>7. Sponge Bath</td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_spongebath"  value="yes" @if(old('M_spongebath')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_spongebath"  value="yes" @if(old('E_spongebath')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_spongebath"  value="yes" @if(old('N_spongebath')=="yes") checked @endif></td>
								</div>
						  </tr>

						  <tr>
								<td>8. Any Other </td>
								<div class="form-group">
									<td colspan="2" class="text-center"><input type="radio" name="M_other"  value="yes" @if(old('M_other')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="E_other"  value="yes" @if(old('E_other')=="yes") checked @endif></td>
									<td colspan="2" class="text-center"><input type="radio" name="N_other"  value="yes" @if(old('N_other')=="yes") checked @endif></td>
								</div>
							</tr>

							<tr>
								<td>Investigations</td>
								<div class="form-group">
									<td colspan="2"><input type = "text" class = "form-control" class="M_investigations" value="{{ old('M_investigations') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="E_investigations" value="{{ old('E_investigations') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="N_investigations" value="{{ old('N_investigations') }}"/></td>
								</div>
							</tr>

						  <tr>
								<td>Pending Reports</td>
								<div class="form-group">
								  <td colspan="2"><input type = "text" class = "form-control" class="M_pendingreport" value="{{ old('M_pendingreport') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="E_pendingreport" value="{{ old('E_pendingreport') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="N_pendingreport" value="{{ old('N_pendingreport') }}"/></td>
								</div>
						  </tr>

						  <tr>
								<td>Replacement Of Drug.</td>
								<div class="form-group">
								  <td colspan="2"><input type = "text" class = "form-control" class="M_replacementdrug" value="{{ old('M_replacementdrug') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="E_replacementdrug" value="{{ old('E_replacementdrug') }}"/></td>
									<td colspan="2"><input type = "text" class = "form-control" class="N_replacementdrug" value="{{ old('N_replacementdrug') }}"/></td>
								</div>
						  </tr>

						  <tr>
								<th>Balance Drugs in Stock</th>
								<th>Time</th>
								<th>Balance</th>
								<th>Time</th>
								<th>Balance</th>
								<th>Time</th>
								<th>Balance</th>
							</tr>

							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_00" id = "balance_drugs_00" value="{{ old('balance_drugs_00') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_00" id = "M_time_00" value="{{ old('M_time_00') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_00" id = "M_balance_00" value="{{ old('M_balance_00') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_00" id = "E_time_00" value="{{ old('E_time_00') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_00" id = "E_balance_00" value="{{ old('E_balance_00') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_00" id = "N_time_00" value="{{ old('N_time_00') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_00" id = "N_balance_00" value="{{ old('N_balance_00') }}"/></td>
								</div>
						  </tr>
							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_01" id = "balance_drugs_01" value="{{ old('balance_drugs_01') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_01" id = "M_time_01" value="{{ old('M_time_01') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_01" id = "M_balance_01" value="{{ old('M_balance_01') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_01" id = "E_time_01" value="{{ old('E_time_01') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_01" id = "E_balance_01" value="{{ old('E_balance_01') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_01" id = "N_time_01" value="{{ old('N_time_01') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_01" id = "N_balance_01" value="{{ old('N_balance_01') }}"/></td>
								</div>
						  </tr>

							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_02" id = "balance_drugs_02" value="{{ old('balance_drugs_02') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_02" id = "M_time_02" value="{{ old('M_time_02') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_02" id = "M_balance_02" value="{{ old('M_balance_02') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_02" id = "E_time_02" value="{{ old('E_time_02') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_02" id = "E_balance_02" value="{{ old('E_balance_02') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_02" id = "N_time_02" value="{{ old('N_time_02') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_02" id = "N_balance_02" value="{{ old('N_balance_02') }}"/></td>
								</div>
						  </tr>

							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_03" id = "balance_drugs_03" value="{{ old('balance_drugs_03') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_03" id = "M_time_03" value="{{ old('M_time_03') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_03" id = "M_balance_03" value="{{ old('M_balance_03') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_03" id = "E_time_03" value="{{ old('E_time_03') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_03" id = "E_balance_03" value="{{ old('E_balance_03') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_03" id = "N_time_03" value="{{ old('N_time_03') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_03" id = "N_balance_03" value="{{ old('N_balance_03') }}"/></td>
								</div>
						  </tr>

							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_04" id = "balance_drugs_04" value="{{ old('balance_drugs_04') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_04" id = "M_time_04" value="{{ old('M_time_04') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_04" id = "M_balance_04" value="{{ old('M_balance_04') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_04" id = "E_time_04" value="{{ old('E_time_04') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_04" id = "E_balance_04" value="{{ old('E_balance_04') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_04" id = "N_time_04" value="{{ old('N_time_04') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_04" id = "N_balance_04" value="{{ old('N_balance_04') }}"/></td>
								</div>
						  </tr>

							<tr>
								<div class="form-group">
									<td><input type = "text" class = "form-control" name="balance_drugs_05" id = "balance_drugs_05" value="{{ old('balance_drugs_05') }}"/></td>
									<td><input type = "text" class = "form-control" name="M_time_05" id = "M_time_05" value="{{ old('M_time_05') }}"></td>
									<td><input type = "text" class = "form-control" name="M_balance_05" id = "M_balance_05" value="{{ old('M_balance_05') }}"/></td>
									<td><input type = "text" class = "form-control" name="E_time_05" id = "E_time_05" value="{{ old('E_time_05') }}"></td>
									<td><input type = "text" class = "form-control" name="E_balance_05" id = "E_balance_05" value="{{ old('E_balance_05') }}"/></td>
									<td><input type = "text" class = "form-control" name="N_time_05" id = "N_time_05" value="{{ old('N_time_05') }}"></td>
									<td><input type = "text" class = "form-control" name="N_balance_05" id = "N_balance_05" value="{{ old('N_balance_05') }}"/></td>
								</div>
						  </tr>
						</tbody>
					</table>
					<hr/>
					<div class="row form-group text-center">
							<h2> <small>Events if any:</small></h2>
						</div>
					<div class="row form-group">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<textarea class="form-control"  name="events" placeholder="Events that occured (optional)" value="{{ old('events') }}"></textarea>
							</div>
							<div class="col-md-3">
							</div>
						</div>
					<table class="table table-bordered table-responsive" name="nursetable">
						<tr>
							<th>
								Name of Nurse:
							</th>
							<td>
								<input type="text" name="event_m_nurse_name" class="form-control" value="{{ old('event_m_nurse_name') }}"/>
							</td>
							<td>
								<input type="text" name="event_e_nurse_name" class="form-control" value="{{ old('event_e_nurse_name') }}"/>
							</td>
							<td>
								<input type="text" name="event_n_nurse_name" class="form-control" value="{{ old('event_n_nurse_name') }}"/>
							</td>
						</tr>
						<tr>
							<th>
								Date:
							</th>
							<td>
								<input type="date" name="m_date" class="form-control" value="{{ old('m_date') }}"/>
							</td>
							<td>
								<input type="date" name="e_date" class="form-control" value="{{ old('e_date') }}"/>
							</td>
							<td>
								<input type="date" name="n_date" class="form-control" value="{{ old('n_date') }}"/>
							</td>
						</tr>
						<tr>
							<th>
								Time:
							</th>
							<td>
								<input type="time" name="m_time"  class="form-control" value="{{ old('m_time') }}"/>
							</td>
							<td>
								<input type="time" name="e_time"  class="form-control" value="{{ old('e_time') }}"/>
							</td>
							<td>
								<input type="time" name="n_time"  class="form-control" value="{{ old('n_time') }}"/>
							</td>
						</tr>
					</table>
				</div>
				<div class="row form-group text-center">
					<button class="btn btn-default" type="submit">Submit</button>
				</div>
			</form>
		</div>
@endsection
