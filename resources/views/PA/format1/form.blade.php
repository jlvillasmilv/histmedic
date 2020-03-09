@extends('layouts.main')
@section('title', 'TOMA DE PRESION ARTERIAL SENTADO Y DE PIE')
@section('content')


<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ route('format1.index') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>TOMA DE PRESION ARTERIAL SENTADO Y DE PIE</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($pasls) ? route('format1.update',  $pasls->id) : route('format1.store') }}">
                        {{ csrf_field() }}

                        @if(isset($pasls))
                        
                        {{ method_field('PUT') }}
                        @endif

                        @include('patient.patient')

           <div class=WordSection1>

                <div class="form-group{{ $errors->has('BH') ? ' has-error' : '' }}">

                  <label for="BH" class="col-md-1 control-label"><strong>NOMBRE:</strong></label>

                      <div class="col-md-4">
                            <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}" readonly="">
                             
                      </div>

                        <label for="edad" class="col-md-1 control-label"> <strong>EDAD:</strong></label>

                      <div class="col-md-1">
                            <input id="edad" type="text" class="form-control" name="edad" value="{{old('edad')}}" readonly="" >
                                                   
                      </div>


                      <label for="BH" class="col-md-1 control-label"> <strong>TALLA:</strong></label>

                      <div class="col-md-2">
                            <input id="BH" type="text" class="form-control decimal" name="BH" value="{{(isset($pasls))  ? $pasls->BH : old('BH')}}" required="" >
                                                   
                             @if ($errors->has('BH'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('BH') }}</strong>
                                   </span>
                             @endif
                      </div>


                  
                  </div>


                  <table class="table" border=0 cellspacing=0 cellpadding=0 >
                   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:15.25pt'>
                    <td width=91 colspan=2 style='width:68.4pt;border:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>1</span></b></p>
                    </td>
                    <td width=247 colspan=3 style='width:185.4pt;border:solid windowtext 1.0pt;
                    border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
                    <p class=MsoNormal><span  style='font-size:16.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
                    
                    </td>
                    <td width=105 colspan=2 style='width:78.75pt;border:solid windowtext 1.0pt;
                    border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>4</span></b></p>
                    </td>
                    <td width=270 colspan=6 style='width:202.8pt;border:solid windowtext 1.0pt;
                    border-left:none;padding:0cm 5.4pt 0cm 5.4pt;height:15.25pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:1'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                           
                            <input id="DATH1" type="date" class="form-control" name="DATH1" value='{{(isset($pasls)) && strtotime($pasls->DATH1) != false  ? date("Y-m-d", strtotime($pasls->DATH1)) : date("Y-m-d") }}' required >
                                                       
                             @if ($errors->has('DATH1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH1') }}</strong>
                                 </span>
                             @endif
                 

                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td style='border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                       
                              <input id="BW" type="text" class="form-control decimal" name="BW" value="{{(isset($pasls))  ? $pasls->BW : old('BW')}}" required="" >
                                                     
                               @if ($errors->has('BW'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('BW') }}</strong>
                                     </span>
                               @endif
                       

                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td width=111 colspan=3 style='width:83.6pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                     <input id="DATH4" type="date" class="form-control"  name="DATH4" value='{{ old("DATH4", isset($pasls) && strtotime($pasls->DATH4) != false  ? date("Y-m-d", strtotime($pasls->DATH2)) : "" )}}' >
                                                       
                             @if ($errors->has('DATH4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH4') }}</strong>
                                 </span>
                             @endif
                    </td>
                    <td width=66 style='width:49.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                   
                              <input id="BW4" type="text" class="form-control decimal" name="BW4" value="{{(isset($pasls))  ? $pasls->BW4 : old('BW4')}}" >
                                                     
                               @if ($errors->has('BW4'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('BW4') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:2;height:15.2pt'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:15.2pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:15.2pt'>
                    <p class=MsoNormal><span style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=180 colspan=2 style='width:134.65pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    <p class=MsoNormal><b><span style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:15.2pt'>
                    
                    </td>
                    <td width=178 colspan=4 style='width:133.2pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:15.2pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:15.2pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:3;height:18.0pt'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:18.0pt'>
                    
                    </td>
                    <td width=171 colspan=2 style='width:128.05pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=149 colspan=2 style='width:111.95pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><span  style='font-size:10.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><span  style='font-size:10.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=179 colspan=3 style='width:134.35pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=159 colspan=3 style='width:119.25pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:4'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                      <input id="SBP1" maxlength="4" type="text" class="form-control numero" name="SBP1" value="{{(isset($pasls))  ? $pasls->SBP1 : old('SBP1')}}" required="">
                                 
                                  @if ($errors->has('SBP1'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('SBP1') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="x1OSBP" maxlength="4" type="text" class="form-control numero" name="x1OSBP" value="{{(isset($pasls))  ? $pasls->x1OSBP : old('x1OSBP')}}" required="">
                                 
                                  @if ($errors->has('x1OSBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x1OSBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=93 colspan=2 style='width:69.75pt;border:solid windowtext 1.0pt;
                    border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="SBP4" maxlength="4" type="text" class="form-control numero" name="SBP4" value="{{(isset($pasls))  ? $pasls->SBP4 : old('SBP3')}}">
                                 
                                  @if ($errors->has('SBP4'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('SBP4') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=85 colspan=2 style='width:63.45pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       <input id="x4OSBP" maxlength="4" type="text" class="form-control numero" name="x4OSBP" value="{{(isset($pasls))  ? $pasls->x4OSBP : old('x4OSBP')}}">
                                 
                                  @if ($errors->has('x4OSBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x4OSBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:5'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="DBP1" maxlength="4" type="text" class="form-control numero" name="DBP1" value="{{(isset($pasls))  ? $pasls->DBP1 : old('DBP1')}}" required="">
                                 
                                  @if ($errors->has('DBP1'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('DBP1') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="x1ODBP" maxlength="4" type="text" class="form-control numero" name="x1ODBP" value="{{(isset($pasls))  ? $pasls->x1ODBP : old('x1ODBP')}}" required="">
                                 
                                  @if ($errors->has('x1ODBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x1ODBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=93 colspan=2 style='width:69.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                               <input id="DBP4" maxlength="4" type="text" class="form-control numero" name="DBP4" value="{{(isset($pasls))  ? $pasls->DBP4 : old('DBP4')}}">
                                 
                                  @if ($errors->has('DBP4'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('DBP4') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=85 colspan=2 style='width:63.45pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="x4ODBP" maxlength="4" type="text" class="form-control numero" name="x4ODBP" value="{{(isset($pasls))  ? $pasls->x4ODBP : old('x4ODBP')}}">
                                 
                                  @if ($errors->has('x4ODBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x4ODBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:6;height:18.2pt'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:18.2pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                          <input id="PAM1" maxlength="4" type="text" class="form-control numero" name="PAM1" value="{{(isset($pasls))  ? $pasls->PAM1 : old('PAM1')}}" required="">
                                 
                                  @if ($errors->has('PAM1'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('PAM1') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                              <input id="x1OPAM" maxlength="4" type="text" class="form-control numero" name="x1OPAM" value="{{(isset($pasls))  ? $pasls->x1OPAM : old('x1OPAM')}}" required="">
                                 
                                  @if ($errors->has('x1OPAM'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x1OPAM') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=93 colspan=2 style='width:69.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                             <input id="PAM4" maxlength="4" type="text" class="form-control numero" name="PAM4" value="{{(isset($pasls))  ? $pasls->PAM4 : old('PAM4')}}">
                                 
                                  @if ($errors->has('PAM4'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('PAM4') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=85 colspan=2 style='width:63.45pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
                    height:18.2pt'>
                             <input id="x4OPAM" maxlength="4" type="text" class="form-control numero" name="x4OPAM" value="{{(isset($pasls))  ? $pasls->x4OPAM : old('x4OPAM')}}">
                                 
                                  @if ($errors->has('x4OPAM'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x4OPAM') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt;height:18.2pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:7'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="RATE1" maxlength="4" type="text" class="form-control numero" name="RATE1" value="{{(isset($pasls))  ? $pasls->RATE1 : old('RATE1')}}" required="">
                                 
                                  @if ($errors->has('RATE1'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE1') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="RATE8" maxlength="4" type="text" class="form-control numero" name="RATE8" value="{{(isset($pasls))  ? $pasls->RATE8 : old('RATE8')}}" required="">
                                 
                                  @if ($errors->has('RATE8'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE8') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=93 colspan=2 style='width:69.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="RATE4" maxlength="4" type="text" class="form-control numero" name="RATE4" value="{{(isset($pasls))  ? $pasls->RATE4 : old('RATE4')}}">
                                 
                                  @if ($errors->has('RATE4'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE4') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=85 colspan=2 style='width:63.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="RATE_pie4" maxlength="4" type="text" class="form-control numero" name="RATE_pie4" value="{{(isset($pasls))  ? $pasls->RATE_pie4 : old('RATE_pie4')}}">
                                 
                                  @if ($errors->has('RATE_pie4'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE_pie4') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:8'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:solid windowtext 1.0pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=98 style='width:73.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=68 style='width:50.75pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=93 colspan=2 style='width:69.75pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span style='font-family:"Times New Roman","serif";'>&nbsp;</span></p>
                    </td>
                    <td width=85 colspan=2 style='width:63.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=74 style='width:55.8pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:9'>
                    <td width=91 colspan=2 style='width:68.4pt;border:solid windowtext 1.0pt;
                    border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>2</span></b></p>
                    </td>
                    <td width=98 style='width:73.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-size:16.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=105 colspan=2 style='width:78.75pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>5</span></b></p>
                    </td>
                    <td width=252 colspan=5 style='width:189.0pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:10'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                   

                          <input id="DATH2" type="date"  name="DATH2" value='{{(isset($pasls)) && strtotime($pasls->DATH2) != false  ? date("Y-m-d", strtotime($pasls->DATH2)) : "" }}'>
                                                       
                             @if ($errors->has('DATH2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH2') }}</strong>
                                 </span>
                             @endif

                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                         <input id="BW2" maxlength="6" type="text" class="form-control decimal" name="BW2" value="{{(isset($pasls))  ? $pasls->BW2 : old('BW2')}}">
                                 
                                  @if ($errors->has('BW2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('BW2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           
                          <input id="DATH5" type="date"  name="DATH5" value='{{(isset($pasls)) && strtotime($pasls->DATH5) != false  ? date("Y-m-d", strtotime($pasls->DATH5)) : "" }}' >
                                                       
                             @if ($errors->has('DATH5'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH5') }}</strong>
                                 </span>
                             @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="BW5" maxlength="6" type="text" class="form-control decimal" name="BW5" value="{{(isset($pasls))  ? $pasls->BW5 : old('BW5')}}">
                                 
                                  @if ($errors->has('BW5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('BW5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:11'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=180 colspan=2 style='width:134.65pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=178 colspan=4 style='width:133.2pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:12'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=171 colspan=2 style='width:128.05pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=149 colspan=2 style='width:111.95pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=170 colspan=2 style='width:127.6pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=168 colspan=4 style='width:126.0pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:13'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="SBP2" maxlength="6" type="text" class="form-control numero" name="SBP2" value="{{(isset($pasls))  ? $pasls->SBP2 : old('SBP2')}}">
                                 
                                  @if ($errors->has('SBP2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('SBP2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="x2OSBP" maxlength="6" type="text" class="form-control numero" name="x2OSBP" value="{{(isset($pasls))  ? $pasls->x2OSBP : old('x2OSBP')}}">
                                 
                                  @if ($errors->has('x2OSBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x2OSBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="SBP5" maxlength="6" type="text" class="form-control numero" name="SBP5" value="{{(isset($pasls))  ? $pasls->SBP5 : old('SBP5')}}">
                                 
                                  @if ($errors->has('SBP5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('SBP5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x5OSBP" maxlength="6" type="text" class="form-control numero" name="x5OSBP" value="{{(isset($pasls))  ? $pasls->x5OSBP : old('x5OSBP')}}">
                                 
                                  @if ($errors->has('x5OSBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x5OSBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:14'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                              <input id="DBP2" maxlength="6" type="text" class="form-control numero" name="DBP2" value="{{(isset($pasls))  ? $pasls->DBP2 : old('DBP2')}}">
                                 
                                  @if ($errors->has('DBP2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('DBP2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x2ODBP" maxlength="6" type="text" class="form-control numero" name="x2ODBP" value="{{(isset($pasls))  ? $pasls->x2ODBP : old('x2ODBP')}}">
                                 
                                  @if ($errors->has('x2ODBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x2ODBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="DBP5" maxlength="6" type="text" class="form-control numero" name="DBP5" value="{{(isset($pasls))  ? $pasls->DBP5 : old('DBP5')}}">
                                 
                                  @if ($errors->has('DBP5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('DBP5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x5ODBP" maxlength="6" type="text" class="form-control numero" name="x5ODBP" value="{{(isset($pasls))  ? $pasls->x5ODBP : old('x5ODBP')}}">
                                 
                                  @if ($errors->has('x5ODBP'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x5ODBP') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:15'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="PAM2" maxlength="6" type="text" class="form-control numero" name="PAM2" value="{{(isset($pasls))  ? $pasls->PAM2 : old('PAM2')}}">
                                 
                                  @if ($errors->has('PAM2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('PAM2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="x2OPAM" maxlength="6" type="text" class="form-control numero" name="x2OPAM" value="{{(isset($pasls))  ? $pasls->x2OPAM : old('x2OPAM')}}">
                                 
                                  @if ($errors->has('x2OPAM'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x2OPAM') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="PAM5" maxlength="6" type="text" class="form-control numero" name="PAM5" value="{{(isset($pasls))  ? $pasls->PAM5 : old('PAM5')}}">
                                 
                                  @if ($errors->has('PAM5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('PAM5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x5OPAM" maxlength="6" type="text" class="form-control numero" name="x5OPAM" value="{{(isset($pasls))  ? $pasls->x5OPAM : old('x5OPAM')}}">
                                 
                                  @if ($errors->has('x5OPAM'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('x5OPAM') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:16'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="RATE2" maxlength="6" type="text" class="form-control numero" name="RATE2" value="{{(isset($pasls))  ? $pasls->RATE2 : old('RATE2')}}">
                                 
                                  @if ($errors->has('RATE2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="RATE_pie2" maxlength="6" type="text" class="form-control numero" name="RATE_pie2" value="{{(isset($pasls))  ? $pasls->RATE_pie2 : old('RATE_pie2')}}">
                                 
                                  @if ($errors->has('RATE_pie2'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE_pie2') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="RATE5" maxlength="6" type="text" class="form-control numero" name="RATE5" value="{{(isset($pasls))  ? $pasls->RATE5 : old('RATE5')}}">
                                 
                                  @if ($errors->has('RATE5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="RATE_pie5" maxlength="6" type="text" class="form-control numero" name="RATE_pie5" value="{{(isset($pasls))  ? $pasls->RATE_pie5 : old('RATE_pie5')}}">
                                 
                                  @if ($errors->has('RATE_pie5'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('RATE_pie5') }}</strong>
                                        </span>
                                 @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:17'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:solid windowtext 1.0pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=98 style='width:73.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=68 style='width:50.75pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=74 style='width:55.8pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:18'>
                    <td width=91 colspan=2 style='width:68.4pt;border:solid windowtext 1.0pt;
                    border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>3</span></b></p>
                    </td>
                    <td width=98 style='width:73.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-size:16.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-size:18.0pt;font-family:"Times New Roman","serif";
                    '>&nbsp;</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=105 colspan=2 style='width:78.75pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>6</span></b></p>
                    </td>
                    <td width=252 colspan=5 style='width:189.0pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:19'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                         <input id="DATH3" type="date"  name="DATH3" value='{{(isset($pasls)) && strtotime($pasls->DATH3) != false  ? date("Y-m-d", strtotime($pasls->DATH3)) : "" }}'>
                                                       
                             @if ($errors->has('DATH3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH3') }}</strong>
                                 </span>
                             @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="BW3" type="text" class="form-control decimal" name="BW3" value="{{(isset($pasls))  ? $pasls->BW3 : old('BW3')}}">
                                                     
                               @if ($errors->has('BW3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('BW3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>FECHA:</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="DATH6" type="date"  name="DATH6" value='{{(isset($pasls)) && strtotime($pasls->DATH6) != false  ? date("Y-m-d", strtotime($pasls->DATH6)) : "" }}'>
                                                       
                             @if ($errors->has('DATH6'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('DATH6') }}</strong>
                                 </span>
                             @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PESO:</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="BW6" type="text" class="form-control decimal" name="BW6" value="{{(isset($pasls))  ? $pasls->BW6 : old('BW6')}}" >
                                                     
                               @if ($errors->has('BW6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('BW6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:20'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=180 colspan=2 style='width:134.65pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=178 colspan=4 style='width:133.2pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    background:#BFBFBF;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>PRESION ARTERIAL</span></b></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:21'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=171 colspan=2 style='width:128.05pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=149 colspan=2 style='width:111.95pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=170 colspan=2 style='width:127.6pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>SENTADO: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=168 colspan=4 style='width:126.0pt;border-top:none;border-left:
                    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>DE PIE: BRAZO DERECHO</span></b></p>
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:22'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="SBP3" type="text" class="form-control numero" name="SBP3" value="{{(isset($pasls))  ? $pasls->SBP3 : old('SBP3')}}" >
                                                     
                               @if ($errors->has('SBP3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SBP3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="x3OSBP" type="text" class="form-control numero" name="x3OSBP" value="{{(isset($pasls))  ? $pasls->x3OSBP : old('x3OSBP')}}" >
                                                     
                               @if ($errors->has('x3OSBP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x3OSBP') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border:solid windowtext 1.0pt;border-left:
                    none;padding:0cm 5.4pt 0cm 5.4pt'>
                         <input id="SBP6" type="text" class="form-control numero" name="SBP6" value="{{(isset($pasls))  ? $pasls->SBP6 : old('SBP6')}}" >
                                                     
                               @if ($errors->has('SBP6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SBP6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>SIST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                         <input id="x6OSBP" type="text" class="form-control numero" name="x6OSBP" value="{{(isset($pasls))  ? $pasls->x6OSBP : old('x6OSBP')}}" >
                                                     
                               @if ($errors->has('x6OSBP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x6OSBP') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:23'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="DBP3" type="text" class="form-control numero" name="DBP3" value="{{(isset($pasls))  ? $pasls->DBP3 : old('DBP3')}}" >
                                                     
                               @if ($errors->has('DBP3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DBP3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="x3ODBP" type="text" class="form-control numero" name="x3ODBP" value="{{(isset($pasls))  ? $pasls->x3ODBP : old('x3ODBP')}}" >
                                                     
                               @if ($errors->has('x3ODBP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x3ODBP') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                         <input id="DBP6" type="text" class="form-control numero" name="DBP6" value="{{(isset($pasls))  ? $pasls->DBP6 : old('DBP6')}}" >
                                                     
                               @if ($errors->has('DBP6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DBP6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>DIAST.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x6ODBP" type="text" class="form-control numero" name="x6ODBP" value="{{(isset($pasls))  ? $pasls->x6ODBP : old('x6ODBP')}}" >
                                                     
                               @if ($errors->has('x6ODBP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x6ODBP') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:24'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="PAM3" type="text" class="form-control numero" name="PAM3" value="{{(isset($pasls))  ? $pasls->PAM3 : old('PAM3')}}" >
                                                     
                               @if ($errors->has('PAM3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PAM3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="x3OPAM" type="text" class="form-control numero" name="x3OPAM" value="{{(isset($pasls))  ? $pasls->x3OPAM : old('x3OPAM')}}" >
                                                     
                               @if ($errors->has('x3OPAM'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x3OPAM') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                            <input id="PAM6" type="text" class="form-control numero" name="PAM6" value="{{(isset($pasls))  ? $pasls->PAM6 : old('PAM6')}}" >
                                                     
                               @if ($errors->has('PAM6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PAM6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>P.A.M.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="x6OPAM" type="text" class="form-control numero" name="x6OPAM" value="{{(isset($pasls))  ? $pasls->x6OPAM : old('x6OPAM')}}" >
                                                     
                               @if ($errors->has('x6OPAM'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('x6OPAM') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:25'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=98 style='width:73.45pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                             <input id="RATE3" type="text" class="form-control numero" name="RATE3" value="{{(isset($pasls))  ? $pasls->RATE3 : old('RATE3')}}" >
                                                     
                               @if ($errors->has('RATE3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RATE3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=82 style='width:61.2pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=68 style='width:50.75pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="RATE_pie3" type="text" class="form-control numero" name="RATE_pie3" value="{{(isset($pasls))  ? $pasls->RATE_pie3 : old('RATE_pie3')}}" >
                                                     
                               @if ($errors->has('RATE_pie3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RATE_pie3') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=20 style='width:15.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=84 style='width:63.0pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                          <input id="RATE6" type="text" class="form-control numero" name="RATE6" value="{{(isset($pasls))  ? $pasls->RATE6 : old('RATE6')}}" >
                                                     
                               @if ($errors->has('RATE6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RATE6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><span  style='font-family:"Times New Roman","serif";
                    '>PULSO.</span></p>
                    </td>
                    <td width=74 style='width:55.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                           <input id="RATE_pie6" type="text" class="form-control numero" name="RATE_pie6" value="{{(isset($pasls))  ? $pasls->RATE_pie6 : old('RATE_pie6')}}" >
                                                     
                               @if ($errors->has('RATE_pie6'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('RATE_pie6') }}</strong>
                                     </span>
                               @endif
                    </td>
                    <td width=18 style='width:13.8pt;border:none;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                   <tr style='mso-yfti-irow:26'>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:solid windowtext 1.0pt;
                    border-bottom:solid windowtext 1.0pt;border-right:none;padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-family:"Times New Roman","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=73 style='width:54.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=98 style='width:73.45pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=82 style='width:61.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=68 style='width:50.75pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=20 style='width:15.15pt;border-top:none;border-left:none;
                    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=19 style='width:14.15pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    <p class=MsoNormal><b><span  style='font-size:10.0pt;font-family:"Rockwell Condensed","serif";
                    '>&nbsp;</span></b></p>
                    </td>
                    <td width=86 style='width:64.6pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=94 colspan=3 style='width:70.2pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=74 style='width:55.8pt;border:none;border-bottom:solid windowtext 1.0pt;
                    padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                    <td width=18 style='width:13.8pt;border-top:none;border-left:none;border-bottom:
                    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                    
                    </td>
                   </tr>
                  
                  
                  </table>

                  <br>

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


   $('.numero').mask("9999",);


}); 


function patient(value,fecha){

   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                          $("#nombre").val(response.pasls.first_name+' '+response.pasls.last_name);
                          $("#edad").val(response.pasls.edad);
                          $("#hist_id").val(response.pasls.hist_id);
                   
                      }).catch(error => {
                        toastr.error(error.response.pasls, 'Inconceivable!')
                        console.error(error.response);
                      });
}

</script>
@endpush


