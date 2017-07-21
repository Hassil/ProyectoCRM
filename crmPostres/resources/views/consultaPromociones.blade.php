@extends('master')
@section('contenido')

<table class="table table-striped">
<thead>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Fecha inicio</th>
    <th>Fecha fin</th>
   
  </tr>
</thead>
<tbody>
  @foreach($promociones as $p)
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->nombre}}</td>
    <td>{{$p->descripcion}}</td>
    <td>{{$p->fecha_inicio}}</td>
    <td>{{$p->fecha_fin}}</td>
     

    
 <td>
      
    <a href="{{url('/editarPromociones')}}/{{$p->id}}" class="btn btn-xs btn-primary">
   <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
    </a>  
    <a href="{{url('/eliminarPromociones')}}/{{$p->id}}" class="btn btn-xs btn-danger">
   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
      
  </tr>
    @endforeach
</tbody>
  

</table>


@stop