@extends('layouts.app')

@section('content')
   
<div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
         	
         	<div class="row">
         		<div class="col-md-12">
         			<h2 style="margin-bottom: 40px" class="d-none d-sm-block">Select and search</h2>
		            <div class="jumbotron">

		              @include('partials._error_message')
		              {!! Form::open(array('route' => 'student.store')) !!}
		                
		                <div class="row">
		                	<div class="col-md-6 form-group">
			                  <div class="row">
			                    <div class="col-md-2"><label for="university">University: </label></div>
			                    <div class="col-md-10">
			                        <div id="university_list">

			                      
			                          
			                        </div>
			                    </div>
			                  </div>
			                </div>

			                <div class="col-md-6 form-group">
			                  <div class="row">
			                    <div class="col-md-2"><label for="department">Department: </label></div>
			                    <div class="col-md-10">
			                      <div id="department_list">
			                        
			                        <select class="form-control" id="user_role">
			                            <option>Select Department</option>
			                        </select>

			                      </div>
			                    </div>
			                  </div>
			                </div>


			                <div class="col-md-6 form-group">
			                    <div class="row">
			                        <div class="col-md-2"><label for="session_no">Session: </label></div>
			                        <div class="col-md-10"><input class="form-control" required="" name="session_no" type="text" id="session_no">
			                        </div>
			                    </div>
			                </div>

			                <div class="col-md-6 form-group">
			                    <div class="row">
			                        <div class="col-md-2"><label for="year_no">Year: </label></div>
			                        <div class="col-md-10"><input class="form-control" required="" name="year_no" type="Number" id="year_no">
			                        </div>
			                    </div>
			                </div>


			                <div class="col-md-3 col-md-offset-9 form-group">
			                    <div class="row">
			                        <div class="col-md-12">
			                            <button type="submit" class="btn btn-primary btn-block">Search</button>
			                        </div>
			                    </div>
			                </div>

		                </div>
		                
		                

		                
		                
		              {!! Form::open(array('route' => 'student.store')) !!}
		            
		            </div>
         		</div>
         		
         	</div>


        	<div class="row">
        		<div class="col-md-12">
        			<div class="table-responsive">
        				<table class="table table-striped table-bordered table-hover dataTables-example" >
	                    <thead>
	                    <tr>
	                        <th>Student Type</th>
	                        <th class="center">Number of Students</th>
	                    </tr>
	                    </thead>
	                    <tbody>
	                    <tr>
	                        <td>Total Student</td>
	                        <td class="center">10,000</td>
	                    </tr>
	                    <tr>
	                        <td>Graduated Students</td>
	                        <td class="center">8,000</td>
	                    </tr>
	                    <tr>
	                        <td>Requested for Verification</td>
	                        <td>1,000</td>
	                    </tr>
	                    <tr>
	                        <td>Verification on Progress</td>
	                        <td class="center">100</td>
	                    </tr>
	                    <tr>
	                        <td>Verified</td>
	                        <td class="center">900</td>
	                    </tr>
	                    </tbody>
	                    </table>
        			</div>
        		</div>
        		
        	</div>

        
        
        </main>

 </div>


@endsection

@section('script')


	<script type="text/javascript" src="{{asset('js/reportJS/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/reportJS/jquery.metisMenu.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/reportJS/jquery.slimscroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/reportJS/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/reportJS/inspinia.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/reportJS/pace.min.js')}}"></script>



	<!-- 

	<link rel="script" type="text/javascript" href="{{asset('js/reportJS/jquery-3.1.1.min.js')}}">
	<link rel="script" type="text/javascript" href="{{asset('js/reportJS/bootstrap.min.js')}}">
    <link rel="script" type="text/javascript" href="{{asset('js/reportJS/jquery.metisMenu.js')}}">
    <link rel="script" type="text/javascript" href="{{asset('js/reportJS/jquery.slimscroll.min.js')}}">
    <link rel="script" type="text/javascript" href="{{asset('js/reportJS/datatables.min.js')}}">
	<link rel="script" type="text/javascript" href="{{asset('js/reportJS/inspinia.js')}}">
	<link rel="script" type="text/javascript" href="{{asset('js/reportJS/pace.min.js')}}">

 -->
    <script>
        $(document).ready(function(){

        	$.ajaxSetup({
				headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
			});

			$(function () {
				$('#date_of_birth').datepicker({});
			});


			$.post("{{ URL::route('university.list') }}",{},function(data){
				$('#university_list').html(data);
				departmentList();
			});

			function departmentList(){
				$('#university_id').on('change', function(){
					var university_id = $('#university_id option:selected').val();
					$.post("{{ URL::route('department.list') }}",{university_id:university_id},function(data){
						$('#department_list').html(data);
					});
				});
			}

        	console.log("Outside");
            $('.dataTables-example').DataTable({
            	
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv', title: 'Overview Report'},
                    {extend: 'excel', title: 'Overview Report'},
                    {extend: 'pdf', title: 'Overview Report'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection