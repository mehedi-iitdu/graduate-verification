<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{!! csrf_token() !!}" />
        <title>OGVS</title>
        
        {{-- Font awesome cdn --}}
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"> --}}
        
        <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"> --}}
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/datatables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        
        @yield('css')

    </head>
    <body>
        @include('inc.navbar')

        @if(Auth::user()->isUGC())
            @include('inc.ugc_side_navbar')

        @elseif(Auth::user()->isRegistrar())
            @include('inc.registrar_side_navbar')

        @elseif(Auth::user()->isProgramOffice())
            @include('inc.po_side_navbar')

        @elseif(Auth::user()->isSystemAdmin())
            @include('inc.side_navbar')
        
        @endif
        
        <div class="container-fluid">

             <div class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <div id="alert" class="text-center col-md-6" style="margin: 0 auto;">
                    @include('flash::message')
                </div>
             </div>

            @yield('content')
        </div>

        {{-- cdn js --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



        {{-- Custom js --}}
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


        {{-- MDBootstrap JS --}}
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>

        {{-- Compiled JS --}}
       {{--  <link rel="stylesheet" type="text/css" href="{{asset('js/app.js')}}"> --}}

        @yield('script')
        <script>
            $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
            var selector = '.nav-link';

            $(selector).on('click', function(){
                $(selector).removeClass('active');
                $(this).addClass('active');

            });
        </script>
    </body>
</html>