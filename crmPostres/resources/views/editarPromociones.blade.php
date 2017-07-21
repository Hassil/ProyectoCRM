@extends('master')

@section('contenido')
<form action="{{url('/actualizarPromociones')}}/{{$promociones->id}}" method="POST"  class="form-horizontal">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="nombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$promociones->nombre}}">
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion" class="col-lg-4 control-label">Descripcion</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion" value="{{$promociones->descripcion}}">


        </div>
        </div>

        <div class="form-group">
      <label for="fecha_inicio" class="col-lg-4 control-label">Fecha inicio</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha inicio" value="{{$promociones->fecha_inicio}}">
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_fin" class="col-lg-4 control-label">Fecha fin</label>
      <div class="col-lg-6">
        <input type="date" class="form-control" name="fecha_fin" placeholder="Fecha fin" value="{{$promociones->fecha_fin}}">
        </div>
       </div>

     
 
    <div  class="col-lg-12">
		<button type="submit" class="btn btn-primary">Actualizar</button>
		
	
	</div>






         </fieldset>
</form>




@stop
