z|@extends('layouts.main')
@section('title', ' Entrevista Familiar')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ url('/entrevista_familiar') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Entrevista Familiar</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('entrevista_familiar.update',  $data->id) : route('entrevista_familiar.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                        <div class="form-group{{ $errors->has('hist_id') ? ' has-error' : '' }}">
                            <label for="hist_id" class="col-md-2 control-label"># Historia</label>

                            <div class="col-md-8">
                                
                                <select class="form-control selectpicker" id="patient_id" name="patient_id" data-live-search='true' required="">
                                  @foreach($patients as $id => $name)
                                     <option value="{{ $id }}" {{ (isset($data->patient_id) && $id ==$data->patient_id) ? 'selected' : '' }} >
                                     {{ $name}} </option> 
                                  @endforeach
                                </select>
                                
                                @if ($errors->has('patient_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('patient_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    
<div class=WordSection1>

<table class="table" border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:
 thin-thick-small-gap windowtext 3.0pt;'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
  <td colspan=3 style='border:double windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
   
            <label for="nombre" class="col-md-4 control-label"> Nombre del sujeto:</label>

                <div class="col-md-6">
                   <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}" readonly="">
                             
                </div>                                                                                                                 
  </td>
  <td  style='border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
 
                 Nº de Estudio:   
             <input id="hist_id" type="text" class="form-control" name="hist_id" value="{{old('hist_id')}}" readonly="">
                             
                   
  </td>
  <td  style='border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
     Edad:
       <input id="edad" type="text" class="form-control" name="edad" value="{{old('edad')}}" readonly="" >
  </td>
  <td style='border:double windowtext 3.0pt;
  border-left:none;mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
              Educación:
         <input id="Educa_ef" type="text" class="form-control decimal" name="Educa_ef" value="{{(isset($data))  ? $data->Educa_ef : old('Educa_ef')}}" required="" >
                                                   
         @if ($errors->has('Educa_ef'))
                 <span class="help-block">
                        <strong>{{ $errors->first('Educa_ef') }}</strong>
                     </span>
        @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
  <td colspan=5 style='border:double windowtext 3.0pt;
  border-top:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
        Dirección:

       <input id="direc_ef" type="text" class="form-control" name="direc_ef" value="{{(isset($data))  ? $data->direc_ef : old('direc_ef')}}" required="" >
                                                   
         @if ($errors->has('direc_ef'))
                 <span class="help-block">
                        <strong>{{ $errors->first('direc_ef') }}</strong>
                     </span>
        @endif
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    Teléfono:

       <input id="telef_ef" type="text" class="form-control" name="telef_ef" value="{{(isset($data))  ? $data->telef_ef : old('telef_ef')}}" required="" >
                                                   
         @if ($errors->has('telef_ef'))
                 <span class="help-block">
                        <strong>{{ $errors->first('telef_ef') }}</strong>
                     </span>
        @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
  <td colspan=3 style='border:double windowtext 3.0pt;
  border-top:none;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
        Nombre de una de las fuentes:
         <input id="fuente" type="text" class="form-control" name="fuente" value="{{(isset($data))  ? $data->fuente : old('fuente')}}" required="" >
                                                   
         @if ($errors->has('fuente'))
                 <span class="help-block">
                        <strong>{{ $errors->first('fuente') }}</strong>
                     </span>
        @endif
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
    Parentesco:
      <input id="Parentesco" type="text" class="form-control" name="Parentesco" value="{{(isset($data))  ? $data->Parentesco : old('Parentesco')}}" required="" >
                                                   
         @if ($errors->has('Parentesco'))
                 <span class="help-block">
                        <strong>{{ $errors->first('Parentesco') }}</strong>
                </span>
        @endif


  </td>
  <td colspan=2 style='border-top:none;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
        Teléfono:
      <input id="Parentesco_Telefono" type="text" class="form-control" name="Parentesco_Telefono" value="{{(isset($data))  ? $data->Parentesco_Telefono : old('Parentesco_Telefono')}}" required="" >
                                                   
         @if ($errors->has('Parentesco_Telefono'))
                 <span class="help-block">
                        <strong>{{ $errors->first('Parentesco_Telefono') }}</strong>
                </span>
        @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;page-break-inside:avoid;
  mso-row-margin-left:222.0pt'>
  <td ></td>
  <td style='border-top:none;border-left:double windowtext 3.0pt;
  border-bottom:double windowtext 3.0pt;border-right:none;mso-border-top-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-left-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-bottom-alt:
  thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  10.0pt;margin-left:0cm'><span  style='font-size:7.0pt;mso-bidi-font-size:
  12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>#
  de Fuentes Entrevistadas</span></p>
  </td>
  <td style='border-top:none;border-left:none;
  border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-top-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-bottom-alt:thin-thick-small-gap windowtext 3.0pt;
  mso-border-right-alt:thin-thick-small-gap windowtext 3.0pt;padding:0cm 3.5pt 0cm 3.5pt'>
        <input id="Numero_fuentes" type="text" class="form-control numero" name="Numero_fuentes" value="{{(isset($data))  ? $data->Numero_fuentes : old('Numero_fuentes')}}" required="" >
                                                   
         @if ($errors->has('Numero_fuentes'))
                 <span class="help-block">
                        <strong>{{ $errors->first('Numero_fuentes') }}</strong>
                </span>
        @endif
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
     Fecha:
      <input id="fecha_ef" type="date"  name="fecha_ef" value='{{(isset($data)) && strtotime($data->fecha_ef) != false  ? date("Y-m-d", strtotime($data->fecha_ef)) : "0001-01-01" }}' required >
                                                       
        @if ($errors->has('fecha_ef'))
                 <span class="help-block">
                  <strong>{{ $errors->first('fecha_ef') }}</strong>
                  </span>
         @endif
  </td>
  <td colspan=2 style='border-top:none;
  border-left:none;border-bottom:double windowtext 3.0pt;border-right:double windowtext 3.0pt;
  mso-border-top-alt:thin-thick-small-gap windowtext 3.0pt;mso-border-left-alt:
  thin-thick-small-gap windowtext 3.0pt;mso-border-alt:thin-thick-small-gap windowtext 3.0pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
  10.0pt;margin-left:0cm'>Evaluado  por:

  <input id="Evaluador" type="text"  name="Evaluador" value="{{(isset($data))  ? $data->Evaluador : old('Evaluador')}}" required >
                                                       
        @if ($errors->has('Evaluador'))
                 <span class="help-block">
                  <strong>{{ $errors->first('Evaluador') }}</strong>
                  </span>
         @endif

</p>
  </td>
 </tr>
 

 
</table>

<br>

<table class='table' border=0 cellspacing=0 cellpadding=0
 style='margin-left:7.1pt;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr>
  <td style='width:50%;'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 
   style='width:100%;margin-left:1.3pt;border-collapse:collapse;border:
   none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
   0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
   .5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
    <td width=350 colspan=2 style='width:262.35pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:black;mso-shading:windowtext;
    mso-pattern:solid auto;padding:0cm 5.4pt 0cm 5.4pt'>
   <span  style='font-family:"Arial","sans-serif"; color: white;
    mso-fareast-font-family:"Times New Roman";color:white'>MEMORIA</span>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:1;page-break-inside:avoid'>
    <td width=350 colspan=2 style='width:262.35pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-top:6.0pt'><b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Tuvo o ha tenido problemas con:</span></b><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:2;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar cosas que quiere hacer o
    eventos que ha planeado realizar</span><b style='mso-bidi-font-weight:normal'><sup><span
     style='font-size:8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman";color:#0070C0'>13</span></sup></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                
            <select class="form-control" name="memor_1" id="memor_1">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>

    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:3;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar el orden o la sucesión de
    los eventos que ocurrieron en el pasado</span><b style='mso-bidi-font-weight:
    normal'><sup><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman";color:#0070C0'>14</span></sup></b><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
         
            <select class="form-control" name="memor_2" id="memor_2">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:4;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar citas pendientes.</span><b
    style='mso-bidi-font-weight:normal'><sup><span  style='font-size:
    8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
    color:#0070C0'>15</span></sup></b><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
      <select class="form-control" name="memor_3" id="memor_3">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:5;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar el nombre de personas</span><b
    style='mso-bidi-font-weight:normal'><sup><span  style='font-size:
    8.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
    color:#0070C0'>16</span></sup></b><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
               <select class="form-control" name="memor_4" id="memor_4">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:6;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar las direcciones que la
    gente le suministra</span><b style='mso-bidi-font-weight:normal'></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
             <select class="form-control" name="memor_5" id="memor_5">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:7;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>6.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar llevar algo cuando sale
    del hogar</span><b style='mso-bidi-font-weight:normal'></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
             <select class="form-control" name="memor_6" id="memor_6">
                <option value="0">0 = No</option>
                <option value="1">1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:8;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>7.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar cosas que necesita cuando
    sale de compras.</span><b style='mso-bidi-font-weight:normal'</b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
            <select class="form-control" name="memor_7" id="memor_7">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_7 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:9;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>8.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar números telefónicos</span><b
    style='mso-bidi-font-weight:normal'></b><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="memor_8" id="memor_8">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_8 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:10;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l2 level1 lfo1;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>9.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Reconocer rostros familiares</span><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="memor_9" id="memor_9">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_9 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:11;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>10.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar listas cortas de cosas</span><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
       <select class="form-control" name="memor_10" id="memor_10">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data->memor_10) && $data->memor_10 ==1) ? 'selected' : '' }} >1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:12;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>11.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Recordar el lugar donde ha guardado
    las cosas.</span></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="memor_11" id="memor_11">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_11 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:13;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>12.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Tendencia a vivir o a hacer solo
    comentarios del pasado.</span><b style='mso-bidi-font-weight:normal'></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="memor_12" id="memor_12">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_12 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:14;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>13.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Los problemas de memoria empezaron
    de forma</span><span
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>:<span
    style='mso-spacerun:yes'>        </span>0. No aplicable </span></p>
    <p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'><span
    style='mso-spacerun:yes'>             </span>1. Abrupta<span
    style='mso-spacerun:yes'>            </span>2. Lenta </span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
     style='font-size:1.0pt;mso-bidi-font-size:12.0pt;color:gray'></span></p>
    <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
     style='font-size:1.0pt;mso-bidi-font-size:12.0pt;color:gray'></span></p>
    <select class="form-control" name="memor_13" id="memor_13">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_13 ==1) ? 'selected' : '' }}>1 = Si</option>
                <option value="2" {{ (isset($data) && $data->memor_13 ==2) ? 'selected' : '' }}>2</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:9.2pt'>
    <td width=284 rowspan=3 style='width:212.65pt;border-top:none;
    border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>14.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>El curso de los problemas de
    memoria fue</span><b style='mso-bidi-font-weight:normal'></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>:<span
    style='mso-spacerun:yes'>            </span>0. No aplicable</span></p>
    <p class=MsoNormal style='margin-left:18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'><span
    style='mso-spacerun:yes'>                  </span>1. Gradual<span
    style='mso-spacerun:yes'>            </span>2. Rápido</span></p>
    </td>
    <td width=66 rowspan=3 style='width:49.7pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
     style='font-size:1.0pt;mso-bidi-font-size:12.0pt;color:gray'></span></p>
    <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
     style='font-size:1.0pt;mso-bidi-font-size:12.0pt;color:gray'></span></p>
      <select class="form-control" name="memor_14" id="memor_14">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_14 ==1) ? 'selected' : '' }}>1 = Si</option>
                <option value="2" {{ (isset($data) && $data->memor_14 ==2) ? 'selected' : '' }}>2</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:9.2pt'>
    <td width=284 rowspan=3 style='width:212.65pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l12 level1 lfo2;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>15.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Vio el sujeto un doctor debido a
    sus problemas de memoria. Si la respuesta es afirmativa, cual fue la causa dada
    a los problemas</span><b style='mso-bidi-font-weight:normal'></b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>:</span></p>
    </td>
    <td width=66 rowspan=3 style='width:49.7pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="memor_15" id="memor_15">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->memor_15 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    <p class=MsoNormal align=center style='margin-top:2.0pt;text-align:center'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:9.2pt'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:solid windowtext 1.0pt;border-right:none;mso-border-top-alt:
    solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
    <p class=MsoNormal><span  style='font-size:8.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
      
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:22;page-break-inside:avoid'>
    <td width=350 colspan=2 style='width:262.35pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:black;mso-shading:windowtext;mso-pattern:
    solid auto;padding:0cm 5.4pt 0cm 5.4pt'>
    <span  style='font-family:"Arial","sans-serif";
    mso-fareast-font-family:"Times New Roman";color:white'>EXPRESIÓN / COMUNICACIÓN</span>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:23;page-break-inside:avoid;height:19.25pt'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:19.25pt'>
    <p class=MsoNormal style='margin-top:6.0pt;margin-right:0cm;margin-bottom:
    0cm;margin-left:17.85pt;margin-bottom:.0001pt;text-indent:-17.85pt;
    mso-list:l3 level1 lfo3;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>16.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Ha tenido dificultades para iniciar
    y/o mantener una conversación con otra persona</span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:19.25pt'>
            <select class="form-control" name="expre_16" id="expre_16">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->expre_16 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:19.25pt;border:none' width=0 height=26></td>
   
   </tr>
   <tr style='mso-yfti-irow:24;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo3;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>17.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Ha tenido dificultades para
    entender lo que otros le comunican</span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="expre_17" id="expre_17">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->expre_17 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:25;page-break-inside:avoid'>
    <td width=284 style='width:212.65pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo3;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>18.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Ha tenido problemas para encontrar
    la palabra correcta o para expresarse por sí mismo</span><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
    <select class="form-control" name="expre_18" id="expre_18">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->expre_18 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:26;mso-yfti-lastrow:yes;page-break-inside:avoid;
    height:16.35pt'>
    <td width=284 style='width:212.65pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:16.35pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l3 level1 lfo3;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>19.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Paulatinamente el sujeto habla o se
    comunica con menos frecuencia</span><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=66 style='width:49.7pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:16.35pt'>
    <select class="form-control" name="expre_19" id="expre_19">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->expre_19 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:16.35pt;border:none' width=0 height=22></td>
   
   </tr>
  </table>
  </td>
  <td width=371 style='width:278.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:538.05pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=353
   style='width:264.7pt;margin-left:1.7pt;border-collapse:collapse;border:none;
   mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
   0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
   .5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
    <td width=353 colspan=2 style='width:264.7pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:black;mso-shading:windowtext;
    mso-pattern:solid auto;padding:0cm 5.4pt 0cm 5.4pt'><span 
    style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial Black","sans-serif";
    mso-fareast-font-family:"Times New Roman";mso-fareast-theme-font:minor-fareast;
    mso-bidi-font-family:Arial;mso-ansi-language:ES;mso-fareast-language:EN-US;
    mso-bidi-language:AR-SA'><br clear=all style='mso-column-break-before:always'>
    </span>
   <span  style='font-family:"Arial","sans-serif"; color: white;
    mso-fareast-font-family:"Times New Roman";color:white'>PERSONALIDAD,
    INTERESES Y CONDUCTA</span><span  style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;mso-fareast-font-family:"Times New Roman"'></span>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:15.8pt'>
    <td width=353 colspan=2 style='width:264.7pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.8pt'>
    <p class=MsoNormal style='margin-top:6.0pt'><b><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>El paciente <span style='background:
    yellow;mso-highlight:yellow'>ha</span> exhibido alguna de las siguientes
    conductas:</span></b><span  style='font-size:8.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    
    <td style='height:15.8pt;border:none' width=0 height=21></td>
   
   </tr>
   <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>20.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es extremadamente rutinario y ante
    los problemas o situaciones nuevas se siente perdido y necesita ayuda.</span><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_20" id="perso_20">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_20 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>21.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No escucha la opinión de otras personas,
    solo hace lo que piensa y todo el tiempo quiere ser el foco de atención.</span><span  style='font-size:8.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:
    "Times New Roman"'></span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_21" id="perso_21">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_21 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>22.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Emocionalmente es indiferente y
    frío,<span style='mso-spacerun:yes'>  </span>mostrando anormalmente poco o
    ningún afecto hacia los demás.</span><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'></span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_22" id="perso_22">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_22 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>23.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Manifiesta frecuentemente crisis de
    llanto y/o conducta impulsiva, agresividad, irritabilidad y estallidos de
    cólera.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_23" id="perso_23">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_23 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>24.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Manifiesta frecuentemente episodios
    inexplicables de risas ante cualquier situación.</span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_24" id="perso_24">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_24 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>25.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Pérdida del decoro social, conductas
    sexuales desinhibidas, exhibicionismo.</span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_25" id="perso_25">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_25 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>26.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Completo abandono de los
    pasatiempos o actividades que habitualmente realiza.</span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_26" id="perso_26">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_26 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>27.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Disminución de la iniciativa,
    apatía, pasividad, inercia, inactividad, se pasa todo el día acostado o
    sentado en un sitio sin hacer nada.</span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_27" id="perso_27">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_27 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.2pt'>
    <td width=293 style='width:219.75pt;border-top:none;border-left:solid windowtext 1.0pt;
    border-bottom:none;border-right:solid windowtext 1.0pt;mso-border-left-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l16 level1 lfo4;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>28.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Cambios dietéticos como excesiva
    ingesta de alimentos, alcohol o tabaco que exige el control y supervisión
    del cuidador.</span></p>
    </td>
    <td width=60 style='width:44.95pt;border:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:9.2pt'>
    <select class="form-control" name="perso_28" id="perso_28">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_28 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l19 level1 lfo5;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>31.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Está deprimido o triste por dos o
    más semanas.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_31" id="perso_31">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_31 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l19 level1 lfo5;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>32.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Si la respuesta es afirmativa,
    buscó algún tratamiento.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_32" id="perso_32">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_32 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l19 level1 lfo5;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>33.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se siente eufórico, grande, en la
    cima del mundo.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_33" id="perso_33">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_33 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border-top:none;border-left:
    solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l19 level1 lfo5;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>34.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Si la respuesta es afirmativa,
    buscó algún tratamiento.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border:none;
    border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <select class="form-control" name="perso_34" id="perso_34">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_34 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:22;page-break-inside:avoid;height:9.2pt'>
    <td width=293 rowspan=2 style='width:219.75pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
    solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l19 level1 lfo5;tab-stops:list 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>35.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Buscó ayuda psiquiátrica o psicológica
    por cualquier otra razón.</span></p>
    </td>
    <td width=60 rowspan=2 style='width:44.95pt;border-top:none;
    border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
    padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
     <select class="form-control" name="perso_35" id="perso_35">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->perso_35 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:23;mso-yfti-lastrow:yes;page-break-inside:avoid;
    height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
  </table>
  </td>
 </tr>
