<html>    
    <head>
        
        <title>

            @yield('title')
            
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <link href="{{ asset('css/materialize.css') }}" rel="stylesheet"> 
        <link id="estilo" href="{{ asset('css/estilo1.css') }}" rel="stylesheet"> 

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        @yield('css')

        <script>
            var assetBaseUrl = "{{ asset('') }}";
        </script>

        <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jsbase.js') }}"></script>                


        @yield('scripts')
        
    </head>
    <body>
        <nav class="white">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo"><img id="img-logo" src="{{ asset('img/logo.png') }}" alt="logo">Clock</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/diseno">Diseño</a></li>
                    
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrate</a></li>
                                                           
                        @else
                            @if (Auth::id()==1)
                                <li><a href="{{ route('editar') }}">Editar Partes</a></li> 
                            @endif
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
                    <li><a href="/readme">Readme</a></li>
                    <li><a id="btnEstilo" class='dropdown-button btn darken-4' href='#' data-activates='dropdownestilos'>Estilo</a>
                    
                        <ul id='dropdownestilos' class='dropdown-content'>
                            <li><a href="javascript:cambiarestilo(1);">Estilo 1</a></li>
                            <li><a href="javascript:cambiarestilo(2);">Estilo 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a id="btnPopup" class="btn-floating waves-effect waves-light darken-4" onclick="mostrarPopup()"><i class="material-icons">info_outline</i></a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        @yield('content')

    </body>
</html>