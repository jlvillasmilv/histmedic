@extends('layouts.main')
@section('title', ' Evaluacion Neuropsicologica CORE')
@section('content')
  <div class="panel panel-primary">
      <div class="panel-heading">
            <a class="pull-right" href="{{ url('/evaluacion_core') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Evaluacion Neuropsicologica CORE</div>
            <div class="panel-body">
                <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('evaluacion_core.update',  $data->id) : route('evaluacion_core.store') }}">
                        {{ csrf_field() }}

                        @if(isset($data))
                        
                        {{ method_field('PUT') }}
                        @endif

                        @include('patient.patient')

<div class=WordSection1>



<table class="MsoTableGrid table" border=1 cellspacing=0 cellpadding=0 
 style='width:100%;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr height=41 style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.0pt'>
  <td width=121 height=41 style='width:90.9pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>1<sup>er</sup> Nombre</span></font></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <input id="nombre" type="text" readonly=""  class="form-control" name="nombre" value='{{old("nombre")}}' >  
</p>
  </td>
  <td width=121 colspan=4 height=41 style='width:90.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>2<sup>do</sup> Nombre</span></font></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <input id="nombre2" type="text" readonly=""  class="form-control" name="nombre" value='{{old("nombre")}}' >  
</p>
  </td>
  <td width=121 colspan=2 height=41 style='width:90.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>1<sup>er</sup> Apellido</span></font></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'> <input id="apellido" type="text" readonly=""  class="form-control" name="apellido" value='{{old("apellido")}}' >  </p>
  </td>
  <td width=121 colspan=4 height=41 style='width:90.9pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>2<sup>do</sup> Apellido</span></font></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><input id="apellido2" type="text"  class="form-control" readonly="" name="apellido2" value='{{old("apellido2")}}' > </p>
  </td>
  <td width=121 colspan=3 height=41 style='width:91.05pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>CI: <input id="cedula" type="text" readonly=""  class="form-control" name="cedula" value='{{old("cedula")}}' >
  </span></font></p>
  </td>
  <td width=156 colspan=2 height=41 style='width:116.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:31.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Historia #: <input id="hist_id" type="text" readonly=""  class="form-control" name="hist_id" value='{{old("hist_id")}}' >
</span></font></p>
  </td>
 </tr>
 <tr height=29 style='mso-yfti-irow:1;height:21.6pt'>
  <td width=169 colspan=2 height=29 style='width:126.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Estado civil: 

          <select class="form-control" name="Core_Edo_Civil">
                <option value="1" {{ (isset($data) && $data->Core_Edo_Civil ==1) ? 'selected' : '' }}> 1 = Casado-Concubinato</option>
                <option value="2" {{ (isset($data) && $data->Core_Edo_Civil ==2) ? 'selected' : '' }}> 2 = Separado-Divorciado</option>
                <option value="3" {{ (isset($data) && $data->Core_Edo_Civil ==3) ? 'selected' : '' }}> 3 = Soltero</option>
                <option value="4" {{ (isset($data) && $data->Core_Edo_Civil ==4) ? 'selected' : '' }}> 4 = Viudo</option>
            </select>
       
</span></font></p>
  </td>
  <td width=163 colspan=4 height=29 style='width:122.05pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>N° de Hijos: 
            <input id="Core_NdeHijos" type="text" class="form-control numero" name="Core_NdeHijos" value='{{ old("Core_NdeHijos", isset($data) ? $data->Core_NdeHijos : "") }}'>                   
                     @if ($errors->has('Core_NdeHijos'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_NdeHijos') }}</strong>
                           </span>
                     @endif          

</span></font></p>
  </td>
  <td width=108 colspan=3 height=29 style='width:81.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Sexo:<span
  style='mso-spacerun:yes'>  <input id="sexo" type="text" readonly=""  class="form-control" name="sexo" value='{{old("sexo")}}' >
    </span></font></p>
  </td>
  <td colspan=3 height=29 style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Edad:  <input id="edad" type="text" readonly=""  class="form-control" name="edad" value='{{old("edad")}}' > </span></font></p>
  </td>
  <td width=218 colspan=4 height=29 style='width:163.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Años escolares cumplidos:

             <input id="edu_core" type="text" class="form-control numero" name="edu_core"  value='{{ old("edu_core", isset($data) ? $data->edu_core : "") }}' >                   
                     @if ($errors->has('edu_core'))
                          <span class="help-block">
                              <strong>{{ $errors->first('edu_core') }}</strong>
                           </span>
                     @endif  
      </span></font></p>
  </td>
 </tr>
 <tr height=29 style='mso-yfti-irow:2;height:21.6pt'>
  <td width=181 colspan=4 height=29 style='width:136.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Lentes Correctivos:
                                             
           <select class="form-control" name="lentes">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->lentes ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
</span></font></p>
  </td>
  <td width=150 colspan=2 height=29 style='width:112.75pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Disponibles: 
            <select class="form-control" name="disponib">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->disponib ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

</span></font></p>
  </td>
  <td width=124 colspan=4 height=29 style='width:93.25pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Visión:

          <input id="Core_Vision" type="text" class="form-control" maxlength="20" name="Core_Vision" value='{{ old("Core_Vision", isset($data) ? $data->Core_Vision : "") }}'>
                                           
                     @if ($errors->has('Core_Vision'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_Vision') }}</strong>
                           </span>
                     @endif

</span></font></p>
  </td>
  <td width=134 colspan=3 height=29 style='width:100.8pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Sordera:
     <select class="form-control" name="sordo">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sordo ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

</span></font></p>
  </td>
  <td width=172 colspan=3 height=29 style='width:128.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=1 face=Arial><span style='font-size:9.0pt;font-family:
  "Arial","sans-serif";'>Ayuda Auditiva: 
           
           <select class="form-control" name="ayuda">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ayuda ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


</span></font></p>
  </td>
 </tr>
 <tr height=29 style='mso-yfti-irow:3;height:21.6pt'>
  <td width=612 colspan=15 height=29 style='width:459.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  
   <label for="laterali" class="col-md-2 control-label">Lateralidad:</label>
   <div class="col-md-8">
  <select class="form-control" name="laterali">
                <option value="0" {{ (isset($data) && $data->laterali =="0") ? 'selected' : '' }} >0 = Derecho;</option>
                <option value="1" {{ (isset($data) && $data->laterali =="1") ? 'selected' : '' }}>1 = Zurdo;</option>
                <option value="2" {{ (isset($data) && $data->laterali =="2") ? 'selected' : '' }}>2 = Zurdera</option>
                <option value="3" {{ (isset($data) && $data->laterali =="3") ? 'selected' : '' }}>3 = Ambidiestro</option>
                <option value="4" {{ (isset($data) && $data->laterali =="4") ? 'selected' : '' }}>4 = DK</option>
            </select>
</div>
  </td>
  <td width=150 height=29 style='width:112.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  Hemiparesia
   <select class="form-control" name="Core_Hemiparesia">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Core_Hemiparesia ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr height=29 style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:21.6pt'>
  <td width=175 colspan=3 height=29 style='width:131.3pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
   <label for="laterali" class="col-md-10 control-label">Fecha de Hoy:</label>
  
         <input id="DatCore" type="date" class="form-control" name="DatCore" value='{{(isset($data)) && strtotime($data->DatCore) != false  ? date("Y-m-d", strtotime($data->DatCore)) : date("Y-m-d") }}' required="">
                                           
                     @if ($errors->has('DatCore'))
                          <span class="help-block">
                              <strong>{{ $errors->first('DatCore') }}</strong>
                           </span>
                     @endif
  </td>
  <td width=248 colspan=5 height=29 style='width:185.7pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
      <label for="Core_NdeEvaluacion" class="col-md-10 control-label">N° de Evaluaciones:</label>
  
  <select class="form-control" name="Core_NdeEvaluacion">
                <option value="1" {{ (isset($data) && $data->Core_NdeEvaluacion ==1) ? 'selected' : '' }}>1 = Primera evaluacion</option>
                <option value="2" {{ (isset($data) && $data->Core_NdeEvaluacion ==2) ? 'selected' : '' }}>2 = Segunda evaluacion</option>
                <option value="3" {{ (isset($data) && $data->Core_NdeEvaluacion ==3) ? 'selected' : '' }}>3 = Tercera evaluacion</option>
                <option value="4" {{ (isset($data) && $data->Core_NdeEvaluacion ==4) ? 'selected' : '' }}>4 = Cuarta evaluacion</option>
            </select>


  </td>
  <td width=339 colspan=8 height=29 style='width:254.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
       Examinador
      <input id="Core_Examinador" type="text" class="form-control" name="Core_Examinador" value='{{ old("Core_Examinador", isset($data) ? $data->Core_Examinador : "") }}' required="" maxlength="50">
                                           
                     @if ($errors->has('Core_Examinador'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_Examinador') }}</strong>
                           </span>
                     @endif
  </td>
 </tr>

</table>

<br>
<table class="table"
 style='border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr  style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.8pt'>
  <td  colspan=12   style='width:162.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Orientación</span></font></b></p>
  </td>
  
 </tr>
 
 <tr  style='mso-yfti-irow:2;height:10.8pt'>
  <td  style='border:
  solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Pregunta</span></font></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>0/1</span></font></b></p>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=36    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
 </tr>
 <tr  style='mso-yfti-irow:3;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1.<span style='mso-spacerun:yes'>   
  </span>Fecha </span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="ori_tiemp2">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemp2 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  </td>
  <td   style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td  colspan=3   style='width:157.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Benton</span></font></b></span><b><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold'></span></font></b></p>
  </td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td  colspan=3   style='width:140.1pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Benton</span></font></b></span><b><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold'></span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:4;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2.<span style='mso-spacerun:yes'>   
  </span>Año</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" name="ori_tiemp4">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemp4 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td  colspan=3   style='width:157.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Habilidades
  Construccionales</span></font></b></p>
  </td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td  colspan=3   style='width:140.1pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Memoria No verbal </span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:5;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3.<span style='mso-spacerun:yes'>   
  </span>Época</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="ori_tiemp5">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemp5 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=36    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
 </tr>
 <tr  style='mso-yfti-irow:6;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>4.<span style='mso-spacerun:yes'>   
  </span>Semana</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" name="ori_tiemp1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemp1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
 
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td  colspan=3  style='width:157.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Fase de Copia</span></font></p>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td colspan=3  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      Fase de Recuerdo
  </td>
 </tr>
 <tr  style='mso-yfti-irow:7;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>5.<span style='mso-spacerun:yes'>   
  </span>Mes</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="ori_tiemp3">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemp3 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='width: 8%; border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'> </span>

   <select class="form-control" name="ori_tiemptot">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->ori_tiemptot ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->ori_tiemptot ==2) ? 'selected' : '' }}>2</option>
                <option value="3" {{ (isset($data) && $data->ori_tiemptot ==3) ? 'selected' : '' }}>3</option>
                <option value="4" {{ (isset($data) && $data->ori_tiemptot ==4) ? 'selected' : '' }}>4</option>
                <option value="5" {{ (isset($data) && $data->ori_tiemptot ==5) ? 'selected' : '' }}>5</option>
            </select>

  /5</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Ítem/R</span></font></p>
  </td>
  <td   colspan=2  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          Selección
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Ítem/R</span></font></p>
  </td>
  <td  colspan=2  style='width:67.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Selección</span></font></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:8;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>6.<span style='mso-spacerun:yes'>   
  </span>Edificio</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="ori_esp1">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp1 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>1.<span
  style='mso-spacerun:yes'>  </span>C1/D</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";;font-weight:
  bold;mso-bidi-font-weight:normal'>

             <select class="form-control" class="form-control" name="Bpr1">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr1 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr1 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr1 =='D') ? 'selected' : '' }}>D</option>
            </select>

 </span></font></b></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="Bpp1">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp1 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>1.<span
  style='mso-spacerun:yes'>  </span>D1/B</span></font></p>
  </td>
  <td   style='width: 8%; border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Bdr1">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr1 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr1 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr1 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Bdp1">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp1 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:9;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>7.<span style='mso-spacerun:yes'>   
  </span>Municipio</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="ori_esp7">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp7 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>2.<span
  style='mso-spacerun:yes'>  </span>C2/B</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" class="form-control" name="Bpr2">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr2 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr2 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr2 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bpp2">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp2 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>2.<span
  style='mso-spacerun:yes'>  </span>D2/C</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" name="Bdr2">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr2 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr2 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr2 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bdp2">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp2 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:10;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>8.<span style='mso-spacerun:yes'>   
  </span>Estado</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="ori_esp4">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp4 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>3.<span
  style='mso-spacerun:yes'>  </span>C3/C</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" class="form-control" name="Bpr3">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr3 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr3 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr3 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
             <select class="form-control" name="Bpp3">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp3 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>3. D3/C</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Bdr3">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr3 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr3 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr3 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bdp3">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp3 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:11;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>9.<span style='mso-spacerun:yes'>   
  </span>Ciudad</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="ori_esp3">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp3 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>4.<span
  style='mso-spacerun:yes'>  </span>C4/C</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" class="form-control" name="Bpr4">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr4 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr4 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr4 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Bpp4">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp4 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>4.<span
  style='mso-spacerun:yes'>  </span>D4/D</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Bdr4">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr4 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr4 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr4 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Bdp4">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp4 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:12;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>10.<span style='mso-spacerun:yes'> 
  </span>Dirección</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="ori_esp5">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp5 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>&nbsp;</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>5.<span
  style='mso-spacerun:yes'>  </span>C5/B</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
             <select class="form-control" class="form-control" name="Bpr5">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr5 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr5 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr5 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="Bpp5">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp5 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>5.<span
  style='mso-spacerun:yes'>  </span>D5/C</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Bdr5">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr5 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr5 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr5 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Bdp5">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp5 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:13;height:10.8pt'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>11.<span style='mso-spacerun:yes'> 
  </span>Lugar</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="ori_esp2">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->ori_esp2 ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td    style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'> </span>
          <select class="form-control" name="ori_esptot">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->ori_esptot ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->ori_esptot ==2) ? 'selected' : '' }}>2</option>
                <option value="3" {{ (isset($data) && $data->ori_esptot ==3) ? 'selected' : '' }}>3</option>
                <option value="4" {{ (isset($data) && $data->ori_esptot ==4) ? 'selected' : '' }}>4</option>
                <option value="5" {{ (isset($data) && $data->ori_esptot ==5) ? 'selected' : '' }}>5</option>
                <option value="6" {{ (isset($data) && $data->ori_esptot ==6) ? 'selected' : '' }}>6</option>
            </select>

