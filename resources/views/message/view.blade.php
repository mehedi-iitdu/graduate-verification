@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <div class="row">
      <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <div class="list-group">
          @foreach ($messages as $index => $message)
              @if(isset($message->stakeholder_id))
                    <a href="verification/{{$message->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{++$index}}</h5>
                      </div>
                      <p class="mb-1">From: <span>{{ $message->stakeholder->name }}</span></p>
                      <p class="mb-1">Date: <span>{{ $message->created_at }}</span></p>
                    </a>
                @else
                  <div>
                      <a href="permission/{{$message->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">{{++$index}}</h5>
                          </div>
                          <p class="mb-1">From: <span>{{ $message->user->first_name }}</span></p>
                          <p class="mb-1">Date: <span>{{ $message->created_at }}</span></p>
                      </a>
                  </div>
                @endif
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