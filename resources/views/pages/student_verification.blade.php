@extends('layouts.app')

@section('content')
	<div class="container">
			
			<div class="row">
				
				<div class="col-md-4">
					<h3>Personal Information:</h3>
				</div>

				<div class="col-md-8">
					<p id="student_name">Name</p>
					<p id="address">Address</p>
					<p id="contact_info">Contact Info</p>
				</div>

			</div>

			<div class="row">
				
				<div class="col-md-4">
					<h3>Academic Information:</h3>
				</div>

				<div class="col-md-8">
					<p id="university_name">University</p>
					<p id="reg_number">Registration Number</p>
					<p id="session">Session</p>
					<p id="dept_name">Department/Institute</p>
					<p id="cgpa">CGPA</p>
				</div>

			</div>

			<div class="row">
				
				<div class="col-md-4">
					<h3>Graduation Certificate:</h3>
				</div>

				<form class="col-md-8">
				  <div class="form-group">
				    <input type="file" class="form-control-file" id="certificate">
				  </div>
				</form>

			</div>

			<div class="row">
				
				<div class="col-md-4">
					<h3>Verification Signature:</h3>
				</div>

				<form class="col-md-8">
				  <div class="form-group">
				    <input type="file" class="form-control-file" id="signature">
				  </div>
				</form>
			</div>
			
			<div class="row">
				
				<div class="col-md-4"></div>

				<div class="col-md-4">
					<button type="submit" class="btn btn-primary">Verify</button>
				</div>

				<div class="col-md-4"></div>	

			</div>

		</div>
@endsection