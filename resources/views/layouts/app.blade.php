<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OGVS</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    <body>
    	@include('inc.navbar')
        <div class="container">
        	@yield('content')
        </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>