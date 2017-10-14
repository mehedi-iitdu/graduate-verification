<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}" />
        <title>OGVS</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    </head>
        <body>
            @include('home_inc.nav')
            <div id="alert" class="text-center">
                @include('flash::message')
            </div>
            @yield('content')
            @include('home_inc.footer')

        <script src="{{asset('js/jquery.slimscroll.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>

        @yield('script')
        <script>
            $('div.alert').not('.alert-important').delay(10000).fadeOut(350);
        </script>
    </body>
</html>

