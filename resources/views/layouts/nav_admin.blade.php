
            <ul class="nav navbar-nav navbar-left">
                @if (Auth::guest())
                    &nbsp;
                @else

                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Historias Medicas <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('ecorp.index') }}">Ecocardiograma RP</a></li>
                            <li><a href="{{ route('sf36.index') }}"> Encuesta SF36</a></li>
                            <li><a href="{{ route('encuesta_tercera_edad.index') }}">Encuesta Tercera Edad</a></li> 
                            <li><a href="{{ route('zung.index') }}">Encuesta Zung</a></li>
                            <li><a href="{{ route('entrevista_familiar.index') }}">Entrevista Familiar</a></li>
                            <li><a href="{{ route('entrevista_segumiento.index') }}">Entrevista Seguimiento</a></li> 
                            <li><a href="{{ route('version1.index') }}">Evaluacion Cardiovascular 1</a></li>
                            <li><a href="{{ route('version2.index') }}">Evaluacion Cardiovascular 2</a></li>
                            <li><a href="{{ route('evaluacion_core.index') }}">Evaluación Neuropsicologica CORE</a></li>
                            <li><a href="{{ route('holter.index') }}">Holter</a></li>
                            <li><a href="{{ route('labrp.index') }}">Laboratorio RP</a></li>
                            <li><a href="{{ route('en1f.index') }}">Neuropsiquiatrica 1er Formato</a></li>  
                            <li><a href="{{ route('en2f.index') }}">Neuropsiquiatrica 2do Formato</a></li>
                            <li><a href="{{ route('en3f.index') }}">Neuropsiquiatrica 3er Formato</a></li>
                            <li><a href="{{ route('en4f.index') }}">Neuropsiquiatrica 4to Formato</a></li>
                            <li><a href="{{ route('format1.index') }}">Toma de PA Sentado y de Pie</a></li>
                            <li><a href="{{ route('deceased_patient.index') }}">Paciente Fallecido</a></li>
                            <li><a href="{{ route('format2.index') }}">PA acostado de pie</a></li>
                            <li><a href="{{ route('format3.index') }}">PA Sentado acostado de pie</a></li>
                            <li><a href="{{ route('prueba_esfuerzo.index') }}">Prueba de Esfuerzo</a></li>


                        </ul>

                    
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Paciente <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="{{ route('pacient.index') }}">Registro Paciente</a></li>
                           
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




<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>

