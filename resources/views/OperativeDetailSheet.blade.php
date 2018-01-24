@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
        <h1>Operative Detail Sheet</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. FMT/HIC/09 </br>
          REV. No. 0.1 </br>
          WEF 10-10-2015
        </div>
      </div>
    </div>
  </div>

  @if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors
      </div>
  @endif

  <form action="{{ url('/OperativeDetailSheet') }}" method="post">
    {{ csrf_field() }}

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>OT No : </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="ot_no">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Date : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="date" name="date" value="{{ old('date') }}"/>
          @if($errors->has('date'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Wheel In Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time" name="wheel_in" value="{{ old('wheel_in') }}"/>
          @if($errors->has('wheel_in'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('wheel_in') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Wheel Out Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time" name="wheel_out" value="{{ old('wheel_out') }}"/>
          @if($errors->has('wheel_out'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('wheel_out') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Anesthesia Induction Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time" name="anesthesa_induction_time" value="{{ old('anesthesa_induction_time') }}"/>
          @if($errors->has('anesthesa_induction_time'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('anesthesa_induction_time') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Reversal Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time" name="reversal_time" value="{{ old('reversal_time') }}"/>
          @if($errors->has('reversal_time'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('reversal_time') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Antibiotic : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="antibiotic1" value="{{ old('antibiotic1') }}"/>
          @if($errors->has('antibiotic1'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('antibiotic1') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="antibiotic1_time" value="{{ old('antibiotic1_time') }}"/>
          @if($errors->has('antibiotic1_time'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('antibiotic1_time') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Antibiotic : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="antibiotic2" value="{{ old('antibiotic2') }}"/>
          @if($errors->has('antibiotic2'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('antibiotic2') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Time : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="antibiotic2_time" value="{{ old('antibiotic2_time') }}"/>
          @if($errors->has('antibiotic2_time'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('antibiotic2_time') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Surgical Time From : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="time" name="surgical_time_from" value="{{ old('anesthesa_induction_time') }}"/>
          @if($errors->has('surgical_time_from'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('surgical_time_from') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>To : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="surgical_time_to" value="{{ old('surgical_time_to') }}"/>
          @if($errors->has('surgical_time_to'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('surgical_time_to') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Surgery Type : </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="surgery_type">
            <option value="elective">Elective</option>
            <option value="emergency">Emergency</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <label>Surgeons : </label>
      </div>
      <div class="col-md-6">
        <label>Anesthetists : </label>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <input class="form-control" type="text" name="surgeon1" value="{{ old('surgeon1') }}"/>
        @if($errors->has('surgeon1'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('surgeon1') }}</div></span>
				@endif
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text" name="anesthetist1" value="{{ old('anesthetist1') }}"/>
        @if($errors->has('anesthetist1'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('anesthetist1') }}</div></span>
				@endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <input class="form-control" type="text" name="surgeon2" value="{{ old('surgeon2') }}"/>
        @if($errors->has('surgeon2'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('surgeon2') }}</div></span>
				@endif
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text" name="anesthetist2" value="{{ old('anesthetist2') }}"/>
        @if($errors->has('anesthetist2'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('anesthetist2') }}</div></span>
				@endif
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <input class="form-control" type="text" name="surgeon3" value="{{ old('surgeon3') }}"/>
        @if($errors->has('surgeon3'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('surgeon3') }}</div></span>
				@endif
      </div>
      <div class="col-md-6">
        <input class="form-control" type="text" name="anesthetist3" value="{{ old('anesthetist3') }}"/>
        @if($errors->has('anesthetist3'))
						<span class="help-block"><div class="text-danger">{{ $errors->first('anesthetist3') }}</div></span>
				@endif
      </div>
    </div>

    <hr />

    <div class="row">
      <h3>Utilization : </h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>IITV : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="iitv" value="{{ old('iitv') }}" />
          @if($errors->has('iitv'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('iitv') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Fentanyl : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="fentanyl" value="{{ old('fentanyl') }}" />
          @if($errors->has('fentanyl'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('fentanyl') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Drill : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="drill" value="{{ old('drill') }}" />
          @if($errors->has('drill'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('drill') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Sevoflurane / Desflurane : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="sevoflurane_desflurane" value="{{ old('sevoflurane_desflurane') }}" />
          @if($errors->has('sevoflurane_desflurane'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('sevoflurane_desflurane') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Microscope : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="microscope" value="{{ old('microscope') }}" />
          @if($errors->has('microscope'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('microscope') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Endoscope : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="endoscope" value="{{ old('endoscope') }}" />
          @if($errors->has('endoscope'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('endoscope') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>CUSSA : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="cussa" value="{{ old('cussa') }}" />
          @if($errors->has('cussa'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('cussa') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Implants : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="implants" value="{{ old('implants') }}" />
          @if($errors->has('implants'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('implants') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Vendor : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="vendor" value="{{ old('vendor') }}" />
          @if($errors->has('vendor'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('vendor') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Diagnosis : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="diagnosis" value="{{ old('diagnosis') }}" />
          @if($errors->has('diagnosis'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Operation Performed : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="operation_performed" value="{{ old('operation_performed') }}" />
          @if($errors->has('operation_performed'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('operation_performed') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <hr />

    <div class="row">
      <h3>Payment Details : </h3>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Mediclaim / Cashless : </label>
        </div>
        <div class="col-md-6">
          <select class="form-control" name="mediclaim">
            <option disabled hidden selected value=""> --- </option>
            <option value="mediclaim">Mediclaim</option>
            <option value="cashless">Cashless</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Name of TPA</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name_tpa" value="{{ old('name_tpa') }}"/>
          @if($errors->has('name_tpa'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('name_tpa') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Company / Third Party : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="company_thirdparty" value="{{ old('company_thirdparty') }}" />
          @if($errors->has('company_thirdparty'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('company_thirdparty') }}</div></span>
  				@endif
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Name of Party</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name_party" value="{{ old('name_party') }}"/>
          @if($errors->has('name_party'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('name_party') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Amount : </label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="amount" value="{{ old('amount') }}" />
          @if($errors->has('amount'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('amount') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Surgery Only</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="surgery_only" value="{{ old('surgery_only') }}"/>
          @if($errors->has('surgery_only'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('surgery_only') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Package (Surgical)</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="package_surgical" value="{{ old('package_surgical') }}"/>
          @if($errors->has('package_surgical'))
  						<span class="help-block"><div class="text-danger">{{ $errors->first('package_surgical') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-6">
        <div class="col-md-6">
          <label>Package (Total)</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="package_total" value="{{ old('package_total') }}"/>
          @if($errors->has('package_total'))
  						<span class="help-block"><div class="text-danger"><div class="text-danger">{{ $errors->first('package_total') }}</div></span>
  				@endif
        </div>
      </div>
    </div>

    <div class="row form-group">
      <button class="form-control btn btn-success" type="submit" >Submit</button>
    </div>
  </form>


</div>

@endsection
