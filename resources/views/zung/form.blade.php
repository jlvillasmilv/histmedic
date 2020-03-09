@extends('layouts.main')
@section('title', 'Zung')
@section('content')


@php
//dump($errors);
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('zung.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Encuesta Zung</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('zung.update',  $data->id) : route('zung.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                        @include('patient.patient')
                        
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

                            <label for="Fecha_zung" class="col-md-2 control-label">Fecha</label>

                             <div class="col-md-2">
                                <input id="Fecha_zung" type="date" class="form-control" name="Fecha_zung"  value='{{(isset($data))  ? date("Y-m-d", strtotime($data->Fecha_zung))  :date("Y-m-d") }}' requiered>

                                @if ($errors->has('Fecha_zung'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_zung') }}</strong>
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

                          <div class="col-md-10 col-sm-10" style="justify-content: all;">
                                
                               A continuación, se presentan una serie de afirmaciones que se relacionan con su estado de ánimo o cómo se ha sentido últimamente. Encierre en un círculo la alternativa que más se ajusta a la frecuencia con la cual ha sentido el estado de ánimo que se propone.

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                          </div>

                        </div>

            
                      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">

                     
                        <tbody>
                          <tr>
                            <td  style="text-align:left;"> <b>1. Me siento desanimado y decaído</b>
                                       <br>
                                       ❶ Casi nunca  ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                             </td>
                            <td> <select class="form-control quantity" name="Zung_1" id="Zung_1" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_1 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_1') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                           <tr>
                            <td  style="text-align:left;"> <b>2. En la mañana es cuando me siento mejor</b> 
                                  <br>
                                  ❹ Casi nunca  ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre
                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_2" id="Zung_2" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_2 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_2') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                            <tr>
                            <td  style="text-align:left;"> <b>3. Tengo crisis de llanto o me parece que voy a estallar</b> 
                              <br>
                                 ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_3" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_3 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_3') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>4. Tengo problemas para dormir en las noches</b> 
                                    <br>
                                    ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_4" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_4 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_4'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_4') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>5. Como la cantidad usual de comida</b>
                              <br>
                              ❹ Casi nunca  ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre
                             </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_5" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_5 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_5') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>6. Aún disfruto el sexo</b> 
                                <br>
                              ❹ Casi nunca  ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre
                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_6" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_6 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_6'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_6') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>7. Noto que estoy perdiendo peso</b>
                                   <br>
                                       ❶ Casi nunca  ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                             </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_7" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_7 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_7'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_7') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                         <tr>
                            <td  style="text-align:left;"> <b>8. Tengo problemas de estreñimiento</b>
                                <br>
                                       ❶ Casi nunca  ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                             </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_8" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_8 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_8'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_8') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                            <tr>
                            <td  style="text-align:left;"> <b>9. Mi corazón late más rápido de lo usual </b> 
                                <br>
                                       ❶ Casi nunca  ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_9" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_9 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_9'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_9') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                         <tr>
                            <td  style="text-align:left;"> <b>10. Me siento cansado sin razón alguna</b>
                                     <br>
                                       ❶ Casi nunca  ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre
                             </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_10" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_10 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_10'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_10') }}</strong>
                                         </span>
                                   @endif
                            </td>
                          </tr>

                         <tr>
                            <td  style="text-align:left;"> <b>11. Mi mente esta tan clara como de costumbre</b> 
                                      <br>
                                     ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_11" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_11 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_11'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_11') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>12. Hago con facilidad las actividades que he realizado siempre</b> 
                                      <br>
                                     ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_12" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_12 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_12'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_12') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>13. Me siento intranquilo y no puedo calmarme</b> 
                                      <br>
                                    ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_13" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_13 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_13'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_13') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                         <tr>
                            <td  style="text-align:left;"> <b>14. Me siento esperanzado acerca del futuro</b> 
                                      <br>
                                 ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_14" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_14 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_14'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_14') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                         <tr>
                            <td  style="text-align:left;"> <b>15. Estoy más irritable que lo usual</b> 
                                      <br>
                                ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_15" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_15 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_15'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_15') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                          <tr>
                            <td  style="text-align:left;"> <b>16. Me es fácil tomar decisiones</b> 
                                      <br>
                               ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_16" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_16 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_16'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_16') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                           <tr>
                            <td  style="text-align:left;"> <b>17. Siento que soy una persona útil y necesaria</b> 
                                      <br>
                               ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_17" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_17 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_17'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_17') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                           <tr>
                            <td  style="text-align:left;"> <b>18. Mi vida es bastante plena</b> 
                                      <br>
                               ❹ Casi nunca ❸ Algunas veces ❷ Buena parte del tiempo  ❶ Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_18" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_18 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_18'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_18') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>

                           <tr>
                            <td  style="text-align:left;"> <b>19. Siento que otros estarían mejor si yo estuviese muerto</b> 
                                      <br>
                              ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_19" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_19 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_19'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_19') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>


                         <tr>
                            <td  style="text-align:left;"> <b>20. Aún disfruto las cosas que he realizado siempre</b> 
                                      <br>
                              ❶ Casi nunca   ❷Algunas veces ❸ Buena parte del tiempo   ❹Casi siempre

                            </td>
                            <td width="20%"> <select class="form-control quantity" name="Zung_20" @change="respuesta(this.value)">
                                   @foreach ($option  as $opt)
                                      <option value="{{ $opt }}" {{ (isset($data) && $data->Zung_20 == $opt) ? 'selected' : '' }}>{{ $opt }}</option>
                                   @endforeach

                                </select>
                                           
                                   @if ($errors->has('Zung_20'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('Zung_20') }}</strong>
                                         </span>
                                   @endif
                            </td>
                         </tr>
                          
                        </tbody>


                        </table>

                         <div class="form-group{{ $errors->has('Total_zung') ? ' has-error' : '' }}">
                            
                        <label for="Total_zung" class="col-md-11 control-label"> Total</label>

                            <div class="col-md-1">
                            <input class="form-control" name="Total_zung" v-model="total" value="{{ (isset($data)) ? $data->Total_zung : 0 }}" required disabled="" >

                                
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

<script type="text/javascript">

  const App = new Vue({
    el: '#main',
   created: function() {
      this.patient();
    },
    data: {
      keeps: [],
      total: 0,
         
    },
    computed : {

     
    },
    methods : {

      patient(){

         var fecha = $("#Fecha_zung").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {
                        $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                         $("#state_country").val(response.data.state_country);
                         $("#hist_id").val(response.data.hist_id);
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });

      },
      respuesta () {

      var totals = 0;
      $("#detalle select.quantity").each(function() {
        totals += +this.value;
      });

      this.total = totals;

        if ( this.total>=20 &&  this.total<=80) 
          { 
            $("#btnsummit").show();
          } else
          { 
            $("#btnsummit").hide(); 
          } 

      }
      
      
    }
  });
    

</script>

@endpush


