@extends('layouts.app')

@section('content')
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
	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif

<form action="{{ url('/RadiologyRequisition') }}" method="post">
	{{ csrf_field() }}
	<div class="row form-group">
		<div class="col-md-3">
			<label>Provisional Diagnosis : </label>
		</div>
		<div class="col-md-9">
			<input class="form-control" type="text" name="provisional_diagnosis" id="provisional_diagnosis" placeholder="Provisional Diagnosis" value="{{ old('provisional_diagnosis') }}" />
			@if($errors->has('provisional_diagnosis'))
					<span class="help-block"><div class="text-danger">{{ $errors->first('provisional_diagnosis') }}</div></span>
			@endif
		</div>
	</div>

	<div class="row form-group">
		<h3>Computed Tomography (CT) Scan</h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="brain_plain" id="brain_plain" value="yes" /><label for="brain_plain">CT Brain Plain</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_pmns" id="ct_pmns" value="yes" /><label for="ct_pmns"> CT PNS</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="brain_plain_contrast" id="brain_plain_contrast" value="yes" /><label for="brain_plain_contrast"> CT Brain Plain with Contrast</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_head_face" id="ct_head_face" value="yes" /><label for="ct_head_face"> CT Head with Face</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_face_plain" id="ct_face_plain" value="yes" /><label for="ct_face_plain">CT Face Plain</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_3d" id="ct_3d" value="yes" /><label for="ct_3d"> 3D CT</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_cv_junction_flex" value="yes" ><label for="ct_cv_junction_flex"> CT C.V. Junction Flex</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_cv_junction_ext" id="ct_cv_junction_ext" value="yes" /><label for="ct_cv_junction_ext"> CT C.V. Junction Ext.</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_chest_plain" id="ct_chest_plain" value="yes" /><label for="ct_chest_plain">CT Chest Plain</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_dorsal_spine" id="ct_dorsal_spine" value="yes" /><label for="ct_dorsal_spine"> CT Dorsal Spine</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_cervical_spine" id="ct_cervical_spine" value="yes" /><label for="ct_cervical_spine"> CT Cervical Spine</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_abdomen_plain" id="ct_abdomen_plain" value="yes" /><label for="ct_abdomen_plain"> CT Abdomen Plain</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="ct_lumbar_spine" id="ct_lumbar_spine" value="yes" /><label for="ct_lumbar_spine">  CT Lumbar Spine</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="other" id="other" value="yes" /><label for="other">Other</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="anyother" id="anyother" value="{{old('anyother')}}" />
			</div>
		</div>
	</div>

	<hr />

	<div class="row">
		<h3>X Ray</h3>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="xray_fixed" id="xray_fixed"><label for="xray_fixed">Fixed</label>
			</div>
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="xray_portable" id="xray_portable"><label for="xray_portable">Portable</label>
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<input class="form-check-input" type="checkbox" name="other_xray" id="other_xray" value="yes" /><label for="other_xray">Other</label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="xray_other" id="xray_other" value="{{old('xray_other')}}" />
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Date : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="date" name="date" />
				@if($errors->has('date'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<div class="col-md-6">
				<label>Time : </label>
			</div>
			<div class="col-md-6">
				<input class="form-control" type="time" name="time" />
				@if($errors->has('time'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('time') }}</div></span>
				@endif
			</div>
		</div>
	</div>

	<div class="row form-group">
		<button class="btn btn-success form-control" type="submit">Submti</button>
	</div>

</form>


</div>
@endsection
