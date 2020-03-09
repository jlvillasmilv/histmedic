@extends('layouts.main')
@section('title', ' Evluación Cardiovascular version 2.')
@section('content')


@php
//dump($errors);
@endphp
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('version2.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Evluación Cardiovascular version 2.</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('version2.update',  $data->id) : route('version2.store') }}">
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

<p class=MsoNormal><u><span ><span style='text-decoration:none'>&nbsp;</span></span></u></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:35.95pt'>
  <td width="13%" colspan=2 valign=top style='width:13.84%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>1er Nombre<span style='mso-spacerun:yes'>    </span><b
  style='mso-bidi-font-weight:normal'><input id="nombre" type="text" readonly=""  class="form-control" name="nombre" value='{{old("nombre")}}' ></b> </span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";'></span></b></p>
  </td>
  <td width="13%" valign=top style='width:13.84%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'> </span>2do
  Nombre<span style='mso-spacerun:yes'>  </span><b style='mso-bidi-font-weight:
  normal'> <input id="nombre2" type="text" readonly=""  class="form-control" name="nombre2" value='{{old("nombre2")}}' ></b></span></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.84%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>1er Apellido<span style='mso-spacerun:yes'>   
  </span><b style='mso-bidi-font-weight:normal'><input id="apellido" type="text" readonly=""  class="form-control" name="apellido" value='{{old("apellido")}}' ></b></span></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.84%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>2do Apellido<span style='mso-spacerun:yes'>  
  </span><b style='mso-bidi-font-weight:normal'><input id="apellido2" type="text"  class="form-control" readonly="" name="apellido2" value='{{old("apellido2")}}' ></b></span></p>
  </td>
  <td width="10%" valign=top style='width:10.76%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Cedula<span style='mso-spacerun:yes'>     </span><b
  style='mso-bidi-font-weight:normal'><input id="cedula" type="text" readonly=""  class="form-control" name="cedula" value='{{old("cedula")}}' ></b></span></p>
  </td>
  <td width="8%" colspan=2 valign=top style='width:8.26%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Edad<span style='mso-spacerun:yes'>   </span><b
  style='mso-bidi-font-weight:normal'><input id="edad" type="text" readonly=""  class="form-control" name="edad" value='{{old("edad")}}' ></b></span></p>
  </td>
  <td width="12%" valign=top style='width:12.78%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Cuidad <b style='mso-bidi-font-weight:normal'><input id="city_born" type="text" readonly=""  class="form-control" name="city_born" value='{{old("city_born")}}' ></b></span></p>
  </td>
  <td width="12%" valign=top style='width:12.8%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.95pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>fecha de Nacimiento<b style='mso-bidi-font-weight:
  normal'> <input id="date_birth" type="text" readonly=""  class="form-control" name="date_birth" value='{{old("date_birth")}}' ></b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width="8%" valign=top style='width:8.46%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Sexo<span style='mso-spacerun:yes'>   </span><b
  style='mso-bidi-font-weight:normal'><input id="sexo" type="text" readonly=""  class="form-control" name="sexo" value='{{old("sexo")}}' ></b></span></p>
  </td>
  <td width="20%" colspan=3 valign=top style='width:20.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Grado de Instrucción <b style='mso-bidi-font-weight:
  normal'>
    
        <select class="form-control" name="EC_GradoInstruccion">
                <option value="a" {{ (isset($data) && $data->EC_GradoInstruccion =='a') ? 'selected' : '' }}> a = analfabeta</option>
                <option value="b" {{ (isset($data) && $data->EC_GradoInstruccion =='b') ? 'selected' : '' }}> b = leer y escribir</option>
                <option value="c" {{ (isset($data) && $data->EC_GradoInstruccion =='c') ? 'selected' : '' }}> c = Primaria</option>
                <option value="d" {{ (isset($data) && $data->EC_GradoInstruccion =='d') ? 'selected' : '' }}> d = secundaria</option>
                <option value="e" {{ (isset($data) && $data->EC_GradoInstruccion =='d') ? 'selected' : '' }}> e = estudios Universitarios</option>
            </select>

  </b></span></p>
  </td>
  <td colspan=2 valign=top style='width:17.7%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Día de aplicación<span
  style='mso-spacerun:yes'>       </span>de la Historia</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>
     <input id="EC_FechaEvaluacion" type="date" class="form-control" name="EC_FechaEvaluacion" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->EC_FechaEvaluacion))  : date("Y-m-d") }}' required="">
   </span></b><u><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></u></p>
  </td>
  <td width="21%" colspan=3 valign=top style='width:21.54%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Lugar de aplicación<span
  style='mso-spacerun:yes'>      </span>de la historia</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

          <input id="EC_LugarEval" type="text" class="form-control" name="EC_LugarEval" value='{{(isset($data))  ? $data->EC_LugarEval  : old("EC_LugarEval") }}' maxlength="20" >

</span></b><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td width="32%" colspan=3 valign=top style='width:32.3%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Nombre y Código del Facultativo<span
  style='mso-spacerun:yes'>       </span><b style='mso-bidi-font-weight:normal'> <input id="EC_NombreEvaluador" type="text" class="form-control" name="EC_NombreEvaluador" value='{{(isset($data))  ? $data->EC_NombreEvaluador  : old("EC_NombreEvaluador") }}' maxlength="20" ></b></span></p>
  </td>
 </tr>

 <tr height=0>
  <td width=63 style='border:none'></td>
  <td width=40 style='border:none'></td>
  <td width=103 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=98 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=69 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=50 style='border:none'></td>
  <td width=95 style='border:none'></td>
  <td width=96 style='border:none'></td>
 </tr>
 
</table>

<p class=MsoNormal><u><span style=''><span
 style='text-decoration:none'>&nbsp;</span></span></u></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span 
style='font-family:"Arial","sans-serif"'>ANTECEDENTES CARDIOVASCULARES</span></b></p>

<p class=MsoNormal><span style='font-family:"Arial","sans-serif";mso-ansi-language:
ES-VE'>(0 = Nunca, 1 = Si)</span></p>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Historia
  de enfermedad cardiaca</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>
   <select class="form-control" name="EC_EnfCardiaca">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EnfCardiaca ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

            </span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Marcapaso</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;mso-border-left-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select class="form-control" name="EC_Marcapaso">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Marcapaso ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Infarto Cardiaco</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

        <select class="form-control" name="EC_Infarto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Infarto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Dislipidemias</span></b></span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'></span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
          <select class="form-control" name="EC_Dislipidemias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Dislipidemias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Insuficiencia Cardiaca</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

        <select class="form-control" name="EC_ICC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Enfermedades
  vasculares</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
   
    <select id="31" class="form-control" name="EC_Enf_vasculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_vasculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Angina </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

       <select class="form-control" name="EC_Angina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Angina ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Traumatismo
  torácico que requirió atención medica</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
           <select id="32" class="form-control" name="EC_Traumatismo_Toracico">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Traumatismo_Toracico ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Arritmias</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>
    
        <select class="form-control" name="EC_Arritmias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Arritmias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Enfermedad
  pulmonar </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select id="33" class="form-control" name="EC_Enf_pulmonar">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_pulmonar ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Cardiopatía congénita</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

          <select  id="20" class="form-control" name="EC_CardioCong">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_CardioCong ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Enfermedad
  Tiroidea</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
       <select id="34" class="form-control" name="EC_Enf_Tiroidea">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_Tiroidea ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Soplos cardiacos</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

           <select  id="21" class="form-control" name="EC_SoplosCard">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoplosCard ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Enfermedad
  renal </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

             <select id="35" class="form-control" name="EC_Enf_renal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_renal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l7 level1 lfo19'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial;color:black;'><span style='mso-list:Ignore'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Chagas</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

          <select  id="22" class="form-control" name="EC_Chagas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Chagas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Revascularización
  Coronaria</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
         <select id="36" class="form-control" name="EC_Revascula_Coronaria">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Revascula_Coronaria ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Hipertensión
  arterial</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

        <select  id="23" class="form-control" name="EC_HTA">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Tratamiento
  quirúrgico de afecciones valvulares</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
      <select id="37" class="form-control" name="EC_Cirugia_valvulas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cirugia_valvulas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Año de Diagnostico de HTA</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

        <input id="EC_HTAañoDx" type="text" class="form-control numero" name="EC_HTAañoDx" value='{{(isset($data))  ? $data->EC_HTAañoDx  : old("EC_HTAañoDx") }}' maxlength="4" >


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Colagenopatías</span></b></span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'></span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
     <select id="38" class="form-control" name="EC_Colagenopatias">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Colagenopatias ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:21.6pt'>
  <td rowspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Ha tomado alguna vez tratamiento</span></p>
  </td>
  <td rowspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

             <select  id="25" class="form-control" name="EC_HTAtrt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTAtrt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Enfermedad
  del SNC</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
   
     <select id="39" class="form-control" name="EC_Enf_SNC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Enf_SNC ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:21.6pt'>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>Diabetes</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select id="40" class="form-control" name="EC_Diabetes">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Diabetes ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><u><span style='font-size:
  10.0pt;font-family:"Arial","sans-serif";color:black;'>Tabaquismo
  </span></u></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

       <select  id="26" class="form-control" name="EC_Tabaquismo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Tabaquismo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Año de diagnóstico de diabetes</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <input id="41" type="text" class="form-control numero" name="EC_Fecha_Dxde_DM" value='{{(isset($data))  ? $data->EC_Fecha_Dxde_DM  : old("EC_Fecha_Dxde_DM") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>¿Cuantos años fumando? </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

        <input id="27" type="text" class="form-control numero2" name="EC_Tiempo_fumando" value='{{(isset($data))  ? $data->EC_Tiempo_fumando  : old("EC_Tiempo_fumando") }}' maxlength="4" >

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Utiliza insulina</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select  id="42" class="form-control" name="EC_Insulina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Insulina ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>¿Cuantos cigarrillos al día? </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";'>

     <input id="28" type="text" class="form-control numero2" name="EC_Cigarrillos_dia" value='{{(isset($data))  ? $data->EC_Cigarrillos_dia  : old("EC_Cigarrillos_dia") }}' maxlength="4" >

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>¿Se controla? </span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <select  id="43" class="form-control" name="EC_DM_controlada">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_controlada ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:21.6pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>&nbsp;</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";color:black;'>¿Hospitalizado
  en los últimos 10 años? </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="44" class="form-control" name="EC_EC_Hospt10a">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EC_Hospt10a ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
