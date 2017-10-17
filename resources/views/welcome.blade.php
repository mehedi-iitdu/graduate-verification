@extends('layouts.app')


@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/popup.css') }}">
@endsection

@section('content')
      
    <div class="container-fluid">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <div class="jumbotron">
            




			<div id="abc">
			<!-- Popup Div Starts Here -->
				<div id="popupContact">
				<!-- Contact Us Form -->
					<form action="#" id="form" method="post" name="form">
						<img id="close" src="images/3.png" onclick ="div_hide()">
						<h2>Contact Us</h2>
						<hr>
						<input id="name" name="name" placeholder="Name" type="text">
						<input id="email" name="email" placeholder="Email" type="text">
						<textarea id="msg" name="message" placeholder="Message"></textarea>
						<a href="javascript:%20check_empty()" id="submit">Send</a>
					</form>
				</div>
			<!-- Popup Div Ends Here -->
			</div>
			<!-- Display Popup Button -->
			<h1>Click Button To Popup Form Using Javascript</h1>
			<button id="popup" onclick="div_show()">Popup</button>

















          </div>  
        </main>
      
    </div>
          

@endsection

@section('script')

<script type="text/javascript">
	
// Validating Empty Field
	// function check_empty() {
	// if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
	// alert("Fill All Fields !");
	// } 
	// else {
	// document.getElementById('form').submit();
	// 	alert("Form Submitted Successfully...");
	// }
	// }
	//Function To Display Popup
	function div_show() {
		document.getElementById('abc').style.display = "block";
	}
	//Function to Hide Popup
	function div_hide(){
		document.getElementById('abc').style.display = "none";
	}


</script>


@endsection