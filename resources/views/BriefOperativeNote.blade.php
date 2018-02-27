@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-md-6">
				<h1>Brief Operative Note</h1>
				</div>
				<div class="col-md-6">
				</div>
			</div>
		</div>

		@if ($errors->any())
				<div class="alert alert-danger" role="alert">
						Please fix the following errors
				</div>
		@endif

		<form action="{{ url('/BriefOperativeNote') }}" method="post">
			{{ csrf_field() }}

      <div class="row form-group">
        <textarea name="briefoperativenote" rows="5" cols="80" class="form-control" placeholder="Brief Operative Notes here:">{{ old('briefoperativenote') }}</textarea>
        @if($errors->has('briefoperativenote'))
        <span class="help-block"><div class="text-danger">{{ $errors->first('briefoperativenote') }}</div></span>
        @endif
      </div>

			<div class="row form-group">
				<table class="table table-bordered table-responsive" name="appointmentbook">
					<thead>
						<tr>
							<th class="text-center">Post Operative Clinical Status</th>
							<th class="text-center">Post Operative Orders</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
                <textarea name="post_operative_clinical_status" rows="4" class="form-control">{{ old('post_operative_clinical_status') }}</textarea>
								@if($errors->has('post_operative_clinical_status'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('post_operative_clinical_status') }}</div></span>
								@endif
							</td>
							<td>
                <textarea name="post_operative_orders" rows="4" class="form-control">{{ old('post_operative_orders') }}</textarea>
								@if($errors->has('post_operative_orders'))
										<span class="help-block"><div class="text-danger">{{ $errors->first('post_operative_orders') }}</div></span>
								@endif
							</td>
            </tr>
					</tbody>
				</table>
			</div>
			<div class="form-group text-center">
			  <button class="btn btn-success" type="submit">Submit</button>
			</div>
		</form>
	</div>
@endsection
