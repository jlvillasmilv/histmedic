@extends('layouts.main')
@section('title', ' Evaluacion Cardiovascular 1er Version')
@section('content')
<div class="panel panel-primary">
      <div class="panel-heading">
                  <a class="pull-right" href="{{ route('version1.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Evaluacion Cardiovascular 1er Version</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('version1.update',  $data->id) : route('version1.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                        @include('patient.patient')

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><span
style='font-size:8.0pt;'>
1. Numero de estudio:
</span><input id="hist_id" type="text" readonly=""   name="hist_id" value='{{old("hist_id")}}' >  </p>


<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td valign=top style='border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>1er
  Nombre           </span><input id="nombre" type="text" readonly=""  class="form-control" name="nombre" value='{{old("nombre")}}' >  </p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>2do
  Nombre      </span> <input id="nombre2" type="text" readonly=""  class="form-control" name="nombre2" value='{{old("nombre2")}}' ></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>1er
  Apellido  </span><input id="apellido" type="text" readonly=""  class="form-control" name="apellido" value='{{old("apellido")}}' ></p>
  </td>
  <td colspan=2 valign=top style='border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>2do
  Apellido      </span><input id="apellido2" type="text"  class="form-control" readonly="" name="apellido2" value='{{old("apellido2")}}' ></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Cedula 
  </span><input id="cedula" type="text" readonly=""  class="form-control" name="cedula" value='{{old("cedula")}}' ></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Edad  
  </span> <input id="edad" type="text" readonly=""  class="form-control" name="edad" value='{{old("edad")}}' ></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Cuidad 
  </span> <input id="city_born" type="text" readonly=""  class="form-control" name="city_born" value='{{old("city_born")}}' ></p>
  </td>
  <td colspan=2 valign=top style='border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Fecha nacimiento</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <input id="date_birth" type="text" readonly=""  class="form-control" name="date_birth" value='{{old("date_birth")}}' ></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Estado
  o País    </span><input id="state_country" type="text" readonly=""  class="form-control" name="state_country" value='{{old("state_country")}}' ></p>
  </td>
 </tr>
 <tr>
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Sexo                   
  </span><input id="sexo" type="text" readonly=""  class="form-control" name="sexo" value='{{old("sexo")}}' ></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Raza               
  </span><input id="ethnicity" type="text" readonly=""  class="form-control" name="ethnicity" value='{{old("ethnicity")}}' ></p>
  </td>
  <td colspan=2 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Grado
  de instrucción                 </span>

          <select class="form-control" name="EC_GradoInstruccion">
                <option value="a" {{ old("EC_GradoInstruccion", isset($data) ? $data->EC_GradoInstruccion : "")=="a" ? 'selected':''}}> a = analfabeta</option>
                <option value="b" {{ old("EC_GradoInstruccion", isset($data) ? $data->EC_GradoInstruccion : "")=="b" ? 'selected':''}}> b = leer y escribir</option>
                <option value="c" {{ old("EC_GradoInstruccion", isset($data) ? $data->EC_GradoInstruccion : "")=="c" ? 'selected':''}}> c = Primaria</option>
                <option value="d" {{ old("EC_GradoInstruccion", isset($data) ? $data->EC_GradoInstruccion : "")=="d" ? 'selected':''}}> d = secundaria</option>
                <option value="e" {{ old("EC_GradoInstruccion", isset($data) ? $data->EC_GradoInstruccion : "")=="e" ? 'selected':''}}> e = estudios Universitarios</option>
            </select>


</p>
  </td>
  <td colspan=5 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Dirección                                                 
  </span><input id="EC_Direccion" type="text" class="form-control" name="EC_Direccion" value='{{(isset($data))  ? $data->EC_Direccion  : old("EC_Direccion") }}' maxlength="50" ></p>
  </td>
  <td colspan=2 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Teléfono                         
  </span><input id="EC_Telefono" type="text" class="form-control" name="EC_Telefono" value='{{(isset($data))  ? $data->EC_Telefono  : old("EC_Telefono") }}' maxlength="50" ></p>
  </td>
 </tr>
 <tr>
  <td colspan=2 valign=top style='border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Día
  aplicación de la Historia                </span>
   

     <input id="EC_FechaEvaluacion" type="date" class="form-control" name="EC_FechaEvaluacion" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->EC_FechaEvaluacion))  : date("Y-m-d") }}' required="">
                                           
