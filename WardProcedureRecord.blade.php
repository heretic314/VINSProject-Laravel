<html>
<head>
	<title>
		Ward Procedure Record
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>
<body>
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
	
	
<form name="wardprocedurerecord">
	<div class="row form-group">
		<div class="col-md-8">
		</div>
		<div class="col-md-4 text-right">
			<label>Addressograph : </label>
			<textarea class="form-control text-right" placeholder="Addressograph here" ></textarea>
		</div>
	</div>
	
	<div class="row form-group">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Procedure Name</th>
					<th>
					
						<select class="form-control" name="time">
							<option>Select Time (Hrs)</option>
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
					<td><input class="form-control" type="text" name="multipara_monitoring_less6"></td>
					<td>2</td>
					<td>Multipara Monitoring > 6 Hrs</td>
					<td><input class="form-control" type="text" name="multipara_monitoring_more6"></td>
				</tr>
				<tr>
					<td>3.1</td>
					<td>Oxygen Charge(Up to 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_upto12"></td>
					<td>3.2</td>
					<td>Oxygen Charge(More than 12 Hrs)</td>
					<td><input class="form-control" type="text" name="oxygen_more12"></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="pulse_intermittent"></td>
					<td>5</td>
					<td>Pulse Oximetry continuous</td>
					<td><input class="form-control" type="text" name="pulse_continuous"></td>
				</tr>
				<tr>
					<td>6</td>
					<td>Ventilator / Bipap</td>
					<td><input class="form-control" type="text" name="ventilator_bipap"></td>
					<td>7</td>
					<td>Nebulization</td>
					<td><input class="form-control" type="text" name="nebulization"></td>
				</tr>
				<tr>
					<td>8</td>
					<td>Pulse Oximetry Intermittent</td>
					<td><input class="form-control" type="text" name="blood_transfusion"></td>
					<td>9</td>
					<td>RBS</td>
					<td><input class="form-control" type="text" name="rbs"></td>
				</tr>
				<tr>
					<td>10</td>
					<td>ECG</td>
					<td><input class="form-control" type="text" name="ecg"></td>
					<td>11</td>
					<td>Ripple Bed Charges</td>
					<td><input class="form-control" type="text" name="bed_charges"></td>
				</tr>
				<tr>
					<td>12</td>
					<td>Traction</td>
					<td><input class="form-control" type="text" name="traction"></td>
					<td>13</td>
					<td>Dressing</td>
					<td><input class="form-control" type="text" name="dressing"></td>
				</tr>
				<tr>
					<td>14</td>
					<td>Special Dressing</td>
					<td><input class="form-control" type="text" name="spcl_dressing"></td>
					<td>15</td>
					<td>Ryle's Tube Insertion</td>
					<td><input class="form-control" type="text" name="tube_insertion"></td>
				</tr>
				<tr>
					<td>16</td>
					<td>Catheterisation</td>
					<td><input class="form-control" type="text" name="catheterisation"></td>
					<td>17</td>
					<td>Suture Removal</td>
					<td><input class="form-control" type="text" name="ecg"></td>
				</tr>
				<tr>
					<td>18</td>
					<td>CLW Suturing</td>
					<td><input class="form-control" type="text" name="clw_suturing"></td>
					<td>19</td>
					<td>Diet Consultation</td>
					<td><input class="form-control" type="text" name="diet_consultation"></td>
				</tr>
				<tr>
					<td>20</td>
					<td>Enema</td>
					<td><input class="form-control" type="text" name="enema"></td>
					<td>21</td>
					<td>Syringe Pump / Special Infection</td>
					<td><input class="form-control" type="text" name="syringe_pump"></td>
				</tr>
				<tr>
					<td>22</td>
					<td>Echo</td>
					<td><input class="form-control" type="text" name="echo"></td>
					<td>23</td>
					<td>Urine Sugar</td>
					<td><input class="form-control" type="text" name="urine_sugar"></td>
				</tr>
				<tr>
					<td>24</td>
					<td>Peripheral Venous Line</td>
					<td><input class="form-control" type="text" name="peripheral_line"></td>
					<td>25</td>
					<td>Central / Femoral / Arterial Line</td>
					<td><input class="form-control" type="text" name="central_line"></td>
				</tr>
				<tr>
					<td>26</td>
					<td>Lumbar Puncture</td>
					<td><input class="form-control" type="text" name="lumbar_puncture"></td>
					<td>27</td>
					<td>CSF Manometry</td>
					<td><input class="form-control" type="text" name="csf_manometry"></td>
				</tr>
				<tr>
					<td>28</td>
					<td>Intubation</td>
					<td><input class="form-control" type="text" name="intubation"></td>
					<td>29</td>
					<td>Code Blue</td>
					<td><input class="form-control" type="text" name="code_blue"></td>
				</tr>
				<tr>
					<td>30</td>
					<td>Resuscitation</td>
					<td><input class="form-control" type="text" name="resuscitation"></td>
					<td>31</td>
					<td>Ambulance Charges</td>
					<td><input class="form-control" type="text" name="ambulance_charges"></td>
				</tr>
				<tr>
					<td>32.1</td>
					<td>ESCORT (With Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_ventilator"></td>
					<td>32.2</td>
					<td>ESCORT (Without Ventilator)</td>
					<td><input class="form-control" type="text" name="escort_without"></td>
				</tr>
				<tr>
					<td>33.1</td>
					<td>MLC (Within City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_inside_city"></td>
					<td>33.2</td>
					<td>MLC (Outside City Limits)</td>
					<td><input class="form-control" type="text" name="mlc_outside_city"></td>
				</tr>
				<tr>
					<td>34</td>
					<td>Defibrillator Charge</td>
					<td><input class="form-control" type="text" name="defibrillator_charge"></td>
					<td>35</td>
					<td>Physio Therapy</td>
					<td><input class="form-control" type="text" name="physiotherapy"></td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
