@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

			<div class="row">
				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Universities</h2>
					</div>
					<div class="pull-right">
						<a class="btn btn-success" href="{{ route('university.create') }}"> Add University <i class="fa fa-plus fa-lg" aria-hidden="true"></i></a>
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
					<th>Location</th>
					<th>Website</th>
					<th >Action</th>
				</tr>
				@foreach ($universities as $key => $university)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $university->name }}</td>
						<td>{{ $university->location }}</td>
						<td>{{ $university->website }}</td>
						<td>
							<a class="btn btn-info btn-sm" href="{{ route('university.show',$university->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
							<a class="btn btn-primary btn-sm" href="{{ route('university.edit',$university->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</a>
							{!! Form::open(['method' => 'DELETE','route' => ['university.delete', $university->id],'style'=>'display:inline']) !!}
							{{ Form::button('  <i class="fa fa-trash-o" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</table>
			{{ $universities->links('vendor.pagination.custom') }}
{{--			{!! $universities->render() !!}--}}
		</main>
	</div>

@endsection