</p>
  </td>
  <td colspan=5 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Lugar de aplicación de la historia  
  </span>
   <input id="EC_LugarEval" type="text" class="form-control" name="EC_LugarEval" value='{{(isset($data))  ? $data->EC_LugarEval  : old("EC_LugarEval") }}' maxlength="20" >

</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>&nbsp;</span></p>
  </td>
  <td colspan=4 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>Nombre
  y código del facultativo                      </span>
   <input id="EC_NombreEvaluador" type="text" class="form-control" name="EC_NombreEvaluador" value='{{(isset($data))  ? $data->EC_NombreEvaluador  : old("EC_NombreEvaluador") }}' maxlength="20" >
</p>
  </td>
 </tr>
 <tr height=0>
  <td width=103 style='border:none'></td>
  <td width=92 style='border:none'></td>
  <td width=106 style='border:none'></td>
  <td width=62 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=50 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=64 style='border:none'></td>
  <td width=64 style='border:none'></td>
  <td width=96 style='border:none'></td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='line-height:107%;
'>HISTORIA DE ENFERMEDADES SISTEMICAS</span></b></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo. Para el item 48 indique la cantidad de años fumando. Para
el item 49 seleccione la opcion 1 o 2 según sea el caso.</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:9.0pt;'>Ha
  sido diagnosticado alguna vez de: </span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span style='font-size:9.0pt;
  '>&nbsp;</span></sup></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Traumatismo craneal que requirió atención medica</span></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select class="form-control" name="EC_TCE">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_TCE ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Enfermedad
  cardiaca </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>

          <select class="form-control" name="EC_EnfCardiaca">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EnfCardiaca ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedad renal </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_Enf_renal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_renal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'> Infarto Cardiaco</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>  <select class="form-control" name="EC_Infarto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Infarto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select></span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedad hepática</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_EnfHepatica">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EnfHepatica ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Insuficiencia Cardiaca</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_ICC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Sífilis, SIDA</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <select class="form-control" name="EC_SifilisSIDA">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SifilisSIDA ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Angina </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <select class="form-control" name="EC_Angina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Angina ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedad del SNC</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
    <select class="form-control" name="EC_Enf_SNC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_SNC ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Arritmias</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_Arritmias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Arritmias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Dislipidemias</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Dislipidemias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Dislipidemias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Cardiopatía congénita</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_CardioCong">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_CardioCong ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedades vasculares</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Enf_vasculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_vasculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Soplos cardiacos</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_SoplosCard">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoplosCard ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Traumatismo torácico que requirió atención medica</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select class="form-control" name="EC_Traumatismo_Toracico">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Traumatismo_Toracico ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Chagas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_Chagas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Chagas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Tumor de diversas etiología</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select class="form-control" name="EC_Tumor">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Tumor ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Marcapaso</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Marcapaso">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Marcapaso ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedad pulmonar </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Enf_pulmonar">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_pulmonar ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Tratamiento quirúrgico de las afecciones coronarias</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
             <select class="form-control" name="EC_Revascula_Coronaria">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Revascula_Coronaria ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Pérdida importante de la vista o audición</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_PerdidaVisAud">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_PerdidaVisAud ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Otras enfermedades</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select class="form-control" name="EC_OtrasEnfCard">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_OtrasEnfCard ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Tabaquismo </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_Tabaquismo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Tabaquismo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
 </tr>
 <tr style='height:22.9pt'>
  <td rowspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Hipertensión arterial</span></p>
  </td>
  <td rowspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
             <select class="form-control" name="EC_HTA">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>    Años de tabaquismo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>

           <input id="EC_Tiempo_fumando" type="text" class="form-control numero2" name="EC_Tiempo_fumando" value='{{(isset($data))  ? $data->EC_Tiempo_fumando  :old("EC_Tiempo_fumando") }}'>  

