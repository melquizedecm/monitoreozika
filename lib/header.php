<?php
class header{

function getHeader() {
?>
<header>
  <nav class="nav navbar-itsp navbar-static-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Servicios de Mantenimiento del ITSP</a>
      
    </div>

    <!--  Formulario de Busqueda -->
<!--    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">Buscar</button>
    </form>-->

    <!-- Menú de Usuario -->
    
    <ul class="nav navbar-itsp navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['session_nombre']; ?><b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
<!--          <li><a href="#">Perfil</a></li>
          <li><a href="#">Acción #2</a></li>
          <li><a href="#">Acción #3</a></li>-->
          <li class="divider"></li>
          <li><a href="logout.php">Cerrar Sesión</a></li>
          <!--<li><a href="index.php"<img src="../img/home.png" height="10" width="10"></a></li>-->
        </ul>
      </li>
    </ul>
    <a href="index.php" class="navbar-right"><img  src="../img/home.png" height="40" width="40"></a>
  </div>
</nav>

<ul class="breadcrumb">
  <li><a align="center" href="index.php">Inicio</a></li>
</ul>

    </header>
  <?php
  }
}
