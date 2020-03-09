@extends('layouts.main')
@section('title', 'Encuesta de la Tercera Edad')
@section('content')

@php
//dump($errors);
@endphp
   <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('encuesta_tercera_edad.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Encuesta de la Tercera Edad</div>
                <div class="panel-body" id="main">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('encuesta_tercera_edad.update',  $data->id) : route('encuesta_tercera_edad.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                      @include('patient.patient')

<body style='tab-interval:35.4pt'>

<div class=WordSection1>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 
 style='width:100%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .75pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.75pt solid windowtext;
 mso-border-insidev:.75pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td width=88 colspan=3 valign=top style='width:66.35pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>1er Nombre<span style='mso-spacerun:yes'>          </span></span><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt'>
    
       <input style="width: 90%;" id="first_name" type="text" name="first_name" required  readonly="">

  </span></b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'><span
  style='mso-spacerun:yes'>  </span></span></p>
  </td>
  <td width=89 colspan=5 valign=top style='width:66.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>2do Nombre&nbsp;<span style='mso-spacerun:yes'>        </span></span><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt'>
    <input style="width: 90%;" id="second_name" type="text" name="second_name" required  readonly="">
  </span></b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'></span></p>
  </td>
  <td width=88 colspan=4 valign=top style='width:66.35pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>1er Apellido<span style='mso-spacerun:yes'>          </span></span><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt'>
    <input style="width: 90%;" id="last_name" type="text" name="last_name" required  readonly=""></span></b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'><span
  style='mso-spacerun:yes'>          </span></span></p>
  </td>
  <td width=89 valign=top style='width:66.4pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>2do Apellido<span style='mso-spacerun:yes'>         </span></span><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt'>

     <input style="width: 90%;" id="second_last_name" type="text" name="second_last_name" required  readonly="">
  </span></b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'></span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:54.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Cédula</span><b
  style='mso-bidi-font-weight:normal'><input style="width: 90%;" id="cedula" type="text" name="cedula" required  readonly="">
</b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'></span></p>
  </td>
  <td width=102 valign=top style='width:76.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-ansi-language:
  EN-US;mso-fareast-language:EN-US;mso-no-proof:yes'>Fecha Naciemiento</span><span
   style='font-size:7.0pt'>&nbsp;<span style='mso-spacerun:yes'> 
  </span></span><b style='mso-bidi-font-weight:normal'>
    <input style="width: 90%;" id="date_birth" type="text" name="date_birth"  requiered  readonly="">
  </b><span  style='font-size:7.0pt'></span></p>
  </td>
  <td width=114 colspan=2 valign=top style='width:85.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Ciudad de Nacimiento<span style='mso-spacerun:yes'>   </span></span><b
  style='mso-bidi-font-weight:normal'> <input style="width: 90%;" id="city_born" type="text" name="city_born"  requiered  readonly="">
</b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'></span></p>
  </td>
  <td width=99 valign=top style='width:74.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Estado o País&nbsp;<span style='mso-spacerun:yes'>         </span></span><b
  style='mso-bidi-font-weight:normal'><span  style='font-size:8.0pt'>

  <input style="width: 90%;"  id="state_country" type="text" name="state_country"  requiered  readonly="">
  </span></b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td width=78 valign=top style='width:58.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Genero<span style='mso-spacerun:yes'>           </span></span><b
  style='mso-bidi-font-weight:normal'><input style="width: 90%;"  id="gender" type="text" name="gender"  requiered  readonly="">
</b><span
   style='font-size:7.0pt;mso-bidi-font-size:10.0pt'><span
  style='mso-spacerun:yes'>       </span></span></p>
  </td>
  <td width=78 colspan=5 valign=top style='width:58.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Raza<span style='mso-spacerun:yes'>               </span></span>
  <input style="width: 90%;"  id="ethnicity" type="text" name="ethnicity"  requiered  readonly=""></p>
  </td>
  <td width=78 colspan=4 valign=top style='width:58.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Idioma<span style='mso-spacerun:yes'>             </span></span>

    <input id="AI_Lenguaje" type="text" class="form-control" name="AI_Lenguaje"  value='{{(isset($data))  ? $data->AI_Lenguaje  : old("AI_Lenguaje") }}' requiered>

  </p>
  </td>
  <td width=183 colspan=4 valign=top style='width:137.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm;text-align:justify'><span  style='font-size:
  7.0pt;mso-bidi-font-size:10.0pt'>Nombre de Familiar Contacto<span
  style='mso-spacerun:yes'>                 </span></span>
     <input id="AI_fuente" type="text" class="form-control" name="AI_fuente"  value='{{(isset($data))  ? $data->AI_fuente  : old("AI_fuente") }}' maxlength="25">
</p>
  </td>
  <td width=183 colspan=3 valign=top style='width:137.1pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Parentesco o Nexo<span
  style='mso-spacerun:yes'>                        </span><span
  style='mso-spacerun:yes'>         </span></span>

    <input id="AI_Parentes" type="text" class="form-control" name="AI_Parentes"  value='{{(isset($data))  ? $data->AI_Parentes  : old("AI_Parentes") }}' maxlength="25">

  </p>
  </td>
  <td width=142 colspan=2 valign=top style='width:106.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Teléfono del familiar<span style='mso-spacerun:yes'>              
  </span></span>
   <input id="AI_telef_ef" type="text" class="form-control" name="AI_telef_ef"  value='{{(isset($data))  ? $data->AI_telef_ef  : old("AI_telef_ef") }}' maxlength="25">
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td width=102 colspan=4 valign=top style='width:76.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Día de la Semana<span style='mso-spacerun:yes'>    </span></span>

    <input id="AI_DiaSemana" type="text" class="form-control" name="AI_DiaSemana"  value='{{(isset($data))  ? $data->AI_DiaSemana  : old("AI_DiaSemana") }}' maxlength="25">

 </p>
  </td>
  <td width=48 valign=top style='width:36.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Día<span style='mso-spacerun:yes'>      </span></span>

    <input id="AI_Dia" type="number" class="form-control" name="AI_Dia"  value='{{(isset($data))  ? $data->AI_Dia  : old("AI_Dia") }}' maxlength="2">

  </p>
  </td>
  <td width=48 colspan=4 valign=top style='width:36.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Mes<span style='mso-spacerun:yes'>     </span></span><b
  style='mso-bidi-font-weight:normal'>

     <input id="AI_Mes" type="number" class="form-control" name="AI_Mes"  value='{{(isset($data))  ? $data->AI_Mes  : old("AI_Mes") }}' maxlength="2">

  </p>
  </td>
  <td width=48 colspan=2 valign=top style='width:36.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Año<span style='mso-spacerun:yes'>     </span></span>


    <input id="AI_Ano" type="number" class="form-control" name="AI_Ano"  value='{{(isset($data))  ? $data->AI_Ano  : old("AI_Ano") }}' maxlength="2">
  </p>
  </td>
  <td width=354 colspan=6 valign=top style='width:265.2pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Lugar de Aplicación de la Encuesta<span
  style='mso-spacerun:yes'> 

  <input id="AI_Lugar_Aplicacion" type="text" class="form-control" name="AI_Lugar_Aplicacion"  value='{{(isset($data))  ? $data->AI_Lugar_Aplicacion  : old("AI_Lugar_Aplicacion") }}' maxlength="25">
                                                                         
  </span></span><input id="AI_fecha" type="date" class="form-control" name="AI_fecha"  value='{{(isset($data))  ? date("Y-m-d", strtotime($data->AI_fecha))  :date("Y-m-d") }}' requiered>
</p>
  </td>
  <td width=142 colspan=2 valign=top style='width:106.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Código del Encuestador<span style='mso-spacerun:yes'>   </span><span
  style='mso-spacerun:yes'>      </span></span>

    <input id="AI_Codigo_encuestador" type="text" class="form-control" name="AI_Codigo_encuestador"  value='{{(isset($data))  ? $data->AI_Codigo_encuestador  : old("AI_Codigo_encuestador") }}' maxlength="25">
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid'>
  <td width=84 colspan=2 valign=top style='width:63.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .75pt;mso-border-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Sector</span>
    
     <input id="AI_Sector" type="text" class="form-control" name="AI_Sector"  value='{{(isset($data))  ? $data->AI_Sector  : old("AI_Sector") }}' maxlength="25">
  </p>
  </td>
  <td width=90 colspan=5 valign=top style='width:67.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;
  mso-border-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>Manzana<span style='mso-spacerun:yes'>             </span></span>

   <input id="AI_Manzana" type="text" class="form-control" name="AI_Manzana"  value='{{(isset($data))  ? $data->AI_Manzana  : old("AI_Manzana") }}' maxlength="25">

</p>
  </td>
  <td width=24 colspan=2 valign=top style='width:18.0pt;border:none;mso-border-top-alt:
  solid windowtext .75pt;mso-border-left-alt:solid windowtext .75pt;padding:
  0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>&nbsp;</span></p>
  </td>
  <td width=48 colspan=2 valign=top style='width:36.0pt;border:none;mso-border-top-alt:
  solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>&nbsp;</span></p>
  </td>
  <td width=354 colspan=6 valign=top style='width:265.2pt;border:none;
  mso-border-top-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>&nbsp;</span></p>
  </td>
  <td width=142 colspan=2 valign=top style='width:106.3pt;border:none;
  mso-border-top-alt:solid windowtext .75pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
  14.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  10.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=78 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=4 style='border:none'></td>
  <td width=14 style='border:none'></td>
  <td width=48 style='border:none'></td>
  <td width=6 style='border:none'></td>
  <td width=18 style='border:none'></td>
  <td width=3 style='border:none'></td>
  <td width=21 style='border:none'></td>
  <td width=36 style='border:none'></td>
  <td width=12 style='border:none'></td>
  <td width=19 style='border:none'></td>
  <td width=89 style='border:none'></td>
  <td width=63 style='border:none'></td>
  <td width=9 style='border:none'></td>
  <td width=102 style='border:none'></td>
  <td width=72 style='border:none'></td>
  <td width=42 style='border:none'></td>
  <td width=99 style='border:none'></td>
 </tr>
 
</table>

<br>


<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='width: 100%; border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
  <td valign=top style='padding:0cm 5.4pt 0cm 5.4pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
   style='width: 100%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:.5pt solid windowtext;
   mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=346 colspan=2 valign=top style='width:259.8pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt'>
    FUNCIONAMIENTO COGNITIVO
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=302 valign=top style='width:8.0cm;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal><span  style='font-size:7.0pt;mso-bidi-font-size:
    10.0pt;'>&nbsp;</span></p>
    </td>
    <td width=44 valign=top style='width:33.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
     style='font-size:7.0pt;mso-bidi-font-size:10.0pt;'>Puntaje</span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuál es la Fecha de Hoy?<span style='mso-spacerun:yes'>  </span></span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:17.85pt'><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Día <b
    style='mso-bidi-font-weight:normal'>

    <input id="AI_Dia_Q1" type="number" min="1" max="31" class="form-control" name="AI_Dia_Q1"  value='{{(isset($data))  ? $data->AI_Dia_Q1  : old("AI_Dia_Q1") }}' maxlength="2">

     </b> <span
    style='mso-spacerun:yes'>  </span>Mes  <input id="AI_Mes_Q1" type="number" min="1" max="12" class="form-control" name="AI_Mes_Q1"  value='{{(isset($data))  ? $data->AI_Mes_Q1  : old("AI_Mes_Q1") }}' maxlength="2">

     Año <input id="AI_Ano_Q1" type="number" min="1900" max="{{date('Y')}}" class="form-control" name="AI_Ano_Q1"  value='{{(isset($data))  ? $data->AI_Ano_Q1  : old("AI_Ano_Q1") }}' maxlength="4">
   </span></p>
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="AI_PuntajeQ1" type="text" class="form-control" name="AI_PuntajeQ1"  value='{{(isset($data))  ? $data->AI_PuntajeQ1  : old("AI_PuntajeQ1") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Qué día de la semana es hoy?</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:17.85pt'><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Respuesta: 
    <input id="AI_2" type="text" class="form-control" name="AI_2"  value='{{(isset($data))  ? $data->AI_2  : old("AI_2") }}' maxlength="10"> </span></p>
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <input id="AI_PuntajeQ2" type="text" class="form-control" name="AI_PuntajeQ2"  value='{{(isset($data))  ? $data->AI_PuntajeQ2  : old("AI_PuntajeQ2") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuál es el nombre del lugar dónde nos encontramos?</span></p>
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    

      <input id="AI_3" type="text" class="form-control" name="AI_3"  value='{{(isset($data))  ? $data->AI_3  : old("AI_3") }}' maxlength="10">

    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       4.     ¿Cual es su numero telefónico?
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       
        <input id="AI_4" type="text" class="form-control" name="AI_4"  value='{{(isset($data))  ? $data->AI_4  : old("AI_4") }}' maxlength="10">

    </td>
   </tr>
   <tr style='mso-yfti-irow:6'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuántos años tiene?</span></p>
         
        <input id="AI_edad_ef" type="text" class="form-control" name="AI_edad_ef"  value='{{(isset($data))  ? $data->AI_edad_ef  : old("AI_edad_ef") }}' maxlength="10">

    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_PuntajeQ5" type="text" class="form-control" name="AI_PuntajeQ5"  value='{{(isset($data))  ? $data->AI_PuntajeQ5  : old("AI_PuntajeQ5") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:7'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>6.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuándo nació?</span></p>
        <input id="AI_6" type="text" class="form-control" name="AI_6"  value='{{(isset($data))  ? $data->AI_6  : old("AI_6") }}' maxlength="10">
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <input id="AI_PuntajeQ6" type="text" class="form-control" name="AI_PuntajeQ6"  value='{{(isset($data))  ? $data->AI_PuntajeQ6  : old("AI_PuntajeQ6") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:8'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>7.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Quién es el actual presidente de la república?</span></p>
        <input id="AI_7" type="text" class="form-control" name="AI_7"  value='{{(isset($data))  ? $data->AI_7  : old("AI_7") }}' maxlength="10">

    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_PuntajeQ7" type="text" class="form-control" name="AI_PuntajeQ7"  value='{{(isset($data))  ? $data->AI_PuntajeQ7  : old("AI_PuntajeQ7") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:9'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>8.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Quién fue el presidente anterior?</span></p>
       <input id="AI_8" type="text" class="form-control" name="AI_8"  value='{{(isset($data))  ? $data->AI_8  : old("AI_8") }}' maxlength="10">
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <input id="AI_PuntajeQ8" type="text" class="form-control" name="AI_PuntajeQ8"  value='{{(isset($data))  ? $data->AI_PuntajeQ8  : old("AI_PuntajeQ8") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:10'>
    <td width=302 valign=top style='width:8.0cm;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>9.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuál es el segundo apellido de su madre?</span></p>
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <input id="AI_9" type="text" class="form-control" name="AI_9"  value='{{(isset($data))  ? $data->AI_9  : old("AI_9") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:11;mso-yfti-lastrow:yes'>
    <td width=302 valign=top style='width:8.0cm;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>10.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>Vaya restando desde el número 20 de tres en tres hasta el final</span></p>
    
    </td>
    <td width=44 style='width:33.0pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <input id="AI_10" type="text" class="form-control" name="AI_10"  value='{{(isset($data))  ? $data->AI_10  : old("AI_10") }}' maxlength="10">
    </td>
   </tr>
  </table>
  
  </td>
  <td valign=top style='width: 50%'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=350
   style='width:100%;margin-left:3.5pt;border-collapse:collapse;border:
   none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;
   mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=350 colspan=2 valign=top style='width:262.25pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt'>
      CONDUCTAS SALUDABLES
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=309 valign=top style='width:231.5pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal><span  style='font-size:7.0pt;mso-bidi-font-size:
    10.0pt;'>&nbsp;</span></p>
    </td>
    <td width=41 valign=top style='width:30.75pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
     style='font-size:7.0pt;mso-bidi-font-size:10.0pt;'>Puntaje</span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>11.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Fuma o fumó en el pasado?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>

          <SELECT id="AI_Fuma" name="AI_Fuma" >
                <option {{ (isset($data) && $data->AI_Fuma == 0) ? 'selected' : '' }} value="0" >Nunca ha fumado</option>
                <option {{ (isset($data) && $data->AI_Fuma == 1) ? 'selected' : '' }} value="1" >Actualmente fuma</option>
                <option {{ (isset($data) && $data->AI_Fuma == 2) ? 'selected' : '' }} value="2" >Fumo en el pasado</option>
            </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>12.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Si fumo en el pasado,
    ¿Hace cuantos años dejo de fumar?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="AI_12" type="text" class="form-control" name="AI_12"  value='{{(isset($data))  ? $data->AI_12  : old("AI_12") }}' maxlength="10"> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>13.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Si fuma actualmente,
    ¿cuantos cigarrillos diarios?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_13" type="text" class="form-control" name="AI_13"  value='{{(isset($data))  ? $data->AI_13  : old("AI_13") }}' maxlength="10"> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>14.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Ha ingerido alcohol
    en los últimos seis meses?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <select class="form-control" name="AI_14" id="AI_14">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->AI_14 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>15.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Durante los últimos
    seis meses ¿con que frecuencia ha ingerido bebidas alcohólicas?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>

        <SELECT  id="AI_15" name="AI_15" >
                 <option value="0">0 Nunca/No consume</option>
                 <option {{ (isset($data) && $data->AI_15 ==1) ? 'selected' : '' }} value="1" >1 Menos de 1 vez al mes</option>
                 <option {{ (isset($data) && $data->AI_15 ==2) ? 'selected' : '' }} value="2" >2 de 1 a 3 veces al mes.</option>
                 <option {{ (isset($data) && $data->AI_15 ==3) ? 'selected' : '' }} value="3" >3 1 o 2 veces a la semana.</option>
                 <option {{ (isset($data) && $data->AI_15 ==4) ? 'selected' : '' }} value="4" >4 3 o 4 veces a la semana.</option>
                 <option {{ (isset($data) && $data->AI_15 ==5) ? 'selected' : '' }} value="5" >5 Casi todos los dias.</option>
                 <option {{ (isset($data) && $data->AI_15 ==6) ? 'selected' : '' }} value="6" >6 Mas de una al dia. </option>
        </SELECT>

  
    </td>
   </tr>
   <tr style='mso-yfti-irow:7'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>16.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Durante los últimos
    seis meses, ¿Cuántos tragos ha tomado cada vez que ingiere alcohol?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        
          <SELECT  id="AI_16" name="AI_16" >
                                  <option {{ (isset($data) && $data->AI_15 ==0) ? 'selected' : '' }} value="0">No toma.</option>
                                  <option {{ (isset($data) && $data->AI_15 ==1) ? 'selected' : '' }} value="1" >1 o 2 tragos.</option>
                                  <option {{ (isset($data) && $data->AI_15 ==2) ? 'selected' : '' }} value="2" >De 3 a 4 tragos.</option>
                                  <option {{ (isset($data) && $data->AI_15 ==3) ? 'selected' : '' }} value="3" >De 5 a 9 tragos.</option>
                                  <option {{ (isset($data) && $data->AI_15 ==4) ? 'selected' : '' }} value="4" >10 o mas tragos.</option>
          </SELECT>


    </td>
   </tr>
   <tr style='mso-yfti-irow:8'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>17.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuántos años tiene bebiendo esta cantidad?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <input id="AI_17" type="text" class="form-control" name="AI_17"  value='{{(isset($data))  ? $data->AI_17  : old("AI_17") }}' maxlength="10">
    </td>
   </tr>
   <tr style='mso-yfti-irow:9'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>18.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Consume todas las semanas vitaminas?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT style="width: 95%" id="AI_18" name="AI_18" >
                <option {{ (isset($data) && $data->AI_18 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_18 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:10'>
    <td width=309 valign=top style='width:231.5pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>19.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuantas horas en término promedio duerme de noche todos los días?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      
        <input id="AI_19" type="text" class="form-control" name="AI_19"  value='{{(isset($data))  ? $data->AI_19  : old("AI_19") }}' maxlength="4">

    </td>
   </tr>
   <tr style='mso-yfti-irow:11'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    6.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>20.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Practica semanalmente algún ejercicio físico como caminar,
    trotar, gimnasia, <span class=SpellE>etc</span>?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:solid windowtext 1.0pt;
    border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
           <SELECT style="width: 95%" id="AI_20" name="AI_20" >
                <option {{ (isset($data) && $data->AI_20 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_20 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:12'>
    <td width=350 colspan=2 valign=top style='width:262.25pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt'>
    ANTECEDENTES DE CONDICIONES PATOLÓGICAS    PADECIDAS DURANTE LOS ÚLTIMOS 10 AÑOS
    </td>
   </tr>
   <tr style='mso-yfti-irow:13'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>21.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha tenido Diabetes?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <SELECT style="width: 95%" id="AI_21" name="AI_21" >
                <option {{ (isset($data) && $data->AI_21 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_21 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:14'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>22.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Padeció de enfermedades en la tiroides?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT style="width: 95%" id="AI_22" name="AI_22" >
                <option {{ (isset($data) && $data->AI_22 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_22 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:15'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>23.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha tenido Cáncer?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT style="width: 95%" id="AI_23" name="AI_23" >
                <option {{ (isset($data) && $data->AI_23 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_23 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:16'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>24.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha tenido Artritis?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT style="width: 95%" id="AI_24" name="AI_24" >
                <option {{ (isset($data) && $data->AI_24 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_24 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:17'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>25.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha sufrido de la tensión alta?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT style="width: 95%" id="AI_25" name="AI_25" >
                <option {{ (isset($data) && $data->AI_25 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_25 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:18'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>26.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha tenido enfermedades cardiacas como infartos, arritmias e
    insuficiencia?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <SELECT class="form-control" style="width: 95%" id="AI_26" name="AI_26" >
                <option {{ (isset($data) && $data->AI_26 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_26 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:19'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>27.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha sufrido derrames cerebrales o trombosis?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT class="form-control" style="width: 95%" id="AI_27" name="AI_27" >
                <option {{ (isset($data) && $data->AI_27 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_27 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:20;mso-yfti-lastrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>28.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha sufrido de enfermedades pulmonares como asma, bronquitis
    crónica o enfisema?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_28" name="AI_28" >
                <option {{ (isset($data) && $data->AI_28 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_28 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
  </table>
  <p class=MsoNormal><span  style='mso-bidi-font-size:11.0pt;mso-fareast-font-family:
  Calibri'></span></p>
  </td>
 </tr>
</table>

</div>


<div class=WordSection2>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='width: 100%; border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-border-insideh:none;mso-border-insidev:none'>

 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>

  <td valign=top style='padding:0cm 5.4pt 0cm 5.4pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=350
   style='width: 100%;border-collapse:collapse;border:none;mso-border-alt:
   solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:
   .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          29. ¿Ha sufrido enfermedades gastrointestinales como gastritis, úlceras e inflamación del colon?
    </td>
    <td width=41 style='width:30.75pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT class="form-control" style="width: 95%" id="AI_29" name="AI_29" >
                <option {{ (isset($data) && $data->AI_29 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_29 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>30.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha sufrido enfermedades en los riñones?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <SELECT class="form-control" style="width: 95%" id="AI_30" name="AI_30" >
                <option {{ (isset($data) && $data->AI_30 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_30 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=309 valign=top style='width:231.5pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>31.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha sufrido golpes severos en la cabeza acompañados de pérdida del
    conocimiento o que hayan requerido de asistencia médica?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" style="width: 95%" id="AI_31" name="AI_31" >
                <option {{ (isset($data) && $data->AI_31 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_31 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    2.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>32.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Ha tenido fractura de la cadera?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_31" name="AI_31" >
                <option {{ (isset($data) && $data->AI_31 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_31 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:2.0pt;margin-right:0cm;margin-bottom:
    6.0pt;margin-left:17.85pt;text-indent:-17.85pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>33.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cuál ha sido el número de veces que lo han hospitalizado en los
    últimos 5 años?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border:solid windowtext 1.0pt;border-left:
    none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
     
        <input id="AI_33" type="text" class="form-control" name="AI_33"  value='{{(isset($data))  ? $data->AI_33  : old("AI_33") }}' maxlength="4">

    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td width=350 colspan=2 style='width:262.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt'>
    IMPACTO DE LAS CONDICIONES DE SALUD
    </td>
   </tr>
   <tr style='mso-yfti-irow:6'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:18.0pt;text-indent:-18.0pt;mso-list:l4 level1 lfo1;
    tab-stops:list 18.0pt'><span 
    style='font-size:10.0pt;mso-fareast-font-family:Arial;mso-bidi-font-family:
    Arial;'><span style='mso-list:Ignore'>34.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>¿Cómo considera usted que es su estado de salud actual en
    comparación con el de otras personas de su misma edad?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <SELECT class="form-control" style="width: 95%" id="AI_34" name="AI_34" >
                <option {{ (isset($data) && $data->AI_34 ==0) ? 'selected' : '' }}  value="0">0 = Mejor que el de otros.</option>
                <option {{ (isset($data) && $data->AI_34 ==1) ? 'selected' : '' }}  value="1">1 = Igual al de otros.</option> 
                <option {{ (isset($data) && $data->AI_34 ==2) ? 'selected' : '' }}  value="2">2 = Un poco peor. </option> 
                <option {{ (isset($data) && $data->AI_34 ==3) ? 'selected' : '' }}  value="3">3 = Mucho peor. </option>   
          </SELECT> 

    </td>
   </tr>
   <tr style='mso-yfti-irow:7'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>35.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En los actuales
    momentos ¿Está Usted incapacitado por alguna limitación física o
    enfermedad?</span></p>
    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:
    3.0pt;margin-left:17.85pt'><span  style='font-size:7.0pt;
    mso-bidi-font-size:10.0pt;'>Codifique como “cero”
    para respuesta negativa y “uno” en caso de ser afirmativa la respuesta</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT class="form-control" style="width: 95%" id="AI_35" name="AI_35" >
                <option {{ (isset($data) && $data->AI_35 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_35 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:8'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>36.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En cuanto al uso del
    teléfono, usted puede: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l14 level1 lfo6'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Buscar el número,
    marcarlo, recibir y hacer llamadas sin ayuda</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l14 level1 lfo6'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Responde el teléfono,
    pero no hace llamadas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l14 level1 lfo6'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de usar el
    teléfono</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
            <SELECT class="form-control" style="width: 95%" id="AI_36Habilid" name="AI_36Habilid" >
                <option {{ (isset($data) && $data->AI_36Habilid ==0) ? 'selected' : '' }}  value="0">0 = Buscar el numero, marcarlo, recibir y hacer llamadas sin ayuda.</option>
                <option {{ (isset($data) && $data->AI_36Habilid ==1) ? 'selected' : '' }}  value="1">1 = Responde el telefono pero no hace llamadas.</option> 
                <option {{ (isset($data) && $data->AI_36Habilid ==2) ? 'selected' : '' }}  value="2"> 2 = Incapaz de usar el telefono. </option> 
          </SELECT> 

            

    </td>
   </tr>
   <tr style='mso-yfti-irow:9'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>37.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Con relación a su
    desplazamiento, usted puede: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l0 level1 lfo7'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Manejar su propio
    carro, andar solo en bus, taxi u otro medio de transporte</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l0 level1 lfo7'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de viajar no solo</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l0 level1 lfo7'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de viajar</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" style="width: 95%" id="AI_37transp" name="AI_37transp" >
                <option {{ (isset($data) && $data->AI_37transp ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_37transp ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_37transp ==2) ? 'selected' : '' }}  value="2">2 </option> 
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:10'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>38.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En cuanto a las
    compras, usted: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l7 level1 lfo8'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Es capaz de hacer sus
    compras independientemente</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l7 level1 lfo8'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de hacer sus
    compras, pero no solo</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l7 level1 lfo8'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de ir de
    compras</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" style="width: 95%" id="AI_38compras" name="AI_38compras" >
                <option {{ (isset($data) && $data->AI_38compras ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_38compras ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_38compras ==2) ? 'selected' : '' }}  value="2">2 </option> 
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:11'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>39.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En relación a la
    preparación de comida: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo9'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de planificar y
    cocinar todas sus comidas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo9'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de preparar
    comidas ligeras, pero no comidas completas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo9'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de preparar
    cualquier comida</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT class="form-control" style="width: 95%" id="AI_39" name="AI_39" >
                <option {{ (isset($data) && $data->AI_39 ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_39 ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_39 ==2) ? 'selected' : '' }}  value="2">2 </option> 
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:12'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>40.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En cuanto a las
    labores del hogar: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo10'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de hacer tareas
    pesadas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo10'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de hacer tareas
    suaves y necesita ayuda con las tareas pesadas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo10'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de hacer
    cualquier tarea en el hogar</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_40" name="AI_40" >
                <option {{ (isset($data) && $data->AI_40 ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_40 ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_40 ==2) ? 'selected' : '' }}  value="2">2 </option> 
                <option {{ (isset($data) && $data->AI_40 ==3) ? 'selected' : '' }}  value="3">3 </option>
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:13'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>41.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En relación con el
    lavado de su ropa, usted:</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo11'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Lava toda su ropa</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo11'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Lava alguna ropa (<span
    class=SpellE>Ej</span>: medias, ropa interior)</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo11'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Toda la ropa debe
    lavarla otra persona</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_41" name="AI_41" >
                <option {{ (isset($data) && $data->AI_41 ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_41 ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_41 ==2) ? 'selected' : '' }}  value="2">2 </option> 
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:14;mso-yfti-lastrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>42.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>En cuanto al manejo
    del dinero, usted: </span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l8 level1 lfo12'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>0.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Manejar el dinero, pagando
    sus cuentas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l8 level1 lfo12'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Capaz de manejar
    dinero, pero necesita ayuda para pagar sus cuentas</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:35.85pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l8 level1 lfo12'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Incapaz de manejar
    dinero</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
            <SELECT class="form-control" style="width: 95%" id="AI_42" name="AI_42" >
                <option {{ (isset($data) && $data->AI_42 ==0) ? 'selected' : '' }}  value="0"> 0 </option>
                <option {{ (isset($data) && $data->AI_42 ==1) ? 'selected' : '' }}  value="1">1</option> 
                <option {{ (isset($data) && $data->AI_42 ==2) ? 'selected' : '' }}  value="2">2 </option> 
          </SELECT>
    </td>
   </tr>
  </table>
  <p class=MsoNormal><span  style='mso-bidi-font-size:11.0pt;mso-fareast-font-family:
  Calibri'></span></p>
  </td>
  <td valign=top style='width:50%;'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=350
   style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
   solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt;mso-border-insideh:
   .5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td colspan="2" valign=top style='width:60%;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          43.  ¿Cuál es el Centro de Salud que visita más frecuente?
          <input id="AI_43" type="text" class="form-control" name="AI_43"  value='{{(isset($data))  ? $data->AI_43  : old("AI_43") }}' maxlength="25">
    </td>
    
   </tr>
   <tr style='mso-yfti-irow:1'>
    <td width=350 colspan=2 valign=top style='width:262.25pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#BFBFBF;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal align=right style='margin-top:3.0pt;margin-right:0cm;
    margin-bottom:3.0pt;margin-left:0cm;text-align:right'><b style='mso-bidi-font-weight:
    normal'><span  style='letter-spacing:2.0pt'>INFORMACIÓN
    SOCIOECONÓMICA</span></b><b style='mso-bidi-font-weight:normal'><sup><span
     style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'></span></sup></b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
     44.  Estado Civil
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" id="AI_44" name="AI_44" >
                <option {{ (isset($data) && $data->AI_44 ==1) ? 'selected' : '' }}  value="1">1 = Soltero.</option> 
                <option {{ (isset($data) && $data->AI_44 ==2) ? 'selected' : '' }}  value="2">2 = Casado. </option> 
                <option {{ (isset($data) && $data->AI_44 ==3) ? 'selected' : '' }}  value="3">3 = Concubino. </option> 
                <option {{ (isset($data) && $data->AI_44 ==4) ? 'selected' : '' }}  value="4">4 = Separado o Divorciado. </option> 
                <option {{ (isset($data) && $data->AI_44 ==5) ? 'selected' : '' }}  value="5">5 = Viudo.</option> 
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    45.  ¿Sabe leer y escribir?
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_45" name="AI_45" >
                <option {{ (isset($data) && $data->AI_45 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_45 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:4'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         46.  ¿Cuantos años completos de educación formal recibió?
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <input id="AI_Educa_ef" type="number" class="form-control" name="AI_Educa_ef"  value='{{(isset($data))  ? $data->AI_Educa_ef  : old("AI_Educa_ef") }}' maxlength="2">
    </td>
   </tr>
   <tr style='mso-yfti-irow:5'>
    <td colspan="2" width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         47.  ¿Cuál fue la actividad laboral que desempeño la mayor parte de su vida?
        <input id="AI_47" type="text" class="form-control" name="AI_47"  value='{{(isset($data))  ? $data->AI_47  : old("AI_47") }}' maxlength="25">
    </td>
   
   </tr>
   <tr style='mso-yfti-irow:6'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         48.  ¿Trabaja actualmente? 
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
           <SELECT class="form-control" style="width: 95%" id="AI_48" name="AI_48" >
                <option {{ (isset($data) && $data->AI_48 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_48 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:7'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>49.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuántos años
    aprobados educación formal tiene el feje de la familia?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <input id="AI_49" type="text" class="form-control" name="AI_49"  value='{{(isset($data))  ? $data->AI_49  : old("AI_49") }}' maxlength="25">
    </td>
   </tr>
   <tr style='mso-yfti-irow:8'>
    <td width=309 valign=top style='width:231.5pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l4 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>50.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuál es la actividad
    laboral desempeñada por el jefe de la familiar la mayor parte de su vida?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <input id="AI_50" type="text" class="form-control" name="AI_50"  value='{{(isset($data))  ? $data->AI_50  : old("AI_50") }}' maxlength="25">
    </td>
   </tr>
   <tr style='mso-yfti-irow:9'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>52.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿De dónde proviene la
    mayor parte de su ingreso económico actual?</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Fortuna heredada o
    adquirida</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Ganancia, beneficios o
    instituciones bancarias</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Honorarios
    Profesionales</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Sueldo Mensual o
    quincenal</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Sueldo semanal (por
    día, por tarea)</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Pensión o Jubilación</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l9 level1 lfo13'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>7.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Donaciones de origen
    público o privado</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" id="AI_52" name="AI_52" >
                <option {{ (isset($data) && $data->AI_52 ==1) ? 'selected' : '' }}  value="1">1 </option> 
                <option {{ (isset($data) && $data->AI_52 ==2) ? 'selected' : '' }}  value="2">2  </option> 
                <option {{ (isset($data) && $data->AI_52 ==3) ? 'selected' : '' }}  value="3">3 </option> 
                <option {{ (isset($data) && $data->AI_52 ==4) ? 'selected' : '' }}  value="4">4 </option> 
                <option {{ (isset($data) && $data->AI_52 ==5) ? 'selected' : '' }}  value="5">5</option> 
                <option {{ (isset($data) && $data->AI_52 ==6) ? 'selected' : '' }}  value="6">6</option> 
                <option {{ (isset($data) && $data->AI_52 ==7) ? 'selected' : '' }}  value="7">7</option> 
          </SELECT>
    </td>
   </tr>
   <tr style='mso-yfti-irow:10'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
          53.  ¿Cuál es su ingreso económico actual?
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <input id="AI_53" type="text" class="form-control" name="AI_53"  value='{{(isset($data))  ? $data->AI_53  : old("AI_53") }}' maxlength="25">
    </td>
   </tr>
   <tr style='mso-yfti-irow:11'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>54.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Con quién vive
    actualmente?</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l6 level1 lfo14'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Con su cónyuge<span
    style='mso-spacerun:yes'>         </span>3. Con otros</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:36.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l6 level1 lfo14'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;mso-fareast-font-family:
    Arial;mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Con otros
    familiares<span style='mso-spacerun:yes'>   </span>4. Geriátrico u Hospital</span></p>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt'><span 
    style='font-size:9.0pt;mso-bidi-font-size:10.0pt;'>5.<span
    style='mso-spacerun:yes'>    </span>Solo</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" id="AI_54" name="AI_54" >
                <option {{ (isset($data) && $data->AI_54 ==1) ? 'selected' : '' }}  value="1">1 </option> 
                <option {{ (isset($data) && $data->AI_54 ==2) ? 'selected' : '' }}  value="2">2  </option> 
                <option {{ (isset($data) && $data->AI_54 ==3) ? 'selected' : '' }}  value="3">3 </option> 
                <option {{ (isset($data) && $data->AI_54 ==4) ? 'selected' : '' }}  value="4">4 </option> 
                <option {{ (isset($data) && $data->AI_54 ==5) ? 'selected' : '' }}  value="5">5</option> 
          </SELECT>
    </td>
    </td>
   </tr>
   <tr style='mso-yfti-irow:12'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>55.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuántas personas
    viven con usted actualmente?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_55" type="number" class="form-control" name="AI_55"  value='{{(isset($data))  ? $data->AI_55  : old("AI_55") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:13'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>56.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuántas personas
    aportan económicamente en su hogar?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_56" type="number" class="form-control" name="AI_56"  value='{{(isset($data))  ? $data->AI_56  : old("AI_56") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:14'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>57.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuál es el ingreso
    económico actual de su familiar?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="AI_57" type="number" class="form-control" name="AI_57"  value='{{(isset($data))  ? $data->AI_57  : old("AI_57") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:15'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>58.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>Condiciones del
    Alojamiento</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
      <input id="AI_58" type="number" class="form-control" name="AI_58"  value='{{(isset($data))  ? $data->AI_58  : old("AI_58") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:16'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>59.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>La vivienda tiene
    cloacas</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <SELECT class="form-control" style="width: 95%" id="AI_59" name="AI_59" >
                <option {{ (isset($data) && $data->AI_59 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_59 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:17'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>60.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>La vivienda tiene
    servicio eléctrico</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <SELECT class="form-control" style="width: 95%" id="AI_60" name="AI_60" >
                <option {{ (isset($data) && $data->AI_60 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_60 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:18'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>61.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>La vivienda tiene
    servicio telefónico </span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
         <SELECT class="form-control" style="width: 95%" id="AI_61" name="AI_61" >
                <option {{ (isset($data) && $data->AI_61 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_61 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
   <tr style='mso-yfti-irow:19'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>62.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuántos cuartos para
    dormir?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
       <input id="AI_62" type="number" class="form-control" name="AI_62"  value='{{(isset($data))  ? $data->AI_62  : old("AI_62") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:20'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>63.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Cuántos baños tiene?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="AI_63" type="number" class="form-control" name="AI_63"  value='{{(isset($data))  ? $data->AI_63  : old("AI_63") }}' maxlength="4">
    </td>
   </tr>
   <tr style='mso-yfti-irow:21;mso-yfti-lastrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
    <p class=MsoNormal style='margin-top:3.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-indent:-18.0pt;
    mso-list:l1 level1 lfo15;tab-stops:list 18.0pt'><span
     style='font-size:10.0pt;mso-fareast-font-family:Arial;
    mso-bidi-font-family:Arial;'><span
    style='mso-list:Ignore'>64.<span style='font:7.0pt "Times New Roman"'>&nbsp;
    </span></span></span><span  style='font-size:9.0pt;
    mso-bidi-font-size:10.0pt;'>¿Podría repetirme su
    número telefónico?</span></p>
    </td>
    <td width=41 style='width:30.75pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
          <SELECT class="form-control" id="AI_64" name="AI_64" >
                <option {{ (isset($data) && $data->AI_64 ==0) ? 'selected' : '' }} value="0">0 = No</option>
                <option {{ (isset($data) && $data->AI_64 ==1) ? 'selected' : '' }}  value="1">1 = Si</option>   
          </SELECT> 
    </td>
   </tr>
  </table>
 
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

$(document).ready(function(){


    $('.numero').mask("9999",);
    $('.numero1').mask("99",);
    $('.decimal').mask("999.99",{reverse: true});
    $('.fecha').mask('00/00/0000', {placeholder: "mm/dd/aaaa"});

  patient();

$("#patient_id").change(function(){
    
    patient();
 }); 

$("#AI_fecha").change(function(){

    patient();
   
 }); 


}); 
    


function patient(){

     var fecha = $("#AI_fecha").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {
                     $("#first_name").val(response.data.first_name);
                     $("#second_name").val(response.data.second_name);
                     $("#last_name").val(response.data.last_name);
                     $("#second_last_name").val(response.data.second_last_name);
                     $("#state_country").val(response.data.state_country);
                     $("city_born").val(response.data.city_born);
                     $("#hist_id").val(response.data.hist_id);
                     $("#cedula").val(response.data.cedula);
                     $("#gender").val(response.data.gender);
                     $("#ethnicity").val(response.data.ethnicity);
                     $("#date_birth").val(response.data.dob);
                     $("#adress").val(response.data.adress);
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}


</script>



@endpush


