@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-header">
    <div class="row">
      <div class="col-md-6">
      <h1>Provisional Discharge Summary</h1>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          DOC NO. F/IPD/09 <br>
          REV. No. 0.1 <br>
          WEF 25-03-2017
        </div>
      </div>
    </div>
  </div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/ProvisionalDischargeSummary') }}" method="post">
			{{ csrf_field() }}
			<div class="row form-group">
			  <div class="col-md-8">
          <div class="row form-group">
            <div class="col-md-4">
              <label class="control-label" for="address">Address :</label>
            </div>
            <div class="col-md-8">
              <input type="text" name="address"  rows="3" class="form-control" value="{{ old('address') }}">
              @if($errors->has('address'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('address') }}</div></span>
              @endif
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-6">
              <label class="control-label" for="date_of_discharge">Date of Discharge :</label>
            </div>
            <div class="col-md-6">
              <input type="date"  name="date_of_discharge" class="form-control" value="{{ old('date_of_discharge') }}">
              @if($errors->has('date_of_discharge'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('date_of_discharge') }}</div></span>
              @endif
            </div>
          </div>
				</div>
			  <div class="col-md-4 text-right">
					<textarea name="addressograph"  rows="3" class="form-control" placeholder="Addressograph Here"></textarea>
				</div>
			</div>
			<hr>
			<div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Referred By : </label>
          </div>
          <div class="col-md-6">
            <input type="text"  name="ref_by" class="form-control" value="{{ old('ref_by') }}">
            @if($errors->has('ref_by'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('ref_by') }}</div></span>
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Room No. : </label>
          </div>
          <div class="col-md-6">
            <input type="text"  name="room_no" class="form-control" value="{{ old('room_no') }}">
            @if($errors->has('room_no'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('room_no') }}</div></span>
            @endif
          </div>
        </div>
			</div>
      <hr>
      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Diagnosis :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="diagnosis"  rows="3" class="form-control" value="{{ old('diagnosis') }}">
          @if($errors->has('diagnosis'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Condition on discharge :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="condition_on_discharge"  rows="3" class="form-control" value="{{ old('condition_on_discharge') }}">
          @if($errors->has('condition_on_discharge'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('condition_on_discharge') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Advice on discharge :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="advice_on_discharge"  rows="4" class="form-control" value="{{ old('advice_on_discharge') }}">
          @if($errors->has('advice_on_discharge'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('advice_on_discharge') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-4">
          <label class="control-label" for="address">Followup :</label>
        </div>
        <div class="col-md-8">
          <input type="text" name="followup"  rows="2" class="form-control" value="{{ old('followup') }}">
          @if($errors->has('followup'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('followup') }}</div></span>
          @endif
        </div>
      </div>

      <div class="row form-group">
        <h3>Collect final discharge summary</h3>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_on">on Date:</label>
        </div>
        <div class="col-md-6">
          <input type="date"  name="collect_discharge_summary_on" class="form-control" value="{{ old('collect_discharge_summary_on') }}">
          @if($errors->has('collect_discharge_summary_on'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('collect_discharge_summary_on') }}</div></span>
          @endif
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_at">at:</label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="collect_discharge_summary_at" class="form-control" value="{{ old('collect_discharge_summary_at') }}">
          @if($errors->has('collect_discharge_summary_at'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('collect_discharge_summary_at') }}</div></span>
          @endif
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label class="control-label" for="collect_discharge_summary_from">from:</label>
        </div>
        <div class="col-md-6">
          <input type="text"  name="collect_discharge_summary_from" class="form-control" value="{{ old('collect_discharge_summary_from') }}">
          @if($errors->has('collect_discharge_summary_from'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('collect_discharge_summary_from') }}</div></span>
          @endif
        </div>
      </div>

			<div class="form-group text-center">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>
@endsection
