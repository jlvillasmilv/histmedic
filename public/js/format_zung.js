
$(document).ready(function(){

 $("#guardar").hide();


contador= 1;
 
 var value =  $("#format_id").val();
 agregar_descripcion(value);
 patient_list();

 
 insertar_fila('detalle',value);

  $("#patient_id").change(function(){
    var patientid =  $("#patient_id").val();
    var fecha = $("#date_evaluation").val();
    patient(patientid,fecha);
   
 }); 

 $("#format_id").change(function(){
    var value =  $("#format_id").val();

 agregar_detalle(value);
 agregar_descripcion(value);

 }); 


}); 


  var cont=0,total=0,total_resp=0;


function agregar_descripcion(value){

$.ajax({
                    type: "GET",
                    url: '/api/format_descrip/'+value,
                    datatype: 'JSON',
                   success: function (data) {
                     // $("#fila" + index).remove();
                     $("#description").val(data.description);

                    },
                    error: function (e) {
                      
                      swal("Error", "Error conexion...", "error");
                    }
                });
}

function patient_list(){

$.ajax({
                    type: "GET",
                    url: '/api/list/patients',
                    datatype: 'JSON',
                   success: function (data) {
                     $("#patient_id").empty();
                      $("#patient_id").append('<option value="null"> Seleccione un Paciente  </option>');

                    for (j in data) {
                     
                     $("#patient_id").append('<option value='+data[j].patient_id+'>'+data[j].hist_id+' '+data[j].cedula +' '+data[j].first_name+' '+data[j].last_name+'  </option>');
                     $('#patient_id').selectpicker('refresh');
                    }
                     

                    },
                    error: function (e) {
                      swal("Error", "Error conexion...", "error");
                    }
                });
}

function patient(value,fecha){

$.ajax({
                    type: "GET",
                    url: '/api/list/patient/'+value+'/'+fecha,
                    datatype: 'JSON',
                   success: function (data) {
                    console.log(data);
                     $("#nombre").val(data.first_name+' '+data.last_name);
                     $("#hist_id").val(data.hist_id);
                    },
                    error: function (e) {
                      console.log(e);
                      swal("Error", "Error conexion...", "error");
                    }
                });
}



function insertar_fila(tableID,value)
{

           $.ajax({
                   type: "GET",
                    url: '/api/format_det/'+value,
                    datatype: 'JSON',
                   success: function (data) {

                  for (j in data) {
               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               var row = table.insertRow(rowCount);
               row.id = "fila-"+cont;
               var cell1 = row.insertCell(0);
               var element1 = document.createElement("div");               
               element1.id = "tiporubro-"+cont;
               element1.innerHTML ='<input type="text" style="width: 10%" id="num"'+cont+' name="num[]" value="'+data[j].num+'" >';
               cell1.appendChild(element1);
               var cell2 = row.insertCell(1);
               var element2 = document.createElement("div");               
               element2.id = "tiporubro-"+cont;
               element2.innerHTML ='<div id="title_div" style="text-align:left;"><input type="hidden" name="title[]" value="'+data[j].title+'" >'+'<b>'+data[j].num+'. '+data[j].title  +'</b><p>'+ (data[j].value=="1_4" ? " <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",1);' required >[1] Casi nunca <input type='radio' id="+cont+" name="+cont+"  onclick='respuesta("+cont+",2);' required >[2] Algunas veces <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",3);' required >[3] Buena parte del tiempo <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",4);' required >[4] Casi siempre ": " <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",4);' required >[4] Casi nunca <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",3);' required >[3] Algunas veces <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",2);' required >[2] Buena parte del tiempo <input type='radio' id="+cont+" name="+cont+" onclick='respuesta("+cont+",1);' required >[1] Casi siempre" )+'</p></div>';
               cell2.appendChild(element2);
               var cell3 = row.insertCell(2);
               var element3 = document.createElement("div");               
               element3.id = "tiporubro-"+cont;
               element3.innerHTML ='<input type="hidden" style="width: 100%" name="valo[]" value="'+data[j].format_det_id+'" >';
               cell3.appendChild(element3);
               var cell4 = row.insertCell(3);
               var element4 = document.createElement("div");               
               element4.id = "tiporubro-"+cont;
               element4.innerHTML ='<div class="input-group">  <input class="quantity" type="text" readonly="readonly" class="form-control" style="width: 20%" id="valor'+cont+'""  name="valor[]" required> </div>';
               cell4.appendChild(element4);
                cont++;
                total=total+cont;
                    
                    }
                },
                    error: function (e) {
                      swal("Error", "Error conexion...", "error");
                    }
                });

}



 function evaluar() {
  if (total>=20 && total<=80) 
    { 
        $("#guardar").show();
     } 
     else
    { 
        $("#guardar").hide(); 
    } 

 }

function respuesta(index,valor)
{

    var totals = valor;
      $("#detalle input.quantity").each(function() {
        totals += +this.value;
      });
      $("#total").val(totals);
      $("#valor" + index).val(valor);
      total=totals;
       evaluar();
 

 }

function eliminar(index)
{ 
 total=total-1;
  $("#fila" + index).remove();
   evaluar();
} 

function numero(index)
{
  alert(index);
 }