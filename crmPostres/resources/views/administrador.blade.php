   @extends('master')
@section('contenido')

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Perfil <span class="sr-only">(current)</span></a></li>
            <li><a href="{{url('/registrarClientes')}}">Registrar Clientes</a></li>
            <li><a href="{{url('/consultarClientes')}}">Consultar Clientes</a></li>
            <li><a href="{{url('/registraPromociones')}}">Registrar Promociones</a></li>
             <li><a href="{{url('/consultaPromociones')}}">Consultar Promociones</a></li>
             <li><a href="{{url('/promociones')}}">Enviar promociones</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        @stop

        