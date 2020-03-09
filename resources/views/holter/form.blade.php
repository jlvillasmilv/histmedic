@extends('layouts.main')
@section('title', 'Holter')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
          <a class="pull-right" href="{{route('holter.index')}}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>CENTRO DE ENFERMEDADES CARDIOVASCULARES HOLTER
    </div>
    <div class="panel-body" id="main">
                    <form id="holter"  class="form-horizontal" role="form" method="POST" action="{{ isset($data) ? route('holter.update',  $data->id) : route('holter.store') }}">
                        {{ csrf_field() }}

                         @if(isset($data))  {{ method_field('PUT') }}   @endif
                      
                      @include('patient.patient')

                        <table id="detalle" class="table table-striped  table-condensed table-hover">
                          <tr>

                            <td style="text-align: left">Nombre:</label>
                            <input style="width: 490px" id="nombre" type="text" class="form-control" name="nombre" required  readonly="">
                            </td> 
                         
                             <td style="text-align: left;">ID: 
                             <input  id="hist_id" type="text" class="form-control" name="hist_id" required readonly="">
                            </td> 

                             <td></td>
                          </tr>


                           <tr>
                           <td style="text-align: left">DOB:
                                <input  id="date_birth" type="text" class="form-control" name="date_birth"  requiered >
                                </td>

                                <td style="text-align: left;">
                                 <label for="age">Edad:</label>
                                 <input id="age" type="text" name="age" class="form-control">
                                 </td>

                                <td style="text-align: left;">
                                <label for="gender">Sex:</label>
                                <input id="gender" type="text" name="gender" class="form-control" value="{{old('gender')}}" requiered readonly="">
                               
                              </td>
                           
                          </tr>

                          <tr>
                            <td style="text-align: left"> Address: 
                               <input id="adress" type="text" name="adress" class="form-control" value="{{old('adress')}}" required readonly="">
                          </td>

                           <td style="text-align: left;"> Height: 
                               <input id="Height" name="Height" type="text" placeholder="Talla" class="form-control" required="" value="{{(isset($data))  ? $data->Height : old('Height')}}">
                          </td>

                           <td style="text-align: left;"> Weight: 
                               <input id="Weight" name="Weight" type="text" class="form-control" placeholder="Peso (Kg)" required="" value="{{(isset($data))  ? $data->Weight : old('Weight')}}">
                          </td>

                          
                          </tr>

                          <tr>
                         
                           <td style="text-align: left;"> Indications
                            <input id="Indications" name="Indications" class="form-control" type="text" required="" value="{{(isset($data))  ? $data->Indications : old('Indications')}}">
                       
                          </td>
                           
                          </tr>

                           <tr>
                        
                           <td style="text-align: left;">Medication
                            <input id="Medication" name="Medication" class="form-control" type="text" required="" value="{{(isset($data))  ? $data->Medication : old('Medication')}}"> </td>
                          
                           <td colspan="2" style="text-align: left;">Physician
                            <input id="Physician" name="Physician" class="form-control" type="text" required="" value="{{(isset($data))  ? $data->Physician : old('Physician')}}">
                         </td>

                          
                         
                          </tr>

                          <table  class="table table-striped  table-condensed table-hover">
                             <center><b><h4>Holter Report Summary</h4></b></center> 
                            <tr>
                           
                           <td style="text-align: left;">Report Date
                             <input class="form-control" id="Report_date" type="date" name="Report_date" value='{{ old("Report_date", isset($data) && strtotime($data->Report_date) != false  ? date("Y-m-d", strtotime($data->Report_date)) : "" )}}'  required="">

                                @if ($errors->has('Report_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Report_date') }}</strong>
                                    </span>
                                @endif
                             </td>

                        

                           <td style="text-align: left;">Starting Time:
                           
                           <input  class="time"  id="Starting_time" name="Starting_time" type="text" required="" value="{{(isset($data))  ? $data->Starting_time : old('Starting_time')}}" maxlength="10"> </td>

                    
                           <td style="text-align: left;">Total Beats:
                            <input id="Total_cardiac_Beats" name="Total_cardiac_Beats" type="text" maxlength="7" value='{{ old("Total_cardiac_Beats", isset($data) ? $data->Total_cardiac_Beats : "") }}'> </td>
                         </tr>

                         <tr>
                           
                          <td style="text-align: left;">Report Number:
                           <input  class="form-control"  id="ReportNum" name="ReportNum" type="text" required="" value='{{ old("ReportNum", isset($data) ? $data->ReportNum : "") }}' maxlength="10"> </td>
                          
                          
                           <td style="text-align: left;">Hours Analyzes:
                           <input  class="time"  id="Hours_analyzed" name="Hours_analyzed" type="text" required="" value='{{ old("Hours_analyzed", isset($data) ? $data->Hours_analyzed : "") }}' maxlength="10"> </td>
                          
                         
                           <td style="text-align: left;">Unknown Beats:
                           <input  class="form-control"  id="Unknown_beats" name="Unknown_beats" type="text" required="" value='{{ old("Unknown_beats", isset($data) ? $data->Unknown_beats : "") }}' maxlength="10"> </td>

                         </tr>


                         <tr>
                           
                          <td style="text-align: left"> Test Date: 
                               <input id="Test_date" type="date" name="Test_date" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->Test_date))  :date("Y-m-d") }}'  required="">

                                @if ($errors->has('Test_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Test_date') }}</strong>
                                    </span>
                                @endif
                          </td>

                          
                           <td style="text-align: left;">Artifact:
                           
                                 <input  class="time"  id="Artifact" name="Artifact" type="text" required="" value='{{ old("Artifact", isset($data) ? $data->Artifact : "") }}'>
                            </td>
                                                  

                           <td style="text-align: left;">Others:
                             <input  class="form-control"  id="Others" name="Others" type="text" required="" value='{{ old("Others", isset($data) ? $data->Others : "") }}' maxlength="10">
                            </td>
                          
                      
                         </tr>

                          <tr>             

                           <td style="text-align: left;">Analysis Mode:
                             <input id="AnalysisM" name="AnalysisM" type="text" required="" value='{{ old("AnalysisM", isset($data) ? $data->AnalysisM : "") }}' maxlength="10">
                           </td>
                        
                         </tr>

                        </table>

                      <table  class="table table-striped  table-condensed table-hover">
                        <thead>
                            <tr>
                              <th colspan="7"><center><b><h4>Rate Dependent Events</h4></b></center> </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td rowspan="3">Heart Rates: </td>
                              <td>Min: <input  class="form-control"  id="Min_HR" name="Min_HR" type="text" value='{{ old("Min_HR", isset($data) ? $data->Min_HR : "") }}' maxlength="10"> </td>
                              <td>At: <input  class="time"  id="Time_Min_RH" name="Time_Min_RH" type="text" value='{{ old("Time_Min_RH", isset($data) ? $data->Time_Min_RH : "") }}'> </td>
                              <td>Bradycardia Runs: <input  class="form-control" id="BradyCar_Runs" name="BradyCar_Runs" type="text" value='{{ old("BradyCar_Runs", isset($data) ? $data->BradyCar_Runs : "") }}'></td>
                              <td></td>
                              <td>Pauses: <input  class="form-control"  id="Numb_pauses" name="Numb_pauses" type="text" value='{{ old("Numb_pauses", isset($data) ? $data->Numb_pauses : "") }}' maxlength="10"></td>
                              <td></td>
                            </tr>

                            <tr>
                              <td>Max: <input  class="form-control numero"  id="Max_HR" name="Max_HR" type="text" value='{{ old("Max_HR", isset($data) ? $data->Max_HR : "") }}' maxlength="10"></td>

                              <td>At: <input  class="form-control time"  id="Time_Max_HR" name="Time_Max_HR" type="text"  value='{{ old("Time_Max_HR", isset($data) ? $data->Time_Max_HR : "") }}'></td>

                              <td>Longest: <input  class="form-control"  id="Numb_HR_at_LongBradyCar" name="Numb_HR_at_LongBradyCar" type="text" value="{{(isset($data))  ? $data->Numb_HR_at_LongBradyCar : old('Numb_HR_at_LongBradyCar')}}"></td>

                              <td>At: <input  class="form-control time"  id="TotalTime_of_Long_BradyCar" name="TotalTime_of_Long_BradyCar" type="text" value="{{(isset($data))  ? $data->TotalTime_of_Long_BradyCar : old('TotalTime_of_Long_BradyCar')}}"></td>

                              <td>Longest: <input  class="form-control"  id="TotalTimeOf_long_pause" name="TotalTimeOf_long_pause" type="text" value='{{ old("TotalTimeOf_long_pause", isset($data) ? $data->TotalTimeOf_long_pause : "") }}' maxlength="10"></td>

                              <td>At: <input  class="form-control time"  id="Time_of_long_pause" name="Time_of_long_pause" type="text" value='{{ old("Time_of_long_pause", isset($data) ? $data->Time_of_long_pause : "") }}' maxlength="10"></td>
                            </tr>

                              <tr>
                              <td>Ave:  <input  class="form-control"  id="Avg_HR" name="Avg_HR" type="text" value='{{ old("Avg_HR", isset($data) ? $data->Avg_HR : "") }}'></td>

                              <td></td>

                              <td>Min Rate: <input  class="form-control"  id="Min_HRs_at_LongBradyCar" name="Min_HRs_at_LongBradyCar" type="text" value='{{ old("Min_HRs_at_LongBradyCar", isset($data) ? $data->Min_HRs_at_LongBradyCar : "") }}'> </td>

                              <td>At: <input  class="form-control time"  id="Time_Min_Rate" name="Time_Min_Rate" type="text" value='{{ old("Time_Min_Rate", isset($data) ? $data->Time_Min_Rate : "") }}'> </td>

                              <td colspan="2"></td>
                             
                            </tr>
                          </tbody>

 
                          </table>

                           <table  class="table table-striped  table-condensed table-hover">
                            <tr>
                            <td><table  class="table table-striped  table-condensed table-hover">
                             <center><b><h5>Ventricular Events</h5></b></center> 

                             <tr>
                          

                           <td style="text-align: left;">Total Beats:
                            
                             <input id="VE_TotalBeats" name="VE_TotalBeats" type="text" value="{{(isset($data))  ? $data->VE_TotalBeats : old('VE_TotalBeats')}}" maxlength="7">
                            </td>

                            <td style="text-align: left;">Couplets:
                            
                             <input  class="numero"  id="VE_couplets" name="VE_couplets" type="text" value="{{(isset($data))  ? $data->VE_couplets : old('VE_couplets')}}">
                            </td>
                       
                             </tr>

                           <tr>
                           
                           <td style="text-align: left;">Forms:
                              <input  class="numero"  id="VE_Forms" name="VE_Forms" type="text" value="{{(isset($data))  ? $data->VE_Forms : old('VE_Forms')}}">
                           </td>

                            <td style="text-align: left;">Triplets:
                              <input  class="numero"  id="VE_triplets" name="VE_triplets" type="text" value="{{(isset($data))  ? $data->VE_triplets : old('VE_triplets')}}">
                           </td>
                                                 
                           </tr>

                           <tr>
                            <td></td>
                           
                           <td style="text-align: left;">Bigeminy Runs:
                            <input  class="numero"  id="VE_Big_runs" name="VE_Big_runs" type="text" value="{{(isset($data))  ? $data->VE_Big_runs : old('VE_Big_runs')}}">
                           </td>
                          
                          </tr>

                           
                         
                          <tr>
                            
                           <td style="text-align: left;">AIVR/IVR Runs:
                              <input  class="numero"  id="VE_AIVR_IVR_runs" name="VE_AIVR_IVR_runs" type="text" value="{{(isset($data))  ? $data->VE_AIVR_IVR_runs : old('VE_AIVR_IVR_runs')}}">
                            </td>
                           <td></td>
                         
                          </tr>

                          <tr>
                            
                           <td style="text-align: left;">Longest:
                              <input  class="numero"  id="VE_AIVR_IVR_Longest" name="VE_AIVR_IVR_Longest" type="text" value="{{(isset($data))  ? $data->VE_AIVR_IVR_Longest : old('VE_AIVR_IVR_Longest')}}">
                            </td>
                           <td></td>
                         
                          </tr>

                           <tr>
                            
                           <td style="text-align: left;">Min Rate:
                              <input  class="numero"  id="VE_AIVR_IVR_min_rate" name="VE_AIVR_IVR_min_rate" type="text" value="{{(isset($data))  ? $data->VE_AIVR_IVR_min_rate : old('VE_AIVR_IVR_min_rate')}}">
                            </td>
                           <td></td>
                         
                          </tr>
                           

                          <tr>
                          
                             <td colspan="2" style="text-align: left;">V Tach Runs:
                                <input  class="numero"  id="VE_V_Tach_Runs" name="VE_V_Tach_Runs" type="text" value="{{(isset($data))  ? $data->VE_V_Tach_Runs : old('VE_V_Tach_Runs')}}">
                             </td>
                     
                          </tr>

                          <tr>
                            
                           <td style="text-align: left;">Longest:
                              <input  class="numero"  id="VE_V_Tach_Longest" name="VE_V_Tach_Longest" type="text" value="{{(isset($data))  ? $data->VE_V_Tach_Longest: old('VE_V_Tach_Longest')}}">
                            </td>
                           <td></td>
                         
                          </tr>

                           <tr>
                          
                             <td colspan="2" style="text-align: left;">Max Rate:
                                <input  class="numero"  id="VE_V_Tach_Max_rate" name="VE_V_Tach_Max_rate" type="text" value="{{(isset($data))  ? $data->VE_V_Tach_Max_rate : old('VE_V_Tach_Max_rate')}}">
                             </td>
                     
                          </tr>

                           <tr>
                           
                           <td style="text-align: left;">Max VE/Minute:
                              <input  class="form-control"  id="VE_Max_VEM" name="VE_Max_VEM" type="text" value='{{ old("VE_Max_VEM", isset($data) ? $data->VE_Max_VEM : "") }}' maxlength="10">
                           </td>

                            <td style="text-align: left;">At:
                              <input class="form-control time" id="VE_Max_VE_minute" name="VE_Max_VE_minute" type="text" value='{{ old("VE_Max_VE_minute", isset($data) ? $data->VE_Max_VE_minute : "") }}' maxlength="10">
                           </td>
                                                 
                           </tr>

                           <tr>
                           
                           <td style="text-align: left;">Max VE/Hour:
                              <input class="form-control"  id="VE_Max_VEH" name="VE_Max_VEH" type="text" value="{{(isset($data))  ? $data->VE_Max_VEH : old('VE_Max_VEH')}}" maxlength="10">
                           </td>

                            <td style="text-align: left;">Between:
                              <input  class="form-control timeb"  id="VE_Max_VE_hour" name="VE_Max_VE_hour" type="text" value='{{ old("VE_Max_VE_hour", isset($data) ? $data->VE_Max_VE_hour : "") }}' maxlength="25">
                           </td>
                                                 
                           </tr>


                           <tr>
                          
                             <td colspan="2" style="text-align: left;">Mean VE/Hour:
                                <input  class="form-control"  id="VE_mean_VE_hour" name="VE_mean_VE_hour" type="text" value='{{ old("VE_mean_VE_hour", isset($data) ? $data->VE_mean_VE_hour : "") }}' maxlength="10">
                             </td>
                           </tr>

                            <tr>
                          
                             <td colspan="2" style="text-align: left;">VE / 1000:
                                <input  class="form-control"  id="VE_VE_1000" name="VE_VE_1000" type="text" value='{{ old("VE_VE_1000", isset($data) ? $data->VE_VE_1000 : "") }}' maxlength="10">
                             </td>
                           </tr>

                             </table></td>


                           <td> <table  class="table table-striped  table-condensed table-hover">
                             <center><b><h5>Supraventricular Events</h5></b></center> 
                             
                            <tr>
                          
                             <td colspan="2" style="text-align: left;">Total Beats:
                                <input  id="SE_TotalBeats" name="SE_TotalBeats" type="text" value='{{ old("SE_TotalBeats", isset($data) ? $data->SE_TotalBeats : "") }}' maxlength="7">
                             </td>
                           </tr>

                            <tr>
                          
                             <td colspan="2" style="text-align: left;">Couplets:
                                <input id="SE_couplets" name="SE_couplets" type="text" value='{{ old("SE_couplets", isset($data) ? $data->SE_couplets : "") }}' maxlength="10">
                             </td>
                           </tr>
                            
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td colspan="2">&nbsp;</td></tr>
                          

                            <tr>
                              <td colspan="2" style="text-align: left;"> SV Tach Runs:
                                  <input id="SE_SV_TachRuns" name="SE_SV_TachRuns" type="text" value='{{ old("SE_SV_TachRuns", isset($data) ? $data->SE_SV_TachRuns : "") }}' maxlength="10">
                              </td>
                            </tr>

                             <tr>
                               <td colspan="2" style="text-align: left;">Longest:
                                <input id="SE_Longest" name="SE_Longest" type="text" value='{{ old("SE_Longest", isset($data) ? $data->SE_Longest : "") }}' maxlength="10">
                             </td>
                           </tr>

                           <tr>
                               <td colspan="2" style="text-align: left;">Max Rate:
                                <input  id="SE_Max_rate" name="SE_Max_rate" type="text" value='{{ old("SE_Max_rate", isset($data) ? $data->SE_Max_rate : "") }}' maxlength="10">
                             </td>
                           </tr>

                            <tr>
                               <td  style="text-align: left;">Max SVE/Minute:
                                <input id="SVE_Max_SVE" name="SVE_Max_SVE" type="text" value='{{ old("SVE_Max_SVE", isset($data) ? $data->SVE_Max_SVE : "") }}' maxlength="10">
                             </td>
                               <td style="text-align: left;">At:
                                <input  id="SVE_Max_SVE_minute" name="SVE_Max_SVE_minute" type="text" value='{{ old("SVE_Max_SVE_minute", isset($data) ? $data->SVE_Max_SVE_minute : "") }}' maxlength="10">
                             </td>
                           </tr>

                            <tr>
                               <td  style="text-align: left;">Max SVE/Hour:
                                <input  class="form-control"  id="SVE_Max_SVE2" name="SVE_Max_SVE2" type="text" value='{{ old("SVE_Max_SVE2", isset($data) ? $data->SVE_Max_SVE2 : "") }}' maxlength="10">
                             </td>
                               <td style="text-align: left;">Between:
                                <input  class="form-control"  id="SVE_Max_SVE_hour" name="SVE_Max_SVE_hour" type="text" value='{{ old("SVE_Max_SVE_hour", isset($data) ? $data->SVE_Max_SVE_hour : "") }}' maxlength="20">
                             </td>
                           </tr>

                            <tr>
                              <td colspan="2" style="text-align: left;"> Mean SVE/Hour:
                                  <input  class="form-control"  id="SE_mean_SVE_hour" name="SE_mean_SVE_hour" type="text" value='{{ old("SE_mean_SVE_hour", isset($data) ? $data->SE_mean_SVE_hour : "") }}' maxlength="10">
                              </td>
                            </tr>

                              <tr>
                              <td colspan="2" style="text-align: left;">SVE / 1000:
                                  <input  class="form-control"  id="SE_SVE_1000" name="SE_SVE_1000" type="text" value='{{ old("SE_SVE_1000", isset($data) ? $data->SE_SVE_1000 : "") }}' maxlength="10">
                              </td>
                            </tr>

                           </table></td>

                             </tr>
                         </table>


                     <table >

                       <tr style='mso-yfti-irow:32'>
                        <td width="100%" colspan=15 style='width:100.0%;border-top:none;
                        border-left:solid windowtext 2.25pt;border-bottom:none;border-right:solid windowtext 2.25pt;
                        mso-border-top-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       ST Events</span></b></p>
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:33'>
                        <td width="50%" colspan=7 style='width:50.5%;border:none;
                        border-left:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       ST Depression</span></b></p>
                        </td>
                        <td width="49%" colspan=8 style='width:49.5%;border:none;
                        border-right:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       ST Elevation</span></b></p>
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:34'>
                        <td width="14%" colspan=2 style='width:14.8%;border:none;
                        border-left:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >&nbsp;</span></p>
                        </td>
                        <td width="12%" colspan=2 >
                              CH 1
                        </td>
                        <td width="12%" >
                            CH 2
                        </td>
                        <td width="10%" colspan=2 >
                              CH 3
                        </td>
                        <td width="14%" colspan=3 >
                        
                        </td>
                        <td width="11%" colspan=2 >
                               CH1
                        </td>
                        <td width="12%" colspan=2 style='width:12.22%;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                        text-align:center;line-height:normal'><span  style='font-family:
                        "Arial","sans-serif"'>CH 2</span></p>
                        </td>
                        <td width="11%" style='width:11.46%;border:none;border-right:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                        text-align:center;line-height:normal'><span  style='font-family:
                        "Arial","sans-serif"'>CH 3</span></p>
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:35'>
                        <td width="14%" colspan=2 style='width:14.8%;border:none;
                        border-left:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Episodes</span></p>
                        </td>
                        <td width="12%" colspan=2 style='width:12.84%;padding:0cm 5.4pt 0cm 5.4pt'>
                      
                          <input  class="form-control"  id="STE_dep_CH1_Episodes" name="STE_dep_CH1_Episodes" type="text" value='{{ old("STE_dep_CH1_Episodes", isset($data) ? $data->STE_dep_CH1_Episodes : "") }}' maxlength="10">

                        
                        </td>
                        <td width="12%" style='width:12.0%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                          <input  class="form-control"  id="STE_dep_CH2_Episodes" name="STE_dep_CH2_Episodes" type="text" value="{{(isset($data))  ? $data->STE_dep_CH2_Episodes : old('STE_dep_CH2_Episodes')}}" maxlength="10">

                        
                        </td>
                        <td width="10%" colspan=2 style='width:10.86%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                             <input  class="form-control"  id="STE_dep_CH3_Episodes" name="STE_dep_CH3_Episodes" type="text" value="{{(isset($data))  ? $data->STE_dep_CH3_Episodes : old('STE_dep_CH3_Episodes')}}" maxlength="10">

                        
                        </td>
                        <td width="14%" colspan=3 style='width:14.02%;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Episodes</span></p>
                        </td>
                        <td width="11%" colspan=2 style='width:11.8%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                           <input  class="form-control"  id="STE_Elev_CH1_Episodes" name="STE_Elev_CH1_Episodes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH1_Episodes : old('STE_Elev_CH1_Episodes')}}" maxlength="10">


                        
                        </td>
                        <td width="12%" colspan=2 style='width:12.22%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                            <input  class="form-control"  id="STE_Elev_CH2_Episodes" name="STE_Elev_CH2_Episodes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH2_Episodes : old('STE_Elev_CH2_Episodes')}}" maxlength="10">

                        
                        </td>
                        <td width="11%" style='width:11.46%;border:none;border-right:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>
                       
                            <input  class="form-control"  id="STE_Elev_CH3_Episodes" name="STE_Elev_CH3_Episodes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH3_Episodes : old('STE_Elev_CH3_Episodes')}}" maxlength="10">
                        
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:36'>
                        <td width="14%" colspan=2 style='width:14.8%;border:none;
                        border-left:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Minutes</span></p>
                        </td>
                        <td width="12%" colspan=2 style='width:12.84%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                            <input  class="form-control"  id="STE_dep_CH1_Minutes" name="STE_dep_CH1_Minutes" type="text" value="{{(isset($data))  ? $data->STE_dep_CH1_Minutes : old('STE_dep_CH1_Minutes')}}" maxlength="10">

                        
                        </td>
                        <td width="12%" style='width:12.0%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                            <input  class="form-control"  id="STE_dep_CH2_Minutes" name="STE_dep_CH2_Minutes" type="text" value="{{(isset($data))  ? $data->STE_dep_CH2_Minutes : old('STE_dep_CH2_Minutes')}}" maxlength="10">

                        
                        </td>
                        <td width="10%" colspan=2 style='width:10.86%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                          <input  class="form-control"  id="STE_dep_CH3_Minutes" name="STE_dep_CH3_Minutes" type="text" value="{{(isset($data))  ? $data->STE_dep_CH3_Minutes : old('STE_dep_CH3_Minutes')}}" maxlength="10">

                        
                        </td>
                        <td width="14%" colspan=3 style='width:14.02%;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Minutes</span></p>
                        </td>
                        <td width="11%" colspan=2 style='width:11.8%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                          <input  class="form-control"  id="STE_Elev_CH1_Minutes" name="STE_Elev_CH1_Minutes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH1_Minutes : old('STE_Elev_CH1_Minutes')}}" maxlength="10">

                        
                        </td>
                        <td width="12%" colspan=2 style='width:12.22%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                           <input  class="form-control"  id="STE_Elev_CH2_Minutes" name="STE_Elev_CH2_Minutes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH2_Minutes : old('STE_Elev_CH2_Minutes')}}" maxlength="10">

                        
                        </td>
                        <td width="11%" style='width:11.46%;border:none;border-right:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>

                         <input  class="form-control"  id="STE_Elev_CH3_Minutes" name="STE_Elev_CH3_Minutes" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH3_Minutes : old('STE_Elev_CH3_Minutes')}}" maxlength="10">
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:37'>
                        <td width="14%" colspan=2 style='width:14.8%;border:none;
                        border-left:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Maximum</span></p>
                        </td>
                        <td width="12%" colspan=2 style='width:12.84%;padding:0cm 5.4pt 0cm 5.4pt'>
                                                 
                           <input  class="form-control"  id="STE_dep_CH1_Maximum" name="STE_dep_CH1_Maximum" type="text" value="{{(isset($data))  ? $data->STE_dep_CH1_Maximum : old('STE_dep_CH1_Maximum')}}" maxlength="10">
                       
                        </td>
                        <td width="12%" style='width:12.0%;padding:0cm 5.4pt 0cm 5.4pt'>
                                                  
                          <input  class="form-control"  id="STE_dep_CH2_Maximum" name="STE_dep_CH2_Maximum" type="text" value="{{(isset($data))  ? $data->STE_dep_CH2_Maximum : old('STE_dep_CH2_Maximum')}}"  maxlength="10">

                        </td>
                        <td width="10%" colspan=2 style='width:10.86%;padding:0cm 5.4pt 0cm 5.4pt'>
                                                  
                            <input  class="form-control"  id="STE_dep_CH3_Maximum" name="STE_dep_CH3_Maximum" type="text" value="{{(isset($data))  ? $data->STE_dep_CH3_Maximum : old('STE_dep_CH3_Maximum')}}"  maxlength="10">
                        
                        </td>
                        <td width="14%" colspan=3 style='width:14.02%;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Maximum</span></p>
                        </td>
                        <td width="11%" colspan=2 style='width:11.8%;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                             <input  class="form-control"  id="STE_Elev_CH1_Maximum" name="STE_Elev_CH1_Maximum" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH1_Maximum : old('STE_Elev_CH1_Maximum')}}"  maxlength="10">
                        
                        </td>
                        <td width="12%" colspan=2 style='width:12.22%;padding:0cm 5.4pt 0cm 5.4pt'>
                                                  
                          <input  class="form-control"  id="STE_Elev_CH2_Maximum" name="STE_Elev_CH2_Maximum" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH2_Maximum : old('STE_Elev_CH2_Maximum')}}"  maxlength="10">
                        
                        </td>
                        <td width="11%" style='width:11.46%;border:none;border-right:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>
                               <input  class="form-control"  id="STE_Elev_CH3_Maximum" name="STE_Elev_CH3_Maximum" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH3_Maximum : old('STE_Elev_CH3_Maximum')}}" maxlength="10">
                        </td>
                       </tr>
                       <tr style='mso-yfti-irow:38'>
                        <td width="14%" colspan=2 style='width:14.8%;border-top:none;
                        border-left:solid windowtext 2.25pt;border-bottom:solid windowtext 2.25pt;
                        border-right:none;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Time of Max</span></p>
                        </td>
                        <td width="12%" colspan=2 style='width:12.84%;border:none;
                        border-bottom:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           <input  class="form-control"  id="STE_dep_CH1_Tim_of_Max" name="STE_dep_CH1_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_dep_CH1_Tim_of_Max : old('STE_dep_CH1_Tim_of_Max')}}" maxlength="10">

                      
                        </td>
                        <td width="12%" style='width:12.0%;border:none;border-bottom:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>
                        <input  class="form-control"  id="STE_dep_CH2_Tim_of_Max" name="STE_dep_CH2_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_dep_CH2_Tim_of_Max : old('STE_dep_CH2_Tim_of_Max')}}" maxlength="10">
                      
                        </td>
                        <td width="10%" colspan=2 style='width:10.86%;border:none;
                        border-bottom:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                           
                           <input  class="form-control"  id="STE_dep_CH3_Tim_of_Max" name="STE_dep_CH3_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_dep_CH3_Tim_of_Max : old('STE_dep_CH3_Tim_of_Max')}}" maxlength="10">

                        
                        </td>
                        <td width="14%" colspan=3 style='width:14.02%;border:none;
                        border-bottom:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                        <p  style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                        normal'><span  >Time of Max</span></p>
                        </td>
                        <td width="11%" colspan=2 style='width:11.8%;border:none;
                        border-bottom:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                            <input  class="form-control"  id="STE_Elev_CH1_Tim_of_Max" name="STE_Elev_CH1_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH1_Tim_of_Max : old('STE_Elev_CH1_Tim_of_Max')}}" maxlength="10">

                        
                        </td>
                        <td width="12%" colspan=2 style='width:12.22%;border:none;
                        border-bottom:solid windowtext 2.25pt;padding:0cm 5.4pt 0cm 5.4pt'>
                       
                            <input  class="form-control"  id="STE_Elev_CH2_Tim_of_Max" name="STE_Elev_CH2_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH2_Tim_of_Max : old('STE_Elev_CH2_Tim_of_Max')}}" maxlength="10">

                        
                        </td>
                        <td width="11%" style='width:11.46%;border-top:none;border-left:
                        none;border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;
                        padding:0cm 5.4pt 0cm 5.4pt'>
                             <input  class="form-control"  id="STE_Elev_CH3_Tim_of_Max" name="STE_Elev_CH3_Tim_of_Max" type="text" value="{{(isset($data))  ? $data->STE_Elev_CH3_Tim_of_Max : old('STE_Elev_CH3_Tim_of_Max')}}" maxlength="10">
                        </td>
                       </tr>
                     </table>

                     <table  class="table table-striped  table-condensed table-hover">
                             <center><h6><b>Impressions and Findings</b></h6></center> 
                             
                            <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: ritmo cardiaco registrado: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_CardiacRythmn" name="Dx_CardiacRythmn" type="text" value="{{(isset($data))  ? $data->Dx_CardiacRythmn : old('Dx_CardiacRythmn')}}">
                              </td>                    
                            </tr>
                            <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: frecuencia cardiaca mínima: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_Min_FC" name="Dx_Min_FC" type="text" value="{{(isset($data))  ? $data->Dx_Min_FC : old('Dx_Min_FC')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: frecuencia cardiaca máxima: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_Max_FC" name="Dx_Max_FC" type="text" value="{{(isset($data))  ? $data->Dx_Max_FC : old('Dx_Max_FC')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: promedio de frecuencia cardiaca: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_Avg_FC" name="Dx_Avg_FC" type="text" value="{{(isset($data))  ? $data->Dx_Avg_FC : old('Dx_Avg_FC')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: otros 1: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_other_1" name="Dx_other_1" type="text" value="{{(isset($data))  ? $data->Dx_other_1 : old('Dx_other_1')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: otros 2: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_other_2" name="Dx_other_2" type="text" value="{{(isset($data))  ? $data->Dx_other_2 : old('Dx_other_2')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: otros 3: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_other_3" name="Dx_other_3" type="text" value="{{(isset($data))  ? $data->Dx_other_3 : old('Dx_other_3')}}">
                              </td>                    
                            </tr>
                             <tr>
                              <td style="text-align: left; width: 30%">Diagnóstico: otros 4: </td>
                              <td> <input maxlength="50" class="form-control"  id="Dx_other_4" name="Dx_other_4" type="text" value="{{(isset($data))  ? $data->Dx_other_4 : old('Dx_other_4')}}">
                              </td>                    
                            </tr>
                          
                          </table>

                          <table  class="table table-striped  table-condensed table-hover">
                                                         
                          <tr>
                             <td style="text-align: center;"> FC Máxima </td>
                             <td><input class="form-control" id="Holter_1a" name="Holter_1a" type="text" value='{{ old("Holter_1a", isset($data) ? $data->Holter_1a : "") }}' maxlength="6">
                             </td>                 
                          

                            
                             <td style="text-align: center;"> FC Mínima </td>
                             <td><input class="form-control"  id="Holter_1b" name="Holter_1b" type="text" value='{{ old("Holter_1b", isset($data) ? $data->Holter_1b : "") }}' maxlength="6">
                             </td>                 
                           


                             <td style="vertical-align: middle; text-align: center;"> FC Promedio </td>
                             <td><input class="form-control"  id="Holter_1c" name="Holter_1c" type="text" value='{{ old("Holter_1c", isset($data) ? $data->Holter_1c : "") }}' maxlength="6">
                             </td>                 
                         

                             <td style="vertical-align: middle; text-align: center;"> PR </td>
                             <td><input class="form-control"  id="Holter_2" name="Holter_2" type="text" value='{{ old("Holter_2", isset($data) ? $data->Holter_2 : "") }}' maxlength="6">
                             </td>                 
                          


                             <td style="vertical-align: middle; text-align: center;"> QRS </td>
                             <td><input class="form-control "  id="Holter_3" name="Holter_3" type="text" value='{{ old("Holter_3", isset($data) ? $data->Holter_3 : "") }}' maxlength="6">
                             </td>                 
                           </tr>

                           <tr>
                             <td colspan="4"></td>
                              <td style="vertical-align: middle; text-align: center;">QT</td>
                              <td><input class="form-control"  id="Holter_4" name="Holter_4" value='{{ old("Holter_4", isset($data) ? $data->Holter_4 : "") }}' maxlength="6">
                             </td> 
                             <td colspan="4"></td>

                           </tr>


                          </table>

               <table border=1 cellspacing=0 cellpadding=0 class="table">
               <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
                <td width="23%" colspan=3 style='width:23.1%;border:solid windowtext 1.0pt;
                mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
                background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
                height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>EXTRASISTOLES</span></b></p>
                </td>
                <td width="24%" colspan=3 style='width:24.4%;border:solid windowtext 1.0pt;
                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
                mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>BLOQUEOS</span></b></p>
                </td>
                <td width="24%" colspan=3 style='width:24.72%;border:solid windowtext 1.0pt;
                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
                mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>ARRITMIAS Supraventricular</span></b></p>
                </td>
                <td width="27%" colspan=3 style='width:27.78%;border:solid windowtext 1.0pt;
                border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
                solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
                mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>ARRITMIAS Supraventiculares</span></b></p>
                </td>
               </tr>
               <tr style='mso-yfti-irow:1;height:21.6pt'>
                <td width="15%" valign=top style='width:15.42%;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>Supraventiculares</span></b></span><b style='mso-bidi-font-weight:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '></span></b></p>
                </td>
                <td  style='border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><span style='font-size:9.0pt;
                font-family:"Arial","sans-serif";'>05</span></p>
                </td>
                <td style='border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
               
                  <select  name="Holter_5" id="Holter_5">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_5 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
              
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Derecha incompleto</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><span style='font-size:9.0pt;
                font-family:"Arial","sans-serif";'>14</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>

                   <select  name="Holter_14" id="Holter_14">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_14 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Bradicardia</span></p>
                </td>
                <td width="3%" style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   22
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                 <select  name="Holter_22" id="Holter_22">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_22 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="17%" style='width:17.04%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Extrasistoles 1-50</span></p>
                </td>
                <td width="4%" style='width:4.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   29
                </td>
                <td width="5%" style='width:5.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select name="Holter_29" id="Holter_29">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_29 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:2;height:21.6pt'>
                <td width="23%" colspan=3 style='width:23.1%;border:solid windowtext 1.0pt;
                border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
                style='font-size:9.0pt;font-family:"Arial","sans-serif";'>Ventriculares</span></b></p>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Derecha completo</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   15
                </td>
                <td width="3%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                
                   <select class="form-control" name="Holter_15" id="Holter_15">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_15 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Taquicardia sinus</span></p>
                </td>
                <td width="3%" style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  23
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_23" id="Holter_23">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_23 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="17%" style='width:17.04%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Extrasistoles 50-100</span></p>
                </td>
                <td style='width:4.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   30
                </td>
                <td width="5%" style='width:5.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_30" id="Holter_30">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_30 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:3;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown I</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                06
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_6" id="Holter_6">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_6 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Izquierda completo</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  16
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_16" id="Holter_16">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_16 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Fibrilacion auricular</span></p>
                </td>
                <td  style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  24
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_24" id="Holter_24">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_24 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="17%" style='width:17.04%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Extrasistoles &gt;100</span></p>
                </td>
                <td style='width:4.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   31
                </td>
                <td width="5%" style='width:5.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_31" id="Holter_31">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_31 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:4;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown II</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
                text-align:center;line-height:normal'><span style='font-size:9.0pt;
                font-family:"Arial","sans-serif";'>07</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                    <select class="form-control" name="Holter_7" id="Holter_7">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_7 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Izquierda incompleto</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  17
                </td>
                <td width="3%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_17" id="Holter_17">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_17 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Flutter auricular</span></p>
                </td>
                <td style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   25
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                    <select class="form-control" name="Holter_25" id="Holter_25">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_25 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="17%" style='width:17.04%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Extrasistoles multifocales</span></p>
                </td>
                <td style='width:4.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  32
                </td>
                <td width="5%" style='width:5.38%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_32" id="Holter_32">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_32 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:5;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown III</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                 08
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                     <select class="form-control" name="Holter_8" id="Holter_8">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_8 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Primer grado</span></p>
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                    18
                </td>
                <td width="2%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                    <select class="form-control" name="Holter_18" id="Holter_18">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_18 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>T.P.S.V.</span></p>
                </td>
                <td style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   26
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_26" id="Holter_26">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_26 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="27%" colspan=3 rowspan=4 valign=top style='width:27.78%;
                border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
                border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
                mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                background:#404040;mso-background-themecolor:text1;mso-background-themetint:
                191;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>&nbsp;</span></p>
                </td>
               </tr>
               <tr style='mso-yfti-irow:6;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown IVa</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   09
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_9" id="Holter_9">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_9 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Mobitz I</span></p>
                </td>
                <td width="2%" style='width:2.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   19
                </td>
                <td width="3%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_19" id="Holter_19">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_19 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" style='width:15.48%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>W.P.W</span></p>
                </td>
                <td style='width:3.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  27
                </td>
                <td width="4%" style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_27" id="Holter_27">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_27 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:7;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown IVb</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                      10
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_10" id="Holter_10">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_10 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Mobitz II</span></p>
                </td>
                <td width="2%" style='width:2.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  20
                </td>
                <td width="3%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_20" id="Holter_20">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_20 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="15%" rowspan=2 style='width:15.48%;border-top:none;border-left:
                none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>T auricular multifocal</span></p>
                </td>
                <td width="4%" rowspan=2 style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   28
                </td>
                <td width="4%" rowspan=2 style='width:4.62%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                    <select class="form-control" name="Holter_28" id="Holter_28">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_28 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:8;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>     </span>Lown V</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                11
                </td>
                <td width="3%" style='width:3.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   <select class="form-control" name="Holter_11" id="Holter_11">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_11 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="16%" style='width:16.7%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '>Completo</span></p>
                </td>
                <td width="2%" style='width:2.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   21
                </td>
                <td width="3%" style='width:3.86%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_21" id="Holter_21">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_21 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
               <tr style='mso-yfti-irow:9;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>    
                </span>Brigeminismo</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                     12
                </td>
                <td width="3%" style='width:3.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_12" id="Holter_12">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_12 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
                <td width="76%" colspan=9 rowspan=2 style='width:76.9%;border-top:none;
                border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;background:#404040;mso-background-themecolor:
                text1;mso-background-themetint:191;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
             
                </td>
               </tr>
               <tr style='mso-yfti-irow:10;mso-yfti-lastrow:yes;height:21.6pt'>
                <td width="15%" style='width:15.42%;border:solid windowtext 1.0pt;border-top:
                none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
                padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
                normal'><span style='font-size:9.0pt;font-family:"Arial","sans-serif";
                '><span style='mso-spacerun:yes'>    
                </span>Trigeminismo</span></p>
                </td>
                <td width="2%" style='width:2.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                   13
                </td>
                <td width="3%" style='width:3.84%;border-top:none;border-left:none;
                border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
                mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
                mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
                  <select class="form-control" name="Holter_13" id="Holter_13">
                      <option value="0">0 = No</option>
                      <option value="1" {{ (isset($data) && $data->Holter_13 ==1) ? 'selected' : '' }}>1 = Si</option>
                  </select>
                </td>
               </tr>
              </table>



                          <p><center><b>(0 = No, 1 = Si)</b></center></p>


<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.6pt'>
  <td width="33%" colspan=3 style='width:33.92%;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>ISQUEMIA</span></b></p>
  </td>
  <td width="33%" colspan=3 style='width:33.9%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>LESION</span></b></p>
  </td>
  <td width="32%" colspan=3 style='width:32.18%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
  style='font-family:"Arial","sans-serif";'>NECROSIS</span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:21.6pt'>
  <td width="18%" valign=top style='width:18.22%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Arial","sans-serif";
  '>Subepicardica</span></span><span style='font-family:
  "Arial","sans-serif";'></span></p>
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
    33
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
       <select class="form-control" name="Holter_33" id="Holter_33">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->Holter_33 ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>
  </td>
  <td width="18%" valign=top style='width:18.2%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>Subepicardica</span></p>
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
     35
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
      <select class="form-control" name="Holter_35" id="Holter_35">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->Holter_35 ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>
  </td>
  <td width="16%" valign=top style='width:16.48%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>Necrosis</span></p>
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
    37
  </td>
  <td width="7%" style='width:7.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
       <select class="form-control" name="Holter_37" id="Holter_37">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->Holter_37 ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:21.6pt'>
  <td width="18%" valign=top style='width:18.22%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-family:"Arial","sans-serif";
  '>Subendocardica</span></span><span style='font-family:
  "Arial","sans-serif";'></span></p>
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
     34
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
       <select class="form-control" name="Holter_34" id="Holter_34">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->Holter_34 ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>
  </td>
  <td width="18%" valign=top style='width:18.2%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>Subendocardica</span></p>
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
    36
  </td>
  <td width="7%" style='width:7.84%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
        <select class="form-control" name="Holter_36" id="Holter_36">
            <option value="0">0 = No</option>
            <option value="1" {{ (isset($data) && $data->Holter_36 ==1) ? 'selected' : '' }}>1 = Si</option>
      </select>
  </td>
  <td width="32%" colspan=3 valign=top style='width:32.18%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:21.6pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-family:"Arial","sans-serif";'>&nbsp;</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style=''>&nbsp;</span></p>

  
 
 <div class="form-group{{ $errors->has('Holter_38') ? ' has-error' : '' }}">
     <label  for="Holter_38" class="col-md-1 control-label">HOLTER: NORMAL38</label>
      <div class="col-md-2">
        <select class="form-control" name="Holter_38" id="Holter_38">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Holter_38 ==1) ? 'selected' : '' }}>1 = Si</option>
          </select>
      </div>
  </div>

                    
                        
                        <div class="form-group" id='guardar'>
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>
                            </div>
                        </div>
                    </form>
                </div>
</div>

@section('styles')
<style type="text/css">

th,td {
    text-align: justify;
    vertical-align:middle;
    }

</style>

@endsection


@push('scripts')
<script type="text/javascript">


$(document).ready(function(){

    $('.numero').mask("9999",{reverse: true});
    $('.time').mask('00:00:00', {placeholder: "00:00:00"});
    $('.timeb').mask('00:00-0 00:00-0', {placeholder: "19:00-1 20:00-1"});
    
    $('.decimal').mask("099.99",{reverse: true});
    $('#Weight').mask("999.99",{reverse: true, placeholder: "00.00"});
    $('#Height').mask("99.99", {reverse: true, placeholder: "00.00"});


}); 


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

         var fecha = $("#Test_date").val();
         var id    = $("#patient_id").val();
         let url   = '/api/list/patient/'+id+'/'+fecha;
                      axios.get(url).then(response => {

                     $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                     $("#nombre2").val(response.data.first_name+' '+response.data.last_name);
                     $("#hist_id").val(response.data.hist_id);
                     $("#hist_id2").val(response.data.hist_id);
                     $("#gender").val(response.data.gender);
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



@endsection



