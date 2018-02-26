@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Monitoring For Moderate Sedation</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/36 <br>
					REV. No. 0.1 <br>
					WEF 01-10-2014 <br>
					PAGE NO. 01 OF 02
				</div>
			</div>
		</div>
	</div>

	@if ($errors->any())
      <div class="alert alert-danger" role="alert">
          Please fix the following errors
      </div>
  @endif
	<form action="{{ url('/MonitoringModerateSedation') }}" method="post">
			{{ csrf_field() }}

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Date:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="date"  name="date" id="date" value="{{ old('date') }}" >
            @if($errors->has('date'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('date') }}</div></span>
            @endif
          </div></div></div>

          <div class="row form-group">
            <div class="col-md-10">
              <div class="col-md-12">
                <label>Diagnosis:</label>
              </div>
              <div class="col-md-10">
                <textarea class="form-control" type="text"  rows="3"name="diagnosis" id="diagnosis" value="{{ old('diagnosis') }}" ></textarea>
                @if($errors->has('diagnosis'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('diagnosis') }}</div></span>
                @endif
              </div></div></div>

      Pre-Medication
      Sedative and Anesthetic Drug:<hr>

      <div class="row form-group">
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Name:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="name" id="name" value="{{ old('name') }}" >
            @if($errors->has('name'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('name') }}</div></span>
            @endif
          </div></div></div>

          <div class="row form-group">
            <div class="col-md-10">
              <div class="col-md-12">
                <label>Dose:</label>
              </div>
              <div class="col-md-10">
                <textarea class="form-control" type="text"  rows="3"name="dose" id="dose" value="{{ old('dose') }}" ></textarea>
                @if($errors->has('dose'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('dose') }}</div></span>
                @endif
              </div></div></div>
              <div class="row form-group">
                <div class="col-md-10">
                  <div class="col-md-12">
                    <label>Repitation:</label>
                  </div>
                  <div class="col-md-10">
                    <textarea class="form-control" type="text"  rows="3"name="repitation" id="repitation" value="{{ old('repitation') }}" ></textarea>
                    @if($errors->has('repitation'))
                        <span class="help-block"><div class="text-danger">{{ $errors->first('repitation') }}</div></span>
                    @endif
                  </div></div></div>
                  <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label>Airway:</label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control" name="airway" value="{{ old('airway') }}">
                          <option value="NA" @if(old('airway') == 'Oral')  selected = 'selected' @endif>Oral</option>
                          <option value="Male" @if(old('airway') == 'Nasal')  selected = 'selected' @endif>Nasal</option>
                          <option value="Female" @if(old('airway') == 'SGA')  selected = 'selected' @endif>SGA</option>
                          <option value="Female" @if(old('airway') == 'ET')  selected = 'selected' @endif>ET</option>
                          <option value="Female" @if(old('airway') == 'Tracheostmy')  selected = 'selected' @endif>Tracheostmy</option>
                        </select>
                        @if($errors->has('airway'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('airway') }}</div></span>
                        @endif
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label>Breathing:</label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control" name="breathing" value="{{ old('breathing') }}">
                          <option value="NA" @if(old('breathing') == 'Spontaneous')  selected = 'selected' @endif>Spontaneous</option>
                          <option value="Male" @if(old('breathing') == 'On Ventilator')  selected = 'selected' @endif>On Ventilator</option>

                        </select>
                        @if($errors->has('breathing'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('breathing') }}</div></span>
                        @endif
                      </div>
                    </div>

                  </div>

                  Sedation:
                  <div class="row form-group">
                    <div class="col-md-6">
                      <div class="col-md-6">
                        <label>Name:</label>
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" type="text"  name="name01" id="name01" value="{{ old('name01') }}" >
                        @if($errors->has('name01'))
                            <span class="help-block"><div class="text-danger">{{ $errors->first('name01') }}</div></span>
                        @endif
                      </div></div></div>

                      <div class="row form-group">
                        <div class="col-md-10">
                          <div class="col-md-12">
                            <label>Dose of the Drug:</label>
                          </div>
                          <div class="col-md-10">
                            <textarea class="form-control" type="text"  rows="3"name="dose01" id="dose01" value="{{ old('dose01') }}" ></textarea>
                            @if($errors->has('dose01'))
                                <span class="help-block"><div class="text-danger">{{ $errors->first('dose01') }}</div></span>
                            @endif
                          </div></div></div>
                          <div class="row form-group">
                            <div class="col-md-10">
                              <div class="col-md-12">
                                <label>Name of the Procedure:</label>
                              </div>
                              <div class="col-md-10">
                                <textarea class="form-control" type="text"  rows="3"name="procedure" id="procedure" value="{{ old('procedure') }}" ></textarea>
                                @if($errors->has('procedure'))
                                    <span class="help-block"><div class="text-danger">{{ $errors->first('procedure') }}</div></span>
                                @endif
                              </div></div></div>
              Vital Chart:
              Vitals must be taken every 10-15 minutes during sedation and post sedation.<hr>

              <div class="row form-group"><hr>
                <table class="table table-bordered">

                  <thead>
                  <tr>
                  <th></th>
                  <th>Pre Sedation</th>
                  <th colspan="6">During Sedation</th>
                  <th colspan="4">Post Sedation</th>

                  </tr>
                </thead>
                <tbody>
                  <tbody>
                    <tr>
                      <th>Time</th>
                      <td>
                        <input class="form-control" type="text" name="time_00" value="{{ old('time_00') }}"/>
                        @if($errors->has('time_00'))
                          <span class="help-block"><div class="text-danger">{{ $errors->first('time_00') }}</div></span>
                        @endif
                    </td>
                    <td>
                      <input class="form-control" type="text" name="time_01" value="{{ old('time_01') }}"/>
                      @if($errors->has('time_01'))
                        <span class="help-block"><div class="text-danger">{{ $errors->first('time_01') }}</div></span>
                      @endif
                  </td>
                  <td>
                    <input class="form-control" type="text" name="time_02" value="{{ old('time_02') }}"/>
                    @if($errors->has('time_02'))
                      <span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
                    @endif
                </td>
                <td>
                  <input class="form-control" type="text" name="time_03" value="{{ old('time_03') }}"/>
                  @if($errors->has('time_03'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('time_03') }}</div></span>
                  @endif
              </td>
              <td>
                <input class="form-control" type="text" name="time_04" value="{{ old('time_04') }}"/>
                @if($errors->has('time_04'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('time_04') }}</div></span>
                @endif
            </td>
            <td>
              <input class="form-control" type="text" name="time_05" value="{{ old('time_05') }}"/>
              @if($errors->has('time_05'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('time_05') }}</div></span>
              @endif
          </td>
          <td>
            <input class="form-control" type="text" name="time_06" value="{{ old('time_06') }}"/>
            @if($errors->has('time_06'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('time_06') }}</div></span>
            @endif
        </td>
        <td>
          <input class="form-control" type="text" name="time_07" value="{{ old('time_07') }}"/>
          @if($errors->has('time_07'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('time_07') }}</div></span>
          @endif
      </td>
      <td>
        <input class="form-control" type="text" name="time_08" value="{{ old('time_08') }}"/>
        @if($errors->has('time_08'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('time_08') }}</div></span>
        @endif
    </td>
    <td>
      <input class="form-control" type="text" name="time_09" value="{{ old('time_09') }}"/>
      @if($errors->has('time_09'))
        <span class="help-block"><div class="text-danger">{{ $errors->first('time_09') }}</div></span>
      @endif
  </td>
  <td>
    <input class="form-control" type="text" name="time_10" value="{{ old('time_10') }}"/>
    @if($errors->has('time_10'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('time_10') }}</div></span>
    @endif
