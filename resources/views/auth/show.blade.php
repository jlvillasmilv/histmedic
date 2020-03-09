@extends('layouts.main')
@section('title', 'Usuarios Registrados')
@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
       Usuarios Registrados <a class="pull-right" href="{{ route('user.index') }}" ><i class="btn btn-default btn-sm fa fa-arrow-left" aria-hidden="true"></i></a>
    </div>

<div class="panel-body">
        <table class="table table-bordered table-striped">
            <tbody>
            	<tr>
                    <th>
                       # Usuario
                    </th>
                    <td>
                        {{ $data->user_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                       # Correo
                    </th>
                    <td>
                        {{ $data->email }}
                    </td>
                </tr>
            	<tr>
                    <th>
                       Nombre 
                    </th>
                    <td>
                        {{ $data->name }} 
                    </td>
                </tr>
              
            </tbody>
        </table>
       <hr>
    </div>    

</div>

<hr>


<div class="panel panel-primary">
    <div class="panel-heading">
       Registros transcritos
    </div>

<div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Modulo</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                       <a href="{{ route('ecorp.index') }}">Ecocardiograma RP</a>
                    </th>
                    <td>
                        {{ $data->ecorp->count()}}
                    </td>
                </tr>
               <tr>
                    <th>
                       <a href="{{ route('sf36.index') }}"> Encuesta SF36</a>
                    </th>
                    <td>
                        {{ $data->sf36->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('encuesta_tercera_edad.index') }}">Encuesta Tercera Edad</a>
                    </th>
                    <td>
                        {{ $data->terceraEdad->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('zung.index') }}">Encuesta Zung</a>
                    </th>
                    <td>
                        {{ $data->zung->count()}}
                    </td>
                </tr>
                 <tr>   
                    <th>
                        <a href="{{ route('entrevista_familiar.index') }}">Entrevista Familiar</a>
                    </th>
                    <td>
                        {{ $data->familyInterview->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('entrevista_segumiento.index') }}">Entrevista Seguimiento</a>
                    </th>
                    <td>
                        {{ $data->followInterview->count()}}
                    </td>
                </tr>
                 <tr> 
                    <th>
                       <a href="{{ route('version1.index') }}">Evaluacion Cardiovascular 1</a>
                    </th>
                    <td>
                        {{ $data->cardiovascularV1->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('version2.index') }}">Evaluacion Cardiovascular 2</a>
                    </th>
                    <td>
                        {{ $data->cardiovascularV2->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('evaluacion_core.index') }}">Evaluación Neuropsicologica CORE</a>
                    </th>
                    <td>
                        {{ $data->coreEvaluation->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('holter.index') }}">Holter</a>
                    </th>
                    <td> 
                        {{ $data->holter->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('labrp.index') }}">Laboratorio RP</a>
                    </th>
                    <td>
                        {{ $data->laboratoryRP->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('en1f.index') }}">Neuropsiquiatrica 1er Formato</a>
                    </th>
                    <td>
                        {{ $data->En1f->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('en2f.index') }}">Neuropsiquiatrica 2do Formato</a>
                    </th>
                    <td>
                        {{ $data->En2f->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('en3f.index') }}">Neuropsiquiatrica 3er Formato</a>
                    </th>
                    <td>
                        {{ $data->En3f->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('en4f.index') }}">Neuropsiquiatrica 4to Formato</a>
                    </th>
                    <td>
                        {{ $data->En4f->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('format1.index') }}">Toma de PA Sentado y de Pie</a>
                    </th>
                    <td>
                        {{ $data->paFormat1->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('format2.index') }}">PA acostado de pie</a>
                    </th>
                    <td> 
                        {{ $data->paFormat2->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('format3.index') }}">PA Sentado acostado de pie</a>
                    </th>
                    <td>
                        {{ $data->paFormat3->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('deceased_patient.index') }}">Paciente Fallecido</a>
                    </th>
                    <td> 
                        {{ $data->deceasedPatient->count()}}
                    </td>
                </tr>
                 <tr>
                    <th>
                       <a href="{{ route('prueba_esfuerzo.index') }}">Prueba de Esfuerzo</a>
                    </th>
                    <td>
                        {{ $data->effortTest->count()}}
                    </td>
                </tr>

                 <tr>
                    <th>
                       <b>Total</b>
                    </th>
                    <td>
                        {{ $data->ecorp->count() + $data->sf36->count() + $data->terceraEdad->count() + $data->familyInterview->count() + $data->followInterview->count() + $data->cardiovascularV1->count() + $data->cardiovascularV2->count() + $data->coreEvaluation->count() +  $data->holter->count() + $data->laboratoryRP->count() +  $data->En1f->count() +  $data->En2f->count() +  $data->En3f->count() +  $data->En4f->count() + $data->paFormat1->count() + $data->paFormat2->count() + $data->paFormat3->count() +  $data->deceasedPatient->count() + $data->effortTest->count() }}
                    </td>
                </tr>

              
            </tbody>
        </table>
       <hr>
    </div>    

</div>

@endsection