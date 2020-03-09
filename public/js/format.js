
$(document).ready(function(){

 $("#guardar").hide();

 if ($("#idf").val()>0){

  agregar_detalle($("#idf").val());

 }
 

 $('#bt_add').click(function(){

    evaluar();
    agregar(); 
 }); 

 }); 

  var cont=0,total=0;

function agregar()
{
   
    num=$("#num").val();
    title=$("#title").val();
   
    valor=$("#valor").val();
//  document.cartap.nombret.value=(resp);
    if (num!="" && title!=""  && valor!="")
    {
       zu=cont+1;
     var fila='<tr class="selected" id="fila'+cont+'"> ';
         fila= fila+' <td ><button type="button" style="margin-bottom: 4px; margin-top: 4px" ';
         fila= fila+' class="btn btn-danger btn-sm fa fa-close" onclick="eliminar('+cont+');"> </button> </td>';
         fila= fila+' <td><input type="text" style="width: 20%" name="num[]" value="'+num+'" ></td>';
         fila= fila+' <td><input type="text" style="width: 95%" name="title[]" value="'+title+'" ></td> ';
         fila= fila+' <td><input type="hidden" style="width: 45%" name="variable[]" value="Zung_'+zu+'" ></td> ';
         fila= fila+' <td><input type="hidden" style="width: 25%" name="valores[]" value="'+valor+'"  >'+valor+' </td> </tr>';
         cont++;
         total=total+cont;
         evaluar();
         $("#detalle").append(fila); 
         $("#num").val(cont+1);

    }
    else
    {
       swal("Error", "Debe agregar Datos para continuar", "error");
    }

}

function agregar_detalle(value)
{

     $.ajax({
                  type: "GET",
                  url: '/api/format_det/'+value,
                  datatype: 'JSON',
                  success: function (data) {
                  
                    for (j in data) {
                     var fila='<tr class="selected" id="fila'+cont+'"> ';
                     fila= fila+' <td ><button type="button" style="margin-bottom: 4px; margin-top: 4px" ';
                     fila= fila+' class="btn btn-danger btn-sm fa fa-close" onclick="eliminar('+cont+');"> </button> </td>';
                     fila= fila+' <td><input type="hidden" style="width: 20%" name="num[]" value="'+data[j].num+'" >'+data[j].num+'</td>';
                     fila= fila+' <td style="text-align:left;"><input type="text" style="width: 95%" name="title[]" value="'+data[j].title+'"></td> ';
                     fila= fila+' <td><input type="hidden" style="width: 45%" name="variable[]" value="Zung_'+data[j].num+'" ></td> ';
                     fila= fila+' <td><input type="text" style="width: 25%" name="valores[]" value="'+data[j].value+'" ></td> ';
                     fila= fila+' </tr>';
                     cont++;
                     total=total+cont;
                     evaluar();
                     $("#detalle").append(fila); 
                      }

                    },
                    error: function (e) {
                       swal("Error", "Error conexion...", "error");
                     
                    }
                });

}


 function evaluar() {
  if (total>0) 
    { 
        $("#guardar").show();
     } 
     else
    { 
        $("#guardar").hide(); 
    } 

 }

function eliminar(index)
{ 
 total=total-1;
  $("#fila" + index).remove();
   evaluar();
} 