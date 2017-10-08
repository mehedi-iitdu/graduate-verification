
@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Online Graduate Verification System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Request For Verification</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="height:1000px">

	Main Body

</div>
<hr>
 <footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5 class="white-text">Contact</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
	     <div class="col-md-4">
        <h5 class="white-text">About</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
	  
          <div class="col-md-4">
           <h5 class="white-text">Address</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>

      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2017 Copyright bsse06
  
    </div>
  </div>
</footer>
@endsection