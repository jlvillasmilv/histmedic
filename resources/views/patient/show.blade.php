@extends('layouts.main')
@section('title', ' Pacientes')
@section('content')


<div class="panel panel-primary">
    <div class="panel-heading">
       Paciente <a class="pull-right" href="{{ url('/pacient') }}" ><i class="btn btn-default btn-sm fa fa-arrow-left" aria-hidden="true"></i></a></div>
    </div>

        <table class="table table-bordered table-striped">
            <tbody>
            	<tr>
                    <th>
                       # Historia Medica 
                    </th>
                    <td>
                        {{ $patients->hist_id }}
                    </td>
                </tr>
            	<tr>
                    <th>
                       Cedula 
                    </th>
                    <td>
                        {{ $patients->nac }} {{ $patients->cedula }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Nombre 
                    </th>
                    <td>
                        {{ $patients->first_name }} {{ $patients->second_name }} {{ $patients->last_name }} {{ $patients->second_last_name }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Fecha Nacimiento 
                    </th>
                    <td>
                        {{ date('d/m/Y', strtotime($patients->date_birth)) }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Pais/Ciudad 
                    </th>
                    <td>
                        {{ $patients->state_country }} 
                    </td>
                </tr>
                <tr>
                    <th>
                       Direccion 
                    </th>
                    <td>
                        {{ $patients->adress }} 
                    </td>
                </tr>
                <tr>
                    <th>
                       Lugar de nacimiento 
                    </th>
                    <td>
                        {{ $patients->city_born }} 
                    </td>
                </tr>

                <tr>
                    <th>
                       Registrado por: 
                    </th>
                    <td>
                        {{ $patients->user->name }} 
                    </td>
                </tr>
              
            </tbody>
        </table>
</div>

@endsection