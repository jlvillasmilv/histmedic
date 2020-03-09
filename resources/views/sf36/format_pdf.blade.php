<!doctype html>
<html lang="es-ve">
<head>
    <meta charset="utf-8">
   </head>
<body>

<center> PROYECTO CONICIT G-97000726 </center>
<center> ENTREVISTA ESTRUCTURADA PARA LA ADMINISTRACIÓN DE LA SF-36 </center>
<center>PERFIL DEL ESTADO DE SALUD </center>


<table >
   <tr style="border-bottom: 1px solid black">
    <td colspan="3" style="vertical-align:middle;"> Nombre: {{$sf36->SF_NombreApellido}} </td>
    <td style="vertical-align:middle;"> No. Historia: {{$sf36->hist_id}} </td>
    </tr>
     <tr>
    <td style="width:7%;vertical-align:middle;"> Sexo: {{$sf36->gender}} </td>
    <td style="width:7%;vertical-align:middle;"> Edad: {{$sf36->SF_Edad}} </td>
    <td style="width:26%;vertical-align:middle;"> Fecha de Hoy: {{date('m/d/Y', strtotime($sf36->datsf36))}} </td>
    <td style="width:50%;vertical-align:middle;"> Encuestador: {{$sf36->sf_encuestador}} </td>
    </tr>
</table>

