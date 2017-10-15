@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <a href="{{ URL::route('message.view') }}" class="btn btn-outline-dark back">Back</a>
          <div class="message-body">
            <div class="card">
              <div class="card-header">
                  <h3 class="message-heading">{{ $message->verification_status }}</h3>
                </div>
              <div class="card-body">
                <h4 class="card-title">From: <span>{{ $message->stakeholder->name }}</span></h4>
                <h5 class="card-title">Date: <span>{{ $message->created_at }}</span></h5>

                @if($message->verification_status == "Requested")
                  <p class="card-text">{{ $message->stakeholder->name }} has requested to verify {{ $message->student->user->first_name }} of {{$message->student->department->name}} of the {{$message->student->department->university->name}} Registration no {{ $message->student->registration_no}}. Please go through the following link to pay the verification fee.</p>

                  <a href="{{ URL::route('payment.verification', $message->id) }}" class="btn btn-primary">Go this link</a>
                @elseif($message->verification_status == "Paid")

                  <p class="card-text">Verification payment has been paid to verify {{ $message->student->user->first_name }} of {{$message->student->department->name}} of the {{$message->student->department->university->name}} Registration no {{ $message->student->registration_no}} requested to verify by {{ $message->stakeholder->name }}.</p>

                  @if($role == "Registrar")
                    <p>Please go through the following link to verify</p>
                    <a href="{{ URL::route('verify') }}" class="btn btn-primary">Go this link</a>
                  @endif

                @elseif($message->verification_status == "Verified")
                  <p class="card-text">{{ $message->student->user->first_name }} of {{$message->student->department->name}} of the {{$message->student->department->university->name}} Registration no {{ $message->student->registration_no}} has been verified requested to verify by {{ $message->stakeholder->name }}.</p>
                @elseif($message->verification_status == "Canceled")
                  <p class="card-text">Verification request has been canceled to verify {{ $message->student->user->first_name }} of {{$message->student->department->name}} of the {{$message->student->department->university->name}} Registration no {{ $message->student->registration_no}} requested to verify by {{ $message->stakeholder->name }}.</p>
                @endif
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

    .back{
      margin: 20px 0;
    }
  </style>
@endsection