@extends('layouts.main')
@section('title', 'TOMA DE PRESIÓN ARTERIAL ACOSTADO DE PIE')
@section('content')


<div class="panel panel-primary">
        <div class="panel-heading">
                  <a class="pull-right" href="{{ route('format2.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>TOMA DE PRESIÓN ARTERIAL ACOSTADO DE PIE
          </div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($pasls) ? route('format2.update',  $pasls->id) : route('format2.store') }}">
                        {{ csrf_field() }}

                        @if(isset($pasls))
                        
                        {{ method_field('PUT') }}
                        @endif

              @include('patient.patient')

<div class=WordSection1>


<p class=MsoNormal style='text-align:justify'><span style='font-family:
"Times New Roman","serif"'>Nombre del Paciente: <input id="nombre" type="text" readonly="" name="nombre" value='{{old("nombre")}}' > <span
style='mso-spacerun:yes'>   </span><span style='mso-spacerun:yes'> </span>CI:
  <input id="cedula" type="text" readonly="" name="cedula" value='{{old("cedula")}}' >
</span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:
"Times New Roman","serif"'>Edad: <input id="edad" type="text" readonly="" name="edad" value='{{old("edad")}}' > <span
style='mso-spacerun:yes'>   </span><span style='mso-spacerun:yes'> </span>Sexo: 
<input id="sexo" type="text" readonly="" name="sexo" value='{{old("sexo")}}' >
</span></p>

<br>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-family:"Times New Roman","serif";'>PRESION ORTOSTATICA</span></b></p>



<div class="form-group{{ $errors->has('fech_morte') ? ' has-error' : '' }}">
              <label for="DATH1" class="col-md-2 control-label">Fecha:</label>

              <div class="col-md-4">
                    <input id="DATH1" type="date" class="form-control" name="DATH1" value='{{(isset($pasls))  ? date("Y-m-d", strtotime($pasls->DATH1))  :date("Y-m-d") }}' required >
                                           
                     @if ($errors->has('DATH1'))
                          <span class="help-block">
                              <strong>{{ $errors->first('DATH1') }}</strong>
                           </span>
                     @endif
              </div>
     </div>


<p class=MsoNormal><span style='font-family:"Times New Roman","serif";
'></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><u><span 
style='font-family:"Times New Roman","serif"'>Posición</span></u></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><u><span 
style='font-family:"Times New Roman","serif"'><span
 style='text-decoration:none'>&nbsp;</span></span></u></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=536
 style='width:402.3pt;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.3pt'>
  <td width=102 valign=top style='width:76.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.3pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.3pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '></span></b></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.3pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '>T.A.</span></b></p>
  </td>
  <td width=85 colspan=3 valign=top style='width:63.8pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.3pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=94 colspan=2 valign=top style='width:70.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.3pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '>F.C.</span></b></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.6pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.3pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:29.25pt'>
  <td width=102 valign=top style='width:76.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.25pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '>Decúbito Dorsal</span></p>
  </td>
  <td width=85 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif"'>Sistólica</span></p>
  </td>
  <td width=104 style='width:77.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '>

    <input id="A_SBP6" type="text" class="form-control" name="A_SBP6" value="{{(isset($pasls))  ? $pasls->A_SBP6 : old('A_SBP6')}} " required >

     </span></sup></b></p>
  </td>
  <td width=85 colspan=3 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-size:16.0pt;font-family:"Times New Roman","serif";color:black;
  mso-themecolor:text1'></span></p>
  </td>
  <td width=94 colspan=2 style='width:70.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.25pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '>

     <input id="RATE6" type="text" class="form-control" name="RATE6" value="{{(isset($pasls))  ? $pasls->RATE6 : old('RATE6')}} " required >

  </span></sup></b></p>
  </td>
  <td width=66 colspan=2 rowspan=4 valign=top style='width:49.6pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.25pt'>
  <p class=MsoNormal><span ></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:7.35pt'>
  <td width=102 valign=top style='width:76.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.35pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.35pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.35pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 colspan=3 valign=top style='width:63.8pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:7.35pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=94 colspan=2 valign=top style='width:70.85pt;border:none;
  mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:7.35pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:24.55pt'>
  <td width=102 valign=top style='width:76.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:24.55pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:24.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif"'>Diastólica</span></p>
  </td>
  <td width=104 style='width:77.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.55pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '>

   <input id="A_DBP6" type="text" class="form-control" name="A_DBP6" value="{{(isset($pasls))  ? $pasls->A_DBP6 : old('A_DBP6')}} " required >

