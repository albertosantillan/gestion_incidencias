<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action disabled">
    Menú
  </a>
       @If(auth()->check())
  <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
  <a href="#" class="list-group-item list-group-item-action">Ver Incidencias</a>
  <a href="#" class="list-group-item list-group-item-action">Reportar incidencias</a>
  <ul class="nav nav-pills">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route.usuarios}}">Usuarios</a>
      <a class="dropdown-item" href="#">Proyectos</a>
      <a class="dropdown-item" href="#">Configuración</a>
  </li>
</ul>
</div>
           @else
  <a href="#" class="list-group-item list-group-item-action">Bienvenido</a>
  <a href="#" class="list-group-item list-group-item-action">Instrucciones</a>
  <a href="#" class="list-group-item list-group-item-action">Créditos</a>
           @endif 
    </div>
</div>
