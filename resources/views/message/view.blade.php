@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <div class="list-group">
            <a href="{{ URL::route('message.single') }}" class="list-group-item list-group-item-action flex-column align-items-start active">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Request Decline</h5>
                <small>3 days ago</small>
              </div>
              <p class="mb-1">From: <span>Abdul Matin</span></p>
              <p class="mb-1">Date: <span>03-04-2017</span></p>
            </a>

            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Payment Request</h5>
                <small>15 days ago</small>
              </div>
              <p class="mb-1">From: <span>Abdul Matin</span></p>
              <p class="mb-1">Date: <span>03-04-2017</span></p>
            </a>

            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Confirm Request</h5>
                <small>3 days ago</small>
              </div>
              <p class="mb-1">From: <span>Abdul Matin</span></p>
              <p class="mb-1">Date: <span>03-04-2017</span></p>
            </a>
          </div>
        </main>
      </div>
    </div>
@endsection

@section('css')
  <style type="text/css">
    .list-group-item.active{
        background-color: #000034 !important;
        border-color: #000034 !important;
    }
  </style>
@endsection