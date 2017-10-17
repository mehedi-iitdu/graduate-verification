@extends('layouts.app')

@section('content')
   
<div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
         	


    	<div class="row">
    		<div class="col-md-12">
                <h2 id="detailedReport">Detail Report for {{ $verification_status_of_Students }} Students</h2>
    			<div class="table-responsive">
    				<table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th class="center">University</th>
                        <th class="center">Department</th>
                        <th class="center">Session</th>
                        <th class="center">Registration Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->user->first_name." ".$student->user->last_name }}</td>
                            <td class="center">{{ $student->department->university->name }}</td>
                            <td class="center">{{ $student->department->name }}</td>
                            <td class="center">{{ $student->session }}</td>
                            <td class="center">{{ $student->registration_no }}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
    			</div>
    		</div>
        		
        </div>

        
        
        </main>

 </div>


@endsection

@section('script')


	<script type="text/javascript" src="{{asset('js/reportJS/datatables.min.js')}}"></script>


    <script>
        $(document).ready(function(){

        	$('.dataTables-example').DataTable({
            	"order": [],
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv', title: $('#detailedReport').text()},
                    {extend: 'excel', title: $('#detailedReport').text()},
                    {extend: 'pdf', title: $('#detailedReport').text()},

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