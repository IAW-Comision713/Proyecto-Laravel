<html>    
    <head>
        
        <title>

            @yield('title')
            
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="shortcut icon" href="img/favicon.ico">
        
        <link type="text/css" rel="stylesheet" href="css/materialize.css">
        <link id="estilo" type="text/css" rel="stylesheet" href="css/estilo1.css" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        @yield('css')

        
        <script language="javascript" src="js/jquery-3.2.1.js"></script>
        <script language="javascript" src="js/materialize.js"></script>
        <script language="javascript" src="js/funcionesJavaScript.js"></script>

        @yield('scripts')
        
    </head>
    <body>
        <nav class="transparent">
            <div class="nav-wrapper container">
                <a href="{{ route('home') }}" class="brand-logo"><img id="img-logo" src="img/logo.png" alt="logo">Clock</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/readme">Readme</a></li>
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-button" data-activates="dropdown">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul id="dropdown" class="dropdown-content">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    <li><a id="btnEstilo" class='dropdown-button btn darken-4' href='#' data-activates='dropdownestilos'>Estilo</a>
                    
                        <ul id='dropdownestilos' class='dropdown-content'>
                            <li><a href="javascript:cambiarestilo(1);">Estilo 1</a></li>
                            <li><a href="javascript:cambiarestilo(2);">Estilo 2</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>

        @yield('content')

    </body>
</html>