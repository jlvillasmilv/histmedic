<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
  {font-family:Calibri;
  panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {margin-top:0cm;
  margin-right:0cm;
  margin-bottom:8.0pt;
  margin-left:0cm;
  line-height:107%;
  font-size:11.0pt;
  font-family:"Calibri","sans-serif";}
.MsoChpDefault
  {font-family:"Calibri","sans-serif";}
.MsoPapDefault
  {margin-bottom:8.0pt;
  line-height:107%;}
@page WordSection1
  {size:612.0pt 792.0pt;
  margin:21.3pt 50.4pt 21.3pt 50.4pt;}
div.WordSection1
  {page:WordSection1;}
-->
</style>

</head>

<body >

<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
text-indent:36.0pt;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>UNIVERSIDAD
DEL ZULIA</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>CENTRO DE
ENFERMADES CARDIOVASCULARES</span></b></p>

<p class=MsoNormal align=center style='margin-bottom:2.0pt;text-align:center;
line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>TMT</span></b></p>


<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:-22.75pt;border-collapse:collapse;border:none'>
 <tr >
  <td valign=top style='border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1er
  Nombre          </span>
  {{$data->first_name}}
</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2do
  Nombre     </span>

   {{$data->second_name}}


</p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>1er
  Apellido     </span>
   {{$data->last_name}}</p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>2do
  Apellido     </span>

   {{$data->second_last_name}}
</p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Sexo  
  </span>{{$data->Sexo_TMT}}
</p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Edad  
  </span>
  {{$data->Edad_TMT}}

</p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Numero
  de Historia   </span>{{$data->Hist_ID}}
</p>
  </td>
 </tr>
 <tr >
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Cedula                 
  </span>{{$data->Cedula_TMT}}
</p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td colspan=2 valign=top style='border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Día
  de realización del estudio           </span> {{date('m/d/Y', strtotime($data->Fecha_TMT))}}
</p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
</table>
<br>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:58.25pt;border-collapse:collapse;border:none'>
 <tr style='height:10.8pt'>
  <td style='border:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Medicamento</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Dosis</span></b></p>
  </td>
  <td style='border:solid windowtext 1.0pt;border-left:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Tiempo de Ultima Toma</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Medicamento1_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Dosis1_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TiempoUl1_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Medicamento2_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Dosis2_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TiempoUl2_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Medicamento3_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Dosis3_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TiempoUl3_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td valign=top style='border:solid windowtext 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Medicamento4_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Dosis4_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TiempoUl4_TMT}}
</span></b></p>
  </td>
 </tr>
</table>

<br>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:10.8pt'>
  <td valign=top style='border:solid windowtext 1.0pt;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>FC
  100%</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->FC100_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>FC
  85%</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->FC85_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>FC
  75%</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->FC75_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Bruce</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Bruce_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Naugthon</span></b></p>
  </td>
  <td valign=top style='border:solid windowtext 1.0pt;border-left:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Naugthon_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Otro</span></b></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Otro_TMT}}
</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
 </tr>
</table>

<br>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none'>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width="9%" colspan=2 style='width:9.24%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>PA</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Sistólica</span></b></p>
  </td>
  <td width="10%" colspan=2 style='width:10.82%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>PA</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Diastólica</span></b></p>
  </td>
  <td width="11%" colspan=2 style='width:11.34%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Frecuencia</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Cardiaca</span></b></p>
  </td>
  <td width="14%" colspan=2 style='width:14.54%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Infradesnivel</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>ST-T </span></b><b><span style='font-size:
  7.0pt;font-family:"Arial","sans-serif"'>&gt;1mV+0.08</span></b></p>
  </td>
  <td width="11%" colspan=2 style='width:11.82%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Angor</span></b></p>
  </td>
  <td width="13%" colspan=2 style='width:13.04%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Arritmias</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Ventriculares</span></b></p>
  </td>
  <td width="13%" colspan=2 style='width:13.52%;border:solid windowtext 1.0pt;
  border-left:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Arritmias</span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Supravent</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Reposo</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>05</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>19</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>33</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>47</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>61</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>75</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>89</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->RepArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Calentamiento</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>06</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>20</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>34</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>48</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>62</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>76</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>90</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->CalArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estadio
  I</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>07</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>21</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>35</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>49</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>63</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>77</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>91</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estadio
  II</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>08</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>22</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>36</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>50</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>64</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>78</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>92</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estadio
  III</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>09</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>23</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>37</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>51</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>65</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>79</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>93</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIIIArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estadio
  IV</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>10</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>24</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>38</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>52</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>66</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>80</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>94</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaIVArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Estadio
  V</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>11</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVPAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>25</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVPAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>39</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVFC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>53</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVInfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>67</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVAngor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>81</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>95</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->EstaVArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  1</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>12</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>26</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>40</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>54</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>68</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>82</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>96</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup1ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  2</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>13</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>27</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>41</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>55</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>69</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>83</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>97</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup2ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  3</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>14</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>28</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>42</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>56</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>70</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>84</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>98</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup3ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  4</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>15</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>29</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>43</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>57</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>71</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>85</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>99</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup4ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  8</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>16</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>30</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>44</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>58</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>72</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>86</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>100</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup8ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td width="15%" style='width:15.66%;border:solid windowtext 1.0pt;border-top:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Recuperación
  10</span></b></p>
  </td>
  <td width="4%" style='width:4.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>18</span></p>
  </td>
  <td width="5%" style='width:5.24%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10PAS_TMT}}
