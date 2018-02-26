@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Investigation Sheet</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. F/IPD/14 <br>
					REV. No. 0.2 <br>
					WEF 26-04-2017
				</div>
			</div>
		</div>
	</div>

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
			@foreach ($errors->keys() as $error)
						 <li>{{ $error }}</li>
				 @endforeach
	@endif
	<form action="{{ url('/InvestigationSheet') }}" method="post">
		{{ csrf_field() }}
    <div class="row form-group">
      <div class="col-md-6">
        <div class="row form-group">
          <div class="col-md-6">
            <label for="">Date:</label>
          </div>
          <div class="col-md-6">
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <textarea name="addressograph" class="form-control" rows="3" placeholder="Addressograph here"> {{ old('addressograph') }}</textarea>
        @if($errors->has('addressograph'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('addressograph') }}</div></span>
        @endif
      </div>
    </div>

    <hr>

		<div class="row form-group">
		  <table class="table table-bordered table-responsive">
		    <thead>
  			</thead>
  			<tbody>
          <tr>
  					<th rowspan="8" class="text-center">HEMATOLOGY</th>
  					<th class="text-center"> Hb </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
    			<tr>
  					<th class="text-center"> PCV </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> TC </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> DC </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> ESR </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> M.P </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> Platelets</th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> PTT/PT </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

  			  <tr>
  			  	<th rowspan="4" class="text-center">URINE</th>
  					<th class="text-center"> ALB </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> SUG. </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> Micro </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> RBS </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

  			  <tr>
  			  	<th rowspan="2" class="text-center"></th>
  					<th class="text-center"> INR </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> Na </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

  			  <tr>
  			  	<th rowspan="7" class="text-center">RENAL</th>
  					<th class="text-center"> K </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Cl </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
  			  <tr>
  					<th class="text-center"> HCO2 </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Urea </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Creatinine </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Osmolality </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Total Protiens </th>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

          <tr>
  			  	<th rowspan="7" class="text-center">HEPATIC</th>
  					<th class="text-center"> Albumin </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Globulin </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Total Bilirubin </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Direct Bilirubin </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> SGOT / SGPT </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> ALK P04/S. Amylase </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> S. Lipase </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

          <tr>
  			  	<th rowspan="3" class="text-center">CARDIAC</th>
  					<th class="text-center"> CPK </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> CPK-MB </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> LDH1 /Troponin </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>

          <tr>
  			  	<th rowspan="3" class="text-center">OTHERS</th>
  					<th class="text-center"> HIV </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Hbs Ag </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
          <tr>
  					<th class="text-center"> Blood Group </th>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
            <td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  					<td></td>
  			  </tr>
        </tbody>
		  </table>
		</div>

    <hr>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">CSF: </label>
      </div>
      <div class="col-md-6">
        <textarea name="csf" rows="3" class="form-control">{{ old('csf') }}</textarea>
        @if($errors->has('csf'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('csf') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">C.T. Scan: </label>
      </div>
      <div class="col-md-6">
        <textarea name="ct_scan" rows="3" class="form-control">{{ old('ct_scan') }}</textarea>
        @if($errors->has('ct_scan'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('ct_scan') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">MRI: </label>
      </div>
      <div class="col-md-6">
        <textarea name="mri" rows="3" class="form-control">{{ old('mri') }}</textarea>
        @if($errors->has('mri'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('mri') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">HISTOPATHOLOGY: </label>
      </div>
      <div class="col-md-6">
        <textarea name="histopathology" rows="3" class="form-control">{{ old('histopathology') }}</textarea>
        @if($errors->has('histopathology'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('histopathology') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">ELECTRO PHYSIOLOGY: </label>
      </div>
      <div class="col-md-6">
        <textarea name="electro_physiology" rows="3" class="form-control">{{ old('electro_physiology') }}</textarea>
        @if($errors->has('electro_physiology'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('electro_physiology') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">CHEST X-RAY: </label>
      </div>
      <div class="col-md-6">
        <textarea name="chest_xray" rows="3" class="form-control">{{ old('chest_xray') }}</textarea>
        @if($errors->has('chest_xray'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('chest_xray') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">ECG: </label>
      </div>
      <div class="col-md-6">
        <textarea name="ecg" rows="3" class="form-control">{{ old('ecg') }}</textarea>
        @if($errors->has('ecg'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('ecg') }}</div></span>
        @endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <label for="">OTHERS: </label>
      </div>
      <div class="col-md-6">
        <textarea name="others" rows="3" class="form-control">{{ old('others') }}</textarea>
        @if($errors->has('others'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('others') }}</div></span>
        @endif
      </div>
    </div>
    
		<div class="row form-group text-center">
			<button class="form-group btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection
