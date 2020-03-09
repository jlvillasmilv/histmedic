@extends('layouts.main')
@section('title', 'Listado de Usuarios')

@section('content')

    <div class="panel panel-primary">

        <div class="panel-heading">

            <a class="pull-right" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('user.create') }}" ><i class="btn btn-default fa fa-plus" aria-hidden="true"> Nuevo</i></a>

            <label>Listado de Usuarios </label>
        </div>

        <div class="table-responsive">
  
            <table id="table" class="table table-striped ">

                <thead>
                    <tr>
                        <th class="text-center">Usuario</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Accion</th>
                    </tr>
                </thead>
            </table>

                </div>
    
            </div>
   
@endsection

@push('scripts')
<script>

  
  $(document).ready(function() {

    $('#table').DataTable({
            language: {
                "url": "{{asset('js/DataTables/Spanish.json')}}"
            },
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                    "url":  '{{ action("UserController@table") }}',
                    "type": "get"
                    },
            columns: [
                {data: 'user_name', name: 'user_name'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
                
            ]
           
        });
      
} );


</script>



@endpush