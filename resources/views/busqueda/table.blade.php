
<div class="panel panel-primary">

    <div class="panel-heading">

      <div class="form-group pull-right "> 
         <input type="hidden" id="tx" name="tx">
         <button type="button" id="xls" data-fname="{{$title}}" class="btn btn-success btn-sm" title="Exportar datos a formato XLSX" data-remote="{{ $export }}" ><i class="fa fa-file-excel-o"></i></button>

        <a class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="right" title="Nuevo Registro" href="{{ $create }}" ><i class=" fa fa-plus" aria-hidden="true"> </i></a>
         </div>
         <label> {{$title}} </label>

    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table id="table" class="table table-hover" style="font-size: 15px">
            <thead>
                <tr>
                    <th class="text-center">Hist ID</th>
                    <th class="text-center">Cedula  </th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Fecha estudio</th>
                    <th class="text-center">Fecha Reg.</th>
                    <th class="text-center">Registrado</th>
                    <th class="text-center">Accion</th>
                </tr>
            </thead>
        </table>
      </div>  
    </div>
</div>

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
                    "url":  '{{ $table }}',
                    "type": "get"
                    },
            columns: [
                {data: 'patient.hist_id', name: 'patient.hist_id'},
                {data: 'patient.cedula', name: 'patient.cedula'},
                {data: 'patient.first_name', name: 'patient.first_name'},
                {data: 'patient.last_name', name: 'patient.last_name'},
                {data: 'fecha', name: 'fecha'},
                {data: 'created_at', name: 'created_at'},
                {data: 'user.name', name: 'user.name', searchable: false},
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