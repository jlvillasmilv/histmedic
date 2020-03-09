{!! Form::model(compact('search'),['route'=>'format_zung.index','method' => 'GET','role'=>'search']) !!}
		
	<div class="form-group navbar-form pull-right col-md-10 ">	        
		<input type="text" class="form-control" name="search" placeholder="Busqueda por Nombre" value="{{$search}}">
		<button type="submit" title="Busqueda" name='busca' value='B' class="btn btn-default " ><i class="fa fa-search" aria-hidden="true"></i></button>
		<button type="submit" title="Exportar" name='imp' value='E' class="btn btn-primary " ><i class="fa fa-file-excel-o" data-toggle="tooltip" data-placement="right" title="Export" ></i></button>
        </div>
{{Form::close()}}


  <form class="navbar-form navbar-left pull-left" role="search">
    <a href="{{ route('format_zung.create') }}" class="btn btn-primary btn-sm pull-left">Nuevo</a> 
  </form>
