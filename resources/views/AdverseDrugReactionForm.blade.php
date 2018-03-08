<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6">
			<h1>Adverse Drug Reaction Form</h1>
			</div>
			<div class="col-md-6">
				<div class="text-right">
					DOC NO. FMT/IPD/42 <br>
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
	<form action="{{ url('/AdverseDrugReactionForm') }}" method="post">
			{{ csrf_field() }}


      <div class="row form-group"><hr>
        <div class="col-md-12">
        <table class="table table-bordered">
          <thead>
          <tr>
          <th>Name Of The Suspected Drug</th>
          <th>Reason For Use</th>
          <th> Dosage And Frequency </th>
          <th>Route of Administration</th>
          <th>Date of Starting</th>
          <th>Date of Cessation</th>
          <th>Manufacturer Name</th>
          <th>Lot And Expiry</th>
          </tr>
        </thead>

          <tbody>
            <tr>

              <td>
                <input class="form-control" type="text" name="name_00" value="{{ old('name_00') }}"/>
                @if($errors->has('name_00'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('name_00') }}</div></span>
                @endif
            </td>
              <td><input class="form-control" type="text" name="reason_00" value="{{ old('reason_00') }}"/>
                @if($errors->has('reason_00'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('reason_00') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="text" name="dosage_freq_00" value="{{ old('dosage_freq_00') }}"/>
                @if($errors->has('dosage_freq_00'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('dosage_freq_00') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="text" name="route_00" value="{{ old('route_00') }}"/>
                @if($errors->has('route_00'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('route_00') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="date" name="date_start_00" value="{{ old('date_start_00') }}"/>
                @if($errors->has('date_start_00'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_start_00') }}</div></span>
                @endif
              </td>
              <td>
                <input class="form-control" type="date" name="date_cessation_00" value="{{ old('date_cess_00') }}"/>
                @if($errors->has('date_cess_00'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('date_cess_00') }}</div></span>
                @endif
            </td>

            <td>
              <input class="form-control" type="text" name="manufacturer_name_00" value="{{ old('manufacturer_name_00') }}"/>
              @if($errors->has('manufacturer_name_00'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('manufacturer_name_00') }}</div></span>
              @endif
          </td>
          <td>
            <input class="form-control" type="text" name="lot_expiry_00" value="{{ old('lot_expiry_00') }}"/>
            @if($errors->has('lot_expiry_00'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('lot_expiry_00') }}</div></span>
            @endif
        </td>
            </tr>
            <tr>

              <td>
                <input class="form-control" type="text" name="name_01" value="{{ old('name_01') }}"/>
                @if($errors->has('name_01'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('name_01') }}</div></span>
                @endif
            </td>
              <td><input class="form-control" type="text" name="reason_01" value="{{ old('reason_01') }}"/>
                @if($errors->has('reason_01'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('reason_01') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="text" name="dosage_freq_01" value="{{ old('dosage_freq_01') }}"/>
                @if($errors->has('dosage_freq_01'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('dosage_freq_01') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="text" name="route_01" value="{{ old('route_01') }}"/>
                @if($errors->has('route_01'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('route_01') }}</div></span>
                @endif
              </td>
              <td><input class="form-control" type="date" name="date_start_01" value="{{ old('date_start_01') }}"/>
                @if($errors->has('date_start_01'))
                    <span class="help-block"><div class="text-danger">{{ $errors->first('date_start_01') }}</div></span>
                @endif
              </td>
              <td>
                <input class="form-control" type="date" name="date_cessation_01" value="{{ old('date_cess_01') }}"/>
                @if($errors->has('date_cess_01'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('date_cess_01') }}</div></span>
                @endif
            </td>

            <td>
              <input class="form-control" type="text" name="manufacturer_name_01" value="{{ old('manufacturer_name_01') }}"/>
              @if($errors->has('manufacturer_name_01'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('manufacturer_name_01') }}</div></span>
              @endif
          </td>
          <td>
            <input class="form-control" type="text" name="lot_expiry_01" value="{{ old('lot_expiry_01') }}"/>
            @if($errors->has('lot_expiry_01'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('lot_expiry_01') }}</div></span>
            @endif
        </td>
            </tr>
          </tbody>
        </table></div>

            <div class="row form-group">
              <div class="col-md-6">
                <div class="col-md-6">
                  <label>Other Relevant History:</label>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" type="text" rows="4" name="relevant_history" id="relevant_history" value="{{ old('relevant_history') }}" ></textarea>
                  @if($errors->has('relevant_history'))
                      <span class="help-block"><div class="text-danger">{{ $errors->first('relevant_history') }}</div></span>
                  @endif
                </div></div></div>




          Other medications prescribed in patient:
          <div class="row form-group">
            <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
              <tr>
              <th>Other Medications</th>
              <th>Dose and Frequency</th>

              <th>Route of Administration</th>
              <th> Time Of Administration</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <td>
              <input class="form-control" type="text" name="other_medications_00" value="{{ old('other_medications_00') }}"/>
              @if($errors->has('other_medications_00'))
                <span class="help-block"><div class="text-danger">{{ $errors->first('other_medications_00') }}</div></span>
              @endif
          </td>
            <td><input class="form-control" type="text" name="dose_freq_00" value="{{ old('dose_freq_00') }}"/>
              @if($errors->has('dose_freq_00'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('dose_freq_00') }}</div></span>
              @endif
            </td>
            <td><input class="form-control" type="text" name="route_administration_00" value="{{ old('route_administration_00') }}"/>
              @if($errors->has('route_administration_00'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('route_administration_00') }}</div></span>
              @endif
            </td>
            <td><input class="form-control" type="time" name="time_administration_00" value="{{ old('time_administration_00') }}"/>
              @if($errors->has('time_administration_00'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('time_administration_00') }}</div></span>
              @endif
            </td>
          </tr>
          <tr>
        <td>
          <input class="form-control" type="text" name="other_medications_01" value="{{ old('other_medications_01') }}"/>
          @if($errors->has('other_medications_01'))
            <span class="help-block"><div class="text-danger">{{ $errors->first('other_medications_01') }}</div></span>
          @endif
      </td>
        <td><input class="form-control" type="text" name="dose_freq_01" value="{{ old('dose_freq_01') }}"/>
          @if($errors->has('dose_freq_01'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('dose_freq_01') }}</div></span>
          @endif
        </td>
        <td><input class="form-control" type="text" name="route_administration_01" value="{{ old('route_administration_01') }}"/>
          @if($errors->has('route_administration_01'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('route_administration_01') }}</div></span>
          @endif
        </td>
        <td><input class="form-control" type="time" name="time_administration_01" value="{{ old('time_administration_01') }}"/>
          @if($errors->has('time_administration_01'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('time_administration_01') }}</div></span>
          @endif
        </td>
      </tr>

      <tr>
    <td>
      <input class="form-control" type="text" name="other_medications_02" value="{{ old('other_medications_02') }}"/>
      @if($errors->has('other_medications_02'))
        <span class="help-block"><div class="text-danger">{{ $errors->first('other_medications_02') }}</div></span>
      @endif
  </td>
    <td><input class="form-control" type="text" name="dose_freq_02" value="{{ old('dose_freq_02') }}"/>
      @if($errors->has('dose_freq_02'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('dose_freq_02') }}</div></span>
      @endif
    </td>
    <td><input class="form-control" type="text" name="route_administration_02" value="{{ old('route_administration_02') }}"/>
      @if($errors->has('route_administration_02'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('route_administration_02') }}</div></span>
      @endif
    </td>
    <td><input class="form-control" type="time" name="time_administration_02" value="{{ old('time_administration_02') }}"/>
      @if($errors->has('time_administration_02'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('time_administration_02') }}</div></span>
      @endif
    </td>
  </tr>

  <tr>
<td>
  <input class="form-control" type="text" name="other_medications_03" value="{{ old('other_medications_03') }}"/>
  @if($errors->has('other_medications_03'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('other_medications_03') }}</div></span>
  @endif
</td>
<td><input class="form-control" type="text" name="dose_freq_03" value="{{ old('dose_freq_03') }}"/>
  @if($errors->has('dose_freq_03'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('dose_freq_03') }}</div></span>
  @endif
</td>
<td><input class="form-control" type="text" name="route_administration_03" value="{{ old('route_administration_03') }}"/>
  @if($errors->has('route_administration_03'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('route_administration_03') }}</div></span>
  @endif
</td>
<td><input class="form-control" type="time" name="time_administration_03" value="{{ old('time_administration_03') }}"/>
  @if($errors->has('time_administration_03'))
      <span class="help-block"><div class="text-danger">{{ $errors->first('time_administration_03') }}</div></span>
  @endif
</td>
</tr>

<tr>
<td>
<input class="form-control" type="text" name="other_medications_04" value="{{ old('other_medications_04') }}"/>
@if($errors->has('other_medications_04'))
  <span class="help-block"><div class="text-danger">{{ $errors->first('other_medications_04') }}</div></span>
@endif
</td>
<td><input class="form-control" type="text" name="dose_freq_04" value="{{ old('dose_freq_04') }}"/>
@if($errors->has('dose_freq_04'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('dose_freq_04') }}</div></span>
@endif
</td>
<td><input class="form-control" type="text" name="route_administration_04" value="{{ old('route_administration_04') }}"/>
@if($errors->has('route_administration_04'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('route_administration_04') }}</div></span>
@endif
</td>
<td><input class="form-control" type="time" name="time_administration_04" value="{{ old('time_administration_04') }}"/>
@if($errors->has('time_administration_04'))
    <span class="help-block"><div class="text-danger">{{ $errors->first('time_administration_04') }}</div></span>
@endif
</td>
</tr>

</tbody>
</table></div>


<div class="row form-group"><hr>
  <div class="col-md-6">
    <div class="col-md-6">
      <label>Description Of Adverse Drug Reaction:</label>
    </div>
    <div class="col-md-12">
      <textarea class="form-control" type="text" rows="4" name="description" id="description" value="{{ old('description') }}" ></textarea>
      @if($errors->has('description'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('description') }}</div></span>
      @endif
    </div></div></div>
    <div class="row form-group">
      <div class="col-md-6">
    <div class="col-md-6">
      <label>Date Of Event:</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="date"  name="date_event" id="date_event" value="{{ old('date_event') }}" >
      @if($errors->has('date_event'))
          <span class="help-block"><div class="text-danger">{{ $errors->first('date_event') }}</div></span>
      @endif
    </div></div>


      <div class="col-md-6">
        <div class="col-md-6">
          <label>Date Of Report:</label>
        </div>
        <div class="col-md-6">
          <input class="form-control" type="date"  name="date_report" id="date_report" value="{{ old('date_report') }}" >
          @if($errors->has('date_report'))
              <span class="help-block"><div class="text-danger">{{ $errors->first('date_report') }}</div></span>
          @endif
        </div></div></div>

        <div class="row form-group">
          <div class="col-md-6">
            <div class="col-md-6">
              <label>Types of ADR:</label>
            </div>
            <div class="col-md-6">
              <select class="form-control" name="adr_types" value="{{ old('adr_types') }}">
                <option value="NA" @if(old('adr_types') == 'Mild')  selected = 'selected' @endif>Mild</option>
                <option value="Male" @if(old('adr_types') == 'Moderate')  selected = 'selected' @endif>Moderate</option>
                <option value="Female" @if(old('adr_types') == 'Severe')  selected = 'selected' @endif>Severe</option>
              </select>
              @if($errors->has('adr_types'))
                  <span class="help-block"><div class="text-danger">{{ $errors->first('adr_types') }}</div></span>
              @endif
            </div></div>


              <div class="col-md-6">
                <div class="col-md-6">
                  <label>Specification:</label>
                </div>
                <div class="col-md-6">
                  <select class="form-control" name="specification" value="{{ old('specification') }}">
                    <option value="NA" @if(old('specification') == 'Mild')  selected = 'selected' @endif>Mild</option>
                    <option value="Male" @if(old('specification') == 'Moderate')  selected = 'selected' @endif>Moderate</option>
                    <option value="Female" @if(old('specification') == 'Severe')  selected = 'selected' @endif>Severe</option>
                  </select>
                  @if($errors->has('specification'))
                      <span class="help-block"><div class="text-danger">{{ $errors->first('specification') }}</div></span>
                  @endif
                </div></div></div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <label>Outcome Attributed to ADR:</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-control" name="outcome_adr" value="{{ old('outcome_adr') }}">
                        <option value="Death" @if(old('outcome_adr') == 'Death')  selected = 'selected' @endif>Death</option>
                        <option value="Life Threatening" @if(old('outcome_adr') == 'Life Threatening')  selected = 'selected' @endif>Life Threatening</option>
                        <option value="Congenital Anomaly/Birth Defect" @if(old('outcome_adr') == 'Congenital Anomaly/Birth Defect')  selected = 'selected' @endif>Congenital Anomaly/Birth Defect</option>
                        <option value="Hospitalization- Initial or Prolonged" @if(old('outcome_adr') == 'Hospitalization- Initial or Prolonged')  selected = 'selected' @endif>Hospitalization- Initial or Prolonged</option>
                        <option value="Other Serious Events" @if(old('outcome_adr') == 'Other Serious Events')  selected = 'selected' @endif>Other Serious Events</option>
                        <option value="Required Intervention to prevent permanent impairment" @if(old('outcome_adr') == 'Required Intervention to prevent permanent impairment')  selected = 'selected' @endif>Required Intervention to prevent permanent impairment</option>

                      </select>
                      @if($errors->has('outcome_adr'))
                          <span class="help-block"><div class="text-danger">{{ $errors->first('outcome_adr') }}</div></span>
                      @endif
                    </div></div></div>

                    TREATMENT OF REACATION: <hr>

                    <div class="row form-group">
                      <div class="col-md-6">
                        <div class="col-md-6">
                          <label>Remedical Medication given:</label>
                        </div>
                        <div class="col-md-12">
                          <textarea class="form-control" type="text" rows="2" name="remedical_medication" id="remedical_medication" value="{{ old('remedical_medication') }}" ></textarea>
                          @if($errors->has('remedical_medication'))
                              <span class="help-block"><div class="text-danger">{{ $errors->first('remedical_medication') }}</div></span>
                          @endif
                        </div></div></div>

                        <div class="row form-group">
                          <div class="col-md-6">
                            <div class="col-md-6">
                              <label>Alteration(in dose, frequency) Discontinuation(if any) of Medication:</label>
                            </div>
                            <div class="col-md-12">
                              <textarea class="form-control" type="text" rows="4" name="remedical_medication" id="remedical_medication" value="{{ old('remedical_medication') }}" ></textarea>
                              @if($errors->has('remedical_medication'))
                                  <span class="help-block"><div class="text-danger">{{ $errors->first('remedical_medication') }}</div></span>
                              @endif
                            </div></div></div>


                            <div class="row form-group">
                              <div class="col-md-6">
                                <div class="col-md-6">
                                  <label>Events Abated After Use Stopped or Dose Reduced ?:</label>
                                </div>
                                <div class="col-md-6">
                                  <select class="form-control" name="events_abated" value="{{ old('events_abated') }}">
                                    <option value="Yes" @if(old('events_abated') == 'Yes')  selected = 'selected' @endif>Yes</option>
                                    <option value="No" @if(old('events_abated') == 'No')  selected = 'selected' @endif>No</option>
                                    <option value="Doesnt Apply" @if(old('events_abated') == 'Doesnt Apply')  selected = 'selected' @endif>Doesnt Apply</option>
                                  </select>
                                  @if($errors->has('events_abated'))
                                      <span class="help-block"><div class="text-danger">{{ $errors->first('events_abated') }}</div></span>
                                  @endif
                                </div></div>

                                <div class="col-md-6">
                                  <div class="col-md-6">
                                    <label>Events reappeared after Reintroduction ?:</label>
                                  </div>
                                  <div class="col-md-6">
                                    <select class="form-control" name="events_reappear" value="{{ old('events_reappear') }}">
                                      <option value="Yes" @if(old('events_reappear') == 'Yes')  selected = 'selected' @endif>Yes</option>
                                      <option value="No" @if(old('events_reappear') == 'No')  selected = 'selected' @endif>No</option>
                                      <option value="Doesnt Apply" @if(old('events_reappear') == 'Doesnt Apply')  selected = 'selected' @endif>Doesnt Apply</option>
                                    </select>
                                    @if($errors->has('events_reappear'))
                                        <span class="help-block"><div class="text-danger">{{ $errors->first('events_reappear') }}</div></span>
                                    @endif
                                  </div></div></div>

                                  <div class="row form-group">
                            			<div class="col-md-4">
                            				<div class="col-md-6">
                            					<label>Name of the Nurse Administration:</label>
                            				</div>
                            				<div class="col-md-6">
                            					<input class="form-control" type="text"  name="nurse_admin" id="nurse_admin" value="{{ old('nurse_admin') }}" >
                            					@if($errors->has('nurse_admin'))
                            							<span class="help-block"><div class="text-danger">{{ $errors->first('nurse_admin') }}</div></span>
                            					@endif
                            				</div></div>


                                			<div class="col-md-4">
                                				<div class="col-md-6">
                                					<label>Unit/Ward:</label>
                                				</div>
                                				<div class="col-md-6">
                                					<input class="form-control" type="text"  name="unit_ward" id="unit_ward" value="{{ old('unit_ward') }}" >
                                					@if($errors->has('unit_ward'))
                                							<span class="help-block"><div class="text-danger">{{ $errors->first('unit_ward') }}</div></span>
                                					@endif
                                				</div></div>
                                        <div class="col-md-4">
                                          <div class="col-md-6">
                                            <label>Name Of RMO/Consultant:</label>
                                  				</div>
                                  				<div class="col-md-6">
                                  					<input class="form-control" type="text"  name="rmo" id="rmo" value="{{ old('rmo') }}" >
                                  					@if($errors->has('rmo'))
                                  							<span class="help-block"><div class="text-danger">{{ $errors->first('rmo') }}</div></span>
                                  					@endif

                                  				</div></div></div>
                                          <div class="row form-group text-center">
                                            <button class="form-group btn btn-success" type="submit">Submit</button>
                                          </div>
                                        </form>
                                      </div>
