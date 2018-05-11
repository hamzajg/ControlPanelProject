 <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CréArt') }}</title>

    <!-- Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.min.css"> -->
    
    <link href="{{asset('layouts/app/css/bootstrap_layout_app.min.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <script src="{{asset('/layouts/app/vendor/jquery/jquery.min.js')}}"></script>

    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Se connecter</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                        @else
                            <li class="dropdown">
                                <a href="{{URL('/')}}">Accueil 
                                </a>
                            </li>

                            <li class="dropdown">
                                  @if(Auth::user()->role == true)
                                   <li><a href="{{route('admin.index')}}">Gestions</a></li>
                                  @endif
                                   
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    
  <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->


    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/layouts/app/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- Plugin JavaScript -->
    <script src="{{asset('/layouts/app/js/jquery.easing.min.js')}}" ></script>
 

    <!-- Theme JavaScript -->
    <script src="{{asset('/layouts/app/js/agency.min.js')}}"></script>
    @yield('js')
</body>
</html>
