@extends('layouts.app')

@section('content')
	<SCRIPT language="javascript">

		function addRowM(morning_appointmentbook) {

			var table = document.getElementById("morning_appointmentbook");

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			row.className = "form-group form-check";
			rowCount=rowCount-2;

			var cell0 = row.insertCell(0);
			cell0.className = "text-center";
			cell0.innerHTML = rowCount+1;

			var cell1 = row.insertCell(1);
			var element1 = document.createElement("input");
			element1.type = "text";
			element1.name="m_name_"+rowCount;
			element1.className = "form-control text-center";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "number";
			element2.name = "m_contact_"+rowCount;
			element2.className = "form-control text-center";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "time";
			element3.name = "m_contact_"+rowCount;
			element3.className = "form-control text-center";
			cell3.appendChild(element3);

			var cell4 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "text";
			element4.name = "m_consultant_name_"+rowCount;
			element4.className = "form-control text-center";
			cell4.appendChild(element4);
		}

		function deleteRowM(morning_appointmentbook) {
			try {
			var table = document.getElementById("evening_appointmentbook");
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


		function addRowE(morning_appointmentbook) {

			var table = document.getElementById("evening_appointmentbook");

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			row.className = "form-group";
			rowCount=rowCount-2;

			var cell0 = row.insertCell(0);
			cell0.className = "text-center";
			cell0.innerHTML = rowCount+1;

			var cell1 = row.insertCell(1);
			var element1 = document.createElement("input");
			element1.type = "text";
			element1.name="e_name_"+rowCount;
			element1.className = "form-control text-center";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "number";
			element2.name = "e_contact_"+rowCount;
			element2.className = "form-control text-center";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "time";
			element3.name = "e_contact_"+rowCount;
			element3.className = "form-control text-center";
			cell3.appendChild(element3);

			var cell4 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "text";
			element4.name = "e_consultant_name_"+rowCount;
			element4.className = "form-control text-center";
			cell4.appendChild(element4);
		}

		function deleteRowE(morning_appointmentbook) {
			try {
			var table = document.getElementById("morning_appointmentbook");
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
	</SCRIPT>
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Appointment Book</h1>
			</div>
			<div class="col-md-6">
				<div class="col-md-6 text-right">
					<h4>Date:</h4>
				</div>
				<div class="col-md-6">
					<input type="date" class="form-control" name="date" value="{{ old('date') }}">
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<h2>Morning</h2>
	</div>
	<form>
		<div class="row">
			<table class="table table-bordered table-responsive" name="morning_appointmentbook" id="morning_appointmentbook">
				<thead>
					<tr>
						<th class="text-center" width="10%">Sr. No.</th>
						<th class="text-center" width="40%">Name of Patient</th>
						<th class="text-center" width="20%">Contact No.</th>
						<th class="text-center">Appointment Time</th>
						<th class="text-center" width="30%">Consultant Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			</table>
			<div class="text-center">
				<input type="button" name="addrow" onclick="addRowM(morning_appointmentbook)" class="btn" value="Add A Row">
			</div>
		</div>

		<div class="text-center">
			<h2>Evening</h2>
		</div>

		<div class="row">
			<table class="table table-bordered table-responsive" name="evening_appointmentbook" id="evening_appointmentbook">
				<thead>
					<tr>
						<th class="text-center" width="10%">Sr. No.</th>
						<th class="text-center" width="40%">Name of Patient</th>
						<th class="text-center" width="20%">Contact No.</th>
						<th class="text-center">Appointment Time</th>
						<th class="text-center" width="30%">Consultant Name</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			</table>
			<div class="text-center">
				<input type="button" name="addrow" onclick="addRowE(evening_appointmentbook)" class="btn" value="Add A Row">
			</div>
		</div>
	</form>
</div>
</html>
