<html>
<head>
	<title>
		Radiology Requisition Form
	</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
</head>
<body>
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Radiology Requisition Form</h1>
			</div>	
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/RL/01 <br>
					REV. No. 0.0 <br>
					WEF 15-04-2017
				</div>	
			</div>
		</div>
	</div>
	
<form name="radiologyrequisitionform">
	
	<div class="row form-group">
		<div class="col-md-8">
			<label>Provisional Diagnosis : </label>
			<textarea class="form-control" name="provisional_diagnosis" placeholder="Provisional Diagnosis" ></textarea>
		</div>
		<div class="col-md-4">
			<label class="text-right">Addressograph : </label>
			<textarea class="form-control text-right" placeholder="Addressograph"></textarea>
		</div>
	</div>
	
	<div class="row form-group">
		<h4><u>Computed Tomography (CT) Scan</u></h4>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="brain_plain"> CT Brain Plain
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_pmns"> CT PNS
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="brain_plain_contrast"> CT Brain Plain with Contrast
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_head_face"> CT Head with Face
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_face_plain"> CT Face Plain
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_3d"> 3D CT
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_cv_junction_flex"> CT C.V. Junction Flex
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_cv_junction_ext"> CT C.V. Junction Ext.
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_chest_plain"> CT Chest Plain
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_dorsal_spine"> CT Dorsal Spine
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_cervical_spine"> CT Cervical Spine
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_abdomen_plain"> CT Abdomen Plain
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="ct_lumbar_spine"> CT Lumbar Spine
			</div>
		</div>
		<div class="col-md-5">
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="other"> Any Other
			</div>
		</div>
		<div class="col-md-7">
			<textarea class="form-control" name="anyother" placeholder="Any other" ></textarea>
		</div>
		<div class="col-md-1"></div>
	</div>

	<div class="row form-group">
		<h4><u>X-Ray</u></h4>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="xray_fixed"> Fixed
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" name="xray_portable"> Portable
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<textarea class="form-control" name="xray_other"></textarea>
		<div class="col-md-1"></div>
	</div>

	<div class="row form-group">
		<div class="col-md-2">
			<label>Date : </label>
		</div>
		<div class="col-md-2">
			<input class="form-control" type="date" name="date">
		</div>
	</div>
	
	<div class="row form-group">
		<div class="col-md-2">
			<label>Time : </label>
		</div>
		<div class="col-md-2">
			<input class="form-control" type="time" name="time">
		</div>
	</div>
	
</form>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
