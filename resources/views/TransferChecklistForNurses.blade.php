@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
	<div class="row">
		<div class="col-md-6">
		<h1> Transfer Checklist for Nurses</h1>
		</div>
		<div class="col-md-6">
			<div class="text-right">
				DOC NO. F/IPD/49 <br>
				REV. No. 0.0 <br>
				WEF 25-02-2015
			</div>
		</div>
	</div>
	</div>

	@if ($errors->any())
			<div class="alert alert-danger" role="alert">
					Please fix the following errors
			</div>
	@endif


<div class="container">
	<form action="{{ url('/TransferChecklistForNurses') }}" method="post">
		{{ csrf_field() }}


  <div class="row">
	<div class="col-md-10">
	  <div class="form-group">
		<label>Transfer To :</label>
		<input class="form-control " type="textbox" name="transfer_to" placeholder="Transfer To">
	  </div>
	  <div class="form-group">
		<label>Transfer From :</label>
		<input class="form-control" type="textbox" name="transfer_from" placeholder="Transfer From">
	  </div>
	</div>

  </div>
  <div class="row">

	<div class="col-md-8">
	  <table class="table">
		<thead>
		  <tr>
		    <th>Sr. No</th>
			<th>Papers in the File</th>
			<th>No. Of Papers</th>
			<th>Checked By</th>
		  </tr>
		</thead>
		<tbody>
			<tr>
			  <td>1</td>
			  <td>Main Front Sheet</td>
			  <td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="no01">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch01">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>Patient Information Form</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no02">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch02">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>3</td>
			  <td>Complete Nursing Assessment Form</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no03">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch03">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>4</td>
			  <td>If MLC, PS, FIR/no., MLC Cons</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no04">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch04">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>5</td>
			  <td>Ref Dr. Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no05">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch05">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>6</td>
			  <td>History Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no06">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch06">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>7</td>
			  <td>Consultant's Note</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no07">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch07">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>8</td>
			  <td>General Informed consent</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no08">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch08">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>9</td>
			  <td>Consent for Valuable</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no09">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch09">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>10</td>
			  <td>Restrain Consent</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no10">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch10">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>11</td>
			  <td>Information And Anesthesia Consent</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no11">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch11">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>12</td>
			  <td>Consent for Surgery/Procedure</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no12">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch12">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>13</td>
			  <td>High Risk Consent</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no13">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch13">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>14</td>
			  <td>Consent for Special Procedure</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no14">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch14">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>15</td>
			  <td>Patient Transfer Checklist</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no15">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch15">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>16</td>
			  <td>Pre Angio Checklist</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no16">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch16">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>17</td>
			  <td>PAC & ANesthesia Notes</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no17">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch17">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>18</td>
			  <td>Pre-OT Checklist</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no18">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch18">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>19</td>
			  <td>Anesthesia Record</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no19">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch19">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>20</td>
			  <td>Doctor's Daily Record</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no20">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch20">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>21</td>
			  <td>Treatment/MAR/Flow Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no21">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch21">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>22</td>
			  <td>Glasgow Coma Scale Charting</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no22">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch22">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>23</td>
			  <td>Ventilator Chart</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no23">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch23">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>24</td>
			  <td>Infusion Therapy Chart</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no24">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch24">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>25</td>
			  <td>Blood Monitoring Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no25">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch25">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>26</td>
			  <td>Nursing Duty Over</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no26">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch26">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>27</td>
			  <td>RBS Charting</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no27">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch27">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>28</td>
			  <td>Investigation Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no28">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch28">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>29</td>
			  <td>Lab Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no29">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch29">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>30</td>
			  <td>Pathlology Investigation Reports</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no30">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch30">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>31</td>
			  <td>Radiology Investigation Reports</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no31">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch31">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>32</td>
			  <td>X-RAY</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no32">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch32">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>33</td>
			  <td>MRI</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no33">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch33">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>34</td>
			  <td>CT Scan</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no34">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch34">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>35</td>
			  <td>ECG</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no35">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch35">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>36</td>
			  <td>USG</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no36">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch36">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>37</td>
			  <td>Physiotherapy Notes</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no37">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch37">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>38</td>
			  <td>Nutritional Assessment</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no38">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch38">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>39</td>
			  <td>Bills of Pharmacy Implant etc.</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no39">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch39">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>40</td>
			  <td>Ward Procedure Record</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no40">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch40">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>41</td>
			  <td>Visiting Charge Sheet</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no41">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch41">
				</div>
			  </td>
			</tr>
			<tr>
			  <td>42</td>
			  <td>Other</td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="no42">
				</div>
			  </td>
			  <td>
			    <div class="form-group">
				<input type="textbox" class="form-control" name="ch42">
				</div>
			  </td>
			</tr>

		</tbody>
	  </table>
	</div>
</div>

	<div class="row">
	<div class="col-md-4">
	  <table class="table">
		<thead>
		  <tr>
		    <th colspan="2">Post Op Day</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
		    <td>Foley's</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod01">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>CVC</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod02">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>IV Line</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod03">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>TT</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod04">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>RT/PEG</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod05">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Drain</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod06">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Temp</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod07">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Pulse</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod08">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Resp</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod09">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>BP</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod10">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>SPO2</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="pod11">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Diet</td>
			<td>
			    <div class="form-group">
				<textarea class="form-control" name="pod12" placeholder="Diet" rows="3"></textarea>
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Other Note</td>
			<td>
			    <div class="form-group">
				<textarea class="form-control" name="pod13" placeholder="Other Notes" rows="4"></textarea>
				</div>
			</td>
		</tr></div></div>
			<div class="row">
				<div class="col-md-6">
		  <tr>
			<th colspan="2">Transferred Nurse</th>
		  <tr>
		    <td>Name & ID</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="tn01">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Date</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="date" name="tn02">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Time</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="time" name="tn03">
				</div>
			</td>
		  </tr>
		</div>
		<div class="col-md-06">
		  <tr>
			<th colspan="2">Recieved Nurse</th>
		  <tr>
		    <td>Name & ID</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="textbox" name="rn01">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Date</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="date" name="rn02">
				</div>
			</td>
		  </tr>
		  <tr>
		    <td>Time</td>
			<td>
			    <div class="form-group">
				<input class="form-control" type="time" name="rn03">
				</div>
			</td>
		  </tr>
		</tbody>
	</table>
	</div>
</div>
	<div class="row form-group">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>

  </form>

</div>
@endsection
