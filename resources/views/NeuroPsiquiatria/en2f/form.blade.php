@extends('layouts.main')
@section('title', 'EVALUACION CLINICA NEUROPSIQUIATRICA')
@section('content')

            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('en2f.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>EVALUACION CLINICA NEUROPSIQUIATRICA (2do Versión)</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('en2f.update',  $data->id) : route('en2f.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                       @include('patient.patient')

                     <table class="table table-striped  table-condensed table-hover">
                          <tr>

                            <td style="text-align: left">Nombre:</label>
                            <input class="form-control" id="first_name" type="text" name="first_name" required  readonly="">
                            </td> 

                           
                         
                             <td style="text-align: left; width: 10%">Edad:</label>
                            <input class="form-control" id="age" type="text" name="age" required  readonly="">
                            </td> 
                                   
                            <td style="text-align: left">Educación: 
                               <input id="educacio" type="text" class="form-control" name="educacio"  value='{{(isset($data))  ? $data->educacio  : old("educacio") }}' maxlength="25">

                             

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('education_grade') }}</strong>
                                    </span>
                                @endif
                            </td>

                           
                          </tr>
                          <tr>
                            
                          <td style="text-align: left">N° de Estudio:
                              <input class="form-control" id="hist_id" type="text"  name="hist_id" required readonly="">
                            </td>

                             <td style="text-align: left">Fecha:
                               
                              <input id="fech_neu" type="date" class="form-control" name="fech_neu"  value='{{(isset($data))  ? date("Y-m-d", strtotime($data->fech_neu))  :date("Y-m-d") }}' requiered>

                                @if ($errors->has('fech_neu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fech_neu') }}</strong>
                                    </span>
                                @endif
                              
                            </td>

                          
                        

                           <td style="text-align: left;">
                              Evaluado por:
                                <input id="Evaluador" type="text" class="form-control" name="Evaluador"  value='{{(isset($data))  ? $data->Evaluador  : old("Evaluador") }}' maxlength="25">
                             
                            </td>
                          
                        </tr>

                        </table>


<body -VE style='tab-interval:36.0pt'>

<div class=WordSection1>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width="26%" colspan=3 style='width:26.64%;border-top:double windowtext 1.5pt;
  border-left:double windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:double windowtext 1.5pt;mso-border-left-alt:double windowtext 1.5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>1. Memoria a Corto Plazo:</span></b></p>
  </td>
  <td width="36%" colspan=3 style='width:36.68%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>2. Atención:</span></b></p>
  </td>
  <td width="36%" colspan=3 style='width:36.68%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:none;border-right:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>3. Orientación</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width="13%" style='width:13.3%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>a) Mango</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <input id="MCP_a" type="text" class="form-control" name="MCP_a"  value='{{(isset($data))  ? $data->MCP_a  : old("MCP_a") }}' maxlength="3">
  </td>
  <td width="6%" rowspan=4 style='width:6.66%;border-top:none;border-left:none;
  border-bottom:double windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:double windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <input id="MCP_puntaje" type="text" class="form-control" name="MCP_puntaje"  value='{{(isset($data))  ? $data->MCP_puntaje  : old("MCP_puntaje") }}' maxlength="3">
  </td>
  <td width="25%" rowspan=2 style='width:25.02%;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>a) Días de la
  semana al revés</span></p>
  </td>
  <td width="5%" rowspan=2 style='width:5.84%;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
        <input id="Atenc_a" type="text" class="form-control" name="Atenc_a"  value='{{(isset($data))  ? $data->Atenc_a  : old("Atenc_a") }}' maxlength="3">
  </td>
  <td width="5%" rowspan=4 style='width:5.84%;border-top:none;border-left:none;
  border-bottom:double windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:double windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <input id="Atenc_puntaje" type="text" class="form-control" name="Atenc_puntaje"  value='{{(isset($data))  ? $data->Atenc_puntaje  : old("Atenc_puntaje") }}' maxlength="2">
  </td>
  <td width="24%" style='width:24.18%;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>a) Persona </span></p>
  </td>
  <td width="6%" rowspan=3 style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>/3<b
  style='mso-bidi-font-weight:normal'>
    
    <input id="Orient_a" type="text" class="form-control" name="Orient_a"  value='{{(isset($data))  ? $data->Orient_a  : old("Orient_a") }}' maxlength="2">


  </b></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'><b
  style='mso-bidi-font-weight:normal'>
    <input id="Orient_b" type="text" class="form-control" name="Orient_b"  value='{{(isset($data))  ? $data->Orient_b  : old("Orient_b") }}' maxlength="2">
  </b></span></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'> <input id="Orient_c" type="text" class="form-control" name="Orient_c"  value='{{(isset($data))  ? $data->Orient_c  : old("Orient_c") }}' maxlength="2">
  </span></p>
  </td>
  <td width="5%" rowspan=3 style='width:5.84%;border:none;border-right:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'>

  <input id="Orient_puntaje" type="text" class="form-control" name="Orient_puntaje"  value='{{(isset($data))  ? $data->Orient_puntaje  : old("Orient_puntaje") }}' maxlength="2">

</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width="13%" style='width:13.3%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>b) Tabla</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <input id="MCP_b" type="text" class="form-control" name="MCP_b"  value='{{(isset($data))  ? $data->MCP_b  : old("MCP_b") }}' maxlength="3">
  </td>
  <td width="24%" style='width:24.18%;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>b) Espacio</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width="13%" style='width:13.3%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>c) Rojo</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <input id="MCP_c" type="text" class="form-control" name="MCP_c"  value='{{(isset($data))  ? $data->MCP_c  : old("MCP_c") }}' maxlength="3">
  </td>
  <td width="25%" rowspan=2 style='width:25.02%;border:none;border-bottom:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>b) Vocales al
  revés</span></p>
  </td>
  <td width="5%" rowspan=2 style='width:5.84%;border:none;border-bottom:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <input id="Atenc_b" type="text" class="form-control" name="Atenc_b"  value='{{(isset($data))  ? $data->Atenc_b  : old("Atenc_b") }}' maxlength="3">
  </td>
  <td width="24%" style='width:24.18%;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>c) Tiempo</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width="13%" style='width:13.3%;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:double windowtext 1.5pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>d) Medio</span></p>
  </td>
  <td width="6%" style='width:6.66%;border:none;border-bottom:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <input id="MCP_d" type="text" class="form-control" name="MCP_d"  value='{{(isset($data))  ? $data->MCP_d  : old("MCP_d") }}' maxlength="3">
  </td>
  <td width="36%" colspan=3 style='width:36.68%;border-top:none;border-left:
  none;border-bottom:double windowtext 1.5pt;border-right:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
