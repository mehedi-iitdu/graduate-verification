@extends('layouts.app')

@section('content')
   
<div class="container-fluid">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
         
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
	                        <td>1000</td>
	                    </tr>
	                    <tr>
	                        <td>Verification on Progress</td>
	                        <td class="center">100</td>
	                    </tr>
	                    <tr>
	                        <td>Verified</td>
	                        <td class="center">900</td>
	                    </tr>
	                    </tfoot>
	                    </table>
        			</div>
        		</div>
        		
        	</div>

        
        
        </main>

 </div>


@endsection

@section('script')


	<script type="text/javascript" src="{{asset('js/reportJS/jquery-3.1.1.min.js')}}"></script>
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
        	console.log("Outside");
            $('.dataTables-example').DataTable({
            	
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

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