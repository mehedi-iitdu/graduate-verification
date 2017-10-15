@extends('layouts.blank')

@section('content')
	<div class="verification">
		<div class="card stakeholder-info">
		  <div class="card-header">
		    <h4>Stakeholder Info</h4>
		  </div>
		  <div class="card-body">
		    <table class="table table-responsive">
		      <tbody>
		        <tr>
		          <th colspan="6">Name</th>
		          <td>{{ $verification->stakeholder->name }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">Institute</th>
		          <td>{{ $verification->stakeholder->institute }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">Designation</th>
		          <td>{{ $verification->stakeholder->designation }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">Country</th>
		          <td>{{ $verification->stakeholder->country }}</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>

		<div class="card student-info">
		  <div class="card-header">
		    <h4>Student Info</h4>
		  </div>
		  <div class="card-body">
		    <table class="table table-responsive">
		      <tbody>
		        <tr>
		          <th colspan="6">Name</th>
		          <td>{{ $verification->student->user->first_name }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">Department</th>
		          <td>{{ $verification->student->department->name }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">University</th>
		          <td>{{ $verification->student->department->university->name }}</td>
		        </tr>
		        <tr>
		          <th colspan="6">Registration No.</th>
		          <td>{{ $verification->student->registration_no }}</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>

		<div class="card text-center">
		  <div class="card-body">
		    <h4 class="card-text">Amount <span>10$</span></h4>
		    <a class="btn btn-block btn-primary checkout" href="{{ URL::route('payment.checkout', $verification->id) }}">Checkout</a>
		  </div>
		</div>
	</div>

@endsection

@section('css')
	<style type="text/css">
		.table td{
			border: none;
		}
		.verification{
			width: 30rem;
			margin: 0 auto;
		}
		.card{
			/*width: 50%;*/
			margin-bottom: 20px;
		}
		.checkout{
			margin-top: 30px;
		}
	</style>
@endsection