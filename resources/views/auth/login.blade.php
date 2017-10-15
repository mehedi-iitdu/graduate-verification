


@extends('layouts.blank')

@section('content')

<div class="jumbotron col-md-6" style="margin:auto">
    <div class="sign-up">
        <div id="alert" class="text-center">
            @include('flash::message')
        </div>
        <h1 class="text-center" >Login</h1>
        @include('partials._error_message')
        {!! Form::open(array('route' => 'login', 'class' => 'sign-up-form')) !!}

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required','placeholder' => 'Enter Email']) }}
            </div>
            <div class="form-group">
                {{ Form::label('password', 'Password', ['class' => 'form-control-label']) }}
                {{ Form::password('password', ['class' => 'form-control', 'required','placeholder' => 'Enter Password']) }}
            </div>
            <div class="form-group">
                        <label>{{ Form::checkbox('remember') }} Remember Me</label>
                        </div>
            {{ Form::submit('Login', ['class' => 'btn btn-block btn-primary']) }}

        {!! Form::close() !!}

        <div class="pull-right"><a href="{{ URL::route('user.send_activation_code') }}" class="btn btn-link">Forgot password? Send activation code</a></div>
    </div>
</div>

@endsection
