<html>
<head>
	<title>
		Checklist
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
</head>

<body>
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
		<form name="checklist" id="checklist">
			<div class="row">
		  	<div class="col-md-10">
					<div class="form-group row">
						<div class="col-md-6">
							<div class="col-md-5">
								<label class="control-label" for="date_insertion">Date of Insertion :</label>
							</div>
							<div class="col-md-6">
								<input type="date" class="form-control" id="date_insertion" name="date_insertion" placeholder="date">
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-5">
								<label class="control-label" for="date_removal">Date of Removal :</label>
							</div>
							<div class="col-md-6">
								<input type="date" class="form-control" id="date_removal" name="date_removal" placeholder="date">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-2">

						</div>
						<div class="col-md-8">
							<div class="col-md-4">
								<label class="control-label" for="reason_removal">Reason of Removal :</label>
							</div>
							<div class="col-md-6">
								<select class="form-control" name="reason_removal" id="reason_removal">
									<option value="Infection">Infection</option>
									<option value="Normal">Normal</option>
									<option value="Discharge">Discharge</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">

						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-2">

						</div>
						<div class="col-md-8">
							<div class="col-md-4">
								<label class="control-label" for="organism_isolated">Organism if isolated : </label>
							</div>
							<div class="col-md-6">
								<input type="text" class="form-control" id="organism_isolated" name="organism_isolated" placeholder="Organism if Isolated">
							</div>
						</div>
						<div class="col-md-2">

						</div>
					</div>
				</div>

		  	<div class="col-md-2 text-right">
					<textarea class="form-control text-right" name="addresograph" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
				</div>
			</div>

		<div class="row">
		  <table class="table table-bordered">
		    <thead>
			  <tr>
				<th rowspan="2">Sr. No.</th>
				<th rowspan="2">Practice</th>
				<th colspan="18" class="text-center">Observation (Day)</th>
			  </tr>
			  <tr>
			    <th>M</th>
					<th>E</th>
					<th>N</th>
					<th>M</th>
					<th>E</th>
					<th>N</th>
					<th>M</th>
					<th>E</th>
					<th>N</th>
					<th>M</th>
					<th>E</th>
					<th>N</th>
					<th>M</th>
					<th>E</th>
					<th>N</th>
					<th>M</th>
					<th>E</th>
					<th>N</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Hand hygiene-6 steps disinfection, PPE before task</td>
					<div class="form-group form-check">
					  <td class="text-center"><input type="checkbox" name="pl_00_00" id="pl_00_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_01" id="pl_00_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_02" id="pl_00_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_03" id="pl_00_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_04" id="pl_00_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_05" id="pl_00_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_06" id="pl_00_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_07" id="pl_00_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_08" id="pl_00_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_09" id="pl_00_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_10" id="pl_00_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_11" id="pl_00_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_12" id="pl_00_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_13" id="pl_00_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_14" id="pl_00_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_15" id="pl_00_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_16" id="pl_00_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_00_17" id="pl_00_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>2</td>
					<td>Site preparation & Dressing Changes using 2% Chlorhexidine / Providine Iodine</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_01_00" id="pl_01_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_01" id="pl_01_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_02" id="pl_01_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_03" id="pl_01_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_04" id="pl_01_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_05" id="pl_01_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_06" id="pl_01_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_07" id="pl_01_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_08" id="pl_01_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_09" id="pl_01_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_10" id="pl_01_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_11" id="pl_01_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_12" id="pl_01_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_13" id="pl_01_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_14" id="pl_01_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_15" id="pl_01_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_16" id="pl_01_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_01_17" id="pl_01_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>3</td>
					<td>Site Labelled - Date & Time </td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_02_00" id="pl_02_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_01" id="pl_02_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_02" id="pl_02_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_03" id="pl_02_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_04" id="pl_02_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_05" id="pl_02_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_06" id="pl_02_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_07" id="pl_02_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_08" id="pl_02_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_09" id="pl_02_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_10" id="pl_02_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_11" id="pl_02_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_12" id="pl_02_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_13" id="pl_02_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_14" id="pl_02_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_15" id="pl_02_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_16" id="pl_02_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_02_17" id="pl_02_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>4</td>
					<td>Dressing change (Transparent SemiPermeable ) 3 to 4 days or when required.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_03_00" id="pl_03_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_01" id="pl_03_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_02" id="pl_03_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_03" id="pl_03_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_04" id="pl_03_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_05" id="pl_03_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_06" id="pl_03_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_07" id="pl_03_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_08" id="pl_03_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_09" id="pl_03_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_10" id="pl_03_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_11" id="pl_03_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_12" id="pl_03_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_13" id="pl_03_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_14" id="pl_03_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_15" id="pl_03_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_16" id="pl_03_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_03_17" id="pl_03_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>5</td>
					<td>Inspection dressing Intact / Dampened / Loosened / Soiled</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_04_00" id="pl_04_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_01" id="pl_04_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_02" id="pl_04_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_03" id="pl_04_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_04" id="pl_04_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_05" id="pl_04_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_06" id="pl_04_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_07" id="pl_04_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_08" id="pl_04_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_09" id="pl_04_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_10" id="pl_04_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_11" id="pl_04_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_12" id="pl_04_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_13" id="pl_04_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_14" id="pl_04_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_15" id="pl_04_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_16" id="pl_04_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_04_17" id="pl_04_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>6</td>
					<td>Flushing with ACL Flushing protocol. Use only Single Use prefilled 0.9% NS (Posiflush) / Single USE sterile NS Vials</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_05_00" id="pl_05_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_01" id="pl_05_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_02" id="pl_05_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_03" id="pl_05_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_04" id="pl_05_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_05" id="pl_05_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_06" id="pl_05_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_07" id="pl_05_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_08" id="pl_05_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_09" id="pl_05_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_10" id="pl_05_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_11" id="pl_05_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_12" id="pl_05_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_13" id="pl_05_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_14" id="pl_05_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_15" id="pl_05_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_16" id="pl_05_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_05_17" id="pl_05_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>7</td>
					<td>Wipe top of vial/bag with spirit or sterillum before withdrawing medicine/ solution.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_06_00" id="pl_06_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_01" id="pl_06_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_02" id="pl_06_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_03" id="pl_06_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_04" id="pl_06_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_05" id="pl_06_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_06" id="pl_06_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_07" id="pl_06_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_08" id="pl_06_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_09" id="pl_06_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_10" id="pl_06_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_11" id="pl_06_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_12" id="pl_06_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_13" id="pl_06_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_14" id="pl_06_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_15" id="pl_06_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_16" id="pl_06_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_06_17" id="pl_06_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>8</td>
					<td>Date of administration Set - Change Intermittent - 24 hrs, Continuous - 48 - 72hrs, Blood 4hrs, TPN 24hrs</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_07_00" id="pl_07_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_01" id="pl_07_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_02" id="pl_07_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_03" id="pl_07_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_04" id="pl_07_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_05" id="pl_07_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_06" id="pl_07_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_07" id="pl_07_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_08" id="pl_07_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_09" id="pl_07_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_10" id="pl_07_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_11" id="pl_07_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_12" id="pl_07_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_13" id="pl_07_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_14" id="pl_07_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_15" id="pl_07_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_16" id="pl_07_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_07_17" id="pl_07_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>9</td>
					<td>Use of split septum closed connectors (Q syte, Extension or stand alone) Clean Q syte before each use.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_08_00" id="pl_08_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_01" id="pl_08_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_02" id="pl_08_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_03" id="pl_08_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_04" id="pl_08_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_05" id="pl_08_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_06" id="pl_08_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_07" id="pl_08_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_08" id="pl_08_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_09" id="pl_08_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_10" id="pl_08_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_11" id="pl_08_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_12" id="pl_08_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_13" id="pl_08_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_14" id="pl_08_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_15" id="pl_08_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_16" id="pl_08_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_08_17" id="pl_08_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>10</td>
					<td>Clamping of unused lines</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_09_00" id="pl_09_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_01" id="pl_09_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_02" id="pl_09_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_03" id="pl_09_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_04" id="pl_09_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_05" id="pl_09_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_06" id="pl_09_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_07" id="pl_09_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_08" id="pl_09_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_09" id="pl_09_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_10" id="pl_09_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_11" id="pl_09_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_12" id="pl_09_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_13" id="pl_09_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_14" id="pl_09_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_15" id="pl_09_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_16" id="pl_09_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_09_17" id="pl_09_17" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>11</td>
					<td>Daily review of line necessity / Prompt removal</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_10_00" id="pl_10_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_01" id="pl_10_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_02" id="pl_10_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_03" id="pl_10_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_04" id="pl_10_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_05" id="pl_10_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_06" id="pl_10_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_07" id="pl_10_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_08" id="pl_10_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_09" id="pl_10_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_10" id="pl_10_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_11" id="pl_10_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_12" id="pl_10_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_13" id="pl_10_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_14" id="pl_10_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_15" id="pl_10_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_16" id="pl_10_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_10_17" id="pl_10_17" value="yes"></td>
					</div>
			  </tr>
			  <tr>
			    <td></td>
					<td class="text-right">Sign Of Staff</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_11_00" id="pl_11_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_01" id="pl_11_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_02" id="pl_11_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_03" id="pl_11_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_04" id="pl_11_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_05" id="pl_11_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_06" id="pl_11_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_07" id="pl_11_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_08" id="pl_11_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_09" id="pl_11_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_10" id="pl_11_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_11" id="pl_11_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_12" id="pl_11_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_13" id="pl_11_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_14" id="pl_11_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_15" id="pl_11_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_16" id="pl_11_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_11_17" id="pl_11_17" value="yes"></td>
					</div>
			  </tr>
			  <tr>
			    <td></td>
					<td class="text-right">ID No:</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="pl_12_00" id="pl_12_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_01" id="pl_12_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_02" id="pl_12_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_03" id="pl_12_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_04" id="pl_12_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_05" id="pl_12_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_06" id="pl_12_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_07" id="pl_12_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_08" id="pl_12_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_09" id="pl_12_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_10" id="pl_12_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_11" id="pl_12_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_12" id="pl_12_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_13" id="pl_12_13" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_14" id="pl_12_14" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_15" id="pl_12_15" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_16" id="pl_12_16" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="pl_12_17" id="pl_12_17" value="yes"></td>
					</div>
			  </tr>
			</tbody>
		  </table>
		</div>

		<hr>

		<div class="row">
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>No.</th>
						<th>Date & Time of Insertion</th>
						<th>Gauge</th>
						<th>Attempts</th>
						<th>Site</th>
						<th>Date & Time of Removal</th>
						<th>Total Indwelling Time in Hours</th>
						<th>Catheter Material(PTFE/vial on</th>
						<th>Flushing Done</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><input type="date" name="date_insertion_01" class="form-control"><input type="time" name="time_insertion_01" class="form-control"></td>
						<td><input type="number" name="gauge_01" class="form-control"></td>
						<td><input type="number" name="attempts_01" class="form-control"></td>
						<td><input type="number" name="site_01" class="form-control"></td>
						<td><input type="date" name="date__removal_01" class="form-control"><input type="time" name="time_removal_01" class="form-control"></td>
						<td><input type="number" name="hours_01" class="form-control"></td>
						<td><div class=""><input type="radio" name="cather_material_01" value="plain"> Plain</div>
							<div class=""><input type="radio" name="cather_material_01" value="vps"> Venflon Pro Safety</div></td>
						<td><div class=""><input type="radio" name="flushing_01" class="" value="yes"> Yes </div>
							<div class=""><input type="radio" name="flushing_01" class="" value="no"> No </div></td>
					</tr>
					<tr>
						<td>2</td>
						<td><input type="date" name="date_insertion_02" class="form-control"><input type="time" name="time_insertion_02" class="form-control"></td>
						<td><input type="number" name="gauge_02" class="form-control"></td>
						<td><input type="number" name="attempts_02" class="form-control"></td>
						<td><input type="number" name="site_02" class="form-control"></td>
						<td><input type="date" name="date__removal_02" class="form-control"><input type="time" name="time_removal_02" class="form-control"></td>
						<td><input type="number" name="hours_02" class="form-control"></td>
						<td><div class=""><input type="radio" name="cather_material_02" value="plain"> Plain</div>
							<div class=""><input type="radio" name="cather_material_02" value="vps"> Venflon Pro Safety</div></td>
						<td><div class=""><input type="radio" name="flushing_02" class="" value="yes"> Yes </div>
							<div class=""><input type="radio" name="flushing_02" class="" value="no"> No </div></td>
					</tr>
					<tr>
						<td>3</td>
						<td><input type="date" name="date_insertion_03" class="form-control"><input type="time" name="time_insertion_03" class="form-control"></td>
						<td><input type="number" name="gauge_03" class="form-control"></td>
						<td><input type="number" name="attempts_03" class="form-control"></td>
						<td><input type="number" name="site_03" class="form-control"></td>
						<td><input type="date" name="date__removal_03" class="form-control"><input type="time" name="time_removal_03" class="form-control"></td>
						<td><input type="number" name="hours_03" class="form-control"></td>
						<td><div class=""><input type="radio" name="cather_material_03" value="plain"> Plain</div>
							<div class=""><input type="radio" name="cather_material_03" value="vps"> Venflon Pro Safety</div></td>
						<td><div class=""><input type="radio" name="flushing_03" class="" value="yes"> Yes </div>
							<div class=""><input type="radio" name="flushing_03" class="" value="no"> No </div></td>
					</tr>
				</tbody>
			</table>

			<br><br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th colspan="12" class="text-center">Reason of Removal</th>

						<th colspan="4">Status of Catheter on Removal</th>
					</tr>
					<tr>
						<th colspan="5">Phlebetis Grade</th>
						<th rowspan="2">Infiltration</th>
						<th rowspan="2">Hematoma</th>
						<th rowspan="2">Extravasation</th>
						<th rowspan="2">Occlusion</th>
						<th rowspan="2">As per protocol</th>
						<th rowspan="2">Pt. Discharged</th>
						<th rowspan="2">IV Therapy Terminated</th>

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
						<td class="text-center"><input type="radio" name="ror_01"  value="pg_00"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="pg_01"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="pg_02"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="pg_03"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="pg_04"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="inf"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="hem"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="ext"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="occl"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="prot"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="ptdis"></td>
						<td class="text-center"><input type="radio" name="ror_01"  value="ivtherap"></td>

						<td class="text-center"><input type="checkbox" name="cor_01"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_01"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_01"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_01"  value="pg_00"></td>
					</tr>
					<tr>
						<td class="text-center"><input type="radio" name="ror_02"  value="pg_00"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="pg_01"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="pg_02"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="pg_03"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="pg_04"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="inf"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="hem"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="ext"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="occl"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="prot"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="ptdis"></td>
						<td class="text-center"><input type="radio" name="ror_02"  value="ivtherap"></td>

						<td class="text-center"><input type="checkbox" name="cor_02"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_02"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_02"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_02"  value="pg_00"></td>
					</tr>
					<tr>
						<td class="text-center"><input type="radio" name="ror_03"  value="pg_00"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="pg_01"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="pg_02"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="pg_03"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="pg_04"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="inf"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="hem"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="ext"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="occl"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="prot"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="ptdis"></td>
						<td class="text-center"><input type="radio" name="ror_03"  value="ivtherap"></td>

						<td class="text-center"><input type="checkbox" name="cor_03"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_03"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_03"  value="pg_00"></td>
						<td class="text-center"><input type="checkbox" name="cor_03"  value="pg_00"></td>
					</tr>

				</tbody>
			</table>
		</div>
		<hr>

		<!-- Second Checklist -->


		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Foley's Catheter Bundle Checklist</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. FMT/HIC/04 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<div class="row">
		  <table class="table table-bordered">
		    <thead>
			  <tr>
				<th rowspan="2">Sr. No.</th>
				<th rowspan="2">Practice</th>
				<th colspan="18" class="text-center">Observation (Day)</th>
			  </tr>
			  <tr>
			    <th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Hand hygiene-6 steps disinfection, PPE before task</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_00_00" id="fc_00_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_01" id="fc_00_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_02" id="fc_00_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_03" id="fc_00_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_04" id="fc_00_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_05" id="fc_00_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_06" id="fc_00_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_07" id="fc_00_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_08" id="fc_00_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_09" id="fc_00_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_10" id="fc_00_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_11" id="fc_00_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_12" id="fc_00_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_00_13" id="fc_00_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>2</td>
					<td>Reason for insertion of catheter documented</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_01_00" id="fc_01_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_01" id="fc_01_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_02" id="fc_01_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_03" id="fc_01_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_04" id="fc_01_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_05" id="fc_01_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_06" id="fc_01_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_07" id="fc_01_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_08" id="fc_01_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_09" id="fc_01_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_10" id="fc_01_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_11" id="fc_01_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_12" id="fc_01_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_01_13" id="fc_01_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>3</td>
					<td>Daily assessment for need of urinary catheter</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_02_00" id="fc_02_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_01" id="fc_02_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_02" id="fc_02_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_03" id="fc_02_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_04" id="fc_02_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_05" id="fc_02_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_06" id="fc_02_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_07" id="fc_02_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_08" id="fc_02_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_09" id="fc_02_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_10" id="fc_02_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_11" id="fc_02_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_12" id="fc_02_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_02_13" id="fc_02_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>4</td>
					<td>Continuous connection of catheter</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_03_00" id="fc_03_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_01" id="fc_03_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_02" id="fc_03_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_03" id="fc_03_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_04" id="fc_03_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_05" id="fc_03_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_06" id="fc_03_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_07" id="fc_03_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_08" id="fc_03_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_09" id="fc_03_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_10" id="fc_03_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_11" id="fc_03_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_12" id="fc_03_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_03_13" id="fc_03_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>5</td>
					<td>Site Labelled - Date & Time Date of change</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_04_00" id="fc_04_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_01" id="fc_04_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_02" id="fc_04_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_03" id="fc_04_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_04" id="fc_04_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_05" id="fc_04_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_06" id="fc_04_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_07" id="fc_04_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_08" id="fc_04_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_09" id="fc_04_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_10" id="fc_04_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_11" id="fc_04_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_12" id="fc_04_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_04_13" id="fc_04_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>6</td>
					<td>Daily mental hygiene performed Povidon iodine/ 1.5% Chlorhexidine. 12hrly.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_05_00" id="fc_05_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_01" id="fc_05_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_02" id="fc_05_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_03" id="fc_05_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_04" id="fc_05_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_05" id="fc_05_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_06" id="fc_05_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_07" id="fc_05_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_08" id="fc_05_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_09" id="fc_05_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_10" id="fc_05_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_11" id="fc_05_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_12" id="fc_05_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_05_13" id="fc_05_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>7</td>
					<td>Emptying of UC bag often (2/3rd full ) into clean container</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_06_00" id="fc_06_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_01" id="fc_06_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_02" id="fc_06_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_03" id="fc_06_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_04" id="fc_06_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_05" id="fc_06_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_06" id="fc_06_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_07" id="fc_06_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_08" id="fc_06_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_09" id="fc_06_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_10" id="fc_06_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_11" id="fc_06_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_12" id="fc_06_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_06_13" id="fc_06_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>8</td>
					<td>Collecting bag below the level of bladder</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_07_00" id="fc_07_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_01" id="fc_07_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_02" id="fc_07_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_03" id="fc_07_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_04" id="fc_07_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_05" id="fc_07_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_06" id="fc_07_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_07" id="fc_07_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_08" id="fc_07_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_09" id="fc_07_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_10" id="fc_07_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_11" id="fc_07_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_12" id="fc_07_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_07_13" id="fc_07_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>9</td>
					<td>Any Change in urine character Increased sediment, Foul smell, Hematuria</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_08_00" id="fc_08_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_01" id="fc_08_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_02" id="fc_08_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_03" id="fc_08_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_04" id="fc_08_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_05" id="fc_08_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_06" id="fc_08_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_07" id="fc_08_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_08" id="fc_08_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_09" id="fc_08_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_10" id="fc_08_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_11" id="fc_08_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_12" id="fc_08_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_08_13" id="fc_08_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>10</td>
					<td>Flank / Suprapubic pain / tenderness</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_09_00" id="fc_09_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_01" id="fc_09_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_02" id="fc_09_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_03" id="fc_09_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_04" id="fc_09_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_05" id="fc_09_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_06" id="fc_09_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_07" id="fc_09_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_08" id="fc_09_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_09" id="fc_09_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_10" id="fc_09_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_11" id="fc_09_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_12" id="fc_09_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_09_13" id="fc_09_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>11</td>
					<td>Decreased Functional status</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_10_00" id="fc_10_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_01" id="fc_10_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_02" id="fc_10_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_03" id="fc_10_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_04" id="fc_10_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_05" id="fc_10_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_06" id="fc_10_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_07" id="fc_10_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_08" id="fc_10_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_09" id="fc_10_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_10" id="fc_10_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_11" id="fc_10_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_12" id="fc_10_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_10_13" id="fc_10_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>12</td>
					<td>Increased Burning / Itching</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_11_00" id="fc_11_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_01" id="fc_11_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_02" id="fc_11_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_03" id="fc_11_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_04" id="fc_11_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_05" id="fc_11_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_06" id="fc_11_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_07" id="fc_11_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_08" id="fc_11_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_09" id="fc_11_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_10" id="fc_11_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_11" id="fc_11_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_12" id="fc_11_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_11_13" id="fc_11_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>13</td>
					<td>Plan for removal of catheter</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_12_00" id="fc_12_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_01" id="fc_12_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_02" id="fc_12_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_03" id="fc_12_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_04" id="fc_12_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_05" id="fc_12_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_06" id="fc_12_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_07" id="fc_12_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_08" id="fc_12_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_09" id="fc_12_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_10" id="fc_12_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_11" id="fc_12_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_12" id="fc_12_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_12_13" id="fc_12_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>14</td>
					<td>Culture & Sensitivity Report</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_13_00" id="fc_13_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_01" id="fc_13_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_02" id="fc_13_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_03" id="fc_13_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_04" id="fc_13_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_05" id="fc_13_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_06" id="fc_13_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_07" id="fc_13_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_08" id="fc_13_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_09" id="fc_13_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_10" id="fc_13_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_11" id="fc_13_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_12" id="fc_13_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_13_13" id="fc_13_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>15</td>
					<td>Antibiotics</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_14_00" id="fc_14_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_01" id="fc_14_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_02" id="fc_14_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_03" id="fc_14_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_04" id="fc_14_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_05" id="fc_14_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_06" id="fc_14_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_07" id="fc_14_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_08" id="fc_14_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_09" id="fc_14_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_10" id="fc_14_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_11" id="fc_14_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_12" id="fc_14_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_14_13" id="fc_14_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td></td>
					<td class="text-right">Sign Of Staff</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_15_00" id="fc_15_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_01" id="fc_15_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_02" id="fc_15_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_03" id="fc_15_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_04" id="fc_15_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_05" id="fc_15_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_06" id="fc_15_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_07" id="fc_15_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_08" id="fc_15_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_09" id="fc_15_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_10" id="fc_15_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_11" id="fc_15_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_12" id="fc_15_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_15_13" id="fc_15_13" value="yes"></td>
					</div>
			  </tr>
			  <tr>
			    <td></td>
					<td class="text-right">ID No:</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="fc_16_00" id="fc_16_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_01" id="fc_16_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_02" id="fc_16_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_03" id="fc_16_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_04" id="fc_16_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_05" id="fc_16_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_06" id="fc_16_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_07" id="fc_16_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_08" id="fc_16_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_09" id="fc_16_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_10" id="fc_16_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_11" id="fc_16_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_12" id="fc_16_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="fc_16_13" id="fc_16_13" value="yes"></td>
					</div>
			  </tr>
			</tbody>
		  </table>
		</div>

		<hr>

		<!-- Third Checklist -->

		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Central Line Bundle Checklist</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. FMT/HIC/02 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<div class="row">
		  <table class="table table-bordered">
		    <thead>
				  <tr>
						<th rowspan="2">Sr. No.</th>
						<th rowspan="2">Practice</th>
						<th colspan="18" class="text-center">Observation (Day)</th>
				  </tr>
				  <tr>
				    <th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
				  </tr>
				</thead>
				<tbody>
			  <tr>
			    <td>1</td>
					<td>Hand hygiene-6 steps disinfection, PPE before task</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_00_00" id="cl_00_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_01" id="cl_00_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_02" id="cl_00_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_03" id="cl_00_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_04" id="cl_00_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_05" id="cl_00_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_06" id="cl_00_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_07" id="cl_00_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_08" id="cl_00_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_09" id="cl_00_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_10" id="cl_00_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_11" id="cl_00_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_12" id="cl_00_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_00_13" id="cl_00_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>2</td>
					<td>Site preparation & Dressing changes using Povidine iodine / 2% Chlorhexidine</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_01_00" id="cl_01_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_01" id="cl_01_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_02" id="cl_01_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_03" id="cl_01_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_04" id="cl_01_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_05" id="cl_01_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_06" id="cl_01_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_07" id="cl_01_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_08" id="cl_01_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_09" id="cl_01_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_10" id="cl_01_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_11" id="cl_01_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_12" id="cl_01_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_01_13" id="cl_01_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>3</td>
					<td>Site Labelled - Date & Time</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_02_00" id="cl_02_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_01" id="cl_02_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_02" id="cl_02_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_03" id="cl_02_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_04" id="cl_02_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_05" id="cl_02_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_06" id="cl_02_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_07" id="cl_02_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_08" id="cl_02_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_09" id="cl_02_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_10" id="cl_02_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_11" id="cl_02_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_12" id="cl_02_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_02_13" id="cl_02_13" value="yes"></td>
				</div>
			  </tr>

			  <tr>
			    <td>4</td>
					<td>Daily review of line necessity / Prompt removal</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_03_00" id="cl_03_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_01" id="cl_03_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_02" id="cl_03_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_03" id="cl_03_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_04" id="cl_03_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_05" id="cl_03_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_06" id="cl_03_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_07" id="cl_03_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_08" id="cl_03_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_09" id="cl_03_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_10" id="cl_03_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_11" id="cl_03_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_12" id="cl_03_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_03_13" id="cl_03_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>5</td>
					<td>Inspection dressing Intact / Dampened / Loosened / Soiled</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_04_00" id="cl_04_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_01" id="cl_04_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_02" id="cl_04_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_03" id="cl_04_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_04" id="cl_04_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_05" id="cl_04_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_06" id="cl_04_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_07" id="cl_04_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_08" id="cl_04_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_09" id="cl_04_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_10" id="cl_04_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_11" id="cl_04_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_12" id="cl_04_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_04_13" id="cl_04_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>6</td>
					<td>Redness / Swelling / Pus / Phlebitis</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_05_00" id="cl_05_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_01" id="cl_05_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_02" id="cl_05_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_03" id="cl_05_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_04" id="cl_05_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_05" id="cl_05_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_06" id="cl_05_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_07" id="cl_05_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_08" id="cl_05_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_09" id="cl_05_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_10" id="cl_05_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_11" id="cl_05_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_12" id="cl_05_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_05_13" id="cl_05_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>7</td>
					<td>Dressing Change - Transparent 7 days or when required /Gauze every 24-48 hrs</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_06_00" id="cl_06_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_01" id="cl_06_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_02" id="cl_06_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_03" id="cl_06_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_04" id="cl_06_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_05" id="cl_06_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_06" id="cl_06_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_07" id="cl_06_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_08" id="cl_06_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_09" id="cl_06_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_10" id="cl_06_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_11" id="cl_06_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_12" id="cl_06_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_06_13" id="cl_06_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>8</td>
					<td>Flushing by ACL Single Use Prefilled 0.9% NS (Posiflush) / Single Use sterile NS Vials.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_07_00" id="cl_07_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_01" id="cl_07_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_02" id="cl_07_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_03" id="cl_07_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_04" id="cl_07_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_05" id="cl_07_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_06" id="cl_07_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_07" id="cl_07_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_08" id="cl_07_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_09" id="cl_07_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_10" id="cl_07_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_11" id="cl_07_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_12" id="cl_07_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_07_13" id="cl_07_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>9</td>
					<td>Disinfect top of vial/bag before withdrawing medicine</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_08_00" id="cl_08_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_01" id="cl_08_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_02" id="cl_08_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_03" id="cl_08_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_04" id="cl_08_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_05" id="cl_08_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_06" id="cl_08_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_07" id="cl_08_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_08" id="cl_08_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_09" id="cl_08_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_10" id="cl_08_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_11" id="cl_08_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_12" id="cl_08_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_08_13" id="cl_08_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>10</td>
					<td>Alcohol disinfection of hub before each access</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_09_00" id="cl_09_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_01" id="cl_09_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_02" id="cl_09_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_03" id="cl_09_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_04" id="cl_09_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_05" id="cl_09_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_06" id="cl_09_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_07" id="cl_09_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_08" id="cl_09_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_09" id="cl_09_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_10" id="cl_09_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_11" id="cl_09_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_12" id="cl_09_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_09_13" id="cl_09_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>11</td>
					<td>Date of administration set - Change Intermittent - 24 hrs, Continuous - 48 -72 hrs, Blood 4hrs, TPN - 24hrs.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_10_00" id="cl_10_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_01" id="cl_10_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_02" id="cl_10_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_03" id="cl_10_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_04" id="cl_10_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_05" id="cl_10_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_06" id="cl_10_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_07" id="cl_10_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_08" id="cl_10_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_09" id="cl_10_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_10" id="cl_10_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_11" id="cl_10_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_12" id="cl_10_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_10_13" id="cl_10_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>12</td>
					<td>Clamping of unused lines.</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_11_00" id="cl_11_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_01" id="cl_11_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_02" id="cl_11_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_03" id="cl_11_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_04" id="cl_11_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_05" id="cl_11_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_06" id="cl_11_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_07" id="cl_11_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_08" id="cl_11_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_09" id="cl_11_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_10" id="cl_11_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_11" id="cl_11_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_12" id="cl_11_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_11_13" id="cl_11_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>13</td>
					<td>Use of split septum closed connectors (e.g Q syte)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_12_00" id="cl_12_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_01" id="cl_12_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_02" id="cl_12_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_03" id="cl_12_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_04" id="cl_12_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_05" id="cl_12_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_06" id="cl_12_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_07" id="cl_12_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_08" id="cl_12_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_09" id="cl_12_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_10" id="cl_12_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_11" id="cl_12_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_12" id="cl_12_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_12_13" id="cl_12_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>14</td>
					<td>Culture & Sensitivity Report</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_13_00" id="cl_13_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_01" id="cl_13_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_02" id="cl_13_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_03" id="cl_13_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_04" id="cl_13_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_05" id="cl_13_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_06" id="cl_13_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_07" id="cl_13_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_08" id="cl_13_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_09" id="cl_13_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_10" id="cl_13_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_11" id="cl_13_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_12" id="cl_13_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_13_13" id="cl_13_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>15</td>
					<td>Antibiotics</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_14_00" id="cl_14_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_01" id="cl_14_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_02" id="cl_14_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_03" id="cl_14_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_04" id="cl_14_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_05" id="cl_14_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_06" id="cl_14_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_07" id="cl_14_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_08" id="cl_14_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_09" id="cl_14_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_10" id="cl_14_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_11" id="cl_14_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_12" id="cl_14_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_14_13" id="cl_14_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td></td>
					<td class="text-right">Sign Of Staff</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_15_00" id="cl_15_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_01" id="cl_15_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_02" id="cl_15_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_03" id="cl_15_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_04" id="cl_15_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_05" id="cl_15_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_06" id="cl_15_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_07" id="cl_15_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_08" id="cl_15_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_09" id="cl_15_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_10" id="cl_15_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_11" id="cl_15_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_12" id="cl_15_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_15_13" id="cl_15_13" value="yes"></td>
					</div>
			  </tr>
			  <tr>
			    <td></td>
					<td class="text-right">ID No:</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="cl_16_00" id="cl_16_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_01" id="cl_16_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_02" id="cl_16_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_03" id="cl_16_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_04" id="cl_16_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_05" id="cl_16_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_06" id="cl_16_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_07" id="cl_16_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_08" id="cl_16_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_09" id="cl_16_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_10" id="cl_16_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_11" id="cl_16_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_12" id="cl_16_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="cl_16_13" id="cl_16_13" value="yes"></td>
					</div>
			  </tr>
			</tbody>
		  </table>
		</div>
		<hr>

		<!-- Fourth Checklist -->

		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>VAP Bundle Checklist</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. FMT/HIC/03 <br>
						REV. No. 0.1 <br>
						WEF 10-10-2015
					</div>
				</div>
			</div>
		</div>

		<div class="row">
		  <table class="table table-bordered">
		    <thead>
			  <tr>
					<th rowspan="2">Sr. No.</th>
					<th rowspan="2">Practice</th>
					<th colspan="18" class="text-center">Observation (Day)</th>
			  </tr>
			  <tr>
			    <th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
					<th>6</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
			    <td>1</td>
					<td>Hand hygiene-6 steps disinfection, PPE before task</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_00_00" id="vap_00_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_01" id="vap_00_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_02" id="vap_00_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_03" id="vap_00_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_04" id="vap_00_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_05" id="vap_00_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_06" id="vap_00_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_07" id="vap_00_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_08" id="vap_00_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_09" id="vap_00_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_10" id="vap_00_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_11" id="vap_00_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_12" id="vap_00_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_00_13" id="vap_00_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>2</td>
					<td>Chlorhexidine mouthwash (every Shift) Patient</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_01_00" id="vap_01_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_01" id="vap_01_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_02" id="vap_01_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_03" id="vap_01_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_04" id="vap_01_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_05" id="vap_01_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_06" id="vap_01_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_07" id="vap_01_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_08" id="vap_01_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_09" id="vap_01_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_10" id="vap_01_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_11" id="vap_01_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_12" id="vap_01_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_01_13" id="vap_01_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>3</td>
					<td>Ventilation of patient justified by healthcare team</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_02_00" id="vap_02_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_01" id="vap_02_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_02" id="vap_02_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_03" id="vap_02_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_04" id="vap_02_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_05" id="vap_02_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_06" id="vap_02_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_07" id="vap_02_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_08" id="vap_02_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_09" id="vap_02_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_10" id="vap_02_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_11" id="vap_02_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_12" id="vap_02_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_02_13" id="vap_02_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>4</td>
					<td>Head of the bed more than 30 degree</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_03_00" id="vap_03_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_01" id="vap_03_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_02" id="vap_03_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_03" id="vap_03_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_04" id="vap_03_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_05" id="vap_03_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_06" id="vap_03_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_07" id="vap_03_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_08" id="vap_03_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_09" id="vap_03_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_10" id="vap_03_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_11" id="vap_03_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_12" id="vap_03_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_03_13" id="vap_03_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>5</td>
					<td>Daily sedation interruption</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_04_00" id="vap_04_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_01" id="vap_04_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_02" id="vap_04_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_03" id="vap_04_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_04" id="vap_04_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_05" id="vap_04_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_06" id="vap_04_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_07" id="vap_04_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_08" id="vap_04_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_09" id="vap_04_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_10" id="vap_04_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_11" id="vap_04_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_12" id="vap_04_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_04_13" id="vap_04_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>6</td>
					<td>Insulin therapy to keep blood sugar 140-160mg/dL</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_05_00" id="vap_05_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_01" id="vap_05_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_02" id="vap_05_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_03" id="vap_05_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_04" id="vap_05_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_05" id="vap_05_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_06" id="vap_05_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_07" id="vap_05_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_08" id="vap_05_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_09" id="vap_05_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_10" id="vap_05_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_11" id="vap_05_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_12" id="vap_05_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_05_13" id="vap_05_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>7</td>
					<td>ET tube cuff pressure monitoring ( Every shift - Target 20cms H2O)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_06_00" id="vap_06_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_01" id="vap_06_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_02" id="vap_06_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_03" id="vap_06_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_04" id="vap_06_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_05" id="vap_06_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_06" id="vap_06_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_07" id="vap_06_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_08" id="vap_06_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_09" id="vap_06_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_10" id="vap_06_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_11" id="vap_06_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_12" id="vap_06_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_06_13" id="vap_06_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>8</td>
					<td>Daily Assessment of readiness to wean or extubate (Doctor to evaluate)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_07_00" id="vap_07_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_01" id="vap_07_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_02" id="vap_07_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_03" id="vap_07_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_04" id="vap_07_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_05" id="vap_07_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_06" id="vap_07_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_07" id="vap_07_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_08" id="vap_07_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_09" id="vap_07_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_10" id="vap_07_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_11" id="vap_07_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_12" id="vap_07_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_07_13" id="vap_07_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>9</td>
					<td>Daily spontaneous breathing trial (Doctor to evaluate)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_08_00" id="vap_08_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_01" id="vap_08_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_02" id="vap_08_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_03" id="vap_08_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_04" id="vap_08_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_05" id="vap_08_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_06" id="vap_08_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_07" id="vap_08_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_08" id="vap_08_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_09" id="vap_08_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_10" id="vap_08_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_11" id="vap_08_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_12" id="vap_08_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_08_13" id="vap_08_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>10</td>
					<td>Peptic ulcer disease (PUD) prophylaxis (eg. Ranitidine)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_09_00" id="vap_09_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_01" id="vap_09_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_02" id="vap_09_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_03" id="vap_09_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_04" id="vap_09_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_05" id="vap_09_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_06" id="vap_09_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_07" id="vap_09_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_08" id="vap_09_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_09" id="vap_09_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_10" id="vap_09_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_11" id="vap_09_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_12" id="vap_09_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_09_13" id="vap_09_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>11</td>
					<td>Sterile fluid used for nebulization</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_10_00" id="vap_10_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_01" id="vap_10_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_02" id="vap_10_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_03" id="vap_10_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_04" id="vap_10_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_05" id="vap_10_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_06" id="vap_10_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_07" id="vap_10_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_08" id="vap_10_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_09" id="vap_10_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_10" id="vap_10_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_11" id="vap_10_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_12" id="vap_10_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_10_13" id="vap_10_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>12</td>
					<td>Deep vein thrombosis prophylaxis (Stockings - Position Change)</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_11_00" id="vap_11_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_01" id="vap_11_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_02" id="vap_11_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_03" id="vap_11_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_04" id="vap_11_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_05" id="vap_11_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_06" id="vap_11_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_07" id="vap_11_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_08" id="vap_11_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_09" id="vap_11_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_10" id="vap_11_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_11" id="vap_11_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_12" id="vap_11_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_11_13" id="vap_11_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>13</td>
					<td>Suction tip disinfection using 1% povidone - iodine</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_12_00" id="vap_12_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_01" id="vap_12_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_02" id="vap_12_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_03" id="vap_12_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_04" id="vap_12_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_05" id="vap_12_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_06" id="vap_12_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_07" id="vap_12_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_08" id="vap_12_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_09" id="vap_12_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_10" id="vap_12_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_11" id="vap_12_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_12" id="vap_12_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_12_13" id="vap_12_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>14</td>
					<td>Tc count and temperature Normal / raised significantly</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_13_00" id="vap_13_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_01" id="vap_13_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_02" id="vap_13_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_03" id="vap_13_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_04" id="vap_13_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_05" id="vap_13_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_06" id="vap_13_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_07" id="vap_13_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_08" id="vap_13_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_09" id="vap_13_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_10" id="vap_13_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_11" id="vap_13_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_12" id="vap_13_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_13_13" id="vap_13_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>15</td>
					<td>Auscultation findings to suggest pneumonia / X-ray</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_14_00" id="vap_14_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_01" id="vap_14_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_02" id="vap_14_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_03" id="vap_14_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_04" id="vap_14_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_05" id="vap_14_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_06" id="vap_14_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_07" id="vap_14_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_08" id="vap_14_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_09" id="vap_14_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_10" id="vap_14_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_11" id="vap_14_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_12" id="vap_14_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_14_13" id="vap_14_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>16</td>
					<td>ET secretion /sputum culture & Sensitivity report</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_15_00" id="vap_15_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_01" id="vap_15_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_02" id="vap_15_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_03" id="vap_15_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_04" id="vap_15_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_05" id="vap_15_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_06" id="vap_15_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_07" id="vap_15_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_08" id="vap_15_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_09" id="vap_15_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_10" id="vap_15_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_11" id="vap_15_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_12" id="vap_15_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_15_13" id="vap_15_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td>17</td>
					<td>Antibiotics</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_16_00" id="vap_16_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_01" id="vap_16_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_02" id="vap_16_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_03" id="vap_16_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_04" id="vap_16_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_05" id="vap_16_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_06" id="vap_16_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_07" id="vap_16_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_08" id="vap_16_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_09" id="vap_16_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_10" id="vap_16_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_11" id="vap_16_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_12" id="vap_16_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_16_13" id="vap_16_13" value="yes"></td>
					</div>
			  </tr>

			  <tr>
			    <td></td>
					<td class="text-right">Sign Of Staff</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_17_00" id="vap_17_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_01" id="vap_17_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_02" id="vap_17_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_03" id="vap_17_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_04" id="vap_17_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_05" id="vap_17_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_06" id="vap_17_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_07" id="vap_17_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_08" id="vap_17_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_09" id="vap_17_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_10" id="vap_17_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_11" id="vap_17_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_12" id="vap_17_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_17_13" id="vap_17_13" value="yes"></td>
					</div>
			  </tr>
			  <tr>
			    <td></td>
					<td class="text-right">ID No:</td>
					<div class="form-group">
					  <td class="text-center"><input type="checkbox" name="vap_18_00" id="vap_18_00" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_01" id="vap_18_01" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_02" id="vap_18_02" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_03" id="vap_18_03" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_04" id="vap_18_04" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_05" id="vap_18_05" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_06" id="vap_18_06" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_07" id="vap_18_07" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_08" id="vap_18_08" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_09" id="vap_18_09" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_10" id="vap_18_10" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_11" id="vap_18_11" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_12" id="vap_18_12" value="yes"></td>
					  <td class="text-center"><input type="checkbox" name="vap_18_13" id="vap_18_13" value="yes"></td>
					</div>
			  </tr>
			</tbody>
		  </table>
		</div>
	</form>
</div>
</body>
