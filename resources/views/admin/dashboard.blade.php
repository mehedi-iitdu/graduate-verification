@extends('layouts.app')


@section('content')

	<div class="container-fluid">

		<div class="row">
			<main class="col-sm-9 ml-sm-auto col-md-10 pt-3 " role="main">
        {{-- Website Overview --}}
        <div class="card overview">
          <div class="card-body">
          	<h4 class="card-title">System Overview</h4>
          	<hr>
          	<div class="card-deck text-center">
          	  <div class="card">
          	  	<h4 class="card-header">Users</h4>
          	    <div class="card-body">
          	      <h2 class="card-text"><i class="fa fa-users" aria-hidden="true"></i></h2>
          	      <h2 class="card-text">203</h2>
          	      <a href="user/all" class="btn btn-outline-primary">See all users</a>
          	    </div>
          	  </div>

          	  <div class="card">
          	  	<h4 class="card-header">Universities</h4>
          	    <div class="card-body">
          	      <h2 class="card-text"><i class="fa fa-university" aria-hidden="true"></i></h2>
          	      <h2 class="card-text">20</h2>
          	      <a href="user/all" class="btn btn-outline-primary">See all universities</a>
          	    </div>
          	  </div>

          	  <div class="card">
          	  	<h4 class="card-header">Departments</h4>
          	    <div class="card-body">
          	      <h2 class="card-text"><i class="fa fa-building" aria-hidden="true"></i></h2>
          	      <h2 class="card-text">200</h2>
          	      <a href="user/all" class="btn btn-outline-primary">See all departemnts</a>
          	    </div>
          	  </div>

          	  <div class="card">
          	  	<h4 class="card-header">Requests</h4>
          	    <div class="card-body">
          	      <h2 class="card-text"><i class="fa fa-envelope-open" aria-hidden="true"></i></h2>
          	      <h2 class="card-text">23</h2>
          	      <a href="user/all" class="btn btn-outline-primary">See all requests</a>
          	    </div>
          	  </div>
          	</div>
       		</div>
      	</div>

      	{{-- Recent user overview --}}
      	<div class="card recent-users">
      	  <div class="card-body">
      	    <h4 class="card-title">Recent Users</h4>
      	    <hr>
      	    <table class="table table-responsive">
      	      <thead class="thead-default">
      	        <tr>
      	          <th>#</th>
      	          <th>Name</th>
      	          <th>Email</th>
      	          <th>Added On</th>
      	        </tr>
      	      </thead>
      	      <tbody>
      	        <tr>
      	          <th scope="row">1</th>
      	          <td>Mark</td>
      	          <td>mark@example.com</td>
      	          <td>03-04-2017</td>
      	        </tr>
      	        <tr>
      	          <th scope="row">2</th>
      	          <td>Mark</td>
      	          <td>mark@example.com</td>
      	          <td>03-04-2017</td>
      	        </tr>
      	        <tr>
      	          <th scope="row">3</th>
      	          <td>Mark</td>
      	          <td>mark@example.com</td>
      	          <td>03-04-2017</td>
      	        </tr>
      	        <tr>
      	          <th scope="row">4</th>
      	          <td>Mark</td>
      	          <td>mark@example.com</td>
      	          <td>03-04-2017</td>
      	        </tr>
      	        <tr>
      	          <th scope="row">5</th>
      	          <td>Mark</td>
      	          <td>mark@example.com</td>
      	          <td>03-04-2017</td>
      	        </tr>
      	      </tbody>
      	    </table>

      	  </div>
      	</div>
			</main>
		</div>
	</div>

@endsection

@section('css')
	<style type="text/css">
		.card{
			margin-bottom: 2rem;
		}
	</style>
@endsection