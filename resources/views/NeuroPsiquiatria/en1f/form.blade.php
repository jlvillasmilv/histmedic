@extends('layouts.main')
@section('title', 'EVALUACION CLINICA NEUROPSIQUIATRICA')
@section('content')

@php
//dump($errors);
@endphp
  <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('en1f.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>EVALUACION CLINICA NEUROPSIQUIATRICA (1era Versión)</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('en1f.update',  $data->id) : route('en1f.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                  @include('patient.patient')
<body>

<div class=WordSection1>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>N° <b style='mso-bidi-font-weight:
normal'> <input  id="hist_id" type="text"  name="hist_id" required readonly=""></b><span
style='mso-spacerun:yes'>                                                         
</span><span style='mso-spacerun:yes'>                         </span>Fecha<span
class=GramE>: <b style='mso-bidi-font-weight:normal'><span
style='mso-spacerun:yes'> </span><input id="fech_neu" type="date"  name="fech_neu"  value='{{(old("fech_neu",isset($data))  ? date("Y-m-d", strtotime($data->fech_neu))  :date("Y-m-d")) }}' requiered></b></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>Evaluado por: <b
style='mso-bidi-font-weight:normal'> <input id="Evaluador" type="text" name="Evaluador" value='{{ old("Evaluador", isset($data) ? $data->Evaluador : "") }}' maxlength="25"></b><span style='mso-spacerun:yes'>    
</span><span style='mso-spacerun:yes'>                              </span><span
style='mso-spacerun:yes'>         </span>Años en el estudio <b
style='mso-bidi-font-weight:normal'>
  
     <SELECT style="width: 25%" id="Tiempo_MAS" name="Tiempo_MAS" >
                                  <option value="0">0</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                                                  
                                </SELECT>

</span></span></p>


<table class="table" border=1 cellspacing=0 cellpadding=0 width=100%
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.45pt'>
  <td colspan=2  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Nombres<span
  style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'> 
    <input  id="first_name" type="text" name="first_name" required  readonly=""></b></span></p>
  </td>
  <td colspan=3  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Apellidos<span style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'>
    
      <input  id="last_name" type="text" name="first_name" required  readonly="">


  </b></span></p>
  </td>
  <td colspan=2  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Edad<b style='mso-bidi-font-weight:normal'>
    
      <input class="form-control" id="age" type="text" name="age" required  readonly="">

  </b></span></p>
  </td>
  <td style='width:59.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Sexo <b style='mso-bidi-font-weight:normal'>
    
      <input class="form-control" id="gender" type="text" name="gender"  readonly="">


  </b></span></p>
  </td>
  <td style='width:134.25pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:22.45pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Fecha de Nacimiento<b style='mso-bidi-font-weight:normal'>
    
        <input class="form-control" id="date_birth" type="text" name="date_birth" value="{{old('date_birth')}}" readonly="">

  </b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td style='width:93.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Raza<b style='mso-bidi-font-weight:
  normal'> 

       <input class="form-control" id="ethnicity" type="text" name="ethnicity"  readonly="">

</b></span></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Idioma materno<b style='mso-bidi-font-weight:normal'>
    
      <input id="IdiomaMaterno" type="text" class="form-control" name="IdiomaMaterno" value='{{ old("IdiomaMaterno", isset($data) ? $data->IdiomaMaterno : "") }}' maxlength="25">

  </b></span></p>
  </td>
  <td colspan=3  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Estado civil<span style='mso-spacerun:yes'>  </span><b style='mso-bidi-font-weight:normal'>

      <SELECT class="form-control" id="marita_a" name="marita_a" >
             <option {{ (isset($data) && $data->marita_a == 1) ? 'selected' : '' }} value="1" >1 = Casado/Concubinato</option>
             <option {{ (isset($data) && $data->marita_a == 2) ? 'selected' : '' }} value="2" >2 = Separado/Divorciado</option>
             <option {{ (isset($data) && $data->marita_a == 3) ? 'selected' : '' }} value="3" >3 = Soltero</option>
             <option {{ (isset($data) && $data->marita_a == 4) ? 'selected' : '' }} value="4" >4 = Viudo</option>
      </SELECT>


  </b></span></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Nivel Educativo<span style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:
  normal'>
    
       <input id="educacio" type="number" min="0" max="2500" class="form-control" name="educacio" value='{{ old("educacio", isset($data) ? $data->educacio : "") }}' maxlength="4">
  </b></span></p>
  </td>
  <td style='width:134.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Ocupación<b style='mso-bidi-font-weight:normal'>
       <input id="ocupacio" type="number" max="6" class="form-control" name="ocupacio" value='{{ old("ocupacio", isset($data) ? $data->ocupacio : "") }}' maxlength="4">

  </b></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td style='width:93.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>¿Trabaja aun?<span style='mso-spacerun:yes'> 
  </span><span style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:
  normal'>
    
    <SELECT class="form-control" id="Auntrabaja" name="Auntrabaja" >
            <option {{ (isset($data) && $data->Auntrabaja == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->Auntrabaja == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


  </b></span></p>
  </td>
  <td colspan=3 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>¿Con quién vive?<b style='mso-bidi-font-weight:normal'>
    
       <input id="Conquienvive" type="text" class="form-control" name="Conquienvive"  value='{{ old("Conquienvive", isset($data) ? $data->Conquienvive : "") }}' maxlength="20">

  </b></span></p>
  </td>
  <td colspan=4 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Informante<b style='mso-bidi-font-weight:normal'>
    
       <input id="nombre_inf" type="text" class="form-control" name="nombre_inf" value='{{ old("nombre_inf", isset($data) ? $data->nombre_inf : "") }}' maxlength="30">

  </b></span></p>
  </td>
  <td width=179  style='width:134.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Parentesco<b
  style='mso-bidi-font-weight:normal'>
    
       <input id="parentesco" type="text" class="form-control" name="parentesco" value='{{ old("parentesco", isset($data) ? $data->parentesco : "") }}' maxlength="30">

  </b></span></p>
  </td>
 </tr>

</table>

<b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>B. DESCRIPCION DE SINTOMAS ACTUALES</span></b>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-36.0pt'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>1. ¿Tiene algún problema de salud? <span
style='mso-spacerun:yes'>                                                            </span><span
style='mso-spacerun:yes'>                            </span>(<b
style='mso-bidi-font-weight:normal'>
  

        
    <SELECT id="TieneProblemsalud" name="TieneProblemsalud" >
                     <option {{ (isset($data) && $data->TieneProblemsalud == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->TieneProblemsalud == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


</b>)</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>a</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

         <input id="Desc_Psalud_a" type="text" class="form-control" name="Desc_Psalud_a" value='{{ old("Desc_Psalud_a", isset($data) ? $data->Desc_Psalud_a : "") }}' maxlength="30">

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>b</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <input id="Desc_Psalud_b" type="text" class="form-control" name="Desc_Psalud_b" value='{{ old("Desc_Psalud_b", isset($data) ? $data->Desc_Psalud_b : "") }}' maxlength="30">


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>c</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <input id="Desc_Psalud_c" type="text" class="form-control" name="Desc_Psalud_c" value='{{ old("Desc_Psalud_c", isset($data) ? $data->Desc_Psalud_c : "") }}' maxlength="30">


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>d</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <input id="Desc_Psalud_d" type="text" class="form-control" name="Desc_Psalud_d" value='{{ old("Desc_Psalud_d", isset($data) ? $data->Desc_Psalud_d : "") }}' maxlength="30">

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>e</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <input id="Desc_Psalud_e" type="text" class="form-control" name="Desc_Psalud_e" value='{{ old("Desc_Psalud_e", isset($data) ? $data->Desc_Psalud_e : "") }}' maxlength="30">


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=36  style='width:26.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>f</span></b></p>
  </td>
  <td width=641 style='width:480.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <input id="Desc_Psalud_f" type="text" class="form-control" name="Desc_Psalud_f" value='{{ old("Desc_Psalud_f", isset($data) ? $data->Desc_Psalud_f : "") }}' maxlength="30">

  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>SINTOMAS REPORTADOS POR EL PACIENTE (Solo en la
primera evaluación): </span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1440;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=299 style='width:224.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>2.<span style='mso-spacerun:yes'>   </span>Problemas
  de memoria</span></p>
  </td>
  <td width=54 style='width:40.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

  
    <SELECT id="ProbleMemoria" name="ProbleMemoria" >
                     <option {{ (isset($data) && $data->ProbleMemoria == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ProbleMemoria == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>

  </span></b></p>
  </td>
  <td width=264 style='width:197.75pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>7.<span style='mso-spacerun:yes'>   </span>Trastornos
  del estado de animo</span></p>
  </td>
  <td width=60 style='width:44.95pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <SELECT id="Trastestanim" name="Trastestanim" >
                     <option {{ (isset($data) && $data->Trastestanim == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Trastestanim == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=299 style='width:224.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>3.<span style='mso-spacerun:yes'>   </span>Cambios
  en el funcionamiento cotidiano</span></p>
  </td>
  <td width=54 style='width:40.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

    <SELECT id="CambFuncoti" name="CambFuncoti" >
                     <option {{ (isset($data) && $data->CambFuncoti == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->CambFuncoti == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>

  </span></b></p>
  </td>
  <td width=264 style='width:197.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>8.<span style='mso-spacerun:yes'>   </span>Alteraciones
  en la conducta</span></p>
  </td>
  <td width=60 style='width:44.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    <SELECT id="Alteconducta" name="Alteconducta" >
                     <option {{ (isset($data) && $data->Alteconducta == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Alteconducta == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=299 style='width:224.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>4.<span style='mso-spacerun:yes'>   </span>Problemas
  den el lenguaje</span></p>
  </td>
  <td width=54 style='width:40.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

       <SELECT id="ProbleLenguaje" name="ProbleLenguaje" >
                     <option {{ (isset($data) && $data->ProbleLenguaje == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ProbleLenguaje == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>

  </span></b></p>
  </td>
  <td width=264 style='width:197.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>9.<span style='mso-spacerun:yes'>   </span>Incontinencia
  de esfínteres</span></p>
  </td>
  <td width=60 style='width:44.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

        <SELECT id="InconEsfin" name="InconEsfin" >
                     <option {{ (isset($data) && $data->InconEsfin == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->InconEsfin == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=299 style='width:224.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>5.<span style='mso-spacerun:yes'>   </span>Trastornos
  de orientación</span></p>
  </td>
  <td width=54 style='width:40.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

          <SELECT id="TrastOrient" name="TrastOrient" >
                     <option {{ (isset($data) && $data->TrastOrient == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->TrastOrient == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
          </SELECT>


  </span></b></p>
  </td>
  <td width=264 style='width:197.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>10. Otros </span></p>
  </td>
  <td width=60 style='width:44.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

       <SELECT id="Otros" name="Otros" >
                     <option {{ (isset($data) && $data->Otros == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Otros == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=299 style='width:224.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>6.<span style='mso-spacerun:yes'>   </span>Cambios
  en la personalidad</span></p>
  </td>
  <td width=54 style='width:40.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
         <SELECT id="CambPerso" name="CambPerso" >
                     <option {{ (isset($data) && $data->CambPerso == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->CambPerso == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>

  </span></b></p>
  </td>
  <td width=264 style='width:197.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>11. Paciente no reporta síntomas</span></p>
  </td>
  <td width=60 style='width:44.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


       <SELECT id="PacientnoSint" name="PacientnoSint" >
                     <option {{ (isset($data) && $data->PacientnoSint == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->PacientnoSint == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>

  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>12. PRESENTACION DE SINTOMAS<b style='mso-bidi-font-weight:
  normal'>
    
     <SELECT id="Prens_Sint" name="Prens_Sint" >
                    <option {{ (isset($data) && $data->Prens_Sint == 1) ? 'selected' : '' }} value="1" >1 = Brusca</option>
                    <option {{ (isset($data) && $data->Prens_Sint == 2) ? 'selected' : '' }} value="2" >2 = Sub-agudo</option>
                    <option {{ (isset($data) && $data->Prens_Sint == 3) ? 'selected' : '' }} value="3" >3 = Gradualmente</option>
                    <option {{ (isset($data) && $data->Prens_Sint == 4) ? 'selected' : '' }} value="4" >4 = Desconocido</option>
    </SELECT>

  </b></span></p>
 
  </td>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>13. EVOLUCION<b style='mso-bidi-font-weight:normal'>
    

        <SELECT id="Evolucion" name="Evolucion" >
                    <option {{ (isset($data) && $data->Evolucion == 1) ? 'selected' : '' }} value="1" > 1 = Deterioro brusco</option>
                    <option {{ (isset($data) && $data->Evolucion == 2) ? 'selected' : '' }} value="2" >2 = Escalonadamente</option>
                    <option {{ (isset($data) && $data->Evolucion == 3) ? 'selected' : '' }} value="3" >3 = En meseta</option>
                    <option {{ (isset($data) && $data->Evolucion == 4) ? 'selected' : '' }} value="4" >4 = Deterioro progresivo</option>
                    <option {{ (isset($data) && $data->Evolucion == 5) ? 'selected' : '' }} value="4" >5 = Desconocido</option>
    </SELECT>


  </b></span></p>
  
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>INICIO DE LOS PRIMEROS SINTOMAS
(Fecha aproximada):  <input id="Fecha_inic_sint" type="date"  name="Fecha_inic_sint"  value='{{ old("Fecha_inic_sint", isset($data) && strtotime($data->Fecha_inic_sint) != false  ? date("Y-m-d", strtotime($data->Fecha_inic_sint)) : "" )}}'></span></p>


<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>EVALUACION PSIQUIATRICA</span></b></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>C. HISTORIA PSIQUIATRICA PREVIA (Historia del último año
si es sucesiva): </span></b>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>14. </span><span
style='font-size:9.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>Alguna vez el paciente ha estado hospitalizado por
problemas psiquiátricos o ha recibido tratamiento<span class=GramE>?<span
style='font-size:10.0pt;line-height:107%'> .(</span></span></span><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>  <SELECT id="ante_psi_1version" name="ante_psi_1version" >
                     <option {{ (isset($data) && $data->ante_psi_1version == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ante_psi_1version == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>   </span>)<b
style='mso-bidi-font-weight:normal'>
  

</b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>15. Alguna vez el paciente ha
sido tratado por depresión<span class=GramE>?</span> ……………………………………………...<span
style='mso-spacerun:yes'>   </span>(<span style='mso-spacerun:yes'> </span><span
class=GramE>

  <SELECT id="Depre_tto" name="Depre_tto" >
                     <option {{ (isset($data) && $data->Depre_tto == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Depre_tto == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


)<b style='mso-bidi-font-weight:normal'></b></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'><span
style='mso-spacerun:yes'>           </span>Breve <span class=SpellE>descripci</span>
de cada episodio (Si la respuesta es afirmativa para las anteriores): </span></p>

<p class=MsoNormal><span style='font-size:10.0pt;line-height:107%;font-family:
"Arial","sans-serif";'>16. Si es afirmativo, especifique
la modalidad de tratamiento recibido …………………………………...<span
style='mso-spacerun:yes'>  </span>(<span style='mso-spacerun:yes'>      </span><span
class=GramE> 


  
  <SELECT id="mod_tto" name="mod_tto" >
              <option {{ (isset($data) && $data->mod_tto == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes</option>
              <option {{ (isset($data) && $data->mod_tto == 1) ? 'selected' : '' }} value="1" > 1 = TEC solamente</option>
              <option {{ (isset($data) && $data->mod_tto == 2) ? 'selected' : '' }} value="2" >2 = Psicofarmacos solamente</option>
              <option {{ (isset($data) && $data->mod_tto == 3) ? 'selected' : '' }} value="3" >3 = Psicoterapia/asesoramiento</option>
              <option {{ (isset($data) && $data->mod_tto == 4) ? 'selected' : '' }} value="4" >4 = Psicofarmacos/psicoterapia/TEC</option>
              <option {{ (isset($data) && $data->mod_tto == 5) ? 'selected' : '' }} value="5" >5 = Otros farmacos</option>
              <option {{ (isset($data) && $data->mod_tto == 6) ? 'selected' : '' }} value="6" >6 = No especifico</option>
    </SELECT>


 )<b style='mso-bidi-font-weight:normal'>
  

</b></span></span></p>


<p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l10 level1 lfo1'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>D.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>EVALUACION ACTUAL: </span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>DEPRESION</span></b></p>

<p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>17. Estado de ánimo depresivo persistente (no incluye
reacción de duelo<span class=GramE>) …</span>…………………………… ( <SELECT id="Depre_persisten" name="Depre_persisten" >
                     <option {{ (isset($data) && $data->Depre_persisten == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Depre_persisten == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT> <span class=GramE>)<b style='mso-bidi-font-weight:
normal'>
  

   

</b></span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>18. Perdida del interés o del placer en las actividades
usuales ……………………………………………<span style='mso-spacerun:yes'>  </span>( 

<SELECT id="Perd_actusuales" name="Perd_actusuales" >
                     <option {{ (isset($data) && $data->Perd_actusuales == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Perd_actusuales == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT><span class=GramE>)</span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Si la respuesta es NO
para cualquiera de las anteriores, omita los siguientes ítems y continúe a
partir de la pregunta 27. </span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=696
 style=' width:522.0pt;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=294 valign=bottom style='width:220,5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>19. Perdido de peso y apetito</span></p>
  </td>
  <td width=55  style='width:41.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="PerdidaPesoyapetito" name="PerdidaPesoyapetito" >
                     <option {{ (isset($data) && $data->PerdidaPesoyapetito == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->PerdidaPesoyapetito == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=281 valign=bottom style='width:210.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>23. Sentimientos de culpa</span></p>
  </td>
  <td width=66  style='width:49.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  

        <SELECT id="SentCulpa" name="SentCulpa" >
                     <option {{ (isset($data) && $data->SentCulpa == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->SentCulpa == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=294 valign=bottom style='width:220,5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>20. Insomnio o hipersomnia</span></p>
  </td>
  <td width=55  style='width:41.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
 

      
        <SELECT id="Insomnio" name="Insomnio" >
                     <option {{ (isset($data) && $data->Insomnio == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Insomnio == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


  </td>
  <td width=281 valign=bottom style='width:210.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>24. Dificultad para concentrarse</span></p>
  </td>
  <td width=66  style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
 
      <SELECT id="Dif_concentracion" name="Dif_concentracion" >
                     <option {{ (isset($data) && $data->Dif_concentracion == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Dif_concentracion == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=294 valign=bottom style='width:220,5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>21. Perdida de la energía, fatiga, cansancio</span></p>
  </td>
  <td width=55  style='width:41.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

        <SELECT id="Perd_energia_fati" name="Perd_energia_fati" >
                     <option {{ (isset($data) && $data->Perd_energia_fati == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Perd_energia_fati == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


  </span></b></p>
  </td>
  <td width=281 valign=bottom style='width:210.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>25. Ideas suicidas</span></p>
  </td>
  <td width=66  style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  

        <SELECT id="Ideas_suicidas" name="Ideas_suicidas" >
                     <option {{ (isset($data) && $data->Ideas_suicidas == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Ideas_suicidas == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>



  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=294 valign=bottom style='width:220,5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>22. Agitación psicomotriz o retraso psicomotriz</span></p>
  </td>
  <td width=55  style='width:41.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      

       <SELECT id="AgitacionPsic" name="AgitacionPsic" >
                     <option {{ (isset($data) && $data->AgitacionPsic == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->AgitacionPsic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


  </td>
  <td width=281 valign=bottom style='width:210.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>26. Asociación con ingesta de fármacos</span></p>
  </td>
  <td width=66  style='width:49.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  
        <SELECT id="Aso_farmacos" name="Aso_farmacos" >
                     <option {{ (isset($data) && $data->Aso_farmacos == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Aso_farmacos == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>TRASTORNOS DE LA PERCEPCION Y DEL PENSAMIENTO</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>27. Delirio (Trastorno del pensamiento persistente) <span
style='mso-spacerun:yes'>    </span><b style='mso-bidi-font-weight:normal'>
  

     <SELECT id="Delirio" name="Delirio" >
                     <option {{ (isset($data) && $data->Delirio == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Delirio == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>28. Alucinaciones (Percepción de estímulos
inexistentes) <b style='mso-bidi-font-weight:normal'>
  
    <SELECT id="Alucinaciones" name="Alucinaciones" >
                     <option {{ (isset($data) && $data->Alucinaciones == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Alucinaciones == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>29. Ilusiones (Interpretación errónea de estímulos
ambientales reales <b style='mso-bidi-font-weight:normal'>
  
   <SELECT id="Ilusiones" name="Ilusiones" >
                     <option {{ (isset($data) && $data->Ilusiones == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Ilusiones == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>30. ¿Está el trastorno del pensamiento relacionado con
la ingesta de fármacos? <span style='mso-spacerun:yes'> </span><b
style='mso-bidi-font-weight:normal'>
  
   <SELECT id="Relac_ing_farmacos" name="Relac_ing_farmacos" >
                     <option {{ (isset($data) && $data->Relac_ing_farmacos == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Relac_ing_farmacos == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>


</b></span></p>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>E. CONDIONES MEDICAS</span></b>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>31. Hipertensión arterial</span></p>
  </td>
  <td width=64 style='width:48.1pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="hta" name="hta" >
                     <option {{ (isset($data) && $data->hta == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->hta == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>43. Enfermedad vascular periférica</span></p>
  </td>
  <td width=80 style='width:60.2pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="ins_vasc" name="ins_vasc" >
                     <option {{ (isset($data) && $data->ins_vasc == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ins_vasc == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>32. Diabetes mellitus</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="diab_mel" name="diab_mel" >
                     <option {{ (isset($data) && $data->diab_mel == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->diab_mel == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>44. Accidente cerebro vascular</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="acv" name="acv" >
                     <option {{ (isset($data) && $data->acv == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->acv == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>33. Infarto Cardiaco</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="IM" name="IM" >
                     <option {{ (isset($data) && $data->IM == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->IM == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>45. TCE (pérdida de consciencia)</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="trau_cra13_1" name="trau_cra13_1" >
                     <option {{ (isset($data) && $data->trau_cra13_1 == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->trau_cra13_1 == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>34. Arritmias</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="arritmia" name="arritmia" >
                     <option {{ (isset($data) && $data->arritmia == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->arritmia == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>47. Epilepsia/Convulsiones</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="no_epile" name="no_epile" >
                     <option {{ (isset($data) && $data->no_epile == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->no_epile == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>35. Insuficiencia Cardiaca</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="ins_card" name="ins_card" >
                     <option {{ (isset($data) && $data->ins_card == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ins_card == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>48. Infecciones del SNC</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="snc" name="snc" >
                     <option {{ (isset($data) && $data->snc == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->snc == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>36. Otras enfermedades cardiacas</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="Otros_EC" name="Otros_EC" >
                     <option {{ (isset($data) && $data->Otros_EC == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Otros_EC == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>49. Cáncer</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="Cancer" name="Cancer" >
                     <option {{ (isset($data) && $data->Cancer == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Cancer == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>37. Tuberculosis</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="tubercul" name="tubercul" >
                     <option {{ (isset($data) && $data->tubercul == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->tubercul == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>50. Artritis</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="artritri" name="artritri" >
                     <option {{ (isset($data) && $data->artritri == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->artritri == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>38. EPOC</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="broncop" name="broncop" >
                     <option {{ (isset($data) && $data->broncop == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->broncop == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>51. Sífilis</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
          <SELECT id="sífilis" name="sífilis" >
                     <option {{ (isset($data) && $data->sífilis == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->sífilis == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>39. Enfermedad tiroidea</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="Enf_tiro" name="Enf_tiro" >
                     <option {{ (isset($data) && $data->Enf_tiro == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->Enf_tiro == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>52. HVI</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="HVI" name="HVI" >
                     <option {{ (isset($data) && $data->HVI == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->HVI == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>40. Enfermedades hepáticas</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
          <SELECT id="cirr_epa" name="cirr_epa" >
                     <option {{ (isset($data) && $data->cirr_epa == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->cirr_epa == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>53. Abuso de alcohol</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="alcohol" name="alcohol" >
                     <option {{ (isset($data) && $data->alcohol == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->alcohol == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>41. Ulcera péptica</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="ulcera" name="ulcera" >
                     <option {{ (isset($data) && $data->ulcera == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->ulcera == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>54. Consumo de drogas</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="drogas" name="drogas" >
                     <option {{ (isset($data) && $data->drogas == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->drogas == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=275 style='width:206.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>42.Enfermedades renales</span></p>
  </td>
  <td width=64 style='width:48.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="in_renal" name="in_renal" >
                     <option {{ (isset($data) && $data->in_renal == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->in_renal == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
  <td width=257 style='width:192.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>55. Tabaquismo</span></p>
  </td>
  <td width=80 style='width:60.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="tabaquis" name="tabaquis" >
                     <option {{ (isset($data) && $data->tabaquis == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                    <option {{ (isset($data) && $data->tabaquis == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
</table>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>56. ¿Ha presentado ACV?<span
style='mso-spacerun:yes'>           </span>No: 0<span
style='mso-spacerun:yes'>                </span>Si: 1 <span
style='mso-spacerun:yes'>                 </span>(<b style='mso-bidi-font-weight:
normal'>
  
   <SELECT id="acv_1" name="acv_1" >
              <option {{ (isset($data) && $data->acv_1 == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->acv_1 == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
    </SELECT>


</b>_)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>          </span>En
caso de haber presentado ACV, registre la fecha: <b style='mso-bidi-font-weight:
normal'>
  

  <input id="fech_neu" type="date"  name="fecha_acv" value='{{ old("fech_neu", isset($data) && strtotime($data->fech_neu) != false  ? date("Y-m-d", strtotime($data->fech_neu)) : "" )}}'>


</b></span></p>

<br>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Señale cuales fueron los síntomas asociados con el ACV: </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<table class="table" border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=318 style='width:238.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>57. Pérdida definitiva / alteración de la
  consciencia</span></p>
  </td>
  <td width=43 style='width:32.35pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="perd_con" name="perd_con" >
              <option {{ (isset($data) && $data->perd_con == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->perd_con == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=323 style='width:242.15pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>61. Cambios en el lenguaje o en el habla</span></p>
  </td>
  <td width=48 style='width:36.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="cam_leng" name="cam_leng" >
              <option {{ (isset($data) && $data->cam_leng == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->cam_leng == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=318 style='width:238.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>58. Desvanecimiento mareos</span></p>
  </td>
  <td width=43 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="Desvanecimiento" name="Desvanecimiento" >
              <option {{ (isset($data) && $data->Desvanecimiento == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Desvanecimiento == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=323 style='width:242.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>62. Debilidad o parálisis de los miembros</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="DebilidadParilisis" name="DebilidadParilisis" >
              <option {{ (isset($data) && $data->DebilidadParilisis == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->DebilidadParilisis == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=318 style='width:238.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>59. Parálisis facial </span></p>
  </td>
  <td width=43 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="ParalisisFacial" name="ParalisisFacial" >
              <option {{ (isset($data) && $data->ParalisisFacial == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->ParalisisFacial == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=323 style='width:242.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>63. Perdida de la sensibilidad en miembros o tronco</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="Perd_sensibilidad" name="Perd_sensibilidad" >
              <option {{ (isset($data) && $data->Perd_sensibilidad == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Perd_sensibilidad == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=318 style='width:238.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>60. Perdida de la visión</span></p>
  </td>
  <td width=43 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="PerdVision" name="PerdVision" >
              <option {{ (isset($data) && $data->PerdVision == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->PerdVision == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=323 style='width:242.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>64. ACV asociado a intervención quirúrgica</span></p>
  </td>
  <td width=48 style='width:36.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="acv_quir" name="acv_quir" >
              <option {{ (isset($data) && $data->acv_quir == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->acv_quir == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>65. ¿Alguna vez le han diagnostica enfermedad de
Parkinson?<span style='mso-spacerun:yes'>  </span><b style='mso-bidi-font-weight:
normal'>
  
    <SELECT id="enf_park" name="enf_park" >
              <option {{ (isset($data) && $data->enf_park == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->enf_park == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>            </span>En
caso de afirmativo, registre la fecha: <b style='mso-bidi-font-weight:
normal'>
  
      
  <input id="Parkinson_fecha" type="date"  name="Parkinson_fecha"  value='{{ old("Parkinson_fecha", isset($data) && strtotime($data->Parkinson_fecha) != false  ? date("Y-m-d", strtotime($data->Parkinson_fecha)) : "" )}}' >


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>66. En caso de ser afirmativo ¿Ha recibido terapia antiparkinsoniana?
<b style='mso-bidi-font-weight:normal'>
  

       <SELECT id="Tto_Parkinson" name="Tto_Parkinson" >
              <option {{ (isset($data) && $data->Tto_Parkinson == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Tto_Parkinson == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>67. ¿Le han diagnosticado algún otro trastorno
cerebral importante, capaz de causar debilidad en miembros, problemas visuales,
en la marcha o en el habla? <span style='mso-spacerun:yes'> </span><b
style='mso-bidi-font-weight:normal'>
  

     <SELECT id="Otro_cereb_trastorno" name="Otro_cereb_trastorno" >
              <option {{ (isset($data) && $data->Otro_cereb_trastorno == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Otro_cereb_trastorno == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>          </span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>68. Cirugías: ……………………………………………………………………………………………………...
(<span style='mso-spacerun:yes'>       </span><span class=GramE>)<b
style='mso-bidi-font-weight:normal'>
  
       <SELECT id="Cirugias" name="Cirugias" >
              <option {{ (isset($data) && $data->Cirugias == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Cirugias == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


</b></span></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=660
 style='width:494.75pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>a</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  

    <input id="Cirugiasa" type="text" class="form-control" name="Cirugiasa"  value='{{(isset($data))  ? $data->Cirugiasa  : old("Cirugiasa") }}' maxlength="80">

  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>b</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <input id="Cirugiasb" class="form-control" type="text" name="Cirugiasb"  value='{{(isset($data))  ? $data->Cirugiasb  : old("Cirugiasb") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>c</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <input id="Cirugiasc" class="form-control" type="text" name="Cirugiasc"  value='{{(isset($data))  ? $data->Cirugiasc  : old("Cirugiasc") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>d</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <input id="Cirugiasd" class="form-control" type="text" name="Cirugiasd"  value='{{(isset($data))  ? $data->Cirugiasd  : old("Cirugiasd") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>e</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <input id="Cirugiase" class="form-control" type="text" name="Cirugiase"  value='{{(isset($data))  ? $data->Cirugiase  : old("Cirugiase") }}' maxlength="80">
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>69. Admisiones a hospital por cualquier otra causa:
……………………………………………………….. (

  <SELECT id="Hospitalizacion" name="Hospitalizacion" >
              <option {{ (isset($data) && $data->Hospitalizacion == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Hospitalizacion == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  <span class=GramE>)</span></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>a</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
       <input id="Hospitalizaciona" class="form-control" type="text" name="Hospitalizaciona"  value='{{(isset($data))  ? $data->Hospitalizaciona  : old("Hospitalizaciona") }}' maxlength="80">

  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>b</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <input id="Hospitalizacionb" class="form-control" type="text" name="Hospitalizacionb"  value='{{(isset($data))  ? $data->Hospitalizacionb  : old("Hospitalizacionb") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>c</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
        <input id="Hospitalizacionc" class="form-control" type="text" name="Hospitalizacionc"  value='{{(isset($data))  ? $data->Hospitalizacionc  : old("Hospitalizacionc") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>d</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      
       <input id="Hospitalizaciond" class="form-control" type="text" name="Hospitalizaciond"  value='{{(isset($data))  ? $data->Hospitalizaciond  : old("Hospitalizaciond") }}' maxlength="80">
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=42  style='width:31.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>e</span></b></p>
  </td>
  <td width=618  style='width:463.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
       <input id="Hospitalizacione" class="form-control" type="text" name="Hospitalizacione"  value='{{(isset($data))  ? $data->Hospitalizacione  : old("Hospitalizacione") }}' maxlength="80">
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>70. Si el paciente es mujer, ¿Ha pasado la menopausia
o ha sido esterilizada quirúrgicamente? (

   <SELECT id="menopaus" name="menopaus" >
              <option {{ (isset($data) && $data->menopaus == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->menopaus == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>         </span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'> </span>¿Cuándo fue su
último periodo?<b style='mso-bidi-font-weight:normal'>
  
   <SELECT id="tiem_men" name="tiem_men" >
              <option {{ (isset($data) && $data->tiem_men == 0) ? 'selected' : '' }} value="0" >0 = No ha tenido la menopausia </option>
              <option {{ (isset($data) && $data->tiem_men == 1) ? 'selected' : '' }} value="1" >1 = Menos de 5 años</option>
              <option {{ (isset($data) && $data->tiem_men == 2) ? 'selected' : '' }} value="2" >2 = Entre 5 y 10 años</option>
              <option {{ (isset($data) && $data->tiem_men == 3) ? 'selected' : '' }} value="3" >3 Mas de 10 años</option>
      </SELECT>

</b></span></p>


<br>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>71. ¿El paciente toma algún tipo de medicación? </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>72. warfaina</span></p>
  </td>
  <td width=49 style='width:36.85pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      
       <SELECT id="warfarin" name="warfarin" >
              <option {{ (isset($data) && $data->warfarin == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->warfarin == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

  </td>
  <td width=281 style='width:210.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>89.<span style='mso-spacerun:yes'>   </span>Anticolinérgicos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="anticoli" name="anticoli" >
              <option {{ (isset($data) && $data->anticoli == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->anticoli == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>73. Aspirina</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="aines" name="aines" >
              <option {{ (isset($data) && $data->aines == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->aines == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>90.<span style='mso-spacerun:yes'>   </span>Levodopa/Cardidopa</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="Levodopa_Cardidopa" name="Levodopa_Cardidopa" >
              <option {{ (isset($data) && $data->Levodopa_Cardidopa == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Levodopa_Cardidopa == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>74. Antigregantes plaquetarios</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="anti_plq" name="anti_plq" >
              <option {{ (isset($data) && $data->anti_plq == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->anti_plq == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>91.<span style='mso-spacerun:yes'>   </span>Dopaminergicos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
          <SELECT id="dopamine" name="dopamine" >
              <option {{ (isset($data) && $data->dopamine == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->dopamine == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>75. Diuréticos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="diurétic" name="diurétic" >
              <option {{ (isset($data) && $data->diurétic == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->diurétic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>92.<span style='mso-spacerun:yes'>   </span>Antidepresivos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="antidepr" name="antidepr" >
              <option {{ (isset($data) && $data->antidepr == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->antidepr == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>76. Anticonvulsionantes</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="anticonv" name="anticonv" >
              <option {{ (isset($data) && $data->anticonv == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->anticonv == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>93.<span style='mso-spacerun:yes'>   </span>Antipsicóticos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
          <SELECT id="antipsic" name="antipsic" >
              <option {{ (isset($data) && $data->antipsic == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->antipsic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>77. Insulina</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="insulina" name="insulina" >
              <option {{ (isset($data) && $data->insulina == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->insulina == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>94.<span style='mso-spacerun:yes'>   </span>Benzodiacepinas</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="benzodia" name="benzodia" >
              <option {{ (isset($data) && $data->benzodia == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->benzodia == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>78. Hipoglicemiantes orales</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="hipoglis" name="hipoglis" >
              <option {{ (isset($data) && $data->hipoglis == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->hipoglis == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>95.<span style='mso-spacerun:yes'>   </span>Aines</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="aines2" name="aines2" >
              <option {{ (isset($data) && $data->aines2 == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->aines2 == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>79. Digitalicos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="digitál" name="digitál" >
              <option {{ (isset($data) && $data->digitál == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->digitál == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>96.<span style='mso-spacerun:yes'>   </span>Narcóticos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="narcotic" name="narcotic" >
              <option {{ (isset($data) && $data->narcotic == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->narcotic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>80. Nitratos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <SELECT id="nitratos" name="nitratos" >
              <option {{ (isset($data) && $data->nitratos == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->nitratos == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>97.<span style='mso-spacerun:yes'>   </span>Hidergina</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="Hidergina" name="Hidergina" >
              <option {{ (isset($data) && $data->Hidergina == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Hidergina == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>81. Calcio antag</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="calc_ant" name="calc_ant" >
              <option {{ (isset($data) && $data->calc_ant == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->calc_ant == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>98.<span style='mso-spacerun:yes'>   </span>Deprenyl</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <SELECT id="Deprenyl" name="Deprenyl" >
              <option {{ (isset($data) && $data->Deprenyl == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Deprenyl == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>82. Beta bloq</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
          <SELECT id="beta_blq" name="beta_blq" >
              <option {{ (isset($data) && $data->beta_blq == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->beta_blq == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>99.<span style='mso-spacerun:yes'>   </span>Esteroides</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="esteroid" name="esteroid" >
              <option {{ (isset($data) && $data->esteroid == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->esteroid == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>83. Ieca o at2 bloq</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="ieca" name="ieca" >
              <option {{ (isset($data) && $data->ieca == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->ieca == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>100. Tacrina o similares</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="Tacrina" name="Tacrina" >
              <option {{ (isset($data) && $data->Tacrina == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Tacrina == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>84. Otros Antiarritmicos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <SELECT id="otr_anth" name="otr_anth" >
              <option {{ (isset($data) && $data->otr_anth == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->otr_anth == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>101. Suplementos para la memoria</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="comple_b" name="comple_b" >
              <option {{ (isset($data) && $data->comple_b == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->comple_b == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>85. Hipolipemicos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <SELECT id="hipolipe" name="hipolipe" >
              <option {{ (isset($data) && $data->hipolipe == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->hipolipe == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>102. Otros suplementos vitamínicos</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="otra_vit" name="otra_vit" >
              <option {{ (isset($data) && $data->otra_vit == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->otra_vit == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>86. Broncodilatadores</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <SELECT id="broncodi" name="broncodi" >
              <option {{ (isset($data) && $data->broncodi == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->broncodi == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>103. Bloqueadores H2</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="BloqueadoresH2" name="BloqueadoresH2" >
              <option {{ (isset($data) && $data->BloqueadoresH2 == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->BloqueadoresH2 == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>87. Estrógenos</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <SELECT id="estrogen" name="estrogen" >
              <option {{ (isset($data) && $data->estrogen == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->estrogen == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>104. Otras hormonas</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="Otrashormonas" name="Otrashormonas" >
              <option {{ (isset($data) && $data->Otrashormonas == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->Otrashormonas == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=282 style='width:211.25pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>88. Sup tiroides</span></p>
  </td>
  <td width=49 style='width:36.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <SELECT id="tiroide" name="tiroide" >
              <option {{ (isset($data) && $data->tiroide == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->tiroide == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width=281 style='width:210.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>105. Otros</span></p>
  </td>
  <td width=50 style='width:37.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <SELECT id="otro_med" name="otro_med" >
              <option {{ (isset($data) && $data->otro_med == 0) ? 'selected' : '' }} value="0" >0 = No </option>
              <option {{ (isset($data) && $data->otro_med == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l15 level1 lfo9'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>G.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>ESTUDIOS COMPLEMENTARIOS: </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>106. TOMOGRAFIA CRANEAL: ………………………………………………………………………………
( 

   <SELECT id="tomocran" name="tomocran" >
            <option {{ (isset($data) && $data->tomocran == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->tomocran == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
            <option {{ (isset($data) && $data->tomocran == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
            <option {{ (isset($data) && $data->tomocran == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
    </SELECT>

       <span class=GramE>)<b
style='mso-bidi-font-weight:normal'></b></span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>           
</span>Fecha: 

      <input id="Tomografia_fecha" type="date"  name="Tomografia_fecha"  value='{{ old("Tomografia_fecha", isset($data) && strtotime($data->Tomografia_fecha) != false  ? date("Y-m-d", strtotime($data->Tomografia_fecha)) : "" )}}'>

    </span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:53.5pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l3 level1 lfo4'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>0.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'> </span>No se hizo</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:53.5pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l3 level1 lfo4'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'> </span>Normal</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:53.5pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l3 level1 lfo4'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'> </span>Anormal</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:53.5pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l3 level1 lfo4'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'> </span>Desconocido</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>107. RESONANCIA MAGNETICA: ……………………………………………………………………………
(

    <SELECT id="resonanc" name="resonanc" >
            <option {{ (isset($data) && $data->resonanc == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->resonanc == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
            <option {{ (isset($data) && $data->resonanc == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
            <option {{ (isset($data) && $data->resonanc == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
    </SELECT>


<span class=GramE>)<b
style='mso-bidi-font-weight:normal'></b></span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>           
</span>Fecha: 
   <input id="RMI_fecha" type="date"  name="RMI_fecha" value='{{ old("RMI_fecha", isset($data) && strtotime($data->RMI_fecha) != false  ? date("Y-m-d", strtotime($data->RMI_fecha)) : "" )}}'>
</span></p>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>108. SPETC: ………………………………………………………………………………… (

     <SELECT id="SPETC" name="SPETC" >
            <option {{ (isset($data) && $data->SPETC == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->SPETC == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
            <option {{ (isset($data) && $data->SPETC == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
            <option {{ (isset($data) && $data->SPETC == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
    </SELECT>

 )</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>           
</span>Fecha:

 <input id="SPETC_fecha" type="date"  name="SPETC_fecha"  value='{{ old("SPETC_fecha", isset($data) && strtotime($data->SPETC_fecha) != false  ? date("Y-m-d", strtotime($data->SPETC_fecha)) : "" )}}'></span></p>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>109. ELECTROENCEFALOGRAFIA: …………………………………………………………………………
(   

   <SELECT id="eeg" name="eeg" >
            <option {{ (isset($data) && $data->eeg == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->eeg == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
            <option {{ (isset($data) && $data->eeg == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
            <option {{ (isset($data) && $data->eeg == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
    </SELECT>
        )</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>           
</span>Fecha:  

  <input id="Electroencefalograma_date" type="date"  name="Electroencefalograma_date" value='{{ old("Electroencefalograma_date", isset($data) && strtotime($data->Electroencefalograma_date) != false  ? date("Y-m-d", strtotime($data->Electroencefalograma_date)) : "" )}}'>


</span></p>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>110. ELECTROMIOGRAFIA: ………………………………………………………….………………………
(      
        
     <SELECT id="elecmiog" name="elecmiog" >
            <option {{ (isset($data) && $data->elecmiog == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->elecmiog == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
            <option {{ (isset($data) && $data->elecmiog == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
            <option {{ (isset($data) && $data->elecmiog == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
    </SELECT>
        )</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>           
</span>Fecha: 


    <input id="Fecha_electromiografia" type="date" name="Fecha_electromiografia"  value='{{ old("Fecha_electromiografia", isset($data) && strtotime($data->Fecha_electromiografia) != false  ? date("Y-m-d", strtotime($data->Fecha_electromiografia)) : "" )}}'>

</span></p>



<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l15 level1 lfo9'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>H.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>HISTORIA FAMILIAR Y GENELOGIA: </span></p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'>            </span>N° de parientes de
primer grado: ( 

         <input id="N_pariente_1grado" type="number"  name="N_pariente_1grado"  value='{{(isset($data))  ? $data->N_pariente_1grado  : old("N_pariente_1grado") }}' >


)</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'>            </span>Información
genealógica corroborada por dos miembros de la familia: ……………………. (

    <SELECT id="Inf_corro_familia" name="Inf_corro_familia" >
            <option {{ (isset($data) && $data->Inf_corro_familia == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->Inf_corro_familia == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
    </SELECT>


)</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'>            </span>¿Está la información
genealógica disponible? ………………………………………………… (

     <SELECT id="Ing_genealogia_dispo" name="Ing_genealogia_dispo" >
            <option {{ (isset($data) && $data->Ing_genealogia_dispo == 0) ? 'selected' : '' }} value="0" >0 = No </option>
            <option {{ (isset($data) && $data->Ing_genealogia_dispo == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
    </SELECT>


)</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>ESCALA DE ACTIVIDAD FUNCIONAL DE BLESSED</span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td  style='border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Ninguna</span></p>
  </td>
  <td width=96 style='width:72.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Alguna</span></p>
  </td>
  <td width=96 style='width:72.0pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Mucha</span></p>
  </td>
  <td width=80 style='width:60.05pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Físico</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Realizar tareas domesticas<b style='mso-bidi-font-weight:
  normal'>
    
      <SELECT id="blecot1" name="blecot1" >
              <option {{ (isset($data) && $data->blecot1 == "0") ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot1 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot1 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>


  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Manejar pequeñas cantidades de dinero<b
  style='mso-bidi-font-weight:normal'>
    

     <SELECT id="blecot2" name="blecot2" >
               <option {{ (isset($data) && $data->blecot2 == "0") ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot2 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot2 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>



  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Recordar listas cortas de cosas<b style='mso-bidi-font-weight:
  normal'>
    

    <SELECT id="blecot3" name="blecot3" >
              <option {{ (isset($data) && $data->blecot3 == 0) ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot3 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot3 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>

  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Orientación en el hogar o lugares familiares<b
  style='mso-bidi-font-weight:normal'>
    
    <SELECT id="blecot4" name="blecot4" >
              <option {{ (isset($data) && $data->blecot4 == 0) ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot4 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot4 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>



  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Orientación en el vecindario o calles conocidas<b
  style='mso-bidi-font-weight:normal'>
    

     <SELECT id="blecot5" name="blecot5" >
              <option {{ (isset($data) && $data->blecot5 == "0") ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot5 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot5 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>



  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Discriminar lugares, comprender situaciones<b
  style='mso-bidi-font-weight:normal'>
    

    <SELECT id="blecot6" name="blecot6" >
              <option {{ (isset($data) && $data->blecot6 == 0) ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot6 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot6 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>


  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Recordar eventos recientes<b style='mso-bidi-font-weight:
  normal'>
    

    <SELECT id="blecot7" name="blecot7" >
              <option {{ (isset($data) && $data->blecot7 == 0) ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot7 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot7 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>

  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Tendencia a vivir en el pasado<b style='mso-bidi-font-weight:
  normal'>
    
    <SELECT id="blecot8" name="blecot8" >
              <option {{ (isset($data) && $data->blecot8 == 0) ? 'selected' : '' }} value="0" > 0 = ninguna incompetencia </option>
              <option {{ (isset($data) && $data->blecot8 == "0,5") ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
              <option {{ (isset($data) && $data->blecot8 == "1") ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
      </SELECT>


  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Comer<b style='mso-bidi-font-weight:normal'>
    
        <SELECT id="bleha9" name="bleha9" >
              <option {{ (isset($data) && $data->bleha9 == 0) ? 'selected' : '' }} value="0" >  0 = Lo hace limpiamente con los cubiertos apropiados </option>
              <option {{ (isset($data) && $data->bleha9 == 1) ? 'selected' : '' }} value="1" >1 = Lo hace desordenadamente unicamente con la cuchara</option>
              <option {{ (isset($data) && $data->bleha9 == 2) ? 'selected' : '' }} value="2" >2 = Como sin ayuda solo solidos simples</option>
              <option {{ (isset($data) && $data->bleha9 == 3) ? 'selected' : '' }} value="3" >3 = Tiene que ser alimentado</option>
      </SELECT>

  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Vestir<b style='mso-bidi-font-weight:normal'>
    

      <SELECT id="bleha10" name="bleha10" >
              <option {{ (isset($data) && $data->bleha10 == 0) ? 'selected' : '' }} value="0" >   0 = se viste sin ayuda </option>
              <option {{ (isset($data) && $data->bleha10 == 1) ? 'selected' : '' }} value="1" >1 = Ocasionalmente comete errores</option>
              <option {{ (isset($data) && $data->bleha10 == 2) ? 'selected' : '' }} value="2" >2 = Se viste siguiendo una secuencia equivocada, olvidando comunmete ponerse alguna prenda de vestir</option>
              <option {{ (isset($data) && $data->bleha10 == 3) ? 'selected' : '' }} value="3" >3 = Incapacidad para vestirse</option>
      </SELECT>

  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=324 style='width:243.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Control de esfínteres<b style='mso-bidi-font-weight:
  normal'>
      
      <SELECT id="bleha11" name="bleha11" >
              <option {{ (isset($data) && $data->bleha11 == 0) ? 'selected' : '' }} value="0" > 0 = Completo control de los esfinteres </option>
              <option {{ (isset($data) && $data->bleha11 == 1) ? 'selected' : '' }} value="1" >1 = Ocasionalmente moja la cama</option>
              <option {{ (isset($data) && $data->bleha11 == 2) ? 'selected' : '' }} value="2" >2 = Frecuentemente moja la cama</option>
              <option {{ (isset($data) && $data->bleha11 == 3) ? 'selected' : '' }} value="3" >3 = Doble incontinencia</option>
      </SELECT>


  </b></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>0,5</span></p>
  </td>
  <td width=96 style='width:72.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>1</span></p>
  </td>
  <td width=80 style='width:60.05pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>F</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>111. Puntaje total Escala de actividad funcional de <span class=SpellE>Blessed</span>:
<b style='mso-bidi-font-weight:normal'>
  
      <input id="t_funcio" type="text" maxlength="5" name="t_funcio"  value='{{(isset($data))  ? $data->t_funcio  : old("t_funcio") }}' >

</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";'>ACTIVIDADES DE LA VIDA DIARIA: </span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>112. AVD según el paciente: <b style='mso-bidi-font-weight:normal'>

  
      <input id="avd_paci" type="number" min="-99" max="100" name="avd_paci"  value='{{(isset($data))  ? $data->avd_paci  : old("avd_paci") }}' >

</b><span
style='mso-spacerun:yes'>    </span><span
style='mso-spacerun:yes'>                 </span>113. AVD según el
entrevistador: <b style='mso-bidi-font-weight:normal'>
  
     <input id="avd_entr" type="number" min="-99" max="100" name="avd_entr"  value='{{(isset($data))  ? $data->avd_entr  : old("avd_entr") }}' >

</b></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'><span style='mso-spacerun:yes'>              </span>Información obtenida
por<span class=GramE>:<b style='mso-bidi-font-weight:normal'>
  

      <SELECT id="Inf_obt" name="Inf_obt" >
              <option {{ (isset($data) && $data->Inf_obt == 1) ? 'selected' : '' }} value="1" >1. Paciente solamente</option>
              <option {{ (isset($data) && $data->Inf_obt == 2) ? 'selected' : '' }} value="2" >2. Paciente e informante</option>
      </SELECT>

</b></span></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>EXAMEN MINIMO DEL ESTADO MENTAL MODIFICADO</span></b></p>

<p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:center;
line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Si la respuesta es correcta, puntué 1. Si es incorrecta, puntué 0. </span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>114. ORIENTACION: <b style='mso-bidi-font-weight:normal'>


 <SELECT id="orient" name="orient" >
              <option {{ (isset($data) && $data->orient == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->orient == 1) ? 'selected' : '' }} value="1" >1</option>
              <option {{ (isset($data) && $data->orient == 2) ? 'selected' : '' }} value="2" >2</option>
              <option {{ (isset($data) && $data->orient == 3) ? 'selected' : '' }} value="3" >3</option>
              <option {{ (isset($data) && $data->orient == 4) ? 'selected' : '' }} value="4" >4</option>
              <option {{ (isset($data) && $data->orient == 5) ? 'selected' : '' }} value="5" >5</option>
              <option {{ (isset($data) && $data->orient == 6) ? 'selected' : '' }} value="6" >6</option>
              <option {{ (isset($data) && $data->orient == 7) ? 'selected' : '' }} value="7" >7</option>
              <option {{ (isset($data) && $data->orient == 8) ? 'selected' : '' }} value="8" >8</option>
              <option {{ (isset($data) && $data->orient == 9) ? 'selected' : '' }} value="9" >9</option>
              <option {{ (isset($data) && $data->orient == 10) ? 'selected' : '' }} value="10" >10</option>
      </SELECT>


 / </b>10</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:18.0pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>TIEMPO: </span></p>
  </td>
  <td width=158 style='width:118.65pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

     <SELECT id="tiempo" name="tiempo" >
              <option {{ (isset($data) && $data->tiempo == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->tiempo == 1) ? 'selected' : '' }} value="1" >1</option>
              <option {{ (isset($data) && $data->tiempo == 2) ? 'selected' : '' }} value="2" >2</option>
              <option {{ (isset($data) && $data->tiempo == 3) ? 'selected' : '' }} value="3" >3</option>
              <option {{ (isset($data) && $data->tiempo == 4) ? 'selected' : '' }} value="4" >4</option>
              <option {{ (isset($data) && $data->tiempo == 5) ? 'selected' : '' }} value="5" >5</option>
      </SELECT>

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /5</span></p>
  </td>
  <td width=161 style='width:120.6pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>LUGAR</span></p>
  </td>
  <td width=158 style='width:118.7pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

        <SELECT id="lugar" name="lugar" >
              <option {{ (isset($data) && $data->lugar == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->lugar == 1) ? 'selected' : '' }} value="1" >1</option>
              <option {{ (isset($data) && $data->lugar == 2) ? 'selected' : '' }} value="2" >2</option>
              <option {{ (isset($data) && $data->lugar == 3) ? 'selected' : '' }} value="3" >3</option>
              <option {{ (isset($data) && $data->lugar == 4) ? 'selected' : '' }} value="4" >4</option>
              <option {{ (isset($data) && $data->lugar == 5) ? 'selected' : '' }} value="5" >5</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/5</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Época</span></p>
  </td>
  <td width=158 style='width:118.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <SELECT id="mme130" name="mme130" >
              <option {{ (isset($data) && $data->mme130 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme130 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td width=161 style='width:120.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Ciudad</span></p>
  </td>
  <td width=158 style='width:118.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


    <SELECT id="mme135" name="mme135" >
              <option {{ (isset($data) && $data->mme135 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme135 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Día de la semana</span></p>
  </td>
  <td width=158 style='width:118.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

     <SELECT id="mme131" name="mme131" >
              <option {{ (isset($data) && $data->mme131 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme131 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>

   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td width=161 style='width:120.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Estado</span></p>
  </td>
  <td width=158 style='width:118.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


       <SELECT id="mme136" name="mme136" >
              <option {{ (isset($data) && $data->mme136 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme136 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Mes </span></p>
  </td>
  <td width=158 style='width:118.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


       <SELECT id="mme132" name="mme132" >
              <option {{ (isset($data) && $data->mme132 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme132 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td width=161 style='width:120.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Institución</span></p>
  </td>
  <td width=158 style='width:118.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      <SELECT id="mme137" name="mme137" >
              <option {{ (isset($data) && $data->mme137 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme137 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Fecha</span></p>
  </td>
  <td width=158 style='width:118.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
        <SELECT id="mme133" name="mme133" >
              <option {{ (isset($data) && $data->mme133 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme133 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=161 style='width:120.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Dirección</span></p>
  </td>
  <td width=158 style='width:118.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
     <SELECT id="mme138" name="mme138" >
              <option {{ (isset($data) && $data->mme138 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme138 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=160 style='width:120.35pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Año</span></p>
  </td>
  <td width=158 style='width:118.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
      <SELECT id="mme134" name="mme134" >
              <option {{ (isset($data) && $data->mme134 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme134 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=161 style='width:120.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Piso</span></p>
  </td>
  <td width=158 style='width:118.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

       <SELECT id="mme139" name="mme139" >
              <option {{ (isset($data) && $data->mme139 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme139 == 1) ? 'selected' : '' }} value="1" >1</option>
      </SELECT>

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>115. REGISTRO: <b style='mso-bidi-font-weight:normal'>

    <SELECT id="mme140" name="mme140" >
              <option {{ (isset($data) && $data->mme140 == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme140 == 1) ? 'selected' : '' }} value="1" >1</option>
              <option {{ (isset($data) && $data->mme140 == 2) ? 'selected' : '' }} value="2" >2</option>
              <option {{ (isset($data) && $data->mme140 == 3) ? 'selected' : '' }} value="3" >3</option>
      </SELECT>


 </b>/3</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
  <td width="28%" style='width:28.2%;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>116. MEMORIA DE
  DIGITOS</span></b></p>
  </td>
  <td width="6%" style='width:6.84%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
     <input id="mme141" type="text" maxlength="9" name="mme141"  value='{{(isset($data))  ? $data->mme141  : old("mme141") }}' >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="31%" style='width:31.62%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>117. ATENCION Y
  CALCULO</span></b></p>
  </td>
  <td width="5%" style='width:5.98%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
       
     <input id="mme142" type="text" maxlength="9" name="mme142"  value='{{(isset($data))  ? $data->mme142  : old("mme142") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="19%" style='width:19.66%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>118. EVOCACION</span></b></p>
  </td>
  <td width="7%" style='width:7.7%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

       <input id="mme143" type="text" maxlength="9" name="mme143"  value='{{(isset($data))  ? $data->mme143  : old("mme143") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td width="28%" style='width:28.2%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Hacia adelante:</span></p>
  </td>
  <td width="6%" style='width:6.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

      <SELECT id="mme141a" name="mme141a" >
              <option {{ (isset($data) && $data->mme141a == 0) ? 'selected' : '' }} value="0" >0</option>
              <option {{ (isset($data) && $data->mme141a == 1) ? 'selected' : '' }} value="1" >1</option>
              <option {{ (isset($data) && $data->mme141a == 2) ? 'selected' : '' }} value="2" >2</option>
              <option {{ (isset($data) && $data->mme141a == 3) ? 'selected' : '' }} value="3" >3</option>
              <option {{ (isset($data) && $data->mme141a == 4) ? 'selected' : '' }} value="4" >4</option>
              <option {{ (isset($data) && $data->mme141a == 5) ? 'selected' : '' }} value="5" >5</option>
              <option {{ (isset($data) && $data->mme141a == 6) ? 'selected' : '' }} value="6" >6</option>
      </SELECT>

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="31%" style='width:31.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Series de siete:</span></p>
  </td>
  <td width="5%" style='width:5.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    
     <input id="mme142a" type="number" min="-99" max="6" name="mme142a"  value='{{(isset($data))  ? $data->mme142a  : old("mme142a") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="19%" style='width:19.66%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Naranja: </span></p>
  </td>
  <td width="7%" style='width:7.7%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
        
     <input id="mme143a" type="number" min="-99" max="10" name="mme143a"  value='{{(isset($data))  ? $data->mme143a  : old("mme143a") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:21.6pt'>
  <td width="28%" rowspan=2 style='width:28.2%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Hacia atrás: </span></p>
  </td>
  <td width="6%" rowspan=2 style='width:6.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

      
     <input id="mme141b" type="number" min="-99" max="6" name="mme141b"  value='{{(isset($data))  ? $data->mme141b  : old("mme141b") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="31%" style='width:31.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Deletrear MUNDO:</span></p>
  </td>
  <td width="5%" style='width:5.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
      
    
     <input id="mme142b" type="number" min="-99" max="10" name="mme142b"  value='{{(isset($data))  ? $data->mme142b  : old("mme142b") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="19%" style='width:19.66%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Mesa:</span></p>
  </td>
  <td width="7%" style='width:7.7%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
         
     <input id="mme143b" type="number" min="-99" max="10" name="mme143b"  value='{{(isset($data))  ? $data->mme143b  : old("mme143b") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:21.6pt'>
  <td width="31%" style='width:31.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Sumar suelto:</span></p>
  </td>
  <td width="5%" style='width:5.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
        
     <input id="mme142c" type="number" min="-99" max="10" name="mme142c"  value='{{(isset($data))  ? $data->mme142c  : old("mme142c") }}' >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="19%" style='width:19.66%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Centavo:</span></p>
  </td>
  <td width="7%" style='width:7.7%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
        <input id="mme143c" type="number" min="-99" max="10" name="mme143c"  value='{{(isset($data))  ? $data->mme143c  : old("mme143c") }}' >

  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Orientación en tiempo (mes)</span></p>
  </td>
  <td width=83 style='width:62.1pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-align:center;
  text-indent:-36.0pt;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


    
      
       <input id="max_error_mes" type="number" min="-99" max="10" name="max_error_mes"  value='{{(isset($data))  ? $data->max_error_mes  : old("max_error_mes") }}' >




   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/3</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Orientación en tiempo (año)</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

       <input id="max_error_ano" type="number" min="-99" max="10" name="max_error_ano"  value='{{(isset($data))  ? $data->max_error_ano  : old("max_error_ano") }}' >

   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/4</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Numero de repeticiones nombre y dirección</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>



          <input id="bleav1_rep"  type="number" min="-99" max="10" name="bleav1_rep"  value='{{(isset($data))  ? $data->bleav1_rep  : old("bleav1_rep") }}' >

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Hora aproximada</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>



      
          <input id="bleav144"  type="number" min="-99" max="10" name="bleav144"  value='{{(isset($data))  ? $data->bleav144  : old("bleav144") }}' >


   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/3</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Cuenta al revés del 20 al 1</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>



      
      
          <input id="bleav145"  type="number" min="-99" max="10" name="bleav145"  value='{{(isset($data))  ? $data->bleav145  : old("bleav145") }}' >





   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/4</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Meses del año al revés</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>



           
      
          <input id="bleav146"  type="number" min="-99" max="10" name="bleav146"  value='{{(isset($data))  ? $data->bleav146  : old("bleav146") }}' >




   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/4</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=331 style='width:248.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Recordar nombre y dirección</span></p>
  </td>
  <td width=83 style='width:62.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


      

           
      
          <input id="bleav147"  type="number" min="-99" max="10" name="bleav147"  value='{{(isset($data))  ? $data->bleav147  : old("bleav147") }}' >




   </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/10</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=702
 style='width:526.5pt;margin-left:-4.75pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>119. CONOCIMIENTO
  GENERAL</span></b></p>
  </td>
  <td width=66 style='width:49.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    


     <input id="mme148"  type="number" min="-99" max="10" name="mme148"  value='{{(isset($data))  ? $data->mme148  : old("mme148") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/5</span></p>
  </td>
  <td width=342 colspan=3 style='width:256.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>120. DENOMINAR: </span></b></p>
  </td>
  <td width=66 style='width:49.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
     <input id="mme149"  type="text" maxlength="9" name="mme149"  value='{{(isset($data))  ? $data->mme149  : old("mme149") }}' >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /10</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Caldera</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

          <input id="mme148a" type="text" maxlength="9" name="mme148a"  value='{{(isset($data))  ? $data->mme148a  : old("mme148a") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Casa</span></p>
  </td>
  <td width=54 style='width:40,5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>207</span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=120 style='width:90.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Escaleras</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    
    
     <input id="mme149e" type="text" maxlength="9" name="mme149e"  value='{{(isset($data))  ? $data->mme149e  : old("mme149e") }}' >




  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Velásquez</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'><span
  style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'>

          <input id="mme148b" type="text" maxlength="9" name="mme148b"  value='{{(isset($data))  ? $data->mme148b  : old("mme148b") }}' >

   </b>/1</span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Tijeras</span></p>
  </td>
  <td width=54 style='width:40,5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
     <input id="mme149a"  type="text" maxlength="9" name="mme149a"  value='{{(isset($data))  ? $data->mme149a  : old("mme149a") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=120 style='width:90.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Raqueta</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    
    
     <input id="mme149f"  type="number" min="-99" max="10" name="mme149f"  value='{{(isset($data))  ? $data->mme149f  : old("mme149f") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Pérez</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
   
       
      
          <input id="mme148c"  type="number" min="-99" max="10" name="mme148c"  value='{{(isset($data))  ? $data->mme148c  : old("mme148c") }}' >


  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Camello</span></p>
  </td>
  <td width=54 style='width:40,5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    
     <input id="mme149b"  type="number" min="-99" max="10" name="mme149b"  value='{{(isset($data))  ? $data->mme149b  : old("mme149b") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=120 style='width:90.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Guirnalda</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    


     
    
     <input id="mme149g"  type="number" min="-99" max="10" name="mme149g"  value='{{(isset($data))  ? $data->mme149g  : old("mme149g") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Lusinchi</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
  
      
          <input id="mme148d"  type="number" min="-99" max="10" name="mme148d"  value='{{(isset($data))  ? $data->mme148d  : old("mme148d") }}' >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Iglú</span></p>
  </td>
  <td width=54 style='width:40,5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

    
     <input id="mme149c"  type="number" min="-99" max="10" name="mme149c"  value='{{(isset($data))  ? $data->mme149c  : old("mme149c") }}' >





  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=120 style='width:90.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Dominós</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    



    
    
     <input id="mme149h"  type="number" min="-99" max="10" name="mme149h"  value='{{(isset($data))  ? $data->mme149h  : old("mme149h") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:21.6pt'>
  <td width=228 style='width:171.0pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Herrera</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
          <input id="mme148e"  type="number" min="-99" max="10" name="mme148e"  value='{{(isset($data))  ? $data->mme148e  : old("mme148e") }}' >

  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=168 style='width:126.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Galleta</span></p>
  </td>
  <td width=54 style='width:40,5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    


    
    
     <input id="mme149d"  type="number" min="-99" max="10" name="mme149d"  value='{{(isset($data))  ? $data->mme149d  : old("mme149d") }}' >




  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
  <td width=120 style='width:90.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Pirámide</span></p>
  </td>
  <td width=66 style='width:49.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    



    

    
    
     <input id="mme149j"  type="number" min="-99" max="10" name="mme149j"  value='{{(isset($data))  ? $data->mme149j  : old("mme149j") }}' >



  </span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '> /1</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>LENGUAJE: </span></b></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:36.0pt;margin-bottom:.0001pt;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";'></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>121. REPETICION DE
FRASES</span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>: <span style='mso-spacerun:yes'>  </span><b
style='mso-bidi-font-weight:normal'>



 <input id="mme150"  type="number" min="-99" max="10" name="mme150"  value='{{(isset($data))  ? $data->mme150  : old("mme150") }}' >




 </b>/2 </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>            </span>Ni
Si, ni No, ni peros <span style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:
normal'>




     <input id="mme150a"  type="number" min="-99" max="10" name="mme150a"  value='{{(isset($data))  ? $data->mme150a  : old("mme150a") }}' >



 / </b>1</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>            </span>El
autobús llego al terminal con una hora de retraso …………………………………………….. <span
style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'>


  
     <input id="mme150b"  type="number" min="-99" max="10" name="mme150b"  value='{{(isset($data))  ? $data->mme150b  : old("mme150b") }}' >


 </b>/1</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>122</span></b><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>. <b style='mso-bidi-font-weight:normal'>INSTRUCCIONES VERBALES</b>:
………………………………………………………………………. <b style='mso-bidi-font-weight:normal'>





  
 <input id="mme151"  type="number" min="-99" max="10" name="mme151"  value='{{(isset($data))  ? $data->mme151  : old("mme151") }}' >




 </b>/3</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>123</span></b><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>. <b style='mso-bidi-font-weight:normal'>INSTRUCCIONES ESCRITAS</b>:
……………………………………………………………………….. <b style='mso-bidi-font-weight:normal'>




  

  
 <input id="mme152"  type="number" min="-99" max="10" name="mme152"  value='{{(isset($data))  ? $data->mme152  : old("mme152") }}' >




 </b>/1</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>124. ESCRIBIR UNA
ORACION COMPLETA</span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>: …………………………………………………………... <b style='mso-bidi-font-weight:
normal'>


  
  
 <input id="mme153"  type="number" min="-99" max="10" name="mme153"  value='{{(isset($data))  ? $data->mme153  : old("mme153") }}' >




 </b>/1</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>125. CONSTRUCCION: </span></b><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Dibujar al lado del original: <b style='mso-bidi-font-weight:normal'>

     
 <input id="mme154"  type="text" maxlength="9" name="mme154"  value='{{(isset($data))  ? $data->mme154  : old("mme154") }}' >


</b>/2</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span 
style='font-size:10.0pt;font-family:"Arial","sans-serif"'>126. Total EMEMm</span></b><span
style='font-size:10.0pt;font-family:"Arial","sans-serif"'>: <b
style='mso-bidi-font-weight:normal'>
  

 <input id="EMEMs"  type="text" maxlength="9" name="EMEMs"  value='{{(isset($data))  ? $data->EMEMs  : old("EMEMs") }}' >


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif"'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span 
style='font-size:10.0pt;font-family:"Arial","sans-serif"'>127. Total Blessed
Abreviado</span></b><span style='font-size:10.0pt;font-family:"Arial","sans-serif"'>:
<b style='mso-bidi-font-weight:normal'>
  
 <input id="bomc"  type="text" maxlength="9" name="bomc"  value='{{(isset($data))  ? $data->bomc  : old("bomc") }}' >

</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span 
style='font-size:10.0pt;font-family:"Arial","sans-serif"'></span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>CLASIFICACION CLINICA
DE DEMENCIA</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif"'>(Clinical
Dementia Rating Scale CDR) </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif"'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Área</span></p>
  </td>
  <td width=90 style='width:67.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>Severidad</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Memoria</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
    
    <input id="memocdr"  type="text" maxlength="9" name="memocdr"  value='{{(isset($data))  ? $data->memocdr  : old("memocdr") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Orientación</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>


    
    <input id="oriencdr"  type="text"  maxlength="9" name="oriencdr"  value='{{(isset($data))  ? $data->oriencdr  : old("oriencdr") }}' >


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Juicio y Solución de Problemas</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       
    <input id="juiciocdr" type="text"  maxlength="9" name="juiciocdr"  value='{{(isset($data))  ? $data->juiciocdr  : old("juiciocdr") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:15.05pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Actividades Sociales</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.05pt'>
 

     <input id="actsoccdr" type="text"  maxlength="9" name="actsoccdr"  value='{{(isset($data))  ? $data->actsoccdr  : old("actsoccdr") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Hogar y aficiones</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>

      
     <input id="Hogarcdr"  type="text" maxlength="9" name="Hogarcdr"  value='{{(isset($data))  ? $data->Hogarcdr  : old("Hogarcdr") }}' >


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>Cuidado Personal</span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
            
     <input id="cuidadocdr"  type="text" maxlength="5" name="cuidadocdr"  value='{{(isset($data))  ? $data->cuidadocdr  : old("cuidadocdr") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=228 style='width:170.75pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";'>128. Estadio CDR: </span></p>
  </td>
  <td width=90 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <input id="cdr"  type="text" maxlength="5" name="cdr"  value='{{(isset($data))  ? $data->cdr  : old("cdr") }}' >
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>EXAMEN MEDICO GENERAL</span></b><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width="34%" style='width:34.52%;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>129. Piel y anexos</span></p>
  </td>
  <td width="12%" style='width:12.74%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <SELECT id="Piel" name="Piel" >
              <option {{ (isset($data) && $data->Piel == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Piel == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Piel == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Piel == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="40%" style='width:40.02%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>133. Abdomen y vías digestivas</span></p>
  </td>
  <td width="12%" style='width:12.74%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="abdomen" name="abdomen" >
              <option {{ (isset($data) && $data->abdomen == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->abdomen == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->abdomen == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->abdomen == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width="34%" style='width:34.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>130. ORL</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="orl" name="orl" >
              <option {{ (isset($data) && $data->orl == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->orl == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->orl == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->orl == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

  </td>
  <td width="40%" style='width:40.02%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>134. Genito urinario</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Genitourinario" name="Genitourinario" >
              <option {{ (isset($data) && $data->Genitourinario == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Genitourinario == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Genitourinario == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Genitourinario == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width="34%" style='width:34.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>131. Cardiovascular</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <SELECT id="Cardiova" name="Cardiova" >
              <option {{ (isset($data) && $data->Cardiova == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Cardiova == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Cardiova == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Cardiova == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="40%" style='width:40.02%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>135. Sistema osteoarticular</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="osteoart" name="osteoart" >
              <option {{ (isset($data) && $data->osteoart == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->osteoart == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->osteoart == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->osteoart == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width="34%" style='width:34.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>132. Torax y vías respiratorias</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <SELECT id="torax" name="torax" >
              <option {{ (isset($data) && $data->torax == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->torax == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->torax == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->torax == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="40%" style='width:40.02%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>136. Miembros superiores e inferiores</span></p>
  </td>
  <td width="12%" style='width:12.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="miembros" name="miembros" >
              <option {{ (isset($data) && $data->miembros == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->miembros == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->miembros == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->miembros == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>137. Evaluación Medica General<span class=GramE>:<b
style='mso-bidi-font-weight:normal'>
  
     <SELECT id="otros" name="otros" >
              <option {{ (isset($data) && $data->otros == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->otros == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->otros == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->otros == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>


</b></span> </span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>EVALUACION NEUROLOGICA GLOBAL</span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>138. Estado de conciencia</span></p>
  </td>
  <td width="8%" style='width:8.34%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="Conciencia" name="Conciencia" >
              <option {{ (isset($data) && $data->Conciencia == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Conciencia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Conciencia == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Conciencia == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>147. Otros pares craneales</span></p>
  </td>
  <td width="14%" style='width:14.82%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <SELECT id="Motor" name="Motor" >
              <option {{ (isset($data) && $data->Motor == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Motor == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Motor == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Motor == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>139. Habla/lenguaje</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Habla" name="Habla" >
              <option {{ (isset($data) && $data->Habla == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Habla == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Habla == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Habla == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>148. Motor</span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="Otros_parescrea" name="Otros_parescrea" >
              <option {{ (isset($data) && $data->Otros_parescrea == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Otros_parescrea == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Otros_parescrea == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Otros_parescrea == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>140. Memoria / conducta</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Memoria" name="Memoria" >
              <option {{ (isset($data) && $data->Memoria == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Memoria == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Memoria == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Memoria == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>149. Movimiento<span style='mso-spacerun:yes'>  
  </span></span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Movimiento" name="Movimiento" >
              <option {{ (isset($data) && $data->Movimiento == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Movimiento == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Movimiento == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Movimiento == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>141. Sensibilidad</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="Sensibilidad" name="Sensibilidad" >
              <option {{ (isset($data) && $data->Sensibilidad == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Sensibilidad == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Sensibilidad == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Sensibilidad == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>150. Marcha </span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
         <SELECT id="Marcha" name="Marcha" >
              <option {{ (isset($data) && $data->Marcha == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Marcha == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Marcha == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Marcha == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>142. Campo visual</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="CampVisual" name="CampVisual" >
              <option {{ (isset($data) && $data->CampVisual == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->CampVisual == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->CampVisual == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->CampVisual == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>151. Coordinación</span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="Coordinacion" name="Coordinacion" >
              <option {{ (isset($data) && $data->Coordinacion == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Coordinacion == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Coordinacion == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Coordinacion == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>143. Agudeza visual </span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="AgudezaVisual" name="AgudezaVisual" >
              <option {{ (isset($data) && $data->AgudezaVisual == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->AgudezaVisual == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->AgudezaVisual == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->AgudezaVisual == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>152. Tono Muscular</span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Tono_muscular" name="Tono_muscular" >
              <option {{ (isset($data) && $data->Tono_muscular == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Tono_muscular == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Tono_muscular == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Tono_muscular == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>144. Movimientos oculares</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
         <SELECT id="MovOculares" name="MovOculares" >
              <option {{ (isset($data) && $data->MovOculares == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->MovOculares == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->MovOculares == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->MovOculares == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>153. Reflejos</span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Reflejos" name="Reflejos" >
              <option {{ (isset($data) && $data->Reflejos == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Reflejos == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Reflejos == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Reflejos == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>145. Fondo de ojo</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="FondOjo" name="FondOjo" >
              <option {{ (isset($data) && $data->FondOjo == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->FondOjo == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->FondOjo == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->FondOjo == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>154. Cuello </span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="Cuello" name="Cuello" >
              <option {{ (isset($data) && $data->Cuello == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Cuello == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Cuello == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Cuello == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width="41%" style='width:41.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>146. Audición</span></p>
  </td>
  <td width="8%" style='width:8.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Audicion" name="Audicion" >
              <option {{ (isset($data) && $data->Audicion == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Audicion == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Audicion == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Audicion == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
  </td>
  <td width="35%" style='width:35.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>155. Columna</span></p>
  </td>
  <td width="14%" style='width:14.82%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
    <SELECT id="Columna" name="Columna" >
              <option {{ (isset($data) && $data->Columna == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Columna == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Columna == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Columna == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Si la respuesta es negativa, registre todos los ítems
que podrían aplicársele:</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Afasia <span
class=GramE>motora …</span>………………………………………………………………………………………... ( 


   <SELECT id="AfasiaMotora" name="AfasiaMotora" >
              <option {{ (isset($data) && $data->AfasiaMotora == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->AfasiaMotora == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->AfasiaMotora == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->AfasiaMotora == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Afasia <span
class=GramE>sensitiva …</span>……………………………………………………………………………………… (

 <SELECT id="AfasiaSensitiva" name="AfasiaSensitiva" >
              <option {{ (isset($data) && $data->AfasiaSensitiva == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->AfasiaSensitiva == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->AfasiaSensitiva == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->AfasiaSensitiva == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

      )</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>   </span><span
style='mso-spacerun:yes'> </span>Disartria (Lenguaje ininteligible, balbuceo<span
class=GramE>) …</span>………………………………………………………. ( 

   <SELECT id="Disartria" name="Disartria" >
              <option {{ (isset($data) && $data->Disartria == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Disartria == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Disartria == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Disartria == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

)</p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Deterioro
visual y/o auditivo <span class=GramE>severo …</span>……………………………………………………………….
(


  <SELECT id="DeterioVisual" name="DeterioVisual" >
              <option {{ (isset($data) && $data->DeterioVisual == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->DeterioVisual == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->DeterioVisual == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->DeterioVisual == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

      )
  </p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Hostil, se
niega a <span class=GramE>responder …</span>………………………………………………………………………. (


     <SELECT id="Hostil" name="Hostil" >
              <option {{ (isset($data) && $data->Hostil == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Hostil == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Hostil == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Hostil == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

)</p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Rechaza ser <span
class=GramE>entrevistado …</span>…………………………………………………………………………. (


     <SELECT id="Rechaza" name="Rechaza" >
              <option {{ (isset($data) && $data->Rechaza == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Rechaza == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Rechaza == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Rechaza == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Psicótico
(Delirio, alucinaciones<span class=GramE>) …</span>………………………………………………………………….
(    

     <SELECT id="Psicotico" name="Psicotico" >
              <option {{ (isset($data) && $data->Psicotico == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Psicotico == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Psicotico == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Psicotico == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Conducta,
bizarra, <span class=GramE>errática …</span>………………………………………………………………………...
(      

      <SELECT id="Conducta" name="Conducta" >
              <option {{ (isset($data) && $data->Conducta == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Conducta == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Conducta == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Conducta == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

)</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Apatía, <span
class=GramE>introversión …</span>………………………………………………………………………………… (
       <SELECT id="apatia" name="apatia" >
              <option {{ (isset($data) && $data->apatia == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->apatia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->apatia == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->apatia == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 
      )


</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Test no
disponible en el idioma del <span class=GramE>paciente …</span>……………………………………………………
( 

     <SELECT id="TestnoDisponiIdio" name="TestnoDisponiIdio" >
              <option {{ (isset($data) && $data->TestnoDisponiIdio == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->TestnoDisponiIdio == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->TestnoDisponiIdio == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->TestnoDisponiIdio == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

      )

</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'><span style='mso-spacerun:yes'>    </span>Demencia
moderada a severa ……………………………………………………………………… ( 

       <SELECT id="Demen_modeaSeve" name="Demen_modeaSeve" >
              <option {{ (isset($data) && $data->Demen_modeaSeve == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Demen_modeaSeve == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Demen_modeaSeve == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Demen_modeaSeve == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 

      )

</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>156. SIGNOS
EXTRAPIRAMIDALES<span class=GramE>: <span style='mso-spacerun:yes'> </span>(</span>


  <SELECT id="SignosExtra" name="SignosExtra" >
              <option {{ (isset($data) && $data->SignosExtra == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->SignosExtra == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->SignosExtra == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->SignosExtra == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT> 


)</span></b></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l9 level1 lfo13'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Habla/ <span class=GramE>Lenguaje …</span>…………………………………………………………………………
(

       <SELECT id="HablaLeng" name="HablaLeng" >
              <option {{ (isset($data) && $data->HablaLeng == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->HablaLeng == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->HablaLeng == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->HablaLeng == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
      )
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l9 level1 lfo13'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Expresión facial…………………………………………………………………………… (  

        <SELECT id="ExpFac" name="ExpFac" >
              <option {{ (isset($data) && $data->ExpFac == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->ExpFac == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->ExpFac == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->ExpFac == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

</span></p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l9 level1 lfo13'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Temblor de reposo ……………………………………………………………...………… (  

       <SELECT id="TembRep" name="TembRep" >
              <option {{ (isset($data) && $data->TembRep == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->TembRep == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->TembRep == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->TembRep == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>157. RIGIDEZ: (  

     <SELECT id="rigidez" name="rigidez" >
              <option {{ (isset($data) && $data->rigidez == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->rigidez == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->rigidez == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->rigidez == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

</span></b></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l0 level1 lfo14'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
class=GramE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Cuello …</span></span><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>…………………………………………………………………………….……..……
(

      <SELECT id="Cuello2" name="Cuello2" >
              <option {{ (isset($data) && $data->Cuello2 == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Cuello2 == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Cuello2 == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Cuello2 == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>
      )

</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>MSD …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>………………………………………………………………………………...…..…… ( 

      <SELECT id="MSD" name="MSD" >
              <option {{ (isset($data) && $data->MSD == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->MSD == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->MSD == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->MSD == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

 </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>MSI …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>…………………………………………………………………………………………… (
    
      <SELECT id="MSI" name="MSI" >
              <option {{ (isset($data) && $data->MSI == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->MSI == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->MSI == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->MSI == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )


</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>MID……………………………………………………………………………..…………..…… (  

         <SELECT id="MID" name="MID" >
              <option {{ (isset($data) && $data->MID == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->MID == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->MID == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->MID == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

    )
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>MII …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>…………………………………………………………………………………….……… (

  <SELECT id="MII" name="MII" >
              <option {{ (isset($data) && $data->MII == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->MII == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->MII == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->MII == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

)

</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Postura …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>…………………………………………………………………………………….… (


     <SELECT id="Postura" name="Postura" >
              <option {{ (isset($data) && $data->Postura == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Postura == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Postura == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Postura == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Bradiquinesia …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>………………………………………………………..………………….…… ( 

        <SELECT id="Bradiquinesia" name="Bradiquinesia" >
              <option {{ (isset($data) && $data->Bradiquinesia == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Bradiquinesia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Bradiquinesia == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Bradiquinesia == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l0 level1 lfo14'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Marcha …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>……………………………………………………………..………………………… ( 

        <SELECT id="Marcha2" name="Marcha2" >
              <option {{ (isset($data) && $data->Marcha2 == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Marcha2 == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Marcha2 == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Marcha2 == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )</span></p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l0 level1 lfo14'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>9.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>¿Los signos EP son inducidos por fármacos? ……………………………………………… ( 

        <SELECT id="EP_farmaco" name="EP_farmaco" >
              <option {{ (isset($data) && $data->EP_farmaco == 0) ? 'selected' : '' }} value="0" > 0 = NO</option>
              <option {{ (isset($data) && $data->EP_farmaco == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
             
      </SELECT>

      )</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:18.0pt;margin-bottom:.0001pt;line-height:normal'><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>158 OTROS MOVIMIENTOS
INVOLUNTARIOS ANORMALES: (

        <SELECT id="Otro_invMov" name="Otro_invMov" >
              <option {{ (isset($data) && $data->Otro_invMov == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Otro_invMov == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Otro_invMov == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Otro_invMov == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )</span></b></p>

<p class=MsoListParagraphCxSpFirst style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l5 level1 lfo15'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>Mioclonias…………………………………………………………………………..…… 


  (

        <SELECT id="Mioclonias" name="Mioclonias" >
              <option {{ (isset($data) && $data->Mioclonias == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Mioclonias == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Mioclonias == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Mioclonias == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )

</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l5 level1 lfo15'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Coreas …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>……………………………………………………………………………...… 
     (

        <SELECT id="Coreas" name="Coreas" >
              <option {{ (isset($data) && $data->Coreas == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Coreas == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Coreas == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Coreas == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )



</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l5 level1 lfo15'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Distonias …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>……………………………………………………………………………… 

    (

        <SELECT id="Distonias" name="Distonias" >
              <option {{ (isset($data) && $data->Distonias == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Distonias == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Distonias == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Distonias == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )



</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l5 level1 lfo15'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Tics …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>…………………………………………………………………….……………… 


   (

        <SELECT id="Tics" name="Tics" >
              <option {{ (isset($data) && $data->Tics == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Tics == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Tics == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Tics == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )





</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l5 level1 lfo15'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=GramE><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>Aletosis …</span></span><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>……………………………………………………………………...………… ( 

        <SELECT id="Atetosis" name="Atetosis" >
              <option {{ (isset($data) && $data->Atetosis == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Atetosis == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Atetosis == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Atetosis == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )
</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal;mso-list:
l5 level1 lfo15'><![if !supportLists]><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";mso-fareast-font-family:Arial;'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Disquinesias <span class=GramE>tardías …</span>……………………………………………………………….…

    ( 

        <SELECT id="Disquinesia_tardia" name="Disquinesia_tardia" >
              <option {{ (isset($data) && $data->Disquinesia_tardia == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Disquinesia_tardia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Disquinesia_tardia == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Disquinesia_tardia == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )




</span></p>

<p class=MsoListParagraphCxSpLast style='margin-bottom:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal;mso-list:l5 level1 lfo15'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>7.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
class=GramE><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>Balismo …</span></span><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>…………………………………………………………………………...……


 ( 

        <SELECT id="Balismo" name="Balismo" >
              <option {{ (isset($data) && $data->Balismo == 0) ? 'selected' : '' }} value="0" > 0 = Normal</option>
              <option {{ (isset($data) && $data->Balismo == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
              <option {{ (isset($data) && $data->Balismo == 8) ? 'selected' : '' }} value="8" >8 = No evaluable</option>
              <option {{ (isset($data) && $data->Balismo == 9) ? 'selected' : '' }} value="9" >9 = No evaluado</option>
      </SELECT>

      )





</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoListParagraphCxSpFirst align=center style='margin-left:0cm;
mso-add-space:auto;text-align:center'><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'>DIAGNOSTICO NEUROLOGICO PRESUNTIVO</span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin:0cm;margin-bottom:.0001pt;
mso-add-space:auto;line-height:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>159. Según su
evaluación </span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-bottom:0cm;margin-bottom:
.0001pt;mso-add-space:auto;line-height:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:21.3pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l7 level1 lfo16'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>El paciente cumple con los criterios para Delirium o estado confusional
…<span class=GramE>..</span>………….. 


 ( 

        <SELECT id="CriterioDelirum" name="CriterioDelirum" >
              <option {{ (isset($data) && $data->CriterioDelirum == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->CriterioDelirum == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>

      )





</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:21.3pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l7 level1 lfo16'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>El paciente tiene deterioro cognitivo, pero no demencia ………………………………….

( 

        <SELECT id="DeterCog_nodement" name="DeterCog_nodement" >
              <option {{ (isset($data) && $data->DeterCog_nodement == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->DeterCog_nodement == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>

      )





</span></p>

<p class=MsoListParagraphCxSpLast style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:21.3pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal;mso-list:l7 level1 lfo16'><![if !supportLists]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
Arial;'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:10.0pt;font-family:"Arial","sans-serif";'>El paciente cumple con los criterios para <span class=GramE>demencia …</span>……………………………………
( 

        <SELECT id="Cump_demencia" name="Cump_demencia" >
              <option {{ (isset($data) && $data->Cump_demencia == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Cump_demencia == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>

      )</span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'></span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";'>COMPLETE LA SECCION 2 SI EL
PACIENTE ESTA DEMENCIADO</span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Arial","sans-serif";'>COMPLETE LA SECCION 3 PARA TODOS
LOS PACIENTES</span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
font-family:"Arial","sans-serif";'>SECCION 2: </span></b></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
'>160. El diagnostico de demencia es debido a: <b
style='mso-bidi-font-weight:normal'>
  
  
 <input id="diag_dem"  type="number" min="-99" max="13" name="diag_dem"  value='{{(isset($data))  ? $data->diag_dem  : old("diag_dem") }}' >


</b></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
mso-fareast-font-family:"Times New Roman";'></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>1 =
  Probable Enfermedad de Alzheimer; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>2 =
  Probable/posible demencia tipo Alzheimer con Enfermedad de Parkinson; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>3 =
  Probable/posible demencia tipo Alzheimer con ECV; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>4 =
  Probable/posible demencia tipo Alzheimer con otras Enfermedades; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>5 =
  Enfermedad de Alzheimer con presentación inusual; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>6 =
  Demencia vascular; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>7 =
  Demencia debida a trastornos metabólicos, tóxicos o TCE; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>8 = Otras encefalopatías;
  </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>9 =
  Enfermedad de Creufzfed-Jakbob; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>10 =
  Enfermedad de Pick; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>11 =
  Enfermedad de Huntington; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>12 = Otras
  demencias; </span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:10.35pt'>
  <td width="88%"  style='width:88.3%;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.35pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";'>13 =
  Enfermedad de causa desconocida</span></p>
  </td>
  <td width="11%"  style='width:11.7%;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.35pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>(<span style='mso-spacerun:yes'>         </span>)</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='text-align:center;tab-stops:173.05pt'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
107%;font-family:"Arial","sans-serif";'>SECCION 3: OTROS
DIAGNOSTICOS</span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>161. Enfermedad de Parkinson</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    

        <SELECT id="enf_park2" name="enf_park2" >
              <option {{ (isset($data) && $data->enf_park2 == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->enf_park2 == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>

    
  </span></b><span style=''></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>162. Enfermedad de Huntington</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="enf_hunt" name="enf_hunt" >
              <option {{ (isset($data) && $data->enf_hunt == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->enf_hunt == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>163. Movimientos <span class=SpellE>extrapiramidales</span>
  debido a fármacos</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="mov_farm" name="mov_farm" >
              <option {{ (isset($data) && $data->mov_farm == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->mov_farm == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>164. Disquinesia tardía</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="disqui_t" name="disqui_t" >
              <option {{ (isset($data) && $data->disqui_t == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->disqui_t == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>165. Sintomatología de ACV</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="SintAcv" name="SintAcv" >
              <option {{ (isset($data) && $data->SintAcv == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->SintAcv == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>166. Signos de ACV</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="SingAcv" name="SingAcv" >
              <option {{ (isset($data) && $data->SingAcv == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->SingAcv == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>167. Esclerosis múltiple</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="escleros" name="escleros" >
              <option {{ (isset($data) && $data->escleros == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->escleros == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>168. Deficiencia de Vitamina B12</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="Def_vitb12" name="Def_vitb12" >
              <option {{ (isset($data) && $data->Def_vitb12 == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Def_vitb12 == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>169. Tumor cerebral</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="tumor" name="tumor" >
              <option {{ (isset($data) && $data->tumor == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->tumor == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>170. Depresión</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <SELECT id="Depresion" name="Depresion" >
              <option {{ (isset($data) && $data->Depresion == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Depresion == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>171. Hidrocefalia a presión normal</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Hidrocelia" name="Hidrocelia" >
              <option {{ (isset($data) && $data->Hidrocelia == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Hidrocelia == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>172. Temblor esencial</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
        <SELECT id="temb_esc" name="temb_esc" >
              <option {{ (isset($data) && $data->temb_esc == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->temb_esc == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>173. Insuficiencia renal </span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="Insf_renal" name="Insf_renal" >
              <option {{ (isset($data) && $data->Insf_renal == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Insf_renal == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>174. Alcoholismo</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="Alcoholismo" name="Alcoholismo" >
              <option {{ (isset($data) && $data->Alcoholismo == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Alcoholismo == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>175. Artritis</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <SELECT id="Artritis" name="Artritis" >
              <option {{ (isset($data) && $data->Artritis == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Artritis == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>176. Enfermedad broncopulmonar obstructiva crónica</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <SELECT id="broncop2" name="broncop2" >
              <option {{ (isset($data) && $data->broncop2 == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->broncop2 == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=360 style='width:269.75pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>177. Otros trastornos</span></p>
  </td>
  <td width=84 style='width:63.25pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <SELECT id="Otrostrastornos" name="Otrostrastornos" >
              <option {{ (isset($data) && $data->Otrostrastornos == 0) ? 'selected' : '' }} value="0" > 0 = No</option>
              <option {{ (isset($data) && $data->Otrostrastornos == 1) ? 'selected' : '' }} value="1" >1 = SI</option>
      </SELECT>
  </td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:173.05pt'><span style='font-size:10.0pt;
line-height:107%;font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='tab-stops:173.05pt'><span style='font-size:10.0pt;
line-height:107%;font-family:"Arial","sans-serif";'>178.
Señale las condiciones que podrían estar asociadas a una pobre ejecución del
EMEMm y/o del test de Blessed Abreviado (BOMC):<b style='mso-bidi-font-weight:
normal'>
  

    <SELECT id="Neupsi_178" name="Neupsi_178" >
              <option {{ (isset($data) && $data->Neupsi_178 == 1) ? 'selected' : '' }} value="1" >1 = Ninguna</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 2) ? 'selected' : '' }} value="2" >2 = Analfabetismo</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 3) ? 'selected' : '' }} value="3" >3 = Deterioro auditivo</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 4) ? 'selected' : '' }} value="4" >4 = Deterioro visual</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 5) ? 'selected' : '' }} value="5" >5 = Impedimento motor</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 6) ? 'selected' : '' }} value="6" >6 = Manejo inadecuado del idioma</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 7) ? 'selected' : '' }} value="7" >7 = Falta de colaboracion</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 8) ? 'selected' : '' }} value="8" >8 = Pruebas no realizadas</option>
              <option {{ (isset($data) && $data->Neupsi_178 == 9) ? 'selected' : '' }} value="9" >9 = Otros</option>
      </SELECT>


</b></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>1 =
  Ninguna; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>2 =
  Analfabetismo; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>3 =
  Deterioro auditivo; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>4 =
  Deterioro visual; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>5 =
  Impedimento motor; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>6 = Manejo
  inadecuado del idioma; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>7 = Falta
  de colaboración; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>8 =
  Pruebas no realizadas; </span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
  
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes'>
  <td width=331  style='width:248.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:2.0pt;line-height:normal;tab-stops:
  173.05pt'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>9 = Otros</span></p>
  </td>
  <td width=101  style='width:75.6pt;padding:0cm 5.4pt 0cm 5.4pt'>
 
  </td>
 </tr>
</table>


</div>

</body>


                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>

              </form>
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

         var fecha = $("#fech_neu").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {
                     $("#first_name").val(response.data.first_name);
                     $("#last_name").val(response.data.last_name);
                     $("#age").val(response.data.edad);
                     $("#hist_id").val(response.data.hist_id);
                     $("#gender").val(response.data.gender);
                     $("#ethnicity").val(response.data.ethnicity);
                     $("#date_birth").val(response.data.dob);
                     $("#age").val(response.data.edad);
                     $("#adress").val(response.data.adress);
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
      }
      
      
    }
  });
    

</script>

@endpush