</span></sup></b><b style='mso-bidi-font-weight:normal'><sup><span
  style='font-size:16.0pt;font-family:"Times New Roman","serif";
  color:#00B0F0'></span></sup></b></p>
  </td>
  <td width=85 colspan=3 valign=top style='width:63.8pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:24.55pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=94 colspan=2 valign=top style='width:70.85pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:24.55pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=102 valign=top style='width:76.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 valign=top style='width:63.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-size:16.0pt;font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=85 colspan=3 valign=top style='width:63.8pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=94 colspan=2 valign=top style='width:70.85pt;border:none;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=102 style='width:76.3pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif"'>De Pie</span></p>
  </td>
  <td width=85 style='width:63.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '></span></b></p>
  </td>
  <td width=104 style='width:77.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
  mso-bidi-font-size:12.0pt;font-family:"Times New Roman","serif";mso-ansi-language:
  ES'>T.A. al 1 min</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Times New Roman","serif"'></span></b></p>
  </td>
  <td width=16 style='width:11.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '></span></b></p>
  </td>
  <td width=55 style='width:40.9pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '>F.C</span></b><span style='font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=16 colspan=2 style='width:11.8pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '></span></b></p>
  </td>
  <td width=94 style='width:70.15pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt;
  mso-bidi-font-size:12.0pt;font-family:"Times New Roman","serif";mso-ansi-language:
  ES'>T.A. a los 5’</span></b></p>
  </td>
  <td width=19 style='width:14.2pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '></span></b></p>
  </td>
  <td width=47 style='width:35.4pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-family:"Times New Roman","serif";
  '>F.C.</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:16.0pt'>
  <td width=102 rowspan=4 valign=top style='width:76.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:16.0pt'>
  <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
  '>Brazo derecho del paciente en el hombro izquierdo del
  operador</span></p>
  </td>
  <td width=85 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif"'>Sistólica</span></p>
  </td>
  <td width=104 style='width:77.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '>

    <input id="1OSBP" type="text" class="form-control" name="1OSBP" value="{{(isset($pasls))  ? $pasls->x1OSBP : old('1OSBP')}} " required >
  </span></sup></b></p>
  </td>
  <td width=16 style='width:11.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-size:16.0pt;font-family:"Times New Roman","serif";color:black;
  mso-themecolor:text1'></span></p>
  </td>
  <td width=55 style='width:40.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '>
    <input id="RATE8" type="text" class="form-control" name="RATE8" value="{{(isset($pasls))  ? $pasls->RATE8 : old('RATE8')}} " required >  </span></sup></b></p>
  </td>
  <td width=16 colspan=2 style='width:11.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-size:16.0pt;font-family:"Times New Roman","serif";color:black;
  mso-themecolor:text1'></span></p>
  </td>
  <td width=94 style='width:70.15pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.0pt'>

     <input id="5OSBP" type="text" class="form-control" name="5OSBP" value="{{(isset($pasls))  ? $pasls->x5OSBP : old('5OSBP')}} " required >
  </td>
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:16.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-size:16.0pt;font-family:"Times New Roman","serif";color:black;
  mso-themecolor:text1'></span></p>
  </td>
  <td width=47 style='width:35.4pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.0pt'>
    <input id="RATE10" type="text" class="form-control" name="RATE10" value="{{(isset($pasls))  ? $pasls->RATE10 : old('RATE10')}} " required >
  
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.1pt'>
  <td width=85 valign=top style='width:63.8pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  '></span></p>
  </td>
  <td width=104 valign=top style='width:77.95pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.1pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'></span></p>
  </td>
  <td width=85 colspan=3 valign=top style='width:63.8pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'></span></p>
  </td>
  <td width=94 colspan=2 valign=top style='width:70.85pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'></span></p>
  </td>
  <td width=66 colspan=2 valign=top style='width:49.6pt;border:none;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.1pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:"Times New Roman","serif";
  color:black;mso-themecolor:text1'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8'>
  <td width=85 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif"'>Diastólica</span></p>
  </td>
  <td width=104 style='width:77.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
 
     <input id="1ODBP" type="text" class="form-control" name="1ODBP" value="{{(isset($pasls))  ? $pasls->x1ODBP : old('1ODBP')}} " required >
 
  </td>
  <td width=85 colspan=3 style='width:63.8pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-size:16.0pt;font-family:"Times New Roman","serif";color:black;
  mso-themecolor:text1'></span></p>
  </td>
  <td width=94 colspan=2 style='width:70.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><sup><span style='font-size:16.0pt;
  font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '> <input id="5ODBP" type="text" class="form-control" name="5ODBP" value="{{(isset($pasls))  ? $pasls->x5ODBP : old('5ODBP')}} " required > </span></sup></b></p>
  </td>
  <td width=66 colspan=2 style='width:49.6pt;border:none;mso-border-left-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span 
  style='font-family:"Times New Roman","serif";color:black;mso-themecolor:text1;
  '></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:13.8pt'>
  <td width=435 colspan=9 valign=top style='width:326.0pt;border:none;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.8pt'>
  <p class=MsoNormal><span ></span></p>
  </td>
 </tr>

</table>


<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-family:"Times New Roman","serif";'></span></b></p>

</div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($pasls))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/fecha.js')}}"></script>
<script type="text/javascript">
    

$(document).ready(function(){

  var id = $("#patient_id").val();
    var fecha = $("#DATH1").val();
    patient(id,fecha);


  $("#patient_id").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#DATH1").val();
    patient(id,fecha);
 }); 


   $('#5ODBP').mask("999");
   $('#A_SBP6').mask("999");
   $('#A_DBP6').mask("999");
   $('#RATE6').mask("999");
   $('#1OSBP').mask("999");
   $('#1ODBP').mask("999");
   $('#RATE8').mask("999");
   $('#5OSBP').mask("999");
   $('#5ODBP').mask("999");



}); 


function patient(value,fecha){


   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                          $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                          $("#sexo").val(response.data.gender);
                          $("#edad").val(response.data.edad);
                          $("#cedula").val(response.data.cedula);
                                
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}

</script>
@endpush


