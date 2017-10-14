@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          	<div class="row">
          		<div class="col-md-4"></div>
              <div class="col-md-8">
          			<h2>Basic Information</h2>

          			<div class="jumbotron">
          				<div class="row row-">
          					<div class="col-md-4">Name</div>
          					<div class="col-md-8">{{$registrar->user->first_name }} {{$registrar->user->last_name }}</div>
          				</div>

          				<div class="row">
          					<div class="col-md-4">Email</div>
	          				<div class="col-md-8">{{$registrar->user->email}}</div>
          				</div>

          				<div class="row">
          					<div class="col-md-4">Mobile No</div>
	          				<div class="col-md-8">{{$registrar->user->mobile_no}}</div>
          				</div>
          			</div>
          		</div>
          	</div>


        </main>
      </div>
    </div>
@endsection

@section('css')
	<style type="text/css">
		.img_container {
		  position: relative;
		}

		img {
		  position: absolute;
		  width: 250px;
		  height: 250px;
		}

		#btn_pic {
		  position: absolute;
		  content: middle;
		  left: 95px;
		  bottom: 30px;
		  text-align: center;
		  opacity: 0;
		  transition: opacity .35s ease;
		  border: 2px solid;
		}

		.img_container:hover #btn_pic {
		  opacity: 1;
		}

	</style>

@endsection

@section('script')

@endsection
