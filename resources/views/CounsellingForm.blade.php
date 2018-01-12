<!DOCTYPE html>
<html>
<head>
	<title>
		Counselling Form
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	

	<script language="javascript">
		
		function addRow() {
			console.log("1");
			var table = document.getElementById("counselling_form");

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
			row.className = "form-group";
			rowCount=rowCount-2;

			var cell0 = row.insertCell(0);
			cell0.className = "text-center";
			cell0.innerHTML = rowCount+1;

			var cell1 = row.insertCell(1);
			var element1 = document.createElement("input");
			element1.type = "date";
			element1.name="date_"+rowCount;
			element1.className = "form-control text-center";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(2);
			var element2 = document.createElement("input");
			element2.type = "time";
			element2.name = "time_"+rowCount;
			element2.className = "form-control text-center";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(3);
			var element3 = document.createElement("input");
			element3.type = "text";
			element3.name = "counsellor_"+rowCount;
			element3.className = "form-control text-center";
			cell3.appendChild(element3);

			var cell4 = row.insertCell(4);
			var element4 = document.createElement("input");
			element4.type = "text";
			element4.name = "relative_name_"+rowCount;
			element4.className = "form-control text-center";
			cell4.appendChild(element4);

			var cell5 = row.insertCell(5);
			var element5 = document.createElement("input");
			element5.type = "text";
			element5.name = "sign_"+rowCount;
			element5.className = "form-control text-center";
			cell5.appendChild(element5);

			var cell6 = row.insertCell(6);
			var element6 = document.createElement("textarea");
			element6.rows = 3;
			element6.name = "remark_"+rowCount;
			element6.className = "form-control text-center";
			cell6.appendChild(element6);
		}

		function deleteRow() {
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
	</script>
</head>

<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
				<h1>Counselling Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/63 <br>
					REV. No. 0.1 <br>
					WEF 10-04-2017
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-10">
		
	</div>
	<div class="row">
		<div class="col-md-2 text-right">
			<textarea class="text-right form-control" name="" id="Addressograph" rows="3" placeholder="Addressograph Here"></textarea>
		</div>
	</div>
	<hr>
	<form>
		<div class="row">
			<table class="table table-bordered table-responsive" name="counselling_form" id="counselling_form">
				<thead>
					<tr>
						<th class="text-center" width="5%">Sr. No.</th>
						<th class="text-center" width="10%">Date</th>
						<th class="text-center" width="10%">Time</th>
						<th class="text-center" width="25%">Counsellor</th>
						<th class="text-center" width="25%">Name of Relatives</th>
						<th class="text-center" width="5%">Sign</th>
						<th class="text-center" width="20%">Remarks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					</tr>
				</tbody>
			</table>
			<div class="text-center">
				<input type="button" name="addrow" onclick="addRow()" class="btn" value="Add A Row">
			</div>
		</div>
	</form>
</div>
</html>	