</table>

<br>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>ANTECEDENTES FUNCIONALES: (0 = Nunca, 1 = Si)</span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width="100%" colspan=4 style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>Ha  presentado alguna vez</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Angina estable</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
        <select  id="45" class="form-control" name="EC_Ang_estable">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_estable ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Ortopnea</span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select  id="50" class="form-control" name="EC_Ortopnea">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ortopnea ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Angina inestable</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="46" class="form-control" name="EC_Ang_inestable">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_inestable ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Claudicación</span></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
 

        <select  id="EC_Claudicacion" class="form-control" name="EC_Claudicacion">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Claudicacion ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Palpitaciones</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      
       <select  id="47" class="form-control" name="EC_Palpitaciones">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Palpitaciones ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Mareos</span></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <select  id="52" class="form-control" name="EC_Mareos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Mareos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Disnea paroxística nocturna</span></p>
  </td>
  <td  valign=top style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select  id="48" class="form-control" name="EC_DPN">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DPN ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Sincope</span></p>
  </td>
  <td style='wborder-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <select  id="53" class="form-control" name="EC_Sincope">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Sincope ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Disnea de esfuerzo</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
      
     <select  id="49" class="form-control" name="EC_Disnea_esfuerzo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Disnea_esfuerzo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Edema en miembros inferiores</span></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
 
       
        <select  id="54" class="form-control" name="EC_Edem_MI">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Edem_MI ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
</table>

<br>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td colspan=4 style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>Drogas Cardiovasculares (0 = Nunca, 1 = Si)</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Betabloqueadores</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

         <select  id="55" class="form-control" name="EC_Betabloqueadores">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Betabloqueadores ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Nitratos</span></p>
  </td>
  <td width=55 style='width:41.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="60" class="form-control" name="EC_Nitratos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Nitratos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Calcioantagonistas</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="56" class="form-control" name="EC_Calcioantagonistas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Calcioantagonistas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Digital</span></p>
  </td>
  <td width=55 style='width:41.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select  id="61" class="form-control" name="EC_Digital">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Digital ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>IECA</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
       <select  id="57" class="form-control" name="EC_IECA">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IECA ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Amiodarona</span></p>
  </td>
  <td width=55 style='width:41.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

          <select  id="62" class="form-control" name="EC_Amiodarona">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Amiodarona ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Diuréticos</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="58" class="form-control" name="EC_Diureticos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Diureticos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Quinidina </span></p>
  </td>
  <td width=55 style='width:41.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="63" class="form-control" name="EC_Quinidina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Quinidina ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=150 style='width:112.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Antihipertensivos de acción central </span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="59" class="form-control" name="EC_Trt_HTA_SNC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Trt_HTA_SNC ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Otros Antiarritmicos</span></p>
  </td>
  <td width=55 style='width:41.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <select  id="64" class="form-control" name="EC_Otros_antiarritmicos">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Otros_antiarritmicos ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
</table>


<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>ANTECEDENTES FAMILIARES </span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>(0 = No, 1 =
Si)</span></b></p>

