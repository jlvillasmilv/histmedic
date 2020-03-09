@extends('layouts.main')
@section('title', 'Registro de Formatos')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
          <a class="pull-right" href="{{route('ecorp.index')}}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>ECOCARDIOGRAMA BIDIMENSIONAL-DOPPLER COLOR
    </div>
    <div class="panel-body" id="main">
        <form class="form-horizontal" id="form" role="form" method="POST" action="{{ isset($data) ? route('ecorp.update',  $data->id) : route('ecorp.store') }}">
           
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                        @include('patient.patient')


                        <div class="form-group{{ $errors->has('Fecha_eco') ? ' has-error' : '' }}">

                            <label for="Fecha_eco" class="col-md-2 control-label">Fecha</label>

                             <div class="col-md-3">
                                <input id="Fecha_eco" type="date" class="form-control" name="Fecha_eco" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->Fecha_eco))  :date("Y-m-d") }}' required="">

                                @if ($errors->has('Fecha_eco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_eco') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>


                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-1 control-label">Nombres</label>

                            <div class="col-md-2">
                                <input id="nombre" type="text" class="form-control" name="nombre" required=""  readonly="">

                              
                            </div>

                            <label for="cedula" class="col-md-1 control-label">Cedula</label>

                            <div class="col-md-2">
                                <input id="cedula" type="text" class="form-control" required="" readonly="">

                               
                            </div>

                           <label for="Peso_eco" class="col-md-1 control-label">Peso</label>

                            <div class="col-md-1">
                                <input id="Peso_eco" name="Peso_eco" type="text" class="form-control" placeholder="Peso (Kg)" required="" value="{{(isset($data))  ? $data->Peso_eco : old('Peso_eco')}}">

                                @if ($errors->has('Peso_eco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Peso_eco') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="Talla_eco" class="col-md-1 control-label">Talla</label>

                            <div class="col-md-1">
                                <input id="Talla_eco" name="Talla_eco" type="text" class="form-control" required="" placeholder="Talla" value="{{(isset($data))  ? $data->Talla_eco : old('Talla_eco')}}">

                                @if ($errors->has('Talla_eco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Talla_eco') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="age" class="col-md-1 control-label">Edad:</label>

                             <div class="col-md-1">
                                <input id="age"  type="text" class="form-control" name="age" required="" readonly="">

                            </div>
         
                        </div>
                        
            
                      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover {{ $errors->has('format_det_id') ? ' has-error' : '' }}">

                         
                               
                                <td style="width: 10%" >No.ECO: </td> 
                                
                                <td style="width: 5%"> <input id="Neco_eco" name="Neco_eco" type="number"  step="0.01" class="form-control" required="" value="{{(isset($data))  ? $data->Neco_eco : old('Neco_eco')}}"> 
                                      @if ($errors->has('Neco_eco'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('Neco_eco') }}</strong>
                                          </span>
                                      @endif  
                                </td>


                                  <td style="width: 10%" >HC: </td> 
                                
                                <td style="width: 5%">  <input style="width: 90px" id="hist_id" type="text"  name="hist_id" required readonly="">
                                </td>

                                <td style="width: 10%" >REFERIDO POR: </td> 
                                
                                <td style="width: 5%"> <input id="Referido_eco" name="Referido_eco" type="text"  step="0.01" class="form-control" required="" minlength="2" maxlength="50" value="{{(isset($data))  ? $data->Referido_eco : old('Referido_eco')}}"> 
                                      @if ($errors->has('Referido_eco'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('Referido_eco') }}</strong>
                                          </span>
                                      @endif  
                                </td>
                                
                                 

                        </table>

                        
                        <table class="table-bordered {{ $errors->has('format_det_id') ? ' has-error' : '' }}">
                          <tr>
                         <td style="width: 10%" >AORTA: </td>  
                         <td style="width: 5%"> 

                          <input id="Aorta_eco" name="Aorta_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Aorta_eco : old('Aorta_eco')}}"> 
                                      @if ($errors->has('Aorta_eco'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('Aorta_eco') }}</strong>
                                          </span>
                                      @endif  
                          </td>   

                        <td style="width: 10%" >AURICULA IZQ: </td>  
                        <td style="width: 5%"> 

                             <input id="Auriculaiz_eco" name="Auriculaiz_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Auriculaiz_eco : old('Auriculaiz_eco')}}"> 
                                      @if ($errors->has('Auriculaiz_eco'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('Auriculaiz_eco') }}</strong>
                                          </span>
                                      @endif  
                          </td>

                          </tr>

                         <tr>
                           <td style="width: 10%" >SEPTUM DIAST: </td>  
                           <td style="width: 5%"> 

                            <input id="Sept_diast_eco" name="Sept_diast_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Sept_diast_eco : old('Sept_diast_eco')}}"> 
                                      
                            </td>   

                            <td style="width: 10%" >SIST: </td>  
                            <td style="width: 5%"> 

                                <input id="Auri_sist_eco" name="Auri_sist_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Auri_sist_eco : old('Auri_sist_eco')}}"> 
                                        
                          </td>

                        </tr>

                          <tr>
                           <td style="width: 10%">VI DIAMET DIAST: </td>  
                           <td style="width: 5%"> 

                            <input id="VId_diast_eco" name="VId_diast_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VId_diast_eco : old('VId_diast_eco')}}"> 
                                      
                            </td>   

                            <td style="width: 10%">VENTRICULO DERECHO: </td>  
                            <td style="width: 5%"> 

                                <input id="VentDer_eco" name="VentDer_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VentDer_eco : old('VentDer_eco')}}"> 
                                        
                          </td>

                        </tr>

                         <tr>
                           <td style="width: 10%">VI DIAMET SIST: </td>  
                           <td style="width: 5%"> 

                            <input id="Vid_sist_eco" name="Vid_sist_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Vid_sist_eco : old('Vid_sist_eco')}}"> 
                                      
                            </td>   

                            <td colspan="2" style="width: 10%"></td>  
                           

                        </tr>

                        <tr>
                           <td style="width: 10%">P.P. VI DIAST: </td>  
                           <td style="width: 5%"> 

                            <input id="PPVI_diast_eco" name="PPVI_diast_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->PPVI_diast_eco : old('PPVI_diast_eco')}}"> 
                                      
                            </td>   

                            <td style="width: 10%">SIST: </td>  
                            <td style="width: 5%"> 

                                <input id="Auri_Sist2_eco" name="Auri_Sist2_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->Auri_Sist2_eco : old('Auri_Sist2_eco')}}"> 
                                        
                          </td>

                        </tr>
              
              


                        </table>

   


                         <table class="table table-bordered ">
                          <tr>
                            INTERVALOS SISTOLICO 
                          </tr>
                          <tr>

                            <th style="width: 10%"></th>
                            <th>TE</th>
                            <th>PPE</th>
                            <th>RR</th>
                            <th>PPE/TE</th>
                          </tr>
                          <tbody>
                            <tr>
                              <td >VI</td>
                              <td> 
                                <input id="VI_TE_eco" name="VI_TE_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VI_TE_eco : old('VI_TE_eco')}}">          
                              </td>
                               <td > 

                                <input id="VI_PPE_eco" name="VI_PPE_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VI_PPE_eco : old('VI_PPE_eco')}}">          
                              </td>
                                <td > 

                                <input id="VI_RR_eco" name="VI_RR_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VI_RR_eco : old('VI_RR_eco')}}">          
                              </td>
                                <td > 

                                <input id="VI_PPETE_eco" name="VI_PPETE_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VI_PPETE_eco : old('VI_PPETE_eco')}}">          
                              </td>
                             
                              
                            </tr>

                            <tr>
                              <td >VD</td>
                              <td> 
                                <input id="VD_TE_eco" name="VD_TE_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VD_TE_eco : old('VD_TE_eco')}}">          
                              </td>
                               <td> 
                                <input id="VD_PPE_eco" name="VD_PPE_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VD_PPE_eco : old('VD_PPE_eco')}}">          
                              </td>
                               <td> 
                                <input id="VD_RR_eco" name="VD_RR_eco" type="number"  step="0.01" class="form-control" value="{{(isset($data))  ? $data->VD_RR_eco : old('VD_RR_eco')}}">          
                              </td>
                               <td> 
                                <input id="VD_PPETE_eco" name="VD_PPETE_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VD_PPETE_eco : old('VD_PPETE_eco')}}">          
                              </td>
                            </tr>
                        </tbody>
                          
                         
                        </table>

                      

                        <table class="table table-bordered table-hover ">
                          
                          <tr>
                           VALVULAS:
                          </tr>

                          <tr>

                            <td colspan="3"> 
                                <label for="AperAo_eco" class="col-md-3 control-label">APERTURA AORTICA:</label>

                                <div class="col-md-2">
                                    <input id="AperAo_eco" max="999.99" name="AperAo_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->AperAo_eco : old('AperAo_eco')}}">       
                                </div>
   
                            </td>
                          </tr>

                           <tr>

                             <td> 
                                <label for="Exc_mitral_eco" class="col-md-5 control-label">EXCURSION MITRAL:</label>

                                <div class="col-md-5">
                                   <input id="Exc_mitral_eco" max="999.99" name="Exc_mitral_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Exc_mitral_eco : old('Exc_mitral_eco')}}">    
                                </div>
   
                            </td>
                           <td> 
                                <label for="EF_eco" class="col-md-5 control-label">EF:</label>

                                <div class="col-md-5">
                                   <input id="EF_eco" max="999.99" name="EF_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->EF_eco : old('EF_eco')}}">    
                                </div>
   
                            </td>
                             <td> 
                                <label for="QCM_eco" class="col-md-5 control-label">QCM:</label>

                                <div class="col-md-5">
                                   <input id="QCM_eco" max="999.99" name="QCM_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->QCM_eco : old('QCM_eco')}}">    
                                </div>
   
                            </td>
                           
                          </tr>

                          <tr>
                              <td> 
                                <label for="Pul_eco" class="col-md-5 control-label">PULMONAR:</label>

                                <div class="col-md-5">
                                   <input id="Pul_eco" max="999.99" name="Pul_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Pul_eco : old('Pul_eco')}}">    
                                </div>
                              </td>
                                <td colspan="2"> 
                                <label for="Tricuspide_eco" class="col-md-5 control-label">TRICUSPIDE:</label>

                                <div class="col-md-5">
                                   <input id="Tricuspide_eco" max="999.99" name="Tricuspide_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Tricuspide_eco : old('Tricuspide_eco')}}">    
                                </div>
                              </td>
                            
                          </tr>

                         
                        </table>

                       
                     
                             FUNCION VENTRICULAR IZQ 
                        <table class="table table-bordered ">
                          <tr>
                            <td> 
                                <label for="VDF_eco" class="col-md-5 control-label">VDF:</label>

                                <div class="col-md-5">
                                   <input id="VDF_eco" max="999.99" name="VDF_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VDF_eco : old('VDF_eco')}}">    
                                </div>
                            </td>
                             <td> 
                                <label for="VSF_eco" class="col-md-5 control-label">VSF:</label>

                                <div class="col-md-5">
                                   <input id="VSF_eco" max="999.99" name="VSF_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VSF_eco : old('VSF_eco')}}">    
                                </div>
                            </td>
                             <td> 
                                <label for="VL_eco" class="col-md-5 control-label">VL:</label>

                                <div class="col-md-5">
                                   <input id="VL_eco" max="999.99" name="VL_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->VL_eco : old('VL_eco')}}">    
                                </div>
                            </td>
                           
                          </tr>

                          <tr>
                            <td> 
                                <label for="FE_eco" class="col-md-5 control-label">FE:</label>

                                <div class="col-md-5">
                                   <input id="FE_eco" max="999.99" name="FE_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->FE_eco : old('FE_eco')}}">    
                                </div>
                            </td>
                             <td> 
                                <label for="FacPer_eco" class="col-md-5 control-label">% Fac:</label>

                                <div class="col-md-5">
                                   <input id="FacPer_eco" max="999.99" name="FacPer_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->FacPer_eco : old('FacPer_eco')}}">    
                                </div>
                            </td>
                             <td> 
                                <label for="Masa_eco" class="col-md-5 control-label">MASA: </label>

                                <div class="col-md-5">
                                   <input id="Masa_eco" max="999.99" name="Masa_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Masa_eco : old('Masa_eco')}}">    
                                </div>
                            </td>
                           
                          </tr>

                             
                        </table>


                         <table class="table table-striped">
                          <tr>
                            <th> DOPPLER  </th>
                            <th> E  </th>
                            <th> A  </th>
                            <th> V. NORMAL </th>      
                            <th> TAC  </th>
                            <th> Tdec  </th>
                            <th> TTO  </th>
                            <th> TVI  </th>
                          </tr>

                          <tbody>
                            <tr>
                              <td>MITRAL</td>
                              <td> 
                                   <input id="Dop_mit_e_eco" max="999.99" name="Dop_mit_e_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_e_eco : old('Dop_mit_e_eco')}}"> 
                              </td>
                               <td> 
                                   <input id="Dop_mit_a_eco" max="999.99" name="Dop_mit_a_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_a_eco : old('Dop_mit_a_eco')}}"> 
                              </td>
                              <td> <1.3 mt/seg  </td> 
                                <td> 
                                   <input id="Dop_mit_tac_eco" max="999.99" name="Dop_mit_tac_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_tac_eco : old('Dop_mit_tac_eco')}}"> 
                              </td> 
                              <td> 
                                   <input id="Dop_mit_tdec_eco" max="999.99" name="Dop_mit_tdec_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_tdec_eco : old('Dop_mit_tdec_eco')}}"> 
                              </td> 
                               <td> 
                                   <input id="Dop_mit_tto_eco" max="999.99" name="Dop_mit_tto_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_tto_eco : old('Dop_mit_tto_eco')}}"> 
                              </td>
                               <td> 
                                   <input id="Dop_mit_tva_eco" max="999.99" name="Dop_mit_tva_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_mit_tva_eco : old('Dop_mit_tva_eco')}}"> 
                              </td>   

                            </tr>

                             <tr>
                              <td>TRICUSPIDE</td>
                               <td> 
                                   <input id="Dop_tric_e_eco" max="999.99" name="Dop_tric_e_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_e_eco : old('Dop_tric_e_eco')}}"> 
                              </td> 
                              <td> 
                                   <input id="Dop_tric_a_eco" max="999.99" name="Dop_tric_a_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_a_eco : old('Dop_tric_a_eco')}}"> 
                              </td>
                              <td><0.7 mt/seg</td>
                              <td> 
                                   <input id="Dop_tric_tac_eco" max="999.99" name="Dop_tric_tac_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_tac_eco : old('Dop_tric_tac_eco')}}"> 
                              </td>
                               <td> 
                                   <input id="Dop_tric_tdec_eco" max="999.99" name="Dop_tric_tdec_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_tdec_eco : old('Dop_tric_tdec_eco')}}"> 
                              </td>
                               <td> 
                                   <input id="Dop_tric_tto_eco" max="999.99" name="Dop_tric_tto_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_tto_eco : old('Dop_tric_tto_eco')}}"> 
                              </td>
                                <td> 
                                   <input id="Dop_tric_tva_eco" max="999.99" name="Dop_tric_tva_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Dop_tric_tva_eco : old('Dop_tric_tva_eco')}}"> 
                              </td>
                            </tr>
                            
                          </tbody>
                           
                         </table>

                         <table class="table table-hover">
                           <tr>
                            <th>   </th>
                            <th> Vmax  </th>
                            <th> VALOR NORMAL </th>    
                            <th> Ta  </th>
                            <th> Tdec  </th>
                            <th> TVI  </th>
                          </tr>

                          <tr>
                            <td>AORTA</td>
                             <td> 
                                <input id="Ao_vmax_eco" max="999.99" name="Ao_vmax_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Ao_vmax_eco : old('Ao_vmax_eco')}}"> 
                             </td>
                             <td>(1.0-1.7 mt/seg)</td>
                              <td> 
                                <input id="Ao_ta_eco" max="999.99" name="Ao_ta_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Ao_ta_eco : old('Ao_ta_eco')}}"> 
                             </td>
                              <td> 
                                <input id="Ao_tdec_eco" max="999.99" name="Ao_tdec_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Ao_tdec_eco : old('Ao_tdec_eco')}}"> 
                             </td>
                             <td> 
                                <input id="Ao_tvi_eco" max="999.99" name="Ao_tvi_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Ao_tvi_eco : old('Ao_tvi_eco')}}"> 
                             </td>
                          </tr>

                           <tr>
                            <td>PULMONAR</td>
                             <td> 
                                <input id="Pulm_vmax_eco" max="999.99" name="Pulm_vmax_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Pulm_vmax_eco : old('Pulm_vmax_eco')}}"> 
                             </td>
                             <td>(0.6-0.9 mt/seg)</td>
                              <td> 
                                <input id="Pulm_ta_eco" max="999.99" name="Pulm_ta_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Pulm_ta_eco : old('Pulm_ta_eco')}}"> 
                             </td>
                              <td> 
                                <input id="Pulm_tdec_eco" max="999.99" name="Pulm_tdec_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Pulm_tdec_eco : old('Pulm_tdec_eco')}}"> 
                             </td>
                             <td> 
                                <input id="Pulm_tvi_eco" max="999.99" name="Pulm_tvi_eco" type="number" step="0.01" class="form-control" value="{{(isset($data))  ? $data->Pulm_tvi_eco : old('Pulm_tvi_eco')}}"> 
                             </td>
                          </tr>
                           
                         </table>

                      <div class="form-group{{ $errors->has('Moti_eco') ? ' has-error' : '' }}">
                            <label  for="Moti_eco" class="col-md-4 control-label">MOTILIDAD SEGMENTARIA:</label>

                          <div class="col-md-4">
                                <select class="form-control" id="Moti_eco" name="Moti_eco" data-live-search='true' required="">
                                    <option value="0">0 = NORMAL</option>
                                    <option value="1" {{ (isset($data) && $data->memor_8 ==1) ? 'selected' : '' }}>1 = Anormal</option>
                                </select>
                                
                                @if ($errors->has('Moti_eco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Moti_eco') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>

                        CONCLUSIONES:

                        <table class="table table-hover">
                          <tr>
                            <td> 
                                <input id="Conc1_eco" maxlength="75" name="Conc1_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc1_eco : old('Conc1_eco')}}"> 
                             </td>
                          </tr>
                          <tr>
                             <td> 
                                <input id="Conc2_eco" maxlength="75" name="Conc2_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc2_eco : old('Conc2_eco')}}"> 
                             </td>
                          </tr>

                          <tr>
                              <td> 
                                <input id="Conc3_eco" maxlength="75" name="Conc3_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc3_eco : old('Conc3_eco')}}"> 
                             </td>
                          </tr>

                          <tr>
                              <td> 
                                <input id="Conc4_eco" maxlength="75" name="Conc4_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc4_eco : old('Conc4_eco')}}"> 
                             </td>
                          </tr>
                          <tr>
                              <td> 
                                <input id="Conc5_eco" maxlength="75" name="Conc5_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc5_eco : old('Conc5_eco')}}"> 
                             </td>
                          </tr>
                           <tr>
                              <td> 
                                <input id="Conc6_eco" maxlength="75" name="Conc6_eco" type="text" class="form-control" value="{{(isset($data))  ? $data->Conc6_eco : old('Conc6_eco')}}"> 
                             </td>
                          </tr>
                        </table>

                      
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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

         var fecha = $("#Fecha_eco").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {

                     $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                     $("#nombre2").val(response.data.first_name+' '+response.data.last_name);
                     $("#hist_id").val(response.data.hist_id);
                     $("#cedula").val(response.data.cedula);
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