<table border="1" >
 
    <tr>
     <th COLSPAN="7" align="justify" >Estas primeras preguntas  se refieren a su salud actual y a sus actividades diarias. Por favor conteste cada pregunta lo más exactamente posible.</th>
    </tr>
                           <tr>
                            <th rowspan="3" style="vertical-align:middle;"><b>01</b></th>
                            <td rowspan="3" style="width:40%; vertical-align:middle; ">En general, usted diría que su salud es...
                            </td>
                            
                            </tr>

                          <tr>
                            <th style="width:10%;vertical-align:middle;text-align: center;" >Excelente</th>
                            <th style="width:12%;vertical-align:middle;text-align: center;">Muy buena</th>
                            <th style="width:12%;vertical-align:middle;text-align: center;">Buena</th>
                            <th style="width:12%;vertical-align:middle;text-align: center;">Regular</th>
                            <th style="width:12%;vertical-align:middle;text-align: center;">Mala</th>
                            </tr>  

                          <tr style="vertical-align:middle;text-align: center;">

                            <th style="text-align: center;"> 1[{{ ($sf36->sf1==1) ? 'X' : ''}}] </th>
                            <th style="text-align: center;"> 2[{{ ($sf36->sf1==2) ? 'X' : ''}}]</th>
                            <th style="text-align: center;"> 3[{{ ($sf36->sf1==3) ? 'X' : ''}}]</th>
                            <th style="text-align: center;width:12%;"> 4[{{ ($sf36->sf1==4) ? 'X' : ''}}]</th>
                            <th style="text-align: center;width:12%"> 5 [{{ ($sf36->sf1==5) ? 'X' : ''}}]</th>

                          </tr>

                           <tr>
                           <td style="vertical-align:middle;"><b>02</b></td>
                            <td style="width:40%;  vertical-align:middle;">Comparando su salud con la de hace un año, ¿Cómo calificaría su salud en general ahora?</td>
                            <td colspan="5" style="text-align: left; vertical-align:middle;">
                              <p>
                               [{{ ($sf36->sf2==1) ? 'X' : ''}}] Mucho mejor ahora que hace un año
                              </p>
                              <p>
                               [{{ ($sf36->sf2==2) ? 'X' : ''}}] Un poco mejor ahora que hace un año
                              </p>

                              <p>
                               [{{ ($sf36->sf2==3) ? 'X' : ''}}] Igual que hace un año
                              </p>

                              <p> [{{ ($sf36->sf2==4) ? 'X' : ''}}] Un poco peor ahora que hace un año</p>

                              <p>
                                [{{ ($sf36->sf2==5) ? 'X' : ''}}] Mucho peor ahora que hace un año</td>
                              </p>
                          </tr>

                          <tr>
                            
                            <td colspan="7" style="text-align: justify; "><b> Ahora voy a leerte una lista de actividades que usted podría hacer durante un día normal. En la medida en que yo vaya leyéndolas, por favor dígame si su salud actual, lo limita un poco o,, para hacer estas actividades.</b></td>


                          </tr>

                           <tr>
                            <th colspan="2" style="text-align: center; vertical-align:middle;" ></th>
                            <th colspan="2" style="text-align: center; vertical-align:middle;" >Lo limita mucho</th>
                            <th colspan="2" style="text-align: center; vertical-align:middle;">Lo limita poco</th>
                            <th style="text-align: center; vertical-align:middle;">No Lo limita</th>
                           
                             </tr>

                           <tr>
                            
                          <td  style="vertical-align:middle;"><b>03</b></td>
                            <td style="width:40%;  vertical-align:middle;">En relación con la realización de actividades vigorosas, tales cornos correr, cargar objetos pesados, y participar en deportes fuertes, su salud actual...

                            Si la persona refiere que no realiza tales actividades, pregunte:

                            <p> <b> “Esto es debido a que su salud… </b></p>
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf3==1) ? 'X' : ''}}]                             </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                             [{{ ($sf36->sf3==2) ? 'X' : ''}}]                             </td>

                            <td style="text-align: center; vertical-align:middle;">3
                             [{{ ($sf36->sf3==3) ? 'X' : ''}}]           </td>

                            </tr>


                          <tr>
                            
                          <td style="vertical-align:middle;"><b>04</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">En cuanto a actividades moderadas, tales como mover una mesa, empujar una aspiradora, jugar bolas criollas, barrer, pasar coleto, su salud actual…10

                            Si la persona refiere que no realiza tales actividades, pregunte:

                            <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>
                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf4==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                               [{{ ($sf36->sf4==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf4==3) ? 'X' : ''}}]
                            </td>
                              
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>05</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Con relación a levantar o cargar las bolsas de las compras del mercado, su salud actual…
                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>


                            </td>
                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf5==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf5==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                               [{{ ($sf36->sf5==3) ? 'X' : ''}}]
                            </td>
                              
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>06</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para subir varios pisos por las escaleras su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf6==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf6==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf6==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>07</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para subir un piso por las escaleras su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf7==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                                [{{ ($sf36->sf7==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf7==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr> 

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>08</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para doblarse, arrodillarse o pararse, su salud  actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf8==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                               [{{ ($sf36->sf8==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                               [{{ ($sf36->sf8==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>

                       <tr>
                            
                          <td style="vertical-align:middle;"><b>09</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para caminar más de quince cuadras, su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf9==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                             [{{ ($sf36->sf9==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf9==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>


                         <tr>
                            
                          <td style="vertical-align:middle;"><b>10</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para caminar algunas cuadras, su salud actual...

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf10==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf10==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: left; vertical-align:middle;">3
                               [{{ ($sf36->sf10==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>11</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: left;">Para caminar una cuadra, su salud actual…

                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf11==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf11==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf11==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>12</b></td>
                            <td style="width:40%;  vertical-align:middle; text-align: center;">Para bañarse o vestirse por si solo, su salud actual…
                            <p>    
                            Si la persona refiere que no realiza tales actividades, pregunte:</p>
                  
                           <p> <b> “Esto es debido a que su salud… </b></p>

                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf12==1) ? 'X' : ''}}]
                            </td>

                            <td colspan="2" style="text-align: center; vertical-align:middle;">2
                             [{{ ($sf36->sf12==2) ? 'X' : ''}}]
                            </td>

                            <td style="text-align: center; vertical-align:middle;">3
                              [{{ ($sf36->sf12==3) ? 'X' : ''}}]
                            </td>  
                              
                          </tr>

                          <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes cuatro preguntas se refieren a su salud física y a sus actividades diarias.</b></td>
                          </tr>

                     

                        <tr>
                          <td colspan="5"></td>
                           <th colspan="1" style="text-align: center; vertical-align:middle;">SI </th>

                            <th colspan="1" style="text-align: center; vertical-align:middle;">NO </th>
    
                        </tr>

                         <tr>
                            
                          <td style="vertical-align:middle;"><b>13</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas tuvo que disminuir la cantidad de tiempo que le dedica a su trabajo u otras actividades por causa de su salud física?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf13==1) ? 'X' : ''}}]           </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf13==2) ? 'X' : ''}}]    </td>
    
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>14</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, logro hacer menos de lo que quería por causa de su salud física?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf14==1) ? 'X' : ''}}]</td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                             [{{ ($sf36->sf14==2) ? 'X' : ''}}]    </td>
    
                          </tr> 

                           <tr>
                            
                          <td style="vertical-align:middle;"><b>15</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: justify;">Durante las últimas 4 semanas, estuvo limitado en el tiempo en el tipo de trabajo o actividades que realizo por causa de su salud física?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf15==1) ? 'X' : ''}}]   </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf15==2) ? 'X' : ''}}]   </td>
    
                          </tr>

                          <tr>
                            
                          <td style="vertical-align:middle;"><b>16</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, tuvo dificultades realizando su trabajo u otras actividades, por causa de su salud física?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf16==1) ? 'X' : ''}}]   </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                               [{{ ($sf36->sf16==2) ? 'X' : ''}}]  </td>
    
                          </tr>

                           <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes siete preguntas se refieren a sus emociones y a sus actividades diarias.</b></td>
                          </tr>

                          <tr>             
                          <td style="vertical-align:middle;"><b>17</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, tuvo que disminuir la cantidad de tiempo que le dedico a su trabajo u otras actividades, a causa de sus problemas emocionales tales como sentirse deprimido o ansioso?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                               [{{ ($sf36->sf17==1) ? 'X' : ''}}]    </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf17==2) ? 'X' : ''}}]    </td>
    
                          </tr>

                           <tr>             
                          <td style="vertical-align:middle;"><b>18</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, logró hacer menos de lo que quería, por causa de sus problemas emocionales tales como sentirse deprimido o ansioso?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf18==1) ? 'X' : ''}}]  </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                              [{{ ($sf36->sf18==2) ? 'X' : ''}}]  </td>
    
                          </tr>

                          <tr>             
                          <td style="vertical-align:middle;"><b>19</b></td>
                            <td colspan="4" style="width:40%;  vertical-align:middle; text-align: left;">Durante las últimas 4 semanas, no ha trabajado tan cuidadosamente como de costumbre, por causas de sus problemas emocionales tales como sentirse deprimido o ansioso?

                            </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">1
                              [{{ ($sf36->sf19==1) ? 'X' : ''}}]     </td>

                            <td colspan="1" style="text-align: center; vertical-align:middle;">2
                             [{{ ($sf36->sf19==2) ? 'X' : ''}}]     </td>
    
                          </tr>                       
                          

                        </table>
                        <table border="1" style="font-size: 12px">
                         <tr style="font-size: 12px">
                            <td style="width:2%;vertical-align:middle;"><b>20</b></td>
                            <td style="width:30%;  vertical-align:middle; "><b>Durante las últimas 4 semanas, ¿hasta qué punto han interferido su salud física o sus problemas emocionales con las actividades sociales que normalmente realiza con su familia, amigos, vecinos o grupos? Ha interferido...</b></td>
                            <td style="width:8%; vertical-align:middle; text-align: center;">[{{ ($sf36->sf20==1) ? 'X' : ''}}] En nada</td>

                            <td style="width:10%; vertical-align:middle;text-align: center;">[{{ ($sf36->sf20==2) ? 'X' : ''}}] Ligeramente</td>

                            <td style="width:12%; vertical-align:middle; text-align: center;">[{{ ($sf36->sf20==3) ? 'X' : ''}}] Moderadamente</td>

                            <td style="width:8%; vertical-align:middle; text-align: center;">[{{ ($sf36->sf20==4) ? 'X' : ''}}] Bastante</td>

                            <td style="width:10%; vertical-align:middle; text-align: center;">[{{ ($sf36->sf20==5) ? 'X' : ''}}] Completamente</td>
                            
                            </tr>
                             </table>
                            <table border="1" style="font-size: 12px">
                             <tr>
                            <td style="vertical-align:middle;"><b>21</b></td>
                            <td style="width:40%;vertical-align:middle; ">Durante las últimas 4 semanas, cuánto dolor físico ha tenido?</td>
                            <td style="width:10%;vertical-align:middle; text-align: center;">[{{ ($sf36->sf21==1) ? 'X' : ''}}]Ningún dolor</td>

                            <td style="width:10%;vertical-align:middle; text-align: center;">[{{ ($sf36->sf21==2) ? 'X' : ''}}] Muy Poco</td>

                            <td style="width:10%;vertical-align:middle;  text-align: center;">[{{ ($sf36->sf21==3) ? 'X' : ''}}] Poco</td>

                             <td style="width:10%;vertical-align:middle; text-align: center;">[{{ ($sf36->sf21==4) ? 'X' : ''}}]Moderado</td>

                             <td style="width:10%;vertical-align:middle; text-align: center;">[{{ ($sf36->sf21==5) ? 'X' : ''}}]Severo</td>

                              <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf21==6) ? 'X' :''}}]Muy severo</td>
                            
                            </tr>

                        </table>

                        <table border="1" style="font-size: 12px">
                            <tr>
                            <td style="vertical-align:middle;"><b>22</b></td>
                            <td style="width:40%;  vertical-align:middle; ">Durante las últimas 4 semanas, cuanto interfirió el dolor con su trabajo normal (incluyendo tanto sus actividades laborales como de la casa). Interfirió.</td>
                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf22==1) ? 'X' : ''}}]En nada</td>

                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf22==2) ? 'X' : ''}}]Ligeramente</td>

                            <td style="vertical-align:middle;  text-align: center;">[{{ ($sf36->sf22==3) ? 'X' : ''}}]Moderadamente</td>

                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf22==4) ? 'X' : ''}}]Bastante</td>

                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf22==5) ? 'X' : ''}}]Completamente</td>
                            
                            </tr>

                             <tr>
                            <td style="vertical-align:middle;"><b>23</b></td>
                            <td style="vertical-align:middle; ">Durante las últimas 4 semanas, que parte del tiempo han interferido sus problemas físicos o emocionales con sus actividades sociales (como visitar a sus amigos, parientes, ¿entre otros)? Han interferido… </td>
                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf23==1) ? 'X' : ''}}] Siempre</td>

                            <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf23==2) ? 'X' : ''}}] Casi siempre</td>

                            <td style="vertical-align:middle;  text-align: center;">[{{ ($sf36->sf23==3) ? 'X' : ''}}] Pocas veces</td>

                             <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf23==4) ? 'X' : ''}}] Casi nunca</td>

                             <td style="vertical-align:middle; text-align: center;">[{{ ($sf36->sf23==5) ? 'X' : ''}}] Nunca</td>
                            
                            </tr>

                            <tr>                            
                            <td colspan="7" style="text-align: justify; "><b> Las siguientes preguntas se refieren a como se siente y como han estado sus cosas, durante las últimas cuatro semanas. En la medida en que yo vaya leyendo cada pregunta, por favor dígame la respuesta que mejor represente como se ha estado sintiendo usted, y si esto ha sido , Algunas veces, ,   o .</b></td>
                          </tr>

                            <tr>
                            <th colspan="2"></th>
                            <th style="  vertical-align:middle; text-align: center;"> Siempre</th>

                            <th style=" vertical-align:middle; text-align: center;"> Casi siempre</th>

                            <th  style=" vertical-align:middle;  text-align: center;"> Pocas veces</th>

                             <th style="vertical-align:middle; text-align: center;"> Casi nunca</th>

                             <th style="vertical-align:middle; text-align: center;"> Nunca</th>
                            
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>24</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido lleno de energía?</td>
                            <td style="vertical-align:middle; text-align: center;"> 1 [{{ ($sf36->sf24==1) ? 'X' : ''}}] </td>
                            <td style="vertical-align:middle; text-align: center;"> 2 [{{ ($sf36->sf24==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3 [{{ ($sf36->sf24==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4 [{{ ($sf36->sf24==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5 [{{ ($sf36->sf24==5) ? 'X' : ''}}]</td>
                            
                             </tr>

                           
                           

                            <tr>
                            <td style="vertical-align:middle;"><b>25</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido muy nervioso?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf25==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf25==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf25==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf25==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf25==5) ? 'X' : ''}}]</td>
                            
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>26</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido tan decaído que nada lo alegra?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf26==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf26==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf26==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf26==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf26==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>27</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido calmado o tranquilo?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf27==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf27==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf27==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf27==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf27==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>28</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, tuvo mucha energía?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf28==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf28==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf28==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf28==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf28==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>29</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se ha sentido desconsolado y triste?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf29==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf29==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf29==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf29==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf29==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>30</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se sintió agotado?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf30==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf30==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf30==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf30==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf30==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>31</b></td>
                            <td style="vertical-align:middle; ">¿Cuánto tiempo durante las últimas 4 semanas, se ha sentido feliz?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf31==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf31==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf31==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf31==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf31==5) ? 'X' : ''}}]</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>32</b></td>
                            <td style="vertical-align:middle; ">Cuanto tiempo durante las últimas 4 semanas, se sintió cansado?</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf32==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf32==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf32==3) ? 'X' : ''}}]</td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf32==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf32==5) ? 'X' : ''}}]</td>
                            </tr>

                             <tr>                            
                            <td colspan="7" style="text-align: justify; "><b>Las próximas preguntas son sobre asuntos relacionados con su saludo. Yo voy a leerle una lista de afirmaciones; después de cada una dígame si usted está Completamente de Acuerdo, Medianamente de Acuerdo, No sabe, Medianamente en Desacuerdo, o Completamente en Desacuerdo con la afirmación. Si usted no sabe, simplemente dígamelo</b></td>
                          </tr>

                          <tr>
                            <td colspan="2"></td>
                            <th style="vertical-align:middle; text-align: center;">Completamente de acuerdo</th>

                            <th style="vertical-align:middle; text-align: center;">Medianamente de acuerdo</th>

                            <th style="vertical-align:middle;  text-align: center;">No se</th>

                             <th style="vertical-align:middle; text-align: center;">Medianamente en desacuerdo</th>

                             <th style="vertical-align:middle; text-align: center;">Completamente en desacuerdo</td>
                            
                          </tr>


                          


                            <tr>
                            <td style="vertical-align:middle;"><b>33</b></td>
                            <td style="vertical-align:middle; ">Parece que me enfermo más fácilmente que otras personas. Usted está ...</td>
                             <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf33==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2 [{{ ($sf36->sf33==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf33==3) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf33==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf33==5) ? 'X' : ''}}] <</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>34</b></td>
                            <td style="vertical-align:middle; ">Estoy más saludable que cualquier otra persona que conozca. Usted está  ...</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf34==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf34==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf34==3) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf34==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf34==5) ? 'X' : ''}}] <</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>35</b></td>
                            <td style="vertical-align:middle; ">Espero que mi salud empeore. Usted está...</td>
                            <td style="vertical-align:middle; text-align: center;">1[{{ ($sf36->sf34==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2[{{ ($sf36->sf35==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf35==3) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf35==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf35==5) ? 'X' : ''}}] <</td>
                            </tr>

                            <tr>
                            <td style="vertical-align:middle;"><b>36</b></td>
                            <td style="vertical-align:middle; ">Mi salud es excelente. Usted está ...</td>
                            <td style="vertical-align:middle; text-align: center;">1 [{{ ($sf36->sf33==1) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle; text-align: center;">2 [{{ ($sf36->sf36==2) ? 'X' : ''}}] </td>

                            <td style="vertical-align:middle;  text-align: center;">3[{{ ($sf36->sf36==3) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">4[{{ ($sf36->sf36==4) ? 'X' : ''}}] </td>

                             <td style="vertical-align:middle; text-align: center;">5[{{ ($sf36->sf36==5) ? 'X' : ''}}] <</td>
                            </tr>

                        </table>
</body>


</html>

<style type="text/css">
 
 table {
    border-collapse: collapse;
    width: 100%;
    font-family: Arial, sans-serif;
    font-size: 10px;
}   

th,td {
   
    text-align: center;
}


</style>