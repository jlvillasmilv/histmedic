
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    &nbsp;
                @else
                    <li><a href="{{ url('/home') }}">Inicio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registro <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                             <li><a href="{{ route('format_zung.index') }}">Registrar Encuesta</a></li>
                           

                        </ul>
                    </li>

                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Listados y Reportes <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           

                        </ul>
                    </li>

                   

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sistema <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->type=='A')
                             <li><a href="{{ route('user.index') }}">Registro Usuario</a></li>
                              @endif

                             
                            
                        </ul>
                    </li>
                @endif
            </ul>
