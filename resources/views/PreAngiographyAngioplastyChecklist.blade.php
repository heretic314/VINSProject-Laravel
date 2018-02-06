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
	@endif

	<form name="{{ url('/PreAngioigraphyAngioplastyChecklist') }}" method="post">
		{{ csrf_field() }}

			<div class="col-md-6">
				<div class="row form-group">
					<div class="col-md-6">
						<label for="">Consultant's Name :</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="consultant_name" value="{{ old('consultant_name') }}">
						@if($errors->has('consultant_name'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('consultant_name') }}</div></span>
						@endif

					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label for="">Time of Arrival on Floor:</label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time_arrival" value="{{ old('time_arrival') }}">
						@if($errors->has('time_arrival'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('time_arrival') }}</div></span>
						@endif

					</div>
				</div>
			</div>
			<div class="col-md-6">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="">Time when cath Preparation is complete :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_prep_complete" value="{{ old('time_prep_complete') }}">
							@if($errors->has('time_prep_complete'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_prep_complete') }}</div></span>
							@endif

						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="">Time of shifting for cath :</label>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="time" name="time_shifting" value="{{ old('time_shifting') }}">
							@if($errors->has('time_shifting'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('time_shifting') }}</div></span>
							@endif

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
						<input class="form-control" type="text" name="allergies_list" placeholder="If any" value="{{ old('allergies_list') }}">
						@if($errors->has('allergies_list'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('allergies_list') }}</div></span>
						@endif

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
							<input class="form-control" type="text" name="pulse" placeholder="pulse" value="{{ old('pulse') }}">
							@if($errors->has('pulse'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('pulse') }}</div></span>
							@endif

						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>BP : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="bp" placeholder="BP" value="{{ old('bp') }}">
							@if($errors->has('bp'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('bp') }}</div></span>
							@endif

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
							<input class="form-control" type="text" name="resp" placeholder="Resp" value="{{ old('resp') }}">
							@if($errors->has('resp'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('resp') }}</div></span>
							@endif

						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
						<label>Temp : </label><br>
						</div>
						<div class="col-md-6">
							<input class="form-control" type="text" name="temp" placeholder="Temp" value="{{ old('temp') }}">
							@if($errors->has('temp'))
									<span class="help-block"><div class="text-danger">{{ $errors->first('temp') }}</div></span>
							@endif

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
						<input class="form-control" type="text" name="blood_arranged" placeholder="Blood Arranged(in units)" value="{{ old('blood_arranged') }}">
						@if($errors->has('blood_arranged'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('blood_arranged') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>I/V Cannula put on : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="ivcannula_puton" placeholder="I/V Cannula" value="{{ old('ivcannula_puton') }}">
						@if($errors->has('ivcannula_puton'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('ivcannula_puton') }}</div></span>
						@endif

					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Height : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="height" placeholder="Height(in cms)" value="{{ old('height') }}">
						@if($errors->has('height'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('height') }}</div></span>
						@endif

					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Weight : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="weight" placeholder="Weight(in kgs)" value="{{ old('weight') }}">
						@if($errors->has('weight'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('weight') }}</div></span>
						@endif

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
							<td><input class="form-control" type="text" name="cbc" value="{{ old('cbc') }}">
								@if($errors->has('cbc'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('cbc') }}</div></span>
								@endif
							</td>
							<td>Blood grouping and cross matching</td>
							<td><input class="form-control" type="text" name="blood_group" value="{{ old('blood_group') }}">
								@if($errors->has('blood_group'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('blood_group') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Blood Urea</td>
							<td><input class="form-control" type="text" name="blood_urea" value="{{ old('blood_urea') }}">
								@if($errors->has('blood_urea'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('blood_urea') }}</div></span>
								@endif
							</td>
							<td>HBsAg</td>
							<td><input class="form-control" type="text" name="hbsag" value="{{ old('hbsag') }}">
								@if($errors->has('hbsag'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('hbsag') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Serum Creatinine</td>
							<td><input class="form-control" type="text" name="serum_creatinine" value="{{ old('serum_creatinine') }}">
								@if($errors->has('serum_creatinine'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('serum_creatinine') }}</div></span>
								@endif
							</td>
							<td>Hepatitis C</td>
							<td><input class="form-control" type="text" name="hep_c" value="{{ old('hep_c') }}">
								@if($errors->has('hep_c'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('hep_c') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Random Blood Sugar</td>
							<td><input class="form-control" type="text" name="random_blood_sugar" value="{{ old('random_blood_sugar') }}">
								@if($errors->has('random_blood_sugar'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('random_blood_sugar') }}</div></span>
								@endif
							</td>
							<td>HIV</td>
							<td><input class="form-control" type="text" name="hiv" value="{{ old('hiv') }}">
								@if($errors->has('hiv'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('hiv') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>PT</td>
							<td><input class="form-control" type="text" name="pt" value="{{ old('pt') }}">
								@if($errors->has('pt'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('pt') }}</div></span>
								@endif
							</td>
							<td>Chest X-Ray</td>
							<td><input class="form-control" type="text" name="chest_xray" value="{{ old('chest_xray') }}">
								@if($errors->has('chest_xray'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('chest_xray') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>Serum Electrolytes</td>
							<td><input class="form-control" type="text" name="serum_electrolytes" value="{{ old('serum_electrolytes') }}">
								@if($errors->has('serum_electrolytes'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('serum_electrolytes') }}</div></span>
								@endif
							</td>
							<td>ECG</td>
							<td><input class="form-control" type="text" name="ecg" value="{{ old('ecg') }}">
								@if($errors->has('ecg'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('ecg') }}</div></span>
								@endif
							</td>
						</tr>
						<tr>
							<td>LFT</td>
							<td><input class="form-control" type="text" name="lft" value="{{ old('lft') }}">
								@if($errors->has('lft'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('lft') }}</div></span>
								@endif
							</td>
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
