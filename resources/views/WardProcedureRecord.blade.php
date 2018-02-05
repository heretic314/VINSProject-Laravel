@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Ward Procedure Record</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/19 <br>
					REV. No. --- <br>
					WEF ----------
				</div>
			</div>
		</div>
	</div>

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

	<form name="{{ url('/WardProcedureRecord') }}" method="post">
		{{ csrf_field() }}
	<!--<div class="row form-group">
				<div class="col-md-8">
				</div>
				<div class="col-md-4 text-right">
					<label>Addressograph : </label>
					<textarea class="form-control text-right" placeholder="Addressograph here" ></textarea>
				</div>
			</div>-->
		<div class="row form-group">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						<th>Procedure Name</th>
						<th>

							<select required class="form-control" name="time" value="{{ old('time') }}">
								<option  disabled selected hidden>Select Time (Hrs)</option>
								<option value="4_6">0400 - 0600</option>
								<option value="6_8">0600 - 0800</option>
								<option value="8_10">0800 - 1000</option>
								<option value="10_12">1000 - 1200</option>
								<option value="12_14">1200 - 1400</option>
								<option value="14_16">1400 - 1600</option>
								<option value="16_18">1600 - 1800</option>
								<option value="18_20">1800 - 2000</option>
								<option value="20_22">2000 - 2200</option>
								<option value="22_24">2200 - 0000</option>
							</select>
							@if($errors->has('time'))
							    <span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
							@endif

						</th>
						<th>No.</th>
						<th>Procedure Name</th>
						<th>
						<!--
							<select class="form-control" name="time">
								<option>Select Time</option>
								<option>0400 - 0600</option>
								<option>0600 - 0800</option>
								<option>0800 - 1000</option>
								<option>1000 - 1200</option>
								<option>1200 - 1400</option>
								<option>1400 - 1600</option>
								<option>1600 - 1800</option>
								<option>1800 - 2000</option>
								<option>2000 - 2200</option>
								<option>2200 - 0000</option>
							</select>
						-->
						</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Multipara Monitoring < 6 Hrs</td>
					<td><input class="form-control" type="text" name="multipara_monitoring_less6" value="{{ old('multipara_monitoring_less6') }}">
						@if($errors->has('multipara_monitoring_less6'))
						    <span class="help-block"><div class="text-danger">{{ $errors->first('multipara_monitoring_less6') }}</div></span>
						@endif
					</td>
					<td>2</td>
					<td>Multipara Monitoring > 6 Hrs</td>
					<td><input class="form-control" type="text" name="multipara_monitoring_more6" value="{{ old('multipara_monitoring_more6') }}">
						@if($errors->has('multipara_monitoring_more6'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('multipara_monitoring_more6') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>3.1</td>
					<td>Oxygen Charge(Up to 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_upto12" value="{{ old('oxygen_upto12') }}">
						@if($errors->has('oxygen_upto12'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('oxygen_upto12') }}</div></span>
						@endif
					</td>
					<td>3.2</td>
					<td>Oxygen Charge(More than 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_more12" value="{{ old('oxygen_more12') }}">
						@if($errors->has('oxygen_more12'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('oxygen_more12') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="pulse_intermittent" value="{{ old('pulse_intermittent') }}">
						@if($errors->has('pulse_intermittent'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_intermittent') }}</div></span>
						@endif
					</td>
					<td>5</td>
					<td>Pulse Oximetry continuous</td>
					<td><input class="form-control" type="text" name="pulse_continuous" value="{{ old('pulse_continuous') }}">
						@if($errors->has('pulse_continuous'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_continuous') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Ventilator / Bipap</td>
					<td><input class="form-control" type="text" name="ventilator_bipap" value="{{ old('ventilator_bipap') }}">
						@if($errors->has('ventilator_bipap'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('ventilator_bipap') }}</div></span>
						@endif
					</td>
					<td>7</td>
					<td>Nebulization</td>
					<td><input class="form-control" type="text" name="nebulization" value="{{ old('nebulization') }}">
						@if($errors->has('nebulization'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('nebulization') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="blood_transfusion" value="{{ old('blood_transfusion') }}">
						@if($errors->has('blood_transfusion'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('blood_transfusion') }}</div></span>
						@endif
					</td>
					<td>9</td>
					<td>RBS</td>
					<td><input class="form-control" type="text" name="rbs" value="{{ old('rbs') }}">
						@if($errors->has('rbs'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('rbs') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>10</td>
					<td>ECG</td>
					<td><input class="form-control" type="text" name="ecg" value="{{ old('ecg') }}">
						@if($errors->has('ecg'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('ecg') }}</div></span>
						@endif
					</td>
					<td>11</td>
					<td>Ripple Bed Charges</td>
					<td><input class="form-control" type="text" name="bed_charges" value="{{ old('bed_charges') }}">
						@if($errors->has('bed_charges'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('bed_charges') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Traction</td>
					<td><input class="form-control" type="text" name="traction" value="{{ old('traction') }}">
						@if($errors->has('traction'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('traction') }}</div></span>
						@endif
					</td>
					<td>13</td>
					<td>Dressing</td>
					<td><input class="form-control" type="text" name="dressing" value="{{ old('dressing') }}">
						@if($errors->has('dressing'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('dressing') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>14</td>
					<td>Special Dressing</td>
					<td><input class="form-control" type="text" name="spcl_dressing" value="{{ old('spcl_dressing') }}">
						@if($errors->has('spcl_dressing'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('spcl_dressing') }}</div></span>
						@endif
					</td>
					<td>15</td>
					<td>Ryle's Tube Insertion</td>
					<td><input class="form-control" type="text" name="tube_insertion" value="{{ old('tube_insertion') }}">
						@if($errors->has('tube_insertion'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('tube_insertion') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>16</td>
					<td>Catheterisation</td>
					<td><input class="form-control" type="text" name="catheterisation" value="{{ old('catheterisation') }}">
						@if($errors->has('catheterisation'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('catheterisation') }}</div></span>
						@endif
					</td>
					<td>17</td>
					<td>Suture Removal</td>
					<td><input class="form-control" type="text" name="suture_removal" value="{{ old('suture_removal') }}">
						@if($errors->has('suture_removal'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('suture_removal') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>18</td>
					<td>CLW Suturing</td>
					<td><input class="form-control" type="text" name="clw_suturing" value="{{ old('clw_suturing') }}">
						@if($errors->has('clw_suturing'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('clw_suturing') }}</div></span>
						@endif
					</td>
					<td>19</td>
					<td>Diet Consultation</td>
					<td><input class="form-control" type="text" name="diet_consultation" value="{{ old('diet_consultation') }}">
						@if($errors->has('diet_consultation'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('diet_consultation') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>20</td>
					<td>Enema</td>
					<td><input class="form-control" type="text" name="enema" value="{{ old('enema') }}">
						@if($errors->has('enema'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('enema') }}</div></span>
						@endif
					</td>
					<td>21</td>
					<td>Syringe Pump / Special Infection</td>
					<td><input class="form-control" type="text" name="syringe_pump" value="{{ old('syringe_pump') }}">
						@if($errors->has('syringe_pump'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('syringe_pump') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>22</td>
					<td>Echo</td>
					<td><input class="form-control" type="text" name="echo" value="{{ old('echo') }}">
						@if($errors->has('echo'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('echo') }}</div></span>
						@endif
					</td>
					<td>23</td>
					<td>Urine Sugar</td>
					<td><input class="form-control" type="text" name="urine_sugar" value="{{ old('urine_sugar') }}">
						@if($errors->has('urine_sugar'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('urine_sugar') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>24</td>
					<td>Peripheral Venous Line</td>
					<td><input class="form-control" type="text" name="peripheral_line" value="{{ old('peripheral_line') }}">
						@if($errors->has('peripheral_line'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('peripheral_line') }}</div></span>
						@endif
					</td>
					<td>25</td>
					<td>Central / Femoral / Arterial Line</td>
					<td><input class="form-control" type="text" name="central_line" value="{{ old('central_line') }}">
						@if($errors->has('central_line'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('central_line') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>26</td>
					<td>Lumbar Puncture</td>
					<td><input class="form-control" type="text" name="lumbar_puncture" value="{{ old('lumbar_puncture') }}">
						@if($errors->has('lumbar_puncture'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('lumbar_puncture') }}</div></span>
						@endif
					</td>
					<td>27</td>
					<td>CSF Manometry</td>
					<td><input class="form-control" type="text" name="csf_manometry" value="{{ old('csf_manometry') }}">
						@if($errors->has('csf_manometry'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('csf_manometry') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>28</td>
					<td>Intubation</td>
					<td><input class="form-control" type="text" name="intubation" value="{{ old('intubation') }}">
						@if($errors->has('intubation'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('intubation') }}</div></span>
						@endif
					</td>
					<td>29</td>
					<td>Code Blue</td>
					<td><input class="form-control" type="text" name="code_blue" value="{{ old('code_blue') }}">
						@if($errors->has('code_blue'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('code_blue') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>30</td>
					<td>Resuscitation</td>
					<td><input class="form-control" type="text" name="resuscitation" value="{{ old('resuscitation') }}">
						@if($errors->has('resuscitation'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('resuscitation') }}</div></span>
						@endif
					</td>
					<td>31</td>
					<td>Ambulance Charges</td>
					<td><input class="form-control" type="text" name="ambulance_charges" value="{{ old('ambulance_charges') }}">
						@if($errors->has('ambulance_charges'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('ambulance_charges') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>32.1</td>
					<td>ESCORT (With Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_ventilator" value="{{ old('escort_ventilator') }}">
						@if($errors->has('escort_ventilator'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('escort_ventilator') }}</div></span>
						@endif
					</td>
					<td>32.2</td>
					<td>ESCORT (Without Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_without" value="{{ old('escort_without') }}">
						@if($errors->has('escort_without'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('escort_without') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>33.1</td>
					<td>MLC (Within City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_inside_city" value="{{ old('mlc_inside_city') }}">
						@if($errors->has('mlc_inside_city'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('mlc_inside_city') }}</div></span>
						@endif
					</td>
					<td>33.2</td>
					<td>MLC (Outside City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_outside_city" value="{{ old('mlc_outside_city') }}">
						@if($errors->has('mlc_outside_city'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('mlc_outside_city') }}</div></span>
						@endif
					</td>
				</tr>
				<tr>
					<td>34</td>
					<td>Defibrillator Charge</td>
					<td><input class="form-control" type="text" name="defibrillator_charges" value="{{ old('defibrillator_charges') }}">
						@if($errors->has('defibrillator_charges'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('defibrillator_charges') }}</div></span>
						@endif
					</td>
					<td>35</td>
					<td>Physio Therapy</td>
					<td><input class="form-control" type="text" name="physiotherapy" value="{{ old('physiotherapy') }}">
						@if($errors->has('physiotherapy'))
								<span class="help-block"><div class="text-danger">{{ $errors->first('physiotherapy') }}</div></span>
						@endif
					</td>
				</tr>

			</tbody>
			</table>
		</div>
		<div class="form-group text-center">
		  <button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>

</div>
@endsection
