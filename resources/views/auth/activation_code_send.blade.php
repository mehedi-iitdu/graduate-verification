@extends('layouts.blank')

@section('content')

<div class="jumbotron col-md-6" style="margin:auto">
    <div class="sign-up">
        <div id="alert" class="text-center">
            @include('flash::message')
        </div>
        <h1 class="center-block"> Send User Activation Code</h1>
        @include('partials._error_message')
        {!! Form::open(array('route' => 'user.send_activation_code', 'class' => 'sign-up-form')) !!}

            <div class="form-group">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            
            {{ Form::submit('Send', ['class' => 'btn btn-block btn-primary']) }}

        {!! Form::close() !!}
        
    </div>
</div>

@endsection