</span></b></p>
  </td>
 </tr>
 <tr style='height:21.55pt'>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.55pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>1.  &lt; de 1 caja     2. &gt; de 1 caja                </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.55pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_Cajas">
                <option value="1">1 = < 1 Caja </option>
                <option value="2" {{ (isset($data) && $data->EC_Cajas ==1) ? 'selected' : '' }}>2 = >1 Caja</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Ha tomado alguna vez tto</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
                <select class="form-control" name="EC_HTAtrt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTAtrt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>




  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Colagenopatías</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '> 

  <select class="form-control" name="EC_Colagenopatias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Colagenopatias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
</span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Diabetes </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <select class="form-control" name="EC_Diabetes">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Diabetes ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Otras Enfermedades, accidentes o intervenciones quirúrgicas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

        <select class="form-control" name="EC_OtrasEnfoQx">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_OtrasEnfoQx ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Epilepsia</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Epilpsia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Epilpsia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>¿Hospitalizado en los últimos 10 años? </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_EC_Hospt10a">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EC_Hospt10a ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Enfermedad Tiroidea</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
              <select class="form-control" name="EC_Enf_Tiroidea">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_Tiroidea ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Retraso mental </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_RetrasoMental">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_RetrasoMental ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Cáncer, linfomas, otros</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Cancer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Hábitos alcohólicos</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <select class="form-control" name="EC_Alcohol">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Alcohol ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
</table>

<br>

<p class=MsoNormal><b><span style='line-height:107%;
'>ANTECEDENTES FAMILIARES </span></b><span
style='line-height:107%;'>(Especifique
edad de aparición o muerte)</span></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Padre</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Madre</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Hermanos</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Hijos</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Abuelos Paternos</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Abuelos Maternos</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Tíos</span></b></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Infarto Cardiaco</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Inf_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_Inf_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_Inf_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Inf_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select class="form-control" name="EC_Inf_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;'>
        <select id="95" class="form-control" name="EC_Inf_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="103" class="form-control" name="EC_Inf_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Angor</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt; '>
         <select class="form-control" name="EC_Ang_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_Ang_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>

  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Ang_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_Ang_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <select class="form-control" name="EC_Ang_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       
        <select id="96" class="form-control" name="EC_Ang_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
         <select id="104" class="form-control" name="EC_Ang_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>HTA</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>   
   <select class="form-control" name="EC_HTA_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_HTA_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_HTA_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select class="form-control" name="EC_HTA_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

       <select class="form-control" name="EC_HTA_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="97" class="form-control" name="EC_HTA_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <select id="105" class="form-control" name="EC_HTA_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>ACV</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select class="form-control" name="EC_ACV_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_ACV_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     
            <select class="form-control" name="EC_ACV_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_ACV_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select class="form-control" name="EC_ACV_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select id="98" class="form-control" name="EC_ACV_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="106" class="form-control" name="EC_ACV_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Insuficiencia
  Cardiaca</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select class="form-control" name="EC_ICC_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_ICC_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select class="form-control" name="EC_ICC_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select class="form-control" name="EC_ICC_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select id="91" class="form-control" name="EC_ICC_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="99" class="form-control" name="EC_ICC_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        
        <select id="107" class="form-control" name="EC_ICC_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Muerte
  Súbita</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_MuertSub_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Muert_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Muert_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select class="form-control" name="EC_MuertSub_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_MuertSub_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select id="92" class="form-control" name="EC_MuertSub_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select id="100" class="form-control" name="EC_MuertSub_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="108" class="form-control" name="EC_MuertSub_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Diabetes</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_DM_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select class="form-control" name="EC_DM_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
        <select class="form-control" name="EC_DM_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_DM_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select id="93" class="form-control" name="EC_DM_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="101" class="form-control" name="EC_DM_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="109" class="form-control" name="EC_DM_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:15.1pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Cáncer</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Cancer_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Cancer_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select class="form-control" name="EC_Cancer_Hermanos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Hermanos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select class="form-control" name="EC_Cancer_Hijos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Hijos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="94" class="form-control" name="EC_Cancer_AbuePater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_AbuePater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select id="102" class="form-control" name="EC_Cancer_AbueMater">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_AbueMater ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="110" class="form-control" name="EC_Cancer_Tio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Tio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span style='line-height:107%;
'>&nbsp;</span></b></p>

<p class=MsoNormal><b><span style='line-height:107%;
'>ANTECEDENTES FUNCIONALES</span></b></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Ha presentado alguna vez:</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Pasado</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Presente</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Ha presentado alguna vez:</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Pasado</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>Presente</span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Angina estable</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="111" class="form-control" name="EC_Ang_Est_pas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Est_pas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <select id="112" class="form-control" name="EC_Ang_Est_prese">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Est_prese ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Ortopnea</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>

    <select id="126" class="form-control" name="EC_Ortopn_pas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ortopn_pas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
          </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="127" class="form-control" name="EC_Ortopn_prese">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ortopn_prese ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Angina inestable</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
        <select id="114" class="form-control" name="EC_Ang_Ines_pas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Ines_pas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="115" class="form-control" name="EC_Ang_Ines_prese">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Ines_prese ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Mareos</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="129" class="form-control" name="EC_Mareos_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Mareos_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select id="130" class="form-control" name="EC_Mareos_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Mareos_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Palpitaciones</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select id="117" class="form-control" name="EC_Palpi_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Palpi_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="118" class="form-control" name="EC_Palpi_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Palpi_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Sincope</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="132" class="form-control" name="EC_Sincope_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Sincope_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
          <select id="133" class="form-control" name="EC_Sincope_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Sincope_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Disnea paroxística nocturna</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
        
        <select id="120" class="form-control" name="EC_DPN_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DPN_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="121" class="form-control" name="EC_DPN_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DPN_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Edema en miembros inferiores</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="135" class="form-control" name="EC_EMI_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EMI_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="136" class="form-control" name="EC_EMI_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EMI_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Disnea de esfuerzo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <select id="123" class="form-control" name="EC_DisEsf_pasado">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DisEsf_pasado ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="124" class="form-control" name="EC_DisEsf_presente">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DisEsf_presente ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:14.4pt'>
  <td width=432 colspan=4 style='width:323.75pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  ;color:black'>OBJETO DE LA PRESCRIPCION
  MEDICAMENTOSA</span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=168 style='width:125.75pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Apto. Cardiovascular</span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="138" class="form-control" name="EC_AptoCardio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AptoCardio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Otros
  medicamentos</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

        <select id="143" class="form-control" name="EC_OtrosMed">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_OtrosMed ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=168 style='width:125.75pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>SNC y psicotrópicos</span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
         <select id="139" class="form-control" name="EC_SNCyPsi">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SNCyPsi ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=168 style='width:125.75pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Quimioterapéuticos</span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

      <select id="140" class="form-control" name="EC_Quimio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Quimio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=168 style='width:125.75pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Drg. Apto. Gastroint</span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
        <select id="141" class="form-control" name="EC_AptoGastro">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AptoGastro ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=168 style='width:125.75pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Drg. De acción local </span></p>
  </td>
  <td width=72 style='width:54.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="142" class="form-control" name="EC_AccionLocal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AccionLocal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='line-height:107%;
