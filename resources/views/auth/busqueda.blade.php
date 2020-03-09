	<form class="navbar-form navbar-left pull-left" role="search">
	  <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm pull-left">Nuevo</a> 
	</form>

	<form class="navbar-form navbar-left pull-right" role="search" method="GET" action="{{ route('user.index') }}">
 		<div class="form-group">
		<input type="text" class="form-control" name="search" placeholder="Busqueda ingrese Nombre">
 		</div>

 		<button type="submit" class="btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i></button>

	</form>
