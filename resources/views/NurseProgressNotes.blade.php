@extends('layouts.app')

@section('content')
<div class="container">
	<div class="page-header">
		<div class="row">
			<div class="col-md-8">
			<h1>Nurse'sProgressNotes</h1>
			</div>
			<div class="col-md-4">
				<div class="text-right">
					DOC NO. FMT/HIC/09 <br>
					REV. No. 0.1 <br>
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
	<form action="{{ url('/NurseProgressNotes') }}" method="post">
		{{ csrf_field() }}

    <div class="row">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th class="text-center">DATE</th>
            <th class="text-center">TIME</th>
            <th class="text-center">PROGRESS</th>
            <th class="text-center">STAFF NAME</th>
            <th class="text-center">SIGN</th>
          </tr>
       </thead>
        <tbody>

          <tr>
            <td><input class="form-control" type="date" name="date_oo"></td>
            <td><input class="form-control" type = "time" name="time_00"></td>
            <td><input class="form-control" type = "text" name="progress_00"></td>
            <td><input class="form-control" type = "text" name="staff_name_00"></td>
            <td><input class="form-control" type = "text" name="sign_00"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_01"></td>
            <td><input class="form-control" type = "time" name="time_01"></td>
            <td><input class="form-control" type = "text" name="progress_01"></td>
            <td><input class="form-control" type = "text" name="staff_name_01"></td>
            <td><input class="form-control" type = "text" name="sign_01"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_02"></td>
            <td><input class="form-control" type = "time" name="time_02"></td>
            <td><input class="form-control" type = "text" name="progress_02"></td>
            <td><input class="form-control" type = "text" name="staff_name_02"></td>
            <td><input class="form-control" type = "text" name="sign_02"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_03"></td>
            <td><input class="form-control" type = "time" name="time_03"></td>
            <td><input class="form-control" type = "text" name="progress_03"></td>
            <td><input class="form-control" type = "text" name="staff_name_03"></td>
            <td><input class="form-control" type = "text" name="sign_03"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_04"></td>
            <td><input class="form-control" type = "time" name="time_04"></td>
            <td><input class="form-control" type = "text" name="progress_04"></td>
            <td><input class="form-control" type = "text" name="staff_name_04"></td>
            <td><input class="form-control" type = "text" name="sign_04"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_05"></td>
            <td><input class="form-control" type = "time" name="time_05"></td>
            <td><input class="form-control" type = "text" name="progress_05"></td>
            <td><input class="form-control" type = "text" name="staff_name_05"></td>
            <td><input class="form-control" type = "text" name="sign_05"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_06"></td>
            <td><input class="form-control" type = "time" name="time_06"></td>
            <td><input class="form-control" type = "text" name="progress_06"></td>
            <td><input class="form-control" type = "text" name="staff_name_06"></td>
            <td><input class="form-control" type = "text" name="sign_06"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_07"></td>
            <td><input class="form-control" type = "time" name="time_07"></td>
            <td><input class="form-control" type = "text" name="progress_07"></td>
            <td><input class="form-control" type = "text" name="staff_name_07"></td>
            <td><input class="form-control" type = "text" name="sign_07"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_08"></td>
            <td><input class="form-control" type = "time" name="time_08"></td>
            <td><input class="form-control" type = "text" name="progress_08"></td>
            <td><input class="form-control" type = "text" name="staff_name_08"></td>
            <td><input class="form-control" type = "text" name="sign_08"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_09"></td>
            <td><input class="form-control" type = "time" name="time_09"></td>
            <td><input class="form-control" type = "text" name="progress_09"></td>
            <td><input class="form-control" type = "text" name="staff_name_09"></td>
            <td><input class="form-control" type = "text" name="sign_09"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_10"></td>
            <td><input class="form-control" type = "time" name="time_10"></td>
            <td><input class="form-control" type = "text" name="progress_10"></td>
            <td><input class="form-control" type = "text" name="staff_name_10"></td>
            <td><input class="form-control" type = "text" name="sign_10"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_11"></td>
            <td><input class="form-control" type = "time" name="time_11"></td>
            <td><input class="form-control" type = "text" name="progress_11"></td>
            <td><input class="form-control" type = "text" name="staff_name_11"></td>
            <td><input class="form-control" type = "text" name="sign_11"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_12"></td>
            <td><input class="form-control" type = "time" name="time_12"></td>
            <td><input class="form-control" type = "text" name="progress_12"></td>
            <td><input class="form-control" type = "text" name="staff_name_12"></td>
            <td><input class="form-control" type = "text" name="sign_12"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_13"></td>
            <td><input class="form-control" type = "time" name="time_13"></td>
            <td><input class="form-control" type = "text" name="progress_13"></td>
            <td><input class="form-control" type = "text" name="staff_name_13"></td>
            <td><input class="form-control" type = "text" name="sign_13"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_14"></td>
            <td><input class="form-control" type = "time" name="time_14"></td>
            <td><input class="form-control" type = "text" name="progress_14"></td>
            <td><input class="form-control" type = "text" name="staff_name_14"></td>
            <td><input class="form-control" type = "text" name="sign_14"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_15"></td>
            <td><input class="form-control" type = "time" name="time_15"></td>
            <td><input class="form-control" type = "text" name="progress_15"></td>
            <td><input class="form-control" type = "text" name="staff_name_15"></td>
            <td><input class="form-control" type = "text" name="sign_15"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_16"></td>
            <td><input class="form-control" type = "time" name="time_16"></td>
            <td><input class="form-control" type = "text" name="progress_16"></td>
            <td><input class="form-control" type = "text" name="staff_name_16"></td>
            <td><input class="form-control" type = "text" name="sign_16"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_17"></td>
            <td><input class="form-control" type = "time" name="time_17"></td>
            <td><input class="form-control" type = "text" name="progress_17"></td>
            <td><input class="form-control" type = "text" name="staff_name_17"></td>
            <td><input class="form-control" type = "text" name="sign_17"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_18"></td>
            <td><input class="form-control" type = "time" name="time_18"></td>
            <td><input class="form-control" type = "text" name="progress_18"></td>
            <td><input class="form-control" type = "text" name="staff_name_18"></td>
            <td><input class="form-control" type = "text" name="sign_18"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_19"></td>
            <td><input class="form-control" type = "time" name="time_19"></td>
            <td><input class="form-control" type = "text" name="progress_19"></td>
            <td><input class="form-control" type = "text" name="staff_name_19"></td>
            <td><input class="form-control" type = "text" name="sign_19"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_20"></td>
            <td><input class="form-control" type = "time" name="time_20"></td>
            <td><input class="form-control" type = "text" name="progress_20"></td>
            <td><input class="form-control" type = "text" name="staff_name_20"></td>
            <td><input class="form-control" type = "text" name="sign_20"></td>
          </tr>
          <tr>
            <td><input class="form-control" type="date" name="date_21"></td>
            <td><input class="form-control" type = "time" name="time_21"></td>
            <td><input class="form-control" type = "text" name="progress_21"></td>
            <td><input class="form-control" type = "text" name="staff_name_21"></td>
            <td><input class="form-control" type = "text" name="sign_21"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row form-group">
      <button class="btn btn-success" type="submit">Submit</button>
    </div>
  </form>
</div>
@endsection