</table>

</div>

<b style='mso-bidi-font-weight:normal'><span  style='font-size:4.0pt;
mso-bidi-font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:"Times New Roman";mso-ansi-language:
ES;mso-fareast-language:EN-US;mso-bidi-language:AR-SA'><br clear=all
style='page-break-before:auto;mso-break-type:section-break'>
</span></b>

<div class=WordSection2>

<p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
line-height:normal'><span  style='font-size:10.0pt'></span></p>

</div>

<b style='mso-bidi-font-weight:normal'><span  style='font-size:10.0pt;
font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman";mso-ansi-language:ES;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span></b>

<div class=WordSection3>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:12.5pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.65pt'>
  <td width=340 colspan=3 style='width:9.0cm;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#262626;mso-background-themecolor:
  text1;mso-background-themetint:217;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=360 colspan=3 style='width:270.15pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#262626;mso-background-themecolor:text1;
  mso-background-themetint:217;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:15.65pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.65pt'>
  <p class=MsoNormal style='text-align:justify'><b><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>Tuvo o
  ha tenido problemas con:</span></b><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif";color:black;mso-ansi-language:ES-VE'></span></b></p>
  </td>
  <td width=76 style='width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=64 style='width:48.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoTitle style='margin-bottom:6.0pt;line-height:normal'><span
   style='font-size:8.0pt;mso-bidi-font-family:Arial'>Fecha</span></p>
  </td>
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.65pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=255 style='width:191.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>44.&nbsp; Diabetes</span><span 
  style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black;
  '></span></p>
  </td>
  <td colspan="2" style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
            <select class="form-control" name="otros_44" id="otros_44">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_44 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  
 </tr>
 <tr style='mso-yfti-irow:2;height:30.05pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:30.05pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>36.&nbsp;Hipertensión
  Arterial</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.05pt'>
      <select class="form-control" name="otros_36" id="otros_36">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_36 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:30.05pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=255 style='width:191.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.05pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'>45.&nbsp; Problemas con la bebida (si se sospecha de
  alcoholismo, explore ulteriormente)</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:30.05pt'>
           <select class="form-control" name="otros_45" id="otros_45">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_45 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
 </tr>
 <tr style='mso-yfti-irow:3;height:29.9pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>37.&nbsp;Enfermedad
  cerebrovascular</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
   <select class="form-control" name="otros_37" id="otros_37">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_37 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.9pt'>
 
  </td>
  <td width=255 style='width:191.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
  <p class=MsoNormal style='text-indent:16.0pt;mso-char-indent-count:2.0'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'>46.&nbsp;
  Los problemas de memoria coincidieron con los problemas con la bebida.</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
       <select class="form-control" name="otros_46" id="otros_46">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_46 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
 </tr>
 <tr style='mso-yfti-irow:4;height:19.95pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>38. Más de un accidente cerebrovascular</span></p>
  </td>
  <td width=76 style='width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
      <select class="form-control" name="otros_38" id="otros_38">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_38 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td width=64 style='width:48.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
  <p class=MsoTitle style='margin-bottom:6.0pt;line-height:normal'><span
   style='font-size:8.0pt;mso-bidi-font-family:Arial'>Cuantos</span></p>
  </td>
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:19.95pt'>

  </td>
  <td width=255 style='width:191.6pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'><span style='mso-spacerun:yes'>       
  </span>47.&nbsp; Padeció síndrome de Down o de retraso mental
  (ojo subir)</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
      <select class="form-control" name="otros_47" id="otros_47">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_47 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  
 </tr>
 <tr style='mso-yfti-irow:5;height:19.95pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>39.&nbsp;Tiene un lado
  del cuerpo con menos fuerza que el otro</span></p>
  </td>
  <td colspan="2" style='width:2.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
          <select class="form-control" name="otros_39" id="otros_39">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_39 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:19.95pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=255 style='width:191.6pt;border:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:19.95pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'></span></p>
  </td>
  <td width=56 style='width:41.65pt;border:none;mso-border-top-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:19.95pt'>
 
  </td>
  <td width=49 style='width:36.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:19.95pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:29.9pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>40.&nbsp;Enfermedad de Parkinson
  (temblor, marcha con arrastre de los pies, rigidez de los miembros)</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
    <select class="form-control" name="otros_40" id="otros_40">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_40 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.9pt'>
 
  </td>
  <td width=255 style='width:191.6pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:29.9pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'></span></p>
  </td>
  <td width=56 style='width:41.65pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.9pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=49 style='width:36.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:29.9pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:39.9pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:39.9pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>41.&nbsp;Golpes severos
  en la cabeza que resultan en alteraciones de conciencia por más de un segundo
  o dos.</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:39.9pt'>
     <select class="form-control" name="otros_41" id="otros_41">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_41 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.9pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=255 style='width:191.6pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:39.9pt'>
  <p class=MsoNormal style='text-indent:16.0pt;mso-char-indent-count:2.0'><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";color:black'></span></p>
  </td>
  <td width=56 style='width:41.65pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.9pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
  <td width=49 style='width:36.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:39.9pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:15.55pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.55pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>42. Convulsiones o
  ataques</span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.55pt'>
          <select class="form-control" name="otros_42" id="otros_42">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_42 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.55pt'>
  
  </td>
  <td width=255 style='width:191.6pt;border:none;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.55pt'>
  <p class=MsoNormal><span  style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black'></span></p>
  </td>
  <td width=56 style='width:41.65pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.55pt'>
  
  </td>
  <td width=49 style='width:36.9pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.55pt'>
  <p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
  line-height:normal'><span  style='font-size:8.0pt;mso-bidi-font-family:
  Arial'></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:15.65pt'>
  <td width=200 style='width:150.15pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
  <p class=MsoNormal style='text-align:justify'><span  style='font-size:
  8.0pt;font-family:"Arial","sans-serif";color:black'>43.&nbsp;Sífilis</span><span
   style='font-size:8.0pt;font-family:"Arial","sans-serif";
  color:black;'></span></p>
  </td>
  <td colspan="2" style='border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
         
         <select class="form-control" name="otros_43" id="otros_43">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->otros_43 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  
  <td width=19 style='width:14.2pt;border:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.65pt'>
  
  </td>
  <td width=255 style='width:191.6pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.65pt'>
 
  </td>
  <td width=56 style='width:41.65pt;border:none;border-bottom:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.65pt'>
  
  </td>
  <td width=49 style='width:36.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:15.65pt'>
 
  </td>
 </tr>
