<!doctype html>
<html lang="es-ve">
<head>
    <meta charset="utf-8">
    <title>Zung {{$zung->nombre}}</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" media="all" /> 

</head>
<body>

<table border="1">
    <tr >
    <td COLSPAN=3 style="text-align:center;background:black;color: white"><b>ESCALA DE ZUNG</b></td>
    </tr>
   <tr >
    <th style="width: 41%;vertical-align:middle;"> Nombre: {{$zung->nombre}}</th>
    <th style="width: 29%;vertical-align:middle;"> Fecha: {{date('d/m/Y', strtotime($zung->date_evaluation))}}</th>
    <th style="width: 29%;vertical-align:middle;"> No. Historia: {{$zung->hist_id}}</th>
    </tr>
    <tr >
    <th COLSPAN="3" align="justify"  style="height: 90px;"">{{$format->description}}</th>
    </tr>
</table >
<table border="1">
    <tr>
   
    <th COLSPAN="2" style="text-align:right;">Puntaje</th>

   </tr>
   <tbody>
     @foreach($zung_det as $det)
    <tr>
     <td style="text-align:left;vertical-align:middle;"><b>{{$det->num}}. {{$det->title}}</b> <p> {{ ($det->valor=='1_4' ? '[1] Casi nunca [2] Algunas veces [3] Buena parte del tiempo [4] Casi siempre': '[4] Casi nunca [3] Algunas veces [2] Buena parte del tiempo [1] Casi siempre') }}   </p></td>
    <td style="text-align:center;vertical-align:middle;">{{$det->value}}</td> 
    </tr>
    @endforeach
        <tr>
    <td  style="text-align:right;vertical-align:middle;"><b>Total</b> </td>
    <td  style="text-align:center;vertical-align:middle;"> <b> {{$zung->total}} </b> </td>
    </tr>
   </tbody>

    </table>
<div >
 
</body>



<style type="text/css">
 
 table {
    width: 100%;
    font-family: Arial, sans-serif;
    font-size: 14px;
}   

th,td {
   
    height: 30px;
    text-align: left;
}


</style>

</html>