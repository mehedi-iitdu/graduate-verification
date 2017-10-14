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
		          <td colspan="6">Name:</td>
		          <td>Abdul Bari</td>
		        </tr>
		        <tr>
		          <td colspan="6">Role:</td>
		          <td>UGC</td>
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
		          <td colspan="6">Name:</td>
		          <td>Abdul Bari</td>
		        </tr>
		        <tr>
		          <td colspan="6">Role:</td>
		          <td>UGC</td>
		        </tr>
		      </tbody>
		    </table>
		  </div>
		</div>

		<div class="card text-center">
		  <div class="card-body">
		    <h4 class="card-text">Amount: <span>10$</span></h4>
		    <button class="btn btn-block btn-primary checkout">Checkout</button>
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