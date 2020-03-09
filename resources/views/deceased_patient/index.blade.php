@extends('layouts.main')
@section('title', 'Historia de Paciente Fallecido')

@section('content')
<div class="panel panel-primary">

    <div class="panel-heading"><a class="pull-right" href="{{ url('/') }}" ><i class="btn btn-default btn-xs fa fa-arrow-left" aria-hidden="true"></i></a>  <label>Historia de Paciente Fallecido</label></div>

                <div class="table-responsive">
  
                 @include('busqueda.index')

                  <table class="table table-striped table-hover">
                    <thead>
                          <tr>
                              <th>Hist ID</th>
                              <th>Nombre</th>
                              <th>Fecha muerte</th>
                              <th>Fecha Entrev</th>
                              <th>Fecha Registro</th>
                              <th>Registrado</th>
                              <th colspan="3"> Accion</th>                          
                          </tr>
                    </thead>  
                    <tbody>
                      @foreach ($data as $dat)
                      <tr>
                          <td>{{ $dat->hist_id }}</td>
                          <td>{{ $dat->name }}</td>
                          <td>{{ date('d/m/Y', strtotime($dat->fech_morte)) }}</td>
                          <td>{{ date('d/m/Y', strtotime($dat->fech_entrev)) }}</td>
                          <td>{{ date('d/m/Y', strtotime($dat->created_at)) }}</td>
                          <td>{{ $dat->user->name }}</td>
                          <td width="10px"><a class="btn btn-info btn-sm" href="{{route('deceased_patient.show', $dat->id)}}" role="button" target="_blank">
                                  <i class="fa fa-file-text" data-toggle="tooltip" data-placement="right" title="Imprime Resultado" ></i>
                              </a>
                          </td>
                          <td width="10px">
                             <a href="{{route('deceased_patient.edit', $dat->id)}}" class="btn btn-sm btn-primary">
                              <i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="right" title="Editar {{$dat->name}}"></i></a>
                          </td>
                          <td width="10px"> <a class="btn btn-danger btn-sm" onclick='delete_register("{{$dat->id}}")' role="button"><i class="fa fa-trash-o"></i></a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>

           </div>
           {!! $data->appends(Request::only(['search']))->render() !!}
  </div>
@endsection

@push('scripts')

<script type="text/javascript">

     function delete_register(id) {   

           swal({
                title: 'Desea eliminar este dato',
                type: 'question',
                showCancelButton: true,
                confirmButtonText: 'Si',
                cancelButtonText:'No',
                showLoaderOnConfirm: true,
                    preConfirm: () => {

                      var url = 'deceased_patient/' + id ;
                      axios.delete(url).then(response => {
                         toastr.success('La operacion fue realizada de manera exitosa', 'Hecho')
                         setTimeout(location.reload.bind(location), 1500)
                                
                      }).catch(error => {
                        toastr.error(error.response.data, 'Inconceivable!')
                        //this.errors = error.response.data
                      });

                    }
               });

     }

</script>

@endpush