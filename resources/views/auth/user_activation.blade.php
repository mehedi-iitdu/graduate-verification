<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OGVS</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
    	
        <div class="jumbotron col-md-6" style="margin:auto">
            <div class="sign-up">
                <h1>User Activation</h1>
                {!! Form::open(array('route' => 'user.activation', 'class' => 'sign-up-form')) !!}

                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('activation_code', 'Activation Code') }}
                        {{ Form::text('activation_code', null, ['class' => 'form-control', 'required']) }}
                    </div>
                    {{ Form::submit('Activate', ['class' => 'btn btn-block btn-primary']) }}

                {!! Form::close() !!}
                
            </div>
        </div>

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>