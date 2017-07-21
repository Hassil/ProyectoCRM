@extends('master')

@section('contenido')
<form action="{{url('/buscarClientes')}}" method="GET">

 <table class="table table-striped">
<thead>
  <tr>
    <th>Edad</th>
    <th>Ocupacion</th>
    <th>Color Favorito</th>
    <th>Accion</th>
   
  </tr>
  <tr>
   <th> <input type="text" class="form-control" name="edad" placeholder="Edad" value="0"></th>

   <th> <select name="ocupacion" class="form-control">
		<option value="%">Selecciona ocupacion</option>
		<option  value="Ingeniero">Ingeniero</option>
		<option  value="Doctor">Doctor</option>
		<option  value="Ama de casa">Ama de casa</option>
		<option  value="Estudiante">Estudiante</option>
		<option  value="Policia">Policia</option>
		<option  value="Maestro">Maestro</option>
		<option  value="Abogado">Abogado</option>
		<option  value="Contador">Contador</option>
		<option  value="Bombero">Bombero</option>
		<option  value="Otro">Otro</option>

	</select></th>


   <th> <select name="color_favorito" class="form-control">
		<option value="%">Selecciona color favorito</option>
		<option  value="rosa">Rosa</option>
		<option  value="Lila">Lila</option>
		<option  value="Rojo">Rojo</option>
		<option  value="Verde">Verde</option>
		<option  value="Azul">Azul</option>
		<option  value="Blanco">Blanco</option>
		<option  value="Negro">Negro</option>
		<option  value="Aguamarina">Aguamarina</option>
		<option  value="Amarillo">Amarillo</option>
		<option  value="Gris">Gris</option>

	</select></th>
 
  

 
  
   <th><button  name="btn" type="submit"  class="btn btn-primary">Buscar</button></th>
  </tr>
</thead>
</table>
</form>


@isset($lista)


<form  action="{{url('/enviarPromociones')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
<table class="table table-striped">
	
<thead>
	<tr>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Correo</th>
        <th>Ocupacion</th>
        <th>Mes</th>
        <th>Color Favorito</th>
	</tr>
</thead>
<tbody>
  @foreach($lista as $l)
  <input type="hidden" name="id[]" value="{{$l->correo}}">
  <tr>

    <th>{{$l->nombre}}</th>
    <td>{{$l->edad}}</td>
    <th >{{$l->correo}}</th>
    <td>{{$l->ocupacion}}</td>
    <td>{{$l->fecha_nacimiento}}</td>
    <td>{{$l->color_favorito}}</td>

    
     </tr>

     
     @endforeach
     </tbody>
     @endisset

     @empty($records)
   
     @endempty
</table>
<div class="form-group">
	<label for="encargados">Promocion</label>
		<select name="promocion" class="form-control">
			@foreach($promos as $a)
				<option value="{{$a->id}}">{{$a->nombre}}</option>
			@endforeach
		</select>
	</div>


<div>
	<button  name="btn" type="submit"  class="btn btn-primary">Enviar</button>
</div>
</form>


@stop