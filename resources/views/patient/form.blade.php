@extends('layouts.main')
@section('title', ' Pacientes')
@section('content')
    <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ url('/pacient') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro de Pacientes</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{route((!isset($patients))  ? 'pacient.store' : 'pacient.update', $id)}}">
                        {{ csrf_field() }}

                        @if(isset($patients))
                        <input type="hidden" name="_method" value="put">
                         <input type="hidden" name="id" id="id" value="{{$id}} ">
                        {{ method_field('PUT') }}
                        @endif

                        <div class="form-group{{ $errors->has('hist_id') ? ' has-error' : '' }}">
                            <label for="hist_id" class="col-md-4 control-label"># Historia</label>

                            <div class="col-md-6">
                                <input id="hist_id" type="text" class="form-control" name="hist_id" value="{{(isset($patients))  ? $patients->hist_id : old('hist_id')}} " required="" placeholder="Numero de Historia" autofocus="">

                                @if ($errors->has('hist_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hist_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }} ">
                            <label for="cedula" class="col-md-4 control-label">Cedula</label>

                            <div class="col-md-1 div-pad">
                       
                             {!! Form::select('nac', ['V' => 'V', 'E' => 'E'], (isset($patients))  ? $patients->nac : 'V', array( 'class' => 'form-control ')) !!}
                              </div>
                            <div class="col-md-4 div-pad">
                                <input id="cedula" type="text" maxlength="9" class="form-control" name="cedula" value="{{(isset($patients))  ? $patients->cedula : old('cedula')}} " required>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">1er Nombre</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{(isset($patients))  ? $patients->first_name : old('first_name')}} " required >

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('second_name') ? ' has-error' : '' }}">
                            <label for="second_name" class="col-md-4 control-label">2do. Nombre</label>

                            <div class="col-md-6">
                                <input id="second_name" type="text" class="form-control" name="second_name" value="{{(isset($patients))  ? $patients->second_name : old('second_name')}} " required >

                                @if ($errors->has('second_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">1er Apellido</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{(isset($patients))  ? $patients->last_name : old('last_name')}} " required >

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('second_last_name') ? ' has-error' : '' }}">
                            <label for="second_last_name" class="col-md-4 control-label">2do. Apellido</label>

                            <div class="col-md-6">
                                <input id="second_last_name" type="text" class="form-control" name="second_last_name" value="{{(isset($patients))  ? $patients->second_last_name : old('second_last_name')}} " required >

                                @if ($errors->has('second_last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('second_last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     
                         <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                             <textarea placeholder="Direccion"  id="adress" class="form-control" name="adress" maxlength="250" >{{(isset($patients))  ? $patients->adress : old('adress')}}</textarea>
                                

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_birth') ? ' has-error' : '' }}">
                            <label for="date_birth" class="col-md-4 control-label">Fecha Nacimiento</label>

                            <div class="col-md-6">
                                <input id="date_birth" type="date" class="form-control" name="date_birth" value='{{(isset($patients)) ? date("Y-m-d", strtotime($patients->date_birth)) : old("date_birth") }}' required=""  >
                                    
                                @if ($errors->has('date_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state_country') ? ' has-error' : '' }}">
                            <label for="state_country" class="col-md-4 control-label">Estado Pais</label>

                            <div class="col-md-6">
                                <input id="state_country" type="text" class="form-control" name="state_country" value="{{(isset($patients))  ? $patients->state_country : old('state_country')}} " required >

                                @if ($errors->has('state_country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city_born') ? ' has-error' : '' }}">
                            <label for="city_born" class="col-md-4 control-label">Cuidad Nac. </label>

                            <div class="col-md-6">
                                <input id="city_born" type="text" class="form-control" name="city_born" value="{{(isset($patients))  ? $patients->city_born : old('city_born')}} " placeholder="Cuidad de nacimiento" required >

                                @if ($errors->has('city_born'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_born') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-2">
                                 {!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Femenino'], (isset($patients))  ? $patients->gender : 'M', array( 'class' => 'form-control ')) !!}

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="ethnicity" class="col-md-2 control-label">Raza</label>

                              <div class="col-md-2">
                                 {!! Form::select('ethnicity', ['1' => '1: Mezclado', '2' => '2: Blanco', '3' => '3: Negro', '4' => '4: Indígena', '5' => '5: Asiático'], (isset($patients))  ? $patients->ethnicity : '1', array( 'class' => 'form-control ')) !!}

                                @if ($errors->has('ethnicity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>


                         <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($patients))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                    </form>
                </div>
            </div>
@endsection

@push('scripts')
<script type="text/javascript">
    

$(document).ready(function(){

    $('#hist_id').mask("999999999");
    $('#cedula').mask("99999999");

}); 


</script>
@endpush


