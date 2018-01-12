<!DOCTYPE html>
<html>
<head>
	<title>
		Daily Diet Form
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--
	<script language="javascript">
		function addRow() {
			console.log("1");
			var table = document.getElementById("dailydietform");

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			row.className = "form-check";
			rowCount = rowCount-4;

			var cell0 = row.insertCell(0);
			var element0 = document.createElement("input");
			element0.type = "number";
			element0.name="room_no_"+rowCount;
			element0.className = "form-control text-center";
			cell0.appendChild(element0);

			var cell1 = row.insertCell(1);
			var element11 = document.createElement("input");
			element11.type = "text";
			element11.name="patient_name_"+rowCount;
			element11.className = "form-control text-center";

			var element12 = document.createElement("input");
			element12.type = "number";
			element12.name="uhid_"+rowCount;
			element12.className = "form-control text-center";

			cell1.appendChild(element11);
			cell1.appendChild(element12);

			var cell2 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "diet_suggested_by_"+rowCount;
			element2.className = "form-control text-center";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "checkbox";
			element3.name = "s_1_"+rowCount;
			element3.className = "form-control text-center form-check-input";
			cell3.appendChild(element3);

			var cell4 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "checkbox";
			element4.name = "s_2_"+rowCount;
			element4.className = "form-control text-center form-check-input";
			cell4.appendChild(element4);

			var cell5 = row.insertCell(5);
			var element5 = document.createElement("input");
			element5.type = "checkbox";
			element5.name = "s_3_"+rowCount;
			element5.className = "form-control text-center form-check-input";
			cell5.appendChild(element5);

			var cell6 = row.insertCell(6);
			var element6 = document.createElement("input");
			element6.type = "checkbox";
			element6.name = "s_4_"+rowCount;
			element6.className = "form-control text-center form-check-input";
			cell6.appendChild(element6);

			var cell7 = row.insertCell(7);
			var element7 = document.createElement("input");
			element7.type = "checkbox";
			element7.name = "s_5_"+rowCount;
			element7.className = "form-control text-center form-check-input";
			cell7.appendChild(element7);

			var cell8 = row.insertCell(8);
			var element8 = document.createElement("input");
			element8.type = "checkbox";
			element8.name = "s_6_"+rowCount;
			element8.className = "form-control text-center form-check-input";
			cell8.appendChild(element8);

			var cell9 = row.insertCell(9);
			var element9 = document.createElement("input");
			element9.type = "checkbox";
			element9.name = "s_7_"+rowCount;
			element9.className = "form-control text-center form-check-input" ;
			cell9.appendChild(element9);

			var cell10 = row.insertCell(10);
			var element10 = document.createElement("input");
			element10.type = "checkbox";
			element10.name = "s_8_"+rowCount;
			element10.className = "form-control text-center form-check-input";
			cell10.appendChild(element10);

			var cell11 = row.insertCell(11);
			var element11 = document.createElement("input");
			element11.type = "checkbox";
			element11.name = "s_9_"+rowCount;
			element11.className = "form-control text-center form-check-input";
			cell11.appendChild(element11);

			var cell12 = row.insertCell(12);
			var element12 = document.createElement("input");
			element12.type = "checkbox";
			element12.name = "s_10_"+rowCount;
			element12.className = "form-control text-center form-check-input";
			cell12.appendChild(element12);

			var cell13 = row.insertCell(13);
			var element13 = document.createElement("textarea");
			element13.rows = 3;
			element13.name = "remark_"+rowCount;
			element13.className = "form-control text-center";
			cell13.appendChild(element13);
		}

		function deleteRow() {
			try {
			var table = document.getElementById("");
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}
	</script>

-->


</head>

<div class="container">
	<form name="dailydietform" class="form-horizontal">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
					<h1>Daily Diet Form</h1>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						DOC NO. F/DS/08 <br>
						REV. No. 0.2 <br>
						WEF 26-04-2017
					</div>
				</div>
			</div>
		</div>

	<div class="row form-group">
		<div class="col-md-10">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<label>Floor Name : </label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="floor_name" id="floor_name">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label>Cross Verified By:</label>
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="cross_verified_by" id="cross_verified_by">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<textarea class="form-control" name="addressograph" placeholder="Addressograph Here"></textarea>
		</div>
	</div>
	<hr>

	<div class="row form-group form-check">
		<table class="table table-bordered table-condensed small" name="dailydietform" id="dailydietform">
			<thead>

				<tr>
					<th colspan="3" rowspan="2">
						<div class="form-inline text-">
							<label>Date:</label>
							<input type="date" class="form-control" name="date" id="date">
						</div>
					</th>

					<th colspan="10" class="text-center">RTF/Liquid</th>
					<th rowspan="3">Remarks</th>
				</tr>

				<tr>
					<th class="text-center">S-1 (6 AM)</th>
					<th class="text-center">S-2 (8 AM)</th>
					<th class="text-center">S-3 (10 AM)</th>
					<th class="text-center">S-4 (12 PM)</th>
					<th class="text-center">S-5 (2 PM)</th>
					<th class="text-center">S-6 (4 PM)</th>
					<th class="text-center">S-7 (6 PM)</th>
					<th class="text-center">S-8 (8 PM)</th>
					<th class="text-center">S-9 (10 PM)</th>
					<th class="text-center">S-10 (12 AM)</th>
				</tr>

				<tr>
					<th class="text-center">Room. No.</th>
					<th class="text-center">Patient Name & UHID No.</th>
					<th class="text-center">Diet Suggested By (Consultant/RMO)</th>
					<th class="text-center">M.Tea (6.30 AM)</th>
					<th class="text-center">M.B/F (9 AM)</th>
					<th class="text-center">Soup (11.30 AM)</th>
					<th class="text-center">Lunch (12.30 PM)</th>
					<th></th>
					<th class="text-center">E.Snacks (3.30 PM)</th>
					<th class="text-center">Juice (5 PM)</th>
					<th class="text-center">Dinner (7.30 PM)</th>
					<th class="text-center">Milk (9.30 PM)</th>
					<th class="text-center" />
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><input class="form-control" type="text" name="room_no" /></td>
					<td><input class="form-control" type="text" name="patient_name" /></td>
					<td><input class="form-control" type="text" name="diet_suggested_by"/></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_tea" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="m_breakfast" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="soup" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="lunch" /></td>
					<td></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="e_snacks" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="juice" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="dinner" /></td>
					<td class="text-center"><input class="form-check-input" type="checkbox" name="milk" /></td>
					<td></td>
					<td><input class="form-control" type="text" name="remarks" /></td>
				</tr>
			</tbody>
		</table>
		<!--
		<div class="text-center">
			<input type="button" name="addrow" onclick="addRow()" class="btn" value="Add A Row">
		</div>
	-->
	</div>
	</form>
</div>
</html>
