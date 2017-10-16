@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<div class="row">

			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-left">
							<h2> Student Information</h2>
							<hr>
						</div>
						<div class="pull-right">
							<a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">First Name:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->first_name }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Last Name:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->last_name }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Department:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->department->name }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">University:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->department->university->name }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Session:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->session }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Registration No:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->registration_no }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Email:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->email }}</div>	
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group row">
							<strong class="col-sm-2 col-md-2 col-xs-2">Mobile:</strong>
							<div class="col-sm-10 col-md-10 col-xs-10">{{ $student->mobile_no }}</div>	
						</div>
					</div>

				</div>
			</main>
		</div>
	</div>
@endsection