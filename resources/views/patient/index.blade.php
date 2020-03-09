@extends('layouts.main')
@section('title', 'Listado de pacientos')

@section('content')
 
<div class="panel panel-primary">

    <div class="panel-heading ">

      <div class="form-group pull-right "> 
         <input type="hidden" id="tx" name="tx">
         <button type="button" id="xls" data-fileName="Patient" class="btn btn-success btn-sm" title="Exportar datos a formato XLSX" data-remote="{{ route('export_xls') }}" ><i class="fa fa-file-excel-o"></i></button>

        <a class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ route('pacient.create') }}" ><i class=" fa fa-plus" aria-hidden="true"> </i></a>
         </div>
         <label> Listado de pacientes</label>

    </div>

        <table id="table" class="table table-striped " style="font-size: 15px">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Hist ID</th>
                    <th class="text-center">Cedula  </th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Fecha Reg.</th>
                    <th class="text-center">Accion</th>
                </tr>
            </thead>
        </table>
           
</div>
   
@endsection

@push('scripts')

<script>
  
  $(document).ready(function() {
    $('#table').DataTable({
           language: {
                    url: "{{asset('js/DataTables/Spanish.json')}}"
                },
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                    "url":  '{{ route("patient_table") }}',
                    "type": "get"
                    },
            columns: [
                {data: 'hist_id', name: 'hist_id'},
                {data: 'cedula', name: 'cedula'},
                {data: 'first_name', name: 'first_name'},
                {data: 'last_name', name: 'last_name'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        }).on('search.dt', function() {
              var input = $('.dataTables_filter input')[0];
                 $('#tx').val(input.value);
              //console.log(input.value)
        });


} );
        
</script>

@endpush