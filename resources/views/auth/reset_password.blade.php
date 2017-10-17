
@extends('layouts.blank')

@section('content')
<div class="jumbotron col-md-6" style="margin:auto">
    <div class="sign-up">
        <div id="alert" class="text-center">
            @include('flash::message')
        </div>
        <h1 class="text-center" >Reset Password</h1>
        @include('partials._error_message')
        {!! Form::open(array('route' => 'password.reset', 'class' => 'sign-up-form')) !!}

            <input type="email" name="email" hidden="" value="{{ $email }}">
            <input type="number" name="token" hidden="" value="{{ $token }}">
            <div class="form-group">
              {{ Form::label('new_password', 'New Password')   }}
              {{ Form::password('new_password', ['class' => 'form-control', 'required','pattern'=>'(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}','title'=>'At least 1 capital letter, 1 small letter, 1 digit and at least 6 characters']) }}
          </div>

          <div class="form-group">
              {{ Form::label('confirm_password', 'Confirm Password') }}
              {{ Form::password('confirm_password', ['class' => 'form-control', 'required']) }}
          </div>
          {{ Form::submit('Reset', ['class' => 'btn btn-block btn-primary']) }}
        {!! Form::close() !!}

    </div>
</div>

@endsection
