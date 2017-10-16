@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Departments</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-success" href="{{ route('department.create') }}"> Add Department <i class="fa fa-plus fa-lg" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>

			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif

			<table class="table table-bordered">
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>University</th>
					<th>No Semester</th>
					<th>Action</th>
				</tr>
				@foreach ($departments as $key => $department)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $department->department_name }}</td>
						<td>{{ $department->uinversity }}</td>
						<td>{{ $department->semesters }}</td>
						<td>
							<a class="btn btn-info btn-sm" href="{{ route('department.show',$department->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a class="btn btn-primary btn-sm" href="{{ route('department.edit',$department->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>
							{!! Form::open(['method' => 'DELETE','route' => ['department.delete', $department->id],'style'=>'display:inline']) !!}
							{{ Form::button('  <i class="fa fa-trash-o" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</table>

			{!! $departments->render() !!}
		</main>
	</div>

@endsection
