
<form method="GET" action="{!! isset($search) ? $search : '/' !!}" role="search">
		
	<div class="form-group navbar-form pull-right">	         
		<input type="text" class="form-control" name="search" placeholder="Busqueda por Nombre" value="{{$txt_search}}">
		<button type="submit" name='busca' value='B' class="btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i></button>
		<button type="submit" title="Exportar" name='imp' value='E' class="btn btn-success " ><i class="fa fa-file-excel-o" data-toggle="tooltip" data-placement="right" title="Export" ></i></button>
        </div>
 </form>

  <form class="navbar-form navbar-left pull-left" role="search">
    <a href="{!! isset($create) ? $create : '/' !!}" class="btn btn-primary btn-sm pull-left">Nuevo</a> 
  </form>