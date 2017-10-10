@extends('layouts.blank')

@section('content')

<div class="jumbotron col-md-6" style="margin:auto">
    <div class="sign-up">
        <div id="alert" class="text-center">
            @include('flash::message')
        </div>
        <h1 class="text-center" >User Activation</h1>
        @include('partials._error_message')
        {!! Form::open(array('route' => 'user.activation', 'class' => 'sign-up-form')) !!}

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('activation_code', 'Activation Code') }}
                {{ Form::number('activation_code', null, ['class' => 'form-control', 'required']) }}
            </div>
            {{ Form::submit('Activate', ['class' => 'btn btn-block btn-primary']) }}

        {!! Form::close() !!}

        <div class="pull-right"><a href="{{ route('user.send_activation_code') }}" class="btn btn-link">Resend activation code?</a></div>
    </div>
</div>

@endsection