<table id="detalle" class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=180 valign=top style='width:134.75pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
 
  </td>
  <td width=115 style='width:86.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3B3838;mso-background-themecolor:background2;mso-background-themeshade:
  64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";color:white;mso-themecolor:background1;'>Padre</span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3B3838;mso-background-themecolor:background2;mso-background-themeshade:
  64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";color:white;mso-themecolor:background1;'>Madre</span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3B3838;mso-background-themecolor:background2;mso-background-themeshade:
  64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";color:white;mso-themecolor:background1;'>Hermanos</span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3B3838;mso-background-themecolor:background2;mso-background-themeshade:
  64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";color:white;mso-themecolor:background1;'>Hijos</span></b></p>
  </td>
  <td width=79 style='width:59.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#3B3838;mso-background-themecolor:background2;mso-background-themeshade:
  64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";color:white;mso-themecolor:background1;'>Total</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Infarto Cardiaco</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

             <select id="65" class="form-control sum_infart" onchange="sumar('sum_infart','EC_Infarto_cardiaco_total')" name="EC_Inf_Padre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
     
          <select  id="73" class="form-control sum_infart" onchange="sumar('sum_infart','EC_Infarto_cardiaco_total')" name="EC_Inf_Madre">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Inf_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

          <input id="EC_Inf_Hermanos" type="text" class="form-control numero sum_infart"  onkeyup="sumar('sum_infart','EC_Infarto_cardiaco_total')" name="EC_Inf_Hermanos" value='{{(isset($data))  ? $data->EC_Inf_Hermanos  : old("EC_Inf_Hermanos") }}' maxlength="4" >

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
 

          <input id="EC_Inf_Hijos" type="text" class="form-control numero sum_infart" onkeyup="sumar('sum_infart','EC_Infarto_cardiaco_total')" name="EC_Inf_Hijos" value='{{(isset($data))  ? $data->EC_Inf_Hijos  : old("EC_Inf_Hijos") }}' maxlength="4" >


  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <input id="EC_Infarto_cardiaco_total" type="text" class="form-control numero" name="EC_Infarto_cardiaco_total" value='{{(isset($data))  ? $data->EC_Infarto_cardiaco_total  : old("EC_Infarto_cardiaco_total") }}' maxlength="4" >



  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Angor</span></span><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

           <select  id="66" class="form-control sum_ang" name="EC_Ang_Padre" onchange="sumar('sum_ang','EC_Angor_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
     
       <select  id="74" class="form-control sum_ang" name="EC_Ang_Madre" onchange="sumar('sum_ang','EC_Angor_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Ang_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  

      <input id="EC_Ang_Hermanos" type="text" class="form-control numero sum_ang" name="EC_Ang_Hermanos" value='{{(isset($data))  ? $data->EC_Ang_Hermanos  : old("EC_Ang_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_ang','EC_Angor_total')">

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
 
           <input id="EC_Ang_Hijos" type="text" class="form-control numero sum_ang" name="EC_Ang_Hijos" value='{{(isset($data))  ? $data->EC_Ang_Hijos  : old("EC_Ang_Hijos") }}' maxlength="4" onkeyup="sumar('sum_ang','EC_Angor_total')">
  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <input id="EC_Angor_total" type="text" class="form-control numero" name="EC_Angor_total" value='{{(isset($data))  ? $data->EC_Angor_total  : old("EC_Angor_total") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>HTA</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
        <select  id="67" class="form-control sum_hta" name="EC_HTA_Padre" onchange="sumar('sum_hta','EC_HTA_TOTAL')" >
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_HTA_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select  id="75" class="form-control sum_hta" name="EC_HTA_Madre" onchange="sumar('sum_hta','EC_HTA_TOTAL')" >
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->EC_HTA_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
        </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

       <input id="EC_HTA_Hermanos" type="text" class="form-control numero sum_hta" name="EC_HTA_Hermanos" value='{{(isset($data))  ? $data->EC_HTA_Hermanos  : old("EC_HTA_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_hta','EC_HTA_TOTAL')" >
 
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

        <input id="EC_HTA_Hijos" type="text" class="form-control numero sum_hta" name="EC_HTA_Hijos" value='{{(isset($data))  ? $data->EC_HTA_Hijos  : old("EC_HTA_Hijos") }}' maxlength="4" onkeyup="sumar('sum_hta','EC_HTA_TOTAL')" >

  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

  <input id="EC_HTA_TOTAL" type="text" class="form-control numero2" name="EC_HTA_TOTAL" value='{{(isset($data))  ? $data->EC_HTA_TOTAL  : old("EC_HTA_TOTAL") }}' maxlength="4" >
  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>ACV</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select  id="68" class="form-control" name="EC_ACV_Padre sum_acv" onchange="sumar('sum_acv','EC_Acv_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

          <select  id="76" class="form-control sum_acv" name="EC_ACV_Madre" onchange="sumar('sum_acv','EC_Acv_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ACV_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

     <input id="EC_ACV_Hermanos" type="text" class="form-control numero sum_acv" name="EC_ACV_Hermanos" value='{{(isset($data))  ? $data->EC_ACV_Hermanos  : old("EC_ACV_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_acv','EC_Acv_total')">

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <input id="EC_ACV_Hijos" type="text" class="form-control numero sum_acv" name="EC_ACV_Hijos" value='{{(isset($data))  ? $data->EC_ACV_Hijos  : old("EC_ACV_Hijos") }}' maxlength="4" onkeyup="sumar('sum_acv','EC_Acv_total')" >

  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>


       <input id="EC_Acv_total" type="text" class="form-control numero sum_acv" name="EC_Acv_total" value='{{(isset($data))  ? $data->EC_Acv_total  : old("EC_Acv_total") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>ICC</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select  id="69" class="form-control sum_icc" name="EC_ICC_Padre" onchange="sumar('sum_icc','IEC_cc_total')">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->EC_ICC_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select  id="77" class="form-control sum_icc" name="EC_ICC_Madre" onchange="sumar('sum_icc','IEC_cc_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ICC_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

       <input id="EC_ICC_Hermanos" type="text" class="form-control numero sum_icc" name="EC_ICC_Hermanos" value='{{(isset($data))  ? $data->EC_ICC_Hermanos  : old("EC_ICC_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_icc','IEC_cc_total')" >

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <input id="EC_ICC_Hijos" type="text" class="form-control numero sum_icc" name="EC_ICC_Hijos" value='{{(isset($data))  ? $data->EC_ICC_Hijos  : old("EC_ICC_Hijos") }}' maxlength="4" onkeyup="sumar('sum_icc','IEC_cc_total')">

  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <input id="IEC_cc_total" type="text" class="form-control numero" name="IEC_cc_total" value='{{(isset($data))  ? $data->IEC_cc_total  : old("IEC_cc_total") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Muerte Súbita</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <select  id="70" class="form-control sum_Muert" name="EC_MuertSub_Padre" onchange="sumar('sum_Muert','EC_Muerte_súbita_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_MuertSub_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <select  id="78" class="form-control sum_Muert" name="EC_Muert_Madre" onchange="sumar('sum_Muert','EC_Muerte_súbita_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Muert_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
 
       <input id="EC_MuertSub_Hermanos" type="text" class="form-control numero sum_Muert" name="EC_MuertSub_Hermanos" value='{{(isset($data))  ? $data->EC_MuertSub_Hermanos  : old("EC_MuertSub_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_Muert','EC_Muerte_súbita_total')" >

    
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <input id="EC_MuertSub_Hijos" type="text" class="form-control numero sum_Muert" name="EC_MuertSub_Hijos" value='{{(isset($data))  ? $data->EC_MuertSub_Hijos  : old("EC_MuertSub_Hijos") }}' maxlength="4" onkeyup="sumar('sum_Muert','EC_Muerte_súbita_total')" >

  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <input id="EC_Muerte_súbita_total" type="text" class="form-control numero" name="EC_Muerte_súbita_total" value='{{(isset($data))  ? $data->EC_Muerte_súbita_total  : old("EC_Muerte_súbita_total") }}' maxlength="4" >


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Diabetes</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

           <select id="71" class="form-control sum_dm" name="EC_DM_Padre" onchange="sumar('sum_dm','EC_Diabetes_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

         <select  id="79" class="form-control sum_dm" name="EC_DM_Madre" onchange="sumar('sum_dm','EC_Diabetes_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_DM_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <input id="EC_DM_Hermanos" type="text" class="form-control numero sum_dm" name="EC_DM_Hermanos" value='{{(isset($data))  ? $data->EC_DM_Hermanos  : old("EC_DM_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_dm','EC_Diabetes_total')">

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <input id="EC_DM_Hijos" type="text" class="form-control numero sum_dm" name="EC_DM_Hijos" value='{{(isset($data))  ? $data->EC_DM_Hijos  : old("EC_DM_Hijos") }}' maxlength="4" onkeyup="sumar('sum_dm','EC_Diabetes_total')">
  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <input id="EC_Diabetes_total" type="text" class="form-control numero" name="EC_Diabetes_total" value='{{(isset($data))  ? $data->EC_Diabetes_total  : old("EC_Diabetes_total") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=180 style='width:134.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Cáncer</span></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

          <select  id="72" class="form-control sum_cancer" name="EC_Cancer_Padre" onchange="sumar('sum_cancer','EC_Cancer_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Padre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
        <select  id="80" class="form-control sum_cancer" name="EC_Cancer_Madre" onchange="sumar('sum_cancer','EC_Cancer_total')">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Cancer_Madre ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

       <input id="EC_Cancer_Hermanos" type="text" class="form-control numero sum_cancer" name="EC_Cancer_Hermanos" value='{{(isset($data))  ? $data->EC_Cancer_Hermanos  : old("EC_Cancer_Hermanos") }}' maxlength="4" onkeyup="sumar('sum_cancer','EC_Cancer_total')">

  </td>
  <td width=115 style='width:86.4pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

       <input id="EC_Cancer_Hijos" type="text" class="form-control numero sum_cancer" name="EC_Cancer_Hijos" value='{{(isset($data))  ? $data->EC_Cancer_Hijos  : old("EC_Cancer_Hijos") }}' maxlength="4" onkeyup="sumar('sum_cancer','EC_Cancer_total')">
 
  </td>
  <td width=79 style='width:59.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

  <input id="EC_Cancer_total" type="text" class="form-control numero" name="EC_Cancer_total" value='{{(isset($data))  ? $data->EC_Cancer_total  : old("EC_Cancer_total") }}' maxlength="4" >

  </span></b></p>
  </td>
 </tr>
