@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Pre-Angiography Angioplasty Checklist</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/CTH/01 <br>
					REV. No. 0.0 <br>
					WEF 01-09-2014
				</div>
			</div>
		</div>
	</div>

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
			@foreach ($errors->keys() as $error)
						 <li>{{ $error }}</li>
				 @endforeach
	@endif

	<form name="{{ url('/PreAngioigraphyAngioplastyChecklist') }}" method="post">
		{{ csrf_field() }}

			<div class="col-md-6">
				<div class="row form-group">
					<div class="col-md-6">
						<label for="">Consultant's Name :</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultant_name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="">Time of Arrival on Floor:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time_arrival">
					</div>
				</div>
			</div>
			<div class="col-md-6">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="">Time when cath Preparation is complete :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_prep_complete">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="">Time of shifting for cath :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_shifting">
						</div>
					</div>
				</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Angiography Consent</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="angiography_consent" value="{{ old('angiography_consent') }}">
							<option value="NA">NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Angioplasty Consent</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="angioplasty_consent" value="{{ old('angioplasty_consent') }}">
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pacemaker Implant</label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pacemaker" value="{{ old('pacemaker') }}" >
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-8">
					<div class="col-md-2">
						<label>Allergies : </label>
					</div>
					<div class="col-md-5">
						<select class="form-control" name="allergies" value="{{ old('allergies') }}">

							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
					<div class="col-md-5">
						<input class="form-control" type="text" name="allergies_list" placeholder="If any">
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<h3>Vital Signs : </h3>
			</div>

			<div class="row form-group">
				<div class="col-md-8">
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Pulse : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="pulse" placeholder="pulse">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>BP : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp" placeholder="BP">
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-8">
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Resp : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="resp" placeholder="Resp">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Temp : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp" placeholder="Temp">
						</div>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Part Preparation : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="part_prep"  value="{{ old('part_prep') }}">
							<option value="Right radial and right groin">Right Radial and Right Groin</option>
							<option value="Left Brachial and left groin">Left Brachial and Left Groin</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Pre Medication : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="pre_med"  value="{{ old('pre_med') }}">
							<option value="Loading Dose - Tab clopidogrel 75mg x 4 + Tab Avil x 1 stat">Loading Dose - Tab clopidogrel 75mg x 4 + Tab Avil x 1 stat</option>
							<option value="Continuing Dose - Tab clopidogrel 75mg (10D or BD)">Continuing Dose - Tab clopidogrel 75mg (10D or BD)</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Ecosprin : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="ecosprin" value="{{ old('ecosprin') }}" >
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Clopidogrel : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="clopidogrel" value="{{ old('clopidogrel') }}" >
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Blood Arranged : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="blood_arranged" placeholder="Blood Arranged(in units)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>I/V Cannula put on : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="ivcannula_puton" placeholder="I/V Cannula">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Height : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="height" placeholder="Height(in cms)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Weight : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="weight" placeholder="Weight(in kgs)">
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>ID Band Applied : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="id_band" value="{{ old('id_band') }}" >
							<option value="NA"> NA</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Jewellery Removed : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="jewellery_removed" value="{{ old('jewellery_removed') }}" >
							<option value="NA"> NA</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Dentures Removed : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="dentures" value="{{ old('dentures') }}" >
							<option value="NA"> NA</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
						</select>
					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<h3>Investigations : </h3>
			</div>

			<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>Investigation</th>
							<th>Result</th>
							<th>Investigation</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>CBC(Hb,TLC,DLC,TLC,PLT,RBc,PCV)</td>
							<td><input class="form-control" type="text" name="cbc"></td>
							<td>Blood grouping and cross matching</td>
							<td><input class="form-control" type="text" name="blood_group"></td>
						</tr>
						<tr>
							<td>Blood Urea</td>
							<td><input class="form-control" type="text" name="blood_urea"></td>
							<td>HBsAg</td>
							<td><input class="form-control" type="text" name="hbsag"></td>
						</tr>
						<tr>
							<td>Serum Creatinine</td>
							<td><input class="form-control" type="text" name="serum_creatinine"></td>
							<td>Hepatitis C</td>
							<td><input class="form-control" type="text" name="hep_c"></td>
						</tr>
						<tr>
							<td>Random Blood Sugar</td>
							<td><input class="form-control" type="text" name="random_blood_sugar"></td>
							<td>HIV</td>
							<td><input class="form-control" type="text" name="hiv"></td>
						</tr>
						<tr>
							<td>PT</td>
							<td><input class="form-control" type="text" name="pt"></td>
							<td>Chest X-Ray</td>
							<td><input class="form-control" type="text" name="chest_xray"></td>
						</tr>
						<tr>
							<td>Serum Electrolytes</td>
							<td><input class="form-control" type="text" name="serum_electrolytes"></td>
							<td>ECG</td>
							<td><input class="form-control" type="text" name="ecg"></td>
						</tr>
						<tr>
							<td>LFT</td>
							<td><input class="form-control" type="text" name="lft"></td>
							<td></td>
							<td></td>
						</tr>

					</tbody>
				</table>
			<div class="text-center form-group">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
	</form>
</div>

@endsection