/6</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>6.<span
  style='mso-spacerun:yes'>  </span>C6/D</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <select class="form-control" class="form-control" name="Bpr6">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr6 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr6 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr6 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bpp6">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp6 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>6.<span
  style='mso-spacerun:yes'>  </span>D6/D</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Bdr6">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr6 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr6 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr6 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" name="Bdp6">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp6 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr>
  <td colspan=2  style='border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Puntaje Total: </span></font></p>
  </td>
  <td style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'> </span> 
      
         <input id="orientac" type="text" class="form-control" maxlength="6" name="orientac" value='{{ old("orientac", isset($data) ? $data->orientac : "") }}' >
                                           
                     @if ($errors->has('orientac'))
                          <span class="help-block">
                              <strong>{{ $errors->first('orientac') }}</strong>
                           </span>
                     @endif  
/11</span></font></p>
  </td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>7.<span
  style='mso-spacerun:yes'>  </span>C7/B</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" class="form-control" name="Bpr7">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr7 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr7 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr7 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bpp7">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp7 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>7.<span
  style='mso-spacerun:yes'>  </span>D7/B</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="Bdr7">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr7 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr7 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr7 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="Bdp7">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp7 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:15;height:10.8pt'>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>8.<span
  style='mso-spacerun:yes'>  </span>C8/A</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
              

           <select class="form-control" class="form-control" name="Bpr8">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr8 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr8 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr8 =='D') ? 'selected' : '' }}>D</option>
            </select>

  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <select class="form-control" name="Bpp8">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp8 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>8.<span
  style='mso-spacerun:yes'>  </span>D8/D</span></font></p>
  </td>
  <td  style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Bdr8">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr8 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr8 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr8 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Bdp8">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp8 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:16;height:10.8pt'>
  <td style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>9.<span
  style='mso-spacerun:yes'>  </span>C9/A</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            
           <select class="form-control" class="form-control" name="Bpr9">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr9 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr9 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr9 =='D') ? 'selected' : '' }}>D</option>
            </select>

  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <select class="form-control" name="Bpp9">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp9 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>9.<span
  style='mso-spacerun:yes'>  </span>D9/C</span></font></p>
  </td>
  <td   style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control"  name="Bdr9">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr9 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr9 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr9 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <select class="form-control" name="Bdp9">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp9 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:17;height:10.8pt'>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>10.<span
  style='mso-spacerun:yes'>  </span>C10/C</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <select class="form-control" class="form-control" name="Bpr10">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bpr10 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bpr10 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bpr10 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="Bpp10">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bpp10 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>10.<span
  style='mso-spacerun:yes'>  </span>D10/B</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Bdr10">
                <option value="A">A</option>
                <option value="B" {{ (isset($data) && $data->Bdr10 =='B') ? 'selected' : '' }}>B</option>
                <option value="C" {{ (isset($data) && $data->Bdr10 =='C') ? 'selected' : '' }}>C</option>
                <option value="D" {{ (isset($data) && $data->Bdr10 =='D') ? 'selected' : '' }}>D</option>
            </select>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Bdp10">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Bdp10 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:18;mso-yfti-lastrow:yes;height:10.8pt'>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td    style='padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'></td>
  <td    style='width:18.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Aciertos</span></font></p>
  </td>
  <td width=106  colspan=2  style='width:79.3pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'> 
            <input id="Bentonpar" type="text" class="form-control" maxlength="6" name="Bentonpar" value='{{ old("Bentonpar", isset($data) ? $data->Bentonpar : "") }}' >
                                           
                     @if ($errors->has('Bentonpar'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Bentonpar') }}</strong>
                           </span>
                     @endif  

  </span>/10</span></font><b style='mso-bidi-font-weight:
  normal'></b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'></span></font></p>
  </td>
  <td   style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Aciertos</span></font></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'>

           <input id="Bentondif" maxlength="3" type="text" class="form-control" maxlength="4" name="Bentondif" value='{{ old("Bentondif", isset($data) ? $data->Bentondif : "") }}'>
                                           
                     @if ($errors->has('Bentondif'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Bentondif') }}</strong>
                           </span>
                     @endif  


   </span>/10</span></font><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'></span></font></p>
  </td>
 </tr>
</table>

<br>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='width:100%;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr  style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:10.8pt'>
  <td width=216  colspan=4  style='width:161.65pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Igualdades y Desigualdades</span></font></b></p>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td colspan=3  style='padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>PRS Memoria</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:1;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=289  colspan=3  style='width:216.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>(Mediata y su
  Reconocimiento)</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:2;height:10.8pt'>
  <td colspan=2  style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Igualdades</span></font></p>
  </td>
  <td colspan=2  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Desigualdades</span></font></p>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   style='width:65.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td   style='width:59.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=122   style='width:91.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
 </tr>
 <tr  style='mso-yfti-irow:3;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>1</span></font></p>
  </td>
  <td width=70   style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control"  name="Core_MATTIS_Igual1">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual1 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>1</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Core_MATTIS_DesIgual1">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual1 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;mso-border-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Palabras</span></font></b></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border:solid windowtext 1.0pt;border-left:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Mediata</span></font></b></p>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border:solid windowtext 1.0pt;border-left:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Reconocimiento</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:4;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>2</span></font></p>
  </td>
  <td width=70   style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_Igual2">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual2 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>2</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Core_MATTIS_DesIgual2">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual2 ==1) ? 'selected' : '' }}>1</option>
            </select>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>1.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Lanzar</span></font></p>
  </td>
  <td bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input id="Core_PRS1_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS1_Memoria" value='{{ old("Core_PRS1_Memoria", isset($data) ? $data->Core_PRS1_Memoria : "") }}'>
                                           
                     @if ($errors->has('Core_PRS1_Memoria'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_PRS1_Memoria') }}</strong>
                           </span>
                     @endif  
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <input id="Core_PRS1_Reco" maxlength="3" type="text" class="form-control" name="Core_PRS1_Reco" value='{{ old("Core_PRS1_Reco", isset($data) ? $data->Core_PRS1_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:5;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>3</span></font></p>
  </td>
  <td width=70   style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_Igual3">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual3 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>3</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Core_MATTIS_DesIgual3">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual3 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>2.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Flor</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
           <input id="Core_PRS2_Memoria" maxlength="3" type="text" class="form-control numero" name="Core_PRS2_Memoria" value='{{ old("Core_PRS2_Memoria", isset($data) ? $data->Core_PRS2_Memoria : "") }}'>
                                           
                     @if ($errors->has('Core_PRS2_Memoria'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_PRS2_Memoria') }}</strong>
                           </span>
                     @endif  
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input id="Core_PRS2_Reco" maxlength="3" type="text" class="form-control" name="Core_PRS2_Reco" value='{{ old("Core_PRS2_Reco", isset($data) ? $data->Core_PRS2_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:6;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>4</span></font></p>
  </td>
  <td width=70   style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_Igual4">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual4 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>4</span></font></p>
  </td>
  <td width=71   style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="Core_MATTIS_DesIgual4">
            <option value="0">0</option>
            <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual4 ==1) ? 'selected' : '' }}>1</option>
    </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>3.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Película</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <input id="Core_PRS3_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS3_Memoria" value='{{ old("Core_PRS3_Memoria", isset($data) ? $data->Core_PRS3_Memoria : "") }}'>
                                           
                     @if ($errors->has('Core_PRS3_Memoria'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_PRS3_Memoria') }}</strong>
                           </span>
                     @endif  
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS3_Reco" maxlength="3" type="text" class="form-control" name="Core_PRS3_Reco" value='{{ old("Core_PRS3_Reco", isset($data) ? $data->Core_PRS3_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:7;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>5</span></font></p>
  </td>
  <td style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <select class="form-control" name="Core_MATTIS_Igual5">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual5 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>5</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <select class="form-control" name="Core_MATTIS_DesIgual5">
          <option value="0">0</option>
          <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual5 ==1) ? 'selected' : '' }}>1</option>
    </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>4.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Discreto</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input id="Core_PRS4_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS4_Memoria" value='{{ old("Core_PRS4_Memoria", isset($data) ? $data->Core_PRS4_Memoria : "") }}'>
                                           
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input id="Core_PRS4_Reco" maxlength="3" type="text" class="form-control" name="Core_PRS4_Reco" value='{{ old("Core_PRS4_Reco", isset($data) ? $data->Core_PRS4_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:8;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>6</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <select class="form-control" name="Core_MATTIS_Igual6">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual6 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>6</span></font></p>
  </td>
  <td style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_DesIgual6">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual6 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>5.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Piso
  </span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <input id="Core_PRS5_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS5_Memoria" value='{{ old("Core_PRS5_Memoria", isset($data) ? $data->Core_PRS5_Memoria : "") }}' >
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS5_Reco" maxlength="3" type="text" class="form-control" name="Core_PRS5_Reco" value='{{ old("Core_PRS5_Reco", isset($data) ? $data->Core_PRS5_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:9;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>7</span></font></p>
  </td>
  <td style='border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_Igual7">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual7 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>7</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <select class="form-control" name="Core_MATTIS_DesIgual7">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual7 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>6.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Carne</span></font></p>
  </td>
  <td bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <input id="Core_PRS6_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS6_Memoria" value='{{ old("Core_PRS6_Memoria", isset($data) ? $data->Core_PRS6_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input id="Core_PRS6_Reco" min="-99" max="9999" type="text" class="form-control" name="Core_PRS6_Reco" value='{{ old("Core_PRS6_Reco", isset($data) ? $data->Core_PRS6_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:10;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>8</span></font></p>
  </td>
  <td style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
            <select class="form-control" name="Core_MATTIS_Igual8">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_Igual8 ==1) ? 'selected' : '' }}>1</option>
            </select> 
  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>8</span></font></p>
  </td>
  <td style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <select class="form-control" name="Core_MATTIS_DesIgual8">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_MATTIS_DesIgual8 ==1) ? 'selected' : '' }}>1</option>
            </select>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>7.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Calle</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
        <input id="Core_PRS7_Memoria" maxlength="4" type="text" class="form-control" name="Core_PRS7_Memoria" value='{{ old("Core_PRS7_Memoria", isset($data) ? $data->Core_PRS7_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS7_Reco" maxlength="4" type="text" class="form-control" name="Core_PRS7_Reco" value='{{ old("Core_PRS7_Memoria", isset($data) ? $data->Core_PRS7_Memoria : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:11;height:10.8pt'>
  <td width=41   style='width:30.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Tot</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'></span></font></p>
  </td>
  <td width=70   style='width:52.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
          <input id="Core_MATTIS_Igual_Total" maxlength="4" type="text" class="form-control" name="Core_MATTIS_Igual_Total" value='{{ old("Core_MATTIS_Igual_Total", isset($data) ? $data->Core_MATTIS_Igual_Total : "") }}'>
                                           
                     @if ($errors->has('Core_MATTIS_Igual_Total'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_MATTIS_Igual_Total') }}</strong>
                           </span>
                     @endif  

  </td>
  <td width=33   style='width:24.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Tot</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'></span></font></p>
  </td>
  <td width=71   style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
         <input id="Core_MATTIS_DesIgual_Total" maxlength="4" type="text" class="form-control" name="Core_MATTIS_DesIgual_Total" value='{{ old("Core_MATTIS_DesIgual_Total", isset($data) ? $data->Core_MATTIS_DesIgual_Total : "") }}'>
                                           
                     @if ($errors->has('Core_MATTIS_DesIgual_Total'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_MATTIS_DesIgual_Total') }}</strong>
                           </span>
                     @endif  
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>8.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Casco</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS8_Memoria" maxlength="4" type="text" class="form-control" name="Core_PRS8_Memoria" value='{{ old("Core_PRS8_Memoria", isset($data) ? $data->Core_PRS8_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS8_Reco" maxlength="4" type="text" class="form-control" name="Core_PRS8_Reco" value='{{ old("Core_PRS8_Memoria", isset($data) ? $data->Core_PRS8_Memoria : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:12;height:10.8pt'>
  <td width=145  colspan=3  style='width:108.7pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total</span></font></p>
  </td>
  <td width=71   style='width:52.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";'><span
  style='mso-spacerun:yes'> 
   <input id="Core_MATTIS_Totalscore" maxlength="4" type="text" class="form-control" name="Core_MATTIS_Totalscore" value='{{ old("Core_MATTIS_Totalscore", isset($data) ? $data->Core_MATTIS_Totalscore : "") }}'>
                                           
                     @if ($errors->has('Core_MATTIS_Totalscore'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Core_MATTIS_Totalscore') }}</strong>
                           </span>
                     @endif   </span>/16</span></font></p>
  </td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>9.</span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Culebra</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input id="Core_PRS9_Memoria" maxlength="4" type="text" class="form-control" name="Core_PRS9_Memoria" value='{{ old("Core_PRS9_Memoria", isset($data) ? $data->Core_PRS9_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input name="Core_PRS9_Reco" id="Core_PRS9_Reco" maxlength="4" type="text" class="form-control" value='{{ old("Core_PRS9_Reco", isset($data) ? $data->Core_PRS9_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:13;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>10.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Cavar</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input id="Core_PRS10_Memoria" maxlength="4" type="text" class="form-control" name="Core_PRS10_Memoria" value='{{ old("Core_PRS10_Memoria", isset($data) ? $data->Core_PRS10_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input name="Core_PRS10_Reco" id="Core_PRS10_Reco" maxlength="4" type="text" class="form-control" value='{{ old("Core_PRS10_Reco", isset($data) ? $data->Core_PRS10_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:14;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>11.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Paquete</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
       <input id="Core_PRS11_Memoria" maxlength="4" type="text" class="form-control" name="Core_PRS11_Memoria" value='{{ old("Core_PRS11_Memoria", isset($data) ? $data->Core_PRS11_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
    <input name="Core_PRS11_Reco" id="Core_PRS11_Reco" maxlength="4" type="text" class="form-control" value='{{ old("Core_PRS11_Memoria", isset($data) ? $data->Core_PRS11_Memoria : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:15;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoListParagraph style='margin-bottom:0cm;margin-bottom:.0001pt;
  mso-add-space:auto;text-indent:-18.0pt;line-height:normal;mso-list:l0 level1 lfo1'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:Arial;color:black;'><span
  style='mso-list:Ignore'>12.<font size=1 face="Times New Roman"><span
  style='font:7.0pt "Times New Roman"'>&nbsp; </span></font></span></span></font><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Lata</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input id="Core_PRS12_Memoria" maxlength="3" type="text" class="form-control" name="Core_PRS12_Memoria"  value='{{ old("Core_PRS12_Memoria", isset($data) ? $data->Core_PRS12_Memoria : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input name="Core_PRS12_Reco" id="Core_PRS12_Reco" maxlength="3" type="text" class="form-control" value='{{ old("Core_PRS12_Reco", isset($data) ? $data->Core_PRS12_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:16;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=88   bgcolor="#FFFF00" style='width:65.95pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;mso-background-themecolor:background1;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Totales</span></font></p>
  </td>
  <td   bgcolor="#FFFF00" style='width:59.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
     <input id="Core_MemoriaScore" maxlength="3" type="text" class="form-control" name="Core_MemoriaScore" value='{{ old("Core_MemoriaScore", isset($data) ? $data->Core_MemoriaScore : "") }}'>
  </td>
  <td width=122   bgcolor="#FFFF00" style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
      <input name="Core_Reco" id="Core_Reco" maxlength="3" type="text" class="form-control" value='{{ old("Core_Reco", isset($data) ? $data->Core_Reco : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:10.8pt'>
  <td width=41   style='width:30.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=70   style='width:52.8pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=33   style='width:24.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=71   style='width:52.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=63   style='width:46.95pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'></td>
  <td width=167  colspan=2  bgcolor="#FFFF00" style='width:125.45pt;
  border:solid windowtext 1.0pt;border-top:none;mso-border-top-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total </span></font></p>
  </td>
  <td style='width:91.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;mso-background-themecolor:
  background1;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
   <input name="Core_TotalPRS" id="Core_TotalPRS" maxlength="3" type="text" class="form-control" value='{{ old("Core_TotalPRS", isset($data) ? $data->Core_TotalPRS : "") }}'>
  </td>
 </tr>
</table>

<table class="table" border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td width=323  colspan=2  style='width:242.0pt;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Semejanzas</span></font></b></p>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=207  colspan=2 style='width:155.0pt;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Comprensión</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td width=207  rowspan=2  style='width:155.1pt;border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Pregunta</span></font></b></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntuación</span></font></b></p>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148   style='width:111.0pt;border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Pregunta</span></font></b></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'><span
  style='mso-spacerun:yes'> </span>0 / 1</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>2, 1
  o 0</span></font></b></p>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1a.<span style='mso-spacerun:yes'> 
  </span>Corcho</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <select class="form-control sumComprension" name="boston_af1a" onchange="sumar(this.value)">
            <option value="0" {{ old("boston_af1a", isset($data) ? $data->boston_af1a : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("boston_af1a", isset($data) ? $data->boston_af1a : "")=="1" ? 'selected':''}}
                >1</option>
          </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1.<span style='mso-spacerun:yes'>  
  </span>Naranja-Cambur</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control" name="Core_Semenjanzas_Preg1">
                <option value="0" {{ old("Core_Semenjanzas_Preg1", isset($data) ? $data->Core_Semenjanzas_Preg1 : "")=="0" ? 'selected':''}} >0</option>
                <option value="1" {{ old("Core_Semenjanzas_Preg1", isset($data) ? $data->Core_Semenjanzas_Preg1 : "")=="1" ? 'selected':''}}>1</option>
                <option value="2" {{ old("Core_Semenjanzas_Preg1", isset($data) ? $data->Core_Semenjanzas_Preg1 : "")=="2" ? 'selected':''}}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2a.<span style='mso-spacerun:yes'> 
  </span>Martillo</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control sumComprension" name="boston_af2a">
            <option value="0" {{ old("boston_af2a", isset($data) ? $data->boston_af2a : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("boston_af2a", isset($data) ? $data->boston_af2a : "")=="1" ? 'selected':''}}
                >1</option>
    </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2.<span style='mso-spacerun:yes'>  
  </span>Perro-León</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control" name="Core_Semenjanzas_Preg2">
            <option value="0" {{ old("Core_Semenjanzas_Preg2", isset($data) ? $data->Core_Semenjanzas_Preg2 : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("Core_Semenjanzas_Preg2", isset($data) ? $data->Core_Semenjanzas_Preg2 : "")=="1" ? 'selected':''}}
                >1</option>
            <option value="2" {{ old("Core_Semenjanzas_Preg2", isset($data) ? $data->Core_Semenjanzas_Preg2 : "")=="2" ? 'selected':''}}
                >2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3a.<span style='mso-spacerun:yes'> 
  </span>Kilos</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control sumComprension" name="boston_af3a">
          <option value="0" {{ old("boston_af3a", isset($data) ? $data->boston_af3a : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af3a", isset($data) ? $data->boston_af3a : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3.<span style='mso-spacerun:yes'>  
  </span>Abrigo-Vestido</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Semenjanzas_Preg3">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg3 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg3 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>4a.<span style='mso-spacerun:yes'> 
  </span>Botas</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <select class="form-control sumComprension" name="boston_af4a">
          <option value="0" {{ old("boston_af4a", isset($data) ? $data->boston_af4a : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af4a", isset($data) ? $data->boston_af4a : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>4.<span style='mso-spacerun:yes'>  
  </span>Barco-Automóvil</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control" name="Core_Semenjanzas_Preg4">
           <option value="0" {{ old("Core_Semenjanzas_Preg4", isset($data) ? $data->Core_Semenjanzas_Preg4 : "")=="0" ? 'selected':''}}
                >0</option>
           <option value="1" {{ old("Core_Semenjanzas_Preg4", isset($data) ? $data->Core_Semenjanzas_Preg4 : "")=="1" ? 'selected':''}}
                >1</option>
           <option value="2" {{ old("Core_Semenjanzas_Preg4", isset($data) ? $data->Core_Semenjanzas_Preg4 : "")=="2" ? 'selected':''}}
                >2</option>
      </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1b.<span style='mso-spacerun:yes'> 
  </span>Piedra</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control sumComprension" name="boston_af1b">
          <option value="0" {{ old("boston_af1b", isset($data) ? $data->boston_af1b : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af1b", isset($data) ? $data->boston_af1b : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>5.<span style='mso-spacerun:yes'>  
  </span>Ojo-Oído</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control " name="Core_Semenjanzas_Preg5">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg5 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg5 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2b.<span style='mso-spacerun:yes'> 
  </span>Martillo</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <select class="form-control sumComprension" name="boston_af2b">
          <option value="0" {{ old("boston_af2b", isset($data) ? $data->boston_af2b : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af2b", isset($data) ? $data->boston_af2b : "")=="1" ? 'selected':''}}
                >1</option>
        </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>6.<span style='mso-spacerun:yes'>  
  </span>Botón-Cierre</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control" name="Core_Semenjanzas_Preg6">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg6 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg6 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3b.<span style='mso-spacerun:yes'> 
  </span>Azúcar</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control sumComprension" name="boston_af3b">
          <option value="0" {{ old("boston_af3b", isset($data) ? $data->boston_af3b : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af3b", isset($data) ? $data->boston_af3b : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>7.<span style='mso-spacerun:yes'>  
  </span>Norte-Oeste</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
         <select class="form-control" name="Core_Semenjanzas_Preg7">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg7 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg7 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>4b.<span style='mso-spacerun:yes'> 
  </span>Botas</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control sumComprension" name="boston_af4b">
          <option value="0" {{ old("boston_af4b", isset($data) ? $data->boston_af4b : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af4b", isset($data) ? $data->boston_af4b : "")=="1" ? 'selected':''}}
                >1</option>
       </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>8.<span style='mso-spacerun:yes'>  
  </span>Huevo-Semilla</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <select class="form-control" name="Core_Semenjanzas_Preg8">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg8 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg8 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>5a.<span style='mso-spacerun:yes'> 
  </span>Autobús</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control sumComprension" name="boston_af5a">
          <option value="0" {{ old("boston_af5a", isset($data) ? $data->boston_af5a : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af5a", isset($data) ? $data->boston_af5a : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>9.<span style='mso-spacerun:yes'>  
  </span>Mesa-Silla</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
        <select class="form-control" name="Core_Semenjanzas_Preg9">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg9 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg9 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>5b.<span style='mso-spacerun:yes'> 
  </span>Iba</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
   <select class="form-control sumComprension" name="boston_af5b">
          <option value="0" {{ old("boston_af5b", isset($data) ? $data->boston_af5b : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("boston_af5b", isset($data) ? $data->boston_af5b : "")=="1" ? 'selected':''}}
                >1</option>
    </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>10.<span style='mso-spacerun:yes'> 
  </span>Aire-Agua</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Semenjanzas_Preg10">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg10 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg10 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>6a.<span style='mso-spacerun:yes'> 
  </span>Terminal</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <select class="form-control sumComprension" name="boston_af6a">
           <option value="0" {{ old("boston_af6a", isset($data) ? $data->boston_af6a : "")=="0" ? 'selected':''}}
                >0</option>
           <option value="1" {{ old("boston_af6a", isset($data) ? $data->boston_af6a : "")=="1" ? 'selected':''}}
                >1</option>
       </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>11.<span style='mso-spacerun:yes'> 
  </span>Poema-Estatua</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
       <select class="form-control" name="Core_Semenjanzas_Preg11">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg11 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg11 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148  style='width:111.0pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>6b.<span style='mso-spacerun:yes'> 
  </span>Venia</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control sumComprension" name="boston_af6b">
           <option value="0" {{ old("boston_af6b", isset($data) ? $data->boston_af6b : "")=="0" ? 'selected':''}}
                >0</option>
           <option value="1" {{ old("boston_af6b", isset($data) ? $data->boston_af6a : "")=="1" ? 'selected':''}}
                >1</option>
    </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>12.<span style='mso-spacerun:yes'> 
  </span>Trabajo-Diversión</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control" name="Core_Semenjanzas_Preg12">
               <option value="0" {{ old("Core_Semenjanzas_Preg12", isset($data) ? $data->Core_Semenjanzas_Preg12 : "")=="0" ? 'selected':''}}
                >0</option>
           <option value="1" {{ old("Core_Semenjanzas_Preg12", isset($data) ? $data->Core_Semenjanzas_Preg12 : "")=="1" ? 'selected':''}}
                >1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg12 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148   style='width:111.0pt;border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total</span></font></p>
  </td>
  <td width=59  style='width:44.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <input name="boston_af" id="boston_af" maxlength="3" type="text" class="form-control" value='{{ old("boston_af", isset($data) ? $data->boston_af : "") }}'>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>13.<span style='mso-spacerun:yes'> 
  </span>Mosca-Árbol</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <select class="form-control" name="Core_Semenjanzas_Preg13">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg13 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg13 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148   style='width:111.0pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59  style='width:44.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:16;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>14.<span style='mso-spacerun:yes'> 
  </span>Alabanza-Castigo</span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control" name="Core_Semenjanzas_Preg14">
                <option value="0">0</option>
                <option value="1" {{ (isset($data) && $data->Core_Semenjanzas_Preg14 ==1) ? 'selected' : '' }}>1</option>
                <option value="2" {{ (isset($data) && $data->Core_Semenjanzas_Preg14 ==2) ? 'selected' : '' }}>2</option>
            </select>
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148   style='width:111.0pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59  style='width:44.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width=207  style='width:155.1pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total </span></font></p>
  </td>
  <td width=116  style='width:86.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>

      <input name="Core_Semenjanzas_Totalscore" id="Core_Semenjanzas_Totalscore" type="text" class="form-control" value='{{ old("Core_Semenjanzas_Totalscore", isset($data) ? $data->Core_Semenjanzas_Totalscore : "") }}'>
     
  </td>
  <td width=35   style='width:26.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td width=148   style='width:111.0pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59  style='width:44.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
 </tr>
</table>



<table class="table" >
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.4pt'>
  <td  colspan=2  style='width:157.45pt;
  border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;font-weight:bold'>Repetición de Frases</span></font></b></p>
  </td>
  <td  style='padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td  colspan=6  style='border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Prueba de Cancelación </span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:14.4pt'>
  <td  style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Pregunta</span></font></b><b><font
  size=2 color=black face=Arial><span  style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;font-weight:bold'></span></font></b></p>
  </td>
  <td   style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>0</span></font><font
  size=2 color=black face=Arial><span  style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;mso-bidi-font-weight:bold'>/1</span></font><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  mso-bidi-font-weight:bold'></span></font></p>
  </td>
  <td   style='padding:  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Rombo</span></font></b></p>
  </td>
  <td colspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>TMX</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1. Sabes</span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Repeticion_Frases_Sabes">
       <option value="0" {{ old("Core_Repeticion_Frases_Sabes", isset($data) ? $data->Core_Repeticion_Frases_Sabes : "")=="0" ? 'selected':''}}
                >0</option>
        <option value="1" {{ old("Core_Repeticion_Frases_Sabes", isset($data) ? $data->Core_Repeticion_Frases_Sabes : "")=="1" ? 'selected':''}}
                >1</option>
    </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Tiempo:</span></font>
      
       <input name="rtiempo" id="rtiempo" maxlength="4" type="text" class="form-control"  value='{{ old("rtiempo", isset($data) ? $data->rtiempo : "") }}'>

</p>
  </td>
  <td  colspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Tiempo:</span></font>

    <input name="tmxtpo" id="tmxtpo" maxlength="4" type="text" class="form-control" value='{{ old("tmxtpo", isset($data) ? $data->tmxtpo : "") }}'>
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2. Tierra</span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Repeticion_Frases_Tierra">
        <option value="0" {{ old("Core_Repeticion_Frases_Tierra", isset($data) ? $data->Core_Repeticion_Frases_Tierra : "")=="0" ? 'selected':''}}
                >0</option>
        <option value="1" {{ old("Core_Repeticion_Frases_Tierra", isset($data) ? $data->Core_Repeticion_Frases_Tierra : "")=="1" ? 'selected':''}}
                >1</option>
            </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Aciertos:<span
  style='mso-spacerun:yes'>             </span></span></font>

     
       <input name="racierto" id="racierto" maxlength="3" type="text" class="form-control" value='{{ old("racierto", isset($data) ? $data->racierto : "") }}'>

</p>
  </td>
  <td colspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Aciertos:<span
  style='mso-spacerun:yes'>                      </span></span></font>
  <input name="tmxacier" id="tmxacier" maxlength="3" type="text" class="form-control" value='{{ old("tmxacier", isset($data) ? $data->tmxacier : "") }}'>
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3. Trabajo</span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Repeticion_Frases_Trabajo">
         <option value="0" {{ old("Core_Repeticion_Frases_Trabajo", isset($data) ? $data->Core_Repeticion_Frases_Trabajo : "")=="0" ? 'selected':''}}
                >0</option>
        <option value="1" {{ old("Core_Repeticion_Frases_Trabajo", isset($data) ? $data->Core_Repeticion_Frases_Trabajo : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Errores:</span></font>

       <input name="rerror" id="rerror" maxlength="4" type="text" class="form-control" value='{{ old("rerror", isset($data) ? $data->rerror : "") }}'>

   </p>
  </td>
  <td  colspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Errores:<span
  style='mso-spacerun:yes'>                       </span></span></font>

    <input name="tmxerror" id="tmxerror" maxlength="3" type="text" class="form-control"  value='{{ old("tmxerror", isset($data) ? $data->tmxerror : "") }}'>
</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>4. Decirle</span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control" name="Core_Repeticion_Frases_decirte">
         <option value="0" {{ old("Core_Repeticion_Frases_decirte", isset($data) ? $data->Core_Repeticion_Frases_decirte : "")=="0" ? 'selected':''}}
                >0</option>
         <option value="1" {{ old("Core_Repeticion_Frases_decirte", isset($data) ? $data->Core_Repeticion_Frases_decirte : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  border:solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
 
  Omisiones:
  <input name="romis" id="romis" maxlength="4" type="text" class="form-control"  value='{{ old("romis", isset($data) ? $data->romis : "") }}'>
  </td>
  <td  colspan=3  style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Omisiones:<span
  style='mso-spacerun:yes'>                  </span></span></font>
     <input name="tmxomis" id="tmxomis" maxlength="4" type="text" class="form-control" value='{{ old("tmxomis", isset($data) ? $data->tmxomis : "") }}'>

</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>5. Hazlo</span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Repeticion_Frases_hazlo">
          <option value="0" {{ old("Core_Repeticion_Frases_hazlo", isset($data) ? $data->Core_Repeticion_Frases_hazlo : "")=="0" ? 'selected':''}}
                >0</option>
         <option value="1" {{ old("Core_Repeticion_Frases_hazlo", isset($data) ? $data->Core_Repeticion_Frases_hazlo : "")=="1" ? 'selected':''}}
                >1</option>
            </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59   bgcolor="#FF4000"
  style='width:44.15pt;border:solid windowtext 1.0pt;border-top:none;
  mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#3B3838;mso-background-themecolor:
  background2;mso-background-themeshade:64;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'></td>
  <td  style='width:50.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>SI</span></font></p>
  </td>
  <td colspan=2 style='width:50.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>SD</span></font></p>
  </td>
  <td style='width:50.95pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>II</span></font></p>
  </td>
  <td style='width:51.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>ID</span></font></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>6. Comedor </span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <select class="form-control" name="Core_Repeticion_Frases_comedor">
         <option value="0" {{ old("Core_Repeticion_Frases_comedor", isset($data) ? $data->Core_Repeticion_Frases_comedor : "")=="0" ? 'selected':''}}
                >0</option>
         <option value="1" {{ old("Core_Repeticion_Frases_comedor", isset($data) ? $data->Core_Repeticion_Frases_comedor : "")=="1" ? 'selected':''}}
                >1</option>
            </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59  style='width:44.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Rombo</span></font></p>
  </td>
  <td   style='width:50.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
   <input name="Core_PrCanc_Rombo_ULorSI" id="Core_PrCanc_Rombo_ULorSI" maxlength="3" type="text" class="form-control"  value='{{ old("Core_PrCanc_Rombo_ULorSI", isset($data) ? $data->Core_PrCanc_Rombo_ULorSI : "") }}' >
  </td>
  <td colspan=2  style='width:50.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
      <input name="Core_PrCanc_Rombo_URorSD" id="Core_PrCanc_Rombo_URorSD" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_Rombo_URorSD", isset($data) ? $data->Core_PrCanc_Rombo_URorSD : "") }}'>
  </td>
  <td  style='width:50.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <input name="Core_PrCanc_Rombo_LLorII" id="Core_PrCanc_Rombo_LLorII" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_Rombo_LLorII", isset($data) ? $data->Core_PrCanc_Rombo_LLorII : "") }}'>
  </td>
  <td  style='width:51.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
   <input name="Core_PrCanc_Rombo_LRorID" id="Core_PrCanc_Rombo_LRorID" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_Rombo_LRorID", isset($data) ? $data->Core_PrCanc_Rombo_LRorID : "") }}'>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>7. Radio </span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <select class="form-control" name="Core_Repeticion_Frases_Radio">
          <option value="0" {{ old("Core_Repeticion_Frases_Radio", isset($data) ? $data->Core_Repeticion_Frases_Radio : "")=="0" ? 'selected':''}}
                >0</option>
          <option value="1" {{ old("Core_Repeticion_Frases_Radio", isset($data) ? $data->Core_Repeticion_Frases_Radio : "")=="1" ? 'selected':''}}
                >1</option>
            </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td width=59  style='width:44.15pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>TMX</span></font></p>
  </td>
  <td   style='width:50.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <input name="Core_PrCanc_TMX_ULorSI" id="Core_PrCanc_TMX_ULorSI" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_TMX_ULorSI", isset($data) ? $data->Core_PrCanc_TMX_ULorSI : "") }}'>
  </td>
  <td colspan=2  style='width:50.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.4pt'>
   <input name="Core_PrCanc_TMX_URorSD" id="Core_PrCanc_TMX_URorSD" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_TMX_URorSD", isset($data) ? $data->Core_PrCanc_TMX_URorSD : "") }}'>
  </td>
  <td  style='width:50.95pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
     <input name="Core_PrCanc_TMX_LLorII" id="Core_PrCanc_TMX_LLorII" maxlength="3" type="text" class="form-control numero" value='{{ old("Core_PrCanc_TMX_LLorII", isset($data) ? $data->Core_PrCanc_TMX_LLorII : "") }}'>
  </td>
  <td  style='width:51.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
    <input name="Core_PrCanc_TMX_LRorID" id="Core_PrCanc_TMX_LRorID" maxlength="3" type="text" class="form-control" value='{{ old("Core_PrCanc_TMX_LRorID", isset($data) ? $data->Core_PrCanc_TMX_LRorID : "") }}'>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>8. Timbre </span></font></p>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
      <select class="form-control" name="Core_Repeticion_Frases_Timbre">
            <option value="0" {{ old("Core_Repeticion_Frases_Timbre", isset($data) ? $data->Core_Repeticion_Frases_Timbre : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("Core_Repeticion_Frases_Timbre", isset($data) ? $data->Core_Repeticion_Frases_Timbre : "")=="1" ? 'selected':''}}
                >1</option>
        </select>
  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
 </tr>
 <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:14.4pt'>
  <td   style='border:
  solid windowtext 1.0pt;border-top:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total</span></font></p>
  </td>
  <td style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'> 

     <input name="Core_Repeticion_Frases_Total" id="Core_Repeticion_Frases_Total" maxlength="3" type="text" class="form-control" value='{{ old("Core_Repeticion_Frases_Total", isset($data) ? $data->Core_Repeticion_Frases_Total : "") }}'>

  </td>
  <td   style='padding:
  0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
  <td  colspan=3  style='
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'></td>
 </tr>

 
 
</table>

<br>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=138
 style='width:103.5pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr  style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:13.05pt'>
  <td width=138  colspan=2  style='width:103.5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.05pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;;font-weight:bold'>Dibujo de Rosen</span></font></b></p>
  </td>
 </tr>
 <tr height=5 style='mso-yfti-irow:1;height:4.05pt'>
  <td width=66  height=5  style='width:49.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.05pt'></td>
  <td width=72  height=5 style='width:54.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:4.05pt'></td>
 </tr>
 <tr height=24 style='mso-yfti-irow:2;height:18.0pt'>
  <td width=66  height=24  style='width:49.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Ítem</span></font></b></p>
  </td>
  <td width=72  height=24  style='width:54.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>0/1</span></font></b></p>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:3;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>1</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <select class="form-control" name="rosen1">
         <option value="0" {{ old("rosen1", isset($data) ? $data->rosen1 : "")=="0" ? 'selected':''}}
                >0</option>
         <option value="1" {{ old("rosen1", isset($data) ? $data->rosen1 : "")=="1" ? 'selected':''}}
                >1</option>
        </select>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:4;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>2</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <select class="form-control" name="rosen2">
         <option value="0" {{ old("rosen2", isset($data) ? $data->rosen2 : "")=="0" ? 'selected':''}}
                >0</option>
         <option value="1" {{ old("rosen2", isset($data) ? $data->rosen2 : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:5;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>3</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <select class="form-control" name="rosen3">
           <option value="0" {{ old("rosen3", isset($data) ? $data->rosen2 : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("rosen3", isset($data) ? $data->rosen2 : "")=="1" ? 'selected':''}}
                >1</option>
        </select>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:6;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>4</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <select class="form-control" name="rosen4">
             <option value="0" {{ old("rosen4", isset($data) ? $data->rosen2 : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("rosen4", isset($data) ? $data->rosen2 : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:7;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>5</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <select class="form-control" name="rosen5">
            <option value="0" {{ old("rosen5", isset($data) ? $data->rosen5 : "")=="0" ? 'selected':''}}
                >0</option>
            <option value="1" {{ old("rosen5", isset($data) ? $data->rosen5 : "")=="1" ? 'selected':''}}
                >1</option>
      </select>
  </td>
 </tr>
 <tr height=24 style='mso-yfti-irow:8;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=66  height=24 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Total</span></font></p>
  </td>
  <td width=72  height=24 style='width:54.0pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

    <input name="rosenptj" id="rosenptj" maxlength="3" type="text" class="form-control numero" value='{{ old("rosenptj", isset($data) ? $data->rosenptj : "") }}'>
         
  </td>
 </tr>
</table>

<br>

<table class="table" >
 <tr>
  <td style='border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td   style='width:border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=3  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>SUB-PRUEBAS</span></font></b></p>
  </td>
  <td  colspan=5  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PUNTAJE</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:1;'>
  <td  rowspan=12 style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Lenguaje</span></font></b></p>
  </td>
  <td  rowspan=3 style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Identificación</span></font></p>
  </td>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Correctos sin asistencia</span></font></p>
  </td>
  <td  colspan=5  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'><span
  style='mso-spacerun:yes'>

       <input name="bostonsa" id="bostonsa" maxlength="3" type="text" class="form-control" value='{{ old("bostonsa", isset($data) ? $data->bostonsa : "") }}'>
         
 </span>/15</span></font>
         

</p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:2;'>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Correctos con E-Clave</span></font></p>
  </td>
  <td  colspan=5  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
     <input name="bostonec" id="bostonec" maxlength="3" type="text" class="form-control" value='{{ old("bostonsa", isset($data) ? $data->bostonsa : "") }}'>
         
  </td>
 </tr>
 <tr  style='mso-yfti-irow:3;'>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Correctos con E-Fonético </span></font></p>
  </td>
  <td  colspan=5  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
   <input name="bostonef" id="bostonef" maxlength="3" type="text" class="form-control"  value='{{ old("bostonef", isset($data) ? $data->bostonef : "") }}'>
       
  </td>
 </tr>
 <tr  style='mso-yfti-irow:4;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>TOTAL&nbsp;</span></font></b></p>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>PC.</span></font></b></p>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>P.&nbsp;</span></font></b></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>Puntaje</span></font></b></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:5;height:37.55pt'>
  <td  style='width:border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Asociación Controlada
  de Palabras</span></font></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
    <input name="acptotal" id="acptotal" maxlength="4" type="text" class="form-control" value='{{ old("acptotal", isset($data) ? $data->acptotal : "") }}'>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
   <input name="Core_Leng_asoconpal_PC" id="Core_Leng_asoconpal_PC" maxlength="3" type="text" class="form-control " value='{{ old("Core_Leng_asoconpal_PC", isset($data) ? $data->Core_Leng_asoconpal_PC : "") }}'>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
  <input name="Core_Leng_asoconpal_P" id="Core_Leng_asoconpal_P" maxlength="4" type="text" class="form-control"  value='{{ old("Core_Leng_asoconpal_P", isset($data) ? $data->Core_Leng_asoconpal_P : "") }}'>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
     <input name="Core_Leng_asoconpal_Puntaje" id="Core_Leng_asoconpal_Puntaje" maxlength="3" type="text" class="form-control"  value='{{ old("Core_Leng_asoconpal_Puntaje", isset($data) ? $data->Core_Leng_asoconpal_Puntaje : "") }}'>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:37.55pt'>
      <select class="form-control" name="Core_Leng_asoconpal_PuntajeLimit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Leng_asoconpal_PuntajeLimit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:6;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;<b><span
  style='font-weight:bold'></span></b></span></font></p>
  </td>
  <td style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:25.05pt'>
  <td style='width:border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Fluidez de Categorías</span></font></p>
  </td>
  <td  colspan=7 style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'>
  <input name="Core_Leng_Cagoria_Puntaje" id="Core_Leng_Cagoria_Puntaje" maxlength="6" type="text" class="form-control" value='{{ old("Core_Leng_Cagoria_Puntaje", isset($data) ? $data->Core_Leng_Cagoria_Puntaje : "") }}'>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'>
    <select class="form-control" name="Core_Leng_Cagoria_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Leng_Cagoria_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 

   
  </td>
 </tr>
 <tr  style='mso-yfti-irow:8;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>

  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>P</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:25.05pt'>
  <td style='width:border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Nombres de Animales</span></font></p>
  </td>
  <td  colspan=7 style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'>
     <input name="Core_Leng_Animales_Puntaje" id="Core_Leng_Animales_Puntaje" maxlength="4" type="text" class="form-control" value='{{ old("Core_Leng_Animales_Puntaje", isset($data) ? $data->Core_Leng_Animales_Puntaje : "") }}'>
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:25.05pt'></td>
 </tr>
 <tr  style='mso-yfti-irow:10;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;<b><span
  style='font-weight:bold'></span></b></span></font></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:11;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Repetición</span></font></p>
  </td>
  <td  colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
     <input name="Core_Leng_Repeticion_Puntaje" id="Core_Leng_Repeticion_Puntaje" maxlength="3" type="text" class="form-control" value='{{ old("Core_Leng_Repeticion_Puntaje", isset($data) ? $data->Core_Leng_Repeticion_Puntaje : "") }}'>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
     <select class="form-control" name="Core_Leng_Repeticion_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Leng_Repeticion_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 
  </td>
 </tr>
 <tr  style='mso-yfti-irow:12;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Comprensión</span></font></p>
  </td>
  <td  colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
    <input name="Core_Leng_Compresion_Puntaje" id="Core_Leng_Compresion_Puntaje" maxlength="3" type="text" class="form-control" value='{{ old("Core_Leng_Compresion_Puntaje", isset($data) ? $data->Core_Leng_Compresion_Puntaje : "") }}'>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
      <select class="form-control" name="Core_Leng_Compresion_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Leng_Compresion_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 
 
    
  </td>
 </tr>
 <tr  style='mso-yfti-irow:13;'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Repasados</span></font></b></p>
  </td>
  <td  colspan=4  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:14;'>
  <td  rowspan=3 style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Construcción
  </span></font></b></p>
  </td>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Rosen</span></font></p>
  </td>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
 <input name="Core_Const_Rosen_Repasados" id="Core_Const_Rosen_Repasados" maxlength="3" type="text" class="form-control" value='{{ old("Core_Const_Rosen_Repasados", isset($data) ? $data->Core_Const_Rosen_Repasados : "") }}'>
  </td>
  <td  colspan=4  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
    <input name="Core_Const_Rosen_Puntaje" id="Core_Const_Rosen_Puntaje" maxlength="3" type="text" class="form-control"  value='{{ old("Core_Const_Rosen_Puntaje", isset($data) ? $data->Core_Const_Rosen_Puntaje : "") }}'> /5
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
       <select class="form-control" name="Core_Const_Rosen_Puntaje_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Const_Rosen_Puntaje_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 
 
  </td>
 </tr>
 <tr  style='mso-yfti-irow:15;'>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=7  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:27.3pt'>
  <td style='width:border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Benton</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>
  (<span class=SpellE>Pereamiento</span>)</span></font></p>
  </td>
  <td  colspan=7 style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
    <input name="Core_Const_Benton_Puntaje" id="Core_Const_Benton_Puntaje" maxlength="3" type="text" class="form-control" value='{{ old("Core_Const_Benton_Puntaje", isset($data) ? $data->Core_Const_Benton_Puntaje : "") }}'> /10
  </td>
  <td  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:27.3pt'>
    <select class="form-control" name="Core_Const_Benton_Puntaje_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Const_Benton_Puntaje_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 

   
  </td>
 </tr>
 <tr  style='mso-yfti-irow:17;'>
  <td   style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td   style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td  colspan=3  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Rombo</span></font></b></p>
  </td>
  <td colspan=5  style='border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>TMX</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:18;'>
  <td  rowspan=7 style='border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Atención</span></font></b></p>
  </td>
  <td  rowspan=7 style='width:border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>Cancelación</span></font></b></p>
  </td>
  <td  colspan=3   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 face=Arial><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";'>Tiempo:<span style='mso-spacerun:yes'>                               
  </span>
     <input  name="rtiempo2" id="rtiempo2" maxlength="4" type="text" class="form-control" value='{{ old("rtiempo2", isset($data) ? $data->rtiempo2 : "") }}'> 
   </span></font></p>
  </td>
  <td  colspan=5   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>Tiempo:
    <input  name="tmxtpo2" id="tmxtpo2" maxlength="4" type="text" class="form-control" value='{{ old("tmxtpo2", isset($data) ? $data->tmxtpo2 : "") }}'> 
  </td>
 </tr>
 <tr  style='mso-yfti-irow:19;'>
  <td  colspan=3   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 face=Arial><span style='font-size:10.0pt;font-family:
  "Arial","sans-serif";mso-fareast-font-family:"Times New Roman";'>Aciertos:
      <input  name="racierto2" id="racierto2" maxlength="4" type="text" value='{{ old("racierto2", isset($data) ? $data->racierto2 : "") }}'> 
</span></font></p>
  </td>
  <td  colspan=5   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>Aciertos:  
    <input  name="tmxacier2" id="tmxacier2" maxlength="4" type="text" value='{{ old("tmxacier2", isset($data) ? $data->tmxacier2 : "") }}'> 
  </td>
 </tr>
 <tr  style='mso-yfti-irow:20;'>
  <td  colspan=3   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  Errores:
     <input  name="Core_Atenc_Cancel_Rombo_Errores" id="Core_Atenc_Cancel_Rombo_Errores" maxlength="6" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_Errores", isset($data) ? $data->Core_Atenc_Cancel_Rombo_Errores : "") }}'> 
  </td>
  <td  colspan=5   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
    <input  name="Core_Atenc_Cancel_TMX_Errores" id="Core_Atenc_Cancel_TMX_Errores" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_Errores", isset($data) ? $data->Core_Atenc_Cancel_TMX_Errores : "") }}'> 
  </td>
 </tr>
 <tr  style='mso-yfti-irow:21;'>
  <td  colspan=3   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '>
  Omisiones: 
  <input  name="Core_Atenc_Cancel_Rombo_Omisiones" id="Core_Atenc_Cancel_Rombo_Omisiones" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_Omisiones", isset($data) ? $data->Core_Atenc_Cancel_Rombo_Omisiones : "") }}'> 
  </td>
  <td  colspan=5   style='
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  '> Omisiones:
     <input  name="Core_Atenc_Cancel_TMX_Omisiones" id="Core_Atenc_Cancel_TMX_Omisiones" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_Omisiones", isset($data) ? $data->Core_Atenc_Cancel_TMX_Omisiones : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:22;'>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>Sub-Prueba</span></font></b></p>
  </td>
  <td  style='width:51.1pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>SI</span></font></b></p>
  </td>
  <td colspan=2  style='border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;
  font-weight:bold;mso-bidi-font-weight:normal'>SD</span></font></b></p>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>II</span></font></b></p>
  </td>
  <td colspan=2  style='width:77.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>ID</span></font></b></p>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:23;'>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>Rombo</span></font></b></p>
  </td>
  <td  style='width:51.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
    <input class="form-control" name="Core_Atenc_Cancel_Rombo_ULorSI" id="Core_Atenc_Cancel_Rombo_ULorSI" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_ULorSI", isset($data) ? $data->Core_Atenc_Cancel_Rombo_ULorSI : "") }}'>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
     <input class="form-control" name="Core_Atenc_Cancel_Rombo_URorSD" id="Core_Atenc_Cancel_Rombo_URorSD" maxlength="3" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_URorSD", isset($data) ? $data->Core_Atenc_Cancel_Rombo_URorSD : "") }}'>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
    <input class="form-control" name="Core_Atenc_Cancel_Rombo_LLorII" id="Core_Atenc_Cancel_Rombo_LLorII" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_LLorII", isset($data) ? $data->Core_Atenc_Cancel_Rombo_LLorII : "") }}'>
  </td>
  <td colspan=2  style='width:77.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
      <input class="form-control" name="Core_Atenc_Cancel_Rombo_LRorID" id="Core_Atenc_Cancel_Rombo_LRorID" maxlength="3" type="text" value='{{ old("Core_Atenc_Cancel_Rombo_LRorID", isset($data) ? $data->Core_Atenc_Cancel_Rombo_LRorID : "") }}'>
  </td>
 </tr>
 <tr  style='mso-yfti-irow:24;mso-yfti-lastrow:yes;'>
  <td   style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;;
  font-weight:bold;mso-bidi-font-weight:normal'>TMX</span></font></b></p>
  </td>
  <td  style='width:51.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <input class="form-control" name="Core_Atenc_Cancel_TMX_ULorSI" id="Core_Atenc_Cancel_TMX_ULorSI" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_ULorSI", isset($data) ? $data->Core_Atenc_Cancel_TMX_ULorSI : "") }}'>
  </td>
  <td  colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
    <input class="form-control" name="Core_Atenc_Cancel_TMX_URorSD" id="Core_Atenc_Cancel_TMX_URorSD" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_URorSD", isset($data) ? $data->Core_Atenc_Cancel_TMX_URorSD : "") }}'>
  </td>
  <td colspan=2  style='border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
     <input class="form-control" name="Core_Atenc_Cancel_TMX_LLorII" id="Core_Atenc_Cancel_TMX_LLorII" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_LLorII", isset($data) ? $data->Core_Atenc_Cancel_TMX_LLorII : "") }}'>
  </td>
  <td colspan=2  style='width:77.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;'>
    <input class="form-control" name="Core_Atenc_Cancel_TMX_LRorID" id="Core_Atenc_Cancel_TMX_LRorID" maxlength="4" type="text" value='{{ old("Core_Atenc_Cancel_TMX_LRorID", isset($data) ? $data->Core_Atenc_Cancel_TMX_LRorID : "") }}'>
  </td>
 </tr>
 
</table>

<br>

<p class=MsoNormal align=center style='text-align:center;tab-stops:230.0pt'><b
style='mso-bidi-font-weight:normal'><font size=2 face=Arial><span 
style='font-size:11.0pt;line-height:107%;font-family:"Arial","sans-serif";
font-weight:bold;mso-bidi-font-weight:normal'>SUMARIO NEUROPSICOLOGICO</span></font></b></p>

<table class="table" border=0 cellspacing=0 cellpadding=0 
 style='width:100%;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr height=18 style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:13.2pt'>
  <td width=83  height=18 style='width:61.95pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td width=110  height=18 style='width:82.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td width=221  colspan=3 height=18 style='width:166.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>SUBPRUEBA</span></font></b></p>
  </td>
  <td width=66  colspan=2 height=18 style='width:49.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PB.</span></font></b></p>
  </td>
  <td  height=18 style='width:45.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PC.</span></font></b></p>
  </td>
  <td height=18 style='width:43.85pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>P</span></font></b></p>
  </td>
  <td width=63  colspan=2 height=18 style='width:46.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td width=88  height=18 style='width:65.95pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:1;height:13.2pt'>
  <td width=83  rowspan=9 style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Memoria
  </span></font></b></p>
  </td>
  <td width=110  rowspan=9 style='width:82.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>PRS</span></font></p>
  </td>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Memoria total</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <input class="form-control" name="memtot" id="memtot" maxlength="3" type="text" class="numero"  value='{{(isset($data))  ? $data->memtot  :old("memtot") }}' > 
  </td>
  <td width=88  height=18  style='width:65.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
     <select class="form-control" name="memtot_limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->memtot_limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 

    </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:2;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Memoria a largo plazo</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
 
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
     <input class="form-control" name="mlp" id="mlp" maxlength="3" type="text" class="numero"  value='{{(isset($data))  ? $data->mlp  :old("mlp") }}' > 
  </td>
  <td width=88  height=18  style='width:65.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
      <select class="form-control" name="mlp_limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->mlp_limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select> 
  
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:3;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Memoria mediata</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <input class="form-control" name="mediata" id="mediata" maxlength="3" type="text" class="numero"  value='{{(isset($data))  ? $data->mediata  :old("mediata") }}' > 
  </td>
  <td width=88  height=18  style='width:65.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
    <select class="form-control" name="mediate_limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->mediate_limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>
   
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:4;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Memoria de reconocimiento</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
        <input class="form-control" name="reconoc" id="reconoc" maxlength="4" type="text" value='{{ old("reconoc", isset($data) ? $data->reconoc : "") }}'>
  </td>
  <td width=88  height=18  style='width:65.95pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>

      <select class="form-control" name="reconoc_limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->reconoc_limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>
    
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:5;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>ALP</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  style='width:49.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
        <input class="form-control" name="alptot_PB" id="alptot_PB" maxlength="4" type="text" value='{{ old("alptot_PB", isset($data) ? $data->alptot_PB : "") }}'>
  </td>
  <td  height=18  style='width:45.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
     <input class="form-control" name="alptot_PC" id="alptot_PC" maxlength="4" type="text" value='{{ old("alptot_PC", isset($data) ? $data->alptot_PC : "") }}'>
  </td>
  <td height=18  style='width:43.85pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>


    <input class="form-control" name="alp" id="alp" maxlength="4" type="text" value='{{ old("alp", isset($data) ? $data->alp : "") }}'>
  </td>
  <td width=63  colspan=2 height=18  bgcolor="#757171"
  style='width:46.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>

  </td>
  <td width=88  height=18  bgcolor="#757171"
  style='width:65.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
 
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:6;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>CRLP</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  style='width:49.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
     <input class="form-control" name="crlp_PB" id="crlp_PB" maxlength="4" type="text" value='{{ old("crlp_PB", isset($data) ? $data->crlp_PB : "") }}'>
  </td>
  <td  height=18  style='width:45.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
    <input class="form-control" name="crlp_PC" id="crlp_PC" maxlength="4" type="text" value='{{ old("crlp_PC", isset($data) ? $data->crlp_PC : "") }}'>
  </td>
  <td height=18  style='width:43.85pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
     <input class="form-control" name="crlp" id="crlp" maxlength="4" type="text" value='{{ old("crlp", isset($data) ? $data->crlp : "") }}'>
  </td>
  <td width=63  colspan=2 height=18  bgcolor="#757171"
  style='width:46.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td width=88  height=18  bgcolor="#757171"
  style='width:65.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:7;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Total de intrusiones</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <input class="form-control" name="Core_Total_Intrusiones" id="Core_Total_Intrusiones" maxlength="4" type="text" value='{{ old("Core_Total_Intrusiones", isset($data) ? $data->Core_Total_Intrusiones : "") }}'>
  </td>
  <td width=88  height=18  bgcolor="#757171"
  style='width:65.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:8;height:13.2pt'>
  <td width=221  colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Intrusiones diferentes</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
     <input class="form-control" name="Core_Intrusiones_Diferentes" id="Core_Intrusiones_Diferentes" maxlength="4" type="text" value='{{ old("Core_Intrusiones_Diferentes", isset($data) ? $data->Core_Intrusiones_Diferentes : "") }}'>
  </td>
  <td width=88  height=18  bgcolor="#757171"
  style='width:65.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:9;height:13.2pt'>
  <td colspan=3 height=18  style='width:166.0pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>Palabras recordadas en intento #6</span></font></p>
  </td>
  <td width=66  colspan=2 height=18  bgcolor="#757171"
  style='width:49.5pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td  height=18  bgcolor="#757171"
  style='width:45.0pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td height=18  bgcolor="#757171"
  style='width:43.85pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><font size=2 color=black
  face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></font></sup></p>
  </td>
  <td width=63  colspan=2 height=18  style='width:46.95pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
      <input class="form-control" name="Core_Palab_recorda_6intentos" id="Core_Palab_recorda_6intentos" maxlength="3" type="text" value='{{ old("Core_Palab_recorda_6intentos", isset($data) ? $data->Core_Palab_recorda_6intentos : "") }}'>
  </td>
  <td width=88  height=18  bgcolor="#757171"
  style='width:65.95pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:#757171;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:10;height:13.2pt'>
  <td width=83  height=18  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td width=110  height=18  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td width=347  colspan=6 height=18 style='width:260.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td width=209  colspan=4 height=18  style='width:156.75pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr height=35 style='mso-yfti-irow:11;height:26.4pt'>
  <td width=83 height=35  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Memoria no verba</span></font></p>
  </td>
  <td width=110 height=35  style='width:82.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Benton</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>
  Reconocimiento</span></font></p>
  </td>
  <td width=347  colspan=6 height=35  style='width:260.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
  <input class="form-control" name="bentonm_Puntaje" id="bentonm_Puntaje" maxlength="4" type="text" value='{{ old("bentonm_Puntaje", isset($data) ? $data->bentonm_Puntaje : "") }}'>
  </td>
  <td colspan=4 height=35  style='width:156.75pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>

      <select class="form-control" name="bentonm_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->bentonm_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>

  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:12;height:13.2pt'>
  <td width=83  height=18  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td width=110  height=18  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td width=347  colspan=6 height=18 style='width:260.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td width=209  colspan=4 height=18  style='width:156.75pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:13;height:13.2pt'>
  <td width=83  height=18  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>ori_esptotión</span></font></p>
  </td>
  <td width=110  height=18  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Mini-Mental</span></font></p>
  </td>
  <td width=347  colspan=6 height=18  style='width:260.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><font size=2 color=black face=Arial><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></font></p>
          <input class="form-control" name="orientac_Puntaje" id="orientac_Puntaje" maxlength="4" type="text" value='{{ old("orientac_Puntaje", isset($data) ? $data->orientac_Puntaje : "") }}'>
  </td>
  <td colspan=4 height=18  style='width:156.75pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>

   <select class="form-control" name="orientac_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->orientac_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>
   
  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:14;height:13.2pt'>
  <td width=83  height=18  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td width=110  height=18  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td width=131  height=18 style='width:98.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PB.</span></font></b></p>
  </td>
  <td width=108  colspan=3 height=18 style='width:81.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PC.</span></font></b></p>
  </td>
  <td width=108  colspan=2 height=18 style='width:81.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Edad
  (<span class=SpellE>Coef</span>)</span></font></b></p>
  </td>
  <td width=107  colspan=2 height=18 style='width:80.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td width=102  colspan=2 height=18 style='width:76.25pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr height=35 style='mso-yfti-irow:15;height:26.4pt'>
  <td width=83 height=35  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Rabz</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>.
  <span class=SpellE>Abs</span>. Verbal</span></font></p>
  </td>
  <td width=110  height=35  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Semejanzas</span></font></p>
  </td>
  <td width=131  height=35 style='width:98.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
   <input class="form-control" name="Core_Razo_abs_sem_PB" id="Core_Razo_abs_sem_PB" maxlength="4" type="text" value='{{ old("Core_Razo_abs_sem_PB", isset($data) ? $data->Core_Razo_abs_sem_PB : "") }}'>
  </td>
  <td width=108 colspan=3 height=35 style='width:81.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
   <input class="form-control" name="Core_Razo_abs_sem_PC" id="Core_Razo_abs_sem_PC" maxlength="4" type="text" value='{{ old("Core_Razo_abs_sem_PC", isset($data) ? $data->Core_Razo_abs_sem_PC : "") }}'>
  </td>
  <td width=108 colspan=2 height=35 style='width:81.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
     <input class="form-control" name="Core_Razo_abs_sem_Edad" id="Core_Razo_abs_sem_Edad" maxlength="4" type="text" value='{{ old("Core_Razo_abs_sem_Edad", isset($data) ? $data->Core_Razo_abs_sem_Edad : "") }}'>
  </td>
  <td colspan=2 height=35 style='width:80.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
     <input class="form-control" name="Core_Razo_abs_sem_puntaje" id="Core_Razo_abs_sem_puntaje" maxlength="4" type="text" value='{{ old("Core_Razo_abs_sem_puntaje", isset($data) ? $data->Core_Razo_abs_sem_puntaje : "") }}'>
  </td>
  <td colspan=2 height=35 style='width:76.25pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <select class="form-control" name="Core_Razo_abs_sem_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->Core_Razo_abs_sem_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>

  </td>
 </tr>
 <tr height=18 style='mso-yfti-irow:16;height:13.2pt'>
  <td width=83 height=18  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>FUNCION</span></font></b></p>
  </td>
  <td width=110  height=18  style='width:82.55pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>PRUEBA</span></font></b></p>
  </td>
  <td width=173  colspan=2 height=18 style='width:130.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Iguales</span></font></b></p>
  </td>
  <td width=174  colspan=4 height=18 style='width:130.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Diferentes</span></font></b></p>
  </td>
  <td width=107  colspan=2 height=18  style='width:80.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Puntaje</span></font></b></p>
  </td>
  <td width=102  colspan=2 height=18  style='width:76.25pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;;font-weight:bold'>Limite</span></font></b></p>
  </td>
 </tr>
 <tr height=35 style='mso-yfti-irow:17;mso-yfti-lastrow:yes;height:26.4pt'>
  <td width=83 height=35  style='width:61.95pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><font size=2
  color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>Rabz</span></font></span><font
  size=2 color=black face=Arial><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>.
  <span class=SpellE>Abs</span>. No Verbal</span></font></p>
  </td>
  <td width=110 height=35  style='width:82.55pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><font size=2 color=black face=Arial><span
  style='font-size:10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black;'>Igualdades y
  Desigualdades</span></font></p>
  </td>
  <td width=173  colspan=2 height=35 style='width:130.0pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
   <input class="form-control" name="igual" id="igual" maxlength="3" type="text" value='{{ old("igual", isset($data) ? $data->igual : "") }}'>
  </td>
  <td width=174  colspan=4 height=35 style='width:130.5pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
      <input class="form-control" name="desigual" id="desigual" maxlength="4" type="text" value='{{ old("desigual", isset($data) ? $data->desigual : "") }}'>
  </td>
  <td width=107  colspan=2 height=35  style='width:80.5pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input class="form-control" name="igualtot" id="igualtot" maxlength="4" type="text" value='{{ old("igualtot", isset($data) ? $data->igualtot : "") }}'>
  </td>
  <td colspan=2 height=35  style='width:76.25pt;
  border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
     <select class="form-control" name="igualtot_Limit">
                <option value="0">0 = Normal</option>
                <option value="1" {{ (isset($data) && $data->igualtot_Limit ==1) ? 'selected' : '' }}>1 = Bajo</option>
            </select>
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
   $('.numero').mask("99",{reverse: true});
   $('.decimal').mask("999.99",{reverse: true});

}); 


function sumar() {

  var total = 0;

  $(".sumComprension").each(function() {

    if (isNaN(parseFloat($(this).val()))) {

      total += 0;

    } else {


      total += parseFloat($(this).val());

    }

  });

  $('#boston_af').val(parseInt(total/2));
 
}



function patient(){

  var id = $("#patient_id").val();
  var fecha = $("#DatCore").val();

   let url = '/api/list/patient/'+id+'/'+fecha;
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


