@extends('layouts.main')
@section('title', 'Registro de Formatos')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{route('format_zung.index')}}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro de Encuesta Zung</div>
                <div class="panel-body">
                    <form id="formZung" data-smk-icon="glyphicon-remove-sign" class="form-horizontal" role="form" method="POST" action="{{route('format_zung.store')}}">
                        {{ csrf_field() }}

                       
                        <div class="form-group{{ $errors->has('format_id') ? ' has-error' : '' }}">
                            <label  for="format_id" class="col-md-2 control-label">Formato</label>

                            <div class="col-md-8">
                             <select  name="format_id" id="format_id" class="form-control selectpicker " data-live-search='true' required>
                            @foreach ($format as $formt)
                             <option value='{{ $formt->format_id }}'> {{ $formt->name }} {{ $formt->version }} </option>
                             @endforeach
                              </select>

                                         @if ($errors->has('format_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('format_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            

                        </div>

                        <div class="form-group{{ $errors->has('patient_id') ? ' has-error' : '' }}">
                            <label  for="patient_id" class="col-md-2 control-label">Paciente</label>

                            <div class="col-md-8">
                             <select  name="patient_id" id="patient_id" class="form-control selectpicker " data-live-search='true' required>
                              </select>

                                         @if ($errors->has('patient_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('patient_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>


                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-2 control-label">Nombres</label>

                            <div class="col-md-5">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre')}} " required  readonly="">

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="date_evaluation" class="col-md-2 control-label">Fecha</label>

                             <div class="col-md-2">
                                <input id="date_evaluation" type="date" class="form-control" name="date_evaluation"  value="<?php echo date("Y-m-d");?>" requiered>

                                @if ($errors->has('date_evaluation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_evaluation') }}</strong>
                                    </span>
                                @endif
                            </div>
         
                        </div>
                        
                         <div class="form-group{{ $errors->has('hist_id') ? ' has-error' : '' }}">
                            
                        <label for="hist_id" class="col-md-2 control-label"># Historia</label>

                            <div class="col-md-2">
                                <input id="hist_id" type="number" data-smk-type="number" min=1 max=9999999999 class="form-control" name="hist_id" value="{{ old('hist_id')}} " required readonly="">

                                @if ($errors->has('hist_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hist_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-1 control-label"></label>

                          <div class="col-md-10 col-sm-10">
                                
                                <textarea placeholder="Descripccion del Formato"  id="description" class="form-control" rows="3" readonly="readonly" name="description" maxlength="450"  >{{old('description')}}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                          </div>

                        </div>

            
                      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">

                        <thead style="background-color:#f5f5f5">
                            <th style="width: 1%"></th>
                            <th style="width: 80%"></th>
                            <th style="width: 1%"></th>
                            <th style="width: 10%"></th>
                        </thead>


                        </table>

                         <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                            
                        <label for="total" class="col-md-11 control-label"> Total</label>

                            <div class="col-md-1">
                            <input id="total" disabled class="form-control" name="hist_id" value=0 required >

                                
                            </div>

                        </div>
                        
                        <div class="form-group" id='guardar'>
                            <div class="col-md-8 col-md-offset-2 ">
                                <button id="btnR" type="submit"  class="btn btn-primary btn-block mb-2">Registrar</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style type="text/css">
input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {

    -moz-appearance:textfield;
}

th,td {

    text-align: left;
}

</style>

@endsection


@push('scripts')
<script type="text/javascript" src="{{ asset('js/format_zung.js')}}"></script>
@endpush



@endsection