</td>
</tr>

<tr>
  <th>Pulse</th>
  <td>
    <input class="form-control" type="text" name="pulse_00" value="{{ old('pulse_00') }}"/>
    @if($errors->has('pulse_00'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('pulse_00') }}</div></span>
    @endif
</td>
<td>
  <input class="form-control" type="text" name="pulse_01" value="{{ old('pulse_01') }}"/>
  @if($errors->has('time_00'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('pulse_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`pulse_02`" value="{{ old('`pulse_02`') }}"/>
@if($errors->has('`pulse_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`pulse_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_03" value="{{ old('pulse_03') }}"/>
@if($errors->has('pulse_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_04" value="{{ old('pulse_04') }}"/>
@if($errors->has('pulse_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_05" value="{{ old('pulse_05') }}"/>
@if($errors->has('pulse_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_06" value="{{ old('pulse_06') }}"/>
@if($errors->has('pulse_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_07" value="{{ old('pulse_07') }}"/>
@if($errors->has('pulse_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_08" value="{{ old('pulse_08') }}"/>
@if($errors->has('pulse_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_09" value="{{ old('pulse_09') }}"/>
@if($errors->has('pulse_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pulse_10" value="{{ old('pulse_10') }}"/>
@if($errors->has('pulse_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pulse_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th> Respiratory Rate</th>
<td>
<input class="form-control" type="text" name="`resp_rate_00`" value="{{ old('`resp_rate_00`') }}"/>
@if($errors->has('`resp_rate_00`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`resp_rate_00`') }}</div></span>
@endif
</td>
<td>
  <input class="form-control" type="text" name="resp_rate_01" value="{{ old('resp_rate_01') }}"/>
  @if($errors->has('resp-rate_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('resp-rate_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`resp_rate_02`" value="{{ old('`resp_rate_02`') }}"/>
@if($errors->has('`resp_rate_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`resp_rate_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_03" value="{{ old('resp_rate_03') }}"/>
@if($errors->has('resp_rate_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_04" value="{{ old('resp_rate_04') }}"/>
@if($errors->has('resp_rate_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_05" value="{{ old('resp_rate_05') }}"/>
@if($errors->has('resp_rate_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_06" value="{{ old('resp_rate_06') }}"/>
@if($errors->has('resp_rate_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_07" value="{{ old('resp_rate_07') }}"/>
@if($errors->has('resp_rate_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_08" value="{{ old('resp_rate_08') }}"/>
@if($errors->has('resp_rate_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_09" value="{{ old('resp_rate_09') }}"/>
@if($errors->has('resp_rate_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="resp_rate_10" value="{{ old('resp_rate_10') }}"/>
@if($errors->has('resp_rate_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('resp_rate_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th>B.P</th>
  <td>
    <input class="form-control" type="text" name="bp_00" value="{{ old('bp_00') }}"/>
    @if($errors->has('bp_00'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('bp_00') }}</div></span>
    @endif
</td>
<td>
  <input class="form-control" type="text" name="bp_01" value="{{ old('bp_01') }}"/>
  @if($errors->has('bp_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('bp_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`bp_02`" value="{{ old('`bp_02`') }}"/>
@if($errors->has('`bp_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`bp_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_03" value="{{ old('bp_03') }}"/>
@if($errors->has('bp_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_04" value="{{ old('bp_04') }}"/>
@if($errors->has('bp_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_05" value="{{ old('bp_05') }}"/>
@if($errors->has('bp_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_06" value="{{ old('bp_06') }}"/>
@if($errors->has('bp_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_07" value="{{ old('bp_07') }}"/>
@if($errors->has('bp_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_08" value="{{ old('bp_08') }}"/>
@if($errors->has('bp_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_09" value="{{ old('bp_09') }}"/>
@if($errors->has('bp_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="bp_10" value="{{ old('bp_10') }}"/>
@if($errors->has('bp_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('bp_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th>SPO2</th>
<td>
<input class="form-control" type="text" name="`spo2_00`" value="{{ old('`spo2_00`') }}"/>
@if($errors->has('`spo2_00`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`spo2_00`') }}</div></span>
@endif
</td>
<td>
  <input class="form-control" type="text" name="spo2_01" value="{{ old('spo2_01') }}"/>
  @if($errors->has('resp-rate_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('resp-rate_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`spo2_02`" value="{{ old('`spo2_02`') }}"/>
@if($errors->has('`spo2_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`spo2_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_03" value="{{ old('spo2_03') }}"/>
@if($errors->has('spo2_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_04" value="{{ old('spo2_04') }}"/>
@if($errors->has('spo2_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_05" value="{{ old('spo2_05') }}"/>
@if($errors->has('spo2_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_06" value="{{ old('spo2_06') }}"/>
@if($errors->has('spo2_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_07" value="{{ old('spo2_07') }}"/>
@if($errors->has('spo2_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_08" value="{{ old('spo2_08') }}"/>
@if($errors->has('spo2_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_09" value="{{ old('spo2_09') }}"/>
@if($errors->has('spo2_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="spo2_10" value="{{ old('spo2_10') }}"/>
@if($errors->has('spo2_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('spo2_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th>Level Of Consciousness</th>
  <td>
    <input class="form-control" type="text" name="consciousness_00" value="{{ old('consciousness_00') }}"/>
    @if($errors->has('consciousness_00'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_00') }}</div></span>
    @endif
</td>
<td>
  <input class="form-control" type="text" name="consciousness_01" value="{{ old('consciousness_01') }}"/>
  @if($errors->has('consciousness_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`consciousness_02`" value="{{ old('`consciousness_02`') }}"/>
@if($errors->has('`consciousness_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`consciousness_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_03" value="{{ old('consciousness_03') }}"/>
@if($errors->has('consciousness_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_04" value="{{ old('consciousness_04') }}"/>
@if($errors->has('consciousness_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_05" value="{{ old('consciousness_05') }}"/>
@if($errors->has('consciousness_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_06" value="{{ old('consciousness_06') }}"/>
@if($errors->has('consciousness_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_07" value="{{ old('consciousness_07') }}"/>
@if($errors->has('consciousness_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_08" value="{{ old('consciousness_08') }}"/>
@if($errors->has('consciousness_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_09" value="{{ old('consciousness_09') }}"/>
@if($errors->has('consciousness_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="consciousness_10" value="{{ old('consciousness_10') }}"/>
@if($errors->has('consciousness_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('consciousness_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th>Pain Score (0-10)</th>
  <td>
    <input class="form-control" type="text" name="pain_score_00" value="{{ old('pain_score_00') }}"/>
    @if($errors->has('pain_score_00'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_00') }}</div></span>
    @endif
</td>
<td>
  <input class="form-control" type="text" name="pain_score_01" value="{{ old('pain_score_01') }}"/>
  @if($errors->has('pain_score_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`pain_score_02`" value="{{ old('`pain_score_02`') }}"/>
@if($errors->has('`pain_score_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`pain_score_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_03" value="{{ old('pain_score_03') }}"/>
@if($errors->has('pain_score_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_04" value="{{ old('pain_score_04') }}"/>
@if($errors->has('pain_score_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_05" value="{{ old('pain_score_05') }}"/>
@if($errors->has('pain_score_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_06" value="{{ old('pain_score_06') }}"/>
@if($errors->has('pain_score_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_07" value="{{ old('pain_score_07') }}"/>
@if($errors->has('pain_score_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_08" value="{{ old('pain_score_08') }}"/>
@if($errors->has('pain_score_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_09" value="{{ old('pain_score_09') }}"/>
@if($errors->has('pain_score_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="pain_score_10" value="{{ old('pain_score_10') }}"/>
@if($errors->has('pain_score_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('pain_score_10') }}</div></span>
@endif
</td>
</tr>
<tr>
  <th>Name and ID No of the Doctor</th>
  <td>
    <input class="form-control" type="text" name="name_sign_00" value="{{ old('name_sign_00') }}"/>
    @if($errors->has('name_sign_00'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_00') }}</div></span>
    @endif
</td>
<td>
  <input class="form-control" type="text" name="name_sign_01" value="{{ old('name_sign_01') }}"/>
  @if($errors->has('name_sign_01'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_01') }}</div></span>
  @endif
</td>
<td>
<input class="form-control" type="text" name="`name_sign_02`" value="{{ old('`name_sign_02`') }}"/>
@if($errors->has('`name_sign_02`'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('`name_sign_02`') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_03" value="{{ old('name_sign_03') }}"/>
@if($errors->has('name_sign_03'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_03') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_04" value="{{ old('name_sign_04') }}"/>
@if($errors->has('name_sign_04'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_04') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_05" value="{{ old('name_sign_05') }}"/>
@if($errors->has('name_sign_05'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_05') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_06" value="{{ old('name_sign_06') }}"/>
@if($errors->has('name_sign_06'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_06') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_07" value="{{ old('name_sign_07') }}"/>
@if($errors->has('name_sign_07'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_07') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_08" value="{{ old('name_sign_08') }}"/>
@if($errors->has('name_sign_08'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_08') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_09" value="{{ old('name_sign_09') }}"/>
@if($errors->has('name_sign_09'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_09') }}</div></span>
@endif
</td>
<td>
<input class="form-control" type="text" name="name_sign_10" value="{{ old('name_sign_10') }}"/>
@if($errors->has('name_sign_10'))
<span class="help-block"><div class="text-danger">{{ $errors->first('name_sign_10') }}</div></span>
@endif
</td>
</tr>
</tbody>
</table>
<div class="row form-group"><hr>
  <div class="col-md-10">
    <div class="col-md-12">
      <label>Adverse Effect If Any (During and Post Sedation):</label>
    </div>
    <div class="col-md-10">
      <textarea class="form-control" type="text"  rows="3"name="ad_effect" id="ad_effect" value="{{ old('ad_effect') }}" ></textarea>
      @if($errors->has('ad_effect'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('ad_effect') }}</div></span>
      @endif
      <div class="row form-group"><hr>
        <div class="col-md-6">
          <div class="col-md-6">
            <label>Anaesthetist Name:</label>
          </div>
          <div class="col-md-6">
            <input class="form-control" type="text"  name="anaesthetist_name" id="anaesthetist_name" value="{{ old('anaesthetist_name') }}" >
            @if($errors->has('anaesthetist_name'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('anaesthetist_name') }}</div></span>
            @endif
          </div></div>


            <div class="col-md-6">
              <div class="col-md-6">
                <label>Anesthetist's Sign:</label>
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text"  name="sign" id="sign" value="{{ old('sign') }}" >
                @if($errors->has('sign'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('sign') }}</div></span>
                @endif
              </div></div></div>

              <div class="row form-group">
                <div class="col-md-6">
                  <div class="col-md-6">
                    <label>Date:</label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="date"  name="date_02" id="date_02" value="{{ old('date_02') }}" >
                    @if($errors->has('date_02'))
                        <span class="help-block"><div class="text-danger">{{ $errors->first('date_02') }}</div></span>
                    @endif
                  </div></div>


              			<div class="col-md-6">
              				<div class="col-md-6">
              					<label>Time:</label>
              				</div>
              				<div class="col-md-6">
              					<input class="form-control" type="time"  name="time_02" id="time_02" value="{{ old('time_02') }}" >
              					@if($errors->has('time_02'))
              							<span class="help-block"><div class="text-danger">{{ $errors->first('time_02') }}</div></span>
              					@endif
              				</div></div></div>

                      <div class="row form-group text-center">
                        <button class="form-group btn btn-success" type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                  @endsection
