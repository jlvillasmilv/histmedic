@extends('layouts.main')
@section('title', 'EVALUACION CLINICA NEUROPSIQUIATRICA')
@section('content')

@php
//dump($errors);
@endphp
<div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('en3f.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>EVALUACION CLINICA NEUROPSIQUIATRICA (3er Versión)</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('en3f.update',  $data->id) : route('en3f.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                       @include('patient.patient')
<div class=WordSection2>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:3.0pt thin-thick-small-gap windowtext;
 mso-border-insidev:3.0pt thin-thick-small-gap windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td   style='width:24.84%;border:double windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  N° de Estudio:</span> 
  <input class="form-control" id="hist_id" type="text"  name="hist_id" required readonly="">
 </p>
  </td>
  <td width="20%"  style='width:20.38%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Fecha:
    <input id="fech_neu" type="date" class="form-control" name="fech_neu"  value='{{(isset($data))  ? date("Y-m-d", strtotime($data->fech_neu))  :date("Y-m-d") }}' requiered>

  </p>
  </td>
  <td width="20%"  style='width:20.46%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Año
  del estudio:

    <input id="Ano_estudio" type="text" name="Ano_estudio" value='{{ old("Ano_estudio", isset($data) ? $data->Ano_estudio : "") }}' maxlength="5">

</p>
  </td>
  <td width="34%"  style='width:34.32%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Evaluado
  por:  
    <input id="Evaluador" type="text" name="Evaluador" value='{{ old("Evaluador", isset($data) ? $data->Evaluador : "") }}' maxlength="30" requiered>
</p>
  </td>
 </tr>
</table>


<table class="TABLE" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=9  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>I. DATOS PERSONALES</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td colspan=2  style='width:28.34%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Nombres:

   <input class="form-control" id="first_name" type="text" name="first_name" required  readonly="">
</p>
  </td>
  <td colspan=2  style='width:28.34%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Apellidos 

  <input class="form-control" id="last_name" type="text" name="last_name" required  readonly=""></p>
  </td>
  <td width="12%" colspan=2  style='width:12.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>2. Edad: 

   <input class="form-control" id="age" type="text" name="age" required  readonly="">
</p>
  </td>
  <td  colspan=2  style='width:11.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>3. Género: 
    <input class="form-control" id="gender" type="text" name="gender"  readonly="">
</p>
  </td>
  <td   style='width:19.1%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Fecha de Nacimiento:
    <input class="form-control" id="date_birth" type="text" name="date_birth"  readonly=""></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:19.55pt'>
  <td width="23%"  style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>4. Raza:
    <input class="form-control" id="ethnicity" type="text" name="ethnicity"  readonly=""> </p>
  </td>
  <td width="33%" colspan=3  style='width:33.12%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>5.
  Estado Marital Actua

    <SELECT id="marita_a" name="marita_a" >
             <option {{ (isset($data) && $data->marita_a == 1) ? 'selected' : '' }} value="1" >1 = Casado/Concubinato</option>
             <option {{ (isset($data) && $data->marita_a == 2) ? 'selected' : '' }} value="2" >2 = Separado/Divorciado</option>
             <option {{ (isset($data) && $data->marita_a == 3) ? 'selected' : '' }} value="3" >3 = Soltero</option>
             <option {{ (isset($data) && $data->marita_a == 4) ? 'selected' : '' }} value="4" >4 = Viudo</option>
      </SELECT>
</p>
  </td>
  <td   style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p  align=right style='margin-top:1.0pt;text-align:right'><span
   style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=right style='margin-top:1.0pt;text-align:right'><span
   style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width="38%" colspan=4  style='width:38.22%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>6. Estado Marital Previo: </span>

    <SELECT id="marita_p" name="marita_p" >
             <option {{ (isset($data) && $data->marita_p == 1) ? 'selected' : '' }} value="1" >1 = Casado/Concubinato</option>
             <option {{ (isset($data) && $data->marita_p == 2) ? 'selected' : '' }} value="2" >2 = Separado/Divorciado</option>
             <option {{ (isset($data) && $data->marita_p == 3) ? 'selected' : '' }} value="3" >3 = Soltero</option>
             <option {{ (isset($data) && $data->marita_p == 4) ? 'selected' : '' }} value="4" >4 = Viudo</option>
      </SELECT>

</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width="23%"  style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>7. Sabe Leer y escribir: </span></p>

      <SELECT id="leer" name="leer" >
             <option {{ (isset($data) && $data->leer == 0) ? 'selected' : '' }} value="0" >0 = Analfabeta </option>
             <option {{ (isset($data) && $data->leer == 1) ? 'selected' : '' }} value="2" >1 = Lee y escribe</option>
      </SELECT>
      
  </td>
  <td  colspan=2  style='width:26.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>8. Años aprobados de educación formal: </span></p>
   <input id="educacio" type="text" class="form-control" name="educacio" value='{{ old("educacio", isset($data) ? $data->educacio : "") }}' maxlength="25">
  </td>
  <td width="49%" colspan=6  style='width:49.68%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>9. Ocupación habitual:<span style='mso-spacerun:yes'> 
  </span></span></p>
   <SELECT id="ocupacio" name="ocupacio" >
             <option {{ (isset($data) && $data->ocupacio == 1) ? 'selected' : '' }} value="1" >1 = Profesionales/Tecnicos</option>
             <option {{ (isset($data) && $data->ocupacio == 2) ? 'selected' : '' }} value="2" >2 = Oficinistas no profesionales</option>
             <option {{ (isset($data) && $data->ocupacio == 3) ? 'selected' : '' }} value="3" >3 = Ama de casas</option>
             <option {{ (isset($data) && $data->ocupacio == 4) ? 'selected' : '' }} value="4" > 4 = Oficios artesanales</option>
              <option {{ (isset($data) && $data->ocupacio == 5) ? 'selected' : '' }} value="5" >5 = Obreros y Domesticos</option>
      </SELECT>


  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width="23%"  style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Nombre del Informante:  
       <input id="nombre_inf" type="text" class="form-control" name="nombre_inf" value='{{ old("nombre_inf", isset($data) ? $data->nombre_inf : "") }}' maxlength="30">
     </span></p>
  </td>
  <td  colspan=2  style='width:26.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Parentesco:  <input id="parentesco" type="text" class="form-control" name="parentesco"  value='{{ old("parentesco", isset($data) ? $data->parentesco : "") }}' maxlength="30">
</span></p>
  </td>
  <td  colspan=4  style='width:24.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Teléfono del Informante: 

    <input id="tlf_inf" type="text" class="form-control" name="tlf_inf"  value='{{ old("tlf_inf", isset($data) ? $data->tlf_inf : "") }}' maxlength="30">
</span></p>
  </td>
  <td width="25%" colspan=2  style='width:25.48%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Teléfono del Paciente:

      <input id="tlf_part" type="text" class="form-control" name="tlf_part" value='{{ old("tlf_part", isset($data) ? $data->tlf_part : "") }}' maxlength="30">
</span></p>
  </td>
 </tr>
 
 <tr height=0>
  <td width=167 style='border:none'></td>
  <td width=34 style='border:none'></td>
  <td width=155 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <tdstyle='border:none'></td>
  <td width=54 style='border:none'></td>
  <tdstyle='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=135 style='border:none'></td>
 </tr>
 
</table>

<p ><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>II. ANTECEDENTES
  PSIQUIATRICOS</span>
  </td>
 </tr>
 <tr style='border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;'>
  <td   style='border-left:none;'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>10. Antecedentes de tratamiento u hospitalizaciones
  psiquiátricas</span></p>
 
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

   <SELECT id="ante_psi" name="ante_psi" >
             <option {{ (isset($data) && $data->ante_psi == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes</option>
             <option {{ (isset($data) && $data->ante_psi == 1) ? 'selected' : '' }} value="1" > 1 = Esquizofrenia</option>
             <option {{ (isset($data) && $data->ante_psi == 2) ? 'selected' : '' }} value="2" >2 = Trastornos obsesivo-compulsivo</option>
             <option {{ (isset($data) && $data->ante_psi == 3) ? 'selected' : '' }} value="3" >3 = Ansiedad</option>
             <option {{ (isset($data) && $data->ante_psi == 4) ? 'selected' : '' }} value="4" >4 = Trastornos del animo</option>
              <option {{ (isset($data) && $data->ante_psi == 5) ? 'selected' : '' }} value="5" >5 = Otros</option>
               <option {{ (isset($data) && $data->ante_psi == 6) ? 'selected' : '' }} value="6" >6 = Diagnositoc Desconocido</option>
      </SELECT>


  </td>
  <td width="46%"  style='border-bottom:solid windowtext 1.0pt;'>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:10.7pt;margin-bottom:.0001pt;text-indent:-7.1pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>11. Especifique la modalidad de
  tratamiento</span></p>
 
  </td>
  <td  style=';border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
 

   <SELECT id="mod_tto" name="mod_tto" >
             <option {{ (isset($data) && $data->mod_tto == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes</option>
             <option {{ (isset($data) && $data->mod_tto == 1) ? 'selected' : '' }} value="1" > 1 = TEC solamente</option>
             <option {{ (isset($data) && $data->mod_tto == 2) ? 'selected' : '' }} value="2" >2 = Psicofarmacos solamente</option>
             <option {{ (isset($data) && $data->mod_tto == 3) ? 'selected' : '' }} value="3" >3 = Psicoterapia/asesoramiento</option>
             <option {{ (isset($data) && $data->mod_tto == 4) ? 'selected' : '' }} value="4" >4 = Psicofarmacos/psicoterapia/TEC</option>
             <option {{ (isset($data) && $data->mod_tto == 5) ? 'selected' : '' }} value="5" >5 = Otros farmacos</option>
             <option {{ (isset($data) && $data->mod_tto == 6) ? 'selected' : '' }} value="6" >6 = No especifico</option>
      </SELECT>

     
  </td>
 </tr>
</table>

<p ><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>En
caso de ser afirmativo alguno de los antecedentes antes señalados, describa la
historia del mismo:</span></p>

<p ><span  style='font-family:"Arial","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>III. ANTECEDENTES
  PATOLOGICOS GENERALES</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>12. Tuberculosis pulmonar</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="tubercul" name="tubercul" >
             <option {{ (isset($data) && $data->tubercul == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tubercul == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT>
  </td>
  <td   style=''>
      <span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>15. Sífilis.</span>
  </td>
  <td  style=';border-top:none;border-left:
  solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>
    

      
     <SELECT id="sifilis" name="sifilis" >
             <option {{ (isset($data) && $data->sifilis == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sifilis == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT>



  </span></b></p>
  <p  align=center style=';text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>13. Traumatismo craneoencefálico con pérdida total del estado
  de conciencia </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>En caso
  afirmativo, responda:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>       </span>Tiempo aprox.
  Del episodio más importante (Min): </span><b style='mso-bidi-font-weight:
  normal'><span  style='font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>
    
       <input id="trau_cra13_2" type="text" class="form-control" name="trau_cra13_2" value='{{ old("trau_cra13_2", isset($data) ? $data->trau_cra13_2 : "") }}' maxlength="10">


  </span></b><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Numero de
  eventos con pérdida total: </span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
    


      <input id="trau_cra13_3" type="text" class="form-control" name="trau_cra13_3"  value='{{(isset($data))  ? $data->trau_cra13_3  : old("trau_cra13_3") }}' maxlength="10">


  </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Años de ocurrencia:
  </span><b style='mso-bidi-font-weight:normal'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
    

     <input id="trau_cra13_4" type="text" class="form-control" name="trau_cra13_4"  value='{{(isset($data))  ? $data->trau_cra13_4  : old("trau_cra13_4") }}' maxlength="10">

  </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span><span
  style='mso-spacerun:yes'>    </span>Curso el o los episodios (s) con:</span><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'> 
    

      <SELECT id="trau_cra13_5" name="trau_cra13_5" >
             <option {{ (isset($data) && $data->trau_cra13_5 == 0) ? 'selected' : '' }} value="0" > 0 = No responde</option>
             <option {{ (isset($data) && $data->trau_cra13_5 == 1) ? 'selected' : '' }} value="1" > 1 = Heridas Superficiales menores</option>
             <option {{ (isset($data) && $data->trau_cra13_5 == 2) ? 'selected' : '' }} value="2" > 2 = Heridas que requirieron suturas</option>
             <option {{ (isset($data) && $data->trau_cra13_5 == 3) ? 'selected' : '' }} value="3" > 3 = Fractura Osea</option>
             <option {{ (isset($data) && $data->trau_cra13_5 == 4) ? 'selected' : '' }} value="4" > 4 = Otros</option>
            
      </SELECT>

  </span></b><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
 
  <td  style='border-right:solid windowtext 1.0pt;'>
       <SELECT id="trau_cra13_1" name="trau_cra13_1" >
             <option {{ (isset($data) && $data->trau_cra13_1 == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->trau_cra13_1 == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT>
  </td>
  <td   style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>16. Traumatismo craneoencefálico significativo sin pérdida
  del estado de conciencia</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>  </span>En caso
  afirmativo, responda:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>Curso el o los
  episodios (s) con:</span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
     
       <SELECT id="cran_sig_16_2" name="cran_sig_16_2" >
              <option {{ (isset($data) && $data->cran_sig_16_2 == 0) ? 'selected' : '' }} value="0" >0 = No responde</option>
             <option {{ (isset($data) && $data->cran_sig_16_2 == 1) ? 'selected' : '' }} value="1" >1 = Heridas Superficiales menores</option>
             <option {{ (isset($data) && $data->cran_sig_16_2 == 2) ? 'selected' : '' }} value="2" >2 = Heridas que requirieron suturas</option>
             <option {{ (isset($data) && $data->cran_sig_16_2 == 3) ? 'selected' : '' }} value="3" >3 = Fractura Osea</option>
             <option {{ (isset($data) && $data->cran_sig_16_2 == 4) ? 'selected' : '' }} value="4" >4 = Otros</option>
            
      </SELECT>

   </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:40.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>

  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Número de TC
  sin pérdida de conciencia: </span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
     
       <input id="cran_sig_16_3" type="text" class="form-control" name="cran_sig_16_3"  value='{{(isset($data))  ? $data->cran_sig_16_3  : old("cran_sig_16_3") }}' maxlength="10">

   </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Años de ocurrencia:
  </span><b style='mso-bidi-font-weight:normal'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
    

     <input id="cran_sig_16_4" type="text" class="form-control" name="cran_sig_16_4"  value='{{(isset($data))  ? $data->cran_sig_16_4  : old("cran_sig_16_4") }}' maxlength="10">

  </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>   </span><span
  style='mso-spacerun:yes'>       </span></span></p>
  </td>
  <td  style=';border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>
    

        <SELECT id="cran_sig_16_1" name="cran_sig_16_1" >
             <option {{ (isset($data) && $data->cran_sig_16_1 == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cran_sig_16_1 == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT>


  </span></b></p>
  <p  align=center style=';text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>14. Crisis Convulsivas no epilépticas</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>
    
        <SELECT id="no_epile" name="no_epile" >
             <option {{ (isset($data) && $data->no_epile == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->no_epile == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>


  </span></b></p>
 
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>17. Infecciones del SNC </span></p>
  </td>
  <td  style=';border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>
    

     <SELECT id="snc" name="snc" class="form-control" >
             <option {{ (isset($data) && $data->snc == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->snc == 1) ? 'selected' : '' }} value="1" >1 = Meningitis</option>
             <option {{ (isset($data) && $data->snc == 2) ? 'selected' : '' }} value="2" >2 = Encefalitis</option>
             <option {{ (isset($data) && $data->snc == 3) ? 'selected' : '' }} value="3" >3 = Polimielitis</option>
     </SELECT>

  </span></b></p>
 
  </td>
 </tr>

</table>

<p ><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class="table"
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td colspan=4  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";color: white;
  mso-bidi-font-family:"Times New Roman"'>IV. ANTECEDENTES DE
  CONDICIONES Y HÁBITOS CRÓNICOS </span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>18. Abuso de drogas:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Tipo(s) de
  droga(s): </span>

      <input id="tipo_drog" type="text" class="form-control" name="tipo_drog" value='{{ old("tipo_drog", isset($data) ? $data->tipo_drog : "") }}' maxlength="30">

  <span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Tiempo de abuso: </span> 

    <input id="fech_drog" type="date"  name="fech_drog" value='{{ old("fech_drog", isset($data) && strtotime($data->fech_drog) != false  ? date("Y-m-d", strtotime($data->fech_drog)) : "" )}}'>

</p>
  </td>
  <td  style='width:10.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="drogas" name="drogas" class="form-control">
             <option {{ (isset($data) && $data->drogas == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->drogas == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->drogas == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>

  </td>
  <td style="width: 20%">
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>28. Hábito Tabáquico: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Número de
  Cajetillas: </span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
     
      <input id="cant_taba" type="text" class="form-control" name="cant_taba" value='{{ old("cant_taba", isset($data) ? $data->cant_taba : "") }}' maxlength="10">

   </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo del
  Hábito: </span>  

        <input id="fech_taba" type="date"  name="fech_taba" value='{{ old("fech_taba", isset($data) && strtotime($data->fech_taba) != false  ? date("Y-m-d", strtotime($data->fech_taba)) : "" )}}'>

  </p>
  </td>
  <td>
       <SELECT id="tabaquis" name="tabaquis" class="form-control">
             <option {{ (isset($data) && $data->tabaquis == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tabaquis == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->tabaquis == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>19. Abuso de alcohol:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Tipo(s) de bebida(s):
  </span> 

    <input id="tipo_alco" type="text" class="form-control" name="tipo_alco" value='{{ old("tipo_alco", isset($data) ? $data->tipo_alco : "") }}' maxlength="30">

  <span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Cantidad
  consumida: </span>

         <input id="cant_alco" type="text" class="form-control" name="cant_alco" value='{{ old("cant_alco", isset($data) ? $data->cant_alco : "") }}' maxlength="10">


  <span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Frecuencia
  semanal: </span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
     

       <input id="freq_alco" type="text" class="form-control" name="freq_alco"  value='{{ old("freq_alco", isset($data) ? $data->freq_alco : "") }}' maxlength="10">

   </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'> Tiempo de abuso: </span>

        <input id="fech_alco" type="date"  name="fech_alco" value='{{ old("fech_alco", isset($data) && strtotime($data->fech_alco) != false  ? date("Y-m-d", strtotime($data->fech_alco)) : "" )}}'>

</p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=right style=';text-align:right'>

         <SELECT id="alcohol" name="alcohol" class="form-control">
             <option {{ (isset($data) && $data->alcohol == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->alcohol == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->alcohol == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>

    <span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>29. Hipertensión Arterial: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo:
  </span>

       <input id="fech_hta" type="date" name="fech_hta" value='{{ old("fech_hta", isset($data) && strtotime($data->fech_hta) != false  ? date("Y-m-d", strtotime($data->fech_hta)) : "" )}}' >
 </p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Medicación:
  </span>

     <SELECT id="medi_hta" name="medi_hta" class="form-control">
             <option {{ (isset($data) && $data->medi_hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->medi_hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->medi_hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>

</p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>¿No ha
  existido control de la misma? </span>

       <SELECT id="val_hta" name="val_hta" class="form-control">
             <option {{ (isset($data) && $data->val_hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->val_hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->val_hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>

</p>
  </td>
  <td >
       <SELECT id="hta" name="hta" class="form-control">
             <option {{ (isset($data) && $data->hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>20. Enfermedad Coronaria:</span></p>
  
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

         <SELECT id="coronari" name="coronari" class="form-control">
             <option {{ (isset($data) && $data->coronari == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->coronari == 1) ? 'selected' : '' }} value="1" >1 = Infarto al miocardio</option>
             <option {{ (isset($data) && $data->coronari == 2) ? 'selected' : '' }} value="2" >2 = Angina</option>
             <option {{ (isset($data) && $data->coronari == 3) ? 'selected' : '' }} value="3" >3 = TMT positivo</option>
         </SELECT>

  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>30. Insuficiencia Vascular Periférica: </span></p>
  
  </td>
  <td >
       <SELECT id="ins_vasc" name="ins_vasc" class="form-control">
             <option {{ (isset($data) && $data->ins_vasc == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ins_vasc == 1) ? 'selected' : '' }} value="1" >1 = Venosa</option>
             <option {{ (isset($data) && $data->ins_vasc == 2) ? 'selected' : '' }} value="2" >2 = Arterial</option>
             <option {{ (isset($data) && $data->ins_vasc == 2) ? 'selected' : '' }} value="3" >3 = Mixta</option>
         </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td  style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>21. Arritmias y/o Valvulopatias:<span
  style='mso-spacerun:yes'>                                                      
  </span></span></p>
  
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Tiempo: </span>


       <input id="arritmia_fech" type="date"  name="arritmia_fech" value='{{ old("arritmia_fech", isset($data) && strtotime($data->arritmia_fech) != false  ? date("Y-m-d", strtotime($data->arritmia_fech)) : "" )}}' >

  <span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=right style=';text-align:right'>

       <SELECT id="arritmia" name="arritmia" class="form-control">
             <option {{ (isset($data) && $data->arritmia == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->arritmia == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->arritmia == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>

    <span   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td >
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>31. Hipotiroidismo.</span></p>
  </td>
  <td >
       <SELECT id="hipotiro" name="hipotiro" class="form-control">
             <option {{ (isset($data) && $data->hipotiro == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipotiro == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipotiro == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>22. Insuficiencia Cardiaca Congestiva:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>  </span><span
  style='mso-spacerun:yes'>    </span>Tiempo: </span>

       <input id="fech_ins_card" type="date"  name="fech_ins_card" value='{{ old("fech_ins_card", isset($data) && strtotime($data->fech_ins_card) != false  ? date("Y-m-d", strtotime($data->fech_ins_card)) : "" )}}' >

   </p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT id="ins_card" name="ins_card" class="form-control">
             <option {{ (isset($data) && $data->ins_card == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ins_card == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->ins_card == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td >
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>32. Hipertiroidismo </span></p>
  </td>
  <td >
      <SELECT id="hipertir" name="hipertir" class="form-control">
             <option {{ (isset($data) && $data->hipertir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipertir == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipertir == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>23. Diabetes mellitus. Tipo: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo:
  </span>

     <input id="fech_diab_mel" type="date"  name="fech_diab_mel" value='{{ old("fech_diab_mel", isset($data) && strtotime($data->fech_diab_mel) != false  ? date("Y-m-d", strtotime($data->fech_diab_mel)) : "" )}}' >

</p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Medicación:
  </span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>
     

        <input id="medi_diab_mel" type="text" class="form-control" name="medi_diab_mel" value='{{ old("medi_diab_mel", isset($data) ? $data->medi_diab_mel : "") }}' maxlength="30">

   </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>¿No ha
  existido control de la misma? </span>

          <SELECT id="nivel_glic" name="nivel_glic" class="form-control">
             <option {{ (isset($data) && $data->nivel_glic == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->nivel_glic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
         </SELECT>
</p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT id="diab_mel" name="diab_mel" class="form-control">
             <option {{ (isset($data) && $data->diab_mel == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->diab_mel == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->diab_mel == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td >
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>33. Dislipidemia.Tipo:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo:
  </span>

      <input id="fech_dislipid" type="date"  name="fech_dislipid" value='{{ old("fech_dislipid", isset($data) && strtotime($data->fech_dislipid) != false  ? date("Y-m-d", strtotime($data->fech_dislipid)) : "" )}}' >

  <span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Medicación:
  </span>

      <SELECT id="medi_dislipid" name="medi_dislipid" class="form-control">
             <option {{ (isset($data) && $data->medi_dislipid == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->medi_dislipid == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->medi_dislipid == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>

 </p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>¿No ha
  existido control de la misma? </span>

       <SELECT id="dislipid_control" name="dislipid_control" class="form-control">
             <option {{ (isset($data) && $data->dislipid_control == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->dislipid_control == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
</p>
  </td>
  <td >
       <SELECT id="dislipid" name="dislipid" class="form-control">
             <option {{ (isset($data) && $data->dislipid == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->dislipid == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->dislipid == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>24. Insuficiencia renal y/o hidronefrosis:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo: </span>

     <input id="fech_in_renal" type="date"  name="fech_in_renal" value='{{ old("fech_in_renal", isset($data) && strtotime($data->fech_in_renal) != false  ? date("Y-m-d", strtotime($data->fech_in_renal)) : "" )}}' >

   </p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT id="in_renal" name="in_renal" class="form-control">
             <option {{ (isset($data) && $data->in_renal == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->in_renal == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->in_renal == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>34. Cirrosis Hepática: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Tiempo: </span>

      <input id="fech_cirr_epa" type="date"  name="fech_cirr_epa" value='{{ old("fech_cirr_epa", isset($data) && strtotime($data->fech_cirr_epa) != false  ? date("Y-m-d", strtotime($data->fech_cirr_epa)) : "" )}}' >

</p>
  </td>
  <td  style=';'>
       <SELECT id="cirr_epa" name="cirr_epa" class="form-control">
             <option {{ (isset($data) && $data->cirr_epa == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cirr_epa == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->cirr_epa == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>25. Ulcera péptica y/o gastritis crónica:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo: </span>

       <input id="fech_ulcera" type="date"  name="fech_ulcera" value='{{ old("fech_ulcera", isset($data) && strtotime($data->fech_ulcera) != false  ? date("Y-m-d", strtotime($data->fech_ulcera)) : "" )}}' >

  <span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="ulcera" name="ulcera" class="form-control">
             <option {{ (isset($data) && $data->ulcera == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ulcera == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->ulcera == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>35. Epilepsia: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Tiempo: </span>

       <input id="fech_epileps" type="date"  name="fech_epileps"  value='{{ old("fech_epileps", isset($data) && strtotime($data->fech_epileps) != false  ? date("Y-m-d", strtotime($data->fech_epileps)) : "" )}}' >
 </p>
  </td>
  <td  style=''>
     <SELECT id="epileps" name="epileps" class="form-control">
             <option {{ (isset($data) && $data->epileps == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->epileps == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->epileps == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>26. Enfermedad Broncopulmonar obstructiva crónica:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo: </span>


        <input id="fech_broncop" type="date"  name="fech_broncop"  value='{{ old("fech_broncop", isset($data) && strtotime($data->fech_broncop) != false  ? date("Y-m-d", strtotime($data->fech_broncop)) : "" )}}' >

</p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="broncop" name="broncop" class="form-control">
             <option {{ (isset($data) && $data->broncop == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->broncop == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->broncop == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>36. Cáncer. Tipo: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Tiempo: </span>

     <input id="fech_cancer" type="date"  name="fech_cancer" value='{{ old("fech_cancer", isset($data) && strtotime($data->fech_cancer) != false  ? date("Y-m-d", strtotime($data->fech_cancer)) : "" )}}' >

  <span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  style=''>
        <SELECT id="cancer" name="cancer" class="form-control">
             <option {{ (isset($data) && $data->cancer == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cancer == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->cancer == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>27. Artritis u Osteoartritis:</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>Tiempo: </span>

       <input id="fech_artritri" type="date" name="fech_artritri" value='{{ old("fech_artritri", isset($data) && strtotime($data->fech_artritri) != false  ? date("Y-m-d", strtotime($data->fech_artritri)) : "" )}}' >

</p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="artritri" name="artritri" class="form-control">
             <option {{ (isset($data) && $data->artritri == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->artritri == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->artritri == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
  </td>
  <td   style=''>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>37. Otros: </span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Tiempo: </span>

      <input id="fech_otros_a" type="date"  name="fech_otros_a" value='{{ old("fech_otros_a", isset($data) && strtotime($data->fech_otros_a) != false  ? date("Y-m-d", strtotime($data->fech_otros_a)) : "" )}}'>

  </p>
  </td>
  <td  style=''>
      <SELECT id="otros_a" name="otros_a" class="form-control">
             <option {{ (isset($data) && $data->otros_a == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->otros_a == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->otros_a == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>

</table>

<p ><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class="table"
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td colspan=6  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white'>V. ANTECEDENTES
  FAMILIARES (PRIMER GRADO)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:18.0pt'>
  <td rowspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>38.. Antecedentes familiares de demencia</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>0. No hay antecedentes<span
  style='mso-spacerun:yes'>                  </span>5 Enfermedad de Parkinson</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>1. Desconoce la causa<span
  style='mso-spacerun:yes'>                    </span>6. Demencia
  frontotemporal</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>2. Demencia Vascular<span
  style='mso-spacerun:yes'>             </span><span
  style='mso-spacerun:yes'>        </span>7. Demencia de C. de Lewis</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>3. Enfermedad de Alzheimer<span
  style='mso-spacerun:yes'>           </span>8. Otras causas</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>4. Enfermedad de Huntington<span
  style='mso-spacerun:yes'>         </span></span><span 
  style='font-size:1.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>9. Más de una causa de demen</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span
  style='mso-spacerun:yes'>                                                      
  </span>10. No sabe si tiene ant. fliares</span></p>
  </td>
  <td rowspan=2 colspan="2" style="vertical-align: middle; border: solid windowtext 1.0pt;">

    <SELECT id="ante_fam" name="ante_fam" class="form-control">
             <option {{ (isset($data) && $data->ante_fam == 0) ? 'selected' : '' }} value="0" >0 = No hay antecedentes</option>
             <option {{ (isset($data) && $data->ante_fam == 1) ? 'selected' : '' }} value="1" >1 = Desconoce la causa</option>
             <option {{ (isset($data) && $data->ante_fam == 2) ? 'selected' : '' }} value="2" >2 = Demencia Vascular</option>
             <option {{ (isset($data) && $data->ante_fam == 3) ? 'selected' : '' }} value="3" >3 = Enfermedad de Alzheimer</option>
             <option {{ (isset($data) && $data->ante_fam == 4) ? 'selected' : '' }} value="4" >4 = Enfermedad de Huntington</option>
             <option {{ (isset($data) && $data->ante_fam == 5) ? 'selected' : '' }} value="5" >5 = Demencia Vascular</option>
             <option {{ (isset($data) && $data->ante_fam == 6) ? 'selected' : '' }} value="6" >6 = Demencia Frontotemporal</option>
             <option {{ (isset($data) && $data->ante_fam == 7) ? 'selected' : '' }} value="7" >7 = Demencia de C = de Lewis</option>
             <option {{ (isset($data) && $data->ante_fam == 8) ? 'selected' : '' }} value="8" >8 = Otras causas</option>
             <option {{ (isset($data) && $data->ante_fam == 9) ? 'selected' : '' }} value="9" >9 = Mas de una causa de demencia</option>
             <option {{ (isset($data) && $data->ante_fam == 10) ? 'selected' : '' }} value="10" >10 = No sabe si tiene antecedentes familiares</option>
    </SELECT>
 
  </td>

  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:18.0pt'>

  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>41. Número de hermanos</span></p>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>(sin incluir al
  paciente)</span></p>
  <p  align=center style=';text-align:center'>  

      <input id="Hermanos" type="text" class="form-control" name="Hermanos" value='{{ old("Hermanos", isset($data) ? $data->Hermanos : "") }}' maxlength="30">

    <span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:18.0pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>42. Número de hijos</span></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt'>
     <input id="hijos" type="text" class="form-control" name="hijos" value='{{ old("hijos", isset($data) ? $data->hijos : "") }}' maxlength="5">

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:44.5pt'>
  <td  colspan=4  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:44.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>43. Algun(os) de sus familiares de 1er grado participa en
  el EME<span style='mso-spacerun:yes'>   </span>Nombre, Historia y
  Parentesco:<span
  style='mso-spacerun:yes'>                                                                 
  </span></span></p>
  
       <SELECT id="fami_eme" name="fami_eme" class="form-control">
             <option {{ (isset($data) && $data->fami_eme == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->fami_eme == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td  colspan=2  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>39. Si está vivo el Padre </span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Edad de
  fallecimiento del padre:</span>

      <input id="edad_falle_pa" type="text" class="form-control" name="edad_falle_pa" value='{{ old("edad_falle_pa", isset($data) ? $data->edad_falle_pa : "") }}' maxlength="5">
        
  <span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>             </span><span
  style='mso-spacerun:yes'>    </span><span
  style='mso-spacerun:yes'>                        </span></span>


      <SELECT id="falle_pa" name="falle_pa" class="form-control">
             <option {{ (isset($data) && $data->falle_pa == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->falle_pa == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->falle_pa == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
</p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>Causa:</span>

      <input id="Causa_falle_pa" type="text" class="form-control" name="Causa_falle_pa" value='{{ old("Causa_falle_pa", isset($data) ? $data->Causa_falle_pa : "") }}' maxlength="30">

  <span  style='font-size:
  18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>                  </span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  colspan=4 style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>44. Antecedentes familiares de ACV<span
  style='mso-spacerun:yes'>                                                                                                             
  </span></span></p>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span
  style='mso-spacerun:yes'>                                                                             
  </span><span style='mso-spacerun:yes'>                    </span><span
  style='mso-spacerun:yes'> </span></span>


        <SELECT id="ante_acv" name="ante_acv" class="form-control">
             <option {{ (isset($data) && $data->ante_acv == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ante_acv == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

  <span
   style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>  
  </span></span><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td  colspan=2  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>40. Si está viva la Madre<span style='mso-spacerun:yes'>  
  </span><span style='mso-spacerun:yes'>                         </span></span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>  </span><span
  style='mso-spacerun:yes'>   </span>Edad de fallecimiento de la madre: </span>


      <input id="edad_falle_ma" type="text" class="form-control" name="edad_falle_ma" value='{{ old("edad_falle_ma", isset($data) ? $data->edad_falle_ma : "") }}' maxlength="30">


  <span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>           </span><span
  style='mso-spacerun:yes'>                        </span><span
  style='mso-spacerun:yes'> </span></span>


         <SELECT id="falle_ma" name="falle_ma" class="form-control">
             <option {{ (isset($data) && $data->falle_ma == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->falle_ma == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
            
      </SELECT>
  <span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>                                                            
  </span></span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>        </span>Causa: </span>

      <input id="causa_falle_ma" type="text" class="form-control" name="causa_falle_ma" value='{{ old("causa_falle_ma", isset($data) ? $data->causa_falle_ma : "") }}' maxlength="30">

   </p>
  </td>
  <td  colspan=4  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>45. Antecedentes familiares de Diabetes Mellitus<span
  style='mso-spacerun:yes'>                                                           
  </span></span></p>
  <p  align=center style=';text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>                                                                   
  </span><span style='mso-spacerun:yes'>                            </span><span
  style='mso-spacerun:yes'> </span></span>


     <SELECT id="ant_diab" name="ant_diab" class="form-control">
             <option {{ (isset($data) && $data->ant_diab == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ant_diab == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

   </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=6  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:10.8pt;text-align:justify;text-indent:
  -7.1pt'><i style='mso-bidi-font-style:normal'><span  style='font-size:
  6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>38.<span style='mso-spacerun:yes'>  </span>Indique en el
  recuadro el número del antecedente descrito por el paciente la edad en año.
  41 y 42 indique el número de hermanos e hijos. 43 indique el número de
  historia y parentesco de cualquier otro(s) familiar de 1er grado
  participante. Resto de los enunciados indique en el <span
  style='mso-spacerun:yes'> </span>recuadro 0 en caso de ausencia del antecedente
  y 1 en caso de obtenerse una respuesta afirmativa.</span></i></p>
  </td>
 </tr>
</table>

<p ><span  style='font-size:6.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>


<table class="table" 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white;'>VI. ANTECEDENTES
  FAMILIARES (SEGUNDO GRADO)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:18.0pt'>
  <td rowspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>46.. Antecedentes familiares de demencia</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>0. No hay antecedentes<span
  style='mso-spacerun:yes'>                  </span>5 Enfermedad de Parkinson</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>1. Desconoce la causa<span
  style='mso-spacerun:yes'>                    </span>6. Demencia
  frontotemporal</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>2. Demencia Vascular<span
  style='mso-spacerun:yes'>                     </span>7. Demencia de C. de
  Lewis</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>3. Enfermedad de Alzheimer<span
  style='mso-spacerun:yes'>           </span>8. Otras causas</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>4. Enfermedad de Huntington<span
  style='mso-spacerun:yes'>         </span></span><span 
  style='font-size:1.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>9. Más de una causa de demen</span></p>
  <p  style='margin-left:7.1pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span
  style='mso-spacerun:yes'>                                             </span><span
  style='mso-spacerun:yes'>          </span>10. No sabe si tiene ant. fliares</span></p>
  </td>
  <td  rowspan=2 style='vertical-align: middle;'>
        <SELECT id="ant_deme" name="ant_deme" class="form-control">
             <option {{ (isset($data) && $data->ant_deme == 0) ? 'selected' : '' }} value="0" >0 = No hay antecedentes</option>
             <option {{ (isset($data) && $data->ant_deme == 1) ? 'selected' : '' }} value="1" >1 = Desconoce la causa</option>
             <option {{ (isset($data) && $data->ant_deme == 2) ? 'selected' : '' }} value="2" >2 = Demencia Vascular</option>
             <option {{ (isset($data) && $data->ant_deme == 3) ? 'selected' : '' }} value="3" >3 = Enfermedad de Alzheimer</option>
             <option {{ (isset($data) && $data->ant_deme == 4) ? 'selected' : '' }} value="4" >4 = Enfermedad de Huntington</option>
             <option {{ (isset($data) && $data->ant_deme == 5) ? 'selected' : '' }} value="5" >5 = Enfermedad de Parkinson</option>
             <option {{ (isset($data) && $data->ant_deme == 6) ? 'selected' : '' }} value="6" >6 = Demencia Frontotemporal</option>
             <option {{ (isset($data) && $data->ant_deme == 7) ? 'selected' : '' }} value="7" >7 = Demencia de C = de Lewis</option>
             <option {{ (isset($data) && $data->ant_deme == 8) ? 'selected' : '' }} value="8" >8 = Otras causas</option>
             <option {{ (isset($data) && $data->ant_deme == 9) ? 'selected' : '' }} value="9" >9 = Mas de una causa de demencia</option>
             <option {{ (isset($data) && $data->ant_deme == 10) ? 'selected' : '' }} value="10" >10 = No sabe si tiene antecedentes familiares</option>
    </SELECT>



  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.0pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>47. Antecedentes familiares de 2do de ACV<span
  style='mso-spacerun:yes'>                 </span><span
  style='mso-spacerun:yes'>               </span></span>

       <SELECT id="antc_acv" name="antc_acv" class="form-control">
             <option {{ (isset($data) && $data->antc_acv == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antc_acv == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


  </p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:44.5pt'>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:44.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>48. Algún(os) de sus familiares de 2do grado participa en
  el EME?<span style='mso-spacerun:yes'>  </span>Nombre, Historia y Parentesco:
  <span style='mso-spacerun:yes'>      </span><span
  style='mso-spacerun:yes'>                </span><span
  style='mso-spacerun:yes'>       </span><span
  style='mso-spacerun:yes'>                 </span><span
  style='mso-spacerun:yes'>   </span></span>


     <SELECT id="famil_em" name="famil_em" class="form-control">
             <option {{ (isset($data) && $data->famil_em == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->famil_em == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT> 

</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:10.8pt;text-align:justify;text-indent:
  -7.1pt'><i style='mso-bidi-font-style:normal'><span  style='font-size:
  6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>46.<span style='mso-spacerun:yes'>  </span>Indique en el
  recuadro el número del antecedente descrito por el paciente ó informado por
  el familiar. En caso de ser positivo el antecedente de demencia, describa en
  las líneas adyacentes si el o los familiares afectados por esta condición
  están vivos o muertos. 47 Indique en<span style='mso-spacerun:yes'> 
  </span>el <span style='mso-spacerun:yes'> </span>recuadro 0 en caso de
  ausencia del antecedente y 1 en caso de obtenerse una respuesta afirmativa.</span></i></p>
  </td>
 </tr>
</table>

<p ><span  style='font-family:"Arial","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>


<table class="table" border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=6  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white;'>VII. MEDICACIÓN
  ACTUALMENTE RECIBIDA</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>49.
  Warfarina: Anasmol, Coumadin.</span></p>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'>
    

     <SELECT id="warfarin" name="warfarin" class="form-control">
             <option {{ (isset($data) && $data->warfarin == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->warfarin == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->warfarin == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>


  </p>
  </td>
  <td   style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>61.Otros
  antihipertensivos: Aldomet, Apresolina, Hyperium, Natrilix, Minpres</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="otr_anth" name="otr_anth" class="form-control">
             <option {{ (isset($data) && $data->otr_anth == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->otr_anth == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->otr_anth == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td >
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>73.Derivados
  del Comezuelo de Centeno: Hydergina, Astergina, Dihydergot.<span
  style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td style="width: 10%">
      <SELECT id="deriv_co" name="deriv_co" class="form-control">
             <option {{ (isset($data) && $data->deriv_co == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->deriv_co == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->deriv_co == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>50.AINES:
  Salicilatos, Airtal, Artem, Indocid, Buprifen, Ciclofast, Flexilar, Ibuprofen</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="aines" name="aines" class="form-control">
             <option {{ (isset($data) && $data->aines == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->aines == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->aines == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td >
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>62.Otros
  Antiarritmicos: Attansh, Quinidex, Trangorex, Diacona, Natidina</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="ot_antia" name="ot_antia" class="form-control">
             <option {{ (isset($data) && $data->ot_antia == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ot_antia == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->ot_antia == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td >
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>74.Anticonvulsivantes:
  Epamin, Tegretol, Fenobarbital, Carbamazepina. </span></p>
  </td>
  <td >
      <SELECT id="anticonv" name="anticonv" class="form-control">
             <option {{ (isset($data) && $data->anticonv == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->anticonv == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->anticonv == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>51.
  Antiagregantes plaquetarios: Ibustrin, Persantin, Ticlid,Escotrin, Ticiopin,Disgren.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="anti_plq" name="anti_plq" class="form-control">
             <option {{ (isset($data) && $data->anti_plq == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->anti_plq == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->anti_plq == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style='width:27.16%'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>63.Hipolipémicos:
  Dislipin, Lipobay, Lipitor, Lopid, Pravacol, Hiperlipen,</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="hipolipe" name="hipolipe" class="form-control">
             <option {{ (isset($data) && $data->hipolipe == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipolipe == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipolipe == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>75.Inhibidores
  de la Acetil Colinesterasa: Cognex, Exelon, Eranz, Proneurax. </span></p>
  </td>
  <td   style='width:4.96%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="inhib_ac" name="inhib_ac" class="form-control">
             <option {{ (isset($data) && $data->inhib_ac == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->inhib_ac == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->inhib_ac == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>52.
  Esteroides: Prednisona, Dispropan, Betasona, Medrol, Vitason, Kenacort </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="esteroid" name="esteroid" class="form-control">
             <option {{ (isset($data) && $data->esteroid == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->esteroid == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->esteroid == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>64.Broncodilatadores:
  Bremac, Bucien, Salbutamol, Teofilina, Brodilan, Bretol. </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="broncodi" name="broncodi" class="form-control">
             <option {{ (isset($data) && $data->broncodi == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->broncodi == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->broncodi == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>76Neuroactivadores:
  Arcalion, Breinox, Nootropil, Fitina, Ritalin, Acon, Bonifen. </span></p>
  </td>
  <td   style='width:4.96%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="neuroact" name="neuroact" class="form-control">
             <option {{ (isset($data) && $data->neuroact == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->neuroact == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->neuroact == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>53.
  Insulina: Humulin, Atrapic, Lenda, NHP, Monotal, Premezclada, Cristalina.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="insulina" name="insulina" class="form-control">
             <option {{ (isset($data) && $data->insulina == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->insulina == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->insulina == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>65.Estrógenos:
  Premarin, Ovestin, Estracomb, Climenen, Cliane, Menores. <span
  style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="estrogen" name="estrogen" class="form-control">
             <option {{ (isset($data) && $data->estrogen == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->estrogen == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->estrogen == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>77.
  Protectores Gástricos: Bloqueadores H2 y de Bomba de Protones, <b
  style='mso-bidi-font-weight:normal'>Antiacidos</b>. </span></p>
  </td>
  <td   style='width:4.96%;'>
     <SELECT id="prot_gas" name="prot_gas" class="form-control">
             <option {{ (isset($data) && $data->prot_gas == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->prot_gas == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->prot_gas == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>54.
  Hipoglicemiantes orales: Amaril, Glida, Dabinese, Diamicron, Euglucon,Glucobay.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="hipoglis" name="hipoglis" class="form-control">
             <option {{ (isset($data) && $data->hipoglis == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipoglis == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipoglis == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  '>66.Sub-Tiroideos: Thyrax, Thestan, Cynomel. </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="tiroide" name="tiroide" class="form-control">
             <option {{ (isset($data) && $data->tiroide == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tiroide == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->tiroide == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>78.Antivaricoso:
  Daflon, Deoxical, Verutil, Doxlum, Glyvenol, Flavol P4, Veglycin.<span
  style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td   style='width:4.96%;'>
     <SELECT id="antivari" name="antivari" class="form-control">
             <option {{ (isset($data) && $data->antivari == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antivari == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->antivari == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>55.Digitalico/Inotrópicos:
  Digoxina, Lanicor, Lanitop, Dobutrek, INOCAR, Rascordin. </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="digital" name="digital" class="form-control">
             <option {{ (isset($data) && $data->digital == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->digital == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->digital == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>67.Anticolinergéticos:
  Mestinol, Eostigmina, Prostigmine.<span style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="anticoli" name="anticoli" class="form-control">
             <option {{ (isset($data) && $data->anticoli == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->anticoli == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->anticoli == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>79.Antioxidantes:
  Vitamina C, Vitamina E, Melatonina. </span></p>
  </td>
  <td   style='width:4.96%;'>
      <SELECT id="antiox" name="antiox" class="form-control">
             <option {{ (isset($data) && $data->antiox == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antiox == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->antiox == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>56.Diureticos:
  Dieudrin, Lasix, Moduretic, Furosemida, Diclotride, Furdiuren, Fromil. </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="diuretic" name="diuretic" class="form-control">
             <option {{ (isset($data) && $data->diuretic == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->diuretic == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->diuretic == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>68.Dopaminergéticos:
  Akineton, Madopar, Sinemet, Celance.<span style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="dopamine" name="dopamine" class="form-control">
             <option {{ (isset($data) && $data->dopamine == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->dopamine == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->dopamine == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>80.Complejo
  B: Vitaminas B1, B2, B6, B12, Folato. </span></p>
  </td>
  <td   style='width:4.96%;'>
     <SELECT id="comple_b" name="comple_b" class="form-control">
             <option {{ (isset($data) && $data->comple_b == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->comple_b == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->comple_b == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>57.
  Nitratos: Monomack, Isordil, Planta, Isomack, Nitroderm, Deponit. </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="nitratos" name="nitratos" class="form-control">
             <option {{ (isset($data) && $data->nitratos == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->nitratos == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->nitratos == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>69.Antidepresivos:
  Litio, Efexor, Prozac, Zoloft, Paxil, Trittico, Trofanil, Luvox. </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="antidepr" name="antidepr" class="form-control">
             <option {{ (isset($data) && $data->antidepr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antidepr == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->antidepr == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>81.Otras
  Vitaminas y/o Minerales: Vitaminas A, D, Mg, Fe, Cu, Ca, Zn. </span></p>
  </td>
  <td   style='width:4.96%;'>
     <SELECT id="otra_vit" name="otra_vit" class="form-control">
             <option {{ (isset($data) && $data->otra_vit == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->otra_vit == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->otra_vit == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span lang=IT style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:IT'>58.Calcio Antag: Adalat, Amloc, Conducil, Manidon,
  Nimotop, Tensopin, Tropocer.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="calc_ant" name="calc_ant" class="form-control">
             <option {{ (isset($data) && $data->calc_ant == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->calc_ant == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->calc_ant == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>70.Antipsicóticos:
  Haldol, Risperdal, Zyprexa, Moditen, Sinogan, Orap. </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="antipsic" name="antipsic" class="form-control">
             <option {{ (isset($data) && $data->antipsic == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antipsic == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->antipsic == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td  style='width:28.44%;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>82.Otros
  medicamentos.</span></p>
  </td>
  <td   style='width:4.96%;'>
     <SELECT id="otro_med" name="otro_med" class="form-control">
             <option {{ (isset($data) && $data->otro_med == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->otro_med == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->otro_med == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>59.Beta
  Bloqueadores: Atenolol, Beloc, Blokium, Inderal, Corgard, Trandate, Lopresor.
  </span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="beta_blq" name="beta_blq" class="form-control">
             <option {{ (isset($data) && $data->beta_blq == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->beta_blq == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->beta_blq == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style='width:27.16%'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>71.Benzodiazepinas:
  Ativan, Lexotanil, Somese, Tafil, Talema, Tranxen, Valium, Rivotril, </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="benzodia" name="benzodia" class="form-control">
             <option {{ (isset($data) && $data->benzodia == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->benzodia == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->benzodia == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td width="33%" colspan=2 rowspan=2  style='width:33.4%;border:
  solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;background:#DDDDDD;
  mso-shading:windowtext;mso-pattern:thin-diag-stripe auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>60.IECA
  o AT2-Bloq: Altace, Coversyl, Reminal, Losartan, Candesartan.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="ieca" name="ieca" class="form-control">
             <option {{ (isset($data) && $data->ieca == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ieca == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->ieca == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
  <td   style=''>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>72.Narcóticos
  </span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="narcotic" name="narcotic" class="form-control">
             <option {{ (isset($data) && $data->narcotic == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->narcotic == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->narcotic == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
      </SELECT>
  </td>
 </tr>
</table>

<p ><span  style='font-family:"Arial","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class="table" 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=6  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white;'>VIII. ANTECEDENTES
  HOSPITALARIOS<span style='background:yellow;mso-highlight:yellow'></span></span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';text-align:justify'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>83. Número de Intervenciones 
  quirúrgicas que requirieron anestesia general.</span></p>
  
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="inter_me" type="text" class="form-control" name="inter_me" value='{{ old("inter_me", isset($data) ? $data->inter_me : "") }}' maxlength="5">
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>83. Si hay problema de memoria ¿La Intervención se asoció al problema?</span></p>
  
  </td>
  <td   style='width:9.26%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="probl_memori" name="probl_memori" class="form-control">
             <option {{ (isset($data) && $data->probl_memori == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->probl_memori == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>85. Número de Ingresos hospitalarios por causas no
  quirúrgicas.<span style='background:yellow;mso-highlight:yellow'></span></span></p>
  </td>
  <td   style=';border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="ingr_hos" type="text" class="form-control" name="ingr_hos" value='{{ old("ingr_hos", isset($data) ? $data->ingr_hos : "") }}' maxlength="5">
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=6  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
 Indique en el recuadro el
  número de intervenciones quirúrgicas o ingresos hospitalarios por causas no
  quirúrgicas según sea el caso. En caso de ausencia de antecedentes, escriba
  cero en el recuadro.
  </td>
 </tr>
</table>

<p ><span  style='font-family:"Arial","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class="table" 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=5  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white;'>IX. ANTECEDENTES
  MENSTRUALES (SOLO PARA SER LLENADO EN MUJERES)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td colspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><st1:metricconverter
  ProductID="86. Ha" w:st="on"><span  style='font-size:8.0pt;mso-bidi-font-size:
   10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>86.
   Ha</span></st1:metricconverter><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> tenido la menopausia o ha sido esterilizada
  quirúrgicamente.</span></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="menopaus" name="menopaus" class="form-control">
             <option {{ (isset($data) && $data->menopaus == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->menopaus == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td  rowspan=2  style='border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>88 Tiempo transcurrido desde la menopausia.</span></p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:10.65pt;margin-bottom:.0001pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0. No ha tenido la menopausia<span
  style='mso-spacerun:yes'>            </span>1. Menos de 5 años.</span></p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:10.65pt;margin-bottom:.0001pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>2. Entre 5 y 10 años.<span
  style='mso-spacerun:yes'>                            </span>3. Más de 10
  años.</span></p>
  </td>
  <td  rowspan=2  style=';border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

    
       <SELECT id="tiem_men" name="tiem_men" class="form-control">
             <option {{ (isset($data) && $data->tiem_men == 0) ? 'selected' : '' }} value="0" >0 = No ha tenido la menopausia</option>
             <option {{ (isset($data) && $data->tiem_men == 1) ? 'selected' : '' }} value="1" >1 = Menos de 5 años</option>
             <option {{ (isset($data) && $data->tiem_men == 2) ? 'selected' : '' }} value="2" >2 = Entre 5 y 10 años</option>
             <option {{ (isset($data) && $data->tiem_men == 3) ? 'selected' : '' }} value="3" >3 Mas de 10 años</option>
      </SELECT>

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td style='border:none;border-left:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>87.Fecha del último período Menstrual</span><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif"'>
    

     <input id="fech_men" type="date"  name="fech_men"  value='{{ old("fech_men", isset($data) && strtotime($data->fech_men) != false  ? date("Y-m-d", strtotime($data->fech_men)) : "" )}}' >

  </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  colspan=2  style='width:18.1%;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Año:</span><b style='mso-bidi-font-weight:normal'><span
   style='font-family:"Arial","sans-serif"'>
     

      <input id="ano_men" type="text" class="form-control" name="ano_men" value='{{ old("ano_men", isset($data) ? $data->ano_men : "") }}' maxlength="5">

   </span></b><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=5  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <span >86. Indique en el recuadro 0 en caso de no haber tenido la
  menopausia y 1 en el caso contrario. 87 Indique el numero del mes y el año
  (numero completo). 88. Seleccione la alternativa mejor ajstada.</span>
  </td>
 </tr>

 
</table>

<p ><span  style='font-family:"Arial","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class="table" 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white">X. ESTUDIOS  COMPLEMENTARIOS</b>
  
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>89. Tomografía Craneal.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>1.Atrofia
  Cerebral</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>2. Lesiones
  Vasculares</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>3. Tumores.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>4.
  Alt.Vasculares</span></p>
   <SELECT id="tomocran" name="tomocran" class="form-control">
             <option {{ (isset($data) && $data->tomocran == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tomocran == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->tomocran == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->tomocran == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
  
  <td   style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>90 Resonancia Magnética</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>1.Atrofia
  Cerebral</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>2. Lesiones
  Vasculares</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>3. Tumores.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>4.
  Alt.Vasculares</span></p>

         <SELECT id="resonanc" name="resonanc" class="form-control">
             <option {{ (isset($data) && $data->resonanc == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->resonanc == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->resonanc == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->resonanc == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
 
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>91. Electroencefalografía.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>1. Asimetría</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>2. Disrritmia</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>3. Delta</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>4. Supresión </span></p>

      <SELECT id="eeg" name="eeg" class="form-control">
             <option {{ (isset($data) && $data->eeg == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->eeg == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->eeg == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->eeg == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
 
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>92.Electromiografía</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>1. Descarga
  Prolong.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>2. Actv
  eléctrica sep.</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>4. Anorm. en
  forma</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>Tamaño, numero,
  ritmo</span></p>

     <SELECT id="elecmiog" name="elecmiog" class="form-control">
             <option {{ (isset($data) && $data->elecmiog == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->elecmiog == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->elecmiog == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->elecmiog == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>

  </td>

 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:6.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Indique
  en cada recuadro 0 si no se ha hecho el examen, <b style='mso-bidi-font-weight:
  normal'>1 si los resultados del examen son normales</b>, <b style='mso-bidi-font-weight:
  normal'>2 si el resultado fue anormal</b>, y 3 si desconoce los resultados
  del examen. En caso de anormalidad marque los itemes en los cuales residió la
  anormalidad y <span style='mso-spacerun:yes'> </span>describa en el espacio
  dispuesto a continuación los hallazgos que puede visualizar en el estudio.</span></i></p>
  </td>
 </tr>
</table>


<br>

<table class="table" border="1" >
  <tr>
    <td colspan="6" style="background-color:black; text-align: center;">
      <b style="color: white">XI. ANTECEDENTES DE ENFERMEDAD CEREBROVASCULAR</b>
    </td>
  </tr>
  <tr>
    <td colspan="2">93. Antecedentes de enfermedad cerebrovascular.</td>
    <td>
      
        <SELECT id="elecmiog" name="elecmiog" class="form-control">
             <option {{ (isset($data) && $data->elecmiog == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->elecmiog == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


    </td>
    <td>Parálisis de los miembros </td>
    <td>IZQ   

        <SELECT id="miem_iz" name="miem_iz" class="form-control">
             <option {{ (isset($data) && $data->miem_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->miem_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
    <td>DER 
           <SELECT id="miem_der" name="miem_der" class="form-control">
             <option {{ (isset($data) && $data->miem_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->miem_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
  </tr>

  <tr>
    <td >94.Fecha del ultimo evento cerebrovascular 

           
      <input id="fecha_acv" type="date"  name="fecha_acv" value='{{ old("fecha_acv", isset($data) && strtotime($data->fecha_acv) != false  ? date("Y-m-d", strtotime($data->fecha_acv)) : "" )}}'>

    </td>
    <td>Mes:   
       
        <SELECT id="mes_acv" name="mes_acv" class="form-control">
            @for ($i = 0; $i < 13; $i++)
                   <option {{ (isset($data) && $data->mes_acv ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  

    </td>
    <td>Año:  <input id="ano_acv" type="text" class="form-control" name="ano_acv" maxlength="4" value='{{ old("ano_acv", isset($data) ? $data->ano_acv : "") }}' >
    </td>
    <td>Perdida o alteraciones de la sensibilidad en miembros o Tronco</td>
    <td>IZQ  

        <SELECT id="sens_iz" name="sens_iz" class="form-control">
             <option {{ (isset($data) && $data->sens_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sens_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
    <td>DER 
        <SELECT id="sens_der" name="sens_der" class="form-control">
             <option {{ (isset($data) && $data->sens_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sens_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>

    </td>
  </tr>

   <tr>
    <td colspan="2">Perdida o alteración de la conciencia</td>
    <td>
      
        <SELECT id="perd_con" name="perd_con" class="form-control">
             <option {{ (isset($data) && $data->perd_con == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->perd_con == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


    </td>
    <td colspan="2">Enfermedad cerebrovascular asociada a intervención quirúrgica</td>
    <td>
      
         <SELECT id="acv_quir" name="acv_quir" class="form-control">
             <option {{ (isset($data) && $data->acv_quir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->acv_quir == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>

    </td>
  </tr>

  <tr>
    <td >Parálisis facial</td>
    <td>IZQ   

          <SELECT id="facia_iz" name="facia_iz" class="form-control">
             <option {{ (isset($data) && $data->facia_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->facia_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
    <td>Parálisis de los miembros </td>
    <td>DER 

        <SELECT id="facia_de" name="facia_de" class="form-control">
             <option {{ (isset($data) && $data->facia_de == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->facia_de == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
    <td rowspan="2">95.Tipo de enfermedad cerebrovascular   
      <br> 0. Sin antecedentes de ECV.           
      <br> 1. Transitorio. 
      <br> 2. Isquémico.   
      <br> 3. Hemorrágico.
      <br> 4.Lesiones Subcorticales                             
    </td>
    <td rowspan="2">
      
       <SELECT id="tipo_acv" name="tipo_acv" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->tipo_acv ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
    </td>
  </tr>

 <tr>
    <td >Perdida de la visión </td>
    <td>IZQ    

          <SELECT id="visi_iz" name="visi_iz" class="form-control">
             <option {{ (isset($data) && $data->visi_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->visi_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

    </td>
    <td >DER 


        <SELECT id="visi_der" name="visi_der" class="form-control">
             <option {{ (isset($data) && $data->visi_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->visi_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
</td>

  </tr>

    <tr>
    <td colspan="2">Cambios en el lenguaje o en el habla</td>
    <td>
      
        <SELECT id="cam_leng" name="cam_leng" class="form-control">
             <option {{ (isset($data) && $data->cam_leng == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cam_leng == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>


    </td>
    <td colspan="2">96..Numero de eventos vasculares</td>
    <td>
      
      <input id="num_even" type="text" class="form-control" name="num_even" maxlength="3" value='{{ old("num_even", isset($data) ? $data->num_even : "") }}' >

    </td>
  </tr>

   <tr>
    <td colspan="6" style="text-align: center;">
    93 y todos los enunciados que no están enumerados se registraran como 0 en caso de ausencia y 1 en caso de presencia. Los enunciados no numerados se refieren a manifestaciones clínicas del último evento vascular. 94 se registrará el número del mes y el año en que ocurrió el último evento de enfermedad cerebrovascular. 95 se registrará en el recuadro el número del tipo de enfermedad cerebrovascular. 96 se refiere al número de eventos vasculares reportados por el paciente.
    </td>
  </tr>

</table>

<br>

<table class="table" 
 style='border-collapse:collapse;mso-table-layout-alt:fixed;border:none;
 mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>

  <td colspan=6  style='width:548.2pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color: white;'>XII. EXAMEN MÉDICO GENERAL</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td style='width:100.45pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>97. Piel y anexos</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <SELECT id="Piel" name="Piel" class="form-control">
          <option value="-88" {{ old("Piel", isset($data) ? $data->Piel : "")=="-88" ? 'selected':''}}
                >-88</option>
          <option value="0" {{ old("Piel", isset($data) ? $data->Piel : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
          <option value="1" {{ old("Piel", isset($data) ? $data->Piel : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 

  </td>
  <td style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>100.Tórax y vías respiratorias</span></p>
  </td>
  <td style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="torax" name="torax" class="form-control">
           <option value="-88" {{ old("torax", isset($data) ? $data->torax : "")=="-88" ? 'selected':''}}
                > -88</option>
          <option value="0" {{ old("torax", isset($data) ? $data->torax : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
          <option value="1" {{ old("torax", isset($data) ? $data->torax : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 
  </td>
  <td style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>103..Sistema osteoarticular.</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="osteoart" name="osteoart" class="form-control">
          <option value="-88" {{ old("osteoart", isset($data) ? $data->osteoart : "")=="-88" ? 'selected':''}}
                > -88</option>
          <option value="0" {{ old("osteoart", isset($data) ? $data->osteoart : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
          <option value="1" {{ old("osteoart", isset($data) ? $data->osteoart : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td   style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>98.ORL.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="orl" name="orl" class="form-control">
          <option value="-88" {{ old("orl", isset($data) ? $data->orl : "")=="-88" ? 'selected':''}}
                > -88</option>
          <option value="0" {{ old("orl", isset($data) ? $data->orl : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
          <option value="1" {{ old("orl", isset($data) ? $data->orl : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 
  </td>
  <td  style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>101.Abdomen
  y vías digestivas</span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="abdomen" name="abdomen" class="form-control">
              <option value="-88" {{ old("abdomen", isset($data) ? $data->abdomen : "")=="-88" ? 'selected':''}}
                > -88</option>
              <option value="0" {{ old("abdomen", isset($data) ? $data->abdomen : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
              <option value="1" {{ old("abdomen", isset($data) ? $data->abdomen : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 
  </td>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>104..Miembros
  superiores e inferiores.</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="miembros" name="miembros" class="form-control">
             <option value="-88" {{ old("miembros", isset($data) ? $data->miembros : "")=="-88" ? 'selected':''}}
                > -88</option>
              <option value="0" {{ old("miembros", isset($data) ? $data->miembros : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
              <option value="1" {{ old("miembros", isset($data) ? $data->miembros : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td   style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>99.
  Cardiovascular.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="Cardiova" name="Cardiova" class="form-control">
              <option value="-88" {{ old("Cardiova", isset($data) ? $data->Cardiova : "")=="-88" ? 'selected':''}}
                > -88</option>
              <option value="0" {{ old("Cardiova", isset($data) ? $data->Cardiova : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
              <option value="1" {{ old("Cardiova", isset($data) ? $data->Cardiova : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 
  </td>
  <td  style='border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>102.Genitourinario</span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="Genitourinario" name="Genitourinario" class="form-control">
              <option value="-88" {{ old("Genitourinario", isset($data) ? $data->Genitourinario : "")=="-88" ? 'selected':''}}
                > -88</option>
              <option value="0" {{ old("Genitourinario", isset($data) ? $data->Genitourinario : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
              <option value="1" {{ old("Genitourinario", isset($data) ? $data->Genitourinario : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT> 
  </td>
  <td  style='border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>105..Otros.</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="otros" name="otros" class="form-control">
             <option value="-88" {{ old("otros", isset($data) ? $data->otros : "")=="-88" ? 'selected':''}}
                > -88</option>
              <option value="0" {{ old("otros", isset($data) ? $data->otros : "")=="0" ? 'selected':''}}
                >0 = Normal</option>
              <option value="1" {{ old("otros", isset($data) ? $data->otros : "")=="1" ? 'selected':''}}
                >1 = Anormal</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td colspan=6  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <span >En todos los enunciados, registre: 0 normal, 1 Anormal,
  y<span style='mso-spacerun:yes'>  </span>-88 no evaluable.</span>
  </td>
 </tr>
</table>

<br>

<table class="table">
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:13.45pt'>
  <td  colspan=17  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt;
  height:13.45pt'>
      <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif"; mso-bidi-font-family:"Times New Roman"'>XIII. EVALUACIÓN  NEUROLÓGICA GLOBAL</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:52.45pt'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>106.Estado
  de conciencia</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>          </span>3. Estupor</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Letárgico<span
  style='mso-spacerun:yes'>     </span><span
  style='mso-spacerun:yes'> </span>4. Coma</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Obnubilado</span></p>
  </td>
  <td  colspan=3 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
       <SELECT id="conscien" name="conscien" class="form-control">
             <option value="-88" {{ old("conscien", isset($data) ? $data->conscien : "")=="-88" ? 'selected':''}}
                > -88</option>            
            @for ($i =0; $i < 5; $i++)
                   <option {{ old("conscien", isset($data) ? $data->conscien : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
  <td  colspan=3  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>112
  .Marcha.</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>              </span>4. Atáxica</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Hemipléjica<span
  style='mso-spacerun:yes'>       </span>5. Coreica<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Espástica<span
  style='mso-spacerun:yes'>          </span>6.Apráxica</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>3. Parkinsoniana<span
  style='mso-spacerun:yes'>   </span>7. Cojera</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Fecha
  de Inicio:__________</span></p>
  </td>
  <td  colspan=4 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
     <SELECT id="marcha" name="marcha" class="form-control">
            <option value="-88" {{ old("marcha", isset($data) ? $data->marcha : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 8; $i++)
                   <option {{ old("marcha", isset($data) ? $data->marcha : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor    
      </SELECT>
  </td>
  <td  colspan=3 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>118.
  Habla /<span style='mso-spacerun:yes'>  </span>Lenguaje</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>                  </span>5. Bradilalia</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Disartria<span
  style='mso-spacerun:yes'>                </span>6. Taquialia </span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Apraxia motora<span
  style='mso-spacerun:yes'>     </span>7. Ecolalia</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>3. Afasia<span
  style='mso-spacerun:yes'>                    </span>8. Alexia/Agrafia</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>4. Hipofonica<span
  style='mso-spacerun:yes'>                                       </span></span></p>
  </td>
  <td colspan=3 style='width:6.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:52.45pt'>
       <SELECT id="habla" name="habla" class="form-control">

           <option value="-88" {{ old("habla", isset($data) ? $data->habla : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 9; $i++)
                   <option {{ old("habla", isset($data) ? $data->habla : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor    
   
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:28.0pt'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>107. Tono Muscular.</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>     
  </span>0. Normal<span style='mso-spacerun:yes'>                  
  </span>2.Rigidez<span style='mso-spacerun:yes'>  </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>     
  </span>1. Espasticidad<span style='mso-spacerun:yes'>         
  </span>3.Hipotonía</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  colspan=3 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
       <SELECT id="tono" name="tono" class="form-control">
          <option value="-88" {{ old("tono", isset($data) ? $data->tono : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("tono", isset($data) ? $data->tono : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>
  </td>
  <td  colspan=3 rowspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>113.Trastornos Motores.</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>                   </span>6. Balismo</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Parkinsonismo<span
  style='mso-spacerun:yes'>       </span>7. Tics<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>2. Miocionisa<span style='mso-spacerun:yes'>             </span>8.
  Distonías.</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>3. Disquinesia Tard<span
  style='mso-spacerun:yes'>   </span>9.Coreas</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>4. Red Primitivos<span style='mso-spacerun:yes'>      </span>10.
  Acaticia<span style='mso-spacerun:yes'>   </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>5. Atetosis<span style='mso-spacerun:yes'>                 </span>11.
  Asterixis</span></p>
  </td>
  <td  colspan=4 rowspan=3 style='vertical-align: middle; border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
      <SELECT id="tras_mot" name="tras_mot" class="form-control">
            <option value="-88" {{ old("tras_mot", isset($data) ? $data->tras_mot : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 12; $i++)
                   <option {{ old("tras_mot", isset($data) ? $data->tras_mot : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor
      </SELECT>
     
  </td>
  <td  colspan=3  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>119.Campo Visual: </span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>                  </span>3. Hem. Holón</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Alterac. </span><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman";mso-ansi-language:EN-GB'>Unilat.<span
  style='mso-spacerun:yes'>      </span>4. Defecto Homo</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-GB'><span
  style='mso-spacerun:yes'>     </span>2. Hem. Bitemp.<span
  style='mso-spacerun:yes'>          </span></span><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>del cuadrante</span></p>
  </td>
  <td colspan=3 style='width:6.6%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:28.0pt'>
       <SELECT id="campo" name="campo" class="form-control">
            <option value="-88" {{ old("campo", isset($data) ? $data->campo : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 5; $i++)
                   <option {{ old("campo", isset($data) ? $data->campo : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:10.95pt'>
  <td  rowspan=4  style='width:22.7%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.95pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>108. Reflejos<span
  style='mso-spacerun:yes'>   </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>Plantar.1. Flexor; 2. Extensor</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>3. Marcado<span style='mso-spacerun:yes'>   </span>Extensor<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Braquirradial (1-4)<span
  style='mso-spacerun:yes'>     </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   
  </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>   
  </span>Cuadriceps<span style='mso-spacerun:yes'>   </span>(1-4)<span
  style='mso-spacerun:yes'>          </span></span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span></span></p>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.95pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.95pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
  <td  colspan=3 rowspan=2  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.95pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>120.Movimientos Oculares:</span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>             </span>2. Nistagmo</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>1. Estrabismo<span style='mso-spacerun:yes'>      </span>3.<span
  style='mso-spacerun:yes'>  </span>Oftalmoplegia<span
  style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td colspan=3 rowspan=2 style='width:6.6%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.95pt'>
      <SELECT id="movimien" name="movimien" class="form-control">
             <option value="-88" {{ old("movimien", isset($data) ? $data->movimien : "")=="-88" ? 'selected':''}}
                > -88</option>
             <option {{ (isset($data) && $data->movimien == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->movimien == 1) ? 'selected' : '' }} value="1" >1 = Estrabismo</option>
             <option {{ (isset($data) && $data->movimien == 2) ? 'selected' : '' }} value="2" >2 = Nistagmo</option>
             <option {{ (isset($data) && $data->movimien == 3) ? 'selected' : '' }} value="3" >3 = Oftalmoplejia</option>
      </SELECT>


  </td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:16.35pt'>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:16.35pt'>
       <SELECT id="refle_iz" name="refle_iz" class="form-control">
          <option value="-88" {{ old("refle_iz", isset($data) ? $data->refle_iz : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_iz", isset($data) ? $data->refle_iz : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>

  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:16.35pt'>
      <SELECT id="refle_der" name="refle_der" class="form-control">
          <option value="-88" {{ old("refle_der", isset($data) ? $data->refle_der : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_der", isset($data) ? $data->refle_der : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>

  </td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:17.7pt'>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
      <SELECT id="refle_bra_iz" name="refle_bra_iz" class="form-control">
          <option value="-88" {{ old("refle_bra_iz", isset($data) ? $data->refle_bra_iz : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_bra_iz", isset($data) ? $data->refle_bra_iz : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
      <SELECT id="refle_brizq" name="refle_brizq" class="form-control">
          <option value="-88" {{ old("refle_brizq", isset($data) ? $data->refle_brizq : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_brizq", isset($data) ? $data->refle_brizq : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>
  </td>
  <td  colspan=3 rowspan=2  style='width:26.78%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>114 Coordinacion:</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>0. Normal<span style='mso-spacerun:yes'>                 </span>1.
  Talon Rodilla</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>1. Dedo-Nariz<span style='mso-spacerun:yes'>          </span>1.
  Dedo-Nariz</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>1. Pronac- Supinac<span style='mso-spacerun:yes'>      </span>ojos
  cerrados</span></p>
  </td>
  <td  colspan=3 rowspan=2 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
      <SELECT id="coordina" name="coordina" class="form-control">
            <option value="-88" {{ old("coordina", isset($data) ? $data->coordina : "")=="-88" ? 'selected':''}}
                > -88 No evaluable. </option>

            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->coordina ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
     
  </td>
  <td  colspan=3 rowspan=2  style='width:23.36%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>121.Fondo de Ojos: </span></p>
  <p  style=''><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>     </span>3. N. Hiperten. </span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>1. Papiledema<span style='mso-spacerun:yes'>    </span>4. Papidelema</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>2. N. Diabetica<span style='mso-spacerun:yes'>   </span>5. Catarata </span></p>
  </td>
  <td  colspan=3  style='width:5.54%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:17.7pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:15.75pt'>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt'>
      <SELECT id="refle_cua_iz" name="refle_cua_iz" class="form-control">
          <option value="-88" {{ old("refle_cua_iz", isset($data) ? $data->refle_cua_iz : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_cua_iz", isset($data) ? $data->refle_cua_iz : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt'>
      <SELECT id="refle_cua_der" name="refle_cua_der" class="form-control">
          <option value="-88" {{ old("refle_cua_der", isset($data) ? $data->refle_cua_der : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("refle_cua_der", isset($data) ? $data->refle_cua_der : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>
  </td>
  <td colspan=3 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt'>
     <SELECT id="ojo_iz" name="ojo_iz" class="form-control">
             <option value="-88" {{ old("ojo_iz", isset($data) ? $data->ojo_iz : "")=="-88" ? 'selected':''}}
                > -88 No evaluable. </option>
            @for ($i =0; $i < 6; $i++)
                   <option {{ (isset($data) && $data->ojo_iz ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
  <td   style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.75pt'>
      <SELECT id="ojo_de" name="ojo_de" class="form-control">
           <option value="-88" {{ old("ojo_de", isset($data) ? $data->ojo_de : "")=="-88" ? 'selected':''}}
                > -88 No evaluable. </option>
            @for ($i =0; $i < 6; $i++)
                   <option {{ (isset($data) && $data->ojo_de ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:12.75pt'>
  <td  rowspan=2  style='width:22.7%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>109. Sensibilidad Dolorosa </span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>     
  </span>Dorso del Pie-Esternón</span></p>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
  <td  colspan=2 rowspan=2  style='width:26.7%;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>115. Signo de Romberg: </span></p>
  <span  style='font-size:7.0pt;font-style:normal'>&nbsp;</span>
  </td>
  <td  colspan=6 rowspan=2 style='width:5.38%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
       <SELECT id="romberg" name="romberg" class="form-control">
             <option {{ (isset($data) && $data->romberg == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->romberg == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
             <option {{ (isset($data) && $data->romberg == "-88") ? 'selected' : '' }} value="-88" >-88 no evaluable.</option>
      </SELECT>
  </td>
  <td width="23%" rowspan=2  style='width:23.16%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>122. Audición (I) Prueba de Rinne:</span></p>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>0. Normal<span style='mso-spacerun:yes'>        </span>1. Anormal.</span></p>
  <span  style='font-size:7.0pt;font-style:normal'>&nbsp;</span>
  </td>
  <td  colspan=3  style='width:5.54%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:12.75pt'>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
       <SELECT id="sen_d_iz" name="sen_d_iz" class="form-control">
          <option value="-88" {{ old("sen_d_iz", isset($data) ? $data->sen_d_iz : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("sen_d_iz", isset($data) ? $data->sen_d_iz : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>

  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>

      <SELECT id="sen_d_de" name="sen_d_de" class="form-control">
          <option value="-88" {{ old("sen_d_de", isset($data) ? $data->sen_d_de : "")=="-88" ? 'selected':''}}
                > -88</option>
            @for ($i =0; $i < 4; $i++)
                   <option {{ old("sen_d_de", isset($data) ? $data->sen_d_de : "")== $i ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor  
            
      </SELECT>

  </td>
  <td colspan=3  style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
       <SELECT id="rinne_iz" name="rinne_iz" class="form-control">
             <option {{ (isset($data) && $data->rinne_iz == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->rinne_iz == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
             <option {{ (isset($data) && $data->rinne_iz == "-88") ? 'selected' : '' }} value="-88" >-88 no evaluable.</option>
      </SELECT>
  </td>
  <td   style='width:5.54%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
     <SELECT id="rinne_de" name="rinne_de" class="form-control">
             <option {{ (isset($data) && $data->rinne_de == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->rinne_de == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
             <option {{ (isset($data) && $data->rinne_de == "-88") ? 'selected' : '' }} value="-88" >-88 no evaluable.</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:10.75pt'>
  <td  rowspan=2  style='width:22.7%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>110. Sensibilidad Vibratoria<span
  style='mso-spacerun:yes'>  </span></span></p>
  <span  style='font-size:7.0pt;font-style:normal'><span
  style='mso-spacerun:yes'>      </span>Maleolo –Esternón</span>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Igual;1.Disminuida; 2 Ausente</span></p>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
  <td  rowspan=2  style='width:22.86%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>116. Parestesias Distales: </span></p>
  <span  style='font-size:7.0pt'>&nbsp;</span>
  </td>
  <td  colspan=4  style='width:4.6%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td  colspan=3  style='width:4.6%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
  <td width="25%" colspan=2 rowspan=2  style='width:25.12%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>123. Audición (II) Prueba de Rinne:</span></p>
  <h3 align=left style='text-align:left'><span  style='font-size:7.0pt;
  font-style:normal'><span style='mso-spacerun:yes'>     </span>0. Normal<span
  style='mso-spacerun:yes'>        </span>2.Lat. Izquierda</span>
  <p ><span  style='font-size:7.0pt'><span
  style='mso-spacerun:yes'>      </span>1. </span><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Lat. Derecha</span></p>
  </td>
  <td width="9%" colspan=3 rowspan=2 style='width:9.14%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
        <SELECT id="rinne_de" name="rinne_de" class="form-control">
              <option value="-88" {{ old("rinne_de", isset($data) ? $data->rinne_de : "")=="-88" ? 'selected':''}}
                > -88 No evaluable. </option>
             <option {{ (isset($data) && $data->rinne_de == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->rinne_de == 1) ? 'selected' : '' }} value="1" >1= Lat. Derecha</option>
             <option {{ (isset($data) && $data->rinne_de == 2) ? 'selected' : '' }} value="2" >2= Lat. Izquierda</option>
      </SELECT>

  </td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:10.75pt'>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>

       <SELECT id="sen_v_iz" name="sen_v_iz" class="form-control">
             <option value="-88" {{ old("sen_v_iz", isset($data) ? $data->sen_v_iz : "")=="-88" ? 'selected':''}} > -88 No evaluable. </option>
             <option {{ (isset($data) && $data->sen_v_iz == 0) ? 'selected' : '' }} value="0" >0 = Igual</option>
             <option {{ (isset($data) && $data->sen_v_iz == 1) ? 'selected' : '' }} value="1" >1 = Disminuida</option>
             <option {{ (isset($data) && $data->sen_v_iz == 2) ? 'selected' : '' }} value="2" >2 = Ausente</option>
      </SELECT>

  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
      <SELECT id="sen_v_de" name="sen_v_de" class="form-control">
            <option value="-88" {{ old("sen_v_de", isset($data) ? $data->sen_v_de : "")=="-88" ? 'selected':''}} > -88 No evaluable. </option>
             <option {{ (isset($data) && $data->sen_v_de == 0) ? 'selected' : '' }} value="0" >0 = Igual</option>
             <option {{ (isset($data) && $data->sen_v_de == 1) ? 'selected' : '' }} value="1" >1 = Disminuida</option>
             <option {{ (isset($data) && $data->sen_v_de == 2) ? 'selected' : '' }} value="2" >2 = Ausente</option>
      </SELECT>
  </td>
  <td  colspan=4  style='width:4.6%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
       <SELECT id="dist_iz" name="dist_iz" class="form-control">
             <option value="-88" {{ old("dist_iz", isset($data) ? $data->dist_iz : "")=="-88" ? 'selected':''}} > -88 No evaluable. </option>
             <option {{ (isset($data) && $data->dist_iz == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->dist_iz == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
      </SELECT>
  </td>
  <td  colspan=3  style='width:4.6%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.75pt'>
      <SELECT id="dist_der" name="dist_der" class="form-control">
              <option value="-88" {{ old("dist_der", isset($data) ? $data->dist_der : "")=="-88" ? 'selected':''}} > -88 No evaluable. </option>
             <option {{ (isset($data) && $data->dist_der == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->dist_der == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:14.25pt'>
  <td  rowspan=2  style='width:22.7%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>111.<span
  style='mso-spacerun:yes'>  </span>Sentido Cenestésico</span></p>
  <h3 align=left style='text-align:left'><span  style='font-size:7.0pt;
  font-style:normal'><span style='mso-spacerun:yes'>     </span>% de Aciertos</span>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>IZQ</span></b></p>
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>DER</span></b></p>
  </td>
  <td  rowspan=2  style='width:22.86%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>117. Signo de Lhermitte: </span></p>
  </td>
  <td width="9%" colspan=7 rowspan=2 style='width:9.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
       <SELECT id="sig_lher" name="sig_lher" class="form-control">
             <option {{ (isset($data) && $data->sig_lher == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->sig_lher == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
             <option {{ (isset($data) && $data->sig_lher == "-88") ? 'selected' : '' }} value="-88" >-88 no evaluable.</option>
      </SELECT>
  </td>
  <td width="25%" colspan=2 rowspan=2  style='width:25.12%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
  <p ><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>124. Otros pares craneales:</span></p>
  </td>
  <td width="9%" colspan=3 rowspan=2 style='width:9.14%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
        <SELECT id="otr_pare" name="otr_pare" class="form-control">
             <option {{ (isset($data) && $data->otr_pare == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
             <option {{ (isset($data) && $data->otr_pare == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
             <option {{ (isset($data) && $data->otr_pare == "-88") ? 'selected' : '' }} value="-88" >-88 no evaluable.</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:14.25pt'>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
       <input id="cines_iz" type="text" class="form-control" name="cines_iz" maxlength="3" value='{{ old("cines_iz", isset($data) ? $data->cines_iz : "") }}' >
  </td>
  <td   style='width:5.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:14.25pt'>
     <input id="cines_de" type="text" class="form-control" name="cines_de" maxlength="3" value='{{ old("cines_de", isset($data) ? $data->cines_de : "") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:7.35pt'>
  <td  colspan=17  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:7.35pt'>
  <span >En todos los enunciados, registre: 0 normal, 1 Anormal, -88
  no evaluable.</span>
  </td>
 </tr>
 
 <tr height=0>
  <td width=160 style='border:none'></td>
  <td width=15 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=162 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=31 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=164 style='border:none'></td>
  <td width=14 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=7 style='border:none'></td>
  <td width=39 style='border:none'></td>
 </tr>
 
</table>

<br>
  

<!-- XIV. SIGNOS  EXTRAPIRAMIDALES MAYORES -->


<table style="width: 100%" class="table">
  
  <tr>
    <td colspan="4" style="background: black; text-align: center;">
      <b style="color: white;">XIV. SIGNOS EXTRAPIRAMIDALES MAYORES</b>
    </td>
  </tr>

 <tr>
<td    style='text-align: left;
  border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;'>
     
      125. Temblor
    
    <br>0. Normal <span style='mso-spacerun:yes'>      </span>c. Brazos en Extensión                                    
    <br>b. Reposo: <span style='mso-spacerun:yes'>      </span>Derecho, izquierda 
    <br>Cabeza, Boca, Mentón <span style='mso-spacerun:yes'>      </span> d. Brazos durante una acción 
    <br>Brazo y/o Pierna Derecha  <span style='mso-spacerun:yes'>      </span> Derecho, Izquierda
    <br>Brazo y/o Pierna Izquierda  <span style='mso-spacerun:yes'>      </span>e. Más de un enunciado



  </td>
  <td width="10%" style='vertical-align: middle;text-align:center;width:10.32%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:34.65pt'>

      <SELECT id="temblor" name="temblor" class="form-control">
            <option value="-88" {{ old("temblor", isset($data) ? $data->temblor : "")=="-88" ? 'selected':''}} > -88 </option>
            <option {{ (isset($data) && $data->temblor == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
            <option {{ (isset($data) && $data->temblor == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
            <option value="B" {{ old("temblor", isset($data) ? $data->temblor : "")=="B" ? 'selected':''}} >B</option>
            <option value="C" {{ old("temblor", isset($data) ? $data->temblor : "")=="C" ? 'selected':''}} >C</option>
            <option value="D" {{ old("temblor", isset($data) ? $data->temblor : "")=="D" ? 'selected':''}} >D</option>
            <option value="E" {{ old("temblor", isset($data) ? $data->temblor : "")=="E" ? 'selected':''}} >E</option>
      </SELECT>


  </td>
  <td style='width:36.42%;text-align: left;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:34.65pt'>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>127<span style='mso-spacerun:yes'>  </span><span
  class=SpellE>Bradiquinesia</span> Corporal.<span
  style='mso-spacerun:yes'>        </span></span></font></p>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>0. Normal</span></font></p>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>1. Mínima
  Lentitud, puede ser normal.</span></font></p>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>2. Leve, clara
  lentitud anormal.</span></font></p>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>3. Moderada
  lentitud, alguna <span class=SpellE>hesitancia</span>.</span></font></p>
  <p  style=';margin-right:-132.95pt;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt'><font size=1 face=Arial><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>      </span>4. Marcada
  lentitud, gran retardo en <span class=SpellE>Inc.de</span> movimientos.<span
  style='mso-spacerun:yes'>                                    </span></span></font></p>
  </td>
  <td width="9%" style='width:9.84%;border-top:none;vertical-align: middle;text-align:center
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:34.65pt'>
         <SELECT id="bradiqui" name="bradiqui" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->bradiqui ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
  </tr>

  <tr>
    <td colspan="2" style='border:none;border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;border-right:solid windowtext 1.0pt;
      border-left:solid windowtext 1.0pt; mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;'> 
     En el enunciado 125 Indique “0” en caso de ausencia, “1” Temblor ligero, “2”leve y frecuente , “4” marcado. Subraya la sección del cuerpo donde aparece el temblor y marque adentro su severidad.
    </td>
    <td colspan="2" style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'> Codifique en el recuadro la alternativa adecuada  a cada enunciado. En caso de que el sujeto no pueda ser
    evaluado  debido a  la severidad  de la condición codifique con el numero 
    </td>
  </tr>

  <tr>
    <td  style='text-align: left; border:none;border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;border-right:solid windowtext 1.0pt;
      border-left:solid windowtext 1.0pt; mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;'> 


          126 Rigidez:
          <br>0. Normal                                                                
          <br>b. Brazos: Derecho, izquierda 
          <br>c. Pierna: Derecho, Izquierdo.
          <br>d. Cuello                                          

  

    </td>
     <td width="9%" style='width:9.84%;border-top:none;vertical-align: middle;text-align:center
      border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
      mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
      mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
      padding:0cm 3.5pt 0cm 3.5pt;height:34.65pt'>
       <SELECT id="rigidez" name="rigidez" class="form-control">
            <option value="-88" {{ old("rigidez", isset($data) ? $data->rigidez : "")=="-88" ? 'selected':''}} > -88</option>
            <option {{ (isset($data) && $data->rigidez == 0) ? 'selected' : '' }} value="0" >0 = Normal</option>
            <option {{ (isset($data) && $data->rigidez == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
            <option value="B" {{ old("rigidez", isset($data) ? $data->rigidez : "")=="B" ? 'selected':''}} >B</option>
            <option value="C" {{ old("rigidez", isset($data) ? $data->rigidez : "")=="C" ? 'selected':''}} >C</option>
            <option value="D" {{ old("rigidez", isset($data) ? $data->rigidez : "")=="D" ? 'selected':''}} >D</option>
      </SELECT>

  </td>
    <td  style='border-top:none;text-align: left;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'> 

     128  Marcha.        
     <br> 0. Normal                                                  
      <br>1. Lenta, arrastras los pies si festinar.   
      <br>2. Camina con dificulta, puede festinar.
      <br>3. Camina solo con ayuda 
      <br>4. Incapaz de caminar.

    </td>
    <td style='border-top:none;vertical-align: middle;text-align:center
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:34.65pt'>
        <SELECT id="march" name="march" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->march ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
  </tr>

   <tr>
    <td colspan="2" style='border:none;border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;border-right:solid windowtext 1.0pt;
      border-left:solid windowtext 1.0pt; mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;'> 
       Codifique “0” ausente, “1” presente solo con actividad, “2” leve frecuente “3” severo. Subraye además el miembro donde la rigidez  fue detectada.

    </td>
    <td colspan="2" style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'> Codifique en el recuadro la alternativa adecuada  a cada enunciado. En caso que el sujeto no pueda ser
 evaluado debido a la severidad de la condición, codifique con el numero “-88”.

    </td>
  </tr>


</table>

<table border="1" class="table">
  <tr>
    <td colspan="4" style="text-align: center; background: black">
     <b style="color: white;"> XV. SIGNOS EXTRAPIRAMIDALES MENORES </b>
   </td>
  </tr>
   <tr>
    <td style="text-align: left; vertical-align: middle;">
      
      129 Capacidad de Levantarse
     <br>0. Normal                                                               
     <br>1. Lenta o requiere varios Intentos.
     <br>2. Se impulsa con los brazos 
     <br>3.Cae hacia atrás pero puede levantarse sin ayuda.
     <br>4. Necesita ayuda                                                               
                                                                                                     
    </td>
    <td width="10%" style="text-align: left; vertical-align: middle;">
      
          <SELECT id="cap_leva" name="cap_leva" class="form-control">
             <option value="-88" {{ old("cap_leva", isset($data) ? $data->cap_leva : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 5; $i++)
               <option value="{{$i}}" {{ old("cap_leva", isset($data) ? $data->cap_leva : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
          </SELECT>

    </td>
    <td>
        132 Pivoteo:
        <br>0. Normal (pivoteo de base estrecha). 
        <br>1.Hesitancia(base ensanchada)
        <br>2. Pivoteo torpe y lento.
        <br>3. Puede caer si no es asistido.
    </td>
    <td width="10%" style="text-align: center; vertical-align: middle;">
       <SELECT id="pivoteo" name="pivoteo" class="form-control">
            <option value="-88" {{ old("pivoteo", isset($data) ? $data->pivoteo : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 4; $i++)
                    <option value="{{$i}}" {{ old("pivoteo", isset($data) ? $data->pivoteo : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
          </SELECT>
    </td>
  </tr>



    <tr>
    <td style="text-align: left; vertical-align: middle;">
      
     130  Postura 
     <br>0. Normal                                                               
     <br>1. Ligeramente recargado Sobre su espalda.
     <br>2. Ligeramente recargado Sobre su espalda + apoyo  
     <br>3. Sev. recargado, cifosis Con apoyo del lado
     <br>4. Marcada flexión con Extrema anormalidad.                                                              
                                                                                                    
                                                               
                                                                                                     
    </td>
    <td style="text-align: left; vertical-align: middle;">

         <SELECT id="postura" name="postura" class="form-control">
             <option value="-88" {{ old("postura", isset($data) ? $data->postura : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 5; $i++)
               <option value="{{$i}}" {{ old("postura", isset($data) ? $data->postura : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
          </SELECT>
      

    </td>
    <td>
         133 Bradicinesia Facial.
        <br>0. Normal.                            
        <br>1.Cara de Pocker                  
        <br>2.Leve hipomimia.
        <br>3. Moderada hipomimia.
        <br>4. Severa hipomimia.

    </td>
    <td style="text-align: center; vertical-align: middle;">

        <SELECT id="bradi_fa" name="bradi_fa" class="form-control">
             <option value="-88" {{ old("bradi_fa", isset($data) ? $data->bradi_fa : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 5; $i++)
               <option value="{{$i}}" {{ old("bradi_fa", isset($data) ? $data->bradi_fa : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
          </SELECT>

    </td>
  </tr>

  <tr>
    <td style="text-align: left; vertical-align: middle;">
      
          131 Estabilidad del Desplazamiento   
      <br>0. Normal
      <br>1. Se recupera espontáneamente.
      <br>2. Podría caer si no es sujetado.
      <br>3. Tiende a caer espontáneamente.
      <br>4. No puede mantenerse en pie.
                                                                         
    </td>
    <td style="text-align: left; vertical-align: middle;">

        <SELECT id="estabili" name="estabili" class="form-control">
            <option value="-88" {{ old("estabili", isset($data) ? $data->estabili : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 5; $i++)
               <option value="{{$i}}" {{ old("estabili", isset($data) ? $data->estabili : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
        </SELECT>
      
    </td>
    <td>
         134 Habla.        
     <br>0. Ausencia de problemas                                                               
     <br>1. Leve hipofonía.
     <br>2. Moderada (debe escuchar cuidadosamente para entender.
     <br>3. Severa (algunas pociones del habla no se entienden). 
     <br>4. Habla inentendible.

    </td>
    <td style="text-align: center; vertical-align: middle;">
        <SELECT id="hablar" name="hablar" class="form-control">
            <option value="-88" {{ old("hablar", isset($data) ? $data->hablar : "")=="-88" ? 'selected':''}} > -88</option>
            @for ($i =0; $i < 5; $i++)
               <option value="{{$i}}" {{ old("hablar", isset($data) ? $data->hablar : "")=="$i" ? 'selected':''}} >{{$i}}</option>
            @endfor
        </SELECT>

    </td>
  </tr>

  <tr>
    <td colspan="4" style="text-align: center;">Codifique en el recuadro la alternativa adecuada a cada enunciado. En caso que el sujeto no pueda ser evaluado debido a la severidad de la condición, codifique con el numero “-88”.</td>
  </tr>

</table>

 <br>

<table border=1
 style='background:white;mso-background-themecolor:background1;
 border-collapse:collapse;border:none;mso-border-top-alt:1.5pt;mso-border-left-alt:
 .75pt;mso-border-bottom-alt:1.5pt;mso-border-right-alt:.75pt;mso-border-color-alt:
 teal;mso-border-style-alt:solid;mso-yfti-tbllook:160;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:cell-none;mso-border-insidev:cell-none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  mso-row-margin-right:.22%'>
  <td colspan=7  style='border:solid black 1.0pt;
  mso-border-alt:solid black .25pt;background:black;mso-background-themecolor:
  text1;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XVI. ESCALA DE DEMENCIA DE BLESSED</span>
  </td>
  
 </tr>
 <tr style='mso-yfti-irow:1;mso-row-margin-right:.22%'>
  <td width="53%"  style='text-align: center; vertical-align: middle;
  width:53.52%;border:double windowtext 3.0pt;
  border-top:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-bottom-alt:
  thick-thin-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style='mso-bidi-font-weight:
  normal'>XVII
  a. Cambios del rendimiento en la ejecución de actividades cotidianas en los
  últimos 6 meses</b>
  </td>
  <td   style='text-align: center; vertical-align: middle; width:11.54%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-bottom-alt:thick-thin-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
 <b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Ninguna
  incompetencia</span></b>
  </td>
  <td  colspan=2  style='text-align: center; vertical-align: middle;width:11.56%;border-top:none;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-bottom-alt:thick-thin-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <b style='mso-bidi-font-weight: normal'>Incompetencia  parcial o intermitente</b>
  </td>
  <td   style='text-align: center; vertical-align: middle;width:11.56%;border-top:none;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-bottom-alt:thick-thin-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <b style='mso-bidi-font-weight:  normal'>Incompetencia  total</b>
  </td>
  <td  colspan=2  style='width:11.6%;border:double windowtext 3.0pt;
  border-top:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap;mso-border-left-alt:thin-thick-small-gap;
  mso-border-bottom-alt:thick-thin-small-gap;mso-border-right-alt:thick-thin-small-gap;
  mso-border-color-alt:windowtext;mso-border-width-alt:3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Incompetencia
  debido a problemas físicos</span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para llevar a cabo tareas domésticas.


</span>  <SELECT id="blecot1" name="blecot1" class="form-control">
             <option {{ (isset($data) && $data->blecot1 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot1 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot1 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>



      </p>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para manejar pequeñas
  cantidades de dinero</span>

    <SELECT id="blecot2" name="blecot2" class="form-control">
             <option {{ (isset($data) && $data->blecot2 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot2 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot2 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
</p>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para recordar listas cortas
  de cosas, ejemplo:</span></p>
      <SELECT id="blecot3" name="blecot3" class="form-control">
             <option {{ (isset($data) && $data->blecot3 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot3 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot3 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para orientarse en lugares
  cerrados (ejemplo:<span style='mso-spacerun:yes'>  </span>reconocer los
  lugares dentro de casa u otros lugares familiares).</span></p>

     <SELECT id="blecot4" name="blecot4" class="form-control">
             <option {{ (isset($data) && $data->blecot4 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot4 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot4 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para encontrar el camino o
  transitar sin perderse por calles familiares.</span></p>

      <SELECT id="blecot5" name="blecot5" class="form-control">
             <option {{ (isset($data) && $data->blecot5 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot5 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot5 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para interpretar o
  reconocer el entorno, ejemplo: reconocer si se encuentra en el hospital o en
  el hogar, discriminar entre pacientes, doctores, enfermeras y familiares,
  etc.</span></p>
      <SELECT id="blecot6" name="blecot6" class="form-control">
             <option {{ (isset($data) && $data->blecot6 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot6 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot6 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-row-margin-right:.22%'>
  <td width="53%"  style='width:53.52%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Capacidad para recordar
  acontecimientos recientes, ejemplo: salidas recientes, visitas de familiares
  o amigos, etc.</span></p>
     <SELECT id="blecot7" name="blecot7" class="form-control">
             <option {{ (isset($data) && $data->blecot7 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot7 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot7 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-row-margin-right:.22%'>
  <td width="53%"  style='text-align: left; width:53.52%;border-top:none;border-left:
  solid teal 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  mso-border-left-alt:solid teal .75pt;mso-border-bottom-alt:solid black .25pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:14.2pt;text-indent:-10.9pt;mso-list:
  l9 level1 lfo1;tab-stops:list 14.2pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>8. Tendencia a vivir en el pasado.</span></p>
     <SELECT id="blecot8" name="blecot8" class="form-control">
             <option {{ (isset($data) && $data->blecot8 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot8 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot8 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  </td>
  <td   style='width:11.54%;border:none;border-bottom:solid black 1.0pt;mso-border-bottom-alt:solid black .25pt;'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0</span></p>
  </td>
  <td  colspan=2  style='width:11.56%;border:none;
  border-bottom:solid black 1.0pt;mso-border-bottom-alt:solid black .25pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0,5</span></p>
  </td>
  <td   style='width:11.56%;border:none;border-bottom:solid black 1.0pt;mso-border-bottom-alt:solid black .25pt;'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></p>
  </td>
  <td  colspan=2  style='width:11.6%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>F</span></p>
  </td>
 
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;mso-row-margin-right:.22%'>
  <td width="88%" colspan=5  style='text-align: right; width:88.18%;border:none;
  mso-border-top-alt:solid black .25pt;padding:0cm 3.5pt 0cm 3.5pt'>
   Total
  de actividades cotidianas (sume del 1 al 8, no puntúelas <br> actividades cuya incompetencia sea debida a causas físicas)
  
  </td>
  <td  colspan=2  style='vertical-align: middle; width:11.6%;border:double windowtext 3.0pt;
  mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap;mso-border-left-alt:thin-thick-small-gap;
  mso-border-bottom-alt:thick-thin-small-gap;mso-border-right-alt:thick-thin-small-gap;
  mso-border-color-alt:windowtext;mso-border-width-alt:3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
 <b style='mso-bidi-font-weight:
  normal'>
    
   <input id="t_activi" type="text" class="form-control" name="t_activi" maxlength="3"  value='{{(isset($data))  ? $data->t_activi  : old("t_activi") }}' >

  </b>
  </td>
  
 </tr>
 
</table>

<br>

<!-- XVII b. Cambios en los hábitos durante los últimos 6 meses -->

 
<table border="1"  style="border-collapse:collapse;">
   <tr>
    <td style="width: 75%;text-align: left;border:double windowtext 3.0pt;"><b>XVII b. Cambios en los hábitos durante los últimos 6 meses</b> </td>
    <td style="text-align: center; border:double windowtext 3.0pt; "> <b>Puntuación</b> </td>
    <td style="text-align: center; border:double windowtext 3.0pt; "> <b>Alteración Física</b> </td>
  </tr>

  <tr style="text-align: left;">
    <td> 9. Comer

     <SELECT id="bleha9" name="bleha9" class="form-control">
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha9 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT> </td>
    <td></td>
    <td></td>
  </tr>

  <tr style="text-align: left;">
    <td> Lo hace limpiamente con los cubiertos apropiados. </td>
    <td style="text-align: center;"> <b>0</b> </td>
    <td></td>
  </tr>
  <tr style="text-align: left;">
    <td> Lo hace desordenadamente únicamente con la cuchara.</td>
    <td style="text-align: center;"><b>1</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

   <tr style="text-align: left;">
    <td> Come sin ayuda  solo sólidos simples, ejemplo: bizcochos, pan, etc.</td>
    <td style="text-align: center;"><b>2</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

   <tr style="text-align: left;">
    <td> Tiene que ser alimentado</td>
    <td style="text-align: center;"><b>3</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

   <tr style="text-align: left;">
    <td> 10.  Vestirse  

        <SELECT id="bleha10" name="bleha10" class="form-control">
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha10 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT>


     </td>
    <td style="text-align: center;"><b></b></td>
    <td style="text-align: center;"><b></b></td>
  </tr>

   <tr style="text-align: left;">
    <td> Se viste sin ayuda.</td>
    <td style="text-align: center;"><b>0</b></td>
    <td style="text-align: center;"><b></b></td>
  </tr>

  <tr style="text-align: left;">
    <td> Ocasionalmente comete errores (ejemplo: se abrocha mal los botones).</td>
    <td style="text-align: center;"><b>1</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

  <tr style="text-align: left;">
    <td> Se viste siguiendo una secuencia equivocada, olvidando comúnmente ponerse alguna prenda de vestir, ejemplo: ponerse los pantalones  olvidando ponerse la ropa interior.</td>
    <td style="text-align: center;"><b>2</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

   <tr style="text-align: left;">
    <td> Incapacidad para vestirse</td>
    <td style="text-align: center;"><b>3</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>
  
   <tr style="text-align: left;">
    <td> 11. Esfínteres  
"0 = complete control, 1 = occasional wet bed, 
2 = frequent wet bed, 3 = doubly incontinent "

      <SELECT id="bleha11" name="bleha11" class="form-control">
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha11 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT>

    </td>
    <td style="text-align: center;"><b></b></td>
    <td style="text-align: center;"><b></b></td>
  </tr>

   <tr style="text-align: left;">
    <td> Completo control de los esfínteres.</td>
    <td style="text-align: center;"><b>0</b></td>
    <td style="text-align: center;"><b></b></td>
  </tr>

  <tr style="text-align: left;">
    <td> Ocasionalmente moja la cama (enuresis).  Registro desde cuando 

        <input id="bleha11ex_1" type="text" class="form-control" name="bleha11ex_1" maxlength="3"  value='{{(isset($data))  ? $data->bleha11ex_1  : old("bleha11ex_1") }}' >

      </td>
    <td style="text-align: center;"><b>1</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

  <tr style="text-align: left;">
    <td> Frecuentemente moja la cama             Registro desde cuando 

           <input id="bleha11ex_2" type="text" class="form-control" name="bleha11ex_2" maxlength="3"  value='{{(isset($data))  ? $data->bleha11ex_2  : old("bleha11ex_2") }}' >

     </td>
    <td style="text-align: center;"><b>2</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

   <tr style="text-align: left;">
    <td>Doble incontinencia (fecal y urinaria)          Registro desde cuando 

             <input id="bleha11ex_3" type="text" class="form-control" name="bleha11ex_3" maxlength="3"  value='{{(isset($data))  ? $data->bleha11ex_3  : old("bleha11ex_3") }}' >

    </td>
    <td style="text-align: center;"><b>3</b></td>
    <td style="text-align: center;"><b>F</b></td>
  </tr>

  <tr>
    <td colspan="2" style="text-align: right;border: none;">
      136 Total de hábitos (sume del 9 al 11, no puntúe 
      <br> las alteraciones en los hábitos debidas a causas físicas)
    </td>

     <td  colspan=2  style='vertical-align: middle;border:double windowtext 3.0pt;
      mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
      mso-border-top-alt:thin-thick-small-gap;mso-border-left-alt:thin-thick-small-gap;
      mso-border-bottom-alt:thick-thin-small-gap;mso-border-right-alt:thick-thin-small-gap;
      mso-border-color-alt:windowtext;mso-border-width-alt:3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <input id="t_habito" type="text" class="form-control" name="t_habito" maxlength="5"  value='{{(isset($data))  ? $data->t_habito  : old("t_habito") }}' >

     </td>

  </tr>

   <tr>
    <td colspan="2" style="text-align: right;border: none;">
      137Total Funcional   <br> (enunciado del 1 al 11)
    </td>

     <td  colspan=2  style='vertical-align: middle;border:double windowtext 3.0pt;
      mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
      mso-border-top-alt:thin-thick-small-gap;mso-border-left-alt:thin-thick-small-gap;
      mso-border-bottom-alt:thick-thin-small-gap;mso-border-right-alt:thick-thin-small-gap;
      mso-border-color-alt:windowtext;mso-border-width-alt:3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <input id="t_funcio" type="text" class="form-control" name="t_funcio" maxlength="5"  value='{{(isset($data))  ? $data->t_funcio  : old("t_funcio") }}' >
     </td>

  </tr>

</table>

<br>

<table Table border=1 cellspacing=0 cellpadding=0 width="99%"
 style='width:99.18%;border-collapse:collapse;border:none;mso-border-top-alt:
 1.5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:1.5pt;mso-border-right-alt:
 .75pt;mso-border-color-alt:teal;mso-border-style-alt:solid;mso-yfti-tbllook:
 160;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:cell-none;
 mso-border-insidev:cell-none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=22  style='border:solid black 1.0pt;
  mso-border-alt:solid black .25pt;background:black;mso-shading:black;
  mso-pattern:solid black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XVII. ESCALA DE
  ACTIVIDADES DE LA VIDA DIARIA DE SCHWAB Y ENGLAND</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>100 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Completamente
  independiente. Capaz de realizar todas las tareas sin enlentecimiento,
  dificultad o alteración. El sujeto es esencialmente normal. No se ha dado
  cuenta que posee alguna dificultad.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>90 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Completamente
  independiente. Capaz de realizar todas las actividades de la vida diaria con
  algún grado de dificultad, lentitud o alteración. La ejecución de las AVD
  podrían tomarle el doble del tiempo. El sujeto comienza a darse cuenta de sus
  dificultades.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>80 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto es completamente independiente en la mayoría de las AVD, aunque la
  ejecución de estas le toma el doble de tiempo hacerlas. El sujeto está
  consciente de esta dificultad y el enlentecimiento.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>70 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto es completamente independiente. Tiene mayor dificultad en la ejecución
  de algunas AVD, cuya realización le toma tres o cuatro veces hacerla. El
  sujeto gasta la mayor parte del día en la realización de tareas cotidianas.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>60 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto exhibe alguna dependencia. El sujeto puede realizar la mayoría de las
  AVD, aunque muy lentamente y con mucho esfuerzo. La ejecución de las AVD
  puede efectuarse con errores. Algunas tareas son imposibles de realizar.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>50 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto es más dependiente y exhibe mucha lentitud. Necesita que le ayuden a
  realizar la mitad de las AVD. Todas las AVD las realiza con mucha dificultad.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>40 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto es muy dependiente, y aunque puede colaborar con todas las AVD, puede
  hacer muy pocas solo.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>30 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto necesita mucha ayuda y aunque con esfuerzo comienza pocas AVD, hace
  muy pocas solo. El sujeto está parcialmente invalido.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>20 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Invalidez
  grave. El sujeto no realiza ninguna AVD solo, y aunque puede ayudar
  ligeramente,<span style='mso-spacerun:yes'>  </span>lo hace con mucho
  esfuerzo.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td   style='width:8.48%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>10 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto es totalmente dependiente y desvalido. Esta en completa invalidez
  aunque conserva sus funciones vegetativas.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td   style='width:8.48%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>0 %</span></p>
  </td>
  <td width="91%" colspan=21  style='width:91.52%;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>El
  sujeto esta postrado en cama, es totalmente dependiente y desvalido y hay
  perdida de las funciones vegetativas deglución y control de esfínteres.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12'>
  <td width="33%" colspan=7  style='width:33.56%;border:double windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>138.AVD según el paciente:</span>
     <input id="avd_paci" type="text" class="form-control" name="avd_paci" maxlength="5"  value='{{(isset($data))  ? $data->avd_paci  : old("avd_paci") }}' >
  </td>
  <td width="33%" colspan=9  style='width:33.6%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>139.AVD según el entrevistador:<span
  style='mso-spacerun:yes'>                                   </span></span>
   <input id="avd_entr" type="text" class="form-control" name="avd_entr" maxlength="5"  value='{{(isset($data))  ? $data->avd_entr  : old("avd_entr") }}' >
  </td>
  <td  colspan=3  style='width:26.0%;border-top:double windowtext 3.0pt;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:none;
  mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-top-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-bottom-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
 <span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Información obtenida por:</span>
  <br><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1. Paciente solamente.</span>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>2. Paciente e informante.</span>
  </td>
  <td colspan=3  style='width:6.86%;border:double windowtext 3.0pt;
  border-left:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-bottom-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-right-alt:
  thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="Inf_obt" type="text" class="form-control" name="Inf_obt" maxlength="5"  value='{{(isset($data))  ? $data->Inf_obt  : old("Inf_obt") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
  <td  colspan=22  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XIII. EXAMEN MINIMO  DEL ESTADO MENTAL (PARTE A)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid'>
  <td colspan=5  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';margin-right:0cm;margin-bottom:
  0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>140.Estación del año: primavera,
  verano, otoño e invierno</span></p>
  </td>
  <td  colspan=3 style='width:5.16%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="mme130" type="text" class="form-control" name="mme130" maxlength="5"  value='{{(isset($data))  ? $data->mme130  : old("mme130") }}' >

  </td>
  <td width="9%" colspan=2  style='width:9.06%;border:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>144 Año (a)</span></p>
  </td>
  <td   style='width:5.16%;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <input id="mme134" type="text" class="form-control" name="mme134" maxlength="5"  value='{{(isset($data))  ? $data->mme134  : old("mme134") }}' >
  </td>
  <td width="12%" colspan=2  style='width:12.92%;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  background:#E5E5E5;mso-shading:white;mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=right style='text-align:right'><span 
  style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Max. Error (1)</span></p>
  <p  align=right style='text-align:right'><span 
  style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>x 4 (b)</span><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  colspan=2 style='width:5.16%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="max_error_ano" type="text" class="form-control" name="max_error_ano" maxlength="5"  value='{{(isset($data))  ? $data->max_error_ano  : old("max_error_ano") }}' >
  </td>
  <td colspan=4  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>148.Dirección.</span></p>
  </td>
  <td colspan=3 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme138" type="text" class="form-control" name="mme138" maxlength="5"  value='{{(isset($data))  ? $data->mme138  : old("mme138") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid'>
  <td colspan=5  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>141.Día de la semana.</span></p>
  </td>
  <td  colspan=3 style='width:5.16%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="mme131" type="text" class="form-control" name="mme131" maxlength="5"  value='{{(isset($data))  ? $data->mme131  : old("mme131") }}' >

  </td>
  <td  colspan=5  style='width:27.14%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>145.Ciudad.</span></p>
  </td>
  <td  colspan=2 style='width:5.16%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme135" type="text" class="form-control" name="mme135" maxlength="5"  value='{{(isset($data))  ? $data->mme135  : old("mme135") }}' >
  </td>
  <td colspan=4  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>149.Piso.</span></p>
  </td>
  <td  colspan=3 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="mme139" type="text" class="form-control" name="mme139" maxlength="5"  value='{{(isset($data))  ? $data->mme139  : old("mme139") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid'>
  <td  colspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>142.Mes (a)</span></p>
  </td>
  <td   style='width:5.16%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="mme132" type="text" class="form-control" name="mme132" maxlength="5"  value='{{(isset($data))  ? $data->mme132  : old("mme132") }}' >

  </td>
  <td width="12%" colspan=2  style='width:12.92%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;background:#E5E5E5;mso-shading:white;mso-pattern:gray-10 auto;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=right style='text-align:right'><span 
  style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Max. Error (1)</span></p>
  <p  align=right style='margin-top:1.0pt;text-align:right'><span
   style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>x 3(b)</span><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td  colspan=3 style='width:5.16%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="mme133" type="text" class="form-control" name="mme133" maxlength="5"  value='{{(isset($data))  ? $data->mme133  : old("mme133") }}' >

  </td>
  <td  colspan=5  style='width:27.14%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>146.Estado.</span></p>
  </td>
  <td  colspan=2 style='width:5.16%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme136" type="text" class="form-control" name="mme136" maxlength="5"  value='{{(isset($data))  ? $data->mme136  : old("mme136") }}' >
  </td>
  <td width="23%" colspan=2 rowspan=2  style='width:23.26%;
  border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>150.Registro:</span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;mso-list:
  l8 level1 lfo11;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Piña.</span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;mso-list:
  l8 level1 lfo11;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Mesa.</span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;mso-list:
  l8 level1 lfo11;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Real.</span></p>
  </td>
  <td  colspan=3 rowspan=2  style='width:5.16%;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:1.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></b></p>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>/1</span></b></p>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>/1</span></b></p>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>/1</span></b></p>
  </td>
  <td  colspan=2 rowspan=2 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="mme140" type="text" class="form-control" name="mme140" maxlength="5"  value='{{(isset($data))  ? $data->mme140  : old("mme140") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid'>
  <td colspan=5  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>143.Fecha.</span></p>
  </td>
  <td  colspan=3 style='width:5.16%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="max_error_mes" type="text" class="form-control" name="max_error_mes" maxlength="5"  value='{{(isset($data))  ? $data->max_error_mes  : old("max_error_mes") }}' >

  </td>
  <td  colspan=5  style='width:27.14%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>147.Nombre de la Institución.</span></p>
  </td>
  <td  colspan=2 style='width:5.16%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme137" type="text" class="form-control" name="mme137" maxlength="5"  value='{{(isset($data))  ? $data->mme137  : old("mme137") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;page-break-inside:avoid'>
  <td  colspan=22  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XIX. EXAMEN MINIMO
  DEL ESTADO MENTAL (PARTE B)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='width:24.1%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';margin-right:0cm;margin-bottom:
  0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>151.Memoria de dígitos.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  6.0pt;margin-left:29.2pt;text-indent:-15.0pt;mso-list:l2 level1 lfo2;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Hacía adelante: </span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  6.0pt;margin-left:29.2pt;text-indent:-15.0pt;mso-list:l2 level1 lfo2;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Hacía atrás: </span></p>
  </td>
  <td  colspan=2  style='width:5.22%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></b></p>
   <input id="mme141a" type="text" class="form-control" name="mme141a" maxlength="5"  value='{{(isset($data))  ? $data->mme141a  : old("mme141a") }}' > / 6
   <br> 
   <input id="mme141b" type="text" class="form-control" name="mme141b" maxlength="5"  value='{{(isset($data))  ? $data->mme141b  : old("mme141b") }}' > / 4
 
  </td>
  <td  colspan=3 style='width:5.22%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme141" type="text" class="form-control" name="mme141" maxlength="5"  value='{{(isset($data))  ? $data->mme141  : old("mme141") }}' > 
  </td>
  <td  colspan=3  style='width:22.16%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=''><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>152. Atención y cálculo:</span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l10 level1 lfo5;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Series de siete:<span style='mso-spacerun:yes'>      
  </span></span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l10 level1 lfo5;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Deletrear mundo:<span style='mso-spacerun:yes'>    </span></span></p>
  <p  style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l10 level1 lfo5;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Sumar suelto:<span style='mso-spacerun:yes'>       </span></span></p>
  </td>
  <td  colspan=2  style='width:5.22%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="mme142a" type="text" class="form-control" name="mme142a" maxlength="5"  value='{{(isset($data))  ? $data->mme142a  : old("mme142a") }}' >  / 5
  <br>
  <input id="mme142b" type="text" class="form-control" name="mme142b" maxlength="5"  value='{{(isset($data))  ? $data->mme142b  : old("mme142b") }}' >  / 1
   <br>
  <input id="mme142c" type="text" class="form-control" name="mme142c" maxlength="5"  value='{{(isset($data))  ? $data->mme142c  : old("mme142c") }}' >  / 1
  </td>
  <td  colspan=2 style='width:5.22%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme142" type="text" class="form-control" name="mme142" maxlength="5"  value='{{(isset($data))  ? $data->mme142  : old("mme142") }}' >
  </td>
  <td width="23%" colspan=2  style='width:23.44%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>153.Evocación.</span></p>
  <p  style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt;mso-list:l12 level1 lfo3;tab-stops:
  list 24.85pt'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Piña:<span style='mso-spacerun:yes'>              </span><b
  style='mso-bidi-font-weight:normal'></b></span></p>
  <p  style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt;mso-list:l12 level1 lfo3;tab-stops:
  list 24.85pt'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Mesa: </span></p>
  <p  style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt;mso-list:l12 level1 lfo3;tab-stops:
  list 24.85pt'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Real:<span style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td  colspan=3  style='width:5.22%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="mme143a" type="text" class="form-control" name="mme143a" maxlength="5"  value='{{(isset($data))  ? $data->mme143a  : old("mme143a") }}' >  / 1
      <br>
     <input id="mme143b" type="text" class="form-control" name="mme143b" maxlength="5"  value='{{(isset($data))  ? $data->mme143b  : old("mme143b") }}' > / 1
     <br>
     <input id="mme143c" type="text" class="form-control" name="mme143c" maxlength="5"  value='{{(isset($data))  ? $data->mme143c  : old("mme143c") }}' > / 3
     <br>
  </td>
  <td  style='width:4.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="mme143" type="text" class="form-control" name="mme143" maxlength="5"  value='{{(isset($data))  ? $data->mme143  : old("mme143") }}' >
     <br>
  </td>
 </tr>
 
 <tr height=0>
  <td width=59 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <tdstyle='border:none'></td>
  <td width=56 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=2 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=5 style='border:none'></td>
  <td width=2 style='border:none'></td>
  <td width=61 style='border:none'></td>
  <tdstyle='border:none'></td>
  <td width=58 style='border:none'></td>
  <td width=33 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=32 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=159 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=13 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=29 style='border:none'></td>
 </tr>
 
</table>

<br>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-top-alt:
 solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:
 solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:
 .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=6  style='background: black; border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color:white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XX. EXAMEN ABREVIADO  DE BLESSED</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#E5E5E5;mso-shading:white;mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText2 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-weight:normal;font-style:normal'>Maximo tres repeticiones:</span></p>
  <p class=MsoBodyText2 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-weight:normal;font-style:normal'>Juan Pérez, calle Comercio
  Nº42,Valencia</span><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt'></span></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:14.2pt;text-indent:-14.2pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>155. Cuente al revés del 20 al 1. Máximo error (2),
  ponderado <b style='mso-bidi-font-weight:normal'>x2</b>.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="bleav145" type="text" class="form-control" name="bleav145" maxlength="5"  value='{{(isset($data))  ? $data->bleav145  : old("bleav145") }}' >
  </td>
  <td rowspan=2  style='width:28.44%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:10.75pt;text-indent:-10.75pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>157.Recordar nombre y dirección.
  Máximo error (5) <b style='mso-bidi-font-weight:normal'>x2</b>.</span></p>
  <p  align=right style='margin-top:12.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:10.75pt;text-align:right;text-indent:-10.75pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Número de Aciertos: </span>

   <input id="bleav147r" type="text" class="form-control" name="bleav147r" maxlength="5"  value='{{(isset($data))  ? $data->bleav147r  : old("bleav147r") }}' >

</p>
  </td>
  <td  rowspan=2 style='vertical-align: middle; width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="bleav147" type="text" class="form-control" name="bleav147" maxlength="5"  value='{{(isset($data))  ? $data->bleav147  : old("bleav147") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>154.Hora
  aproximada.<span style='mso-spacerun:yes'>  </span>Máx. error (1)<span
  style='mso-spacerun:yes'>    </span><b style='mso-bidi-font-weight:normal'>x3</b><i
  style='mso-bidi-font-style:normal'></i></span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="bleav144" type="text" class="form-control" name="bleav144" maxlength="5"  value='{{(isset($data))  ? $data->bleav144  : old("bleav144") }}' >
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:14.2pt;text-indent:-14.2pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>156 Meses del año al revés (Diciembre a Enero). Máx. error
  (2), ponderado <b style='mso-bidi-font-weight:normal'>x2</b>.</span></p>
  </td>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="bleav146" type="text" class="form-control" name="bleav146" maxlength="5"  value='{{(isset($data))  ? $data->bleav146  : old("bleav146") }}' >
  </td>
 </tr>
</table>

<p class=MsoBodyText>&nbsp;</p>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=8  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXI. EXAMEN MINIMO
  DEL ESTADO MENTAL (PARTE C)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width="25%"  style='width:25.2%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>158.Conocimiento
  General:</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l1 level1 lfo4;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Hugo Chávez:<span style='mso-spacerun:yes'>            
  </span></span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l1 level1 lfo4;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Rafael Caldera:<span style='mso-spacerun:yes'>            
  </span></span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l1 level1 lfo4;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Ramón J. Velásquez:<span style='mso-spacerun:yes'>        
  </span></span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l1 level1 lfo4;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>d)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Carlos A. Pérez:<span
  style='mso-spacerun:yes'>                </span></span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt;mso-list:l1 level1 lfo4;
  tab-stops:list 29.25pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Jaime Lusínchi:<span style='mso-spacerun:yes'>     
  </span></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  
    <input id="mme148a" type="text" class="form-control" name="mme148a" maxlength="2"  value='{{(isset($data))  ? $data->mme148a  : old("mme148a") }}' > / 1
    <br>

    <input id="mme148b" type="text" class="form-control" name="mme148b" maxlength="2"  value='{{(isset($data))  ? $data->mme148b  : old("mme148b") }}' > / 1
    <br>
     <input id="mme148c" type="text" class="form-control" name="mme148c" maxlength="2"  value='{{(isset($data))  ? $data->mme148c  : old("mme148c") }}' > / 1
    <br>
    <input id="mme148d" type="text" class="form-control" name="mme148d" maxlength="2"  value='{{(isset($data))  ? $data->mme148d  : old("mme148d") }}' > / 1
    <br>
     <input id="mme148e" type="text" class="form-control" name="mme148e" maxlength="2"  value='{{(isset($data))  ? $data->mme148e  : old("mme148e") }}' > / 1
    <br>
  </td>
  <td   style='vertical-align: middle; border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme148" type="text" class="form-control" name="mme148" maxlength="2"  value='{{(isset($data))  ? $data->mme148  : old("mme148") }}' >
  </td>
  <td width="25%"  style='width:25.86%;border:none;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>159.Denominación:</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Casa.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Tijeras.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Camello.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Armónica (Sinfonía)</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Ponquecito.</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme149a" type="text" class="form-control" name="mme149a" maxlength="2"  value='{{(isset($data))  ? $data->mme149a  : old("mme149a") }}' > / 1
    <br>
    <input id="mme149b" type="text" class="form-control" name="mme149b" maxlength="2"  value='{{(isset($data))  ? $data->mme149b  : old("mme149b") }}' > / 1
    <br>
    <input id="mme149c" type="text" class="form-control" name="mme149c" maxlength="2"  value='{{(isset($data))  ? $data->mme149c  : old("mme149c") }}' > / 1
    <br>
    <input id="mme149d" type="text" class="form-control" name="mme149d" maxlength="2"  value='{{(isset($data))  ? $data->mme149d  : old("mme149d") }}' > / 1
    <br>
    <input id="mme149e" type="text" class="form-control" name="mme149e" maxlength="2"  value='{{(isset($data))  ? $data->mme149e  : old("mme149e") }}' > / 1
    <br>
  </td>
  <td width="23%"  style='width:23.26%;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>151.Denominar</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>f)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Escaleras</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>g)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Raqueta.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>h)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Chupón.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>i)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Dominós.</span></p>
  <p  style=';margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt;mso-list:l11 level1 lfo12'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>j)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Pirámide.</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="mme149f" type="text" class="form-control" name="mme149f" maxlength="2"  value='{{(isset($data))  ? $data->mme149f  : old("mme149f") }}' > / 1
    <br>
     <input id="mme149g" type="text" class="form-control" name="mme149g" maxlength="2"  value='{{(isset($data))  ? $data->mme149g  : old("mme149g") }}' > / 1
    <br>
   <input id="mme149h" type="text" class="form-control" name="mme149h" maxlength="2"  value='{{(isset($data))  ? $data->mme149h  : old("mme149h") }}' > / 1
    <br>
   <input id="mme149i" type="text" class="form-control" name="mme149i" maxlength="2"  value='{{(isset($data))  ? $data->mme149i  : old("mme149i") }}' > / 1
    <br>
   <input id="mme149j" type="text" class="form-control" name="mme149j" maxlength="2"  value='{{(isset($data))  ? $data->mme149j  : old("mme149j") }}' > / 1
    <br>
  </td>
  <td   style=';border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="mme149" type="text" class="form-control" name="mme149" maxlength="3"  value='{{(isset($data))  ? $data->mme149  : old("mme149") }}' > 
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=8  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <span >Evalúe según el contenido del manual</span>
  </td>
 </tr>
</table>

  <br>

<table border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:12.75pt'>
  <td  colspan=5  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt;
  height:12.75pt'> 
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXII. EXAMEN MINIMO DEL ESTADO MENTAL LENGUAJE (PARTE D)</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:15.65pt'>
  <td rowspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>160.
  Repetición de frases:</span></p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:31.5pt;text-indent:-18.0pt;mso-list:l3 level1 lfo6;
  tab-stops:list 31.5pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Pancha plancha con cuatro planchas.<span
  style='mso-spacerun:yes'>                            </span></span>

    <input id="mme150a" type="text" class="form-control" name="mme150a" maxlength="2"  value='{{(isset($data))  ? $data->mme150a  : old("mme150a") }}' > / 1
    <br>


</p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:31.5pt;text-indent:-18.0pt;mso-list:l3 level1 lfo6;
  tab-stops:list 31.5pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>El autobús llegó al terminal con una hora de retraso.<span
  style='mso-spacerun:yes'>      </span>

     <input id="mme150b" type="text" class="form-control" name="mme150b" maxlength="2"  value='{{(isset($data))  ? $data->mme150b  : old("mme150b") }}' > / 1
    <br>

   </p>
  </td>
  <td  rowspan=2  style='vertical-align: middle; border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
      <input id="mme150" type="text" class="form-control" name="mme150" maxlength="2"  value='{{(isset($data))  ? $data->mme150  : old("mme150") }}' >
  </td>
  <td width="38%"  style='width:38.78%;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>161.
  Instrucciones verbales. <b style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.65pt'>
  <p  align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/3</span></b></p>
  </td>
  <td   style=';border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
     <input id="mme151" type="text" class="form-control" name="mme151" maxlength="2"  value='{{(isset($data))  ? $data->mme151  : old("mme151") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:15.6pt'>
  <td width="38%"  style='width:38.78%;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:15.6pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>162.
  Instrucciones escritas. <b style='mso-bidi-font-weight:normal'></b></span></p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>El paciente no sabe leer: (<span
  style='mso-spacerun:yes'>    </span>)</span></p>
  </td>
  <td   style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:15.6pt'>
  <p  align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/1</span></b></p>
  </td>
  <td   style=';border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.6pt'>
     <input id="mme152" type="text" class="form-control" name="mme152" maxlength="2"  value='{{(isset($data))  ? $data->mme152  : old("mme152") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:7.0pt'>
  <td  colspan=5  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:7.0pt'>
  <span >&nbsp;</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:32.95pt'>
  <td width="95%" colspan=4  style='width:95.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:32.95pt'>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>163. Escribir una oración completa (<span
  style='mso-spacerun:yes'>    </span>

     <input id="mme153" type="text" class="form-control" name="mme153" maxlength="2"  value='{{(isset($data))  ? $data->mme153  : old("mme153") }}' >

  <b style='mso-bidi-font-weight:normal'>/1</b>):</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>a) El
  paciente<span style='mso-spacerun:yes'>  </span>sabe escribir, pero no puede
  hacerlo por problemas físicos (<span style='mso-spacerun:yes'>      
  </span>).</span></p>
  <p  style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>    </span>b) El paciente
  no sabe escribir (<span style='mso-spacerun:yes'>       </span>).</span></p>
  </td>
  <td   style=';border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:32.95pt'>
  
  </td>
 </tr>
</table>

<p class=MsoBodyText><span  style=''>&nbsp;</span></p>

<table Table border=1 cellspacing=0 cellpadding=0
 style='margin-left:-3.6pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  height:16.45pt'>
  <td width=738 colspan=2  style='width:553.6pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt;height:16.45pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXIII. HABILIDADES
  CONSTRUCCIONALES</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:22.6pt'>
  <td width=702  style='width:526.2pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:22.6pt'>
   164. Dibujar al lado del original<span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  color:windowtext'> </span>

     <input id="mme154" type="text" class="form-control" name="mme154" maxlength="2"  value='{{(isset($data))  ? $data->mme154  : old("mme154") }}' > / 2

  </td>
  <td width=37  style='width:27.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:22.6pt'>
    
  </td>
 </tr>
</table>

<br>

<table  border=1 cellspacing=0 cellpadding=0 
 style='margin-left:-3.6pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td w colspan=3  style='background: black; border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
    <span  style='font-family:"Lucida Sans Unicode","sans-serif"; mso-bidi-font-family:"Times New Roman"'>
     <b style="color: white;"> XXIV. JUICIO </b></span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>A caballo regalado no se le mira el colmillo</span></p>
  </td>
  <td width=28  style='width:21.3pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
       <input id="juicioa" type="text" class="form-control" name="juicioa" maxlength="2"  value='{{(isset($data))  ? $data->juicioa  : old("juicioa") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>Más vale pájaro en mano que cien volando.</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
   <input id="juiciob" type="text" class="form-control" name="juiciob" maxlength="2"  value='{{(isset($data))  ? $data->juiciob  : old("juiciob") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>Cuando el río suena es porque piedras trae.</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juicioc" type="text" class="form-control" name="juicioc" maxlength="2"  value='{{(isset($data))  ? $data->juicioc  : old("juicioc") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>d)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>Camarón que se duerme se lo lleva la corriente</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juiciod" type="text" class="form-control" name="juiciod" maxlength="2"  value='{{(isset($data))  ? $data->juiciod  : old("juiciod") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>¿Para qué sirven los pulmones?</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juicioe" type="text" class="form-control" name="juicioe" maxlength="2"  value='{{(isset($data))  ? $data->juicioe  : old("juicioe") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;mso-list:
  l4 level1 lfo14;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>f)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>Deme algunas razones por las cuales debemos cocinar la comida</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juiciof" type="text" class="form-control" name="juiciof" maxlength="2"  value='{{(isset($data))  ? $data->juiciof  : old("juiciof") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;mso-list:
  l4 level1 lfo14;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>g)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>¿Qué haría usted si caminando por la calle se encuentra una cartera con
  documentos personales?</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <input id="juiciog" type="text" class="form-control" name="juiciog" maxlength="2"  value='{{(isset($data))  ? $data->juiciog  : old("juiciog") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText style='margin-left:18.0pt;text-indent:-18.0pt;
  mso-list:l4 level1 lfo14;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>h)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-ansi-language:
  ES'>¿Qué haría usted si es la primera persona en ver humo y fuego salir de
  una tienda de alimentos?</span></p>
  </td>
  <td width=28  style='width:21.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=center style='margin-top:4.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  '>/1</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juicioh" type="text" class="form-control" name="juicioh" maxlength="2"  value='{{(isset($data))  ? $data->juicioh  : old("juicioh") }}' >

  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width=322><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid;mso-row-margin-right:241.8pt'>
  <td width=350  style='width:262.25pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=right style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:right'><b><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  letter-spacing:5.4pt;'>TOTAL</span></b></p>
  </td>
  <td width=66 colspan=2 style='width:49.65pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
     <input id="juicio" type="text" class="form-control" name="juicio" maxlength="2"  value='{{(isset($data))  ? $data->juicio  : old("juicio") }}' >

  </td>
 
 </tr>
 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;page-break-inside:avoid;
  mso-row-margin-right:241.8pt'>
  <td width=416 colspan=3  style='width:311.9pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeading7><span  style='color:windowtext'>Escriba cada una
  de las respuestas dichas por el paciente en el rayado adyacente</span></p>
  </td>
  
 </tr>
</table>

<br>

<table border=1 class="table" 
 style='margin-left:-10.7pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
 mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;
  page-break-inside:avoid;height:21.2pt'>
  <td style='width:569.7pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt;
  height:21.2pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXV. INVENTARIO NEUROPSIQUIATRICO</span>
  </td>
 </tr>
</table>

<table class="table" border=1 
 style='margin-left:-8.8pt;border-collapse:collapse;mso-table-layout-alt:fixed;
 border:none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:480;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:63.3pt'>
  <td width=350 rowspan=5  style='width:262.3pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>166.
  <b style='mso-bidi-font-weight:normal'>IDEAS DELIRANTES:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>¿El paciente
  tiene ideas que Ud. Sabe que no son ciertas? Por ejemplo, insiste que la
  gente está tratando de hacerle daño o le están robando sus cosas. ¿Dice que
  los miembros de su familia no son quienes dicen ser o que su casa no es su
  casa? No me refiero a tener meras suspicacias; estoy interesado en saber si
  el paciente esta convencido de que estas circunstancias realmente le están
  sucediendo? </span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>A.
  En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que está en peligro, que alguien planea hacerle daño?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que alguien le esta robando las pertenencias?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que su conyugue tiene relaciones extramaritales?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que personas no invitadas están viviendo en su casa?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que su conyugue u otra persona no son quienes dice ser?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que su casa no es su casa?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que miembros de su flia están planeando abandonarlo?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  que personaje de TV y revistas se encuentran presentes en su propia casa?¿
  Intenta hablar o interactuar con ellos?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Cree
  el paciente en otra cosa inusual que no haya explorado?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. </span><span  style='font-size:8.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Ocasional (&lt;1
  vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p  style='text-align:justify'><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Delirios presentes pero inofensivos.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Delirios angustiantes y desorganizan.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Delirios muy desorganizantes y son fuente importante de conducta
  alterada.</span></p>
 
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>E. Total de Ideas delirantes B X C</span></b></p>
  </td>
  <td width=44 style='width:32.8pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
     <SELECT id="ide_delir" name="ide_delir" >
             <option {{ (isset($data) && $data->ide_delir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ide_delir == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width=334 rowspan=5  style='width:250.7pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>168.
  <b style='mso-bidi-font-weight:normal'>AGITACION / AGRESION:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>¿El paciente
  tiene periodos donde se rehúsa a cooperar o donde no acepta ayuda? ¿El o ella
  es difícil de manejar?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿El
  paciente se molesta con sus cuidadores o se resiste a</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>llevar a cabo actividades tales como
  bañarse o cambiarse de<span style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>ropa?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Se
  empeña en que las cosas salgan a su modo’</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Se
  muestra poco cooperador, se resiste a recibir ayuda de<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>otros?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Presenta
  alguna otra conducta que lo tome difícil de manejar?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Grita
  o insulta con enojo?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Azota
  puertas, golpea muebles o avienta cosas?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Intenta
  el paciente herir o pegar a otros?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Presenta
  otro tipo de conducta de agresividad o agitación.?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. </span><span  style='font-size:8.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Ocasional (&lt;1
  vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Conducta desorganizada pero manejable mediante<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>redirección y confianza re-establecida.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Conductas desorganizantes y difíciles de redirigir o </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>controlar.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. La agitación es muy desorganizantes y es una fuente importante de
  dificultades; existe riesgo de daño a si mismo. Se requieren medicamentos.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                   </span><span
  style='mso-spacerun:yes'> </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>E. Total de Agitación B X C</span></b></p>
  </td>
  <td width=33 style='width:24.75pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
     <SELECT id="agitacio" name="agitacio" >
             <option {{ (isset($data) && $data->agitacio == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->agitacio == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:146.85pt'>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:146.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:146.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:46.8pt'>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:39.45pt'>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:30.6pt'>
  <td width=44 style='width:32.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
      <input id="tot_deli" type="text" class="form-control" name="tot_deli" maxlength="2"  value='{{(isset($data))  ? $data->tot_deli  : old("tot_deli") }}' >

  </td>
  <td width=33 style='width:24.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
     <input id="tot_agit" type="text" class="form-control" name="tot_agit" maxlength="2"  value='{{(isset($data))  ? $data->tot_agit  : old("tot_agit") }}' >

  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:48.8pt'>
  <td width=350 rowspan=4  style='width:262.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:48.8pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>167.<b
  style='mso-bidi-font-weight:normal'> ALUCINACIONES:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>¿El paciente
  tiene alucinaciones tales como visiones falsas o escucha voces? ¿Para ver.
  Oír, sentir cosas que no se encuentran presentes? Con esta pregunta no solo
  referimos a creencias erróneas tales como decir que alguien que ya murió
  sigue vivo; más bien estamos preguntando si de hecho el paciente ha presentado
  sensaciones visuales o auditivas anormales.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'> </span><b
  style='mso-bidi-font-weight:normal'>A. En caso de ser cierto, señale:</b></span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿El
  paciente menciona escuchar voces o actúa como si de hecho las oyera?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Habla
  con personas que no están presentes? </span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Describe
  que ve cosas que nadie mas puede ver o se comporta como si estuviera viendo
  cosas que nadie puede ver (personas, animales)?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Reporta
  oler cosas que los demás no pueden oler?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Describe
  sentir cosas en la piel o aparenta sentir cosas que se arrastran o que lo
  tocan?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Describe
  sabores que no tiene causa aparente?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Describe
  algún otro tipo de experiencia sensorial poco común?.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. </span><span  style='font-size:8.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Ocasional (&lt;1
  vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Alucinaciones<span style='mso-spacerun:yes'>  </span>presentes pero
  inofensivas.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Alucinaciones angustiantes y desorganizan.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Alucinaciones muy desorganizantes las cuales son fuente importante
  de conducta alterada.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Alucinaciones<span style='mso-spacerun:yes'>  </span>B XC</span></b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  </td>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:48.8pt'>
     <SELECT id="alucinac" name="alucinac" >
             <option {{ (isset($data) && $data->alucinac == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->alucinac == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width=334 rowspan=4  style='width:250.7pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:48.8pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>169.<b
  style='mso-bidi-font-weight:normal'> DEPRESION / DISFORIA:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'><span style='mso-spacerun:yes'>     </span>¿El paciente
  aparece triste o deprimido? ¿Dice sentirse triste o deprimido?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿El
  paciente tiene periodos de llanto o sollozo que parecen</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>indicar tristeza?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Se
  devalúa o dice sentirse fracazado?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Se
  muestra poco cooperador, se resiste a recibir ayuda de<span
  style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>otros?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Dice
  ser una mala persona que merece ser castigada?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Parece
  sentirse desesperanzado o dice no tener futuro </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>       </span>alguno?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Expresa
  deseos de morir o habla de quitarse la vida?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Dice
  el paciente que es una carga para la familia o que la </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>familia estaría mejor sin el ?</span></p>
  <p  style='text-align:justify'><span  style='font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span></span><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Presenta
  otros signos de depresión o tristeza?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. </span><span  style='font-size:8.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Ocasional (&lt;1
  vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Depresión angustiante que generalmente responde a redirección. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Depresión angustiante, síntomas depresivos reportados por el
  paciente los cuales son difíciles de mitigar.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Depresión angustiante fuente de sufrimiento</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>E. Total de Depresión <span
  style='mso-spacerun:yes'> </span>B X C</span></b></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:48.8pt'>
     <SELECT id="depresio" name="depresio" >
             <option {{ (isset($data) && $data->depresio == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->depresio == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:159.15pt'>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:159.15pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=bottom style='width:24.75pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:159.15pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:52.35pt'>
  <td width=44 style='width:32.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:52.35pt'>
  <p ><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:52.35pt'>
  <p class=MsoBodyText align=center style='text-align:center'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:78.0pt'>
  <td width=44  style='vertical-align: middle; width:32.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:78.0pt'>
       <input id="tot_aluc" type="text" class="form-control" name="tot_aluc" maxlength="2"  value='{{(isset($data))  ? $data->tot_aluc  : old("tot_aluc") }}' >
  </td>
  <td width=33 style='text-align: center; vertical-align: middle; width:24.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:78.0pt'>
     <input id="tot_depr" type="text" class="form-control" name="tot_depr" maxlength="2"  value='{{(isset($data))  ? $data->tot_depr  : old("tot_depr") }}' >
  </td>
 </tr>
</table>

<br>



<table class="table" border=1>
 <tr>
   <td colspan="4" style="background: black;">
      <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXV. INVENTARIO  NEUROPSIQUIATRICO</span>
   </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:63.3pt'>
  <td width=350 rowspan=5  style='width:262.3pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>170</span><span 
  style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>.<b style='mso-bidi-font-weight:normal'> ANSIEDAD:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿El paciente esta nervioso preocupado o
  asustado sin motivo aparentemente? ¿Parece inquieto muy tenso? ¿Tiene miedo
  de estar alejado de usted?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿El paciente dice estar preocupado acerca de
  eventos planeados?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene periodos en los que se siente
  tembloroso, incapaz de </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>       </span>relajarse o se siente excesivamente
  tenso?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene periodos (o se queja de) falta de
  aire, jadea o suspira sin </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>motivo aparente excepto nerviosismo?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se queja de sentirse muy inquieto
  (“mariposas en el estomago”), </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>o que el corazón le palpita de forma
  apresurada y esto se asocia<span style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>con nerviosismo?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Evita ciertos lugares o situaciones que le
  hacen sentir mas </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>nervioso tales como subirse a un
  automóvil, reunirse con amigos o </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>estar en multitudes?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se pone nervioso o inquieto cuando esta
  separado de su </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>cuidador?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se pega a Ud para evitar ser separado?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Muestra otros signos de ansiedad?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.5pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Ansiedad angustiante generalmente responde a redirección y responde a
  la confianza.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. La A. es angustiante, síntomas reportados espontáneamente los
  cuales son difíciles de mitigar.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. A. muy angustiante, fuente importante de sufrimiento.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>E. Total de Ansiedad B X C</span></b><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></b></p>
  </td>
  <td style='border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
     <SELECT id="ansiedad" name="ansiedad" >
             <option {{ (isset($data) && $data->ansiedad == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ansiedad == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width=340 rowspan=5  style='width:9.0cm;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>172. <b style='mso-bidi-font-weight:
  normal'>APATIA/ INDIFERENCIA:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span></span><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>¿Ha
  perdido interés en el mundo que les rodea? ¿Ha perdido interés en llevar a
  cabo actividades o le falta motivación para empezar cosas nuevas? Presenta
  dificultad para involucrase en una conversación o para hacer tareas? ¿Se
  muestra apático o indiferente?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Parece menos espontáneo y menos activo de
  lo habitual?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Es difícil que el paciente inicie una
  conversación?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Es menos afectuoso o falto de emociones
  cuando se le<span style='mso-spacerun:yes'>   </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>compara con su forma de ser habitual?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Contribuye menos a las labores del hogar?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Luce menos interesado en las activ. y los
  planes de los </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'>   
  </span>demás?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha perdido el interés en sus familiares y
  amigos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se muestra menos entusiasta acerca de sus
  intereses </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>comunes?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Muestra otra señal de no estar interesado
  en cosas nuevas?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.5pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad</span></b><span 
  style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. La A es notoria pero no interfiere en forma importante con las rutinas
  diarias; solo es moderadamente diferente a la conducta habitual del paciente;
  pero responde a sugerencias para participar en actividades. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. La A es muy evidente; puede ser manejada por el cuidador mediante
  coacción y estímulos; responde pacientes cercanos o de miembros de la
  familia.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. La A es muy evidente y generalmente responde a ningún tipo de
  estimulo o evento externo.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.5pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:7.5pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>E. Total de Apatía/Indiferencia B X C</span></b><span
  style='font-size:8.0pt'></span></p>
  </td>
  <td width=33 style='width:24.75pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
      <SELECT id="apatia_i" name="apatia_i" >
             <option {{ (isset($data) && $data->apatia_i == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->apatia_i == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:146.85pt'>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:146.85pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:146.85pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:46.8pt'>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:39.45pt'>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
  <p class=MsoBodyText><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:30.6pt'>
  <td style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
     <input id="tot_ansi" type="text" class="form-control" name="tot_ansi" maxlength="2"  value='{{(isset($data))  ? $data->tot_ansi  : old("tot_ansi") }}' >
  </td>
  <td width=33 style='width:24.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
     <input id="tot_apat" type="text" class="form-control" name="tot_apat" maxlength="2"  value='{{(isset($data))  ? $data->tot_apat  : old("tot_apat") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:44.3pt'>
  <td width=350 rowspan=4  style='width:262.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:44.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>171. RECOCIJO / EUFORIA:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿Parece el paciente estar demasiado
  alegre o demasiado contento sin motivo aparente? No me refiero a la alegría
  normal que viene de ver a los amigos, recibir regalos o pasar tiempo con la
  familia. Me refiero a si el pcnte. Tiene un humor persistente y anormalmente
  bueno o encuentra el lado humorístico de cosas que las demás personas no
  perciben.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Parece sentirse demasiado bien o demasiado
  contento, diferente </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>a como lo es por lo general?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Encuentra gracioso o se ríe de cosas que
  otros no encuentran </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>graciosas? </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Parece tener un sentido del humor infantil
  con risa tonta o </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>inapropiada (como cuando algo
  desafortunado le pasa a otra </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>persona)?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Cuenta chistes o hace comentarios que no
  parecen graciosos a </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>       </span>los demás pero que a el le parecen
  humorísticos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Lleva a cabo travesuras infantiles como
  pellizcar o jugar?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiende a hacerse el importante o dice tener
  más habilidades o riquezas que las que en realidad tiene?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Muestra otros signos de sentirse demasiado
  bien o feliz?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Recocijo notorio pero no desorganizantes.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Recocijo notoriamente anormal.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Recocijo muy pronunciado, paciente eufórico y casi todo lo
  encuentra gracioso.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Euforia B X C</span></b><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:44.3pt'>
      <SELECT id="regocijo" name="regocijo" >
             <option {{ (isset($data) && $data->regocijo == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->regocijo == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width=340 rowspan=4  style='width:9.0cm;border:none;
  border-bottom: solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:44.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>173.<b style='mso-bidi-font-weight:
  normal'> DESINHIBICION:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿Parece actuar impulsivamente el
  paciente y sin pensar? ¿Dice cosas que generalmente no se dicen en publico;
  hace cosas que lo apenan a usted o a los otros?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Actúa impulsivamente y sin considerar
  consecuencias?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Habla con extraños como si los conocieras?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Les dice cosas insensibles a las personas
  que hieren a sus </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>sentimientos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se expresa con crudeza o hace comentarios
  sexuales que </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>generalmente no hubiera hecha?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Habla abiertamente acerca de cuestiones
  personales o </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>privadas que generalmente no se
  discuten en publico?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se toma ciertas libertades, toca o abraza a
  los demás de forma<span style='mso-spacerun:yes'>   </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>que no va de acuerdo a su carácter?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Presenta otros signos de perdida de control
  del impulso?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:8.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. La D. es notable pero responde a redirección y guía. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. La D es muy evidente y difícil que el cuidador la supere. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. La D generalmente no responde a cualquier intervención del cuidador
  y es una fuente de vergüenza o angustia social.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E. Total de Desinhibición  B X C</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt'></span></b></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:44.3pt'>
     <SELECT id="desinhib" name="desinhib" >
             <option {{ (isset($data) && $data->desinhib == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->desinhib == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:120.75pt'>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:120.75pt'>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><span 
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 valign=bottom style='width:24.75pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:120.75pt'>
  <p class=MsoBodyText><span style='font-size:18.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:3.5pt'>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p ><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td width=33 style='width:24.75pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'>&nbsp;</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:96.8pt'>
  <td  style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:96.8pt'>
      <input id="tot_reg" type="text" class="form-control" name="tot_reg" maxlength="2"  value='{{(isset($data))  ? $data->tot_reg  : old("tot_reg") }}' >
  </td>
  <td width=33 style='width:24.75pt;border-top:none;border-left:none; border-bottom: solid;'>
      <input id="tot_desi" type="text" class="form-control" name="tot_desi" maxlength="2"  value='{{(isset($data))  ? $data->tot_desi  : old("tot_desi") }}' >
  </td>
 </tr>
</table>


<br>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:480;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
  <tr>
    <td colspan="4" style="background: black;text-align: center;">
      
         <span style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXV. INVENTARIO NEUROPSIQUIATRICO</span>

    </td>
  </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:63.3pt'>
  <td rowspan=5  style='width:45.98%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>174.<b style='mso-bidi-font-weight:
  normal'> IRRITABILIDAD/ LABILIDAD:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿Se torna el paciente irritable o
  fácilmente molesto? ¿Es muy variable su estado de ánimo? ¿Se muestra
  excesivamente impaciente? No me refiero a la frustración de tener pérdida de
  memoria o incapacidad de llevar a cabo tareas comunes; me interesa saber si
  el paciente se muestra anormalmente irritable, impaciente o presenta cambios
  emocionales diferentes de su personalidad habitual. </span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>A. En caso de ser cierto, señale</span></b><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene un temperamento difícil, se torna muy
  irritable, enojándose con la </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>menor provocación, sobre cosas sin importancia?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene cambios súbitos en el estado de
  ánimo, estando muy bien un minuto y </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>      </span>enojado al siguiente?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene arranques súbitos de enojo?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se muestra impaciente, incapaz de manejar
  retrasos o esperar actividades </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>ya planeadas?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Esta irritable y de mal humor?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Muestra otros signos de irritabilidad?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se pega a Ud para evitar ser separado?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia</span></b><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. La irritabilidad o labilidad es notable pero generalmente responde a
  dirección y re-establecimiento de la confianza.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderado. El problema es muy evidente y difícil que el cuidador lo solucione.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados.El problema es muy evidente generalmente corresponde a las
  intervenciones del cuidador y es una fuente importante de sufrimiento.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>E. Total de Irritabilidad B X C</span></b></p>
  </td>
  <td  style='width:4.96%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
     <SELECT id="irritabi" name="irritabi" >
             <option {{ (isset($data) && $data->irritabi == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->irritabi == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width="44%" rowspan=5  style='width:44.72%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>176<b style='mso-bidi-font-weight:
  normal'>SUEÑO:</b></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿Tiene el paciente dificultad para
  dormir (no tenga en cuenta si el paciente simplemente se levanta una o dos
  veces por la noche para ir al baño y vuelve a dormirse inmediatamente)? ¿Esta
  levantado en la noche’ ¿Durante la noche deambula, se viste o va a otras
  habitaciones?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene el paciente dificultad para conciliar
  el sueño?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se levanta por la noche y luego no puede dormir?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Deambula, pasea o se dedica
  actv.Inapropiada de noche?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿ De noche se levanta, viste y trata de
  salir pensando que ya es de dia?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se despierta muy tempranamente en la mañana
  (antes que los demas?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha perdido el interés en sus familiares y
  amigos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene otros comportamientos nocturnos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Le despierta durante la noche?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Duerme de forma excesiva durante el dia?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Tiene actividad nocturna pero no resulta perturbadora. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. La actv. Noct. Ocurren y perturban la rutina del centro. Puede </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>haber más de un comportamiento noct
  anormal.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Puede haber más de un comportamiento noct anormal; el paciente esta
  muy perturbado durante la noche.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>       </span><span
  style='mso-spacerun:yes'> </span>5. Muy severamente</span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>E. Total de Sueño B X C</span></b></p>
  </td>
  <td  style='width:4.34%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:63.3pt'>
     <SELECT id="sueno" name="sueno" >
             <option {{ (isset($data) && $data->sueno == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sueno == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:146.85pt'>
  <td  style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:146.85pt'>
  <p class=MsoBodyText><span style='font-size:18.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  style='width:4.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:146.85pt'>
  <p class=MsoBodyText><span style='font-size:18.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:46.8pt'>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:46.8pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:39.45pt'>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
    <input id="tot_irri" type="text" class="form-control" name="tot_irri" maxlength="2"  value='{{(isset($data))  ? $data->tot_irri  : old("tot_irri") }}' >
  </td>
  <td  style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.45pt'>
     <input id="tot_suen" type="text" class="form-control" name="tot_suen" maxlength="2"  value='{{(isset($data))  ? $data->tot_suen  : old("tot_suen") }}' >
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:30.6pt'>
  <td  style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  style='width:4.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.6pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:60.3pt'>
  <td rowspan=5  style='width:45.98%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:60.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>175. ACTIVIDAD MOTORA ABERRANTE:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>¿El paciente se pasea, hace las cosas
  una y otra vez, como abrir los armarios y los cajones, picotea las cosas o
  enreda hilos o cordones?<span style='mso-spacerun:yes'>   </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se pasea por la casa sin motivo aparente?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿rebusca cosas abriendo y desempacando
  cajones o armarios? </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se pone o se quita la ropa repetidamente?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Mantiene actividades repetidas o hábitos
  que lleva a cabo una y otra vez?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Realiza activ. Repetitivas como jugadores
  los botones, picor, enredar hilos? </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Se mueve de forma nerviosa y excesiva,
  parece incapaz de estarse quieto, </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>se levanta o se truena mucho los dedos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Lleva a cabo cualquier otra actividad una y
  otra vez?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Activ Mot anormal es notoria pero interfiere poco con las AVD .</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada. Activ. Mot. Anormal muy evidente pero el cuidador la puede </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>solucionar.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.Marcados.
  Activ. Mot. Anormal muy evidente y que generalmente no responde a ninguna
  intervención por parte del cuidador y es fuente importante de sufrimiento del
  paciente.</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Actividad motora aberrante B X C</span></b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  </td>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
      <SELECT id="act_moto" name="act_moto" >
             <option {{ (isset($data) && $data->act_moto == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->act_moto == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width="44%" rowspan=5  style='width:44.72%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:60.3pt'>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>177.<b style='mso-bidi-font-weight:
  normal'> APETITO Y HABITOS DE ALIMENTACION:</b></span></p>
  <p  style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>    
  </span>¿Presenta el paciente trastornos del apetito, cambios en el peso o
  hábitos alimentarios inusuales (marcar no si el paciente se encuentra
  incapacitado y tiene que ser alimentado)?¿ ha habido algún cambio en sus
  preferencias sobre el tipo de comida?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>A. En caso de ser cierto, señale:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene poco apetito?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Tiene un apetito excesivo?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha perdido peso?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha ganado peso?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha experimentado algún cambio en sus
  preferencias acerca del tipo de<span style='mso-spacerun:yes'>  </span></span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>comida como apetito excesivo por dulces
  u otros tipos de alimentos?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Ha desarrollado comportamientos
  alimentarios como comer siempre los </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>alimentos siguiendo el mismo orden?</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>¿Presenta otros cambios que no hayamos
  hablado?</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>B. Frecuencia:</span></b></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>1</span></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>. Ocasional (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez
  por semana)</span></p>
  <p  style='text-align:justify'><st1:metricconverter
  ProductID="2. A" w:st="on"><span  style='font-size:7.0pt;font-family:
   "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2. A</span></st1:metricconverter><span
   style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'> menudo (1 vez x sem)<span style='mso-spacerun:yes'> 
  </span>4. Muy frecuentemente (1 o + veces día)</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>C. Severidad:</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  Leve. Presenta cambios en el apetito o las comidas, pero no han tenido </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>repercusión en su peso ni son
  perturbadoras</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>2.
  Moderada.Los cambios del apetito estan presentes y causan pequeñas </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>    </span>fluctuaciones en el peso. </span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>3.
  Marcados. Hay cambios obvios en el apetito o las comidas, que causan
  fluctuaciones en el peso, son anormales o perturban al paciente en cualquier
  otro modol.</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>D. ¿Cuánto le parece que perturba las
  AVD este comportamiento?</span></b></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>0. Nada<span
  style='mso-spacerun:yes'>                    </span>3. Moderadamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>1. Mínimamente<span
  style='mso-spacerun:yes'>       </span>4. Severamente</span></p>
  <p  style='text-align:justify'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>     </span>2. Ligeramente<span
  style='mso-spacerun:yes'>        </span>5. Muy severamente</span></p>
  <p  style='text-align:justify'><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>E. Total de Apetito y Alimentación B X C</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt'></span></b></p>
  </td>
  <td  style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
       <SELECT id="apetito" name="apetito" >
             <option {{ (isset($data) && $data->apetito == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->apetito == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:60.3pt'>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:60.3pt'>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td  style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:60.3pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:42.1pt'>
  <td  style='width:4.96%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:42.1pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td   style='width:4.34%;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:42.1pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:60.3pt'>
  <td  style='text-align: center; vertical-align: middle; width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:60.3pt'>
     <input id="tot_moto" type="text" class="form-control" name="tot_moto" maxlength="2"  value='{{(isset($data))  ? $data->tot_moto  : old("tot_moto") }}' >
  </td>
  <td   style='vertical-align: middle; width:4.34%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:60.3pt'>
    <input id="tot_apet" type="text" class="form-control" name="tot_apet" maxlength="3"  value='{{(isset($data))  ? $data->tot_apet  : old("tot_apet") }}' >
  </td>
 </tr>
</table>

<br>
<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=8  style='border:double windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-right-alt:
  thick-thin-small-gap windowtext 3.0pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXVI. ESCALAS
  NEUROPSIQUIÁTRICAS</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width="12%"  style='width:12.5%;border:double windowtext 3.0pt;
  border-top:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>178. EMEMs<span
  style='mso-spacerun:yes'>     </span></span>

    <input id="EMEMs" type="text" class="form-control" name="EMEMs" maxlength="3" value='{{ old("EMEMs", isset($data) ? $data->EMEMs : "") }}'>


  </p>
  </td>
  <td width="12%"  style='width:12.5%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>179. EMEMf<span
  style='mso-spacerun:yes'>    </span></span><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  '><span style='mso-spacerun:yes'>  </span></span>

      <input id="EMEMf" type="text" class="form-control" name="EMEMf" maxlength="3" value='{{ old("EMEMf", isset($data) ? $data->EMEMf : "") }}'>

</p>
  </td>
  <td width="12%"  style='width:12.5%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>180. BOM</span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>C<span
  style='mso-spacerun:yes'>       </span></span>

       <input id="bomc" type="text" class="form-control" name="bomc" maxlength="3" value='{{ old("bomc", isset($data) ? $data->bomc : "") }}'>


</p>
  </td>
  <td width="12%"  style='width:12.5%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>181. </span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>Memoria</span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";'>:<span
  style='mso-spacerun:yes'>   </span></span>
      <input id="memoria" type="text" class="form-control" name="memoria" maxlength="3" value='{{ old("memoria", isset($data) ? $data->memoria : "") }}'>

</p>
  </td>
  <td width="12%"  style='width:12.9%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>182. Orientación:</span>

      <input id="orient" type="text" class="form-control" name="orient" maxlength="3" value='{{ old("orient", isset($data) ? $data->orient : "") }}'>

  </p>
  </td>
  <td width="9%"  style='width:9.84%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>183. Juicio<span
  style='mso-spacerun:yes'>   </span></span>

      <input id="juicio2" type="text" class="form-control" name="juicio2" maxlength="3" value='{{ old("juicio2", isset($data) ? $data->juicio2 : "") }}'>

  </p>
  </td>
  <td width="13%"  style='width:13.1%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>184. AVD instrm. </span>

     <input id="avdi_tot" type="text" class="form-control" name="avdi_tot" maxlength="3" value='{{ old("avdi_tot", isset($data) ? $data->avdi_tot : "") }}'>
  </p>
  </td>
  <td width="14%"  style='width:14.16%;border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>185. AVD básico<span
  style='mso-spacerun:yes'>    </span></span>
  
     <input id="avdb_tot" type="text" class="form-control" name="avdb_tot" maxlength="3" value='{{ old("avdb_tot", isset($data) ? $data->avdb_tot : "") }}'>

  </p>
  </td>
 </tr>
</table>

 <br>

<table class="table">
  <tr>
  <td colspan=8  style='background: black; vertical-align: middle;
  text-align: center; border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXVII. CLASIFICACIÓN CLINICA DE LA DEMENCIA</span>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'></td>

 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td colspan=3  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#E5E5E5;mso-shading:white;
  mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style=';margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Escala Clínica
  de Ponderación de la Demencia (CDR)</span></b><b style='mso-bidi-font-weight:
  normal'></b></p>
  </td>
  <td colspan=5  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#E5E5E5;mso-shading:white;mso-pattern:gray-10 auto;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style=';margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Escala
  Modificada de Hachinski</span></b><b style='mso-bidi-font-weight:normal'></b></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td colspan=2  style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Memoria (considere el apartado 181)</span></p>
  </td>
  <td width=58 style='width:43.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
          <SELECT id="memocdr" name="memocdr" >
             <option {{ (isset($data) && $data->memocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->memocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->memocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->memocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->memocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  </td>
  <td width=272 colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Comienzo súbito de los síntomas<b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td style='text-align: center; vertical-align: middle;
   border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  /2
  </td>
  <td colspan=2 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <input id="hach1" type="text" class="form-control" name="hach1" maxlength="3" value='{{ old("hach1", isset($data) ? $data->hach1 : "") }}' >
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Orientación (considere el apartado 182)
  </span></p>
  </td>
  <td colspan=2 style='vertical-align: middle;border:solid windowtext 1.0pt;'>
         <SELECT id="oriencdr" name="oriencdr" >
             <option {{ (isset($data) && $data->oriencdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->oriencdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->oriencdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->oriencdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->oriencdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  </td>
  <td colspan=2  style='width:204.3pt;border:solid windowtext 1.0pt;'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Deterioro por pasos (no es progresivo)<b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/1</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="hach2" type="text" class="form-control" name="hach2" maxlength="3" value='{{ old("hach2", isset($data) ? $data->hach2 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td style='width:230.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Juicio y solución de problemas
  (considere el apartado 183 y el resultado del Inventario Neuropsiquiatríco)</span></p>
  </td>
  <td colspan=2 style='width:43.8pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="juiciocdr" name="juiciocdr" >
             <option {{ (isset($data) && $data->juiciocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->juiciocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->juiciocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->juiciocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->juiciocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  </td>
  <td colspan=2  style='border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Síntomas orgánicos (incontinencia
  urinaria, alt.marcha)<span
  style='mso-spacerun:yes'>                                </span><b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/1</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="hach3" type="text" class="form-control" name="hach3" maxlength="3" value='{{ old("hach3", isset($data) ? $data->hach3 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td style='width:230.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Actividades sociales (Considere
  Inventario Neuropsiquiatríco)-</span></p>
  </td>
  <td colspan=2 style='border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:'>
        <SELECT id="actsoccdr" name="actsoccdr" >
             <option {{ (isset($data) && $data->actsoccdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->actsoccdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->actsoccdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->actsoccdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->actsoccdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  </td>
  <td colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Episodios de labilidad emocional<span
  style='mso-spacerun:yes'>         </span></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/1</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="hach4" type="text" class="form-control" name="hach4" maxlength="3" value='{{ old("hach4", isset($data) ? $data->hach4 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid'>
  <td style='width:230.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Hogar y aficiones (considere los
  apartados XVIa, 185 y 186)</span></p>
  </td>
  <td colspan=2 style='border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
       <SELECT id="Hogarcdr" name="Hogarcdr" >
             <option {{ (isset($data) && $data->Hogarcdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->Hogarcdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->Hogarcdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->Hogarcdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->Hogarcdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  </td>
  <td colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Historia de hipertensión
  arterial<span style='mso-spacerun:yes'>        </span><b style='mso-bidi-font-weight:
  normal'></b></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/1</span></b></p>
  </td>
  <td colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="hach5" type="text" class="form-control" name="hach5" maxlength="3" value='{{ old("hach5", isset($data) ? $data->hach5 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td style='width:230.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Cuidado personal (considere los
  apartados XVIb, y 187 y 188)</span></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
      <SELECT id="cuidadocdr" name="cuidadocdr" >
             <option {{ (isset($data) && $data->cuidadocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cuidadocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->cuidadocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->cuidadocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->cuidadocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  </td>
  <td width=272 colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Historia de<span
  style='mso-spacerun:yes'>  </span>enfermedad cerebrovascular <b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/2</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="hach6" type="text" class="form-control" name="hach6" maxlength="3" value='{{ old("hach6", isset($data) ? $data->hach6 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td width=307 colspan=2  style='width:230.3pt;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>189. <b style='mso-bidi-font-weight:
  normal'>Estadío clínico de la demencia (CDR)</b></span></p>
  </td>
  <td width=58 style='width:43.8pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="cdr" name="cdr" >
             <option {{ (isset($data) && $data->cdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->cdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->cdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->cdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  </td>
  <td width=272 colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Síntomas neurológicos focales</span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/2</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="hach7" type="text" class="form-control" name="hach7" maxlength="3" value='{{ old("hach7", isset($data) ? $data->hach7 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td width=365 colspan=3  style='width:274.1pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#E5E5E5;mso-shading:white;
  mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style=';text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Comienzo y Curso del Cuadro Demencial</span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td width=272 colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Signos neurológicos focales</span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>/2</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="hach8" type="text" class="form-control" name="hach8" maxlength="3" value='{{ old("hach8", isset($data) ? $data->hach8 : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td width=307 colspan=2  style='width:230.3pt;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>190. Año de comienzo de la sintomatología</span></p>
  </td>
  <td width=58  style='width:43.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="ano_sint" type="text" class="form-control" name="ano_sint" maxlength="10" value='{{ old("ano_sint", isset($data) ? $data->ano_sint : "") }}'>
  </td>
  <td width=272 colspan=2  style='width:204.3pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>194. <b style='mso-bidi-font-weight:
  normal'><span style='letter-spacing:3.5pt'>PUNTUACIÓN FINAL</span>: </b></span></p>
  </td>
  <td  style='border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:6.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></b></p>
  </td>
  <td width=55 colspan=2 style='width:41.45pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="esc_hach" type="text" class="form-control" name="esc_hach" maxlength="3" value='{{ old("esc_hach", isset($data) ? $data->esc_hach : "") }}'>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width=307 colspan=2  style='width:230.3pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>191. Edad de comienzo de la sintomatología</span></p>
  </td>
  <td width=58  style='width:43.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <input id="edad_sin" type="text" class="form-control" name="edad_sin" maxlength="3" value='{{ old("edad_sin", isset($data) ? $data->edad_sin : "") }}'>
  </td>
  <td width=365 colspan=5  style='width:274.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText><i style='mso-bidi-font-style:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Puntuación mayor o igual a 4 puntos
  demencia vascular. Menos de 4, demencias por otras causas.</span></i></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:9.2pt'>
  <td rowspan=2  style='width:230.3pt;border-top:
  none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>192. Comienzo del cuadro clínico:</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l0 level1 lfo7;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.</span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Insidioso.</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l0 level1 lfo7;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Súbito.</span></p>
  </td>
  <td colspan=2 rowspan=2  style='width:43.8pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;vertical-align: middle;'>
      <SELECT id="comi_cua" name="comi_cua" class="form-control" >
             <option {{ (isset($data) && $data->comi_cua == 0) ? 'selected' : '' }} value="0" >0</option>
             <option {{ (isset($data) && $data->comi_cua == 1) ? 'selected' : '' }} value="1" >1 = Incidioso</option>
             <option {{ (isset($data) && $data->comi_cua == 2) ? 'selected' : '' }} value="2" >2 = Subito</option>
        </SELECT>
  </td>
  <td colspan=2 rowspan=5  style='width:232.65pt;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>195. ¿Cuál fue el primer síntoma del
  cuadro demencial?</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt;
  mso-list:l6 level1 lfo13;tab-stops:list 23.6pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>  </span>Deterioro de la Memoria.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt;
  mso-list:l6 level1 lfo13;tab-stops:list 23.6pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>  </span>Trastornos de la personalidad.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt;
  mso-list:l6 level1 lfo13;tab-stops:list 23.6pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>  </span>Trastornos del lenguaje.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt;
  mso-list:l6 level1 lfo13;tab-stops:list 23.6pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>  </span>Alteraciones motoras.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt;
  mso-list:l6 level1 lfo13;tab-stops:list 23.6pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>  </span>Alucinaciones</span></p>
  </td>
  <td colspan=3 rowspan=5  style='vertical-align: middle;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>

    <SELECT id="sintom_1" name="sintom_1" >
             <option {{ (isset($data) && $data->sintom_1 == 0) ? 'selected' : '' }} value="0" >0 = Sin sintomas</option>
             <option {{ (isset($data) && $data->sintom_1 == 'a') ? 'selected' : '' }} value="a" >a = Deterioro de Memoria</option>
             <option {{ (isset($data) && $data->sintom_1 == 'b') ? 'selected' : '' }} value="b" >b = Trastornos de la personalidad</option>
             <option {{ (isset($data) && $data->sintom_1 == 'c') ? 'selected' : '' }} value="c" >c = Trastornos del Lenguaje</option>
             <option {{ (isset($data) && $data->sintom_1 == 'd') ? 'selected' : '' }} value="d" >d = Alteraciones motoras</option>
             <option {{ (isset($data) && $data->sintom_1 == 'e') ? 'selectee' : '' }} value="e" >e = Alucinaciones</option>
    </SELECT>
   
  </td>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>
  
 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.2pt'>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>
  
 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:9.2pt'>
  <td rowspan=2  style='width:230.3pt;border-top:
  none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>193. Curso del cuadro clínico:</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l14 level1 lfo8;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Lento y gradual.</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l14 level1 lfo8;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Rápido y gradual.</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l14 level1 lfo8;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Fluctuante.</span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt;mso-list:l14 level1 lfo8;tab-stops:list 18.0pt'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Por pasos</span></p>
  </td>
  <td colspan="2" rowspan=2  style='border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  vertical-align: middle;'>
        <SELECT id="cur_cuad" name="cur_cuad" >
             <option {{ (isset($data) && $data->cur_cuad == 0) ? 'selected' : '' }} value="0" >0</option>
             <option {{ (isset($data) && $data->cur_cuad == 1) ? 'selected' : '' }} value="1" >1 = Lento y gradual</option>
             <option {{ (isset($data) && $data->cur_cuad == 2) ? 'selected' : '' }} value="2" >2 = Rapido y gradual</option>
             <option {{ (isset($data) && $data->cur_cuad == 3) ? 'selected' : '' }} value="3" >3 = Fluctante</option>
             <option {{ (isset($data) && $data->cur_cuad == 4) ? 'selected' : '' }} value="4" >4 = Por pasos</option>
        </SELECT>

  </td>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>
  
 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:9.2pt'>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>
  
 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid'>
  <td colspan=8  style='border:solid windowtext 1.0pt;'>
  <p class=MsoBodyText align=left style='text-align:left'><i style='mso-bidi-font-style:
  normal'><span style='font-size:6.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>El enunciado 190 se indicará el año
  de comienzo; el 19, la edad y los 192 y <st1:metricconverter ProductID="193 l"
  w:st="on">193 l</st1:metricconverter> el numero de la alternativa. Los
  enunciados 190 al 193 serán llenados solo si<span style='mso-spacerun:yes'> 
  </span>el sujeto tiene diagnóstico de demencia. En caso de sujetos normales,
  rellene el recuadro con -88</span></i><i style='mso-bidi-font-style:normal'><span
  style='font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></i></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:17;page-break-inside:avoid'>
  <td colspan=8  style='border-top:solid windowtext 1.0pt;background: black'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXVIII. DIAGNÓSTICO  DIFERENCIAL DE DEMENCIA </span>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:18'>
  <td style='width:166.55pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>0.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>NINGUNA CONDICIÓN</span></p>
  <p  style='margin-left:14.2pt;text-indent:-14.2pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Probable enfermedad de Alzheimer.</span></p>
  <p  style='margin-left:14.2pt;text-indent:-14.2pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Probable demencia de cuerpos de Lewy.</span></p>
  <p  style='margin-left:14.2pt;text-indent:-14.2pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Probable demencia vascular.</span></p>
  <p  style='margin-left:14.2pt;text-indent:-14.2pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Probable enfermedad de Parkinson.</span></p>
  <p  style='margin-left:14.2pt;text-indent:-14.2pt;mso-list:
  l5 level1 lfo15;tab-stops:list 14.2pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Demencia lobar frontotemporal.</span></p>
  </td>
  <td width=235 colspan=3  style='width:175.95pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:10.65pt;text-indent:-10.65pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Posible enfermedad de Alzheimer.</span></p>
  <p  style='margin-left:10.65pt;text-indent:-10.65pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Posible enfermedad de cuerpos de Lewy</span></p>
  <p  style='margin-left:10.65pt;text-indent:-10.65pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Posible demencia vascular.</span></p>
  <p  style='margin-left:10.65pt;text-indent:-10.65pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>9.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Posible enfermedad de Parkinson.</span></p>
  <p  style='margin-left:10.65pt;text-indent:-10.65pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>10.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Enfermedad de Huntington.</span></p>
  <p  style='margin-left:17.75pt;text-indent:-17.75pt;
  mso-list:l5 level1 lfo15;tab-stops:list 18.0pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>11.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Demencia por causas metabólicas,
  tóxicas o TCE.</span></p>
  </td>
  <td colspan=2 style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>12.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Alzheimer de presentación inusual.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>13.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Alzheimer + Parkinson.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>14.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Alzheimer + Vascular.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>15.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Alzheimer + otras demencias.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>16.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Otras demencias mixtas.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>17.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Otras causas de demencias.</span></p>
  <p  style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:
  l5 level1 lfo15;tab-stops:list 18.0pt'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>18.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Demencia por causas desconocidas.</span></p>
  </td>
  <td colspan=2 style='vertical-align: middle; width:34.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="diag_dem" name="diag_dem" class="form-control">
            @for ($i = 0; $i < 19; $i++)
                   <option {{ (isset($data) && $data->diag_dem ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 <tr style='mso-yfti-irow:19;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=731 colspan=8  style='width:548.2pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:6.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Señale en el recuadro la causa de demencia que explica el
  cuadro clínico del paciente. <b style='mso-bidi-font-weight:normal'>(solo si
  CDR = ó &gt; 1)</b></span></i></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  
 </tr>
 
 <tr height=0>
  <td width=215 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=89 style='border:none'></td>
  <td width=175 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 
</table>

<br>

<table class="table" border=1
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td colspan=4  style='border:solid windowtext 1.0pt;background: black'>
  <span style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXIX. OTROS
  DIAGNÓSTICOS NEUROLÓGICOS</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="44%"  style='width:44.6%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>197.
  Enfermedad de Parkinson <span style='mso-spacerun:yes'> </span>que no es
  causa<span style='mso-spacerun:yes'>  </span>1ra de demencia.</span></p>
  </td>
  <td style='width:6.46%;border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="enf_park" name="enf_park" >
          <option value="0" {{ old("enf_park", isset($data) ? $data->enf_park : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("enf_park", isset($data) ? $data->enf_park : "")=="1" ? 'selected':''}} >1 = Si</option>  
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>203.
  Enfermedad de Hakin que no es causa 1ra de demencia.</span></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="hakin" name="hakin" >
          <option value="0" {{ old("hakin", isset($data) ? $data->hakin : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("hakin", isset($data) ? $data->hakin : "")=="1" ? 'selected':''}} >1 = Si</option>    
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width="44%"  style='width:44.6%;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>198.
  Enfermedad de Huntington que no es causa<span style='mso-spacerun:yes'> 
  </span>1ra de demencia </span></p>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>
  </td>
  <td style='width:6.46%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="enf_hunt" name="enf_hunt" >
          <option value="0" {{ old("enf_hunt", isset($data) ? $data->enf_hunt : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("enf_hunt", isset($data) ? $data->enf_hunt : "")=="1" ? 'selected':''}} >1 = Si</option>   
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border:solid windowtext 1.0pt;'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>204.
  Temblor esencial</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="temb_esc" name="temb_esc" >
         <option value="0" {{ old("temb_esc", isset($data) ? $data->temb_esc : "")=="0" ? 'selected':''}} >0 = No</option>
         <option value="1" {{ old("temb_esc", isset($data) ? $data->temb_esc : "")=="1" ? 'selected':''}} >1 = Si</option>   
      </SELECT>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width="44%"  style='width:44.6%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>199.
  Movimientos extrapiramidales debido a fármacos</span></p>
  </td>
  <td style='width:6.46%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="mov_farm" name="mov_farm" >
         <option value="0" {{ old("mov_farm", isset($data) ? $data->mov_farm : "")=="0" ? 'selected':''}} >0 = No</option>
         <option value="1" {{ old("mov_farm", isset($data) ? $data->mov_farm : "")=="1" ? 'selected':''}} >1 = Si</option>  
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border:none;border-bottom:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>205.
  Otros trastornos</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="trans_ot" name="trans_ot" >
         <option value="0" {{ old("trans_ot", isset($data) ? $data->trans_ot : "")=="0" ? 'selected':''}} >0 = No</option>
         <option value="1" {{ old("trans_ot", isset($data) ? $data->trans_ot : "")=="1" ? 'selected':''}} >1 = Si</option>    
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width="44%"  style='width:44.6%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>200.<span
  style='mso-spacerun:yes'>  </span>Diskinesia tardía</span></p>
  </td>
  <td style='width:6.46%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="disqui_t" name="disqui_t" >
         <option value="0" {{ old("disqui_t", isset($data) ? $data->disqui_t : "")=="0" ? 'selected':''}} >0 = No</option>
         <option value="1" {{ old("disqui_t", isset($data) ? $data->disqui_t : "")=="1" ? 'selected':''}} >1 = Si</option>     
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>206.
  Síndrome Amnésico Primario Demencia.</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="sind_amn" name="sind_amn" >
          <option value="0" {{ old("sind_amn", isset($data) ? $data->sind_amn : "")=="0" ? 'selected':''}} >0 = No</option>
         <option value="1" {{ old("sind_amn", isset($data) ? $data->sind_amn : "")=="1" ? 'selected':''}} >1 = Si</option>  
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width="44%"  style='width:44.6%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>201.<span
  style='mso-spacerun:yes'>  </span>Esclerosis Múltiples</span></p>
  </td>
  <td style='width:6.46%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="escleros" name="escleros" >
          <option value="0" {{ old("escleros", isset($data) ? $data->escleros : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("escleros", isset($data) ? $data->escleros : "")=="1" ? 'selected':''}} >1 = Si</option>   
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border:none;border-top:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>207.
  Aneurisma Cerebral</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="aneurism" name="aneurism" >
         <option value="0" {{ old("aneurism", isset($data) ? $data->aneurism : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("aneurism", isset($data) ? $data->aneurism : "")=="1" ? 'selected':''}} >1 = Si</option>   
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width="44%"  style='width:44.6%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>202.
  Tumor Cerebral que no es causa 1ra de demencia</span></p>
  </td>
  <td style='width:6.46%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="tumor" name="tumor" >
           <option value="0" {{ old("tumor", isset($data) ? $data->tumor : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("tumor", isset($data) ? $data->tumor : "")=="1" ? 'selected':''}} >1 = Si</option>  
      </SELECT>
  </td>
  <td width="42%"  style='width:42.66%;border:none;border-top:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p ><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>206.
  Soplo Carotídeo.</span></p>
  </td>
  <td style='border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="soplo_ca" name="soplo_ca" >
          <option value="0" {{ old("soplo_ca", isset($data) ? $data->soplo_ca : "")=="0" ? 'selected':''}} >0 = No</option>
          <option value="1" {{ old("soplo_ca", isset($data) ? $data->soplo_ca : "")=="1" ? 'selected':''}} >1 = Si</option>    
      </SELECT> 
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=4  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:6.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Señale en el recuadro otros diagnósticos neurológicos
  presentados por el paciente.</span></i></p>
  </td>
 </tr>
</table>

<p  style='line-height:150%'><span  style='font-family:
"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXX. EXISTENCIA DE
  CONDICIÓN QUE PODRÍA ESTAR ASOCIADA A BAJO RENDIMIENTO EN EMEM Y BOMC</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="44%"  style='width:44.28%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:Arial'><span style='mso-list:
  Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>NINGUNA CONDICIÓN.</span></b></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Analfabetismo
  o diferencias culturales mayores.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Deterioro
  auditivo.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Deterioro
  visual.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Impedimento
  motor.</span></p>
  </td>
  <td width="44%"  style='width:44.28%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Manejo
  inadecuado del idioma.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Poca
  colaboración.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Pruebas
  no realizadas.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Otras:
  ( _____________________________________ ).</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l13 level1 lfo10;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Mas
  de una condición.</span></p>
  </td>
  <td   style='width:11.44%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>

      <SELECT id="cond_eme" name="cond_eme" class="form-control">
            @for ($i = 0; $i < 10; $i++)
                   <option {{ old("cond_eme", isset($data) ? $data->cond_eme : "")=="$i" ? 'selected':''}} value="{{$i}}" > {{$i}}</option>
            @endfor    
      </SELECT>
   
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:6.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Señale en el recuadro<span style='mso-spacerun:yes'> 
  </span>”<st1:metricconverter ProductID="0”" w:st="on">0”</st1:metricconverter>
  en caso que no exista ninguna condición asociada al bajo rendimiento. En caso
  contrario, señale la causa indicando en el recuadro.</span></i></p>
  </td>
 </tr>
</table>

<p ><span >&nbsp;</span></p>

<table Table border=1 cellspacing=0 cellpadding=0 
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='background: black; border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>XXXI. CONDICIONES QUE IMPIDEN REALIZAR LA BATERÍA NEUROPSICOLÓGICA</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="44%"  style='width:44.28%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:Arial'><span style='mso-list:
  Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>NINGUNA CONDICIÓN.</span></b></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Afasia
  motora.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Afasia
  sensitiva.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Disartria
  severa.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Deterioro
  visual y auditivo severo</span></p>
  </td>
  <td width="44%"  style='width:44.28%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Hostilidad
  y poca colaboración.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Paciente
  Psicótico y/o conducta bizarra.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Demencia
  moderada a severa.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l7 level1 lfo9;
  tab-stops:list 18.0pt'><span style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  Arial'><span style='mso-list:Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Mas
  de una condición</span></p>
  </td>
  <td   style='width:11.44%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
 
  <p  align=center style='margin-top:3.0pt;text-align:center'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>210</span></p>

      <SELECT id="psicolog" name="psicolog" class="form-control">
            @for ($i = 0; $i < 9 ; $i++)
                   <option {{ (isset($data) && $data->psicolog ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor    
      </SELECT>
 
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p  align=center style='text-align:center'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:6.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Señale en el recuadro<span style='mso-spacerun:yes'> 
  </span>”<st1:metricconverter ProductID="0”" w:st="on">0”</st1:metricconverter>
  en caso que no exista alguna condición que le impida al sujeto<span
  style='mso-spacerun:yes'>  </span>presentar la batería neuropsicológica. En
  caso que no pueda presentar dicha batería, señale la causa indicando<span
  style='mso-spacerun:yes'>  </span>la razón en el recuadro.</span></i></p>
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
                     $("#state_country").val(response.data.state_country);
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


