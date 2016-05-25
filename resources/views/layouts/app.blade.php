<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lifetutor</title>

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav id="navbar" class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="col-sm-12">
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
                        <i class="fa fa-road"></i> Lifetutor
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('browse') }}">Browse</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p class="lead"><i class="fa fa-road"></i> Lifetutor</p>
                    <p>About lifetutor</p>
                </div>
                <div class="col-sm-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li><span class="text-capitalize">Foo</span></li>
                        <li><a href="#">foo</a></li>
                        <li><a href="#">bar</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li><span class="text-capitalize">Foo</span></li>
                        <li><a href="#">foo</a></li>
                        <li><a href="#">bar</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    Something
                </div>
            </div>
            <hr>
            <div class="col-sm-12">
                <span class="pull-left">&copy 2016 wunderfactory</span>
                <span class="pull-right">Some other thing</span>
            </div>
        </div>
    </footer>
    <!-- JavaScripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
