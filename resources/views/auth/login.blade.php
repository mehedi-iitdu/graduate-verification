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
                <h1>Login</h1>
                <form class="sign-up-form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="form-control-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email"> 
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label><input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <div class="pull-right"><a href="reset_password" class="btn btn-link">Forgot password?</a></div>
            </div>
        </div>

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>