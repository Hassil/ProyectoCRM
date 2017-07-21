@extends('master')

@section('contenido')
<form action="{{url('/guardarCliente')}}" method="POST" class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">


  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="apellido_paterno" class="col-lg-4 control-label">Apellido paterno</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido paterno">


        </div>
        </div>

        <div class="form-group">
      <label for="apellido_materno" class="col-lg-4 control-label">Apellido materno</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido materno">
      </div>
    </div>
    <div class="form-group">
      <label for="edad" class="col-lg-4 control-label">Edad</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="edad" placeholder="Edad">
        </div>
       </div>

      <div class="form-group">
      <label for="fecha_nacimiento" class="col-lg-4 control-label">Fecha de nacimiento</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
      </div>
    </div>

            <div class="form-group">
      <label for="correo" class="col-lg-4 control-label">Correo</label>
      <div class="col-lg-6">
        <input type="email" class="form-control" name="correo" placeholder="Correo">
      </div>
    </div>

    <div class="form-group">

      <label for="color_favorito" class="col-lg-4 control-label">Color favorito</label>
      <div class="col-lg-6">
       <select name="color_favorito" class="form-control">
    <option value="ninguno">Selecciona color favorito</option>
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

  </select>
      </div>

    </div>

    <div class="form-group">
      <label for="ocupacion" class="col-lg-4 control-label">Ocupacion</label>
      <div class="col-lg-6">
<select name="ocupacion" class="form-control">
    <option value="ninguno">Selecciona ocupacion</option>
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

  </select>     
   </div>
    </div>
 
    <div  class="col-md-12 text-center" >
		<button type="submit"  class="btn btn-primary">Registrar</button>
		
	
	</div>






         </fieldset>
</form>




@stop
