@extends('master')
@section('contenido')

<table class="table table-striped">
<thead>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido paterno</th>
		<th>Apellido materno</th>
		<th>Edad</th>
		<th>Fecha nacimiento</th>
		<th>Correo</th>
		<th>Color favorito</th>
		<th>Ocupacion</th>
		<th>Opcion</th>
	</tr>
</thead>
<tbody>
	@foreach($clientes as $c)
	<tr>
		<td>{{$c->id}}</td>
		<td>{{$c->nombre}}</td>
		<td>{{$c->apellido_paterno}}</td>
		<td>{{$c->apellido_materno	}}</td>
		<td>{{$c->edad}}</td>
	    <td>{{$c->fecha_nacimiento}}</td>
	    <td>{{$c->correo}}</td>
	    <td>{{$c->color_favorito}}</td>
	    <td>{{$c->ocupacion}}</td>


		
 <td>
      
		<a href="{{url('/editarClientes')}}/{{$c->id}}" class="btn btn-xs btn-primary">
	 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</a>	
		<a href="{{url('/eliminarCliente')}}/{{$c->id}}" class="btn btn-xs btn-danger">
	 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>
			
	</tr>
    @endforeach
</tbody>
	

</table>


@stop