@extends('master')

@section('contenido')
<form action="{{url('/actualizarCliente')}}/{{$cliente->id}}" method="POST" class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">


  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$cliente->nombre}}">
      </div>
    </div>
    <div class="form-group">
      <label for="apellido_paterno" class="col-lg-4 control-label">Apellido paterno</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido paterno"  value="{{$cliente->apellido_paterno}}">


        </div>
        </div>

        <div class="form-group">
      <label for="apellido_materno" class="col-lg-4 control-label">Apellido materno</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido materno"  value="{{$cliente->apellido_materno}}">
      </div>
    </div>
    <div class="form-group">
      <label for="edad" class="col-lg-4 control-label">Edad</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="edad" placeholder="Edad" value="{{$cliente->edad}}">
        </div>
       </div>

      <div class="form-group">
      <label for="fecha_nacimiento" class="col-lg-4 control-label">Fecha de nacimiento</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de nacimiento" value="{{$cliente->fecha_nacimiento}}">
      </div>
    </div>

            <div class="form-group">
      <label for="correo" class="col-lg-4 control-label">Correo</label>
      <div class="col-lg-6">
        <input type="email" class="form-control" name="correo" placeholder="Correo" value="{{$cliente->correo}}">
      </div>
    </div>

    <div class="form-group">
      <label for="color_favorito" class="col-lg-4 control-label">Color favorito</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="color_favorito"  placeholder="Color favorito" value="{{$cliente->color_favorito}}">
      </div>
    </div>

    <div class="form-group">
      <label for="ocupacion" class="col-lg-4 control-label">Ocupacion</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="ocupacion" placeholder="Ocupacion" value="{{$cliente->ocupacion}}">
      </div>
    </div>
 
    <div  class="col-lg-12">
		<button type="submit" class="btn btn-primary">Actualizar</button>
		
	
	</div>






         </fieldset>
</form>




@stop
