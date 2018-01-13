<html>
<head>
	<title>
		Nursing Duty Over
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form id="nursingdutyover" name="nursingdutyover">
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
		<div class ="row form-group">
			<div class="col-md-4">
				<textarea class="form-control" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
			</div>
			<div class="col-md-8">
				<textarea class="form-control" id="specific_instruction" rows="3" placeholder="Specific Instructions If Any"></textarea>
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
								<td colspan="2"><input type = "text" class = "form-control" name="M_nurse_name" id = "M_nurse_name"></td>
								<td colspan="2"><input type = "text" class = "form-control" name="E_nurse_name" id = "E_nurse_name"/></td>
								<td colspan="2"><input type = "text" class = "form-control" name="N_nurse_name" id = "N_nurse_name"/></td>
							</div>
					  </tr>

						<tr>
							<td>In Charge on Duty</td>
							<div class="form-check-input">
							  <td colspan="2"><input type = "text" class = "form-control" name="M_incharge_name" id = "M_incharge_name"/></td>
								<td colspan="2"><input type = "text" class = "form-control" name="E_incharge_name" id = "E_incharge_name"/></td>
								<td colspan="2"><input type = "text" class = "form-control" name="N_incharge_name" id = "N_incharge_name"/></td>
							</div>
						</tr>

					  <tr>
							<td>1. Eye Care </td>
							<div class="form-check-input">
								<td colspan="2"><input type="checkbox" class="form-check" name="M_eyecare" id="M_eyecare" value="yes" /></td>
								<td colspan="2"><input type="checkbox" class="form-check" name="E_eyecare" id="E_eyecare" value="yes" /></td>
								<td colspan="2"><input type="checkbox" class="form-check" name="N_eyecare" id="N_eyecare" value="yes" /></td>
							</div>
					  </tr>

					  <tr>
							<td>2. Mouth Care</td>
							<div class="form-check-input">
								<td colspan="2"><input type="checkbox" class="form-check" name="M_mouthcare" id="M_mouthcare" value="yes"></td>
								<td colspan="2"><input type="checkbox" class="form-check" name="E_mouthcare" id="E_mouthcare" value="yes"></td>
								<td colspan="2"><input type="checkbox" class="form-check" name="N_mouthcare" id="N_mouthcare" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>3. Skin Care/ Back Care </td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_skincare" id="M_skincare" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_skincare" id="E_skincare" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_skincare" id="N_skincare" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>4. Bedding</td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_bedding" id="M_bedding" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_bedding" id="E_bedding" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_bedding" id="N_bedding" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>5. Catheter Care</td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_cathetercare" id="M_cathetercare" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_cathetercare" id="E_cathetercare" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_cathetercare" id="N_cathetercare" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>6. Physiotherapy</td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_physiotherapy" id="M_physiotherapy" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_physiotherapy" id="E_physiotherapy" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_physiotherapy" id="N_physiotherapy" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>7. Sponge Bath</td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_spongebath" id="M_spongebath" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_spongebath" id="E_spongebath" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_spongebath" id="N_spongebath" value="yes"></td>
							</div>
					  </tr>

					  <tr>
							<td>8. Any Other </td>
							<div class="form-group">
								<td colspan="2"><input type="checkbox" name="M_other" id="M_other" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="E_other" id="E_other" value="yes"></td>
								<td colspan="2"><input type="checkbox" name="N_other" id="N_other" value="yes"></td>
							</div>
						</tr>

						<tr>
							<td>Investigations</td>
							<div class="form-group">
								<td colspan="2"><input type = "text" class = "form-control" class="M_investigations" id = "M_investigations"></td>
								<td colspan="2"><input type = "text" class = "form-control" class="E_investigations" id = "E_investigations"/></td>
								<td colspan="2"><input type = "text" class = "form-control" class="N_investigations" id = "N_investigations"/></td>
							</div>
						</tr>

					  <tr>
							<td>Pending Reports</td>
							<div class="form-group">
							  <td colspan="2"><input type = "text" class = "form-control" class="M_pendingreport" id = "M_pendingreport"></td>
								<td colspan="2"><input type = "text" class = "form-control" class="E_pendingreport" id = "E_pendingreport"/></td>
								<td colspan="2"><input type = "text" class = "form-control" class="N_pendingreport" id = "N_pendingreport"/></td>
							</div>
					  </tr>

					  <tr>
							<td>Replacement Of Drug.</td>
							<div class="form-group">
							  <td colspan="2"><input type = "text" class = "form-control" class="M_replacementdrug" id = "M_replacementdrug"></t>
								<td colspan="2"><input type = "text" class = "form-control" class="E_replacementdrug" id = "E_replacementdrug"/></td>
								<td colspan="2"><input type = "text" class = "form-control" class="N_replacementdrug" id = "N_replacementdrug"/></td>
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
								<td><input type = "text" class = "form-control" class="balance_drugs_00" id = "balance_drugs_00"></td>
								<td><input type = "text" class = "form-control" class="M_time_00" id = "M_time_00"></td>
								<td><input type = "text" class = "form-control" class="M_balance_00" id = "M_balance_00"/></td>
								<td><input type = "text" class = "form-control" class="E_time_00" id = "E_time_00"></td>
								<td><input type = "text" class = "form-control" class="E_balance_00" id = "E_balance_00"/></td>
								<td><input type = "text" class = "form-control" class="N_time_00" id = "N_time_00"></td>
								<td><input type = "text" class = "form-control" class="N_balance_00" id = "N_balance_00"/></td>
							</div>
					  </tr>
						<tr>
							<div class="form-group">
								<td><input type = "text" class = "form-control" class="balance_drugs_01" id = "balance_drugs_01"></td>
								<td><input type = "text" class = "form-control" class="M_time_01" id = "M_time_01"></td>
								<td><input type = "text" class = "form-control" class="M_balance_01" id = "M_balance_01"/></td>
								<td><input type = "text" class = "form-control" class="E_time_01" id = "E_time_01"></td>
								<td><input type = "text" class = "form-control" class="E_balance_01" id = "E_balance_01"/></td>
								<td><input type = "text" class = "form-control" class="N_time_01" id = "N_time_01"></td>
								<td><input type = "text" class = "form-control" class="N_balance_01" id = "N_balance_01"/></td>
							</div>
					  </tr>

						<tr>
							<div class="form-group">
								<td><input type = "text" class = "form-control" class="balance_drugs_02" id = "balance_drugs_02"></td>
								<td><input type = "text" class = "form-control" class="M_time_02" id = "M_time_02"></td>
								<td><input type = "text" class = "form-control" class="M_balance_02" id = "M_balance_02"/></td>
								<td><input type = "text" class = "form-control" class="E_time_02" id = "E_time_02"></td>
								<td><input type = "text" class = "form-control" class="E_balance_02" id = "E_balance_02"/></td>
								<td><input type = "text" class = "form-control" class="N_time_02" id = "N_time_02"></td>
								<td><input type = "text" class = "form-control" class="N_balance_02" id = "N_balance_02"/></td>
							</div>
					  </tr>

						<tr>
							<div class="form-group">
								<td><input type = "text" class = "form-control" class="balance_drugs_03" id = "balance_drugs_03"></td>
								<td><input type = "text" class = "form-control" class="M_time_03" id = "M_time_03"></td>
								<td><input type = "text" class = "form-control" class="M_balance_03" id = "M_balance_03"/></td>
								<td><input type = "text" class = "form-control" class="E_time_03" id = "E_time_03"></td>
								<td><input type = "text" class = "form-control" class="E_balance_03" id = "E_balance_03"/></td>
								<td><input type = "text" class = "form-control" class="N_time_03" id = "N_time_03"></td>
								<td><input type = "text" class = "form-control" class="N_balance_03" id = "N_balance_03"/></td>
							</div>
					  </tr>

						<tr>
							<div class="form-group">
								<td><input type = "text" class = "form-control" class="balance_drugs_04" id = "balance_drugs_04"></td>
								<td><input type = "text" class = "form-control" class="M_time_04" id = "M_time_04"></td>
								<td><input type = "text" class = "form-control" class="M_balance_04" id = "M_balance_04"/></td>
								<td><input type = "text" class = "form-control" class="E_time_04" id = "E_time_04"></td>
								<td><input type = "text" class = "form-control" class="E_balance_04" id = "E_balance_04"/></td>
								<td><input type = "text" class = "form-control" class="N_time_04" id = "N_time_04"></td>
								<td><input type = "text" class = "form-control" class="N_balance_04" id = "N_balance_04"/></td>
							</div>
					  </tr>

						<tr>
							<div class="form-group">
								<td><input type = "text" class = "form-control" class="balance_drugs_05" id = "balance_drugs_05"></td>
								<td><input type = "text" class = "form-control" class="M_time_05" id = "M_time_05"></td>
								<td><input type = "text" class = "form-control" class="M_balance_05" id = "M_balance_05"/></td>
								<td><input type = "text" class = "form-control" class="E_time_05" id = "E_time_05"></td>
								<td><input type = "text" class = "form-control" class="E_balance_05" id = "E_balance_05"/></td>
								<td><input type = "text" class = "form-control" class="N_time_05" id = "N_time_05"></td>
								<td><input type = "text" class = "form-control" class="N_balance_05" id = "N_balance_05"/></td>
							</div>
					  </tr>
					</tbody>
				</table>
				<hr />
				<div class="row form-group text-center">
					<h2> <small>Events if any:</small></h2>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
						<textarea class="form-control" id="events" name="events" placeholder="Events that occured (optional)"></textarea>
					</div>
					<div class="col-md-3">
					</div>
				</div>
				<table class="table table-bordered table-responsive" id="nursetable" name="nursetable">
					<tr>
						<th>
							Name of Nurse:
						</th>
						<td>
							<input type="text" name="m_nurse_name" id="m_nurse_name" class="form-control" />
						</td>
						<td>
							<input type="text" name="e_nurse_name" id="e_nurse_name" class="form-control" />
						</td>
						<td>
							<input type="text" name="n_nurse_name" id="n_nurse_name" class="form-control" />
						</td>
					</tr>
					<tr>
						<th>
							Date:
						</th>
						<td>
							<input type="date" name="m_date" id="m_date" class="form-control" />
						</td>
						<td>
							<input type="date" name="e_date" id="e_date" class="form-control" />
						</td>
						<td>
							<input type="date" name="n_date" id="n_date" class="form-control" />
						</td>
					</tr>
					<tr>
						<th>
							Time:
						</th>
						<td>
							<input type="time" name="m_time" id="m_time" class="form-control" />
						</td>
						<td>
							<input type="time" name="e_time" id="e_time" class="form-control" />
						</td>
						<td>
							<input type="time" name="n_time" id="n_time" class="form-control" />
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
</body>
