<html>
<head>
	<title>
		Ventilator Charge Sheet
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>
<body>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Ventilator Charge Sheet</h1>
			</div>	
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/12 <br>
					REV. No. --- <br>
					WEF ----------
				</div>
			</div>
		</div>
	</div>
	
<form name="ventilatorchargesheet">
	
	<div class="row form-group">
		<div class="col-md-8">
			
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Name : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Age : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="number" name="age">
					</div>
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Sex : </label>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="sex">
							<option>NA</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>BED No : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="number" name="bed_no">
					</div>
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Time : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="time">
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">
						<label>Date : </label>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="date" name="date">
					</div>
				</div>
			</div>
		
		</div>
		<div class="col-md-4 text-right">
			<label>Addressograph : </label>
			<textarea class="form-control text-right" placeholder="Addressograph" ></textarea>
		</div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Settings (GREEN)</th>
						<th class="form-inline">Hour : 
							<select class="form-control" name="time_slot">
								<option>Select Hour</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mode</td>
						<td><input class="form-control" type="text" name="mode"></td>
					</tr>
					<tr>
						<td>Tidal Volume</td>
						<td><input class="form-control" type="text" name="tidal_volume"></td>
					</tr>
					<tr>
						<td>Set Frequency (Controlled)</td>
						<td><input class="form-control" type="text" name="freq_controlled"></td>
					</tr>
					<tr>
						<td>Set Frequency (SIMV)</td>
						<td><input class="form-control" type="text" name="freq_simv"></td>
					</tr>
					<tr>
						<td>Pressure Control</td>
						<td><input class="form-control" type="text" name="pressure_control"></td>
					</tr>
					<tr>
						<td>Pressure Support (IPAP)</td>
						<td><input class="form-control" type="text" name="pressure_support"></td>
					</tr>
					<tr>
						<td>PEEP / CPAP (EDAP)</td>
						<td><input class="form-control" type="text" name="peep_cpap"></td>
					</tr>
					<tr>
						<td>Triggering</td>
						<td><input class="form-control" type="text" name="triggering"></td>
					</tr>
					<tr>
						<td>Flo2</td>
						<td><input class="form-control" type="text" name="flo2"></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Measured (RED)</th>
						<th class="form-inline">Hour : 
							<!--
							<select class="form-control" name="time_slot">
								<option>Select Hour</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
							</select>
							-->
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="2">A. Volume</th>
					</tr>
					<tr>
						<td>Inp. TV</td>
						<td><input class="form-control" type="text" name="inp_tv"></td>
					</tr>
					<tr>
						<td>Exp. TV</td>
						<td><input class="form-control" type="text" name="exp_tv"></td>
					</tr>
					<tr>
						<td>Exp. MV</td>
						<td><input class="form-control" type="text" name="exp_mv"></td>
					</tr>
					<tr>
						<td>Measured Frequency</td>
						<td><input class="form-control" type="text" name="measured_freq"></td>
					</tr>
					<tr>
						<th colspan="2">B. Pressure</th>
					
					</tr>
					<tr>
						<td>Peak Pressure</td>
						<td><input class="form-control" type="text" name="peak_pressure"></td>
					</tr>
					<tr>
						<td>Mean</td>
						<td><input class="form-control" type="text" name="mean_pressure"></td>
					</tr>
					<tr>
						<td>End. Exp.</td>
						<td><input class="form-control" type="text" name="end_exp"></td>
					</tr>
				</tbody>
			</table>
		</div>	
	</div>
	
	<div class="row form-group">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>C. Alarms</th>
						<th class="form-inline">Hour : 
							<select class="form-control" name="time_slot">
								<option>Select Hour</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
							</select>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Pressure Low</td>
						<td><input class="form-control" type="text" name="pressure_low"></td>
					</tr>
					<tr>
						<td>Volume High MV</td>
						<td><input class="form-control" type="text" name="volume_high_mv"></td>
					</tr>
					<tr>
						<td>Volume Low MV</td>
						<td><input class="form-control" type="text" name="volume_low_mv"></td>
					</tr>
					<tr>
						<td>Gas Supply</td>
						<td><input class="form-control" type="text" name="gas_supply"></td>
					</tr>
					<tr>
						<td>Power Failure</td>
						<td><input class="form-control" type="text" name="power_failure"></td>
					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">D. Position</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="position"></td>
					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">E. Suction</th>
					</tr>
					<tr>
						<td>E.T. / T'stomy</td>
						<td><input class="form-control" type="text" name="et_tstomy"></td>
					</tr>
					<tr>
						<td>Oral</td>
						<td><input class="form-control" type="text" name="oral"></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>F. Chest Physiotherapy</th>
						<th class="form-inline">Hour : 
							<!--
							<select class="form-control" name="time_slot">
								<option>Select Hour</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
							</select>
							-->
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="chest_physio"></td>
					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">G. ABG</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="abg"></td>
					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">H. X-Ray Chest</th>
					</tr>
					<tr>
						<td></td>
						<td><input class="form-control" type="text" name="xray_chest"></td>
					</tr>
					<!--------------Next Section------------->
					<tr>
						<th colspan="2">I. Disposable Change</th>
					</tr>
					<tr>
						<td>Catheter Mount</td>
						<td><input class="form-control" type="text" name="catheter_mount"></td>
					</tr>
					<tr>
						<td>Filter</td>
						<td><input class="form-control" type="text" name="filter"></td>
					</tr>
					<tr>
						<td>Ventilator Circuit</td>
						<td><input class="form-control" type="text" name="ventilator_circuit"></td>
					</tr>
					<tr>
						<td>E.T. Tube/ T'stomy Tube</td>
						<td><input class="form-control" type="text" name="et_tube"></td>
					</tr>
				</tbody>
			</table>
		</div>	
	</div>
	
</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