</span></b></p>
  </td>
  <td width="3%" style='width:3.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>32</span></p>
  </td>
  <td width="6%" style='width:6.86%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10PAD_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>46</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10FC_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.96%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>60</span></p>
  </td>
  <td width="9%" style='width:9.6%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10InfSTT_TMT}}
</span></b></p>
  </td>
  <td width="5%" style='width:5.38%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>74</span></p>
  </td>
  <td width="6%" style='width:6.44%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10Angor_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.04%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>88</span></p>
  </td>
  <td width="9%" style='width:9.0%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10ArritVent_TMT}}
</span></b></p>
  </td>
  <td width="4%" style='width:4.9%;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>101</span></p>
  </td>
  <td width="8%" style='width:8.62%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-family:"Arial","sans-serif"'>{{$data->Recup10ArritSupV_TMT}}
</span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif"'>                    </span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:89.75pt;border-collapse:collapse;border:none'>
 <tr style='height:10.8pt'>
  <td colspan=4 style='border:solid windowtext 1.0pt;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Arritmias Ventriculares</span></b></p>
  </td>
  <td colspan=5 style='border:solid windowtext 1.0pt;border-left:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Razón para Detener</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Monomorficas</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>102</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_Mono_TMT}}
</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Solicitud
  del Pac.</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>108</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->RazonDet_SolPac_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Polimorficas</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>103</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_Polimo_TMT}}
</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Arritmias</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>109</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->RazonDet_Arrit_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:15.9pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Bigeminadas</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>104</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_Bige_TMT}}
</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:15.9pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>HTA</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>110</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:15.9pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->RazonDet_HTA_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Pareadas</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>105</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_Pareadas_TMT}}
</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Isquemia</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>111</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->RazonDet_Isq_TMT}}
</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>R/T</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>106</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_RT_TMT}}</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&gt;85%
  FC max.</span></b></p>
  </td>
  <td colspan=2 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>112</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->RazonDet_85FCmax_TMT}}</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>TV</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>107</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->ArritVent_TV_TMT}}</span></b></p>
  </td>
  <td colspan=2 valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td colspan=2 valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=2 style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td colspan=2 valign=top style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></b></p>
  </td>
  <td colspan=2 valign=top style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td valign=top style='border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td colspan=3 style='border:solid windowtext 1.0pt;border-top:none;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>ISQUEMIA</span></b></p>
  </td>
  <td colspan=3 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>ARRITMIA</span></b></p>
  </td>
  <td colspan=3 style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>HTA</span></b></p>
  </td>
 </tr>
 <tr style='height:10.8pt'>
  <td style='border:solid windowtext 1.0pt;border-top:none;background:#D9D9D9;
  padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Positivo</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>113</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Isquemia_TMT}}</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Positivo</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>114</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->Arritmia_TMT}}</span></b></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Positivo</span></p>
  </td>
  <td style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>115</span></p>
  </td>
  <td valign=top style='border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;
  border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:10.8pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->HTA_TMT}}</span></b></p>
  </td>

</table>

<br>
<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='margin-left:143.75pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=150 valign=top style='width:112.5pt;border:solid windowtext 1.0pt;
  background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>METS ALCANZADOS</span></b></p>
  </td>
  <td width=42 valign=top style='width:31.5pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>116</span></p>
  </td>
  <td width=42 valign=top style='width:31.5pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=right style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:right;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->MetsAlc_TMT}}</span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%;font-family:
"Arial","sans-serif"'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=170 style='width:127.65pt;border:solid windowtext 1.0pt;background:
  #D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Tratamiento Indicado</span></b></p>
  </td>
  <td width=170 style='width:127.65pt;border:solid windowtext 1.0pt;border-left:
  none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>Dosis</span></b></p>
  </td>
  <td width=49 valign=top style='width:36.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=291 valign=top style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Firma:
  ____________________________</span></p>
  </td>
 </tr>
 <tr>
  <td width=170 valign=top style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TtoInd1}}</span></b></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->DosisTtoind1_TMT}}</span></b></p>
  </td>
  <td width=49 valign=top style='width:36.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=291 valign=top style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=170 valign=top style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TtoInd2}}</span></b></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->DosisTtoind2_TMT}}</span></b></p>
  </td>
  <td width=49 valign=top style='width:36.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=291 valign=top style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Doctor: {{$data->Doctor_TMT}}
</span></p>
  </td>
 </tr>
 <tr style='height:13.1pt'>
  <td width=170 valign=top style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TtoInd3}}</span></b></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->DosisTtoind3_TMT}}</span></b></p>
  </td>
  <td width=49 valign=top style='width:36.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=291 valign=top style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.1pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=170 valign=top style='width:127.65pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->TtoInd4}}</span></b></p>
  </td>
  <td width=170 valign=top style='width:127.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:8.0pt;
  font-family:"Arial","sans-serif"'>{{$data->DosisTtoind4_TMT}}</span></b></p>
  </td>
  <td width=49 valign=top style='width:36.95pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>&nbsp;</span></p>
  </td>
  <td width=291 valign=top style='width:218.45pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt;font-family:"Arial","sans-serif"'>Fecha:</span> {{date('m/d/Y', strtotime($data->Fecha_TMT2))}}
</p>
  </td>
 </tr>
</table>


</div>

</body>

</html>
