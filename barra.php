
<ul class="sidebar navbar-nav bg-danger" >
  <li class="nav-item active">
    <a class="nav-link" href="inicio.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Inicio   </span>
    </a>
  </li>
  <?php if ($_SESSION['ti'] == 1) {  ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span> Registrar</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Altas</h6>
        <a class="dropdown-item" data-toggle="modal" href="#escuelas">Escuelas</a>

        <a class="dropdown-item" data-toggle="modal" href="#maestros">Maestros</a>

        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-table"></i>
        <span> Tablas</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Ver</h6>
        <a class="dropdown-item"  href="tablas.php?id=escuela">Escuelas</a>
        <a class="dropdown-item"  href="tablas.php?id=alumnos">Alumnos</a>
        <a class="dropdown-item"  href="tablas.php?id=maestros">Maestros</a>


      </div>
    </li>
  <?php }else {  ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span> Registrar</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Altas</h6>

        <a class="dropdown-item" data-toggle="modal" href="#alumnos">Alumnos</a>





      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-table"></i>
        <span> Tablas</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Ver</h6>

        <a class="dropdown-item"  href="tablas.php?id=alumnos">Alumnos</a>



      </div>
    </li>

  <?php } ?>




</ul>