</table>

<p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
line-height:normal'><span  style='font-size:10.0pt'></span></p>

 <div class="form-group{{ $errors->has('alterac') ? ' has-error' : '' }}">
 <label for="alterac" class="col-md-9 control-label"> 48.  Si existen alteraciones de memoria, lenguaje o de personalidad, indique el año de comienzo de estas:</label>

                      <div class="col-md-2">
                            <input id="alterac" type="text" class="form-control numero" name="alterac" value="{{(isset($data))  ? $data->alterac : old('alterac')}}" >
                                                   
                             @if ($errors->has('alterac'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('alterac') }}</strong>
                                   </span>
                             @endif
                      </div>
</div>


<br>
<div class="form-group{{ $errors->has('hermano') ? ' has-error' : '' }}">
<label for="hermano" class="col-md-4 control-label"> 49.  Número total de hermanos (vivos y muertos):</label>

                      <div class="col-md-3">
                            <input id="hermano" type="text" maxlength="2" class="form-control numero" name="hermano" value="{{(isset($data))  ? $data->hermano : old('hermano')}}" >
                                                   
                     @if ($errors->has('hermano'))
                         <span class="help-block">
                            <strong>{{ $errors->first('hermano') }}</strong>
                                   </span>
                             @endif
         </div>
</div>

