@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">

			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-left">
							<h2>Edit Course</h2>
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

				{!! Form::model($course, ['method' => 'POST','route' => ['course.update', $course->id]]) !!}
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Code:</strong>
							{!! Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')) !!}
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Credit:</strong>
							{!! Form::text('credit', null, array('placeholder' => 'Credit','class' => 'form-control')) !!}
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