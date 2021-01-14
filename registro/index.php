<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:login.php");
}
?>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="N.A Turismo"/>
    <title>N.A Turismo | Inicio</title>
    <link rel="stylesheet" href="./css/main.css"/>
</head>
<body>
  <header>
    <div class="contenedorHeader">
      <div class="marca">
        <h1><span class="resaltado">N.A Turismo</span> ¡Que comience el viaje!</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="services.php">Servicios</a></li>
          <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
          <li><a href="disconnect.php"> Cerrar Sesión </a></li>	
        </ul>
      </nav>
    </div>
  </header>

  <section class="cabecera">
    <h1>Vive la experiencia que siempre quisiste</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
  </section>

  <section class="cajas">
    <div class="contenedor">
      <div class="caja">
        <img src="img/avion.png" />
        <h3>Vuelos</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi
          augue, viverra sit amet ultricies
        </p>
      </div>
      <div class="caja">
        <img src="img/alpes.png" />
        <h3>Destino1</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi
          augue, viverra sit amet ultricies
        </p>
      </div>
      <div class="caja">
        <img src="img/playa.png" />
        <h3>Destino2</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi
          augue, viverra sit amet ultricies
        </p>
      </div>
    </div>
  </section>

  <footer>
    <p>N.A Turismo, Copyright &copy; 2020</p>
  </footer>
</body>
</html>