@extends('layouts.main')
@section('title', 'Registro de Formatos')

@section('content')

    <div class="panel panel-primary">
        <div class="panel-heading">
                  <a class="pull-right" href="{{route('sf36.index')}}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Encuesta SF36</div>
                <div class="panel-body" id="main">
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('sf36.update',  $data->sf36_id) : route('sf36.store') }}">
                        {{ csrf_field() }}

                         @if(isset($data))  {{ method_field('PUT') }}   @endif

                      @include('patient.patient')

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-2 control-label">Nombre y Apellido</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre y apellido del paciente" readonly="">

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <label for="hist_id" class="col-md-1 control-label"># Historia</label>

                            <div class="col-md-2">
                                <input id="hist_id" type="text" data-smk-type="number" class="form-control" name="hist_id" value="{{old('hist_id')}}" readonly="">

                                @if ($errors->has('hist_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hist_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        
                         <div class="form-group{{ $errors->has('datsf36') ? ' has-error' : '' }}">

                             <label for="gender" class="col-md-1 control-label">Sexo:</label>

                             <div class="col-md-1">
                                <input id="gender" type="text" class="form-control" name="gender" value="{{old('gender')}} "  readonly="">

                            </div>

                            <label for="age" class="col-md-1 control-label">Edad:</label>

                             <div class="col-md-1">
                                <input id="age" type="text" class="form-control" name="age" >

                            </div>


                            <label for="datsf36" class="col-md-1 control-label">Fecha:</label>

                             <div class="col-md-2">
                                
                                 <input id="datsf36" type="date" class="form-control" name="datsf36"  value='{{(isset($data)) && strtotime($data->datsf36) != false  ? date("Y-m-d", strtotime($data->datsf36)) : old("datsf36",date("Y-m-d")) }}' required="">

                                @if ($errors->has('datsf36'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datsf36') }}</strong>
                                    </span>
                                @endif
                            </div>

                             <label for="sf_encuestador" class="col-md-1 control-label">Encuestador:</label>

                             <div class="col-md-3">

                                <input  class="form-control" id="sf_encuestador" name="sf_encuestador" type="text" required="" value="{{(isset($data))  ? $data->sf_encuestador : old('sf_encuestador')}}"> </td>

                                @if ($errors->has('sf_encuestador'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf_encuestador') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        </div>

                       <div class="form-group">
                          <label for="description" class="col-md-11 control-label"><b>Estas primeras preguntas  se refieren a su salud actual y a sus actividades diarias. Por favor conteste cada pregunta lo más exactamente posible.</b></label>

                        </div>

                      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">

                           <tr>
                            <th style="vertical-align:middle;" rowspan="3"><b>01</b></th>
                            <td style="width:40%; vertical-align:middle;text-align: justify; " rowspan="3">En general, usted diría que su salud es...
                             @if ($errors->has('sf1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf1') }}</strong>
                                    </span>
                                @endif
                              </td>

                           <tr>
                            <th >Excelente</th>
                            <th >Muy buena</th>
                            <th >Buena</th>
                            <th >Regular</th>
                            <th >Mala</th>
                          </tr>

                          <tr> 

                            <th style="width:10%; vertical-align:middle;"> 1 
                              <input type='radio' {{ old('sf1',isset($data) && $data->sf1 == 1) == 1  ? 'checked=""' : ''}}   value="1" id="sf1" name="sf1"  required >
                             </th>
                            <th style="width:12%; vertical-align:middle;"> 2
                             <input type='radio' {{ old('sf1',isset($data) && $data->sf1 == 2) == 2  ? 'checked=""' : ''}} value="2" id="sf1" name="sf1"  required >
                             </th>
                            <th style="width:12%; vertical-align:middle;"> 3 
                              <input type='radio' {{ old('sf1',isset($data) && $data->sf1 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf1" name="sf1"  required >
                             </th>
                            <th style="width:12%;">4 
                              <input type='radio' {{ old('sf1',isset($data) && $data->sf1 == 4) == 4  ? 'checked=""' : ''}} value="4" id="sf1" name="sf1" required >
                            </th>
                            <th style="width:12%">5 <input type='radio' {{ old('sf1',isset($data) && $data->sf1 == 5) == 5  ? 'checked=""' : ''}} value="5" id="sf1"  name="sf1" required ></th>
                            </tr>
                            

                        <tbody>
                          <tr>
                            
                          <td style="vertical-align:middle;"><b>02</b></td>
                            <td style="width:40%;  vertical-align:middle;text-align: justify;">Comparando su salud con la de hace un año, ¿Cómo calificaría su salud en general ahora?</td>
                            <td colspan="5" style="text-align: left; vertical-align:middle;">

                               @if ($errors->has('sf2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf2') }}</strong>
                                    </span>
                                @endif
                              <p>
                              <input type='radio' 
                                {{ old('sf2',isset($data) && $data->sf2 == 1) == 1  ? 'checked=""' : ''}}
                                value="1" id="sf2" name="sf2"  required > [1] Mucho mejor ahora que hace un año
                              </p>
                              <p>
                              <input type='radio'{{ old('sf2',isset($data) && $data->sf2 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf2" name="sf2" required > [2] Un poco mejor ahora que hace un año
                              </p>

                              <p>
                                <input type='radio' {{ old("sf2",isset($data) && $data->sf2 == 3) == 3  ? 'checked=""' : ''}} value="3" id="sf2" name="sf2" required > [3] Igual que hace un año
                              </p>

                              <p><input type='radio' {{ old("sf2",isset($data) && $data->sf2 == 4) == 4  ? 'checked=""' : ''}}   value="4" id="sf2" name="sf2" onclick='respuesta("sf2",4);' required > [4] Un poco peor ahora que hace un año</p>

                              <p>
                                <input type='radio' {{ old("sf2",isset($data) && $data->sf2 == 5) == 5  ? 'checked=""' : ''}} value="5" id="sf2" name="sf2" required > [5] Mucho peor ahora que hace un año</td>
                              </p>

                              </td>

                          </tr>


                          <tr>
                            
                            <td colspan="7" style="text-align: justify; "><b> Ahora voy a leerte una lista de actividades que usted podría hacer durante un día normal. En la medida en que yo vaya leyéndolas, por favor dígame si su salud actual lo limita mucho, lo limita un poco o, no lo limita, para hacer estas actividades.</b></td>


                          </tr>

                          <tr>
                            
                          <td rowspan="3" style="vertical-align:middle;"><b>03</b></td>
                            <td rowspan="3" style="width:40%;  vertical-align:middle; text-align: justify;">En relación con la realización de actividades vigorosas, tales comos correr, cargar objetos pesados, y participar en deportes fuertes, su salud actual...

                            Si la persona refiere que no realiza tales actividades, pregunte:

                            <p> <b> “Esto es debido a que su salud… </b></p>

                             @if ($errors->has('sf3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf3') }}</strong>
                                    </span>
                                @endif
                            </td>

                          </tr>

                            <tr>
                            <th colspan="2"  >Lo limita mucho</th>
                            <th colspan="2" >Lo limita poco</th>
                            <th height="30px">No Lo limita</th>
                           
                          </tr>

                          
                          <tr>
                            <td height="90px" colspan="2" style="text-align: center; vertical-align:middle;"> 1
                              <input type='radio'
                               {{ old("sf3",isset($data) && $data->sf3 == 1) == 1  ? 'checked=""' : ''}} value="1" id="sf3" name="sf3"  required > </td>

                            <td colspan="2"  style="text-align: center; vertical-align:middle;"> 2
                              <input type='radio' {{ old("sf3",isset($data) && $data->sf3 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf3" name="sf3" required >    </td>

                            <td style="text-align: center; vertical-align:middle;"> 3
                              <input type='radio' {{ old("sf3",isset($data) && $data->sf3 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf3" name="sf3" required >  </td>
                              
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>04</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">En cuanto a actividades moderadas, tales como mover una mesa, empujar una aspiradora, jugar bolas criollas, barrer, pasar coleto, su salud actual...

                            Si la persona refiere que no realiza tales actividades, pregunte:

                            <p> <b> “Esto es debido a que su salud… </b></p>

                             @if ($errors->has('sf4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf4') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{ old("sf4",isset($data) && $data->sf4 == 1) == 1  ? 'checked=""' : ''}}  value="1" id="sf4" name="sf4" required > 
                            </td>

                            <td colspan="2" style="vertical-align:middle;"> 2
                              <input type='radio' {{ old("sf4",isset($data) && $data->sf4 == 2) == 2  ? 'checked=""' : ''}} value="2" id="sf4" name="sf4" required >
                            </td>

                            <td style="vertical-align:middle;"> 3
                              <input type='radio' {{ old("sf4",isset($data) && $data->sf4 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf4" name="sf4" required > 
                            </td>
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>05</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Con relación a levantar o cargar las bolsas de las compras del mercado, su salud actual…
                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            @if ($errors->has('sf5'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf5') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{ old("sf5",isset($data) && $data->sf5 == 1) == 1  ? 'checked=""' : ''}}  value="1" id="sf5" name="sf5" required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 2
                              <input type='radio' {{ old("sf5",isset($data) && $data->sf5 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf5" name="sf5" required > 
                            </td>

                            <td style=" vertical-align:middle;"> 3
                              <input type='radio' {{ old("sf5",isset($data) && $data->sf5 == 3) == 3  ? 'checked=""' : ''}} value="3" id="sf5" name="sf5" required > 
                            </td>
                              
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>06</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para subir varios pisos por las escaleras su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf6') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{ old("sf6",isset($data) && $data->sf6 == 1) == 1  ? 'checked=""' : ''}}  value="1" id="sf6" name="sf6" required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 2
                              <input type='radio' {{ old("sf6",isset($data) && $data->sf6 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf6" name="sf6"  required >
                            </td>

                            <td style=" vertical-align:middle;"> 3
                              <input type='radio' {{ old("sf6",isset($data) && $data->sf6 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf6" name="sf6" required >
                            </td>  
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>07</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para subir un piso por las escaleras su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf7'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf7') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{ old("sf7",isset($data) && $data->sf7 == 1) == 1  ? 'checked=""' : ''}}  value="1" id="sf7" name="sf7"  required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 2
                              <input type='radio' {{ old("sf7",isset($data) && $data->sf7 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf7" name="sf7"  required > 
                            </td>

                            <td style=" vertical-align:middle;"> 3
                              <input type='radio' {{ old("sf7",isset($data) && $data->sf7 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf7" name="sf7"  required > 
                            </td>  
                              
                          </tr>

                        <tr>
                            
                          <td style="vertical-align:middle;"><b>08</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para doblarse, arrodillarse o pararse, su salud  actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf8'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf8') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{ old("sf8",isset($data) && $data->sf8 == 1) == 1  ? 'checked=""' : ''}}  value="1" id="sf8" name="sf8"  required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;">2
                              <input type='radio' {{ old("sf8",isset($data) && $data->sf8 == 2) == 2  ? 'checked=""' : ''}}  value="2" id="sf8" name="sf8"  required > 
                            </td>

                            <td style=" vertical-align:middle;">3
                              <input type='radio' {{ old("sf8",isset($data) && $data->sf8 == 3) == 3  ? 'checked=""' : ''}}  value="3" id="sf8" name="sf8"  required > 
                            </td>  
                              
                          </tr>

                       <tr>
                            
                          <td style="vertical-align:middle;"><b>09</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para caminar más de quince cuadras, su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf9'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf9') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;">1
                              <input type='radio' {{(isset($data)) && $data->sf9 == 1  ? 'checked=""' : ''}}  value="1" id="sf9" name="sf9"  required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;">2
                              <input type='radio' {{(isset($data)) && $data->sf9 == 2  ? 'checked=""' : ''}}  value="2" id="sf9" name="sf9"  required >
                            </td>

                            <td style=" vertical-align:middle;">3
                              <input type='radio' {{(isset($data)) && $data->sf9 == 3  ? 'checked=""' : ''}}  value="3" id="sf9" name="sf9" required > 
                            </td>  
                              
                          </tr>


                         <tr>
                            
                          <td style="vertical-align:middle;"><b>10</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para caminar algunas cuadras, su salud actual...

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf10'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf10') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;">1
                              <input type='radio' {{(isset($data)) && $data->sf10 == 1  ? 'checked=""' : ''}}  value="1" id="sf10" name="sf10" required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;">2
                              <input type='radio' {{(isset($data)) && $data->sf10 == 2  ? 'checked=""' : ''}}  value="2" id="sf10" name="sf10" required > 
                            </td>

                            <td style=" vertical-align:middle;">3
                              <input type='radio' {{(isset($data)) && $data->sf10 == 3  ? 'checked=""' : ''}}  value="3" id="sf10" name="sf10" required >
                            </td>  
                              
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>11</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para caminar una cuadra, su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                           @if ($errors->has('sf11'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf11') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;">1
                              <input type='radio' {{(isset($data)) && $data->sf11 == 1  ? 'checked=""' : ''}}  value="1" id="sf11" name="sf11" required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;">2
                              <input type='radio' {{(isset($data)) && $data->sf11 == 2  ? 'checked=""' : ''}}  value="2" id="sf11" name="sf11" required > 
                            </td>

                            <td style=" vertical-align:middle;">3
                              <input type='radio' {{(isset($data)) && $data->sf11 == 3  ? 'checked=""' : ''}}  value="3" id="sf11" name="sf11" required >
                            </td>  
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>12</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: justify;">Para bañarse o vestirse por si solo, su salud actual…
                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>


                           @if ($errors->has('sf12'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf12') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="2" style=" vertical-align:middle;"> 1
                              <input type='radio' {{(isset($data)) && $data->sf12 == 1  ? 'checked=""' : ''}}  value="1" id="sf12" name="sf12"  required > 
                            </td>

                            <td colspan="2" style=" vertical-align:middle;">2
                              <input type='radio' {{(isset($data)) && $data->sf12 == 2  ? 'checked=""' : ''}}  value="2" id="sf12" name="sf12"  required >
                            </td>

                            <td style=" vertical-align:middle;"> 3
                              <input type='radio' {{(isset($data)) && $data->sf12 == 3  ? 'checked=""' : ''}}  value="3" id="sf12" name="sf12" required > 
                            </td>  
                              
                          </tr>

                          <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes cuatro preguntas se refieren a su salud física y a sus actividades diarias.</b></td>
                          </tr>

                      <tr>
                            
                          <td rowspan="3" style="vertical-align:middle;"><b>13</b></td>
                           <td rowspan="3" colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas tuvo que disminuir la cantidad de tiempo que le dedica a su trabajo u otras actividades por causa de su salud física?


                           @if ($errors->has('sf13'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf13') }}</strong>
                                    </span>
                                @endif

                            </td>
                            </tr>

                            <tr>
                            <th colspan="1" style=" vertical-align:middle;">SI</th>

                            <th colspan="1" style=" vertical-align:middle;">NO</th>
                            </tr>


                             <tr>
                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf13 == 1  ? 'checked=""' : ''}}  value="1" id="sf13" name="sf13"  required >1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf13 == 2  ? 'checked=""' : ''}}  value="2" id="sf13" name="sf13" required >2
                            </td>
    
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>14</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, logro hacer menos de lo que quería por causa de su salud física?


                           @if ($errors->has('sf14'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf14') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf14 == 1  ? 'checked=""' : ''}}  value="1" id="sf14" name="sf14" required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf14 == 2  ? 'checked=""' : ''}}  value="2" id="sf14" name="sf14" required > 2
                            </td>
    
                          </tr>
                         
                         <tr>
                            
                          <td style="vertical-align:middle;"><b>15</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, estuvo limitado en el tiempo en el tipo de trabajo o actividades que realizó por causa de su salud física?


                           @if ($errors->has('sf15'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf15') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf15 == 1  ? 'checked=""' : ''}}  value="1" id="sf15" name="sf15" required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf15 == 2  ? 'checked=""' : ''}}  value="2" id="sf15" name="sf15" required > 2
                            </td>
    
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>16</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, tuvo dificultades realizando su trabajo u otras actividades, por causa de su salud física?


                           @if ($errors->has('sf16'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf16') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf16 == 1  ? 'checked=""' : ''}}  value="1" id="sf16" name="sf16"  required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf16 == 2  ? 'checked=""' : ''}}  value="2" id="sf16" name="sf16" required > 2
                            </td>
    
                          </tr>

                           <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes siete preguntas se refieren a sus emociones y a sus actividades diarias.</b></td>
                          </tr>

                          <tr>             
                          <td style="vertical-align:middle;"><b>17</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, tuvo que disminuir la cantidad de tiempo que le dedicó a su trabajo u otras actividades, a causa de sus problemas emocionales tales como sentirse deprimido o ansioso?


                           @if ($errors->has('sf17'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf17') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf17 == 1  ? 'checked=""' : ''}}  value="1" id="sf17" name="sf17"  required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf17 == 2  ? 'checked=""' : ''}}  value="2" id="sf17" name="sf17" required > 2
                            </td>
    
                          </tr>

                           <tr>             
                          <td style="vertical-align:middle;"><b>18</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, logró hacer menos de lo que quería, por causa de sus problemas emocionales tales como sentirse deprimido o ansioso?


                           @if ($errors->has('sf18'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf18') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf18 == 1  ? 'checked=""' : ''}}  value="1" id="sf18" name="sf18" required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf18 == 2  ? 'checked=""' : ''}}  value="2" id="sf18" name="sf18" required > 2
                            </td>
    
                          </tr>

                          <tr>             
                          <td style="vertical-align:middle;"><b>19</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, no ha trabajado tan cuidadosamente como de costumbre, por causas de sus problemas emocionales tales como sentirse deprimido o ansioso?


                           @if ($errors->has('sf19'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf19') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf19 == 1  ? 'checked=""' : ''}}  value="1" id="sf19" name="sf19"  required > 1
                            </td>

                            <td colspan="1" style=" vertical-align:middle;">
                              <input type='radio' {{(isset($data)) && $data->sf19 == 2  ? 'checked=""' : ''}}  value="2" id="sf19" name="sf19"  required > 2
                            </td>
    
                          </tr>

                          <tr>
                            <td style="vertical-align:middle;"><b>20</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Durante las últimas 4 semanas, ¿hasta qué punto han interferido su salud física o sus problemas emocionales con las actividades sociales que normalmente realiza con su familia, amigos, vecinos o grupos? Ha interferido...


                           @if ($errors->has('sf20'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf20') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf20 == 1  ? 'checked=""' : ''}}  value="1" id="sf20" name="sf20"  required > [1] En nada</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf20 == 2  ? 'checked=""' : ''}}  value="2" id="sf20" name="sf20"  required >[2] Ligeramente</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf20 == 3  ? 'checked=""' : ''}}  value="3" id="sf20" name="sf20" required >[3] Moderadamente</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf20 == 4  ? 'checked=""' : ''}}  value="4" id="sf20" name="sf20" required >[4] Bastante</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf20 == 5  ? 'checked=""' : ''}}  value="5" id="sf20" name="sf20"  required >[5] Completamente</td>
                            
                            </tr>

                             <tr>
                            <td style="vertical-align:middle;"><b>21</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Durante las últimas 4 semanas, cuánto dolor físico ha tenido?

                              @if ($errors->has('sf21'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf21') }}</strong>
                                    </span>
                                @endif


                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf21 == 1  ? 'checked=""' : ''}}  value="1" id="sf21" name="sf21" required > [1] Ningún dolor</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf21 == 2  ? 'checked=""' : ''}}  value="2" id="sf21" name="sf21" required >[2] Muy Poco</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf21 == 3  ? 'checked=""' : ''}}  value="3" id="sf21" name="sf21" required >[3] Poco</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf21 == 4  ? 'checked=""' : ''}}  value="4" id="sf21" name="sf21" required >[4] Moderado</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf21 == 5  ? 'checked=""' : ''}}  value="5" id="sf21" name="sf21" required >[5] Severo

                              <p><input type='radio' {{(isset($data)) && $data->sf21 == 6  ? 'checked=""' : ''}}  value="6" id="sf21" name="sf21" required >[6] Muy severo</p>
                             </td>
                            
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>22</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Durante las últimas 4 semanas, cuanto interfirió el dolor con su trabajo normal (incluyendo tanto sus actividades laborales como de la casa). Interfirió.

                              @if ($errors->has('sf22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf22') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf22 == 1  ? 'checked=""' : ''}}  value="1" id="sf22" name="sf22" required > [1] En nada</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf22 == 2  ? 'checked=""' : ''}}  value="2" id="sf22" name="sf22" required >[2] Ligeramente</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf22 == 3  ? 'checked=""' : ''}}  value="3" id="sf22" name="sf22" required >[3] Moderadamente</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf22 == 4  ? 'checked=""' : ''}}  value="4" id="sf22" name="sf22" required >[4] Bastante</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf22 == 5  ? 'checked=""' : ''}}  value="5" id="sf22" name="sf22" required >[5] Completamente</td>
                            
                            </tr>


                            <tr>
                            <td style="vertical-align:middle;"><b>23</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Durante las últimas 4 semanas, que parte del tiempo han interferido sus problemas físicos o emocionales con sus actividades sociales (como visitar a sus amigos, parientes, ¿entre otros)? Han interferido...

                              @if ($errors->has('sf23'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf23') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> Siempre <input type='radio' {{(isset($data)) && $data->sf23 == 1  ? 'checked=""' : ''}}  value="1" id="sf23" name="sf23" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> Casi siempre <input type='radio' {{(isset($data)) && $data->sf23 == 2  ? 'checked=""' : ''}}  value="2" id="sf23" name="sf23" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> Pocas veces <input type='radio' {{(isset($data)) && $data->sf23 == 3  ? 'checked=""' : ''}}  value="3" id="sf23" name="sf23" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> Casi nunca <input type='radio' {{(isset($data)) && $data->sf23 == 4  ? 'checked=""' : ''}}  value="4" id="sf23" name="sf23" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> Nunca <input type='radio' {{(isset($data)) && $data->sf23 == 5  ? 'checked=""' : ''}}  value="5" id="sf23" name="sf23" required ></td>
                            
                            </tr>

                            <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes preguntas se refieren a como se siente y como han estado sus cosas, durante las últimas cuatro semanas. En la medida en que yo vaya leyendo cada pregunta, por favor dígame la respuesta que mejor represente como se ha estado sintiendo usted, y si esto ha sido siempre, Casi siempre, Algunas veces, Pocas veces, Casi nunca o Nunca.</b></td>
                          </tr>



                            <tr>
                            <td rowspan="3" style="vertical-align:middle;"><b>24</b></td>
                            <td rowspan="3" style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido lleno de energía?


                              @if ($errors->has('sf24'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf24') }}</strong>
                                    </span>
                                @endif

                            </td>

                            </tr>

                            <tr>
                            <th style="width:10%;  vertical-align:middle; text-align: center;"> Siempre</th>

                            <th style="width:10%;  vertical-align:middle; text-align: center;"> Casi siempre</th>

                            <th style="width:10%;  vertical-align:middle;  text-align: center;"> Pocas veces</th>

                             <th style="width:10%;  vertical-align:middle; text-align: center;"> Casi nunca</th>

                             <th style="width:10%;  vertical-align:middle; text-align: center;"> Nunca</th>
                            
                            </tr>

                           <tr>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf24 == 1  ? 'checked=""' : ''}}  value="1" id="sf24" name="sf24" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf24 == 2  ? 'checked=""' : ''}}  value="2" id="sf24" name="sf24" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf24 == 3  ? 'checked=""' : ''}}  value="3" id="sf24" name="sf24" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf24 == 4  ? 'checked=""' : ''}}  value="4" id="sf24" name="sf24" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf24 == 5  ? 'checked=""' : ''}}  value="5" id="sf24" name="sf24" required ></td>
                            
                            </tr>


                            <tr>
                            <td style="vertical-align:middle;"><b>25</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido muy nervioso?

                              @if ($errors->has('sf25'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf25') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf25 == 1  ? 'checked=""' : ''}}  value="1" id="sf25" name="sf25" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf25 == 2  ? 'checked=""' : ''}}  value="2" id="sf25" name="sf25" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf25 == 3  ? 'checked=""' : ''}}  value="3" id="sf25" name="sf25" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf25 == 4  ? 'checked=""' : ''}}  value="4" id="sf25" name="sf25" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf25 == 5  ? 'checked=""' : ''}}  value="5" id="sf25" name="sf25" required ></td>
                            
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>26</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido tan decaído que nada lo alegra?


                              @if ($errors->has('sf26'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf26') }}</strong>
                                    </span>
                                @endif


                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf26 == 1  ? 'checked=""' : ''}}  value="1" id="sf26" name="sf26" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf26 == 2  ? 'checked=""' : ''}}  value="2" id="sf26" name="sf26" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf26 == 3  ? 'checked=""' : ''}}  value="3" id="sf26" name="sf26"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf26 == 4  ? 'checked=""' : ''}}  value="4" id="sf26" name="sf26"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf26 == 5  ? 'checked=""' : ''}}  value="5" id="sf26" name="sf26" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>27</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido calmado o tranquilo?

                              @if ($errors->has('sf27'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf27') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf27 == 1  ? 'checked=""' : ''}}  value="1" id="sf27" name="sf27"  required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf27 == 2  ? 'checked=""' : ''}}  value="2" id="sf27" name="sf27"  required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf27 == 3  ? 'checked=""' : ''}}  value="3" id="sf27" name="sf27"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf27 == 4  ? 'checked=""' : ''}}  value="4" id="sf27" name="sf27"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf27 == 5  ? 'checked=""' : ''}}  value="5" id="sf27" name="sf27" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>28</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, tuvo mucha energía?

                              @if ($errors->has('sf28'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf28') }}</strong>
                                    </span>
                                @endif


                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf28 == 1  ? 'checked=""' : ''}}  value="1" id="sf28" name="sf28"  required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2  <input type='radio' {{(isset($data)) && $data->sf28 == 2  ? 'checked=""' : ''}}  value="2" id="sf28" name="sf28" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf28 == 3  ? 'checked=""' : ''}}  value="3" id="sf28" name="sf28" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf28 == 4  ? 'checked=""' : ''}}  value="4" id="sf28" name="sf28" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf28 == 5  ? 'checked=""' : ''}}  value="5" id="sf28" name="sf28" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>29</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido desconsolado y triste?

                              @if ($errors->has('sf29'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf29') }}</strong>
                                    </span>
                                @endif


                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf29 == 1  ? 'checked=""' : ''}}  value="1" id="sf29" name="sf29"  required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf29 == 2  ? 'checked=""' : ''}}  value="2" id="sf29" name="sf29" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf29 == 3  ? 'checked=""' : ''}}  value="3" id="sf29" name="sf29" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf29 == 4  ? 'checked=""' : ''}}  value="4" id="sf29" name="sf29" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf29 == 5  ? 'checked=""' : ''}}  value="5" id="sf29" name="sf29" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>30</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se sintió agotado?

                              @if ($errors->has('sf30'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf30') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf30 == 1  ? 'checked=""' : ''}}  value="1" id="sf30" name="sf30" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf30 == 2  ? 'checked=""' : ''}}  value="2" id="sf30" name="sf30" required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf30 == 3  ? 'checked=""' : ''}}  value="3" id="sf30" name="sf30" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf30 == 4  ? 'checked=""' : ''}}  value="4" id="sf30" name="sf30" required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf30 == 5  ? 'checked=""' : ''}}  value="5" id="sf30" name="sf30" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>31</b></td>
                            <td style="width:40%;  vertical-align:middle; ">¿Cuánto tiempo durante las últimas 4 semanas, se ha sentido feliz?

                               @if ($errors->has('sf31'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf31') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf31 == 1  ? 'checked=""' : ''}}  value="1" id="sf31" name="sf31" required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf31 == 2  ? 'checked=""' : ''}}  value="2" id="sf31" name="sf31"  required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf31 == 3  ? 'checked=""' : ''}}  value="3" id="sf31" name="sf31"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf31 == 4  ? 'checked=""' : ''}}  value="4" id="sf31" name="sf31"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf31 == 5  ? 'checked=""' : ''}}  value="5" id="sf31" name="sf31" required ></td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>32</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se sintió cansado?

                               @if ($errors->has('sf32'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf32') }}</strong>
                                    </span>
                                @endif


                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;">1 <input type='radio' {{(isset($data)) && $data->sf32 == 1  ? 'checked=""' : ''}}  value="1" id="sf32" name="sf32"  required > </td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;">2 <input type='radio' {{(isset($data)) && $data->sf32 == 2  ? 'checked=""' : ''}}  value="2" id="sf32" name="sf32"  required ></td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;">3 <input type='radio' {{(isset($data)) && $data->sf32 == 3  ? 'checked=""' : ''}}  value="3" id="sf32" name="sf32"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">4 <input type='radio' {{(isset($data)) && $data->sf32 == 4  ? 'checked=""' : ''}}  value="4" id="sf32" name="sf32"  required ></td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;">5 <input type='radio' {{(isset($data)) && $data->sf32 == 5  ? 'checked=""' : ''}}  value="5" id="sf32" name="sf32"  required ></td>
                            </tr>

                             <tr>                            
                            <td colspan="7" style="text-align: justify; "><b>Las próximas preguntas son sobre asuntos relacionados con su salud. Yo voy a leerle una lista de afirmaciones; después de cada una dígame si usted está Completamente de Acuerdo, Medianamente de Acuerdo, No sabe, Medianamente en Desacuerdo, o Completamente en Desacuerdo con la afirmación. Si usted no sabe, simplemente dígamelo</b></td>
                          </tr>



                            <tr>
                            <td rowspan="3" style="vertical-align:middle;"><b>33</b></td>
                            <td rowspan="3" style="width:40%;  vertical-align:middle; ">Parece que me enfermo más fácilmente que otras personas. Usted está...

                               @if ($errors->has('sf33'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf33') }}</strong>
                                    </span>
                                @endif

                            </td>

                            <tr>
                              
                            <th style="width:10%;  vertical-align:middle; text-align: center;"> Completamente de acuerdo</th>

                            <th style="width:10%;  vertical-align:middle; text-align: center;"> Medianamente de acuerdo</th>

                            <th style="width:10%;  vertical-align:middle;  text-align: center;">No se</th>

                             <th style="width:10%;  vertical-align:middle; text-align: center;"> Medianamente en desacuerdo</th>

                             <th style="width:10%;  vertical-align:middle; text-align: center;"> Completamente en desacuerdo</th>

                            </tr>



                            </tr>
                             <tr>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf33 == 1  ? 'checked=""' : ''}}  value="1" id="sf33" name="sf33" required >1</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf33 == 2  ? 'checked=""' : ''}}  value="2" id="sf33" name="sf33"  required >2</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf33 == 3  ? 'checked=""' : ''}}  value="3" id="sf33" name="sf33" required >3</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf33 == 4  ? 'checked=""' : ''}}  value="4" id="sf33" name="sf33" required >4</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf33 == 5  ? 'checked=""' : ''}}  value="5" id="sf33" name="sf33" required >5</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>34</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Estoy más saludable que cualquier otra persona que conozca. Usted está...

                               @if ($errors->has('sf34'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf34') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf34 == 1  ? 'checked=""' : ''}}  value="1" id="sf34" name="sf34" required >1</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf34 == 2  ? 'checked=""' : ''}}  value="2" id="sf34" name="sf34" required >2</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf34 == 3  ? 'checked=""' : ''}}  value="3" id="sf34" name="sf34" required >3</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf34 == 4  ? 'checked=""' : ''}}  value="4" id="sf34" name="sf34" required >4</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf34 == 5  ? 'checked=""' : ''}}  value="5" id="sf34" name="sf34" required >5</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>35</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Espero que mi salud empeore. Usted está...

                               @if ($errors->has('sf35'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf35') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf35 == 1  ? 'checked=""' : ''}}  value="1" id="sf35" name="sf35" required >1</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf35 == 2  ? 'checked=""' : ''}}  value="2" id="sf35" name="sf35" required >2</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf35 == 3  ? 'checked=""' : ''}}  value="3" id="sf35" name="sf35" required >3</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf35 == 4  ? 'checked=""' : ''}}  value="4" id="sf35" name="sf35" required >4</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf35 == 5  ? 'checked=""' : ''}}  value="5" id="sf35" name="sf35" required >5</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>36</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Mi salud es excelente. Usted está...

                               @if ($errors->has('sf36'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sf36') }}</strong>
                                    </span>
                                @endif

                            </td>
                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf36 == 1  ? 'checked=""' : ''}}  value="1" id="sf36" name="sf36" required >1</td>

                            <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf36 == 2  ? 'checked=""' : ''}}  value="2" id="sf36" name="sf36" required >2</td>

                            <td style="width:10%;  vertical-align:middle;  text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf36 == 3  ? 'checked=""' : ''}}  value="3" id="sf36" name="sf36" required >3</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf36 == 4  ? 'checked=""' : ''}}  value="4" id="sf36" name="sf36" required >4</td>

                             <td style="width:10%;  vertical-align:middle; text-align: center;"> <input type='radio' {{(isset($data)) && $data->sf36 == 5  ? 'checked=""' : ''}}  value="5" id="sf36" name="sf36"  required >5</td>
                            </tr>
  

                        </tbody>

                        </table>

                         <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">

                            <div class="col-md-1">
                            <input id="total" disabled class="form-control" name="total" type="hidden" required >
                                
                            </div>

                        </div>
                        
                    <button type="submit" id='btnR' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
          </form>
    </div>
 </div>

@section('styles')
<style type="text/css">

th,td {
    text-align: justify;
    vertical-align:middle;
    }

</style>

@endsection


@push('scripts')
<script type="text/javascript">
    
  const App = new Vue({
    el: '#main',
   created: function() {
      this.patient();
    },
    data: {
       total: 0,
         
    },
    computed : {

     
    },
    methods : {

      patient(){

         var fecha = $("#datsf36").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {

                     $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                     $("#hist_id").val(response.data.hist_id);
                     $("#gender").val(response.data.gender);
                     $("#age").val(response.data.edad);
                                  
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });

      }
     
      
      
    }
  });

</script>
@endpush



@endsection