'>MEDIDAS ANTROPOMETRICAS</span></b></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Colocar el valor registrado para cada ítem
en la entrevista cardiovascular (Numérico)</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:23.6pt'>
  <td width="7%" style='width:7.72%;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Peso:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <input id="144" type="text" class="form-control decimal" name="EC_Peso" value='{{(isset($data))  ? $data->EC_Peso  :old("EC_Peso") }}' >          

  </span></b></p>
  </td>
  <td width="7%" style='width:7.5%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Talla:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <input id="145" type="text" class="form-control decimal" name="EC_Talla" value='{{(isset($data))  ? $data->EC_Talla  :old("EC_Talla") }}' >


  </span></b></p>
  </td>
  <td width="23%" style='width:23.48%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Circunferencia Cintura:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <input id="146" type="text" class="form-control decimal" name="EC_Ccintura" value='{{(isset($data))  ? $data->EC_Ccintura  :old("EC_Ccintura") }}' >


  </span></b></p>
  </td>
  <td width="23%" style='width:23.58%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Circunferencia Cadera:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
     <input id="147" type="text" class="form-control decimal" name="EC_Ccadera" value='{{(isset($data))  ? $data->EC_Ccadera  :old("EC_Ccadera") }}' >

  </span></b></p>
  </td>
  <td width="17%" style='width:17.66%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Pliegue Cutáneo</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <input id="148" type="text" class="form-control"  maxlength="6" name="EC_PligueCut" value='{{(isset($data))  ? $data->EC_PligueCut  :old("EC_PligueCut") }}' >


  </span></b></p>
  </td>
  <td width="20%" style='width:20.06%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:23.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Superficie Corporal</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <input id="149" type="text" class="form-control"  maxlength="6" name="EC_SC" value='{{(isset($data))  ? $data->EC_SC  :old("EC_SC") }}' >


  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='line-height:107%;
'>EVALUACION CARDIOVASCULAR</span></b></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Colocar el valor registrado para cada ítem
en la entrevista cardiovascular (Numérico)</span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border: none'>
 <tr>
  <td width=78 style='width:58.5pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>FC:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <input id="150" type="text" class="form-control decimal" name="EC_FC" value='{{(isset($data))  ? $data->EC_FC  :old("EC_FC") }}' >


  </span></b></p>
  </td>
  <td width=54 style='width:40.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>FR:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <input id="151" type="text" class="form-control decimal" name="EC_FR" value='{{(isset($data))  ? $data->EC_FR  :old("EC_FR") }}' >



  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Presión Sist sentado:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
          <input id="152" type="text" class="form-control decimal" name="EC_PAS_sent" value='{{(isset($data))  ? $data->EC_PAS_sent  :old("EC_PAS_sent") }}' >

  </span></b></p>
  </td>
  <td width=114 style='width:85.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Presión Diast sentado:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
           <input id="153" type="text" class="form-control decimal" name="EC_PAD_sent" value='{{(isset($data))  ? $data->EC_PAD_sent  :old("EC_PAD_sent") }}' >


  </span></b></p>
  </td>
  <td width=120 style='width:90.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Presión Sist de pie:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        
           <input id="154" type="text" class="form-control decimal" name="EC_PAS_pie" value='{{(isset($data))  ? $data->EC_PAS_pie  :old("EC_PAS_pie") }}' >

  </span></b></p>
  </td>
  <td width=126 style='width:94.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Presión Diast de pie:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <input id="155" type="text" class="form-control decimal" name="EC_PAD_pie" value='{{(isset($data))  ? $data->EC_PAD_pie  :old("EC_PAD_pie") }}' >

  </span></b></p>
  </td>
  <td width=114 style='width:85.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  '>Pulso Radial sentado:</span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <input id="156" type="text" class="form-control decimal" name="EC_PP_sentado" value='{{(isset($data))  ? $data->EC_PP_sentado  :old("EC_PP_sentado") }}' >


  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:14.4pt'>
  <td width=352 colspan=3 style='width:263.65pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >Evalué la presencia de:</span></b></p>
  </td>
  <td width=321 colspan=3 style='width:241.0pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >Evalué la presencia de:</span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Disnea</span></p>
  </td>
  <td  colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     <select id="157" class="form-control" name="EC_Disnea">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Disnea ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Auscultación pulmonar anormal</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
        <select id="165" class="form-control" name="EC_AuscPulnormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuscPulnormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Claudicación intermitente</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
           <select id="158" class="form-control" name="EC_ClaudInterm">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ClaudInterm ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Hepatomegalia</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="166" class="form-control" name="EC_Hepatomegalia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Hepatomegalia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Anormalidades en el latido de la punta</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
       <select id="159" class="form-control" name="EC_AnorLatiPunt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AnorLatiPunt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Reflujo hepatoyugular</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
          <select id="167" class="form-control" name="EC_ReflujoHepa">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ReflujoHepa ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Ritmo cardiaco anormal </span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
           <select id="160" class="form-control" name="EC_RitmoCnormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_RitmoCnormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Edema en miembros inferiores</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
       <select id="168" class="form-control" name="EC_EMI">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EMI ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
 
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Soplo cardiacO</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
          <select id="161" class="form-control" name="EC_soplo_cardiaco">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_soplo_cardiaco ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Varicosidades</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
     <select id="169" class="form-control" name="EC_Varicosidades">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Varicosidades ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Ruidos de baja tonalidades</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="162" class="form-control" name="EC_RuidoBajaTona">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_RuidoBajaTona ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Pulsos anormal</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="170" class="form-control" name="EC_PulsoNormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_PulsoNormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Soplo carotideo </span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
        <select id="163" class="form-control" name="EC_SoploCarotideo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoploCarotideo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Soplo abdominal </span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     <select id="171" class="form-control" name="EC_SoploAbdominal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoploAbdominal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
  
 </tr>
 <tr style='height:14.4pt'>
  <td width=252 style='width:189.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Frote pericárdico </span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
            <select id="164" class="form-control" name="EC_FrotePericardico">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_FrotePericardico ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 
  <td width=224 style='width:168.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>Otros </span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
      <select id="172" class="form-control" name="EC_Otros">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Otros ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='line-height:107%;'>ELECTROCARDIOGRAMA</span></b></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Colocar el valor registrado para cada ítem
