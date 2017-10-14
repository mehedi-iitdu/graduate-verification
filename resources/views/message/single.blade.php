@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <div class="message-body">
            <div class="card">
              <div class="card-header">
                  <h3 class="message-heading">Request Decline</h3>
                </div>
              <div class="card-body">
                <h4 class="card-title">From: <span>Abdul Matin</span></h4>
                <h4 class="card-title">Date: <span>03-04-2017</span></h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="" class="btn btn-primary">Go this link</a>
              </div>
            </div>
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