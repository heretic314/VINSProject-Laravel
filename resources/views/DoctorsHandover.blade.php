@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Doctor's Handover</h1>
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
		
		<form action="DoctorsHandover" method="post">
			{{ csrf_field() }}
			<div class="row form-group">
			  <div class="col-md-8">
					<div class="col-md-4">
						<label class="control-label" for="diagnosis">Diagnosis :</label>
					</div>
					<div class="col-md-8">
						<textarea name="diagnosis" id="diagnosis" rows="3" class="form-control"></textarea>
					</div>
				</div>
			  <div class="col-md-4 text-right">
					<textarea name="addressograph" id="addressograph" rows="3" class="form-control" placeholder="Addressograph Here"></textarea>
				</div>
			</div>
			<hr>
			<div class="row form-group">
			  <table class="table table-bordered table-responsive">
			    <thead>
					  <tr>
							<th class="text-center">Sr. No.</th>
							<th class="text-center">Particulars</th>
							<th class="text-center">Day</th>
							<th class="text-center">Night</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td class="text-center">1</td>
							<td>Patient is surgical/conservative</td>
							<td class="text-center"><input type="checkbox" name="surgical_day" id="surgical_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="surgical_night" id="surgical_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">2</td>
							<td>If patient is surgical then tentative date of surgery</td>
							<td><input type="date" id="tentative_date_of_surgery_day" name="tentative_date_of_surgery_day" class="form-control"></td>
							<td><input type="date" id="tentative_date_of_surgery_night" name="tentative_date_of_surgery_night" class="form-control"></td>
					  </tr>
					  <tr>
					    <td class="text-center">3</td>
							<td>Please mention date of surgery performed (If surgery performed)</td>
							<td><input type="date" id="date_of_surgery_day" name="date_of_surgery_day" class="form-control"></td>
							<td><input type="date" id="date_of_surgery_night" name="date_of_surgery_night" class="form-control"></td>
					  </tr>
					  <tr>
					    <td class="text-center">4</td>
							<td>Physician's reference</td>
							<td><input type="text" class="form-control" name="physician_reference_day" id="physician_reference_day"></td>
							<td><input type="text" class="form-control" name="physician_reference_night" id="physician_reference_night" ></td>
					  </tr>
					  <tr>
					    <td class="text-center">5</td>
							<td>Any other specialist's reference</td>
							<td><input type="text" class="form-control" name="other_physician_reference_day" id="other_physician_reference_day"></td>
							<td><input type="text" class="form-control" name="other_physician_reference_night" id="other_physician_reference_night"></td>
					  </tr>
					  <tr>
					    <td class="text-center">6</td>
							<td>Pathological investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_done_day" id="pathological_investigation_done_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_done_night" id="pathological_investigation_done_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">7</td>
							<td>Reports of pathological investigation to be collected</td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_collected_day" id="pathological_investigation_collected_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="pathological_investigation_collected_night" id="pathological_investigation_collected_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">8</td>
							<td>Radiological investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_done_day" id="radiological_investigation_done_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_done_night" id="radiological_investigation_done_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">9</td>
							<td>Reports of radiological investigation to be collected</td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_collected_day" id="radiological_investigation_collected_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="radiological_investigation_collected_night" id="radiological_investigation_collected_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">10</td>
							<td>Any other investigation to be done</td>
							<td class="text-center"><input type="checkbox" name="other_investigation_done_day" id="other_investigation_done_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="other_investigation_done_night" id="other_investigation_done_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">11</td>
							<td>Reports of said investigation awaited</td>
							<td class="text-center"><input type="checkbox" name="other_investigation_collected_day" id="other_investigation_collected_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="other_investigation_collected_night" id="other_investigation_collected_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">12</td>
							<td>Echo</td>
							<td class="text-center"><input type="checkbox" name="echo_day" id="echo_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="echo_night" id="echo_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">13</td>
							<td>Physiotherapy</td>
							<td class="text-center"><input type="checkbox" name="physiotherapy_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="physiotherapy_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">14</td>
							<td>Specific instruction/ change in treatment</td>
							<td><textarea name="specific_instruction_day" id="specific_instruction_day" rows="3" class="form-control"></textarea></td>
							<td><textarea name="specific_instruction_night" id="specific_instruction_night" rows="3" class="form-control"></textarea></td>
					  </tr>
					  <tr>
					    <td class="text-center">15</td>
							<td>Verified by physician's assistant</td>
							<td class="text-center"><input type="checkbox" name="verified_by_assistant_day" id="verified_by_assistant_day" value="yes"/></td>
							<td class="text-center"><input type="checkbox" name="verified_by_assistant_night" id="verified_by_assistant_night" value="yes"/></td>
					  </tr>
					  <tr>
					    <td class="text-center">16</td>
							<td>Over given by:</td>
							<td></td>
							<td></td>
					  </tr>
						<tr>
							<td class=""></td>
							<td>16.1 Name</td>
							<td><input type="text" class="form-control" name="name_given_day" id="name_given_day" /></td>
							<td><input type="text" class="form-control" name="name_given_night" id="name_given_night" /></td>
						</tr>
						<tr>
							<td class=""></td>
							<td>16.2 Date</td>
							<td><input type="date" class="form-control" name="date_given_day" id="date_given_day" /></td>
							<td><input type="date" class="form-control" name="date_given_night" id="date_given_night" /></td>
						</tr>
						<tr>
							<td class=""></td>
							<td>16.3 Time</td>
							<td><input type="time" class="form-control" name="time_given_day" id="time_given_day" /></td>
							<td><input type="time" class="form-control" name="time_given_night" id="time_given_night" /></td>
						</tr>
						<tr>
					    <td class="text-center">17</td>
							<td>Over taken by:</td>
							<td></td>
							<td></td>
					  </tr>
						<tr>
							<td class=""></td>
							<td>17.1 Name</td>
							<td><input type="text" class="form-control" name="name_taken_day" id="name_taken_day" /></td>
							<td><input type="text" class="form-control" name="name_taken_night" id="name_taken_night" /></td>
						</tr>
						<tr>
							<td class=""></td>
							<td>17.2 Date</td>
							<td><input type="date" class="form-control" name="date_taken_day" id="date_taken_day" /></td>
							<td><input type="date" class="form-control" name="date_taken_night" id="date_taken_night" /></td>
						</tr>
						<tr>
							<td class=""></td>
							<td>17.3 Time</td>
							<td><input type="time" class="form-control" name="time_taken_day" id="time_taken_day" /></td>
							<td><input type="time" class="form-control" name="time_taken_night" id="time_taken_night" /></td>
						</tr>
						<tr>
					</tbody>
			  </table>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