en la entrevista cardiovascular (Numérico)</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:7.6pt'>
  <td valign=top style='border:solid windowtext 1.0pt;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>Sin</span><span style='font-size:8.0pt;'>usal</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    
     <select id="173" class="form-control" name="EC_Sinusal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Sinusal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>No Sin</span><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>usal</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    
         <select id="174" class="form-control" name="EC_NoSinusal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NoSinusal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>FA</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;;
  background:#D9D9D9'>
    
      <input id="175" type="text" class="form-control" maxlength="6" name="EC_FA" value='{{(isset($data))  ? $data->EC_FA  :old("EC_FA") }}'>  


  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>FC</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    

          <input id="176" type="text" class="form-control" maxlength="6" name="EC_FC2" value='{{(isset($data))  ? $data->EC_FC2  :old("EC_FC2") }}'> 

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>P</span><span style='font-size:8.0pt;'>R</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
      <input id="177" type="text" class="form-control" maxlength="6" name="EC_PR" value='{{(isset($data))  ? $data->EC_PR  :old("EC_PR") }}'> 

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>QR</span><span style='font-size:8.0pt;'>S</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    
       <input id="178" type="text" class="form-control" maxlength="6" name="EC_QRS" value='{{(isset($data))  ? $data->EC_QRS  :old("EC_QRS") }}'> 

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;;
  background:#D9D9D9'>QT</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    
     <input id="179" type="text" class="form-control" maxlength="6" name="EC_QT" value='{{(isset($data))  ? $data->EC_QT  :old("EC_QT") }}'> 

  </span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;'>A<span
  style='background:#D9D9D9'>QR</span>S</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:7.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;'>
    
      <input id="180" type="text" class="form-control" maxlength="6" name="EC_AQRS" value='{{(isset($data))  ? $data->EC_AQRS  :old("EC_AQRS") }}'> 


  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:14.4pt'>
  <td colspan=3 style='border:solid windowtext 1.0pt;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  ;color:black'>EXTRASISTOLES</span></b></p>
  </td>
  <td colspan=3 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>BLOQUEOS</span></b></p>
  </td>
  <td colspan=3 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>ARRITMIAS Supravent</span></b></p>
  </td>
  <td colspan=3 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>CRECIMIENTOS</span></b></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Supraventiculares</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
         <select id="181" class="form-control" name="EC_supraventiculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_supraventiculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Derecha incompleto</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '> <select id="190" class="form-control" name="EC_derechaincompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_derechaincompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select></span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Bradicardia</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select id="200" class="form-control" name="EC_bradicardia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_bradicardia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Aurícula
  izquierda</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select id="206" class="form-control" name="EC_AuricularIzq">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuricularIzq ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Ventriculares</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
       <select id="182" class="form-control" name="EC_ventriculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ventriculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Derecha completo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select id="191" class="form-control" name="EC_derechacompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_derechacompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Flutter auricular</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="201" class="form-control" name="EC_flutterAuricular">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_flutterAuricular ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Aurícula
  derecha</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select id="207" class="form-control" name="EC_AuricularDer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuricularDer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&gt;de 1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>  <select id="183" class="form-control" name="EC_1de1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_1de1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select></span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Izquierda incompleto</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="192" class="form-control" name="EC_izquierdaincompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_izquierdaincompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Taquicardia sinus</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select id="202" class="form-control" name="EC_taquicardiaSinus">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_taquicardiaSinus ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Ventrículo
  izquierdo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
     <select id="208" class="form-control" name="EC_VentriculoIzq">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_VentriculoIzq ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&lt;de 1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="184" class="form-control" name="EC_2de1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_2de1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select></span></b></p>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Izquierda completo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

      <select id="193" class="form-control" name="EC_izquierdacompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_izquierdacompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>T.P.S.V</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
        <select id="203" class="form-control" name="EC_TPSV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_TPSV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>Ventrículo
  derecho</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
   <select id="209" class="form-control" name="EC_VentriculoDer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_VentriculoDer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Monomorficas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
            <select id="185" class="form-control" name="EC_monomorficas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_monomorficas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select></span></b></p>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Hemibloqueo ant.</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <select id="194" class="form-control" name="EC_hemibloqueoAnt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_hemibloqueoAnt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>W.P.W.</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
       <select id="204" class="form-control" name="EC_WPW">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_WPW ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Polimórficas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
     <select id="186" class="form-control" name="EC_polimorficas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_polimorficas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Hemibloqueo post.</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      <select id="195" class="form-control" name="EC_hemibloqueoPost">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_hemibloqueoPost ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>T auricular multifocal</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select id="205" class="form-control" name="EC_TauricularMultifocal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_TauricularMultifocal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Bigeminadas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    

      <select id="187" class="form-control" name="EC_bigeminadas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_bigeminadas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Primer grado</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
    <select id="196" class="form-control" name="EC_Primer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Primer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Trigeminada</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
     <select id="188" class="form-control" name="EC_trigeminada">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_trigeminada ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Mobitz I</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
    
      
