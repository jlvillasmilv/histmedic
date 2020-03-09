@extends('layouts.main')
@section('title', ' Usuario de Sistema')
@section('content')
<div class="panel panel-primary">
        <div class="panel-heading">
                  <a class="pull-right" href="{{ url('/user') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro de Usuario de Sistema
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{route((!isset($users))  ? 'user.store' : 'user.update', $id)}}">
                        {{ csrf_field() }}

                        @if(isset($users))
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="id" id="id" value="{{$id}}">
                        {{ method_field('PUT') }}
                        @endif

                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            <label for="user_name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{(isset($users))  ? $users->user_name : old('user_name')}} " required autofocus>

                                @if ($errors->has('user_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{(isset($users))  ? $users->name : old('name')}} " required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{(isset($users))  ? $users->email : old('email')}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                       

                             {!! Form::select('type', ['A' => 'Administrador', 'C' => 'Consulta'], (isset($users))  ? $users->type : 'A', array( 'class' => 'form-control selectpicker')) !!}
  


                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-block mb-2">{{(!isset($users))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                                
                            </div>
                        </div>
            </form>
        </div>
    </div>
@endsection