<div class="form-group{{ $errors->has('her_vivo') ? ' has-error' : '' }}">
  <label for="her_vivo" class="col-md-4 control-label "> 50.  Número Total de her_vivos vivos:</label>

                      <div class="col-md-2">
                            <input id="her_vivo" type="text" maxlength="2" class="form-control numero" name="her_vivo" value="{{(isset($data))  ? $data->her_vivo : old('her_vivo')}}" >
                                                   
                     @if ($errors->has('her_vivo'))
                         <span class="help-block">
                            <strong>{{ $errors->first('her_vivo') }}</strong>
                                   </span>
                             @endif
         </div>
        
</div>


<div class="form-group{{ $errors->has('num_hijo') ? ' has-error' : '' }}">
  <label for="num_hijo" class="col-md-4 control-label "> 51.  Número total de hijos (vivos y muertos):</label>

                      <div class="col-md-2">
                            <input id="num_hijo" type="text" maxlength="2" class="form-control numero" name="num_hijo" value="{{(isset($data))  ? $data->num_hijo : old('num_hijo')}}" >
                                                   
                     @if ($errors->has('num_hijo'))
                         <span class="help-block">
                            <strong>{{ $errors->first('num_hijo') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<div class="form-group{{ $errors->has('hijo_viv') ? ' has-error' : '' }}">
  <label for="hijo_viv" class="col-md-4 control-label "> 52.  Número total de hijos vivos:</label>

                      <div class="col-md-2">
                            <input id="hijo_viv" type="text" maxlength="2" class="form-control numero" name="hijo_viv" value="{{(isset($data))  ? $data->hijo_viv : old('hijo_viv')}}" >
                                                   
                     @if ($errors->has('hijo_viv'))
                         <span class="help-block">
                            <strong>{{ $errors->first('hijo_viv') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>




<p class=MsoListParagraph><span  style='font-size:10.0pt;font-family:
"Arial","sans-serif"'></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l9 level1 lfo6;
tab-stops:list 18.0pt'><b style='mso-bidi-font-weight:
normal'><span  style='font-size:10.0pt'><span style='mso-list:Ignore'>53.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span></b><span
 style='font-size:10.0pt;font-family:"Arial","sans-serif"'>Antecedentes
Familiares de Demencia (solo entre padres, hermanos o hijos):</span></p>



<div class="form-group{{ $errors->has('Antece_Fami_demencia') ? ' has-error' : '' }}">
  <label for="Antece_Fami_demencia" class="col-md-4 control-label "> Antecedentes familiar de demencia</label>

                      <div class="col-md-3">
                            <select class="form-control" name="Antece_Fami_demencia" id="Antece_Fami_demencia">
                                    <option value="0">0 = No</option>
                                    <option value="1" {{ (isset($data) && $data->Antece_Fami_demencia ==1) ? 'selected' : '' }}>1 = Si</option>
                                </select>
                                                   
                     @if ($errors->has('Antece_Fami_demencia'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Antece_Fami_demencia') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>



<ol style='margin-top:0cm' start=2 type=a>
 <li class=MsoNormal style='mso-list:l18 level1 lfo7'><span 
     style='font-size:10.0pt;font-family:"Arial","sans-serif"'>Parentesco,
     nombre y edad de familiares afectados:</span></li>
</ol>

<div class="form-group{{ $errors->has('Parentesco_Fami_demencia') ? ' has-error' : '' }}">
  <label for="Parentesco_Fami_demencia" class="col-md-2 control-label ">Parentesco:</label>

                      <div class="col-md-8">
                            <input id="Parentesco_Fami_demencia" type="text"  class="form-control" name="Parentesco_Fami_demencia" value="{{(isset($data))  ? $data->Parentesco_Fami_demencia : old('Parentesco_Fami_demencia')}}" >
                                                   
                     @if ($errors->has('Parentesco_Fami_demencia'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Parentesco_Fami_demencia') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<div class="form-group{{ $errors->has('Nombre_Fami_demencia') ? ' has-error' : '' }}">
  <label for="Nombre_Fami_demencia" class="col-md-2 control-label ">Nombre:</label>

                      <div class="col-md-8">
                            <input id="Nombre_Fami_demencia" type="text"  class="form-control" name="Nombre_Fami_demencia" value="{{(isset($data))  ? $data->Nombre_Fami_demencia : old('Nombre_Fami_demencia')}}" >
                                                   
                     @if ($errors->has('Nombre_Fami_demencia'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Nombre_Fami_demencia') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<div class="form-group{{ $errors->has('Edad_Fami_demencia') ? ' has-error' : '' }}">
  <label for="Edad_Fami_demencia" class="col-md-2 control-label ">Edad:</label>

                      <div class="col-md-8">
                            <input id="Edad_Fami_demencia" type="text" maxlength="3"  class="form-control numero" name="Edad_Fami_demencia" value="{{(isset($data))  ? $data->Edad_Fami_demencia : old('Edad_Fami_demencia')}}" >
                                                   
                     @if ($errors->has('Edad_Fami_demencia'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Edad_Fami_demencia') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>




<p class=MsoNormal><span  style='font-size:10.0pt;font-family:"Arial","sans-serif"'></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;mso-list:l9 level1 lfo6;
tab-stops:list 18.0pt'><b style='mso-bidi-font-weight:
normal'><span  style='font-size:10.0pt'><span style='mso-list:Ignore'>54.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span></b><span
 style='font-size:10.0pt;font-family:"Arial","sans-serif"'>Si el
paciente falleció describa la causa y/o los síntomas y mencione en que
prefectura está registrado el certificado</span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span  style='font-size:
10.0pt;font-family:"Arial","sans-serif"'></span></p>


<div class="form-group{{ $errors->has('IF_muerte') ? ' has-error' : '' }}">
  <label for="IF_muerte" class="col-md-4 control-label "> De defunción y/o en qué lugar fue velado:</label>

                      <div class="col-md-3">
                            <select class="form-control" name="IF_muerte" id="IF_muerte">
                                    <option value="0">0 = No</option>
                                    <option value="1" {{ (isset($data) && $data->IF_muerte ==1) ? 'selected' : '' }}>1 = Si</option>
                                </select>
                                                   
                     @if ($errors->has('IF_muerte'))
                         <span class="help-block">
                            <strong>{{ $errors->first('IF_muerte') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<div class="form-group{{ $errors->has('Muerte_causa') ? ' has-error' : '' }}">
  <label for="Muerte_causa" class="col-md-2 control-label ">Causa:</label>

                      <div class="col-md-8">
                            <input id="Muerte_causa" type="text"  class="form-control" name="Muerte_causa" value="{{(isset($data))  ? $data->Muerte_causa : old('Muerte_causa')}}" >
                                                   
                     @if ($errors->has('Muerte_causa'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Muerte_causa') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<div class="form-group{{ $errors->has('Muerte_prefectura') ? ' has-error' : '' }}">
  <label for="Muerte_prefectura" class="col-md-2 control-label ">Prefectura registrada:</label>

                      <div class="col-md-8">
                            <input id="Muerte_prefectura" type="text"  class="form-control" name="Muerte_prefectura" value="{{(isset($data))  ? $data->Muerte_prefectura : old('Muerte_prefectura')}}" >
                                                   
                     @if ($errors->has('Muerte_prefectura'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Muerte_prefectura') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>


<div class="form-group{{ $errors->has('Muerte_Velado') ? ' has-error' : '' }}">
  <label for="Muerte_Velado" class="col-md-2 control-label ">Lugar velado:</label>

                      <div class="col-md-8">
                            <input id="Muerte_Velado" type="text"  class="form-control" name="Muerte_Velado" value="{{(isset($data))  ? $data->Muerte_Velado : old('Muerte_Velado')}}" >
                                                   
                     @if ($errors->has('Muerte_Velado'))
                         <span class="help-block">
                            <strong>{{ $errors->first('Muerte_Velado') }}</strong>
                        </span>
                 @endif
         </div>
        
</div>

<br>

<p class=MsoTitle align=left style='margin-bottom:6.0pt;text-align:left;
line-height:normal'><span  style='font-size:10.0pt'><span
style='mso-spacerun:yes'>                                                           
</span>ESCALA FUNCIONAL DE LAWTON</span></p>


<table class="table" border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook: 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes;'>
  <td style='width:50%;'>
  <table class='table' border=1 cellspacing=0 cellpadding=0 
   style='width:100%;margin-left:1.3pt;border-collapse:collapse;border:none;
   mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
   0cm 5.4pt 0cm 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
   .5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
    <td width=357 colspan=2 style='width:268.1pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:black;mso-shading:windowtext;
    mso-pattern:solid auto;padding:0cm 5.4pt 0cm 5.4pt'>
    <span  style='font-family:"Arial","sans-serif";
    mso-fareast-font-family:"Times New Roman";color:white;font-weight:normal;
    mso-bidi-font-weight:bold'>ESTADO FUNCIONAL INSTRUMENTAL</span>
    </td>
   
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:9.2pt'>
    <td rowspan=5 style='width:70%;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Habilidad para hablar por teléfono:</span></p>
    <p class=MsoBodyTextIndent style='mso-list:l1 level1 lfo8;tab-stops:list 12.0pt 18.0pt'><span
     style='mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
    >Usa el teléfono por iniciativa propia, lo contesta cuando repica,
    es capaz de discar cualquier número, etc.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l1 level1 lfo8;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Disca pocos números telefónicos,
    solo aquellos muy bien conocidos.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l1 level1 lfo8;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Responde el teléfono, pero no es capaz
    de hacer llamada</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l1 level1 lfo8;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No usa el teléfono por iniciativa
    propia.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l1 level1 lfo8;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es incapaz de usar el teléfono.</span></p>

       @if ($errors->has('Habilid'))
                      <span class="help-block">
                          <strong>{{ $errors->first('Habilid') }}</strong>
                      </span>
                 @endif
    </td>
    <td  rowspan=5>
            
          <select class="form-control quantity" onclick="suma(this.value)"  name="Habilid" id="Habilid">
                                     <option value=0 {{ (isset($data) && $data->Habilid ==0) ? 'selected' : '' }}>0</option>
                                     <option value=1 {{ (isset($data) && $data->Habilid ==1) ? 'selected' : '' }}>1</option>
                                     <option value=2 {{ (isset($data) && $data->Habilid ==2) ? 'selected' : '' }}>2</option>
                                     <option value=3 {{ (isset($data) && $data->Habilid ==3) ? 'selected' : '' }}>3</option>
                                     <option value=4 {{ (isset($data) && $data->Habilid ==4) ? 'selected' : '' }}>4</option>
                                     <option value=5 {{ (isset($data) && $data->Habilid ==5) ? 'selected' : '' }}>5</option>
                           </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=5 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>

    <b>Hacer las compras:</b>
   
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l6 level1 lfo9;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Realiza las compras necesarias
    independientemente.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l6 level1 lfo9;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Compra independientemente solo un limitado
    número de cosas (menos de 3).</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l6 level1 lfo9;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita que le acompañen a hacer
    las compras.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l6 level1 lfo9;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Completamente incapaz hacer las
    compras.</span></p>
    </td>
     <td  width=50 rowspan=5>

                        <select class="form-control quantity" onclick="suma(this.value)"  name="compras" id="compras">
                                     <option value=0 {{ (isset($data) && $data->compras ==0) ? 'selected' : '' }}>0</option>
                                     <option value=1 {{ (isset($data) && $data->compras ==1) ? 'selected' : '' }}>1</option>
                                     <option value=2 {{ (isset($data) && $data->compras ==2) ? 'selected' : '' }}>2</option>
                                     <option value=3 {{ (isset($data) && $data->compras ==3) ? 'selected' : '' }}>3</option>
                                     <option value=4 {{ (isset($data) && $data->compras ==4) ? 'selected' : '' }}>4</option>
                                     
                           </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=7 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <b>Preparar los alimentos:</b>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l7 level1 lfo10;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>0.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No aplicable: usualmente nunca
    preparó los alimentos</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l7 level1 lfo10;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Planea, prepara y sirve
    adecuadamente los alimentos independientemente</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l7 level1 lfo10;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Prepara adecuadamente los alimentos
    si se le proporcionan los ingredientes <span class=SpellE>ó</span> con
    relativa frecuencia se le queman los alimentos en el horno o la cocina.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l7 level1 lfo10;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Calienta y sirve alimentos ya preparados,
    o prepara alimentos de forma inadecuada adecuada</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l7 level1 lfo10;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita que le preparen y sirvan
    los alimentos</span></p>
    </td>
    <td  width=50 rowspan=7>
                        <select class="form-control quantity" onclick="suma(this.value)"  name="prep_ali" id="prep_ali">
                                     <option value=0 {{ (isset($data) && $data->prep_ali ==0) ? 'selected' : '' }}>0</option>
                                     <option value=1 {{ (isset($data) && $data->prep_ali ==1) ? 'selected' : '' }}>1</option>
                                     <option value=2 {{ (isset($data) && $data->prep_ali ==2) ? 'selected' : '' }}>2</option>
                                     <option value=3 {{ (isset($data) && $data->prep_ali ==3) ? 'selected' : '' }}>3</option>
                                     <option value=4 {{ (isset($data) && $data->prep_ali ==4) ? 'selected' : '' }}>4</option>
                           </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=9 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <b>Realizar tareas domésticas:</b>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>0.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No aplicable: usualmente nunca
    realizó tareas domésticas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Lleva a cabo aceptablemente las
    tareas domésticas que regularmente realizaba, aunque recibe ocasionalmente
    alguna ayuda.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Realiza diariamente tareas
    domésticas ligeras tales como lavar los platos y hacer la cama.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Realiza diariamente tareas ligeras,
    pero no puede mantener un nivel de limpieza aceptable.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita ayuda con todas las tareas
    domésticas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l13 level1 lfo11;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es incapaz de participar en la
    realización de cualquier tarea doméstica.</span></p>
    </td>
     <td  width=50 rowspan=9>

                        <select class="form-control quantity" onclick="suma(this.value)" name="tar_dome" id="tar_dome">
                                     <option value=0 {{ (isset($data) && $data->tar_dome ==0) ? 'selected' : '' }}>0</option>
                                     <option value=1 {{ (isset($data) && $data->tar_dome ==1) ? 'selected' : '' }}>1</option>
                                     <option value=2 {{ (isset($data) && $data->tar_dome ==2) ? 'selected' : '' }}>2</option>
                                     <option value=3 {{ (isset($data) && $data->tar_dome ==3) ? 'selected' : '' }}>3</option>
                                     <option value=4 {{ (isset($data) && $data->tar_dome ==4) ? 'selected' : '' }}>4</option>
                                     <option value=5 {{ (isset($data) && $data->tar_dome ==5) ? 'selected' : '' }}>5</option>
                           </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:22;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:23;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:24;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:25;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:26;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:27;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=3 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <b>Lavar la ropa:</b>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l17 level1 lfo12;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>0.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman";mso-bidi-font-weight:bold'>No
    aplicable</span><span  style='font-size:8.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman"'>:
    nunca ha lavado la ropa.</span></p>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l17 level1 lfo12;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Lava sus enseres personales.</span></p>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l17 level1 lfo12;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Lava pequeñas piezas como medias,
    ropa interior, etc.</span></p>
    <p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt;
    mso-list:l17 level1 lfo12;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Toda su ropa debe ser lavada por
    otra persona.</span></p>
    </td>
   <td  width=50 rowspan=3>

                <select class="form-control quantity" onclick="suma(this.value)"  name="lavar" id="lavar" >
                         <option value=0 {{ (isset($data) && $data->lavar ==0) ? 'selected' : '' }}>0</option>
                         <option value=1 {{ (isset($data) && $data->lavar ==1) ? 'selected' : '' }}>1</option>
                         <option value=2 {{ (isset($data) && $data->lavar ==2) ? 'selected' : '' }}>2</option>
                         <option value=3 {{ (isset($data) && $data->lavar ==3) ? 'selected' : '' }}>3</option>   
                </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:28;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:29;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:30;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=8 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Modo de transporte:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l15 level1 lfo13;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Viaja independientemente en el transporte
    público o conduce su propio vehículo.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l15 level1 lfo13;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Viaja independientemente en taxi,
    pero es incapaz de usar el transporte público.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l15 level1 lfo13;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Viaja en transporte público solo
    cuando es acompañado por otra persona.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l15 level1 lfo13;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Viaja solo en taxis o automóviles
    privados con la asistencia de otras personas.</span></p>
    </td>
   <td  width=50 rowspan=8>

                <select class="form-control quantity" onclick="suma(this.value)" name="transp" id="transp">
                         <option value=0 {{ (isset($data) && $data->transp ==0) ? 'selected' : '' }}>0</option>
                         <option value=1 {{ (isset($data) && $data->transp ==1) ? 'selected' : '' }}>1</option>
                         <option value=2 {{ (isset($data) && $data->transp ==2) ? 'selected' : '' }}>2</option>
                         <option value=3 {{ (isset($data) && $data->transp ==3) ? 'selected' : '' }}>3</option>   
                         <option value=4 {{ (isset($data) && $data->transp ==4) ? 'selected' : '' }}>4</option>
                </select>
                                                                                        
    </td>
    
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:31;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:32;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:33;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:34;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:35;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:36;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:37;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:38;page-break-inside:avoid;height:9.2pt'>
    <td width=317 rowspan=6 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoBodyText><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Responsabilidad
    de tomar por sí mismo los medicamentos:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l4 level1 lfo14;tab-stops:list 12.0pt 36.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es responsable de tomar sus
    medicamentos en dosis correctas y a las horas indicadas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l4 level1 lfo14;tab-stops:list 12.0pt 36.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es responsable solo si la medicación
    es preparada de antemano en dosis separadas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l4 level1 lfo14;tab-stops:list 12.0pt 36.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No es capaz de tomar sus
    medicamentos incluso cuando estos son preparados de antemano en dosis
    separadas.</span></p>
    </td>
    <td  width=50 rowspan=6>
        
                <select class="form-control quantity" onclick="suma(this.value)"  name="resp_med" id="resp_med" >
                         <option value=0 {{ (isset($data) && $data->resp_med ==0) ? 'selected' : '' }}>0</option>
                         <option value=1 {{ (isset($data) && $data->resp_med ==1) ? 'selected' : '' }}>1</option>
                         <option value=2 {{ (isset($data) && $data->resp_med ==2) ? 'selected' : '' }}>2</option>
                         <option value=3 {{ (isset($data) && $data->resp_med ==3) ? 'selected' : '' }}>3</option>   
                </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:39;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:40;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:41;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:42;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:43;page-break-inside:avoid;height:18.05pt'>
    
    <td style='height:18.05pt;border:none' width=0 height=24></td>
   
   </tr>
   <tr style='mso-yfti-irow:44;page-break-inside:avoid;height:18.05pt'>
    <td width=317 rowspan=7 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.05pt'>
    <p class=MsoBodyText><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Habilidad para
    manejar las finanzas:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l20 level1 lfo15;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>0.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No aplicable: usualmente nunca
    manejó las finanzas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l20 level1 lfo15;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Maneja los asuntos financieros
    independientemente (negocios, escribe cheques, paga rentas, va al banco),
    se mantiene al tanto de los ingresos.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l20 level1 lfo15;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Maneja los ingresos del día a día,
    pero necesita ayuda con el banco y asuntos financieros mayores.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l20 level1 lfo15;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es incapaz de manejar el dinero</span></p>
    </td>
   <td  width=50 rowspan=7>
        
       <select class="form-control quantity" onclick="suma(this.value)"  name="finanza" id="finanza" >
             <option value=0 {{ (isset($data) && $data->finanza ==0) ? 'selected' : '' }}>0</option>
             <option value=1 {{ (isset($data) && $data->finanza ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->finanza ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->finanza ==3) ? 'selected' : '' }}>3</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:18.05pt;border:none' width=0 height=24></td>
   
   </tr>
   <tr style='mso-yfti-irow:45;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:46;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:47;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:48;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:49;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:50;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:51;mso-yfti-lastrow:yes;page-break-inside:avoid;
    height:10.95pt'>
    <td width=317 style='width:238.1pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
    height:10.95pt'>
    <span  style='mso-fareast-font-family:
    "Times New Roman";letter-spacing:2.0pt;'>
        TOTAL LAWTON INSTRUMENTAL</span>

        @if ($errors->has('total_la'))
                    <span class="help-block">
                       <strong>{{ $errors->first('total_la') }}</strong>
                    </span>
        @endif
    </td>
    <td width=40 style='width:30.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:10.95pt'>
                       
                                 
        <input id="total_la" type="text" maxlength="3"  class="form-control numero" name="total_la" value="{{(isset($data))  ? $data->total_la : old('total_la')}}" >
                                                               


    </td>
    
    <td style='height:10.95pt;border:none' width=0 height=15></td>
   
   </tr>
  </table>
  </td>
  <td width=367 style='width:275.6pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:877.75pt'>
  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 
   style='width:100%;border-collapse:collapse;border:none;mso-border-alt:
   solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
   mso-border-insideh:.5pt solid windowtext;mso-border-insidev:.5pt solid windowtext'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;page-break-inside:avoid'>
    <td width=352 colspan=2 style='width:264.0pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:black;mso-shading:windowtext;
    mso-pattern:solid auto;padding:0cm 5.4pt 0cm 5.4pt'>
     <span  style='font-family:"Arial","sans-serif";
    mso-fareast-font-family:"Times New Roman";color:white;font-weight:normal;
    mso-bidi-font-weight:bold'>ESTADO FUNCIONAL AUTOCUIDADO PERSONAL</span>
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:1;page-break-inside:avoid;height:10.2pt'>
    <td rowspan=10 style='width:70%;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.2pt'>
    <p class=MsoBodyText style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:0cm'><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Aseo e higiene
    personal:</span></p>
    <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:12.6pt;text-indent:-12.0pt;mso-list:l11 level1 lfo16;
    tab-stops:list 12.6pt 18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Cuida completamente de su aseo íntimo
    y nunca tiene problemas de incontinencia.</span></p>
    <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:12.6pt;text-indent:-12.0pt;mso-list:l11 level1 lfo16;
    tab-stops:list 12.6pt 18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita que le recuerden o que le
    ayuden en su aseo íntimo, <span class=SpellE>ó</span> puede tener
    accidentalmente incontinencia (una vez a la semana).</span></p>
    <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:12.6pt;text-indent:-12.0pt;mso-list:l11 level1 lfo16;
    tab-stops:list 12.6pt 18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se ensucia (evacua) u orina
    mientras está dormido más de una vez a la semana.</span></p>
    <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:12.6pt;text-indent:-12.0pt;mso-list:l11 level1 lfo16;
    tab-stops:list 12.6pt 18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se ensucia u orina mientras está
    despierto más de una vez a la semana.</span></p>
    <p class=MsoNormal style='margin-top:1.0pt;margin-right:0cm;margin-bottom:
    1.0pt;margin-left:12.6pt;text-indent:-12.0pt;mso-list:l11 level1 lfo16;
    tab-stops:list 12.6pt 18.0pt'><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Tiene permanentemente doble
    incontinencia: fecal y urinaria.</span></p>
    </td>
     <td rowspan=10>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="higiene" id="higiene" >
             <option value=1 {{ (isset($data) && $data->higiene ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->higiene ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->higiene ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->higiene ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->higiene ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    
    <td style='height:10.2pt;border:none' width=0 height=14></td>
   
   </tr>
   <tr style='mso-yfti-irow:2;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:3;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:4;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:5;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:6;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:7;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:8;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:9;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:10;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:11;page-break-inside:avoid;height:9.2pt'>
    <td width=312 rowspan=8 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoBodyText><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Capacidad de
    alimentarse:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l0 level1 lfo17;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Come sin asistencia.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l0 level1 lfo17;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Come con pequeña asistencia a la
    hora de las comidas y/o con comidas de preparación especial (espaguetis,
    alcachofas); necesita que le ayuden a limpiarse después de las comidas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l0 level1 lfo17;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Come por sí mismo, pero con
    asistencia moderada. Es desordenado a la hora de comer.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l0 level1 lfo17;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Requiere de mucha asistencia en
    todas las comidas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l0 level1 lfo17;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No puede comer por si solo y se
    resiste al esfuerzo de otros en tratar de alimentarlo.</span></p>
    </td>
     <td  width=50 rowspan=8>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="cap_alim" id="cap_alim" >
             <option value=1 {{ (isset($data) && $data->cap_alim ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->cap_alim ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->cap_alim ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->cap_alim ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->cap_alim ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:12;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:13;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:14;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:15;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:16;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:17;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:18;page-break-inside:avoid;height:37.9pt'>
    
    <td style='height:37.9pt;border:none' width=0 height=51></td>
   
   </tr>
   <tr style='mso-yfti-irow:19;page-break-inside:avoid;height:9.2pt'>
    <td width=312 rowspan=5 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoBodyText><sup><span  style='mso-bidi-font-size:8.0pt;
    color:#0070C0;font-weight:normal;mso-bidi-font-weight:bold'>82</span></sup><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Capacidad de
    vestirse:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l8 level1 lfo18;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se viste y desviste por si solo y selecciona
    toda la ropa que desea ponerse.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l8 level1 lfo18;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se viste y desviste por sí solo,
    aunque requiere que la ropa que va a usar sea preseleccionada.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l8 level1 lfo18;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita alguna ayuda para vestirse
    incluso cuando su ropa es preseleccionada.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l8 level1 lfo18;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita mucha ayuda para vestirse,
    pero coopera con la persona que le ayuda a vestirse.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l8 level1 lfo18;tab-stops:list 12.0pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Es completamente incapaz de
    vestirse y se resiste al esfuerzo que hacen otras personas que intentan
    vestirlo</span></p>
    </td>
    <td  width=50 rowspan=5>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="vestirse" id="vestirse" >
             <option value=1 {{ (isset($data) && $data->vestirse ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->vestirse ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->vestirse ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->vestirse ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->vestirse ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:20;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:21;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:22;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:23;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:24;page-break-inside:avoid;height:9.2pt'>
    <td width=312 rowspan=10 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoBodyText2><span 
    style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman";font-weight:normal;mso-bidi-font-weight:
    bold'>Capacidad de arreglarse (cabello, uñas, manos, cara, ropa):</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l10 level1 lfo19;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Siempre se arregla adecuadamente,
    luciendo atuendos y/o prendas bien combinadas. El sujeto se arregla <span
    style='mso-bidi-font-weight:bold'>sin ayuda</span>.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l10 level1 lfo19;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se arregla adecuadamente, aunque
    ocasionalmente requiere una asistencia menor, por ejemplo, para afeitarse.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l10 level1 lfo19;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita asistencia moderada y regular
    o supervisión para vestirse.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l10 level1 lfo19;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Necesita totalmente que lo
    arreglen, pero puede permanecer bien arreglado después que otros le ayudan.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l10 level1 lfo19;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Activamente se niega a cualquier
    esfuerzo de mantenerse arreglado</span></p>
    </td>
      <td  width=50 rowspan=10>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="arreglar" id="arreglar" >
             <option value=1 {{ (isset($data) && $data->arreglar ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->arreglar ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->arreglar ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->arreglar ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->arreglar ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:25;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:26;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:27;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:28;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:29;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:30;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:31;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:32;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:33;page-break-inside:avoid;height:23.45pt'>
    
    <td style='height:23.45pt;border:none' width=0 height=31></td>
   
   </tr>
   <tr style='mso-yfti-irow:34;page-break-inside:avoid;height:9.2pt'>
    <td width=312 rowspan=9 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoBodyText><sup><span  style='mso-bidi-font-size:8.0pt;
    color:#0070C0;font-weight:normal;mso-bidi-font-weight:bold'>84</span></sup><span
     style='font-weight:normal;mso-bidi-font-weight:bold'>Deambulación
    física:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l5 level1 lfo20;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Deambula sin asistencia en
    cualquier parte que se encuentre, incluso en lugares alejados de su hogar.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l5 level1 lfo20;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Deambula sin asistencia dentro de
    la casa o por su cuadra.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l5 level1 lfo20;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Deambula con la asistencia de otra persona
    o usando un bastón, andadera o silla de ruedas.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l5 level1 lfo20;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Está sentado sin soporte en sillas
    convencionales o en sillas de rueda, pero no puede desplazarse de un lugar
    a otro sin ayuda.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.0pt;
    mso-list:l5 level1 lfo20;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Postrado en cama más de la mitad
    del tiempo del día</span></p>
    </td>
    <td  width=50 rowspan=9>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="deambul" id="deambul" >
             <option value=1 {{ (isset($data) && $data->deambul ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->deambul ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->deambul ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->deambul ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->deambul ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:35;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:36;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:37;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:38;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:39;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:40;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:41;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:42;page-break-inside:avoid;height:13.55pt'>
    
    <td style='height:13.55pt;border:none' width=0 height=18></td>
   
   </tr>
   <tr style='mso-yfti-irow:43;page-break-inside:avoid;height:9.2pt'>
    <td width=312 rowspan=9 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:9.2pt'>
    <p class=MsoNormal><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Capacidad de bañarse:</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l14 level1 lfo21;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>1.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se baña solo, no necesita ayuda.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l14 level1 lfo21;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>2.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se baña solo, pero requieren que le
    ayuden a entrar y salir de la ducha o bañera.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l14 level1 lfo21;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>3.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>Se lava la cara y manos fácilmente
    pero no puede lavarse el resto de su cuerpo.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l14 level1 lfo21;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>4.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No se lava por sí mismo, pero
    colabora con aquellos que le bañan.</span></p>
    <p class=MsoNormal style='margin-left:12.6pt;text-indent:-12.6pt;
    mso-list:l14 level1 lfo21;tab-stops:list 12.6pt 18.0pt'><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-fareast-font-family:Arial'><span style='mso-list:Ignore'>5.<span
    style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span><span
     style='font-size:8.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial","sans-serif";
    mso-bidi-font-family:"Times New Roman"'>No trata de lavarse por sí mismo
    y/o se resiste al esfuerzo de otros de mantenerlo limpio</span></p>
    </td>
   <td  width=50 rowspan=9>
        
       <select class="form-control quantity2" onclick="suma(this.value)"  name="banarse" id="banarse" >
             <option value=1 {{ (isset($data) && $data->banarse ==1) ? 'selected' : '' }}>1</option>
             <option value=2 {{ (isset($data) && $data->banarse ==2) ? 'selected' : '' }}>2</option>
             <option value=3 {{ (isset($data) && $data->banarse ==3) ? 'selected' : '' }}>3</option> 
             <option value=4 {{ (isset($data) && $data->banarse ==4) ? 'selected' : '' }}>4</option> 
             <option value=5 {{ (isset($data) && $data->banarse ==5) ? 'selected' : '' }}>5</option>   
        </select>
                                                                                        
    </td>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:44;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:45;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:46;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:47;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:48;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:49;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:50;page-break-inside:avoid;height:9.2pt'>
    
    <td style='height:9.2pt;border:none' width=0 height=12></td>
   
   </tr>
   <tr style='mso-yfti-irow:51;page-break-inside:avoid;height:11.0pt'>
    
    <td style='height:11.0pt;border:none' width=0 height=15></td>
   
   </tr>
   <tr style='mso-yfti-irow:52;page-break-inside:avoid'>
    <td width=312 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt'>
    <p class=MsoNormal align=right style='margin-top:6.0pt;margin-right:0cm;
    margin-bottom:6.0pt;margin-left:0cm;text-align:right'><b style='mso-bidi-font-weight:
    normal'><span  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
    font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
    letter-spacing:2.0pt'>TOTAL<span style='mso-spacerun:yes'> 
    </span>LAWTON<span style='mso-spacerun:yes'>  </span>AUTOCUIDADO</span></b></p>

          @if ($errors->has('tot_auto'))
                                     <span class="help-block">
                                        <strong>{{ $errors->first('tot_auto') }}</strong>
                                    </span>
             @endif
    </td>
    <td width=40 style='width:30.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                                   
        <input id="tot_auto" type="text" maxlength="3"  class="form-control numero" name="tot_auto" value="{{(isset($data))  ? $data->tot_auto : old('tot_auto')}}" >
                                  
    </td>
    
    <td style='border:none' width=0></td>
   
   </tr>
   <tr style='mso-yfti-irow:53;mso-yfti-lastrow:yes;page-break-inside:avoid;
    height:20.5pt'>
    <td width=312 style='width:234.0pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:white;padding:0cm 5.4pt 0cm 5.4pt;
    height:20.5pt'>
    <p class=MsoNormal align=right style='margin-top:6.0pt;margin-right:0cm;
    margin-bottom:6.0pt;margin-left:0cm;text-align:right'><b style='mso-bidi-font-weight:
    normal'><span  style='font-size:8.0pt;mso-bidi-font-size:12.0pt;
    font-family:"Arial","sans-serif";mso-bidi-font-family:"Times New Roman";
    letter-spacing:2.0pt'>TOTAL<span style='mso-spacerun:yes'>  </span>GLOBAL<span
    style='mso-spacerun:yes'>  </span>DE LA ESCALA</span></b></p>
          @if ($errors->has('tot_glob'))
                                     <span class="help-block">
                                        <strong>{{ $errors->first('tot_glob') }}</strong>
                                    </span>
             @endif
    </td>
    <td width=40 style='width:30.0pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
    height:20.5pt'>
          <input id="tot_glob" type="text" maxlength="3"  class="form-control numero" name="tot_glob" value="{{(isset($data))  ? $data->tot_glob : old('tot_glob')}}" >
    </td>
    
    <td style='height:20.5pt;border:none' width=0 height=27></td>
   
   </tr>
  </table>
  </td>
 </tr>
</table>

</div>
                     
<hr>  
                  
            <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
      </form>
   </div>
 </div>



@endsection

@push('scripts')

<script type="text/javascript">
    

$(document).ready(function(){

  suma(0);

  var id = $("#patient_id").val();
    var fecha = $("#fecha_ef").val();
    patient(id,fecha);


  $("#patient_id").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#fecha_ef").val();
    patient(id,fecha);
 }); 


   $('.numero').mask("9999",);
   $('.decimal').mask("999.99",{reverse: true});

}); 


function patient(value,fecha){

   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                          $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                          $("#edad").val(response.data.edad);
                          $("#hist_id").val(response.data.hist_id);
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}

function suma(valor)
{
    let totals=0;
    let total=0;
   // var totals = parseInt(valor);
      $("select.quantity").each(function() {
       totals += parseInt(this.value);
      });

       $("#total_la").val(totals);

       $("select.quantity2").each(function() {
       total += parseInt(this.value);
       //console.log(total)
      });
       $("#tot_auto").val(total);
       $("#tot_glob").val((totals+total));
       
        
 }

</script>

@endpush