</table>


<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style=''>EVALUACIÓN CARDIOVASCULAR</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width="16%" valign=top style='width:16.2%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Frec</span></span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";'>. Cardiaca<b
  style='mso-bidi-font-weight:normal'>
    

   <input id="105" type="text" class="form-control numero2" name="EC_FC" value='{{(isset($data))  ? $data->EC_FC  : old("EC_FC") }}' maxlength="4" >

  </b></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td width="12%" valign=top style='width:12.34%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Frec Resp<b style='mso-bidi-font-weight:normal'>
    

    <input id="106" type="text" class="form-control numero2" name="EC_FR" value='{{(isset($data))  ? $data->EC_FR  : old("EC_FR") }}' maxlength="4" >

  </b></span></p>
  </td>
  <td width="16%" valign=top style='width:16.2%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Presión Sist sentado<b style='mso-bidi-font-weight:
  normal'>
  
   <input id="107" type="text" class="form-control numero2" name="EC_PAS_sent" value='{{(isset($data))  ? $data->EC_PAS_sent  : old("EC_PAS_sent") }}' maxlength="4" >


  </b></span></p>
  </td>
  <td width="10%" valign=top style='width:10.8%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Presión Diast sentado<b style='mso-bidi-font-weight:
  normal'>
    
    <input id="108" type="text" class="form-control numero2" name="EC_PAD_sent" value='{{(isset($data))  ? $data->EC_PAD_sent  : old("EC_PAD_sent") }}' maxlength="4" >


  </b></span></p>
  </td>
  <td width="12%" valign=top style='width:12.34%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Presión Sist de pie<b style='mso-bidi-font-weight:
  normal'>
    
   <input id="109" type="text" class="form-control numero2" name="EC_PAS_pie" value='{{(isset($data))  ? $data->EC_PAS_pie  : old("EC_PAS_pie") }}' maxlength="4" >



  </b></span></p>
  </td>
  <td width="16%" valign=top style='width:16.2%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Presión Diast de pie<b style='mso-bidi-font-weight:
  normal'>
    
   <input id="110" type="text" class="form-control numero2" name="EC_PAD_pie" value='{{(isset($data))  ? $data->EC_PAD_pie  : old("EC_PAD_pie") }}' maxlength="4" >



  </b></span></p>
  </td>
  <td width="15%" valign=top style='width:15.88%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";'>Pulso radial sentado<b style='mso-bidi-font-weight:
  normal'>
    
     <input id="111" type="text" class="form-control numero2" name="EC_PP_sentado" value='{{(isset($data))  ? $data->EC_PP_sentado  : old("EC_PP_sentado") }}' maxlength="4" >



  </b></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><u><span style=''><span
 style='text-decoration:none'>&nbsp;</span></span></u></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'><span
