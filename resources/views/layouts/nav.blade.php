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

        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
         <ul class=" nav navbar-nav navbar-left">
         <li><a href="{{ url('/home') }}"><img  class="img-responsive" style="height: 30px"  src="{{ asset('/img/LogoPDI2.jpg') }}"></a></li>
          </ul>
            <!-- Left Side Of Navbar -->
        @if (Auth::guest())




        @else


             @if(Auth::user()->type=='A')
             @include('layouts.nav_admin')
             @endif

             @if(Auth::user()->type=='C')
              @include('layouts.nav_usu')
             @endif


        @endif
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Ingresar</a></li>
                    {{--  <li><a href="{{ url('/register') }}">Registro</a></li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('user.show', Auth::user()->id) }}">Cambio de Clave</a></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>