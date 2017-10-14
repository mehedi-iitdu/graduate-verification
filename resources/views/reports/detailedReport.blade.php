@extends('layouts.app')

@section('content')
   
<div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
         	


    	<div class="row">
    		<div class="col-md-12">
    			<div class="table-responsive">
    				<table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th class="center">University</th>
                        <th class="center">Department</th>
                        <th class="center">Session</th>
                        <th class="center">Registration Number</th>
                        <th class="center">Verification Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>Sharafat Ahmed</td>
                            <td class="center">jgfil</td>
                            <td class="center">kjkf</td>
                            <td class="center">{{ $student->session }}</td>
                            <td class="center">{{ $student->registration_no }}</td>
                            <td class="center">fdhkh</td>
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
            	
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv', title: 'Detail Report'},
                    {extend: 'excel', title: 'Detail Report'},
                    {extend: 'pdf', title: 'Detail Report'},

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