<select id="197" class="form-control" name="EC_mobitz_I">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_mobitz_I ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Dupletas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select id="189" class="form-control" name="EC_dupletas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_dupletas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Mobitz II</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
     <select id="198" class="form-control" name="EC_mobitz_II">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_mobitz_II ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:14.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;;
  color:black'>Completo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:9.0pt;
  '>
      <select id="199 " class="form-control" name="EC_completo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_completo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif";color:#538135'>Coloque en cada ítem 0 = si es negativo; y
1 = si es positivo</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=213 colspan=3 style='width:159.75pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >ISQUEMIA</span></b></p>
  </td>
  <td width=213 colspan=3 style='width:159.8pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >LESION</span></b></p>
  </td>
  <td width=180 colspan=3 style='width:134.7pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >NECROSIS</span></b></p>
  </td>
 </tr>
 <tr>
  <td width=213 colspan=3 valign=top style='width:159.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style=''>Subepicardica</span></b></p>
  </td>
  <td width=213 colspan=3 valign=top style='width:159.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style=''>Subepicardica</span></b></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
      <select id="230" name="EC_NecroInf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroInf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Inferior</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
      <select id="210" class="form-control" name="EC_IsqSubepi_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>inferior</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="220" name="EC_LesSubepi_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>inferior</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
      <select id="231" name="EC_NecroSeptal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroSeptal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Septal</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
     <select id="211" class="form-control" name="EC_IsqSubepi_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>septal</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     
      <select id="221" name="EC_LesSubepi_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>septal</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    

      <select id="232" name="EC_NecroAntSept">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroAntSept ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Anteroseptal</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
      <select id="212" class="form-control" name="EC_IsqSubepi_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anteroseptal</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="222" name="EC_LesSubepi_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anteroseptal</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
     <select id="233" name="EC_NecroAnt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroAnt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Anterior</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     <select id="213" class="form-control" name="EC_IsqSubepi_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
        <select id="223" name="EC_LesSubepi_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     <select id="234" name="EC_NecroExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Anterior
  extensa</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    <select id="214" class="form-control" name="EC_IsqSubepi_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior extensa</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="224" name="EC_LesSubepi_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior extensa</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.2pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="235" name="EC_NecroPost">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroPost ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=120 valign=top style='width:90.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>Posterior</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=213 colspan=3 valign=bottom style='width:159.75pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >Subendocardica</span></b></p>
  </td>
  <td width=213 colspan=3 valign=bottom style='width:159.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >Subendocardica</span></b></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
        <select id="215" name="EC_IsqSubend_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>inferior</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="225" name="EC_LesSubend_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>inferior</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
        <select id="216" name="EC_IsqSubend_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>septal</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
    <select id="226" name="EC_LesSubend_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>septal</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
      <select id="217" name="EC_IsqSubend_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anteroseptal</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    

   <select id="227" name="EC_LesSubend_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anteroseptal</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=bottom style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    

       <select id="218" name="EC_IsqSubend_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
       <select id="228" name="EC_LesSubend_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=27 valign=top style='width:20.1pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
     
      <select id="219" name="EC_IsqSubend_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td width=153 valign=bottom style='width:114.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior extensa</span></p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:24.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span >
    
       <select id="229" name="EC_LesSubend_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=144 valign=bottom style='width:108.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=';
  color:black'>anterior extensa</span></p>
  </td>
  <td width=36 valign=top style='width:27.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=150 colspan=2 valign=top style='width:112.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
  <td width=30 valign=top style='width:22.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style=''>&nbsp;</span></p>
  </td>
 </tr>