'></span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width="32%" colspan=3 style='width:32.42%;border-top:double windowtext 1.5pt;
  border-left:double windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:double windowtext 1.5pt;mso-border-left-alt:double windowtext 1.5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>4. Memoria reciente 5 min:</span></b></p>
  </td>
  <td width="32%" colspan=2 style='width:32.44%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>5. Caculo:</span></b></p>
  </td>
  <td width="35%" colspan=3 style='width:35.14%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:none;border-right:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'>6. Construcción:</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:13.05pt'>
  <td width="19%" style='width:19.12%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>  </span>a) Mango</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
      <input id="MR5_a" type="text" class="form-control" name="MR5_a"  value='{{(isset($data))  ? $data->MR5_a  : old("MR5_a") }}' maxlength="2">
  </td>
  <td width="6%" rowspan=4 style='width:6.62%;border-top:none;border-left:none;
  border-bottom:double windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:double windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
     <input id="MR5_puntaje" type="text" class="form-control" name="MR5_puntaje"  value='{{(isset($data))  ? $data->MR5_puntaje  : old("MR5_puntaje") }}' maxlength="2">
  </td>
  <td width="25%" rowspan=4 style='width:25.06%;border:none;border-bottom:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="7%" rowspan=4 style='width:7.38%;border-top:none;border-left:none;
  border-bottom:double windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:double windowtext 1.5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
     <input id="Calculo" type="text" class="form-control" name="Calculo"  value='{{(isset($data))  ? $data->Calculo  : old("Calculo") }}' maxlength="2">
  </td>
  <td width="20%" rowspan=2 style='width:20.14%;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>a) Cruz</span></p>
  </td>
  <td width="8%" rowspan=2 style='width:8.34%;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.05pt'>
       <input id="Const_a" type="text" class="form-control" name="Const_a"  value='{{(isset($data))  ? $data->Const_a  : old("Const_a") }}' maxlength="2">

  </td>
  <td width="6%" rowspan=4 style='width:6.66%;border-top:none;border-left:none;
  border-bottom:double windowtext 1.5pt;border-right:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
      <input id="Const_puntaje" type="text" class="form-control" name="Const_puntaje"  value='{{(isset($data))  ? $data->Const_puntaje  : old("Const_puntaje") }}' maxlength="2">

  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:6.8pt'>
  <td width="19%" style='width:19.12%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:6.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>  </span>b) Tabla</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:6.8pt'>
       <input id="MR5_b" type="text" class="form-control" name="MR5_b"  value='{{(isset($data))  ? $data->MR5_b  : old("MR5_b") }}' maxlength="2">
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.15pt'>
  <td width="19%" style='width:19.12%;border:none;border-left:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>  </span>c) Rojo</span></p>
  </td>
  <td width="6%" style='width:6.66%;padding:0cm 5.4pt 0cm 5.4pt;height:14.15pt'>
      <input id="MR5_c" type="text" class="form-control" name="MR5_c"  value='{{(isset($data))  ? $data->MR5_c  : old("MR5_c") }}' maxlength="2">
  </td>
  <td width="20%" rowspan=2 style='width:20.14%;border:none;border-bottom:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.15pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'> </span>b) Reloj</span></p>
  </td>
  <td width="8%" rowspan=2 style='width:8.34%;border:none;border-bottom:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.15pt'>
      <input id="Const_b" type="text" class="form-control" name="Const_b"  value='{{(isset($data))  ? $data->Const_b  : old("Const_b") }}' maxlength="2">

  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:3.5pt'>
  <td width="19%" style='width:19.12%;border-top:none;border-left:double windowtext 1.5pt;
  border-bottom:double windowtext 1.5pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:3.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>  </span>d) Medio</span></p>
  </td>
  <td width="6%" style='width:6.66%;border:none;border-bottom:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:3.5pt'>
     <input id="MR5_d" type="text" class="form-control" name="MR5_d"  value='{{(isset($data))  ? $data->MR5_d  : old("MR5_d") }}' maxlength="2">
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:9.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:55.75pt'>
  <td width="32%" style='width:32.38%;border-top:double 1.5pt;border-left:double 1.5pt;
  border-bottom:solid 1.0pt;border-right:solid 1.0pt;border-color:windowtext;
  mso-border-top-alt:double 1.5pt;mso-border-left-alt:double 1.5pt;mso-border-bottom-alt:
  solid .5pt;mso-border-right-alt:solid .5pt;mso-border-color-alt:windowtext;
  padding:0cm 5.4pt 0cm 5.4pt;height:55.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>7. Juicio Practico:</span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>a)<span
  style='mso-spacerun:yes'>                                           
  </span>/2</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
       <input id="JuicoP_a" type="text" class="form-control" name="JuicoP_a"  value='{{(isset($data))  ? $data->JuicoP_a  : old("JuicoP_a") }}' maxlength="2">


  </span></b><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>     </span>b)<span
  style='mso-spacerun:yes'>                                           
  </span>/2</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
            <input id="JuicoP_b" type="text" class="form-control" name="JuicoP_b"  value='{{(isset($data))  ? $data->JuicoP_b  : old("JuicoP_b") }}' maxlength="2">


  </span></b><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
  <td width="32%" style='width:32.38%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:55.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>8. Memoria reciente
  10/30 min: </span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>a)
  Mango<span style='mso-spacerun:yes'>          </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>         </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>b)
  Tabla<span style='mso-spacerun:yes'>            </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>       </span>/8</span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>
    
            <input id="MR10_puntaje" type="text" class="form-control" name="MR10_puntaje"  value='{{(isset($data))  ? $data->MR10_puntaje  : old("MR10_puntaje") }}' maxlength="2">


  </span></b><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'><span
  style='mso-spacerun:yes'>  </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>c)
  Rojo<span style='mso-spacerun:yes'>              </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>         </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>d)
  Medio<span style='mso-spacerun:yes'>           </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>    </span></span></p>
  </td>
  <td width="35%" colspan=2 style='width:35.22%;border-top:double windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 1.5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:double 1.5pt;
  mso-border-left-alt:solid .5pt;mso-border-bottom-alt:solid .5pt;mso-border-right-alt:
  double 1.5pt;mso-border-color-alt:windowtext;padding:0cm 5.4pt 0cm 5.4pt;
  height:55.75pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>9. Lenguaje: </span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>a)
  Denominación ficha A<span style='mso-spacerun:yes'>       </span>/18</span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";'>
    
        <input id="MR10_puntaje" type="text" class="form-control" name="MR10_puntaje"  value='{{(isset($data))  ? $data->MR10_puntaje  : old("MR10_puntaje") }}' maxlength="2">



  </span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>b)
  Denominación ficha B<span style='mso-spacerun:yes'>       </span>/19</span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";'>
    
    <input id="Leng_a" type="text" class="form-control" name="Leng_a"  value='{{(isset($data))  ? $data->Leng_a  : old("Leng_a") }}' maxlength="2">

  </span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>c)
  Repetición<span style='mso-spacerun:yes'>                  </span><span
  style='mso-spacerun:yes'>       </span>/16</span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>
    
    <input id="Leng_b" type="text" class="form-control" name="Leng_b"  value='{{(isset($data))  ? $data->Leng_b  : old("Leng_b") }}' maxlength="2">


  </span></b><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>d)
  Compresión<span style='mso-spacerun:yes'>               </span><span
  style='mso-spacerun:yes'>       </span>/10</span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>
    
     <input id="Leng_c" type="text" class="form-control" name="Leng_c"  value='{{(isset($data))  ? $data->Leng_c  : old("Leng_c") }}' maxlength="2">


  </span></b><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:17.5pt'>
  <td width="32%" rowspan=3 style='width:32.38%;border-top:none;border-left:
  double windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;mso-border-left-alt:double windowtext 1.5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>10. Memoria no
  verbal:</span></b><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>    </span>D<span
  style='mso-spacerun:yes'>             </span>L</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>a)
  Moneda<span style='mso-spacerun:yes'>              </span><span
  style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'>   </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>         </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>b)
  Lápiz<span style='mso-spacerun:yes'>                    </span><span
  style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'> </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>         </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>c)
  Llaves<span style='mso-spacerun:yes'>              </span><span
  style='mso-spacerun:yes'>  </span><span style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'>  </span><span
  style='mso-spacerun:yes'>  </span>/1<span
  style='mso-spacerun:yes'>             </span>/1<span
  style='mso-spacerun:yes'>         </span></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>d)
  Cuchara<span style='mso-spacerun:yes'>              </span><span
  style='mso-spacerun:yes'> </span><span style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'> </span><span
  style='mso-spacerun:yes'> </span>/1<span
  style='mso-spacerun:yes'>             </span>/1 </span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>      </span>e)
  Peine<span style='mso-spacerun:yes'>                  </span><span
  style='mso-spacerun:yes'>  </span><span
  style='mso-spacerun:yes'>  </span>/1<span
  style='mso-spacerun:yes'>             </span>/1 </span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span
  style='mso-spacerun:yes'>                                                
  </span>/10</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
      <input id="Leng_d" type="text" class="form-control" name="Leng_d"  value='{{(isset($data))  ? $data->Leng_d  : old("Leng_d") }}' maxlength="2">

  </span></b><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>  </span><span
  style='mso-spacerun:yes'>            </span></span></p>
  </td>
  <td width="32%" rowspan=3 style='width:32.38%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>11. Semejanzas: </span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>a)
  Melón-Cambur<span style='mso-spacerun:yes'>          </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>b)
  Rosa-Clavel<span style='mso-spacerun:yes'>              </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>c)
  Bombillo-Vela<span style='mso-spacerun:yes'>            </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>d)
  Bicicleta-Autobús<span style='mso-spacerun:yes'>      </span>/2<span
  style='mso-spacerun:yes'>         </span>/16</span><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  '>
    

     <input id="MnoVD_puntaje" type="text" class="form-control" name="MnoVD_puntaje"  value='{{(isset($data))  ? $data->MnoVD_puntaje  : old("MnoVD_puntaje") }}' maxlength="2">

  </span></b><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>e)
  Pulsera-Zarcillos<span style='mso-spacerun:yes'>       </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>f)
  Botella-Caja<span style='mso-spacerun:yes'>               </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>g)
  Regla-Reloj<span style='mso-spacerun:yes'>               </span>/2</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '><span style='mso-spacerun:yes'>       </span>h)
  Caballo-Manzana<span style='mso-spacerun:yes'>      </span>/2</span></p>
  </td>
  <td width="35%" colspan=2 style='width:35.22%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:double windowtext 1.5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>12. Aprendizaje de
  Pares Asociados </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:44.5pt'>
  <td width="16%" style='width:16.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:44.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>a) Caja-Clima</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>b) Alto-Bajo</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>c) Casa-Ingreso</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>d) Libro-Pagina</span></p>
  </td>
  <td width="19%" style='width:19.02%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 1.5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:44.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Casa -<span style='mso-spacerun:yes'>      </span>/1</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Alto -<span style='mso-spacerun:yes'>       
  </span>/1</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Clima -<span style='mso-spacerun:yes'>    
  </span>/1<span style='mso-spacerun:yes'>     </span>/4</span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";'>
    
       <input id="MnoVL_puntaje" type="text" class="form-control" name="MnoVL_puntaje"  value='{{(isset($data))  ? $data->MnoVL_puntaje  : old("MnoVL_puntaje") }}' maxlength="2">


  </span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Libro -<span style='mso-spacerun:yes'>     
  </span>/1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:24.55pt'>
  <td width="16%" style='width:16.2%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>a) Casa-Ingreso</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>b) Caja-Clima</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>c) Libro-Pagina</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>d) Alto-Bajo</span></p>
  </td>
  <td width="19%" style='width:19.02%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:double windowtext 1.5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;mso-border-right-alt:double windowtext 1.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.55pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Libro -<span style='mso-spacerun:yes'>     
  </span>/1</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Casa -<span style='mso-spacerun:yes'>     </span>/1</span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Alto -<span style='mso-spacerun:yes'>      </span><span
  style='mso-spacerun:yes'> </span>/1<span style='mso-spacerun:yes'>     
  </span>/4</span><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";'>
    
        <input id="Lenguaje2_puntaje" type="text" class="form-control" name="Lenguaje2_puntaje"  value='{{(isset($data))  ? $data->Lenguaje2_puntaje  : old("Lenguaje2_puntaje") }}' maxlength="2">

  </span></b><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>Clima -<span style='mso-spacerun:yes'>    </span>/1</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:16.15pt'>
  <td width="100%" colspan=4 style='width:100.0%;border:double windowtext 1.5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.15pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;
  font-family:"Arial","sans-serif";'>13. Memoria Remota:</span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'> Explorar según manual.<span style='mso-spacerun:yes'>      </span>/6</span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";'>
    
       <input id="APA_parteI_puntaje" type="text" class="form-control" name="APA_parteI_puntaje"  value='{{(isset($data))  ? $data->APA_parteI_puntaje  : old("APA_parteI_puntaje") }}' maxlength="2">

  </span></b><span
  style='font-size:9.0pt;font-family:"Arial","sans-serif";'></span></p>
  </td>
 </tr>
