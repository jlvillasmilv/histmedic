$(document).ready(function () {
  window._token = $('meta[name="csrf-token"]').attr('content')
  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
  });

  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000
});

   $('#table').on('click', '.btn-delete[data-remote]', function (e) { 
            e.preventDefault();
            var url = $(this).data('remote');
            
            Swal.fire({
            title: 'Desea eliminar este registro',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText:'No',
            showLoaderOnConfirm: true,
                preConfirm: () => {

                      axios.delete(url).then(response => {

                        Toast.fire({
                          icon: 'success',
                          title: 'La operacion fue realizada de manera exitosa'
                        })
                        $('#table').DataTable().draw(false);
                      
                      }).catch(error => {
                        Toast.fire({
                          icon: 'error',
                          title: 'Error de Conexion'
                        })

                      
                        console.error(error.response.data)
                      });

                }
           });
            
        });

   /*Notificaciones si hay mensaje de confirmacion*/

   if (document.body.dataset.notification == ""){

        var type = document.body.dataset.notificationType;
        var types = ['info', 'warning', 'success', 'error'];

    // Check if `type` is in our `types` array, otherwise default to info.
        Toast.fire({ icon: types.indexOf(type) !== -1 ? type : 'info', title: JSON.parse(document.body.dataset.notificationMessage) });
    
    }


  $(document).on('click', '#xls', function(){

             var url = $(this).data('remote');
             let fileName = $(this).data('fname');
             let tx = $('#tx').val();

            Swal.fire({
            title: '¿Generar Reporte?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'No',
            showLoaderOnConfirm: true,
            preConfirm: function(result) {
                return new Promise(function(resolve, reject) {
                    if (result) {
                      axios({
                      method: 'POST',
                      url: url,
                      responseType: 'blob',
                      data: { tx:tx, fileName:fileName
                      }
                    }).then(response => {

                      const url = window.URL.createObjectURL(new Blob([response.data]));
                      const link = document.createElement('a');
                      document.body.appendChild(link);
                      link.href = url;
                      link.setAttribute("type", "hidden");
                      link.setAttribute('download', fileName+'.xlsx'); //or any other extension
                      link.click();

                      // //Create a Blob from the PDF Stream
                      // const file = new Blob([response.data], {type: 'application/pdf'});
                      // //Build a URL from the file
                      // const fileURL = URL.createObjectURL(file);
                      // //Open the URL on new Window
                      // window.open(fileURL, "_blank", "location=1,status=1,scrollbars,resizable,width=800, height=800");
                   
                       Toast.fire({
                          icon: 'success',
                          title: 'Generado con exito'
                        })
                       resolve();

                    }).catch(error => {
                        
                        Toast.fire({
                          icon: 'error',
                          title: 'Error de Conexion'
                        })
                        reject();
                     
                    });  

                    }
                });
            },
            allowOutsideClick: () => !this.$swal.isLoading(),
        })

                
    });




})
