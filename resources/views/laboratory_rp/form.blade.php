@extends('layouts.main')
@section('title', 'LABORATORIO CLINICO RP')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">
                  <a class="pull-right" href="{{route('labrp.index')}}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro LABORATORIO CLINICO RP CD1700 SPECIMEN DATA REPORT</div>
                 <div class="panel-body" id="main">
                    <form class="form-horizontal" id="form" role="form" method="POST" action="{{ isset($data) ? route('labrp.update',  $data->id) : route('labrp.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                   
                     @include('patient.patient')

                        <table id="detalle" class="table table-striped  table-condensed table-hover">
                          <tr>
                            <td style="text-align: left">Specimen ID#: 

                                <input style="width: 90px" id="hist_id" type="text"  name="hist_id" required readonly="">
                 
                        </td> 
                            <td style="text-align: left"> Analyzed (fecha): 
                               <input id="Fecha_Laboratory" type="date" name="Fecha_Laboratory" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->Fecha_Laboratory))  :date("Y-m-d") }}' required="">

                                @if ($errors->has('Fecha_Laboratory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_Laboratory') }}</strong>
                                    </span>
                                @endif
                          </td>

                          </tr>
                           <tr>
                            <td style="text-align: left">
                            <label for="nombre">Patient:</label>
                           
                            <input style="width: 490px" id="nombre" value="{{old('nombre')}}" type="text" name="nombre" required  readonly="">

                           </td>
                            <td></td>
                          </tr>

                          <tr>
                            <td style="text-align: left"> <label for="gender">Sex:</label>
                                <input id="gender" type="text" name="gender" value="{{old('gender')}} " requiered readonly="">
                                <label for="date_birth">DOB:</label>
                                <input id="date_birth" type="text" name="date_birth" value="{{old('date_birth')}}"  requiered >
                              </td>
                              <td></td>
                          </tr>


                        </table>

                         <table id="detalle" class="table table-striped table-condensed table-hover">
                          <thead>

                            <th style="vertical-align:middle;width: 25%">TEST</th>
                            <th style="vertical-align:middle;width: 10%">RESULT</th>
                            <th style="vertical-align:middle;width: 14%">FLAG (L = Low, H = High)</th>
                            <th style="vertical-align:middle;width: 14%">LIMIT *[ ] = Low [ * ] = Normal [ ]* = High </b></th>
                            <th style="vertical-align:middle;">REFERENCE RANGE (LIMIT 2)</th>

                         </thead>

                         <tbody>

                         

                      
                           <td>WBC (o cuenta blanca) </td>
                           <td><input id="wbc" name="wbc" type="number" value="{{(isset($data))  ? $data->wbc : old('wbc')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>4.5  -  11.0        K/µL</td>
                         

                        <tr>
                     

                           <td>LYM</td>
                           <td><input id="lym" name="lym" type="number" value="{{(isset($data))  ? $data->lym : old('lym')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>1.0-22.0  22.0  -  43.0  %L</td>
                        
                        </tr>

                         <tr>
                       
                           <td>MID</td>
                           <td><input id="mid" name="mid" type="number" value="{{(isset($data))  ? $data->mid : old('mid')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>0.0  -  1.8   0.1  -  24.0  %M</td>
                             
                        </tr>

                          <tr>
                      
                           <td>GRAN</td>
                           <td><input id="gran" name="gran" type="number" value="{{(isset($data))  ? $data->gran : old('gran')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>1.8  -  7.7   40.0  -  70.0  %G</td>
                           
                        </tr>

                        <tr>
                       
                           <td>RBC</td>
                           <td><input id="rbc" name="rbc" type="number" value="{{(isset($data))  ? $data->rbc : old('rbc')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>4.20  -  5.40      M/µL</td>
                         
                        </tr>

                          <tr>
                       
                           <td>HGB (o hemoglobina)</td>
                           <td><input id="hgb" name="hgb" type="number" value="{{(isset($data))  ? $data->hgb : old('hgb')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>11. 5  -  14.0     g/dL</td>
                             
                        </tr>

                          <tr>
                      

                           <td>HCT (o hematocritos)</td>
                           <td><input id="hct" name="hct" type="number" value="{{(isset($data))  ? $data->hct : old('hct')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>34.5  -  42.0      %</td>
                           
                        </tr>

                        

                         <tr>
                       
                           <td>MCV</td>
                           <td><input id="mcv" name="mcv" type="number" value="{{(isset($data))  ? $data->mcv : old('mcv')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>85.0  -  95.0      fL</td>
                            
                        </tr>

                         <tr>
                      

                           <td>MCH</td>
                           <td><input id="mch" name="mch" type="number" value="{{(isset($data))  ? $data->mch : old('mch')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>27.0  -  32.0      pg</td>
                          
                        </tr>

                          <tr>
                       

                           <td>MCHC</td>
                           <td><input id="mchc" name="mchc" type="number" value="{{(isset($data))  ? $data->mchc : old('mchc')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>31.0  -  36.0      g/dL</td>
                           
                        </tr>

                         <tr>
                       
                           <td>RDW</td>
                           <td><input id="rdw" name="rdw" type="number" value="{{(isset($data))  ? $data->rdw : old('rdw')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>11.5  -  14.5      %</td>
                          
                        </tr>

                          <tr>
                       
                           <td>PLT (o plaquetas)</td>
                           <td><input id="plt" name="plt" type="number" value="{{(isset($data))  ? $data->plt : old('plt')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>[    ]</td>
                           <td>150.  -  440.      K/µL</td>
                          
                        </tr>



                         </tbody>

                         </table>


                          <table id="detalle" class="table table-striped table-condensed table-hover">
                          <thead>

                            <th style="vertical-align:middle;width: 40%">Prueba</th>
                            <th style="vertical-align:middle;width: 10%">Resultado</th>
                            <th style="vertical-align:middle;width: 15%">Avisos (High or Low) </th>
                            <th style="vertical-align:middle;width: 10%">Bajo</b></th>
                            <th style="vertical-align:middle;">Alto</th>

                         </thead>

                         <tbody>

                       
                           <td>GLUCOSA (GLU/ GLUC/ Glicemia)</td>
                           <td><input id="glucosa" name="glucosa" type="number" value="{{(isset($data))  ? $data->glucosa : old('glucosa')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>65.</td>
                           <td>110.</td>
                     

                        <tr>
                       
                           <td>BUN</td>
                           <td><input id="bun" name="bun" type="number" value="{{(isset($data))  ? $data->bun : old('bun')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>7</td>
                           <td>18</td>
                         
                        </tr>

                         <tr>
                      

                           <td>CREATININA (CREA)</td>
                           <td><input id="creatini" name="creatini" type="number" value="{{(isset($data))  ? $data->creatini : old('creatini')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>0.7</td>
                           <td>1.5</td>
                         
                        </tr>

                          <tr>
                       
                           <td>COLESTEROL (CHOL)</td>
                           <td><input id="colester" name="colester" type="number" value="{{(isset($data))  ? $data->colester : old('colester')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>140.</td>
                           <td>200.</td>
                            
                        </tr>

                        <tr>
                       
                           <td>LDL</td>
                           <td><input id="ldl_cole" name="ldl_cole" type="number" value="{{(isset($data))  ? $data->ldl_cole : old('ldl_cole')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>0.0</td>
                           <td>150.</td>
                         
                        </tr>

                          <tr>
                       
                           <td>HDL </td>
                           <td><input id="hdl_cole" name="hdl_cole" type="number" value="{{(isset($data))  ? $data->hdl_cole : old('hdl_cole')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>32</td>
                           <td>96</td>
                     
                        </tr>

                          <tr>
                      

                           <td>TRIGLICERIDOS (TRIG O TGL)</td>
                           <td><input id="triglice" name="triglice" type="number" value="{{(isset($data))  ? $data->triglice : old('triglice')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>35.</td>
                           <td>160.</td>
                            
                        </tr>

                         <tr>
                      

                           <td>ACIDO URICO (URCA o Ac Urico)</td>
                           <td><input id="acido_ur" name="acido_ur" type="number" value="{{(isset($data))  ? $data->acido_ur : old('acido_ur')}}"  step="0.01" class="form-control"  required=""></td>
                           <td> </td>
                           <td>2.6</td>
                           <td>7.2</td>
                          
                        </tr>

                         <tr>
                      

                           <td>Total Protein (TP o Proteinas Tot.)</td>
                           <td><input id="total_pr" name="total_pr" type="number" value="{{(isset($data))  ? $data->total_pr : old('total_pr')}}"  step="0.01" class="form-control" ></td>
                           <td> </td>
                           <td>6.0</td>
                           <td>8.3</td>
                         
                        </tr>

                         </tbody>

                         </table>

                         <center><h4>REPORTE DE VALORES DE HOMOCISTEINA – VITAMINA B12 – FOLATOS</h4></center>

                          <table id="detalle" class="table table-striped table-condensed table-hover">
                          <thead>
                            <th style="vertical-align:middle;width: 50%">
                             <label for="nombre2">NOMBRE:</label>                           
                            <input style="width: 450px" id="nombre2" type="text" readonly=""></th>
                            <th style="vertical-align:middle;width: 50%">

                          FECHA: 

                           <input id="Hcy_Fecha" name="Hcy_Fecha" type="date" value='{{(isset($data)) && strtotime($data->Hcy_Fecha) != false  ? date("Y-m-d", strtotime($data->Hcy_Fecha)) : "0001-01-01" }}'>
                          
                          </th>
                         </thead>

                          <thead>
                            <th style="vertical-align:middle;width: 50%">
                             <label for="hist_id2">N° DE HISTORIA:</label>                           
                            <input style="width: 250px" id="hist_id2" type="text" readonly=""></th>
                            <th style="vertical-align:middle;width: 50%">

                           
                           N° DE LABORATORIO: 

                          <input id="Hcy_Nlaboratorio" name="Hcy_Nlaboratorio" type="number" value="{{(isset($data))  ? $data->Hcy_Nlaboratorio : old('Hcy_Nlaboratorio')}}"  step="0.01">
                          
                            </th>
                         </thead>


                         </table>

                          <div class="form-group{{ $errors->has('Hcy_Hcy') ? ' has-error' : '' }}">
                           <label  for="Hcy_Hcy" class="col-md-3 control-label">HOMOCISTEINA PLASMATICA: </label>
                            <div class="col-md-4">
                           <input class="form-control" id="Hcy_Hcy" name="Hcy_Hcy" value="{{(isset($data))  ? $data->Hcy_Hcy : old('Hcy_Nlaboratorio')}}"  type="number" maxlength="10" step="0.01"  required="">
                         </div>
                          </div>

                         <div class="form-group{{ $errors->has('Hcy_VitB12') ? ' has-error' : '' }}">
                             <label  for="Hcy_VitB12" class="col-md-3 control-label">VITAMINA B12: </label>
                            <div class="col-md-4">
                              <input class="form-control" id="Hcy_VitB12" name="Hcy_VitB12" value="{{(isset($data))  ? $data->Hcy_VitB12 : old('Hcy_VitB12')}}"  type="number"  maxlength="10" step="0.01"  required="">
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('Hcy_Folato') ? ' has-error' : '' }}">
                           <label  for="Hcy_Folato" class="col-md-3 control-label">FOLATOS: </label>
                            <div class="col-md-4">
                              <input class="form-control" id="Hcy_Folato" name="Hcy_Folato" value="{{(isset($data))  ? $data->Hcy_Folato : old('Hcy_Folato')}}"  type="number"  maxlength="10" step="0.01"  required="">
                            </div>
                         </div>
                           
                        
                                  <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
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

         var fecha = $("#Fecha_Laboratory").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {

                     $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                     $("#nombre2").val(response.data.first_name+' '+response.data.last_name);
                     $("#hist_id").val(response.data.hist_id);
                     $("#hist_id2").val(response.data.hist_id);
                     $("#gender").val(response.data.gender);
                     $("#date_birth").val(response.data.dob);
                   
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



