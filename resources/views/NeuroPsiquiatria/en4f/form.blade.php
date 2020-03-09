@extends('layouts.main')
@section('title', 'EVALUACION CLINICA NEUROPSIQUIATRICA')
@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('en4f.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>EVALUACION CLINICA NEUROPSIQUIATRICA (Versión 4)</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('en4f.update',  $data->id) : route('en4f.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                     @include('patient.patient')
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:3.0pt thin-thick-small-gap windowtext;
 mso-border-insidev:3.0pt thin-thick-small-gap windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td width="24%" valign=top style='width:24.84%;border:double windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>1.
  N° de Estudio:<span style='mso-spacerun:yes'>                             
  </span></span> 
  <input class="form-control" id="hist_id" type="text"  name="hist_id" required readonly="">
  <span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td width="20%" valign=top style='width:20.38%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Fecha:
    <input id="fech_neu" type="date" class="form-control" name="fech_neu"  value='{{(isset($data))  ? date("Y-m-d", strtotime($data->fech_neu))  :date("Y-m-d") }}' requiered>

  </p>
  </td>
  <td width="20%" valign=top style='width:20.46%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Año
  del estudio:

    <input id="Ano_estudio" type="text" name="Ano_estudio"  value='{{(isset($data))  ? $data->Ano_estudio  : old("Ano_estudio") }}' maxlength="5">

</p>
  </td>
  <td width="34%" valign=top style='width:34.32%;border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>Evaluado
  por:  
    <input id="Evaluador" type="text" name="Evaluador"  value='{{(isset($data))  ? $data->Evaluador  : old("Evaluador") }}' maxlength="30" requiered>
</p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span  style='font-family:"Lucida Sans Unicode","sans-serif";
mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td width="100%" colspan=9 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><b style="color: white"> I. DATOS PERSONALES </b></span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="28%" colspan=2 valign=top style='width:28.34%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Nombres:

   <input class="form-control" id="first_name" type="text" name="first_name" required  readonly="">
</p>
  </td>
  <td width="28%" colspan=2 valign=top style='width:28.34%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Apellidos 

  <input class="form-control" id="last_name" type="text" name="last_name" required  readonly=""></p>
  </td>
  <td width="12%" colspan=2 valign=top style='width:12.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>2. Edad: 

   <input class="form-control" id="age" type="text" name="age" required  readonly="">
</p>
  </td>

  <td width="19%" colspan="3" valign=top style='width:19.1%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Fecha de Nacimiento:
    <input class="form-control" id="date_birth" type="text" name="date_birth"  readonly=""></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:19.55pt'>
  <td width="23%" valign=top style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>4. Raza:
    <input class="form-control" id="ethnicity" type="text" name="ethnicity"  readonly=""> </p>
  </td>
  <td width="33%" colspan=4 valign=top style='width:33.12%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>5.
  Estado Marital Actua

    <SELECT class="form-control" id="marita_a" name="marita_a" >
             <option {{ (isset($data) && $data->marita_a == 1) ? 'selected' : '' }} value="1" >1 = Casado/Concubinato</option>
             <option {{ (isset($data) && $data->marita_a == 2) ? 'selected' : '' }} value="2" >2 = Separado/Divorciado</option>
             <option {{ (isset($data) && $data->marita_a == 3) ? 'selected' : '' }} value="3" >3 = Soltero</option>
             <option {{ (isset($data) && $data->marita_a == 4) ? 'selected' : '' }} value="4" >4 = Viudo</option>
      </SELECT>
</p>
  </td>
 
  <td width="38%" colspan=4 valign=top style='width:38.22%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.55pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'> </span>6. Estado Marital Previo: </span>

    <SELECT class="form-control" id="marita_p" name="marita_p" >
             <option {{ (isset($data) && $data->marita_p == 1) ? 'selected' : '' }} value="1" >1 = Casado/Concubinato</option>
             <option {{ (isset($data) && $data->marita_p == 2) ? 'selected' : '' }} value="2" >2 = Separado/Divorciado</option>
             <option {{ (isset($data) && $data->marita_p == 3) ? 'selected' : '' }} value="3" >3 = Soltero</option>
             <option {{ (isset($data) && $data->marita_p == 4) ? 'selected' : '' }} value="4" >4 = Viudo</option>
      </SELECT>

</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width="23%" valign=top style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>7. Sabe Leer y escribir: </span></p>

      <SELECT id="leer" name="leer" >
             <option {{ (isset($data) && $data->leer == 0) ? 'selected' : '' }} value="0" >0 = Analfabeta </option>
             <option {{ (isset($data) && $data->leer == 1) ? 'selected' : '' }} value="2" >1 = Lee y escribe</option>
      </SELECT>
      
  </td>
  <td width="26%" colspan=2 valign=top style='width:26.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>8. Años aprobados de educación formal: </span></p>
   <input id="educacio" type="text" class="form-control" name="educacio"  value='{{(isset($data))  ? $data->educacio  : old("educacio") }}' maxlength="25">
  </td>
  <td width="49%" colspan=6 valign=top style='width:49.68%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
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
  <td width="23%" valign=top style='width:23.56%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Nombre del Informante:  
       <input id="nombre_inf" type="text" class="form-control" name="nombre_inf"  value='{{(isset($data))  ? $data->nombre_inf  : old("nombre_inf") }}' maxlength="30">
     </span></p>
  </td>
  <td width="26%" colspan=2 valign=top style='width:26.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Parentesco:  <input id="parentesco" type="text" class="form-control" name="parentesco"  value='{{(isset($data))  ? $data->parentesco  : old("parentesco") }}' maxlength="30">
</span></p>
  </td>
  <td width="24%" colspan=4 valign=top style='width:24.2%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Teléfono del Informante: 

    <input id="tlf_inf" type="text" class="form-control" name="tlf_inf"  value='{{(isset($data))  ? $data->tlf_inf  : old("tlf_inf") }}' maxlength="30">
</span></p>
  </td>
  <td width="25%" colspan=2 valign=top style='width:25.48%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>Teléfono del Paciente:

      <input id="tlf_part" type="text" class="form-control" name="tlf_part"  value='{{(isset($data))  ? $data->tlf_part  : old("tlf_part") }}' maxlength="30">
</span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=167 style='border:none'></td>
  <td width=34 style='border:none'></td>
  <td width=155 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=36 style='border:none'></td>
  <td width=54 style='border:none'></td>
  <td width=36 style='border:none'></td>
  <td width=45 style='border:none'></td>
  <td width=135 style='border:none'></td>
 </tr>
 
</table>

<p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td width="100%" colspan=4 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><b style="color: white">II. ANTECEDENTES
  PSIQUIATRICOS </b></span>
  </td>
 </tr>
 <tr style='border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;'>
  <td width="43%" valign=top style='border-left:none;'>
  <p class=MsoNormal style='margin-top:1.0pt'><span  style='font-size:
  8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'>10. Antecedentes de tratamiento u hospitalizaciones
  psiquiátricas</span></p>
 
  </td>
  <td width="5%" style='width:5.18%;border-top:none;border-left:none;
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
  <td width="46%" valign=top style='border-bottom:solid windowtext 1.0pt;'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:10.7pt;margin-bottom:.0001pt;text-indent:-7.1pt'><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>11. Especifique la modalidad de
  tratamiento</span></p>
 
  </td>
  <td width="4%" style='width:4.98%;border-top:none;border-left:none;
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

<p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
10.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>En
caso de ser afirmativo alguno de los antecedentes antes señalados, describa la historia del mismo:</span></p>

<table width="100%" border="1" class="table">
  <thead>
    <tr style="vertical-align: middle;text-align: center; background: black">
      <th colspan="2" style="color: white;">III. ANTECEDENTES PATOLOGICOS GENERALES</th>
    </tr>
  </thead>

  <tbody style="text-align: left;">
    <tr>
      <td width="50%">12. Tuberculosis pulmonar 
          <SELECT id="tubercul" name="tubercul" >
             <option {{ (isset($data) && $data->tubercul == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tubercul == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT></td
      >
      <td width="50%">16. Sífilis.  <SELECT id="sifilis" name="sífilis" >
             <option {{ (isset($data) && $data->sífilis == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sífilis == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            
      </SELECT></td>
    </tr>
     <tr>
      <td width="50%"  >13. Traumatismo craneoencefálico: 
         <br>1. ¿Se ha golpeado o ha sido golpeado en la cabeza? 
           <SELECT id="trau_cra131" name="trau_cra131" >
             <option {{ (isset($data) && $data->trau_cra131 == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->trau_cra131 == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            </SELECT>
        <br>  En caso de respuesta afirmativa a la pregunta anterior responda:
        <br>2. El golpe en la cabeza fue producto de:
         <SELECT id="trau_cra132" name="trau_cra132" class="form-control">
            @for ($i = 0; $i < 7; $i++)
                   <option {{ (isset($data) && $data->trau_cra132 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
         </SELECT>
        <br>1. Accidente automovilístico
        <br>2. Caída
        <br>3. Pelea/violencia domestica
        <br>4. Herida por arma de fuego
        <br>5. Actividades deportivas
        <br>6. Otros
        <br>3. ¿Perdió el conocimiento luego del golpe en la cabeza? 
        <SELECT id="trau_cra133" name="trau_cra133" >
             <option {{ (isset($data) && $data->trau_cra133 == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->trau_cra133 == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            </SELECT>
        <br>4. ¿Estuvo hospitalizado, tuvo que ir a la emergencia de la clínica o fue atendido por un doctor producto del golpe de la cabeza? 
           <SELECT id="trau_cra134" name="trau_cra134" >
             <option {{ (isset($data) && $data->trau_cra134 == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->trau_cra134 == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            </SELECT>

        </td>
      <td width="50%">
        
                5. ¿Ha experimentado alguno de los siguientes síntomas luego del golpe en la cabeza?   
                <br>  <SELECT id="trau_cra135" name="trau_cra135" class="form-control">
                        @for ($i = 0; $i < 11; $i++)
                               <option {{ (isset($data) && $data->trau_cra135 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
                        @endfor
                        
                     </SELECT> 
                <br>1. Dolor de cabeza
                <br>2. Mareo
                <br>3. Problemas auditivos y/o visuales.
                <br>4. Ansiedad
                <br>5. Depresión
                <br>6. Dificultad para concentrarse
                <br>7. Dificultad para recordar o aprender nueva información 
                <br>8. Dificultad para leer, escribir o hacer cálculos
                <br>9. Cambio en sus relaciones personales con otros
                <br>10. Dificultad para resolución de problemas

      </td>
    </tr>
     <tr>
      <td width="50%">14. Crisis Convulsivas no epilépticas  
        <SELECT id="no_epile" name="no_epile" >
             <option {{ (isset($data) && $data->no_epile == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->no_epile == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            </SELECT>
      </td>
      <td width="50%">17. Infecciones del SNC 
      <br> <SELECT id="snc" name="snc" class="form-control">
                        @for ($i = 0; $i < 4; $i++)
                               <option {{ (isset($data) && $data->snc ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
                        @endfor      
            </SELECT> 
      <br>1. Meningitis   2. Encefalitis   3. Poliomielitis
</td>
    </tr>
     <tr>
      <td width="50%">15. VIH <SELECT id="VIH" name="VIH" >
             <option {{ (isset($data) && $data->VIH == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->VIH == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
            </SELECT></td>
      <td width="50%">18. Infecciones generales    
                    <br> <SELECT id="Infe_general" name="Infe_general" class="form-control">
                        @for ($i = 0; $i < 5; $i++)
                               <option {{ (isset($data) && $data->Infe_general ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
                        @endfor      
            </SELECT>
                    <br>1. Dengue 2. Malaria/Paludismo 3. Mononucleosis 4. Hepatitis
      </td>
    </tr>
  </tbody>

  <tfoot>
     <tr>
       <td colspan="2">Indique en el recuadro 0 en caso de ausencia del antecedente y 1 en caso de positividad. En el apartado 13.2 y 13.5 indique en el recuadro la opción de la lista según el caso</td>
     </tr>
    
  </tfoot> 
  
</table>


<table width="100%" border="1" class="table">
  <thead>
    <tr style="vertical-align: middle;text-align: center; background: black">
      <th colspan="2" style="color: white;">IV. ANTECEDENTES DE CONDICIONES Y HÁBITOS CRÓNICOS</th>
    </tr>
  </thead>

  <tbody style="text-align: left;">
    <tr>
      <td width="50%">
                19. Uso de Drogas Recreacionales: 
                 <SELECT id="drogas" name="drogas" class="form-control">
                        @for ($i = 0; $i < 3; $i++)
                               <option {{ (isset($data) && $data->drogas ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
                        @endfor      
            </SELECT> 
                 <br>Tipo(s) de droga(s):  <input id="tipo_drog" type="text" class="form-control" name="tipo_drog"  value='{{(isset($data))  ? $data->tipo_drog  : old("tipo_drog") }}' maxlength="30">
                 <br>Desde que fecha consume:  <input id="fech_drog" type="date"  name="fech_drog"  value='{{(isset($data)) && strtotime($data->fech_drog) != false  ? date("Y-m-d", strtotime($data->fech_drog)) : "0001-01-01" }}' >
      </td>
      <td width="50%">
              30. Hábito Tabáquico: <SELECT id="tabaquis" name="tabaquis" class="form-control">
             <option {{ (isset($data) && $data->tabaquis == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tabaquis == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->tabaquis == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
            <br>Número de Cajetillas: <input id="cant_taba" type="text" class="form-control" name="cant_taba"  value='{{(isset($data))  ? $data->cant_taba  : old("cant_taba") }}' maxlength="10">
            <br>Desde que fecha consume: <input id="fech_taba" type="date"  name="fech_taba"  value='{{(isset($data)) && strtotime($data->fech_taba) != false  ? date("Y-m-d", strtotime($data->fech_taba)) : "0001-01-01" }}' >

      </td>
    </tr>

    <tr>
      <td width="50%">
        20. Ingesta de alcohol:  <SELECT id="alcohol" name="alcohol" class="form-control">
             <option {{ (isset($data) && $data->alcohol == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->alcohol == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->alcohol == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
         <br>Tipo(s) de bebida(s): <input id="tipo_alco" type="text" class="form-control" name="tipo_alco"  value='{{(isset($data))  ? $data->tipo_alco  : old("tipo_alco") }}' maxlength="30"> 
         <br>Cantidad consumida: <input id="cant_alco" type="text" class="form-control" name="cant_alco"  value='{{(isset($data))  ? $data->cant_alco  : old("cant_alco") }}' maxlength="10">
         <br>Frecuencia semanal:  <input id="freq_alco" type="text" class="form-control" name="freq_alco"  value='{{(isset($data))  ? $data->freq_alco  : old("freq_alco") }}' maxlength="10"> 
         Desde que fecha:  <input id="fech_alco" type="date"  name="fech_alco"  value='{{(isset($data)) && strtotime($data->fech_alco) != false  ? date("Y-m-d", strtotime($data->fech_alco)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
        
          31. Hipertensión Arterial: 
                <SELECT id="hta" name="hta" class="form-control">
             <option {{ (isset($data) && $data->hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
            <br>Desde que fecha: <input id="fech_hta" type="date"  name="fech_hta"  value='{{(isset($data)) && strtotime($data->fech_hta) != false  ? date("Y-m-d", strtotime($data->fech_hta)) : "0001-01-01" }}' >
            <br>Medicación:  <SELECT id="medi_hta" name="medi_hta" class="form-control">
             <option {{ (isset($data) && $data->medi_hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->medi_hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->medi_hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>
            <br>¿Mantiene la presión  arterial sistólica por debajo de 140 mmHg?  
             <SELECT id="val_hta" name="val_hta" class="form-control">
             <option {{ (isset($data) && $data->val_hta == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->val_hta == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->val_hta == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>   
      </td>
    </tr>

    <tr>
      <td width="50%">
          21. Enfermedad Coronaria: <SELECT id="coronari" name="coronari" class="form-control">
             <option {{ (isset($data) && $data->coronari == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes</option>
             <option {{ (isset($data) && $data->coronari == 1) ? 'selected' : '' }} value="1" >1 = Infarto al miocardio</option>
             <option {{ (isset($data) && $data->coronari == 2) ? 'selected' : '' }} value="2" >2 = Angina</option>
             <option {{ (isset($data) && $data->coronari == 3) ? 'selected' : '' }} value="3" >3 = TMT positivo</option>
         </SELECT>
              

      </td>
      <td width="50%">
        
          32. Insuficiencia Vascular Periférica: 
          <SELECT id="ins_vasc" name="ins_vasc" class="form-control">
             <option {{ (isset($data) && $data->ins_vasc == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes</option>
             <option {{ (isset($data) && $data->ins_vasc == 1) ? 'selected' : '' }} value="1" >1 = Venosa</option>
             <option {{ (isset($data) && $data->ins_vasc == 2) ? 'selected' : '' }} value="2" >2 = Arterial</option>
             <option {{ (isset($data) && $data->ins_vasc == 2) ? 'selected' : '' }} value="3" >3 = Mixta</option>
         </SELECT>
      </td>
    </tr>

    <tr>
      <td width="50%">
        
               22. Arritmias y/o valvulopatias: 
               <SELECT id="arritmia" name="arritmia" class="form-control">
                   <option {{ (isset($data) && $data->arritmia == 0) ? 'selected' : '' }} value="0" >0 = No</option>
                   <option {{ (isset($data) && $data->arritmia == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
                   <option {{ (isset($data) && $data->arritmia == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
               </SELECT>
               <br>Desde que fecha: 
                  <input id="arritmia_fech" type="date"  name="arritmia_fech"  value='{{(isset($data)) && strtotime($data->arritmia_fech) != false  ? date("Y-m-d", strtotime($data->arritmia_fech)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
        33. Hipotiroidismo. 
        <SELECT id="hipotiro" name="hipotiro" class="form-control">
             <option {{ (isset($data) && $data->hipotiro == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipotiro == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipotiro == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
      </td>
    </tr>

    <tr>
      <td width="50%">
        23. Insuficiencia Cardiaca Congestiva: <SELECT id="ins_card" name="ins_card" class="form-control">
             <option {{ (isset($data) && $data->ins_card == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ins_card == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->ins_card == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
         <br>Desde que fecha: <input id="fech_ins_card" type="date"  name="fech_ins_card"  value='{{(isset($data)) && strtotime($data->fech_ins_card) != false  ? date("Y-m-d", strtotime($data->fech_ins_card)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
        34. Hipertiroidismo  <SELECT id="hipertir" name="hipertir" class="form-control">
             <option {{ (isset($data) && $data->hipertir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hipertir == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->hipertir == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>
      </td>
    </tr>

    <tr>
      <td width="50%">
        
       24. Diabetes mellitus.    

        <SELECT id="diab_mel" name="diab_mel" class="form-control">
             <option {{ (isset($data) && $data->diab_mel == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->diab_mel == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->diab_mel == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>

            <span>       </span>Tipo:  
            <input id="tipo_diab_mel" type="text" class="form-control" name="tipo_diab_mel"  value='{{(isset($data))  ? $data->tipo_diab_mel  : old("tipo_diab_mel") }}' maxlength="30">

       <br>Desde que fecha: <input id="fech_diab_mel" type="date"  name="fech_diab_mel"  value='{{(isset($data)) && strtotime($data->fech_diab_mel) != false  ? date("Y-m-d", strtotime($data->fech_diab_mel)) : "0001-01-01" }}' >

       <br>Medicación: <input id="medi_diab_mel" type="text" class="form-control" name="medi_diab_mel"  value='{{(isset($data))  ? $data->medi_diab_mel  : old("medi_diab_mel") }}' maxlength="30">

       <br>¿Mantiene los valores de azúcar en sangre por debajo de 126 mg/dl? 
          <SELECT id="nivel_glic" name="nivel_glic" class="form-control">
             <option {{ (isset($data) && $data->nivel_glic == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->nivel_glic == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
         </SELECT>


      </td>
      <td width="50%">
        
              35. Dislipidemia.      <SELECT id="dislipid" name="dislipid" class="form-control">
                                       <option {{ (isset($data) && $data->dislipid == 0) ? 'selected' : '' }} value="0" >0 = No</option>
                                       <option {{ (isset($data) && $data->dislipid == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
                                       <option {{ (isset($data) && $data->dislipid == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
                                   </SELECT>

              <br> 1. Hipercolesterolemia  
              <br>2. Hipertrigliceridemia
              <br>3. Mixta    

                <input id="tipo_dislipid" type="text" class="form-control" name="tipo_dislipid"  value='{{(isset($data))  ? $data->tipo_dislipid  : old("tipo_dislipid") }}' maxlength="30">

               <br>     Desde que fecha: <input id="fech_dislipid" type="date"  name="fech_dislipid"  value='{{(isset($data)) && strtotime($data->fech_dislipid) != false  ? date("Y-m-d", strtotime($data->fech_dislipid)) : "0001-01-01" }}' >

               <br>     Medicación: 
               <SELECT id="medi_dislipid" name="medi_dislipid" class="form-control">
                     <option {{ (isset($data) && $data->medi_dislipid == 0) ? 'selected' : '' }} value="0" >0 = No</option>
                     <option {{ (isset($data) && $data->medi_dislipid == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
                     <option {{ (isset($data) && $data->medi_dislipid == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
              </SELECT>

               <br>     ¿Mantiene los valores de colesterol total por debajo de 200 mg/dl? val_col    
              <br>¿Mantiene los valores de triglicéridos por debajo de 150 mg/dl? val_trig



      </td>
    </tr>

    <tr>
      <td width="50%">
             26. Ulcera péptica y/o gastritis crónica: 
             <SELECT id="ulcera" name="ulcera" class="form-control">
               <option {{ (isset($data) && $data->ulcera == 0) ? 'selected' : '' }} value="0" >0 = No</option>
               <option {{ (isset($data) && $data->ulcera == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
               <option {{ (isset($data) && $data->ulcera == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
           </SELECT>

            <br>Desde que fecha: 

            <input id="fech_ulcera" type="date"  name="fech_ulcera"  value='{{(isset($data)) && strtotime($data->fech_ulcera) != false  ? date("Y-m-d", strtotime($data->fech_ulcera)) : "0001-01-01" }}' >
      </td>
      <td width="50%">
          37. Epilepsia: 
           <SELECT id="epileps" name="epileps" class="form-control">
             <option {{ (isset($data) && $data->epileps == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->epileps == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->epileps == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>

        <br>Desde que fecha:  <input id="fech_epileps" type="date"  name="fech_epileps"  value='{{(isset($data)) && strtotime($data->fech_epileps) != false  ? date("Y-m-d", strtotime($data->fech_epileps)) : "0001-01-01" }}' >
      </td>
    </tr>

    <tr>
      <td width="50%">
          27. Enfermedad Broncopulmonar obstructiva crónica: 
          <SELECT id="broncop" name="broncop" class="form-control">
             <option {{ (isset($data) && $data->broncop == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->broncop == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->broncop == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
         </SELECT>

          <br>Tipo: 1. Enfisema  2. Bronquitis crónica   3. Mixta 
          <br> <input id="tip_broncop" type="text" class="form-control" name="tip_broncop"  value='{{(isset($data))  ? $data->tip_broncop  : old("tip_broncop") }}' maxlength="30">
          <br>Desde que fecha:  <input id="fech_broncop" type="date"  name="fech_broncop"  value='{{(isset($data)) && strtotime($data->fech_broncop) != false  ? date("Y-m-d", strtotime($data->fech_broncop)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
         38. Cáncer.     
         <SELECT id="cancer" name="cancer" class="form-control">
             <option {{ (isset($data) && $data->cancer == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cancer == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->cancer == 2) ? 'selected' : '' }} value="2" >2 = Padece actualmente tiene</option>
        </SELECT>

             Tipo:  <input id="tipo_cancer" type="text" class="form-control" name="tipo_cancer"  value='{{(isset($data))  ? $data->tipo_cancer  : old("tipo_cancer") }}' maxlength="30">
        <br>Tratamiento: 1. Quimioterapia    2. Radioterapia   3. Ambas
         <SELECT id="tto_cancer" name="tto_cancer" class="form-control">
             <option {{ (isset($data) && $data->tto_cancer == 1) ? 'selected' : '' }} value="1" >1</option>
             <option {{ (isset($data) && $data->tto_cancer == 2) ? 'selected' : '' }} value="2" >2</option>
             <option {{ (isset($data) && $data->tto_cancer == 2) ? 'selected' : '' }} value="3" >3</option>
        </SELECT>
        <br> Desde que fecha: <input id="fech_cancer" type="date"  name="fech_cancer"  value='{{(isset($data)) && strtotime($data->fech_cancer) != false  ? date("Y-m-d", strtotime($data->fech_cancer)) : "0001-01-01" }}' >

      </td>
    </tr>

    <tr>
      <td width="50%">
        28. Artritis u Osteoartrosis: <SELECT id="artritri" name="artritri" class="form-control">
             <option {{ (isset($data) && $data->artritri == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->artritri == 1) ? 'selected' : '' }} value="1" >1 = Tuvo en el pasado</option>
             <option {{ (isset($data) && $data->artritri == 2) ? 'selected' : '' }} value="2" >2: Padece actualmente la condicion.</option>
         </SELECT>
        <br>Desde que fecha: <input id="fech_artritri" type="date"  name="fech_artritri"  value='{{(isset($data)) && strtotime($data->fech_artritri) != false  ? date("Y-m-d", strtotime($data->fech_artritri)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
         39. Sobrepeso u Obesidad: <SELECT id="obesidad" name="obesidad" class="form-control">
             <option {{ (isset($data) && $data->obesidad == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->obesidad == 1) ? 'selected' : '' }} value="1" >1: Padecio la condicion en el pasado</option>
             <option {{ (isset($data) && $data->obesidad == 2) ? 'selected' : '' }} value="2" >2: Padece actualmente la condicion.</option>
         </SELECT>

        <br>Desde que fecha:  <input id="fech_obesity" type="date"  name="fech_obesity"  value='{{(isset($data)) && strtotime($data->fech_obesity) != false  ? date("Y-m-d", strtotime($data->fech_obesity)) : "0001-01-01" }}' >

      </td>
    </tr>

    <tr>
      <td width="50%">
          29. Revascularización cardiaca:  <SELECT id="revasc" name="revasc" class="form-control">
             <option {{ (isset($data) && $data->revasc == 0) ? 'selected' : '' }} value="0" >0</option>
             <option {{ (isset($data) && $data->revasc == 1) ? 'selected' : '' }} value="1" >1</option>
             <option {{ (isset($data) && $data->revasc == 2) ? 'selected' : '' }} value="2" >2</option>
             <option {{ (isset($data) && $data->revasc == 3) ? 'selected' : '' }} value="3" >3</option>
         </SELECT>
           <br>1. Cateterismo cardiaco diagnostico. 
           <br>2. Cateterismo cardiaco con stent.
           <br>3. Angioplastia o bypass. 
           <br>  Desde que fecha:   <input id="fech_revasc" type="date"  name="fech_revasc"  value='{{(isset($data)) && strtotime($data->fech_revasc) != false  ? date("Y-m-d", strtotime($data->fech_revasc)) : "0001-01-01" }}' >

      </td>
      <td width="50%">
        40. Glaucoma glaucoma
         <SELECT id="glaucoma" name="glaucoma" class="form-control">
             <option {{ (isset($data) && $data->glaucoma == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->glaucoma == 1) ? 'selected' : '' }} value="1" >1: Padecio la condicion en el pasado</option>
             <option {{ (isset($data) && $data->glaucoma == 2) ? 'selected' : '' }} value="2" >2: Padece actualmente la condicion.</option>
         </SELECT>

        <br>Desde que fecha:  <input id="fech_glaucoma" type="date"  name="fech_glaucoma"  value='{{(isset($data)) && strtotime($data->fech_glaucoma) != false  ? date("Y-m-d", strtotime($data->fech_glaucoma)) : "0001-01-01" }}' >

      </td>
    </tr>

    <tr>
      <td width="50%">
       

      </td>
      <td width="50%">
        
        <br> 41. Otros: otros_a    
        <input id="des_otros_a" type="text" class="form-control" name="des_otros_a"  value='{{(isset($data))  ? $data->des_otros_a  : old("des_otros_a") }}' maxlength="30">
        <br> Desde que fecha:  
        <input id="fech_otros_a" type="date"  name="fech_otros_a"  value='{{(isset($data)) && strtotime($data->fech_otros_a) != false  ? date("Y-m-d", strtotime($data->fech_otros_a)) : "0001-01-01" }}' >

      </td>
    </tr>

  </tbody>

 <tfoot>
     <tr>
       <td colspan="2">Indique en el recuadro 0 en caso de ausencia del antecedente y 1 en caso de haber padecido en el pasado la condición y ya no padecerla y 2 en caso de padecer actualmente la enfermedad</td>
     </tr>
    
  </tfoot> 
  
</table>

<table border="1" cellpadding="0" cellspacing="0" style="width:100.0%;border-collapse:collapse;border:none;" width="100%">
  <tbody>
    <tr>
      <td colspan="3" style="width: 100%;border: 1pt solid windowtext;background: black;padding: 0cm 3.5pt;vertical-align: top;" valign="top" width="100%">
        <h2 style="margin:0cm;margin-bottom:.0001pt;text-align:center;font-size:13px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:white;"><span style="font-family:&quot;Lucida Sans Unicode&quot;,&quot;sans-serif&quot;;">VI. ANTECEDENTES FAMILIARES (SEGUNDO GRADO)</span>
      </td>
    </tr>
    <tr>
      <td style="width: 45.9%;border-top: none;border-left: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-right: none;padding: 0cm 3.5pt;height: 70.85pt;vertical-align: top;" valign="top" width="45.91836734693877%">
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;margin-top:3.0pt;"><sup><span style="font-size:11px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;">50.</span></sup><span style="font-size:11px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;">&nbsp;Antecedentes familiares de demencia <strong><span >
        
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
        
        </span></strong></span></p>
        
      </td>
      <td style="width:6.46%;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:70.85pt;" width="6.122448979591836%">
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;margin-top:2.0pt;text-align:center;"><span style="font-size:11px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;;">&nbsp;</span></p>
      </td>
      <td style="width: 47.64%;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 3.5pt;height: 70.85pt;vertical-align: top;" valign="top" width="47.95918367346939%">
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;margin-top:2.0pt;"><sup><span style="font-size:11px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;">51.</span></sup><span style="font-size:11px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;">&nbsp;Antecedentes familiares de 2do de ACV &nbsp; &nbsp; &nbsp; &nbsp;
        
        <SELECT id="antc_acv" name="antc_acv" class="form-control">
             <option {{ (isset($data) && $data->antc_acv == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->antc_acv == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
        
        </span></p>
       
      </td>
    </tr>
    <tr>
      <td colspan="3" style="width: 100%;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 3.5pt;vertical-align: top;" valign="top" width="100%">
        <p style="margin:0cm;margin-bottom:.0001pt;font-size:13px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;margin-left:10.8pt;text-align:justify;text-indent:  -7.1pt;"><em><span style="font-size:8px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;">50. &nbsp;Indique en el recuadro el número del antecedente descrito por el paciente ó informado por el familiar. En caso de ser positivo el antecedente de demencia, describa en las líneas adyacentes si el o los familiares afectados por esta condición están vivos o muertos. 51 Indique en &nbsp; &nbsp; el &nbsp;recuadro 0 en caso de ausencia del antecedente y 1 en caso de obtenerse una respuesta afirmativa.</span></em></p>
      </td>
    </tr>
  </tbody>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif";
  font-weight:normal'>VII. MEDICACIÓN ACTUALMENTE RECIBIDA</span></b>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>52.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Warfarina: Anasmol, Coumadin. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="warfarin" name="warfarin" class="form-control">
             <option {{ (isset($data) && $data->warfarin == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->warfarin == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->warfarin == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
 
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>64.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Otros antihipertensivos: Aldomet,
  Apresolina, Hyperium, Natrilix, Minpres </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

  <SELECT id="otr_anth" name="otr_anth" class="form-control">
             <option {{ (isset($data) && $data->otr_anth == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->otr_anth == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->otr_anth == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>76.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Derivados del Comezuelo de Centeno:
  Hydergina, Astergina, Dihydergot.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
      <SELECT id="deriv_co" name="deriv_co" class="form-control">
             <option {{ (isset($data) && $data->deriv_co == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->deriv_co == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->deriv_co == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>53.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>AINES: Salicilatos, Airtal, Artem, Indocid,
  Buprifen, Ciclofast, Flexilar, Ibuprofen</span></p>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:red'>&nbsp;</span></b></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
   <SELECT id="aines" name="aines" class="form-control">
             <option {{ (isset($data) && $data->aines == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->aines == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->aines == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>65.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Otros Antiarritmicos: Attansh, Quinidex,
  Trangorex, Diacona, Natidina </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
  <SELECT id="ot_antia" name="ot_antia" class="form-control">
             <option {{ (isset($data) && $data->ot_antia == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->ot_antia == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->ot_antia == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>77.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Anticonvulsivantes: Epamin, Tegretol,
  Fenobarbital, Carbamazepina.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
      <SELECT id="anticonv" name="anticonv" class="form-control">
             <option {{ (isset($data) && $data->anticonv == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->anticonv == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->anticonv == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>54. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Antiagregantes plaquetarios: Ibustrin,
  5ersantin, Ticlid,Escotrin, Ticiopin,Disgren.</span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

       <SELECT id="anti_plq" name="anti_plq" class="form-control">
             <option {{ (isset($data) && $data->anti_plq == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->anti_plq == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->anti_plq == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>66.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Hipolipémicos: Dislipin, Lipobay, Lipitor,
  Lopid, Pravacol, Hiperlipen, </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="hipolipe" name="hipolipe" class="form-control">
             <option {{ (isset($data) && $data->hipolipe == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->hipolipe == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->hipolipe == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>78. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Inhibidores de la Acetil Colinesterasa:
  Cognex, Exelon, Rivastigmina, Eranz, Proneurax</span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
      <SELECT id="inhib_ac" name="inhib_ac" class="form-control">
             <option {{ (isset($data) && $data->inhib_ac == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->inhib_ac == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->inhib_ac == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>55. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Esteroides: Prednisona, Dispropan,
  Betasona, Medrol, Vitason, Kenacort </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="esteroid" name="esteroid" class="form-control">
             <option {{ (isset($data) && $data->esteroid == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->esteroid == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->esteroid == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>67.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Broncodilatadores: Bremac, Bucien,
  Salbutamol, Teofilina, Brodilan, Bretol<b><span style='color:red'> </span></b></span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'>
      <SELECT id="broncodi" name="broncodi" class="form-control">
             <option {{ (isset($data) && $data->broncodi == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->broncodi == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->broncodi == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </p>
  
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>79. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Neuroactivadores: Arcalion, Breinox,
  Nootropil, Fitina, Ritalin, Acon, Bonifen. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'>
  
       <SELECT id="neuroact" name="neuroact" class="form-control">
             <option {{ (isset($data) && $data->neuroact == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->neuroact == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->neuroact == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  
   </p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>56.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Insulina: Humulin, Atrapic, Lenda, NHP,
  Monotal, Premezclada, Cristalina<b><span style='color:red'>. </span></b></span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT id="insulina" name="insulina" class="form-control">
             <option {{ (isset($data) && $data->insulina == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->insulina == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->insulina == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>68.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Estrógenos: Premarin, Ovestin, Estracomb,
  Climenen, Cliane, Menores. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="estrogen" name="estrogen" class="form-control">
             <option {{ (isset($data) && $data->estrogen == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->estrogen == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->estrogen == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>80. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Protectores Gástricos: Bloqueadores H2 y de
  Bomba de Protones, <b>Antiacidos</b>: omeprazol, pantoprazol, esoprazol.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="prot_gas" name="prot_gas" class="form-control">
             <option {{ (isset($data) && $data->prot_gas == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->prot_gas == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->prot_gas == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>57.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Hipoglicemiantes orales: Amaril, Glida,
  Dabinese, Diamicron, Euglucon,Glucobay. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

      <SELECT id="hipoglis" name="hipoglis" class="form-control">
             <option {{ (isset($data) && $data->hipoglis == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->hipoglis == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->hipoglis == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>69.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Sub-Tiroideos: Thyrax, Thestan, Cynomel.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
  <SELECT id="tiroide" name="tiroide" class="form-control">
             <option {{ (isset($data) && $data->tiroide == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->tiroide == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->tiroide == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>81.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Antivaricoso: Daflon, Deoxical, Verutil,
  Doxlum, Glyvenol, Flavol P4, Veglycin.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="antivari" name="antivari" class="form-control">
             <option {{ (isset($data) && $data->antivari == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->antivari == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->antivari == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>58.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Digitalico/Inotrópicos: Digoxina, Lanicor,
  Lanitop, Dobutrek, INOCAR, Rascordin. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="digital" name="digital" class="form-control">
             <option {{ (isset($data) && $data->digital == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->digital == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->digital == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>70.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Anticolinergéticos: Mestinol, Eostigmina,
  Prostigmine.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <SELECT id="anticoli" name="anticoli" class="form-control">
             <option {{ (isset($data) && $data->anticoli == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->anticoli == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->anticoli == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>82.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Antioxidantes: Vitamina C, Vitamina E,
  Melatonina. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <SELECT id="antiox" name="antiox" class="form-control">
             <option {{ (isset($data) && $data->antiox == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->antiox == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->antiox == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>59.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Diureticos: Dieudrin, Lasix, Moduretic,
  Furosemida, Diclotride, Furdiuren, Fromil.</span><span> </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="diuretic" name="diuretic" class="form-control">
             <option {{ (isset($data) && $data->diuretic == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->diuretic == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->diuretic == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>71.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Dopaminergéticos: Akineton, Madopar,
  Sinemet, Celance.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="dopamine" name="dopamine" class="form-control">
             <option {{ (isset($data) && $data->dopamine == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->dopamine == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->dopamine == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>83.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Complejo B: Vitaminas B1, B2, B6, B12,
  Folato.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <SELECT id="comple_b" name="comple_b" class="form-control">
             <option {{ (isset($data) && $data->comple_b == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->comple_b == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->comple_b == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>60. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Nitratos: Monomack, Isordil, Planta,
  Isomack, Nitroderm, Deponit.<b><span style='color:red'> </span></b></span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="nitratos" name="nitratos" class="form-control">
             <option {{ (isset($data) && $data->nitratos == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->nitratos == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->nitratos == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>72.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Antidepresivos: Litio, Efexor, Prozac,
  Zoloft, Paxil, Trittico, Trofanil, Luvox, Escitalopram. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="antidepr" name="antidepr" class="form-control">
             <option {{ (isset($data) && $data->antidepr == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->antidepr == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->antidepr == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>84.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Otras Vitaminas y/o Minerales: Vitaminas A,
  D, Mg, Fe, Cu, Ca, Zn.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="otra_vit" name="otra_vit" class="form-control">
             <option {{ (isset($data) && $data->otra_vit == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->otra_vit == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->otra_vit == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span lang=IT style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>61.</span></sup><span lang=IT style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Calcio Antag: Adalat, Amloc, Conducil,
  Manidon, Nimotop, Tensopin, Tropocer. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="calc_ant" name="calc_ant" class="form-control">
             <option {{ (isset($data) && $data->calc_ant == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->calc_ant == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->calc_ant == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>73.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Antipsicóticos: Haldol, Risperdal, Zyprexa,
  Moditen, Sinogan, Orap, Quetiapina.  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="antipsic" name="antipsic" class="form-control">
             <option {{ (isset($data) && $data->antipsic == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->antipsic == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->antipsic == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>85. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Memantina, acetilcolina. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <SELECT id="Meman" name="Meman" class="form-control">
             <option {{ (isset($data) && $data->Meman == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->Meman == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->Meman == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>62.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Beta Bloqueadores: Atenolol, Beloc,
  Blokium, Inderal, Corgard, Trandate, Lopresor, bisoprolol, nebivolol. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="beta_blq" name="beta_blq" class="form-control">
             <option {{ (isset($data) && $data->beta_blq == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->beta_blq == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->beta_blq == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>74.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Benzodiazepinas: Ativan, Lexotanil, Somese,
  Tafil, Talema, Tranxen, Valium, Rivotril,  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      
      <SELECT id="benzodia" name="benzodia" class="form-control">
             <option {{ (isset($data) && $data->benzodia == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->benzodia == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->benzodia == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>

  </td>
  <td width="23%" valign=top style='width:23.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>86. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Otros medicamentos. </span></p>
  </td>
  <td width="10%" valign=top style='width:10.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="otro_med" name="otro_med" class="form-control">
             <option {{ (isset($data) && $data->otro_med == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->otro_med == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->otro_med == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="24%" valign=top style='width:24.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>63.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>IECA o AT2-Bloq: Altace, Coversyl, Reminal,
  Losartan, Candesartan. </span></p>
  </td>
  <td width="9%" style='width:9.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT id="ieca" name="ieca" class="form-control">
             <option {{ (isset($data) && $data->ieca == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->ieca == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->ieca == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="22%" valign=top style='width:22.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>75.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Narcóticos  </span></p>
  </td>
  <td width="10%" valign=top style='width:10.14%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="narcotic" name="narcotic" class="form-control">
             <option {{ (isset($data) && $data->narcotic == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->narcotic == 1) ? 'selected' : '' }} value="1" >1: Si en el pasado</option>
             <option {{ (isset($data) && $data->narcotic == 2) ? 'selected' : '' }} value="2" >2: Si en el presente</option>
      </SELECT>
  </td>
  <td width="33%" colspan=2 valign=top style='width:33.86%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
<span>Indique  en el recuadro 0 en caso de
  no estar consumiendo el fármaco durante las dos ultimas semanas, 2  en el
  caso de consumirlo regularmente solo en la actualidad, 1 en caso de
  consumirlo regularmente solo en el pasado (Antes del cuadro cognitivo). En
  caso de consumir el medicamento escriba además, debajo de este,  el tiempo
  que tiene consumiendo el medicamento señalado. En caso de que el individuo
  consuma polivitaminicos, marcar los recuadros 82 al  86</span>
  </td>
 </tr>
</table>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='color: white; font-family:"Lucida Sans Unicode","sans-serif"'>VIII.
  ANTECEDENTES HOSPITALARIOS</span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="29%" valign=top style='width:29.08%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;text-align:justify'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>87.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Numero de
  Intervenciones quirúrgicas</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;text-align:justify'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>     que requirieron
  anestesia general. </span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="inter_me" type="text" class="form-control" name="inter_me"  value='{{(isset($data))  ? $data->inter_me  : old("inter_me") }}' maxlength="5">
  </td>
  <td width="27%" valign=top style='width:27.16%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>88. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Si hay
  problema de memoria ¿La</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Intervención se asocio al problema? </span></p>
  </td>
  <td width="5%" valign=top style='width:5.26%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="probl_memori" name="probl_memori" class="form-control">
             <option {{ (isset($data) && $data->probl_memori == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->probl_memori == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width="28%" valign=top style='width:28.36%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>89. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Numero de
  Ingresos hospitalarios por causas no quirúrgicas.</span></p>
 
  </td>
  <td width="4%" valign=top style='width:4.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    <input id="ingr_hos" type="text" class="form-control" name="ingr_hos"  value='{{(isset($data))  ? $data->ingr_hos  : old("ingr_hos") }}' maxlength="5">
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span>Indique en el recuadro el número de intervenciones quirúrgicas
  o ingresos hospitalarios por causas no quirúrgicas según sea el caso. En caso
  de ausencia de antecedentes, escriba cero en el recuadro.</span>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='color: white font-family:"Lucida Sans Unicode","sans-serif"'>IX.
  ANTECEDENTES MENSTRUALES (SOLO PARA SER LLENADO EN MUJERES)</span></b>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="45%" colspan=2 valign=top style='width:45.9%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>90.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Ha tenido
  la menopausia o ha sido esterilizada quirúrgicamente. 
  
      <SELECT id="menopaus" name="menopaus" class="form-control">
             <option {{ (isset($data) && $data->menopaus == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->menopaus == 1) ? 'selected' : '' }} value="1" >1: Si</option>
             <option {{ (isset($data) && $data->menopaus == '-88') ? 'selected' : '' }} value="-88" >-88: No aplica </option>
      </SELECT>

  </span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
  </td>
  <td width="43%" rowspan=2 valign=top style='width:43.96%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>92.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Tiempo
  transcurrido desde la menopausia. 
  
      <SELECT id="tiem_men" name="tiem_men" class="form-control">
             <option {{ (isset($data) && $data->tiem_men == 0) ? 'selected' : '' }} value="0" >0 = No ha tenido la menopausia</option>
             <option {{ (isset($data) && $data->tiem_men == 1) ? 'selected' : '' }} value="1" >1: Menos de 5 años</option>
             <option {{ (isset($data) && $data->tiem_men == 2) ? 'selected' : '' }} value="2" >2: Entre 5 y 10 años</option>
             <option {{ (isset($data) && $data->tiem_men == 3) ? 'selected' : '' }} value="3" >3: Mas de 10 años</option>
             <option {{ (isset($data) && $data->tiem_men == '-88') ? 'selected' : '' }} value="-88" >-88: No aplica </option>
      </SELECT>
  
  </span></p>
 
  </td>
  <td width="4%" rowspan=2 valign=top style='width:4.98%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
 
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="32%" valign=top style='width:32.96%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>91.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Fecha del
  último período Menstrual 
  
  <input id="fech_men" type="date"  name="fech_men"  value='{{(isset($data)) && strtotime($data->fech_men) != false  ? date("Y-m-d", strtotime($data->fech_men)) : "0001-01-01" }}' >

  </span></p>
  </td>
  <td width="18%" colspan=2 valign=top style='width:18.1%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>Año:</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <span>90. Indique en el recuadro 0 en caso de no haber tenido la
  menopausia y 1 en el caso contrario. 91 Indique el numero del mes y el año
  (numero completo). 92. Seleccione la alternativa mejor ajstada.</span>
  </td>
 </tr>
 <tr height=0>
  <td width=233 style='border:none'></td>
  <td width=91 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=311 style='border:none'></td>
  <td width=35 style='border:none'></td>
 </tr>
</table>

<p class=MsoNormal><span style='font-family:"Arial","sans-serif"'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='color: white; font-family:"Lucida Sans Unicode","sans-serif"'>X.
  ESTUDIOS COMPLEMENTARIOS</span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="21%" valign=top style='width:21.32%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>93.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Tomografía
  Craneal. <b><span style='color:red'>tomocran</span></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="tomocran" name="tomocran" class="form-control">
             <option {{ (isset($data) && $data->tomocran == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tomocran == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->tomocran == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->tomocran == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
  <td width="19%" valign=top style='width:19.4%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>94 </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Resonancia
  Magnética</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>resonanc</span></b></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <SELECT id="resonanc" name="resonanc" class="form-control">
             <option {{ (isset($data) && $data->resonanc == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->resonanc == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->resonanc == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->resonanc == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
  <td width="19%" valign=top style='width:19.4%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>95.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>
  Electroencefalografía.</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>eeg</span></b></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="eeg" name="eeg" class="form-control">
             <option {{ (isset($data) && $data->eeg == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->eeg == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->eeg == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->eeg == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>
  </td>
  <td width="19%" valign=top style='width:19.4%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>96.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Electromiografía</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>   
  elecmiog</span></b></p>
  </td>
  <td width="4%" valign=top style='width:4.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="elecmiog" name="elecmiog" class="form-control">
             <option {{ (isset($data) && $data->elecmiog == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->elecmiog == 1) ? 'selected' : '' }} value="1" >1 = Resultados normales</option>
             <option {{ (isset($data) && $data->elecmiog == 2) ? 'selected' : '' }} value="2" >2 = Resultados anormales</option>
             <option {{ (isset($data) && $data->elecmiog == 3) ? 'selected' : '' }} value="3" >3 = Desconoce resultados</option>
      </SELECT>

  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif";color:black'>Indique
  en cada recuadro 0 si no se ha hecho el examen, <b>1 si los resultados del
  examen son normales</b>, <b>2 si el resultado fue anormal</b>, y 3 si
  desconoce los resultados del examen. En caso de anormalidad marque los ítems
  en los cuales residió la anormalidad y  describa en el espacio dispuesto a
  continuación los hallazgos que puede visualizar en el estudio.</span></i></p>
  </td>
 </tr>
</table>

<br>

<table style="border-collapse: collapse;" width="100%">
  <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=7 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black'>
  <span  style='color: white; font-family:"Lucida Sans Unicode","sans-serif"'>XI. ANTECEDENTES DE ENFERMEDAD CEREBROVASCULAR</span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:12.25pt'>
  <td width="48%" colspan=4 valign=top style='width:48.98%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:12.25pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-family:
  "Arial","sans-serif";'> </span><sup><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>97. </span></sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Antecedentes de
  enfermedad cerebrovascular. 
    
        <SELECT id="acv" name="acv" class="form-control">
             <option {{ (isset($data) && $data->acv == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->acv == 1) ? 'selected' : '' }} value="1" >1: Si</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="34%" valign=top style='width:34.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.25pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Parálisis de los miembros            <b><span
  style='color:red'>miem </span></b>                                    <b> </b></span></p>
  </td>
  <td width="7%" valign=top style='width:7.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.25pt'>
  <b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'> IZQ</span></b>

      <SELECT id="miem_iz" name="miem_iz" class="form-control">
             <option {{ (isset($data) && $data->miem_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->miem_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>

  </td>
  <td width="8%" valign=top style='width:8.48%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.25pt'>
  <b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>DER</span></b>
   <SELECT id="miem_der" name="miem_der" class="form-control">
             <option {{ (isset($data) && $data->miem_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->miem_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
    </SELECT>

  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:26.6pt'>
  <td width="28%" valign=top style='width:28.56%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>98.</span></sup><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Fecha del
  ultimo evento cerebrovascular   

      <input id="fecha_acv" type="date"  name="fecha_acv"  value='{{(isset($data)) && strtotime($data->fecha_acv) != false  ? date("Y-m-d", strtotime($data->fecha_acv)) : "0001-01-01" }}' >

</span></p>
  </td>
  <td width="7%" valign=top style='width:7.24%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mes:</span></p>
  </td>
  <td width="13%" colspan=2 valign=top style='width:13.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
  <span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'> Año:</span>
  </td>
  <td width="34%" valign=top style='width:34.72%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
   <span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Perdida o alteraciones de la
  sensibilidad en miembros o Tronco  </span>
  </td>
  <td width="7%" valign=top style='width:7.82%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> IZQ</span></b></p>
  <SELECT id="sens_iz" name="sens_iz" class="form-control">
             <option {{ (isset($data) && $data->sens_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sens_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width="8%" valign=top style='width:8.48%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.6pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>DER</span></b></p>
   <SELECT id="sens_der" name="sens_der" class="form-control">
             <option {{ (isset($data) && $data->sens_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sens_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.4pt'>
  <td width="41%" colspan=3 valign=top style='width:41.86%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:16.4pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Perdida o alteración de la
  conciencia  
    
      <SELECT id="perd_con" name="perd_con" class="form-control">
             <option {{ (isset($data) && $data->perd_con == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->perd_con == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  </span></p>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:16.4pt'>
  
  </td>
  <td width="51%" colspan=3 valign=top style='width:51.02%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:16.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Enfermedad cerebrovascular asociada a
  intervención quirúrgica 
  
        <SELECT id="acv_quir" name="acv_quir" class="form-control">
             <option {{ (isset($data) && $data->acv_quir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->acv_quir == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
        </SELECT>
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:24.5pt'>
  <td width="35%" colspan=2 valign=top style='width:35.8%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Parálisis facial <b><span
  style='color:red'>facia</span></b> </span></p>
  </td>
  <td width="6%" valign=top style='width:6.06%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>IZQ</span></b>
  <SELECT id="facia_iz" name="facia_iz" class="form-control">
             <option {{ (isset($data) && $data->facia_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->facia_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>DER</span></b></p>
   <SELECT id="facia_de" name="facia_de" class="form-control">
             <option {{ (isset($data) && $data->facia_de == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->facia_de == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width="34%" rowspan=2 valign=top style='width:34.72%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>99.</span></sup><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Tipo de enfermedad cerebrovascular</span></p>

      <SELECT id="tipo_acv" name="tipo_acv" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->tipo_acv ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>

  </td>
  <td width="16%" colspan=2 rowspan=2 valign=top style='width:16.3%;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <span  style='font-size: 8.0pt;font-family:"Arial","sans-serif";color:black'>0. Sin antecedentes de
  ECV.</span>
  <br>
  <span  style='font-size:  8.0pt;font-family:"Arial","sans-serif";color:black'>1. Transitorio.</span>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Isquémico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Hemorrágico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>4.Lesiones Subcorticales</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:21.4pt'>
  <td width="35%" colspan=2 valign=top style='width:35.8%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:21.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Perdida de la visión</span>
         <b><span style='color:red'>visi  </span></b>
   </p>
  </td>
  <td width="6%" valign=top style='width:6.06%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.4pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>IZQ</span></b></p>
  <SELECT id="visi_iz" name="visi_iz" class="form-control">
             <option {{ (isset($data) && $data->visi_iz == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->visi_iz == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
  <td width="7%" valign=top style='width:7.12%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:21.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>DER</span></b></p>
  <SELECT id="visi_der" name="visi_der" class="form-control">
             <option {{ (isset($data) && $data->visi_der == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->visi_der == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:17.1pt'>
  <td width="48%" colspan=4 valign=top style='width:48.98%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:17.1pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Cambios en el lenguaje o en el habla 

      <SELECT id="cam_leng" name="cam_leng" class="form-control">
             <option {{ (isset($data) && $data->cam_leng == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->cam_leng == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  </span></p>
  </td>
  <td  colspan=3 valign=top style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;'>
 <span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>100. Numero de eventos vasculares</span>

  <input id="num_even" type="text" class="form-control" name="num_even" maxlength="3"  value='{{(isset($data))  ? $data->num_even  : old("num_even") }}' >

  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td colspan=7 valign=top style='border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span>97 y todos los enunciados que no están enumerados se registraran como
  0 en caso de ausencia y 1 en caso de presencia. Los enunciados no numerados
  se refieren a manifestaciones clínicas del <b>último evento vascular</b>. 98
  se registrará el número del mes y el año en que ocurrió el último evento de
  enfermedad cerebrovascular. 99  se registrará en el recuadro el número del
  tipo de enfermedad cerebrovascular. 100 se refiere al número de eventos
  vasculares reportados por el paciente.</span>
  </td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=12 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span 
  style='font-family:"Lucida Sans Unicode","sans-serif"'> XII. EXAMEN MÉDICO
  GENERAL</span></b>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="9%" valign=top style='width:9.02%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>101. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cabeza:</span></b><span
   style='font-size:18.0pt;font-family:"Arial","sans-serif";'>
  </span></p>
  </td>
  <td width="90%" colspan=11 valign=top style='width:90.98%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="cabeza" name="cabeza" class="form-control">
             <option {{ (isset($data) && $data->cabeza == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->cabeza == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid;height:60.9pt'>
  <td width="29%" colspan=6 valign=top style='width:29.88%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:60.9pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a. <b>Superficie del cráneo </b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Asimetría de la superficie del
  cráneo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Depresiones, fracturas, cicatrices
  postquirúrgicas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hematomas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Bultos, nódulos, masa palpitante.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width="28%" colspan=2 valign=top style='width:28.56%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:60.9pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Pelo</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Perdida de pelo difusa</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Pérdida de pelo circunscrita:
  alopecia areata, calvicie.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Pelo demasiado fino o que se
  desprende fácilmente.</span></p>
  </td>
  <td width="41%" colspan=4 rowspan=2 valign=top style='width:41.56%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:60.9pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cicatrices en la cara.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>e. <b>Ojos</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> - Pestañas: perdida de la pestañas,
  escamación. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Conjuntivitis hemorrágica.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></sup></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Ojo rojo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Ictericia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hiperlagrimación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  4.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Orzuelos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  4.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Desviación de la mirada.</span></p>
  </td>
  <td style='height:60.9pt;border:none' width=0 height=81></td>
 </tr>
 <tr style='page-break-inside:avoid;height:60.9pt'>
  <td width="29%" colspan=6 valign=top style='width:29.88%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:60.9pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b. <b>Cuero cabelludo</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Infecciones: piojos, hongos,
  garrapatas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Erupciones: dermatitis seborreica,
  psoriasis, otros.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Caspa.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambios de coloración (manchas,
  lunares).</span></p>
  </td>
  <td width="28%" colspan=2 valign=top style='width:28.56%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:60.9pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>d. <b>Cara</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Masas o bultos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Asimetría de los rasgos faciales.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambios en la coloración: vitíligo,
  manchas blancas, hongos, cloasma/melasma, nevus (lunares), palidez, melanoma.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Erupciones en la piel, acné.</span></p>
  </td>
  <span  style='font-size:6.0pt;font-family:"Arial","sans-serif";
  '>
  <td style='height:60.9pt;border:none' width=0 height=81></td>
  </span>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="9%" valign=top style='width:9.02%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>102. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>ORL:</span></b></p>
  </td>
  <td width="90%" colspan=11 valign=top style='width:90.98%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="orl" name="orl" class="form-control">
             <option {{ (isset($data) && $data->orl == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->orl == 1) ? 'selected' : '' }} value="1" >1: Anormal</option>
      </SELECT> 
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a. <b>Orejas</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambios de coloración o
  pigmentación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Anormalidad en la estructura o
  forma.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones o asimetría en la
  posición.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor al movimiento o a la
  palpación del cartílago</span></p>
  </td>
  <td width="33%" colspan=3 rowspan=2 valign=top style='width:33.78%;
  border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nariz (inspección
  interna)</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en el color de la
  mucosa.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Secreciones anormales.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Perforación de la mucosa.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Lesiones oclusivas: pólipos,
  tumoración, cuerpo extraño.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Edema.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>e. <b>Boca (inspección externa)</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en la coloración:
  cianosis, palidez.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en el tamaño o textura
  de los labios: edemas, vesículas, ulceras, micosis.</span></p>
  <p class=MsoNormal style='margin-left:3.6pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Fisura en ángulos de la boca.</span></p>
  <p class=MsoNormal style='margin-left:3.6pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Chancro sifilítico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Paladar hendido.</span></p>
  </td>
  <td width="32%" colspan=2 rowspan=3 valign=top style='width:32.46%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>h. <b>Lengua</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en el tamaño, color o
  textura: superficie lisa,  fisuras (lengua escrotal).</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>- 
  Ulceras/ nódulos.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Varices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Bordes de la lengua rugosos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>i. <b>Mucosa oral, faringe y paladar</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en la coloración:
  palidez.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Alteraciones en la superficie: ulceras/ nódulos, vesículas, placas blancas.</span></p>
  <p class=MsoNormal><span  style='font-size:3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Secreciones: hemorragia, pus, exudado tipo membrana.</span></p>
  <p class=MsoNormal><span  style='font-size:2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Amígdalas inflamadas o hipertróficas.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Presencia de infecciones.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Asimetría en elevación del paladar. </span></p>
  <p class=MsoNormal><span  style='font-size:5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Desviación del paladar hacia un lado</span><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>.</span></p>
  <p class=MsoNormal><span  style='font-size:4.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.55pt;margin-bottom:.0001pt;text-indent:-3.55pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Desviaciones en la
  úvula.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.55pt;margin-bottom:.0001pt;text-indent:-3.55pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Asimetrías del
  paladar suave.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;text-indent:-3.55pt'><b><span
   style='font-size:5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>104. Escala de
  Mallampati (del 1 al 4)</span></b></p>

      <SELECT id="mallam" name="mallam" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->mallam ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor     
      </SELECT>

  </td>
  <td style='border:none' width=0></td>
 </tr>
 <tr style='page-break-inside:avoid;height:18.1pt'>
  <td width="33%" colspan=7 rowspan=2 valign=top style='width:33.76%;
  border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:18.1pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b. <b>Conducto auditivo externo</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Secreciones anormales: pus, sangre,
  coágulos, cera marrón, tapón. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cuerpo extraño.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Obstrucción del conducto auditivo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Membrana timpánica</b></span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Alteraciones en el color: roja, blanca, amarilla, pérdida del reflejo
  luminoso.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Vesículas o placas.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Perforación.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Abobamiento por presencia de aire.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-
  Hemorragia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Protrusión/ retracción.</span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'> </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>d. <b>Nariz (inspección externa)</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Lesiones, deformaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Senos paranasales dolorosos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Desviación del tabique nasal.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en la piel, cambios en
  la pigmentación, melanoma.</span></p>
  </td>
  <span  style='font-size:14.0pt;font-family:"Arial","sans-serif";
  '>
  <td style='height:18.1pt;border:none' width=0 height=24></td>
  </span>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>f. <b>Encías</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hipertrofia, edema, sangrado,
  ulceras. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambios en la pigmentación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>g. <b>Dientes </b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>103. Dientes: menos
  de 10. 

      <SELECT id="dientes" name="dientes" class="form-control">
             <option {{ (isset($data) && $data->dientes == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->dientes == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT> 
  
  
  </p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Prótesis.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Mala higiene (caries, calculo
  dental)</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Desviación de la mordida.</span></p>
  </td>
  <span  style='font-size:16.0pt;font-family:"Arial","sans-serif";
  '>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
  </span>
 </tr>
 <tr style='page-break-inside:avoid;height:12.1pt'>
  <td width="10%" colspan=2 valign=top style='width:10.38%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:12.1pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>105. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cuello:</span></b></p>
  </td>
  <td width="89%" colspan=10 valign=top style='width:89.62%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.1pt'>

      <SELECT id="cuello" name="cuello" class="form-control">
             <option {{ (isset($data) && $data->cuello == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->cuello == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>

  </td>
  <td style='height:12.1pt;border:none' width=0 height=16></td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a. <b>Cuello</b> </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Protuberancias. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dificultad de movilidad.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Asimetría del cuello lado.</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteración de la coloración. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nódulos
  preauriculares.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:39.25pt;margin-bottom:.0001pt;text-indent:-39.25pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nódulos
  suboccipitales</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nódulos
  submaxilares.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Nódulos a lo largo
  de la carótida.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Nódulos detrás de
  la clavícula.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:39.25pt;margin-bottom:.0001pt;text-indent:-39.25pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Parotidas alargadas.</span></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b. <b>Tiroides</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Alteración en tamaño: alargamiento
  o atrofia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Presencia de nódulos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:39.25pt;margin-bottom:.0001pt;text-indent:-39.25pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dolor a la
  palpación.</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Carótida derecha</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Pulso carotideo asimétrico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Soplo carotideo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Masa pulsátil (aneurisma)</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Obstrucción.</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>d. <b>Carótida izquierda</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Pulso carotideo asimétrico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Soplo carotideo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Masa pulsátil (aneurisma)</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Obstrucción.</span></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="9%" valign=top style='width:9.02%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>106. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Tórax:</span></b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'> </span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.86%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT id="torax" name="torax" class="form-control">
             <option {{ (isset($data) && $data->torax == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->torax == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  </td>
  <td width="3%" valign=top style='width:3.9%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td width="28%" colspan=2 valign=top style='width:28.56%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  
  </td>
  <td width="5%" valign=top style='width:5.22%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  
  </td>
  <td width="27%" valign=top style='width:27.26%;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a. <b>Tórax</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Asimetría del tórax.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Retracción intercostal.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Venas colaterales.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Nódulos, bultos, protuberancias en
  el tórax o en las mamas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cambios de
  coloración o erupción en el tórax o en las mamas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'> </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Edema,
  protuberancias en ganglios linfáticos de la axila.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Expansión respiratoria asimétrica.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambio de temperatura.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Frémito vocal disminuido o
  aumentado</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b.<b> Alteración en frecuencia
  respiratoria: </b>Bradipnea (menos de 10) o <b> </b>taquipnea (mas de 20).</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Alteración patrón respiratorio</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Inspiración profunda ocasional.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteración en el movimiento
  abdominal.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Respiración entrecortada o jadeo.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>d.<b> Tráquea</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Desviación de la posición.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  4.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación.</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>e. <b>Percusión</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hiperresonancia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  4.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Sonido opaco.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>f. <b>Auscultación </b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Ruidos: crepitaciones, roncus, sibilancias,
  frote.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Aumento/ disminución del murmullo
  pulmonar.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Soplos: pleurítico, tubarico,
  anforico, cavernoso.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Voz: broncofonía, pectoriloquia,
  egofonía, anforica.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Soplo cardiaco.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Ruidos S3 / S4.  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Frote pericárdico</span></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="11%" colspan=3 valign=top style='width:11.68%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>107. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Abdomen</span></b></p>
  </td>
  <td width="88%" colspan=9 valign=top style='width:88.32%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT id="abdomen" name="abdomen" class="form-control">
             <option {{ (isset($data) && $data->abdomen == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->abdomen == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT> 

  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>abdomen_F</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a. <b> Inspección</b> </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Protuberancias,
  masas o edemas en el abdomen.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alteraciones en la
  coloración: manchas en la piel, ictericia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Lesiones o
  cicatrices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estrías.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Hernias.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Circulación
  colateral.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Asimetría en el
  abdomen lado</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b. <b>Auscultación</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ruidos intestinales
  anormales.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Percusión</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Ascitis.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Sonido timpánico.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Puntos dolorosos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>d. <b>Puño percusión en la región
  lumbar</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hipersensibilidad: Asimetría a la
  puño percusión.</span></p>
  </td>
  <td width="27%" valign=top style='width:27.26%;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>e. <b>Palpación</b></span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Rigidez, inflamación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Masa, tumoración.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Hepatomegalia.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Colón palpable: colitis.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Bazo agrandado.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  5.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Vejiga distendida.</span></p>
  </td>
  <td width="5%" valign=top style='width:5.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:9.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:16.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:18.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="14%" colspan=4 valign=top style='width:14.24%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>108. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Extremidades:
  </span></b></p>
  </td>
  <td width="85%" colspan=8 valign=top style='width:85.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     <SELECT id="miembros" name="miembros" class="form-control">
             <option {{ (isset($data) && $data->miembros == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->miembros == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT> 
  </td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='page-break-inside:avoid;height:169.6pt'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:169.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a. Manos:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:-.2pt;margin-bottom:.0001pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inspección:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Desproporción
  o deformaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Lesiones,
  abscesos, masas o edemas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cicatrices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cambios de
  coloración: manchas seniles, melanoma.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Erupción.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alteraciones
  en coloración de las uñas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deformaciones
  de las uñas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Palpación:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Prueba de
  llenado capilar en la uña irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Temperatura
  irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Dolor a la palpación</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:169.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b. Brazos:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inspección:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Lesiones,
  protuberancias, masas o edemas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cicatrices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Flacidez,
  estrías. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cambios de
  coloración: manchas seniles, melanoma.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Erupción. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Rango de
  movilidad:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dificultad
  de movilidad.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Palpación:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Temperatura
  irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dolor a la
  palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pulso radial
  irregular o disminuido.</span></p>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Pulso braquial irregular o
  disminuido.</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:169.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c. <b>Piernas</b>:</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inspección:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Lesiones,
  protuberancias, masas o edemas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cicatrices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Flacidez,
  estrías. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cambios de
  coloración: manchas seniles, melanoma.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Erupción. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Varices.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Rango de movilidad:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Dificultad de movilidad.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Palpación:</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Temperatura
  irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dolor a la
  palpación.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pulso
  poplitelial irregular o disminuido.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Pulso femoral irregular o disminuido.</span></p>
  </td>
  <td style='height:169.6pt;border:none' width=0 height=226></td>
 </tr>
 <tr style='page-break-inside:avoid;height:74.6pt'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:74.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>d. Pies</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inspección</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Desproporción
  o deformaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Lesiones,
  abscesos, ulceras o edemas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cicatrices.</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:74.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Cambios de coloración.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  2.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Erupción.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  1.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Alteraciones en coloración de las
  uñas.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>- Deformaciones de las uñas.</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:74.6pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Palpación</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Temperatura
  irregular.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  1.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dolor a la
  palpación.</span></p>
  <p class=MsoNormal><span  style='font-size:3.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:39.25pt;margin-bottom:.0001pt;text-indent:-39.25pt'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pulso pedio
  irregular o disminuido</span></p>
  </td>
  <td style='height:74.6pt;border:none' width=0 height=99></td>
 </tr>
 <tr style='page-break-inside:avoid;height:12.4pt'>
  <td width="19%" colspan=5 valign=top style='width:19.44%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:12.4pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>109. </span></sup><b><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Sistema Osteoarticular</span></b></p>
  </td>
  <td width="80%" colspan=7 valign=top style='width:80.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.4pt'>
       <SELECT id="osteoart" name="osteoart" class="form-control">
             <option {{ (isset($data) && $data->osteoart == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->osteoart == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>

  </td>
  <td style='height:12.4pt;border:none' width=0 height=17></td>
 </tr>
 <tr style='page-break-inside:avoid;height:63.95pt'>
  <td width="33%" colspan=7 valign=top style='width:33.76%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:63.95pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inspección</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Bultos, edemas en
  las articulaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dificultad para
  movilizar alguna articulación.</span></p>
  </td>
  <td width="33%" colspan=3 valign=top style='width:33.78%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:63.95pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Desviación en la
  columna vertebral: escoliosis. </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Inflamación de las
  articulaciones</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.46%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:63.95pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Palpación</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:3.6pt;margin-bottom:.0001pt;text-indent:0cm'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Rigidez leve en las
  articulaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:
  0cm'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>-<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Aumento de
  temperatura en las articulaciones.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>-  Dolor a la palpación.</span></p>
  </td>
  <td style='height:63.95pt;border:none' width=0 height=85></td>
 </tr>
 <tr style='page-break-inside:avoid;height:8.8pt'>
  <td width="100%" colspan=12 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:8.8pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Registre 0
  en caso de ausencia de la condición y 1 en caso de presencia. En caso de
  presencia de la condición, explique con detalle en el apartado de
  observaciones.</span></p>
  </td>
  <td style='height:8.8pt;border:none' width=0 height=12></td>
 </tr>
 <tr height=0>
  <td width=64 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=74 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=174 style='border:none'></td>
  <td width=28 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td width=193 style='border:none'></td>
  <td width=37 style='border:none'></td>
  <td style='border:none' width=0></td>
 </tr>
</table>


<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:13.45pt'>
  <td width="100%" colspan=21 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='color: white; font-family:"Lucida Sans Unicode","sans-serif"'>XIII. EVALUACIÓN
  NEUROLÓGICA GLOBAL</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:22.55pt'>
  <td width="100%" colspan=21 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;'>
  <p class=MsoNormal style='margin-top:1.0pt'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>110. Dominancia/
  Lateralidad                DER  IZQ</span></p>
 
      <SELECT id="dom" name="dom" class="form-control">
             <option {{ (isset($data) && $data->dom == 1) ? 'selected' : '' }} value="0" >1: Derecha</option>
             <option {{ (isset($data) && $data->dom == 2) ? 'selected' : '' }} value="1" >2: Izquierda</option>
      </SELECT>

  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:11.35pt'>
  <td width="100%" colspan=21 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:11.35pt'>
  <p class=MsoNormal><b><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Pares
  Craneales</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:7.25pt'>
  <td width="14%" style='width:14.6%;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;'>
    <span style='font-size:  7.0pt;font-family:"Arial","sans-serif"'> 111. Nervio Craneal I</span>
  </td>
  <td width="44%" colspan=13 style='width:44.82%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:7.25pt'>
   <span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>112. Nervio
  Craneal II</span>
  </td>
  <td width="40%" colspan=7 valign=top style='width:40.58%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:7.25pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>113. Nervios
  craneales III, IV y VI.</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:5.65pt'>
  <td width="14%" rowspan=2 valign=top style='width:14.6%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:5.65pt'>
  <span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>0. Normal</span>
  <br>
  <span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>1. Hiposmia<span style=''>     
  </span></span>
  <br>
  <span style='font-size:  7.0pt;font-family:"Arial","sans-serif"'>2. Fantosmia</span>
  <br>
  <span style='font-size:  7.0pt;font-family:"Arial","sans-serif"'>3. Anosmia</span>
  
  </td>
  <td width="10%" colspan=4 rowspan=2 valign=top style='width:10.82%;
  border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:5.65pt'>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Agudeza Visual  </span>
  <br>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span>
  <br>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Disminución de la agudeza visual     </span>
  </td>
  <td width="11%" colspan=4 rowspan=2 valign=top style='width:11.66%;
  border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:5.65pt'>

      <SELECT id="agudeza_der" name="agudeza_der" class="form-control">
             <option {{ (isset($data) && $data->agudeza_der == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->agudeza_der == 1) ? 'selected' : '' }} value="1" >1: Disminucion de la agudeza visual</option>
      </SELECT>

     <SELECT id="agudeza_izq" name="agudeza_izq" class="form-control">
             <option {{ (isset($data) && $data->agudeza_izq == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->agudeza_izq == 1) ? 'selected' : '' }} value="1" >1: Disminucion de la agudeza visual</option>
      </SELECT>

      <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span></p>


  </td>
  <td width="22%" colspan=5 rowspan=2 valign=top style='width:22.32%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:5.65pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>  
  b) Campo Visual  
  
  
  <SELECT id="campo" name="campo" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->campo ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
   </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>0. Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>1. Alterac. </span><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>Unilat</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Hemianopsia bitem.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Hemianopsia hom.</span></p>
  <p class=MsoNormal style='margin-right:-10.6pt'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>4. Defecto hom. de
  cuad.</span></p>
  </td>
  <td width="19%" colspan=4 valign=top style='width:19.82%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:5.65pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Reflejo motor y consensual</span></p>
      <SELECT id="refle_mo" name="refle_mo" class="form-control">
            @for ($i =0; $i < 3; $i++)
                   <option {{ (isset($data) && $data->refle_mo ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </td>
  <td width="20%" colspan=3 valign=top style='width:20.76%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:5.65pt'>
  <p class=MsoNormal style='margin-left:2.7pt;text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Movimientos oculares 
  
      <SELECT id="movimien" name="movimien" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->movimien ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:25.9pt'>
  <td width="19%" colspan=4 valign=top style='width:19.82%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:25.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.Reflejo
  pupilar aferente                            2. Reflejo pupilar eferente</span></p>
  </td>
  <td width="20%" colspan=3 valign=top style='width:20.76%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:25.9pt'>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>0. Normal </span></p>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>1. Estrabismo         </span></p>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>2. Nistagmo</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>3. Oftalmoplegia</span></p>
  <p class=MsoNormal style='text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>4. Ptosis palpebral</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:2.9pt'>
  <td width="42%" colspan=10 valign=top style='width:42.94%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>114.  </span></sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Nervio
  Craneal V</span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.42%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>115.</span></sup><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'> Nervio Craneal VII</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>116.</span></sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'> Nervio
  Craneal VIII</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:2.9pt'>
  <td width="21%" colspan=4 valign=top style='width:21.52%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)Sensibilidad
  facial 

      <SELECT id="sens_fa" name="sens_fa" class="form-control">
            @for ($i =0; $i < 3; $i++)
                   <option {{ (isset($data) && $data->sens_fa ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Parestesia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Ausente</span></p>
  </td>
  <td width="21%" colspan=6 valign=top style='width:21.42%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'> b)
  Componente motor</span></p>
      <SELECT id="sens_fa" name="sens_fa" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_fa ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Débil</span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.42%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Expresión facial</span></p>
     <SELECT id="Ex_fa" name="Ex_fa" class="form-control">
            @for ($i =0; $i < 3; $i++)
                   <option {{ (isset($data) && $data->Ex_fa ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Parálisis facial lateral </span></p>
  <p class=MsoNormal style='margin-left:-3.05pt;text-indent:3.05pt'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2. Parálisis
  facial total</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Audición Prueba de Rinne</span></p>

      <SELECT id="rinne" name="rinne" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->rinne ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Anormal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:2.9pt'>
  <td width="21%" colspan=4 valign=top style='width:21.52%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>c)
  Reflejo córneo- palpebral</span></p>
      <SELECT id="refle_copa" name="refle_copa" class="form-control">
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->refle_copa ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Hiperreflexia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Hiporreflexia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Ausencia</span></p>
  </td>
  <td width="21%" colspan=6 valign=top style='width:21.42%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>d)
  Reflejo maseterino</span></p>
       <SELECT id="refle_mase" name="refle_mase" class="form-control">
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->refle_mase ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Hiperreflexia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Hiporreflexia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Ausencia</span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.42%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Sentido del gusto</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Hipogeusia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Ageusia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Disgeusia</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Audición  Prueba de  Weber</span></p>
     <SELECT id="weber" name="weber" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->weber ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Anormal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:2.9pt'>
  <td width="18%" colspan=2 valign=top style='width:18.86%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>117. </span></sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Nervio
  Craneal IX y X</span></p>
  </td>
  <td width="44%" colspan=13 style='width:44.5%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>118. </span></sup><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>Nervio Craneal XI</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>119.</span></sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'> Nervio
  Craneal XII  
  
        <SELECT id="nerv_12" name="nerv_12" class="form-control">
            @for ($i =0; $i < 4; $i++)
              <option {{ (isset($data) && $data->nerv_12 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:2.9pt'>
  <td width="18%" colspan=2 valign=top style='width:18.86%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Paladar/Reflejo
  nauseoso 
  
      <SELECT id="refle_na" name="refle_na" class="form-control">
            @for ($i =0; $i < 2; $i++)
              <option {{ (isset($data) && $data->refle_na ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
      
      </span></p>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Normal</span></p>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Ausente</span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td width="24%" colspan=8 valign=top style='width:24.08%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Musculo trapecio 
  
      <SELECT id="musc_tra" name="musc_tra" class="form-control">
            @for ($i =0; $i < 3; $i++)
              <option {{ (isset($data) && $data->musc_tra ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='margin-left:3.75pt;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Normal</span></p>
  <p class=MsoNormal style='margin-left:3.75pt;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Debilidad
  contralateral</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Debilidad
  ipsilateral</span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.42%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Musculo <span style='color:black'>esternocleidomastoideo </span>
  
      <SELECT id="musc_est" name="musc_est" class="form-control">
            @for ($i =0; $i < 3; $i++)
              <option {{ (isset($data) && $data->musc_est ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Normal</span></p>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Debilidad
  contralateral</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Debilidad
  ipsilateral</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:2.9pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Atrofia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Fasciculaciones</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Protrusión unilateral de la lengua.</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:9.4pt'>
  <td width="100%" colspan=21 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:9.4pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>120.</span></sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'> <b>Sensibilidad</b></span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:26.45pt'>
  <td width="33%" colspan=7 valign=top style='width:33.26%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Tacto 
  
      <SELECT id="sens_tac" name="sens_tac" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_tac ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  </p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal. </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Disminución del sentido del tacto</span></p>
  </td>
  <td width="30%" colspan=8 valign=top style='width:30.1%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Dolor  
      <SELECT id="sens_do" name="sens_do" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_do ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
 
  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'> 0.
  Normal    </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Disminución de sensibilidad al dolor </span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>c)
  Temperatura 
  
      <SELECT id="sens_tem" name="sens_tem" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_tem ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Disminución de sensibilidad a la temperatura</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:26.45pt'>
  <td width="25%" colspan=5 valign=top style='width:25.44%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>d)
  Vibración  

     <SELECT id="sens_vi" name="sens_vi" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_vi ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'> 0.
  Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Disminución de sensibilidad a la vibración</span></p>
  </td>
  <td width="24%" colspan=6 valign=top style='width:24.72%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal style='text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>e) Posicional  
  
  
     <SELECT id="sens_po" name="sens_po" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_po ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
    </p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Anormal</span></p>
  </td>
  <td width="23%" colspan=6 valign=top style='width:23.44%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>f)
  Cortical: Estereognosia 
  
      <SELECT id="sens_st" name="sens_st" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_st ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal    </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Astereognosia</span></p>
  </td>
  <td width="26%" colspan=4 valign=top style='width:26.42%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.45pt'>

  
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>g)
  Cortical: Grafestesia   
  
      <SELECT id="sens_gra" name="sens_gra" class="form-control">
            @for ($i =0; $i < 2; $i++)
                   <option {{ (isset($data) && $data->sens_gra ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </p>
  <p class=MsoNormal style='text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0. Normal</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Anormal</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:8.9pt'>
  <td width="25%" colspan=5 valign=top style='width:25.44%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:8.9pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>121. </span></sup><b><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>Tono Muscular</span></b></p>
  </td>
  <td width="74%" colspan=16 valign=top style='width:74.56%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:8.9pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>122. </span></sup><b><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>Fuerza Muscular</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.7pt'>
  <td width="25%" colspan=5 valign=top style='width:25.44%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.7pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Miembros Superiores </span></p>


     <SELECT id="tonmu_ms" name="tonmu_ms" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->tonmu_ms ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>0. Normal           
  3.Hipotonía </span></p>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>1. Espasticidad   4. Hipertonia</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>2. Rigidez </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>&nbsp;</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)<sup>
  </sup>Miembros Inferiores</span></p>


  <SELECT id="tonmu_mi" name="tonmu_mi" class="form-control">
            @for ($i =0; $i < 5; $i++)
                   <option {{ (isset($data) && $data->tonmu_mi ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>

  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>0. Normal             3.Hipotonía
  </span></p>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>1. Espasticidad    4. </span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  color:black'>Hipertonia</span></p>
  <p class=MsoNormal style='text-autospace:none'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif";color:black'>2.
  Rigidez </span></p>
  </td>
  <td width="37%" colspan=10 valign=top style='width:37.92%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.7pt'>
 
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Miembros Superiores   </span>
  
      <SELECT id="fuermu_ms" name="fuermu_ms" class="form-control">
            @for ($i =0; $i < 6; $i++)
                   <option {{ (isset($data) && $data->fuermu_ms ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  
  <b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:red'></span></b></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0. 
  Musculo sin contracción.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1. 
  Una contracción es vista en el musculo al palparlo cuando el sujeto intenta
  contraerlo.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Mueve el musculo cuando la gravedad es eliminada.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Puede mover el musculo contra gravedad pero no contra la resistencia del
  examinador.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>4.
  Mueve el musculo contra resistencia ejercida por el examinador.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>5. 
  Mueve el musculo y vence la resistencia ejercida por el examinador.</span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt;height:15.7pt'>
  <p class=MsoNormal style='text-autospace:none'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:black'>&nbsp;</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Miembros Inferiores </span>

      <SELECT id="fuermu_mi" name="fuermu_mi" class="form-control">
            @for ($i =0; $i < 6; $i++)
                   <option {{ (isset($data) && $data->fuermu_mi ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0. 
  Musculo sin contracción.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1. 
  Una contracción es vista en el musculo al palparlo cuando el sujeto intenta
  contraerlo.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Mueve el musculo cuando la gravedad es eliminada.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Puede mover el musculo contra gravedad pero no contra la resistencia del
  examinador.</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>4.
  Mueve el musculo contra resistencia ejercida por el examinador.</span></p>
  <p class=MsoNormal style='margin-left:0cm;text-indent:-18.0pt'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>5.  Mueve el
  musculo y vence la resistencia ejercida por el examinador.</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:10.2pt'>
  <td width="100%" colspan=21 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:10.2pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>123. </span></sup><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Reflejos: </span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Registre:<b>
  </b>0. Ausente, 1. Ligeramente disminuido,  2. Respuesta normal, 3. Mayor
  rapidez que lo normal, 4.  Mas de 1 reacción.</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:44.6pt'>
  <td width="14%" valign=top style='width:14.6%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Bicipital</span></p>

      <SELECT id="refle_bider" name="refle_bider" class="form-control">
             <option {{ (isset($data) && $data->refle_bider == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_bider == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_bider == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_bider == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_bider == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

      <br>

      <SELECT id="refle_biizq" name="refle_biizq" class="form-control">
             <option {{ (isset($data) && $data->refle_biizq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_biizq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_biizq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_biizq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_biizq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>
  
  <p class=MsoNormal align=center style='margin-left:17.55pt;text-align:center;
  text-indent:-17.55pt'><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>DER  
  IZQ</span></p>
  </td>
  <td width="14%" colspan=5 valign=top style='width:14.22%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b) Tricipital</span></p>

      <SELECT id="refle_trider" name="refle_trider" class="form-control">
             <option {{ (isset($data) && $data->refle_trider == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_trider == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_trider == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_trider == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_trider == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

      <SELECT id="refle_triizq" name="refle_triizq" class="form-control">
             <option {{ (isset($data) && $data->refle_triizq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_triizq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_triizq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_triizq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_triizq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>
  
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>DER   IZQ</span></p>
  </td>
  <td width="14%" colspan=4 valign=top style='width:14.12%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>c)
  Braquirradial</span></p>

    <SELECT id="refle_brder" name="refle_brder" class="form-control">
             <option {{ (isset($data) && $data->refle_brder == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_brder == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_brder == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_brder == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_brder == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

      <SELECT id="refle_brizq" name="refle_brizq" class="form-control">
             <option {{ (isset($data) && $data->refle_brizq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_brizq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_brizq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_brizq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_brizq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";'>
  </span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.94%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'> a)
  Rotuliano</span></p>

    <SELECT id="refle_roder" name="refle_roder" class="form-control">
             <option {{ (isset($data) && $data->refle_roder == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_roder == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_roder == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_roder == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_roder == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

      <SELECT id="refle_roizq" name="refle_roizq" class="form-control">
             <option {{ (isset($data) && $data->refle_roizq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_roizq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_roizq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_roizq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_roizq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

  <span
  style='text-align:center; font-size:8.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span>
  </td>
  <td width="13%" colspan=4 valign=top style='width:13.28%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)
  Aquiliano</span></p>
    <SELECT id="refle_ader" name="refle_ader" class="form-control">
             <option {{ (isset($data) && $data->refle_ader == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_ader == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_ader == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_ader == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_ader == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

      <SELECT id="refle_aizq" name="refle_aizq" class="form-control">
             <option {{ (isset($data) && $data->refle_aizq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->refle_aizq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->refle_aizq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->refle_aizq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->refle_aizq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

  <span
  style='text-align:center; font-size:8.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.1%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>c)Babinski</span></p>

      <SELECT id="refle_de" name="refle_de" class="form-control">
             <option {{ (isset($data) && $data->refle_de == 0) ? 'selected' : '' }} value="0" >0: Indiferente</option>
             <option {{ (isset($data) && $data->refle_de == 1) ? 'selected' : '' }} value="1" >1: flexor</option>
             <option {{ (isset($data) && $data->refle_de == "2") ? 'selected' : '' }} value="2" >2: extensor</option>
             <option {{ (isset($data) && $data->refle_de == 3) ? 'selected' : '' }} value="3" >3: marcado extensor</option>
      </SELECT>

      <SELECT id="refle_izq" name="refle_izq" class="form-control">
             <option {{ (isset($data) && $data->refle_izq == 0) ? 'selected' : '' }} value="0" >0: Indiferente</option>
             <option {{ (isset($data) && $data->refle_izq == 1) ? 'selected' : '' }} value="1" >1: flexor</option>
             <option {{ (isset($data) && $data->refle_izq == "2") ? 'selected' : '' }} value="2" >2: extensor</option>
             <option {{ (isset($data) && $data->refle_izq == 3) ? 'selected' : '' }} value="3" >3: marcado extensor</option>
      </SELECT>
 
 <span
  style='text-align:center;font-size:8.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span>
  </td>
  <td width="15%" colspan=2 valign=top style='width:15.74%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:44.6pt'>
  <span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>d)Cutáneo/Abdominales</span>
  <br>
      <SELECT id="reflecu_der" name="reflecu_der" class="form-control">
             <option {{ (isset($data) && $data->reflecu_der == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->reflecu_der == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->reflecu_der == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->reflecu_der == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->reflecu_der == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>
      <SELECT id="reflecu_izq" name="reflecu_izq" class="form-control">
             <option {{ (isset($data) && $data->reflecu_izq == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->reflecu_izq == 1) ? 'selected' : '' }} value="1" >1: Ligeramente disminuido</option>
             <option {{ (isset($data) && $data->reflecu_izq == "2") ? 'selected' : '' }} value="2" >2: Respuesta normal</option>
             <option {{ (isset($data) && $data->reflecu_izq == 3) ? 'selected' : '' }} value="3" >3: Mayor rapidez que lo normal</option>
             <option {{ (isset($data) && $data->reflecu_izq == 4) ? 'selected' : '' }} value="4" >4: Mas de una reaccion</option>
      </SELECT>

  <span
  style='text-align:center; font-size:8.0pt;font-family:"Arial","sans-serif"'>DER  IZQ</span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:12.8pt'>
  <td width="42%" colspan=10 valign=top style='width:42.94%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:12.8pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>124.</span></sup><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'> <b>Coordinación</b></span></p>
  </td>
  <td width="20%" colspan=5 valign=top style='width:20.42%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.8pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>125.</span></sup><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'> <b>Marcha y postura</b></span></p>
  </td>
  <td width="36%" colspan=6 valign=top style='width:36.64%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:12.8pt'>
  <p class=MsoNormal><sup><span style='font-size:7.0pt;font-family:
  "Arial","sans-serif"'>126.</span></sup><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'> <b>Movimientos anormales </b></span><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>amovin</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:23.5pt'>
  <td width="14%" valign=top style='width:14.6%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Pinza/Pulgar tocando
  cada dedo</span></p>

      <SELECT id="coorpi" name="coorpi" class="form-control">
             <option {{ (isset($data) && $data->coorpi == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->coorpi == 1) ? 'selected' : '' }} value="1" >1: Anormal</option>
      </SELECT>
  </td>
  <td width="5%" colspan=2 valign=top style='width:5.58%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  '>&nbsp;</span></p>
  </td>
  <td width="15%" colspan=5 valign=top style='width:15.68%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>c)
  Talón Rodilla</span><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  '> </span></p>

      <SELECT id="coortaro" name="coortaro" class="form-control">
             <option {{ (isset($data) && $data->coortaro == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->coortaro == 1) ? 'selected' : '' }} value="1" >1: Anormal</option>
      </SELECT>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.06%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'> </span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.18%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>a)
  Punta de dedos/talones</span></p>

      <SELECT id="marcha" name="marcha" class="form-control">
             <option {{ (isset($data) && $data->marcha == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->marcha == 1) ? 'selected' : '' }} value="1" >1: Anormal</option>
      </SELECT>
  </td>
  <td width="5%" colspan=2 valign=top style='width:5.24%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width="30%" colspan=5 rowspan=2 valign=top style='width:30.12%;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>0.
  Normal   </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1.
  Rigidez/Bradiquinesia  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>2.
  Temblor      </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>3.
  Corea                </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>4.
  Atetosis  </span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>5.
  Balismo</span></p>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>6.
  Distonía    </span></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.52%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt'>
      <SELECT id="amovin" name="amovin" class="form-control">
            @for ($i =0; $i < 7; $i++)
                   <option {{ (isset($data) && $data->amovin ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor   
      </SELECT>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:26.8pt'>
  <td width="14%" valign=top style='width:14.6%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:23.5pt;border-bottom:solid windowtext 1.0pt;'>
  <p class=MsoNormal style='margin-left:0cm;text-indent:0cm'><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Índice- nariz </span></p>
 
      <SELECT id="coorid" name="coorid" class="form-control">
             <option {{ (isset($data) && $data->coorid == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->coorid == 1) ? 'selected' : '' }} value="1" >1: Dismetría</option>
      </SELECT>
  </td>
  <td width="5%" colspan=2 style='width:5.58%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.8pt'>
  <p class=MsoNormal><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  '>&nbsp;</span></p>
  </td>
  <td width="15%" colspan=5 style='width:15.68%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.8pt'>
  <p class=MsoNormal><span style='font-size:7.0pt;font-family:"Arial","sans-serif"'>d)
  Movimientos alternos</span></p>
      <SELECT id="coorma" name="coorma" class="form-control">
             <option {{ (isset($data) && $data->coorma == 0) ? 'selected' : '' }} value="0" >0: Normal</option>
             <option {{ (isset($data) && $data->coorma == 1) ? 'selected' : '' }} value="1" >1: Disdiadococinesia</option>
      </SELECT>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.8pt'>
  <p class=MsoNormal><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  '>&nbsp;</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.18%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:26.8pt'>
  <p class=MsoNormal style='margin-top:6.0pt'><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>b) Romberg</span></p>
       <SELECT id="coorma" name="coorma" class="form-control">
             <option {{ (isset($data) && $data->coorma == 0) ? 'selected' : '' }} value="0" >0: Ausente</option>
             <option {{ (isset($data) && $data->coorma == 1) ? 'selected' : '' }} value="1" >1: Positivo</option>
      </SELECT>
  </td>
  <td width="5%" colspan=2 valign=top style='width:5.24%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:26.8pt'>
  <p class=MsoNormal><span style='font-size:18.0pt;font-family:"Arial","sans-serif";
  '>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:7.35pt'>
  <td width="100%" colspan=21 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:7.35pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>En todos los
  enunciados, registre de acuerdo a la escala dada para cada caso. Registre -88
  cuando la condición no pueda ser evaluada. En caso de anormalidad debe
  explicarse en las observaciones los hallazgos encontrados para cada caso.</span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=103 style='border:none'></td>
  <td width=30 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=34 style='border:none'></td>
  <td width=20 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=41 style='border:none'></td>
  <td width=51 style='border:none'></td>
  <td width=54 style='border:none'></td>
  <td width=1 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=27 style='border:none'></td>
  <td width=55 style='border:none'></td>
  <td width=17 style='border:none'></td>
  <td width=39 style='border:none'></td>
  <td width=35 style='border:none'></td>
  <td width=65 style='border:none'></td>
  <td width=46 style='border:none'></td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=7 valign=top style='width:100.0%;border:solid black 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif";
  color:windowtext'><b style='color: white;'> XIV. ESCALA DE DEMENCIA DE BLESSED </b></span>
  </td>
 </tr>
 <tr>
  <td width="42%" style='width:42.86%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:1.0cm;text-align:center;text-indent:-1.0cm'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>XIV a.
  Cambios del rendimiento en la ejecución de actividades cotidianas en los
  últimos 6 meses</span></b></p>
  </td>
  <td width="14%" style='width:14.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ninguna
  incompetencia</span></b></p>
  </td>
  <td width="14%" colspan=2 style='width:14.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Incompetencia
  parcial o intermitente</span></b></p>
  </td>
  <td width="14%" style='width:14.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Incompetencia total</span></b></p>
  </td>
  <td width="14%" colspan=2 style='width:14.28%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Incompetencia debido
  a problemas físicos</span></b></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1. Capacidad para
  llevar a cabo tareas domesticas. 
  
       <SELECT id="blecot1" name="blecot1" class="form-control">
             <option {{ (isset($data) && $data->blecot1 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot1 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot1 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  manejar pequeñas cantidades de dinero 
    
        <SELECT id="blecot2" name="blecot2" class="form-control">
             <option {{ (isset($data) && $data->blecot2 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot2 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot2 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  
  </p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  recordar listas cortas de cosas, ejemplo: listas de compras. 
  
        <SELECT id="blecot3" name="blecot3" class="form-control">
             <option {{ (isset($data) && $data->blecot3 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot3 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot3 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  orientarse en lugares cerrados (ejemplo:  reconocer los lugares dentro de
  casa u otros lugares familiares). 
  
        <SELECT id="blecot4" name="blecot4" class="form-control">
             <option {{ (isset($data) && $data->blecot4 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot4 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot4 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  encontrar el camino o transitar sin perderse por calles familiares. 
  
        <SELECT id="blecot5" name="blecot5" class="form-control">
             <option {{ (isset($data) && $data->blecot5 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot5 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot5 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  interpretar o reconocer el entorno, ejemplo: reconocer si se encuentra en el
  hospital o en el hogar, discriminar entre pacientes, doctores, enfermeras y
  familiares, etc. 
  
        <SELECT id="blecot6" name="blecot6" class="form-control">
             <option {{ (isset($data) && $data->blecot6 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot6 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot6 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Capacidad para
  recordar acontecimientos recientes, ejemplo: salidas recientes, visitas de
  familiares o amigos, etc. 
  
  
       <SELECT id="blecot7" name="blecot7" class="form-control">
             <option {{ (isset($data) && $data->blecot7 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot7 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot7 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr>
  <td width="42%" valign=top style='width:42.86%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-10.9pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Tendencia a vivir en
  el pasado. 
  
        <SELECT id="blecot8" name="blecot8" class="form-control">
             <option {{ (isset($data) && $data->blecot8 == 0) ? 'selected' : '' }} value="0" >0 = ninguna incompetencia</option>
             <option {{ (isset($data) && $data->blecot8 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = incompetencia parcial o intermitente</option>
             <option {{ (isset($data) && $data->blecot8 == 1) ? 'selected' : '' }} value="1" >1 = incompetenca total</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;border-bottom:
  solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.3%;border:none;
  border-bottom:solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0,5</span></p>
  </td>
  <td width="14%" valign=top style='width:14.28%;border:none;border-bottom:
  solid black 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="85%" colspan=5 valign=top style='width:85.72%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=right style='text-align:right'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>127  </span></sup><b><i><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Total de
  actividades cotidianas (sume del 1 al 8, no puntúe  </span></i></b></p>
  <p class=MsoNormal align=right style='text-align:right'><b><i><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>las actividades cuya
  incompetencia sea debida a causas físicas)</span></i></b></p>
  </td>
  <td width="14%" colspan=2 valign=top style='width:14.28%;border-top:none;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'>
  
  
  <input id="t_activi" type="text" class="form-control" name="t_activi" maxlength="3"  value='{{(isset($data))  ? $data->t_activi  : old("t_activi") }}' >

  
  </p>
  </td>
 </tr>
 <tr style='height:24.5pt'>
  <td width="70%" colspan=3 style='width:70.04%;border:solid windowtext 1.0pt;
  border-top:double windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:1.0cm;text-align:center;text-indent:-1.0cm'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>XIV b.
  Cambios en los hábitos durante los últimos 6 meses</span></b></p>
  </td>
  <td width="15%" colspan=3 style='width:15.92%;border-top:double windowtext 3.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Puntuación</span></b></p>
  </td>
  <td width="14%" style='width:14.04%;border-top:double windowtext 3.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alteración Física</span></b></p>
  </td>
 </tr>
 <tr style='height:10.0pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'> 9. 
  Comer 
  
        <SELECT id="bleha9" name="bleha9" >
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha9 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT>
  
  
  </span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Lo hace limpiamente con los cubiertos
  apropiados.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
 
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Lo hace desordenadamente únicamente
  con la cuchara.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Come sin ayuda  solo sólidos simples,
  ejemplo: bizcochos, pan, etc.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:10.0pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Tiene que ser alimentado</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>3</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>10. 
  Vestirse 
  
  <SELECT id="bleha10" name="bleha10" >
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha10 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT>
  
  </span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>

  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Se viste sin ayuda.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
 
  </td>
 </tr>
 <tr style='height:10.0pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Ocasionalmente comete errores
  (ejemplo: se abrocha mal los botones).</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:18.35pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Se viste siguiendo una secuencia
  equivocada, olvidando comúnmente ponerse alguna prenda de vestir, ejemplo:
  ponerse los pantalones  olvidando ponerse la ropa interior.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Incapacidad para vestirse</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>3</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:10.0pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>11.  
  Esfínteres 
  
          <SELECT id="bleha11" name="bleha11" >
            @for ($i =0; $i < 4; $i++)
                   <option {{ (isset($data) && $data->bleha11 ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
          </SELECT>
  
  </span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
 
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
 
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Completo control de los esfínteres.</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Ocasionalmente moja la cama (enuresis). 
  Registro desde cuando 
  
  <input id="bleha11ex" type="text" class="form-control" name="bleha11ex" maxlength="3"  value='{{(isset($data))  ? $data->bleha11ex  : old("bleha11ex") }}' >

  </span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:9.25pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border:none;
  border-left:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Frecuentemente moja la
  cama                    Registro desde cuando</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='height:10.0pt'>
  <td width="70%" colspan=3 valign=top style='width:70.04%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-left:1.0cm'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Doble incontinencia (fecal y
  urinaria)          Registro desde cuando</span></p>
  </td>
  <td width="15%" colspan=3 valign=top style='width:15.92%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>3</span></p>
  </td>
  <td width="14%" valign=top style='width:14.04%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>F</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:19.45pt'>
  <td width="85%" colspan=6 valign=top style='width:85.96%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=right style='text-align:right'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>128 </span></sup><b><i><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Total de
  hábitos (sume del 9 al 11, no puntúe </span></i></b></p>
  <p class=MsoNormal align=right style='text-align:right'><b><i><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>las alteraciones en
  los hábitos debidas a causas físicas)</span></i></b></p>
  </td>
  <td width="14%" style='width:14.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=center style='text-align:center'>
  
  
  <input id="t_habito" type="text" class="form-control" name="t_habito" maxlength="5"  value='{{(isset($data))  ? $data->t_habito  : old("t_habito") }}' >

  
  </p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:10.6pt'>
  <td width="85%" colspan=6 valign=top style='width:85.96%;border:none;
  border-right:solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:10.6pt'>
  <p class=MsoNormal align=right style='text-align:right'><sup><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>129 </span></sup><b><i><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>Total
  Funcional (enunciado del 1 al 11) </span></i></b></p>
  </td>
  <td width="14%" style='text-align: center; vertical-align: middle; width:14.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>

<input id="t_funcio" type="text" class="form-control" name="t_funcio" maxlength="5"  value='{{(isset($data))  ? $data->t_funcio  : old("t_funcio") }}' >


  </td>
 </tr>
 <tr height=0>
  <td width=303 style='border:none'></td>
  <td width=101 style='border:none'></td>
  <td width=91 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=101 style='border:none'></td>
  <td width=2 style='border:none'></td>
  <td width=99 style='border:none'></td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=7 style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color: white"> XV.
  EXAMEN MINIMO DEL ESTADO MENTAL (PARTE A) </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="32%" colspan=2 style='width:32.62%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>130.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estación del
  año: primavera, verano, otoño e invierno 
    
  <input id="mme130" type="text" class="form-control" name="mme130" maxlength="5"  value='{{(isset($data))  ? $data->mme130  : old("mme130") }}' >

  
  </span></p>
  </td>
  <td width="13%" style='width:13.42%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>134. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Año (a)</span></p>
  <input id="mme134" type="text" class="form-control" name="mme134" maxlength="5"  value='{{(isset($data))  ? $data->mme134  : old("mme134") }}' >
  </td>
  <td width="17%" style='width:17.36%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Max.
  Error (1)</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:
  6.0pt;font-family:"Arial","sans-serif"'>x 4 (b)</span></p>
  </td>
  <td width="27%" colspan=2 style='width:27.68%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>138. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dirección.
  
  <input id="mme138" type="text" class="form-control" name="mme138" maxlength="5"  value='{{(isset($data))  ? $data->mme138  : old("mme138") }}' >

  
  </span></p>
  </td>
  <td width="8%" style='width:8.92%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="32%" colspan=2 style='width:32.62%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>131. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Día de la
  semana. 
  
  <input id="mme131" type="text" class="form-control" name="mme131" maxlength="5"  value='{{(isset($data))  ? $data->mme131  : old("mme131") }}' >


  </span></p>
  </td>
  <td width="30%" colspan=2 style='width:30.78%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>135. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ciudad. 
  
  <input id="mme135" type="text" class="form-control" name="mme135" maxlength="5"  value='{{(isset($data))  ? $data->mme135  : old("mme135") }}' >

  
  </span></p>
  </td>
  <td width="27%" colspan=2 style='width:27.68%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>139. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Piso. 
  
  <input id="mme139" type="text" class="form-control" name="mme139" maxlength="5"  value='{{(isset($data))  ? $data->mme139  : old("mme139") }}' >
  
  
  </span></p>
  </td>
  <td width="8%" style='width:8.92%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="15%" style='width:15.22%;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>132.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mes (a)</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'>
  
  <input id="mme132" type="text" class="form-control" name="mme132" maxlength="5"  value='{{(isset($data))  ? $data->mme132  : old("mme132") }}' >

  
  </p>
  </td>
  <td width="17%" style='width:17.4%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><span style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Max.
  Error (1)</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><span style='font-size:
  6.0pt;font-family:"Arial","sans-serif"'>x 3(b)</span></p>
  </td>
  <td width="30%" colspan=2 style='width:30.78%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>136. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estado. 
  
  <input id="mme136" type="text" class="form-control" name="mme136" maxlength="5"  value='{{(isset($data))  ? $data->mme136  : old("mme136") }}' >

  
  </span></p>
  </td>
  <td width="22%" rowspan=2 style='width:22.88%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>140.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Registro: </span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Piña. </span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mesa. </span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Bolívar. </span></p>
  </td>
  <td width="4%" rowspan=2 style='width:4.8%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>&nbsp;</span></b></p>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>/1</span></b></p>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>/1</span></b></p>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>/1</span></b></p>
  </td>
  <td width="8%" rowspan=2 style='width:8.92%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <input id="mme140" type="text" class="form-control" name="mme140" maxlength="5"  value='{{(isset($data))  ? $data->mme140  : old("mme140") }}' >
  <p class=MsoNormal style='margin-top:3.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="32%" colspan=2 style='width:32.62%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>133.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Fecha.</span></p>
  <input id="mme133" type="text" class="form-control" name="mme133" maxlength="5"  value='{{(isset($data))  ? $data->mme133  : old("mme133") }}' >
  </td>
  <td width="30%" colspan=2 style='width:30.78%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>137. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nombre de la
  Institución. 
  
  <input id="mme137" type="text" class="form-control" name="mme137" maxlength="5"  value='{{(isset($data))  ? $data->mme137  : old("mme137") }}' >

  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=7 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:8.0pt;color:black'>En los enunciados 130
  al 140: 0 en caso que la respuesta del sujeto sea incorrecta y 1 en caso que
  dicha respuesta sea correcta.  La parte sombreada de los enunciados 132 y 134
  se puntúan 3 y 4 respectivamente  en caso que la respuesta del sujeto sea
  incorrecta. Para todos los enunciados, sí el sujeto no puede ser evaluado por
  deterioro grave de las funciones mentales registre – 88. Para todos los
  enunciados registre  -99 en caso que el sujeto no pudo ser evaluado por otras
  razones (ejemplo: por negación del sujeto). Registre el enunciado 140 de
  acuerdo a lo pautado en el manual.</span>
  </td>
 </tr>
 <tr height=0>
  <td width=108 style='border:none'></td>
  <td width=123 style='border:none'></td>
  <td width=95 style='border:none'></td>
  <td width=123 style='border:none'></td>
  <td width=162 style='border:none'></td>
  <td width=34 style='border:none'></td>
  <td width=63 style='border:none'></td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=9 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color: white"> XVI.
  EXAMEN MINIMO DEL ESTADO MENTAL (PARTE B) </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="23%" style='width:23.92%;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>141. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Memoria de
  dígitos.</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  6.0pt;margin-left:29.2pt;text-indent:-15.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Hacía
  adelante: 
  
  <input id="mme141a" type="text" class="form-control" name="mme141a" maxlength="5"  value='{{(isset($data))  ? $data->mme141a  : old("mme141a") }}' > 
  
  
   </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  6.0pt;margin-left:29.2pt;text-indent:-15.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Hacía
  atrás:     
  
  <input id="mme141b" type="text" class="form-control" name="mme141b" maxlength="5"  value='{{(isset($data))  ? $data->mme141b  : old("mme141b") }}' >

  </span></p>
  </td>
  <td width="3%" style='width:3.82%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  6.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif";color:black'>/6</span></b></p>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/4</span></b></p>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>&nbsp;</span></b></p>
  </td>
  <td width="6%" style='width:6.54%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <input id="mme141" type="text" class="form-control" name="mme141" maxlength="5"  value='{{(isset($data))  ? $data->mme141  : old("mme141") }}' > 
  </td>
  <td width="21%" style='width:21.98%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>142. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Atención y
  cálculo:</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:28.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Series de siete: </span>
  
  <input id="mme142a" type="text" class="form-control" name="mme142a" maxlength="5"  value='{{(isset($data))  ? $data->mme142a  : old("mme142a") }}' >  / 5
  
  </p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deletrear mundo:</span>
  
  <input id="mme142b" type="text" class="form-control" name="mme142b" maxlength="5"  value='{{(isset($data))  ? $data->mme142b  : old("mme142b") }}' >  / 1
  
  
  </p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'> </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Sumar suelto:  </span>
  
  <input id="mme142c" type="text" class="form-control" name="mme142c" maxlength="5"  value='{{(isset($data))  ? $data->mme142c  : old("mme142c") }}' >
  
  
  </p>
  </td>
  <td width="3%" style='width:3.5%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>&nbsp;</span></b></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif";color:black'>/5</span></b></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif";color:black'>/1</span></b></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif";color:black'>/1</span></b></p>
  </td>
  <td width="6%" style='width:6.56%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <input id="mme142" type="text" class="form-control" name="mme142" maxlength="5"  value='{{(isset($data))  ? $data->mme142  : old("mme142") }}' >
  </td>
  <td width="23%" style='width:23.28%;border:none;border-left:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>143. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Evocación.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Piña:     
  
    <input id="mme143a" type="text" class="form-control" name="mme143a" maxlength="5"  value='{{(isset($data))  ? $data->mme143a  : old("mme143a") }}' >
  
   </span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mesa: 
  
    <input id="mme143b" type="text" class="form-control" name="mme143b" maxlength="5"  value='{{(isset($data))  ? $data->mme143b  : old("mme143b") }}' >
  
  
  </span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:2.0pt;
  margin-left:24.85pt;text-indent:-12.75pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Bolívar:     
  
    <input id="mme143c" type="text" class="form-control" name="mme143c" maxlength="5"  value='{{(isset($data))  ? $data->mme143c  : old("mme143c") }}' >
  </span></p>
  </td>
  <td width="3%" valign=top style='width:3.82%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>&nbsp;</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/1</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/1</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/1</span></b></p>
  </td>
  <td width="6%" style='width:6.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <input id="mme143" type="text" class="form-control" name="mme143" maxlength="5"  value='{{(isset($data))  ? $data->mme143  : old("mme143") }}' >
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=9 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:9.0pt;color:black'>Evalúe según el
  contenido del manual</span>
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'> <b style="color: white"> XVII.
  EXAMEN ABREVIADO DE BLESSED </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="34%" style='width:34.26%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText2 style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span style='font-size:8.0pt;font-weight:normal;
  font-style:normal'>Maximo tres repeticiones:</span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><i><span style='font-size:8.0pt'>Juan
  Pérez, calle Comercio Nº42,Valencia</span></i></b></p>
  </td>
  <td width="32%" style='width:32.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>145. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Cuente al revés del 20 al 1. Máximo error
  (2), ponderado <b>x2</b>. 
  
      <input id="bleav145" type="text" class="form-control" name="bleav145" maxlength="5"  value='{{(isset($data))  ? $data->bleav145  : old("bleav145") }}' >
  
  </span></p>
  </td>
  <td width="33%" rowspan=2 style='width:33.4%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:10.75pt;text-indent:-10.75pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>147. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recordar
  nombre y dirección. Máximo error (5) <b>x2</b>. 
  
  <input id="bleav147" type="text" class="form-control" name="bleav147" maxlength="5"  value='{{(isset($data))  ? $data->bleav147  : old("bleav147") }}' >
  
  </span></p>
  <p class=MsoNormal style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:10.75pt;text-indent:-10.75pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>     Número de
  Aciertos: 
  
  <input id="bleav147r" type="text" class="form-control" name="bleav147r" maxlength="5"  value='{{(isset($data))  ? $data->bleav147r  : old("bleav147r") }}' >
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="34%" style='width:34.26%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>144. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Hora aproximada.  Máx. error (1)    <b>x3 
  
  <input id="bleav144" type="text" class="form-control" name="bleav144" maxlength="5"  value='{{(isset($data))  ? $data->bleav144  : old("bleav144") }}' >


  </b></span></p>
  </td>
  <td width="32%" style='width:32.34%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>146.  </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Meses del año al revés (Diciembre a Enero).
  Máx. error (2), ponderado <b>x2</b>. 
  
  <input id="bleav146" type="text" class="form-control" name="bleav146" maxlength="5"  value='{{(isset($data))  ? $data->bleav146  : old("bleav146") }}' >
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:  9.0pt'>Evalúe según el contenido del manual</span>
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color: white"> XVIII.
  EXAMEN MINIMO DEL ESTADO MENTAL (PARTE C) </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td colspan="2" width="26%" valign=top style='width:26.7%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>148.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Conocimiento General:</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Nicolás
  Maduro:   
  
  <input id="mme148a" type="text" class="form-control" name="mme148a" maxlength="2"  value='{{(isset($data))  ? $data->mme148a  : old("mme148a") }}' >
  
        </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Hugo Chávez:
    
    <input id="mme148b" type="text" class="form-control" name="mme148b" maxlength="2"  value='{{(isset($data))  ? $data->mme148b  : old("mme148b") }}' >
  
  
            </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Rafael
  Caldera:   
  
  <input id="mme148c" type="text" class="form-control" name="mme148c" maxlength="2"  value='{{(isset($data))  ? $data->mme148c  : old("mme148c") }}' >
  
      </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ramón J.
  Velásquez: </span>
  
      <input id="mme148d" type="text" class="form-control" name="mme148d" maxlength="2"  value='{{(isset($data))  ? $data->mme148d  : old("mme148d") }}' >
  
  </p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:29.2pt;text-indent:-17.85pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Carlos A.
  Pérez:     </span>
  
  <input id="mme148e" type="text" class="form-control" name="mme148e" maxlength="2"  value='{{(isset($data))  ? $data->mme148e  : old("mme148e") }}' >
  
  </p>
  </td>
 
  <td width="6%" valign=top style='width:6.52%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
   <input id="mme148" type="text" class="form-control" name="mme148" maxlength="2"  value='{{(isset($data))  ? $data->mme148  : old("mme148") }}' >
  </td>
  <td colspan="2" valign=top style='width:25.66%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>149. </span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Denominación:</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Casa. 
  
  <input id="mme149a" type="text" class="form-control" name="mme149a" maxlength="2"  value='{{(isset($data))  ? $data->mme149a  : old("mme149a") }}' >
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:red'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Tijeras. 
  <input id="mme149b" type="text" class="form-control" name="mme149b" maxlength="2"  value='{{(isset($data))  ? $data->mme149b  : old("mme149b") }}' >
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Camello. 
    
  <input id="mme149c" type="text" class="form-control" name="mme149c" maxlength="2"  value='{{(isset($data))  ? $data->mme149c  : old("mme149c") }}' >
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Armónica
  (Sinfonía) 
  
  <input id="mme149d" type="text" class="form-control" name="mme149d" maxlength="2"  value='{{(isset($data))  ? $data->mme149d  : old("mme149d") }}' >
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ponquecito. 
  
  <input id="mme149e" type="text" class="form-control" name="mme149e" maxlength="2"  value='{{(isset($data))  ? $data->mme149e  : old("mme149e") }}' >
  
  </span></p>
  </td>
  
  <td colspan="3" valign=top style='width:22.16%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif";color:white'>151.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:white'>Denominar</span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>f)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Escaleras 
  
  
  <input id="mme149f" type="text" class="form-control" name="mme149f" maxlength="2"  value='{{(isset($data))  ? $data->mme149f  : old("mme149f") }}' > / 1
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>g)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Raqueta. 
  
  <input id="mme149g" type="text" class="form-control" name="mme149g" maxlength="2"  value='{{(isset($data))  ? $data->mme149g  : old("mme149g") }}' > / 1
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>h)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Chupón. 
  
  <input id="mme149h" type="text" class="form-control" name="mme149h" maxlength="2"  value='{{(isset($data))  ? $data->mme149h  : old("mme149h") }}' > / 1
  
  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>i)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Dominós.
  
  <input id="mme149i" type="text" class="form-control" name="mme149i" maxlength="2"  value='{{(isset($data))  ? $data->mme149i  : old("mme149i") }}' > / 1

  </span></p>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  2.0pt;margin-left:24.85pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>j)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pirámide. 
  
  <input id="mme149j" type="text" class="form-control" name="mme149j" maxlength="2"  value='{{(isset($data))  ? $data->mme149j  : old("mme149j") }}' > / 1

  </span></p>
  </td>
 
  
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-size:8.0pt'>Evalúe según el contenido del
  manual</span>
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:12.75pt'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt;height:12.75pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color: white"> XIX.
  EXAMEN MINIMO DEL ESTADO MENTAL LENGUAJE (PARTE D) </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.65pt'>
  <td width="45%" rowspan=2 valign=top style='width:45.14%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>150.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Repetición de frases:</span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:31.5pt;text-indent:-18.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pancha
  plancha con cuatro planchas.  <input id="mme150a" type="text" class="form-control" name="mme150a" maxlength="2"  value='{{(isset($data))  ? $data->mme150a  : old("mme150a") }}' > / 1
  </span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:31.5pt;text-indent:-18.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>El
  autobús llegó al terminal con una hora de retraso.  <input id="mme150b" type="text" class="form-control" name="mme150b" maxlength="2"  value='{{(isset($data))  ? $data->mme150b  : old("mme150b") }}' > / 1
  </span></p>
  </td>
  <td width="6%" rowspan=2 valign=top style='width:6.48%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <input id="mme150" type="text" class="form-control" name="mme150" maxlength="2"  value='{{(isset($data))  ? $data->mme150  : old("mme150") }}' >
  </td>
  <td width="38%" valign=top style='width:38.36%;border:none;border-bottom:
  solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>151.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Instrucciones verbales.  
  
  <input id="mme151" type="text" class="form-control" name="mme151" maxlength="2"  value='{{(isset($data))  ? $data->mme151  : old("mme151") }}' >
  
  
  </span></p>
  </td>
  <td width="5%" valign=top style='width:5.12%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/3</span></b></p>
  </td>
  <td width="4%" valign=top style='width:4.92%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.65pt'>
 
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.6pt'>
  <td width="38%" valign=top style='width:38.36%;border:none;border-bottom: solid windowtext 1.0pt;padding:0cm 3.5pt 0cm 3.5pt;'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>152.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> Instrucciones escritas.  
  <input id="mme152" type="text" class="form-control" name="mme152" maxlength="2"  value='{{(isset($data))  ? $data->mme152  : old("mme152") }}' >
  </span></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>    
  El paciente no sabe leer: (    )</span></p>
  </td>
  <td width="5%" valign=top style='width:5.12%;border:none;border-bottom:solid windowtext 1.0pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>/1</span></b></p>
  </td>
  <td width="4%" valign=top style='width:4.92%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.6pt'>
  
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:7.0pt'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:7.0pt'>
  <span style='font-size:8.0pt'>Evalúe según el contenido del
  manual</span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.6pt'>
  <td width="95%" colspan=4 valign=top style='width:95.08%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:15.6pt'>
  <p class=MsoNormal style='margin-top:3.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>153. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Escribir una
  oración completa (  <input id="mme153" type="text" class="form-control" name="mme153" maxlength="2"  value='{{(isset($data))  ? $data->mme153  : old("mme153") }}' >
     <b>/1</b>): </span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>    a) El paciente  sabe escribir,
  pero no puede hacerlo por problemas físicos (       ).</span></p>
  <p class=MsoNormal style='margin-top:3.0pt'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>    b) El paciente no sabe escribir
  (       ).      <b> </b></span></p>
  </td>
  <td width="4%" valign=top style='width:4.92%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:15.6pt'>
  
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:16.45pt'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt;height:16.45pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color: white"> XX.
  HABILIDADES CONSTRUCCIONALES </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.05pt'>
  <td width="95%" valign=top style='width:95.06%;border:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt;height:15.05pt'>
  <p class=MsoNormal><sup><span style='font-family:"Arial","sans-serif"'>154. 
  </span></sup><span style='font-family:"Arial","sans-serif"'>Dibujar
  al lado del original</span>
  
  <input id="mme154" type="text" class="form-control" name="mme154" maxlength="2"  value='{{(isset($data))  ? $data->mme154  : old("mme154") }}' > / 2
  
  </p>
  </td>
  <td width="4%" valign=top style='width:4.94%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt;height:15.05pt'>
  
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'> <b style="color: white"> XXI.
  JUICIO </b></span>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>A caballo
  regalado no se le mira el colmillo 
  
  <input id="juicioa" type="text" class="form-control" name="juicioa" maxlength="2"  value='{{(isset($data))  ? $data->juicioa  : old("juicioa") }}' >

  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Más vale
  pájaro en mano que cien volando. 
  
  <input id="juiciob" type="text" class="form-control" name="juiciob" maxlength="2"  value='{{(isset($data))  ? $data->juiciob  : old("juiciob") }}' >

  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cuando el
  río suena es porque piedras trae. 
  
  <input id="juicioc" type="text" class="form-control" name="juicioc" maxlength="2"  value='{{(isset($data))  ? $data->juicioc  : old("juicioc") }}' >
  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Camarón que
  se duerme se lo lleva la corriente 
  
  <input id="juiciod" type="text" class="form-control" name="juiciod" maxlength="2"  value='{{(isset($data))  ? $data->juiciod  : old("juiciod") }}' >
  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Para qué
  sirven los pulmones? 
  
  <input id="juicioe" type="text" class="form-control" name="juicioe" maxlength="2"  value='{{(isset($data))  ? $data->juicioe  : old("juicioe") }}' >
  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>f)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deme algunas
  razones por las cuales debemos cocinar la comidas
  <input id="juiciof" type="text" class="form-control" name="juiciof" maxlength="2"  value='{{(isset($data))  ? $data->juiciof  : old("juiciof") }}' >
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>g)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Qué haría
  usted si caminando por la calle se encuentra una cartera con documentos
  personales? 
  
  <input id="juiciog" type="text" class="form-control" name="juiciog" maxlength="2"  value='{{(isset($data))  ? $data->juiciog  : old("juiciog") }}' >
  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=left style='margin-left:18.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>h)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Qué haría
  usted si es la primera persona en ver humo y fuego salir de una tienda de
  alimentos? 
  
  <input id="juicioh" type="text" class="form-control" name="juicioh" maxlength="2"  value='{{(isset($data))  ? $data->juicioh  : old("juicioh") }}' >
  
  </span></p>
  </td>
  <td width="7%" style='width:7.18%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="92%" style='width:92.82%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoBodyText align=right style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:6.0pt;margin-left:0cm;text-align:right'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";letter-spacing:5.4pt'>TOTAL</span></b></p>
  </td>
  <td width="7%" valign=top style='width:7.18%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-top:4.0pt'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>155. </span></sup>
    
  <input id="juicio" type="text" class="form-control" name="juicio" maxlength="2"  value='{{(isset($data))  ? $data->juicio  : old("juicio") }}' >
  
  </p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoHeading7><span style='font-size:8.0pt;color:black'>Escriba
  cada una de las respuestas dichas por el paciente en el rayado adyacente</span></p>
  </td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:21.2pt'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt;height:21.2pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXII.
  INVENTARIO NEUROPSIQUIATRICO</span></b>
  </td>
 </tr>
 <tr style='height:471.7pt'>
  <td width="53%" colspan=2 valign=top style='width:53.9%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:471.7pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>156.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> <b>IDEAS DELIRANTES:</b></span></p>
  <p class=MsoBodyText align=left style='text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>     ¿El
  participante tiene ideas que Ud. Sabe que no son ciertas? Por ejemplo,
  insiste que la gente está tratando de hacerle daño o le están robando sus
  cosas. ¿Dice que los miembros de su familia no son quienes dicen ser o que su
  casa no es su casa? No me refiero a tener meras suspicacias; estoy interesado
  en saber si el participante esta convencido de que estas circunstancias
  realmente le están sucediendo? </span>
  
  <SELECT id="ide_delir" name="ide_delir" >
             <option {{ (isset($data) && $data->ide_delir == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ide_delir == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  
  <span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que está en peligro, que alguien
  planea hacerle daño? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que alguien le esta robando las
  pertenencias? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que su conyugue tiene relaciones
  extramaritales?</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que personas no invitadas están
  viviendo en su casa? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que su conyugue u otra persona no son
  quienes dice ser?</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><a name="OLE_LINK2"><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Cree que su casa no
  es su casa?</span></a><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>
  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que miembros de su familia están
  planeando abandonarlo?</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree que personaje de TV y revistas se
  encuentran presentes en su propia casa? ¿Intenta hablar o interactuar con
  ellos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Cree el paciente en otra cosa inusual que
  no haya explorado? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>. </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>: </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Delirios presentes pero
  inofensivos.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. Delirios angustiantes y
  desorganizan.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. Delirios muy
  desorganizantes y son fuente importante de conducta alterada.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E. Total de Ideas
  delirantes B X C 
  
  <input id="tot_deli" type="text" class="form-control" name="tot_deli" maxlength="2"  value='{{(isset($data))  ? $data->tot_deli  : old("tot_deli") }}' >

  </span></b></p>
  </td>
  <td width="46%" valign=top style='width:46.1%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:471.7pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>158.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> <b>AGITACIÓN / AGRESIÓN:</b></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿El participante tiene periodos
  donde se rehúsa a cooperar o donde no acepta ayuda? ¿El o ella es difícil de
  manejar?
  
  <SELECT id="agitacio" name="agitacio" >
             <option {{ (isset($data) && $data->agitacio == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->agitacio == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿El participante se molesta con sus
  cuidadores o se resiste a</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      llevar a cabo actividades tales
  como bañarse o cambiarse de  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      ropa? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Se empeña en que las cosas salgan a su
  modo? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Se muestra poco cooperador, se resiste a
  recibir ayuda de  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      otros? </span><span
  style='font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Presenta alguna
  otra conducta que lo tome difícil de manejar? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Grita o insulta con enojo? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Azota puertas, golpea muebles o avienta
  cosas? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Intenta el individuo herir o pegar a
  otros?<span style='color:red'> </span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Presenta otro tipo de conducta de
  agresividad o agitación? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>. </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por sem)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>: </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Conducta desorganizada pero
  manejable mediante  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>    redirección y confianza
  re-establecida.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. Conductas
  desorganizantes y difíciles de redirigir o </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>    controlar.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. La agitación es muy
  desorganizantes y es una fuente importante de dificultades; existe riesgo de
  daño a si mismo. Se requieren medicamentos.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Agitación B X C 
  
  <input id="tot_agit" type="text" class="form-control" name="tot_agit" maxlength="2"  value='{{(isset($data))  ? $data->tot_agit  : old("tot_agit") }}' >
  
  </span></b></p>
  </td>
 </tr>
 <tr style='height:339.9pt'>
  <td width="45%" valign=top style='width:45.1%;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:339.9pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>157.</span></sup><b><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> ALUCINACIONES:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿El participante tiene
  alucinaciones tales como visiones falsas o escucha voces? ¿Para ver,  oír,
  sentir cosas que no se encuentran presentes? Con esta pregunta no solo
  referimos a creencias erróneas tales como decir que alguien que ya murió
  sigue vivo; más bien estamos preguntando si de hecho el sujeto ha presentado
  sensaciones visuales o auditivas anormales.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> <b>A. En caso de ser cierto, señale:</b></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿El participante menciona escuchar voces o
  actúa como si de hecho las oyera? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Habla con personas que no están presentes?
  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Describe que ve cosas que nadie más puede
  ver o se comporta como si estuviera viendo cosas que nadie puede ver
  (personas, animales)? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Reporta oler cosas que los demás no pueden
  oler? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Describe sentir cosas en la piel o
  aparenta sentir cosas que se arrastran o que lo tocan? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Describe sabores que no tiene causa
  aparente? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Describe algún otro tipo de experiencia
  sensorial poco común? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>. </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>: </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Alucinaciones  presentes
  pero inofensivas.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. Alucinaciones
  angustiantes y desorganizan.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. Alucinaciones muy
  desorganizantes las cuales son fuente importante de conducta alterada.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E. Total de
  Alucinaciones  B XC 
  
  <input id="tot_aluc" type="text" class="form-control" name="tot_aluc" maxlength="2"  value='{{(isset($data))  ? $data->tot_aluc  : old("tot_aluc") }}' >

  </span></b></p>
  </td>
  <td width="8%" style='width:8.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:339.9pt'>
  <SELECT id="alucinac" name="alucinac" >
             <option {{ (isset($data) && $data->alucinac == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->alucinac == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  </td>
  <td width="46%" valign=top style='width:46.1%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:339.9pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>159.</span></sup><b><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> DEPRESIÓN / DISFORIA:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿El participante parece triste o
  deprimido? ¿Dice sentirse triste o deprimido? 
    
      <SELECT id="depresio" name="depresio" >
             <option {{ (isset($data) && $data->depresio == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->depresio == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿El participante tiene periodos de llanto o
  sollozo que parecen</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      indicar tristeza? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Se devalúa o dice sentirse fracasado? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Se muestra poco cooperador, se resiste a
  recibir ayuda de  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      otros? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Dice ser una mala persona que merece ser
  castigada? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Parece sentirse desesperanzado o dice no
  tener futuro </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>       alguno? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Expresa deseos de morir o habla de
  quitarse la vida? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Dice el participante que es una carga para
  la familia o que la </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      familia estaría mejor sin el ? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-family:
  "Arial","sans-serif";'> </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Presenta otros signos de depresión o
  tristeza? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>. </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>: </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Depresión angustiante que
  generalmente responde a redirección. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. Depresión angustiante,
  síntomas depresivos reportados por el participante los cuales son difíciles
  de mitigar.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. Depresión angustiante
  fuente de sufrimiento</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Depresión  B X C 
  
  <input id="tot_depr" type="text" class="form-control" name="tot_depr" maxlength="2"  value='{{(isset($data))  ? $data->tot_depr  : old("tot_depr") }}' >
  
  </span></b></p>
  </td>
 </tr>
 <tr height=0>
  <td width=319 style='border:none'></td>
  <td width=62 style='border:none'></td>
  <td width=326 style='border:none'></td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 align=left
 width="100%" style='width:100.0%;border-collapse:collapse;border:none;
 margin-left:4.8pt;margin-right:4.8pt'>
 <tr style='page-break-inside:avoid;height:14.55pt'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt;height:14.55pt'>
   <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXII.
  INVENTARIO NEUROPSIQUIATRICO</span></b>
  </td>
 </tr>
 <tr style='height:475.15pt'>
  <td width="51%" colspan=2 valign=top style='width:51.12%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
   <b><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>160. ANSIEDAD </span></b>
  <br>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿El participante esta nervioso
  preocupado o asustado sin motivo aparente? ¿Parece inquieto muy tenso? ¿Tiene
  miedo de estar alejado de usted?
  
  
      <SELECT id="ansiedad" name="ansiedad" >
             <option {{ (isset($data) && $data->ansiedad == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->ansiedad == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿El participante
  dice estar preocupado acerca de eventos planeados? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Tiene periodos en
  los que se siente tembloroso, incapaz de </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>       relajarse o se siente
  excesivamente tenso? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Tiene periodos (o
  se queja de) falta de aire, jadea o suspira sin </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      motivo aparente excepto
  nerviosismo? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se queja de
  sentirse muy inquieto (“mariposas en el estomago”), </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      o que el corazón le palpita de
  forma apresurada y esto se asocia  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      con nerviosismo?<span
  style='color:red'> </span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Evita ciertos
  lugares o situaciones que le hacen sentir más </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      nervioso tales como subirse a
  un automóvil, reunirse con amigos o </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      estar en multitudes? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se pone nervioso o
  inquieto cuando esta separado de su </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      cuidador? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se pega a Ud para
  evitar ser separado? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Muestra otros
  signos de ansiedad? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>. Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Ansiedad angustiante
  generalmente responde a redirección y responde a la confianza.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. La A. es angustiante,
  síntomas reportados espontáneamente los cuales son difíciles de mitigar.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. A. muy angustiante,
  fuente importante de sufrimiento.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E. Total de Ansiedad
  B X C 
  
  <input id="tot_ansi" type="text" class="form-control" name="tot_ansi" maxlength="2"  value='{{(isset($data))  ? $data->tot_ansi  : old("tot_ansi") }}' >

  
  
  </span></b></p>
  </td>
  <td width="48%" colspan=2 valign=top style='width:48.7%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:475.15pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>162.</span></sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> <b>APATÍA/ INDIFERENCIA:</b></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿Ha perdido interés en el mundo
  que les rodea? ¿Ha perdido interés en llevar a cabo actividades o le falta
  motivación para empezar cosas nuevas? Presenta dificultad para involucrase en
  una conversación o para hacer tareas? ¿Se muestra apático o indiferente? 
  
  
      <SELECT id="apatía_i" name="apatía_i" >
             <option {{ (isset($data) && $data->apatía_i == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->apatía_i == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Parece menos
  espontáneo y menos activo de lo habitual? <span style='color:red'>NPI162a1</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Es difícil que el
  paciente inicie una conversación? <span style='color:red'>NPI162a2</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Es menos afectuoso
  o falto de emociones cuando se le   </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      compara con su forma de ser
  habitual? <span style='color:red'>NPI162a3</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Contribuye menos a
  las labores del hogar? <span style='color:red'>NPI162a4</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Luce menos
  interesado en las activ. y los planes de los </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     demás? <span style='color:red'>NPI162a5</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Ha perdido el
  interés en sus familiares y amigos?<span style='color:red'> NPI162a6</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se muestra menos
  entusiasta acerca de sus intereses </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      comunes? <span
  style='color:red'>NPI162a7</span></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Muestra otra señal
  de no estar interesado en cosas nuevas? <span style='color:red'>NPI162a8</span></span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: <span
  style='color:red'>NPI162b</span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>. Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por sem)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + vces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>: <b><span
  style='color:red'>NPI162c</span></b></span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. La A es notoria pero no
  interfiere en forma importante con las rutinas diarias; solo es moderadamente
  diferente a la conducta habitual del paciente; pero responde a sugerencias
  para participar en actividades. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. La A es muy evidente;
  puede ser manejada por el cuidador mediante coacción y estímulos; responde
  pacientes cercanos o de miembros de la familia.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. La A es muy evidente y
  generalmente responde a ningún tipo de estimulo o evento externo.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? <span style='color:red'>NPI162d</span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Apatía/Indiferencia B X C 
  
  
  <input id="tot_apat" type="text" class="form-control" name="tot_apat" maxlength="2"  value='{{(isset($data))  ? $data->tot_apat  : old("tot_apat") }}' >
  
  </span></b></p>
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:67.15pt'>
  <td width="46%" rowspan=2 valign=top style='width:46.18%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;padding:0cm 5.4pt 0cm 5.4pt;height:67.15pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>161.</span></sup></b><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> RECOCIJO / EUFORIA:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿Parece el participante estar
  demasiado alegre o demasiado contento sin motivo aparente? No me refiero a la
  alegría normal que viene de ver a los amigos, recibir regalos o pasar tiempo
  con la familia. Me refiero a si el sujeto tiene un humor persistente y
  anormalmente bueno o encuentra el lado humorístico de cosas que las demás
  personas no perciben. 
  
      <SELECT id="regocijo" name="regocijo" >
             <option {{ (isset($data) && $data->regocijo == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->regocijo == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser cierto, señale:</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Parece sentirse
  demasiado bien o demasiado contento, diferente </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      a como lo es por lo general? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Encuentra gracioso
  o se ríe de cosas que otros no encuentran </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      graciosas? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Parece tener un
  sentido del humor infantil con risa tonta o </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      inapropiada (como cuando algo
  desafortunado le pasa a otra </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      persona)? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Cuenta chistes o
  hace comentarios que no parecen graciosos a </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>       los demás pero que a el le
  parecen humorísticos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Lleva a cabo
  travesuras infantiles como pellizcar o jugar? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Tiende a hacerse el
  importante o dice tener más habilidades o riquezas que las que en realidad
  tiene? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Muestra otros
  signos d sentirse demasiado bien o feliz? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>. Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad:<span
  style='color:red'> </span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. Recocijo notorio pero no
  desorganizantes.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. Recocijo notoriamente
  anormal.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. Recocijo muy
  pronunciado, paciente eufórico y casi todo lo encuentra gracioso.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E. Total de Euforia
  B X C 
  
  
  <input id="tot_reg" type="text" class="form-control" name="tot_reg" maxlength="2"  value='{{(isset($data))  ? $data->tot_reg  : old("tot_reg") }}' >
  
  </span></b></p>
  </td>
  <td width="4%" style='width:4.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:67.15pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:18.0pt;font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
  <td width="44%" rowspan=2 valign=top style='width:44.38%;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:67.15pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><sup><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>163.</span></sup><b><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'> DESINHIBICIÓN:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     ¿Parece actuar impulsivamente el
  paciente y sin pensar? ¿Dice cosas que generalmente no se dicen en público;
  hace cosas que lo apenan a usted o a los otros? 
  
  
      <SELECT id="desinhib" name="desinhib" >
             <option {{ (isset($data) && $data->desinhib == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->desinhib == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> A. En caso de ser
  cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Actúa
  impulsivamente sin considerar consecuencias? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Habla con extraños
  como si los conociera? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Les dice cosas
  insensibles a las personas que hieren a sus </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      sentimientos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se expresa con
  crudeza o hace comentarios sexuales que </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      generalmente no hubiera hecha? <span
  style=''> </span>¿Habla abiertamente acerca de cuestiones
  personales o </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      privadas que  generalmente no
  se discuten en publico? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Se toma ciertas
  libertades, toca o abraza a los demás de forma   </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>      que no va de acuerdo a su
  carácter? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif";'> </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Presenta otros
  signos de perdida de control del  impulso? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>B. Frecuencia: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>. Ocasional
  (&lt;1 vez x sem) 3. Frecuentemente (&gt;1 vez por sem)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + vces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C. Severidad: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>1. Leve. La D. es notable pero
  responde a redirección y guía. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>2. Moderada. La D es muy evidente y
  difícil que el cuidador la supere. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>3. Marcados. La D generalmente no
  responde a cualquier intervención del cuidador y es una fuente de vergüenza o
  angustia social.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece
  que perturba las AVD este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     1. Mínimamente       4.
  Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Desinhibición B X C 
  
  
  <input id="tot_desi" type="text" class="form-control" name="tot_desi" maxlength="2"  value='{{(isset($data))  ? $data->tot_desi  : old("tot_desi") }}' >
  
  </span></b></p>
  </td>
  <td width="4%" style='width:4.32%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:67.15pt'>
  <p class=MsoBodyText align=center style='text-align:center'>&nbsp;</p>
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:190.5pt'>
  <td width="4%" style='width:4.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:190.5pt'>
 
  </td>
  <td width="4%" valign=bottom style='width:4.32%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:190.5pt'>
  
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.44%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:21.2pt'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt;height:21.2pt'>
  <span style='font-family:"Lucida Sans Unicode","sans-serif"'><b style="color:white"> XXII.
  INVENTARIO NEUROPSIQUIATRICO</span></b>
  </td>
 </tr>
 <tr style='height:448.7pt'>
  <td width="50%" valign=top style='width:50.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:448.7pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>164.
  IRRITABILIDAD/ LABILIDAD:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>     </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Se torna el participante irritable o
  fácilmente molesto? ¿Es muy variable su estado de ánimo? ¿Se muestra
  excesivamente impaciente? No me refiero a la frustración de tener pérdida de
  memoria o incapacidad de llevar a cabo tareas comunes; me interesa saber si
  el individuo se muestra anormalmente irritable, impaciente o presenta cambios
  emocionales diferentes de su personalidad habitual. 
  
  
      <SELECT id="irritabi" name="irritabi" >
             <option {{ (isset($data) && $data->irritabi == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->irritabi == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>A. En caso de ser cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Tiene un temperamento difícil, se
  torna muy irritable, enojándose</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     con la menor provocación, sobre cosas
  sin importancia? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Tiene cambios súbitos en el estado
  de ánimo, estando muy bien </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     un minuto y enojado al siguiente? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Tiene arranques súbitos de enojo? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Se muestra impaciente, incapaz de
  manejar retrasos o esperar </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>       actividades ya planeadas? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Esta irritable y de mal humor? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Muestra otros signos de
  irritabilidad? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Se pega a Ud para evitar ser
  separado? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>B. Frecuencia</span></b><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>1</span></b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>. Ocasional (&lt;1 vez x sem) 3.
  Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>C. Severidad: </span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>1. Leve. La
  irritabilidad o labilidad es notable pero generalmente responde a dirección y
  re-establecimiento de la confianza.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>2. Moderado. El problema es muy evidente y
  difícil que el cuidador lo solucione.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>3. Marcados.El problema es muy evidente
  generalmente corresponde a las intervenciones del cuidador y es una fuente
  importante de sufrimiento.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece que perturba las AVD
  este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     1. Mínimamente       4. Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>E. Total de Irritabilidad B X C 
  
  <input id="tot_irri" type="text" class="form-control" name="tot_irri" maxlength="2"  value='{{(isset($data))  ? $data->tot_irri  : old("tot_irri") }}' >
  
  
  </span></b></p>
  </td>
  <td width="48%" valign=top style='width:48.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:448.7pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>166.
  SUEÑO:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>     </span><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>¿Tiene el participante dificultad para
  dormir (no tenga en cuenta si el sujeto simplemente se levanta una o dos
  veces por la noche para ir al baño y vuelve a dormirse inmediatamente)? ¿Esta
  levantado en la noche? ¿Durante la noche deambula, se viste o va a otras
  habitaciones? 
  
      <SELECT id="sueno" name="sueno" >
             <option {{ (isset($data) && $data->sueno == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->sueno == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> A. En caso de ser cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Tiene el paciente dificultad para
  conciliar el sueño? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Se levanta por la noche y luego no
  puede dormir? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Deambula, pasea o se dedica actv.
  Inapropiada de noche? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿ De noche se levanta, viste y trata
  de salir pensando que ya es </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     de día? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Se despierta muy tempranamente en la
  mañana (antes que los </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     demás? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Ha perdido el interés en sus
  familiares y amigos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Tiene otros comportamientos
  nocturnos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Le despierta durante la noche? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>¿Duerme de forma excesiva durante el
  dia? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>B. Frecuencia: <span style='color:red'>NPI166b</span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>1</span></b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>. Ocasional (&lt;1 vez x sem)
  3.Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>C. Severidad: <span style='color:red'>NPI166c</span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>1. Leve. Tiene actividad nocturna pero no
  resulta perturbadora. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>2. Moderada. La actv. Noct. Ocurren y
  perturban la rutina del centro. Puede </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>    haber más de un comportamiento noct
  anormal.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>3. Marcados. Puede haber más de un
  comportamiento noct anormal; el paciente esta muy perturbado durante la
  noche.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>.</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece que perturba las AVD
  este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>0. Nada                    3. Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     1. Mínimamente       4. Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Sueño B X C 
  
  <input id="tot_suen" type="text" class="form-control" name="tot_suen" maxlength="2"  value='{{(isset($data))  ? $data->tot_suen  : old("tot_suen") }}' >
  
  
  </span></b></p>
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='height:191.35pt'>
  <td width="50%" valign=top style='width:50.82%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:191.35pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>165.
  ACTIVIDAD MOTORA ABERRANTE:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     ¿El participante se pasea, hace las
  cosas una y otra vez, como abrir los armarios y los cajones, picotea las
  cosas o enreda hilos o cordones?  
  
      <SELECT id="act_moto" name="act_moto" >
             <option {{ (isset($data) && $data->act_moto == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->act_moto == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>A. En caso de ser cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Se pasea por la casa sin motivo
  aparente? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿rebusca cosas abriendo y
  desempacando cajones o armarios? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Se pone o se quita la ropa
  repetidamente? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Mantiene actividades repetidas o
  hábitos que lleva a cabo una y otra vez? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Realiza activ. Repetitivas como
  jugar con los botones, picor, enredar hilos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Se mueve de forma nerviosa y
  excesiva, parece incapaz de estarse quieto, </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>     se levanta o se truena mucho los
  dedos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Lleva a cabo cualquier otra
  actividad una y otra vez? </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>B. Frecuencia:<span style='color:red'> </span></span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>1</span></b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>. Ocasional (&lt;1 vez x sem) 3.
  Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>C. Severidad: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>1. Leve. Activ Mot anormal es notoria pero
  interfiere poco con las AVD .</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>2. Moderada. Activ. Mot. Anormal muy
  evidente pero el cuidador la puede </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>    solucionar.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>3.Marcados. Activ. Mot. Anormal muy
  evidente y que generalmente no responde a ninguna intervención por parte del
  cuidador y es fuente importante de sufrimiento del paeticipante.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece que perturba las AVD
  este comportamiento? </span></b><span style='font-size:8.0pt;font-family:
  "Arial","sans-serif"'>0. Nada                    3. Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     1. Mínimamente       4. Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>E. Total de Actividad motora aberrante B X
  C 
  <input id="tot_moto" type="text" class="form-control" name="tot_moto" maxlength="2"  value='{{(isset($data))  ? $data->tot_moto  : old("tot_moto") }}' >
  
  </span></b></p>
  </td>
  <td width="48%" valign=top style='width:48.98%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:191.35pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>167.
  APETITO Y HABITOS DE ALIMENTACIÓN:</span></b></p>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:0cm'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>    
  ¿Presenta el participante trastornos del apetito, cambios en el peso o
  hábitos alimentarios inusuales (marcar no si el sujeto se encuentra
  incapacitado y tiene que ser alimentado)?¿ Ha habido algún cambio en sus
  preferencias sobre el tipo de comida? 
  
  <SELECT id="apetito" name="apetito" >
             <option {{ (isset($data) && $data->apetito == 0) ? 'selected' : '' }} value="0" >0: No</option>
             <option {{ (isset($data) && $data->apetito == 1) ? 'selected' : '' }} value="1" >1: Si</option>
      </SELECT>
  
  
  </span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'> A. En caso de ser cierto, señale:</span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Tiene poco apetito? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Tiene un apetito excesivo? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>¿Ha perdido peso? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Ha ganado peso? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Ha experimentado algún cambio en sus
  preferencias acerca del tipo de  </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>     comida como apetito excesivo por
  dulces u otros tipos de alimentos? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Ha desarrollado comportamientos
  alimentarios como comer siempre los </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>     alimentos siguiendo el mismo orden? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>¿Presenta otros cambios que no
  hayamos hablado? </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif";color:red'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>B. Frecuencia: 1</span></b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>. Ocasional (&lt;1
  vez x sem) 3.Frecuentemente (&gt;1 vez por semana)</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2. A menudo (1 vez x sem)  4. Muy
  frecuentemente (1 o + veces día)</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>C. Severidad: </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>1. Leve. Presenta cambios en el apetito o
  las comidas, pero no han tenido </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>    repercusión en su peso ni son
  perturbadoras</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>2. Moderada.Los cambios del apetito estan
  presentes y causan pequeñas </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>    fluctuaciones en el peso. </span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>3. Marcados. Hay cambios obvios en el
  apetito o las comidas, que causan fluctuaciones en el peso, son anormales o
  perturban al paciente en cualquier otro modo.</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:7.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  <p class=MsoNormal style='text-align:justify'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>D. ¿Cuánto le parece que perturba las AVD
  este comportamiento? </span></b></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     0. Nada                    3.
  Moderadamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     1. Mínimamente       4. Severamente</span></p>
  <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>     2. Ligeramente        5. Muy
  severamente</span></p>
  <p class=MsoBodyText><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>E.
  Total de Apetito y Alimentación B X C 
  
  <input id="tot_apet" type="text" class="form-control" name="tot_apet" maxlength="3"  value='{{(isset($data))  ? $data->tot_apet  : old("tot_apet") }}' >
  
  </span></b></p>
  </td>
  <td style='border:none;padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
</table>

<br>


<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:double windowtext 3.0pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXIII.
  ESCALAS NEUROPSIQUIÁTRICAS</span></b>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="12%" style='width:12.5%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>168. EMEMs</span></p>
  <input id="EMEMs" type="text" class="form-control" name="EMEMs" maxlength="3"  value='{{(isset($data))  ? $data->EMEMs  : old("EMEMs") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>169. EMEMf</span></p>
       <input id="EMEMf" type="text" class="form-control" name="EMEMf" maxlength="3"  value='{{(isset($data))  ? $data->EMEMf  : old("EMEMf") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>170. BOM</span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>C</span></p>
   <input id="bomc" type="text" class="form-control" name="bomc" maxlength="3"  value='{{(isset($data))  ? $data->bomc  : old("bomc") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>171. </span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Memoria</span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif"'>:</span></p>
   <input id="memoria" type="text" class="form-control" name="memoria" maxlength="3"  value='{{(isset($data))  ? $data->memoria  : old("memoria") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>172. Orientación:</span></p>
  <input id="orient" type="text" class="form-control" name="orient" maxlength="3"  value='{{(isset($data))  ? $data->orient  : old("orient") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>173. Juicio</span></p>
  <p class=MsoBodyText align=center style='text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Juicio </span></b><b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif"'>(la misma variable
  de 155)</span></b></p>
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>174. AVD instrm.</span></p>
  <input id="avdi_tot" type="text" class="form-control" name="avdi_tot" maxlength="3"  value='{{(isset($data))  ? $data->avdi_tot  : old("avdi_tot") }}' >
  </td>
  <td width="12%" style='width:12.5%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>175. AVD básico</span></p>
  <input id="avdb_tot" type="text" class="form-control" name="avdb_tot" maxlength="3"  value='{{(isset($data))  ? $data->avdb_tot  : old("avdb_tot") }}' >
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="12%" valign=top style='width:12.5%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Sume los enunciados:
  130, 131, 132a, 133, 134a, 135 al 143, 148 al 154. </span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Sume los enunciados
  130,  131, 132a, 133, 134a, 135 al 140, 142a, 143, 149a y b, 150a, 151 al
  153, 154a</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Sume los enunciados
  sombreados: 132b, 134b, 144 al 147. </span></p>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>(valor ponderado).</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Sume los enunciados
  140, 141, 143, 147 (número de aciertos) y 148</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Sume los enunciados
  130, 131, 132a, 133, 134a, 135 al 139 y el 144 (acierto)</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Total del apartado
  155</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Parte instrumental
  de la Escala de Lawton</span></p>
  </td>
  <td width="12%" valign=top style='width:12.5%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='text-align:center'><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Parte de
  funcionamiento básico de la escala de Lawton</span></p>
  </td>
 </tr>
</table>

<p class=MsoBodyText>&nbsp;</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXIV.
  CLASIFICACIÓN CLINICA DE LA DEMENCIA</span></b>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Escala Clínica de
  Ponderación de la Demencia (CDR)</span></b></p>
  </td>
  <td width="50%" colspan=4 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Escala Modificada de
  Hachinski</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Memoria (considere el apartado 171) 
  
            <SELECT id="memocdr" name="memocdr" >
             <option {{ (isset($data) && $data->memocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->memocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->memocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->memocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->memocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Comienzo súbito de
  los síntomas 
  
  <input id="hach1" type="text" class="form-control" name="hach1" maxlength="3"  value='{{(isset($data))  ? $data->hach1  : old("hach1") }}' >
  
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/2</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Orientación (considere el apartado 172)  
  
            <SELECT id="oriencdr" name="oriencdr" >
             <option {{ (isset($data) && $data->oriencdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->oriencdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->oriencdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->oriencdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->oriencdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deterioro por pasos
  (no es progresivo) 
  
  <input id="hach2" type="text" class="form-control" name="hach2" maxlength="3"  value='{{(isset($data))  ? $data->hach2  : old("hach2") }}' >
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Juicio y solución de problemas (considere
  el apartado 173 y el resultado del Inventario Neuropsiquiátrico) 
  
            <SELECT id="juiciocdr" name="juiciocdr" >
             <option {{ (isset($data) && $data->juiciocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->juiciocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->juiciocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->juiciocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->juiciocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
          </SELECT>
  
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Síntomas orgánicos
  (incontinencia urinaria, alt.marcha) 
  
  <input id="hach3" type="text" class="form-control" name="hach3" maxlength="3"  value='{{(isset($data))  ? $data->hach3  : old("hach3") }}' >
  
  
   </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Actividades sociales (Considere Inventario
  Neuropsiquiátrico) 
  
  
          <SELECT id="actsoccdr" name="actsoccdr" >
             <option {{ (isset($data) && $data->actsoccdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->actsoccdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->actsoccdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->actsoccdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->actsoccdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Episodios de
  labilidad emocional 
  
  <input id="hach4" type="text" class="form-control" name="hach4" maxlength="3"  value='{{(isset($data))  ? $data->hach4  : old("hach4") }}' >
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Hogar y aficiones (considere los apartados
  XIVa) 

          <SELECT id="Hogarcdr" name="Hogarcdr" >
             <option {{ (isset($data) && $data->Hogarcdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->Hogarcdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->Hogarcdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->Hogarcdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->Hogarcdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  
  
  
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Historia de
  hipertensión arterial  
  
  <input id="hach5" type="text" class="form-control" name="hach5" maxlength="3"  value='{{(isset($data))  ? $data->hach5  : old("hach5") }}' >
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/1</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Cuidado personal (considere los apartados
  XIVb) 
  
        <SELECT id="cuidadocdr" name="cuidadocdr" >
             <option {{ (isset($data) && $data->cuidadocdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cuidadocdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->cuidadocdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->cuidadocdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->cuidadocdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  
  
  
  </span></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Historia de 
  enfermedad cerebrovascular 
  
  <input id="hach6" type="text" class="form-control" name="hach6" maxlength="3"  value='{{(isset($data))  ? $data->hach6  : old("hach6") }}' >
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/2</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>176. Estadio clínico de
  la demencia (CDR) 
  
        <SELECT id="cdr" name="cdr" >
             <option {{ (isset($data) && $data->cdr == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->cdr == '0.5') ? 'selected' : '' }} value="0.5" >0.5: Deterioro cuestionable</option>
             <option {{ (isset($data) && $data->cdr == 1) ? 'selected' : '' }} value="1" >1: deterioro leve</option>
             <option {{ (isset($data) && $data->cdr == 2) ? 'selected' : '' }} value="2" >2: Deterioro moderado</option>
             <option {{ (isset($data) && $data->cdr == 3) ? 'selected' : '' }} value="3" >3: Deterioro severo</option>
        </SELECT>
  
  
  
  </span></b>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Síntomas
  neurológicos focales 
  
  <input id="hach7" type="text" class="form-control" name="hach7" maxlength="3"  value='{{(isset($data))  ? $data->hach7  : old("hach7") }}' >
    
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/2</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Comienzo y Curso del Cuadro Demencial</span></b></p>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Signos neurológicos
  focales 
  
    <input id="hach8" type="text" class="form-control" name="hach8" maxlength="3"  value='{{(isset($data))  ? $data->hach8  : old("hach8") }}' >
  
  </span></p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>/2</span></b></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border-top:none;border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>177. Año de comienzo de
  la sintomatología  
  
  <input id="ano_sint" type="text" class="form-control" name="ano_sint" maxlength="10"  value='{{(isset($data))  ? $data->ano_sint  : old("ano_sint") }}' >
  
  
  
  </span>
  </td>
  <td width="46%" colspan=3 style='width:46.14%;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>181. </span></sup><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";letter-spacing:3.5pt'>PUNTUACIÓN FINAL</span></b>
  
  <input id="esc_hach" type="text" class="form-control" name="esc_hach" maxlength="3"  value='{{(isset($data))  ? $data->esc_hach  : old("esc_hach") }}' >

  </p>
  </td>
  <td width="3%" style='width:3.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:gray'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><sup><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>178. </span></sup><span style='font-size:
  8.0pt;font-family:"Arial","sans-serif"'>Edad de comienzo de la sintomatología
  
  
  <input id="edad_sin" type="text" class="form-control" name="edad_sin" maxlength="3"  value='{{(isset($data))  ? $data->edad_sin  : old("edad_sin") }}' >
  
  </span></p>
  </td>
  <td width="50%" colspan=4 style='width:50.0%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Puntuación mayor o
  igual a 4 puntos demencia vascular. Menos de 4, demencias por otras causas.</span></i></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:27.6pt'>
  <td width="50%" colspan=2 style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:27.6pt'>
  <p class=MsoBodyText align=left style='text-align:left'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>179. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Comienzo del cuadro
  clínico: 
  
        <SELECT id="comi_cua" name="comi_cua" >
             <option {{ (isset($data) && $data->comi_cua == 1) ? 'selected' : '' }} value="1" >1 = Incidioso</option>
             <option {{ (isset($data) && $data->comi_cua == 2) ? 'selected' : '' }} value="2" >2 = Subito</option>
        </SELECT>
  
  
  </span></p>
  <p class=MsoBodyText align=left style='margin-left:36.0pt;text-align:left;
  text-indent:-18.0pt'><span style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:gray'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Insidioso.
  Súbito.</span></p>
  </td>
  <td width="50%" colspan=4 rowspan=3 style='width:50.0%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:27.6pt'>
  <p class=MsoBodyText align=left style='margin-top:6.0pt;text-align:left'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>182. </span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>¿Cuál fue el primer
  síntoma del cuadro demencial? 
  
    <SELECT id="sintom_1" name="sintom_1" >
             <option {{ (isset($data) && $data->sintom_1 == 0) ? 'selected' : '' }} value="0" >0 = Sin sintomas</option>
             <option {{ (isset($data) && $data->sintom_1 == 'a') ? 'selected' : '' }} value="a" >a = Deterioro de Memoria</option>
             <option {{ (isset($data) && $data->sintom_1 == 'b') ? 'selected' : '' }} value="b" >b = Trastornos de la personalidad</option>
             <option {{ (isset($data) && $data->sintom_1 == 'c') ? 'selected' : '' }} value="c" >c = Trastornos del Lenguaje</option>
             <option {{ (isset($data) && $data->sintom_1 == 'd') ? 'selected' : '' }} value="d" >d = Alteraciones motoras</option>
             <option {{ (isset($data) && $data->sintom_1 == 'e') ? 'selectee' : '' }} value="e" >e = Alucinaciones</option>
    </SELECT>
  
  </span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>a)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  Deterioro de la
  Memoria.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>b)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  Trastornos de la
  personalidad.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>c)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  Trastornos del
  lenguaje.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>d)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  Alteraciones
  motoras.</span></p>
  <p class=MsoBodyText align=left style='margin-top:1.0pt;margin-right:0cm;
  margin-bottom:1.0pt;margin-left:23.55pt;text-align:left;text-indent:-7.1pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>e)<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>  Alucinaciones</span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:46.0pt'>
  <td width="50%" colspan=2 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt;height:46.0pt'>
  <p class=MsoBodyText align=left style='text-align:left'><sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>180.</span></sup><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'> Curso del cuadro
  clínico: </p>

        <SELECT id="cur_cuad" name="cur_cuad" >
             <option {{ (isset($data) && $data->cur_cuad == 1) ? 'selected' : '' }} value="1" >1: Lento y gradual</option>
             <option {{ (isset($data) && $data->cur_cuad == 2) ? 'selected' : '' }} value="2" >2: Rapido y gradual</option>
             <option {{ (isset($data) && $data->cur_cuad == 3) ? 'selected' : '' }} value="3" >3: fluctuante</option>
             <option {{ (isset($data) && $data->cur_cuad == 4) ? 'selected' : '' }} value="4" >4: Por pasos</option>
        </SELECT>


  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="50%" colspan=2 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText align=left style='text-align:left'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>El enunciado 189 se
  indicará el año de comienzo; el 190 la edad y los 191 y 192  el numero de la
  alternativa. Los enunciados 190 al 193 serán llenados solo si  el sujeto
  tiene diagnóstico de demencia. En caso de sujetos normales, rellene el
  recuadro con -88</span></i></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXV.
  DIAGNÓSTICO DIFERENCIAL DE DEMENCIA </span></b>
  </td>
 </tr>
 <tr>
  <td width="30%" valign=top style='width:30.38%;border:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>NINGUNA CONDICIÓN</span></p>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Probable enfermedad
  de Alzheimer.</span></p>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Probable demencia de
  cuerpos de Lewy.</span></p>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>3.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Probable demencia
  vascular.</span></p>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>4.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Probable enfermedad
  de Parkinson.</span></p>
  <p class=MsoNormal style='margin-left:14.2pt;text-indent:-14.2pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>5.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Demencia lobar
  frontotemporal.</span></p>
  </td>
  <td width="32%" colspan=2 valign=top style='width:32.1%;border:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:10.65pt;text-indent:-10.65pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>6.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Posible enfermedad
  de Alzheimer.</span></p>
  <p class=MsoNormal style='margin-left:10.65pt;text-indent:-10.65pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>7.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Posible enfermedad
  de cuerpos de Lewy</span></p>
  <p class=MsoNormal style='margin-left:10.65pt;text-indent:-10.65pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>8.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Posible demencia
  vascular.</span></p>
  <p class=MsoNormal style='margin-left:10.65pt;text-indent:-10.65pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>9.<span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Posible enfermedad
  de Parkinson.</span></p>
  <p class=MsoNormal style='margin-left:10.65pt;text-indent:-10.65pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>10.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Enfermedad de
  Huntington.</span></p>
  <p class=MsoNormal style='margin-left:17.75pt;text-indent:-17.75pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>11.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Demencia por causas
  metabólicas, tóxicas o TCE.</span></p>
  </td>
  <td width="30%" valign=top style='width:30.1%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>12.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alzheimer de
  presentación inusual.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>13.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alzheimer +
  Parkinson.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>14.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alzheimer +
  Vascular.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>15.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Alzheimer + otras
  demencias.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>16.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Otras demencias
  mixtas.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>17.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Otras causas de
  demencias.</span></p>
  <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>18.<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Demencia por causas
  desconocidas.</span></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.42%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt'>
 <SELECT id="diag_dem" name="diag_dem" class="form-control">
            @for ($i = 1; $i < 19; $i++)
                   <option {{ (isset($data) && $data->diag_dem ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor
            
      </SELECT>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>183</span></p>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:18.0pt;
  font-family:"Arial","sans-serif";color:gray'> </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=6 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Señale en el
  recuadro la causa de demencia que explica el cuadro clínico del paciente. <b>(solo
  si CDR = ó &gt; 1)</b></span></i></p>
  </td>
 </tr>
 <tr height=0>
  <td width=214 style='border:none'></td>
  <td width=139 style='border:none'></td>
  <td width=88 style='border:none'></td>
  <td width=213 style='border:none'></td>
  <td width=26 style='border:none'></td>
  <td width=28 style='border:none'></td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXVI. OTROS
  DIAGNÓSTICOS NEUROLÓGICOS</span></b>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>184
  Enfermedad de Parkinson  que no es causa  1ra de demencia.</span></p>
  <SELECT id="enf_park" name="enf_park" >
             <option {{ (isset($data) && $data->enf_park == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->enf_park == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  </td>
  <td width="48%" style='width:48.94%;border:solid windowtext 1.0pt;border-left:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>190. Enfermedad de Hakin que no es causa
  1ra de demencia. 
  
  <SELECT id="hakin" name="hakin" >
             <option {{ (isset($data) && $data->hakin == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->hakin == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>185.
  Enfermedad de Huntington que no es causa  1ra de demencia </span></p>
  <SELECT id="enf_hunt" name="enf_hunt" >
             <option {{ (isset($data) && $data->enf_hunt == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->enf_hunt == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  </td>
  <td width="48%" style='width:48.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>191. Temblor esencial     
  
        <SELECT id="temb_esc" name="temb_esc" >
             <option {{ (isset($data) && $data->temb_esc == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->temb_esc == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>186. Movimientos extrapiramidales debido a
  fármacos 
    
      <SELECT id="mov_farm" name="mov_farm" >
             <option {{ (isset($data) && $data->mov_farm == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->mov_farm == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  
  </span></p>
  </td>
  <td width="48%" style='width:48.94%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>192. Otros trastornos  
  
  <SELECT id="trans_ot" name="trans_ot" >
             <option {{ (isset($data) && $data->trans_ot == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->trans_ot == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT> 
  
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>187.  Diskinesia tardía 
  
     <SELECT id="disqui_t" name="disqui_t" >
             <option {{ (isset($data) && $data->disqui_t == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->disqui_t == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  </span></p>
  </td>
  <td width="48%" style='width:48.94%;border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>193. Síndrome Amnésico Primario Demencia. 
  
       <SELECT id="sind_amn" name="sind_amn" >
             <option {{ (isset($data) && $data->sind_amn == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->sind_amn == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT> 
  
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>188.  Esclerosis Múltiples  
  
      <SELECT id="escleros" name="escleros" >
             <option {{ (isset($data) && $data->escleros == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->escleros == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  </span></p>
  </td>
  <td width="48%" style='width:48.94%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>194. Aneurisma Cerebral 
  
  
      <SELECT id="aneurism" name="aneurism" >
             <option {{ (isset($data) && $data->aneurism == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->aneurism == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT> 
  
  </span></p>
  </td>
 </tr>
 <tr>
  <td width="51%" style='width:51.06%;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>189. Tumor Cerebral que no es causa 1ra de
  demencia
  
      <SELECT id="tumor" name="tumor" >
             <option {{ (isset($data) && $data->tumor == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->tumor == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT>
  
  
  </span></p>
  </td>
  <td width="48%" style='width:48.94%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>195. Soplo Carotídeo. 
  
  <SELECT id="soplo_ca" name="soplo_ca" >
             <option {{ (isset($data) && $data->soplo_ca == 0) ? 'selected' : '' }} value="0" >0 = No</option>
             <option {{ (isset($data) && $data->soplo_ca == 1) ? 'selected' : '' }} value="1" > 1 = Si</option>  
      </SELECT> 
  
  </span></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=2 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Señale en el
  recuadro otros diagnósticos neurológicos presentados por el paciente.</span></i></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXVII.
  EXISTENCIA DE CONDICIÓN QUE PODRÍA ESTAR ASOCIADA A BAJO RENDIMIENTO EN EMEM
  Y BOMC</span></b>
  </td>
 </tr>
 <tr>
  <td width="44%" valign=top style='width:44.28%;border:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></b><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>NINGUNA
  CONDICIÓN.</span></b></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Analfabetismo
  o diferencias culturales mayores.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deterioro
  auditivo.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deterioro
  visual.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Impedimento
  motor.</span></p>
  </td>
  <td width="44%" valign=top style='width:44.28%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Manejo
  inadecuado del idioma.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Poca
  colaboración.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pruebas
  no realizadas.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Otras:
  ( ).</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mas
  de una condición.</span></p>
  </td>
  <td width="11%" valign=top style='width:11.44%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText><span style='font-size:4.0pt;font-family:"Arial","sans-serif";
  color:gray'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:3.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>208</span></p>
 
  <SELECT id="cond_eme" name="cond_eme" class="form-control">
            @for ($i = 0; $i < 10; $i++)
                   <option {{ (isset($data) && $data->cond_eme ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor    
      </SELECT>

  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Señale en el
  recuadro  ”0” en caso que no exista ninguna condición asociada al bajo
  rendimiento. En caso contrario, señale la causa indicando en el recuadro.</span></i></p>
  </td>
 </tr>
</table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <b style="color: white"><span style='font-family:"Lucida Sans Unicode","sans-serif"'>XXVIII.
  CONDICIONES QUE IMPIDEN REALIZAR LA BATERÍA NEUROPSICOLÓGICA</span></b>
  </td>
 </tr>
 <tr>
  <td width="44%" valign=top style='width:44.28%;border:solid windowtext 1.0pt;
  border-right:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><b><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif"'>0. NINGUNA CONDICIÓN.</span></b></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Afasia
  motora.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Afasia
  sensitiva.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Disartria
  severa.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:18.0pt;text-indent:-18.0pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Deterioro
  visual y auditivo severo</span></p>
  </td>
  <td width="44%" valign=top style='width:44.28%;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Hostilidad
  y poca colaboración.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Paciente
  Psicótico y/o conducta bizarra.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Demencia
  moderada a severa.</span></p>
  <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:17.85pt;text-indent:-17.85pt'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Mas
  de una condición</span></p>
  </td>
  <td width="11%" valign=top style='width:11.44%;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoBodyText><span style='font-size:4.0pt;font-family:"Arial","sans-serif";
  color:gray'>&nbsp;</span></p>
  <p class=MsoNormal align=center style='margin-top:3.0pt;text-align:center'><span
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>209</span></p>
  
       <SELECT id="psicolog" name="psicolog" class="form-control">
            @for ($i = 0; $i < 8; $i++)
                   <option {{ (isset($data) && $data->psicolog ==  $i) ? 'selected' : '' }} value="{{$i}}" > {{$i}}</option>
            @endfor    
      </SELECT>
  
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width="100%" colspan=3 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><i><span
  style='font-size:6.0pt;font-family:"Arial","sans-serif"'>Señale en el
  recuadro  ”0” en caso que no exista alguna condición que le impida al sujeto 
  presentar la batería neuropsicológica. En caso que no pueda presentar dicha
  batería, señale la causa indicando  la razón en el recuadro.</span></i></p>
  </td>
 </tr>
</table>

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


