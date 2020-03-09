@extends('layouts.main')
@section('title', ' Pacientes')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ url('/deceased_patient') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro de Pacientes</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('deceased_patient.update',  $data->id) : route('deceased_patient.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                       @include('patient.patient')

                        <div class="form-group{{ $errors->has('nom_infor') ? ' has-error' : '' }}">
                            <label for="nom_infor" class="col-md-4 control-label">Nombre  del Informante</label>

                            <div class="col-md-6">
                                <input id="nom_infor" type="text" class="form-control" name="nom_infor" value="{{(isset($data))  ? $data->nom_infor : old('nom_infor')}} " required >

                                @if ($errors->has('nom_infor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom_infor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('parentesco') ? ' has-error' : '' }}">
                            <label for="parentesco" class="col-md-4 control-label">(Parentesco):</label>

                            <div class="col-md-6">
                                <input id="parentesco" type="text" class="form-control" name="parentesco" value="{{(isset($data))  ? $data->parentesco : old('parentesco')}} " required >

                                @if ($errors->has('parentesco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parentesco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ed_morte') ? ' has-error' : '' }}">
                            <label for="ed_morte" class="col-md-4 control-label">Edad de muerte:</label>

                            <div class="col-md-6">
                                <input id="ed_morte" type="text" class="form-control" name="ed_morte" value="{{(isset($data))  ? $data->ed_morte : old('ed_morte')}}" required >

                                @if ($errors->has('ed_morte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ed_morte') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('fech_morte') ? ' has-error' : '' }}">
                            <label for="fech_morte" class="col-md-4 control-label">Fecha de muerte:</label>

                            <div class="col-md-6">
                                <input placeholder="Año-mes-dia" id="fech_morte" type="date" class="form-control" name="fech_morte" value='{{(isset($data)) && strtotime($data->fech_morte) != false  ? date("Y-m-d", strtotime($data->fech_morte)) : "0001-01-01" }}' required=""  >
                                           
                                @if ($errors->has('fech_morte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fech_morte') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lug_morte') ? ' has-error' : '' }}">
                            <label for="lug_morte" class="col-md-4 control-label">Lugar de muerte:</label>

                            <div class="col-md-6">
                              
                              <input type="text" class="form-control" name="lug_morte" value="{{(isset($data))  ? $data->lug_morte : old('lug_morte')}}" maxlength="">

                                @if ($errors->has('lug_morte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lug_morte') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('caus_morte') ? ' has-error' : '' }}">
                            <label for="caus_morte" class="col-md-4 control-label">Causa de muerte:</label>



                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="caus_morte" value="{{(isset($data))  ? $data->caus_morte : old('caus_morte')}}" maxlength="50">

                            <!--   <select  name="caus_morte" id="caus_morte" class="form-control selectpicker " data-live-search='true' required>
                                <option value="Muerte Súbita">Muerte Súbita</option>
                                <option value="Hospitalizados días antes de morir">Hospitalizados días antes de morir</option>
                                <option value="Enfermo días antes de morir">Enfermo días antes de morir</option>
                              </select> -->

                                @if ($errors->has('caus_morte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('caus_morte') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lug_vela') ? ' has-error' : '' }}">
                            <label for="lug_vela" class="col-md-4 control-label">Lugar del velatorio:</label>

                            <div class="col-md-6">
                                <input id="lug_vela" type="text" class="form-control" name="lug_vela" value="{{(isset($data))  ? $data->lug_vela : old('lug_vela')}} " required >

                                @if ($errors->has('lug_vela'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lug_vela') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fech_entrev') ? ' has-error' : '' }}">
                            <label for="fech_entrev" class="col-md-4 control-label">Fecha:</label>

                            <div class="col-md-6">
                                <input placeholder="Año-mes-dia" id="fech_entrev" type="date" class="form-control" name="fech_entrev" value='{{(isset($data)) && strtotime($data->fech_entrev) != false  ? date("Y-m-d", strtotime($data->fech_entrev)) : "0001-01-01" }}' required=""  >

                                @if ($errors->has('fech_entrev'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fech_entrev') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Entrevistador') ? ' has-error' : '' }}">
                            <label for="Entrevistador" class="col-md-4 control-label">Responsable de transcribir los datos:</label>

                            <div class="col-md-6">
                                <input id="Entrevistador" type="text" class="form-control" name="Entrevistador" value="{{(isset($data))  ? $data->Entrevistador : old('Entrevistador')}} " required >

                                @if ($errors->has('Entrevistador'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Entrevistador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                           <div class="form-group{{ $errors->has('Obs_Hist_Fallecido') ? ' has-error' : '' }}">
                            <label for="Obs_Hist_Fallecido" class="col-md-4 control-label">Observacion:</label>

                            <div class="col-md-6">
                                
                                <textarea class="form-control" name="Obs_Hist_Fallecido" id="Obs_Hist_Fallecido" cols="30" rows="5" maxlength="150">{{ isset($data) ? $data->Obs_Hist_Fallecido :  old('Obs_Hist_Fallecido') }}</textarea>

                                @if ($errors->has('Obs_Hist_Fallecido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Obs_Hist_Fallecido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/fecha.js')}}"></script>
<script type="text/javascript">
    

$(document).ready(function(){

   //$("#fech_morte").datepicker();
   //$("#fech_entrev").datepicker();

   $('#ed_morte').mask("999");

}); 


</script>
@endpush