</table>

</div>
<br>
                      
          <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                    
        </form>
      </div>
</div>
<style>
/* Font Definitions */
 @font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:8.0pt;
  margin-left:0cm;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:8.0pt;
  margin-left:36.0pt;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:0cm;
  margin-left:36.0pt;
  margin-bottom:.0001pt;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:8.0pt;
  margin-left:36.0pt;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
.MsoChpDefault
  {font-family:"Calibri","sans-serif";}
.MsoPapDefault
  {margin-bottom:8.0pt;
  line-height:107%;}
@page WordSection1
  {size:612.0pt 792.0pt;
  margin:57.6pt 64.8pt 57.6pt 64.8pt;}
div.WordSection1
  {page:WordSection1;}
-->
</style>
@endsection
@push('scripts')

<script type="text/javascript">
    

$(document).ready(function(){

  var id = $("#patient_id").val();
    var fecha = $("#EC_FechaEvaluacion").val();
    patient(id,fecha);


  $("#patient_id").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#EC_FechaEvaluacion").val();
    patient(id,fecha);
 }); 

   $("#Fecha_TMT").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#EC_FechaEvaluacion").val();
    patient(id,fecha);
 }); 

   $('.numero').mask("9999");
   $('.numero2').mask("99",{reverse: true});
   $('.decimal').mask("999,99",{reverse: true});

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
                         $("#city_born").val(response.data.city_born);
                         $("#state_country").val(response.data.state_country);
                         $("#sexo").val(response.data.gender);
                         $("#ethnicity").val(response.data.ethnicity);
                         $("#edad").val(response.data.edad);
                         $("#hist_id").val(response.data.hist_id);
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}


</script>

@endpush