style='mso-spacerun:yes'> </span>(0 = No, 1 = Si)</span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=739 colspan=4 style='width:553.9pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>Evalue la
  presencia de</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Disnea</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <select  id="112" class="form-control" name="EC_Disnea">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Disnea ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Auscultación pulmonar anormal</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <select id="120" class="form-control" name="EC_AuscPulnormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuscPulnormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:19.4pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Claudicación intermitente</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select  id="113" class="form-control" name="EC_ClaudInterm">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ClaudInterm ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Hepatomegalia</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
  
    <select id="121" class="form-control" name="EC_Hepatomegalia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Hepatomegalia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Anormalidades en el latido de la punta</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select  id="114" class="form-control" name="EC_AnorLatiPunt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AnorLatiPunt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Reflujo <span class=SpellE>hepatoyugular</span></span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select id="122" class="form-control" name="EC_ReflujoHepa">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ReflujoHepa ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Ritmo cardiaco anormal </span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select id="115" class="form-control" name="EC_RitmoCnormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_RitmoCnormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Edema en miembros inferiores </span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select id="123" class="form-control" name="EC_EMI">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_EMI ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Soplo carotideo</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select id="116" class="form-control" name="EC_soplo_cardiaco">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_soplo_cardiaco ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Varicosidades</span></span><span style='font-size:
  10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select id="124" class="form-control" name="EC_Varicosidades">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Varicosidades ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Ruidos de baja tonalidades</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <select id="117" class="form-control" name="EC_RuidoBajaTona">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_RuidoBajaTona ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Pulsos anormales</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
   
    <select id="125" class="form-control" name="EC_PulsoNormal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_PulsoNormal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Soplo aórtico</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <select id="118" class="form-control" name="EC_SoploCarotideo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoploCarotideo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Soplo Abdominal</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select id="126" class="form-control" name="EC_SoploAbdominal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_SoploAbdominal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Frote pericárdico </span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

  
      <select id="119" class="form-control" name="EC_FrotePericardico">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_FrotePericardico ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Otro </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <select id="127" class="form-control" name="EC_Otros">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Otros ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
</table>