</table>

 <br>

 <table class="table table-striped  table-condensed table-hover">

                      <tr>
                        <td style="background: black" colspan="2">
                          <label style="color: white"> XI. ANTECEDENTES DE ENFERMEDAD CEREBROVASCULAR  </label>
                        </td>

                      </tr>

                      <tr>
                        
                      <td style="width: 50%">
                          
                     
                       <table>
                        
                        
                            <tr>
                           <td style="text-align: left;"colspan="2" >76.   Antecedentes de enfermedad cerebrovascular.
                           </td>
                             <td style="text-align: left;" >      [ <input id="APA_parteII_puntaje" type="text"  name="APA_parteII_puntaje"  value='{{(isset($data))  ? $data->APA_parteII_puntaje  : old("APA_parteII_puntaje") }}' maxlength="2">]
                           </td>
                          
                          </tr>
                         


                          <tr>
                         
                            
                            <td style="text-align: left;">77. Fecha del ultimo evento cerebrovascular 
                           
                            [<input id="MemRem_puntaje" type="text"  name="MemRem_puntaje"  value='{{(isset($data))  ? $data->MemRem_puntaje  : old("MemRem_puntaje") }}' maxlength="2">]
                           </td>
                                                   
                            
                            <td style="text-align: center;">Mes:   [<input id="acv" type="text"  name="acv"  value='{{(isset($data))  ? $data->acv  : old("acv") }}' maxlength="2">]
                           </td>
                          
                        
                             <td style="text-align: left;"> Año: [<input id="fecha_acv" type="date"  name="fecha_acv" value='{{ old("fecha_acv", isset($data) && strtotime($data->fecha_acv) != false  ? date("Y-m-d", strtotime($data->fecha_acv)) : "" )}}' requiered>]
                           </td>
                               
                            </tr>
                        
                            <tr>
                               <td style="text-align: left;" colspan="2"> Perdida o alteración de la conciencia
                               </td>
                                 <td style="text-align: left;" > [<input id="perd_con" type="text" name="perd_con"  value='{{(isset($data))  ? $data->perd_con  : old("perd_con") }}' maxlength="2">]
                               </td>
                          </tr>

                            <tr>
                               <td style="text-align: left;" colspan="2"> Parálisis facial                                                                        
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="Facial_P" name="Facial_P" >
                                          <option {{ (isset($data) && $data->Facial_P == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->Facial_P == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                          <tr>
                               <td style="text-align: left;" colspan="2"> Perdida de la visión                                                                                                                  
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="Perd_Vision" name="Perd_Vision" >
                                          <option {{ (isset($data) && $data->Perd_Vision == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->Perd_Vision == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                          <tr>
                               <td style="text-align: left;" colspan="2"> Cambios en el lenguaje o en el habla                                                                          
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="cam_leng" name="cam_leng" >
                                          <option {{ (isset($data) && $data->cam_leng == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->cam_leng == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                           <tr>
                               <td style="text-align: left;" colspan="2"> Parálisis de los miembros                                                                          
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="Para_MI" name="Para_MI" >
                                          <option {{ (isset($data) && $data->Para_MI == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->Para_MI == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                           <tr>
                               <td style="text-align: left;" colspan="2"> Perdida o alteraciones de la sensibilidad en miembros o Tronco                                                                        
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="Perd_Sens" name="Perd_Sens" >
                                          <option {{ (isset($data) && $data->Perd_Sens == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->Perd_Sens == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                           <tr>
                               <td style="text-align: left;" colspan="2"> Enfermedad cerebrovascular asociada a intervención quirúrgica
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="acv_quir" name="acv_quir" >
                                          <option {{ (isset($data) && $data->acv_quir == 0) ? 'selected' : '' }} value="0" >0 = No </option>
                                          <option {{ (isset($data) && $data->acv_quir == 1) ? 'selected' : '' }} value="1" >1 = Si</option>
                                    </SELECT>
                               </td>
                          </tr>

                          <tr>
                               <td style="text-align: left;" colspan="2"> 78.Tipo de enfermedad cerebrovascular
                               </td>
                                 <td style="text-align: left;" >
                                   <SELECT id="tipo_acv" name="tipo_acv" >
                                          <option {{ (isset($data) && $data->tipo_acv == 0) ? 'selected' : '' }} value="0" >0 = Sin antecedentes de ECV </option>
                                          <option {{ (isset($data) && $data->tipo_acv == 1) ? 'selected' : '' }} value="1" >1 = Transitoria</option>
                                          <option {{ (isset($data) && $data->tipo_acv == 2) ? 'selected' : '' }} value="2" >2 = Isquemico</option>
                                          <option {{ (isset($data) && $data->tipo_acv == 3) ? 'selected' : '' }} value="3" >3 = Hemorragico</option>
                                    </SELECT>
                               </td>
                          </tr>  

                           <tr>
                               <td style="text-align: left;" colspan="2"> 79..Numero de eventos vasculares
                               </td>
                                 <td style="text-align: left;" >
                                   [<input id="núm_even" type="number" name="núm_even"  value='{{(isset($data))  ? $data->núm_even  : old("núm_even") }}' maxlength="2" min="0">]
                               </td>
                          </tr>                                 
                          
                       </table>

<p class=MsoNormal><span style='font-size:9.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width="100%" colspan=6 style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#404040;mso-background-themecolor:
  text1;mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>89. Estado de conciencia</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="Conciencia" name="Conciencia" >
                  <option {{ (isset($data) && $data->Conciencia == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Conciencia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Conciencia == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>

                                    </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>95. Audición</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <SELECT id="Audicion" name="Audicion" >
                  <option {{ (isset($data) && $data->Audicion == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Audicion == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Audicion == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>101. Tono muscular</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
       <SELECT id="Tono_muscular" name="Tono_muscular" >
                  <option {{ (isset($data) && $data->Tono_muscular == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Tono_muscular == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Tono_muscular == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>90. Habla/Lenguaje</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
       <SELECT id="Habla" name="Habla" >
                  <option {{ (isset($data) && $data->Habla == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Habla == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Habla == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>




  </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>96. Otros pares craneales</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="Otros_parescrea" name="Otros_parescrea" >
                  <option {{ (isset($data) && $data->Otros_parescrea == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Otros_parescrea == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Otros_parescrea == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>

  </span></b></p>
  </td>
  <td width="26%" style='width:26.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>102. Reflejo</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="Reflejos" name="Reflejos" >
                  <option {{ (isset($data) && $data->Reflejos == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Reflejos == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Reflejos == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>91. Sensibilidad</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

   <SELECT id="Sensibilidad" name="Sensibilidad" >
                  <option {{ (isset($data) && $data->Sensibilidad == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Sensibilidad == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Sensibilidad == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>97. Motor</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="Motor" name="Motor" >
                  <option {{ (isset($data) && $data->Motor == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Motor == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Motor == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>103. Cuello</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="Cuello" name="Cuello" >
                  <option {{ (isset($data) && $data->Cuello == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Cuello == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Cuello == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>92. Campo visual</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>


    <SELECT id="CampVisual" name="CampVisual" >
                  <option {{ (isset($data) && $data->CampVisual == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->CampVisual == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->CampVisual == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>

  </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>98. Movimiento</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <SELECT id="Movimiento" name="Movimiento" >
                  <option {{ (isset($data) && $data->Movimiento == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Movimiento == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Movimiento == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.7%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>104. Columna</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <SELECT id="Columna" name="Columna" >
                  <option {{ (isset($data) && $data->Columna == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Columna == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Columna == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>



  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>93. Movimiento oculares</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>


    <SELECT id="MovOculares" name="MovOculares" >
                  <option {{ (isset($data) && $data->MovOculares == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->MovOculares == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->MovOculares == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>99. Marcha</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="Marcha" name="Marcha" >
                  <option {{ (isset($data) && $data->Marcha == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Marcha == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Marcha == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>

  </span></b></p>
  </td>
  <td width="33%" colspan=2 rowspan=2 style='width:33.34%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:
  background1;mso-background-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width="26%" style='width:26.52%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>94. Fondo de ojo</span></p>
  </td>
  <td width="6%" style='width:6.8%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <SELECT id="FondOjo" name="FondOjo" >
                  <option {{ (isset($data) && $data->FondOjo == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->FondOjo == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->FondOjo == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>



  </span></b></p>
  </td>
  <td width="26%" style='width:26.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>100. Coordinación</span></p>
  </td>
  <td width="6%" style='width:6.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
    <SELECT id="Coordinacion" name="Coordinacion" >
                  <option {{ (isset($data) && $data->Coordinacion == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Coordinacion == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Coordinacion == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:9.0pt;line-height:107%;font-family:
"Arial","sans-serif";'></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width="100%" colspan=6 style='width:100.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#404040;mso-background-themecolor:
  text1;mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width="25%" style='width:25.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>105. Habla y Lenguaje</span></p>
  </td>
  <td width="6%" style='width:6.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="HablaLeng" name="HablaLeng" >
                  <option {{ (isset($data) && $data->HablaLeng == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->HablaLeng == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->HablaLeng == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>106. Expresión Facial</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="ExpFac" name="ExpFac" >
                  <option {{ (isset($data) && $data->ExpFac == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->ExpFac == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->ExpFac == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
            </SELECT>


  </span></b></p>
  </td>
  <td width="28%" style='width:28.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>107. Temblor en reposo</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="TembRep" name="TembRep" >
                  <option {{ (isset($data) && $data->TembRep == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->TembRep == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->TembRep == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width="100%" colspan=6 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#404040;mso-background-themecolor:text1;mso-background-themetint:
  191;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width="25%" style='width:25.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>108. Cuello</span></p>
  </td>
  <td width="6%" style='width:6.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="Cuello2" name="Cuello2" >
                  <option {{ (isset($data) && $data->Cuello2 == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Cuello2 == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Cuello2 == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
    </SELECT>

  </span></b></p>
  </td>
  <td width="26%" style='width:26.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>109. Miembro superior derecho</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

       <SELECT id="MSD" name="MSD" >
                  <option {{ (isset($data) && $data->MSD == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->MSD == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->MSD == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>

  </span></b></p>
  </td>
  <td width="28%" style='width:28.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>110. Miembro superior izquierdo</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="MSI" name="MSI" >
                  <option {{ (isset($data) && $data->MSI == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->MSI == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->MSI == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width="25%" style='width:25.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>111. Miembro inferior derecho </span></p>
  </td>
  <td width="6%" style='width:6.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

        <SELECT id="MID" name="MID" >
                  <option {{ (isset($data) && $data->MID == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->MID == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->MID == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>


  </span></b></p>
  </td>
  <td width="26%" style='width:26.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>112. Miembro inferior izquierdo</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

     <SELECT id="MII" name="MII" >
                  <option {{ (isset($data) && $data->MII == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->MII == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->MII == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>


  </span></b></p>
  </td>
  <td width="28%" style='width:28.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>113. Postura</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

    <SELECT id="Postura" name="Postura" >
                  <option {{ (isset($data) && $data->Postura == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Postura == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Postura == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>

  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width="25%" style='width:25.66%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>114. <span class=SpellE>Bradiquinesia</span></span></p>
  </td>
  <td width="6%" style='width:6.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <SELECT id="Bradiquinesia" name="Bradiquinesia" >
                  <option {{ (isset($data) && $data->Bradiquinesia == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->Bradiquinesia == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->Bradiquinesia == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>

  </span></b></p>
  </td>
  <td width="26%" style='width:26.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>115. Marcha</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>
      <SELECT id="_Marcha" name="_Marcha" >
                  <option {{ (isset($data) && $data->_Marcha == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
                  <option {{ (isset($data) && $data->_Marcha == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
                  <option {{ (isset($data) && $data->_Marcha == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>


  </span></b></p>
  </td>
  <td width="28%" style='width:28.28%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
  '>116. ¿Los signos <span class=SpellE>extrapiramidales</span>
  son inducidos por fármacos?</span></p>
  </td>
  <td width="6%" style='width:6.64%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>

      <SELECT id="EP_farmaco" name="EP_farmaco" >
            <option {{ (isset($data) && $data->EP_farmaco == 0) ? 'selected' : '' }} value="0" >0 = Normal </option>
            <option {{ (isset($data) && $data->EP_farmaco == 1) ? 'selected' : '' }} value="1" >1 = Anormal</option>
            <option {{ (isset($data) && $data->EP_farmaco == -88) ? 'selected' : '' }} value="-88" >-88 = No evaluable</option>
       </SELECT>

  </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='tab-stops:336.0pt'><span style='font-size:9.0pt;
line-height:107%;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;background:white;border-collapse:collapse;border:none;
 mso-border-top-alt:1.5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:1.5pt;
 mso-border-right-alt:.75pt;mso-border-color-alt:teal;mso-border-style-alt:
 solid;mso-yfti-tbllook:160;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:
 cell-none;mso-border-insidev:cell-none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid;
  mso-row-margin-right:.22%'>
  <td width="99%" colspan=7 valign=top style='width:99.78%;border:solid black 1.0pt;
  mso-border-alt:solid black .25pt;background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;page-break-after:avoid;mso-outline-level:
  2'><b style='mso-bidi-font-weight:normal'><span  style='font-size:
  10.0pt;font-family:"Lucida Sans Unicode","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>XVI. ESCALA DE DEMENCIA DE BLESSED</span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:solid windowtext 1.5pt;
  border-top:none;mso-border-top-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:1.0cm;text-indent:-1.0cm;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>XVII a. Cambios del rendimiento en la ejecución de actividades cotidianas
  en los últimos 6 meses</span></b></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Ninguna incompetencia</span></b></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Incompetencia parcial o intermitente</span></b></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Incompetencia total</span></b></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Incompetencia debido a problemas físicos</span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para llevar a cabo tareas domésticas.<b
  style='mso-bidi-font-weight:normal'>
    
      <SELECT id="blecot1" name="blecot1" >
            <option {{ (isset($data) && $data->EP_farmaco == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->EP_farmaco == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->EP_farmaco == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>

  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para manejar pequeñas cantidades de dinero<b
  style='mso-bidi-font-weight:normal'>
    
    <SELECT id="blecot2" name="blecot2" >
            <option {{ (isset($data) && $data->blecot2 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot2 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot2 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>


  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para recordar listas cortas de cosas,
  ejemplo:<b style='mso-bidi-font-weight:normal'>
    

    <SELECT id="blecot3" name="blecot3" >
            <option {{ (isset($data) && $data->blecot3 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot3 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot3 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>

  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para orientarse en lugares cerrados
  (ejemplo:<span style='mso-spacerun:yes'>  </span>reconocer los lugares dentro
  de casa u otros lugares familiares).<b style='mso-bidi-font-weight:normal'>
    

  <SELECT id="blecot4" name="blecot4" >
            <option {{ (isset($data) && $data->blecot4 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot4 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot4 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>

  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para encontrar el camino o transitar sin
  perderse por calles familiares.<b style='mso-bidi-font-weight:normal'>
    

        <SELECT id="blecot5" name="blecot5" >
            <option {{ (isset($data) && $data->blecot5 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot5 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot5 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>

  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:7;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para interpretar o reconocer el entorno,
  ejemplo: reconocer si se encuentra en el hospital o en el hogar, discriminar
  entre pacientes, doctores, enfermeras y familiares, etc.<b style='mso-bidi-font-weight:
  normal'>
    
      <SELECT id="blecot6" name="blecot6" >
            <option {{ (isset($data) && $data->blecot6 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot6 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot6 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>


  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:8;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border:none;border-left:solid teal 1.0pt;
  mso-border-left-alt:solid teal .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Capacidad para recordar acontecimientos recientes,
  ejemplo: salidas recientes, visitas de familiares o amigos, etc.<b
  style='mso-bidi-font-weight:normal'>
    
    <SELECT id="blecot7" name="blecot7" >
            <option {{ (isset($data) && $data->blecot7 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot7 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot7 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>


  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-row-margin-right:.22%'>
  <td width="52%" valign=top style='width:52.1%;border-top:none;border-left:
  solid teal 1.0pt;border-bottom:solid black 1.0pt;border-right:none;
  mso-border-left-alt:solid teal .75pt;mso-border-bottom-alt:solid black .25pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-10.9pt;line-height:
  normal;mso-list:l3 level1 lfo1;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Tendencia a vivir en el pasado.<b style='mso-bidi-font-weight:
  normal'>
    
      <SELECT id="blecot7" name="blecot7" >
            <option {{ (isset($data) && $data->blecot7 == 0) ? 'selected' : '' }} value="0" > 0 = No incompetence </option>
            <option {{ (isset($data) && $data->blecot7 == '0,5') ? 'selected' : '' }} value="0,5" >0,5 = partial or intermitent incompetence</option>
            <option {{ (isset($data) && $data->blecot7 == 1) ? 'selected' : '' }} value="1" >1 = Total incompetence</option>
       </SELECT>


  </b></span></p>
  </td>
  <td width="11%" valign=top style='width:11.92%;border:none;border-bottom:
  solid black 1.0pt;mso-border-bottom-alt:solid black .25pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.92%;border:none;
  border-bottom:solid black 1.0pt;mso-border-bottom-alt:solid black .25pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0,5</span></p>
  </td>
  <td width="11%" valign=top style='width:11.9%;border:none;border-bottom:solid black 1.0pt;
  mso-border-bottom-alt:solid black .25pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;padding:0cm 0cm 0cm 0cm'
  width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid;mso-row-margin-right:.22%'>
  <td width="87%" colspan=5 valign=top style='width:87.82%;border:none;
  mso-border-top-alt:solid black .25pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>125<span
  style='mso-spacerun:yes'>  </span><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'>Total de actividades cotidianas (sume del
  1 al 8, no puntúe<span style='mso-spacerun:yes'>  </span></i></b></span></p>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>las actividades
  cuya incompetencia sea debida a causas físicas)</span></i></b><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=right style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:right;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>


         <input id="t_activi" type="number" min="0" max="8" class="form-control" name="t_activi"  value='{{(isset($data))  ? $data->t_activi  : old("t_activi") }}' maxlength="2">

  </span></b></p>
  </td>
  <td style='mso-cell-special:placeholder;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0cm 0cm 0cm 0cm' width="0%"><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <tr style='mso-yfti-irow:11;height:24.5pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  3.0pt;margin-left:1.0cm;text-indent:-1.0cm;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '><span style='mso-tab-count:1'>             </span><b
  style='mso-bidi-font-weight:normal'>XVII b. Cambios en los hábitos durante
  los últimos 6 meses</b></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Puntuación</span></b></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:24.5pt'>
  <p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0cm;
  margin-bottom:3.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>Alteración Física</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:10.0pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'> </span>9.<span style='mso-spacerun:yes'> 
  </span>Comer </span><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
   
        <SELECT id="bleha9" name="bleha9" >
            <option {{ (isset($data) && $data->bleha9 == 0) ? 'selected' : '' }} value="0" >0 </option>
            <option {{ (isset($data) && $data->bleha9 == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->bleha9 == 2) ? 'selected' : '' }} value="2" >2 </option>
            <option {{ (isset($data) && $data->bleha9 == 3) ? 'selected' : '' }} value="3" >3 </option>
        </SELECT>

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Lo hace limpiamente con los cubiertos apropiados.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Lo hace desordenadamente únicamente con la cuchara.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Come sin ayuda<span style='mso-spacerun:yes'> 
  </span>solo sólidos simples, ejemplo: bizcochos, pan, etc.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>2</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:10.0pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Tiene que ser alimentado</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>3</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>10.<span
  style='mso-spacerun:yes'>  </span>Vestirse </span><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>
    
      <SELECT id="bleha10" name="bleha10" >
            <option {{ (isset($data) && $data->bleha10 == 0) ? 'selected' : '' }} value="0" > 0  </option>
            <option {{ (isset($data) && $data->bleha10 == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->bleha10 == 2) ? 'selected' : '' }} value="2" >2 </option>
            <option {{ (isset($data) && $data->bleha10 == 3) ? 'selected' : '' }} value="3" >3 </option>
        </SELECT>

  </span></b><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Se viste sin ayuda.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:10.0pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Ocasionalmente comete errores (ejemplo: se abrocha mal
  los botones).</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:18.35pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Se viste siguiendo una secuencia equivocada, olvidando
  comúnmente ponerse alguna prenda de vestir, ejemplo: ponerse los
  pantalones<span style='mso-spacerun:yes'>  </span>olvidando ponerse la ropa
  interior.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>2</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:18.35pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Incapacidad para vestirse</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>3</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:10.0pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>11.<span
  style='mso-spacerun:yes'>   </span>Esfínteres </span><b style='mso-bidi-font-weight:
  normal'><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>
    
     <SELECT id="bleha11" name="bleha11" >
            <option {{ (isset($data) && $data->bleha11 == 0) ? 'selected' : '' }} value="0" > 0  </option>
            <option {{ (isset($data) && $data->bleha11 == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->bleha11 == 2) ? 'selected' : '' }} value="2" >2 </option>
            <option {{ (isset($data) && $data->bleha11 == 3) ? 'selected' : '' }} value="3" >3 </option>
        </SELECT>




  </span></b><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Completo control de los esfínteres.</span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>0</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Ocasionalmente moja la cama (enuresis).<span
  style='mso-spacerun:yes'>  </span><span style='mso-spacerun:yes'> </span></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>1</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:9.25pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border:none;
  border-left:solid teal 1.0pt;mso-border-left-alt:solid teal .75pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Frecuentemente moja la cama<span
  style='mso-spacerun:yes'>                    </span><span
  style='mso-spacerun:yes'> </span></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>2</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border:none;
  border-right:solid teal 1.0pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.25pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:10.0pt'>
  <td width="74%" colspan=3 valign=top style='width:74.74%;border-top:none;
  border-left:solid teal 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;mso-border-left-alt:solid teal .75pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:1.0cm;margin-bottom:.0001pt;line-height:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Doble incontinencia (fecal y urinaria)<span
  style='mso-spacerun:yes'>          </span><span
  style='mso-spacerun:yes'> </span></span></p>
  </td>
  <td width="13%" colspan=3 valign=top style='width:13.3%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>3</span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid teal 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid teal .75pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:10.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>F</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;page-break-inside:avoid;height:19.45pt'>
  <td width="88%" colspan=6 valign=top style='width:88.04%;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>126<b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'>Total
  de hábitos (sume del 9 al 11, no puntúe </i></b></span></p>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>las alteraciones
  en los hábitos debidas a causas físicas)</span></i></b><span 
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>


           <input id="t_hábito" type="number"  class="form-control" name="t_hábito"  value='{{(isset($data))  ? $data->t_hábito  : old("t_hábito") }}' >


  </span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;mso-yfti-lastrow:yes;page-break-inside:avoid;
  height:19.45pt'>
  <td width="88%" colspan=6 valign=top style='width:88.04%;border:none;
  border-right:solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>129<b
  style='mso-bidi-font-weight:normal'><i style='mso-bidi-font-style:normal'>Total
  Funcional </i></b></span></p>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><i
  style='mso-bidi-font-style:normal'><span  style='font-size:7.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>(enunciado del 1
  al 11)</span></i></b><span  style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '></span></p>
  </td>
  <td width="11%" colspan=2 valign=top style='width:11.96%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:19.45pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span  style='font-size:8.0pt;
  mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'></span></p>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>

      
           <input id="t_funcio" type="number" min="0" max="" class="form-control" name="t_funcio"  value='{{(isset($data))  ? $data->t_funcio  : old("t_funcio") }}' >

  </span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=385 style='border:none'></td>
  <td width=90 style='border:none'></td>
  <td width=81 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=90 style='border:none'></td>
  <td width=2 style='border:none'></td>
  <td width=89 style='border:none'></td>
  <td width=0 style='border:none'></td>
 </tr>
 <![endif]>
</table>
<br>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-top-alt:
 1.5pt;mso-border-left-alt:.75pt;mso-border-bottom-alt:1.5pt;mso-border-right-alt:
 .75pt;mso-border-color-alt:teal;mso-border-style-alt:solid;mso-yfti-tbllook:
 160;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:cell-none;
 mso-border-insidev:cell-none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td width="100%" colspan=5 valign=top style='width:100.0%;border:solid black 1.0pt;
  mso-border-alt:solid black .25pt;background:grey;mso-shading:black;
  mso-pattern:solid black;padding:0cm 3.5pt 0cm 3.5pt'>
  <span  style='font-family:"Lucida Sans Unicode","sans-serif";
  mso-bidi-font-family:"Times New Roman";color:windowtext'>XVII. ESCALA DE
  ACTIVIDADES DE LA VIDA DIARIA DE SCHWAB Y ENGLAND</span>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>100 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>Completamente
  independiente. Capaz de realizar todas las tareas sin enlentecimiento,
  dificultad o alteración. El sujeto es esencialmente normal. No se ha dado
  cuenta que posee alguna dificultad.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>90 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>Completamente
  independiente. Capaz de realizar todas las actividades de la vida diaria con
  algún grado de dificultad, lentitud o alteración. La ejecución de las AVD <span
  class=GramE>podrían</span> tomarle el doble del tiempo. </span><span
   style='font-size:7.0pt;line-height:107%;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi'>El <span
  class=SpellE>sujeto</span> <span class=SpellE>comienza</span> a <span
  class=SpellE>darse</span> <span class=SpellE>cuenta</span> de <span
  class=SpellE>sus</span> <span class=SpellE>dificultades</span>.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>80 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto es
  completamente independiente en la mayoría de las AVD, aunque la ejecución de
  estas le toma el doble de tiempo hacerlas. El sujeto está consciente de esta
  dificultad y el enlentecimiento.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>70 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto es
  completamente independiente. Tiene mayor dificultad en la ejecución de
  algunas AVD, cuya realización le toma tres o cuatro veces hacerla. El sujeto
  gasta la mayor parte del día en la realización de tareas cotidianas.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>60 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto exhibe
  alguna dependencia. El sujeto puede realizar la mayoría de las AVD, aunque
  muy lentamente y con mucho esfuerzo. La ejecución de las AVD puede efectuarse
  con errores. Algunas tareas son imposibles de realizar.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>50 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto es más
  dependiente y exhibe mucha lentitud. Necesita que le ayuden a realizar la
  mitad de las AVD. </span><span class=SpellE><span 
  style='font-size:7.0pt;line-height:107%;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi'>Todas</span></span><span
   style='font-size:7.0pt;line-height:107%;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi'> <span
  class=SpellE>las</span> AVD <span class=SpellE>las</span> <span class=SpellE>realiza</span>
  con <span class=SpellE>mucha</span> <span class=SpellE>dificultad</span>.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>40 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto es muy
  dependiente, y aunque puede colaborar con todas las AVD, puede hacer muy
  pocas solo.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>30 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto necesita
  mucha ayuda y aunque con esfuerzo comienza pocas AVD, hace muy pocas solo. </span><span
   style='font-size:7.0pt;line-height:107%;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi'>El <span
  class=SpellE>sujeto</span> <span class=SpellE>está</span> <span class=SpellE>parcialmente</span>
  <span class=SpellE>invalido</span>.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>20 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>Invalidez grave. El
  sujeto no realiza ninguna AVD solo, y aunque puede ayudar ligeramente,<span
  style='mso-spacerun:yes'>  </span>lo hace con mucho esfuerzo.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10'>
  <td width="8%" style='width:8.5%;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>10 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto es
  totalmente dependiente y desvalido. <span class=SpellE>Esta</span> en
  completa invalidez aunque conserva sus funciones vegetativas.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11'>
  <td width="8%" style='width:8.5%;border-top:none;border-left:solid windowtext 1.0pt;
  border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:4.0pt;margin-right:0cm;
  margin-bottom:4.0pt;margin-left:0cm;text-align:center'><span 
  style='font-size:8.0pt;mso-bidi-font-size:11.0pt;line-height:107%;font-family:
  "Arial","sans-serif";mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:
  minor-bidi'>0 %</span></p>
  </td>
  <td width="91%" colspan=4 valign=top style='width:91.5%;border:none;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:4.0pt;margin-right:0cm;margin-bottom:
  4.0pt;margin-left:0cm;text-align:justify'><span style='font-size:7.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;'>El sujeto esta
  postrado en cama, es totalmente dependiente y desvalido y hay <span
  class=GramE>perdida</span> de las funciones vegetativas deglución y control
  de esfínteres.</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:24.9pt'>
  <td width="33%" colspan=2 valign=top style='width:33.22%;border:solid windowtext 1.5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:24.9pt'>
  <p class=MsoBodyText><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>130.AVD según el paciente:</span><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span
  style='mso-spacerun:yes'>                                            </span>

        <input id="avd_paci" type="number" min="0" max="100" class="form-control" name="avd_paci"  value='{{(isset($data))  ? $data->avd_paci  : old("avd_paci") }}' >


</span></b><span
  style='font-size:7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
  "Times New Roman"'></span></p>
  </td>
  <td width="33%" valign=top style='width:33.32%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:24.9pt'>
  <p class=MsoBodyText><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>131.AVD según el entrevistador:<span
  style='mso-spacerun:yes'>                                   </span></span><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>
    
      <input id="avd_entr" type="number" min="0" max="100" class="form-control" name="avd_entr"  value='{{(isset($data))  ? $data->avd_entr  : old("avd_entr") }}' >

  </span></b><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
  </td>
  <td width="25%" valign=top style='width:25.82%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:24.9pt'>
  <p class=MsoBodyText><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'>Información obtenida por:</span></p>
  <p class=MsoBodyText><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>  
  </span>1. Paciente solamente.</span></p>
  <p class=MsoBodyText><span style='font-size:7.0pt;font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman"'><span style='mso-spacerun:yes'>  
  </span>2. Paciente e informante.</span></p>
  </td>
  <td width="7%" valign=top style='width:7.62%;border:solid windowtext 1.5pt;
  border-left:none;mso-border-left-alt:solid windowtext 1.5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:24.9pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><b
  style='mso-bidi-font-weight:normal'><span  style='font-family:"Arial","sans-serif";
  mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi'><span
  style='mso-spacerun:yes'>    </span>

       <SELECT id="Inf_obt" class="form-control" name="Inf_obt" >
            <option {{ (isset($data) && $data->bleha11 == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->bleha11 == 2) ? 'selected' : '' }} value="2" >2 </option>
        </SELECT>

  </span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=63 style='border:none'></td>
  <td width=185 style='border:none'></td>
  <td width=249 style='border:none'></td>
  <td width=193 style='border:none'></td>
  <td width=57 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='tab-stops:336.0pt'><span style='font-size:9.0pt;
line-height:107%;font-family:"Arial","sans-serif";'></span></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
 mso-border-insidev:.5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;background:
  black;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;page-break-after:avoid;mso-outline-level:
  2'><b style='mso-bidi-font-weight:normal'><span  style='font-size:
  10.0pt;font-family:"Lucida Sans Unicode","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>XXVII. CLASIFICACIÓN CLINICA DE LA DEMENCIA</span></b></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width="50%" colspan=3 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#E5E5E5;mso-shading:white;
  mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Escala
  Clínica de Ponderación de la Demencia (CDR)</span></b><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '></span></b></p>
  </td>
  <td width="50%" colspan=5 valign=top style='width:50.0%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#E5E5E5;mso-shading:white;mso-pattern:gray-10 auto;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:2.0pt;margin-left:0cm;text-align:center;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Escala
  Modificada de <span class=SpellE>Hachinski</span></span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";'></span></b></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Memoria </span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
     <input id="memocdr" type="text" maxlength="4" class="form-control" name="memocdr"  value='{{(isset($data))  ? $data->memocdr  : old("memocdr") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Comienzo súbito de los síntomas<b style='mso-bidi-font-weight:
  normal'></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/2</span></b></p>
  </td>
  <td width="7%" colspan=2 style='width:7.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
      <input id="hach1" type="text" maxlength="4" class="form-control" name="hach1"  value='{{(isset($data))  ? $data->hach1  : old("hach1") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Orientación </span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
      <input id="oriencdr" type="text" maxlength="4" class="form-control" name="oriencdr"  value='{{(isset($data))  ? $data->oriencdr  : old("oriencdr") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Deterioro por pasos (no es progresivo)<b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/1</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
    <input id="hach2" type="text" maxlength="4" class="form-control" name="hach2"  value='{{(isset($data))  ? $data->hach2  : old("hach2") }}' >


  </span></b><span  style='font-size:18.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Juicio y solución de problemas </span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

          <input id="juiciocdr" type="text" maxlength="4" class="form-control" name="juiciocdr"  value='{{(isset($data))  ? $data->juiciocdr  : old("juiciocdr") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Síntomas orgánicos (incontinencia urinaria, <span
  class=SpellE>alt.marcha</span>)<span
  style='mso-spacerun:yes'>                                </span><b
  style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/1</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
    <input id="hach3" type="text" maxlength="4" class="form-control" name="hach3"  value='{{(isset($data))  ? $data->hach3  : old("hach3") }}' >



  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Actividades sociales (Considere Inventario <span
  class=SpellE>Neuropsiquiatríco</span>)-</span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

        <input id="actsoccdr" type="text" maxlength="4" class="form-control" name="actsoccdr"  value='{{(isset($data))  ? $data->actsoccdr  : old("actsoccdr") }}' >



  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Episodios de labilidad emocional<span
  style='mso-spacerun:yes'>         </span></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/1</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
     <input id="hach4" type="text" maxlength="4" class="form-control" name="hach4"  value='{{(isset($data))  ? $data->hach4  : old("hach4") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:6;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Hogar y aficiones </span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

      <input id="Hogarcdr" type="text" maxlength="4" class="form-control" name="Hogarcdr"  value='{{(isset($data))  ? $data->Hogarcdr  : old("Hogarcdr") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Historia de hipertensión arterial<span
  style='mso-spacerun:yes'>        </span><b style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/1</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
    <input id="hach5" type="text" maxlength="4" class="form-control" name="hach5"  value='{{(isset($data))  ? $data->hach5  : old("hach5") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Cuidado personal </span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
      <input id="cuidadocdr" type="text" maxlength="4" class="form-control" name="cuidadocdr"  value='{{(isset($data))  ? $data->cuidadocdr  : old("cuidadocdr") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Historia de<span style='mso-spacerun:yes'> 
  </span>enfermedad cerebrovascular <b style='mso-bidi-font-weight:normal'></b></span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/2</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
    <input id="hach6" type="text" maxlength="4" class="form-control" name="hach6"  value='{{(isset($data))  ? $data->hach6  : old("hach6") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>159. <span class=SpellE><b style='mso-bidi-font-weight:
  normal'>Estadío</b></span><b style='mso-bidi-font-weight:normal'> clínico de
  la demencia (CDR)</b></span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
      <input id="cdr" type="text" maxlength="4" class="form-control" name="cdr"  value='{{(isset($data))  ? $data->cdr  : old("cdr") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Síntomas neurológicos focales</span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/2</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
   <input id="hach7" type="text" maxlength="4" class="form-control" name="hach7"  value='{{(isset($data))  ? $data->hach7  : old("hach7") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
  <td width="50%" colspan=3 style='width:50.0%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#E5E5E5;mso-shading:white;
  mso-pattern:gray-10 auto;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Comienzo y Curso del Cuadro Demencial</span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '></span></p>
  </td>
  <td width="37%" colspan=2 valign=top style='width:37.26%;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Signos neurológicos focales</span></p>
  </td>
  <td width="5%" valign=top style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:6.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>/2</span></b></p>
  </td>
  <td width="7%" colspan=2 valign=top style='width:7.56%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

     <input id="hach8" type="text" maxlength="4" class="form-control" name="hach8"  value='{{(isset($data))  ? $data->hach8  : old("hach8") }}' >

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border:none;
  border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";'>160. Año de comienzo de la sintomatología</span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

          <input id="ano_sint" type="date" class="form-control" name="ano_sint"  value='{{ old("ano_sint", isset($data) && strtotime($data->ano_sint) != false  ? date("Y-m-d", strtotime($data->ano_sint)) : "" )}}' requiered>

  </span></b><span  style='font-size:18.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="37%" colspan=2 style='width:37.26%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>164. <b style='mso-bidi-font-weight:normal'><span
  style='letter-spacing:3.5pt'>PUNTUACIÓN FINAL</span>: </b></span></p>
  </td>
  <td width="5%" style='width:5.18%;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></b></p>
  </td>
  <td width="7%" colspan=2 style='width:7.56%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>
    
    <input id="esc_hach" type="text" maxlength="4" class="form-control" name="esc_hach"  value='{{(isset($data))  ? $data->esc_hach  : old("esc_hach") }}' >


  </span></b><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '></span></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
  <td width="42%" colspan=2 valign=top style='width:42.02%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";'>161. Edad de comienzo de la sintomatología</span></p>
  </td>
  <td width="7%" style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
     <input id="edad_sin" type="text" maxlength="4" class="form-control" name="edad_sin"  value='{{(isset($data))  ? $data->edad_sin  : old("edad_sin") }}' >


  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="50%" colspan=5 style='width:50.0%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
  style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Puntuación mayor o igual a 4 puntos demencia
  vascular. Menos de 4, demencias por otras causas.</span></i></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:9.2pt'>
  <td width="42%" colspan=2 rowspan=2 valign=top style='width:42.02%;
  border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";'>162. Comienzo del cuadro clínico:</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l0 level1 lfo2;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Insidioso.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l0 level1 lfo2;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Súbito.</span></p>
  </td>
  <td width="7%" rowspan=2 style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    
       <SELECT id="comi_cua" class="form-control" name="comi_cua" >
            <option {{ (isset($data) && $data->comi_cua == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->comi_cua == 2) ? 'selected' : '' }} value="2" >2 </option>
        </SELECT>



  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  <td width="42%" colspan=3 rowspan=4 valign=top style='width:42.44%;
  border:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:0cm;margin-bottom:.0001pt;line-height:normal'><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>165. ¿Cuál fue el primer síntoma del cuadro
  demencial?</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:23.55pt;text-indent:-7.1pt;line-height:normal;mso-list:
  l2 level1 lfo4;tab-stops:list 23.6pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'>  </span>Deterioro de la Memoria.</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:23.55pt;text-indent:-7.1pt;line-height:normal;mso-list:
  l2 level1 lfo4;tab-stops:list 23.6pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'>  </span>Trastornos de la personalidad.</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:23.55pt;text-indent:-7.1pt;line-height:normal;mso-list:
  l2 level1 lfo4;tab-stops:list 23.6pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'>  </span>Trastornos del lenguaje.</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:23.55pt;text-indent:-7.1pt;line-height:normal;mso-list:
  l2 level1 lfo4;tab-stops:list 23.6pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>d)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'>  </span>Alteraciones motoras.</span></p>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  1.0pt;margin-left:23.55pt;text-indent:-7.1pt;line-height:normal;mso-list:
  l2 level1 lfo4;tab-stops:list 23.6pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>e)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'><span
  style='mso-spacerun:yes'>  </span>Alucinaciones</span></p>
  </td>
  <td colspan=2 rowspan=4 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
      
        <SELECT id="sintom_1" name="sintom_1" class="form-control" >
            <option {{ (isset($data) && $data->sintom_1 == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->sintom_1 == 'a') ? 'selected' : '' }} value="a" >a </option>
            <option {{ (isset($data) && $data->sintom_1 == 'b') ? 'selected' : '' }} value="b" >b </option>
            <option {{ (isset($data) && $data->sintom_1 == 'c') ? 'selected' : '' }} value="c" >c </option>
            <option {{ (isset($data) && $data->sintom_1 == 'd') ? 'selected' : '' }} value="d" >d </option>
            <option {{ (isset($data) && $data->sintom_1 == 'e') ? 'selected' : '' }} value="e" >e </option>
        </SELECT>

    
  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>

 </tr>
 <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:19.8pt'>
  
  <td style='height:19.8pt;border:none' width=0 height=26></td>

 </tr>
 <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:9.2pt'>
  <td width="42%" colspan=2 rowspan=2 valign=top style='width:42.02%;
  border-top:none;border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Times New Roman";'>163. Curso del cuadro clínico:</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l4 level1 lfo3;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Lento y
  gradual.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l4 level1 lfo3;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Rápido y
  gradual.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l4 level1 lfo3;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Fluctuante.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l4 level1 lfo3;tab-stops:list 18.0pt'><![if !supportLists]><span
  style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span
  style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span></span><![endif]><span style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'>Por pasos</span></p>
  </td>
  <td width="7%" rowspan=2 style='width:7.98%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:9.2pt'>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><span  style='font-size:2.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><span  style='font-size:4.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  <p class=MsoNormal align=center style='margin-top:2.0pt;margin-right:0cm;
  margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center;
  line-height:normal'><b style='mso-bidi-font-weight:normal'><span 
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";'>
    

    <SELECT id="cur_cuad" class="form-control" name="cur_cuad" >
            <option {{ (isset($data) && $data->cur_cuad == 1) ? 'selected' : '' }} value="1" >1 </option>
            <option {{ (isset($data) && $data->cur_cuad == 2) ? 'selected' : '' }} value="2" >2 </option>
            <option {{ (isset($data) && $data->cur_cuad == 2) ? 'selected' : '' }} value="3" >3 </option>
            <option {{ (isset($data) && $data->cur_cuad == 2) ? 'selected' : '' }} value="4" >4 </option>
        </SELECT>

  </span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Times New Roman";'></span></p>
  </td>
  
  <td style='height:9.2pt;border:none' width=0 height=12></td>

 </tr>
 <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:32.3pt'>
  
  <td style='height:32.3pt;border:none' width=0 height=43></td>

 </tr>
 <tr style='mso-yfti-irow:16;page-break-inside:avoid'>
  <td colspan=8 valign=top style='border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:black;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal;page-break-after:avoid;mso-outline-level:
  2'><b style='mso-bidi-font-weight:normal'><span  style='font-size:
  10.0pt;font-family:"Lucida Sans Unicode","sans-serif";mso-fareast-font-family:
  "Times New Roman";mso-bidi-font-family:"Times New Roman";color: white'>XXVIII. DIAGNÓSTICO DIFERENCIAL DE DEMENCIA </span></b></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:17'>
  <td width="30%" valign=top style='width:30.38%;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>NINGUNA CONDICIÓN</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Probable enfermedad de Alzheimer.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Probable demencia de cuerpos de <span class=SpellE>Lewy</span>.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Probable demencia vascular.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Probable enfermedad de Parkinson.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:14.2pt;margin-bottom:.0001pt;text-indent:-14.2pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 14.2pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Demencia lobar <span class=SpellE>frontotemporal</span>.</span></p>
  </td>
  <td width="32%" colspan=3 valign=top style='width:32.1%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:10.65pt;margin-bottom:.0001pt;text-indent:-10.65pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Posible enfermedad de Alzheimer.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:10.65pt;margin-bottom:.0001pt;text-indent:-10.65pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Posible enfermedad de cuerpos de <span class=SpellE>Lewy</span></span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:10.65pt;margin-bottom:.0001pt;text-indent:-10.65pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>8.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Posible demencia vascular.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:10.65pt;margin-bottom:.0001pt;text-indent:-10.65pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>9.<span style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Posible enfermedad de Parkinson.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:10.65pt;margin-bottom:.0001pt;text-indent:-10.65pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>10.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Enfermedad de Huntington.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:17.75pt;margin-bottom:.0001pt;text-indent:-17.75pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>11.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Demencia por causas metabólicas, tóxicas o TCE.</span></p>
  </td>
  <td width="31%" colspan=3 valign=top style='width:31.24%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>12.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Alzheimer de presentación inusual.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>13.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Alzheimer + Parkinson.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>14.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Alzheimer + Vascular.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>15.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Alzheimer + otras demencias.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>16.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Otras demencias mixtas.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>17.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Otras causas de demencias.</span></p>
  <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
  margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;line-height:
  normal;mso-list:l1 level1 lfo5;tab-stops:list 18.0pt'><![if !supportLists]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;'><span style='mso-list:
  Ignore'>18.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><![endif]><span
   style='font-size:8.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Demencia por causas desconocidas.</span></p>
  </td>
  <td  style='border:solid windowtext 1.0pt;vertical-align: middle;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
 

     <input id="diag_dem" type="number" min="0" max="23" maxlength="4" name="diag_dem"  value='{{(isset($data))  ? $data->diag_dem  : old("diag_dem") }}' >


  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <tr style='mso-yfti-irow:18;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width="100%" colspan=8 valign=top style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><i style='mso-bidi-font-style:normal'><span
   style='font-size:6.0pt;mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman";
  '>Señale en el recuadro la causa de demencia que explica
  el cuadro clínico del paciente. <b style='mso-bidi-font-weight:normal'>(solo
  si CDR = ó &gt; 1)</b></span></i></p>
  </td>
  
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>

 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=227 style='border:none'></td>
  <td width=87 style='border:none'></td>
  <td width=60 style='border:none'></td>
  <td width=93 style='border:none'></td>
  <td width=185 style='border:none'></td>
  <td width=39 style='border:none'></td>
  <td width=10 style='border:none'></td>
  <td width=47 style='border:none'></td>
  <td style='border:none' width=0><p class='MsoNormal'>&nbsp;</td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='tab-stops:336.0pt'><span style='font-size:9.0pt;
line-height:107%;font-family:"Arial","sans-serif";'></span></p>

</div>

</body>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                            </div>
                        </div>
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


