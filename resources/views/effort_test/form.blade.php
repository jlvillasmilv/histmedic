@extends('layouts.main')
@section('title', ' PRUEBA DE ESFUERZO')
@section('content')

@php
//dump($errors);
@endphp

<div class="panel panel-primary">
    <div class="panel-heading">
      <a class="pull-right" href="{{ url('/prueba_esfuerzo') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>PRUEBA DE ESFUERZO
     </div>
    <div class="panel-body">
         <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('prueba_esfuerzo.update',  $data->id) : route('prueba_esfuerzo.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                      @include('patient.patient')
                    <div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b style=''><span
style=''>UNIVERSIDAD
DEL ZULIA</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b style=''><span
style=''>CENTRO DE ENFERMADES CARDIOVASCULARES</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b style=''><span
style=''>TMT</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b style=''><span
style='font-size:10.0pt'></span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;
 mso-border-alt:solid'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.25pt'>
  <td  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt; '>1er Nombre<span style='mso-spacerun:yes'>         
  </span></span>

     <input id="nombre" type="text" readonly=""  class="form-control" name="nombre" value='{{old("nombre")}}' >  


</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=114  style='width:85.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>2do Nombre
          <input id="nombre2" type="text" readonly=""  class="form-control" name="nombre2" value='{{old("nombre2")}}' > 
</p>
  </td>
  <td width=114  style='width:85.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>1er Apellido  
            <input id="apellido" type="text" readonly=""  class="form-control" name="apellido" value='{{old("apellido")}}' >  
</p>
  </td>
  <td width=114 colspan=2  style='width:85.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>2do Apellido<span style='mso-spacerun:yes'>    
  </span></span>
        <input id="apellido2" type="text"  class="form-control" readonly="" name="apellido2" value='{{old("apellido2")}}' > 
</p>
  </td>
  <td width=66 colspan=2  style='width:49.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Sexo</span>
        <input id="sexo" type="text" readonly=""  class="form-control" name="sexo" value='{{old("sexo")}}' > 
</p>
  </td>
  <td width=66  style='width:49.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Edad</span>

     <input id="edad" type="text" readonly=""  class="form-control" name="edad" value='{{old("edad")}}' > 
  </p>
  </td>
  <td width=150  style='width:112.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Numero de Historia:</span>
   <input id="hist_id" type="text" readonly=""  class="form-control" name="hist_id" value='{{old("hist_id")}}' >
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:12.25pt'>
  <td width=132  style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Cedula</span>
    <input id="cedula" type="text" readonly=""  class="form-control" name="cedula" value='{{old("cedula")}}' >
</p>
  </td>
  <td width=240 colspan=3  style='width:180.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Día de realización del estudio</span>
      
        <input id="Fecha_TMT" type="date" class="form-control" name="Fecha_TMT" value='{{old("Fecha_TMT", (isset($data)) && strtotime($data->Fecha_TMT) != false  ? date("Y-m-d", strtotime($data->Fecha_TMT)) : date("Y-m-d")) }}'>
                                           
        @if ($errors->has('Fecha_TMT'))
            <span class="help-block">
               <strong>{{ $errors->first('Fecha_TMT') }}</strong>
            </span>
        @endif
 </p>
  </td>
  <td width=108 colspan=2  style='width:81.0pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=60  style='width:45.0pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=66  style='width:49.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=150  style='width:112.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
 </tr>
 
</table>


<table class="table">
  <td width=186 style='width:139.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Medicamento</span></b></p>
  </td>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Dosis</span></b></p>
  </td>
  <td width=192 style='width:144.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Tiempo de última Toma</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:10.8pt'>
  <td width=186  style='width:139.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
      <input id="Medicamento1_TMT" type="text" class="form-control" name="Medicamento1_TMT" value='{{(isset($data))  ? $data->Medicamento1_TMT  :old("Medicamento1_TMT") }}' >   
                     @if ($errors->has('Medicamento1_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Medicamento1_TMT') }}</strong>
                           </span>
                     @endif          
  </p>
  </td>
  <td width=150  style='width:112.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
    
             <input id="Dosis1_TMT" type="text" class="form-control" name="Dosis1_TMT" value='{{(isset($data))  ? $data->Dosis1_TMT  :old("Dosis1_TMT") }}' >
                                           
                     @if ($errors->has('Dosis1_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Dosis1_TMT') }}</strong>
                           </span>
                     @endif  


  </p>
  </td>
  <td width=192  style='width:144.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
       <input id="TiempoUl1_TMT" type="text" class="form-control time" name="TiempoUl1_TMT" value='{{old("TiempoUl1_TMT" , isset($data)  ? $data->TiempoUl2_TMT  : "" )}}' maxlength="10" >
  
                     @if ($errors->has('TiempoUl1_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('TiempoUl1_TMT') }}</strong>
                           </span>
                     @endif  
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:10.8pt'>
  <td width=186  style='width:139.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
     <input id="Medicamento2_TMT" type="text" class="form-control" name="Medicamento2_TMT" value='{{old("Medicamento2_TMT" , isset($data)  ? $data->Medicamento2_TMT  : "" )}}'>
                                           
                     @if ($errors->has('Medicamento2_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Medicamento2_TMT') }}</strong>
                           </span>
                     @endif  
  </p>
  </td>
  <td width=150  style='width:112.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
      <input id="Dosis2_TMT" type="text" class="form-control" name="Dosis2_TMT" value='{{(isset($data))  ? $data->Dosis2_TMT  :old("Dosis2_TMT") }}' >
                                           
                     @if ($errors->has('Dosis2_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Dosis2_TMT') }}</strong>
                           </span>
                     @endif  
  </p>
  </td>
  <td width=192  style='width:144.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'> 
      <input id="TiempoUl2_TMT" type="text" class="form-control time" name="TiempoUl2_TMT" value='{{old("TiempoUl2_TMT" , isset($data)  ? $data->TiempoUl2_TMT  : "" )}}'>
                                           
                     @if ($errors->has('TiempoUl2_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('TiempoUl2_TMT') }}</strong>
                           </span>
                     @endif  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:10.8pt'>
  <td width=186  style='width:139.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
     <input id="Medicamento3_TMT" type="text" class="form-control" name="Medicamento3_TMT" value='{{(isset($data))  ? $data->Medicamento3_TMT  :old("Medicamento3_TMT") }}' >
                                           
                     @if ($errors->has('Medicamento3_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Medicamento3_TMT') }}</strong>
                           </span>
                     @endif  

  </p>
  </td>
  <td width=150  style='width:112.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
     <input id="Dosis3_TMT" type="text" class="form-control" name="Dosis3_TMT" value='{{(isset($data))  ? $data->Dosis3_TMT  :old("Dosis3_TMT") }}' >
                                           
                     @if ($errors->has('Dosis3_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Dosis3_TMT') }}</strong>
                           </span>
                     @endif  

  </p>
  </td>
  <td width=192  style='width:144.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
     <input id="TiempoUl3_TMT" type="text" class="form-control time" name="TiempoUl3_TMT" value='{{old("TiempoUl3_TMT" , isset($data)  ? $data->TiempoUl3_TMT  : "" )}}' >
                                           
                     @if ($errors->has('TiempoUl3_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('TiempoUl3_TMT') }}</strong>
                           </span>
                     @endif  </p>
  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:10.8pt'>
  <td width=186  style='width:139.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
    <input id="Medicamento4_TMT" type="text" class="form-control" name="Medicamento4_TMT" value='{{(isset($data))  ? $data->Medicamento4_TMT  :old("Medicamento4_TMT") }}' >
                                           
                     @if ($errors->has('Medicamento4_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Medicamento4_TMT') }}</strong>
                           </span>
                     @endif 
  </p>
  </td>
  <td width=150  style='width:112.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>
    <input id="Dosis4_TMT" type="text" class="form-control" name="Dosis4_TMT" value='{{(isset($data))  ? $data->Dosis4_TMT  :old("Dosis4_TMT") }}' >
                                           
                     @if ($errors->has('Dosis4_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Dosis4_TMT') }}</strong>
                           </span>
                     @endif  </p>
  </p>
  </td>
  <td width=192  style='width:144.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <input id="TiempoUl4_TMT" type="text" class="form-control time" name="TiempoUl4_TMT" value='{{old("TiempoUl4_TMT" , isset($data)  ? $data->TiempoUl4_TMT  : "" )}}' >
                                           
                     @if ($errors->has('TiempoUl4_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('TiempoUl4_TMT') }}</strong>
                           </span>
                     @endif
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;MetsAlc_TMT'></span></p>

<table class="table"  cellspacing=0 cellpadding=0>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.8pt'>
  <td width=76  style='width:56.75pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>FC 100%</span></b></p>
  </td>
  <td width=59  style='width:44.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input id="FC100_TMT" type="text" class="form-control numero" name="FC100_TMT" value='{{(isset($data))  ? $data->FC100_TMT  :old("FC100_TMT") }}' >
                                           
                     @if ($errors->has('FC100_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('FC100_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=67  style='width:50.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>FC 85%</span></b></p>
  </td>
  <td width=67  style='width:50.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <input id="FC85_TMT" type="text" class="form-control numero" name="FC85_TMT" value='{{(isset($data))  ? $data->FC85_TMT  :old("FC85_TMT") }}' >
                                           
                     @if ($errors->has('FC85_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('FC85_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=67  style='width:50.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>FC 75%</span></b></p>
  </td>
  <td width=67  style='width:50.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input id="FC75_TMT" type="text" class="form-control numero" name="FC75_TMT" value='{{(isset($data))  ? $data->FC75_TMT  :old("FC75_TMT") }}' >
                                           
                     @if ($errors->has('FC75_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('FC75_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=68  style='width:50.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Bruce</span></b></p>
  </td>
  <td width=67  style='width:50.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       

        <select class="form-control" name="Bruce_TMT" id="Bruce_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Bruce_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
                                           
                     @if ($errors->has('Bruce_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Bruce_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=77  style='width:57.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Naugthon</span></b></p>
  </td>
  <td width=67  style='width:50.2pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" name="Naugthon_TMT" id="Naugthon_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Naugthon_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
                                           
                     @if ($errors->has('Naugthon_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Naugthon_TMT') }}</strong>
                           </span>
                     @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:10.8pt'>
  <td width=76  style='width:56.75pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '></span></b></p>
  </td>
  <td width=59  style='width:44.0pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '></span></b></p>
  </td>
  <td width=67  style='width:50.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '></span></b></p>
  </td>
  <td width=67  style='width:50.15pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '></span></b></p>
  </td>
  <td width=67  style='width:50.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Otro</span></b></p>
  </td>
  <td width=67  style='width:50.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input id="Otro_TMT" type="text" class="form-control numero" name="Otro_TMT" value='{{(isset($data))  ? $data->Otro_TMT  :old("Otro_TMT") }}' >
                                           
                     @if ($errors->has('Otro_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Otro_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=68  style='width:50.75pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
 
  </td>
  <td width=67  style='width:50.2pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 
  </td>
  <td width=77  style='width:57.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 
  </td>
  <td width=67  style='width:50.2pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%;MetsAlc_TMT'></span></p>

<table class="table" border=1 cellspacing=0 cellpadding=0 >
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '></span></p>
  </td>
  <td width=65 colspan=2 style='width:48.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>PA</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Sistólica</span></b></p>
  </td>
  <td width=71 colspan=2 style='width:53.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>PA</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Diastólica</span></b></p>
  </td>
  <td width=80 colspan=2 style='width:59.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Frecuencia</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Cardiaca</span></b></p>
  </td>
  <td width=113 colspan=2 style='width:85.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Infradesnivel</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>ST-T </span></b><b style=''><span
  style='font-size:7.0pt;'>&gt;1mV+0.08</span></b><b style=''><span
  style='font-size:9.0pt;'></span></b></p>
  </td>
  <td width=74 colspan=2 style='width:55.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Angor</span></b></p>
  </td>
  <td width=92 colspan=2 style='width:68.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Arritmias</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Ventriculares</span></b></p>
  </td>
  <td width=96 colspan=2 style='width:72.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Arritmias</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:9.0pt;'>Supravent</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Reposo</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>05</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <input id="RepPAS_TMT" type="text" class="form-control numero" name="RepPAS_TMT" value='{{(isset($data))  ? $data->RepPAS_TMT  :old("RepPAS_TMT") }}' >
                                           
                     @if ($errors->has('RepPAS_TMT'))
                          <span class="help-block">
                              <strong>{{ $errors->first('RepPAS_TMT') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>19</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <input id="RepPAD_TMT" type="text" class="form-control numero" name="RepPAD_TMT" value='{{(isset($data))  ? $data->RepPAD_TMT  :old("RepPAD_TMT") }}' >
                                           
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>33</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <input id="RepFC_TMT" type="text" class="form-control numero" name="RepFC_TMT" value='{{(isset($data))  ? $data->RepFC_TMT  :old("RepFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>47</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   
     <select class="form-control" name="RepInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RepInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>61</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 

      <select class="form-control" name="RepAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RepAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   75 
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  
      <select class="form-control" name="RepArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RepArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 89
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>

    <select class="form-control" name="RepArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RepArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Calentamiento</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>06</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 <input id="CalPAS_TMT" type="text" class="form-control numero" name="CalPAS_TMT" value='{{(isset($data))  ? $data->CalPAS_TMT  :old("CalPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>20</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <input id="CalPAD_TMT" type="text" class="form-control numero" name="CalPAD_TMT" value='{{(isset($data))  ? $data->CalPAD_TMT  :old("CalPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>34</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <input id="CalFC_TMT" type="text" class="form-control numero" name="CalFC_TMT" value='{{(isset($data))  ? $data->CalFC_TMT  :old("CalFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>48</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>


       <select class="form-control" name="CalInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->CalInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>62</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>

      <select class="form-control" name="CalAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->CalAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>76</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     
            <select class="form-control" name="CalArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->CalArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>90</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   
     <select class="form-control" name="CalArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->CalArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Estadio I</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>07</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input id="EstaIPAS_TMT" type="text" class="form-control numero" name="EstaIPAS_TMT" value='{{(isset($data))  ? $data->EstaIPAS_TMT  :old("EstaIPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>21</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 <input id="EstaIPAD_TMT" type="text" class="form-control numero" name="EstaIPAD_TMT" value='{{(isset($data))  ? $data->EstaIPAD_TMT  :old("EstaIPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>35</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input id="EstaIFC_TMT" type="text" class="form-control numero" name="EstaIFC_TMT" value='{{(isset($data))  ? $data->EstaIFC_TMT  :old("EstaIFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>49</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>

      <select class="form-control" name="EstaIInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>63</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" name="EstaIAngor_TMT" id="EstaIAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>77</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" name="EstaIArritVent_TMT" id="EstaIArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>91</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="EstaIArritSupV_TMT" id="EstaIArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Estadio II</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>08</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 <input type="text" class="form-control numero" name="EstaIIPAS_TMT" id="EstaIIPAS_TMT" value='{{(isset($data))  ? $data->EstaIIPAS_TMT  :old("CalPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>22</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <input type="text" class="form-control numero" name="EstaIIPAD_TMT" id="EstaIIPAD_TMT" value='{{(isset($data))  ? $data->EstaIIPAD_TMT  :old("EstaIIPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>36</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <input type="text" class="form-control numero" name="EstaIIFC_TMT" id="EstaIIFC_TMT" value='{{(isset($data))  ? $data->EstaIIFC_TMT  :old("EstaIIFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>50</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="EstaIIInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>64</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="EstaIIAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>78</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="EstaIIArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>92</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="EstaIIArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Estadio III</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>09</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <input type="text" class="form-control numero" name="EstaIIIPAS_TMT" id="EstaIIIPAS_TMT" value='{{(isset($data))  ? $data->EstaIIIPAS_TMT  :old("EstaIIIPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>23</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'> 
         <input type="text" class="form-control numero" name="EstaIIIPAD_TMT" id="EstaIIIPAD_TMT" value='{{(isset($data))  ? $data->EstaIIIPAD_TMT  :old("EstaIIIPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>37</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="EstaIIIFC_TMT" id="EstaIIIFC_TMT" value='{{(isset($data))  ? $data->EstaIIIFC_TMT  :old("EstaIIIFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>51</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>

       <select class="form-control" name="EstaIIIInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIIInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
         
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>65</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="EstaIIIAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIIAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>79</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="EstaIIIArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIIArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>93</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
             <select class="form-control" name="EstaIIIArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIIIArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Estadio IV</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>10</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input type="text" class="form-control numero" name="EstaIVPAS_TMT" id="EstaIVPAS_TMT" value='{{(isset($data))  ? $data->EstaIVPAS_TMT  :old("EstaIVPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>24</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
                  <input type="text" class="form-control numero" name="EstaIVPAD_TMT" id="EstaIVPAD_TMT" value='{{(isset($data))  ? $data->EstaIVPAD_TMT  :old("EstaIVPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>38</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="EstaIVFC_TMT" id="EstaIVFC_TMT" value='{{(isset($data))  ? $data->EstaIVFC_TMT  :old("EstaIVFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>52</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
                <select class="form-control" name="EstaIVInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIVInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>66</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="EstaIVAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIVAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>80</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="EstaIVArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIVArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>94</span> </p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
             <select class="form-control" name="EstaIVArritSupV_TMT"> 
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaIVArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Estadio V</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>11</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="EstaVPAS_TMT" id="EstaVPAS_TMT" value='{{(isset($data))  ? $data->EstaVPAS_TMT  :old("EstaVPAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>25</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input type="text" class="form-control numero" name="EstaVPAD_TMT" id="EstaVPAD_TMT" value='{{(isset($data))  ? $data->EstaVPAD_TMT  :old("EstaVPAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>39</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="EstaVFC_TMT" id="EstaVFC_TMT" value='{{(isset($data))  ? $data->EstaVFC_TMT  :old("EstaVFC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>53</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="EstaVInfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaVInfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>67</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="EstaVAngor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaVAngor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>81</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="EstaVArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaVArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>95</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="EstaVArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EstaVArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 1</span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>12</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input type="text" class="form-control numero" name="Recup1PAS_TMT" id="Recup1PAS_TMT" value='{{(isset($data))  ? $data->Recup1PAS_TMT  :old("Recup1PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>26</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input type="text" class="form-control numero" name="Recup1PAD_TMT" id="Recup1PAD_TMT" value='{{(isset($data))  ? $data->Recup1PAD_TMT  :old("Recup1PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>40</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input type="text" class="form-control numero" name="Recup1FC_TMT" id="Recup1FC_TMT" value='{{(isset($data))  ? $data->Recup1FC_TMT  :old("Recup1FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>54</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup1InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup1InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>68</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Recup1Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup1Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>82</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Recup1ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup1ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>96</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup1ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup1ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 2</span><span
  ></span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>13</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input type="text" class="form-control numero" name="Recup2PAS_TMT" id="Recup2PAS_TMT" value='{{(isset($data))  ? $data->Recup2PAS_TMT  :old("Recup2PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>27</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <input type="text" class="form-control numero" name="Recup2PAD_TMT" id="Recup2PAD_TMT" value='{{(isset($data))  ? $data->Recup2PAD_TMT  :old("Recup2PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>41</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="Recup2FC_TMT" id="Recup2FC_TMT" value='{{(isset($data))  ? $data->Recup2FC_TMT  :old("Recup2FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>55</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Recup2InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup2InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>69</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Recup2Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup2Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>83</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Recup2ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup2ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>97</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Recup2ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup2ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 3</span><span
  ></span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>14</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input type="text" class="form-control numero" name="Recup3PAS_TMT" id="Recup3PAS_TMT" value='{{(isset($data))  ? $data->Recup3PAS_TMT  :old("Recup3PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>28</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input type="text" class="form-control numero" name="Recup3PAD_TMT" id="Recup3PAD_TMT" value='{{(isset($data))  ? $data->Recup3PAD_TMT  :old("Recup3PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>42</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <input type="text" class="form-control numero" name="Recup3FC_TMT" id="Recup3FC_TMT" value='{{(isset($data))  ? $data->Recup3FC_TMT  :old("Recup3FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>56</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup3InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup3InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            70
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Recup3Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup3Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>84</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="Recup3ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup3ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>98</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup3ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup3ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 4</span><span
  ></span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>15</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input type="text" class="form-control numero" name="Recup4PAS_TMT" id="Recup4PAS_TMT" value='{{(isset($data))  ? $data->Recup4PAS_TMT  :old("Recup4PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>29</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
              <input type="text" class="form-control numero" name="Recup4PAD_TMT" id="Recup4PAD_TMT" value='{{(isset($data))  ? $data->Recup4PAD_TMT  :old("Recup4PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>43</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input type="text" class="form-control numero" name="Recup4FC_TMT" id="Recup4FC_TMT" value='{{(isset($data))  ? $data->Recup4FC_TMT  :old("Recup4FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>57</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Recup4InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup4InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>71</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Recup4Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup4Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>85</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Recup4ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup4ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>99</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Recup4ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup4ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 8</span><span
  ></span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>16</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input type="text" class="form-control numero" name="Recup8PAS_TMT" id="Recup8PAS_TMT" value='{{(isset($data))  ? $data->Recup8PAS_TMT  :old("Recup8PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>30</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="Recup8PAD_TMT" id="Recup8PAD_TMT" value='{{(isset($data))  ? $data->Recup8PAD_TMT  :old("Recup8PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>44</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input type="text" class="form-control numero" name="Recup8FC_TMT" id="Recup8FC_TMT" value='{{(isset($data))  ? $data->Recup8FC_TMT  :old("Recup8FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>58</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Recup8InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup8InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>72</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
              <select class="form-control" name="Recup8Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup8Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>86</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
              <select class="form-control" name="Recup8ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup8ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>100</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Recup8ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup8ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;height:10.8pt'>
  <td width=111 style='width:83.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Recuperación 10</span><span
  ></span></b></p>
  </td>
  <td width=28 style='width:21.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>18</span></p>
  </td>
  <td width=37 style='width:27.6pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input type="text" class="form-control numero" name="Recup10PAS_TMT" id="Recup10PAS_TMT" value='{{(isset($data))  ? $data->Recup10PAS_TMT  :old("Recup10PAS_TMT") }}' >
  </td>
  <td width=23 style='width:17.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>32</span></p>
  </td>
  <td width=48 style='width:36.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input type="text" class="form-control numero" name="Recup10PAD_TMT" id="Recup10PAD_TMT" value='{{(isset($data))  ? $data->Recup10PAD_TMT  :old("Recup10PAD_TMT") }}' >
  </td>
  <td width=34 style='width:25.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>46</span></p>
  </td>
  <td width=45 style='width:34.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input type="text" class="form-control numero" name="Recup10FC_TMT" id="Recup10FC_TMT" value='{{(isset($data))  ? $data->Recup10FC_TMT  :old("Recup10FC_TMT") }}' >
  </td>
  <td width=35 style='width:26.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>60</span></p>
  </td>
  <td width=79 style='width:58.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup10InfSTT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup10InfSTT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:20.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>74</span></p>
  </td>
  <td width=46 style='width:34.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Recup10Angor_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup10Angor_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>88</span></p>
  </td>
  <td width=63 style='width:47.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup10ArritVent_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup10ArritVent_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=34 style='width:25.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>101</span></p>
  </td>
  <td width=62 style='width:46.25pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Recup10ArritSupV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Recup10ArritSupV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;MetsAlc_TMT'><span
style='mso-spacerun:yes'>                    </span></span><span
style='font-size:8.0pt;line-height:107%;
'></span></p>

<table class="table">
  <td width=192 colspan=8 style='width:144.0pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Arritmias Ventriculares</span></b></p>
  </td>
  <td width=216 colspan=8 style='width:162.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Razón para Detener</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:10.8pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Monomorficas</span></b></p>
  </td>
  <td style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>102</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="ArritVent_Mono_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_Mono_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2 style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Solicitud del Pac.</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>108</span></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="RazonDet_SolPac_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RazonDet_SolPac_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:10.8pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Polimorficas</span></b></p>
  </td>
  <td width=37 style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>103</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="ArritVent_Polimo_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_Polimo_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2 style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Arritmias</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>109</span></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" name="RazonDet_Arrit_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RazonDet_Arrit_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:15.9pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Bigeminadas</span></b></p>
  </td>
  <td style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>104</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
   <select class="form-control" name="ArritVent_Bige_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_Bige_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2 style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>HTA</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>110</span></p>
  </td>
  <td width=48 colspan=2  style='width:35.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
     <select class="form-control" name="RazonDet_HTA_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RazonDet_HTA_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:10.8pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Pareadas</span></b></p>
  </td>
  <td style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>105</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="ArritVent_Pareadas_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_Pareadas_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2 style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>Isquemia</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>111</span></p>
  </td>
  <td width=48 colspan=2  style='width:35.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="RazonDet_Isq_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RazonDet_Isq_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:10.8pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>R/T</span></b></p>
  </td>
  <td style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>106</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="ArritVent_RT_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_RT_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2 style='width:94.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>&gt;85% FC max.</span></b></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>112</span></p>
  </td>
  <td width=48 colspan=2  style='width:35.85pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" name="RazonDet_85FCmax_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->RazonDet_85FCmax_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:10.8pt'>
  <td width=117 colspan=3 style='width:87.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>TV</span></b></p>
  </td>
  <td style='width:27.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  '>107</span></p>
  </td>
  <td colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="ArritVent_TV_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ArritVent_TV_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=126 colspan=2  style='width:94.65pt;border:none;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '></span></b></p>
  </td>
  <td width=42 colspan=2  style='width:31.5pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=48 colspan=2  style='width:35.85pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
 </tr>

</table>
 

<table class="table">
 <tr style='mso-yfti-irow:8;height:10.8pt'>
  <td width=132 colspan=4 style='width:99.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>ISQUEMIA</span></b></p>
  </td>
  <td width=132 colspan=5 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>ARRITMIA</span></b></p>
  </td>
  <td width=144 colspan=5 style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>HTA</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:10.8pt'>
  <td width=66 style='width:49.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Positivo</span></b></p>
  </td>
  <td width=36 style='width:27.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>113</span></p>
  </td>
  <td width=30 colspan=2 style='width:40.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="Isquemia_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Isquemia_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=66 colspan=3 style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:9.0pt;
  '>Positivo</span></b></p>
  </td>
  <td width=36 style='width:27.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;
  '>114</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Arritmia_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Arritmia_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
  <td width=66 colspan=2 style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Positivo</span></p>
  </td>
  <td width=42 colspan=2 style='width:31.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>115</span></p> HTA_TMT
  </td>
  <td   style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" name="HTA_TMT">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->HTA_TMT ==1) ? 'selected' : '' }}>1 = Si</option>
            </select> 
  </td>
 </tr>
 
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%;MetsAlc_TMT'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:143.75pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width=150  style='width:112.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style=''><span style='font-size:10.0pt;
  '>METS ALCANZADOS</span></b></p>
  </td>
  <td width=42  style='width:31.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>116</span></p>
  </td>
  <td width=50  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  133
     <input type="text" class="form-control numero" name="MetsAlc_TMT" id="MetsAlc_TMT" value='{{(isset($data))  ? $data->MetsAlc_TMT  :old("MetsAlc_TMT") }}' >
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%;'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=170 style='width:127.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Tratamiento Indicado</span></b></p>
  </td>
  <td width=170 style='width:127.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style=''><span
  style='font-size:10.0pt;'>Dosis</span></b></p>
  </td>
  <td width=49  style='width:36.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=291  style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
 
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=170  style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
    <input type="text" class="form-control" name="TtoInd1" id="TtoInd1" value='{{(isset($data))  ? $data->TtoInd1  :old("TtoInd1") }}' >
  </td>
  <td width=170  style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input type="text" class="form-control numero" name="DosisTtoind1_TMT" id="DosisTtoind1_TMT" value='{{(isset($data))  ? $data->DosisTtoind1_TMT  :old("DosisTtoind1_TMT") }}' >
  </td>
  <td width=49  style='width:36.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=291  style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=170  style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <input type="text" class="form-control" name="TtoInd2" id="TtoInd2" value='{{(isset($data))  ? $data->TtoInd2  :old("TtoInd2") }}' >
  </td>
  <td width=170  style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
         <input type="text" class="form-control numero" name="DosisTtoind2_TMT" id="DosisTtoind2_TMT" value='{{(isset($data))  ? $data->DosisTtoind2_TMT  :old("DosisTtoind2_TMT") }}' >
  </td>
  <td width=49  style='width:36.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=291  style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Doctor: </span> <input type="text" class="form-control" name="Doctor_TMT" id="Doctor_TMT" value='{{(isset($data))  ? $data->Doctor_TMT  :old("Doctor_TMT") }}' ></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:13.1pt'>
  <td width=170  style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
   <input type="text" class="form-control" name="TtoInd3" id="TtoInd3" value='{{(isset($data))  ? $data->TtoInd3  :old("TtoInd3") }}' >
  </td>
  <td width=170  style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
      <input type="text" class="form-control numero" name="DosisTtoind3_TMT" id="DosisTtoind3_TMT" value='{{(isset($data))  ? $data->DosisTtoind3_TMT  :old("DosisTtoind3_TMT") }}' >
  </td>
  <td width=49  style='width:36.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=291  style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=170  style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="text" class="form-control numero" name="TtoInd4" id="TtoInd4" value='{{(isset($data))  ? $data->TtoInd4  :old("TtoInd4") }}' >
  </td>
  <td width=170  style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input type="text" class="form-control numero" name="DosisTtoind4_TMT" id="DosisTtoind4_TMT" value='{{(isset($data))  ? $data->DosisTtoind4_TMT  :old("DosisTtoind4_TMT") }}' >
  </td>
  <td width=49  style='width:36.95pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '></span></p>
  </td>
  <td width=291  style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;
  '>Fecha: </span> 

     <input id="Fecha_TMT2" type="date" class="form-control" name="Fecha_TMT2" value='{{(isset($data)) && strtotime($data->Fecha_TMT2) != false  ? date("Y-m-d", strtotime($data->Fecha_TMT2)) : "0001-01-01" }}' required >
                                           
                     @if ($errors->has('Fecha_TMT2'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_TMT2') }}</strong>
                           </span>
                     @endif
</p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;MetsAlc_TMT'></span></p>

</div>


                    <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>

              </form>
          </div>
</div>

<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;
  mso-font-charset:0;
  mso-generic-font-family:swiss;
  mso-font-pitch:variable;
  mso-font-signature:-536859905 -1073732485 9 0 511 0;
  mso-font-src:0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0cm;
  margin-right:0cm;
  margin-bottom:8.0pt;
  margin-left:0cm;
  line-height:107%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-ansi-language:EN-US;
  mso-fareast-language:EN-US;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-family:"Calibri","sans-serif";
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;
  mso-ansi-language:EN-US;
  mso-fareast-language:EN-US;}
.MsoPapDefault
  {mso-style-type:export-only;
  margin-bottom:8.0pt;
  line-height:107%;}
@page WordSection1
  {size:612.0pt 792.0pt;
  margin:21.3pt 50.4pt 21.3pt 50.4pt;
  mso-header-margin:36.0pt;
  mso-footer-margin:36.0pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
-->
</style>

@endsection

@push('scripts')

<script type="text/javascript">
    

$(document).ready(function(){

  var id = $("#patient_id").val();
    var fecha = $("#Fecha_TMT").val();
    patient(id,fecha);


  $("#patient_id").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#Fecha_TMT").val();
    patient(id,fecha);
 }); 

   $("#Fecha_TMT").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#Fecha_TMT").val();
    patient(id,fecha);
 }); 

  


   $('.numero').mask("9999",);
   $('.decimal').mask("999.99",{reverse: true});
   $('.time').mask("00:00:00 SS", {
        placeholder: "HH:MM:SS AM o PM", 
        insertMode: false, 
        showMaskOnHover: false,
        hourFormat: 12});

}); 


function patient(value,fecha){

   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                         $("#nombre").val(response.data.first_name);
                         $("#nombre2").val(response.data.second_name);
                         $("#apellido").val(response.data.last_name);
                         $("#apellido2").val(response.data.second_last_name);
                         $("#cedula").val(response.data.cedula);
                         $("#date_birth").val(response.data.date_birth);
                         $("#sexo").val(response.data.gender);
                         $("#edad").val(response.data.edad);
                         $("#hist_id").val(response.data.hist_id);
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}


</script>

@endpush


