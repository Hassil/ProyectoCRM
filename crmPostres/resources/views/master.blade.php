<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Administración de Proyectos</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">




      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/administrador')}}">Administrador</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/registrarClientes')}}">Registrate</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      @yield('contenido')
    </div>
  </div>
</div>

<footer class="text-center">
    <hr>
    Negocios Electrónicos &copy; 2017
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>