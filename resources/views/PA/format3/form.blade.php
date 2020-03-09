@extends('layouts.main')
@section('title', 'TOMA DE PRESION SENTADO, ACOSTADO Y DE PIE')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('format3.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>TOMA DE PRESION SENTADO, ACOSTADO Y DE PIE</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($pasls) ? route('format3.update',  $pasls->id) : route('format3.store') }}">
                        {{ csrf_field() }}

                        @if(isset($pasls))
                        
                        {{ method_field('PUT') }}
                        @endif

                      @include('patient.patient')

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:3.0pt;text-align:center;
line-height:normal'><span style='font-family:"Arial","sans-serif";'>PROTOCOLO DE ANCIANOS</span></p>

<p class=MsoNormal align=center style='margin-bottom:3.0pt;text-align:center;
line-height:normal'><span style='font-family:"Arial","sans-serif";'>PROYECTO CONOCIT G97000726</span></p>

<p class=MsoNormal align=center style='margin-bottom:3.0pt;text-align:center;
line-height:normal'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=64 height=6></td>
 </tr>
 <tr>
  <td></td>
  <td class="text-align:center">   <b>TOMA DE PRESION ARTERIAL SENTADO, ACOSTADO Y DE PIE</b>
 </tr>
</table>

</span><span style='font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal align=center style='margin-bottom:3.0pt;text-align:center;
line-height:normal'><span style='font-family:"Arial","sans-serif";'></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class="MsoNormal" style='margin-bottom:3.0pt;line-height:normal'><span
style='font-family:"Arial","sans-serif";'>NOMBRE:
<input  id="nombre" type="text" readonly="" name="nombre" value='{{old("nombre")}}' ></span><span
style='font-family:"Arial","sans-serif";'><span
style='mso-spacerun:yes'>      </span>CI:  <input id="cedula" type="text" readonly="" name="cedula" value='{{old("cedula")}}' > </span><span
style='font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><span
style='font-family:"Arial","sans-serif";'></span></p>


<div class="form-group{{ $errors->has('BH') ? ' has-error' : '' }}">

            <label for="hist_id" class="col-md-1 control-label">HISTORIA:</label>

              <div class="col-md-2">
                    <input id="hist_id" type="text" class="form-control" name="hist_id" value="{{old('hist_id')}}" readonly="" >                 
              </div>


              <label for="BW" class="col-md-1 control-label">PESO:</label>

              <div class="col-md-2">
                    <input id="BW" type="text"  step="00.01" class="form-control decimal" name="BW" value="{{(isset($pasls))  ? $pasls->BW : old('BW')}}" required="" >
                                           
                     @if ($errors->has('BW'))
                          <span class="help-block">
                              <strong>{{ $errors->first('BW') }}</strong>
                           </span>
                     @endif
              </div>

              <label for="BH" class="col-md-1 control-label">TALLA:</label>

              <div class="col-md-2">
                    <input id="BH" type="text" class="form-control decimal" name="BH" value="{{(isset($pasls))  ? $pasls->BH : old('BH')}}" required="" >
                                           
                     @if ($errors->has('BH'))
                          <span class="help-block">
                              <strong>{{ $errors->first('BH') }}</strong>
                           </span>
                     @endif
              </div>


            <label for="edad" class="col-md-1 control-label">EDAD:</label>

              <div class="col-md-1">
                    <input id="edad" type="text" class="form-control" name="edad" value="{{old('edad')}}" readonly="" >
                                           
              </div>
     </div>


<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><span
style='font-family:"Arial","sans-serif";'>



<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=664
 style='width:498.0pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr>
   <td colspan="3">
      <label for="DATH1" class="col-md-1 control-label">FECHA:</label>

           
          <input id="DATH1" type="date" class="form-control" name="DATH1" value='{{(isset($pasls))  ? date("Y-m-d", strtotime($pasls->DATH1))  :date("Y-m-d") }}' required >
                                           
                     @if ($errors->has('DATH1'))
                          <span class="help-block">
                              <strong>{{ $errors->first('DATH1') }}</strong>
                           </span>
                     @endif
   </td>

     <td colspan="3">
      <label for="DATH2" class="col-md-1 control-label">Fecha:</label>

                    <input id="DATH2" type="date" class="form-control" name="DATH2" value='{{ old("DATH2", isset($pasls) && strtotime($pasls->DATH2) != false  ? date("Y-m-d", strtotime($pasls->DATH2)) : "" )}}' >
                                           
                     @if ($errors->has('DATH2'))
                          <span class="help-block">
                              <strong>{{ $errors->first('DATH2') }}</strong>
                           </span>
                     @endif
   </td>

     <td colspan="3">
       <label for="DATH3" class="col-md-1 control-label">Fecha:</label>

                    <input id="DATH3" type="date" class="form-control" name="DATH3" value='{{ old("DATH3", isset($pasls) && strtotime($pasls->DATH3) != false  ? date("Y-m-d", strtotime($pasls->DATH3)) : "" )}}' >
                                           
                     @if ($errors->has('DATH3'))
                          <span class="help-block">
                              <strong>{{ $errors->first('DATH3') }}</strong>
                           </span>
                     @endif
   </td>
 </tr>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:18.0pt'>
  <td width=208 colspan=2 style='width:156.0pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>SENTADO BRAZO DERECHO</span></b></p>
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>

  </td>
  <td width=208 colspan=2 style='width:156.0pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>SENTADO BRAZO DERECHO</span></b><b><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></b></p>
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'></td>
  <td colspan=2 style='width:156.0pt;border-top:solid windowtext 1.0pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid black 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>SENTADO BRAZO DERECHO</span></b><b><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td colspan=2 style='width:156.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>

  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>1. PRIMERA TOMA DE T/A</span></b></p>
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'></td>
  <td width=208 colspan=2 style='width:156.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>2. SEGUNDA TOMA DE T/A</span></b></p>
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'></td>
  <td colspan=2 style='width:156.0pt;border-top:none;border-left:
  solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:
  solid black 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>3. TERCERA TOMA DE T/A</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:26.4pt'>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'>


          <input id="SBP1" maxlength="4" type="text" class="form-control numero" name="SBP1" value="{{(isset($pasls))  ? $pasls->SBP1 : old('SBP1')}}">

                                                            
          @if ($errors->has('SBP1'))
                <span class="help-block">
                     <strong>{{ $errors->first('SBP1') }}</strong>
                </span>
         @endif
            
</p>
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="SBP2" maxlength="4" type="text" class="form-control numero" name="SBP2" value="{{(isset($pasls))  ? $pasls->SBP2 : old('SBP2')}}">

                                                            
          @if ($errors->has('SBP2'))
                <span class="help-block">
                     <strong>{{ $errors->first('SBP2') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="SBP3" maxlength="4" type="text" class="form-control numero" name="SBP3" value="{{(isset($pasls))  ? $pasls->SBP3 : old('SBP3')}}">
                                                            
          @if ($errors->has('SBP3'))
                <span class="help-block">
                     <strong>{{ $errors->first('SBP3') }}</strong>
                </span>
         @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:26.4pt'>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="DBP1" maxlength="4" type="text" class="form-control numero" name="DBP1" value="{{(isset($pasls))  ? $pasls->DBP1 : old('DBP1')}}">
                                                            
          @if ($errors->has('DBP1'))
                <span class="help-block">
                     <strong>{{ $errors->first('DBP1') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
      <input id="DBP2" maxlength="4" type="text" class="form-control numero" name="DBP2" value="{{(isset($pasls))  ? $pasls->DBP2 : old('DBP2')}}">
                                                            
          @if ($errors->has('DBP2'))
                <span class="help-block">
                     <strong>{{ $errors->first('DBP2') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="DBP3" maxlength="4" type="text" class="form-control numero" name="DBP3" value="{{(isset($pasls))  ? $pasls->DBP3 : old('DBP3')}}">
                                                            
          @if ($errors->has('DBP3'))
                <span class="help-block">
                     <strong>{{ $errors->first('DBP3') }}</strong>
                </span>
         @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:26.4pt'>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="PAM1" maxlength="4" type="text" class="form-control numero" name="PAM1" value="{{(isset($pasls))  ? $pasls->PAM1 : old('PAM1')}}">
                                                            
          @if ($errors->has('PAM1'))
                <span class="help-block">
                     <strong>{{ $errors->first('PAM1') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
     <input id="PAM2" maxlength="4" type="text" class="form-control numero" name="PAM2" value="{{(isset($pasls))  ? $pasls->PAM2 : old('PAM2')}}">
                                                            
          @if ($errors->has('PAM2'))
                <span class="help-block">
                     <strong>{{ $errors->first('PAM2') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
 <input id="PAM3" maxlength="4" type="text" class="form-control numero" name="PAM3" value="{{(isset($pasls))  ? $pasls->PAM3 : old('PAM3')}}">
                                                            
          @if ($errors->has('PAM3'))
                <span class="help-block">
                     <strong>{{ $errors->first('PAM3') }}</strong>
                </span>
         @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:26.4pt'>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="RATE1" maxlength="4" type="text" class="form-control numero" name="RATE1" value="{{(isset($pasls))  ? $pasls->RATE1 : old('RATE1')}}">
                                                            
          @if ($errors->has('RATE1'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE1') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
      <input id="RATE2" maxlength="4" type="text" class="form-control numero" name="RATE2" value="{{(isset($pasls))  ? $pasls->RATE2 : old('RATE2')}}">
                                                            
          @if ($errors->has('RATE2'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE2') }}</strong>
                </span>
         @endif
  </td>
  <td width=20 nowrap valign=bottom style='width:15.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'></td>
  <td width=124 style='width:93.0pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="RATE3" maxlength="4" type="text" class="form-control numero" name="RATE3" value="{{(isset($pasls))  ? $pasls->RATE3 : old('RATE3')}}">
                                                            
          @if ($errors->has('RATE3'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE3') }}</strong>
                </span>
         @endif
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><span
style='font-family:"Arial","sans-serif";'></span></p>

<p class=MsoNormal align=center style='margin-bottom:3.0pt;text-align:center;
line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-family:"Arial","sans-serif";'>PRESION
ORTOSTATICA</span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=716
 style='width:537.0pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:28.2pt'>
  <td width=192 colspan=2 style='width:144.35pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:10.0pt;line-height:107%;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>ACOSTADO
  BRAZO DERECHO</span></b><b><span  style='font-size:10.0pt;
  line-height:107%;font-family:"Arial","sans-serif";mso-fareast-font-family:
  "Times New Roman";color:black'></span></b></p>
  </td>
  <td width=175 colspan=2 style='width:131.15pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>DE PIE BRAZO DERECHO<span
  style='mso-spacerun:yes'>     </span><span
  style='mso-spacerun:yes'>              </span><span
  style='mso-spacerun:yes'>     </span>1 MIN</span></b></p>
  </td>
  <td width=174 colspan=2 style='width:130.3pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>DE PIE BRAZO DERECHO<span
  style='mso-spacerun:yes'>      </span><span
  style='mso-spacerun:yes'>              </span><span
  style='mso-spacerun:yes'>    </span>3 MIN</span></b></p>
  </td>
  <td width=175 colspan=2 style='width:131.2pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:28.2pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:10.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>DE PIE BRAZO DERECHO<span
  style='mso-spacerun:yes'>        </span><span
  style='mso-spacerun:yes'>               </span><span
  style='mso-spacerun:yes'>  </span>5 MIN</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:26.4pt'>
  <td width=135 style='width:101.05pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=58 style='width:43.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
     <input id="A_SBP6" maxlength="4" type="text" class="form-control numero" name="A_SBP6" value="{{(isset($pasls))  ? $pasls->A_SBP6 : old('A_SBP6')}}">
                                                            
          @if ($errors->has('A_SBP6'))
                <span class="help-block">
                     <strong>{{ $errors->first('A_SBP6') }}</strong>
                </span>
         @endif
  </td>
  <td width=98 style='width:73.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="x1OSBP" maxlength="4" type="text" class="form-control numero" name="x1OSBP" value="{{(isset($pasls))  ? $pasls->x1OSBP : old('x1OSBP')}}">
                                                            
          @if ($errors->has('x1OSBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x1OSBP') }}</strong>
                </span>
         @endif
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
      <input id="x3OSBP" maxlength="4" type="text" class="form-control numero" name="x3OSBP" value="{{(isset($pasls))  ? $pasls->x3OSBP : old('x3OSBP')}}">
                                                            
          @if ($errors->has('x3OSBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x3OSBP') }}</strong>
                </span>
         @endif
  </td>
  <td width=99 style='width:73.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SISTOLICA</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="x5OSBP" maxlength="4" type="text" class="form-control numero" name="x5OSBP" value="{{(isset($pasls))  ? $pasls->x5OSBP : old('x5OSBP')}}">
                                                            
          @if ($errors->has('x5OSBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x5OSBP') }}</strong>
                </span>
         @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:26.4pt'>
  <td width=135 style='width:101.05pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=58 style='width:43.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>

   <input id="A_DBP6" maxlength="4" type="text" class="form-control numero" name="A_DBP6" value="{{(isset($pasls))  ? $pasls->A_DBP6 : old('A_DBP6')}}">
                                                            
          @if ($errors->has('A_DBP6'))
                <span class="help-block">
                     <strong>{{ $errors->first('A_DBP6') }}</strong>
                </span>
         @endif
  </td>
  <td width=98 style='width:73.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
        <input id="x1ODBP" maxlength="4" type="text" class="form-control numero" name="x1ODBP" value="{{(isset($pasls))  ? $pasls->x1ODBP : old('x1ODBP')}}">
                                                            
          @if ($errors->has('x1ODBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x1ODBP') }}</strong>
                </span>
         @endif
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="x3ODBP" maxlength="4" type="text" class="form-control numero" name="x3ODBP" value="{{(isset($pasls))  ? $pasls->x3ODBP : old('x3ODBP')}}">
                                                            
          @if ($errors->has('x3ODBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x3ODBP') }}</strong>
                </span>
         @endif
  </td>
  <td width=99 style='width:73.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DIASTOLIC</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="x5ODBP" maxlength="4" type="text" class="form-control numero" name="x5ODBP" value="{{(isset($pasls))  ? $pasls->x5ODBP : old('x5ODBP')}}">
                                                            
          @if ($errors->has('x5ODBP'))
                <span class="help-block">
                     <strong>{{ $errors->first('x5ODBP') }}</strong>
                </span>
         @endif
  </td>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:26.4pt'>
  <td width=135 style='width:101.05pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=58 style='width:43.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="A_PAM" maxlength="4" type="text" class="form-control numero" name="A_PAM" value="{{(isset($pasls))  ? $pasls->A_PAM : old('A_PAM')}}">
                                                            
          @if ($errors->has('A_PAM'))
                <span class="help-block">
                     <strong>{{ $errors->first('A_PAM') }}</strong>
                </span>
         @endif
  </td>
  <td width=98 style='width:73.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
     <input id="x1OPAM" maxlength="4" type="text" class="form-control numero" name="x1OPAM" value="{{(isset($pasls))  ? $pasls->x1OPAM : old('x1OPAM')}}">
                                                            
          @if ($errors->has('x1OPAM'))
                <span class="help-block">
                     <strong>{{ $errors->first('x1OPAM') }}</strong>
                </span>
         @endif
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="x3OPAM" maxlength="4" type="text" class="form-control numero" name="x3OPAM" value="{{(isset($pasls))  ? $pasls->x3OPAM : old('x3OPAM')}}">
                                                            
          @if ($errors->has('x3OPAM'))
                <span class="help-block">
                     <strong>{{ $errors->first('x3OPAM') }}</strong>
                </span>
         @endif
  </td>
  <td width=99 style='width:73.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>P.A.M</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
   <input id="x5OPAM" maxlength="4" type="text" class="form-control numero" name="x5OPAM" value="{{(isset($pasls))  ? $pasls->x5OPAM : old('x5OPAM')}}">
                                                            
          @if ($errors->has('x5OPAM'))
                <span class="help-block">
                     <strong>{{ $errors->first('x5OPAM') }}</strong>
                </span>
         @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:26.4pt'>
  <td width=135 style='width:101.05pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=58 style='width:43.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
     <input id="RATE6" maxlength="4" type="text" class="form-control numero" name="RATE6" value="{{(isset($pasls))  ? $pasls->RATE6 : old('RATE6')}}">
                                                            
          @if ($errors->has('RATE6'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE6') }}</strong>
                </span>
         @endif
  </td>
  <td width=98 style='width:73.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <input id="RATE8" maxlength="4" type="text" class="form-control numero" name="RATE8" value="{{(isset($pasls))  ? $pasls->RATE8 : old('RATE8')}}">
                                                            
          @if ($errors->has('RATE8'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE8') }}</strong>
                </span>
         @endif
  </td>
  <td width=97 style='width:73.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
      <input id="RATE9" maxlength="4" type="text" class="form-control numero" name="RATE9" value="{{(isset($pasls))  ? $pasls->RATE9 : old('RATE9')}}">
                                                            
          @if ($errors->has('RATE9'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE9') }}</strong>
                </span>
         @endif
  </td>
  <td width=99 style='width:73.9pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PULSO</span><span
   style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'></span></p>
  </td>
  <td width=76 style='width:57.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:26.4pt'>
    <input id="RATE10" maxlength="4" type="text" class="form-control numero" name="RATE10" value="{{(isset($pasls))  ? $pasls->RATE10 : old('RATE10')}}">
                                                            
          @if ($errors->has('RATE10'))
                <span class="help-block">
                     <strong>{{ $errors->first('RATE10') }}</strong>
                </span>
         @endif
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><!--[if supportFields]><span
style='font-family:"Arial","sans-serif";'><span
style='mso-element:field-end'></span></span><![endif]--><span style='font-family:
"Arial","sans-serif";'></span></p>

<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Arial","sans-serif";
'>(0 = No, 1 = Si)</span></b><b
style='mso-bidi-font-weight:normal'><span style='font-family:"Arial","sans-serif";
'></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=641
 style='width:481.0pt;border-collapse:collapse;mso-yfti-tbllook:1184;
 mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
  <td width=353 nowrap colspan=2 style='width:265.0pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span  style='font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>SINTOMAS</span></b></p>
  </td>
  <td width=288 nowrap colspan=2 style='width:216.0pt;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span  style='font-size:
  10.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>SIGNOS</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>FATIGA</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
   <input id="Fatiga" maxlength="1" type="text" class="form-control numero" name="Fatiga" value="{{(isset($pasls))  ? $pasls->Fatiga : old('Fatiga')}}">
                                                            
          @if ($errors->has('Fatiga'))
                <span class="help-block">
                     <strong>{{ $errors->first('Fatiga') }}</strong>
                </span>
         @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>SUDORACION</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <input id="Sudoracion" maxlength="1" type="text" class="form-control numero" name="Sudoracion" value="{{(isset($pasls))  ? $pasls->Sudoracion : old('Sudoracion')}}">
                                                                    
                  @if ($errors->has('Sudoracion'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Sudoracion') }}</strong>
                        </span>
                 @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>DEBILIDAD</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
         <input id="Debilidad" maxlength="1" type="text" class="form-control" name="Debilidad" value="{{(isset($pasls))  ? $pasls->Debilidad : old('Debilidad')}}">
                                                                    
                  @if ($errors->has('Debilidad'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Debilidad') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>PALIDEZ
  CUTANEO-MUCOSA</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <input id="Palidez_cut_muc" maxlength="1" type="text" class="form-control" name="Palidez_cut_muc" value="{{(isset($pasls))  ? $pasls->Palidez_cut_muc : old('Palidez_cut_muc')}}">
                                                                    
                  @if ($errors->has('Palidez_cut_muc'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Palidez_cut_muc') }}</strong>
                        </span>
                 @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>MAREOS</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
   <input id="Mareos" maxlength="1" type="text" class="form-control" name="Mareos" value="{{(isset($pasls))  ? $pasls->Mareos : old('Mareos')}}">
                                                                    
                  @if ($errors->has('Mareos'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Mareos') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>OTRAS</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
   <input id="Otras_signos" maxlength="1" type="text" class="form-control" name="Otras_signos" value="{{(isset($pasls))  ? $pasls->Otras_signos : old('Otras_signos')}}">
                                                                    
                  @if ($errors->has('Otras_signos'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Otras_signos') }}</strong>
                        </span>
                 @endif
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>VISION
  BORROSA</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
   <input id="Vision_borrosa" maxlength="1" type="text" class="form-control" name="Vision_borrosa" value="{{(isset($pasls))  ? $pasls->Vision_borrosa : old('Vision_borrosa')}}">
                                                                    
                  @if ($errors->has('Vision_borrosa'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Vision_borrosa') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span style='font-size:12.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>VISION
  CON PUNTOS LUMINOSOS</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <input id="Vision_luminosos" maxlength="1" type="text" class="form-control" name="Vision_luminosos" value="{{(isset($pasls))  ? $pasls->Vision_luminosos : old('Vision_luminosos')}}">
                                                                    
                  @if ($errors->has('Vision_luminosos'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Vision_luminosos') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black;'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span style='font-size:12.0pt;
  font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black;'>&nbsp;</span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>PALPITACIONES</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
      <input id="Palpitaciones" maxlength="1" type="text" class="form-control" name="Palpitaciones" value="{{(isset($pasls))  ? $pasls->Palpitaciones : old('Palpitaciones')}}">
                                                                    
                  @if ($errors->has('Palpitaciones'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Palpitaciones') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span  style='font-size:
  12.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;</span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>DOLOR DE CABEZA</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
    <input id="Cefalea" maxlength="1" type="text" class="form-control" name="Cefalea" value="{{(isset($pasls))  ? $pasls->Cefalea : old('Cefalea')}}">
                                                                    
                  @if ($errors->has('Cefalea'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Cefalea') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span  style='font-size:
  12.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;</span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>DOLOR DE CUELLO</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
     <input id="Dolor_cuello" maxlength="1" type="text" class="form-control" name="Dolor_cuello" value="{{(isset($pasls))  ? $pasls->Dolor_cuello : old('Dolor_cuello')}}">
                                                                    
                  @if ($errors->has('Dolor_cuello'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Dolor_cuello') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span  style='font-size:
  12.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;</span></sup></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:18.0pt'>
  <td width=293 nowrap style='width:220.0pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>OTRAS</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
       <input id="Otras_sintomas" maxlength="1" type="text" class="form-control" name="Otras_sintomas" value="{{(isset($pasls))  ? $pasls->Otras_sintomas : old('Otras_sintomas')}}">
                                                                    
                  @if ($errors->has('Otras_sintomas'))
                        <span class="help-block">
                             <strong>{{ $errors->first('Otras_sintomas') }}</strong>
                        </span>
                 @endif
  </td>
  <td width=228 nowrap style='width:171.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span  style='font-size:10.0pt;font-family:"Arial","sans-serif";
  mso-fareast-font-family:"Times New Roman";color:black'>&nbsp;</span></p>
  </td>
  <td width=60 nowrap style='width:45.0pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><sup><span  style='font-size:
  12.0pt;font-family:"Arial","sans-serif";mso-fareast-font-family:"Times New Roman";
  color:black'>&nbsp;</span></sup></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-bottom:3.0pt;line-height:normal'><!--[if supportFields]><span
style='font-family:"Arial","sans-serif";'><span
style='mso-element:field-end'></span></span><![endif]--><span style='font-family:
"Arial","sans-serif";'></span></p>

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


   $('.numero').mask("999",);
   $('.decimal').mask("999.99",{reverse: true});

   $('#Fatiga').mask("9");
   $('#Debilidad').mask("9");
   $('#Mareos').mask("9");
   $('#Vision_borrosa').mask("9");
   $('#Vision_luminosos').mask("9");
   $('#Palpitaciones').mask("9");
   $('#Cefalea').mask("9");
   $('#Sudoracion').mask("9");
   $('#Palidez_cut_muc').mask("9");
   $('#Otras_signos').mask("9");

}); 


function patient(value,fecha){


   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                          $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                          $("#sexo").val(response.data.gender);
                          $("#edad").val(response.data.edad);
                          $("#cedula").val(response.data.cedula);
                          $("#hist_id").val(response.data.hist_id);
            
                                
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}

</script>
@endpush


