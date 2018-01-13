<html>
<head>
	<title>
		Peripheral Line Bundle Checklist
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
.small{
font-size : 9px
}
</style>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Peripheral Line Bundle Checklist</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
					WEF 10-10-2015
				</div>
			</div>
		</div>
	</div>
	<form name="peripherallinebundlechecklist">
		<div class="row form-group">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Date of Insertion : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="date" name="date_insertion">
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Date of Removal : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="date" name="date_removal">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Reason of Removal :</label>
						</div>
						<div class="col-md-6">
				      <select class="form-control" name="reason_removal">
								<option value="0">Infection</option>
								<option value="1">Normal</option>
								<option value="2">Discharge</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-6">
				      <label>Organism if isolated : </label>
						</div>
						<div class="col-md-6">
				      <input class="form-control" type="textbox" name="organism_isolated" placeholder="Organism if Isolated">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2 text-right">
				<textarea class="text-right" name="Addressograph" placeholder="Addressograph Here"></textarea>
			</div>
		</div>

		<div class="row form-group">
		  <table class="table table-bordered">
		    <thead>
				  <tr>
						<th rowspan="2">Sr. No.</th>
						<th rowspan="2">Practice</th>
						<th colspan="18" class="text-center">Observation</th>
				  </tr>
				  <tr>
				    <th>M</th>
						<th>E</th>
						<th>N</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td>1</td>
						<td>Hand hygiene-6 steps disinfection, PPE before task</td>
						<td><input class="form-control" type="checkbox" name="00_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="00_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="00_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>2</td>
						<td>Site preparation & Dressing Changes using 2% Chlorhexnameine / Provnameine Iodine</td>
						<td><input class="form-control" type="checkbox" name="01_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="01_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="01_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>3</td>
						<td>Site Labelled - Date & Time </td>
						<td><input class="form-control" type="checkbox" name="02_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="02_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="02_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>4</td>
						<td>Dressing change (Transparent SemiPermeable ) 3 to 4 days or when required.</td>
						<td><input class="form-control" type="checkbox" name="03_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="03_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="03_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>5</td>
						<td>Inspection dressing Intact / Dampened / Loosened / Soiled</td>
						<td><input class="form-control" type="checkbox" name="04_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="04_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="04_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>6</td>
						<td>Flushing with ACL Flushing protocol. Use only Single Use prefilled 0.9% NS(Posiflush) / Single USE sterile NS Vials.</td>
						<td><input class="form-control" type="checkbox" name="05_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="05_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="05_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>7</td>
						<td>Wipe top of vial/bag with spirit or sterillum before withdrawing medicine</td>
						<td><input class="form-control" type="checkbox" name="06_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="06_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="06_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>8</td>
						<td>Date of administratioin Set - Change Intermittent -24 hrs, Continuous - 48 - 72hrs,Blood 4hrs, TPN 24hrs</td>
						<td><input class="form-control" type="checkbox" name="07_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="07_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="07_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>9</td>
						<td>Use of split septum closed connectors (Q syte, Extension or stand alone) Clean Q syte before each use.</td>
						<td><input class="form-control" type="checkbox" name="08_M" value="yes"></td>
						<td><input class="form-control" type="checkbox" name="08_E" value="yes"></td>
						<td><input class="form-control" type="checkbox" name="08_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>10</td>
						<td>Clamping of unused lines.</td>
						<td><input class="form-control" type="checkbox" name="09_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="09_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="09_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td>11</td>
						<td>Daily review of line necessity / Prompt removal</td>
						<td><input class="form-control" type="checkbox" name="10_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="10_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="10_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td></td>
						<td class="text-right">Sign Of Staff</td>
						<td><input class="form-control" type="checkbox" name="11_M" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="11_E" value="yes"></td>
					  <td><input class="form-control" type="checkbox" name="11_N" value="yes"></td>
				  </tr>
				  <tr>
				    <td></td>
						<td class="text-right">ID No:</td>
						<td><input class="form-control" type="checkbox" name="12_M" value="yes"></td>
						<td><input class="form-control" type="checkbox" name="12_E" value="yes"></td>
						<td><input class="form-control" type="checkbox" name="12_N" value="yes"></td>
				  </tr>
			</tbody>
		  </table>
		</div>

		<div class="row">
		  <table class="table table-bordered table-condensed">
		    <thead>
			  <tr>
			    <th>No.</th>
				<th>Date & Time</th>
				<th>Gauge</th>
				<th>Attempts</th>
				<th>Site</th>
				<th>Date & Time of Removal</th>
				<th>Total Time</th>
				<th>Catheter Material</th>
				<th>Flushing</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>1</td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="01_date">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="01_time">
					</div>
				</td>
				<td><input class="form-control" type="text" name="01_gauge"></td>
				<td>
					<select class="form-control" name="01_attempts">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</td>
				<td><input class="form-control" type="text" name="01_site"></td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="01_date_removal">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="01_time_removal">
					</div>
				</td>
				<td><input class="form-control" type="text" name="01_total_time"></td>
				<td><input class="form-control" type="text" name="01_material"></td>
				<td>
					<select class="form-control" name="01_flushing">
						<option>NA</option>
						<option>Yes</option>
						<option>No</option>
					</select>
				</td>
			  </tr>
			  <tr>
				<td>2</td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="02_date">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="02_time">
					</div>
				</td>
				<td><input class="form-control" type="text" name="02_gauge"></td>
				<td>
					<select class="form-control" name="02_attempts">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</td>
				<td><input class="form-control" type="text" name="02_site"></td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="02_date_removal">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="02_time_removal">
					</div>
				</td>
				<td><input class="form-control" type="text" name="02_total_time"></td>
				<td><input class="form-control" type="text" name="02_material"></td>
				<td>
					<select class="form-control" name="02_flushing">
						<option>NA</option>
						<option>Yes</option>
						<option>No</option>
					</select>
				</td>
			  </tr>
			  <tr>
				<td>3</td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="03_date">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="03_time">
					</div>
				</td>
				<td><input class="form-control" type="text" name="03_gauge"></td>
				<td>
					<select class="form-control" name="03_attempts">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</td>
				<td><input class="form-control" type="text" name="03_site"></td>
				<td>
					<div class="col-md-6">
						<input class="form-control" type="date" name="03_date_removal">
					</div>
					<div class="col-md-6">
						<input class="form-control" type="time" name="03_time_removal">
					</div>
				</td>
				<td><input class="form-control" type="text" name="03_total_time"></td>
				<td><input class="form-control" type="text" name="03_material"></td>
				<td>
					<select class="form-control" name="03_flushing">
						<option>NA</option>
						<option>Yes</option>
						<option>No</option>
					</select>
				</td>
			  </tr>
			</tbody>
		  </table>
		</div>
		<div class="row form-group">
		  <table class="table table-bordered table-condensed">
		    <thead>
			  <tr>
				<th colspan="12" class="text-center">Reason of removal</th>
				<th colspan="4" class="text-center">Status of catheter on removal</th>
			  </tr>
			  <tr>
			    <th colspan="5">Phlebitis Grade</th>
					<th rowspan="2">Infiltration</th>
					<th rowspan="2">Hematoma</th>
					<th rowspan="2">Extravasation</th>
					<th rowspan="2">Occlusion</th>
					<th rowspan="2">As per protocol</th>
					<th rowspan="2">Patient Discharged</th>
					<th rowspan="2">IV Therapy terminated</th>
					<th rowspan="2">Fibrin/Clot</th>
					<th colspan="2">Kinked</th>
					<th rowspan="2">Tip Damage</th>
			  </tr>
			  <tr>
			    <th>0</th>
			    <th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>Hub</th>
					<th>Shaft</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td><input class="form-control" type="radio" name="01_pgrade" value="0"></td>
				<td><input class="form-control" type="radio" name="01_pgrade" value="1"></td>
				<td><input class="form-control" type="radio" name="01_pgrade" value="2"></td>
				<td><input class="form-control" type="radio" name="01_pgrade" value="3"></td>
				<td><input class="form-control" type="radio" name="01_pgrade" value="4"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_infiltration"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_hematoma"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_extravasation"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_occulsion"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_asperprotocol"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_discharged"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_ended"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_fibrin_clot"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_hub"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_shaft"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="01_damaged"></td>

			  </tr>
			  <tr>
				<td><input class="form-control" type="radio" name="02_pgrade" value="0"></td>
				<td><input class="form-control" type="radio" name="02_pgrade" value="1"></td>
				<td><input class="form-control" type="radio" name="02_pgrade" value="2"></td>
				<td><input class="form-control" type="radio" name="02_pgrade" value="3"></td>
				<td><input class="form-control" type="radio" name="02_pgrade" value="4"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_infiltration"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_hematoma"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_extravasation"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_occulsion"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_asperprotocol"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_discharged"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_ended"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_fibrin_clot"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_hub"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_shaft"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="02_damaged"></td>
			  </tr>
			  <tr>
				<td><input class="form-control" type="radio" name="03_pgrade" value="0"></td>
				<td><input class="form-control" type="radio" name="03_pgrade" value="1"></td>
				<td><input class="form-control" type="radio" name="03_pgrade" value="2"></td>
				<td><input class="form-control" type="radio" name="03_pgrade" value="3"></td>
				<td><input class="form-control" type="radio" name="03_pgrade" value="4"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_infiltration"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_hematoma"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_extravasation"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_occulsion"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_asperprotocol"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_discharged"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_ended"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_fibrin_clot"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_hub"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_shaft"></td>
				<td class="text-center"><input class="form-check-input" type="checkbox" name="03_damaged"></td>
			  </tr>
			</tbody>
		  </table>
		</div>

	</form>
</div>
