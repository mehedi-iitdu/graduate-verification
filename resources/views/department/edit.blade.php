@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">

			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-left">
							<h2>Edit Department</h2>
						</div>
						<div class="pull-right">
							<a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
						</div>
					</div>
				</div>

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				{!! Form::model($department, ['method' => 'POST','route' => ['department.update', $department->id]]) !!}
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						</div>
					</div>


					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Number of Semester:</strong>
							{!! Form::select('num_of_semester', ['1' => '1', '2' => '2',
							'3' =>'3', '4' => '4', '5' => '5',
							'6' => '6', '7' =>'7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12' ], null, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					{{ Form::hidden('url',URL::previous()) }}

				</div>
				{!! Form::close() !!}
			</main>
		</div>
	</div>

@endsection
