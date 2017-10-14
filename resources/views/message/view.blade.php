@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <div class="list-group">
            @foreach($messages as $message)
              <a href="{{ URL::route('message.single') }}" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{$message -> verification_status}}</h5>
                </div>
                <p class="mb-1">From: <span>{{ $message->stakeholder->name }}</span></p>
                <p class="mb-1">Date: <span>{{ $message->created_at }}</span></p>
              </a>
            @endforeach
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