@extends('layouts.app')

@section('content')

<div class="container">
	<div class="page-header" id="second_page">
			<div class="row">
				<div class="col-md-6">
					<h1>Nutritional Screening</h1>
				</div>
			</div>
		</div>
	<form class="form" name="nutritional_screening">
		<div class="form-group">
			<div class="col-md-6">
				<label class="control-label col-md-3" for="type_of_diet">Type of Diet:</label>
				<div class="col-md-9">
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="veg"> Veg
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="jain"> Jain
					<input type="radio" class="radio-inline" name="type_of_diet" id="type_of_diet" value="non_veg"> Non-Veg
				</div>
			</div>
			<div class="text-right col-md-6">
				<label class="control-label col-md-4" for="date_of_screening">Date of Screening:</label>
				<div class="col-md-8">
					<input type="date" class="form-control" name="date_of_screening" id="date_of_screening">
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="form-group">
			<table name="nutritional_screening" class="table table-bordered">
				<tbody>
					<tr>
						<th rowspan="5">1</th>
						<th colspan="2">Has there been any unintentional weight loss in the last three months?</th>
					</tr>
					<tr>
						<td>>6 Kgs</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="3"></td>
					</tr>
					<tr>
						<td>3-6 Kgs</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="2"></td>
					</tr>
					<tr>
						<td>0-3 Kgs (Don't Know)</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="1"></td>
					</tr>
					<tr>
						<td>No Weight loss</td>
						<td><input type="radio" class="form-control radio-inline" name="weight_loss" value="0"></td>
					</tr>
					<tr>
						<th rowspan="3">2</th>
						<th colspan="2">Does the patient appear emaciated?</th>
					</tr>
					<tr>
						<td>Yes</td>
						<td><input type="radio" class="form-control radio-inline" name="emaciated" value="2"></td>
					</tr>
					<tr>
						<td>No</td>
						<td><input type="radio" class="form-control radio-inline" name="emaciated" value="1"></td>
					</tr>
					<tr>
						<th rowspan="3">3</th>
						<th colspan="2">Is the patient mentally well oriented?</th>
					</tr>
					<tr>
						<td>Yes</td>
						<td><input type="radio" class="form-control radio-inline" name="mental_orientation" value="0"></td>
					</tr>
					<tr>
						<td>No</td>
						<td><input type="radio" class="form-control radio-inline" name="mental_orientation" value="2"></td>
					</tr>
					<tr>
						<th rowspan="5">4</th>
						<th colspan="2">Patient mode of feeding :</th>
					</tr>
					<tr>
						<td>Parental Nutritional / NBM</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="3"></td>
					</tr>
					<tr>
						<td>External Tube Feeding</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="3"></td>
					</tr>
					<tr>
						<td>Oral Feeding - Liquids</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="2"></td>
					</tr>
					<tr>
						<td>Diet</td>
						<td><input type="radio" class="form-control radio-inline" name="mode_of_feeding" value="1"></td>
					</tr>
					<tr>
						<th rowspan="2">5</th>
						<th colspan="2">Foods to be avoided :</th>
					</tr>
					<tr>
						<td>Sour / Spicy / Milk / Others</td>
						<td><input type="text" class="form-control radio-inline" name="food_to_be_avoided"></td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
					<tr>
						<th colspan="2">Score</th>
						<th ></th>
					</tr>
				</tbody>
			</table>
		<div class="form-group">
			<label class="control-label" for="nursing_care_plan">Nursing Care Plan:</label><br>
			<div class="">
				<textarea class="form-control" name="nursing_care_plan" id="nursing_care_plan" rows="3"></textarea>
			</div>
			<hr>
			<div class="col-md-6">
				<label class="control-label col-md-4" for="signature">Signature:</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="signature" id="signature">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="date_nursing">Date:</label>
				<div class="col-md-8">
					<input type="date" class="form-control" name="date_nursing" id="date_nursing">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="time_nursing">Time:</label>
				<div class="col-md-8">
					<input type="time" class="form-control" name="time_nursing" id="time_nursing">
				</div>
				<br><br>
				<label class="control-label col-md-4" for="assessment_done_by">Assessment done by:</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="assessment_done_by" id="assessment_done_by">
				</div>
			</div>
		</div>
		</div>
		</div>
	</form>
</body>

@endsection
