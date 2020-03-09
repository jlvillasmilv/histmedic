@extends('layouts.main')
@section('title', ' Pacientes')
@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <a class="pull-right" href="{{ url('/entrevista_segumiento') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>Registro Entrevista Seguimiento</div>
                <div class="panel-body">
                    <form class="form-horizontal" id="patientform" role="form" method="POST" action="{{ isset($data) ? route('entrevista_segumiento.update',  $data->id) : route('entrevista_segumiento.store') }}">
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

</head>

<body>



<table class="table" >

 <tr height=26 style='height:20.1pt'>
  <td height=26 class=xl6317095 width=73 style='height:20.1pt;width:55pt'></td>
  <td class=xl6317095 width=79 style='width:59pt'></td>
  <td class=xl6317095 width=119 style='width:89pt'></td>
  <td class=xl6317095 width=33 style='width:25pt'></td>
  <td class=xl6317095 width=121 style='width:91pt'></td>
  <td class=xl6317095 width=73 style='width:55pt'></td>
  <td class=xl6317095 width=93 style='width:70pt'></td>
  <td class=xl6317095 width=29 style='width:22pt'></td>
 </tr>
 <tr style='height:15.0pt'>
  <td colspan=8 height=20 class=xl20817095 style='height:15.0pt'>ENTREVISTA DE
  SEGUIMIENTO</td>
 </tr>
 <tr  style='mso-height-source:userset;height:30.0pt'>
  <td colspan=3 height=40 class=xl27717095 style='border-right:.5pt solid black;
  height:30.0pt'>1.<font class="font517095">Fecha de aplicación de la entrevista: </font>

           <input id="Fech_entrevSeg" type="date" class="form-control" name="Fech_entrevSeg" value='{{(isset($data))  ? date("Y-m-d", strtotime($data->Fech_entrevSeg))  :date("Y-m-d") }}' required >
                                           
                     @if ($errors->has('Fech_entrevSeg'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fech_entrevSeg') }}</strong>
                           </span>
                     @endif
   </td>
  <td colspan=2 class=xl28017095 width=154 style='border-right:.5pt solid black;
  border-left:none;width:116pt'>2.Fecha de primer mapa:

        <input id="Fecha_map" type="date" class="form-control" name="Fecha_map" value='{{(isset($data)) && strtotime($data->Fecha_map) != false  ? date("Y-m-d", strtotime($data->Fecha_map)) : "0001-01-01" }}' >
                                         
                     @if ($errors->has('Fecha_map'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_map') }}</strong>
                           </span>
                     @endif


 </td>
  <td colspan=3 class=xl27417095 style='border-right:.5pt solid black;
  border-left:none'>3.Entrevistador: 

         
        <input id="EntrevistadorES" type="text" class="form-control" name="EntrevistadorES" value='{{(isset($data))  ? $data->EntrevistadorES  :old("EntrevistadorES") }}' >
                                           
                     @if ($errors->has('EntrevistadorES'))
                          <span class="help-block">
                              <strong>{{ $errors->first('EntrevistadorES') }}</strong>
                           </span>
                     @endif                     
                
</td>
 </tr>
 <tr height=20 style='background: black;mso-height-source:userset;height:15.0pt'>
  <td colspan=8 style="color: white">I.Datos personales del paciente</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl28617095 style='height:15.0pt'>4<font
  class="font717095">.</font><font class="font517095">Cédula:<span
  style='mso-spacerun:yes'>   </span></font>
     <input id="cedula" type="text" class="form-control" readonly="" name="cedula" value='{{old("cedula")}}' >          
     
</td>
  <td colspan=3 class=xl28617095 style='border-left:none'>5.Nombre del paciente: 
     <input id="nombre" type="text" class="form-control" readonly="" name="nombre" value='{{old("nombre")}}' >   
  </td>
  <td colspan=3 class=xl28817095 style='border-right:.5pt solid black;
  border-left:none'>6<font class="font717095">.</font><font class="font517095">Teléfono:
  </font>

       <input id="telf" type="text" class="form-control" name="telf" value='{{(isset($data))  ? $data->telf  :old("telf") }}' >
                                           
                     @if ($errors->has('telf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('telf') }}</strong>
                           </span>
                     @endif 

</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=5 height=20 class=xl21017095 style='border-right:.5pt solid black;
  height:15.0pt'>7.Fecha de nacimiento: 

      <input id="date_birth" type="text" class="form-control" readonly="" name="date_birth" value='{{old("date_birth")}}' >    
</td>
  <td colspan=3 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=5 height=20 class=xl27117095 width=425 style='border-right:.5pt solid black;
  height:15.0pt;width:319pt'>8<font class="font717095">.</font><font
  class="font517095">Si no es el paciente, nombre del informante: </font>

             <input id="Nom_inf" type="text" class="form-control" name="Nom_inf" value='{{(isset($data))  ? $data->Nom_inf :old("Nom_inf") }}' >
                                           
                     @if ($errors->has('Nom_inf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Nom_inf') }}</strong>
                           </span>
                     @endif 


</td>
  <td colspan=3 class=xl27417095 style='border-right:.5pt solid black;
  border-left:none'>9.Parentesco:

      <input id="parentescoe" type="text" class="form-control" name="parentescoe" value='{{(isset($data))  ? $data->parentescoe :old("parentescoe") }}' >
                                           
                     @if ($errors->has('parentescoe'))
                          <span class="help-block">
                              <strong>{{ $errors->first('parentescoe') }}</strong>
                           </span>
                     @endif


</td>
 </tr>
 <tr height=21 style='background: black;'>
    <td colspan=8 style='color: white'>II. Después de su primer mapa, presentó alguna complicación
    que:</td>
   </tr>
  </td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td colspan=4 rowspan=2 height=60 class=xl26917095 width=304
  style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:45.0pt;width:228pt'>10.¿Ameritó asistir a la emergencia de un centro
  de salud por un evento cardiovascular? 

        <select class="form-control" name="Emg_cardio" id="Emg_cardio">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Emg_cardio ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
 
                                             
                     @if ($errors->has('Emg_cardio'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Emg_cardio') }}</strong>
                           </span>
                     @endif


</td>
  <td colspan=4 rowspan=2 class=xl32117095 width=316 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:238pt'>12.Motivo de la emergencia: 
   
      <input id="Mot_emg" type="text" class="form-control" name="Mot_emg" value='{{(isset($data))  ? $data->Mot_emg :old("Mot_emg") }}' >
                                           
                     @if ($errors->has('Mot_emg'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Mot_emg') }}</strong>
                           </span>
                     @endif
</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
 </tr>
 <tr height=42 style='mso-height-source:userset;height:31.5pt'>
  <td colspan=4 rowspan=3 height=80 class=xl31217095 width=304
  style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:60.0pt;width:228pt'>11.Centro de salud: 
      
       <input id="Cen_sal" type="text" class="form-control" name="Cen_sal" value='{{(isset($data))  ? $data->Cen_sal :old("Cen_sal") }}' >
                                           
                     @if ($errors->has('Cen_sal'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Cen_sal') }}</strong>
                           </span>
                     @endif
</td>
  <td class=xl7817095 width=121 style='border-top:none;border-left:none;
  width:91pt'>13.Fecha de la emergencia medica:</td>
  <td colspan=3 class=xl29817095 width=195 style='border-right:.5pt solid black;
  border-left:none;width:147pt'>
    
    <input id="Fec_emer" type="date" class="form-control" name="Fec_emer" value='{{(isset($data)) && strtotime($data->Fec_emer) != false  ? date("Y-m-d", strtotime($data->Fec_emer)) : "0001-01-01" }}'> 

                     @if ($errors->has('Fec_emer'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fec_emer') }}</strong>
                           </span>
                     @endif

  </td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td rowspan=2 height=38 class=xl26817095 width=121 style='height:28.5pt;
  border-top:none;width:91pt'>16.Motivo de la hospitalización:</td>
  <td colspan=3 rowspan=2 class=xl30117095 width=195 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:147pt'>

          <input id="mot_hosp" type="text" class="form-control" name="mot_hosp" value='{{(isset($data))  ? $data->mot_hosp :old("mot_hosp") }}' >
                                           
                     @if ($errors->has('mot_hosp'))
                          <span class="help-block">
                              <strong>{{ $errors->first('mot_hosp') }}</strong>
                           </span>
                     @endif

</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
 </tr>
 <tr>
  <td colspan=2 style='width:50%'>
    14.¿Ameritó hospitalización?<span style='mso-spacerun:yes'>     
  </span>
                                     
                     @if ($errors->has('amerito_hosp'))
                          <span class="help-block">
                              <strong>{{ $errors->first('amerito_hosp') }}</strong>
                           </span>
                     @endif

</td>
  <td colspan="2">
       

       <select class="form-control" name="amerito_hosp" id="amerito_hosp">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->amerito_hosp ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
 
                                            

</td>
  <td rowspan=2 style='border-bottom:.5pt solid black;'>17.Fecha de la hospitalizacion:</td>
  <td colspan=3 rowspan=2 class=xl26217095 width=195 style='border-right:.5pt solid black;
  width:147pt'>

        <input id="fecha_hosp" type="date" class="form-control" name="fecha_hosp" value='{{(isset($data)) && strtotime($data->fecha_hosp) != false  ? date("Y-m-d", strtotime($data->fecha_hosp)) : "0001-01-01" }}'>

                     @if ($errors->has('fecha_hosp'))
                          <span class="help-block">
                              <strong>{{ $errors->first('fecha_hosp') }}</strong>
                           </span>
                     @endif

</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl6517095 width=73 style='height:30.0pt;border-top:none;
  width:55pt'><font class="font717095">15</font><font class="font617095">.Centro
  de salud:</font></td>
  <td colspan=3 class=xl29517095 width=231 style='border-right:.5pt solid black;
  border-left:none;width:173pt'>

       <input id="Lugar_hosp" type="text" class="form-control" name="Lugar_hosp" value='{{(isset($data))  ? $data->Lugar_hosp :old("Lugar_hosp") }}' >
                                           
                     @if ($errors->has('Lugar_hosp'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Lugar_hosp') }}</strong>
                           </span>
                     @endif

</td>
 </tr>
 <tr height=20 style='background: black;'>
  <td colspan=8 style='color: white'>III. Eventos
  cardiovasculares, después de su primer mapa</td>
 </tr>
 <tr>
  <td >18.Infarto 
         <select class="form-control" name="infarto" id="infarto">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->infarto ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
 
                                             
                     @if ($errors->has('infarto'))
                          <span class="help-block">
                              <strong>{{ $errors->first('infarto') }}</strong>
                           </span>
                     @endif
    </td>
  <td colspan=3 class=xl24917095 style='border-left:none'>Síntomas:</td>
  <td rowspan=3 class=xl25017095 style='border-bottom:.5pt solid black;
  border-top:none'>19.Angina<font class="font1717095"> 

     <select class="form-control" name="Angina" id="Angina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Angina ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

                     @if ($errors->has('Angina'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Angina') }}</strong>
                           </span>
                     @endif

               


  </font></td>
  <td colspan=3 >Síntomas:</td>
 </tr>
 <tr >
  <td style='border-right:.5pt solid black;
  height:15.0pt;border-left:none;width:148pt'>Dolor torácico  @if ($errors->has('sint_1_inf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('sint_1_inf') }}</strong>
                           </span>
                     @endif </td>
  <td colspan="2" style='border-top:none;border-left:none;
  width:25pt'>
    
    <select class="form-control" name="sint_1_inf" id="sint_1_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_1_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

                    

  </td>
  <td  rowspan=2 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:125pt'>Dolor torácico (sensación de
  presión agudo y sofocante) <font class="font1417095">30</font></td>
  <td colspan="2" rowspan=2 >
    
      <select class="form-control" name="sint_1_ang" id="sint_1_ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_1_ang ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td>Dificultad respiratoria </td>
  <td colspan=2>
           <select class="form-control" name="sint_2_inf" id="sint_2_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_2_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td style='height:29.25pt;
  border-left:none;width:148pt'>Sensación de agotamiento </td>
  <td colspan=2>
            <select class="form-control" name="sint_3_inf" id="sint_3_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_3_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

</td>
  <td class=xl7917095 style='border-top:none;border-left:none'>Angina
  inestable<span style='mso-spacerun:yes'> </span></td>
  <td style='border-left:none;width:125pt'>Sensación
  de muerte inminente </td>
  <td colspan=2>

        <select class="form-control" name="sint_2_ang" id="sint_2_ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_2_ang ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
          
  </td>
 </tr>
 <tr height=35 style='mso-height-source:userset;height:26.25pt'>
  <td  style='border-right:.5pt solid black;
  height:26.25pt;border-left:none;width:148pt'>Mareo</td>
  <td colspan=2>
    
          <select class="form-control" name="sint_4_inf" id="sint_4_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_4_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td >Angina cronica</td>
  <td >Sensación de muerte inminente </td>
  <td colspan=2>
             
            <select class="form-control" name="sint_3_ang" id="sint_3_ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_3_ang ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td >Sudoración </td>
  <td colspan=2>
    
          <select class="form-control" name="sint_5_inf" id="sint_5_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_5_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td class=xl8017095 style='border-left:none'>&nbsp;</td>
  <td ></td>
  <td colspan=2>

    <select class="form-control" name="sint_4_ang" id="sint_4_ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_4_ang ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
 </tr>
 <tr >
  <td >Calambre en el brazo. Izq. </td>
  <td colspan=2>
            <select class="form-control" name="sint_6_inf" id="sint_6_inf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_6_inf ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

</td>
  <td >
            <select class="form-control" name="Tipo_Ang" id="Tipo_Ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Tipo_Ang ==1) ? 'selected' : '' }}>1: Angina Inestable</option>
                <option value="2" {{ (isset($data) && $data->Tipo_Ang ==2) ? 'selected' : '' }}>2: Angina Cronica</option>
            </select>

  </td>
  <td >Dificultad para
  respirar</td>
  <td colspan=2>
        <select class="form-control" name="sint_5_ang" id="sint_5_ang">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_5_ang ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl19517095 width=304 style='height:15.0pt;
  width:228pt'>20.Fecha del infarto: 

                  <input id="Fecha_inf" type="date" class="form-control" name="Fecha_inf" value='{{(isset($data)) && strtotime($data->Fecha_inf) != false  ? date("Y-m-d", strtotime($data->Fecha_inf)) : "0001-01-01" }}' >
                                           
                     @if ($errors->has('Fecha_inf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_inf') }}</strong>
                           </span>
                     @endif

  </td>
  <td colspan=4 class=xl19517095 width=316 style='border-left:none;width:238pt'>22.Fecha
  que presentó la angina:


           <input id="Fecha_ang" type="date" class="form-control" name="Fecha_ang" value='{{(isset($data)) && strtotime($data->Fecha_ang) != false  ? date("Y-m-d", strtotime($data->Fecha_ang)) : "0001-01-01" }}' >
                                           
                     @if ($errors->has('Fecha_ang'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_ang') }}</strong>
                           </span>
                     @endif

   </td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=4 height=20 class=xl18117095 width=304 style='border-right:.5pt solid black;
  height:15.0pt;width:228pt'>21.Lugar de Hospitalización:

              <input id="Lugar_hosp_inf" type="text" class="form-control" name="Lugar_hosp_inf" value='{{(isset($data))  ? $data->Lugar_hosp_inf  : old("Lugar_hosp_inf") }}' >
                                           
                     @if ($errors->has('Lugar_hosp_inf'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Lugar_hosp_inf') }}</strong>
                           </span>
                     @endif
  </td>
  <td colspan=4 class=xl20217095 width=316 style='border-left:none;width:238pt'>23.Lugar
  de Hospitalización: 
        
         <input id="Lugar_hosp_ang" type="text" class="form-control" name="Lugar_hosp_ang" value='{{(isset($data))  ? $data->Lugar_hosp_ang  : old("Lugar_hosp_ang") }}' >
                                           
                     @if ($errors->has('Lugar_hosp_ang'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Lugar_hosp_ang') }}</strong>
                           </span>
                     @endif

</td>
 </tr>
 <tr>
  <td  >24.ACV 
       
         <select class="form-control" name="ACV" id="ACV">
                <option value="0">0: No</option>
                <option value="1" {{ (isset($data) && $data->ACV ==1) ? 'selected' : '' }}>1: Si</option>
            </select>

</td>
  <td colspan=3 class=xl23317095 width=231 style='width:173pt'>Síntomas:</td>
  <td colspan=4 class=xl23417095 width=316 style='border-right:.5pt solid black;
  border-left:none;width:238pt'>25.Tipo de ACV: 
     
        <select class="form-control" name="Tipo_ACV" id="Tipo_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Tipo_ACV ==1) ? 'selected' : '' }}>1: Transitorio</option>
                <option value="2" {{ (isset($data) && $data->Tipo_ACV ==2) ? 'selected' : '' }}>2: Isquemico</option>
                <option value="3" {{ (isset($data) && $data->Tipo_ACV ==3) ? 'selected' : '' }}>3: Hemorragico</option>
            </select>

  </td>
 </tr>
 <tr >
  <td >Pérdida de memoria/alteración de la conciencia </td>
  <td colspan="2">
       <select class="form-control" name="sint_1_ACV" id="sint_1_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_1_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
  <td class=xl7517095 style='border-left:none'>&nbsp;</td>
  <td class=xl6317095></td>
  <td class=xl6317095></td>
  <td rowspan=4 class=xl23717095>&nbsp;</td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:23.1pt'>
  <td colspan=2 height=30 class=xl17917095 width=198 style='height:23.1pt;
  width:148pt'>Dolor fuerte de cabeza <font
  class="font1417095">40</font></td>
  <td colspan=2>
     <select class="form-control" name="sint_2_ACV" id="sint_2_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_2_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
  <td colspan=3 class=xl22417095 style='border-left:none'>1.ACV Transitorio
  &quot;TIA&quot;</td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td colspan=2 height=28 class=xl17917095 width=198 style='height:21.0pt;
  width:148pt'>Desvanecimientos, mareos <font class="font1417095">41</font></td>
  <td colspan=2>
     
     <select class="form-control" name="sint_3_ACV" id="sint_3_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_3_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td colspan=2 class=xl22417095 style='border-left:none'>2.ACV Isquémico
  &quot;Trombosi&quot;</td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td colspan=2 height=28 class=xl13417095 style='height:21.0pt'>Parálisis
  facial <font class="font1417095">42</font></td>
  <td colspan=2>
    
              <select class="form-control" name="sint_4_ACV" id="sint_4_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_4_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
  <td colspan=3 class=xl22417095 style='border-left:none'>3.ACV Hemorrágico
  &quot;Derrame&quot;</td>
 </tr>
 <tr >
  <td colspan=2>Perdida
  de la vision <font class="font1417095">43</font></td>
  
  <td colspan=2>
    
            <select class="form-control" name="sint_5_ACV" id="sint_5_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_5_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
  <td colspan=3 class=xl29117095 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
 </tr>
 <tr height=37 style='mso-height-source:userset;height:27.75pt'>
  <td colspan=2 height=37 class=xl22517095 width=198 style='height:27.75pt;
  width:148pt'>Cambios en el lenguaje o en el habla <font class="font1417095">44</font></td>
  <td colspan=2>
    
         <select class="form-control" name="sint_6_ACV" id="sint_6_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_6_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
  <td colspan=3 rowspan=2 class=xl22717095 width=316 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:238pt'>26.Fecha del evento del ACV: 

               <input id="Fecha_ACV" type="date" class="form-control" name="Fecha_ACV" value='{{(isset($data)) && strtotime($data->Fecha_ACV) != false  ? date("Y-m-d", strtotime($data->Fecha_ACV)) : "0001-01-01" }}'>
                                           
                     @if ($errors->has('Fecha_ACV'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_ACV') }}</strong>
                           </span>
                     @endif

  </td>
 </tr>
 <tr >
  <td colspan=2 rowspan=2 height=42 class=xl18017095 width=198
  style='height:31.5pt;width:148pt'>Debilidad o parálisis de los miembros <font
  class="font1417095">45</font></td>
  <td rowspan=2 colspan=2>
    
             <select class="form-control" name="sint_7_ACV" id="sint_7_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_7_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>
  </td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 rowspan=2 height=53 class=xl21617095 width=316
  style='border-right:.5pt solid black;border-bottom:.5pt solid black;
  height:39.75pt;width:238pt'>27.Lugar de Hospitalización: 
          
           <input id="Lugar_hosp_ACV" type="text" class="form-control" name="Lugar_hosp_ACV" value='{{(isset($data))  ? $data->Lugar_hosp_ACV  : old("Lugar_hosp_ACV") }}' >
                                           
                     @if ($errors->has('Lugar_hosp_ACV'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Lugar_hosp_ACV') }}</strong>
                           </span>
                     @endif
</td>
 </tr>
 <tr height=32 style='mso-height-source:userset;height:24.0pt'>
  <td colspan=2 height=32 class=xl22217095 width=198 style='height:24.0pt;
  width:148pt'>Pérdida de la sensibilidad en miembros <font class="font1417095">46</font></td>
  <td colspan="2">
    
            <select class="form-control" name="sint_8_ACV" id="sint_8_ACV">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->sint_8_ACV ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>

  </td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl7117095 width=73 style='height:15.75pt;width:55pt'>&nbsp;</td>
  <td class=xl7217095 width=79 style='width:59pt'>&nbsp;</td>
  <td class=xl7217095 width=119 style='width:89pt'>&nbsp;</td>
  <td class=xl8717095>&nbsp;</td>
  <td class=xl7017095 width=121 style='width:91pt'>&nbsp;</td>
  <td class=xl7017095 width=73 style='width:55pt'>&nbsp;</td>
  <td class=xl7017095 width=93 style='width:70pt'>&nbsp;</td>
  <td class=xl7017095 width=29 style='width:22pt'>&nbsp;</td>
 </tr>

 <tr height=20 style='background: black;'>
  <td colspan=8  style='color: white'>IV. Después de
  su primer mapa, se le ha practicado</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl19417095 style='height:15.0pt'>28.Revascularización<span
  style='mso-spacerun:yes'>  </span>coronaria:<font class="font1917095"> 49</font></td>
  <td class=xl8817095 style='border-top:none;border-left:none'>

            <select class="form-control" name="Revasc_Coron" id="Revasc_Coron">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Revasc_Coron ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
  <td colspan=4 rowspan=2 class=xl19517095 width=316 style='width:238pt'>30.
  Lugar de hospitalización:


            <input id="Lugar_Hosp_card" type="text" class="form-control" name="Lugar_Hosp_card" value='{{(isset($data))  ? $data->Lugar_Hosp_card  : old("Lugar_Hosp_card") }}' >
                                           
                     @if ($errors->has('Lugar_Hosp_card'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Lugar_Hosp_card') }}</strong>
                           </span>
                     @endif


  <font class="font1217095"> 57</font></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td colspan=3 height=18 class=xl19717095 width=271 style='border-right:.5pt solid black;
  height:14.1pt;width:203pt'>Cateterismo cardíaco <font class="font1217095">50</font></td>
  <td class=xl9017095 style='border-top:none;border-left:none'>
    
          <select class="form-control" name="Tipo_RC" id="Tipo_RC">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Tipo_RC ==1) ? 'selected' : '' }}>1: Cateterismo cardiaco</option>
                <option value="2" {{ (isset($data) && $data->Tipo_RC ==1) ? 'selected' : '' }}>2: Cateterismo con stent</option>
                <option value="3" {{ (isset($data) && $data->Tipo_RC ==1) ? 'selected' : '' }}>3: Bypass(puente) a corazón abierto</option>
            </select>

  </td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td colspan=3 height=18 class=xl17417095 width=271 style='border-right:.5pt solid black;
  height:14.1pt;width:203pt'>Cateterismo con stent</td>
  <td class=xl9117095 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl17817095 width=316 style='border-left:none;width:238pt'>31.Fecha
  de la revascularización coronaria: 

          <input id="Fecha_RC" type="date" class="form-control" name="Fecha_RC" value='{{(isset($data)) && strtotime($data->Fecha_RC) != false  ? date("Y-m-d", strtotime($data->Fecha_RC)) : "0001-01-01" }}'>
                                           
                     @if ($errors->has('Fecha_RC'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_RC') }}</strong>
                           </span>
                     @endif
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td colspan=3 height=18 class=xl17417095 width=271 style='border-right:.5pt solid black;
  height:14.1pt;width:203pt'>Bypass (puente) a corazón abierto</td>
  <td class=xl9117095 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=4 rowspan=5 class=xl18117095 width=316 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:238pt'>32. ¿Fue hospitalizado por presentar insuficiencia cardíaca?, s<font
  class="font817095">i es afirmativo indicar
  lugar de hospitalización.

    <select class="form-control" name="Fue_Hops_por" id="Fue_Hops_por">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Fue_Hops_por ==1) ? 'selected' : '' }}>1: SI</option>
            </select><font class="font1217095">59</font></td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td colspan=3 height=28 class=xl17717095 style='height:21.0pt'>29.Insuficiencia
  o falla cardíaca: <font class="font1917095">51</font></td>
  <td class=xl9217095 style='border-top:none;border-left:none'>
    
          <select class="form-control" name="Insuf_Card" id="Insuf_Card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Insuf_Card ==1) ? 'selected' : '' }}>1 = Si</option>
            </select>


  </td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.6pt'>
  <td colspan=3 height=20 class=xl14117095 style='height:15.6pt'>Dificultad
  para respirar <font class="font1217095">52</font></td>
  <td class=xl8117095 style='border-top:none;border-left:none'>
    
         <select class="form-control" name="Sint_1_card" id="Sint_1_card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_1_card ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
 </tr>
 <tr height=16 style='mso-height-source:userset;height:12.0pt'>
  <td colspan=3 height=16 class=xl14117095 style='height:12.0pt'>Dificultad
  para dormir <font class="font1217095">53</font></td>
  <td class=xl8117095 style='border-top:none;border-left:none'>
    
        <select class="form-control" name="Sint_2_card" id="Sint_2_card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_2_card ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td height=18 class=xl7617095 style='height:14.1pt;border-top:none'>Edema
  (hinch<span style='display:none'>azón en las piernas o brazos) <font
  class="font1317095">54</font></span></td>
  <td class=xl7717095 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7717095 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8117095 style='border-top:none;border-left:none'>  
              
          <select class="form-control" name="Sint_3_card" id="Sint_3_card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_3_card ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
 </tr>
 <tr height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=3 height=31 class=xl14117095 style='height:23.25pt'>Taquicardia
  (palpitaciones aceleradas) <font class="font1217095">55</font></td>
  <td class=xl8117095 style='border-top:none;border-left:none'>

        <select class="form-control" name="Sint_4_card" id="Sint_4_card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_4_card ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
  <td colspan=4 class=xl11417095 width=316 style='border-right:.5pt solid black;
  border-left:none;width:238pt'>33.Fecha que se le diagnosticó por primera
  vez<span style='mso-spacerun:yes'>  </span>insuficiencia cardíaca:


               <input id="fecha_diag" type="date" class="form-control" name="fecha_diag" value='{{(isset($data)) && strtotime($data->fecha_diag) != false  ? date("Y-m-d", strtotime($data->fecha_diag)) : "0001-01-01" }}'>
                                           
                     @if ($errors->has('fecha_diag'))
                          <span class="help-block">
                              <strong>{{ $errors->first('fecha_diag') }}</strong>
                           </span>
                     @endif

  </td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 height=20 class=xl14117095 style='height:15.0pt'>Fatiga,
  debilidad, desmayos <font class="font1217095">56</font></td>
  <td class=xl8117095 style='border-top:none;border-left:none'>
    

          <select class="form-control" name="Sint_5_card" id="Sint_5_card">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_5_card ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
  <td class=xl6717095 width=121 style='border-left:none;width:91pt'>&nbsp;</td>
  <td class=xl6817095 width=73 style='width:55pt'>&nbsp;</td>
  <td class=xl6817095 width=93 style='width:70pt'>&nbsp;</td>
  <td class=xl6917095 width=29 style='width:22pt'>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=8 height=20 class=xl13817095 style='height:15.0pt'>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=8 height=20 class=xl13917095 style='height:15.0pt'>34.Medicamentos
  recibidos para controlar la insuficiencia cardíaca:</td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td rowspan=3 style='height:42.3pt;border-top:
  none'>Digitálicos</td>
  <td colspan=2 class=xl10017095 style='border-left:none'>Digoxina </td>
  <td class=xl8817095 style='border-top:none;border-left:none'>
    
         
       <select class="form-control" name="Digoxina" id="Digoxina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Digoxina ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
  <td rowspan=3 style='vertical-align: middle; border-bottom:.5pt solid black;
  border-top:none'>Nitratos</td>
  <td style='border-left:none'>Isordil </td>
  <td colspan=3>
    
        <select class="form-control" name="Isordil" id="Isordil">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Isordil ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
 </tr>
 <tr>
  <td colspan=2 style='height:14.1pt;border-left:
  none'>Lanicor</td>
  <td class=xl8817095 style='border-top:none;border-left:none'>
    
           <select class="form-control" name="Lanicor" id="Lanicor">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Lanicor ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>



  </td>
  <td  class=xl10017095 style='border-left:none'>Isomack <font
  class="font1217095">65</font></td>
  <td colspan=2 style='border-top:none;border-left:none'>
    
       <select class="form-control" name="Isomack" id="Isomack">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Isomack ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:14.1pt'>
  <td colspan=2 height=18 class=xl10017095 style='height:14.1pt;border-left:
  none'>Lanitop <font class="font1217095">63</font></td>
  <td class=xl8817095 style='border-top:none;border-left:none'>

         <select class="form-control" name="Lanitop" id="Lanitop">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Lanitop ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
  <td style='border-left:none'>Nitroderm (parche) </td>
  <td colspan="2" align=right style='border-top:none;border-left:none'>
    
         <select class="form-control" name="Nitroderm" id="Nitroderm">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Nitroderm ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
 </tr>
 <tr height=17 style='mso-height-source:userset;height:12.75pt'>
  <td colspan=3 height=17 class=xl11717095 style='border-right:.5pt solid black;
  height:12.75pt'>Diuréticos u otro medicamento antihipertensivo <font
  class="font2017095">68</font></td>
  <td class=xl8817095 style='border-top:none;border-left:none'>
    
           <select class="form-control" name="Otros_med" id="Otros_med">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Otros_med ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
  <td  class=xl12017095 style='border-right:.5pt solid black;
  border-left:none'>Nitroglicerina </td>
  <td colspan=2 class=xl6617095 align=right style='border-top:none;border-left:none'>
    
          <select class="form-control" name="Nitroglicerina" id="Nitroglicerina">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Nitroglicerina ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>
  </td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td colspan=3 height=28 class=xl12217095 style='height:21.0pt'>35.
  Enf.Vascular Periférica (Tromboflebitis) <font class="font1917095">69</font></td>
  <td class=xl30617095 style='border-top:none'>
    

        <select class="form-control" name="Enf_Vasc_Perf" id="Enf_Vasc_Perf">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Enf_Vasc_Perf ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
  <td colspan=4 rowspan=3 class=xl10517095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>36.Fecha que presentó evento de enfermedad vascular periférica: 


         <input id="Fecha_vasc" type="date" class="form-control" name="Fecha_vasc" value='{{(isset($data)) && strtotime($data->Fecha_vasc) != false  ? date("Y-m-d", strtotime($data->Fecha_vasc)) : "0001-01-01" }}'>
                                           
                     @if ($errors->has('Fecha_vasc'))
                          <span class="help-block">
                              <strong>{{ $errors->first('Fecha_vasc') }}</strong>
                           </span>
                     @endif

  </td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 height=21 class=xl13417095 style='height:15.75pt'>Dolor agudo
  en las piernas o en el miembro <font class="font1417095">70</font></td>
  <td class=xl9317095 style='border-top:none;border-left:none'>
    
           <select class="form-control" name="Sint_1_vasc" id="Sint_1_vasc">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_1_vasc ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=3 height=21 class=xl16317095 style='border-right:.5pt solid black;
  height:15.75pt'>Cambios bruscos en la coloración de la piel <font
  class="font1417095">71</font></td>
  <td class=xl30717095 style='border-top:none;border-left:none'>
    
        <select class="form-control" name="Sint_2_vasc" id="Sint_2_vasc">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_2_vasc ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td colspan=3 style='height:19.5pt'>37.Insuficiencia
  Renal: <font class="font1617095">73</font></td>
  <td >
    

          <select class="form-control" name="Ins_Renal" id="Ins_Renal">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Ins_Renal ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>


  </td>
  <td colspan=4>39.Debido a la insuficiencia renal, ¿Es o fue usted
  dializado? 

     <select class="form-control" name="dial" id="dial">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->dial ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  <td class=xl6617095 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:16.35pt'>
  <td colspan=4 rowspan=3 height=70 class=xl9417095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:54.3pt'>38.Fecha que iniciaron las
  diálisis:

        <input id="Fecha_dial" type="date" class="form-control" name="Fecha_dial" value='{{(isset($data)) && strtotime($data->Fecha_dial) != false  ? date("Y-m-d", strtotime($data->Fecha_dial)) : "0001-01-01" }}'>
                                           
          @if ($errors->has('Fecha_dial'))
              <span class="help-block">
                  <strong>{{ $errors->first('Fecha_dial') }}</strong>
              </span>
          @endif  

</td>
  <td colspan=4 class=xl10217095 style='border-right:.5pt solid black;
  border-left:none'>40.Frecuencia de diálisis: 

        <input id="Frec_dial" type="text" class="form-control" name="Frec_dial" value='{{(isset($data))  ? $data->Frec_dial  : old("Frec_dial") }}' >
                                           
          @if ($errors->has('Frec_dial'))
              <span class="help-block">
                  <strong>{{ $errors->first('Frec_dial') }}</strong>
              </span>
          @endif  
</td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:16.35pt'>
  <td colspan=4 rowspan=2 height=49 class=xl9417095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:37.95pt'>41. Lugar donde se le practica
  la diálisis: 


         <input id="hosp_dial" type="text" class="form-control" name="hosp_dial" value='{{(isset($data))  ? $data->hosp_dial  : old("hosp_dial") }}' >
                                           
          @if ($errors->has('hosp_dial'))
              <span class="help-block">
                  <strong>{{ $errors->first('hosp_dial') }}</strong>
              </span>
          @endif  

  </td>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.6pt'>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=2 rowspan=3 height=60 class=xl9417095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:45.0pt'>42.Ablación de riñón: 

         <select class="form-control" name="Abla_Rinon" id="Abla_Rinon">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Abla_Rinon ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>
        
   </td>
  <td colspan=3 rowspan=3 class=xl15117095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>43.Lugar donde se realizó la ablación de
  riñón: 
         <input id="Hosp_Abla" type="text" class="form-control" name="Hosp_Abla" value='{{(isset($data))  ? $data->Hosp_Abla  : old("Hosp_Abla") }}' >
                                           
          @if ($errors->has('Hosp_Abla'))
              <span class="help-block">
                  <strong>{{ $errors->first('Hosp_Abla') }}</strong>
              </span>
          @endif  


 </td>
  <td colspan=3 rowspan=3 class=xl12517095 width=195 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:147pt'>44.Fecha de ablación de
  riñón:


          <input id="Fecha_Abla" type="date" class="form-control" name="Fecha_Abla" value='{{(isset($data)) && strtotime($data->Fecha_Abla) != false  ? date("Y-m-d", strtotime($data->Fecha_Abla)) : "0001-01-01" }}'>
                                           
          @if ($errors->has('Fecha_Abla'))
              <span class="help-block">
                  <strong>{{ $errors->first('Fecha_Abla') }}</strong>
              </span>
          @endif  


  </td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=3 rowspan=2 height=40 class=xl16017095 width=271
  style='height:30.0pt;width:203pt'><font class="font1017095">45.Ha sido usted
  diagnosticado con </font><font class="font817095">retinopatía hipertensiva?</font>

  <font
  class="font2117095"> 81</font></td>
  <td rowspan=2 class=xl8917095 style='border-bottom:.5pt solid black;
  border-top:none'> 
  <select class="form-control" name="Reti_hipert" id="Reti_hipert">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Reti_hipert ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>
  </td>
  <td colspan=4 rowspan=2 class=xl14317095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>Síntomas</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
 </tr>
 <tr height=28 style='mso-height-source:userset;height:21.0pt'>
  <td colspan=4 rowspan=2 height=57 class=xl9417095 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;height:42.75pt'>46. Fecha de diagnóstico: 


         <input id="Fecha_Diag_reti" type="date" class="form-control" name="Fecha_Diag_reti" value='{{(isset($data)) && strtotime($data->Fecha_Diag_reti) != false  ? date("Y-m-d", strtotime($data->Fecha_Diag_reti)) : "0001-01-01" }}'>
                                           
          @if ($errors->has('Fecha_Diag_reti'))
              <span class="help-block">
                  <strong>{{ $errors->first('Fecha_Diag_reti') }}</strong>
              </span>
          @endif  
  </td>
  <td colspan=2 class=xl10017095 style='border-left:none'>Dolor agudo en el ojo
  </td>
  <td colspan=2 align=right style='border-top:none;border-left:none'>

         <select class="form-control" name="Sint_1_reti" id="Sint_1_reti">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_1_reti ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>
  </td>
 </tr>
 <tr style='mso-height-source:userset;height:21.75pt'>
  <td colspan=2  style='height:21.75pt;border-left:
  none'>Perdida de la visión </td>
  <td colspan=2 align=right style='border-top:none;border-left:none'>
    
        <select class="form-control" name="Sint_2_reti" id="Sint_2_reti">
                <option value="0">0 = No</option>
                <option value="1" {{ (isset($data) && $data->Sint_2_reti ==1) ? 'selected' : '' }}>1 = Si</option>
         </select>

  </td>
 </tr>

 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl6317095 colspan=8 style='height:20.1pt'>
    Observaciones<font class="font1217095">85 </font>

      
           <input id="Obs_entre_seg" type="text" class="form-control" name="Obs_entre_seg" value='{{(isset($data))  ? $data->Obs_entre_seg  : old("Obs_entre_seg") }}' >
                                           
          @if ($errors->has('Obs_entre_seg'))
              <span class="help-block">
                  <strong>{{ $errors->first('Obs_entre_seg') }}</strong>
              </span>
          @endif  


</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=73 style='width:55pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=119 style='width:89pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=121 style='width:91pt'></td>
  <td width=73 style='width:55pt'></td>
  <td width=93 style='width:70pt'></td>
  <td width=29 style='width:22pt'></td>
 </tr>
 
</table>

</div>

                                <button type="submit" id='btnsummit' class="btn btn-primary btn-block mb-2">{{(!isset($data))  ? 'Registrar' : 'Guardar Cambios'}}</button>


@endsection

@push('scripts')

<script type="text/javascript">
    

$(document).ready(function(){

  var id = $("#patient_id").val();
    var fecha = $("#Fech_entrevSeg").val();
    patient(id,fecha);


  $("#patient_id").change(function(){
    var id = $("#patient_id").val();
    var fecha = $("#Fech_entrevSeg").val();
    patient(id,fecha);
 }); 


   $('.numero').mask("9999",);
   $('.decimal').mask("999.99",{reverse: true});

}); 


function patient(value,fecha){

   let url = '/api/list/patient/'+value+'/'+fecha;
                      axios.get(url).then(response => {
                          $("#nombre").val(response.data.first_name+' '+response.data.last_name);
                         $("#cedula").val(response.data.cedula);
                         $("#date_birth").val(response.data.date_birth);
                         
                   
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        console.error(error.response);
                      });
}


</script>

@endpush