<br>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>ELECTROCARDIOGRAMA</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width="8%" style='width:8.0%;border:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>FC</span></p>
  </td>
  <td width="11%" style='width:11.94%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
  <input id="128" type="text" class="form-control" name="EC__FC" value='{{(isset($data))  ? $data->EC__FC  : old("EC__FC") }}' maxlength="10" >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td  style='width:6.54%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>PR</span></p>
  </td>
  <td width="13%" style='width:13.4%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    <input id="129" type="text" class="form-control" name="EC_PR" value='{{(isset($data))  ? $data->EC_PR  : old("EC_PR") }}' maxlength="10" >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td  style='width:7.56%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>QRS</span></p>
  </td>
  <td width="12%" style='width:12.4%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
   <input id="130" type="text" class="form-control" name="EC_QRS" value='{{(isset($data))  ? $data->EC_QRS  : old("EC_QRS") }}' maxlength="10" >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td  style='width:6.42%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>QT</span></p>
  </td>
  <td width="13%" style='width:13.52%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
  <input id="131" type="text" class="form-control" name="EC_QT" value='{{(isset($data))  ? $data->EC_QT  : old("EC_QT") }}' maxlength="5" >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
  <td  style='width:7.04%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>AQRS</span></p>
  </td>
  <td width="13%" style='width:13.18%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
   <input id="132" type="text" class="form-control" name="EC_AQRS" value='{{(isset($data))  ? $data->EC_AQRS  : old("EC_AQRS") }}' maxlength="10" >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>&nbsp;</span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>(0 = No, 1 =
Si)</span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.0pt'>
  <td  colspan=2 style='width:23.68%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:22.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>EXTRASISTOLES</span></b></p>
  </td>
  <td  colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3B3838;mso-background-themecolor:background2;
  mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;height:22.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>BLOQUEOS</span></b></p>
  </td>
  <td  colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3B3838;mso-background-themecolor:background2;
  mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;height:22.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>ARRITMIAS Supravent</span></b></p>
  </td>
  <td  colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3B3838;mso-background-themecolor:background2;
  mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;height:22.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>CRECIMIENTO</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Supraventiculares</span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="133" class="form-control" name="EC_supraventiculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_supraventiculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Derecha incompleto</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="142" class="form-control" name="EC_derechaincompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_derechaincompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>Bradicardia</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   
      <select id="152" class="form-control" name="EC_bradicardia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_bradicardia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>




  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Aurícula izquierda</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="159" class="form-control" name="EC_AuricularIzq">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuricularIzq ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Ventriculares</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="134" class="form-control" name="EC_ventriculares">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_ventriculares ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Derecha completo</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
  
   <select id="143" class="form-control" name="EC_derechacompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_derechacompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>Taquicardia
  sinus</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <select id="153" class="form-control" name="EC_taquicardiaSinus">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_taquicardiaSinus ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Aurícula derecha</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="160" class="form-control" name="EC_AuricularDer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_AuricularDer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>&gt;de 1</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="135" class="form-control" name="EC_1de1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_1de1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Izquierda incompleto</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="144" class="form-control" name="EC_izquierdaincompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_izquierdaincompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>Fibrilacion
  auricular</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="154" class="form-control" name="EC_FA">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_FA ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Ventrículo izquierdo</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="161" class="form-control" name="EC_VentriculoIzq">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_VentriculoIzq ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>&lt;de 1</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="136" class="form-control" name="EC_2de1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_2de1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Izquierda completo</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="145" class="form-control" name="EC_izquierdacompleto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_izquierdacompleto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>Flutter
  auricular</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


      <select id="155" class="form-control" name="EC_flutterAuricular">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_flutterAuricular ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Ventrículo derecho</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="162" class="form-control" name="EC_VentriculoDer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_VentriculoDer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Monomorficas</span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="137" class="form-control" name="EC_monomorficas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_monomorficas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Hemibloqueo ant.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
  
  <select id="146" class="form-control" name="EC_hemibloqueoAnt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_hemibloqueoAnt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>T.P.S.V</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="156" class="form-control" name="EC_TPSV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_TPSV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Polimórficas</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <select id="138" class="form-control" name="EC_polimorficas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_polimorficas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Hemibloqueo post.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="147" class="form-control" name="EC_hemibloqueoPost">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_hemibloqueoPost ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>W.P.W.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="157" class="form-control" name="EC_WPW">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_WPW ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Bigeminadas</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
   
      <select id="139" class="form-control" name="EC_bigeminadas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_bigeminadas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Primer grado</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="148" class="form-control" name="EC_Primer">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_Primer ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>



  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black'>T
  auricular multifocal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <select id="158" class="form-control" name="EC_TauricularMultifocal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_TauricularMultifocal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  background:lightgrey;mso-highlight:lightgrey;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Trigeminada</span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="140" class="form-control" name="EC_trigeminada">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_trigeminada ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Mobitz I</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="149" class="form-control" name="EC_mobitz_I">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_mobitz_I ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><span class=SpellE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Dupletas</span></span><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="141" class="form-control" name="EC_dupletas">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_dupletas ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Mobitz II</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="150" class="form-control" name="EC_mobitz_II">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_mobitz_II ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><sup><span style='font-size:12.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></sup></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>Completo</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <select id="151" class="form-control" name="EC_completo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_completo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<br>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>(0 = No, 1 =
Si)</span></b></p>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>ISQUEMIA</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3B3838;mso-background-themecolor:background2;
  mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>LESION</span></b></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#3B3838;mso-background-themecolor:background2;
  mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:white;
  mso-themecolor:background1;'>NECROSIS</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Subepicardica</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#404040;mso-background-themecolor:
  text1;mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><sup><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";color:#00B0F0;'>&nbsp;</span></sup></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Subepicardica</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#404040;mso-background-themecolor:text1;
  mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><sup><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";color:#00B0F0;'>&nbsp;</span></sup></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>inferior</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

   <select id="183" class="form-control" name="EC_NecroInf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroInf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>inferior</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="163" class="form-control" name="EC_IsqSubepi_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>Inferior</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="173" class="form-control" name="EC_LesSubepi_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>septal</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

        <select id="184" class="form-control" name="EC_NecroSeptal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroSeptal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>septal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="164" class="form-control" name="EC_IsqSubepi_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>   </span><span
  style='mso-spacerun:yes'> </span>septal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="174" class="form-control" name="EC_LesSubepi_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>anteroseptal</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

       <select id="185" class="form-control" name="EC_NecroAntSept">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroAntSept ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>   
  </span>anteroseptal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="165" class="form-control" name="EC_IsqSubepi_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>   </span><span
  style='mso-spacerun:yes'> </span><span class=SpellE>anteroseptal</span></span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   
    <select id="175" class="form-control" name="EC_LesSubepi_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>anterior </span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>


   <select id="186" class="form-control" name="EC_NecroAnt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroAnt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="166" class="form-control" name="EC_IsqSubepi_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="176" class="form-control" name="EC_LesSubepi_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>anterior extensa</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

     <select id="187" class="form-control" name="EC_NecroExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior
  extensa</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="167" class="form-control" name="EC_IsqSubepi_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubepi_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior
  extensa</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="177" class="form-control" name="EC_LesSubepi_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubepi_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>posterior</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>

     <select id="188" class="form-control" name="EC_NecroPost">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_NecroPost ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span class=SpellE><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";color:black;'>Subendocárdica</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";color:black;'></span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#404040;mso-background-themecolor:
  text1;mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  color:black;'>Subendocárdica</span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#404040;mso-background-themecolor:text1;
  mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>&nbsp;</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>inferior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="168" class="form-control" name="EC_IsqSubend_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>inferior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <select id="178" class="form-control" name="EC_LesSubend_Inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal;mso-layout-grid-align:none;text-autospace:
  none'><b style='mso-bidi-font-weight:normal'><sup><span style='font-size:
  12.0pt;font-family:"Arial","sans-serif";color:#00B0F0;'>&nbsp;</span></sup></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>septal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="169" class="form-control" name="EC_IsqSubend_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>septal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="179" class="form-control" name="EC_LesSubend_Septal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Septal ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>   
  </span>anteroseptal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="170" class="form-control" name="EC_IsqSubend_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>   
  </span>anteroseptal</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
  
    <select id="180" class="form-control" name="EC_LesSubend_Antsep">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Antsep ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

   <select id="171" class="form-control" name="EC_IsqSubend_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  <select id="181" class="form-control" name="EC_LesSubend_Ant">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_Ant ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:18.0pt'>
  <td  style='border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior
  extensa</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <select id="172" class="form-control" name="EC_IsqSubend_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_IsqSubend_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal;mso-layout-grid-align:none;text-autospace:none'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";color:black;'><span style='mso-spacerun:yes'>    </span>anterior
  extensa</span></p>
  </td>
  <td  style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
   
    <select id="182" class="form-control" name="EC_LesSubend_AntExt">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->EC_LesSubend_AntExt ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </span></b></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  
  </td>
 </tr>
</table>


</div>
<br>
 
                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
          </form>
      </div>
</div>
@endsection
@push('scripts')

<script type="text/javascript">
    
$(document).ready(function(){

    patient();

  $("#patient_id").change(function(){
       patient();
 }); 

   $("#Fecha_TMT").change(function(){
       patient();
 }); 

   $('.numero').mask("9999");
   $('.numero2').mask("999",{reverse: true});
   $('.decimal').mask("999,99",{reverse: true});

});

function sumar(idvar,target) {

  var total = 0;

  $("."+ idvar).each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {

      total += parseFloat($(this).val());

    }

  });

  $('#'+ target).val(total);
 
}


function patient(){

  var id = $("#patient_id").val();
  var fecha = $("#EC_FechaEvaluacion").val();

   let url = '/api/list/patient/'+id+'/'+fecha;
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


